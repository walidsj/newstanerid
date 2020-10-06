<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>
<?= $this->load->view('components/sidenav', null, true); ?>

<div class="content-box content-other">
	<!-- Timehelper -->
	<div class=" content-box content-home" style="background-image: url(<?= base_url(); ?>assets/img/event/polling/bg-01.png); background-repeat: no-repeat; background-size: 100% auto; background-color: #e5160b;">
		<div class="container pb-5">
			<section class="content-blank pt-5">
				<div class="container">
					<h4 class="text-capitalize head-title font-800 text-white mt-5 px-0">Voting Terfavorit</h4>
					<p class="font-300 text-white">BigB Plan Competition adalah event yang diselenggarakan oleh Kementerian Ekraf.</p>
				</div>
			</section>
			<section class="content-blank pt-0">
				<div class="container">
					<div class="row">
						<?php foreach ($polling_item as $pi) : ?>
							<div class="col-12">
								<div class="form-group">
									<img width="100%" class="img" src="<?= base_url($pi->epolling_item_image); ?>">
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
		</div>
	</div>

	<?= $this->load->view('layouts/footer', null, true); ?>