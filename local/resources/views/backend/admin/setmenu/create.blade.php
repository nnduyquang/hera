@extends('backend.admin.master')
@section('title-page')
    Tạo Mới Thực Đơn
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Tạo Mới Thực Đơn</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('setmenu.index') }}"> Back</a>
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
    {!! Form::open(array('route' => 'setmenu.store','method'=>'POST')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Tên Thực Đơn</strong>
                    <div class="form-group">
                        {!! Form::text('title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Mô Tả Ngắn</strong>
                    <div class="form-group">
                        {!! Form::textarea('description',null,array('placeholder' => '','id'=>'description-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Hình Đại Diện</strong>
                    <div class="form-group">
                        {!! Form::text('image', null, array('class' => 'form-control','id'=>'pathImagePost')) !!}
                        <br>
                        {!! Form::button('Tìm', array('id' => 'btnBrowseImagePost','class'=>'btn btn-primary')) !!}
                    </div>
                    <div class="form-group">
                        {{ Html::image('','',array('id'=>'showHinhPost','class'=>'show-image'))}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0">
            <div class="wrap-create-edit">
                <strong class="text-title-left">Nội Dung Thực Đơn:</strong>
                {!! Form::textarea('content',null,array('placeholder' => '','id'=>'content-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
            </div>

        </div>
        <div class="col-md-12">
            <div class="wrap-create-edit">
                <strong class="text-title-left">Thêm Hình Thực Đơn</strong>
                <div class="form-group">
                    {!! Form::button('Thêm', array('id' => 'btnBrowseMore','class'=>'btn btn-primary')) !!}
                </div>
                <div class="form-group">
                    <div id="add-image" class="row">

                    </div>
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
        <div class="col-md-12 p-0">
            <div class="wrap-create-edit">
                <strong class="text-title-left">Kích Hoạt</strong>
                <input name="is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
            </div>
        </div>
        <div class="col-md-12" style="text-align:  center;">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Thực Đơn</button>
        </div>

    </div>
    {!! Form::close() !!}
@stop