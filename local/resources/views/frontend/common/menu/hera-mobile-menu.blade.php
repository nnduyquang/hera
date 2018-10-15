<div class="container-fluid p-0 position-relative" id="hera_mobile_menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <div id="logo" class="pt-2 pb-2">
                    <img src="{{URL::asset($listFrontEndInfo['logo'])}}" alt="" style="">
                </div>
                <div><i id="mobile_menu_click" class="fas fa-bars font-weight-bold fa-2x"></i></div>
            </div>
        </div>
    </div>

    <div id="hera_mobile_menu_content" class="">
        <ul>

            @foreach($listMenu as $key=>$item)
                @if($item->children->isEmpty())
                    <li class="li-overlay"><a class="{{ request()->is($item->link()) ? 'active' : '/' }}"
                                              href="{{URL::to($item->link())}}">{{$item->title}}</a>
                @else
                    <li class="li-overlay"><a class="{{ request()->is($item->link()) ? 'active' : '/' }}"
                                              href="javascript:void(0)">{{$item->title}}</a>
                        @endif
                        @if(!$item->children->isEmpty())
                            @include('frontend.common.menu.list-menu-mobile-item', ['subMenu' => $item->children])
                        @endif
                    </li>
                    @endforeach
                    <li class="text-center pt-4"><a
                                href="{{URL::asset('/dat-tiec/')}}" class="">ĐẶT TIỆC NGAY</a></li>
                    <li class="text-center">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"
                                      style="background-image:url({{URL::asset('images/bg/bg-insta.jpg')}});"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="text-center">


                        <p class="pb-3"><span><i class="fas fa-phone-volume"></i></span>
                            {{$listFrontEndInfo['hotline']}} (Hotline)</p></li>

        </ul>
    </div>

</div>







