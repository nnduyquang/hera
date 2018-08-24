<style>
    {{--#h_2 #bg_dichvu{--}}
        {{--background-image: url({{URL::asset('images/bg/banner-dich-vu-food-decor.jpg')}});--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-position: center center;--}}
        {{--/*background-attachment: fixed;*/--}}
    {{--}--}}

    {{--#h_2 #bg_dichvu p{--}}
       {{--color: white;--}}
        {{--font-size: 68px;--}}
        {{--font-weight: 600;--}}
        {{--padding: 38px 0;--}}
    {{--}--}}

    {{--#h_2 .dv-content{--}}
        {{--min-height: 380px;--}}
        {{--overflow: hidden;--}}
        {{--position: relative;--}}
    {{--}--}}

    {{--#h_2 .dv-content #hoi_nghi{--}}
        {{--background-image: url(images/uploads/div1.jpg);--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-position: center center;--}}
        {{--min-height: 380px;--}}
        {{--transition: .3s;--}}

    {{--}--}}

    {{--#h_2 .dv-content #tiec_cuoi{--}}
        {{--background-image: url(images/uploads/dv2.jpg);--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-position: center center;--}}
        {{--min-height: 380px;--}}
        {{--transition: .3s;--}}
    {{--}--}}

    {{--#h_2 .dv-content #su_kien{--}}
        {{--background-image: url(images/uploads/dv3.jpg);--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-position: center center;--}}
        {{--min-height: 380px;--}}
        {{--transition: .3s;--}}
    {{--}--}}

    {{--#h_2 .dv-content #tiec_ngoai_troi{--}}
        {{--background-image: url(images/uploads/dv4.jpg);--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-position: center center;--}}
        {{--min-height: 380px;--}}
        {{--transition: .3s;--}}
    {{--}--}}

    {{--#h_2 .dv-content:hover div{--}}
        {{--transform: scale(1.2);--}}
    {{--}--}}

    {{--#h_2 .dv-content p{--}}
        {{--width: 100%;--}}
        {{--display: inline;--}}
        {{--font-size: 22px;--}}
        {{--color: white;--}}
        {{--font-weight: 600;--}}
        {{--position: absolute;--}}
        {{--bottom: 30px;--}}
        {{--left: 50%;--}}
        {{--transform: translateX(-50%);--}}
    {{--}--}}
</style>

<div id="h_2">
    <div class="container-fluid wow fadeIn slow" id="bg_dichvu" style="background-image:url({{URL::asset('images/bg/banner-dich-vu-food-decor.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 pb-5 text-center">
                    <p>DỊCH VỤ</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4 text-center">
                    <p class="text-white" style="line-height: 20px">
                        Tại Hera Center, sự kiện của bạn dẫn đầu xu hướng và lưu lại dấu ấn đỉnh cao cho từng thực khách trải nghiệm.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="">

            <div class="row text-center">
                <div class="col-md-3 p-0 dv-content" >
                    <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">
                    <div id="hoi_nghi" style="background-image:url({{URL::asset('images/uploads/div1.jpg')}});">
                    </div>
                    <p>HỘI NGHỊ</p>
                    </a>
                </div>
                <div class="col-md-3 p-0  dv-content">
                    <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">
                    <div  id="tiec_cuoi" style="background-image:url({{URL::asset('images/uploads/dv2.jpg')}});">
                    </div>
                    <p>TIỆC CƯỚI</p>
                    </a>
                </div>
                <div class="col-md-3 p-0  dv-content">
                    <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">
                    <div id="su_kien" style="background-image:url({{URL::asset('images/uploads/dv3.jpg')}});">
                    </div>
                    <p>SỰ KIỆN</p>
                    </a>
                </div>
                <div class="col-md-3  p-0  dv-content">
                    <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">
                    <div id="tiec_ngoai_troi" style="background-image:url({{URL::asset('images/uploads/dv4.jpg')}});">
                    </div>
                    <p>TIỆC NGOÀI TRỜI</p>
                    </a>
                </div>
            </div>

    </div>
</div>