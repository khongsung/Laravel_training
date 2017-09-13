@extends('admin.app')
@section('title', 'Danh Sách Người dùng')
@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh sách thành viên</h3>
          <a href="{{ route('post.create') }}" class="btn btn-primary pull-right">Thêm Mới</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody><tr>
              <th style="width: 10px">#</th>
              <th>Ảnh Bìa</th>
              <th>Tên Bài Viết</th>
              <th>Danh Mục</th>
              <th>Tác Giả</th>
              <th>Trạng Thái</th>
              <th style="width: 150px;">Hành động</th>
            </tr>

           	@foreach($data as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->image}}</td>
                <td>{{$post->title}}</td>
                <td>{{ ($post->category_id)? $post->category->name : ''}}</td>
                <td>{{ ($post->user_id)? $post->user->name : ''}}</td>
                <td>{{ ($post->status_id)? $post->status->name : ''}}</td>
                <td>
                  <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Sửa</a>
                  {!! Form::open(['route' => ['post.destroy', $post], 'method' => 'delete']) !!}
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