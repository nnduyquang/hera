<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Menu;
use App\Post;


class FrontendRepository implements FrontendRepositoryInterface
{
    public function getAllMenuFrontend()
    {
        $data = [];
        $menu = new Menu();
        $data = $menu->getAllParentOrderBy('order');
        return $data;
    }

    public function getPageDichVu()
    {
        $data = [];
        $post=new Post();
        $gioithieu=$post->getPostByPathAndType('gioi-thieu',IS_PAGE);
        $categoryItem = new CategoryItem();
        $service = $categoryItem->whereId(6)->first();
        $data['service'] = $service;
        $data['services'] = $service->posts()->get();
        $data['gioithieu']=$gioithieu;
        return $data;
    }

    public function getDichVuDetail($path)
    {
        $categoryItem = new CategoryItem();
        $data = [];
        $post = $categoryItem->whereId(6)->first()->posts()->wherePath($path)->first();
        $other = $categoryItem->whereId(6)->first()->posts()->where('id', '!=', $post->id)->get();
        $category = $categoryItem->where('id', 6)->first();
        $data['post'] = $post;
        $data['other'] = $other;
        $data['category'] = $category;
        return $data;
    }


    public function getThucDon()
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $thucdon = $categoryItem->whereId(8)->first();
        $service = $categoryItem->whereId(8)->first();
        $data['service'] = $service;
        $data['thucdon'] = $thucdon;
        return $data;
    }

    public function getThucDonDetail($path)
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $service = $categoryItem->whereId(8)->first();
        $post = $categoryItem->whereId(8)->first()->posts()->wherePath($path)->first();
        $data['service'] = $service;
        $data['post'] = $post;
        return $data;
    }

    public function getThuVien()
    {
        $data = [];

        $newArray=array();
        $categoryItem = new CategoryItem();
        $menu=new Menu();
        $post = $categoryItem->whereId(7)->first()->posts()->get();
        $menuThuVien=$menu->getAllMenuByParentId(7);
        foreach ($menuThuVien as $key=>$item){
            foreach ($post as $key2=>$item2){
                if(json_decode($item->parameters)->path==$item2->path){
                    array_push($newArray,$item2);
                }else{
                    if(strpos(json_decode($item->parameters)->path,$item2->path))
                        array_push($newArray,$item2);
                }
            }

        }
        $service = $categoryItem->whereId(7)->first();
        $data['service'] = $service;
        $data['post'] = $newArray;
        return $data;
    }

    public function getTinTuc()
    {
        $data = [];
        $categoryItem = new CategoryItem();

        $service = $categoryItem->whereId(10)->first();
        $post = $categoryItem->whereId(10)->first()->posts()->paginate(5);
        $data['post']=$post;
        $data['service']=$service;
        return $data;
    }

    public function getTinTucDetail($path)
    {
        $categoryItem = new CategoryItem();
        $data = [];
        $post = $categoryItem->whereId(10)->first()->posts()->wherePath($path)->first();
        $other = $categoryItem->whereId(10)->first()->posts()->where('id', '!=', $post->id)->get();
        $category = $categoryItem->where('id', 10)->first();
        $data['post'] = $post;
        $data['other'] = $other;
        $data['category'] = $category;
        return $data;
    }

    public function getUuDai()
    {
        $data = [];
        $categoryItem = new CategoryItem();
        $categoryChildren = $categoryItem->whereId(9)->first()->children()->get();
        foreach ($categoryChildren as $key => $item) {
            $item['posts'] = $item->posts()->get();
        }
        $service = $categoryItem->whereId(9)->first();
        $data['service']=$service;
        $data['categoryChildren']=$categoryChildren;
        return $data;
    }


    public function getUuDaiDetail($path)
    {
        $categoryItem = new CategoryItem();
        $data = [];
        $post = $categoryItem->whereId(9)->first()->posts()->wherePath($path)->first();
        $other = $categoryItem->whereId(9)->first()->posts()->where('id', '!=', $post->id)->get();
        $category = $categoryItem->where('id', 9)->first();
        $data['post'] = $post;
        $data['other'] = $other;
        $data['category'] = $category;
        return $data;
    }

    public function getAllUuDai()
    {
        $categoryItem = new CategoryItem();
        $post = $categoryItem->whereId(9)->first()->posts()->take(3)->get();
        foreach ($post as $key => $item) {
            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 90);
        }
        return $post;

    }

    public function getConfigByName($name)
    {
        $config = new Config();
        return $config->getConfigByName($name)->content;
    }


    public function getFrontEndInfo()
    {
        $data=[];
        $config = new Config();
        $dataConfig = $config->getConfigByListName(['config-phone','config-address', 'config-email', 'config-contact', 'logo-config','script-js-header','script-js-body','contact-image-config','order-image-config','map-config','config-seo-title','config-seo-description','config-seo-image']);
        foreach ($dataConfig as $key => $item) {
            if ($item->name == 'config-phone')
                $data['hotline'] = $item->content;
            if ($item->name == 'config-email')
                $data['email'] = $item->content;
            if ($item->name == 'config-address')
                $data['address'] = $item->content;
            if ($item->name == 'config-contact')
                $data['contact'] = $item->content;
            if ($item->name == 'logo-config')
                $data['logo'] = $item->content;
            if ($item->name == 'script-js-header')
                $data['script-js-header'] = $item->content;
            if ($item->name == 'script-js-body')
                $data['script-js-body'] = $item->content;
            if ($item->name == 'contact-image-config')
                $data['contact-image-config'] = $item->content;
            if ($item->name == 'order-image-config')
                $data['order-image-config'] = $item->content;
            if ($item->name == 'map-config')
                $data['map-config'] = $item->content;
            if ($item->name == 'config-seo-title')
                $data['config-seo-title'] = $item->content;
            if ($item->name == 'config-seo-description')
                $data['config-seo-description'] = $item->content;
            if ($item->name == 'config-seo-image')
                $data['config-seo-image'] = $item->content;
        }
        return $data;
    }


}