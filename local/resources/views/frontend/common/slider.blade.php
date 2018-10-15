<style>
    .slider{
        height: 100vh;
        width: 100%;
        position: relative;
    }

    .slider .slider1{
        width: 100%;
        height: 100%;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        /*position: relative;*/
        /*width: 100%;*/
        /*height: 0;*/
        /*padding-bottom: 56.25%;*/
    }

    /*.slider .slider1 .video {*/
        /*position: absolute;*/
        /*top: 0;*/
        /*left: 0;*/
        /*width: 100%;*/
        /*height: 100%;*/
    /*}*/

    @media only screen and (max-width: 1300px) {
        .slider{
            height: 100vh;
            width: 100%;
        }
    }
</style>
<div class="slider">
    <div id="owl_slide" class="owl-carousel owl-theme">
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