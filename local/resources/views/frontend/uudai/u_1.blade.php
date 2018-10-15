<div id="u_1">
    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4">


                    <div class="tab">
                        @php
                            $count=0
                        @endphp
                        @foreach($categoryChildren as $key=>$item)
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
                    @foreach($categoryChildren as $key=>$item)
                        <div id="{{$item->id}}" class="tabcontent">
                            @foreach($item['posts'] as $key2=>$item2)


                                @if ($i%2>0)
                                    <div class="row align-items-center mb-5">
                                        {{--order-md-1 order-0 gắn vào class để đẩy vị trí trái phải của col trong bootrap--}}
                                        {{--<div class="col-md-6 mb-lg-0 mb-4" style="vertical-align: middle">--}}

                                                {{--style="background-image:url({{URL::asset($item2->image)}});"--}}
                                                {{--<img src="{{URL::asset($item2->image)}}" alt="" style="width: 100%;height: auto">--}}

                                        {{--</div>--}}
                                        <div class="col-md-6 mb-lg-0 mb-4" style="vertical-align: middle">
                                            <a href="{{URL::to('uu-dai/'.$item2->path)}}">
                                                {{--<div class="img-content"--}}
                                                     {{--style="background-image:url({{URL::asset($item2->image)}});">--}}
                                                {{--</div>--}}
                                                <img src="{{URL::asset($item2->image)}}" alt="" style="width: 100%;height: auto">
                                            </a>


                                        </div>
                                        {{--order-md-0 order-1 gắn vào class để đẩy vị trí trái phải của col trong bootrap--}}
                                        <div class="col-md-6 text-center align-items-center">
                                            <span><i class="far fa-calendar-alt"></i> {{$item2->created_at}}   </span>
                                            <h6><a href="{{URL::to('uu-dai/'.$item2->path)}}">{{$item2->title}}</a></h6>
                                            <p>{!! $item2->description !!}</p>

                                            <a href="{{URL::to('uu-dai/'.$item2->path)}}">ĐỌC THÊM</a>
                                        </div>
                                    </div>
                                @endif
                                @if($i%2==0)
                                    <div class="row align-items-center mb-5">
                                        <div class="col-md-6 mb-lg-0 mb-4" style="vertical-align: middle">
                                            <a href="{{URL::to('uu-dai/'.$item2->path)}}">
                                            {{--<div class="img-content"--}}
                                                 {{--style="background-image:url({{URL::asset($item2->image)}});">--}}
                                            {{--</div>--}}
                                                <img src="{{URL::asset($item2->image)}}" alt="" style="width: 100%;height: auto">
                                            </a>
                                                {{--<img src="{{URL::asset($item2->image)}}" alt="" style="width: 100%;height: auto">--}}

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