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

            <section class="content m-navpill">
                <div class="container-fluid">

                    <div class="row row-dashboard">
                        <div class="col-md-4 mt-1">
                            <div class="row">
                                <div class="fw-bolder fs-2">Ubah Biodata</div>
                            </div>
                            <div class="row">
                                <span class="text-muted"><a href="<?= base_url() ?>mahasiswa/biodata">Biodata</a> / Ubah Biodata</span>
                            </div>
                        </div>
                        <div class="col-md-4 ms-auto">

                        </div>
                    </div>
                </div>

                <div class="row row-dashboard2 form-tabs">
                    <div class="col-12">
                        <?php foreach ($alumni as $row) { ?>
                            <div class="card">
                                <form action="<?= base_url() ?>alumni/update" method="POST" class="needs-validation" novalidate>
                                    <!-- <form class="needs-validation" novalidate> -->
                                    <div class="modal-body">
                                        <nav>
                                            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#update_pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Informasi Umum</a>
                                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#update_pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Alamat</a>
                                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#update_pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">Kontak Pribadi</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="update_pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="row">
                                                    <div class="col-xs-12 img-col-xs">
                                                        <?php if ($row->foto != '') { ?>
                                                            <img class="img-thumbnail float-end" src="<?= base_url() ?>assets/img/alumni/<?= $row->foto ?>" alt="Foto"><br>
                                                        <?php } else { ?>
                                                            <img class="img-thumbnail float-end" src="<?= base_url() ?>assets/img/alumni/no-image.jpg" alt="Foto"><br>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="nim" class="form-label">Nim</label>
                                                                <input type="text" class="form-control" id="nim" value="<?= $row->nim ?>" required>
                                                                <div class="invalid-feedback">
                                                                    Masukkan NIM Anda!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <label for="nama" class="form-label">Nama</label>
                                                                <input type="text" class="form-control" id="nama" value="<?= $row->nama ?>" required>
                                                                <div class="invalid-feedback">
                                                                    Masukkan nama Anda!
                                                                </div>
                                                            </div>
                                                            <!-- <div class="row"> -->
                                                            <div class="col-md-6 mt-3">
                                                                <label for="update_agama" class="form-label">Agama</label>
                                                                <select class="form-select" id="update_agama" name="agama" required>
                                                                    <option value="Islam" <?= ($row->agama == 'Islam') ? 'selected' : '' ?>>Islam</option>
                                                                    <option value="Kristen" <?= ($row->agama == 'Kristen') ? 'selected' : '' ?>>Kristen</option>
                                                                    <option value="Katolik" <?= ($row->agama == 'Katolik') ? 'selected' : '' ?>>Katolik</option>
                                                                    <option value="Hindu" <?= ($row->agama == 'Hindu') ? 'selected' : '' ?>>Hindu</option>
                                                                    <option value="Budha" <?= ($row->agama == 'Budha') ? 'selected' : '' ?>>Budha</option>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Pilih agama Anda!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <label for="update_jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                                <select class="form-select" id="update_jenis_kelamin" name="jenis_kelamin" required>
                                                                    <option value="Laki-laki" <?= ($row->jenis_kelamin == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                                                                    <option value="Perempuan" <?= ($row->jenis_kelamin == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                                                                </select>
                                                                <div class="invalid-feedback">
                                                                    Pilih jenis kelamin Anda!
                                                                </div>
                                                            </div>
                                                            <!-- </div> -->
                                                            <div class="col-md-6 mt-3">
                                                                <label for="update_tempat_lahir" class="form-label">Tempat Lahir</label>
                                                                <input type="text" class="form-control" id="update_tempat_lahir" value="<?= $row->tempat_lahir ?>" name="tempat_lahir" placeholder="Tempat Lahir" required>
                                                                <div class="invalid-feedback">
                                                                    Masukan tempat lahir Anda!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <label for="update_tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                                <input type="date" class="form-control" id="update_tanggal_lahir" name="tanggal_lahir" value="<?= $row->tanggal_lahir ?>" required>
                                                                <div class="invalid-feedback">
                                                                    Pilih tanggal lahir Anda!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <label for="foto" class="form-label">Foto</label>
                                                                <input class="form-control" type="file" id="foto">
                                                                <div class="invalid-feedback">
                                                                    Upload foto Anda!
                                                                </div>
                                                                <small class="text-danger">
                                                                    Foto Anda telah diverifikasi oleh admin. Silahkan hubungi kemahasiswaan
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 img-col-md">
                                                        <?php if ($row->foto != '') { ?>
                                                            <img class="img-thumbnail float-end" src="<?= base_url() ?>assets/img/alumni/<?= $row->foto ?>" alt="Foto"><br>
                                                        <?php } else { ?>
                                                            <img class="img-thumbnail float-end" src="<?= base_url() ?>assets/img/alumni/no-image.jpg" alt="Foto"><br>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane  fade" id="update_pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="update_provinsi" class="form-label">Provinsi</label>
                                                        <select class="form-select" id="update_provinsi" name="provinsi" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <?php foreach ($provinsi as $prov) {
                                                                if ($prov->id == $row->id_provinsi) {
                                                                    echo '<option value="' . $prov->id . '" selected>' . $prov->nama . '</option>';
                                                                } else {
                                                                    echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
                                                                }
                                                            } ?>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih provinsi Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="update_kabupaten" class="form-label">Kabupaten</label>
                                                        <select class="form-select" id="update_kabupaten" name="kabupaten" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <?php foreach ($kabupaten as $kab) {
                                                                if ($kab->id == $row->id_kabupaten) {
                                                                    echo '<option value="' . $kab->id . '" selected>' . $kab->nama . '</option>';
                                                                } else {
                                                                    echo '<option value="' . $kab->id . '">' . $kab->nama . '</option>';
                                                                }
                                                            } ?>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih kabupaten Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $row->kecamatan ?>" placeholder="Tulungagung" required>
                                                        <div class="invalid-feedback">
                                                            Masukan kecamatan Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="kel_desa" class="form-label">Kelurahan/Desa</label>
                                                        <input type="text" class="form-control" id="kel_desa" name="kel_desa" value="<?= $row->kelurahan_desa ?>" placeholder="Jepun" required>
                                                        <div class="invalid-feedback">
                                                            Masukan kelurahan/desa Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamat" rows="3" required><?= $row->alamat ?></textarea>
                                                        <div class="invalid-feedback">
                                                            Masukkan alamat Anda!
                                                        </div>
                                                        <small class="text-info">
                                                            Contoh : Jl Merdeka No 40 atau Nama Dusun
                                                        </small>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="rt" class="form-label">RT</label>
                                                        <input type="text" class="form-control" id="rt" value="<?= $row->rt ?>" required>
                                                        <div class="invalid-feedback">
                                                            Masukan RT Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="rw" class="form-label">RW</label>
                                                        <input type="text" class="form-control" id="rw" value="<?= $row->rw ?>" required>
                                                        <div class="invalid-feedback">
                                                            Masukan RW Anda!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="update_pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="no_hp" class="form-label">No Hp</label>
                                                        <input type="number" class="form-control" id="no_hp" value="<?= $row->no_hp ?>" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nomor Hp Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email" value="<?= $row->email ?>" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan email Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <label for="facebook" class="form-label">Facebook</label>
                                                        <input type="text" class="form-control" id="facebook" value="<?= $row->facebook ?>">
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <label for="linkedin" class="form-label">LinkedIn</label>
                                                        <input type="text" class="form-control" id="linkedin" value="<?= $row->linkedin ?>">
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label for="issharepekerjaan" class="form-label">Share Pekerjaan</label>
                                                        <select class="form-select" id="issharepekerjaan" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option <?= ($row->issharepekerjaan == 1) ? 'selected' : '' ?>>Setuju</option>
                                                            <option <?= ($row->issharepekerjaan == 0) ? 'selected' : '' ?>>Tidak</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih persetujuan untuk menyebarkan pekerjaan Anda!
                                                        </div>
                                                        <small class="text-danger">
                                                            Menyetujui untuk riwayat pekerjaan ditampilkan di halaman umum
                                                        </small>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="issharebiodata" class="form-label">Share Biodata</label>
                                                        <select class="form-select" id="issharebiodata" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option <?= ($row->issharebiodata == 1) ? 'selected' : '' ?>>Setuju</option>
                                                            <option <?= ($row->issharebiodata == 0) ? 'selected' : '' ?>>Tidak</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih persetujuan untuk menyebarkan Biodata Anda!
                                                        </div>
                                                        <small class="text-danger">
                                                            Menyetujui untuk no telp, email, facebook, dan linkedin ditampilkan di halaman umum
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn button-secondary-custom btn-sm ps-4 pe-4 pt-2 pb-2" data-bs-dismiss="modal">
                                            <span class="mdi mdi-close"> Batal</span>
                                        </button>
                                        <button class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3">
                                            <span class="mdi mdi-checkbox-marked-circle-outline"> Update </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
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