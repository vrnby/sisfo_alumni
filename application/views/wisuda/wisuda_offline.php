<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/meta_dashboard') ?>
</head>

<body style="background: #f8f8f8">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('template/sidebar_dashboard') ?>        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- Navbar -->
            <?php $this->load->view('template/navbar_dashboard') ?>

            <div class="container-fluid">
                <!-- biodata navbar and search -->
                <div class="row row-dashboard">          
                    <div class="col-md-4 mt-1">
                        <div class="row">
                            <div class="fw-bolder fs-2">Wisuda Saya</div>
                        </div>
                        <div class="row">
                            <span class="text-muted">Biodata / Wisuda Saya</span>
                        </div>
                    </div>     
                    <div class="col-md-4 ms-auto">                                                
                            <div class="d-flex">   
                                <div class="col my-auto">
                                    <h4 class="text-end">Ferina Bayu Sukmadewi</h4>
                                </div>                             
                                <div class="col-3">
                                    <img class="img-thumbnail float-end" src="<?=base_url()?>assets/img/1731710161.png" alt="Foto" width="80%">
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="row row-dashboard">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="ms-1 text-info">Jadwal Wisuda Disetujui</h5>                                        
                                    </div>                                    
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <td width="30%">NIM</td>
                                                <td>:</td>
                                                <td>173171xxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Daftar</td>
                                                <td>:</td>
                                                <td>03 November 2020 10:25</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Pilihan</td>
                                                <td>:</td>
                                                <td>Daring / Online</td>
                                            </tr>
                                            <tr>
                                                <td>No hp</td>
                                                <td>:</td>
                                                <td>08665374482</td>
                                            </tr>
                                            <tr>
                                                <td>email</td>
                                                <td>:</td>
                                                <td>ferinaxxx@gmail.com</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col">
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <td width="30%">Jenis Terdaftar</td>
                                                <td>:</td>
                                                <td>Daring / Online</td>
                                            </tr>
                                            <tr>
                                                <td>Gelombang</td>
                                                <td>:</td>
                                                <td>1 / Sesi 2</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Wisuda</td>
                                                <td>:</td>
                                                <td>18 November 2020</td>
                                            </tr>                                            
                                        </table>
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                    </div>                                      
                </div>

                <div class="row row-dashboard2">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-info">Kelengkapan Wisuda</h5>
                                    </div>                                    
                                </div>                                                                
                                <div class="row mt-3">
                                    <div class="col-md-4 pe-4">                                        
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <td style="width: 40%;">Nama</td>                                                
                                                <td>Ferina Bayu Sukmadewi</td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>                                                
                                                <td>Wisudawan</td>
                                            </tr>
                                            <tr>
                                                <td>No Whatsapp Aktif</td>                                                
                                                <td>08xxxxxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Surat</td>                                                
                                                <td>10-xx-xxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Status Validasi</td>                                                
                                                <td>Disetujui</td>
                                            </tr>
                                            <tr>
                                                <td>Validator</td>                                                
                                                <td>Ayu Novelia D.P</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Validasi</td>                                                
                                                <td>10-xx-xxxx</td>
                                            </tr>
                                            <tr>
                                                <td>File Foto</td>                                                
                                                <td><img class="img-fluid" src="<?=base_url()?>assets/img/1731710161.png" alt="Foto" width="80%"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <td style="width: 40%;">Nama</td>                                                
                                                <td>Bapak xx</td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>                                                
                                                <td>Ayah Wisudawan</td>
                                            </tr>
                                            <tr>
                                                <td>No Whatsapp Aktif</td>                                                
                                                <td>08xxxxxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Surat</td>                                                
                                                <td>10-xx-xxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Status Validasi</td>                                                
                                                <td>Disetujui</td>
                                            </tr>
                                            <tr>
                                                <td>Validator</td>                                                
                                                <td>Ayu Novelia D.P</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Validasi</td>                                                
                                                <td>10-xx-xxxx</td>
                                            </tr>
                                            <tr>
                                                <td>File Foto</td>                                                
                                                <td><img class="img-fluid" src="<?=base_url()?>assets/img/1731710161.png" alt="Foto" width="80%"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4 ps-4">
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <td style="width: 40%;">Nama</td>                                                
                                                <td>Ibu xx</td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>                                                
                                                <td>Ayah Wisudawan</td>
                                            </tr>
                                            <tr>
                                                <td>No Whatsapp Aktif</td>                                                
                                                <td>08xxxxxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Surat</td>                                                
                                                <td>10-xx-xxxx</td>
                                            </tr>
                                            <tr>
                                                <td>Status Validasi</td>                                                
                                                <td>Disetujui</td>
                                            </tr>
                                            <tr>
                                                <td>Validator</td>                                                
                                                <td>Ayu Novelia D.P</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Validasi</td>                                                
                                                <td>10-xx-xxxx</td>
                                            </tr>
                                            <tr>
                                                <td>File Foto</td>                                                
                                                <td><img class="img-fluid" src="<?=base_url()?>assets/img/1731710161.png" alt="Foto" width="80%"></td>
                                            </tr>
                                        </table>
                                    </div>                                    
                                </div>                                          
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="row row-dashboard2">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="text-info">Pengumuman Wisuda</h5>
                                    </div>                                    
                                </div>                                                                
                                <div class="row mt-3">
                                    <div class="col-md-4 px-3">                                        
                                        I. PERSYARATAN MENDAFTAR WISUDA
                                        <ol type="a">
                                            <li>WAJIB mengisi kesediaan mengikuti wisuda secara</li>
                                            <li>Luring.Offline dengan izin orang tua</li>
                                            <li>WAJIB mematuhi peraturan wisuda</li>
                                            <li>WAJIB mengupload hasil RAPID TEST wisudawan, orang tua dan pengemudi</li>
                                            <li>WAJIB mengentry nomor whatsapp tetap (tidak boleh berubah) dan aktif bagi wisudawan dan orang tua</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-4 px-3">
                                        II. PERATURAN DALAM MENGIKUTI WISUDA
                                        <ol type="a">
                                            <li>WAJIB membawa hasil RAPID TEST (WISUDAWAN, ORANG TUA dan PENGEMUDI)</li>
                                            <li>Undangan orang tua berlaku untuk 2 orang</li>
                                            <li>Jumlah penumpang dalam satu kendaraan yang diizinkan masuk kampus POLINEMA maksimal 4 orang (termasuk pengemudi)</li>
                                            <li>Menerapkan standar protokol kesehatan Covid-19</li>
                                            <li>Menerapkan physical distancing</li>
                                            <li>Menerapkan social distancing (tidak membuat kerumunan)</li>
                                            <li>Pembatasan foto bersama dan segera meninggalkan area wisuda karena persiapan sesi berikutnya (foto untuk sesi I maksimal pukul 10.00 dan pukul 10.30 harus meninggalkan area wisuda)</li>
                                            <li>Menjaga kkebersihan GRAHA POLINEMA dan sekitarnya karena persiapan sesi berikutnya</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-4 px-3">
                                        III. PROSEDUR PENDAFTARAN WISUDA
                                        <ol type="a">
                                            <li>UPLOAD hasil RAPID TEST (WISUDAWAN, ORANG TUA dan PENGEMUDI)</li>
                                            <li>Tanggal diterbitkannya hasil RAPID TEST berlaku 14 hari sampai dengan hari pelaksanaan wisuda</li>
                                            <li>Penentuan tanggal wisuda diinformasikan setelah pendaftaran wisuda</li>
                                            <li>Tanggal wisuda yang telah ditentukan pada butir III.4 kemungkinan dapat berubah sesuai dengan hasil verifikasi RAPID TEST dan akan diinformasikan lebih lanjut</li>
                                            <li>Bagi wisudawan dan orang tua yang hasil verifikasi RAPID TEST dinyatakan NON REAKTIF akan menerima undangan melalui whatsapp</li>
                                            <li>Bagi wisudawan maupun orang tua yang hasil verifikasi RAPID TEST dinyatakan REAKTIF akan dihubungi oleh Panitia</li>
                                            <li>Apabila calon wisudawan belum mendaftar sampai bebas akhir waktu pendaftaran, maka tidak dapat mengikuti wisuda</li>
                                        </ol>
                                    </div>                                    
                                </div>                                          
                            </div>
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
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
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
        var mm = today.getMonth()+1
        var yyyy = today.getFullYear()
        if(dd<10){
            dd = '0'+dd
        }
        if(mm<10){
            mm = '0'+mm
        }
        today = yyyy+'-'+mm+'-'+dd        
        $("#tanggal_lahir").attr('max', today)        
    </script>
</body>

</html>