<div id="g_1">
    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4">


                    <div class="tab">
                        @foreach($data as $key=>$item)
                            <button class="tablinks" onclick="openCity(event, {{$item->id}})"  @if(request()->segment(count(request()->segments()))==$item->path) id="defaultOpen" @elseif(request()->is('thu-vien')) id="defaultOpen"  @endif>{{$item->title}}
                            </button>
                        @endforeach

                        {{--<button class="tablinks" onclick="openCity(event, 'Paris')">TRANG TRÍ</button>--}}
                        {{--<button class="tablinks" onclick="openCity(event, 'Tokyo')">TIỆC CƯỚI</button>--}}
                        {{--<button class="tablinks" onclick="openCity(event, 'Outdoor')">VIDEO CLIP</button>--}}
                    </div>
                    @foreach($data as $key=>$item)
                        <div id="{{$item->id}}" class="tabcontent">
                            <div class="row">
                                @if(!is_null($item->sub_image))
                                    @php
                                        $listImage=explode(';',$item->sub_image);
                                    @endphp
                                    @foreach($listImage as $key2=>$item2)
                                        <div class="col-md-3">
                                            <a class="fancybox" data-caption=""
                                               data-fancybox="gallery-cus"
                                               href="{{URL::asset($item2)}}"><div class=" one-images"
                                                 style="background-image:url({{URL::asset($item2)}});">
                                            </div>
                                            </a>
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

                    {{--<div id="Paris" class="tabcontent">--}}
                        {{--<div class="row">--}}
                            {{--@for ($i = 0; $i < 16; $i++)--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class=" one-images"--}}
                                         {{--style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/01/IMG_1320-1-300x300.jpg')}});">--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endfor--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div id="Tokyo" class="tabcontent">--}}
                        {{--<div class="row">--}}
                            {{--@for ($i = 0; $i < 16; $i++)--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="one-images"--}}
                                         {{--style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/01/JAME0035-300x300.jpg')}});">--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endfor--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div id="Outdoor" class="tabcontent">--}}
                        {{--<div class="row">--}}
                            {{--@for ($i = 0; $i < 16; $i++)--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<div class="one-images"--}}
                                         {{--style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/01/JAME0035-300x300.jpg')}});">--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endfor--}}
                        {{--</div>--}}
                    {{--</div>--}}


                </div>
            </div>
        </div>
    </div>


</div>