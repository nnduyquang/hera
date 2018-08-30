<style>
    /*#menu {*/
        /*position: fixed;*/
        /*top: 0;*/
        /*left: 0;*/
        /*background-color: #fff;*/
        /*z-index: 10;*/
        /*!*box-shadow: 0px 0px 2px 0px #6c757d;*!*/
    /*}*/

    /*#menu #logo img {*/
        /*width: 120%;*/
        /*height: auto;*/
    /*}*/

    /*#menu #sc_network a i {*/
        /*width: 30px;*/
        /*height: 30px;*/
        /*border-radius: 50%;*/
        /*background-color: #8d8e8f;*/
        /*color: white;*/
        /*line-height: 30px;*/
        /*text-align: center;*/
        /*font-size: 14px;*/
        /*transition: .3s;*/
        /*margin-right: 10px;*/
    /*}*/

    /*#menu #sc_network a:hover i.fa-facebook-f {*/
        /*background-color: #0e5bc0;*/
    /*}*/

    /*#menu #sc_network a:hover i.fa-instagram {*/
        /*background-color: #42aaf3;*/
    /*}*/

    /*#menu #sc_network a:hover i.fa-youtube {*/
        /*background-color: #e71b06;*/
    /*}*/

    /*#menu #menu_content > ul {*/
        /*list-style-type: none;*/
        /*margin: 0;*/
        /*padding: 0;*/
    /*}*/

    /*#menu #menu_content > ul li {*/
        /*position: relative;*/
        /*display: inline-flex;*/
        /*padding: 0px 10px;*/
        /*z-index: 2;*/
    /*}*/

    /*#menu #menu_content > ul li:first-child{*/
        /*position: relative;*/
        /*z-index: 3;*/
    /*}*/

    /*#menu #menu_content > ul li a {*/
        /*color: #444647;*/
        /*padding-top: 38px;*/
        /*padding-bottom: 38px;*/
        /*transition: .3s;*/

    /*}*/

    /*#menu #menu_content > ul li a:hover {*/
        /*color: #e8bc91;*/
        /*!*background-color: #0e5bc0;*!*/
        /*!*padding:20px;*!*/
    /*}*/

    /*#menu #menu_content > ul li:nth-last-child(2) a {*/
        /*color: #fff;*/
        /*background-color: #e8bc91;*/
        /*padding: 8px 12px 6px 12px;*/
        /*border-radius: 5px;*/
    /*}*/

    /*#menu #menu_content > ul li a.active {*/
        /*color: #e8bc91;*/
    /*}*/

    /*#menu #menu_content #dv_overlay #dv_content {*/
        /*padding-left: 6px;*/
        /*padding-right: 6px;*/
        /*position: absolute;*/
        /*top: -200%;*/
        /*left: 50%;*/
        /*transition: .3s;*/
        /*background-color: #fff;*/
        /*width: 200px;*/
        /*!*padding-top: 38px;*!*/
        /*!*display: none;*!*/
        /*!*height: 0;*!*/
        /*opacity: 0;*/
        /*transform: translateX(-50%);*/
        /*transition: .3s;*/
        /*z-index: -1;*/
    /*}*/


    /*#menu #menu_content #dv_overlay{*/
        /*z-index: 2;*/
    /*}*/

    /*#menu #menu_content #dv_overlay:hover #dv_content {*/
        /*!*display: block;*!*/
        /*!*height: auto;*!*/
        /*opacity: 1;*/
        /*top: 100%;*/
    /*}*/


    /*#menu #menu_content #dv_overlay #dv_content li{*/
        /*display: block;*/
        /*padding: 10px 20px;*/
        /*border-bottom: 2px solid #e8bc91;*/
    /*}*/

    /*#menu #menu_content #dv_overlay #dv_content li:last-child{*/
        /*margin-bottom: 10px;*/
    /*}*/

    /*#menu #menu_content #dv_overlay #dv_content li a{*/
        /*padding: 6px 10px;*/
        /*transition: .3s;*/
    /*}*/



    /*#menu #menu_content #dv_overlay #dv_content li:nth-last-child(2) a{*/
        /*background-color: transparent;*/
        /*color: #2a2a2a;*/
    /*}*/

    /*#menu #menu_content #dv_overlay #dv_content li:nth-last-child(2) a:hover{*/
        /*color: #e8bc91;*/
    /*}*/

</style>

<div id="menu" class="container-fluid p-0 d-none d-md-block">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between align-items-center">

                    <div id="logo" class="pt-2 pb-2">
                        <img src="{{URL::asset('images/logo/logo-hera-center.png')}}" alt="">
                    </div>
                    <div id="menu_content">
                        <ul>
                            <li><a class="{{ request()->is('/') ? 'active' : '/' }}" href="{{URL::asset('/')}}">TRANG
                                    CHỦ</a></li>
                            <li id="dv_overlay"><a class="{{ request()->is('dich-vu*') ? 'active' : '/' }}" href="{{URL::asset('/dich-vu')}}">DỊCH VỤ</a>
                                <ul id="dv_content">
                                        <li><a class="sub-menu" href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC CƯỚI</a></li>
                                        <li><a class="sub-menu" href="{{URL::asset('/dich-vu/dich-vu.html')}}">HỘI NGHỊ</a></li>
                                        <li><a class="sub-menu" href="{{URL::asset('/dich-vu/dich-vu.html')}}">SỰ KIỆN</a></li>
                                        <li><a class="sub-menu" href="{{URL::asset('/dich-vu/dich-vu.html')}}">TIỆC NGOÀI TRỜI</a></li>
                                </ul>
                            </li>
                            <style>

                            </style>
                            <li id="tv_overlay"><a class="{{ request()->is('hinh-anh*') ? 'active' : '/' }}" href="{{URL::asset('/hinh-anh/')}}">THƯ VIỆN</a>
                                <div class="tv-content">
                                    <a href="#">SẢNH</a>
                                    <a href="#">TRANG TRÍ</a>
                                    <a href="#">TIỆC CƯỚI</a>
                                    <a href="#" style="border: none">VIDEO CLIP</a>
                                </div>
                            </li>
                            <li><a class="{{ request()->is('thuc-don*') ? 'active' : '/' }}" href="{{URL::asset('/hinh-anh/')}}">THỰC ĐƠN</a></li>
                            <li><a class="{{ request()->is('uu-dai*') ? 'active' : '/' }}" href="{{URL::asset('/uu-dai/')}}">ƯU ĐÃI</a></li>
                            <li><a class="{{ request()->is('tin-tuc*') ? 'active' : '/' }}" href="{{URL::asset('/hinh-anh/')}}">TIN TỨC</a></li>
                            <li><a class="{{ request()->is('lien-he*') ? 'active' : '/' }}"href="{{URL::asset('/lien-he/')}}">LIÊN HỆ</a></li>
                            {{--<li><a href="">ABOUT US</a></li>--}}
                            <li><a href="">ĐẶT TIỆC NGAY</a></li>
                            <li>
                                <div id="sc_network">
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
