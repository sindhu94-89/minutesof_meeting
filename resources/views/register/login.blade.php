@include('layouts.header')
	<main class="py-4 container">
		<div style="padding-left: :400px;">
			<form class="form-group" method="post" action="/register/loginPost">
				<div class="form-group col-md-6">
					<label>Email</label>
					<input type="text" name="email" class="form-control" />
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Password</label>
					<input type="Password" name="password" class="form-control" />
				</div><br/>
				@csrf
				<div class="form-group">
					<input type="submit" name="Login" value="Login" class="button btn btn-primary">&nbsp;
					<a href="/register" class="btn btn-primary btn-md active" role="button">Register</a>
				</div>
			</form>
		</div>
	</main>