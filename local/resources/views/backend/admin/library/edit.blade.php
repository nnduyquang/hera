@extends('backend.admin.master')
@section('title-page')
    Cập Nhật Thư Viện Ảnh
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')

    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Cập Nhật Hình Thư Viện</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('library.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($data['post'],array('route' => ['library.update',$data['post']->id],'method'=>'PATCH')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Tên Thư Viện Ảnh:</strong>
                    <div class="form-group">
                        {!! Form::text('title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>
                {{--<div class="form-group">--}}
                {{--<strong>Mô Tả Ngắn:</strong>--}}
                {{--{!! Form::textarea('description',null,array('placeholder' => '','id'=>'description-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}--}}
                {{--</div>--}}
            </div>
            {{--<div class="col-md-6">--}}
            {{--<div class="form-group">--}}
            {{--<strong>Hình Đại Diện: </strong>--}}
            {{--@if($data['post']->image!='')--}}
            {{--{!! Form::text('image', url('/').'/'.$data['post']->image, array('class' => 'form-control','id'=>'pathImagePost')) !!}--}}
            {{--@else--}}
            {{--{!! Form::text('image', '', array('class' => 'form-control','id'=>'pathImagePost')) !!}--}}
            {{--@endif--}}
            {{--<br>--}}
            {{--{!! Form::button('Tìm', array('id' => 'btnBrowseImagePost','class'=>'btn btn-primary')) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--@if($data['post']->image!='')--}}
            {{--{{ Html::image($data['post']->image,'',array('id'=>'showHinhPost','class'=>'show-image'))}}--}}
            {{--@else--}}
            {{--{{ Html::image('','',array('id'=>'showHinhPost','class'=>'show-image'))}}--}}
            {{--@endif--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="col-md-12 p-0">
            <div class="wrap-create-edit">
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="radio-uudai" value="1"
                               @if(!is_null($data['post']->sub_image))checked @endif>Thêm Hình Thư Viện
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="radio-uudai" value="2"
                               @if(!is_null($data['post']->videos))checked @endif>Thêm Video Clip
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0 import-image" @if(is_null($data['post']->sub_image)) style="display: none" @endif>
            <div class="wrap-create-edit">
                <strong class="text-title-left">Thêm Hình Thư Viện</strong>
                <div class="form-group">
                    {!! Form::button('Thêm', array('id' => 'btnBrowseMore','class'=>'btn btn-primary')) !!}
                </div>

                <div class="form-group">
                    <div id="add-image" class="row">
                        @php
                            $listImage=explode(';',$data['post']->sub_image);
                        @endphp
                        @foreach($listImage as $key=>$item)
                            <div class="col-md-3 text-center one-image">
                                {{ Html::image($item,'',array('id'=>'showHinh','class'=>'image-choose'))}}
                                {{ Form::hidden('image-choose[]', $item) }}
                                <span class='remove-image'>X</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0 import-video" @if(is_null($data['post']->videos)) style="display: none" @endif>
            <div class="wrap-create-edit">
                <strong class="text-title-left">Thêm Video Clip</strong>
                <div class="group-input">
                    @php
                        $listVideo=explode(';',$data['post']->videos);
                        $i=0;
                    @endphp
                    @foreach($listVideo as $key=>$item)
                        <div class="form-group row">
                            <div class="col-md-11">
                                {!! Form::text('video-choose[]',$item, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                            </div>
                            @if($i>=1)
                                <div class="col-md-1 delete-input">
                                    <span>x</span>
                                </div>
                            @endif
                            @php
                                $i++;
                            @endphp
                        </div>
                    @endforeach

                </div>
                <div class="form-group">
                    {!! Form::button('Thêm', array('id' => 'btnVideoMore','class'=>'btn btn-primary')) !!}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
            <div id="seo-part" class="col-md-12 p-0">
                <h3>SEO</h3>
                <div class="content">
                    <div class="show-pattern">
                        <span class="title">{{$data['post']->seos->seo_title}}</span>
                        <span class="link">{{URL::to('/')}}/{{$data['post']->path}}</span>
                        <span class="description">{{$data['post']->seos->seo_description}}</span>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Từ khóa cần SEO</strong>
                            {!! Form::text('seo_keywords',$data['post']->seos->seo_keywords, array('placeholder' => 'keywords cách nhau dấu phẩy','class' => 'form-control')) !!}
                            <ul class="error-notice">
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <strong>Tiêu Đề (title):</strong>
                        {!! Form::text('seo_title',$data['post']->seos->seo_title, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                    <div class="col-md-12 form-group">
                        <strong>Mô Tả (description):</strong>
                        {!! Form::textarea('seo_description',$data['post']->seos->seo_description,array('placeholder' => '','id'=>'seo-description-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                    </div>
                </div>
                <h3>Mạng Xã Hội</h3>
                <div class="content">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Chọn hình đại diện hiển thị MXH: </strong>
                            @if($data['post']->seos->seo_image!='')
                                {!! Form::text('seo_image', url('/').'/'.$data['post']->seos->seo_image, array('class' => 'form-control','id'=>'pathImageMXH')) !!}
                            @else
                                {!! Form::text('seo_image', '', array('class' => 'form-control','id'=>'pathImageMXH')) !!}
                            @endif
                            <br>
                            {!! Form::button('Tìm', array('id' => 'btnBrowseImageMXH','class'=>'btn btn-primary')) !!}
                        </div>
                        <div class="form-group">
                            @if($data['post']->seos->seo_image!='')
                                {{ Html::image($data['post']->seos->seo_image,'',array('id'=>'showHinhMXH','class'=>'show-image'))}}
                            @else
                                {{ Html::image('','',array('id'=>'showHinhMXH','class'=>'show-image'))}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <strong>Kích Hoạt:</strong>
                <input {{$data['post']->is_active==1?'checked':''}}  name="is_active" data-on="Có"
                       data-off="Không"
                       type="checkbox" data-toggle="toggle">
            </div>
            <div class="col-md-12" style="text-align:  center;">
                <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Thư Viện Ảnh</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop