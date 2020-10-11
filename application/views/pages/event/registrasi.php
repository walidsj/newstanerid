<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>

<div class="content-box content-other">
	<!-- Timehelper -->
	<header id="headerSection" class="home-section">
		<div id="demo" class="carousel slide">
			<div class="carousel-inner">
				<div class="carousel-item">
					<a href="#">
						<div>
							<img class="d-block w-100" src="<?= base_url(); ?>assets/img/slides/slide02.png" alt="FKN">
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
	<section class="content-blank bg-gray pt-5">
		<div class="container">
			<h4 class="text-capitalize head-title">Pendaftaran</h4>
			<div class="row">
				<div class="col-12 ml-auto mr-auto">
					<div class="container">
						<div class="row">
							<div class="col-12 mb-3"><a href="http://localhost/newstanerid/persuratan">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap"><img class="mb-2" src="http://localhost/newstanerid/assets/img/menu/talk.png" height="64" alt="">
												<div class="ml-5">
													<p class="text-default mb-0">Layanan Persuratan</p>
												</div>
											</div>
										</div>
									</div>
								</a></div>
							<div class="col-12 mb-3"><a href="http://localhost/newstanerid/advokasi">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap"><img class="mb-2" src="http://localhost/newstanerid/assets/img/menu/collaboration.png" height="64" alt="">
												<div class="ml-5">
													<p class="text-default mb-0">Layanan Advokasi</p>
												</div>
											</div>
										</div>
									</div>
								</a></div>
							<div class="col-12 mb-3"><a href="http://localhost/newstanerid/perizinan">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap"><img class="mb-2" src="http://localhost/newstanerid/assets/img/menu/no-war.png" height="64" alt="">
												<div class="ml-5">
													<p class="text-default mb-0">Akses Perizinan</p>
												</div>
											</div>
										</div>
									</div>
								</a></div>
							<div class="col-12 mb-3"><a href="http://localhost/newstanerid/pengaduan">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap"><img class="mb-2" src="http://localhost/newstanerid/assets/img/menu/balance.png" height="64" alt="">
												<div class="ml-5">
													<p class="text-default mb-0">Portal Pengaduan</p>
												</div>
											</div>
										</div>
									</div>
								</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<footer class="footer-section">
			<div class="container footer-left-xs">
				<div class="row justify-content-between">
					<div class="col-12">
						<a class="logo" href="#">
							<img src="<?= base_url(); ?>assets/img/logo-1.png" alt="" class="img-fluid">
						</a>

						<p class="mt-2">
							©2020 | All Rights Reserved
						</p>
					</div>
				</div>
			</div>
		</footer>
	</section>
</div>

<?= $this->load->view('layouts/footer', null, true); ?>