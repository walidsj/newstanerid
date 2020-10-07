<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>
<?= $this->load->view('components/bottomnav', null, true); ?>
<?= $this->load->view('components/sidenav', null, true); ?>

<div class="content-box content-other">
	<!-- Timehelper -->
	<div class="content-box content-home">
		<section class="content-blank bg-gray py-5 mb-5">
			<div class="container">
				<h4 class="text-capitalize head-title">Event terbaru</h4>
				<?php if (!empty($this->session->flashdata('alert'))) : ?>
					<div class="alert alert-<?= $this->session->flashdata('alert')['type']; ?>" role="alert">
						<?= $this->session->flashdata('alert')['message']; ?>
					</div>
				<?php endif; ?>
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


	</div>

</div>

<?= $this->load->view('layouts/footer', null, true); ?>