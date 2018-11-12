<div class="tab-pane fade" id="contact-config" role="tabpanel">
    <div class="wrap-create-edit">
        <strong class="text-title-left">Banner Liên Hệ</strong>
        <div class="wrap-create-edit">
            <strong class="text-title-right">Banner Liên Hệ</strong>
            <div class="form-group">
                @if($cauhinhs['contact-image-config']!='')
                    {!! Form::text('contact-image-config', url('/').'/'.$cauhinhs['contact-image-config'], array('class' => 'form-control','id'=>'pathImageContact')) !!}
                @else
                    {!! Form::text('contact-image-config', '', array('class' => 'form-control','id'=>'pathImageContact')) !!}
                @endif
                <br>
                {!! Form::button('Tìm', array('id' => 'btnBrowseImageContact','class'=>'btn btn-primary')) !!}
            </div>
            <div class="form-group">
                @if($cauhinhs['contact-image-config']!='')
                    {{ Html::image($cauhinhs['contact-image-config'],'',array('id'=>'showHinhContact','class'=>'show-image'))}}
                @else
                    {{ Html::image('','',array('id'=>'showHinhContact','class'=>'show-image'))}}
                @endif
            </div>
        </div>
    </div>
</div>