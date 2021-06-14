<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Sistem Informasi Alumni</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <?php if ($this->session->has_userdata('roles') && $this->session->userdata('roles') == 'admin') { ?>
                <a class="nav-link" href="<?= base_url() ?>akun/logout"><span class="mdi mdi-logout color-warning-light" aria-hidden="true">Logout</span></a>
            <?php } else { ?>
                <a class="nav-link" href="<?= base_url() ?>akun/alumni_logout"><span class="mdi mdi-logout color-warning-light" aria-hidden="true">Logout</span></a>
            <?php } ?>
        </li>
    </ul>
</nav>