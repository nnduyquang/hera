<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getAllMenuFrontend();

    public function getPageDichVu();

    public function getDichVuDetail($path);

    public function getThucDon();

    public function getThucDonDetail($path);

    public function getThuVien();

    public function getTinTuc();

    public function getTinTucDetail($path);

    public function getUuDai();

    public function getUuDaiDetail($path);

    public function getAllUuDai();


    public function getFrontEndInfo();

}