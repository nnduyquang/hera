<?php

namespace App\Http\Controllers;

use App\Repositories\Frontend\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }

    public function getPageDichVu()
    {
        $data = $this->frontendRepository->getPageDichVu();
        $services = $data['services'];
        $service = $data['service'];
        return view('frontend.services.index', compact('services', 'service'));
    }

    public function getThucDon()
    {
        $data = $this->frontendRepository->getThucDon();
        return view('frontend.thucdon.index', compact('data'));
    }

    public function getThucDonDetail($path)
    {
        $data = $this->frontendRepository->getThucDonDetail($path);
        return view('frontend.thucdon.index', compact('data'));
    }

    public function getThuVien()
    {
        $data = $this->frontendRepository->getThuVien();
        return view('frontend.gallery.index', compact('data'));
    }

    public function getTinTuc()
    {
        $data = $this->frontendRepository->getTinTuc();
        return view('frontend.tintuc.index', compact('data'));
    }

    public function getTinTucDetail($path)
    {
        $data = $this->frontendRepository->getTinTucDetail($path);
        $post = $data['post'];
        $other = $data['other'];
        $category = $data['category'];
        return view('frontend.uudai-details.index', compact('post', 'other', 'category'));
    }
    public function getUuDai(){
        $data = $this->frontendRepository->getUuDai();
        return view('frontend.uudai.index', compact('data'));
    }

}

