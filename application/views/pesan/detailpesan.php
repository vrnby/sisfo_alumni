<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/meta_dashboard') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed alumni-auth" style="background: #f8f8f8">
    <div class="wrapper">
        <?php $this->load->view('template/navbar_dashboard') ?>
        <?php $this->load->view('template/sidebar_dashboard') ?>


        <div class="content-wrapper">

            <section class="content table-full">
                <div class="container-fluid">
                    <!-- biodata navbar and search -->
                    <div class="row row-dashboard">
                        <div class="col-md-4 mt-1">
                            <div class="row">
                                <div class="fw-bolder fs-2">Detail Pesan</div>
                            </div>
                            <div class="row">
                                <span class="text-muted"><a href="<?= base_url() ?>admin/pesan">Daftar Pesan</a> / Detail Pesan</span>
                            </div>
                        </div>
                    </div>
                    <!-- Jadwal Wisuda -->
                    <div class="row row-dashboard mt-4 detail-pesan">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <h5 class="card-title text-info">Pesan Masuk</h5>
                                        </div>
                                        <div class="col-4 text-end">
                                            <!-- <a href="<?php echo base_url() ?>admin/wisuda/add" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2"><span class="mdi mdi-plus"> Tambah</span></a> -->
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <p>Dari :</p>
                                            <p class="mb-0 from"><?=$pesan[0]->nim?><small><span class="mdi mdi-calendar mb-0 float-end">&nbsp;<?=$this->pesan_model->tgl_indo($pesan[0]->tanggal)?></span></small></p>
                                            <p><?=$pesan[0]->email?></p>
                                            <h5><?=$pesan[0]->judul?></h5>
                                            <p><?=$pesan[0]->uraian?></p>

                                            <a href="<?= base_url() ?>admin/pesan" class="btn button-secondary-custom btn-sm ps-3 pe-4 pt-2 pb-2 me-3 mt-4 mb-5 float-start">
                                                <span class="mdi mdi-chevron-left"> Kembali </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

    <!-- Script -->
    <?php $this->load->view('template/script_dashboard') ?>
    <!-- DataTables -->
    <script src="<?php echo base_url() ?>assets/js/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datatables-bs4/dataTables.bootstrap4.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        var toggle = false
        var detailId = 0
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            // $("#wrapper").toggleClass("toggled")
            toggle = !toggle
            if (toggle) {
                var margin = 0 - parseInt($("#sidebar-wrapper").css('width')) + 'px'
                $("#sidebar-wrapper").css('margin-left', margin)
                $("#sidebar-wrapper").css('transition', 'margin-left .4s')
            } else {
                $("#sidebar-wrapper").css('margin-left', '0')
                $("#sidebar-wrapper").css('transition', 'margin-left .4s')
            }
        });
        $(function() {
            // $("#example1").DataTable();
            $("#example1").DataTable({
                "columnDefs": [{
                        "width": "16%",
                        "targets": 0
                    },
                    {
                        "width": "26%",
                        "targets": 1
                    },
                    {
                        "width": "13%",
                        "targets": 2
                    },
                    {
                        "width": "11%",
                        "targets": 7
                    }
                ]
            });
        });
    </script>
</body>

</html>