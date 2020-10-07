<nav class="navbar navbar-expand-lg desktop-navigation other-navbar fixed-top">
    <div class="container">
        <div class="navbar-header mx-auto">
            <a class="navbar-brand pt-0 mr-0" href="<?= site_url(); ?>">
                <img src="<?= base_url(); ?>assets/img/logo-1.png" alt="<?= site_url(); ?>" class="img-fluid logo-other">
            </a>
        </div>

        <div class="d-block d-md-none">
            <div class="d-flex align-items-center">
                <div class="ml-3 mr-1">
                    <a class="dropdown-toggle dashboard-dropdown p-relative" href="javascript:void(0)" id="ShowMenuMobile" role="button">
                        <img src="<?= base_url(); ?>assets/img/nav/tangerine.png" height="24" alt="<?= site_url(); ?>" class="img">
                    </a>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarDesktop">
            <div class="navbar-nav mr-auto mt-2 mt-lg-0">
            </div>

            <ul class="navbar-nav nav-line">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url(); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url(); ?>event">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url(); ?>berita">Berita</a>
                </li>
                <?php if ($user) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url(); ?>akun">Akun</a>
                    </li>
                    <li class="nav-item btn-nav">
                        <div class="path-bg-btn">
                            <a href="<?= site_url(); ?>registrasi/logout" class="btn btn-danger btn-path-wave btn-md">Logout</a>
                        </div>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url(); ?>tentang">Tentang</a>
                    </li>
                    <li class="nav-item btn-nav">
                        <div class="path-bg-btn">
                            <a href="<?= site_url(); ?>registrasi" class="btn btn-danger btn-path-wave btn-md">Masuk</a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>