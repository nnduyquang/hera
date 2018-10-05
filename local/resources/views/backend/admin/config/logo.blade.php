<div class="tab-pane fade" id="logo-config" role="tabpanel">
    <div class="wrap-create-edit">
        <strong class="text-title-left">Logo</strong>
        <div class="wrap-create-edit">
            <strong class="text-title-right">Hình Logo</strong>
            <div class="form-group">
                @if($cauhinhs['logo-config']!='')
                    {!! Form::text('logo-config', url('/').'/'.$cauhinhs['logo-config'], array('class' => 'form-control','id'=>'pathImageLogo')) !!}
                @else
                    {!! Form::text('logo-config', '', array('class' => 'form-control','id'=>'pathImageLogo')) !!}
                @endif
                <br>
                {!! Form::button('Tìm', array('id' => 'btnBrowseImageLogo','class'=>'btn btn-primary')) !!}
            </div>
            <div class="form-group">
                @if($cauhinhs['logo-config']!='')
                    {{ Html::image($cauhinhs['logo-config'],'',array('id'=>'showHinhLogo','class'=>'show-image'))}}
                @else
                    {{ Html::image('','',array('id'=>'showHinhLogo','class'=>'show-image'))}}
                @endif
            </div>
        </div>
    </div>
</div>