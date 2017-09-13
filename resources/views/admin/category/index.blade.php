@extends('admin.app')
@section('title', 'Danh Sách Danh Mục')
@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Danh Sách Danh Mục</h3>
          <a href="{{ route('category.create') }}" class="btn btn-primary pull-right">Thêm Mới</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tbody><tr>
              <th style="width: 10px">#</th>
              <th>Tên Danh Mục</th>
              <th>Trạng Thái</th>
              <th style="width: 150px;">Hành động</th>
            </tr>

            @foreach($data as $category)
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->status->name}}</td>
                <td>
                  <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Sửa</a>
                  {!! Form::open(['route' => ['category.destroy', $category->id], 'method' => 'delete']) !!}
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