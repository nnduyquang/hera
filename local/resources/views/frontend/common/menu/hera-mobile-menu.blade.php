<style>
/*#hera_mobile_menu #logo img{*/
    /*width: 100px;*/
    /*height: auto;*/

/*}*/

    /*#hera_mobile_menu_content {*/
        /*width: 100%;*/
        /*height: auto;*/
        /*background-color: #fff;*/
        /*transition: .3s;*/
        /*position: absolute;*/
        /*box-shadow: 0px 0px 2px 0px #2a2a2a;*/
        /*transition: .3s;*/
        /*top:80%;*/
        /*opacity: 0;*/
    /*}*/

/*#hera_mobile_menu_content ul{*/
    /*list-style-type: none;*/
    /*padding-left: 10px;*/
    /*padding-right: 10px;*/
/*}*/
/*#hera_mobile_menu_content ul li{*/
    /*width: 100%;*/
    /*padding: 10px 20px;*/
/*}*/
/*#hera_mobile_menu_content ul li a{*/
    /*color: #2a2a2a;*/
    /*font-size: 20px;*/
/*}*/

/*#hera_mobile_menu_content ul li a i{*/
    /*height: 38px;*/
    /*width: 38px;*/
    /*background-color: #6c757d;*/
    /*color: white;*/
    /*border-radius: 50%;*/
    /*line-height: 38px;*/
/*}*/

/*#hera_mobile_menu_content ul li a.active{*/
    /*color: #f9bf80;*/
/*}*/

/*#hera_mobile_menu_content ul li p{*/
    /*font-size: 20px;*/
    /*color: #0f74a8;*/
/*}*/

/*#hera_mobile_menu_content ul li p i{*/
    /*height: 38px;*/
    /*width: 38px;*/
    /*background-color: #0f74a8;*/
    /*color: white;*/
    /*border-radius: 50%;*/
    /*line-height: 38px;*/
/*}*/

/*#hera_mobile_menu_content ul li:nth-last-child(4) a{*/

    /*padding: 10px 20px;*/
    /*background-color: #0f74a8;*/
    /*color: white;*/
    /*border-radius: 5px;*/

/*}*/
/*#hera_mobile_menu_content ul li p span{*/
    /*color: #2a2a2a;*/
/*}*/
</style>

<div class="container-fluid p-0 position-relative d-lg-none d-md-none d-sm-block d-block" id="hera_mobile_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <div id="logo" class="pt-2 pb-2">
                    <img src="{{URL::asset('images/logo/logo-hera-center.png')}}" alt="" style="">
                </div>
                <div><i id="mobile_menu_click" class="fas fa-bars font-weight-bold fa-2x" ></i></div>
            </div>
        </div>
    </div>

    <div id="hera_mobile_menu_content">
        <ul>
            <li><a class="{{ request()->is('/') ? 'active' : '/' }}" href="{{URL::asset('/')}}">TRANG CHỦ</a></li>
            <li><a class="{{ request()->is('dich-vu*') ? 'active' : '/' }}" href="{{URL::asset('/dich-vu')}}">DỊCH VỤ</a></li>
            <li><a class="{{ request()->is('hinh-anh*') ? 'active' : '/' }}" href="{{URL::asset('/hinh-anh/')}}">HÌNH ẢNH</a></li>
            <li><a class="{{ request()->is('uu-dai*') ? 'active' : '/' }}" href="{{URL::asset('/uu-dai/')}}">ƯU ĐÃI</a></li>
            <li class="border-bottom"><a class="{{ request()->is('lien-he*') ? 'active' : '/' }}"href="{{URL::asset('/lien-he/')}}">LIÊN HỆ</a></li>
            <li class="text-center pt-4"><a href="" class="">ĐẶT TIỆC NGAY</a></li>
            <li class="text-center">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
            </li>
            <li class="text-center"><p class="pb-2"><span><i class="fas fa-phone-volume"></i></span>
                0984 377 727 (Hội nghị)</p>

            <p class="pb-3"><span><i class="fas fa-phone-volume"></i></span>
                0166 399 7777 (Tiệc cưới)</p></li>

        </ul>
    </div>

</div>





