<h1>create user</h1>
<table width="400px" border="1px">
	<tr>
		<td>name</td>
		<td>gmail</td>
	</tr>
	@foreach ($users as $user)
		<tr>
			<td>{{ $user['name'] }}</td>
			<td>{{ $user['gmail'] }}</td>
		</tr>
	@endforeach
</table>

<br />
@php
	@print_r($users)
@endphp

<br />

<p>Post: {{ $post }}</p>

<br />
<h1>Validate user</h1>

{!! Form::open(['route' => 'user.store']) !!}
	
	{!! Form::label('fullname', 'Fullname', ['class' => 'fullname']) !!}
	{!! Form::text('fullname', null, ['class' => 'fullname', 'style' => 'width:50px']) !!}
	{!! $errors->first('fullname') !!}

	<br />
	{!! Form::label('email', 'Email', ['class' => 'email']) !!}
	{!! Form::text('email', null, ['class' => 'email']) !!}
	{!! $errors->first('email') !!}

	<br />
	{!! Form::label('password', 'Password', ['class' => 'password']) !!}
	{!! Form::password('password', null, ['class' => 'password']) !!}
	{!! $errors->first('password') !!}

	<br />
	{!! Form::label('password_confirm', 'Password Confirm', []) !!}
	{!! Form::password('password_confirmation', null, []) !!}
	{!! $errors->first('password_confirmation') !!}

	<br />
	{!! Form::label('phone', 'Phone number', ['class' => 'phone']) !!}
	{!! Form::text('phone', null, ['class' => 'phone']) !!}

	<br />
	{!! Form::label('imformation', 'Imformation', ['class' => 'imformation']) !!}
	{!! Form::textarea('imformation', null, ['rows' => '5']) !!}

	<br />
	{!! Form::submit('Register') !!}

{!! Form::close() !!}
