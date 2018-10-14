<div id="h_1">
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow zoomIn" >
                    <div id="gioi_thieu" style="height: 296px;overflow-y: auto;vertical-align: middle">
                        <a href=""><h6>GIỚI THIỆU</h6></a>
                        <p>
                            {!! $gioithieu->description !!}
                            {{--<a href="" class="float-right pt-4 pb-4">Xem thêm</a>--}}
                        </p>

                        {{--<p class="text-right"><a href="">Xem thêm</a></p>--}}
                    </div>
                </div>
                <div class="col-md-6 wow zoomIn">
                    <div id="thuvien_hinhanh">

                        <a href="">
                        <div class="img-daidien" style="background-image: url({{URL::asset($gioithieu->image)}});">
                            <div class="img-overlay">
                                <a href="{{URL::to('thu-vien')}}"> <i class="fas fa-camera-retro"></i> THƯ VIỆN</a>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>