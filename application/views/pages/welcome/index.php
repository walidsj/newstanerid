<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>
<?= $this->load->view('components/bottomnav', null, true); ?>
<?= $this->load->view('components/sidenav', null, true); ?>

<!-- Timehelper -->
<div class="content-box content-other">
	<header id="headerSection" class="home-section">
		<div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">
			<div class="carousel-inner">
				<?php
				$i = 1;
				foreach ($slide as $s) : ?>
					<?php
					if (strpos($s->slide_url, 'https://') !== false) {
						$surl = $s->slide_url;
					} elseif (strpos($s->slide_url, 'http://') !== false) {
						$surl = $s->slide_url;
					} else {
						$surl = site_url() . $s->slide_url;
					}

					if (strpos($s->slide_image, 'https://') !== false) {
						$simage = $s->slide_image;
					} elseif (strpos($s->slide_image, 'http://') !== false) {
						$simage = $s->slide_image;
					} else {
						$simage = base_url() . $s->slide_image;
					}
					?>
					<div class="carousel-item <?= ($i == 1) ? 'active' : null; ?>">
						<a href="<?= $surl; ?>">
							<div>
								<img class="d-block w-100" src="<?= $simage; ?>" alt="<?= $s->slide_judul; ?>">
							</div>
							<div class="carousel-caption container d-flex align-items-center">
								<div class="text-block">
									<h5></h5>
									<p><br><br><br><br><br></p>
								</div>
							</div>
						</a>
					</div>
				<?php
					$i++;
				endforeach; ?>
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
	<section class="content-blank bg-gray pb-0 pt-4">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card-body p-0 pb-3">
						<?php if (!empty($this->session->flashdata('alert'))) : ?>
							<div class="alert alert-<?= $this->session->flashdata('alert')['type']; ?>" role="alert">
								<?= $this->session->flashdata('alert')['message']; ?>
							</div>
						<?php endif; ?>
						<div class="card-author no-border align-items-center">
							<img src="<?= base_url(); ?>assets/img/tentor/cabbage.png" class="img-fluid img-profile mr-3" alt="">
							<div class="info-profile">
								<?php
								$jam = date('H:i');

								if ($jam > '05:30' && $jam < '10:00') {
									$salam = 'Pagi';
									$pertanyaan = 'Gimana kelas paginya?';
								} elseif ($jam >= '10:00' && $jam < '15:00') {
									$salam = 'Siang';
									$pertanyaan = 'Mari makan siang.';
								} elseif ($jam < '18:00') {
									$salam = 'Sore';
									$pertanyaan = 'Mandi sore dulu.';
								} else {
									$salam = 'Malam';
									$pertanyaan = 'Jangan begadang ya';
								}


								if ($user) {
									$nama = explode(' ', str_replace('.', '', $user->nama))[0];
								} else {
									$nama = 'Staner';
								}
								?>
								<p class="title pb-0 pl-0">Selamat <?= $salam; ?>, <?= $nama; ?>!</p>
								<div class="d-flex align-items-center mb-0">
									<p class="text-default mb-0 mr-2"><?= $pertanyaan; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 ml-auto mr-auto">
					<div class="container">
						<div class="row">
							<div class="col-6 mb-3 px-2">
								<a href="<?= site_url(); ?>persuratan">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap text-center">
												<img class="mx-auto mb-2" src="<?= base_url(); ?>assets/img/menu/talk.png" class="img" height="64" alt="">
												<div class="mx-auto">
													<p class="text-default mb-0">Layanan Persuratan</p>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>

							<div class="col-6 mb-3 px-2">
								<a href="<?= site_url(); ?>advokasi">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap text-center">
												<img class="mx-auto mb-2" src="<?= base_url(); ?>assets/img/menu/collaboration.png" class="img" height="64" alt="">
												<div class="mx-auto">
													<p class="text-default mb-0">Layanan Advokasi</p>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>

							<div class="col-6 mb-3 px-2">
								<a href="<?= site_url(); ?>perizinan">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap text-center">
												<img class="mx-auto mb-2" src="<?= base_url(); ?>assets/img/menu/no-war.png" class="img" height="64" alt="">
												<div class="mx-auto">
													<p class="text-default mb-0">Akses Perizinan</p>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>

							<div class="col-6 mb-3 px-2">
								<a href="<?= site_url(); ?>pengaduan">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap text-center">
												<img class="mx-auto mb-2" src="<?= base_url(); ?>assets/img/menu/balance.png" class="img" height="64" alt="">
												<div class="mx-auto">
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
	<section class="content-blank bg-gray py-2">
		<div class="container">
			<h4 class="text-capitalize head-title px-2">Event terbaru</h4>
			<div class="p-relative">
				<div class="slick_kelas-favorit slick-custom slick-card-same-height">
					<?php foreach ($event as $e) : ?>
						<?php
						if (strpos($e->event_url, 'https://') !== false) {
							$url = $e->event_url;
						} elseif (strpos($e->event_url, 'http://') !== false) {
							$url = $e->event_url;
						} else {
							$url = site_url() . $e->event_url;
						}

						if (strpos($e->event_image, 'https://') !== false) {
							$image = $e->event_image;
						} elseif (strpos($e->event_image, 'http://') !== false) {
							$image = $e->event_image;
						} else {
							$image = base_url() . $e->event_image;
						}
						?>
						<a href="<?= $url; ?>">
							<div class="card card-slick-custom">
								<div class="block-over-img">
									<img class="card-img-top w-100" style="" src="<?= $image; ?>">
								</div>
								<div class="card-body p-3">
									<h6 class="card-title mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?= $e->event_judul; ?> - <?= $e->event_penyelenggara; ?>"><?= $e->event_judul; ?></h6>
									<div class="card-author-katalog align-items-center mt-2">
										<p class="card-text"><span class="fs-14 font-400"><?= $e->event_penyelenggara; ?> <i class="fa fa-check-circle text-tertiary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Akun Resmi"></i></span></p>
									</div>
								</div>
							</div>
						</a>
					<?php endforeach; ?>
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
	<section class="content-blank bg-gray py-3 pb-5 mb-5">
		<div class="container">
			<h4 class="text-capitalize head-title pb-2 px-2"><i class="text-primary fa fa-play-circle mr-2"></i>Music Today</h4>
			<div class="px-2">
				<div class="card">
					<div class="card-body">
						<audio id="player" class="js-player" controls>
							<source src="<?= base_url(); ?>assets/music/01.mp3" type="audio/mp3" />
						</audio>
						<div class="card-author no-border align-items-center mt-3">
							<img src="<?= base_url(); ?>assets/img/tentor/cabbage.png" class="img-fluid img-profile mr-3" alt="">
							<div class="info-profile">
								<p class="title pb-0 pl-0">All I Want (Cover)</p>
								<div class="d-flex align-items-center mb-0">
									<p class="text-default mb-0 mr-2">Alexander Porat</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?= $this->load->view('layouts/footer', null, true); ?>