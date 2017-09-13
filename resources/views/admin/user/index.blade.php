@extends('admin.app')
@section('title', 'Danh Sách Người dùng')
@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách thành viên</h3>
          <a href="{{ route('user.create') }}" class="btn btn-primary pull-right">Thêm Mới</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody><tr>
              <th style="width: 10px">#</th>
              <th>Họ và tên</th>
              <th>Email</th>
              <th style="width: 150px;">Hành động</th>
            </tr>

           	@foreach($data as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                  <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Sửa</a>
                  {!! Form::open(['route' => ['user.destroy', $user], 'method' => 'delete']) !!}
                  <button onclick="return confirm('Bạn chắc chắn muốn xóa?')"  class="btn btn-danger" >Xóa</button>
                  {!! Form::close() !!}
                </td>
              </tr>
            @endforeach
        

          </tbody>
          </table>
        </div>
      
        <div class="pagination pagination-sm no-margin pull-right">
          {{ $data->links() }}
        </div>
      </div>
      <!-- /.box -->

      <!-- /.box -->
    </div>
    <!-- /.col -->
    <!-- /.col -->
  </div>
  @endsection