@extends('backend.admin.master')
@section('title-page')
    Cập Nhật Trang
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Cập Nhật Trang</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('page.index') }}"> Back</a>
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
    {!! Form::model($page,array('route' => ['page.update',$page->id],'method'=>'PATCH')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Tên Trang</strong>
                    <div class="form-group">
                        {!! Form::text('title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="wrap-create-edit">
                    <strong class="text-title-left">Mô Tả Ngắn</strong>
                    <div class="form-group">
                        {!! Form::textarea('description',null,array('placeholder' => '','id'=>'description-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wrap-create-edit">
                    <strong class="text-title-right">Hình Đại Diện</strong>
                    <div class="form-group">
                        @if($page->image!='')
                            {!! Form::text('image', url('/').'/'.$page->image, array('class' => 'form-control','id'=>'pathImagePost')) !!}
                        @else
                            {!! Form::text('image', '', array('class' => 'form-control','id'=>'pathImagePost')) !!}
                        @endif
                        <br>
                        {!! Form::button('Tìm', array('id' => 'btnBrowseImagePost','class'=>'btn btn-primary')) !!}
                    </div>
                    <div class="form-group">
                        @if($page->image!='')
                            {{ Html::image($page->image,'',array('id'=>'showHinhPost','class'=>'show-image'))}}
                        @else
                            {{ Html::image('','',array('id'=>'showHinhPost','class'=>'show-image'))}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0 import-image" @if(is_null($page->sub_image)) style="display: none" @endif>
            <div class="wrap-create-edit">
                <strong class="text-title-left">Thêm Hình</strong>
                <div class="form-group">
                    {!! Form::button('Thêm', array('id' => 'btnBrowseMore','class'=>'btn btn-primary')) !!}
                </div>

                <div class="form-group">
                    <div id="add-image" class="row">
                        @php
                            $listImage=explode(';',$page->sub_image);
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
        <div class="col-md-12 p-0">
            <div class="wrap-create-edit">
            <strong class="text-title-left">Nội Dung Trang</strong>
            {!! Form::textarea('content',null,array('placeholder' => '','id'=>'content-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
            </div>

        </div>
        <hr>

        <div id="seo-part" class="col-md-12 p-0">
            <h3>SEO</h3>
            <div class="content">
                <div class="show-pattern">
                    <span class="title">{{$page->seos->seo_title}}</span>
                    <span class="link">{{URL::to('/')}}/{{$page->path}}</span>
                    <span class="description">{{$page->seos->seo_description}}</span>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Từ khóa cần SEO</strong>
                        {!! Form::text('seo_keywords',$page->seos->seo_keywords, array('placeholder' => 'keywords cách nhau dấu phẩy','class' => 'form-control')) !!}
                        <ul class="error-notice">
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <strong>Tiêu Đề (title):</strong>
                    {!! Form::text('seo_title',$page->seos->seo_title, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                </div>
                <div class="col-md-12 form-group">
                    <strong>Mô Tả (description):</strong>
                    {!! Form::textarea('seo_description',$page->seos->seo_description,array('placeholder' => '','id'=>'seo-description-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>
            </div>
            <h3>Mạng Xã Hội</h3>
            <div class="content">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Chọn hình đại diện hiển thị MXH: </strong>
                        @if($page->seos->seo_image!='')
                            {!! Form::text('seo-image', url('/').'/'.$page->seos->seo_image, array('class' => 'form-control','id'=>'pathImageMXH')) !!}
                        @else
                            {!! Form::text('seo-image', '', array('class' => 'form-control','id'=>'pathImageMXH')) !!}
                        @endif
                        <br>
                        {!! Form::button('Tìm', array('id' => 'btnBrowseImageMXH','class'=>'btn btn-primary')) !!}
                    </div>
                    <div class="form-group">
                        @if($page->seos->seo_image!='')
                            {{ Html::image($page->seos->seo_image,'',array('id'=>'showHinhMXH','class'=>'show-image'))}}
                        @else
                            {{ Html::image('','',array('id'=>'showHinhMXH','class'=>'show-image'))}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <strong>Kích Hoạt:</strong>
            <input {{$page->is_active==1?'checked':''}}  name="is_active" data-on="Có"
                   data-off="Không"
                   type="checkbox" data-toggle="toggle">
        </div>
        <div class="col-md-12" style="text-align:  center;">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Trang</button>
        </div>
    {!! Form::close() !!}
@stop