<nav class="navbar navbar-expand-lg desktop-navigation other-navbar p-0 d-block d-md-none fixed-bottom">
    <div class="container">
        <ul class="menu-mobile-bottom">
            <li class="<?= ($this->uri->segment(1) == '') ? 'active' : ''; ?>">
                <a class="text-tertiary" href="<?= site_url(); ?>">
                    <div>
                        <img src="<?= base_url(); ?>assets/img/nav/unicorn.png" alt="Beranda" class="img" height="32">
                    </div>

                    <p class="lh-12 mb-2"><span class="fs-10 font-400">Beranda</span></p>
                </a>
            </li>

            <li class="<?= ($this->uri->segment(1) == 'event') ? 'active' : ''; ?>">
                <a class="text-dark" href="<?= site_url(); ?>event">
                    <div>
                        <img src="<?= base_url(); ?>assets/img/nav/unicorn2.png" alt="Beranda" class="img" height="32">
                    </div>

                    <p class="lh-12 mb-2"><span class="fs-10 font-400">Event</span></p>
                </a>
            </li>

            <li class="<?= ($this->uri->segment(1) == 'berita') ? 'active' : ''; ?>">
                <a class="text-dark" href="<?= site_url(); ?>berita">
                    <div>
                        <img src="<?= base_url(); ?>assets/img/nav/unicorn3.png" alt="Beranda" class="img" height="32">
                    </div>

                    <p class="lh-12 mb-2"><span class="fs-10 font-400">Berita</span></p>
                </a>
            </li>

            <li class="<?= ($this->uri->segment(1) == 'akun') ? 'active' : ''; ?>">
                <a class="text-dark" href="javascript:void(0)" id="ShowMenuMobile2">
                    <div>
                        <img src="<?= base_url(); ?>assets/img/nav/unicorn4.png" alt="Beranda" class="img" height="32">
                    </div>

                    <p class="lh-12 mb-2"><span class="fs-10 font-400">Akun</span></p>
                </a>
            </li>
        </ul>
    </div>
</nav>