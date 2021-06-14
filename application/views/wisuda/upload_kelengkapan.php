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

            <section class="content table-full m-navpill">
                <div class="container-fluid">
                    <!-- biodata navbar and search -->
                    <div class="row row-dashboard">
                        <div class="col-md-12 mt-1">
                            <div class="row">
                                <div class="fw-bolder fs-2">Upload Kelengkapan</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Wisuda / Pendaftaran / Upload Kelengkapan</span>
                            </div>
                        </div>
                    </div>

                    <div class="row row-dashboard2 form-tabs mt-3">
                        <div class="col-12">
                            <div class="card">
                                <form class="needs-validation" novalidate>
                                    <div class="modal-body">
                                        <nav>
                                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#update_pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Wisudawan</a>
                                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#update_pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Ayah Wisudawan</a>
                                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#update_pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">Ibu Wisudawan</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="update_pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="row mt-3">
                                                    <h4>Wisudawan</h4>
                                                    <div class="col-lg-12">
                                                        <label for="nama_wisudawan" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="nama_wisudawan" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan nama wisudawan!
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="no_wisudawan" class="form-label">Nomor Whatsapp Aktif</label>
                                                        <input type="text" class="form-control" id="no_wisudawan" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan nomor Whatsapp aktif wisudawan!
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="tanggal_wisudawan" class="form-label">Tanggal Surat</label>
                                                        <input type="date" class="form-control" id="tanggal_wisudawan" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan tanggal surat wisudawan!
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label for="foto_wisudawan" class="form-label">Foto</label>
                                                        <input class="form-control" type="file" id="foto_wisudawan" required>
                                                        <div class="invalid-feedback">
                                                            Pilih foto dengan jenis file .png/.jpg/.jpeg dengan ukuran maks 1 MB
                                                        </div>
                                                        <span class="text-danger">
                                                            Jenis file .png/.jpg/.jpeg dengan ukuran maks 1 MB
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane  fade" id="update_pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <h4>Ayah Wisudawan</h4>
                                                            <div class="col-lg-12">
                                                                <label for="nama_ayah_wisudawan" class="form-label">Nama</label>
                                                                <input type="text" class="form-control" id="nama_ayah_wisudawan" required>
                                                                <div class="invalid-feedback">
                                                                    Masukkan nama ayahwisudawan!
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="no_ayah_wisudawan" class="form-label">Nomor Whatsapp Aktif</label>
                                                                <input type="text" class="form-control" id="no_ayah_wisudawan" required>
                                                                <div class="invalid-feedback">
                                                                    Masukkan nomor Whatsapp aktif ayah wisudawan!
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="tanggal_ayah_wisudawan" class="form-label">Tanggal Surat</label>
                                                                <input type="date" class="form-control" id="tanggal_ayah_wisudawan" required>
                                                                <div class="invalid-feedback">
                                                                    Masukkan tanggal surat ayah wisudawan!
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label for="foto_ayah_wisudawan" class="form-label">Foto</label>
                                                                <input class="form-control" type="file" id="foto_ayah_wisudawan" required>
                                                                <div class="invalid-feedback">
                                                                    Pilih foto dengan jenis file .png/.jpg/.jpeg dengan ukuran maks 1 MB
                                                                </div>
                                                                <span class="text-danger">
                                                                    Jenis file .png/.jpg/.jpeg dengan ukuran maks 1 MB
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="update_pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                <div class="row ps-4">
                                                    <h4>Ibu Wisudawan</h4>

                                                    <div class="col-lg-12">
                                                        <label for="nama_ibu_wisudawan" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="nama_ibu_wisudawan" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan nama ibu wisudawan!
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="no_ibu_wisudawan" class="form-label">Nomor Whatsapp Aktif</label>
                                                        <input type="text" class="form-control" id="no_ibu_wisudawan" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan nomor Whatsapp aktif ibu wisudawan!
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="tanggal_ibu_wisudawan" class="form-label">Tanggal Surat</label>
                                                        <input type="date" class="form-control" id="tanggal_ibu_wisudawan" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan tanggal surat ibu wisudawan!
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label for="foto_ibu_wisudawan" class="form-label">Foto</label>
                                                        <input class="form-control" type="file" id="foto_ibu_wisudawan" required>
                                                        <div class="invalid-feedback">
                                                            Pilih foto dengan jenis file .png/.jpg/.jpeg dengan ukuran maks 1 MB
                                                        </div>
                                                        <span class="text-danger">
                                                            Jenis file .png/.jpg/.jpeg dengan ukuran maks 1 MB
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col text-end">
                                                        <button type="submit" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2  mt-4 mb-5 float-end continue">
                                                            <span class="mdi mdi-checkbox-marked-circle-outline "> Simpan </span>
                                                        </button>
                                                        <button class="btn button-secondary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3 mt-4 mb-5 float-end back">
                                                            <span class="mdi mdi-chevron-left"> Kembali </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <!-- Script -->
    <?php $this->load->view('template/script_dashboard') ?>

    <!-- Menu Toggle Script -->
    <script>
        var toggle = false
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
        // form validation
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        // date input limiter
        var today = new Date()
        var dd = today.getDate()
        var mm = today.getMonth() + 1
        var yyyy = today.getFullYear()
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = yyyy + '-' + mm + '-' + dd
        $("#tanggal_lahir").attr('max', today)
    </script>
</body>

</html>