<style>

</style>

<div id="s_1">

    @include('frontend.services.banner-title')

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
                    <div id="hoi_nghi"  style="background-image: url({{URL::asset($item->image_small)}})">
                    </div>
                    <p>{{$item->title}}</p>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</div>