<ul class="dv-content">
    @foreach($subMenu as $key=>$item)
        {{--@if(!is_null($item->url))--}}
            {{--<li><a class="sub-menu" href="{{URL::to($item->url)}}">{{$item->title}}</a>--}}
            {{--</li>--}}
        {{--@else--}}
            <li><a class="sub-menu" href="{{URL::to($item->link())}}">{{$item->title}}</a>
            </li>
        {{--@endif--}}
    @endforeach
</ul>