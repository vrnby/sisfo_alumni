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

        <section id="gallery" class="section-bg-white gallery listgallery">
            <div class="container">

                <div class="section-title">
                    <h2>GALERI</h2>
                    <p>Momentum berharga di akhir masa study di Politeknik Negeri Malang</p>
                </div>
                <div class="row">
                    <div class="gallery-items">
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-1.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-1.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-2.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-2.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-1.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-1.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-2.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-2.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-1.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-1.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-2.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-2.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item">
                                <a href="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" class="galelry-lightbox">
                                    <img src="<?php echo base_url() ?>assets/img/gallery/gallery-3.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="pagination">
                        <div class="prev">Prev</div>
                        <div class="page">Page <span class="page-num"></span></div>
                        <div class="next">Next</div>
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