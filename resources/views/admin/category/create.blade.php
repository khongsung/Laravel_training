@extends('admin.app')
@section('title', 'Tạo Danh Mục')
@section('content')
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Thêm Danh Mục</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="{{ route('category.store') }}" method="POST">
      {{ csrf_field() }}
      <!-- text input -->
      <p style="color: red;font-weight: bold;text-align: center">{{ $errors->first() }}</p>

      <div class="form-group">
        <label>Tên Danh Mục</label>
        <input type="text" class="form-control" name="name" placeholder="Tên Danh Mục" value="{{ old('name') }}" />
      </div>

      <div class="form-group">
        <label>Trạng Thái</label>
        <select name="status" class="form-control">
          <option value="1">Hiện</option>
          <option value="2">Ẩn</option>
        </select>
      </div>

      <input type="submit" name="btnsubmit" class="btn -btn success" value="Thêm Mới" />
      

    </form>
  </div>
  <!-- /.box-body -->
</div>
@endsection