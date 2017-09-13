@extends('admin.app')
@section('title', 'Tạo Danh Mục')
@section('content')
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Thêm Danh Mục</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::model($data, ['route' => ['category.update', $data], 'method' => 'put']) !!}
      {{ csrf_field() }}
      <!-- text input -->
      <p style="color: red;font-weight: bold;text-align: center">{{ $errors->first() }}</p>

      <div class="form-group">
        <label>Tên Danh Mục</label>
        <input type="text" class="form-control" name="name" placeholder="Tên Danh Mục" value="{{ $data->name }}" />
      </div> 

      <div class="form-group">
        <label>Trạng Thái</label>
        <select name="status" class="form-control">
          @if($data->status_id == 1)
            <option selected="selected" value="1">Hiện</option>
            <option value="2">Ẩn</option>
          @else
            <option value="1">Hiện</option>
            <option selected="selected" value="2">Ẩn</option>
          @endif
        </select>
      </div>

      <input type="submit" name="btnsubmit" class="btn -btn success" value="Lưu Lại" />
      

    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
@endsection