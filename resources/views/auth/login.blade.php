<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/login/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/login/vendor/animate/animate.css') }}">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/login/vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/login/vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme-assets/login/css/main.css') }}">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('theme-assets/login/images/img-01.png') }}" alt="IMG">
				</div>

				<form class="login100-form validate-form needs-validation" action="{{ route('login') }}" method="POST" novalidate>

					@csrf
					<span class="login100-form-title" style="">
						Admin Login
					</span>
					@if ($errors->has('email'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<span class="fa fa-info-circle"><strong> Email atau Password Salah</strong></span>
						
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif
					@if ($errors->has('password'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<span class="fa fa-info-circle"><strong> Email atau Password Salah</strong></span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required" >
						<input id="email" class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}" style="border-bottom: 2px solid #483D8B;border-top: 2px solid #483D8B">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="password" class="input100" type="password" name="password" placeholder="Password" style="border-bottom: 2px solid #483D8B;border-top: 2px solid #483D8B">
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="ml-5 mt-2">
						

					</div>

					<div class="text-center p-t-136">
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	<!--===============================================================================================-->	
	<script src="{{ asset('theme-assets/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme-assets/login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('theme-assets/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme-assets/login/vendor/select2/select2.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme-assets/login/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme-assets/login/js/main.js') }}"></script>

</body>
</html>