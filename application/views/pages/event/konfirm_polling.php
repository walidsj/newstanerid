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
							<div class="col-12 col-sm-6 col-md-4 col-lg-3">
								<div class="form-group">
										<img width="100%" class="img" src="<?= base_url($polling->epolling_item_image); ?>">
								</div>
							</div>
							<?= $this->recaptcha->render();?>
							<button class="btn btn-primary" type="submit">Vote</button>
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