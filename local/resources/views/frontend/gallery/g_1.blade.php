<style>
    /*#g_1 #bg_dichvu {*/
        /*-webkit-background-size: cover;*/
        /*background-size: cover;*/
        /*background-position: center center;*/
        /*!*background-attachment: fixed;*!*/
        /*padding-bottom: 30px;*/

    /*}*/

    /*#g_1 #bg_dichvu p {*/
        /*color: white;*/
        /*font-size: 58px;*/
        /*font-weight: 600;*/
        /*padding: 38px 0 16px 0;*/
        /*text-shadow: 0px 2px 2px black;*/
    /*}*/

    /*#g_1 #bg_dichvu span {*/
        /*color: white;*/
        /*font-size: 13px;*/
        /*text-shadow: 0px 2px 2px black;*/

    /*}*/

    /*#g_1 #bg_dichvu span a {*/
        /*color: white;*/
    /*}*/

    /*#g_1 #noidung h5 {*/
        /*font-size: 22px;*/
        /*padding-bottom: 38px;*/
    /*}*/

    /*#g_1 #noidung p {*/
        /*color: white;*/
        /*line-height: 24px;*/
        /*padding-bottom: 20px;*/

    /*}*/

    /*#g_1 #noidung h6 {*/
        /*padding-top: 50px;*/
        /*padding-bottom: 20px;*/
        /*font-size: 22px;*/
        /*color: #f9bf80;*/
    /*}*/

    /*!* Style the tab *!*/
    /*.tab {*/
        /*overflow: hidden;*/
        /*border-bottom: 3px solid #f9bf80;*/
        /*!*background-color: #f1f1f1;*!*/
        /*color: white;*/
    /*}*/

    /*!* Style the buttons inside the tab *!*/
    /*.tab button {*/
        /*background-color: inherit;*/
        /*float: left;*/
        /*border: none;*/
        /*outline: none;*/
        /*cursor: pointer;*/
        /*padding: 14px 16px;*/
        /*transition: 0.3s;*/
        /*font-size: 17px;*/
        /*color: white;*/
    /*}*/

    /*!* Change background color of buttons on hover *!*/
    /*.tab button:hover {*/
        /*color: #f9bf80;*/
    /*}*/

    /*!* Create an active/current tablink class *!*/
    /*.tab button.active {*/
        /*!*background-color: #ccc;*!*/
        /*color: #f9bf80;*/
    /*}*/

    /*!* Style the tab content *!*/
    /*.tabcontent {*/
        /*display: none;*/
        /*padding: 6px 12px;*/
        /*!*border: 1px solid #ccc;*!*/
        /*border-top: none;*/
        /*padding-top: 30px;*/
    /*}*/

    /*.tabcontent .one-images {*/
        /*min-height: 218px;*/
        /*!*width: 90%;*!*/
        /*margin: auto;*/
        /*overflow: hidden;*/
        /*background-position: center center;*/
        /*-webkit-background-size: cover;*/
        /*background-size: cover;*/
        /*background-repeat: no-repeat;*/
        /*margin-bottom: 30px;*/
    /*}*/

</style>

<div id="g_1">
    <div class="container-fluid animated fadeIn slow" id="bg_dichvu" style="background-image: url({{URL::asset('https://cuoihoi365.com.vn/wp-content/uploads/2018/01/image014-2.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 pb-5 text-center">
                    <p>HÌNH ẢNH</p>
                    <span><a href="{{URL::asset('/')}}">TRANG CHỦ</a> > HÌNH ẢNH</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4">


                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">SẢNH 1</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">SẢNH 2</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">SẢNH 3</button>
                        <button class="tablinks" onclick="openCity(event, 'Outdoor')">NGOÀI TRỜI</button>
                    </div>

                    <div id="London" class="tabcontent">
                        <div class="row">
                            @for ($i = 0; $i < 16; $i++)
                                <div class="col-md-3">
                                    <div class=" one-images"
                                         style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/01/Hinh-1-300x300.jpg')}});">

                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div id="Paris" class="tabcontent">
                        <div class="row">
                            @for ($i = 0; $i < 16; $i++)
                                <div class="col-md-3">
                                    <div class=" one-images"
                                         style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/01/IMG_1320-1-300x300.jpg')}});">

                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <div class="row">
                            @for ($i = 0; $i < 16; $i++)
                                <div class="col-md-3">
                                    <div class="one-images"
                                         style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/01/JAME0035-300x300.jpg')}});">

                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div id="Outdoor" class="tabcontent">
                        <div class="row">
                            @for ($i = 0; $i < 16; $i++)
                                <div class="col-md-3">
                                    <div class="one-images"
                                         style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/01/JAME0035-300x300.jpg')}});">

                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


</div>