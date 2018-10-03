<div id="h_3">
    <div class="container-fluid">
        <div class="container">
            <div class="row pt-5 pb-5">

                <div class="col-md-12 text-center pb-4">
                    <h5>ƯU ĐÃI</h5>
                </div>

                @foreach($uudai as $key=>$item)
                <div class="col-md-4 tin-tuc wow fadeInLeft" data-wow-delay="300ms">
                    <div class="img-tin-tuc" style="background-image:url({{URL::asset($item->image)}});">

                    </div>
                    <a href="{{URL::to('uu-dai/'.$item->path)}}"><h3>{{$item->title}}</h3></a>
                    <p>{!! $item->description !!}</p>
                    <div class="btn-docthem mt-4"><a href="{{URL::to('uu-dai/'.$item->path)}}">ĐỌC THÊM</a></div>
                </div>
                @endforeach
                {{--<div class="col-md-4 tin-tuc wow fadeInLeft" data-wow-delay="500ms">--}}
                    {{--<div class="img-tin-tuc"  style="background-image:url({{URL::asset('images/uploads/tt2.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href=""><h3>[SPECIAL EDITION] CƯỚI XU HƯỚNG MỚI – TRỌN TIỆC 85 TRIỆU ĐỒNG !!</h3></a>--}}
                    {{--<p>Ưu đãi voucher giảm 40% – 50% combo trang điểm + làm tóc cô dâu từ thương </p>--}}
                    {{--<div class="btn-docthem mt-4"><a href="">ĐỌC THÊM</a></div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 tin-tuc wow fadeInLeft" data-wow-delay="700ms">--}}
                    {{--<div class="img-tin-tuc" style="background-image:url({{URL::asset('images/uploads/tt3.jpg')}});">--}}

                    {{--</div>--}}
                    {{--<a href=""><h3>[SPECIAL EDITION] CƯỚI XU HƯỚNG MỚI – TRỌN TIỆC 85 TRIỆU ĐỒNG !!</h3></a>--}}
                    {{--<p>Ưu đãi voucher giảm 40% – 50% combo trang điểm + làm tóc cô dâu từ thương </p>--}}
                    {{--<div class="btn-docthem mt-4"><a href="">ĐỌC THÊM</a></div>--}}

                {{--</div>--}}

            </div>
        </div>
    </div>
</div>