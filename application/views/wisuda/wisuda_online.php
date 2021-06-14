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
                    <div class="col-md-8">
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
                                                <td width="40%">NIM</td>
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
                                                <td width="40%">Jenis Terdaftar</td>
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
                    <div class="col-md-4" style="height:100%">
                        <div class="card">
                            <div class="card-body pb-4">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="ms-1 text-info">Ruang Virtual</h5>                                        
                                    </div>                                    
                                </div>
                                <div class="row mt-2">                                    
                                    <div class="col">
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <td width="30%">Uri Zoom</td>
                                                <td>:</td>
                                                <td>https://zoom.us/j/csdhawdjoaiwdj=bsj</td>
                                            </tr>
                                            <tr>
                                                <td>Meeting ID</td>
                                                <td>:</td>
                                                <td>99033133875</td>
                                            </tr>
                                            <tr>
                                                <td>Passcode</td>
                                                <td>:</td>
                                                <td>polinema</td>
                                            </tr>
                                            <tr>
                                                <td>Name ID</td>
                                                <td>:</td>
                                                <td>TI_D3-MI_Nama</td>
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
                                    <div class="col-7">                                        
                                        KETENTUAN WISUDAWAN:
                                        <ol>
                                            <li>Terdaftar secara DARING/ONLINE pada laman alumni polinema.ac.id (SISFO AUMNI POLINEMA)</li>
                                            <li>Wajib mengisi survei bagi orang tua calon wisudawan dengan link aplikasi KJM</li>
                                            <li>Tepat pukul 06.30 mengikuti Room Zoom Meeting, akun dan ID Zoom http://alumni.polinema.ac.id (login SISFO ALUMNI POLINEMA)</li>
                                            <li>Menggunakan perangkat komputer/laptop, bukan gawai (handphone)</li>
                                            <li>
                                                Wajib mememakai TOGA dan atribut wisuda, dengan busana:<br>
                                                - Laki-laki: mengenakan kemeja putih lengan panjang dan berdasi hitam<br>
                                                - Perempuan: Mengenakan pakaian nasional                                                
                                            </li>
                                            <li>Wajib menggunakan virtual background yang telah ditentukan</li>
                                            <li>Menyediakan paket data yang cukup, komputer/laptop dalam okndisi menyalan/on sampai dengan berakhirnya prosesi wisuda</li>
                                            <li>Mempersiapkan pengambilan video pada Zoom Meeting sebaik mungkin (pencahayaan sudut kamera dan posisi)</li>
                                            <li>Diperbolehkan didampingi oleh kedua orang tua atau jika tidak memungkinkan boleh tanpa pendamping (orang tua)</li>
                                            <li>Wajib mengikuti prosesi wisuda dengan tertib dari awal hingga berakhirnya seluruh rangkaian acara</li>
                                            <li>Gladi Bersih akan dilaksanakan hari Rabu tanggal 02 Desember 2020 pukul 09.00-11.00 melalui link Zoom Meeting dan youtube live dengan mengklik link yang sudah dikirimkan paling lambar 30 menit sebelum dimulai</li>
                                        </ol>
                                    </div>
                                    <div class="ms-5 col">
                                    HAL-HAL YANG TIDAK DIPERBOLEHKAN PADA SAAT PROSESI WISUDA BERLANGSUNG :
                                        <ol>
                                            <li>Dilarang menggunakan atribut lain di luar atribut wisuda yang telah ditetapkan</li>
                                            <li>Dilarang dengan sengaja atau tidak sengaja menyalakan mic sehingga mengganggu jalannya prosesi wisuda</li>
                                            <li>Dilarang mematikan, menutup kamera, atau hal lain yang mengakibatkan tidak terlihatnya video peserta wisudawan</li>
                                            <li>Dilarang menggunakan editing, filter, atau apapun yang merubah wajah atau penampilan peserta wisudawan</li>
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