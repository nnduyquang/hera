
<div class="container-fluid p-0 position-relative" id="hera_mobile_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <div id="logo" class="pt-2 pb-2">
                    <img src="{{URL::asset('images/logo/logo-hera-center.png')}}" alt="" style="">
                </div>
                <div><i id="mobile_menu_click" class="fas fa-bars font-weight-bold fa-2x"></i></div>
            </div>
        </div>
    </div>

    <div id="hera_mobile_menu_content" class="">
        <ul>
            <li><a class="mt-3 {{ request()->is('/') ? 'active' : '/' }}" href="{{URL::asset('/')}}">TRANG CHỦ</a></li>
            <li class="li-overlay"><a class="{{ request()->is('dich-vu*') ? 'active' : '/' }}"  href="javascript:void(0)"
                >DỊCH
                    VỤ</a>
                <div class="li-content">
                    <ul>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                    </ul>
                </div>
            </li>

            {{--<div id="demo">--}}
                {{--<a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a>--}}
                {{--<a href="{{URL::asset('/dich-vu/dich-vu.html')}}">HỘI NGHỊ</a>--}}
                {{--<a href="{{URL::asset('/dich-vu/dich-vu.html')}}">SỰ KIỆN</a>--}}
                {{--<a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC NGOÀI TRỜI</a>--}}
            {{--</div>--}}

            <li class="li-overlay"><a class="{{ request()->is('hinh-anh*') ? 'active' : '/' }}" href="javascript:void(0)">THƯ
                    VIỆN</a>
                <div class="li-content">
                    <ul>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                    </ul>
                </div>
            </li>

            <li class="li-overlay"><div class=""><a class="{{ request()->is('thuc-don*') ? 'active' : '/' }}"  href="javascript:void(0)">THỰC
                    ĐƠN</a>
                    {{--<i class="far fa-plus-square"></i>--}}
                </div>
                <div class="li-content">
                    <ul>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                        <li> <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                    </ul>
                </div>
            </li>
            <li><a class="{{ request()->is('uu-dai*') ? 'active' : '/' }}" href="{{URL::asset('/uu-dai/')}}">ƯU ĐÃI</a>
            </li>
            <li><a class="{{ request()->is('tin-tuc*') ? 'active' : '/' }}" href="{{URL::asset('/tin-tuc/')}}">TIN TỨC</a>
            </li>
            <li class="border-bottom"><a class="{{ request()->is('lien-he*') ? 'active' : '/' }}"
                                         href="{{URL::asset('/lien-he/')}}">LIÊN HỆ</a></li>
            <li class="text-center pt-4"><a
                                            href="{{URL::asset('/dat-tiec/')}}" class="">ĐẶT TIỆC NGAY</a></li>
            <li class="text-center">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram" style="background-image:url({{URL::asset('images/bg/bg-insta.jpg')}});"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
            </li>
            <li class="text-center">
                {{--<p class="pb-2"><span><i class="fas fa-phone-volume"></i></span>--}}
                    {{--0984 377 727 (Hội nghị)</p>--}}

                <p class="pb-3"><span><i class="fas fa-phone-volume"></i></span>
                    {{$listFrontEndInfo['hotline']}} (Hotline)</p></li>

        </ul>
    </div>

</div>







