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

            <section class="content">
                <div class="container-fluid">
                    <!-- biodata navbar and search -->
                    <div class="row row-dashboard">
                        <div class="col-md-4 mt-1">
                            <div class="row">
                                <div class="fw-bolder fs-2">Ubah Password</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Pengaturan / Ubah Password</span>
                            </div>
                        </div>
                    </div>
                    <div class="row row-dashboard">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body px-5">
                                    <?php if (isset($this->session->status_password) && $this->session->status_password == "new_password_not_match") { ?>
                                        <?php unset($_SESSION['status_password']); ?>
                                        <div class="alert alert-danger">Password baru dan Ulangi password tidak cocok!</div>
                                    <?php } ?>
                                    <?php if (isset($this->session->status_password) && $this->session->status_password == "old_password_not_false") { ?>
                                        <?php unset($_SESSION['status_password']); ?>
                                        <div class="alert alert-danger">Password lama tidak cocok!</div>
                                    <?php } ?>
                                    <?php if (isset($this->session->status_password) && $this->session->status_password == "username_not_found") { ?>
                                        <?php unset($_SESSION['status_password']); ?>
                                        <div class="alert alert-danger">Terjadi kesalahan dengan system. Logout dan login kembali!</div>
                                    <?php } ?>
                                    <?php if (isset($this->session->status_password) && $this->session->status_password == "success") { ?>
                                        <?php unset($_SESSION['status_password']); ?>
                                        <div class="alert alert-success">Password berhasil diganti.</div>
                                    <?php } ?>
                                    <form action="<?= base_url() ?>pengaturan/ubah_password_admin" method="POST" class="needs-validation" novalidate>
                                        <!-- <form class="needs-validation" novalidate> -->
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="ms-1 text-info">Ubah Password</h5>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col m-2">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="oldpassword" class="form-label">Password Anda Sekarang</label>
                                                        <input type="password" class="form-control" name="oldpassword" id="oldpassword" minlength="1" maxlength="32" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan password Anda minimal 1 karakter!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <label for="password" class="form-label">Password Baru</label>
                                                        <input type="password" class="form-control" name="password" id="password" minlength="8" maxlength="32" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan password baru Anda minimal 8 karakter!
                                                        </div>
                                                        <span class="text-danger">
                                                            Jumlah karakter maksimal 32 dan minimal 8
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <label for="repassword" class="form-label">Ulangi Password Baru</label>
                                                        <input type="password" class="form-control" name="repassword" id="repassword" minlength="8" maxlength="32" required>
                                                        <div class="invalid-feedback">
                                                            Ulangi memasukkan password Anda minimal 8 karakter!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col text-end">
                                                <button class="btn btn-success me-1" type="submit"><span class="mdi mdi-content-save-outline"> Simpan</span></button>
                                                <a class="btn btn-secondary text-light" onclick="window.history.back();"><span class="mdi mdi-close"> Batal</span></a>
                                            </div>
                                        </div>
                                    </form>
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
    </script>
</body>

</html>