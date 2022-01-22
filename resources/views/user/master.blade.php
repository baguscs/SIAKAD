<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Sekolah Akademi Persebaya</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
@stack('css')
<body>

	<!-- Start Header Area -->
	<header class="default-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="{{ route('index') }}" style="color: white">
					<img src="{{ asset('img/icon.png') }}" alt="" style="width: 10%"> Sekolah Akademi Persebaya
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li><a href="{{ route('index') }}">Beranda</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								Pegawai
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{ route('guru') }}">Guru</a>
								<a class="dropdown-item" href="{{ route('karyawan') }}">Karyawan</a>
							</div>
						</li>
						<li><a href="{{ route('daftar') }}">Pendaftaran</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								Siswa
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{ route('kelas', '7') }}">Kelas 7</a>
								<a class="dropdown-item" href="{{ route('kelas', '8') }}">Kelas 8</a>
								<a class="dropdown-item" href="{{ route('kelas', '9') }}">Kelas 9</a>
							</div>
						</li>
						<li><a href="{{ route('masuk') }}">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End Header Area -->

	@yield('konten')

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Purpose Of Standing</h4>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi sed voluptas omnis veritatis nam repudiandae, culpa ullam facere iste enim reprehenderit minus, dicta rem repellendus magni dolor nemo aut expedita!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil delectus repellendus labore nostrum deserunt perferendis adipisci error magnam nam, voluptatem accusamus incidunt modi deleniti similique, doloremque, dolorum quasi alias! Vero.</p>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Useful Links</h4>
					<ul>
						<li><a href="#">Persebaya Surabaya</a></li>
						<li><a href="#">Kementrian Pemuda dan Olahraga</a></li>
						<li><a href="#">Kementrian Pendidikan</a></li>
						<li><a href="#">Pemerintah Kota Surabaya</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Contact Info</h4>
					<p>Address:<br>
					Jl. Babakan Selatan No. 120, Surabaya, Jawa Timur <br>
					60891
					</p>
					<p>Phone: <br>
					(+62)8912731232
					</p>
					<p>Email: <br>
					er@gmail.com	
					</p>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Bagus Cahyo S</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-youtube"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	@stack('js')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('js/parallax.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>