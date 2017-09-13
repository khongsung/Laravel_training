<form action="{{ route('admin.verify.postlogin') }}" method="post">
	{{ csrf_field() }}
	<input type="text" name="email" />
	<br/>
	<input type="password" name="password" />
	<br/>
	<input type="submit" value="{{ trans('user.lable_login') }}" />
</form>