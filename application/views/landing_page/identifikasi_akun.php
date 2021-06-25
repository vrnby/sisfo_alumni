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

        <section class="carinim-section">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() ?>assets/img/img-login.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="text-center">
                            <h2 class="fs-primary color-primary mb-5"><span class="text-bold">Reset</span> Password Anda</h2>
                        </div>

                        <form action="<?= base_url('reset') ?>" method="post" class="col-md-8">
                            <h6 class="fs-secondary text-grey-dark mb-3">Bagaimana Anda ingin mendapatkan link untuk mereset password Anda?</h6>
                            <h6 class="fs-secondary text-grey-dark mb-3">Kirim link reset password melalui<br />
                                <span class="p fs-secondary">
                                    <?= $email['mail']; ?>
                                </span>
								<input type="email" name="email" value="<?= $email['email'] ?>" hidden>
                            </h6>
                            <a href="<?php echo base_url() ?>kontakkami" class="fs-secondary color-primary">Tidak punya akses lagi?</a>

                            <div class="text-center">
                                <a href="<?php echo base_url() ?>carinim" class="btn button-secondary-custom fs-secondary mt-5 ps-4 pe-4" id="login" name="login">Batalkan</a>
                                <button type="submit" class="btn button-primary-custom fs-secondary mt-5 ms-3 ps-4 pe-4" id="login" name="login">Kirim</button>
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
