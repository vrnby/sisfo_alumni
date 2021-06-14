<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/meta_landing_page') ?>
</head>

<body class="custom">
    <!-- Navbar -->
    <?php $this->load->view('template/navbar_landing_page') ?>

    <section id="hero2" class="d-flex align-items-center">


        <div class="container">
            <div class="col-6 col-xs-12">
            </div>
        </div>
    </section>

    <main id="main">

        <section id="why-us" class="why-us"></section>

        <section id="tracerstudy" class="detailtracer tracerstudy">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 ">
                        <img src="<?php echo base_url() ?>assets/img/underline2.png" class="img-fluid img-line img-col-md" style="right: 79%;width: 16rem;top:18.5%">
                        <h2 class="text-bold">TRACER STUDY</h2>
                        <p class="fs-secondary text-grey-light subtitle">Dalam rangka melaksanakan pengukuran dan peningkatan kualitas Politeknik Negeri Malang sebagai Perguruan Tinggi unggulan di lingkungan Kementerian Pendidikan dan Kebudayaan, dengan hormat kami sampaikan agar Alumni Polinema dapat <span class="text-bold">mengisikan penelusuran jejak alumni (Tracer Study)</span> dengan cara sebagai berikut:</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-12 d-flex align-items-stretch mt-4">
                        <div class="card-box">
                            <div class="icon"><i class="fas fa-dna"></i></div>
                            <img src="<?php echo base_url() ?>assets/img/step1.png" class="img-icon">
                            <h6 class="fs-secondary">Masuk ke sistem informasi alumni menggunakan nim dan password alumni (password sama dengan SIAKAD)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 d-flex align-items-stretch mt-4">
                        <div class="card-box">
                            <div class="icon"><i class="fas fa-dna"></i></div>
                            <img src="<?php echo base_url() ?>assets/img/step2.png" class="img-icon">
                            <h6 class="fs-secondary">Memperbarui data pribadi (alamat rumah dan nomor telepon)</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 d-flex align-items-stretch mt-4">
                        <div class="card-box">
                            <div class="icon"><i class="fas fa-dna"></i></div>
                            <img src="<?php echo base_url() ?>assets/img/step3.png" class="img-icon">
                            <h6 class="fs-secondary text-center">Menambahkan riwayat pekerjaan </h6>
                        </div>
                    </div>
                </div>



            </div>

            </div>
        </section>
    </main>


</body>
<footer>
    <?php $this->load->view('template/script_landing_page') ?>
</footer>

</html>