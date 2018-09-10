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
                <a href="#dolor" class="nav-link" data-toggle="tab" role="tab" aria-controls="dolor">Slide show</a>
            </li>
            <li class="nav-item">
                <a href="#sit-amet" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet">Sit Amet</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="lorem" role="tabpanel">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="font-weight: bold">Tên Công Ty:</label>
                        {!! Form::text('config-company-name', $cauhinhs['config-company-name'], array('placeholder' => '','class' => 'form-control')) !!}
                        {{ Form::hidden('hd-config-company-name', $cauhinhs['config-company-name']) }}
                    </div>
                </div>
                <div class=" col-md-12">
                    <div class="form-group">
                        <label style="font-weight: bold">Số Hotline Trên Mobile:</label>
                        {!! Form::text('config-phone', $cauhinhs['config-phone'], array('placeholder' => '','class' => 'form-control')) !!}
                        {{ Form::hidden('hd-config-phone', $cauhinhs['config-phone']) }}
                    </div>
                </div>

                <div class=" col-md-12">
                    <div class="form-group">
                        <label style="font-weight: bold">Nội Dung Liên Hệ:</label>
                        {!! Form::textarea('config-contact',$cauhinhs['config-contact'], array('placeholder' => 'Nội Dung','id'=>'description-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                        {{ Form::hidden('hd-config-contact', $cauhinhs['config-contact']) }}
                    </div>
                </div>
                <div class=" col-md-12">
                    <div class="form-group">
                        <label style="font-weight: bold">Email Liên Hệ:</label>
                        {!! Form::text('config-email', $cauhinhs['config-email'], array('placeholder' => '','class' => 'form-control')) !!}
                        {{ Form::hidden('hd-config-email', $cauhinhs['config-email']) }}
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
                                {{ Form::hidden('hd-seo-keywords', $cauhinhs['config-seo-keywords']) }}
                                <ul class="error-notice">
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <strong>Tiêu Đề (title):</strong>
                            {!! Form::text('seo_title',$cauhinhs['config-seo-title'], array('placeholder' => 'Tên','class' => 'form-control')) !!}
                            {{ Form::hidden('hd-seo-title', $cauhinhs['config-seo-title']) }}
                        </div>
                        <div class="col-md-12 form-group">
                            <strong>Mô Tả (description):</strong>
                            {!! Form::textarea('seo_description', $cauhinhs['config-seo-description'],array('placeholder' => '','id'=>'seo-description-post','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                            {{ Form::hidden('hd-seo-description', $cauhinhs['config-seo-description']) }}
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
                <h1>Dolor</h1>

                <p>Ut eget lectus tristique, tempus purus sit amet, porta augue. Mauris lobortis sem nec augue ultricies
                    blandit. Nullam sed sem venenatis, pretium urna eget, scelerisque dolor. Morbi nec volutpat leo,
                    quis faucibus tortor. Aenean vel rutrum mauris. Pellentesque lectus massa, tincidunt quis leo non,
                    sodales sagittis nulla. Proin interdum est at nulla laoreet, pulvinar pretium nisl rutrum. In vel
                    elit a risus rhoncus accumsan vulputate non sapien. Sed et rhoncus velit. Nunc commodo augue
                    fermentum, hendrerit neque at, ullamcorper arcu. Nulla tincidunt orci a lectus efficitur elementum.
                    Donec molestie urna vestibulum augue placerat faucibus. In vitae orci vel mauris cursus viverra ac
                    sit amet nisl. Phasellus odio tortor, ullamcorper eget ullamcorper eget, molestie eget justo.
                    Integer elementum purus eget arcu fermentum tincidunt. Nullam erat tellus, dictum sit amet nisi eu,
                    rutrum fermentum odio.</p>
            </div>
            <div class="tab-pane fade" id="sit-amet" role="tabpanel">
                <h1>Sit Amet</h1>

                <p>Aliquam hendrerit nunc vitae nisi efficitur, eu porta sem aliquam. Aenean tincidunt mi sed mi sodales
                    bibendum. Proin dolor ipsum, mollis venenatis velit eu, iaculis laoreet mi. Mauris eget egestas
                    felis, sit amet finibus nunc. Aliquam non dui sit amet erat auctor mollis ac eget ante. Quisque at
                    quam augue. Nulla dignissim, augue nec cursus consequat, mi nulla efficitur augue, vel fringilla
                    turpis quam eu nunc. Quisque rutrum vehicula lacus sodales molestie. Mauris vel felis sit amet erat
                    maximus cursus ut a velit. In hac habitasse platea dictumst. Vestibulum vel neque sit amet nisl
                    finibus fermentum.</p>
            </div>
        </div>
    </div>
@stop