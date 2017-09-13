@extends('admin.app')
@section('title', 'Tạo Người Dùng')
@section('content')
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Thêm người dùng mới</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" action="{{ route('user.store') }}" method="POST">
      {{ csrf_field() }}
      <!-- text input -->
      <p style="color: red;font-weight: bold;text-align: center">{{ $errors->first() }}</p>

      <div class="form-group">
      	<label>Danh Mục</label>
      	<select name="category_id" >
	      	<option>--Chọn--</option>
	      	@foreach($cate as $cate)
	      	<option value="{{$cate->id}}">{{$cate->name}}</option>
	      	@endforeach
	      </select>
      </div>

      <div class="form-group">
        <label>Tiêu Đề Bài Viết</label>
        <input type="text" class="form-control" name="name" placeholder="Tiêu đề bài viết" value="{{ old('name') }}" />
      </div>

      <div class="form-group">
      	<label>Miêu Tả Bài Viết</label>
        <textarea name="description" class="form-control" placeholder="Miêu tả bài viết"></textarea>
      </div>

      <div>
        <label>Nội Dung Bài Viết</label>
        <textarea id="summernote" name="content"></textarea>
      </div>

      <div class="form-group">
      	<label>Ảnh Bìa</label>
      	<input type="file" class="form-control" name="image" />
      </div>

      <div class="form-group">
      	<label>Trạng Thái</label>
      	<select name="status_id" class="form-control">
	      	<option value="1">Hiện</option>
	      	<option value="2">Ẩn</option>
	    </select>
      </div>

      <input type="submit" name="btnsubmit" class="btn -btn success" value="Thêm Mới" />
      

    </form>
  </div>
  <!-- /.box-body -->
</div>


    <script>
      $('#summernote').summernote({
		  height: 300,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: true                  // set focus to editable area after initializing summernote
		});
    </script>

@endsection