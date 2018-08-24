<style>
    /*#c_1 #bg_dichvu {*/
        /*-webkit-background-size: cover;*/
        /*background-size: cover;*/
        /*background-position: center center;*/
        /*!*background-attachment: fixed;*!*/
        /*padding-bottom: 30px;*/

    /*}*/

    /*#c_1 #bg_dichvu p {*/
        /*color: white;*/
        /*font-size: 58px;*/
        /*font-weight: 600;*/
        /*padding: 38px 0 16px 0;*/
        /*text-shadow: 0px 2px 2px black;*/
    /*}*/

    /*#c_1 #bg_dichvu span {*/
        /*color: white;*/
        /*font-size: 13px;*/
        /*text-shadow: 0px 2px 2px black;*/

    /*}*/

    /*#c_1 #bg_dichvu span a {*/
        /*color: white;*/
    /*}*/

    /*#c_1 #noidung h5 {*/
        /*color: white;*/
        /*font-size: 26px;*/
        /*padding-bottom: 18px;*/
    /*}*/

    /*#c_1 #noidung p {*/
        /*color: white;*/
        /*line-height: 24px;*/
        /*padding-bottom: 20px;*/

    /*}*/

    /*#c_1 #noidung h6 {*/
        /*padding-top: 10px;*/
        /*padding-bottom: 20px;*/
        /*font-size: 20px;*/
        /*font-weight: lighter;*/
        /*color: #f9bf80;*/

    /*}*/

    /*#c_1 #noidung span {*/
        /*color: #f9bf80;*/
        /*font-weight: ;*/
    /*}*/

    /*#c_1 #noidung a {*/
        /*background-color: #f9bf80;*/
        /*color: #2a2a2a;*/
        /*font-weight: 600;*/
        /*padding: 8px 20px 6px 20px;*/
        /*border-radius: 8px;*/
    /*}*/

    /*!* Style the tab *!*/

    /*#c_1 #noidung input {*/
        /*width: 100%;*/
        /*border-radius: 5px;*/
        /*padding: 10px 20px;*/
        /*margin-bottom: 20px;*/
    /*}*/

    /*#c_1 #noidung input:focus {*/
        /*outline: none;*/
    /*}*/

    /*#c_1 #noidung textarea {*/
        /*width: 100%;*/
        /*border-radius: 5px;*/
    /*}*/

    /*@media only screen and (max-width: 800px) {*/

    /*}*/

</style>

<div id="c_1">
    <div class="container-fluid animated fadeIn slow" id="bg_dichvu" style=" background-image: url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/01/home-service.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 pb-5 text-center">
                    <p>LIÊN HỆ</p>
                    <span><a href="{{URL::asset('/')}}">TRANG CHỦ</a> > LIÊN HỆ</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row pt-5 pb-5 align-items-center">


                <div class="col-md-6 text-center">
                    <img class="mb-4" src="{{URL::asset('images/logo/logo-hera-center.png')}}" alt=""
                         style="width: 98px;height: auto;">
                    <br>
                    <span>ĐỊA CHỈ</span>
                    <p class="pt-3">70 đường CN1, P.Sơn Kỳ, Q.Tân Phú, TP.HCM</p>
                    <span>Hotline</span>
                    <p class="pt-3">
                        0166 399 7777 (Tiệc cưới) <br>
                        0984 377 727 (Hội nghị)
                    </p>

                    <span>EMAIL</span>
                    <p>info@heracenter.com</p>
                </div>

                <div class="col-md-6 text-center">
                    <h5>THÔNG TIN ĐẶT TIỆC</h5>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" placeholder="HỌ VÀ TÊN">
                        </div>
                        <div class="col-md-12">
                            <input type="text" placeholder="EMAIL">
                        </div>
                        <div class="col-md-12">
                            <input type="text" placeholder="SỐ ĐIỆN THOẠI">
                        </div>
                        <div class="col-md-12">
                            <input type="text" placeholder="LOẠI SỰ KIỆN">
                        </div>


                        <div class="col-md-6">
                            <input type="text" placeholder="mm/dd/YYYY">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="SỐ KHÁCH DỰ KIẾN">
                        </div>

                        <textarea class="m-3 p-3" placeholder="NỘI DUNG" name="" id="" cols="30" rows="10"></textarea>

                        <div class="col-12 mt-3">
                            <a href="">GỬI</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


</div>