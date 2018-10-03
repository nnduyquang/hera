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
        $categoryItem = new CategoryItem();
        $service = $categoryItem->whereId(6)->first();
        $data['service'] = $service;
        $data['services'] = $service->posts()->get();
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
        return $thucdon;
    }

    public function getThucDonDetail($path)
    {
        $categoryItem = new CategoryItem();
        $post = $categoryItem->whereId(8)->first()->posts()->wherePath($path)->first();
        return $post;
    }

    public function getThuVien()
    {
        $categoryItem = new CategoryItem();
        $post = $categoryItem->whereId(7)->first()->posts()->get();
        return $post;
    }

    public function getTinTuc()
    {
        $categoryItem = new CategoryItem();
        $post = $categoryItem->whereId(10)->first()->posts()->get();
        return $post;
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
        $categoryItem = new CategoryItem();
        $categoryChildren = $categoryItem->whereId(9)->first()->children()->get();
        foreach ($categoryChildren as $key => $item) {
            $item['posts'] = $item->posts()->get();
        }
        return $categoryChildren;
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
        $hotline=self::getConfigByName('config-phone');
        $email=self::getConfigByName('config-email');
        $data['hotline']=$hotline;
        $data['email']=$email;
        return $data;
    }


}