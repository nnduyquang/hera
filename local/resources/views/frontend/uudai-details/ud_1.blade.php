<div id="ud_1">
    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row pt-4 pb-4">
                <div class="col-md-9">

                    <div class="row">

                        <div class="col-12 text-center">
                            <h1>{{$post->title}}</h1>
                            <span><i class="far fa-calendar-alt"></i> {{$post->created_at}}</span>
                        </div>

                        <div class="col-12">
                            {!! $post->content !!}
                        </div>

                    </div>

                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-white">TIN TỨC KHÁC</h5>
                            @foreach($other as $key=>$item)
                                <div>
                                    <span> <i class="far fa-calendar-alt"></i> {{$item->created_at}}</span>
                                    <h2><a href="{{URL::to('tin-tuc/'.$item->path)}}">{{$item->title}}</a></h2>
                                </div>
                            @endforeach

                            {{--<div>--}}
                                {{--<span> <i class="far fa-calendar-alt"></i> 28-07-2018</span>--}}
                                {{--<h2><a href="">“KHÔNG GIAN ÁNH SÁNG” CỦA SỰ KIỆN RA MẮT MỸ PHẨM"</a></h2>--}}
                            {{--</div>--}}

                            {{--<div>--}}
                                {{--<span> <i class="far fa-calendar-alt"></i> 28-07-2018</span>--}}
                                {{--<h2><a href="">“KHÔNG GIAN ÁNH SÁNG” CỦA SỰ KIỆN RA MẮT MỸ PHẨM"</a></h2>--}}
                            {{--</div>--}}

                            {{--<img class="wow zoomIn" src="https://capellagallery.com/wp-content/uploads/2018/06/Uu-viet-cong-nghe-so_Banner-700-x-1780.jpg" alt="">--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

