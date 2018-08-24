<style>

    /*#h_5 h5{*/
        /*font-size: 30px;*/
        /*font-weight: bold;*/
        /*color: #f9bf80;*/
    /*}*/

    /*#h_5 #owl_doitac .owl-items{*/
        /*margin-bottom: 20px;*/
    /*}*/

    /*#h_5 #owl_doitac .owl-items .owl-img{*/

        /*width: 138px;*/
        /*height: 138px;*/
        /*!*border-radius: 50%;*!*/
        /*margin: auto;*/
        /*background-position: center center;*/
        /*-webkit-background-size: cover;*/
        /*background-size: cover;*/
        /*background-repeat: no-repeat;*/

    /*}*/


</style>

<div id="h_5">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pb-4">
                    {{--<h5>--}}
                        {{--<h5>ĐỐI TÁC</h5>--}}
                    {{--</h5>--}}
                </div>
                <div class="col-md-12 mb-5">
                    <div id="owl_doitac" class="owl-carousel owl-theme">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="owl-items">
                                <div class="owl-img" style="background-image: url({{URL::asset('images/khtt/1049_joycebeauty_logo.png')}});">
                                {{--<img src="{{URL::asset('images/khtt/co_be_tra_sua1_jpg0.jpg')}}" alt="">--}}
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>