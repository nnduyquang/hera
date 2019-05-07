<div id="sd_1">

    <div class="container-fluid pb-5 pt-5" id="noidung">
        <div class="container">
            <div class="row d-lg-flex align-items-center">
                <div class="col-md-6 pt-4 pb-4" style="border: 3px solid white;height: 400px;overflow-y: auto">
                    <div class="">
                        {!! $post->content !!}
                    </div>
                </div>

                <div class="col-md-6 pl-lg-4 p-0 pr-lg-0" style="height: 400px;">
                    <div id="sd-bottom" class="">
                        <div class="sd-bottom-carousel">
                            <div class="owl-carousel owl-theme sd-b-owl">
                                @php
                                    $listImage=explode(';',$post->sub_image);
                                @endphp
                                @foreach($listImage as $key=>$item)
                                    <a class="fancybox" data-caption=""
                                       data-fancybox="gallery-cus"
                                       href="{{URL::asset($item)}}">
                                        <div class="one-item"
                                             style="height: 400px;width: 100%;
                                                     -webkit-background-size: cover;
                                                     background-size: cover;
                                                     background-repeat: no-repeat;
                                                     background-position:center center;
                                                     background-image:url({{URL::asset($item)}});">
                                            {{--<div class="col-md-12 pr-2" >--}}
                                            {{--<img--}}
                                            {{--src="{{URL::asset($item)}}"--}}
                                            {{--alt="">--}}

                                            {{--</div>--}}
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="nav-arrow">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @if(count($favor)>0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="favor-include">
                            <div class="title-header">
                                <p class="title">Ưu Đãi {{$post->title}}</p>
                                <span>Trung Tâm Hội Nghị Tiệc Cưới TDG</span>
                            </div>
                        </div>
                        <div class="slider-cal">
                            <div id="sd-bottom" class="">
                                <div class="sd-bottom-carousel">
                                    <div class="owl-carousel owl-theme sd-b-owl">
                                        @foreach($favor as $key=>$item)
                                            <a href="{{URL::to('uu-dai/'.$item->path)}}">
                                                <img src="{{URL::asset($item->image)}}" alt=""
                                                     style="width: 100%;height: auto">
                                            </a>
                                        @endforeach
                                    </div>
                                    <div class="nav-arrow">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>

</div>