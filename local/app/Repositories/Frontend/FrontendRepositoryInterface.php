<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getAllMenuFrontend();

    public function getPageDichVu();

    public function getThucDon();

    public function getThucDonDetail($path);

}