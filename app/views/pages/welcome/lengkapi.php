<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>

<div class="content-box content-other">
    <!-- Timehelper -->
    <div class="content-box content-home">
        <div class="jumbotron p-3 mb-0">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12">
                        <h4 class="text-default font-700 m-0">Lengkapi Data</h4>
                    </div>
                </div>
            </div>
        </div>
        <section class="pt-4">
            <div class="container pb-5 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?= form_open('registrasi/lengkapi'); ?>
                            <h5>Data Mahasiswa</h5>
                            <hr>
                            <div class="form-group">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Nama</th>
                                        <td><?= $mahasiswa->nama_mahasiswa; ?></td>
                                    </tr>
                                    <tr>
                                        <th>NPM</th>
                                        <td><?= $mahasiswa->npm_mahasiswa; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jurusan</th>
                                        <td><?= $mahasiswa->nama_jurusan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Prodi</th>
                                        <td><?= $mahasiswa->nama_prodi; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tahun Angkatan</th>
                                        <td><?= $mahasiswa->angkatan_mahasiswa; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td><?= $mahasiswa->angka_semester . '-' . $mahasiswa->kelas_mahasiswa; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <h5>Data Akun</h5>
                            <hr>
                            <div class="form-group">
                                <label class="text-default font-600 w-100">Alamat Email</label>
                                <input type="text" class="form-control" value="<?= $mahasiswa->email_mahasiswa; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="text-default font-600 w-100">No. WhatsApp</label>
                                <input id="whatsapp" name="whatsapp" type="number" maxlength="16" class="form-control" placeholder="085000000000" value="<?= set_value('whatsapp'); ?>">
                                <?= (!empty(form_error('whatsapp'))) ? form_error('whatsapp', '<small class="text-danger">', '</small>') : null; ?>
                            </div>
                            <div class="form-group">
                                <label class="text-default font-600 w-100">Foto Profil</label>
                                <img class="img" style="border-radius:50%" height="64" src="<?= $akun->picture; ?>" alt="<?= $mahasiswa->nama_mahasiswa; ?>">
                            </div>
                            <div class="form-group">
                                <?= $this->recaptcha->render(); ?>
                                <?= (!empty(form_error('g-recaptcha-response'))) ? form_error('g-recaptcha-response', '<small class="text-danger">', '</small>') : null; ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-save mr-2"></i>Simpan</button>
                            </div>
                            <?= form_close(); ?>
                            <div class="form-group">
                                <a href="<?= site_url(); ?>registrasi/logout" class="btn btn-block btn-secondary">Batalkan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

<?= $this->load->view('layouts/footer', null, true); ?>