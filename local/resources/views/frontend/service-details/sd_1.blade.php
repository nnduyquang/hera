<div id="sd_1">



    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
        <div id="sd-bottom">
            <div class="container">
                <div class="sd-bottom-carousel">
                    <div class="owl-carousel owl-theme sd-b-owl">
                        @php
                            $listImage=explode(';',$post->sub_image);
                        @endphp
                        @foreach($listImage as $key=>$item)
                        <div class="one-item">
                            <div class="col-md-12 pr-2">
                                <a class="fancybox" data-caption=""
                                   data-fancybox="gallery-cus"
                                   href="{{URL::asset($item)}}"><img
                                            src="{{URL::asset($item)}}"
                                            alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach
                        {{--<div class="one-item">--}}
                            {{--<div class="col-md-12 pr-2">--}}
                                {{--<a class="fancybox" data-caption="Bơm Hỏa Tiễn - Chung Cư Him Lam"--}}
                                   {{--data-fancybox="gallery-cus"--}}
                                   {{--href="https://capellagallery.com/wp-content/uploads/2018/01/hn4-300x225.jpg"><img--}}
                                            {{--src="https://capellagallery.com/wp-content/uploads/2018/01/hn4-300x225.jpg"--}}
                                            {{--alt="">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="one-item">--}}
                            {{--<div class="col-md-12 pr-2">--}}
                                {{--<a class="fancybox" data-caption="Bơm Hỏa Tiễn - Chung Cư Him Lam"--}}
                                   {{--data-fancybox="gallery-cus"--}}
                                   {{--href="https://capellagallery.com/wp-content/uploads/2018/01/hn3-300x225.jpg"><img--}}
                                            {{--src="https://capellagallery.com/wp-content/uploads/2018/01/hn3-300x225.jpg"--}}
                                            {{--alt="">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="one-item">--}}
                            {{--<div class="col-md-12 pr-2">--}}
                                {{--<a class="fancybox" data-caption="Bơm Hỏa Tiễn - Chung Cư Him Lam"--}}
                                   {{--data-fancybox="gallery-cus"--}}
                                   {{--href="https://capellagallery.com/wp-content/uploads/2018/01/hn3-300x225.jpg"><img--}}
                                            {{--src="https://capellagallery.com/wp-content/uploads/2018/01/hn3-300x225.jpg"--}}
                                            {{--alt="">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="one-item">--}}
                            {{--<div class="col-md-12 pr-2">--}}
                                {{--<a class="fancybox" data-caption="Bơm Hỏa Tiễn - Chung Cư Him Lam"--}}
                                   {{--data-fancybox="gallery-cus"--}}
                                   {{--href="https://capellagallery.com/wp-content/uploads/2018/01/hn3-300x225.jpg"><img--}}
                                            {{--src="https://capellagallery.com/wp-content/uploads/2018/01/hn3-300x225.jpg"--}}
                                            {{--alt="">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="nav-arrow">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>