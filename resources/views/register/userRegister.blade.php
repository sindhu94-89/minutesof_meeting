<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>
	<div style="padding-left: :200px;">
		<h3>Users Registration</h3>
		<!-- @if ($errors->any())
			<ul>
				{!!implode('',$errors->all('<li>:message</li>'))!!}
			</ul>
		@endif -->
		<form method="post" name="users" action="/register/createUser">
			<label for="">First Name <input type="text" name = "first_name" value="{{old('first_name')}}">
			@error('first_name')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

			<label for="">Last Name <input type="text" name = "last_name" value="{{old('last_name')}}">
			@error('last_name')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

			<label for="">Gender
			<input type ="radio" name="gender" id="gender"  @checked(old('gender')) value="male">Male
			<input type ="radio" name="gender" id="gender"  @checked(old('gender')) value="female">Female
			<input type ="radio" name="gender" id="gender"  @checked(old('gender')) value="others">Others
			@error('gender')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

			<label for="">Email <input type="text" name = "email" value="{{old('email')}}">
			@error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

			<label for="">Phone Number <input type="text" name = "phone_number" value="{{old('phone_number')}}">
			@error('phone_number')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

			<label for="">Date of Birth <input type="date" name = "dob" value="{{old('dob')}}">
			@error('dob')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

			<label for="">Password <input type="password" name = "password" value="{{old('password')}}">
			@error('password')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

			<label for="">Confirm Password <input type="password" name = "password_confirmation" value="{{old('password_confirmation')}}">
			@error('password_confirmation')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>

			<label for="">Address 
				<textarea class="form-control" id="address" name = "address" value="{{old('address')}}"></textarea>
				<!-- <input type="text" name = "address" value="{{old('name')}}"> -->
			@error('address')<div class="alert alert-danger">{{ $message }}</div>@enderror<br/>
			@csrf
			<input type="submit" value="Register"> <a href="/register/login">Login</a>
		</form>
		@if(isset($result))
			{{json_encode($result)}}
		@endif
	</div>
</body>
</html>