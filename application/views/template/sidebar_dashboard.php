<aside class="main-sidebar elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-3 pb-3 mb-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Alumni -->
                <?php if ($active < 6) { ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>mahasiswa/biodata" class=" list-group-item py-2 <?= ($active == 1) ? 'button-sidebar-active' : 'button-sidebar'; ?> nav-link" data-bs-placement="right" title="Biodata">
                            <i class="nav-icon far fa-user"></i>
                            <p>
                                Biodata
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="" class="list-group-item py-2   nav-link" data-bs-placement="right" title="Wisuda Saya">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>
                                Wisuda
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>mahasiswa/wisuda/pendaftaran"" class=" nav-link <?= ($active == 2) ? 'button-sidebar-active' : 'button-sidebar'; ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pendaftaran Wisuda</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url() ?>mahasiswa/wisuda/jadwal" class="nav-link <?= ($active == 3) ? 'button-sidebar-active' : 'button-sidebar'; ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jadwal Wisuda</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="<?= base_url() ?>mahasiswa/alumni" class="list-group-item py-2 <?= ($active == 4) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Alumni">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Alumni
                                <!-- <i class="fas fa-angle-left right"></i> -->
                            </p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?= base_url() ?>mahasiswa/pengaturan/password" class="list-group-item py-2 <?= ($active == 5) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Ubah Password">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Ubah Password
                                <!-- <i class="fas fa-angle-left right"></i> -->
                            </p>
                        </a>
                    </li>

                <?php } else { ?>

                    <!-- Admin -->

                    <li class="nav-item ">
                        <a href="<?= base_url() ?>admin/dashboard" class="list-group-item py-2 <?= ($active == 6) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Dashboard">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                                <!-- <i class="fas fa-angle-left right"></i> -->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="" class="list-group-item py-2 nav-link" data-bs-placement="right" title="Wisuda">
                            <i class="nav-icon fas fa-graduation-cap"></i>
                            <p>
                                Wisuda
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="<?= base_url() ?>admin/wisuda" class="list-group-item py-2 <?= ($active == 7) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Wisuda">
                                    <i class="nav-icon far fa-calendar-alt"></i>
                                    <p>
                                        Jadwal Wisuda
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="<?= base_url() ?>admin/wisuda/wisudawan" class="list-group-item py-2 <?= ($active == 8) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Wisuda">
                                    <i class="nav-icon fas fa-user-graduate"></i>
                                    <p>
                                        Wisudawan
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="<?= base_url() ?>admin/alumni" class="list-group-item py-2 <?= ($active == 9) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Alumni">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Alumni
                                <!-- <i class="fas fa-angle-left right"></i> -->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?= base_url() ?>admin/informasi" class="list-group-item py-2 <?= ($active == 10) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Informasi">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Informasi
                                <!-- <i class="fas fa-angle-left right"></i> -->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?= base_url() ?>admin/galeri" class="list-group-item py-2 <?= ($active == 11) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Ubah Password">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Galeri Foto
                                <!-- <i class="fas fa-angle-left right"></i> -->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?= base_url() ?>admin/pesan" class="list-group-item py-2 <?= ($active == 12) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Ubah Password">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Pesan 
                                <?php
                                $pesan = $this->pesan_model->count_unread_message();
                                if ($pesan > 0) {?>
                                <span class="badge badge-info">
                                    <?=$pesan?>
                                </span>
                                <?php } ?>
                                <!-- <i class="fas fa-angle-left right"></i> -->
                            </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="<?= base_url() ?>admin/pengaturan/password" class="list-group-item py-2 <?= ($active == 13) ? 'button-sidebar-active' : 'button-sidebar'; ?>  nav-link" data-bs-placement="right" title="Ubah Password">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Ubah Password
                                <!-- <i class="fas fa-angle-left right"></i> -->
                            </p>
                        </a>
                    </li>

                <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>