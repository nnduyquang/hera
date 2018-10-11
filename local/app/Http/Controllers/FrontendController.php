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
    public function getDichVuDetail($path){
        $data = $this->frontendRepository->getDichVuDetail($path);
        $post = $data['post'];
        $other = $data['other'];
        $category = $data['category'];
        return view('frontend.service-details.index', compact('post', 'other', 'category'));
    }

    public function getThucDon()
    {
        $data = $this->frontendRepository->getThucDon();
        $service=$data['service'];
        $thucdon=$data['thucdon'];
        return view('frontend.thucdon.index', compact('service','thucdon'));
    }

    public function getThucDonDetail($path)
    {
        $data = $this->frontendRepository->getThucDonDetail($path);
        $service=$data['service'];
        $thucdon=$data['post'];
        return view('frontend.thucdon.index', compact('service','thucdon'));
    }

    public function getThuVien()
    {
        $data = $this->frontendRepository->getThuVien();
        $service=$data['service'];
        $post=$data['post'];
        return view('frontend.gallery.index', compact('service','post'));
    }

    public function getTinTuc()
    {
        $data = $this->frontendRepository->getTinTuc();
        $post=$data['post'];
        $service=$data['service'];
        return view('frontend.tintuc.index', compact('post','service'));
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
        $service=$data['service'];
        $categoryChildren=$data['categoryChildren'];
        return view('frontend.uudai.index', compact('service','categoryChildren'));
    }
    public function getUuDaiDetail($path)
    {
        $data = $this->frontendRepository->getUuDaiDetail($path);
        $post = $data['post'];
        $other = $data['other'];
        $category = $data['category'];
        return view('frontend.uudai-details.index', compact('post', 'other', 'category'));
    }
    public function getFrontend(){
        $data = $this->frontendRepository->getPageDichVu();
        $gioithieu=$data['gioithieu'];
        $services = $data['services'];
        $service = $data['service'];
        $uudai= $this->frontendRepository->getAllUuDai();
        $sliders=$this->frontendRepository->getConfigByName('slider-config');
        $popupImage=$this->frontendRepository->getConfigByName('favor-image-config');
        $popupLink=$this->frontendRepository->getConfigByName('favor-link-config');
        return view('frontend.home.index', compact('services', 'service','uudai','sliders','popupImage','popupLink','gioithieu'));
    }

}

