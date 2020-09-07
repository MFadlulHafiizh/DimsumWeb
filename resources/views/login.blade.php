<!DOCTYPE html>
<html>
<head>
	<script src="{{URL::asset('/assets/bootstrap/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('/assets/bootstrap/js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{ URL::asset('/assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/login.css')}}">
	<title>Login admin</title>
</head>
<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Sign In</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="card-body">
					<form method="post" action="{{ route('login')}}">
						{{ @csrf_field() }}
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" id="inputUsername" class="form-control" placeholder="username" name="username">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="inputPassword" class="form-control" placeholder="password" name="pw">
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Remember Me
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>