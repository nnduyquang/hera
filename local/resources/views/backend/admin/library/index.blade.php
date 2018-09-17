@extends('backend.admin.master')
@section('title-page')
    Quản Lý Thư Viện Hình Ảnh
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 margin-tb">
        <div class="row">
            <div class="col-md-8">
                {{--<h2>Quản Lý Trang</h2>--}}
            </div>
            <div class="col-md-4 text-right">
                @permission(('page-create'))
                <a class="btn btn-success" href="{{ route('library.create') }}"> Tạo Mới</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr>
                <th>TT</th>
                <th>Tên Thư Viện Ảnh</th>
                <th>Path</th>
                <th>Người Đăng</th>
                <th>Ngày Đăng</th>
                <th>Ngày Cập Nhật</th>
                <th>Tình Trạng</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($posts as $key => $data)
                <td>{{ ++$i }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->path }}</td>
                <td>{{ $data->users->name }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{$data->isActive}}</td>
                <td>
                    @permission(('page-edit'))
                    <a class="btn btn-primary" href="{{ route('library.edit',$data->id) }}">Cập Nhật</a>
                    @endpermission
                    @permission(('page-delete'))
                    {!! Form::open(['method' => 'DELETE','route' => ['library.destroy', $data->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endpermission
                </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{--{!! $pages->links() !!}--}}
@stop