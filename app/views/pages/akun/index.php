<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>
<?= $this->load->view('components/bottomnav', null, true); ?>
<?= $this->load->view('components/sidenav', null, true); ?>

<div class="content-box content-other">
	<!-- Timehelper -->
	<div class="content-box content-home">
		<div class="jumbotron mb-0" style="background: url(<?= base_url(); ?>public/img/doodle/badges.jpeg)">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-12">
						<h4 class="text-default font-700 m-0"><?= $user->nama; ?></h4>
						<p class="font-300 m-0"><?= $user->user_email; ?></p>
						<?php if (!empty($this->session->flashdata('alert'))) : ?>
							<div class="alert alert-<?= $this->session->flashdata('alert')['type']; ?>" role="alert">
								<?= $this->session->flashdata('alert')['message']; ?>
							</div>
						<?php endif; ?>
						<?php
						$image = base_url('assets/img/tentor/cabbage.png');

						if (!empty($user->user_image)) {
							$image = $user->user_image;
						}
						?>
						<img style="border-radius:50%;" height="64" src="<?= $image; ?>" class="img-profile mt-3" alt="">
					</div>
				</div>
			</div>
		</div>
		<section class="content-blank">
			<div class="container pb-5 mb-5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="text-default font-600 w-100">NPM</label>
								<input type="text" class="form-control" value="<?= $user->npm; ?>" disabled>
							</div>
							<div class="form-group">
								<label class="text-default font-600 w-100">Jurusan</label>
								<input type="text" class="form-control" value="<?= $user->jurusan; ?>" disabled>
							</div>
							<div class="form-group">
								<label class="text-default font-600 w-100">Program Studi</label>
								<input type="text" class="form-control" value="<?= $user->prodi; ?>" disabled>
							</div>
							<div class="form-group">
								<label class="text-default font-600 w-100">Tahun Angkatan</label>
								<input type="text" class="form-control" value="<?= $user->angkatan; ?>" disabled>
							</div>
							<div class="form-group">
								<label class="text-default font-600 w-100">Kelas</label>
								<input type="text" class="form-control" value="<?= $user->kelas; ?>" disabled>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

</div>

<?= $this->load->view('layouts/footer', null, true); ?>