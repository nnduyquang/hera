<style>

    #t_1 {
    color: white;
    padding-bottom: 100px;
    }

    #t_1 h5 {
    font-size: 28px;
    color: white;
    padding-bottom: 16px;
    color: #21b6ff;
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

    @include('frontend.thucdon.banner-title')
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pb-4">
                    <h5>NƠI TRẢI NGHIỆM ẨM THỰC TINH TẾ</h5>
                    <p class="descipt">Nhà hàng tiệc cưới HERA ra đời và phát triển như hôm nay, thì ẩm thực chính là
                        một
                        yếu tố đóng góp quan trọng để tạo nên thành công cho thương hiệu HERA được lớn mạnh.</p>
                </div>

                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-12 p-4 pb-3 content_des">
                            <h6 class="">ẨM THỰC ÂU - Á KẾT HỢP</h6>
                            <p>Không dừng lại ở những món ăn thuần túy của dân tộc, Hera còn nghiên cứu về ẩm thực Châu
                                Á
                                lẫn Châu Âu để cho ra đời nhiều món ăn ngon – lạ – đẹp được kết hợp hết sức tinh tế giữa
                                hai
                                nền ẩm thực đặc sắc mà vẫn phù hợp với khẩu vị của người dân Việt Nam. </p>

                            <div class="d-flex justify-content-between pt-3" style="width: 100%">
                                <a class="thuc-don" href="{{URL::asset('/file/SETMENU2018.pdf')}}">XEM THỰC ĐƠN</a>
                                <a class="thuc-don" href="{{URL::asset('/file/SETMENU2018.pdf')}}" download>DOWNLOAD
                                    THỰC
                                    ĐƠN</a>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 p-0">

                            <div id="owl_doitac" class="owl-carousel owl-theme">
                                {{--@for ($i = 0; $i < 6; $i++)--}}
                                {{--@endfor--}}
                                <div class="owl-items">
                                    <a href="">
                                        <div class="owl-img"
                                             style="background-image: url({{URL::asset('images/menu/Picture1.png')}});">
                                            {{--<img src="{{URL::asset('images/khtt/co_be_tra_sua1_jpg0.jpg')}}" alt="">--}}
                                        </div>
                                    </a>
                                </div>

                                <div class="owl-items">
                                    <a href="">
                                        <div class="owl-img"
                                             style="background-image: url({{URL::asset('images/menu/Picture2.jpg')}});">
                                            {{--<img src="{{URL::asset('images/khtt/co_be_tra_sua1_jpg0.jpg')}}" alt="">--}}
                                        </div>
                                    </a>
                                </div>

                                <div class="owl-items">
                                    <div class="owl-img"
                                         style="background-image: url({{URL::asset('images/menu/Picture3.jpg')}});">
                                        {{--<img src="{{URL::asset('images/khtt/co_be_tra_sua1_jpg0.jpg')}}" alt="">--}}
                                    </div>
                                </div>

                                <div class="owl-items">
                                    <div class="owl-img"
                                         style="background-image: url({{URL::asset('images/menu/Picture4.jpg')}});">
                                        {{--<img src="{{URL::asset('images/khtt/co_be_tra_sua1_jpg0.jpg')}}" alt="">--}}
                                    </div>
                                </div>

                                <div class="owl-items">
                                    <div class="owl-img"
                                         style="background-image: url({{URL::asset('images/menu/Picture5.jpg')}});">
                                        {{--<img src="{{URL::asset('images/khtt/co_be_tra_sua1_jpg0.jpg')}}" alt="">--}}
                                    </div>
                                </div>

                                <div class="owl-items">
                                    <div class="owl-img"
                                         style="background-image: url({{URL::asset('images/menu/raucau.jpg')}});">
                                        {{--<img src="{{URL::asset('images/khtt/co_be_tra_sua1_jpg0.jpg')}}" alt="">--}}
                                    </div>
                                </div>

                                <div class="owl-items">
                                    <div class="owl-img"
                                         style="background-image: url({{URL::asset('images/menu/supngheu.jpg')}});">
                                        {{--<img src="{{URL::asset('images/khtt/co_be_tra_sua1_jpg0.jpg')}}" alt="">--}}
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-6 pl-lg-3 pl-md-3 p-0 mt-lg-0 mt-3 position-relative">
                    <div id="owl_doitac2" class="owl-carousel owl-theme">
                        {{--@for ($i = 0; $i < 6; $i++)--}}
                        {{--@endfor--}}
                        <div class="owl-items">
                            <a href="">
                                <div class="owl-img2"
                                     style="background-image:url({{URL::asset('images/menu/Picture1.png')}});">
                                    {{--<img src="" alt="" style="width: 100%;height: auto">--}}
                                </div>
                            </a>
                        </div>

                        <div class="owl-items">
                            <div class="owl-img2"
                                 style="background-image:url({{URL::asset('images/menu/Picture2.jpg')}});">
                                {{--<img src="{{URL::asset('images/menu/Picture2.jpg')}}" alt="" style="width: 100%;height: auto">--}}
                            </div>
                        </div>

                        <div class="owl-items">
                            <div class="owl-img2"
                                 style="background-image:url({{URL::asset('images/menu/Picture3.jpg')}});">
                                {{--<img src="{{URL::asset('images/menu/Picture3.jpg')}}" alt="" style="width: 100%;height: auto">--}}
                            </div>
                        </div>

                        <div class="owl-items">
                            <div class="owl-img2"
                                 style="background-image:url({{URL::asset('images/menu/Picture4.jpg')}});">
                                {{--<img src="{{URL::asset('images/menu/Picture4.jpg')}}" alt="" style="width: 100%;height: auto">--}}
                            </div>
                        </div>

                        <div class="owl-items">
                            <div class="owl-img2"
                                 style="background-image:url({{URL::asset('images/menu/Picture5.jpg')}});">
                                {{--<img src="{{URL::asset('images/menu/Picture5.jpg')}}" alt="" style="width: 100%;height: auto">--}}
                            </div>
                        </div>

                        <div class="owl-items">
                            <div class="owl-img2"
                                 style="background-image:url({{URL::asset('images/menu/raucau.jpg')}});">
                                {{--<img src="{{URL::asset('images/menu/raucau.jpg')}}" alt="" style="width: 100%;height: auto">--}}
                            </div>
                        </div>

                        <div class="owl-items">
                            <div class="owl-img2"
                                 style="background-image:url({{URL::asset('images/menu/supngheu.jpg')}});">
                                {{--<img src="{{URL::asset('images/menu/raucau.jpg')}}" alt="" style="width: 100%;height: auto">--}}
                            </div>
                        </div>


                    </div>

                    <div class="owl-nav">
                        <div class="customPrevBtn"><i class="fas fa-angle-left"></i></div>
                        <div class="customNextBtn"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>

                <div class="col-md-12 mt-5">
                    <h5>MENU THAM KHẢO TẠI ĐÂY</h5>
                    <p class="pb-4">5 món mặn + 1 tráng miệng</p>
                    <div class="row">

                        <div class="col-md-12 mb-4">
                            <p>KHAI VỊ BA MÓN 700,000 VNĐ<br><br>
                                1 Nghêu Quay Giòn – Gỏi Mực Rau Câu – Sushi Thăn Heo Chiên<br>
                                2 Chả Giò Mayonnaise – Salad Nhật – Sushi Tôm<br>
                                3. Bacon Cuộn Cá – Salad Gà Chiên Giòn – Tôm Xù Cốm<br>
                            </p>
                        </div>

                        <div class="col-md-12 mb-4">
                            <p>
                                KHAI VỊ HAI MÓN<br><br>
                                1. Khai Vị Gà 2 Món 450,000 VNĐ<br>
                                Gà Sauce Chua Ngọt – Gà Teriyaki<br>
                                2. Khai Vị Tôm 2 Món 500,000 VNĐ<br>
                                Tôm Hạnh Nhân – Tôm Sauce Chanh<br>
                                3. Khai Vị Cá 600,000 VNĐ<br>
                                Cá Cuộn Nấm – Cá Hồi Chiên Giòn<br>
                                4. Khai Vị Hải Sản 2 Món 650,000 VNĐ<br>
                                Tôm Sauce Wasabi – Tôm Salad Trái Cây<br>
                            </p>
                        </div>

                        <div class="col-md-12 mb-4">
                            SOUP<br><br>
                            <p style="">
                                * Soup Bông Cải 390,000 VNĐ<br>
                                * Soup Gà Nấm Tuyết 400,000 VNĐ<br>
                                * Soup Jambon Gà Xé 450,000 VNĐ<br>
                                * Soup Bóng Cá Tóc Tiên 450,000 VNĐ<br>
                                * Soup Hải Sản Tuyết Cua 500,000 VNĐ<br>
                                * Soup Măng Tây Cua 500,000 VNĐ<br>
                                * Soup Bò Thượng Hải 550,000 VNĐ<br>
                                * Soup Cá Hồi Hải Sản 700,000 VNĐ<br>
                                * Soup Nghêu Rong Biển Chua Cay 700,000 VNĐ<br>
                                * Soup Hải Sản Tứ Xuyên 750,000 VNĐ<br>
                                * Soup Cá Hồi HongKong 800,000 VNĐ<br>
                                * Soup Đuôi Bò Artichoke 866,000 VNĐ<br>
                                * Soup Bào Ngư,Vi Cá, Hải Sâm 950,000 VNĐ
                            </p>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
</div>