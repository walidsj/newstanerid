<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>
<?= $this->load->view('components/sidenav', null, true); ?>

<div class="content-box content-other">
	<!-- Timehelper -->
	<div class=" content-box content-home" style="background-image: url(<?= base_url(); ?>assets/img/event/polling/bg-01.png); background-repeat: no-repeat; background-size: 100% auto; background-color: #e5160b;">
		<div class="container">
			<section class="content-blank pt-5">
				<div class="container">
					<h4 class="text-capitalize head-title font-800 text-white mt-5 px-0 pt-md-5">Voting Terfavorit</h4>
					<p class="font-300 text-white"><strong>Petunjuk:</strong><br>Pastikan kamu sudah login dan klik poster untuk voting.</p>
				</div>
			</section>
			<section class="content-blank pt-0">
				<div class="container">
					<div class="row">
						<?php foreach ($polling_item as $pi) : ?>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<a href="<?= site_url(); ?>event/polling-add/<?= $polling->epolling_id; ?>/<?= $pi->epolling_item_id; ?>">
										<img width="100%" class="img" src="<?= base_url($pi->epolling_item_image); ?>">
									</a>
									<h6 class="text-center text-white font-600">Vote: <?= $this->db->get_where('event_polling_results', ['epolling_item_id' => $pi->epolling_item_id])->num_rows(); ?></h6>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
		</div>
		<footer class="footer-section">
			<div class="container footer-left-xs">
				<div class="row justify-content-between">
					<div class="col-12 col-md-3">
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
	</div>

	<?= $this->load->view('layouts/footer', null, true); ?>