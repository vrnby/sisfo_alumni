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
                        <div class="col-md-12 mt-1">
                            <div class="row">
                                <div class="fw-bolder fs-2">Ubah Foto</div>
                            </div>
                            <div class="row">
                                <span class="text-muted"><a href="<?= base_url() ?>admin/galeri">Daftar Galeri</a> / Ubah Foto</span>
                            </div>
                        </div>
                    </div>
                    <!-- Jadwal Wisuda -->
                    <div class="row row-dashboard mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-12">
                                            <h5 class="card-title ms-1 text-info">Ubah Foto</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-2 pe-5 ps-5">
                                        <div class="col">
                                            <form action="<?=base_url()?>admin/galeri/update" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                                                <div class="row">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nama" class="form-label">Nama Foto <span class="color-danger-custom">*</span></label>
                                                        <input type="text" class="form-control" id="nama" name="nama" value="<?=$galeri[0]->nama?>" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama Foto!
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="tgl_foto" class="form-label">Tgl Foto <span class="color-danger-custom">*</span></label>
                                                        <input type="date" class="form-control" id="tgl_foto" name="tgl_foto" value="<?=$galeri[0]->tgl?>" required>
                                                        <div class="invalid-feedback">
                                                            Pilih tanggal foto!
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 container-foto mt-3">
                                                        <label for="foto" class="form-label">Foto <span class="color-danger-custom">*</span></label>
                                                        <input class="form-control" type="file" id="input-file" name="input-file" accept="image/*" onchange={handleChange()} hidden />
                                                        <label class="btn-upload" for="input-file" role="button">
                                                            Pilih Photo
                                                        </label>
                                                        <div class="invalid-feedback">
                                                            Upload foto Anda!
                                                        </div>
                                                        <div class="preview-box color-grey-light"><span class="text">Preview Foto</span></div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="<?=$galeri[0]->id?>">
                                                <button type="submit" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2  mt-4 mb-5 float-end continue">
                                                    <span class="mdi mdi-checkbox-marked-circle-outline "> Update </span>
                                                </button>
                                                <a href="<?= base_url() ?>admin/galeri" class="btn button-secondary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3 mt-4 mb-5 float-end back">
                                                    <span class="mdi mdi-chevron-left"> Kembali </span>
                                                </a>
                                            </form>

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

    <script>
        const handleChange = () => {
            const fileUploader = document.querySelector('#input-file');
            const getFile = fileUploader.files
            if (getFile.length !== 0) {
                const uploadedFile = getFile[0];
                readFile(uploadedFile);
            }
        }

        const readFile = (uploadedFile) => {
            if (uploadedFile) {
                const reader = new FileReader();
                reader.onload = () => {
                    const parent = document.querySelector('.preview-box');
                    parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
                };

                reader.readAsDataURL(uploadedFile);
            }
        };
    </script>
</body>

</html>