<style>
    /*#h_4 h5{*/
        /*font-size: 30px;*/
        /*font-weight: bold;*/
        /*color: #f9bf80;*/
    /*}*/

    /*#h_4 #owl_ykkh .owl-items img{*/

        /*width: 138px;*/
        /*height: 138px;*/
        /*border-radius: 50%;*/
        /*margin: auto;*/

    /*}*/

    /*#h_4 #owl_ykkh .owl-items h5{*/
        /*width: fit-content;*/
        /*color: white;*/
        /*font-size: 20px;*/
        /*padding-bottom: 10px;*/
        /*!*margin: auto;*!*/
        /*margin-left: 20px;*/
    /*}*/

    /*#h_4 #owl_ykkh .owl-items p{*/
        /*color: white;*/
        /*line-height: 20px;*/
        /*padding-bottom: 10px;*/
        /*width: 90%;*/
        /*margin: auto;*/
        /*transition: .3s;*/
    /*}*/

    /*#h_4 #owl_ykkh .owl-items span{*/
        /*color: white;*/
        /*margin: auto;*/
    /*}*/

    /*@media only screen and (max-width: 800px) {*/
        /*#h_4 #owl_ykkh .owl-items p{*/
            /*width: 100%;*/
        /*}*/

        /*#h_4 #owl_ykkh .owl-items h5{*/
            /*margin-top: 20px;*/
            /*margin-left: 0;*/
            /*margin: auto;*/
        /*}*/
    /*}*/
</style>
<div class="container-fluid mb-5" id="h_4">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center pb-4">
                <h5>Ý KIẾN KHÁCH HÀNG</h5>
            </div>

            <div class="col-md-12">
                <div id="owl_ykkh" class="owl-carousel owl-theme">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="owl-items d-flex flex-md-row flex-column justify-content-lg-start justify-content-center">
                        <img src="{{URL::asset('images/khtt/co_be_tra_sua1_jpg0.jpg')}}" alt="">
                        <div class="pl-3">
                        <h5 class="text-left">Joyce chow</h5>
                        <p>“Cám ơn vì đã phục vụ cho chúng tôi một buổi tối vui vẻ và rất tuyệt vời”&nbsp;</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

        </div>
    </div>
</div>