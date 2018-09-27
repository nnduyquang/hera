<?php

namespace App\Repositories\Backend\Post;

use App\CategoryItem;
use App\Product;
use App\Repositories\EloquentRepository;
use App\Seo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
                $data['posts'] = CategoryItem::where('id', 7)->first()->posts()->get();
                break;
            case'service':
                $data['posts'] = CategoryItem::where('id', 6)->first()->posts()->get();
                break;
            case'setmenu':
                $data['posts'] = CategoryItem::where('id', 8)->first()->posts()->get();
                break;
            case'favor':
                $data['posts'] = CategoryItem::where('id', 9)->first()->posts()->get();
                break;
            case'news':
                $data['posts'] = CategoryItem::where('id', 10)->first()->posts()->get();
                break;
            default:
                break;
        }
        $data['view'] = 'backend.admin.' . $type . '.index';
        return $data;
//        return $this->_model::where('post_type', '=', IS_POST)->orderBy('id', 'DESC')->get();
    }

    public function showCreatePost($type)
    {
        $data = [];
        $data['view'] = 'backend.admin.' . $type . '.create';
        return $data;
    }

    public function showEditPost($id, $type)
    {
        $data = [];
        $data['post'] = $this->find($id);
        $data['view'] = 'backend.admin.' . $type . '.edit';
        return $data;
    }


    public function createNewPostWithSeoId($request, $type)
    {
        $data = [];
        $seo = Seo::create($request->all());
        if (!$request->has('isActive'))
            $request->request->add(['isActive' => null]);
        $request->request->add(['seo_id' => $seo->id]);
        $request->request->add(['post_type' => IS_POST]);
        $request->request->add(['path' => '']);
        $request->request->add(['user_id' => Auth::user()->id]);
        $parameters = $this->_model->prepareParameters($request);
        $result = $this->create($parameters->all());
        switch ($type) {
            case'library':
                $result->categoryitems()->attach(7);
                break;
            case'service':
                $result->categoryitems()->attach(6);
                break;
            case'setmenu':
                $result->categoryitems()->attach(8);
                break;
            case'favor':
                $result->categoryitems()->attach(9);
                break;
            case'news':
                $result->categoryitems()->attach(10);
                break;
        }
        $data['view'] = $type . '.index';
        return $data;
    }

    public function updatePost($request, $id, $type)
    {

        $data = [];
        if (!$request->has('isActive'))
            $request->request->add(['isActive' => null]);
        $request->request->add(['path' => '']);
        $parameters = $this->_model->prepareParameters($request);
        $result = $this->update($id, $parameters->all());
        $result->seos->update($parameters->all());
        switch ($type) {
            case'library':
                $result->categoryitems()->sync(7);
                break;
            case'service':
                $result->categoryitems()->sync(6);
                break;
            case'setmenu':
                $result->categoryitems()->sync(8);
                break;
            case'favor':
                $result->categoryitems()->sync(9);
                break;
            case'news':
                $result->categoryitems()->sync(10);
                break;
        }
        $data['view'] = $type . '.index';
        return $data;
    }

    public function deletePost($id, $type)
    {
        $data = [];
        $data['view'] = $type . '.index';
        $this->delete($id);
        return $data;
    }


}