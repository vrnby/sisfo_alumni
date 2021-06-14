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

        <section id="listagenda" class="listagenda">
            <div class="container">

                <div class="row">
                    <img src="<?php echo base_url() ?>assets/img/underline2.png" class="img-fluid img-line img-col-md" style="right: 81%;width: 12rem;top:34%">
                    <div class="col-lg-12 col-md-12 col-xs-12 mb-5">
                        <h2 class="text-bold">AGENDA</h2>
                        <p class="fs-secondary text-grey-light subtitle">Terus perbarui informasi terkini melalui website alumni</p>
                    </div>
                    <!-- show data -->
                    <?php if ($agenda > 0) { ?>
                        <?php foreach ($agenda as $row) { ?>
                            <div class="article-loop">
                                <div class="card mb-3 ">
                                    <div class="row g-0">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <h4 class="fs-primary text-grey-dark text-bold card-title"><?= $row->judul ?></h4>
                                                <h6 class="fs-secondary text-grey-light card-text"><?= $row->rangkuman ?></h6>
                                                <p class="card-text">
                                                    <p class="text-muted"><i class="mdi mdi-calendar"></i>&nbsp;<?= $this->informasi_model->tgl_indo($row->tanggal) ?></p>
                                                </p>
                                                <a href="<?= base_url() ?>detailagenda/<?= $row->id ?>" type="button" class="btn p fs-secondary button-warning-outline">Lihat Selengkapnya</a>
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