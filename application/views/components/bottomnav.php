<nav class="navbar navbar-expand-lg desktop-navigation other-navbar p-0 d-block fixed-bottom">
    <div class="container">
        <ul class="menu-mobile-bottom">
            <li class="img-nav <?= ($this->uri->segment(1) == '') ? 'active' : ''; ?>">
                <a class="text-tertiary" href="<?= site_url(); ?>">
                    <div>
                        <img src="https://img.icons8.com/cute-clipart/64/000000/home.png" alt="Beranda" class="img" height="48">
                    </div>
                </a>
            </li>

            <li class="img-nav <?= ($this->uri->segment(1) == 'event') ? 'active' : ''; ?>">
                <a class="text-dark" href="<?= site_url(); ?>event">
                    <div>
                        <img src="https://img.icons8.com/cute-clipart/64/000000/calendar.png" alt="Beranda" class="img" height="48">
                    </div>
                </a>
            </li>

            <li class="img-nav <?= ($this->uri->segment(1) == 'berita') ? 'active' : ''; ?>">
                <a class="text-dark" href="<?= site_url(); ?>berita">
                    <div>
                        <img src="https://img.icons8.com/cute-clipart/64/000000/news.png" alt="Beranda" class="img" height="48">
                    </div>
                </a>
            </li>

            <li class="img-nav <?= ($this->uri->segment(1) == 'akun') ? 'active' : ''; ?>">
                <a class="text-dark" href="javascript:void(0)" id="ShowMenuMobile2">
                    <div>
                        <img src="https://img.icons8.com/cute-clipart/64/000000/jake.png" alt="Beranda" class="img" height="48">
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>