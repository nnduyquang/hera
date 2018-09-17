<?php

namespace App\Repositories\Backend\Post;

use App\CategoryItem;
use App\Product;
use App\Repositories\EloquentRepository;
use App\Seo;
use Illuminate\Support\Facades\Auth;

class PostRepository extends EloquentRepository implements PostRepositoryInterface
{
    public function getModel()
    {
        return \App\Post::class;
    }

    public function getAllPostByTypeOrderById($type)
    {
        $data = [];
        switch ($type) {
            case'library':
                $data['posts']=CategoryItem::where('id', 7)->first()->posts()->where('isActive', ACTIVE)->get();
                $data['view']='backend.admin.library.index';
                return $data;
                break;
            case'service':
                $data['posts']=CategoryItem::where('id', 6)->first()->posts()->where('isActive', ACTIVE)->get();
                $data['view']='backend.admin.service.index';
                return $data;
                break;
            default:
                break;
        }
        return $this->_model::where('post_type', '=', IS_POST)->orderBy('id', 'DESC')->get();
    }

    public function showCreatePost($type)
    {
        $data = [];
        switch ($type) {
            case'library':
                $data['view']='backend.admin.library.create';
                return $data;
                break;
            case'service':
                return $data;
                break;
        }
//        $data = [];
//        $category = new CategoryItem();
//        $product = new Product();
//        $dd_categorie_posts = $category->getArrayCategory('create');
//        $data['dd_categorie_posts'] = $dd_categorie_posts;
//        $products = $product->getAllProductActiveOrderById();
//        $data['products'] = $products;

        return $data;
    }

    public function showEditPost($id,$type)
    {
        $data = [];
        $category = new CategoryItem();
        $product = new Product();
        $dd_categorie_posts = $category->getArrayCategory('edit');
        $data['dd_categorie_posts'] = $dd_categorie_posts;
        $products = $product->getAllProductActiveOrderById();
        $data['products'] = $products;
        $post = $this->find($id);
        $data['post'] = $post;
        return $data;
    }


    public function createNewPostWithSeoId($request,$type)
    {
        $data=[];
        $seo = Seo::create($request->all());
        if (!$request->has('isActive'))
            $request->request->add(['isActive' => null]);
        $request->request->add(['seo_id' => $seo->id]);
        $request->request->add(['post_type' => IS_POST]);
        $request->request->add(['path' => '']);
        $request->request->add(['user_id' => Auth::user()->id]);
        switch ($type) {
            case'library':
                $parameters = $this->_model->prepareParameters($request);
                $result = $this->create($parameters->all());
                $result->categoryitems()->attach(7);
                $data['view']='backend.admin.library.index';
                return $data;
                break;
            case'service':
                return $data;
                break;
        }
        return true;
    }

    public function updateNewPost($request, $id)
    {
        if (!$request->has('isActive'))
            $request->request->add(['isActive' => null]);
        $request->request->add(['path' => '']);
        $post = $this->update($id, $request->all());
        $post->categoryitems()->sync($request->input('list_category_id'));
        $post->seos->update($request->all());
        return true;
    }

    public function deletePost($id)
    {
        $this->delete($id);
        return true;
    }


}