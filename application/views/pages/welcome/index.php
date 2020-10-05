<!DOCTYPE html>
<html>

<?= $this->load->view('layouts/header', null, true); ?>

<body>

	<?= $this->load->view('components/topnav', null, true); ?>
	<?= $this->load->view('components/bottomnav', null, true); ?>
	<?= $this->load->view('components/sidenav', null, true); ?>

	<div class="content-box content-other">
		<!-- Timehelper -->
		<div class="content-box content-home">
			<header id="headerSection" class="home-section">
				<div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<a href="<?= site_url(); ?>">
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