@include('layouts.header')

<main class="py-4 container">
	<div style="padding-left: :200px;">
		<h3>Users Registration</h3>
		<!-- @if ($errors->any())
			<ul>
				{!!implode('',$errors->all('<li>:message</li>'))!!}
			</ul>
		@endif -->
		<form method="post" name="users" action="/register/createUser">
			<div class="form-row row">
				<div class="form-group col-md-6">
					<label for="first_name">First Name </label>
					<input type="text" name = "first_name" value="{{old('first_name')}}" class="form-control">
					@error('first_name')<div class="alert alert-warning">{{ $message }}</div>@enderror
				</div>

				<div class="form-group col-md-6">
					<label for="last_name">Last Name</label>
					<input type="text" name = "last_name" value="{{old('last_name')}}" class="form-control">
					@error('last_name')<div class="alert alert-warning">{{ $message }}</div>@enderror
				</div>
			</div>
			<div class="form-group">
				<div class="custom-control custom-radio custom-control-inline">
					<!-- <label for="" class="form-label">Gender -->
					<input type ="radio" name="gender" id="gender"  class="custom-control-input" @checked(old('gender')) value="male">
					<label class="custom-control-label">Male</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type ="radio" name="gender" id="gender"  class="custom-control-input" @checked(old('gender')) value="female">
					<label class="custom-control-label">Female</lable>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type ="radio" name="gender" id="gender"  class="custom-control-input" @checked(old('gender')) value="others">
					<label class="custom-control-label">Others</label>
				</div>
				@error('gender')<div class="alert alert-warning">{{ $message }}</div>@enderror<br/>
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name = "email" value="{{old('email')}}">
				@error('email')<div class="alert alert-warning">{{ $message }}</div>@enderror<br/>
			</div>

			<div class="form-row row">
				<div class="form-group col-md-6">
					<label for="phone_number">Phone Number </label>
					<input type="text" class="form-control" name = "phone_number" value="{{old('phone_number')}}">
					@error('phone_number')<div class="alert alert-warning">{{ $message }}</div>@enderror<br/>
				</div>

				<div class="form-group col-md-6">
					<label for="dob">Date of Birth</label>
					<input type="date" class="form-control" name = "dob" value="{{old('dob')}}">
					@error('dob')<div class="alert alert-warning">{{ $message }}</div>@enderror<br/>
				</div>
			</div>

			<div class="form-row row">
				<div class="form-group col-md-6">
					<label for="password">Password </label>
					<input type="password" class="form-control" name = "password" value="{{old('password')}}">
					@error('password')<div class="alert alert-warning">{{ $message }}</div>@enderror<br/>
				</div>

				<div class="form-group col-md-6">
					<label for="password-confirm">Confirm Password</label>
					<input type="password" class="form-control" name = "password_confirmation" value="{{old('password_confirmation')}}">
					@error('password_confirmation')<div class="alert alert-warning">{{ $message }}</div>@enderror<br/>
				</div>
			</div>

			<div class="form-row row">
				<div class="form-group col-md-6">
					<label for="address">Address </label>
					<textarea class="form-control" id="address" name = "address" value="{{old('address')}}"></textarea>
					<!-- <input type="text" name = "address" value="{{old('name')}}"> -->
					@error('address')<div class="alert alert-warning" role="alert">{{ $message }}</div>@enderror<br/>
				</div>
			</div>
			@csrf

			<input type="submit" class="btn btn-primary" value="Register"><!--  <a href="/register/login">Login</a> -->
		</form>
		@if(isset($result))
			{{json_encode($result)}}
		@endif
	</div>
</main>