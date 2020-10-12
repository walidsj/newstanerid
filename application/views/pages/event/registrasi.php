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
					<h4 class="text-capitalize head-title">Booklet</h4>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="slick_kelas-favorit slick-custom slick-card-same-height">
						<a href="#">
							<div class="card card-slick-custom">
								<div class="card-body p-3">
									<h6 class="card-title mb-0">A</h6>
									<div class="card-author-katalog align-items-center mt-2">
										<p class="card-text"><span class="fs-14 font-400">A<i class="fa fa-check-circle text-tertiary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Akun Resmi"></i></span></p>
									</div>
								</div>
							</div>
						</a>
						<a href="#">
							<div class="card card-slick-custom">
								<div class="card-body p-3">
									<h6 class="card-title mb-0">A</h6>
									<div class="card-author-katalog align-items-center mt-2">
										<p class="card-text"><span class="fs-14 font-400">A<i class="fa fa-check-circle text-tertiary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Akun Resmi"></i></span></p>
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
		</div>
		<div class="row">
			<div class="col-12 ml-auto mr-auto">
				<h4 class="text-capitalize head-title">Pendaftaran</h4>
			</div>
		</div>
		<div class="row">
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