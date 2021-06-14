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

            <section class="content m-navpill ">
                <div class="container-fluid">
                    <!-- biodata navbar and search -->
                    <div class="row row-dashboard">
                        <div class="col-md-4 mt-1">
                            <div class="row">
                                <div class="fw-bolder fs-2">Tambah Pekerjaan</div>
                            </div>
                            <div class="row">
                                <span class="text-muted"><a href="<?= base_url() ?>mahasiswa/biodata">Biodata</a> / Tambah Pekerjaan</span>
                            </div>
                        </div>
                    </div>


                    <div class="row row-dashboard2 form-tabs mt-4">
                        <div class="col-12">
                            <div class="card">
                                <form action="<?= base_url() ?>biodata/storepekerjaan" method="POST" class="needs-validation" novalidate>
                                    <!-- <form class="needs-validation" novalidate> -->
                                    <div class="modal-body">
                                        <nav>
                                            <ul class="nav nav-pills nav-fill justify-content-center" id="nav-tab" role="tablist">
                                                <li><a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#update_pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Informasi Umum</a></li>
                                                <li class="tab-two"><a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#update_pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Alamat</a></li>
                                                <li class="tab-three"><a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#update_pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">Kontak</a></li>
                                            </ul>
                                        </nav>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="update_pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                                <div class="row">
                                                    <div class="col-md-12 mt-3">
                                                        <label for="nama" class="form-label">Nama Kantor <span class="color-danger-custom">*</span></label>
                                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan nama kantor Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="jenis_pekerjaan" class="form-label">Jenis Pekerjaan</label>
                                                        <select class="form-select" id="jenis_pekerjaan" name="jenis_pekerjaan">
                                                            <option selected disabled value="">Choose...</option>
                                                            <option value="Wirausaha">Wirausaha</option>
                                                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                            <option value="PNS">PNS</option>
                                                            <option value="TNI">TNI</option>
                                                            <option value="Polri">Polri</option>
                                                            <option value="BUMN">BUMN</option>
                                                            <option value="Kontrak Institusi Pemerintah">Kontrak Institusi Pemerintah</option>
                                                            <option value="Melanjutkan Kuliah">Melanjutkan Kuliah</option>
                                                            <option value="Tidak Diketahui">Tidak Diketahui</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih jenis pekerjaan Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="jenis_kantor" class="form-label">Jenis Kantor</label>
                                                        <input type="text" class="form-control" id="jenis_kantor" name="jenis_kantor">
                                                        <div class="invalid-feedback">
                                                            Masukkan jenis kantor Anda!
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                    <div class="col-md-6 mt-3">
                                                        <label for="jabatan" class="form-label">Jabatan/Posisi <span class="color-danger-custom">*</span></label>
                                                        <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                                                        <div class="invalid-feedback">
                                                            Masukkan jabatan/posisi Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="pendapatan" class="form-label">Pendapatan</label>
                                                        <input type="number" class="form-control" id="pendapatan" name="pendapatan">
                                                        <div class="invalid-feedback">
                                                            Masukkan pendapatan/gaji Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="tgl_masuk" class="form-label">Tgl Mulai Bekerja <span class="color-danger-custom">*</span></label>
                                                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" required>
                                                        <div class="invalid-feedback">
                                                            Pilih tanggal masuk Anda bekerja!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="tgl_keluar" class="form-label">Tgl Akhir Bekerja</label>
                                                        <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar">
                                                        <small class="text-danger">Kosongi jika masih bekerja ditempat tersebut</small>
                                                    </div>
                                                    <div class="col-md-8 col-xs-12  mt-3">
                                                        <label for="status_pekerjaan" class="form-label">Status Pekerjaan <span class="color-danger-custom">*</span></label>
                                                        <select class="form-select" id="status_pekerjaan" name="status_pekerjaan" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option value="Pekerjaan Sesuai Jurusan">Pekerjaan Sesuai Jurusan</option>
                                                            <option value="Pekerjaan Tidak Sesuai Jurusan">Pekerjaan Tidak Sesuai Jurusan</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih status pekerjaan Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 mt-3">
                                                        <label for="infojpc" class="form-label">Info dari JPC <span class="color-danger-custom">*</span></label>
                                                        <select class="form-select" id="infojpc" name="infojpc" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <option value="Ya">Ya</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih informasi Anda dari jpc atau bukan!
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2  mt-4 mb-5 continue float-end">
                                                    <span class="mdi mdi-chevron-right"> Selanjutnya </span>
                                                </button>
                                            </div>
                                            <div class="tab-pane  fade" id="update_pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12 mt-3">
                                                        <label for="negara" class="form-label">Negara</label>
                                                        <select class="form-select" id="negara" name="negara">
                                                            <option selected disabled value="">Choose...</option>

                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih negara Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 mt-3">
                                                        <label for="pendapatan" class="form-label">Kode Pos (Optional)</label>
                                                        <input type="number" class="form-control" id="kodepos" name="kodepos">
                                                        <div class="invalid-feedback">
                                                            Masukkan kodepos
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="update_provinsi" class="form-label">Provinsi</label>
                                                        <select class="form-select" id="provinsi" name="provinsi" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <?php foreach ($provinsi as $row) {
                                                                echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
                                                            } ?>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih provinsi Anda!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="update_kabupaten" class="form-label">Kabupaten</label>
                                                        <select class="form-select" id="kabupaten" name="kabupaten" required>
                                                            <option selected disabled value="">Choose...</option>
                                                            <?php foreach ($kabupaten as $row) {
                                                                echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
                                                            } ?>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Pilih kabupaten Anda!
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamat" name="alamat_kantor" rows="3" placeholder="Jl. Merdeka Gang 8 No. 90" required></textarea>
                                                        <div class="invalid-feedback">
                                                            Masukkan alamat Anda!
                                                        </div>
                                                        <small class="text-info">
                                                            Contoh : Jl Merdeka No 40 atau Nama Dusun
                                                        </small>
                                                    </div>

                                                </div>
                                                <button class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2  mt-4 mb-5 float-end continue">
                                                    <span class="mdi mdi-chevron-right"> Selanjutnya </span>
                                                </button>
                                                <button class="btn button-secondary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3 mt-4 mb-5 float-end back">
                                                    <span class="mdi mdi-chevron-left"> Kembali </span>
                                                </button>
                                            </div>
                                            <div class="tab-pane fade" id="update_pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <label for="no_telp_kantor" class="form-label">No Telp Kantor <span class="color-danger-custom">*</span></label>
                                                        <input type="text" class="form-control" id="no_telp_kantor" name="no_telp_kantor" required>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label for="no_fax_kantor" class="form-label">No Fax Kantor</label>
                                                        <input type="text" class="form-control" id="no_fax_kantor" name="no_fax_kantor">
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <label for="email_kantor" class="form-label">Email Kantor</label>
                                                        <input type="email" class="form-control" id="email_kantor" name="email_kantor">
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <label for="website_kantor" class="form-label">Website Kantor</label>
                                                        <input type="text" class="form-control" id="website_kantor" name="website_kantor">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn button-primary-custom btn-sm ps-4 pe-4 pt-2 pb-2  mt-4 mb-5 float-end continue">
                                                    <span class="mdi mdi-checkbox-marked-circle-outline "> Simpan </span>
                                                </button>
                                                <button class="btn button-secondary-custom btn-sm ps-4 pe-4 pt-2 pb-2 me-3 mt-4 mb-5 float-end back">
                                                    <span class="mdi mdi-chevron-left"> Kembali </span>
                                                </button>
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
        var base_url = '<?= base_url() ?>'
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
        // input date limiter
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
        $("#tgl_keluar").attr('max', today)
        $("#tgl_masuk").attr('max', today)

        function get_kabupaten(id_provinsi, id_target) {
            var provinsi = $(id_provinsi).val()
            $.ajax({
                type: 'POST',
                url: base_url + 'ajax/get_kabupaten/' + provinsi,
                cache: false,
                success: function(data) {
                    $(id_target).html(data)
                }
            })
        }

        $("#provinsi").change(function() {
            get_kabupaten("#provinsi", "#kabupaten")
        })
    </script>
    <script>
        $('.continue').click(function() {
            $('.nav-fill > .active').next('li').find('a').trigger('click');
        });
        $('.back').click(function() {
            $('.nav-fill > .active').prev('li').find('a').trigger('click');
        });
    </script>

</body>

</html>