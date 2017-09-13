@extends('admin.app')
@section('title', 'Tạo Người Dùng')
@section('content')

<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Thêm người dùng mới</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::model($data, ['route' => ['user.update', $data], 'method' => 'put']) !!}
      {{ csrf_field() }}

      <!-- text input -->
      <p style="color: red;font-weight: bold;text-align: center">{{ $errors->first() }}</p>

      <div class="form-group">
        <label>Họ và tên</label>
        <input type="text" class="form-control" name="name" placeholder="Họ và tên của bạn" value="{{ $data->name }}" />
      </div>

      <div class="form-group">
        <label>Giới Tính</label>
        @if($data->gender == 0)
          <input type="radio" name="gender" checked value="0" />Nam
          <input type="radio" name="gender" value="1" />Nữ
        @else
          <input type="radio" name="gender" value="0" />Nam
          <input type="radio" name="gender" checked value="1" />Nữ
        @endif
        <!-- <input type="radio" name="gender" value="0" />Nam
        <input type="radio" name="gender" value="1" />Nữ -->
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email của bạn" value="{{ $data->email }}" />
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" value="{{ $data->password }}" />
      </div>

      <div class="form-group">
        <label>Confirm password</label>
        <input type="password" class="form-control" name="password_confirmation" value="{{ $data->password }}" />
      </div>

      <div class="form-group">
        <label>Địa chỉ</label>
        <input type="text" class="form-control" name="address" placeholder="Địa chỉ của bạn" value="{{ $data->address }}" />
      </div>

      <div class="form-group">
        <label>Số Điện Thoại</label>
        <input type="text" class="form-control" name="phone" placeholder="Số điện thoại của bạn" value="{{ $data->phone }}" />
      </div>

      <!-- <div class="form-group">
        <label>Level</label>
        <select  name="level" class="form-control">
          <option value="1" selected @if(old('level') == 1) { selected } @endif>Admin</option>
          <option value="2" @if(old('level') == 2) { selected } @endif>Member</option>
        </select>
      </div> -->

      <input type="submit" name="btnsubmit" class="btn -btn success" value="Lưu Lại" />
      

    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
@endsection