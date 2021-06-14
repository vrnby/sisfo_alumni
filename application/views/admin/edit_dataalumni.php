<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/meta_dashboard') ?>
</head>

<body>
    <div class="d-flex" id="wrapper">        
        <!-- Sidebar -->
        <?php $this->load->view('template/sidebar_dashboard') ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Navbar -->
            <?php $this->load->view('template/navbar_dashboard') ?>

            <!-- Content -->
            <div class="container-fluid">
                <div class="row row-dashboard">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <form action="" method="post" id="registration">
                                <nav>
                                    <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-link active" id="step1-tab" data-toggle="tab" href="#step1">Personal Data</a>
                                        <a class="nav-link" id="step2-tab" data-toggle="tab" href="#step2">Info Kontak</a>
                                        <a class="nav-link" id="step3-tab" data-toggle="tab" href="#step3">Pendidikan</a>
                                    </div>
                                </nav>
                                <div class="tab-content py-4" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="step1">
                                        <h4>Personal data</h4>
                                        <div class="mb-3">
                                            <label for="field1">NIM</label>
                                            <input type="text" name="field1" class="form-control" id="field1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="field2">Nama</label>
                                            <input type="text" name="field2" class="form-control" id="field2">
                                        </div>
                                        <div class="mb-3">
                                            <label for="field1">Tempat Lahir</label>
                                            <input type="text" name="field1" class="form-control" id="field1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="field2">Tanggal Lahir</label>
                                            <input type="text" name="field2" class="form-control" id="field2">
                                        </div>
                                        <div class="mb-3">
                                            <label for="field1">Agama</label>
                                            <input type="text" name="field1" class="form-control" id="field1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="field2">Alamat</label>
                                            <input type="text" name="field2" class="form-control" id="field2">
                                        </div>
                                        <div class="mb-3">
                                            <label for="field1">RT</label>
                                            <input type="text" name="field1" class="form-control" id="field1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="field2">RW</label>
                                            <input type="text" name="field2" class="form-control" id="field2">
                                        </div>
                                        <label for="field2">pROVINSI</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Prodi</option>
                                            <option value="1">jAWA Timur</option>
                                            <option value="2">jAWA Timur</option>
                                            <option value="3">jAWA Timur</option>
                                        </select>
                                    </div>
                                    <div class="tab-pane fade" id="step2">
                                        <h4>Info Kontak</h4>
                                        <div class="mb-3">
                                            <label for="field4">Email</label>
                                            <input type="text" name="field4" class="form-control" id="field4">
                                        </div>
                                        <div class="mb-3">
                                            <label for="field5">Nomer Hp</label>
                                            <input type="text" name="field5" class="form-control" id="field5">
                                        </div>
                                        <div class="mb-3">
                                            <label for="textarea1">Alamat Facebook</label>
                                            <input type="text" name="field5" class="form-control" id="field5">
                                        </div>
                                        <div class="mb-3">
                                            <label for="textarea1">Alamat Linkedin</label>
                                            <input type="text" name="field5" class="form-control" id="field5">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="step3">
                                        <h4>Pendidikan</h4>
                                        <div class="mb-3">
                                            <label for="field2">Prodi</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Prodi</option>
                                                <option value="1">D3 Teknik Mesin</option>
                                                <option value="2">D3 Teknik Mesin</option>
                                                <option value="3">D3 Teknik Mesin</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="field5">Tahun Masuk</label>
                                            <input type="text" name="field5" class="form-control" id="field5">
                                        </div>
                                        <div class="mb-3">
                                            <label for="field5">Tanggal Lulus</label>
                                            <input type="text" name="field5" class="form-control" id="field5">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <button type="button" class="btn btn-secondary">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Script -->
    <?php $this->load->view('template/script_dashboard') ?>
    <!-- Zingchart -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/stepform/enchanter.js"></script>
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
    </script>
    <script>
        var registrationForm = $('#registration');
        var formValidate = registrationForm.validate({
            errorClass: 'is-invalid',
            errorPlacement: () => false
        });

        const wizard = new Enchanter('registration', {}, {
            onNext: () => {
                if (!registrationForm.valid()) {
                    formValidate.focusInvalid();
                    return false;
                }
            }
        });
    </script>

</body>

</html>