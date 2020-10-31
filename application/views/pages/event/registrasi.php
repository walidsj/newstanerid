<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>

<div class="content-box content-other">
	<!-- Timehelper -->
	<header id="headerSection" class="home-section">
		<div>
			<img class="d-block w-100" src="<?= base_url(); ?>assets/img/slides/slide02.png" alt="FKN">
		</div>
	</header>
	<section class="content-blank bg-gray pt-4">
		<div class="container">
			<div class="row">
				<div class="container">
					<h4 class="text-capitalize head-title">Webinar FKN</h4>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="p-relative">
						<div class="slick_webinar slick-custom slick-card-same-height">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-wrap">
										<div class="row">
											<div class="col">
												<a href="<?= base_url(); ?>assets/img/event/poster/poster1.jpg">
													<img class="mb-2" src="<?= base_url(); ?>assets/img/event/poster/poster1.jpg" height="150" alt="" style="border-radius:20px">
												</a>
											</div>
											<div class="col">
												<span class="card-title mb-0">FKN Talkseries #1</span>
												<small class="text-muted d-block">Minggu, 1 November 2020</small>
												<small class="text-muted d-block">13.00 WIB - Selesai</small>
												<small class="text-muted d-block">Zoom</small>
												<a href="https://staner.id/fkntalkseries1">
													<small class="badge badge-xs badge-primary mt-3">Detail & Registrasi</small>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="slick-arrow-block arrow-webinar">
							<span class="slick-arrow slick-prev">
								<i class="fa fa-angle-left fa-lg" aria-hidden="true"></i></span>
							<span class="slick-arrow slick-next">
								<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="row">
				<div class="container">
					<div class="col-12 ml-auto mr-auto">
						<div class="row">
							<div class="col-12 mb-3">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-wrap">
											<div class="row">
												<div class="col">
													<a href="<?= base_url(); ?>assets/img/event/poster/poster1.jpg">
														<img class="mb-2" src="<?= base_url(); ?>assets/img/event/poster/poster1.jpg" height="150" alt="" style="border-radius:20px">
													</a>
												</div>
												<div class="col">
													<p class="text-default mb-0">FKN Talkseries #1</p>
													<small class="text-muted">Minggu, 1 November 2020</small>
													<br>
													<small class="text-muted">13.00 WIB - Selesai</small>
													<br>
													<a href="https://staner.id/fkntalkseries1">
														<small class="badge badge-xs badge-primary mt-3">Detail & Registrasi</small>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="row">
				<div class="col-12 mt-4 ml-auto mr-auto">
					<h4 class="text-capitalize head-title">Booklet Lomba</h4>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="p-relative">
						<div class="slick_booklet slick-custom slick-card-same-height">
							<a href="https://drive.google.com/file/d/1eZybU5X7V-ONfYuToilUQxGS1kpeSEjj/view?usp=sharing">
								<div class="card card-slick-custom">
									<div class="card-body">
										<img class="mb-2 mx-auto" src="<?= base_url(); ?>assets/img/menu/microscope.png" height="48" alt="">
										<h6 class="text-center card-title mb-0">Lomba KTI</h6>
									</div>
								</div>
							</a>
							<a href="https://drive.google.com/file/d/1ZEMpslRlPBTBo5k6lszcaSWeQ7XevJIM/view?usp=sharing">
								<div class="card card-slick-custom">
									<div class="card-body">
										<img class="mb-2 mx-auto" src="<?= base_url(); ?>assets/img/menu/notebook.png" height="48" alt="">
										<h6 class="text-center card-title mb-0">Lomba Esai</h6>
									</div>
								</div>
							</a>
							<a href="https://drive.google.com/file/d/1OSTOXi3pK4DHHDEv0UXaSAhi0sQYpTKm/view?usp=sharing">
								<div class="card card-slick-custom">
									<div class="card-body">
										<img class="mb-2 mx-auto" src="<?= base_url(); ?>assets/img/menu/canvas.png" height="48" alt="">
										<h6 class="text-center card-title mb-0">Lomba Desain</h6>
									</div>
								</div>
							</a>
							<a href="https://drive.google.com/file/d/17E5_pMd43YaQ3lYeMrV5AJcTopRyFYfE/view?usp=sharing">
								<div class="card card-slick-custom">
									<div class="card-body">
										<img class="mb-2 mx-auto" src="<?= base_url(); ?>assets/img/menu/projector.png" height="48" alt="">
										<h6 class="text-center card-title mb-0">Lomba Videografi</h6>
									</div>
								</div>
							</a>
							<a href="https://drive.google.com/file/d/1uNdtYQfig0jv1HQyuyFCi_bO75wJ-P6T/view?usp=sharing">
								<div class="card card-slick-custom">
									<div class="card-body">
										<img class="mb-2 mx-auto" src="<?= base_url(); ?>assets/img/menu/online-class.png" height="48" alt="">
										<h6 class="text-center card-title mb-0">Forum Keuangan</h6>
									</div>
								</div>
							</a>
						</div>

						<div class="slick-arrow-block arrow-booklet">
							<span class="slick-arrow slick-prev">
								<i class="fa fa-angle-left fa-lg" aria-hidden="true"></i></span>
							<span class="slick-arrow slick-next">
								<i class="fa fa-angle-right fa-lg" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 mt-4 ml-auto mr-auto">
					<h4 class="text-capitalize head-title">Pendaftaran</h4>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="col-12 ml-auto mr-auto">
						<div class="row">
							<div class="col-12 mb-3"><a href="https://bit.ly/regislktifkn">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap"><img class="mb-2" src="<?= base_url(); ?>assets/img/menu/microscope.png" height="48" alt="">
												<div class="ml-3">
													<p class="text-default mb-0">Lomba KTI</p>
													<small class="text-muted">10 - 25 Oktober 2020</small>
												</div>
											</div>
										</div>
									</div>
								</a></div>
							<div class="col-12 mb-3"><a href="https://bit.ly/regisesaifkn">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap"><img class="mb-2" src="<?= base_url(); ?>assets/img/menu/notebook.png" height="48" alt="">
												<div class="ml-3">
													<p class="text-default mb-0">Lomba Esai</p>
													<small class="text-muted">10 - 29 Oktober 2020</small>
												</div>
											</div>
										</div>
									</div>
								</a></div>
							<div class="col-12 mb-3"><a href="https://bit.ly/regisdesainfkn">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap"><img class="mb-2" src="<?= base_url(); ?>assets/img/menu/canvas.png" height="48" alt="">
												<div class="ml-3">
													<p class="text-default mb-0">Lomba Desain</p>
													<small class="text-muted">10 - 25 Oktober 2020</small>
												</div>
											</div>
										</div>
									</div>
								</a></div>
							<div class="col-12 mb-3"><a href="https://bit.ly/regisvideofkn">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap"><img class="mb-2" src="<?= base_url(); ?>assets/img/menu/projector.png" height="48" alt="">
												<div class="ml-3">
													<p class="text-default mb-0">Lomba Videografi</p>
													<small class="text-muted">10 - 25 Oktober 2020</small>
												</div>
											</div>
										</div>
									</div>
								</a></div>
							<div class="col-12 mb-3"><a href="https://bit.ly/regisforumfkn">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap"><img class="mb-2" src="<?= base_url(); ?>assets/img/menu/online-class.png" height="48" alt="">
												<div class="ml-3">
													<p class="text-default mb-0">Forum Keuangan Negara</p>
													<small class="text-muted">10 - 26 Oktober 2020</small>
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
	</section>
</div>
<?= $this->load->view('layouts/footer', null, true); ?>