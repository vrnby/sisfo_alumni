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

        <section id="listpengumuman" class="listpengumuman">
            <div class="container">

                <div class="row">
                    <img src="<?php echo base_url() ?>assets/img/underline2.png" class="img-fluid img-line img-col-md" style="right: 76%;width: 16rem;top:34%">
                    <div class="col-lg-12 col-md-12 col-xs-12 mb-5">
                        <h2 class="fs-primary text-bold">PENGUMUMAN</h2>
                        <p class="fs-secondary text-grey-light subtitle">Terus perbarui informasi terkini melalui website alumni</p>
                    </div>
                    <!-- show data -->
                    <?php if ($pengumuman > 0) { ?>
                        <?php foreach ($pengumuman as $row) { ?>
                            <div class="article-loop">
                                <div class="card mb-3 ">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <?php if ($row->foto != '') { ?>
                                                <img src="<?= base_url() ?>assets/img/posting/<?= $row->foto ?>" alt="..." width="100%" style="height:13rem;">
                                            <?php } else { ?>
                                                <img src="<?= base_url() ?>assets/img/img-temp.png" alt="..." width="100%" style="height:13rem;">
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h4 class="fs-primary text-grey-dark card-title text-bold"><?= $row->judul ?></h4>
                                                <h6 class="fs-secondary text-grey-light card-text"><?= $row->rangkuman ?></h6>
                                                <p class="fs-secondary card-text">
                                                    <p class="text-muted"><i class="mdi mdi-calendar"></i>&nbsp;<?= $this->informasi_model->tgl_indo($row->tanggal) ?></p>
                                                </p>
                                                <a href="<?= base_url() ?>detailpengumuman/<?= $row->id ?>" type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <h3 style="text-align: center">No Data Found</h3>
                    <?php } ?>
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