@extends('backend.admin.master')
@section('title-page')
    Tạo Mới Thư Viện Ảnh
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Tạo Mới Thư Viện</h2>
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
    {!! Form::open(array('route' => 'library.store','method'=>'POST')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Tên Thư Viện Ảnh</strong>
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
            {{--{!! Form::text('image', null, array('class' => 'form-control','id'=>'pathImagePost')) !!}--}}
            {{--<br>--}}
            {{--{!! Form::button('Tìm', array('id' => 'btnBrowseImagePost','class'=>'btn btn-primary')) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--{{ Html::image('','',array('id'=>'showHinhPost','class'=>'show-image'))}}--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="col-md-12 p-0">
            <div class="wrap-create-edit">
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="radio-uudai" value="1" checked>Thêm Hình Thư Viện
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="radio-uudai" value="2">Thêm Video Clip
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0 import-image">
            <div class="wrap-create-edit">
                <strong class="text-title-left">Thêm Hình Thư Viện</strong>
                <div class="form-group">
                    {!! Form::button('Thêm', array('id' => 'btnBrowseMore','class'=>'btn btn-primary')) !!}
                </div>
                <div class="form-group">
                    <div id="add-image" class="row">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0 import-video" style="display: none">
            <div class="wrap-create-edit">
                <strong class="text-title-left">Thêm Video Clip</strong>
                <div class="group-input">
                    <div class="form-group row">
                        <div class="col-md-11">
                            {!! Form::text('video-choose[]',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                        {{--<div class="col-md-1 delete-input">--}}
                        {{--<span>x</span>--}}
                        {{--</div>--}}
                    </div>

                </div>
                <div class="form-group">
                    {!! Form::button('Thêm', array('id' => 'btnVideoMore','class'=>'btn btn-primary')) !!}
                </div>
            </div>
        </div>
        <hr>
        <div id="seo-part" class="col-md-12 p-0">
            <h3>SEO</h3>
            <div class="content">
                <div class="show-pattern">
                    <span class="title">Quick Brown Fox and The Lazy Dog - Demo Site</span>
                    <span class="link">example.com/the-quick-brown-fox</span>
                    <span class="description">The story of quick brown fox and the lazy dog. An all time classic children's fairy tale that is helping people with typography and web design.</span>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Từ khóa cần SEO</strong>
                        {!! Form::text('seo_keywords',null, array('placeholder' => 'keywords cách nhau dấu phẩy','class' => 'form-control')) !!}
                        <ul class="error-notice">
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <strong>Tiêu Đề (title):</strong>
                    {!! Form::text('seo_title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                </div>
                <div class="col-md-12 form-group">
                    <strong>Mô Tả (description):</strong>
                    {!! Form::textarea('seo_description',null,array('placeholder' => '','id'=>'seo-description-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>
            </div>
            <h3>Mạng Xã Hội</h3>
            <div class="content">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Chọn hình đại diện hiển thị MXH: </strong>
                        {!! Form::text('seo_image', null, array('class' => 'form-control','id'=>'pathImageMXH')) !!}
                        <br>
                        {!! Form::button('Tìm', array('id' => 'btnBrowseImageMXH','class'=>'btn btn-primary')) !!}
                    </div>
                    <div class="form-group">
                        {{ Html::image('','',array('id'=>'showHinhMXH','class'=>'show-image'))}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 form-group">
            <strong>Kích Hoạt:</strong>
            <input name="is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
        </div>
        <div class="col-md-12" style="text-align:  center;">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Thư Viện Ảnh</button>
        </div>

    </div>
    {!! Form::close() !!}
@stop