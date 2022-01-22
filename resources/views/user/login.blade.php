{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>Sekolah Akademi Persebaya</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('noname/css/main.css') }}">
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->
</head>
<style>
	.btnForgot{
		color: white;
		margin-left: 35%
	}
</style>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('noname/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form" action="{{ route('login') }}" method="POST">
					@csrf
					<span class="login100-form-title p-b-34 p-t-27">
						Login Page
					</span>

					<div class="wrap-input100" data-validate = "Enter username">
						<input class="input100" name="email" type="text" name="email" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="w3-section">
						<button type="submit" class="w3-button w3-block w3-green">Login</button><br>
						<button onclick="history.go(-1);" class="w3-button w3-block w3-red">Batal</button>
					</div>
					<div class="w3-secyion">
						<a href="" class="btnForgot">Lupa Paasword?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('noname/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('noname/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('noname/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('noname/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('noname/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('noname/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('noname/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('noname/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('noname/js/main.js') }}"></script>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>Sekolah Akademi Persebaya</title>

		<!-- Meta-Tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- style CSS -->
		<link rel="stylesheet" href="{{ asset('signin/css/style.css') }}" type="text/css" media="all">

		<!-- fontawesome -->
		<link rel="stylesheet" href="{{ asset('signin/css/font-awesome.min.css') }}" type="text/css" media="all">

		<!-- google fonts -->
		<link href="//fonts.googleapis.com/css?family=Mukta:300,400,500" rel="stylesheet">

		<link rel="shortcut icon" href="{{ asset('img/icon.png') }}">

	</head>
	<!-- //Head -->
	<style>
		.bottombtn{
			margin-left: 25px;
			margin-top: 15px;
		}
		.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
	</style>
<!-- Body -->
	<body>
		<section class="main">

			<div class="bottom-grid">
				<div class="logo">
					<h1> <a href="index.html">Login Page Sekolah Akademi Persebaya</a></h1>
				</div>
			</div>
			<div class="content-w3ls">
				<div class="text-center icon">
					<img src="{{ asset('img/icon.png') }}" alt="" width="30%">
				</div>
				@error('email')
					<div class="alert">
						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
						Username dan Password anda tidak terdaftar
					</div>
				@enderror
				<br>
				<div class="content-bottom">
					<form action="{{ route('login') }}" method="post">
						@csrf
						<div class="field-group">
							<span class="fa fa-user" aria-hidden="true"></span>
							<div class="wthree-field">
								<input name="email" id="text1" type="text" value="" placeholder="Username" required>
							</div>
						</div>
						<div class="field-group">
							<span class="fa fa-lock" aria-hidden="true"></span>
							<div class="wthree-field">
								<input name="password" id="myInput" type="Password" placeholder="Password" required>
							</div>
						</div>
						<div class="wthree-field">
							<button type="submit" class="btn">Log in</button>
						</div>
						<ul class="list-login-bottom bottombtn">
							<li class="">
								<a href="#" class="bottombtn">forgot password?</a>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</section>

	</body>
<!-- //Body -->

</html>
