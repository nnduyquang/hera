<style>
    {{--#u_1 #bg_dichvu {--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-position: center center;--}}
        {{--/*background-attachment: fixed;*/--}}
        {{--padding-bottom: 30px;--}}
        {{--background-image: url({{URL::asset('https://capellagallery.com/wp-content/themes/capella/assets/images/bg-title-uudai.jpg')}});--}}
    {{--}--}}

    {{--#u_1 #bg_dichvu p {--}}
        {{--color: white;--}}
        {{--font-size: 58px;--}}
        {{--font-weight: 600;--}}
        {{--padding: 38px 0 16px 0;--}}
        {{--text-shadow: 0px 2px 2px black;--}}
    {{--}--}}

    {{--#u_1 #bg_dichvu span {--}}
        {{--color: white;--}}
        {{--font-size: 13px;--}}
        {{--text-shadow: 0px 2px 2px black;--}}

    {{--}--}}

    {{--#u_1 #bg_dichvu span a {--}}
        {{--color: white;--}}
    {{--}--}}

    {{--#u_1 #noidung h5 {--}}
        {{--font-size: 22px;--}}
        {{--padding-bottom: 38px;--}}
    {{--}--}}

    {{--#u_1 #noidung p {--}}
        {{--color: white;--}}
        {{--line-height: 24px;--}}
        {{--padding-bottom: 20px;--}}

    {{--}--}}

    {{--#u_1 #noidung h6 {--}}
        {{--padding-top: 10px;--}}
        {{--padding-bottom: 20px;--}}
        {{--font-size: 20px;--}}
        {{--font-weight: lighter;--}}
        {{--color: #f9bf80;--}}

    {{--}--}}

    {{--#u_1 #noidung span {--}}
        {{--color: white;--}}
    {{--}--}}

    {{--#u_1 #noidung a {--}}
        {{--color: #f9bf80;--}}
        {{--text-decoration: #f9bf80;--}}
    {{--}--}}

    {{--/* Style the tab */--}}
    {{--.tab {--}}
        {{--overflow: hidden;--}}
        {{--border-bottom: 3px solid #f9bf80;--}}
        {{--/*background-color: #f1f1f1;*/--}}
        {{--color: white;--}}
        {{--text-align: left;--}}

    {{--}--}}

    {{--/* Style the buttons inside the tab */--}}
    {{--.tab button {--}}
        {{--background-color: inherit;--}}
        {{--/*float: left;*/--}}
        {{--border: none;--}}
        {{--outline: none;--}}
        {{--cursor: pointer;--}}
        {{--padding: 14px 16px;--}}
        {{--transition: 0.3s;--}}
        {{--font-size: 17px;--}}
        {{--color: white;--}}


    {{--}--}}

    {{--/* Change background color of buttons on hover */--}}
    {{--.tab button:hover {--}}
        {{--color: #f9bf80;--}}
    {{--}--}}

    {{--/* Create an active/current tablink class */--}}
    {{--.tab button.active {--}}
        {{--/*background-color: #ccc;*/--}}
        {{--color: #f9bf80;--}}
    {{--}--}}

    {{--/* Style the tab content */--}}
    {{--.tabcontent {--}}
        {{--display: none;--}}
        {{--padding: 6px 12px;--}}
        {{--/*border: 1px solid #ccc;*/--}}
        {{--border-top: none;--}}
        {{--padding-top: 30px;--}}
    {{--}--}}

    {{--.tabcontent .img-content {--}}
        {{--min-height: 356px;--}}
        {{--/*width: 90%;*/--}}
        {{--margin: auto;--}}
        {{--overflow: hidden;--}}
        {{--background-position: center center;--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-repeat: no-repeat;--}}
        {{--margin-bottom: 30px;--}}
    {{--}--}}

    {{--@media only screen and (max-width: 800px) {--}}
        {{--.tab {--}}

            {{--text-align: center;--}}

        {{--}--}}
    {{--}--}}

</style>

<div id="u_1">
    {{--<div class="container-fluid animated fadeIn slow pt-5 pb-5" id="bg_dichvu" style="background-image: url({{URL::asset('https://capellagallery.com/wp-content/themes/capella/assets/images/bg-title-uudai.jpg')}});">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 mb-4 pt-5 pb-5 text-center">--}}
                    {{--<p>ƯU ĐÃI</p>--}}
                    {{--<span><a href="{{URL::asset('/')}}">TRANG CHỦ</a> > ƯU ĐÃI</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    @include('frontend.tintuc.banner-title')

    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4">


                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">TIN TỨC HERA
                        </button>
                        {{--<button class="tablinks" onclick="openCity(event, 'Paris')">ƯU ĐÃI HỘI NGHỊ</button>--}}

                    </div>

                    <div id="London" class="tabcontent">

                        @for ($i = 0; $i < 16; $i++)

                            @if ($i%2>0)
                                <div class="row align-items-center mb-4">
                                    <div class="col-md-6">
                                        <div class="img-content" style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/03/Final_Facebook_menu-hanh-phuc.jpg')}});">

                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <span><i class="far fa-calendar-alt"></i> 30-01-2018    </span>
                                        <h6><a href="{{URL::asset('uu-dai/chuong-trinh-uu-dai.html')}}">[SPECIAL EDITION] CƯỚI XU HƯỚNG MỚI – TRỌN TIỆC 85 TRIỆU ĐỒNG !!</a></h6>
                                        <p>Ưu đãi voucher giảm 40% – 50% combo trang điểm + làm tóc cô dâu từ
                                            thương hiệu làm đẹp cao cấp
                                            cho nhiều tác phẩm điện ảnh Hàn Quốc đình đám: VÌ SAO ĐƯA ANH TỚI!
                                            , NGƯỜI THỪA KẾ</p>

                                        <a href="">ĐỌC THÊM</a>
                                    </div>
                                </div>
                            @endif
                            @if($i%2==0)
                                <div class="row align-items-center mb-4">
                                    <div class="col-md-6">
                                        <div class="img-content" style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/07/Final_Concept-01.jpg')}});">

                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <span><i class="far fa-calendar-alt"></i> 30-01-2018    </span>
                                        <h6><a href="{{URL::asset('uu-dai/chuong-trinh-uu-dai.html')}}">[SPECIAL EDITION] CƯỚI XU HƯỚNG MỚI – TRỌN TIỆC 85 TRIỆU ĐỒNG !!</a></h6>
                                        <p>Ưu đãi voucher giảm 40% – 50% combo trang điểm + làm tóc cô dâu từ
                                            thương hiệu làm đẹp cao cấp
                                            cho nhiều tác phẩm điện ảnh Hàn Quốc đình đám: VÌ SAO ĐƯA ANH TỚI!
                                            , NGƯỜI THỪA KẾ</p>

                                        <a href="">ĐỌC THÊM</a>
                                    </div>
                                </div>
                            @endif

                        @endfor

                    </div>

                    {{--<div id="Paris" class="tabcontent">--}}
                        {{--@for ($i = 0; $i < 16; $i++)--}}

                            {{--@if ($i%2>0)--}}
                                {{--<div class="row align-items-center mb-4">--}}
                                    {{--<div class="col-md-6 order-md-1 order-0">--}}
                                        {{--<div class="img-content" style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/07/Key-Visual.jpg')}});">--}}

                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 text-center order-md-0 order-1">--}}
                                        {{--<span><i class="far fa-calendar-alt"></i> 30-01-2018    </span>--}}
                                        {{--<h6><a href="{{URL::asset('uu-dai/chuong-trinh-uu-dai.html')}}">[SPECIAL EDITION] CƯỚI XU HƯỚNG MỚI – TRỌN TIỆC 85 TRIỆU ĐỒNG !!</a></h6>--}}
                                        {{--<p>Ưu đãi voucher giảm 40% – 50% combo trang điểm + làm tóc cô dâu từ--}}
                                            {{--thương hiệu làm đẹp cao cấp--}}
                                            {{--cho nhiều tác phẩm điện ảnh Hàn Quốc đình đám: VÌ SAO ĐƯA ANH TỚI!--}}
                                            {{--, NGƯỜI THỪA KẾ</p>--}}

                                        {{--<a href="">ĐỌC THÊM</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endif--}}
                            {{--@if($i%2==0)--}}
                                {{--<div class="row align-items-center mb-4">--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<div class="img-content" style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/05/FA_Final-Cuoi_Xu-huong-moi_low-res.jpg')}});">--}}

                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 text-center">--}}
                                        {{--<span><i class="far fa-calendar-alt"></i> 30-01-2018    </span>--}}
                                        {{--<h6><a href="{{URL::asset('uu-dai/chuong-trinh-uu-dai.html')}}">[SPECIAL EDITION] CƯỚI XU HƯỚNG MỚI – TRỌN TIỆC 85 TRIỆU ĐỒNG !!</a></h6>--}}
                                        {{--<p>Ưu đãi voucher giảm 40% – 50% combo trang điểm + làm tóc cô dâu từ--}}
                                            {{--thương hiệu làm đẹp cao cấp--}}
                                            {{--cho nhiều tác phẩm điện ảnh Hàn Quốc đình đám: VÌ SAO ĐƯA ANH TỚI!--}}
                                            {{--, NGƯỜI THỪA KẾ</p>--}}

                                        {{--<a href="">ĐỌC THÊM</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endif--}}

                        {{--@endfor--}}
                    {{--</div>--}}


                    <script>
                        function openCity(evt, cityName) {
                            var i, tabcontent, tablinks;
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                            }
                            tablinks = document.getElementsByClassName("tablinks");
                            for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                            }
                            document.getElementById(cityName).style.display = "block";
                            evt.currentTarget.className += " active";
                        }

                        // Get the element with id="defaultOpen" and click on it
                        document.getElementById("defaultOpen").click();
                    </script>


                </div>
            </div>
        </div>
    </div>


</div>