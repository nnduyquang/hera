<style>

</style>

<div id="g_1">
    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4 text-center">


                    <div class="tab">

                        @foreach($post as $key=>$item)
                            <button class="tablinks" onclick="openCity(event, {{$item->id}})"
                                    @if(request()->segment(count(request()->segments()))==$item->path) id="defaultOpen"
                                    @elseif(request()->is('thu-vien')) id="defaultOpen" @endif>{{$item->title}}
                            </button>
                        @endforeach

                    </div>
                    @foreach($post as $key=>$item)
                        <div id="{{$item->id}}" class="tabcontent">
                            <div class="row">
                                @if(!is_null($item->sub_image))
                                    @php
                                        $listImage=explode(';',$item->sub_image);
                                    @endphp
                                    @foreach($listImage as $key2=>$item2)
                                        <div class="col-md-3">
                                            <a class="fancybox" data-caption="{{lay_ten_hinh_tu_path($item2)}}"
                                               data-fancybox="gallery-cus"
                                               href="{{URL::asset($item2)}}">
                                                <div class=" one-images"
                                                     style="background-image:url({{URL::asset($item2)}});">
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @elseif(!is_null($item->videos))
                                    @php

                                        $listVideos=explode(';',$item->videos);

                                    @endphp
                                    @foreach($listVideos as $key2=>$item2)
                                        <div class="col-md-3 text-center mb-3">
                                            <div class="youtube-cover">
                                                <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 1"
                                                        src="{{$item2}}" frameborder="0"
                                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                {{--<p>thông tin tiệc cưới hera</p>--}}
                                            </div>
                                            <div onclick="revealVideo('video','youtube','{{$item2}}')"
                                                 class="cover"
                                                 style="position: absolute;z-index: 11;width: 100%;height: 100%;top: 0;left: 0;cursor: pointer"></div>
                                        </div>
                                    @endforeach

                                @else
                                    <div class="col-md-12 text-center">
                                        <img class="pt-3" src="{{URL::asset('images/update.png')}}" alt=""
                                             style="width: 100px;height: auto;">
                                        <p class="pt-3">DỮ LIỆU ĐANG UPDATE......!</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>


</div>