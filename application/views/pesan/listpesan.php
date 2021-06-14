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
                                <div class="fw-bolder fs-2">Daftar Pesan</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Daftar Pesan</span>
                            </div>
                        </div>
                    </div>
                    <!-- Jadwal Wisuda -->
                    <div class="row row-dashboard mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <h5 class="card-title ms-1 text-info">Pesan Masuk</h5>
                                        </div>
                                        <div class="col-4 text-end">
                                            <!-- <a href="<?php echo base_url() ?>admin/wisuda/add" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2"><span class="mdi mdi-plus"> Tambah</span></a> -->
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">

                                            <table id="example1" class="table table-borderless table-alumni">
                                                <thead>
                                                    <tr>
                                                        <td class="text-wrap align-middle">Tanggal</td>
                                                        <td class="align-middle">NIM</td>
                                                        <td class="align-middle">Email</td>
                                                        <td class="text-wrap align-middle text-center">Judul</td>
                                                        <td class="text-wrap align-middle text-center">Uraian</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($pesan as $row) { ?>                                                    
                                                    <tr class="<?=($row->isread == 1) ? 'table-secondary' : ''?>">
                                                        <td><?=$this->pesan_model->tgl_indo($row->tanggal)?></td>
                                                        <td><?=$row->nim?></td>
                                                        <td><?=$row->email?></td>
                                                        <td class=" text-center"><?=$row->judul?></td>
                                                        <td class="text-center"><?=substr(strip_tags($row->uraian), 0, 125) . " ..."?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url() ?>admin/pesan/detail/<?=$row->id?>" class="btn btn-outline-info show-detail" data-id="<?=$row->id?>"><small>Lihat Detail</small></a>
                                                        </td>
                                                    </trcl>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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