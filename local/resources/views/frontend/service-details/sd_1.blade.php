<div id="sd_1">

    <div class="container-fluid pb-5 pt-5" id="noidung">
        <div class="container">
            <div class="row d-lg-flex align-items-center">
                <div class="col-md-6 pt-4 pb-4" style="border: 3px solid white">
                    <div class="">
                    {!! $post->content !!}
                    </div>
                </div>

                <div class="col-md-6 pl-lg-4 p-0 pr-lg-0">
                    <div id="sd-bottom" class="mt-3">

                            <div class="sd-bottom-carousel">
                                <div class="owl-carousel owl-theme sd-b-owl">
                                    @php
                                        $listImage=explode(';',$post->sub_image);
                                    @endphp
                                    @foreach($listImage as $key=>$item)
                                        <div class="one-item" >
                                            {{--<div class="col-md-12 pr-2" >--}}
                                                <a class="fancybox" data-caption=""
                                                   data-fancybox="gallery-cus"
                                                   href="{{URL::asset($item)}}"><img
                                                            src="{{URL::asset($item)}}"
                                                            alt="">
                                                </a>
                                            {{--</div>--}}
                                        </div>
                                    @endforeach
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