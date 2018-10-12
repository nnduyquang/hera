<div id="u_1">
    <div class="container-fluid pb-5" id="noidung">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">TIN TỨC HERA
                        </button>
                        {{--<button class="tablinks" onclick="openCity(event, 'Paris')">ƯU ĐÃI HỘI NGHỊ</button>--}}
                    </div>
                    <div id="London" class="tabcontent">
                        @foreach($post as $key=>$item)
                                <div class="row align-items-center mb-4">
                                    <div class="col-md-6">
                                        <a href="{{URL::to('tin-tuc/'.$item->path)}}">
                                        <div class="img-content" style="background-image:url({{URL::asset($item->image)}});">
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <span><i class="far fa-calendar-alt"></i> {{$item->created_at}}    </span>
                                        <h6><a href="{{URL::to('tin-tuc/'.$item->path)}}">{{$item->title}}</a></h6>
                                        <p>{!! $item->description !!}</p>
                                        <a href="{{URL::to('tin-tuc/'.$item->path)}}">ĐỌC THÊM</a>
                                    </div>
                                </div>
                        @endforeach
                    </div>

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