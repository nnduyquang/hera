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
    public function getThucDonDetail($path){
        $data = $this->frontendRepository->getThucDonDetail($path);
        return view('frontend.thucdon.index', compact('data'));
    }

}

