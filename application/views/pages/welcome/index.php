<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Luarsekolah merupakan wadah belajar dan mengajar pelajaran non-formal / alternatif dengan cara menyediakan kelas pengajaran dalam bentuk online dan offline untuk memudahkan pemuda dan pemudi Indonesia dalam mempelajarinya">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<title>Staner.id</title>

	<link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/img/icon/favicon.png" />
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<!-- Slick -->
	<link id="effect" rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/vendor/slick/slick.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/vendor/slick/slick-theme.css" />
	<!-- Hamburgers -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/hamburgers/css/hamburgers.min.css">
	<!-- Main Style -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/custom.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>assets/vendor/slinky/css/slinky.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/plyr/plyr.css">
	<style type="text/css">
		.scrollable-menu {
			height: auto;
			max-height: 50vh;
			overflow-x: hidden;
		}
	</style>
</head>

<body>

	<div id='preloader'>
		<div class='spinner' id='loader'>
			<div id='shadow'></div>
			<div id='box'></div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg desktop-navigation other-navbar fixed-top">
		<div class="container">
			<div class="navbar-header mx-auto">
				<a class="navbar-brand pt-0 mr-0" href="<?= site_url(); ?>">
					<img src="<?= base_url(); ?>assets/img/logo-1.png" alt="<?= site_url(); ?>" class="img-fluid logo-other">
				</a>
			</div>

			<div class="d-block d-md-none">
				<div class="d-flex align-items-center">
					<div class="ml-3 mr-1">
						<a class="dropdown-toggle dashboard-dropdown p-relative" href="javascript:void(0)" id="ShowMenuMobile" role="button">
							<img src="<?= base_url(); ?>assets/img/nav/tangerine.png" height="24" alt="<?= site_url(); ?>" class="img">
						</a>
					</div>
				</div>
			</div>

			<div class="collapse navbar-collapse" id="navbarDesktop">
				<div class="navbar-nav mr-auto mt-2 mt-lg-0">
				</div>

				<ul class="navbar-nav nav-line">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url(); ?>">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url(); ?>event">Event</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url(); ?>berita">Berita</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url(); ?>registrasi">Daftar</a>
					</li>
					<li class="nav-item btn-nav">
						<div class="path-bg-btn">
							<a href="<?= site_url(); ?>registrasi" class="btn btn-danger btn-path-wave btn-md">Masuk</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Mobile Nav -->
	<nav class="navbar navbar-expand-lg desktop-navigation other-navbar p-0 d-block d-md-none fixed-bottom">
		<div class="container">
			<ul class="menu-mobile-bottom">
				<li class="active">
					<a class="text-tertiary" href="<?= site_url(); ?>">
						<div>
							<img src="<?= base_url(); ?>assets/img/nav/unicorn.png" alt="Beranda" class="img" height="32">
						</div>

						<p class="lh-12 mb-2"><span class="fs-10 font-400">Beranda</span></p>
					</a>
				</li>

				<li>
					<a class="text-dark" href="<?= site_url(); ?>event">
						<div>
							<img src="<?= base_url(); ?>assets/img/nav/unicorn2.png" alt="Beranda" class="img" height="32">
						</div>

						<p class="lh-12 mb-2"><span class="fs-10 font-400">Event</span></p>
					</a>
				</li>

				<li>
					<a class="text-dark" href="<?= site_url(); ?>berita">
						<div>
							<img src="<?= base_url(); ?>assets/img/nav/unicorn3.png" alt="Beranda" class="img" height="32">
						</div>

						<p class="lh-12 mb-2"><span class="fs-10 font-400">Berita</span></p>
					</a>
				</li>

				<li>
					<a class="text-dark" href="javascript:void(0)" id="ShowMenuMobile2">
						<div>
							<img src="<?= base_url(); ?>assets/img/nav/unicorn4.png" alt="Beranda" class="img" height="32">
						</div>

						<p class="lh-12 mb-2"><span class="fs-10 font-400">Akun</span></p>
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<div id="mySidenav" class="sidenav">
		<div class="container-fluid mr-1 ml-1">
			<div class="closebtn text-gold" id="CloseMenuMobile">
				<i class="fa fa-times text-dark" aria-hidden="true"></i>
			</div>
			<div class="mt-3 mb-3">
				<img src="<?= base_url(); ?>assets/img/logo-1.png" alt="<?= site_url(); ?>" class="img-fluid logo-other" width="90">
			</div>
		</div>

		<div class="container-fluid mr-1 ml-1">
			<div id="menu-mobile" class="menu-slinky">
				<ul class="navbar-nav-mobile mt-3 mb-3">
					<div class="d-flex-center">
						<a href="<?= site_url(); ?>registrasi" class="btn btn-default rad-80 mini-shadow btn-lg w-100">
							<div class="d-flex align-items-center justify-content-center">
								<img src="<?= base_url(); ?>assets/img/icon/google.png" class="img-fluid mr-3" width="18" alt="">
								<p class="text-default font-600 mb-0">Login with Google</p>
							</div>
						</a>
					</div>
				</ul>
			</div>
		</div>
	</div>
	<div class="content-box content-other">
		<!-- Timehelper -->
		<div class="content-box content-home">
			<header id="headerSection" class="home-section">
				<div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<a href="https://m.bukalapak.com/kartu-prakerja?source=luarsekolah">
								<div class="">
									<img class="d-block w-100" src="<?= base_url(); ?>assets/img/slides/slide01.png" alt="BEM APPS Slide">
								</div>
								<div class="carousel-caption container d-flex align-items-center">
									<div class="text-block">
										<h5></h5>
										<p><br><br><br><br><br></p>
									</div>
								</div>
							</a>
						</div>
					</div>

					<span class="d-md-block">
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>

						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</span>
				</div>
			</header>
			<section class="content-blank bg-gray pb-0">
				<div class="container">
					<div class="row">
						<div class="col-12 ml-auto mr-auto">
							<div class="container">
								<div class="row">
									<div class="col-6 col-md-3 mb-3 px-2">
										<a href="<?= site_url(); ?>persuratan">
											<div class="card">
												<div class="card-body">
													<div class="d-flex flex-wrap text-center">
														<img class="mx-auto mb-2" src="<?= base_url(); ?>assets/img/menu/talk.png" class="img" height="64" alt="">
														<div>
															<p class="text-default mb-0">Layanan Persuratan</p>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>

									<div class="col-6 col-md-3 mb-3 px-2">
										<a href="<?= site_url(); ?>advokasi">
											<div class="card">
												<div class="card-body">
													<div class="d-flex flex-wrap text-center">
														<img class="mx-auto mb-2" src="<?= base_url(); ?>assets/img/menu/collaboration.png" class="img" height="64" alt="">
														<div>
															<p class="text-default mb-0">Layanan Advokasi</p>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>

									<div class="col-6 col-md-3 mb-3 px-2">
										<a href="<?= site_url(); ?>perizinan">
											<div class="card">
												<div class="card-body">
													<div class="d-flex flex-wrap text-center">
														<img class="mx-auto mb-2" src="<?= base_url(); ?>assets/img/menu/no-war.png" class="img" height="64" alt="">
														<div>
															<p class="text-default mb-0">Akses Perizinan</p>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>

									<div class="col-6 col-md-3 mb-3 px-2">
										<a href="<?= site_url(); ?>pengaduan">
											<div class="card">
												<div class="card-body">
													<div class="d-flex flex-wrap text-center">
														<img class="mx-auto mb-2" src="<?= base_url(); ?>assets/img/menu/balance.png" class="img" height="64" alt="">
														<div>
															<p class="text-default mb-0">Portal Pengaduan</p>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<section class="content-blank bg-gray py-2 pb-5 mb-5">
				<div class="container">
					<h4 class="text-capitalize head-title">Event terbaru</h4>
					<div class="p-relative">
						<div class="slick_kelas-favorit slick-custom slick-card-same-height">
							<a href="<?= site_url(); ?>">
								<div class="card card-slick-custom">
									<div class="block-over-img">
										<img class="card-img-top w-100" style="" src="<?= base_url(); ?>assets/img/badges/bigb.png">
									</div>
									<div class="card-body p-3">
										<h6 class="card-title mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="BigB Plan Competition"><strong>BigB Plan Competition</strong>: We Dare to Plan The Future</h6>
										<div class="card-author-katalog align-items-center mt-2">
											<img src="<?= base_url(); ?>assets/img/tentor/cabbage.png" class="img-fluid img-profile" alt="Kementerian Ekonomi Kreatif">
											<p class="card-text"><span class="fs-14 font-400">Kementerian Ekraf <i class="fa fa-check-circle text-tertiary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Akun Resmi"></i></span></p>
										</div>
									</div>
								</div>
							</a>
						</div>

						<div class="slick-arrow-block arrow-kelas-favorit">
							<span class="slick-arrow slick-prev">
								<i class="fa fa-angle-left fa-lg" aria-hidden="true"></i></span>
							<span class="slick-arrow slick-next">
								<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
			</section>


		</div>

	</div>

	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js?v2"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/jquery/jquery.migrate.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/popper/popper.min.js?v2"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/animsition/js/animsition.min.js?v2"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/slinky/js/slinky.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/vendor/plyr/plyr.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/slick-add-new.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/sidebar-mobile.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".spinner").fadeOut(), $("#preloader").delay(350).fadeOut("slow"), $("body").delay(350).css({
				overflow: "visible"
			})
		});
	</script>

	<script type="text/javascript">
		function initPlayer() {
			const player = new Plyr('.js-player');
		}
		initPlayer()
	</script>

	<script type="text/javascript">
		$('body').tooltip({
			selector: '.card-title'
		});

		$(function() {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>

	<script>
		window.slinky = $('#menu-mobile').slinky();
		window.slinky = $('#menu-users').slinky();
	</script>
</body>

</html>