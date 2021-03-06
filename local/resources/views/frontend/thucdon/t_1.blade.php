﻿<style>
    #t_1 {
        color: white;
        padding-bottom: 100px;
    }
    #t_1 h5 {
        font-size: 28px;
        padding-bottom: 16px;
        color: red;
        font-weight: bold;
    }
    #t_1 h6 {
        font-size: 25px;
        font-weight: 600;
        padding-bottom: 20px;
        width: fit-content;
    }
    #t_1 p {
        line-height: 22px;
    }
    #t_1 p.descipt {
        line-height: 22px;
        width: 80%;
        margin: auto;
    }
    #t_1 .content_des {
        border: 3px solid white;
    }
    #t_1 a.thuc-don {
        padding: 10px 16px;
        background-color: transparent;
        color: #21b6ff;
        border: none;
        cursor: pointer;
    }
    #t_1 a.thuc-don:hover {
        text-shadow: 0px 0px 1px white;
    }
    #t_1 .owl-img {
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        height: 150px;
        width: 100%;
        overflow: hidden;
    }
    #t_1 .owl-img2 {
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        height: 432px;
        width: 100%;
        overflow: hidden;
    }
    .customPrevBtn, .customNextBtn {
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translatey(-50%);
        font-size: 32px;
        color: white;
    }
    .customPrevBtn i, .customNextBtn i {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        line-height: 38px;
        background-color: rgba(194, 198, 201, 0.6);
        text-align: center;
    }
    .customPrevBtn {
        left: 26px;
        z-index: 6;
    }
    .customNextBtn {
        z-index: 6;
        right: 10px;
    }
    @media only screen and (max-width: 600px) {
        #t_1 .owl-img2 {
            height: 368px;
        }
    }
</style>
<div id="t_1">
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pb-4">
                    <h5>NƠI TRẢI NGHIỆM ẨM THỰC TINH TẾ</h5>
                    <p class="descipt">Nhà hàng tiệc cưới TDG ra đời và phát triển như hôm nay, thì ẩm thực chính là
                        một
                        yếu tố đóng góp quan trọng để tạo nên thành công cho thương hiệu TDG được lớn mạnh.</p>
                </div>
                <div class="col-md-6">
                    <div class="row" style="height: 100%">
                        <div class="col-md-12 p-4 pb-3 content_des">
                            {!! $thucdon->description !!}
                            <div class="d-flex justify-content-between pt-3" style="width: 100%">


                            </div>
                        </div>
                        @php
                            $listImage=explode(';',$thucdon->sub_image);
                        @endphp
                        @if(!is_null($thucdon->sub_image))
                            <div class="col-md-12 p-0" style="align-self: flex-end">
                                <div id="owl_doitac" class="owl-carousel owl-theme">
                                    @foreach($listImage as $key=>$item)
                                        <div class="owl-items">
                                            <a href="{{URL::asset($item)}}" class="fancybox" data-fancybox="gallery-cus">
                                                <div class="owl-img"
                                                     style="background-image: url({{URL::asset($item)}});">
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 pl-lg-3 pl-md-3 p-0 mt-lg-0 mt-3 position-relative">
                    @php
                        $listImage=explode(';',$thucdon->sub_image);
                    @endphp
                    @if(!is_null($thucdon->sub_image))
                        <div id="owl_doitac2" class="owl-carousel owl-theme">
                            @foreach($listImage as $key=>$item)
                                <div class="owl-items">
                                    <a href="{{URL::asset($item)}}" class="fancybox" data-fancybox="gallery-cus">
                                        <div class="owl-img2"
                                             style="background-image:url({{URL::asset($item)}});">
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="owl-nav">
                            <div class="customPrevBtn"><i class="fas fa-angle-left"></i></div>
                            <div class="customNextBtn"><i class="fas fa-angle-right"></i></div>
                        </div>
                    @endif
                </div>
                <div class="col-md-12 p-0">
                    {!! $thucdon->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
