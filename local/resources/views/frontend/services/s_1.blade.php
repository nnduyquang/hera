<style>

</style>

<div id="s_1">

    @include('frontend.services.banner-title')

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
            <div class="col-md-3 p-0 dv-content">
                <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">
                    <div id="hoi_nghi"  style="background-image: url({{URL::asset('images/uploads/div1.jpg')}})">
                    </div>
                    <p>HỘI NGHỊ</p>
                </a>
            </div>
            <div class="col-md-3 p-0  dv-content" >
                <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">
                    <div  id="tiec_cuoi"  style="background-image: url({{URL::asset('images/uploads/dv2.jpg')}})">
                    </div>
                    <p>TIỆC CƯỚI</p>
                </a>
            </div>
            <div class="col-md-3 p-0  dv-content">
                <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">
                    <div id="su_kien"  style="background-image: url({{URL::asset('images/uploads/dv3.jpg')}})">
                    </div>
                    <p>SỰ KIỆN</p>
                </a>
            </div>
            <div class="col-md-3  p-0  dv-content">
                <a href="{{URL::asset('/dich-vu/dich-vu.html')}}">
                    <div id="tiec_ngoai_troi"  style="background-image: url({{URL::asset('images/uploads/dv4.jpg')}})">
                    </div>
                    <p>TIỆC NGOÀI TRỜI</p>
                </a>
            </div>
        </div>

    </div>
</div>