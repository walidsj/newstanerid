<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>
<?= $this->load->view('components/bottomnav', null, true); ?>
<?= $this->load->view('components/sidenav', null, true); ?>

<div class="content-box content-other">
	<!-- Timehelper -->
	<div class="content-box content-home">
		<div class="jumbotron mb-0 pb-0 text-center bg-white">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-12">
						<?php if (!empty($this->session->flashdata('alert'))) : ?>
							<div class="alert alert-<?= $this->session->flashdata('alert')['type']; ?>" role="alert">
								<?= $this->session->flashdata('alert')['message']; ?>
							</div>
						<?php endif; ?>
						<?php
						$image = base_url('assets/img/tentor/cabbage.png');

						if (!empty($this->user->image_user)) {
							$image = $this->user->image_user;
						}
						?>
						<img style="border-radius:50%;" height="64" src="<?= $image; ?>" class="img-profile mb-3" alt="">
						<h4 class="text-default font-800 m-0"><?= $this->user->nama_mahasiswa; ?></h4>
						<p class="font-300"><?= $this->user->email_user; ?></p>
					</div>
				</div>
			</div>
		</div>
		<section class="content-blank pt-3">
			<div class="container">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<table class="table table-bordered table-striped">
									<tr>
										<th>NPM</th>
										<td><?= $this->user->npm_mahasiswa; ?></td>
									</tr>
									<tr>
										<th>Jurusan</th>
										<td><?= $this->user->nama_jurusan; ?></td>
									</tr>
									<tr>
										<th>Prodi</th>
										<td><?= $this->user->nama_prodi; ?></td>
									</tr>
									<tr>
										<th>Tahun Angkatan</th>
										<td><?= $this->user->angkatan_mahasiswa; ?></td>
									</tr>
									<tr>
										<th>Kelas</th>
										<td><?= $this->user->angka_semester . '-' . $this->user->kelas_mahasiswa; ?></td>
									</tr>
									<tr>
										<th>No. WhatsApp</th>
										<td><?= $this->user->whatsapp_user; ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

</div>

<?= $this->load->view('layouts/footer', null, true); ?>