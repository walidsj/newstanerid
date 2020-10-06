<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>

<div class="content-box content-other">
    <!-- Timehelper -->
    <div class="content-box content-home">
        <div class="jumbotron mb-0">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12">
                        <h4 class="text-default font-700 m-0">Lengkapi Data</h4>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-blank">
            <div class="container pb-5 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?= form_open('registrasi/lengkapi'); ?>
                            <h5>Data Mahasiswa</h5>
                            <hr>
                            <div class="form-group">
								<label class="text-default font-600 w-100">Nama Lengkap</label>
								<input type="text" class="form-control" value="<?= $user->nama; ?>" disabled>
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
                            <h5 class="pt-3">Data Akun</h5>
                            <hr>
                            <div class="form-group">
								<label class="text-default font-600 w-100">Alamat Email</label>
								<input type="text" class="form-control" value="<?= $akun->email; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="text-default font-600 w-100">No. WhatsApp</label>
                                <input id="whatsapp" name="whatsapp" type="number" maxlength="16" class="form-control" placeholder="08XXXXXXXXX" value="<?= set_value('whatsapp'); ?>">
                                <?= (!empty(form_error('whatsapp'))) ? form_error('whatsapp', '<small class="text-danger">', '</small>') : null; ?>
                            </div>
                            <div class="form-group">
                                <label class="text-default font-600 w-100">ID Line</label>
                                <input id="line" name="line" type="text" maxlength="32" class="form-control" placeholder="fulanbinfulan" value="<?= set_value('line'); ?>">
                                <?= (!empty(form_error('line'))) ? form_error('line', '<small class="text-danger">', '</small>') : null; ?>
                            </div>
                            <div class="form-group">
                                <label class="text-default font-600 w-100">Foto Profil</label>
                                <img class="img" style="border-radius:50%" height="64" src="<?= $akun->picture;?>" alt="<?= $user->nama;?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-save mr-2"></i>Simpan</button>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

<?= $this->load->view('layouts/footer', null, true); ?>