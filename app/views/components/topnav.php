<nav class="navbar navbar-expand-lg desktop-navigation fixed-top other-navbar shadow-sm">
    <div class="container">
        <div class="navbar-header <?= (!empty($this->user)) ? '' : 'mx-auto'; ?>">
            <a class="navbar-brand mx-auto pt-0 mr-0">
                <img src="<?= base_url(); ?>public/img/logo.webp" alt="<?= site_url(); ?>" class="img-fluid logo-other">
            </a>
        </div>

        <!-- <div class="d-block d-md-none"> -->
        <?php if (!empty($this->user)) : ?>
            <div class="d-block">
                <div class="d-flex align-items-center">
                    <div class="ml-3 mr-1">
                        <a class="p-relative" href="javascript:void(0)" id="ShowMenuMobile" role="button">
                            <?php if (!empty($this->user)) : ?>
                                <img class="rounded-circle" src="<?= $this->user->image_user; ?>" height="24" alt="<?= site_url(); ?>" class="img">
                            <?php else : ?>
                                <img class="rounded-circle" src="<?= base_url(); ?>public/img/icon/user.svg" height="24" alt="<?= site_url(); ?>" class="img">
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</nav>