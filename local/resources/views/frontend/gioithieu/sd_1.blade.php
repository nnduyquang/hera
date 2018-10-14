<div id="sd_1">

    <div class="container-fluid pb-5 pt-5" id="noidung">
        <div class="container">
            <div class="row d-lg-flex align-items-center">
                <div class="col-md-6 pt-4 pb-4" style="border: 3px solid white">
                    <div class="">
                        {{--{!! $post->content !!}--}}
                        <p>Tọa lạc tại khu đô thị Celadon City Tân Phú, Trung tâm hội nghị tiệc cưới Hera được xây dựng
                            trên tổng diện tích 4.200m2 với lối kiến trúc hiện đại. Cùng với chất lượng dịch vụ đẳng
                            cấp, công nghệ tiên tiến và hệ thống sảnh theo tiêu chuẩn 3*, Hera Center là địa điểm lý
                            tưởng, phù hợp cho nhiều loại hình tiệc hội nghị, sự kiện và tiệc cưới sang trọng.</p>
                    </div>
                </div>

                <div class="col-md-6 pl-lg-4 p-0 pr-lg-0">
                    <div id="sd-bottom" class="mt-3">

                        <div class="sd-bottom-carousel">
                            <div class="owl-carousel owl-theme sd-b-owl">
                                {{--@php--}}
                                {{--$listImage=explode(';',$post->sub_image);--}}
                                {{--@endphp--}}
                                {{--@foreach($listImage as $key=>$item)--}}
                                {{--<div class="one-item" >--}}
                                {{--<div class="col-md-12 pr-2" >--}}
                                {{--<a class="fancybox" data-caption=""--}}
                                {{--data-fancybox="gallery-cus"--}}
                                {{--href="{{URL::asset($item)}}"><img--}}
                                {{--src="{{URL::asset($item)}}"--}}
                                {{--alt="">--}}
                                {{--</a>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--@endforeach--}}
                                <img src="{{URL::asset('images/slider/home-2.png')}}" alt="">
                            </div>
                            <div class="nav-arrow">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>