<style>
    /*#h_1 #gioi_thieu{*/
        /*border: 3px solid white;*/
        /*padding: 20px;*/
        /*color: white;*/
    /*}*/

    /*#h_1 #gioi_thieu a{*/
        /*color:#f9bf80;*/
    /*}*/

    /*#h_1 #gioi_thieu a h6{*/
        /*font-size: 28px;*/
        /*padding-bottom: 20px;*/
        /*font-weight: 600;*/
    /*}*/

    /*#h_1 #gioi_thieu p{*/
        /*line-height: 26px;*/
    /*}*/

    /*#h_1 #gioi_thieu p a{*/
        /*color: white;*/
        /*transition: .3s;*/
    /*}*/

    /*#h_1 #gioi_thieu p a:hover{*/
        /*color: #f9bf80;*/
    /*}*/

    /*#h_1 #thuvien_hinhanh{*/
        /*width: 100%;*/
        /*height: 296px;*/
        /*overflow: hidden;*/
        /*position: relative;*/
    /*}*/

    /*#h_1 #thuvien_hinhanh:before{*/

        /*z-index: 2;*/
        /*position: absolute;*/
        /*content: '';*/
        /*width: 0px;*/
        /*height: 0px;*/
        /*border-top: 2px solid white;*/
        /*border-left: 2px solid white;*/
        /*top:10px;*/
        /*left: 10px;*/
        /*opacity: 0;*/
        /*transition: .3s;*/

    /*}*/

    /*#h_1 #thuvien_hinhanh:after{*/

        /*position: absolute;*/
        /*content: '';*/
        /*width: 0px;*/
        /*height: 0px;*/
        /*border-bottom: 2px solid white;*/
        /*border-right: 2px solid white;*/
        /*right:10px;*/
        /*bottom: 10px;*/
        /*opacity: 0;*/
        /*transition: .3s;*/
        /*z-index: 2;*/

    /*}*/

    /*#h_1 #thuvien_hinhanh:hover:before,#h_1 #thuvien_hinhanh:hover:after{*/
        /*width: 68px;*/
        /*height: 86px;*/
        /*opacity: 1;*/
    /*}*/

    /*#h_1 #thuvien_hinhanh .img-daidien{*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*background-image: url(images/uploads/thuc-doi-tiec-cuoi-riversideplace1-494.jpg);*/
        /*background-position: center center;*/
        /*background-repeat: no-repeat;*/
        /*-webkit-background-size: cover;*/
        /*background-size: cover;*/
        /*transition: .3s;*/
    /*}*/
    /*#h_1 #thuvien_hinhanh .img-daidien:hover{*/
        /*transform: scale(1.3);*/
    /*}*/

    /*#h_1 #thuvien_hinhanh .img-daidien .img-overlay{*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*background-color: rgba(00,00,00,0.6);*/
        /*opacity: 0;*/
        /*transition: .3s;*/
    /*}*/

    /*#h_1 #thuvien_hinhanh .img-daidien:hover .img-overlay{*/
        /*opacity: 1;*/
    /*}*/

    /*#h_1 #thuvien_hinhanh .img-daidien .img-overlay a{*/
        /*position: absolute;*/
        /*left: 50%;*/
        /*top: 50%;*/
        /*transform: translate(-50%,-50%);*/
        /*z-index: 2;*/
        /*color: #2a2a2a;*/
        /*font-size: 12px;*/
        /*background-color: #fff;*/
        /*!*border-radius: 12px;*!*/
        /*padding: 9px 12px 8px 12px;*/
        /*transition: 0.8s;*/
        /*opacity: 0;*/
        /*font-weight: bold;*/
    /*}*/

    /*#h_1 #thuvien_hinhanh .img-daidien .img-overlay a{*/
        /*opacity: 1;*/
    /*}*/


    /*#h_1 #thuvien_hinhanh .img-daidien .img-overlay a:hover{*/
        /*background-color: #e8bc91;*/
        /*color: white;*/
    /*}*/

    /*@media only screen and (max-width: 800px) {*/
        /*#h_1 #gioi_thieu{*/
            /*margin-bottom: 20px;*/
        /*}*/
    /*}*/

</style>

<div id="h_1">
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow zoomIn">
                    <div id="gioi_thieu">
                        <a href=""><h6>GIỚI THIỆU</h6></a>
                        <p class="pb-3">Tọa lạc tại khu đô thị Celadon City Tân Phú, Trung tâm hội nghị tiệc cưới
                            Hera được xây dựng trên tổng diện tích 4.200m2 với lối kiến trúc hiện đại.
                            Cùng với chất lượng dịch vụ đẳng cấp, công nghệ tiên tiến và hệ thống sảnh
                            theo tiêu chuẩn 3*, Hera Center là địa điểm lý tưởng, phù hợp cho nhiều loại
                            hình tiệc hội nghị, sự kiện và tiệc cưới sang trọng.
                            {{--<a href="" class="float-right pt-4 pb-4">Xem thêm</a>--}}
                        </p>

                        <p class="text-right"><a href="">Xem thêm</a></p>
                    </div>
                </div>
                <div class="col-md-6 wow zoomIn">
                    <div id="thuvien_hinhanh">

                        <a href="">
                        <div class="img-daidien" style="background-image: url({{URL::asset('images/uploads/thuc-doi-tiec-cuoi-riversideplace1-494.jpg')}});">
                            <div class="img-overlay">
                                <a href=""> <i class="fas fa-camera-retro"></i> HÌNH ẢNH</a>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>