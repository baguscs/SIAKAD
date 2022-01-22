@extends('user.master')
@push('css')
	<style>
		.filter{
			color: #263a4e;
		}
		.filter:hover{
			color: #cea06c;
		}
		.modal {
        display: none;
        background-color: transparent;
        transition: all 0.25s ease;
        }

        .modal.open {
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.5);
        }

        .modal .content-wrapper {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: left;
        justify-content: flex-start;
        width: 90%;
        margin: 0;
        padding: 2.5rem;
        background-color: white;
        border-radius: 0.3125rem;
        box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);
        }

        .modal .content-wrapper .close {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border: none;
        background-color: transparent;
        font-size: 1.5rem;
        transition: 0.25s linear;
        }

        .modal .content-wrapper .close:before, .modal .content-wrapper .close:after {
        position: absolute;
        content: '';
        width: 1.25rem;
        height: 0.125rem;
        background-color: black;
        }

        .modal .content-wrapper .close:before { transform: rotate(-45deg); }

        .modal .content-wrapper .close:after { transform: rotate(45deg); }

        .modal .content-wrapper .close:hover { transform: rotate(360deg); }

        .modal .content-wrapper .close:hover:before, .modal .content-wrapper .close:hover:after { background-color: #cea06c; }

        .modal .content-wrapper .modal-header {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin: 0;
        padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
        font-size: 1.5rem;
        font-weight: bold;
        }

        .modal .content-wrapper .content {
        position: relative;
        display: flex;
        }

        .modal .content-wrapper .content p {
        font-size: 0.875rem;
        line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        width: 100%;
        margin: 0;
        padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer > button {
        margin-left: 0.625rem;
        padding: 0.625rem 1.25rem;
        border: none;
        background-color: slategray;
        color: white;
        font-size: 0.87rem;
        font-weight: 300;
        }

        .modal .content-wrapper .modal-footer > button:first-child { background-color: #2ecc71; }

        .modal .content-wrapper .modal-footer > button:last-child { background-color: #e74c3c; }
        .cardContent{
            margin-top: 30px
        }
        .trigger{
            margin-top: 15px;
        }
		.mainContent{
			margin-left: 70px
		}
	</style>
@endpush
@section('konten')
    <!-- start banner Area -->
	<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="{{ asset('img/hero1.jpg') }}">
		<div class="overlay-bg overlay"></div>
		<h1 class="template-name">Akademi</h1>
		<div class="container">
			<div class="row fullscreen">
				<div class="banner-content col-lg-12">
					<p>Building Outstanding Students</p>
					<h1>
						Akademi <br>
						Persebaya
					</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

    <!-- Start features Area -->
	<section class="features-area section-gap-top" id="news">
		<div class="container">
			<div class="row feature_inner">
				<div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<a href="{{ route('organ') }}">
							<img src="{{ asset('img/org.png') }}" alt="" style="width: 70%">
							<h4>Struktur Organisasi</h4>
						</a>
						<p>Daftar Struktur Organisasi Sekolah Akademi Persebaya</p>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<a href="{{ route('items') }}">
							<img src="{{ asset('img/board.png') }}" alt="" width="70%">
							<h4>Fasilitas</h4>
						</a>
						<p>Data Fasilitas yang ada di Sekolah Akademi Persebaya</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<a href="{{ route('ekstra') }}">
							<img src="{{ asset('img/eks.png') }}" alt="" width="85%">
							<h4>Ekstrakulikuler</h4>
						</a>
						<p>Daftar Ekstrakulikuler di Sekolah Akademi Persebaya</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature-item">
						<a href="{{ route('medals') }}">
							<img src="{{ asset('img/medal.png') }}" alt="" width="70%">
							<h4>Prestasi</h4>
						</a>
						<p>Deretan Prestasi Sekolah Akademi Persebaya</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End features Area -->

    <!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-7 col-md-12 about-left">
					<img class="img-fluid" src="{{ asset('img/hero2.png') }}" alt="">
				</div>
				<div class="col-lg-5 col-md-12 about-right">
					<div class="section-title text-left">
						<h4>About Us</h4>
						<h2>Sekolah Akademi <br /> Pertama di Indonesia</h2>
					</div>
					<div>
						<p>
							Sekolah Akademi Persebaya ini merupakan sekolah pertama di Indonesia. Akademi ini berdiri sejak tanggal 17 Februari 2021. Dimana sekolah ini kami dirikan untuk mewadahi calon atlet masa depan bangsa.
						</p>
					</div>
					<a href="{{ route('about') }}" class="primary-btn">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

    <!-- Start Project Area -->
	<section class="project-area section-gap-top" id="project">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h2>Our School Activities</h2>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="filters mb-5">
						<ul>
							<li class="active">Latest</li>
							<li>
								<a href="{{ route('kegiatan') }}" class="filter">All</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row feature_inner">
					@foreach ($data as $item)
						<div class="col-lg-4 col-md-6">
							<div class="single-project">
								<div class="relative">
									<div class="thumb">
										<img class="image img-fluid" src="{{ asset('storage/kegiatan/'. $item->foto) }}" alt="">
									</div>
									<div class="middle">
										<h4>{{$item->nama}}</h4>
									</div>
									<a class="overlay trigger" data-modal-trigger="trigger-demo{{$loop->iteration}}"></a>

									<div data-modal="trigger-demo{{$loop->iteration}}" class="modal">
										<article class="content-wrapper">
										<button class="close"></button>
										<header class="modal-header">
											<h2>Detail Kegiatan {{$item->nama}}</h2>
										</header>
										<div class="content">
											<div class="row cardContent">
												<div class="col-md-5">
													<img class="imgModals" src="{{ asset('storage/kegiatan/'. $item->foto) }}" alt="" width="150%">
												</div>
												<div class="col-md-1"></div>
												<div class="col-md-6 col-lg-4">
													<p class="mainContent">{{$item->konten}}</p>
												</div>
											</div>
										</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- End Project Area -->

    <!-- Start callto Area -->
	<section class="callto-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="call-wrap mx-auto">
					<h1>View Our School </h1>
					<a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=_C5vCGB8Xx0">
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End callto Area -->
    <!-- Start brands Area -->
	<section class="brands-area">
		<h1 style="text-align: center">Our Partner</h1>
		<div class="container no-padding">
			<div class="brand-wrap section-gap">
				<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
					<div class="col single-brand">
						<a href="javacript:void(0);"><img class="mx-auto" src="{{ asset('img/brands/1.png') }}" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="javacript:void(0);"><img class="mx-auto" src="{{ asset('img/brands/2.png') }}" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="javacript:void(0);"><img class="mx-auto" src="{{ asset('img/brands/3.png') }}" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="javacript:void(0);"><img class="mx-auto" src="{{ asset('img/brands/4.png') }}" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="javacript:void(0);"><img class="mx-auto" src="{{ asset('img/brands/5.png') }}" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End brands Area -->
@endsection
@push('js')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script>
		const buttons = document.querySelectorAll(`a[data-modal-trigger]`);

		for(let button of buttons) {
		modalEvent(button);
		}

		function modalEvent(button) {
		button.addEventListener('click', () => {
			const trigger = button.getAttribute('data-modal-trigger');
			const modal = document.querySelector(`[data-modal=${trigger}]`);
			const contentWrapper = modal.querySelector('.content-wrapper');
			const close = modal.querySelector('.close');

			close.addEventListener('click', () => modal.classList.remove('open'));
			modal.addEventListener('click', () => modal.classList.remove('open'));
			contentWrapper.addEventListener('click', (e) => e.stopPropagation());

			modal.classList.toggle('open');
		});
		}
	</script>
@endpush