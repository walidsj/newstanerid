<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>
<?= $this->load->view('components/sidenav', null, true); ?>

<div class="content-box content-other">
	<!-- Timehelper -->
	<div class=" content-box content-home">
		<div class="container">
			<section class="content-blank pt-0">
				<div class="container">
					<div class="row">
						<?= form_open(current_url());?>
							<div class="col-12">
								<div class="form-group mt-5">
									<img width="100%" class="img" src="<?= base_url($polling->epolling_item_image); ?>">
								</div>
								<div class="form-group">
									<span class="text-muted"><?= $polling->epolling_item_deskripsi;?></span>
</div>
								<div class="form-group mb-3">
									<a href="<?= base_url($polling->epolling_item_pdf);?>"><span class="text-primary"><i class="fa fa-download mr-2"></i>Lihat Abstraksi (PDF)</span></a>
</div>
								<div class="form-group">
									<?= $this->recaptcha->render();?>
									<?= (!empty(form_error('g-recaptcha-response'))) ? form_error('g-recaptcha-response', '<small class="text-danger">', '</small>') : null; ?>
								</div>
								<div class="form-group">
									<button class="btn btn-block btn-primary" type="submit">Vote</button>
								</div>
							</div>
							
							<?= form_close();?>
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