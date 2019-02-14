<div id="menu" class="container-fluid justify-content-center p-0">
    <div class="container-fluid justify-content-center">

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center">

                <div id="logo" class="pt-2 pb-2 pl-4 pr-5">
                    <a href="{{URL::asset('/')}}"><img src="{{URL::asset($listFrontEndInfo['logo'])}}" alt=""></a>
                </div>

                <div id="menu_content">
                    <ul id="main">
                        @foreach($listMenu as $key=>$item)
                            <li>
                                <div class="dv_overlay pb-4">
                                    <a class="{{ request()->is($item->link()) ? 'active' : '/' }}"
                                       href="{{URL::to($item->link())}}">{{$item->title}}</a>
                                    @if(!$item->children->isEmpty())
                                        @include('frontend.common.menu.list-menu-item', ['subMenu' => $item->children])
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        <li><a
                                    href="{{URL::asset('/dat-tiec/')}}">ĐẶT TIỆC NGAY</a></li>
                        <li>
                            <div id="sc_network">
                                <a href="https://www.facebook.com/TrungTamHoiNghiTiecCuoiTDG"><i
                                            class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/hera_center"><i class="fab fa-instagram"
                                                                                   style="background-image:url({{URL::asset('images/bg/bg-insta.jpg')}});"></i></a>
                                <a href="https://www.youtube.com/channel/UCMWdeTYUOrgjhPYJadEUwTA"><i
                                            class="fab fa-youtube"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>

