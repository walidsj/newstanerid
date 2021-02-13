<nav class="navbar navbar-expand-lg desktop-navigation other-navbar p-0 d-block fixed-bottom">
    <div class="container">
        <ul class="menu-mobile-bottom">
            <li class="img-nav <?= ($this->uri->segment(1) == '') ? 'active' : ''; ?>">
                <a href="<?= site_url(); ?>">
                    <div>
                        <img src="<?= base_url(); ?>public/img/icon/home.svg" alt="Beranda" class="img" height="24">
                    </div>
                    <small class="text-dark fs-10 mt-0">Beranda</small>
                </a>
            </li>

            <li class="img-nav <?= ($this->uri->segment(1) == 'event') ? 'active' : ''; ?>">
                <a href="<?= site_url(); ?>event">
                    <div>
                        <img src="<?= base_url(); ?>public/img/icon/note.svg" alt="Event" class="img" height="24">
                    </div>
                    <small class="text-dark fs-10 mt-0">Event</small>
                </a>
            </li>

            <li class="img-nav <?= ($this->uri->segment(1) == 'berita') ? 'active' : ''; ?>">
                <a href="<?= site_url(); ?>berita">
                    <div>
                        <img src="<?= base_url(); ?>public/img/icon/menu.svg" alt="Akun" class="img" height="24">
                    </div>
                    <small class="text-dark fs-10 mt-0">Berita</small>
                </a>
            </li>

            <li class="img-nav <?= ($this->uri->segment(1) == 'akun') ? 'active' : ''; ?>">
                <a href="javascript:void(0)" id="ShowMenuMobile2">
                    <div>
                        <img src="<?= base_url(); ?>public/img/icon/user.svg" alt="Akun" class="img" height="24">
                    </div>
                    <small class="text-dark fs-10 mt-0">Akun</small>
                </a>
            </li>
        </ul>
    </div>
</nav>