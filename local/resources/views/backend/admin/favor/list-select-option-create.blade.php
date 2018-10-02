@foreach($categoryItems as $key=>$item)
    <label class="check-container">
        {{$item->name}}
        {{ Form::checkbox('list_category_id[]', $item->id, false, array('class' => '')) }}
        <span class="check-mark"></span>
    </label>
    @if(!$item->children->isEmpty())
        @include('backend.admin.product.list-select-option-create', ['categoryItems' => $item->children])
    @endif
@endforeach