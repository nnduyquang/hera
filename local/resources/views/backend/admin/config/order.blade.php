<div class="tab-pane fade" id="order-config" role="tabpanel">
    <div class="wrap-create-edit">
        <strong class="text-title-left">Banner Đặt Tiệc</strong>
        <div class="wrap-create-edit">
            <strong class="text-title-right">Banner Đặt Tiệc</strong>
            <div class="form-group">
                @if($cauhinhs['order-image-config']!='')
                    {!! Form::text('order-image-config', url('/').'/'.$cauhinhs['order-image-config'], array('class' => 'form-control','id'=>'pathImageOrder')) !!}
                @else
                    {!! Form::text('order-image-config', '', array('class' => 'form-control','id'=>'pathImageOrder')) !!}
                @endif
                <br>
                {!! Form::button('Tìm', array('id' => 'btnBrowseImageOrder','class'=>'btn btn-primary')) !!}
            </div>
            <div class="form-group">
                @if($cauhinhs['order-image-config']!='')
                    {{ Html::image($cauhinhs['order-image-config'],'',array('id'=>'showHinhOrder','class'=>'show-image'))}}
                @else
                    {{ Html::image('','',array('id'=>'showHinhOrder','class'=>'show-image'))}}
                @endif
            </div>
        </div>
    </div>
</div>