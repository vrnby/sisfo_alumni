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
                                <div class="fw-bolder fs-2">Daftar Galeri</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Daftar Galeri</span>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($this->session->status_add_galeri) && $this->session->status_add_galeri == "success") { ?>
                        <?php unset($_SESSION['status_add_galeri']); ?>
                        <div class="row mt-2 row-dashboard justify-content-between alert alert-success alert-dismissible pb-3 fade show" role="alert">
                            Galeri berhasil ditambahkan.
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    <?php } ?>                    
                    <?php if (isset($this->session->status_edit_galeri) && $this->session->status_edit_galeri == "success") { ?>
                        <?php unset($_SESSION['status_edit_galeri']); ?>
                        <div class="row mt-2 row-dashboard justify-content-between alert alert-success alert-dismissible pb-3 fade show" role="alert">
                            Galeri berhasil diubah.
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    <?php } ?>
                    <?php if (isset($this->session->status_delete_galeri) && $this->session->status_delete_galeri == "success") { ?>
                        <?php unset($_SESSION['status_delete_galeri']); ?>
                        <div class="row mt-2 row-dashboard justify-content-between alert alert-success alert-dismissible pb-3 fade show" role="alert">
                            Galeri berhasil dihapus.
                            <div type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></div>
                        </div>
                    <?php } ?>
                    <!-- Jadwal Wisuda -->
                    <div class="row row-dashboard mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <h5 class="card-title ms-1 text-info">Galeri Foto</h5>
                                        </div>
                                        <div class="col-4 text-end">
                                            <a href="<?php echo base_url() ?>admin/galeri/tambah" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2"><span class="mdi mdi-plus"> Tambah</span></a>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <table id="example1" class="table table-striped table-borderless table-alumni">
                                                <thead>
                                                    <tr>
                                                        <td class="align-middle">Nama Foto</td>
                                                        <td class="text-wrap align-middle">Tanggal Foto</td>
                                                        <td class="text-wrap align-middle text-center">Foto</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($galeri as $row) { ?>                                                        
                                                    <tr>
                                                        <td><?=$row->nama?></td>
                                                        <td><?=$this->pesan_model->tgl_indo($row->tgl)?></td>
                                                        <td class="text-center">
                                                            <img src="<?= base_url() ?>assets/img/gallery/<?=$row->foto?>" width="180">
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url() ?>admin/galeri/edit/<?=$row->id?>"><i class="btn btn-sm mdi mdi-square-edit-outline text-success"></i></a>
                                                            <a href="<?= base_url() ?>admin/galeri/delete/<?=$row->id?>"><i class="btn btn-sm mdi mdi-delete-outline text-danger delete-informasi"></i></a>
                                                        </td>
                                                    </tr>
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