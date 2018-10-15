<style>
    #owl_slider {
        width: 100%;
        height: 100vh;
        position: relative;
    }

    #owl_slider .owl-items {
        height: 100vh;
        width: 100%;
        background-position: center center;
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        background-size: cover;
    }

    .owl-theme .owl-nav {
    }
    .owl-theme .owl-nav button{
        font-size: 50px!important;
        cursor: pointer;
        color: white!important;
        opacity: 0.7;
        transition: 0.6s;
    }

    .owl-theme .owl-nav button:hover{
        background-color: transparent!important;
        color: white!important;
        opacity: 1;
    }

    .owl-theme .owl-nav button:focus{
        outline: none;
    }

    .owl-theme .owl-nav .owl-next {
        position: absolute;
        right: 38px;
        top: 50%;
        transform: translateY(-50%);
        z-index: 20;
    }

    .owl-theme .owl-nav .owl-prev {
        position: absolute;
        left: 48px;
        top: 50%;
        transform: translateY(-50%);
        z-index: 20;
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