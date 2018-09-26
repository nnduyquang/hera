<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Post;
use App\Product;

class FrontendRepository implements FrontendRepositoryInterface
{
    public function getAllMenuFrontend()
    {
        $data = [];
        $menu = new Menu();
        $data = $menu->getAllParentOrderBy('order');
        return $data;
    }


}