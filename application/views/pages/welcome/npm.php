<?= $this->load->view('layouts/header', null, true); ?>

<?= $this->load->view('components/topnav', null, true); ?>

<div class="content-box content-other">
    <!-- Timehelper -->
    <div class="content-box content-home">
        <div class="jumbotron mb-0">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12">
                        <h4 class="text-default font-700 m-0">Register NPM</h4>
                        <?php if (!empty($this->session->flasdata('alert'))) : ?>
                            <div class="alert alert-<?= $this->session->flashdata('alert')['type']; ?>" role="alert">
                                <?= $this->session->flashdata('alert')['message']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-blank">
            <div class="container pb-5 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?= form_open('registrasi/npm'); ?>
                            <div class="form-group">
                                <label class="text-default font-600 w-100">Masukkan NPM</label>
                                <input id="npm" name="npm" type="number" maxlength="10" class="form-control" placeholder="XXXXXXXXXX" value="<?= set_value('npm'); ?>">
                                <?= (!empty(form_error('npm'))) ? form_error('npm', '<small class="text-danger">', '</small>') : null; ?>
                            </div>
                            <div class="form-group">
                                <small class="text-muted">NPM digunakan untuk identifikasi data mahasiswa sesuai dengan <a class="text-primary" href="https://data.staner.id">data.staner.id</a>.</small>
                            </div>
                            <div class="form-group">
                                <?= $this->recaptcha->render(); ?>
                                <?= (!empty(form_error('g-recaptcha-response'))) ? form_error('g-recaptcha-response', '<small class="text-danger">', '</small>') : null; ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Konfirmasi</button>
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