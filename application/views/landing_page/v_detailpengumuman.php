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

        <section id="detailpengumuman" class="detailpengumuman">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-xs-12 mb-5">
                        <img src="<?php echo base_url() ?>assets/img/underline2.png" class="img-fluid img-line img-col-md" style="width: 23rem; right: 69%;">
                        <h2 class="color-primary text-bold">DETAIL PENGUMUMAN</h2>
                        <h6 class="fs-secondary float-end breadcrumb-landingpage img-col-md"><a class="text-muted"><a href="<?= base_url() ?>pengumuman">Pengumuman</a><span class="text-grey-light"> / Detail Pengumuman</span></a></h6>
                        <h6 class="fs-secondary breadcrumb-landingpage img-col-xs" style="top:0;"><a class="text-muted"><a href="<?= base_url() ?>pengumuman">Pengumuman</a><span class="text-grey-light"> / Detail Pengumuman</span></a></h6>
                        <h6 class="fs-secondary text-grey-light img-col-md">Terus perbarui informasi terkini melalui website alumni</h6>
                    </div>
                    <?php foreach ($data as $row) { ?>
                        <div class="row g-0">
                            <div class="col-md-3 detail-left">
                                <?php if ($row->foto != '') { ?>
                                    <img src="<?php echo base_url() ?>assets/img/posting/<?= $row->foto ?>" alt="..." width="100%">
                                <?php } else { ?>
                                    <img src="<?php echo base_url() ?>assets/img/img-temp.png" alt="..." width="100%">
                                <?php } ?>
                                <h6 class="fs-secondary mt-5">Download Dokumen PDF di bawah ini</h6>
                                <?php if ($row->file != '') { ?>
                                    <a href="<?= base_url() ?>assets/file/posting/<?= $row->file ?>" type="button" class="btn btn-sm button-danger-outline">Download</a>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-sm button-danger-outline pt-2 pb-2 ps-3 pe-3" disabled>Download</button>
                                <?php } ?>
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h4 class="fs-primary text-bold card-title"><?= $row->judul ?></h4>
                                    <p class="fs-secondary card-text">
                                        <p class="text-muted"><i class="mdi mdi-calendar"></i>&nbsp;<?= $this->informasi_model->tgl_indo($row->tanggal) ?></p>
                                    </p>
                                    <h6 class="fs-secondary text-grey-light card-isi "><?= $row->isi ?></h6>
                                </div>
                            </div>
                        </div>
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