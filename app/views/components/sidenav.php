<div id="mySidenav" class="sidenav">
    <div class="col-md-6 mx-auto">
        <div class="closebtn text-gold" id="CloseMenuMobile">
            <i class="fa fa-times text-dark" aria-hidden="true"></i>
        </div>
        <div class="mt-3 mb-3">
            <img src="<?= base_url(); ?>assets/img/logo-1.png" alt="<?= site_url(); ?>" class="img-fluid logo-other" width="90">
        </div>
    </div>

    <div class="col-md-6 mx-auto">
        <div id="menu-mobile" class="menu-slinky">
            <ul class="navbar-nav-mobile mt-3 mb-3">
                <?php if ($this->user) : ?>
                    <div class="card-body p-3">
                        <div class="card-author no-border align-items-center mt-2 mb-2">
                            <?php
                            $image = base_url('assets/img/tentor/cabbage.png');

                            if (!empty($this->user->image_user)) {
                                $image = $this->user->image_user;
                            }
                            ?>
                            <img src="<?= $image; ?>" class="img-fluid img-profile" alt="">
                            <div class="info-profile">
                                <p class="title py-0 pl-0"><?= $this->user->nama_mahasiswa; ?></p>
                                <div class="d-flex align-items-center mb-0">
                                    <p class="text-default mb-0 mr-2"><?= $this->user->email_user; ?></p>
                                </div>
                            </div>
                        </div>
                        <p class="text-default"></p>
                    </div>
                    <div class="d-flex-center">
                        <a href="<?= site_url(); ?>akun" class="btn btn-primary mx-1">Lihat Profil</a>
                        <a href="<?= site_url(); ?>registrasi/logout" class="btn btn-secondary mx-1">Logout</a>
                    </div>
                <?php else : ?>
                    <div class="d-flex-center">
                        <a href="<?= site_url(); ?>registrasi" class="btn btn-default rad-80 mini-shadow btn-lg w-100">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="<?= base_url(); ?>assets/img/icon/google.png" class="img-fluid mr-3" width="18" alt="">
                                <p class="text-default font-600 mb-0">Masuk dengan Email Kampus</p>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>