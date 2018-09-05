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

    p[x-apple-data-detectors] {
        color: white !important;
        background-color: transparent!important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

</style>

<div id="c_1">
    <div class="container-fluid animated fadeIn slow pt-5 pb-5" id="bg_dichvu" style=" background-image: url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/01/home-service.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 pb-5 text-center">
                    <p>LIÊN HỆ</p>
                    {{--<span><a href="{{URL::asset('/')}}">TRANG CHỦ</a> > LIÊN HỆ</span>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row pt-5 pb-5 align-items-center">


                <div class="col-md-6 text-center">
                    <div class=" mb-3 d-flex align-items-center justify-content-center" style="width: 168px;height: 168px;border-radius: 50%;margin: auto;background-color:#fff;padding: 3px">
                    <img class="" src="{{URL::asset('images/logo/logo-hera-center.png')}}" alt=""
                         style="width: 86px;height: auto;">
                    <br>
                    </div>
                    <span>ĐỊA CHỈ</span>
                    <p class="pt-3">
                        <a href="https://www.google.com/maps/place/Trung+T%C3%A2m+H%E1%BB%99i+Ngh%E1%BB%8B+Ti%E1%BB%87c+C%C6%B0%E1%BB%9Bi+Hera/@10.8017213,106.6161741,16.75z/data=!4m13!1m7!3m6!1s0x31752bfad2e24577:0x68be46a4292008c6!2zNzAgxJDGsOG7nW5nIE4xLCBTxqFuIEvDvSwgVMOibiBQaMO6LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!3b1!8m2!3d10.8043586!4d106.6197277!3m4!1s0x31752bf00fec5333:0x4966fc0d06bb3c3b!8m2!3d10.80335!4d106.6173396" style="background-color:transparent;color: white;font-weight: lighter">
                            02 đường D2, Celadon City, Q.Tân Phú, TP.HCM
                        </a>
                    </p>
                    <span>Hotline</span>
                    <p class="pt-3">
                        &zwj;0166-399-7777
                    </p>
                    {{--<p>0984 377 727 (Hội nghị)</p>--}}

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

                <div class="col-md-12 mt-5 pb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0907160819697!2d106.6175390140478!3d10.804363861633602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bf00fec5333%3A0x4966fc0d06bb3c3b!2zVHJ1bmcgVMOibSBI4buZaSBOZ2jhu4sgVGnhu4djIEPGsOG7m2kgSGVyYQ!5e0!3m2!1sen!2s!4v1535711100697" width="100%  " height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>


            </div>
        </div>
    </div>


</div>