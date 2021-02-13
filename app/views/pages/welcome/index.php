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
						</a>
					</div>
				<?php
					$i++;
				endforeach; ?>
			</div>
		</div>
	</header>
	<section class="content-blank bg-gray pb-2 pt-4">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card-body px-2 pt-0">
						<?php if (!empty($this->session->flashdata('alert'))) : ?>
							<div class="alert alert-<?= $this->session->flashdata('alert')['type']; ?>" role="alert">
								<?= $this->session->flashdata('alert')['message']; ?>
							</div>
						<?php endif; ?>
						<div class="card-author no-border align-items-center p-0">
							<img src="<?= base_url(); ?>public/img/icon/send.svg" style="padding: 3px; border-radius: 0; border: 0 !important" class="img-fluid img-profile mr-3" alt="Update">
							<div class="info-profile">
								<?php
								$jam = date('H:i');

								if ($jam > '05:30' && $jam < '10:00') {
									$pertanyaan = 'Selamat pagi.';
								} elseif ($jam >= '10:00' && $jam < '15:00') {
									$pertanyaan = 'Selamat siang.';
								} elseif ($jam < '18:00') {
									$pertanyaan = 'Selamat sore.';
								} else {
									$pertanyaan = 'Selamat malam.';
								}


								if ($this->user) {
									$nama = explode(' ', str_replace('.', '', $this->user->nama))[0];
								} else {
									$nama = 'Staner';
								}
								?>
								<p class="title pb-0 pl-0">Halo, <?= $nama; ?>!</p>
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
												<img class="mx-auto mb-2" src="<?= base_url(); ?>public/img/doodle/ReadingDoodle.png" class="img" height="76" alt="Peraturan Kampus" />
												<div class="mx-auto">
													<p class="text-default mb-0">Peraturan Kampus</p>
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
												<img class="mx-auto mb-2" src="<?= base_url(); ?>public/img/doodle/UnboxingDoodle.png" class="img" height="76" alt="Pemendek Tautan" />
												<div class="mx-auto">
													<p class="text-default mb-0">Pemendek Tautan</p>
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
			<div class="row mt-2">
				<div class="col">
					<h5 class="head-title px-2">Info Terbaru</h5>
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
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-12 ml-auto mr-auto">
					<div class="container">
						<div class="row">
							<div class="col-6 mb-3 px-2">
								<a href="<?= site_url(); ?>persuratan">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap text-center">
												<img class="mx-auto mb-2" src="<?= base_url(); ?>public/img/doodle/SprintingDoodle.png" class="img" height="76" alt="Layanan Persuratan" />
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
												<img class="mx-auto mb-2" src="<?= base_url(); ?>public/img/doodle/LovingDoodle.png" class="img" height="76" alt="Layanan Advokasi" />
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
												<img class="mx-auto mb-2" src="<?= base_url(); ?>public/img/doodle/SitReadingDoodle.png" class="img" height="76" alt="Akses Perizinan" />
												<div class="mx-auto">
													<p class="text-default mb-0">Akses Perizinan</p>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>

							<div class="col-6 mb-3 px-2">
								<a href="https://wbs.staner.id">
									<div class="card">
										<div class="card-body">
											<div class="d-flex flex-wrap text-center">
												<img class="mx-auto mb-2" src="<?= base_url(); ?>public/img/doodle/CoffeeDoodle.png" class="img" height="76" alt="Portal Pengaduan" />
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
			<div class="row mt-2">
				<div class="col">
					<h5 class="head-title px-2">Acara Terbaru</h5>
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
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?= $this->load->view('layouts/footer', null, true); ?>