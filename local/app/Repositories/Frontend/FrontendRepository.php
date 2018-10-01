<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
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
        $post=$categoryItem->whereId(8)->first()->posts()->wherePath($path)->first();
        return $post;
    }


}