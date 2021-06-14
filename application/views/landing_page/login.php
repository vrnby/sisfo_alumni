<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/meta_landing_page') ?>
</head>
<style>
    body {
        height: 100vh;
    }
</style>

<body>
    <!-- Navbar -->
    <?php $this->load->view('template/navbar_landing_page') ?>
    <!-- Header -->
    <section id="hero2" class="d-flex align-items-center">


        <div class="container">
            <div class="col-6 col-xs-12">
            </div>
        </div>
    </section>
    <main id="main">

        <section id="why-us" class="why-us"></section>

        <section class="login-section">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() ?>assets/img/img-login.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="text-center">
                            <h2 class="fs-primary color-primary mb-5"><span class="text-bold">Masuk</span> ke Sistem informasi Alumni</h2>
                        </div>
                        <?php if (isset($this->session->status_login) && $this->session->status_login == "username_not_found") { ?>
                            <?php unset($_SESSION['status_login']); ?>
                            <div class="alert alert-danger">Username tidak ditemukan!</div>
                        <?php } ?>
                        <?php if (isset($this->session->status_login) && $this->session->status_login == "password_not_found") { ?>
                            <?php unset($_SESSION['status_login']); ?>
                            <div class="alert alert-danger">Password tidak cocok!</div>
                        <?php } ?>

                        <form action="<?= base_url() ?>akun/alumni_cek" method="post" class="col-md-8">
                            <div class="form-floating mb-3">
                                <input type="text" id="username" name="username" class="fs-secondary text-grey-light form-control" placeholder="Username" required>
                                <label for="username" class="fs-secondary text-grey-dark">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" id="password" name="password" class="fs-secondary text-grey-light form-control" placeholder="Password" required>
                                <label for="password" class="fs-secondary text-grey-dark">Password</label>
                            </div>
                            <a href="<?= base_url() ?>carinim"><span class="fs-secondary text-grey-light float-end">Lupa Password?</span></a>
                            <div class="text-center">
                                <button type="submit" class="btn button-primary-custom fs-secondary mt-5 ps-4 pe-4" id="login" name="login">Sign In</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </section>
</body>
<footer>
    <?php $this->load->view('template/script_landing_page') ?>
</footer>

</html>