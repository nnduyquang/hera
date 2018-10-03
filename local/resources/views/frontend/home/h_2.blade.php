<div id="h_2">
    <div class="container-fluid wow fadeIn slow" id="bg_dichvu2" style="background-image: url({{URL::asset($service->image)}}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>{{$service->name}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4 pb-4 text-center">
                    <p class="text-white" style="line-height: 20px">
                        {!! $service->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="">

        <div class="row text-center">
            @foreach($services as $key=>$item)
                <div class="col-md-3 p-0 dv-content">
                    <a href="{{URL::to('/dich-vu/'.$item->path)}}">
                        <div id="hoi_nghi"  style="background-image: url({{URL::asset($item->image)}})">
                        </div>
                        <p>{{$item->title}}</p>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</div>