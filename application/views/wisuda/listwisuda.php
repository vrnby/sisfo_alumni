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
                                <div class="fw-bolder fs-2">Jadwal Wisuda</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Jadwal Wisuda</span>
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
                                            <h5 class="card-title ms-1 text-info">Jadwal Wisuda</h5>
                                        </div>
                                        <div class="col-4 text-end">
                                            <a href="<?php echo base_url() ?>admin/wisuda/add" class="btn btn-primary"><span class="mdi mdi-plus"> Tambah</span></a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <table id="example1" class="table table-striped table-borderless table-alumni">
                                                <thead>
                                                    <tr>
                                                        <td class="align-middle">Tahun Gel dan Sesi</td>
                                                        <td class="align-middle">Nama Wisuda</td>
                                                        <td class="text-wrap align-middle">Tanggal Wisuda</td>
                                                        <td class="text-wrap align-middle text-center">Kuota Instusi</td>
                                                        <td class="text-wrap align-middle text-center">Total Kuota</td>
                                                        <td class="text-wrap align-middle text-center">Total Wisudawan</td>
                                                        <td class="text-wrap align-middle text-center">Status Pendaftaran</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-bolder">                                                    
                                                    <?php foreach ($jadwal_wisuda as $row) { ?>                                                        
                                                    <tr>
                                                        <td><?=$row->tahun_gel_sesi?></td>
                                                        <td><?=$row->nama_wisuda?></td>
                                                        <td><?=$row->tanggal_wisuda?></td>
                                                        <td class="text-center"><?=$row->kuota_instusi?></td>
                                                        <td class="text-center"><?=$row->kuota_total?></td>
                                                        <td class="text-center">936</td>
                                                        <td class="text-center"><?=$row->status?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url() ?>admin/wisuda/jadwal/detail" class="btn text-danger show-detail" data-id="1"><small>Lihat Detail</small></a>
                                                            <a href="<?= base_url() ?>admin/wisuda/edit"><i class="btn btn-sm mdi mdi-square-edit-outline text-success"></i></a>
                                                            <a><span class="btn btn-sm mdi mdi-delete-outline text-danger delete-informasi" data-id=""></span></a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                    <!-- <tr>
                                                        <td>2020 Gel. 1 Sesi 2</td>
                                                        <td>Wisuda ke 52 - Daring Jan 2021 PSDKU</td>
                                                        <td>31-03-2021 09:00</td>
                                                        <td class="text-center">0</td>
                                                        <td class="text-center">0</td>
                                                        <td class="text-center">0</td>
                                                        <td class="text-center">Dibuka</td>
                                                        <td class="text-center">
                                                            <a href="#detailwisuda" class="btn text-danger show-detail" data-id="2">Lihat Detail</a>
                                                        </td>
                                                    </tr> -->
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