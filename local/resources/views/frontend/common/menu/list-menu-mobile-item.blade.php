<div class="li-content">
    <ul>
        @foreach($subMenu as $key=>$item)
        <li> <a href="{{URL::to($item->link())}}">{{$item->title}}</a></li>
        @endforeach
    </ul>
</div>