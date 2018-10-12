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
        $categoryItem = new CategoryItem();
        $post = $categoryItem->whereId(7)->first()->posts()->get();
        $service = $categoryItem->whereId(7)->first();
        $data['service'] = $service;
        $data['post'] = $post;
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
        return $config->getConfigByName($name);
    }


    public function getFrontEndInfo()
    {
        $data=[];
        $config = new Config();
        $dataConfig = $config->getConfigByListName(['config-phone', 'config-email', 'config-contact', 'logo-config','script-js-header','script-js-body']);
        foreach ($dataConfig as $key => $item) {
            if ($item->name == 'config-phone')
                $data['hotline'] = $item->content;
            if ($item->name == 'config-email')
                $data['email'] = $item->content;
            if ($item->name == 'config-contact')
                $data['contact'] = $item->content;
            if ($item->name == 'logo-config')
                $data['logo'] = $item->content;
            if ($item->name == 'script-js-header')
                $data['script-js-header'] = $item->content;
            if ($item->name == 'script-js-body')
                $data['script-js-body'] = $item->content;
        }
        return $data;
    }


}