<style>
    #owl_slider {
        width: 100%;
        height: 100vh;
    }

    #owl_slider .owl-items {
        height: 100vh;
        width: 100%;
        background-position: center center;
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        background-size: cover;
    }

    @media only screen and (max-width: 750px) {
        #owl_slider {

            height: 70vh;
        }

        #owl_slider .owl-items {
            height: 70vh;
            width: 100%;
        }
    }
</style>
<div class="slider">
    <div id="owl_slider" class="owl-carousel owl-theme">
        {{--@for ($i = 0; $i < 6; $i++)--}}
        {{--@endfor--}}
        <div class="owl-items" style="background-image:url({{URL::asset('images/slider/home-1.png')}});">

        </div>
        <div class="owl-items" style="background-image:url({{URL::asset('images/slider/home-2.png')}});">

        </div>
        <div class="owl-items" style="background-image:url({{URL::asset('images/slider/home-3.png')}});">

        </div>
        <div class="owl-items" style="background-image:url({{URL::asset('images/slider/home-4.png')}});">

        </div>
        <div class="owl-items" style="background-image:url({{URL::asset('images/slider/home-5.png')}});">

        </div>

    </div>
</div>