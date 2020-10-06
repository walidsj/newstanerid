<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>
<?= $this->load->view('components/bottomnav', null, true); ?>
<?= $this->load->view('components/sidenav', null, true); ?>

<?php
if ($user) {
	$nama = explode(' ', str_replace('.', '', $user->nama))[0];
} else {
	$nama = 'Staner';
}
?>

<div class="content-box content-other">
	<!-- Timehelper -->
	<div class="content-box content-home">
		<div class="jumbotron mb-0">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-12">
						<h4 class="text-default font-700">Halo, <?= $nama; ?>!</h4>
						<p class="font-300 m-0">Profil Mahasiswa</p>
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
								<label class="text-default font-600 w-100">Nama Lengkap</label>
								<input type="text" class="form-control" value="<?= $user->nama; ?>" disabled>
							</div>
							<div class="form-group">
								<label class="text-default font-600 w-100">Alamat Email</label>
								<input type="text" class="form-control" value="<?= $user->user_email; ?>" disabled>
							</div>
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