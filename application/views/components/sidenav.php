<div id="mySidenav" class="sidenav">
    <div class="container-fluid mr-1 ml-1">
        <div class="closebtn text-gold" id="CloseMenuMobile">
            <i class="fa fa-times text-dark" aria-hidden="true"></i>
        </div>
        <div class="mt-3 mb-3">
            <img src="<?= base_url(); ?>assets/img/logo-1.png" alt="<?= site_url(); ?>" class="img-fluid logo-other" width="90">
        </div>
    </div>

    <div class="container-fluid mr-1 ml-1">
        <div id="menu-mobile" class="menu-slinky">
            <ul class="navbar-nav-mobile mt-3 mb-3">
                <?php if ($user) : ?>
                    <div class="card-body p-3">
                        <div class="card-author no-border align-items-center mt-2 mb-2">
                            <img src="<?= base_url(); ?>assets/img/tentor/cabbage.png" class="img-fluid img-profile" alt="">
                            <div class="info-profile">
                                <p class="title pb-0 pl-0"><?= $user->nama; ?></p>
                                <div class="d-flex align-items-center mb-0">
                                    <p class="text-default mb-0 mr-2"><?= $user->user_email; ?></p>
                                </div>
                            </div>
                        </div>
                        <p class="text-default"></p>
                    </div>
                <?php endif; ?>
                <div class="d-flex-center">
                    <a href="<?= site_url(); ?>registrasi" class="btn btn-default rad-80 mini-shadow btn-lg w-100">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="<?= base_url(); ?>assets/img/icon/google.png" class="img-fluid mr-3" width="18" alt="">
                            <p class="text-default font-600 mb-0">Login with Google</p>
                        </div>
                    </a>
                </div>
            </ul>
        </div>
    </div>
</div>