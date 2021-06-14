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
                                <div class="fw-bolder fs-2">Detail Jadwal Wisuda</div>
                            </div>
                            <div class="row">
                                <span class="text-muted">Jadwal Wisuda / Detail Jadwal Wisuda</span>
                            </div>
                        </div>
                    </div>
                    <!-- Jadwal Wisuda -->
                    <div class="row row-dashboard2 form-tabs">
                        <div class="col-12">
                            <div class="card">
                                <div class="modal-body">
                                    <nav>
                                        <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#update_pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Prodi D4</a>
                                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#update_pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Prodi D3</a>
                                            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#update_pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">Kuota Belum
                                                Ditentukan</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="update_pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-striped table-borderless table-alumni">
                                                        <thead>
                                                            <tr>
                                                                <td class="align-middle" style="width:34%">Program Studi</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Kuota Prodi</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Jumlah Login</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Sudah Mendaftar</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Jumlah Wisudawan</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Total Wisudawan</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Persen Wisudawan</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Status</td>
                                                                <td style="width: 10%"></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-bolder">
                                                            <tr>
                                                                <td>D4 Akuntansi Manajemen</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D4 Keuangan</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D4 Manajemen Pemasaran</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D4 Teknik Elektronika</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D4 Sistem Kelistrikan</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D4 Jaringan Telekomunikasi Digital</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D4 Teknik Otomotif Elektronik</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D4 Teknik Mesin Produksi dan Perawatan</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D4 Manajemen Rekayasa Konstruksi</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D4 Teknologi Kimia Industri</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-info">
                                                                <td>Total Prodi D4</td>
                                                                <td class="text-center">155</td>
                                                                <td class="text-center">155</td>
                                                                <td class="text-center">155</td>
                                                                <td class="text-center">136</td>
                                                                <td class="text-center">1111</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center" colspan="2"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane  fade" id="update_pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-striped table-borderless table-alumni">
                                                        <thead>
                                                            <tr>
                                                                <td class="align-middle" style="width:34%">Program Studi</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Kuota Prodi</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Jumlah Login</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Sudah Mendaftar</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Jumlah Wisudawan</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Total Wisudawan</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Persen Wisudawan</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Status</td>
                                                                <td style="width: 10%"></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-bolder">
                                                            <tr>
                                                                <td>D3 Akuntansi</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Administrasi Bisnis</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Bahasa Inggris</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Teknik Elektronika</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 teknik Listrik</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Teknik Telekomunikasi</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Manajemen Informatika</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Teknik Mesin</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Teknik Sipil</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Teknologi Jalan, Jembatan dan Bangunan Air</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Teknik Kimia</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">34</td>
                                                                <td class="text-center">33</td>
                                                                <td class="text-center">936</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center">Dibuka</td>
                                                                <td class="text-center">
                                                                    <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-info">
                                                                <td>Total Prodi D3</td>
                                                                <td class="text-center">155</td>
                                                                <td class="text-center">155</td>
                                                                <td class="text-center">155</td>
                                                                <td class="text-center">136</td>
                                                                <td class="text-center">1111</td>
                                                                <td class="text-center">100%</td>
                                                                <td class="text-center" colspan="2"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="update_pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table table-striped table-borderless table-alumni">
                                                        <thead>
                                                            <tr>
                                                                <td class="align-middle" style="width:34%">Program Studi</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Kuota Prodi</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Jumlah Login</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Sudah Mendaftar</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Jumlah Wisudawan</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Total Wisudawan</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Persen Wisudawan</td>
                                                                <td class="text-wrap align-middle text-center" style="width:8%">Status</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-bolder">
                                                            <tr>
                                                                <td>S2 Teknik Elektro</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr class="bg-warning">
                                                                <td colspan="9">PDD POLINEMA JEPARA</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2 Manajemen Informatika, K. Jepara</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2 Teknik Otomotif, K. Jepara</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr class="bg-warning">
                                                                <td colspan="9">PDD POLINEMA BOJONEGORO</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2 Manajemen Informatika, K. Bojonegoro</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2 Teknik Otomotif, K. Bojonegoro</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2 Akuntansi, K. Bojonegoro</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr class="bg-warning">
                                                                <td colspan="9">PDD POLINEMA PAMEKASAN</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2 Teknik Otomotif Elektronika, K. Pamekasan</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2 Akuntansi, K. Pamekasan</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr class="bg-warning">
                                                                <td colspan="9">PDD POLINEMA LUMAJANG</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2 Teknik Otomotif Elektronika, K. Lumajang</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D2 Teknik Sipil, K. Lumajang</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">36</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center">Dibuka</td>
                                                            </tr>
                                                            <tr class="bg-info">
                                                                <td>Total Keseluruhan</td>
                                                                <td class="text-center">belum ada</td>
                                                                <td class="text-center">155</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0</td>
                                                                <td class="text-center">0%</td>
                                                                <td class="text-center"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header grad">
                                    <!-- <h5 class="modal-title " id="exampleModalLabel">Modal title</h5> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <center><input type="text" class="form-control col-10 mt-4" id="search_wisudawan" placeholder="Nama atau NIM wisudawan"></center>
                                    <h4 class="text-center mt-4">Daftar Wisudawan</h4>
                                    <div class="row filter_data mt-4">
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-success py-1 px-2">Telah terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end">
                                                            <div class="lh-1"><small>Memilih Wisuda Offline</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="lh-1"><small>Terdaftar Wisuda Offline</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-danger mt-2">
                                                                <div class="col-3 pt-2"><span class="mdi mdi-school-outline"></span></div>
                                                                <div class="col-9 ps-">
                                                                    <div class="lh-1"><small>19-01-2021 09.00</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-success py-1 px-2">Telah terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end">
                                                            <div class="lh-1"><small>Memilih Wisuda Offline</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="lh-1"><small>Terdaftar Wisuda Offline</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-danger mt-2">
                                                                <div class="col-3 pt-2"><span class="mdi mdi-school-outline"></span></div>
                                                                <div class="col-9 ps-">
                                                                    <div class="lh-1"><small>19-01-2021 09.00</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-success py-1 px-2">Telah terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end">
                                                            <div class="lh-1"><small>Memilih Wisuda Offline</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="lh-1"><small>Terdaftar Wisuda Offline</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-danger mt-2">
                                                                <div class="col-3 pt-2"><span class="mdi mdi-school-outline"></span></div>
                                                                <div class="col-9 ps-">
                                                                    <div class="lh-1"><small>19-01-2021 09.00</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-success py-1 px-2">Telah terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end">
                                                            <div class="lh-1"><small>Memilih Wisuda Offline</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="lh-1"><small>Terdaftar Wisuda Offline</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-danger mt-2">
                                                                <div class="col-3 pt-2"><span class="mdi mdi-school-outline"></span></div>
                                                                <div class="col-9 ps-">
                                                                    <div class="lh-1"><small>19-01-2021 09.00</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-success py-1 px-2">Telah terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end">
                                                            <div class="lh-1"><small>Memilih Wisuda Offline</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="lh-1"><small>Terdaftar Wisuda Offline</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-danger mt-2">
                                                                <div class="col-3 pt-2"><span class="mdi mdi-school-outline"></span></div>
                                                                <div class="col-9 ps-">
                                                                    <div class="lh-1"><small>19-01-2021 09.00</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-success py-1 px-2">Telah terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end">
                                                            <div class="lh-1"><small>Memilih Wisuda Offline</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="lh-1"><small>Terdaftar Wisuda Offline</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-danger mt-2">
                                                                <div class="col-3 pt-2"><span class="mdi mdi-school-outline"></span></div>
                                                                <div class="col-9 ps-">
                                                                    <div class="lh-1"><small>19-01-2021 09.00</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-success py-1 px-2">Telah terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end">
                                                            <div class="lh-1"><small>Memilih Wisuda Offline</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="lh-1"><small>Terdaftar Wisuda Offline</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-danger mt-2">
                                                                <div class="col-3 pt-2"><span class="mdi mdi-school-outline"></span></div>
                                                                <div class="col-9 ps-">
                                                                    <div class="lh-1"><small>19-01-2021 09.00</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-success py-1 px-2">Telah terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end">
                                                            <div class="lh-1"><small>Memilih Wisuda Offline</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="lh-1"><small>Terdaftar Wisuda Offline</small></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-danger mt-2">
                                                                <div class="col-3 pt-2"><span class="mdi mdi-school-outline"></span></div>
                                                                <div class="col-9 ps-">
                                                                    <div class="lh-1"><small>19-01-2021 09.00</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr id="hr-modal">
                                    <div class="row filter_data">
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-danger py-1 px-2">Belum terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end">
                                                            <div class="lh-1"><small>Memilih Wisuda Online</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col text-warning">
                                                                    <div class="lh-1"><small>Menunggu verifikasi admin</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-lg-3 col-md-3 px-3 pt-3">
                                            <div class="card shadow-none" style="background-color: #F4FAFB;">
                                                <div class="card-body">
                                                    <div class="fw-bold lh-sm text-center">1731710000</div>
                                                    <div class="fw-bold lh-sm text-center">FERINA BAYU SUKMADEWI</div>
                                                    <div class="d-md-flex justify-content-md-center mb-3 mt-2">
                                                        <div class="badge bg-danger py-1 px-2">Belum terdaftar Wisuda</div>
                                                    </div>
                                                    <img class="img-fluid rounded mx-auto d-block" src="<?= base_url() ?>assets/img/1731710161.png" alt="Foto" style="width: 40%">
                                                    <div class="row mt-3">
                                                        <div class="col-6 text-end text-warning">
                                                            <div class="lh-1"><small>Belum Memilih Wisuda</small></div>
                                                        </div>
                                                        <div class="col-6" style="border-left: 1px solid #ababab;">
                                                            <div class="row">
                                                                <div class="col text-warning">
                                                                    <div class="lh-1"><small>Lakukan Pendaftaran Wisuda</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        $(".show-detail").click(function() {
            if (detailId == $(this).data('id')) {
                detailId = $(this).data('id')
                $("#detailwisuda").toggleClass("d-none")
                // do load data
            } else {
                detailId = $(this).data('id')
                $("#detailwisuda").removeClass("d-none")
                // do load data
            }
        })
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