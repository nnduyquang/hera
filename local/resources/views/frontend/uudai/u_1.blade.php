<div id="u_1">
    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4">


                    <div class="tab">
                        @php
                            $count=0
                        @endphp
                        @foreach($data as $key=>$item)
                            <button class="tablinks" onclick="openCity(event, '{{$item->id}}')"
                                    @if($count==0)id="defaultOpen" @endif>{{$item->name}}
                        </button>
                            @php
                                $count++;
                            @endphp
                        @endforeach
                        {{--<button class="tablinks" onclick="openCity(event, 'Paris')" id="defaultOpen">ƯU ĐÃI HỘI NGHỊ</button>--}}

                    </div>
                    @php
                        $i=0
                    @endphp
                    @foreach($data as $key=>$item)
                        <div id="{{$item->id}}" class="tabcontent">
                            @foreach($item['posts'] as $key2=>$item2)


                                @if ($i%2>0)
                                    <div class="row align-items-center mb-4">
                                        <div class="col-md-6 order-md-1 order-0">
                                            <div class="img-content"
                                                 style="">
                                                <img src="{{URL::asset($item2->image)}}" alt="" style="width: 100%;">

                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center order-md-0 order-1">
                                            <span><i class="far fa-calendar-alt"></i> {{$item2->created_at}}   </span>
                                            <h6><a href="{{URL::to('uu-dai/'.$item2->path)}}">{{$item2->title}}</a></h6>
                                            <p>{!! $item2->description !!}</p>

                                            <a href="{{URL::to('uu-dai/'.$item2->path)}}">ĐỌC THÊM</a>
                                        </div>
                                    </div>
                                @endif
                                @if($i%2==0)
                                    <div class="row align-items-center mb-4">
                                        <div class="col-md-6">
                                            <div class="img-content"
                                                 style="background-image:url({{URL::asset($item2->image)}});">

                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <span><i class="far fa-calendar-alt"></i> {{$item2->created_at}}    </span>
                                            <h6><a href="{{URL::to('uu-dai/'.$item2->path)}}">{{$item2->title}}</a></h6>
                                            <p>{!! $item2->description !!}</p>

                                            <a href="{{URL::to('uu-dai/'.$item2->path)}}">ĐỌC THÊM</a>
                                        </div>
                                    </div>
                                @endif
                                @php
                                    $i++;
                                @endphp
                            @endforeach

                        </div>
                    @endforeach

                    {{--<div id="Paris" class="tabcontent">--}}
                    {{--@for ($i = 0; $i < 16; $i++)--}}

                    {{--@if ($i%2>0)--}}
                    {{--<div class="row align-items-center mb-4">--}}
                    {{--<div class="col-md-6 order-md-1 order-0">--}}
                    {{--<div class="img-content" style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/07/Key-Visual.jpg')}});">--}}

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 text-center order-md-0 order-1">--}}
                    {{--<span><i class="far fa-calendar-alt"></i> 30-01-2018    </span>--}}
                    {{--<h6><a href="{{URL::asset('uu-dai/chuong-trinh-uu-dai.html')}}">[SPECIAL EDITION] CƯỚI XU HƯỚNG MỚI – TRỌN TIỆC 85 TRIỆU ĐỒNG !!</a></h6>--}}
                    {{--<p>Ưu đãi voucher giảm 40% – 50% combo trang điểm + làm tóc cô dâu từ--}}
                    {{--thương hiệu làm đẹp cao cấp--}}
                    {{--cho nhiều tác phẩm điện ảnh Hàn Quốc đình đám: VÌ SAO ĐƯA ANH TỚI!--}}
                    {{--, NGƯỜI THỪA KẾ</p>--}}

                    {{--<a href="">ĐỌC THÊM</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    {{--@if($i%2==0)--}}
                    {{--<div class="row align-items-center mb-4">--}}
                    {{--<div class="col-md-6">--}}
                    {{--<div class="img-content" style="background-image:url({{URL::asset('https://capellagallery.com/wp-content/uploads/2018/05/FA_Final-Cuoi_Xu-huong-moi_low-res.jpg')}});">--}}

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 text-center">--}}
                    {{--<span><i class="far fa-calendar-alt"></i> 30-01-2018    </span>--}}
                    {{--<h6><a href="{{URL::asset('uu-dai/chuong-trinh-uu-dai.html')}}">[SPECIAL EDITION] CƯỚI XU HƯỚNG MỚI – TRỌN TIỆC 85 TRIỆU ĐỒNG !!</a></h6>--}}
                    {{--<p>Ưu đãi voucher giảm 40% – 50% combo trang điểm + làm tóc cô dâu từ--}}
                    {{--thương hiệu làm đẹp cao cấp--}}
                    {{--cho nhiều tác phẩm điện ảnh Hàn Quốc đình đám: VÌ SAO ĐƯA ANH TỚI!--}}
                    {{--, NGƯỜI THỪA KẾ</p>--}}

                    {{--<a href="">ĐỌC THÊM</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--@endif--}}

                    {{--@endfor--}}
                    {{--</div>--}}


                    <script>
                        function openCity(evt, cityName) {
                            var i, tabcontent, tablinks;
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                            }
                            tablinks = document.getElementsByClassName("tablinks");
                            for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                            }
                            document.getElementById(cityName).style.display = "block";
                            evt.currentTarget.className += " active";
                        }

                        // Get the element with id="defaultOpen" and click on it
                        document.getElementById("defaultOpen").click();
                    </script>


                </div>
            </div>
        </div>
    </div>


</div>