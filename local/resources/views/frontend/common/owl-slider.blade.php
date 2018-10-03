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
        @php
            $listImage=explode(';',$sliders);
        @endphp
        @foreach($listImage as $key=>$item)
        <div class="owl-items" style="background-image:url({{URL::asset($item)}});">

        </div>
        @endforeach

    </div>
</div>