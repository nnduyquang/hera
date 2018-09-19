@extends('backend.admin.master')
@section('container')
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Cấu Hình Thử Giao Diện</h2>
                </div>
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
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div id="config-text" class="d-flex flex-row mt-2">
        <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
            <li class="nav-item">
                <a href="#lorem" class="nav-link active" data-toggle="tab" role="tab" aria-controls="lorem">Thông Tin
                    Công Ty</a>
            </li>
            <li class="nav-item">
                <a href="#ipsum" class="nav-link" data-toggle="tab" role="tab" aria-controls="ipsum">Seo Trang Chủ</a>
            </li>
            <li class="nav-item">
                <a href="#dolor" class="nav-link" data-toggle="tab" role="tab" aria-controls="dolor">Import Script</a>
            </li>
            <li class="nav-item">
                <a href="#sit-amet" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet">Email</a>
            </li>
        </ul>
        {!! Form::open(array('route' => 'config-text.general.store','method'=>'POST')) !!}
        <div class="tab-content">
            <div class="tab-pane fade show active" id="lorem" role="tabpanel">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="font-weight: bold">Tên Công Ty:</label>
                        {!! Form::text('config-company-name', $cauhinhs['config-company-name'], array('placeholder' => '','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class=" col-md-12">
                    <div class="form-group">
                        <label style="font-weight: bold">Số Hotline Trên Mobile:</label>
                        {!! Form::text('config-phone', $cauhinhs['config-phone'], array('placeholder' => '','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class=" col-md-12">
                    <div class="form-group">
                        <label style="font-weight: bold">Nội Dung Liên Hệ:</label>
                        {!! Form::textarea('config-contact',$cauhinhs['config-contact'], array('placeholder' => 'Nội Dung','id'=>'description-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                    </div>
                </div>
                <div class=" col-md-12">
                    <div class="form-group">
                        <label style="font-weight: bold">Email Liên Hệ:</label>
                        {!! Form::text('config-email', $cauhinhs['config-email'], array('placeholder' => '','class' => 'form-control')) !!}
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="ipsum" role="tabpanel">
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
                                {!! Form::text('seo_keywords',$cauhinhs['config-seo-keywords'], array('placeholder' => 'keywords cách nhau dấu phẩy','class' => 'form-control')) !!}
                                <ul class="error-notice">
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <strong>Tiêu Đề (title):</strong>
                            {!! Form::text('seo_title',$cauhinhs['config-seo-title'], array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                        <div class="col-md-12 form-group">
                            <strong>Mô Tả (description):</strong>
                            {!! Form::textarea('seo_description', $cauhinhs['config-seo-description'],array('placeholder' => '','id'=>'seo-description-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                        </div>
                    </div>
                    <h3>Mạng Xã Hội</h3>
                    <div class="content">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Chọn hình đại diện hiển thị MXH: </strong>
                                @if($cauhinhs['config-seo-image']!='')
                                    {!! Form::text('seo-image', url('/').'/'.$cauhinhs['config-seo-image'], array('class' => 'form-control','id'=>'pathImageMXH')) !!}
                                @else
                                    {!! Form::text('seo-image', '', array('class' => 'form-control','id'=>'pathImageMXH')) !!}
                                @endif
                                <br>
                                {!! Form::button('Tìm', array('id' => 'btnBrowseImageMXH','class'=>'btn btn-primary')) !!}
                            </div>
                            <div class="form-group">
                                @if($cauhinhs['config-seo-image']!='')
                                    {{ Html::image($cauhinhs['config-seo-image'],'',array('id'=>'showHinhMXH','class'=>'show-image'))}}
                                @else
                                    {{ Html::image('','',array('id'=>'showHinhMXH','class'=>'show-image'))}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="dolor" role="tabpanel">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Chèn Script Trước <span></body></span> :</strong>
                        {!! Form::textarea('script-js-header',$cauhinhs['script-js-header'], array('placeholder' => 'Nội Dung','id'=>'description-script','class' => 'form-control','rows'=>'20','style'=>'resize:none')) !!}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sit-amet" role="tabpanel">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Email Nhận Thông Tin:</strong>
                                {!! Form::text('email-receive', $cauhinhs['email-receive'], array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Tiêu Đề Email Ứng Viên Nhận Phản Hồi:</strong>
                                {!! Form::text('email-sender-subject', $cauhinhs['email-sender-subject'], array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>From Email Ứng Viên Nhận Phản Hồi:</strong>
                                {!! Form::text('email-sender-from', $cauhinhs['email-sender-from'], array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Tiêu Đề Email Nhận Thông Tin Ứng Viên:</strong>
                                {!! Form::text('email-receive-subject',  $cauhinhs['email-receive-subject'], array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>From Email Nhận Thông Tin Ứng Viên:</strong>
                                {!! Form::text('email-receive-from',  $cauhinhs['email-receive-from'], array('placeholder' => '','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nội Dung Gửi Cho Ứng Viên:</strong>
                                {!! Form::textarea('email-sender-content',$cauhinhs['email-sender-content'], array('placeholder' => 'Nội Dung','id'=>'description-content','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Chữ Ký Mail:</strong>
                                {!! Form::textarea('email-signatures', $cauhinhs['email-signatures'], array('placeholder' => 'Nội Dung','id'=>'description-signatures','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Lưu Cấu Hình</button>
        </div>

        {!! Form::close() !!}
    </div>
@stop