<ul class="dv-content">
    @foreach($subMenu as $key=>$item)
            <li><a class="sub-menu" href="{{URL::to($item->link())}}">{{$item->title}}</a>
            </li>
    @endforeach
</ul>