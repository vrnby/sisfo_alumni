-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 14.25
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_alumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin', '$2y$10$yN/ep8SWgQKpqFJzU24uPe2KM3ModxvI7Nu2b/J6DdSdDdtu2vnbO', 'Administrator', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `nim` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha') NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `facebook` varchar(128) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `telepon_rumah` varchar(16) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `kelurahan_desa` varchar(128) DEFAULT NULL,
  `rw` varchar(128) DEFAULT NULL,
  `rt` varchar(128) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(128) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `issharebiodata` tinyint(1) NOT NULL DEFAULT 1,
  `issharepekerjaan` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`nim`, `username`, `password`, `nama`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `email`, `facebook`, `linkedin`, `telepon_rumah`, `id_provinsi`, `id_kabupaten`, `kecamatan`, `kelurahan_desa`, `rw`, `rt`, `alamat`, `kode_pos`, `foto`, `issharebiodata`, `issharepekerjaan`) VALUES
(1631120122, '1631120122', '$2y$10$7G6TBjHyRA06eLhTzIb4HeXE5pA5XYmZN/hdCp8as/p5xUmZujAfi', 'VENTARIA JUNIAWANTI', 'Perempuan', 'Islam', 'Malang', '1998-06-07', '', 'ventariaj@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '04', '03', 'Jl. Majapahit No. 130', NULL, '1631120122.jpg', 1, 1),
(1631710077, '1631710077', '$2y$10$U4OR6/U8yEIkzpg3X2eque0odeEr.20ymK89ZwI.MsIZ59ZBJQa9C', 'AUDRIA HAFSHAH SALSABILA', 'Perempuan', 'Islam', 'Malang', '2021-06-10', '', '', '', NULL, NULL, 35, 3508, 'lowokwaru', 'JEPUN', '002', '001', 'Jl Kembang kertas', NULL, NULL, 1, 1),
(1631710087, '1631710087', '$2y$10$giochWy0fJstHBTa/8FksuKs1lPQCX8g44oj2wUFLaG.GnfL2xedC', 'MAHANANI NUR BUDIARTI', 'Perempuan', 'Islam', 'Malang', '1998-02-27', '', 'mahananinb@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '03', '02', 'Jl. Mangga No. 89', NULL, '1631710087.jpg', 1, 1),
(1731710014, '1731710014', '$2y$10$qn/D1i.7Rn/IWgqp7fdj5O/CD1M90WKyZabuoe980AKhN4vaX1P36', 'CHOIRUNNISA MAULANI', 'Perempuan', 'Islam', 'Malang', '1999-06-14', '', 'anismaulani06@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '09', '01', 'Perdin Pt. Semen Gresik Blok B-17', NULL, '1731710014.jpg', 1, 1),
(1731710037, '1731710037', '$2y$10$njEMWiKbmaND7OXMPicZcuNJfNmiT/.fmKfE3kFbGuZGaEWXd5YHe', 'BAWAZIR FADHIL MOHAMMAD', 'Laki-laki', 'Islam', 'jember', '2021-06-08', '', '', '', NULL, NULL, 35, 3509, 'lowokwaru', 'jatimulyo', '002', '08', 'jl i gusti ', NULL, NULL, 1, 1),
(1731710058, '1731710058', '$2y$10$onsQZ.xhW95iVA/dkQmdAON7HycLvr6dQ/eS.mW1bL9UN/ke85JJC', 'FEBRIANTHI INTAN NURZAMZIAH', 'Perempuan', 'Islam', 'kediri', '2021-06-14', '', '', '', NULL, NULL, 35, 3517, 'lowokwaru', 'jatimulyo', '04', '001', 'jl i gusti ', NULL, NULL, 1, 1),
(1731710064, '1731710064', '$2y$10$HrC7UHxIAzN/S7JODdU4k.mTubcla3q1S8voVLaNOv3AultBJlpqu', 'DEBY SILVIA AGNES', 'Perempuan', 'Islam', 'Malang', '2002-10-14', '', '', '', NULL, NULL, 35, 3507, 'lowokwaru', 'jatimulyo', '002', '001', 'JL pahlawan', NULL, NULL, 1, 1),
(1731710072, '1731710072', '$2y$10$hlQbV4ljiva.x3z2aHKyROAFWMIfJL0727TMpmDAmQRGkTZBOUXim', 'SILVA AISYA MAHARNIS', 'Perempuan', 'Islam', 'tulungagung', '2021-06-15', '', '', '', NULL, NULL, 35, 3514, 'lowokwaru', 'jatimulyo', '04', '08', 'jl i gusti ', NULL, NULL, 1, 1),
(1731710073, '1731710073', '$2y$10$LDBwqACwNiC/g15jFkItMeTvKTF5nGo8JAYsSnEX9Bw5BI8eXeK/m', 'RIZA FERDIYANITA', 'Perempuan', 'Islam', 'Malang', '1998-03-08', '', 'rizaferdiyanita202@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '02', '07', 'Dsn. Bulak Ds. Tirtobinangun', NULL, '1731710073.jpg', 1, 1),
(1731710084, '1731710084', '$2y$10$O5NFo9aR/CwIkoAbFixS3e.4QACrf7VYilJ3pqpKb6TkxLi5AM5Tq', 'Dhimas Bayu Ilham Ramadhan', 'Laki-laki', 'Islam', 'Malang', '1999-01-11', '082257752251', 'dhimasbayu.9f@gmail.com', '', NULL, NULL, 35, 3507, 'Dampit', 'Pamotan', '01', '02', 'Dukuh Pamotan', NULL, NULL, 1, 1),
(1731710095, '1731710095', '$2y$10$2McG8VQQkVlDc57WFw9j6uurRq7pfTwrhtrzZoqFoRDzhVajOCrie', 'BERLIANA FARAH DIBA', 'Perempuan', 'Islam', 'Malang', '1999-05-10', '', 'berlianafd@gmail.com', 'Farah Berliana', '', NULL, NULL, NULL, NULL, NULL, '01', '02', 'Jl. Dadap', NULL, '1731710095.jpg', 1, 1),
(1731710096, '1731710096', '$2y$10$pPBWfAVbqL3/ET5yjDC8K.4c0ZqYcF.F/ym3T6loPsMsttaFp/NrK', 'LUKMAN HAKIM SAPUTRA', 'Laki-laki', 'Islam', 'jember', '2021-06-09', '', '', '', NULL, NULL, 33, 3318, 'lowokwaru', 'JEPUN', '002', '08', 'JL pahlawan', NULL, NULL, 1, 1),
(1731710099, '1731710099', '$2y$10$pDtXGg2OJnIqyWjUH7Ds2uMO3tdTgPlvIx7StDQkA1R1hjV29S/xu', 'HAYAN AYU KHRISNA KHANDI', 'Perempuan', 'Islam', 'jember', '2021-06-09', '', '', '', NULL, NULL, 33, 3314, 'lowokwaru', 'JEPUN', '002', '001', 'jl i gusti ', NULL, NULL, 1, 1),
(1731710101, '1731710101', '$2y$10$2KSHUjUIMKUu4sRAJ1azp.ihey4LzMX1EbGsg96JpEiQ81WovJU9u', 'MUHAMMAD FIRMANSYAH RIFAI', 'Laki-laki', 'Islam', 'Malang', '2018-02-14', '', '', '', NULL, NULL, 35, 3516, 'lowokwaru', 'jatimulyo', '04', '08', 'jl i gusti ', NULL, NULL, 1, 1),
(1731710102, '1731710102', '$2y$10$i0Chv4tZ5VyVCu3UlJfme.LF7/Ua2HOlZ0XyzH0TiH4Q2wSDsSYO2', 'RAMDANING PURI PRADANI', 'Perempuan', 'Islam', 'Malang', '2021-06-08', '', '', '', NULL, NULL, 35, 3512, 'lowokwaru', 'jatimulyo', '002', '001', 'JL pahlawan', NULL, NULL, 1, 1),
(1731710118, '1731710118', '$2y$10$3VoM7AL6k5mJQSAV4lM7i.fTGOT4dHuUeOyrF4XRGMwhwQMyqUuYe', 'KRESNIAWATI', 'Perempuan', 'Islam', 'tulungagung', '2021-06-02', '', '', '', NULL, NULL, 33, 3313, 'lowokwaru', 'JEPUN', '04', '001', 'jl i gusti ', NULL, NULL, 1, 1),
(1731710122, '1731710122', '$2y$10$koheLxzGWthmtEMzI9PL4.b4A/IlNO26crTyt9JzcLZz5YiN6ShO.', 'FARA MAULIDIA NURIANDANI', 'Perempuan', 'Islam', 'Malang', '1999-06-22', '', 'faramaulidia79@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '02', '05', 'Jl. Bunga Kumis Kucing No. 7', NULL, '1731710122.jpg', 1, 1),
(1731710129, '1731710129', '$2y$10$l/tCAJ7naeUSeWbMuQgGM.FAq3g/VfaQAyq1AcGxzLU/nx8dSEdv6', 'ISTIANA AYU WIDYANINGRUM', 'Perempuan', 'Islam', 'Blitar', '2003-02-14', '', '', '', NULL, NULL, 35, 3507, 'lowokwaru', 'jatimulyo', '002', '001', 'Jl Kembang kertas', NULL, NULL, 1, 1),
(1731710130, '1731710130', '$2y$10$3d8HrUzyPqbSrnoMIktddOR23k/t4BUNd.bTLPTegISIsZTWdW.lm', 'MEGA MADURATNA JUWITA', 'Laki-laki', 'Islam', 'madura', '2001-02-14', '', '', '', NULL, NULL, 35, 3529, 'ss', 'JEPUN', '002', '001', 'jl', NULL, NULL, 1, 1),
(1731710132, '1731710132', '$2y$10$hmElKiy/wdY1e/rTFgXFl.0OO3zMlZQHq0Mlkw0EOznqvGohTdzD.', 'ELSA VIRA NINDI APRILIA', 'Perempuan', 'Islam', 'kediri', '2021-06-01', '', '', '', NULL, NULL, 33, 3316, 'lowokwaru', 'jatimulyo', '002', '001', 'JL pahlawan', NULL, NULL, 1, 1),
(1731710134, '1731710134', '$2y$10$yCCgyMZOsDicEO93pc5.DOVFeoS39DwsW3X0q4TAZYz7JxsLDL.Oi', 'SELA FITRIA DEWI', 'Perempuan', 'Islam', 'Malang', '1999-01-28', '', 'fdewi1091@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '06', '03', 'Jl. Patimura Gg.III No. 6', NULL, '1731710134.jpg', 1, 1),
(1731710145, '1731710145', '$2y$10$v2iD4OqZsnVOl/saD3TwHOWTYN4MgWVfIDgkpqH9Y5yBAcboDMo4a', 'ILMIYATUS SA\'DIAH', 'Perempuan', 'Islam', 'Blitar', '2021-06-08', '', '', '', NULL, NULL, 35, 3505, 'lowokwaru', 'jatimulyo', '04', '001', 'JL pahlawan', NULL, NULL, 1, 1),
(1731710152, '1731710152', '$2y$10$B.MybwxWWpmU9fIeFBulouk5yDsd4ryLlSOmtiqrIKEX7LKKMHwcK', 'FARHAN AFFANDI', 'Laki-laki', 'Islam', 'Malang', '1998-04-17', '', 'farhanaffandi04@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, '01', '10', 'Jl. Akordion No. 179', NULL, '1731710152.jpg', 1, 1),
(1731710161, '1731710161', '$2y$10$DDeY.wNXoyK5/KZUSSi5GOEGjmmdqOmqRasvHR3NlLMDSI33MxOgy', 'Ferina Bayu Sukmadewi', 'Perempuan', 'Islam', 'tulungagung', '1998-01-27', '', '', '', NULL, NULL, 35, 3507, 'tulungagung', 'JEPUN', '002', '001', 'JL pahlawan', NULL, NULL, 1, 1),
(1732510006, '1732510006', '$2y$10$/scaB1bJirPv3jJKhPz3Ou0KJyduJ5KIzj/oSgj3yLAlrzVFJArpe', 'Abdillah Hammam Nur Fahmi', 'Laki-laki', 'Islam', 'kediri', '2021-06-02', '', '', '', NULL, NULL, 64, 6403, 'lowokwaru', 'jatimulyo', '4', '7', 'jl mawar', NULL, NULL, 1, 1),
(1732510024, '1732510024', '$2y$10$jBPP3MAb1CFFbBzXI2pV.e.24TAz.MOqudejQPDO6jRQ/LD1q9jA2', 'Agmania Caesa Indah Karina Halizah', 'Perempuan', 'Islam', 'tulungagung', '2021-06-07', '', '', '', NULL, NULL, 32, 3213, 'lowokwaru', 'jatimulyo', '002', '08', 'jl i gusti ', NULL, NULL, 1, 1),
(1732510025, '1732510025', '$2y$10$N0ksnw9VcsHiZk1tASdRgehPFB2CRnY1PKTJx9SC0QmB0797Ly.mC', 'Agatta Cindy Hillary', 'Perempuan', 'Kristen', 'kediri', '2021-06-02', '', '', '', NULL, NULL, 81, 8104, 'lowokwaru', 'JEPUN', '4', '08', 'Jl Kembang kertas', NULL, NULL, 1, 1),
(1732510065, '1732510065', '$2y$10$zEUik98AaXlz37Y4IQeWT.9jAqu4CfkxPlPki.fUBwdvCIdK97gxW', 'Aditya Julian Brilianzah', 'Laki-laki', 'Islam', 'Malang', '2021-06-01', '', '', '', NULL, NULL, 32, 3211, 'lowokwaru', 'jatimulyo', '002', '001', 'JL pahlawan', NULL, NULL, 1, 1),
(1732510066, '1732510066', '$2y$10$i6DNoIsZQQq/69bFZbcKk.OaMzsStOjRLwFh3NDcnQ3QuFBPTRUgC', 'Afifah', 'Perempuan', 'Islam', 'kediri', '2021-06-01', '', '', '', NULL, NULL, 32, 3212, 'lowokwaru', 'jatimulyo', '002', '08', 'jl i gusti ', NULL, NULL, 1, 1),
(1732510087, '1732510087', '$2y$10$yoM97BfkgKlrlM/EalWqTeYfViScl0FtAS.kIZN1VBdY.oCkdtMAe', 'Ahmad Nor Aziz', 'Laki-laki', 'Islam', 'kediri', '2021-06-01', '', '', '', NULL, NULL, 33, 3309, 'lowokwaru', 'JEPUN', '04', '08', 'JL pahlawan', NULL, NULL, 1, 1),
(1732510092, '1732510092', '$2y$10$ADa8q9CGGq/vA5N44SYRje29bC6vTgktm52KkweyvLdDz8q8HAdd.', 'Aditya Firmansyah Hermawan', 'Laki-laki', 'Islam', 'tulungagung', '2021-06-02', '', '', '', NULL, NULL, 33, 3315, 'lowokwaru', 'JEPUN', '04', '08', 'jl i gusti ', NULL, NULL, 1, 1),
(1732510107, '1732510107', '$2y$10$k4QkSI3pw4xfd4Xbu7ro7./E/WbIy16YMr.2Imr0UfICIIerUJMRC', 'Aina Anggraeni', 'Perempuan', 'Islam', 'Malang', '2021-06-08', '', '', '', NULL, NULL, 32, 3206, 'lowokwaru', 'jatimulyo', '002', '001', 'jl i gusti ', NULL, NULL, 1, 1),
(1732510108, '1732510108', '$2y$10$muhazExPkOqk6WNiUleqS.3WTXZzsNrqa4aHJLDAVFCk9tfZhw62u', 'Aina Nurvita Fahmi', 'Perempuan', 'Islam', 'tulungagung', '2021-06-02', '', '', '', NULL, NULL, 31, 3101, 'lowokwaru', 'jatimulyo', '002', '08', 'JL pahlawan', NULL, NULL, 1, 1),
(1732510146, '1732510146', '$2y$10$ZIrk6x6NVZrxEtfVy5iP3O59Qx..bD/ceq2IAcdMqkogRy/9fEmES', 'Agatha Dinda Ayu Tristi', 'Perempuan', 'Kristen', 'kediri', '2021-06-01', '', '', '', NULL, NULL, 32, 3213, 'lowokwaru', 'JEPUN', '002', '08', 'JL pahlawan', NULL, NULL, 1, 1),
(1732510147, '1732510147', '$2y$10$HwrPHo.IAacoyEDJmqnjFu7K3jR2ewibD9Quh0sbu0gRewfp4AplO', 'Adelia Carissa Putri', 'Perempuan', 'Islam', 'jember', '2021-06-01', '', '', '', NULL, NULL, 33, 3311, 'lowokwaru', 'jatimulyo', '002', '001', 'jl i gusti ', NULL, NULL, 1, 1),
(1732510166, '1732510166', '$2y$10$V5zQlLnNR9nNlq1Ff7tkQeS2a2CfGeAJglWAtIhCSIYcCdA3eqDcS', 'Ahmad Muzakky', 'Laki-laki', 'Islam', 'Blitar', '2021-06-03', '', '', '', NULL, NULL, 75, 7502, 'lowokwaru', 'jatimulyo', '04', '08', 'Tulungagung', NULL, NULL, 1, 1),
(1732510167, '1732510167', '$2y$10$NUcx6NpeOmDGGmLqQI3zceExD2U5.pHn1hoXoQZSOLRZLyKOvooEm', 'Adinda Fauziah Seihanaretha', 'Perempuan', 'Islam', 'Malang', '2021-06-02', '', '', '', NULL, NULL, 63, 6305, 'lowokwaru', 'jatimulyo', '002', '001', 'Jl Kembang kertas', NULL, NULL, 1, 1),
(1931710083, '1931710083', '$2y$10$1tDlMTAxY7agTly4llpReeXX/ZkEMR/DLiu6V8QW0Y9yJOX8z/Vd.', 'Yoga Meleniawan Pamungkas', 'Laki-laki', 'Islam', 'Malang', '2000-06-27', '', 'yogameleniawan@gmail.com', '', NULL, NULL, 35, 3507, 'Dampit', 'Pamotan', '01', '02', 'Dukuh Pamotan', NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_has_jadwal_wisuda`
--

CREATE TABLE `alumni_has_jadwal_wisuda` (
  `id` int(11) NOT NULL,
  `nim_alumni` int(11) NOT NULL,
  `id_jadwal_wisuda` int(11) DEFAULT NULL,
  `id_kuota_wisuda` int(11) DEFAULT NULL,
  `memilih` enum('Online','Offline','','') NOT NULL,
  `terdaftar` enum('Online','Offline','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni_has_jadwal_wisuda`
--

INSERT INTO `alumni_has_jadwal_wisuda` (`id`, `nim_alumni`, `id_jadwal_wisuda`, `id_kuota_wisuda`, `memilih`, `terdaftar`) VALUES
(1, 1731710084, NULL, NULL, 'Offline', NULL),
(6, 1731710161, NULL, NULL, 'Online', NULL),
(7, 1731710014, NULL, NULL, 'Offline', NULL),
(8, 1731710073, NULL, NULL, 'Offline', NULL),
(9, 1731710037, NULL, NULL, 'Offline', NULL),
(10, 1731710058, NULL, NULL, 'Offline', NULL),
(11, 1731710064, NULL, NULL, 'Offline', NULL),
(12, 1731710072, NULL, NULL, 'Offline', NULL),
(13, 1731710095, NULL, NULL, 'Offline', NULL),
(14, 1731710096, NULL, NULL, 'Offline', NULL),
(15, 1731710099, NULL, NULL, 'Offline', NULL),
(16, 1731710101, NULL, NULL, 'Offline', NULL),
(17, 1731710102, NULL, NULL, 'Offline', NULL),
(18, 1731710118, NULL, NULL, 'Offline', NULL),
(19, 1731710122, NULL, NULL, 'Offline', NULL),
(20, 1731710129, NULL, NULL, 'Offline', NULL),
(21, 1731710130, NULL, NULL, 'Online', NULL),
(22, 1731710132, NULL, NULL, 'Online', NULL),
(23, 1731710134, NULL, NULL, 'Online', NULL),
(24, 1731710145, NULL, NULL, 'Offline', NULL),
(25, 1731710152, NULL, NULL, 'Offline', NULL),
(26, 1732510006, NULL, NULL, 'Offline', NULL),
(27, 1732510024, NULL, NULL, 'Online', NULL),
(28, 1732510025, NULL, NULL, 'Offline', NULL),
(29, 1732510065, NULL, NULL, 'Offline', NULL),
(30, 1732510066, NULL, NULL, 'Offline', NULL),
(31, 1732510087, NULL, NULL, 'Online', NULL),
(32, 1732510092, NULL, NULL, 'Offline', NULL),
(33, 1732510146, NULL, NULL, 'Online', NULL),
(34, 1732510147, NULL, NULL, 'Offline', NULL),
(35, 1732510166, NULL, NULL, 'Online', NULL),
(36, 1732510167, NULL, NULL, 'Offline', NULL),
(37, 1931710083, NULL, NULL, 'Offline', NULL),
(38, 1732510107, NULL, NULL, 'Online', NULL),
(39, 1732510108, NULL, NULL, 'Offline', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_akademik`
--

CREATE TABLE `biodata_akademik` (
  `id` int(11) NOT NULL,
  `nim_alumni` int(11) NOT NULL,
  `id_program_studi` int(11) NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `tanggal_lulus` date NOT NULL,
  `ipk` double NOT NULL,
  `no_transkrip` varchar(128) NOT NULL,
  `no_ijazah` varchar(128) NOT NULL,
  `judul_ta` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata_akademik`
--

INSERT INTO `biodata_akademik` (`id`, `nim_alumni`, `id_program_studi`, `tahun_masuk`, `tanggal_lulus`, `ipk`, `no_transkrip`, `no_ijazah`, `judul_ta`) VALUES
(5, 1631120122, 23, 2017, '0000-00-00', 0, '', '', 'Sistem Informasi dan Pembayaran Elektronik Bank Sampah Berbasis Android menggunakan QR Code di Politeknik Negeri Malang'),
(6, 1631710087, 2, 2017, '2021-04-15', 0, '', '', 'Sistem Informasi Prioritas dan Analisis Biaya Rekonstruksi Jalan di Wilayah VIII Jawa Timur (Bina Marga)'),
(7, 1731710014, 25, 2017, '2021-04-22', 0, '', '', 'Studi Perencanaan Penyulang NewGumul 20 kV dengan Pengalihan Beban Gardu Induk Banaran Kediri pada PT. PLN (Persero) ULP Kediri'),
(8, 1731710073, 25, 2017, '2021-04-22', 0, '', '', 'Sistem Informasi 4'),
(9, 1731710095, 25, 2017, '0000-00-00', 0, '', '', 'Sistem Informasi 5'),
(10, 1731710122, 25, 2017, '0000-00-00', 0, '', '', 'Sistem Informasi 6'),
(11, 1731710134, 25, 2017, '0000-00-00', 0, '', '', 'Sistem Informasi 7'),
(12, 1731710152, 25, 2017, '0000-00-00', 0, '', '', 'Sistem Informasi 8'),
(14, 1731710084, 25, 2017, '0000-00-00', 0, '', '', ''),
(16, 1931710083, 25, 2019, '0000-00-00', 0, '', '', ''),
(17, 1731710161, 25, 2017, '0000-00-00', 0, '', '', ''),
(18, 1731710130, 25, 2017, '0000-00-00', 0, '', '', ''),
(19, 1731710064, 25, 2017, '0000-00-00', 0, '', '', ''),
(20, 1731710129, 25, 2017, '0000-00-00', 0, '', '', ''),
(21, 1731710058, 25, 2017, '0000-00-00', 0, '', '', ''),
(22, 1731710072, 25, 2017, '0000-00-00', 0, '', '', ''),
(23, 1731710102, 25, 2017, '0000-00-00', 0, '', '', ''),
(24, 1731710101, 25, 2017, '0000-00-00', 0, '', '', ''),
(25, 1631710077, 25, 2017, '0000-00-00', 0, '', '', ''),
(26, 1731710096, 25, 2021, '0000-00-00', 0, '', '', ''),
(27, 1731710132, 25, 2021, '0000-00-00', 0, '', '', ''),
(28, 1731710037, 25, 2017, '0000-00-00', 0, '', '', ''),
(29, 1731710145, 25, 2017, '0000-00-00', 0, '', '', ''),
(30, 1731710099, 25, 2017, '0000-00-00', 0, '', '', ''),
(31, 1731710118, 25, 2017, '0000-00-00', 0, '', '', ''),
(32, 1732510006, 19, 2017, '0000-00-00', 0, '', '', ''),
(33, 1732510147, 19, 2017, '0000-00-00', 0, '', '', ''),
(34, 1732510167, 19, 2017, '0000-00-00', 0, '', '', ''),
(35, 1732510092, 19, 2017, '0000-00-00', 0, '', '', ''),
(36, 1732510065, 19, 2017, '0000-00-00', 0, '', '', ''),
(37, 1732510066, 19, 2017, '0000-00-00', 0, '', '', ''),
(38, 1732510146, 19, 2017, '0000-00-00', 0, '', '', ''),
(39, 1732510025, 19, 2017, '0000-00-00', 0, '', '', ''),
(40, 1732510024, 19, 2017, '0000-00-00', 0, '', '', ''),
(41, 1732510166, 19, 2017, '0000-00-00', 0, '', '', ''),
(42, 1732510087, 19, 2017, '0000-00-00', 0, '', '', ''),
(43, 1732510107, 19, 2017, '0000-00-00', 0, '', '', ''),
(44, 1732510108, 19, 2017, '0000-00-00', 0, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `tgl`, `foto`) VALUES
(1, 'Direktur dan Pudir Ketika Wisuda', '2019-11-13', '2021-06-13-17-49-29-1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `rangkuman` varchar(160) NOT NULL,
  `foto` text NOT NULL,
  `file` text NOT NULL,
  `id_tipe_informasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `tanggal`, `isi`, `rangkuman`, `foto`, `file`, `id_tipe_informasi`) VALUES
(11, 'PENUNDAAN PELAKSANAAN WISUDA  POLITEKNIK NEGERI MALANG', '2021-06-13', '<p><!--(figmeta)eyJmaWxlS2V5IjoiSDROdWF4Z2hvdWVHZjlzaGxhaDN2dyIsInBhc3RlSUQiOjIzMTgwNDczMiwiZGF0YVR5cGUiOiJzY2VuZSJ9Cg==(/figmeta)--><!--(figma)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(/figma)-->Berdasarkan Surat Edaran Wali Kota Malang Nomor 30 Tahun 2020 tanggal 10 Desember 2020 tentang Pelaksanaan Wisuda dalam Tatanan Normal Baru dan Produktif dan Aman Covid-19 bagi Perguruan Tinggi Negeri dan Swasta serta Pengumuman kami Nomor 250/PENG/2020 tanggal 26 Oktober 2020 tentang Pelaksanaan Wisuda, sehubungan sampai saat ini belum memungkinkan untuk melaksanakan wisuda secara offline, maka kami sampaikan kepada seluruh calon Wisudawan/Wisudawati bahwa Wisuda Politeknik Negeri Malang yang akan diselenggarakan pada tanggal 18-19 Januari 2021 pelaksanaannya DITUNDA sampai ada pemberitahuan lebih lanjut.</p>', 'Berdasarkan Surat Edaran Wali Kota Malang Nomor 30 Tahun 2020 tanggal 10 Desember 2020 tentang Pelaksanaan Wisuda dalam Tatan ...', '2021-06-13-17-57-56-1.png', '', 1);
INSERT INTO `informasi` (`id`, `judul`, `tanggal`, `isi`, `rangkuman`, `foto`, `file`, `id_tipe_informasi`) VALUES
(12, 'PENUNDAAN PELAKSANAAN WISUDA TAHAP 2 POLITEKNIK NEGERI MALANG', '2021-06-13', '<p><!--(figmeta)eyJmaWxlS2V5IjoiSDROdWF4Z2hvdWVHZjlzaGxhaDN2dyIsInBhc3RlSUQiOjIzMTgwNDczMiwiZGF0YVR5cGUiOiJzY2VuZSJ9Cg==(/figmeta)--><!--(figma)ZmlnLWtpd2kEAAAA4iIAALV7e5gryVVfVUuax527d9/r9WKMMcYYY2Bf3l0bY9ySWqO+I6l7u1sz9y7Gco/UM9N7NZKslubeWYwxG8chjjHGwOIY4xjHAWMIGDCvxIBxCJAEzNsYY17GEJIQQl6EEELy+1X1S3fu8vEP9/uu6tSpU6dOnTrn1KmqnqdkN0qS8DAKTmeREDdfdOzewA9MLxD413Oa1qDRNnvblo+q7PuWV6obitrqNQFXfHu7Z3YAVf3gcscCUFPAwLfIa03RKs4Df8d2B57VcUz2XO85gd26PPDbTr/THPTdbc9ssv9GCg6aTo/1zazuWS3P8ttAnfMbVs8aAO22B4/2Le8ykFtlpGe5HSLPN+1WC+VNjY5t9YJB3cPoDdOnbBfMa3GC6VwCLEgszeEQagHKs8zmwOkpFkJV9jw7oDSyNx1F7lGYRCBroCmwOBsQdZ1dBcq9eDKKJ4feckyantN7zPIcNAinqdrJQev9DjRaQImm0+h3IR9A2TB7u6YPyNj2nL4LoNLyzC7pqnXH6Vhmb+C4lmcGttMDsrZrNQLHA7RGPaNc79iK7YbV6diuT3DTAxEWUK3QOc/a7ndMb+A6ncvbiskWhuo1rSYUV9CdD6xLFOkmv2M3iLjgX+7WHa72zXYPg/UU9hY/sBs7VNWtftt0rcGeHbQHad/bGk6vB55KwNv9o3AW7cWLoyC6ttA62PAf7ZuehVZRiCubttl1lIUZgWcrgWAiqFbyatPZo+TVG0lec03P7HRgazCH7sCzt9sUZm0V3bFaxK7Xx9Fk1MWqQELX9P1B0AbTbVoafMHrKvuWTdPbsTii0e13AlvbV4WqhibrfY9N1YbTcfJarcNxVZ81H7aiILU46NF0mtsW6hu6S1bdhBV5HZO8z/lOKxgoHqhttU2vmdeUXVuepVfgJutSo9P3tT1caPeJu9k3g35uJLeoUQDc2ul37Z7j2wGHuM0N40m6EOu+07GpcQHlNJW3aFGBkTmKpdIHrBMgUVA6rQm4So4DUbp+VbtrqpnV4CEXbQBr9jEijz8Mx5FWOkKHZwUNpe+WzenJlt1RgwS2Ws+KdXAQDVNBqzYsykPgMGECaBRNz3GLqmw5sG8sYK85qHf6lMuom42dVVSFFthQbrzmwD5sHcVE34VroZQdZ08BECHQMvgwhM6gYbp0zmpRG7Qcr6Fcv0amzWg4nYeLeDpBn8zBMTKWFeoELDFde8cqjMzoLY/3o3l/Ei8S9PFMTkO49iWr4wOQkAihjXoxGtNJspiXFg2LCbxguxJXdk3GMwNjpCqt+A1TTaDaAsfmQPeopRVFveYv5tMrkTmODyfokDMT8HJbBWXp9IMUNDRxI5xh+Gx+mIpabZl7s2F6nrOnTIiTqOiq9Wjf7iBmwg2BrKZmMuBypxrM3DtHpcJdnMaUrYswrESrW7sWechsaKM+nY6jcOLMokz91X5Pmz8mgm4+IgRg6ffrgWcq2LikvEJZg5p+ezqPn5hOFuEY3dMAUdIuLEX5n3Gxj6jXspWERe/daL6IYdjEOS6aSl3rThA4XUBGd7pMosZynkzn8P+m1TIRUNAgGp7jw45tD7C0Lls0bCw+agZ2XzWUa2IqCDANGBDqVVcFlRqKht0BtNZlmGKX9V14zHTejedzjpObolIvSqkAeC+iitXbDmgrRjNMjrRTGg0EY6BEYUlSOa42vKrb2wZKXHQtltLfZWG4Te62FevabDpfXG+sFewFCIfIBFKLFBliz26q8WWGaFuZojvh6XS52J7HI82kqu23pNhCQEObc6Xo44aLRTSfoAlUtqtMEfFNxTmplm25mHpREj8B1rmKlDhKM7kcModg/6fjyI/SSUH1nu+k0SOwTK6wbMA69FojZUGC0msw2lYCq+s6nqnSlWrGBlpaRLmKzgRhgDILoRg6HF7R65ML20b4egxqUxJI7B7YjRWsqZVdgvyM2rSuNFFjuoQQ85S29rS0uaYrZj9gToNZoPvFZbKID05RfdqertmwBnBZnVNVVDdfa11FIiCRQ/n2Y9YgcOD8at4rCBgJFsXuukhGUGMLaBgRJzB0+LvWYC3TC/zE8rAuA6azqMu+p7TCvQBlpdFxVK5RtTn1sMTivNMbwPoVmTBbYDMI7K6FEIi67DrIhwdqnoaGdUMFvdrcvQFXdQM2JJLVdE3lL2ugcjEvGmIWPTeanknv2UTbjnU563YO1V1HZ15bwTycJHEh4z0IzUh3ggEiGYJ0us2Lpu3DgnYtgLKFpBmlgewN2XPLc/KMp1JCZRGtWsLp2FUrYfLgteb2/bbGpczWC0zGa6NAaVabBSLndI4Js8alnLYKTMbpfIHSnG4qEDmnC1pQLAOIMmY3ryAzfresYDXLW1dwOdfb1EgpNmV6exmX8byjjNQs7yyjco53wY3txoBtqD0DGQRORWYP3q2OFncjR3SQUxSYZ1phgpOEXvENHKQa/brdQIMg66wikc+Vqga3XJ2OoQetPW+qkm4FU9N9V3BrOnrl9XV/OJ+Ox814rv0MfFLD/RtiDyat4oTuCydd0MWiERx/EaHduuQivmq/b4AD92NVk9t9BEBpJDiJYTDA60KOp9hUFQh/H2M7k9W52BTyED/GPn4qIX6qesdD52uoyVP8GB5QoC4QV/FTOcJPVXHyF9MZOgwJi10hZ1PtZSAwuuFiHl8Tcu343ntRl8f33ofCOL73fhSV4/uIrB7fR2Tt+D4i19xwjlhuT0YR+hmHy3gkghLTrSzXQ+NJOF5G6COXKu+7RxgtaKkXHkdCVg7C43h8CnqZcJsAYIDJIhnO49kCtQppd8N5HKLL8jiax8NWfLicQ7XYGNIji4Al2Gqblk6nqY7lgNUwq139WTiEna30dZF7OFjPdGuTgVlPs/wbMGhxcTnBMgckdzhcKhh7NCxMrW+5dyOcJbCvogtcQuX9EsUgqxiuhRycoleAGOQ1Znc4yhOsAYXJbgNcK/F3M72XxUL2h18kgdi4ASh5fKVkLE5OZcOmlfVL5JMq5raicKEU/IfSRdqPJtG431UkqRRGw/WJr1AalEpAlLX0AmDNt3tMj9Ydr9lDuWG2PLZvNnsqPpzr9bsUaQunPBPleWxCnNJNTV1eaOvyZpwkWN5imipvvLWhy9u8hipv93X9Dm9XnUPvpGOivMvfU9cnz2j4eyzvxuIQ/8xGo0u57/H15v4ZbVtdkDwr3WM/0/F6lO/ZVArKz8KWw6V8TjNQB5TPbnVMzuO53W2Pe+bn+LA1lM9DIsrxP7eFhArl89u6/Ly2HvcFga5//qO6fKGryy9gco3yRZ1WnfUvdFxVfpEXqPKLXd3/XnenRz3d10H4QHk/Ssr5gBd0WH8QJesvNuveLsqHzPou6w+jpNyP7Go+L9mFQChfWu/scX2+BCXpXoaSdF9q7rQ5j5c3LqpDw5c1WsoRXtFwVd1s9D3S1bH7st5AcGPZbGn+VgunS5QtlPej3Eb5AMo2huV4Nkryv9jW88Fo25Sn03Yu0m6QVKl8qGdjb0fpXHQffgSle9F9hHwevei+5F6U3kX33gdR+p2LXfYLOk6D9H1sNFyX3a7V5AF8DyXluNTd6RJ/uddRuc5jvf5OgPLLkaBQrlei9FF+xS4UjvJVrh8QP0BJ/Ku9HY/10HPbLPe9fp3rPvSRpKEcBVqOKOiptPgAy8T1O9zF1QTKo13dHu/qeT++u6Ps5cquF3goxyjvR3ns+4i8QkxQsj5F+QDKGcoHUb4G5YtRzlE+hDJB+TDKBUrqaYnyJShPfB8xW4irKMnvGkryO0VJfk+gJL+vREl+r0VJfl+Fkvxeh5L8vhol+b1e+v79ZPg1srGrJHySAFn+PQLk+QYCZPr3CZDrGwmQ7T8gQL5fS4CM/yEBcn4TACXqPyJAzm8mQM5fR4Cc30KAnL+eADm/lQA5fwMBcn4bAXL+RgLk/E0AlMzfTICcnyJAzt9CgJzfToCc/zEBcn4HAXL+VgLk/E4C5PxtBMj5XQAeIOd/QoCc302AnL+dADm/hwA5/1MC5PxeAuT8zwiQ83cQIOfvJEDO7wPwIDl/FwFyfj8Bcv5uAuT8PQTI+Z8TIOfvJUDO30eAnD9AgJy/nwA5/wCAF5PzDxIg5w8SIOcfIkDOP0yAnH+EADn/KAFy/jEC5PwvCJDzvyRAzh8C8BA5/zgBcv4JAuT8kwTI+cMEyPmnCJDzRwiQ878iQM4/TYCc/zUBcv4ZAA+T888SIOefI0DO/4YAOf9bAuT87wiQ888TIOdfIEDOHyVAzr9IgJx/CcAj5PzLBMj5VwiQ868SIOdfI0DOv06AnD9GgJx/gwA5f5wAOf8mAXL+BAAVon6LADl/kgA5/zYBcv4dAuT8uwTI+fcIkPPvEyDnTxEg5z8gQM6fltffNSC1WmC7FvcLmaVYBnPKbjibMcmRxsF8esy0bDHFr1EfT/eFlPuniygRFakvOYRRwR3/EesTZmTIv0bhIlS068i+4jHOjA0mjebocZx+hdxYcGykc8lROJpeTQAaR/HhEY7UR0jvkDCOokUYjwFVI4icMJdA4niCI3eESwrAa4voWF1e6ab1k3gfp74h4Q11UauHTZ9uhHHu73bIIRKjeYi5bYrN/Tl5TjAyaueUMMK4Ven5FiGHVASyZ2PKRHLBPLtyEifxPpIqKaoo0vv1C6KWIOFOxCvlGnhPkoPp/Fi8SqzHSulPiA0FBEdIkieU/AmxGU6Aw8nBZgsQt2gE0jpknViadXEr6uUL5dvEufkU5wyQQJKthA0Azh8o9TUobLpqrxU3zTiXlmoRrxMXouPp43EDXFzcN0KJ6/JmJohdKLIJAxBG7Up0KkZCHgDbiSdRO6JmwN4gphkfRuBbQQaPmk4rZ6LKyp4mrCFZxb2TZnZ+eBQydY7mCUxM5jXV0W5yeCMh7JxEc1xnRUEIZcJVZGWs7rjUFcolqBg32WNIk2AzkbXD8ensKMEuItdG+W10gj1ErutuuxgQKOhug6Lls3tSys2DcDzex+1MCw2JGMlzR1jlOZhfqU+vYYA3SrmFGqA/lvJ8u9QojOo+LpJGiXgMp5r5GFPKjkCVo4wOGV4ND1mpvMJYh13qJP2SkFfj0YJnM4NtlwFUCOQqrrJmJkMcsVBbP4jnyaKR6QyTqcHOyvW1bSpCGGvD6fFxCMFS/y0OZJeE1i+kglsfYMpKoxjqLPNwdJK6xloz16owjDmOmJiylAUnQ59ElU6Nyomq9KLF1en8SibCBJYfjjHYSI2YCXJ2oRm7cI2JaUgqMxGBlP7p8f50nLJPVAXjBogECs6YJGRg4HxJN/PpBi3MBq4KxWZss7BoGGqh5Aw4ZBI4C8EJtqMJgwPmqceS0zJn2cTZ74SeebxcUF7lkJrSWKVEJTU4w4dOMWklqBcdRDgwQ6nG5kE8jnbgW/CDRDWqGRlpz3aIaIxzL1XgQsRU7AQJjaxmsbs2jhG+5qecWzD1l/s8L++DjAhxImkHs+kE5qMHWl9ODsa8IZ6ApsxxI076WVMEZxebWupG1r8bJrAKPdXKMMNqrnK23B/HyRGYcVxKG0yDKDzuFNJxEOP6QSo29jCamINJU3f+grM2KtO0TlbOgX8VkkLrKTEXCxF4RYRV7d+Y7+79fyvO6urFLy1I1kWz1g9zcGO1F9xBSRBe1V5wcJBECxh2ZR6O4iU3jmqxKdRQ5JvCWjKbR+EIFOsBdwXlm/bkYAo7Unw7Qo6W2hBBZLgI71M2NKOTeJi9SGSXUjy1qMcR2cA5Up2sDYXDPRXvM1Cv6I5etkvA2tPOjcbeQGUq8rpBENxYQXoK+0w9FlJjivYIeo8PYkQJGCh6aZ7vw87nQFeIuG4abgIywIsvJFF3DwK3hdnVoiSctxisZReMFVymYR4ZZTWt5sS1FJHR4w2o11cntvVUgDri+eGcsdkuLrsxSj5r3oUPcN+MGwfcBOJKMH3sk2cY6DnkPXEitZuD7HX5LLkJg0IMpTUZxn6OVlw+AFUWqEZmOL0QCYrSoaLCjb65iwsRdecjcHeaPo9Lf0/dwhgs+YmJIsBrp7pE1a8TFrKe+cJHsgNnTBBkkuXBAa704KQqZ1AD3Ctw/QeT19njQlSSk0N6dg/BDJZaRRXZIy31R2G3qDnLBTcibuNoR1CBTrFXOhPc2EmxDorWdD6El/HdEpHiSgL0xjKJzP1kOl4uojrnS+RmKuDudjqCMOzWoGdZ6c2o2dkzL/sAZEft23zSwiwWFPtBIUN+wGIgRuZuVZksj304JJSXCOyzqRMi6Us01qfpYgc7XCLszNPa+jDV/caM0QjvZQ+JzW1EWixaJR1E5qzyPd1F0MCqXo2L7102BALAyl6LByZsawEl5k2ftho+7qLAtaDn7BBjpJ+LVKxWS7/SVnGJ4niEaul73ZqOwYpfaePQ+6aOe9k+k+4W2V5DAqwDZsZ1xZwSYtIueIUtLgrRp9iH0svrenQEi4R+wE8ZFxcEU8Cr1WCvbcFp2nanOXBaeNdkM+4h8UChv9iR5nyYjxnicXhyaE4OoShk7Yh/paoR4x1r7mWhsqJDbgcZE/ou5zHkkaM4mY3DU2WYWziR6KqyQ0jrjpeHcbpRV2aqAr2hmz4GocMVPS1XtXnROFxOhke6Q3WmkLrDMfJ8eAdAeIZaTYCVOGlG4wiZOOys2phCXOYS3ZCHCaxOtrbpyyDjGQojDVppDANUzcJULedhTUYzptuQO0pBZh8QJsBumq0NAu6xHuyXYOh5ZwBwtLHLXrCGErn2D3QDiaalqnxAbMf9vt1s4gUcTzSIHsrUcNWWofT3bXKlazfWwmGYBEhy+RhiWOEZOTXWDf4PI8MwVqfu7Gl/hr2b6exlmg10pydRutVNx6MdtUJIwmCsrdwQVS6GXHSCNTGezPxPpYNBeAgne/HsCAm1WBOGAjTyoRmMP3uMeLWolKqa4OEFvfKcUBubRj0yCZVt1Vhq1EuK6LKWgrrhpUgNrihrWNeQRn9JcQjcSEHd8DL0zLf8zbyiG790iJi4AHBOARr58oTx6RKOcCg16ssQpvNj4/m8ohtfMYLfIyrB0SdiU95UqmoCM1TP/ZwcxL5Q1HRzvdiNrAkTWk7u5jNITdw4RmRH+y0sNaoZqXAOKyhvCLeexWpyiz3txNHbCShvW0FoolYxvKO1CcXefgapibdxLClHkTvKdU3SLh1y7sxg3WTDQsLDeTg7opFgNTbFXdehNOHFHJu9HG2KZ1yP06Q7DHs2vGKuzh8gvHsVo8k6xzFWqROjAMkzUaQ13dxN4OJXovQIvSnuKdc1SW8BBw2Q2lzB2CD5jHJdkzhH+cc9WAywUBv+s8SzboTXXVzUMJCJK5WJeLb4zFJVEzyqMY1wJp4jnp1XdKOn6+rTpeeKzypqutmniIpXOxdAPF885wZo3SHIW3azD41eID77DFIT94lvIBqIu8RzM1g37bJaOsPeLT5nFaPJ9vav/6LqeeJ51+M06aWTdOxCgVDs557FavLLB/F47LKeiNdL+fyiqtsfAzVUpVGk+LwyQtN8OX0kvRrYFy8oarr5lbTtHlwblzWfn8G66SvUZLntvUGKF2YV3faqSB1oElxVyy9IYd0yQPwdIY9Q31PBpsSLxIuuQ2nCV2t/97Os84el/MJVlKYLObKpQlACHxSPiC9axWiyfWzxU536Jbholl9cqmuKob5g4CTwKiDuLaq6fZRwJ8Juui7uS0HdEBVhpJFmgPdfh9KEB1yg7Wh6HC3mp7jJlg+UEZrmUC9RhiTVg6soTXcE/08/Ynq5iPOKbnxc1dMIAi++Uq5rkrFCueGI2RNIjst1TTLhzojAry4ypllFt80SlVhRO3geEa8pqrp9fsBLjC4CcTNOVLhHYE7OIDXxYq4XatpC3JICl6h5VROc6IWvQ0Kt1Kw/qK8qwRvAItgpBxZ1cU0hL+Jykh9UNcVpolNYJWWR9b5DiifiRGNdfd1AtuD6lYDyDuU7jdeO9G2NbuGEeYD/qjL5rs6esf+/jh6TvqI3kAJOJx2eyThBjPHVK60Q/9piGSJXLSher+5HUxLMeTiPGCyQ75SpvqZM1YYtwIsQLcokT5ZJnDnWGEFP4n2thPbH2Oej0WPRfIqmN5Sbeun3CfrbiAO8wp1tTK1LHOFq82xrC1sIRReP48Gu1Iwgn4gxrltLODfLPSd4yqPZYQofkvJNErEvvdVgJgdPDPCyN8NVgbpg8LEhFgnvm4uGwmyUL8I9v04iACKdCcdMIzDbt2RXctid9SIqJl+f3qE1I6g+nnFkrOpbJe8qkUZi253OOtEBVq/ID+BL37BC4DGaXkfxtoKiPl0spsc34PKN19PciNE3FURFS8wsY4bEEKkGJvfN19ME2HxWSZ6ituhimGECW0TECbET0L++RWrbhv3quzH4L3SnLP+dEq+cIE1XRSXg75V48CxwARZAdOBpBapZ3EF9q4zC/NusHvhBzzgrFh9JuXgHHSqh/ePpdMHbQHR7t4wnRzArvjiMfR2LsVzvytC+CphFw3uyhgA+VqC/M0NbKrwUDe/LG9TWVTR8V9bAfaNAvz9Dl+Rp8asoioH2H5NxkjdBp9+Gum7MMN8uE0JKDx+WeNhV1VW7+0m5zC46oYZyUHqvxIkSi5L54D7egdETmnT0oeoSLtxg4GlY+u50SX2OUVrOn5Z4AC41FYHyIxIvwnGyGiO/V0ZKb1SqmeD2hQDw3wdKf3qARAhSpayA/gDQvemkPxthy05ZfH8qJkwO9jFU1GgVHt6UhwUOuwGm8IMSl04wxKN4PIJYzfgEoYG3hR8sGZeLgBfNT/CORb4Y4ofIaIJVRKNSbxupRIHi56xb4kdo/zpapPeU75e4p0oUk/zm4mckMgcVOSAW+gYgFxfxWl0MH8THEdIK2OiHypTdEBX8Vx714xKVrKXkDD8hRxE2rImq4/yCBUOSgg4fLt3v6dwNO4P8KXlDo6vnpDC8j8gwvTn5OYnXcKhrde/qqCRoN7WMGixggqkeKgnU7D4o8WQ+PVGSZHFZNXyPhDrSBt6BLMA4I8Ba/WzWVohjF5OG6UCgMxRmccv5AxLP8GpPSGXbwmv8AvbVx+p2VqRex/O8vnbhjPBEL38eb9KHiHYjZ+IELf3BWSLm8hdy/MHBSsNHSyvoH02X45F/jM3EVE+ktNNflAkTCp1evAI3J6paHCzSvAmL+Mu6CcKplL1o+BXdsKfe5lriV3VV59qo/5pSB6KKuqwIxK9n7x9YXV4lfCyrq4DzG7DgNByTfEt8HM7VwFu9+M2MLhrtpgraEp9IFcSFyi+rPirlb4ENxIddzv3ljL6chimGJpP7JSMvE4hPanHTNAsOyUm1xG8XDJKUw9Mw+B2Zv12Kv5Tid+WV6DSYx4eH8OC/kOL3IL9P19+GJcxA//uFR5YMJxF/KuWn5MkULmqdYPbuEd7WqZ8/gLXgtrj/NBHy01p+d44VnZ/m8v/hClotr423/AQp4x/ppnTGpaZXiH+fNjEQpV0hNj+J/WPdkq66p9Z2U/yHFazezIH+j5KmznSNeXU9wgQQfRAzMVE8T/4n3UuNoob3o/EBcts/SZOSDlSZwCvkfyZhqjkX2zhM73SXl5VI9Kj8T0v5p5K+00FuqJb+j6T4L3g6PfMy+ZQUf8YN4Lq/Ljwv/ivXmRGTmxo8A9Ys/luBsxBsgPnvBQbCpXvbJ6T4HwVe9UbSh2P+/yyw6K9xf65Hp5OnnrEp/lfuGeiMC+l3SfkXhXEAB0+bHLq4D1hgJPG/V8nxPvduKf9SolUlfNZkedzCgQx6h9GJ/yPhw/CMxqo7/VUhWwMGjl1A8U/gpvL/ZmH0Bg+2b5fir4uuVGB+2flxKf6fHF93W/lJ5Pi4staikUMm2qeQ1hvL5Oxbx5OGnZKXZ4Inow6vRmXWWOZlYPET+GUEO0KMl9DL01oL7k9nKRJq0HfeidiSBueS249RHQNEJAK3/eUYJhtgKWDQApNhSqlMqhOdRGOQqK8Pekv1wTYeUzSniVaYYYwBqt5/gjvgG/Q26sUAeAr0mpanb4H7vaIi7V4T73iA8KQ26OgPSCudjDUu6zum+lsTkfbJaGTOJcMUz6JKlzruYMb6shhCYS3/TApDNyRwA7l6p5/3txStsRYXfAKgkTFgnjlqJTWA+vKGUmZQuRKVg2X1BvGvVuxgRQ6ylstiKpbCuKkg68H/sYSYVIELQIps3SgwZSlWcvVqQVMMWJLihvsoX/noG2hXbNp8NMswOhXbgG8wLeBedV1SsXk2OTlXDHgm89vS8raw47EdV9nnYXrzUBMgB9CZ8U25kuAYpVhiVCZwa0gEf09KaXjxNoLXnHRVmjppFLUd63LdMT3aJAx0p+fs4WGLf5iBFy31yiwv1Z1LeCO2ABuu/yCKir9nB432wFWft1d3irU2+NbEz6jwCimxTAqbjvXnsJY2hNZbqmHoL4XUeRlrauzG0VVux7DcYTg5CROeDbIw8piQM6TSY6jsBHTQlaHqzYi65NV4RXfa1tyq6m8tyUr/ueULhdTtimlnOlRrAl0aJTS2K72u/Kbpses5Nsbx8IqQ/FxmHdIojaO/r9bGzTQsjQlmD/o0Fc8XzQi0MpDLaXMRUn2FASgdQR5NF8lsukirRnI1nKVwtmp5Zx2KalNdS6n+JgazzGTswl/TtmrarY7IOcN15sIe4cZA1KDrBA6L7BvxDbo09uG4Pm50Ij4XYrh09ES80UC4zc26OAsLo+V4e6lxeRae8H1akcQdgwqWLnrvq4wBZ32MsIaXMD3Y1+LheRJdzSvGGRmblLECKJsNMJhLnLQ1pT3pRVevmwImNcqFe5OBaLMigMs3NFg3P7u3Tf1nScKsO54GZcPpdu1AV4zVrjvR6QH3VPjgTHF5CyYAnR9CAN56GAtEnGQRHs9QSd+X02wPXfZXZ5Up1sbecg3GZiSKPjclPOTqsfXJFHaAi7BFplQtkHgzBDiL9qEHXMO8FRrVTFMhEvE2Q1bKQlaVhePoUvhKDTwWXUyIb8Tco3F43hJyl7G9Gy1CCAOjzLIJnHvD8Ri2BJI+4hw6QwBh3LnyF145MRbHSMNXZZjeelURhQ8jHWVr9HsVH/4KUflYufdf4wkyyZwWCejGdB8DnWA+Yl1ujiKGnZ7meQ7LDktQTozDqCG39Pwzx02Qp0i8K666WSLeYMibMNQc0m6JC0qhGU1qaLC6m1fw7g1cDd0DccsiI8nYN6kxeM+tM9SKFcUBwJC3DUvafsoQt5+s6PntBl75wskejtM07Dt9TA85Et7hHl1GuIbHU3W6OfTSgITrMxzkYE5ENNRqJDk7Q+6PoT2Vc6WGhtVpqOjpRXoSINILogN3AGuZq6QQuUbihlATV1EugPeiY2QIGLybgI8BfeB5CnhVrSwAUaPrKqpiWerzaTgaQolwhlXzWBXg3bBb1Vm8xxCVTDnGPdQ2nFKW+xpQpwIqk2K+ONXJKgRNrTER7zBkTc1cXJNrCc4s4Ti1mPVwiLNOIqpiI+G5wI/UUxJaNrN6wGFfKs5l9QYyb8xGoV8mttRrPkSoifMKTPWKDVxVce5k3ADDC3pgNzwdQw9A3JysrGYMQd9pyFtKE8kX7l2GuPUAnHZxcMLUMd/bFHcbK4LlhwueOstFEo8iazIcw9qRX6hIJcXtitCFCuGlgbgDB3LkRLClMXx+3J+Mpj7Pc+I7DHmXQnlRCfWM/WzREvFeQ94NB9O+7EevWUY4J6YJ9Lp4phqnjg1ieORPlzj0tiCwnvo9zfjgoHG0ZEawWZofHFjqSLqWf/DSQzMWEPFBbcxK6KqG05Wp6ZqdKNeDSjGbtSG5J6a6GMXsgyPMkygMsY4tLaaisGrtGM46Hx6dYgi5MTuL26So2RoZ1QmkyYRFq/YfWBGkTWeUiPchqLJa5zCkqv5/zkkAAO29d5hVxdIu3nutYZNzBsMgSRRJIgb2XhsVM3AwHMzKKAx5CDJGxCHMDEEUUUExAGICURERVJhxRBQki4gggqCCiqgYCAb0977vWnssvt+9z/3uvd7nu3/c8zxaxX67q6urq6urqxeeWMxzvqt0eOm47bHKE2Nttk+IzXy4yoXtu+Vm3d6n7+Dc3hdkn3lL34FZfU+99TZX09V6o6yr7TIyYs55LiNWpvPgm3MH9c4Z7uKxcvc458q7aq6GczEnsa6Ry/DKdM/q0zuz7d8tKpHgfyJVY+xQk3y7kWtWr07/wx9uoyBPgk6goItyhvcelpM1MPNfOQPvyDw3K+fWrFtc3P3Pi70vBgUfL7+8OWXHoGTlMuf0HtYr65asYQOycjIvzx2WNTzzvF5Zw/CHK7MG9su8ZPDwrMyuWQOzcvpkdhs8aPCwzFPbZF6R1Tc3J7Ndm3ZtMocD6APF2rbJ7Nz7lt6Dbuo9LAJgG2CZ3XsPzBpwS1ZOFiX2uyW3V1ZmL4gbBCHA8WO3wcMGQcA5WcNygeRkdh82uFfugOH9svWnswfhX+cOvrVfr1Panpl5U1affpA4rE/usFz8fkU/DN4vs1vvPr2H9VPzy2/LugUK39J7GP7dvXdOn9xBuZQwIGsQ2kn/dqe1ad39vG4XtA7VhI7Uv12HzH8NGD74P6F+S0jvm3tTbk4f/HRL1qAhWf1AYLZ+Of0yb+o9MHdQ5qDegwAP6JdDm+bmDM8dgJ8iOfzpNgmCnJth6MzB2dkD++X0bpk5CGCoaSiWTQf0HpKlpgMx5b6ZN2cNHJxW5LasnNZpbjiGzup7W1YEZXYfPLDf8N4DcvoNSFunK4yO+dzBf2GcnMxe/SAUFuoDHfhnjcM50xxtz6C5L87Kyc1CX1ikbeaQ9AyycnLuyMrsfNEV/+7W+exI1Ux2HqLl7zcc3gF5A3vf1K9vJgbtnzu8FfZA2bS7VhznXJ1C5/qGfjsxNvldue6EWOY1lV0V+W/tMc61qT8KvzZwDd0x7tjYce54l+k3ck1dM/iwd3d29p67O3f+lP+ws89/YVvGXHN3IjrvjLW4LPemfgNcl359+g534k8J+ZNi5/xDLl/5n3H5yv+Yy1f+B1weMv6j+v9LLl/5n3T5yleq//+ey1f+Z1y+cqjq/9DlM9J+XqZSzI15/birvHHulnp+v9ovXZBBDy2Lf1Ur4+JnItaPva7q4964P4bV8/HjTgOfGR8GOP+lsud7434DPBaIgYfF5yGgEy8Ou+djPIPPi8V3s0HBFr+hN65nAg28owTsjsWnemGDK71xGdCvwLmWpsFUL/5h1OBBb9yfGAIN7BAfevH7cZawwfpwhmjwtGlwvx9fyQaF+0aVKW1gdVjpx3+OGjT2xnloAKtVMQ1+9uPPZ4QNzg4loIFV8vmM+I6owY3eWFfwNBtcbBrsyIjvznDxL3B8e1oL3xFtA/OPjPfo5mIxb7Q7Y5JFYvGR3SfVxXHujXGTB1rEi9993DW9XMwH0mujRfz4yOUHTnSxDChxw9kWyYiPfCSnhouVAfLpFIuUid/9ybpDYZ952y0Sj/p4Xr57uK5FykYaxIHE2lmkXPzuE+b/RGn5rksPi5SPpJUFUvEei1SIjxxRq5WLlQPy2QsWqRi/+8S25VysPJBzPrRIpfjIyctOc7EKXoGbfZRFK8dHZuafTK0L8rbXsUiVSOsMICsaW6RqpFtFIIdOt0i1+N0LnxhM3QryZpxnkeqRbpWgwaVXW6RGfOTMBq25PgV5EwdbpGbp+hTkTc23SK1IA2jtDj5qkdp/a+12PmuROlGfspCWWmKRuqUWLcib84FF6kVaV4a0J760SP34yOLhD3KcwpKPjrJog2icKl5hXpmKFmkYH7FuzRoXq+oVuourWuSY+IizFq6kBoUuv6ZFjo00qIZxrj/WIsfFR/bNbuZi1b3CTq83t8jx8ZGtFhzL9Sl07Y/yt8xofaC1K3emRRpFWkODktPPtcgJkQY1MJ9qXS3SOD7ypOvul7SSL661SJNIGm1QM9siTSMboI+7qr9FmkV9ykJa4XCLNI/WpyaQpUfthRPjIzff3kJauxUTLNIi0roW+sx4yCInxUd2Ou0G2a3k8VkWOTmyW21IO22eRVrGR54x/m316fTFUoucEvXxMNO7VlikVeSJ0K1kxlqLtI50q4M+t39skTbxkXd+gzWtCw0GfG6RtvGR1/XqKGmdMr+3SLtIWj2Mc/shi5waH3lMa+iW4Y3LPOEoH20f2bo+4vNZZSxyWnzkfdNg6wreuJ2bK1ikQxQpynrj8npXs8jp0fqUgzR3VAw5I9KtgaczM/3zmfGRl71+HKeJMH6FRc6KptnAG+OG9LZIx9I+Y917ZS2SiPqUA3J0n2Q0fEVv7NyVL1gkKN0IY+f2/dwiqcg0CLw9fq5vkU7RNGsCWXG+Rc6O3JDI/mEWOSdCEOB71J9hkXOjcaoA2bLCIp2jLYIA32PvFoucF82noZc/d/URi5wfv/uySdNonYLN5atY5IJS6xT0GN7UIhdG0o4B0qm1RS6KjyyZcQ2P2YLNhy60yMXRMVsGfRZdb5FLooMRfXr0H2KRLlGf2pB2Yr5Fukbb6lj0yX/WIt2i0E9pk5da5F+RNIT+zd0+sEj30g1X0GPadotcGs20AcJ4uf0WuazUqwpLnvEscnlktwbYitceZdErTJ8/6lnk31EfbFK3oIlFekQaICTXufsUi1wZeWIMyKXtLXJVNFMExB7zA4tcHXkipPV46yKLXBNJQ3jt8WB3i1wb+Ruk1XnnGotcF0lDeK1zuLdFro+8F/Pp4Q21yA3RfI7zCueedadFbuSanq35zC1bYJGe0XxwKOzNnmyRrMjjoXX/Fx6yyE2R1nGv8KRtT1rk5ih1KoNxfnrOIr0iT4S0uV1esUjvSBps0H/EEotkRzZAn/6vvGeRPlEfICft2mCRvhECaXurbbNIv0ga7Lb3vD0W6R/ZrTLC+PE/WGRAlFAgOcir96dFBkbJAdLxkhYxiwyKZopgXbK5jEVyomDt4xrRu6JFBkc7i4fC19UsMiSaTxjGLTI00tr3eHc5P/3zsFJRo938nha5JRJVxRvjrrjcIsNLl3qMe3yaRXKjPrURxrsca5Fb6VJvU7Gxrvgpi9wWKVbPG5vTdLdFbi89+/IXldS2yB3ROBWBZAYWubN08+QvGnK1Re6K+uBQWNR6tEVGREvNPv7LFrnb9Fn2sUVGRn0QqK67xLPIPdF8ankFi3bXtEherDRtKVj02SkWGgUoykEKOlQ710KjY1FMROztcH53C41BL1kVmfKip4ZaaCwgqV4FvbwCC+XHovWD7h0m3mehAowl5Z1XMKXpTAsVQqDubRirxq+vW2gcII0F5adctdZC4yFQyuPWMuW+Tyw0Ab3k31Cjxvv7LTQRvaSG7xUuahuz0L3oFTlsYYfTK1loEiCpgc18MLuOhe4DFC1X4cHHGlno/vRYCIMHRzWz0GT0UhxEYthhSDsLPYBemheyyQ4bz7DQFPTSUkL5W/sftZQPApLyFTDW4G4WegiQrIEo2WHSUY77MMZSmMRRcev6myw0FZDcHRHn1tn9LDQNq6yQczygHYMs9Ah6bZk9RNbocN5wCz0KSNaA8r1q3G2h6dBQysPyX9YdZ6HHAKUt//QFUyz0OKC05Z8e8YSFnkiPlekVblz+jIWeRK91a7rQ5wsvy1xgoRmAIp8vnLJumYVmAkqrcdmfayw0C1BajctO3WKhp9JqNPIK89wuC81Gr53/6qpVLun5nYWeBqRVPgG9Zh+y0DOApEZVb9zMb5yFnk0vCmJ6ZlnfQs+hl8zbGFn7+HIWeh4aygFQUOq0opKF5gBS0tgE0ORqFpoLgW22N+GUeRZY6AX00pSP1WFQnP59HrpIh9LToBR6EZAmVdOLjoNS6CVASjGqIrb/EbPQy+n5Muxvamyh+WkdjkP6ftcQC70Cgdp3MUBfrLPQAkBKQFCh2fx9NQu9CoHaksjgN998koUWopc0rADo3h4Weg2Q9h0FxsZYaFFaIHsNouuWQovTvXBkbP78fQu9DkiGwpmxedZPFnoDUOSEBXvfrGqhNzGWrFHPK+jxZSMLLUEvHYNVAVU83UJL0+ZFPaTHqJSFitBLY9UE9O2/LVQMSNYAtPmvARZ6Kw1xrFqjLVSSHgvK95gwwUJvp5XHkddp4VGGWgaBOvJwCej00mILvQNISwk1SgausdByQFKDvUZ9bqF3AakXzpqS1CELvQc1tF4IhjvP8iy04m/lC3fmxi20Er2kPCLe5gpHedT7GCvaDoU9qjW00CpA0SoX1unU1EKrAcnyGKtObhsLrUmPVd4rrFDhLAutRS+V95oCmniehdYBeiRnitS4+IwrLLReUA3mlYUV+t5goQ0YS4klTo0Ky/pY6ANAOjUgsMLUHAttTAuE8qvevd1CH6KXlMdYJdeMttAmQBorBmjhRAt9BIHRehW6WlMttBm9tF7Q0L38uIU+BpTW0I2ZbaEtEJjWsGTBixbail7SEEd5ySMLLPQJekUhpbCkd7GFtgGShlhK9+5KC30KSEuJa5X77UMLbQckF8VR3injMwvtAKTggMMrr9FeC30GSIcXepWs/81COwFFvcblHfQstAuQemXgQOla0UKfA5I1woqOhb4AJOVL438p9GXaUHGPjwgN07/vxu86aBj/rzrBQnsgTQPVRvw/sb2FvgIk9Rj/C4630Nd/7zuW5y30DcaSDrUAPbvDQnshUEGjupfvLmhsoW8B6ditDej5rhbaB0hqsFfWZAt9B0i9EOTdsjct9D3UkBOiUuMu/9BCPwCShig55P1ezUL7IVD1g2aoRqSaWehHQDp2UcZxf3a00E+AVFtoDmjFZRb6GWM1yNhM1y1wZ/Sy0C/oJddF2T2v1ggLHQCkujsCb94DUyx0EJBseCKgifMsdAjQhkOXh2p0eddCh9NqYMruhs0W+hW9NGXMK2/Wtxb6DZDmxTpLQcxCvwOKehWWNK9koT8AqRc2stte10JHoIYsj8hQUu9kC/0JKB0ZSva1tdBfECgXxUbOOyZhoTwv2gvYyHmXXmChUYC0kQGVXHuZhUanIYzlsq+30BhAGguFkJKH+1horFd6vSrs9MkAC+V70bxgqE5j7rFQAQTKUC0wVtMJFioE9PXvUAMCXfuHLTQuLfAkQNuft9B49Jr342Xc44V5Q1+z0AT00janeV8tttBEQDIvM97Co3zjXgjUJjoWY2VusNAkQDooEV3zmm6z0H2AFF0R/0vG7rbQ/Rgr2nqFbs63FpoMSPOCodxlf1noAQiUoeoiT/41w0JTAMmjGiAYbqpgoQcBpXv1bFrNQg8BUq8wTlro4bQaFRUnr0z/jhfa0Eoxb5RztG0pNA3SNN+y3hjXvqaFHgEkJ6wIqMlyCz2aFohatltQz0LT0UueVhZQm/4WegyQBNYEtOUdCz0OSK7LsFa7ioWewFia1HGAXmxkoSfRS6EmBmhXdwvNAKR5odbtbrjTQjPTDo9k2A2ZaKFZ6CXl+WzaeqGFnoIacsIygCZtsdBsQEonKPDAEQs9nRZYFgHqmqPM+wwgWQMFCre8hYWeBaRegPIaBxZ6Lg1R4Bhu/1LoeUASWA7Qd30tNAcayoZ4VOzx/DALzUWvqAhYsHn6ZAu9AEPpNETlfXO1Ry00DwI1ZdRJNi9/wUIvQqASAzyu9vjrbQu9BEj7DvPqUeEoG74MSPM6GQL77bPQfKjRueduzatHzgELvQI1NC9oOPcr7rtSaAEgaYg9vrlreQu9irHkG/WR8b541KIsBBS9RRVu3nOchV4DpHkhntTJOMlCiwBpXug1tfxpFloMSL0Q5Dc362Sh1wFpvRDJN197iYXeAKTtgEheJ7uHhd4EJENR4MM9LbQEkAQiQG1eNcBCS2GNyFCFeWWHWqgIkAyFsfKyjtopxRCosZAZdnpgrIXeAqTspSV6pR62UAmgtPIlF8200NuAJBBXnrw75lpoGVZZzgbl8xa+ZKF3oGFa+ZN+fNVCywGllT/pkiILvZseC9DeO1dY6L00hANl75QPLLQCAhXZoMbe7KNcdCUgqQHlp87ebqH308pjUabu2GWhVRhLi8JeNb+z0Op0L4w1tduPFlqTHgvO1mniQQuthUA5WwxHw0pnoXWA5NhVcDQcLmOh9RhLQQ91+04NylloA3rJRZHJ73y+soU+AKRVLj1rSqGNaQ1r66x5MP37h+kuMW+M+7KChTYBknrMybfMt9BHgNSrAo6GHddbaDMgqccDZeUiC30MSLZFCcWdwUmVQlsAyQkZybPaW2grNFckrwqo/9UW+gRW0oqgGOJ69LfQNgjUWBR40jQLfZoWyPifu8RC29FLnkaB7b+00A5AEoiw5sYepfxnECjbIrpOL6hpoZ3oFVmjoMHbLSy0C5AEVgT0WcpCn0OgvBoCGxR2tdAX6CWBcYz19s0W+hK9NC9o2OD8Wy20G5A0RJG/QY08C+2BQC0liiHTc2ZZ6CtAcgAU+RucsshCX8Py8k8cDQ0WFVvoG/SSDalh7Q8ttBdqSEPE/+mdd1voW0BRZCiYfviQhfalBWK3VmoZt9B3gGRDBI1KWdUt9D0g9UKCumZyQwv9gLGkBnrdO7uJhfane2GsLh+2stCPgDQWtn+XcmdZ6CcIlHmbeoXT6x61lD+jl6oriCfXlO1moV9gQ3lvGUDnXGahAxAoa+CEuubxay10EALlACgoTX8j20KHACnUYF4N3hpqocOANC8o/8n3d1noV4wl5aFGsyGjLPQbIKmBQ7nZqgkW+h0C5RuneIXZLXiglEJ/ANJYUKPZ1TMsdCQNIV3fM26Ohf7EWErX0WvPkZct9Fe6F5R/9pQ3LZTnR8rjQvHLS29ZaJQfXShaAWq6ykKjAXWeOE+LsrDSJxbK96NFgQMsvGCHhQrQSw4Aaywc8Y2FCgHJGidjrG0/W2gcBEbpUGH7Gw5baHxaeZzXeZ8dsdAECNSuRE1m5/llLTQRkKwRx5PuDZUsdC8ERo7Nl1sLTUr3Kj0aSqH70EtqxHU0rE//fj9+j6RF5ZpSaHJaGo8GlWtKoQcASfPSck0pNAWmkG1LyzWl0IMYSzqUAVRhuoUeAiQn5OXlky8t9DDGitTIdy0bWmgqIKnREtDu6y00DZDOGsb/KhMs9AggCeRZs3aBhR5NK88D5Y13LDQdGkaGyncZX1vosbRAxP+8rHIWehyQ3AnhOm/1cRZ6AgJljTigg0eZ90lAGgvh2o0930IzIFBO2BK9zrnWQjMBRVMucFcyMpRCswBJQ+T/eYvyLfQUoCieFOS9/ZiFZgNSLyjvGs230NPQUMojyLsu71noGUBaSirvtlroWQiU8jhr8oq/s9BzsLzOGpyGeRcctNDz6KVgiHjizo5baA7GUjxBCHWfcpuUQnPTvXCh6PRrXQu9AEgXCuxWd2pjC82DQM0LES/vwlYWehG9ZA3Erk63n2Ghl9JQFQh8/hwLvZyeF2JX3r7zLTQfvRS7EIVKxl5qoVcARW5TWPLGdRZakNawMqAZWRZ6Fb2ia2Ohe3SIhRZCDTk24r/bNNxCr0Gg1os2bDXSQosgUDbEMdTpkvEWWgwocpvCku4PWeh1QLJGU0w570kLvSFoStjrlBct9KagGrJG3vWLLbQEkKzRHNCUZRZaCuVVbIQ13CWrLVSEXmlrdOr8iYWKjTU63bPDQm9BYNoanbZ+ZaESCExbI+/gTxZ6G1DaGu6PIxZaBkjzaoogXzvDQu8ImsJe4/IGVrTQckE1mDeOy7u9moXehYbKG/E0nPd5TQu9l55XafwvhVagl9wGz7WF+0aVSf++EgNFmvO51kLvA5IO9T0+11poFSDtoKYI1w95FloNKJrUWPfnbRZaI6gG1RvrRrxvobVp9Sp7+dkdR1loHXpF65ifnVlkofXp+aL+k11pnYU2QGC0jvnZw3+20AcQGK1jwcJfqlpoI6DIGgUL/2pqoQ8BRcoXtL/xLAttwlhSHoX3PdeOt9BH6KVqWHVAB2ZaaDMgbX8Ew+xmiyz0MealoIH6T/bLxRbaAkhTxoUiu+kKC22FGnIMBN7stZss9AnGUuCNQ42J31hoG3rprMHhlV3tDwt9il7ad9hB7ZPlLbQ9rQYS7/a3V7bQjrRAxK7ho+pY6DNAMlQtpOt/JS20E2PprQF515o/LrbQLkBSHjWZStf920KfA9KRh15dsnta6AtA6oVT4953+1voS6ihUwPzurfnUAvtTs8Lyt/7WK6F9qCXlK+B3LX+Exb6CmOlv4Bv9t0LFvoakNwGR8OeYxZZ6BuMpVVGr+ysNy20N92rLAQ+sNxC3wLSosAazd5bb6F9gGQNKJ+94RMLfZdWvjWi0JfOQt+jV7ebqlGNcXkry1joB0CRGuN67qxgof2AIjXG7byzmoV+BBSpwShkoZ/SamQoCjVO//4zumigOKLQ4fMs9Au6yJ34peCJ7S10IN2LdfImH1voICCpx1Bz1lECD0GgdPAB9R9oocPope3PtHYqzV4K/YrFkmOUAZSzx0K/QaBCDSveM+pZ6HcIlBOy4n3MORb6AwK1+uzV6nILHUn3YoHihREW+hOQ5sXqyj1zLPQXIJmd0PMfWSgvI4IQ1vK+PsryowDJhh6ytQtrW2h0RrRN0Mu1O8FCY9K94hD4QAcLjUWvaL0K3OILLZSf7oVQk1fnegsVANK8EF3z8m6xUCEEar2Q8WYfM9NC49ArPa89bRZZaDwgjYUgnz15lYUmANIqo1f2YzstNBGQekGNPb/9YqF702pUxL67gQ5fCk0CpMCLjdysXV0L3ZcWiI28J6uRhe4HpCljI++Z2tJCkwFpXoCazTrdQg+kIYyV/cI5FpoCSGMh1DTb1sVCD2ZEzobI8Ozxl1roISiveTVEqWFQHws9DEgfhrUB9FeOhaZirLz+CRdrjNpF8Z0WmoZecgAIbHDmGAs9AkgCmwBaPcFCj0Kgnryh4fS5D1toOnpJw7aIyYcZXUuhx9BLamQAmrHYQo8DkjVg+S7r37bQE4BkeeR4XTLWWuhJQMoNKLDRFgvNACSBOFC6XPq5hWZCQ+0UHChd9n1toVmwvOIG5tWl+XcWegq9NC88Nc58M2ah2Rgr/dSYV7GshZ4GpKdG9MrcU8lCzwBSr4YIvKfXsNCzGEuWL43JpdBzgKRGS8Xks9O/Pw9p8rSYN9pdmGWhOYAUoPhd9yM9LDQX85WnMVzvnG6hF9BLBowjhH5/nIXmQQf5DKPr3D4WehGQoivzyTsXWOiltEDGyT9iFnoZkJaYt/UNrSw0H5B6Ebr/Sgu9koYosFuehRYAkkBCJ7xooVfTUGtAW+kzpdBCQNHZmu8O/mWh1wBpLISavGtqWWgRpqwVOcYr6Dm2g4UWo5f+Sk47r2Bnx+4Weh29msVj+vyv57tXW+gN9NLnf6cC2pdjoTcBLVuVxZSsoGe78RZaAkgpGdVoOdtCSwFJjUxAdy21UBEgfXaLefVs95GFiqGh5oWiQc8/d1joLUDRKhf0XPCjhUogUIZCAW1/Od9CbwOK6j+FbRbXtNAyQPJebOQhbx9noXcASSB2a5sfT7TQcnhvere2aXmKhd6FhlIeAjPPDiz0Xlqg7xXuHHKhhVYAis6awp63Xm6hlYDUC2NlPsvTsBR6Pz0W5lVtyVHrtQq9NC9kvN3fvcNCqwFpV8JQk5uMtdAaQDIUnq42bHzIQmsBSUMK3DLDQusASSAi3uTT51poPTRMR7zJG+dbaEPahjgoJ1d+zUIfoFf6oJy8a4mFNmIsWQPlmu7V37PQh4B02US4rnbJBxbaBCgdrrv3/dRCHwGSQMT/ao/ssdBmQNqwsHy1tT9a6GNoKMvztW7oUSFlC+alyIY3vk4PHuWHWyFQhjoWyfCychb6BJDMWxVB/rwqFtoGgTJUfUTym6tZ6FP00pRLw3UptP1vDR1+vzH9+w5Ik3oZ3iiXWd1Cn0FaZIrRbtw6C+0EJFO0R7h+iOG6FNoFgce03k6zj3Hjdlnoc/SS2SsiJr90kYW+gHpa4tMAKYSWQl9C4L0Dv3LlypePxfSf9oj+Mx/Ou+fE61r7tc69qvPF48c/fGDu2wdPff6rp2deddW8FhkOhneupWvl3RPLi8VGxdzomBsTc2NjLj/mCmKuMObGxdz4mHsm5rxVMbc65q2NuXUx5+IdPvJdrN8D3yUd/uePq7NVzNo1a5LPPra8o19zTAmYzgnSq89cmPDI7PzXKSkhic9ap9j0lr5tU+rb/tRTUxRG6jWNvx2Q8c9f9LOYO76Jp3Y0aZby1x+qmRpXp36K9JyeZcIfOk/cF+z8V2UAWwN//3Px1OpZ7wYX7votmPLd0sB/ZVi51B9zXgkSn1VNvTVjeuDDmVKjHh4TkI4tuTj8oeyo2sHeZtWllF/Zq5h6+YKs5OKfjwQNW29P+P/+YneAyTnMTNSjqqDOxTrc8GYwtmRV4E84e6cY6rzxhG2BX/FjP9Wu3L6AVLqS+fzOWim2OHjiMSl1qfhx4xRlkHqPL8/8m6EwjxAZF/t+xFvB5GW5Sb/N9i/FNNn2awAXT/r3DiybWnJRpYBUEyLzxnH5AVvkPvhIoC7tys0LKINU8ksZCvMIkXF/YlmXXHQv9Vjqr7jkdDE4PpK/HLki6TeNj0oen/9tkubBP4HXsPX1SY7l4U/J6Y8+GqhJ3a3rIO1AcmaDHwL/qfM6BLVfoo73ivqIlmJ6d/wMWuwL/GeGHOFUAtKp504MPDJcIyFTvhuhqby28tbAf23lwWDL7CHBkTk/imopSpk+2dmBDyjJMWkT/uNzkvufe4/+GBQNfzAJn+gb4A9JakSKH54X03jbG3ClSUl/znurA9g+WTT8Q9j1q6R/c7UtXPrgxWM+CQbX8AO//LxPgx1N4sGeDZ+LepW9b8X4rz7xgxgkXUHTeCzwYYmAFiSVMDJ5/Zcmn/zhq2Dxz3cn/bdmfBJ4J5dNXn//suDqM9sn/N9GzpXhqSGpi3U6bUfwy5GHAo9MUGFa4JN5/9ZimHJFQPV8ujkmj0nfK+r/tLGrmLdXNQpb0EbsQkoZMlqpVDJuo+diL/y4Ue7to62YqqcsgPWwra/44hkwnROk2tZk3r/1z0DI26tiKTY9fLmfUt83jiuTojBSD34vxn+oXkZAZmiyQqCmt/StDh1jKVIK88jc+c2e0HfYtEyP+0ThZrPE+H2ynxWz+fY5cBUIwXtkcHElD+FgXvDprxBCBmYPhHAx2JSLo76MGhRG6tHpyCAWXS3m7tRpARdFqtE1Sb/+fU6oGmcuhKbgLGQbTgu2cpwniPM4c1DnCjJc7MY3x2slsRmbiIH3wyOwofs9MChJf+EOAv8f9hQclus2KOmfvCJgH/qZhHALUSpp6Z66rfgzWc4j825mm5RPptH8dik6KnwrpWg2edlpKQoi5cKI8f/adFjMoK9+D5vSjuxLSmEeGc2eDGfPppo9+2KqnL2o9gOo03igjgqoKTViX1IKk67adhdXWibbcFqkLrZ2TbRF7069JubGN98PFKXpseXnHROw8zk9e4cR+NUnBgek+58rCH8oO+phtVDoh/kQNOYH9TM2Bw/VWx74EKSNga0eMEj6T/7wnHYMhyXFeXK+mNuKj8eu+zjgmZTkwcKdw7XxGA65Wj6Zyt7JGKoBT4Ck//2IlFSmMFK3DX6wqetNmpq/t1lbMdj3pAkfSsAhDiS8kwuTg2uMSfrtyrVMwveSpGV6VAn0Q8G3lwYIE9BhRODnPlgvWH/oQSxaLiLT9MBj3Dqn5zMhs+KSxYEiGaMYpAebun4e+NwFnNGOJgWiCG1XieFeQ3gKfB6GOPcQRyoFjOR+87bltAmwvdDtvcBHOE7SgGgu6uGMEuPvu/R1Mdgr8li/1YInkkAD0pOuWx/+wK3FiLz59m8UL5P0nj0bTuAIKYUt+jI1JPVpbzIbDn0YjEwdCHBCf0sTB6STl70WBl+6khDYOsHQKmfjssL5HJ0AxHlcRVDnF3z7gRhOUU1pKvYlpTAZUX6JnAVGrJlkWMY5mPAZKrFoS9Or6WKdJw5k56T/5TOPiTl/0augy8OzBJ0DUvqnxHY5fXzg0c2dywvkKQOWDg+QHgQMQT5Dx9NDkgEp++oHLEESN176dBKGPgPiOyfT47opZVxs0Fd3SR2/+lVnipl6bkWiCZ/HDf6AFGwS8hocOTXHdEpysUhhyvAHOjWjD8JmEot8RxLrIQuQesgYxMhTydAPkSQluY+YjySRgnFNkz6PSLoA1xSbI+mPfvhcKpKkhqR0AzF7m72C4PpA0oetJJBU3k7m699b8KQMru3VMfAHLF2IjdkFjvJUaCX0C3jkQ+UwO6BSq2flB1ivZPdJ0wKfU6XDk75x3LvhD9zx2OjJdw58HRoWqgdI4oMPu8L7UPOSs1Egqc+NRWZmg5fDFlSsww2/aW/wsPCnP7o1uPz1HQEpY4t+uKXvB/pDmR7rNIrWn38g9eD9YrD0b4m5ttcS6LAxQFx4BYfhLizfbJxY2B88qLk/qRCpT2OQYfQ7p+fuwEcQpukDUs2SzF+bXg94NjHg+ScX1gmY5NBreOphUtcgUE3n4sI5Hwy0x85aOC7odtMGxLZBzF+/CG588yLo8QXUrhL+QBek+RSflly0BrvvQIKhGc6WQEh+ksxSLjKpm4lk8pcjm3QKwsFKxGBrcZE7MtiC4V59LkwmyPCYEcJzB78CwUHEvjyZKIzUo4eS8XlykmGwUlMuJPuSUphHprL3QuDRxI8vdyk44zvQz09xEY69JiPl81BhMpG1e4OoxwBFRkcGGa6I0gzGE3oBKSYT/kBv4HkEawQe9x5NqqAEMySZkXKhEqRY1oR+gLKJ+6Z9zx86IrLvozSHgCrqcVxQ5186KQxXjH3YVR19LhD7UGfkLQnNjweAGFgsIRPQsLSJLE0jQYaj1UCcRzuCOvccVgjOqT8oZQP9H6R7PPqFYLcp3ZNd2JeGojBSD7YQ4+NfMiHCT2hCZk7sS0phyqmYtPhYL93cggpXIhZgq33660jtvctef1LU5wqRocF0u6BEniuk5ec9HnhkqKsQKs+hNJuaY1wKs3PYHbKG1/7UMFfxR9T6XgxXTE3D44Ou+ZVMCtf8SiesEPoPz1R6iTYw15OXH1IcsP3EMH7zuqD5Dq7xDiJCdfyAU5oMpQrhMDSNxoWdpAiNB2JyyFoOt+7wfx7+Cf83GzGf5w28bCmufX3EIEugPyT8Xy//AleM5kl4C+hzDNNdEIB/55Im76rViiG2s65KCKBJxj3cTHJxCTmHYUHUe+q8RWJ8nhFkKFR9MUUGziRD9LuZ85NocS3Dc5IKkSo+kGHg4NnBsMT7MXUIuEv0w4Sze6L//uCvTbczr/1SRyND6yM5UwKkla/jsvw4cpF7A56+2KoXKbFh8OM6+C9fsAv1hPVIXxbhArIr8LEpcPj+zM2RpKvohwFLa6V4uvTueHyKwyKPbJFCbQEncusU7n99YbLTUEJ4VBR+VyyG61d3a6uUz7SjedsTU2eMj6VaLTiWXcqlcDKn3jlQTv/4/BcLFbx9676PTZdilKEfknpTvvsDC4QNUP2qX8VglZF2Iv5UPeUnJFbxFGwaUI7PwDB5We0UD5DFP2O4xT8X4ahrJg1Jsbg3i0EYCfAwoeGwb+oia4prh+iHa3v9Di9tENDBtbtgLfjgNQHDCo7L0Qjt6xQdWXRBWrMJC/SqTrV7Bz7HFl7qgxMew3EZ3jX8u2pVSfG6TaolJMN8AK6AOSHYUTKYpXQDUjcVIQb+pD/oQkcGgplJKV3CCf0NvQZ5yLWBR4ZRQQiapei6tKGPLaOIwkOINEq9YWpsBYUYTllNGfnYl5TCPDL0NCF0e3oXKWoci8Ugh8Hlszjp857CA4+UXTwyFCKEUnmj0TDMIDguzUvqsTxBhi4mhv3UFJWAFPuS8kdUuWJYPAQBMlAgwV8VBNgXM3IUBuI8igd1Gg/UUQE1pUbsS0ph0hXGTvqMT/CvBMMTDJ7AETOPzFKgom471gXnuAQipTtLDJ0FLqUaBULDIhyyB3SrUTynXyANbCmGSZ4YeE0CSTwzhNkJXrRJcdQEHhlOSwhnz6YyB/vSPhRGKvGlDDw1JQ14kMM+VCnl86bETcmoSYrJniDGv7LKKWK4odWUrsm+pBSmQ1niGUzIIG6ElYRjr3k6XCE6PHUkpdIeGU5DCOfFppoo+3LmFEYq8aXMzAatA2lA/5zz3iXQAOGxd8cbmVglmZ+S4nY/S4zKEWSYqGpPsGCBcAzjzsM5UzOpUgaXVwjXm03lAOyLZXMUBuK89Iq6Qiwv83mw/3B9ljGQjM/cicwVX5RBjRVNGftoblIKgwnLokLTIkTu+KYZarNlEB2bqgiEqNhYAZVUpchShlksczwxqgKSmXC2wx5aFvgsFjFEk1a/6o3AI8PylxAaCXPFwHOY1/6BOPmsFpJU4ksZnnfKGMjAmHExjHY8Ev2Pbi/PrZkkRZk46ZGhudJIgpFWBkXoUXJBYSCmRpyHhTh44nVUyfmJz/4l5qyFF2K2szv6PFPhstinLBYsT3g8MbHhUh7E86TlfaOzdgRVkpmpI+3Og41UpzQZH9d2MTylT7qudcpjMkI39KA1rkZlUrg4vo5fKqZ4Syf1mD2RwQG+TQxzTzb1WlxXNaXOXEuKQ7RvpRV/4cd2oh4uFGIYQMQM+qojVgJKIv2RL5CyG46/BGpOJ6e8xtvq02YJeFZ9WLN9YsUldeEDMAaPPBjHNZpfQ9Sru7WKGES+cmJ4wrIv7s7vYz9+GXjcT/wFZ9Vomfb4/AGi2Oqh0d3i2P8l1xAI+p/Kzr9DMRbXX1zSM0NtyITn4gkpv8V19ydHP9w4RboDzyNYr/u1dYU8ktNOTdcfwuqwL9WjMFIPkU/6omlVMSz6qCkTK/YlpTCPDMUL4XhsGilQFVftTDw2lBH1KJ7M/yV3CooXwvHYVAqgn8xNYSAmx56JnZretnDOfzBkdjm9vF6yfFZ4yPCc1TZhFKJ/kFKYwlLZUR+psBho0/HIydrdRg9HBd+iz75LD0sIJ0qqCEbG57Ylg6My3IVnLSynXUjKXagfcOgqRI8tOSnlMQBduOvNAIGnEu2Z9JH8IEbvTpBiWyb0A2fOFjIFmmk3YlqiHrNYUIc6dEwMy/g4ijoiLvzGMywx+7yD8LPchObXu+OMMP7SjjIBxU9/tD4oxKO9VgjiRf+OpZOwQnW33ofQiVwSExUD+6D8cTVzltwk/4Cgh0T/xsBDXRj+kh8wDKLoOD284DDlZTMm2RLCIE6ppDiYlothpqwWtDK78PSRDN4jUYODyzu4fn74A0ZQC46rLhyBMqQZhVJVjkIazgKTTkIB1gk7J7uc/n6Yf7JSCYsrVT/2ml4806hJDk67XXB6jEdm7o9T1OLmao8E6sIbJmXwyiKhvExwFFJk9leIwX0wbMFgwy74ERWdRwKP+lK6x180LptQEfaRZhRCVSmV1E3GcrAfVsbx+BDDXaBl5LZAs//OhqFXsqnclH2xEikKI9X2JSPnIIPkIQxHfO66cNedAZ6sjkvxF2T/mXJ6xiZSnA262/FNqKUYer7G4W2PA5NSE8y6NcN7QgiV/WnjKaDQfslFLeXJFAbiEDKbisGRfYKYpvFGYdPvRxwPpjPO8OMlDK+px6dQqU3hKWc73KQTK/VbcAduiS2+VtRjHkMGL5qLxCDqqan2hTqToTjZgPIZNDQgowgUcKzvgThMI1wEV4CKAN8b8HRUrLsyGW6s1bPOK2YZkvf1YtwFcGLEi5FSFyZRBSsiRTW1SD+gRlqEAlYSu6cIvjYLV6MuRVBE1EMFRgxuoF+I4eZEalKEgvGvySNzhhYxYZcw6n3FF02LhyYniOL2t0jM1HNXB2hVrCca3B6LSKG988jghpKEkZdpp7AvKU6HpmLg9DjCkK1hKE4ClbXeSaTP4XOZPJi/YAKsUQzVKwT7sLYjIdzclEqKpGGZGI7LEpQUYPCSaswmMc3wlbJP9h5svzLMiET1bkYGRYrDYnhxU9PvR/ylvqQUBof4i8onhNDgvMHhWbYYbrYG6mUVpxctvCtjtRnOwievoclVAXeKzxozD2GqhjnyZTt88iLlzPUDb7ZsoQI4uwz6aklAGS0LUZqmUOxwGlnUr/3SBWK4WHwbQYsDeF1aCsE/yIqKvpQuL6Ol1YTOyD543ElKCFWlVFLH/4cM9sOa/sNHKdMmMiiy1xcDM+oE9Zgb8jlCjKSRoTQWayTt69/LKyB0nlhJ1ONHH2T0JQkZJDdhqGAthWJJKQwPR3WZPyWEIBQm2FTTYV9MzyFoiXrPvxeej6oSgTreLDhh7em5P9b4b2xuTkfS/vun3xG8H3ILg/2vTayurPKdXiNRmzqCM6Zb6PUnzB+mvVTw7QOiSBNWi2EBkJcKVKD26wGPzbH/Uz7ze7Z4esixoj5TZjIx1wnq/hT4O//VFWvyEfy1KzbpzAB3ka4KskI4X9ywQWGAocmLZWw4o6h3+PJzxcDGncT07pgKm7ZakATTOUFKYR4ZFrqE8G7BXLjVgu2B/9vIk1SXu3BXA1G/R5XKYvZs8HAlQwv+gScvKWXwBA3XlgyHYR6hcRk7oAf8YY8oxt0uRgcEqONc1ZSPQexLSmG4QGyUeCEcD6uIyi0UYGGUQzGGkPp8liTDIoRacNHYhRSXgnAVKVUIh+GCa1ysvhShS4CY9Hg+3I/BBYFsKU7sa8XgH8aiBH7YhiJew+RtxTOSeNxLItO8ENHiO1wIOiX5vQL2dideaJURYavRcEPxBnlGwHssqW5eZPAIt1QMg4uaMgywrgI3SnLHsEimB1FsUUa6JI6jm2GALrj3TBHFM9kSMXw5wVRZVtnHU0eFGn0oRQZHIfuL4uJ1hRifMBlYBuWclwPsmEAnNCkrhh4ZliCEwHBw9AswkdV00LW0TEqP4mR47Inhi6iKH7QPEho42BNIVluk4AZPhPGPDCMWmypisS8sgFxdlkjJucigcHlIDDNsRaxnUCaBOVKkFKbPqCheiH9yc9RKfoWuTVLQcRJMsCrwOHUyeHRfK4Zbm0+QOO7iqHlMQ60kjsEvDn9gTGJFRRUtNr2t+Hjo+UHoAjxbMM+lXAJSpeuYkf6Am8BZYrgETDPgeg+gb3VYbWKyedtxAW5J43HfXqDvcZJ8T1MTxgj2+bArrpwUwusqpZLizXGHGFpBLVjBYBecEymCWOVKOATWY9krpShdP9TPmIo3hUopjqsuVIQypBn7UVWOQhrOgs6EnIrfn3RJ8oSly2sZ3jlwIp5WD8OAEwJlA3wMImUxXT/QvGzx5TPbAnXhyUAZrH1IKIv5HIVUzkyG3yGpBT/BYBcmPJSBbLSMpHv8ReOyCRVhH2lGIVSVUkndDBzKrOJjLztUlcaKOWP8KPgENj6/KIG/J0ixXxIo2Izg7FMedzIZ3DOOF4PrZejICC4JOjIpPY0Jb4K+J4SOzKZyZPalu1IYqWp2ZKBJWEbETMKjlwcAHZmUwpDzR2VEMhyPFUcpwBIkNaIwUu+y158MlSbDafhkOC/GTk2U1x1M3PEKBeJwXwhtotfQdPEF4eq/rlDEVNTnF0J8DeUHOnoNRS0RYYYfTs4Qxfb4QAwDmV5D+arEeh6pXkPJQKuEECrPt2vNhi/hmJ3L6/+HJq90FtTp8QkUhbRvQ4O9MuxrMJ0TpBTmkeFLphC+wjHG6jU05kp08hAl9X8f2V8Mw6QunpweL56kbKX5UqoQDkPTaFzaCnr8Nwpjn2OhEJz0B7wljBGD1BTrg34I42A6J0gpGf2uSLJ+KwQ3dW4JPBbOSuIxYx5C3ouBf2LblQiRK1Bg+QAH1FY+P4XfF5HSu/QDUzdeQJGF6z1KmzTx2f2iOAKvFVP1lHbBPf3RguESs1L4YmUEK+j0lSszaUYbvCTsSjIc8JAl9Rj4yfioMIhhUMTNKvx0hbGXlBUHzZvJCPRIVr+qfspH0QbPC01TPG37PYBNyHd0Ohs1JPVx9RCDYQPuIx6j8K96urpolmT4Cksn4N2EGirQsITBr4k9fnTGCxh9WoyOFzKsf+AmmMSlMQYn6wwTx3CGoG5OBmom0kgChgDFWnFG+APXWJQnklbT5SNa8ZwC6xDcxonhPUT9WO2lIFJKxoV6dMCSgIfYi612IID1xyPS/Bw02XaHqJ+1u7sY7Dt+4hR4DE5Mamm5xEsXxBBTdifwNCVTJlhMo/YsleHNPQ/ZE4ITNWC0omqkuBdME+PzNYgMt6fi2Iddn9KWJuV6eGSorBBqz6aaDvtieo7CQJxOaFDn7oOrM40C+w/fpPhBEBkkHdvFMBRMPfdkfoFXWdWUq8+spU/WfSa/fNS+tlfD1METP+XuaEjJ2B0NUZd8NfyB25ktdByxC4RivrU0pIRyi9Jb8EMCL2LhNy58fgYxF50YVaNHKcKR4csnrzG4ljtdW6gNPRGpWgWeKVC8otZEpzljH6lUI8P7L1vwyyx14QMOX8dPLqyTglfye6vGOFaeEdXtrJTh+DIWGXcfsmAuG+ClmFNXMdjkSLkmJf9XgplWCvS/7qDhDY7HCKdF6rNSQGbL7P2KgaorMzoyB2RNAIEkro+ySbkj9MMn625TC6xy2IU6UAYNJ6G0FUch5avY47ANKh38GxtkeAlCEspPX/fhPGlAP8E/kMYncIon1Xhk+EEgozL8gbs9vIFRKCne1UeJQURSREPZ/AzEui3wo6aKZrpp8/M4GoKVXd2K+OmwTIOUllG4NoO9ji/4O/+2RR+pymFI3WqEKaipFdQeA/1n9ucn6xZrW+pAJsNyhrKe11bWgbHrpki5afUDDcAW/R54MVAXpuGUQSpHLmWoCRKA/3ThIcZP/HQr4GlAhieTbMh15ycfpFKFzMezq6XY4sVjGvChPdxclEEqDUoZCvMIkdE3CYgkGh57v7oY7NtQQea81JiUU1ASzNwHG6Q5Xsv38ZA8kiADqyZwyDIuPaZvEkixN/R9SfhNAhlWNthUpQ72hcQUhZFKPP4JmfMX1WTwL4MsoTlWohmug+34nHIhP/TSCUvq8S5Oxn/1iZfF8MrBR1HdjnB9wQvza1iW01l0eQ3TwM4kwwODTbkz1fe+aa1SFEbqUTwZxLIBYniy136pOb9lPBeX2kYI1+difVFYIgM1U6iCPiNG5QEydAxNlD7PmZPSFB4ZGkcIrcWmMh/70p4URirxpQwXQRpwVTBZUCwT/9YQls3xqwwQB5OHK+oWYq9gxnIqupsYnNUJ9cO/wHTGP8sTfHdihExwUfAMfF+AykHKZ8rOnYD8TdTj5ZyMz7+6Q4YfSrGph/sG/oDOE87OxNVgdgJHRyZyjs4Jfi6FMTrijnKsUuAPTmgo6tXPqCPG52KDorhWg307InWoBqZxgoV5RDPuY6fjDflKXQ4ceLwTE0LwmsdbUoKVEHVmKgdhjgkbiMNjfGgDFxuw9BeEoCGBx08SuI4Q0yb8JQ250Thx+C0DZP594nBTIMLxhHwgyRjPiyvfwuGj+arbktKj9ANrRmzBArG6vJtZTUW+PRtO4HnfFTH6NNyx5ogicfxYDIt1ilY3vlkecb5pinbYd2k9vkHWS7HMyTd85nAeGSaPiGP1EZwOoapSV/19WpVORaOSevdNqyJG5VgyfN1nWoB3sgwlHAxfrAkiYd+EI6WZNCNVkZEMve3PTVCE115MJIWuyP926LMkvJ9swCXDx5Cvhj8wr2IL5pHqAvfACOEX9hLKGzJHIdWwZKjHXbVe4gNeBtb9APKQcqhvXhqqzrOAcyHF9ammGE2XDOePij4/BaqPpOk6XCvqI3W5jAdRPXjwsXjUraaDW9ZF0yTNpT1F+3OVqRCpK8DOwTpqG/GvA4kJL/hrEtxguk540Z5KaXNxi6NIG5Z84fgKajjVRFVyIoOi7HwxeIeBu6IpLglJ3jd5EjMpZl0GT9IPJ7GnPgv4C86OnbqS8nFEfVjQpBBmC6QIbgfE8FVIDJ1EmlA/qkbKfzyGIGn/+PKZmg9DsyaIlEoUATicuj7lwN5NKsWk5mSwyZI/bZzEv8o5LZm1ezJMPy3JCg825zS8TT0RIky62ZSxTH2Z01EYqccLIBnUldeKoQ+pKT+lY19SCoOVPwwoXgjHY1MpwL7UiMJIPYon417CJuY2wxxYe+kshlkFWnSEi5zJT78SpHIAMryDsEWL66omERbmw3xj+MQzE0F7JMru94nqkyIyzIa73TSZX/Uux8vzLGzcSUkUUlWpT/KMJqWL6QcmwGzB1wx1YWGQMhC2UxLKAMBRSHVGkWFCrhas/rELKxSSwVIMhZJqFDIsCmCiyATfC+te/Err95F7UcidwW8gR3FFEkiG8mDeBxP8mwMwTgJvz7dx/h0ZAPFDR9URIMixtA3ivLQxw6f0Tqc9GeC551kxrPy+cwBLybIfQwCvLLy2q17BjJFUOpJhpssWf8ypzomvR4uGuBssQXxtxDekZxVwOAqpdh8ZqBW2QHN1YZyRDOxefXlMqlHIoCSnkMQ0Wl2oGGVIUwql6hyF1C1HJsTMFRM8+qsxLFVH/4zxZ4PpnMjrn9COgXu0CSMAkxe05FWhuSIAq+7adyy7cyPyOkyK2tBsMaoxk8GbaxgB6m5dpwjAt17ud5xO2frAml+aURNWnxcrh+CnIxL//q3F2ufMCkk9fjNBxmdxiAxdUE1pCval0SkMD4tVU5CcxHHeOsUBfX74EmrQBucu+vCTJAoZsLS9KK75Z4qBLTuKadg6qW+t8eYZKMCQSnyn0wJENxiH+SjN5fPkoP3ouDLo3anwy7OCb6MnvH4PVBaDaBh+2MdPXNgX0fB9PaWiLDpOxucBy3k4fqQB4lAFDRfOjcVzfIvr7oeT4+hmzkaGD5ZIBcInEy4cK1E6ZRACuGaQ2oVXAH6T0yXJeq4+3edxxVOCi4+wegde7s9HcLhflCsjBrfbVWLodGqKIK2+/MwaBtYpC0G7NASdQO9FHAHCRHGfWCSGgQ32SWL77UX5o7q2Lo4Q1vX2oj50L5x1h/YyFmgjUuIFOFSLAkUdxlAcJdRQFCEkVwzPQn1uzsyRj9Nf/94CN9MFgc8rH6txyLLCr/1RoAlw52VymiTVYxQZRIwSMRgST/svsPQ5G8f1S7jdPYOJvRp4nLZyF8QRmjmFhDbJNJs1LjQ5NcU8gFR/U4cMToX9YlglUlN+tsS+pCrhkFEpmgyuAWqqSxn7Ynl1BJJyT4YMp8VNgCyyO9rulklIfWgvhs8DvJoirfgGB8cqnYdMxqF8GcSRaWilszv8gWGaLbQ07IKhcAKuDd2KQjHuUo5C6rbi0GQYQGJapDo8GZiWb3VFyIK3JxB7i0jRP/wBa1WEI5wl1CKP35Cf0/M83Vmxgucj0r2DZbmARYb3gi6nX8RUQVRHIxn9NQAyPADwNBYWmXY0OR+Jz3ZkYp3DHwbXOFdRoGn8bNprPhZsUhGOp3ko104rgnrcG0VKoPFjEdQTRfYdzsbtxbHK5ec8kXn1EIMDU1VSJbq8zSKBQTwbTX8qTPJ5mpROoh8+v3OTWvCZWl2Yl1HG4csbpySUBx9HIVUdg8zVZ/4il9C3qfQAptSMMEg26qZmNqiaYmGV9RCPDJ8s8PRQT+GMVSeGN+z4Wgp4/OKV1GNBlwy2cQUxzA1ZtMdVs1yKD+c8WSjV5x/46QGu6chLTLJMVUmxjW8Vw4+LmYWiSFIeu7YS4yUjQBgKClDyJpVByHx+50MM2Pgnn3WV8jzdAsrguSChjA0chRS79hMx2KRhOv3byAopuBm2cAWMlB/gUlxBxSWPu50MhCwSw0OQuZVunti6cnpK1p2UniyEpw2bIkcN+/KaR2GkuCnVwlWviFleXTHMtHkwQbUGuIssRnWnAaryCwJuRakkhAUh3pnx8pH0hyYrwJKDdGBjXyWw8JvlTdSG1D0BX2MFnH9QyCTD2IVwF/5tK2zQJAv4MG0SdY8sRKjmsHMWSsh9WDvJQol8JotSSR6OHpM03lVRf5yFi0QruMZsfeSGdPpZhNu2uvaozsCoyMDEKgmpx+mR8bk5yfBLJnbBafSuhJDKP8nwazYc78HQ5En8ezMDsH2/0s0QSeE+pI6PiOr5hgz3JE4nXlUOKx7R13jX1toiWmhtNSsynCZbaN7sQkNQhixDoTQVRyENrUiPwRPXK2IYRxCu+JfItnGRYbivEC3i/Eu/v+BpqzVqfb8EGo8MyyFsQXupCz9qpwxOUUKZiHMUUtw48sRwK6sF8l91weKHMrgkFEqqUchwWLaQHuxCxShDmlIoVecopG4iMjauF6cIT5yGeNJ4KeOK7pwMNPjx6MiD/aTIw0NUkYfpBw8/dGWwuEqBhkJJfRZryfAIUAs+DbMLL5SSwbyGDkGqUcgwg2UL6cHIg75/3yylMyegkE2GN3KEkiRULJtCfQCX5nKI8BMChSA2J5V4MvxWjC2YV6sLPYIyOCaSno8VgtiNVJk9GYTwsAUDDLsw4kgGQ9CSi9YcHZP4tsAW0oNdqBhjkjRNxySOQupW4siDm/I/SVOEAsAYMTjUwgOGT4Dw/SJS/Bj+gH+KGACQvBXpdswVUlqB1BZnwgZR/FgH1eBi/g32Y8UwncOdLemzrszdT8r++oGfMrAFv3XBxvtW4hEKdkkBKg9vKkK0XyUVmcWR4iANldd7A5tdf/85xTyAxXA85P7FyPKfSz51XodiUrhoMfL/58InLTLIJXFMLQzzf/aFBVVxIEV9+ZAYnOJx2lZPBWpKr2dfUgpTPZzep0oRDyDGblKdhmRY5mfkQC2/TIopMo8oXZKZQPOSTIo5hz+w4sIW/JuX6oLhEPv3I2IN+v8/FeBC0k0M9cAKhu8snK9UpQGouyzCydBEnB0pq4hi/k+/NzBukOGVnRNA1lJbZxRV1NZnAs07vLTXh+Io08DFT8XJR0+pyHh7BnbXSnqJSi56xaCqHIbU/Y4ww5cXmgOpXjsxTG3p98yxkzyJ4Mw4hbLCb2E5AX0CD4dSGo4Hhw9Y30VavJ9JaDstIaWSIpOdL4ZXZj1bs+7Dyzv8N+BfukHgOaS0gbGeB66+cal+1Ru6VLNUwACqnJ5lAlKPX7ySQQFjpxgGLFoUb5+fQvrigG9zvD3g8rdef2BkYXaMM2auTEsNSX2W0cggAQ/PKa42zzn8iIoGbM3Zad78hddXNcEhrz6M5BJCk1IqqYYhw3EZjaUIDgzYbSsUqh+qyrWi7jz5NRmeE5wdqcf5kpEByNAiPB9lIkYC2owJvIzIQECraq1pZqQwqB2sQFi7IqGF4PJSQ1L3bfz/vY/8U+8j3MWljLQnQ+15EZD2zDWoIzN7Uo81aTI4/TPFnDG+Eare0H5wDf6H3M7C1agxMk5oT0bak6H2bCrt2Zc6UhgpLj7VxKCpLwYX1FB7fgJL7UmlPRkpTYmlDAf0yVADxBMIgEoslVBHvMeIYmk7ivFZECFzW3EqbPryBWerLymFITU9G9ovTAihT7GpnIx94XSOwkCcR/GgTuOBOiqgptSIfUkpTLrS+zSNUoaQZsq2/IxJnRmSIczx2AFxqOLsEINC1lYxTNDVlOvGvqQUphWVeC52KUNI/sC2mD4oOkN9SUNRUxRWCveXm4GaO3/l4eHzmxoyeDwKzxluYR48pEjiwx/eOXCiWiBYFKOENAix8ACf75sjzTgQ8C/M6fMHUgygv0GnQ5ottMeQFWlvIXaLQpvHxOiTWDI8r3gvVPmpd8fPkiib7wyr8nzlZhPOmPTvv47OIi0ZbGGcQBonLMKTShMyVI0tqCvec67m0VTs87mDM2ctiRQhLrSJ24XUhMVKhias/nAxcCME7d76e+2IKg2VNam6xYMH+SHE5yb5V1P0Az9DRCqexDz5A//K9wK8BbdFbvdWoMOcH9WiJJHkX2XwKYjhipR5hH6Y8t0x/FAHqXQLlTkxwmnIh58URfF0vRiedWrB7yjZhVQyyFAor9kahaGawzIQSA8GRCoG9ZHnQlN+YUrVSTUXMkCV1FAnFpk0fQqUPXhBo4GoGGloO14EYaq3A541zEf4USjuvPthBP4nDvcrb9IPrFHS95F4hv/BN6bRlEEK2+WKQX0mbEGLsAupZJChEdgCjkNz52p8yiANNVIewTodGX4Zw+XRN17wIH29pgmT4bcS/I+K8dNKn4VtBmbKIEWJsL8YRMGwBUyCRStAuOd/fwMyyFAoW2gUhm8OSxmk7mfsQaTCMhi2QEIMsjRcEJuHn5jTvZA1QfD5Sp+QqXdXXx4BqJb1Vi6FtD2kOFLF6MmDDO5gYVPkEepLX0PFiv8hl29Y0+CX2vI3/UeTKJkKkeruTYaXHKxM0mf0YnNS3DoCFLR/oMrcrSt5IdRXg2KYn7NqxHOWQ9CvkLa1CLe8Lu5keGKwKUOn+mJPpiiMVN/VkcFs/jPf0KoGRoZ5EN82VSXj0kOjpZwWqR7ZaGMEBkVbMUgDsFkRMHmPYAQlhUJ8Ci8J9SXDMdlUSrAvtaIwUo/jktHfYCPDpFtN+S0I+5JSGKLaf/hOhU2lAPtCob//9hvFg+IhH97C2z9nUVqhwWZAWjg0KevxKknKaySe4RfiPgjFybBkwgmohsIZUD2mZ6Q4zX3pC2NVEUMlpDjVouKkFMYSE+LMeJWYlPDx8sJLCPbsKLkLVST1udfJsJarFphSil1IKYMG0/IJ4TB8c9e4fKCgIkweSFUFI4MTra4Y3v01mw43NEAC1honfAMJ88jQAkI4Nb7byUYMOjQaVSR17+C6wS3Cv9aN5m+K4W7Q3wBH4Up/BZ10R5NmdMhZsqQQvtmwKf8ujfoyDFMYKd6Hqigu6+Akw4NTTZlhsy8phXlkKF4Ix2NTKcC+1IjCSD2KJ6P/tskSHlOMAUvJ4Cq/FCGkmHXSpTy6SXmJ5BWRbhIiuJOp6c5/VQ77IqwXUxipBy9zZJAYZfE0K8auSaJbEWKPTrEiUjjUUo8MDw4hPGzhveEpz2IC4h4KObtFPbolGbkXGbqXmtKJ2JeUwuReFC8Esy3CRQMl7FrFOgo5T2joSOG0oQW0oXmPAeDUDNRxhaBR+HkKNxgpJCc8MqhKJIXAFDgFZmFjz0+qLwMuhZHqJktG/3EAMizLqCmvR+xLSmEeGYoXwvHYVAqwLxRyFAbiPIoHxf/+Pw==(/figma)-->Berdasarkan Surat Edaran Wali Kota Malang Nomor 30 Tahun 2020 tanggal 10 Desember 2020 tentang Pelaksanaan Wisuda dalam Tatanan Normal Baru dan Produktif dan Aman Covid-19 bagi Perguruan Tinggi Negeri dan Swasta serta Pengumuman kami Nomor 250/PENG/2020 tanggal 26 Oktober 2020 tentang Pelaksanaan Wisuda, sehubungan sampai saat ini belum memungkinkan untuk melaksanakan wisuda secara offline, maka kami sampaikan kepada seluruh calon Wisudawan/Wisudawati bahwa Wisuda Politeknik Negeri Malang yang akan diselenggarakan pada tanggal 18-19 Januari 2021 pelaksanaannya DITUNDA sampai ada pemberitahuan lebih lanjut.</p>', 'Berdasarkan Surat Edaran Wali Kota Malang Nomor 30 Tahun 2020 tanggal 10 Desember 2020 tentang Pelaksanaan Wisuda dalam Tatan ...', '', '', 1);
INSERT INTO `informasi` (`id`, `judul`, `tanggal`, `isi`, `rangkuman`, `foto`, `file`, `id_tipe_informasi`) VALUES
(13, 'PENUNDAAN PELAKSANAAN WISUDA TAHAP 3 POLITEKNIK NEGERI MALANG', '2021-06-13', '<p><!--(figmeta)eyJmaWxlS2V5IjoiSDROdWF4Z2hvdWVHZjlzaGxhaDN2dyIsInBhc3RlSUQiOjM3NzgxMDQwNywiZGF0YVR5cGUiOiJzY2VuZSJ9Cg==(/figmeta)--><!--(figma)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(/figma)-->Berdasarkan Surat Edaran Wali Kota Malang Nomor 30 Tahun 2020 tanggal 10 Desember 2020 tentang Pelaksanaan Wisuda dalam Tatanan Normal Baru dan Produktif dan Aman Covid-19 bagi Perguruan Tinggi Negeri dan Swasta serta Pengumuman kami Nomor 250/PENG/2020 tanggal 26 Oktober 2020 tentang Pelaksanaan Wisuda, sehubungan sampai saat ini belum memungkinkan untuk melaksanakan wisuda secara offline, maka kami sampaikan kepada seluruh calon Wisudawan/Wisudawati bahwa Wisuda Politeknik Negeri Malang yang akan diselenggarakan pada tanggal 18-19 Januari 2021 pelaksanaannya DITUNDA sampai ada pemberitahuan lebih lanjut.</p>', 'Berdasarkan Surat Edaran Wali Kota Malang Nomor 30 Tahun 2020 tanggal 10 Desember 2020 tentang Pelaksanaan Wisuda dalam Tatan ...', '', '', 1),
(14, 'Pengisian Data Diri Mahasiswa Tingkat Akhir 2020', '2021-06-13', '<p>Dimohon untuk mahasiswa tingkat akhir untuk mengisikan data diri secara lengkap pada portal alumni</p>', 'Dimohon untuk mahasiswa tingkat akhir untuk mengisikan data diri secara lengkap pada portal alumni ...', '2021-06-13-18-00-49-1.png', '', 1),
(15, 'Pelaksaan Tracer Study Untuk Seluruh Alumni', '2021-06-13', '<p>Dalam rangka melaksanakan pengukuran dan peningkatan kualitas Politeknik Negeri Malang sebagai Perguruan Tinggi unggulan di lingkungan Kementerian Pendidikan dan Kebudayaan, dengan hormat kami sampaikan agar Alumni Polinema dapat&nbsp;<span class=\"text-bold\">mengisikan penelusuran jejak alumni (Tracer Study)</span>&nbsp;dengan cara sebagai berikut:</p>\r\n<ol>\r\n<li>Masuk ke sistem informasi alumni memakai nim dan password alumni (password sama dengan SIAKAD)</li>\r\n<li>Mengisi atau memperbarui data pribadi (alamat rumah dan nomor telepon)</li>\r\n<li>Menambahkan history pekerjaan pada halaman pekerjaan yang telah disediakan</li>\r\n<li>Jika lupa password, maka dapat menghubungi petugas melaui menu&nbsp;<a href=\"http://alumni.polinema.ac.id/site/contactus\">Kontak Kami</a></li>\r\n</ol>', 'Dalam rangka melaksanakan pengukuran dan peningkatan kualitas Politeknik Negeri Malang sebagai Perguruan Tinggi unggulan di l ...', '', '', 1),
(16, 'PERSIAPAN PELAKSANAAN WISUDA KE 52  SECARA DARING', '2021-06-13', '<p>Menindaklanjuti Pengumuman kami Nomor 24/PUDIR I/KM/2021 tanggal 02 Maret 2021<br />tentang Penyelenggaraan Wisuda Ke 52 secara Daring, diumumkan kepada para calon<br />wisudawan bahwa:<br />1. Bagi yang belum mendaftar paling lambat tanggal 25 Maret 2021 pada laman<br />http//alumni.polinema.ac.id<br />2. Harap melakukan konfirmasi kehadiran wisuda paling lambat tanggal 25 Maret 2021<br />pada laman http//helpakademik.polinema.ac.id menu Presensi Wisuda Ke 52<br />3. Gladi Bersih sebelumnya terjadwal hari Senin tanggal 29 Maret 2021 DIUBAH:<br />Hari, Tanggal : Selasa, 30 Maret 2021<br />Waktu : 08.00 - selesai<br />Link zoom : laman http//alumni.polinema.ac.id. klik Jadwal Wisuda Saya<br />4. Gladi Bersih dan Pelaksanaan Wisuda wajib menggunakan nama partisipan<br />sesuai dengan FORMAT ID BARU (KodeJurusan_JenjangSingkatanProdi_Nama)<br />contoh: TI_D4-TI_Rahma Sindu pada laman http//alumni.polinema.ac.id dengan<br />cara login web tersebut kemudian klik Jadwal Wisuda Saya.<br />Demikian Pengumuman ini disampaikan, terimakasih</p>', 'Menindaklanjuti Pengumuman kami Nomor 24/PUDIR I/KM/2021 tanggal 02 Maret 2021tentang Penyelenggaraan Wisuda Ke 52 secara Dar ...', '2021-06-13-18-04-01-1.png', '', 1);
INSERT INTO `informasi` (`id`, `judul`, `tanggal`, `isi`, `rangkuman`, `foto`, `file`, `id_tipe_informasi`) VALUES
(17, 'Pelaksanaan Wisuda Januari 2021', '2021-06-13', '<p><!--(figmeta)eyJmaWxlS2V5IjoiSDROdWF4Z2hvdWVHZjlzaGxhaDN2dyIsInBhc3RlSUQiOjcyMzE0NDg1MiwiZGF0YVR5cGUiOiJzY2VuZSJ9Cg==(/figmeta)--><!--(figma)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(/figma)-->Sehubungan dengan Pengumuman kami Nomor 03/PUDIR.I/KM/2021 tentang Penundaan Pelaksanaan Wisuda Politeknik Negeri Malang, karena pandemi Covid-19 dan masih diberlakukannya batasan fisik (physical distancing), maka kami sampaikan kepada seluruh calon wisudawan Politeknik Negeri Malang bahwa Wisuda ke-52 yang semula terjadwal pada tanggal 18 dan 19 Januari 2021 secara LURING/OFFLINE, akan diselenggarakan secara DARING/ONLINE pada hari RABU tanggal 31 MARET 2021.</p>', 'Sehubungan dengan Pengumuman kami Nomor 03/PUDIR.I/KM/2021 tentang Penundaan Pelaksanaan Wisuda Politeknik Negeri Malang, kar ...', '', '', 2);
INSERT INTO `informasi` (`id`, `judul`, `tanggal`, `isi`, `rangkuman`, `foto`, `file`, `id_tipe_informasi`) VALUES
(18, 'Pelaksanaan Wisuda Februari 2021', '2021-06-13', '<p><!--(figmeta)eyJmaWxlS2V5IjoiSDROdWF4Z2hvdWVHZjlzaGxhaDN2dyIsInBhc3RlSUQiOjE5NDI3MjQ1MDgsImRhdGFUeXBlIjoic2NlbmUifQo=(/figmeta)--><!--(figma)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(/figma)-->Sehubungan dengan Pengumuman kami Nomor 03/PUDIR.I/KM/2021 tentang Penundaan Pelaksanaan Wisuda Politeknik Negeri Malang, karena pandemi Covid-19 dan masih diberlakukannya batasan fisik (physical distancing), maka kami sampaikan kepada seluruh calon wisudawan Politeknik Negeri Malang bahwa Wisuda ke-52 yang semula terjadwal pada tanggal 18 dan 19 Januari 2021 secara LURING/OFFLINE, akan diselenggarakan secara DARING/ONLINE pada hari RABU tanggal 31 MARET 2021.</p>', 'Sehubungan dengan Pengumuman kami Nomor 03/PUDIR.I/KM/2021 tentang Penundaan Pelaksanaan Wisuda Politeknik Negeri Malang, kar ...', '', '', 2);
INSERT INTO `informasi` (`id`, `judul`, `tanggal`, `isi`, `rangkuman`, `foto`, `file`, `id_tipe_informasi`) VALUES
(19, 'Pelaksanaan Wisuda Maret 2021', '2021-06-13', '<p><!--(figmeta)eyJmaWxlS2V5IjoiSDROdWF4Z2hvdWVHZjlzaGxhaDN2dyIsInBhc3RlSUQiOjE5NDI3MjQ1MDgsImRhdGFUeXBlIjoic2NlbmUifQo=(/figmeta)--><!--(figma)ZmlnLWtpd2kEAAAA4iIAALV7e5gryVVfVUuax527d9/r9WKMMcYYY2Bf3l0bY9ySWqO+I6l7u1sz9y7Gco/UM9N7NZKslubeWYwxG8chjjHGwOIY4xjHAWMIGDCvxIBxCJAEzNsYY17GEJIQQl6EEELy+1X1S3fu8vEP9/uu6tSpU6dOnTrn1KmqnqdkN0qS8DAKTmeREDdfdOzewA9MLxD413Oa1qDRNnvblo+q7PuWV6obitrqNQFXfHu7Z3YAVf3gcscCUFPAwLfIa03RKs4Df8d2B57VcUz2XO85gd26PPDbTr/THPTdbc9ssv9GCg6aTo/1zazuWS3P8ttAnfMbVs8aAO22B4/2Le8ykFtlpGe5HSLPN+1WC+VNjY5t9YJB3cPoDdOnbBfMa3GC6VwCLEgszeEQagHKs8zmwOkpFkJV9jw7oDSyNx1F7lGYRCBroCmwOBsQdZ1dBcq9eDKKJ4feckyantN7zPIcNAinqdrJQev9DjRaQImm0+h3IR9A2TB7u6YPyNj2nL4LoNLyzC7pqnXH6Vhmb+C4lmcGttMDsrZrNQLHA7RGPaNc79iK7YbV6diuT3DTAxEWUK3QOc/a7ndMb+A6ncvbiskWhuo1rSYUV9CdD6xLFOkmv2M3iLjgX+7WHa72zXYPg/UU9hY/sBs7VNWtftt0rcGeHbQHad/bGk6vB55KwNv9o3AW7cWLoyC6ttA62PAf7ZuehVZRiCubttl1lIUZgWcrgWAiqFbyatPZo+TVG0lec03P7HRgazCH7sCzt9sUZm0V3bFaxK7Xx9Fk1MWqQELX9P1B0AbTbVoafMHrKvuWTdPbsTii0e13AlvbV4WqhibrfY9N1YbTcfJarcNxVZ81H7aiILU46NF0mtsW6hu6S1bdhBV5HZO8z/lOKxgoHqhttU2vmdeUXVuepVfgJutSo9P3tT1caPeJu9k3g35uJLeoUQDc2ul37Z7j2wGHuM0N40m6EOu+07GpcQHlNJW3aFGBkTmKpdIHrBMgUVA6rQm4So4DUbp+VbtrqpnV4CEXbQBr9jEijz8Mx5FWOkKHZwUNpe+WzenJlt1RgwS2Ws+KdXAQDVNBqzYsykPgMGECaBRNz3GLqmw5sG8sYK85qHf6lMuom42dVVSFFthQbrzmwD5sHcVE34VroZQdZ08BECHQMvgwhM6gYbp0zmpRG7Qcr6Fcv0amzWg4nYeLeDpBn8zBMTKWFeoELDFde8cqjMzoLY/3o3l/Ei8S9PFMTkO49iWr4wOQkAihjXoxGtNJspiXFg2LCbxguxJXdk3GMwNjpCqt+A1TTaDaAsfmQPeopRVFveYv5tMrkTmODyfokDMT8HJbBWXp9IMUNDRxI5xh+Gx+mIpabZl7s2F6nrOnTIiTqOiq9Wjf7iBmwg2BrKZmMuBypxrM3DtHpcJdnMaUrYswrESrW7sWechsaKM+nY6jcOLMokz91X5Pmz8mgm4+IgRg6ffrgWcq2LikvEJZg5p+ezqPn5hOFuEY3dMAUdIuLEX5n3Gxj6jXspWERe/daL6IYdjEOS6aSl3rThA4XUBGd7pMosZynkzn8P+m1TIRUNAgGp7jw45tD7C0Lls0bCw+agZ2XzWUa2IqCDANGBDqVVcFlRqKht0BtNZlmGKX9V14zHTejedzjpObolIvSqkAeC+iitXbDmgrRjNMjrRTGg0EY6BEYUlSOa42vKrb2wZKXHQtltLfZWG4Te62FevabDpfXG+sFewFCIfIBFKLFBliz26q8WWGaFuZojvh6XS52J7HI82kqu23pNhCQEObc6Xo44aLRTSfoAlUtqtMEfFNxTmplm25mHpREj8B1rmKlDhKM7kcModg/6fjyI/SSUH1nu+k0SOwTK6wbMA69FojZUGC0msw2lYCq+s6nqnSlWrGBlpaRLmKzgRhgDILoRg6HF7R65ML20b4egxqUxJI7B7YjRWsqZVdgvyM2rSuNFFjuoQQ85S29rS0uaYrZj9gToNZoPvFZbKID05RfdqertmwBnBZnVNVVDdfa11FIiCRQ/n2Y9YgcOD8at4rCBgJFsXuukhGUGMLaBgRJzB0+LvWYC3TC/zE8rAuA6azqMu+p7TCvQBlpdFxVK5RtTn1sMTivNMbwPoVmTBbYDMI7K6FEIi67DrIhwdqnoaGdUMFvdrcvQFXdQM2JJLVdE3lL2ugcjEvGmIWPTeanknv2UTbjnU563YO1V1HZ15bwTycJHEh4z0IzUh3ggEiGYJ0us2Lpu3DgnYtgLKFpBmlgewN2XPLc/KMp1JCZRGtWsLp2FUrYfLgteb2/bbGpczWC0zGa6NAaVabBSLndI4Js8alnLYKTMbpfIHSnG4qEDmnC1pQLAOIMmY3ryAzfresYDXLW1dwOdfb1EgpNmV6exmX8byjjNQs7yyjco53wY3txoBtqD0DGQRORWYP3q2OFncjR3SQUxSYZ1phgpOEXvENHKQa/brdQIMg66wikc+Vqga3XJ2OoQetPW+qkm4FU9N9V3BrOnrl9XV/OJ+Ox814rv0MfFLD/RtiDyat4oTuCydd0MWiERx/EaHduuQivmq/b4AD92NVk9t9BEBpJDiJYTDA60KOp9hUFQh/H2M7k9W52BTyED/GPn4qIX6qesdD52uoyVP8GB5QoC4QV/FTOcJPVXHyF9MZOgwJi10hZ1PtZSAwuuFiHl8Tcu343ntRl8f33ofCOL73fhSV4/uIrB7fR2Tt+D4i19xwjlhuT0YR+hmHy3gkghLTrSzXQ+NJOF5G6COXKu+7RxgtaKkXHkdCVg7C43h8CnqZcJsAYIDJIhnO49kCtQppd8N5HKLL8jiax8NWfLicQ7XYGNIji4Al2Gqblk6nqY7lgNUwq139WTiEna30dZF7OFjPdGuTgVlPs/wbMGhxcTnBMgckdzhcKhh7NCxMrW+5dyOcJbCvogtcQuX9EsUgqxiuhRycoleAGOQ1Znc4yhOsAYXJbgNcK/F3M72XxUL2h18kgdi4ASh5fKVkLE5OZcOmlfVL5JMq5raicKEU/IfSRdqPJtG431UkqRRGw/WJr1AalEpAlLX0AmDNt3tMj9Ydr9lDuWG2PLZvNnsqPpzr9bsUaQunPBPleWxCnNJNTV1eaOvyZpwkWN5imipvvLWhy9u8hipv93X9Dm9XnUPvpGOivMvfU9cnz2j4eyzvxuIQ/8xGo0u57/H15v4ZbVtdkDwr3WM/0/F6lO/ZVArKz8KWw6V8TjNQB5TPbnVMzuO53W2Pe+bn+LA1lM9DIsrxP7eFhArl89u6/Ly2HvcFga5//qO6fKGryy9gco3yRZ1WnfUvdFxVfpEXqPKLXd3/XnenRz3d10H4QHk/Ssr5gBd0WH8QJesvNuveLsqHzPou6w+jpNyP7Go+L9mFQChfWu/scX2+BCXpXoaSdF9q7rQ5j5c3LqpDw5c1WsoRXtFwVd1s9D3S1bH7st5AcGPZbGn+VgunS5QtlPej3Eb5AMo2huV4Nkryv9jW88Fo25Sn03Yu0m6QVKl8qGdjb0fpXHQffgSle9F9hHwevei+5F6U3kX33gdR+p2LXfYLOk6D9H1sNFyX3a7V5AF8DyXluNTd6RJ/uddRuc5jvf5OgPLLkaBQrlei9FF+xS4UjvJVrh8QP0BJ/Ku9HY/10HPbLPe9fp3rPvSRpKEcBVqOKOiptPgAy8T1O9zF1QTKo13dHu/qeT++u6Ps5cquF3goxyjvR3ns+4i8QkxQsj5F+QDKGcoHUb4G5YtRzlE+hDJB+TDKBUrqaYnyJShPfB8xW4irKMnvGkryO0VJfk+gJL+vREl+r0VJfl+Fkvxeh5L8vhol+b1e+v79ZPg1srGrJHySAFn+PQLk+QYCZPr3CZDrGwmQ7T8gQL5fS4CM/yEBcn4TACXqPyJAzm8mQM5fR4Cc30KAnL+eADm/lQA5fwMBcn4bAXL+RgLk/E0AlMzfTICcnyJAzt9CgJzfToCc/zEBcn4HAXL+VgLk/E4C5PxtBMj5XQAeIOd/QoCc302AnL+dADm/hwA5/1MC5PxeAuT8zwiQ83cQIOfvJEDO7wPwIDl/FwFyfj8Bcv5uAuT8PQTI+Z8TIOfvJUDO30eAnD9AgJy/nwA5/wCAF5PzDxIg5w8SIOcfIkDOP0yAnH+EADn/KAFy/jEC5PwvCJDzvyRAzh8C8BA5/zgBcv4JAuT8kwTI+cMEyPmnCJDzRwiQ878iQM4/TYCc/zUBcv4ZAA+T888SIOefI0DO/4YAOf9bAuT87wiQ888TIOdfIEDOHyVAzr9IgJx/CcAj5PzLBMj5VwiQ868SIOdfI0DOv06AnD9GgJx/gwA5f5wAOf8mAXL+BAAVon6LADl/kgA5/zYBcv4dAuT8uwTI+fcIkPPvEyDnTxEg5z8gQM6fltffNSC1WmC7FvcLmaVYBnPKbjibMcmRxsF8esy0bDHFr1EfT/eFlPuniygRFakvOYRRwR3/EesTZmTIv0bhIlS068i+4jHOjA0mjebocZx+hdxYcGykc8lROJpeTQAaR/HhEY7UR0jvkDCOokUYjwFVI4icMJdA4niCI3eESwrAa4voWF1e6ab1k3gfp74h4Q11UauHTZ9uhHHu73bIIRKjeYi5bYrN/Tl5TjAyaueUMMK4Ven5FiGHVASyZ2PKRHLBPLtyEifxPpIqKaoo0vv1C6KWIOFOxCvlGnhPkoPp/Fi8SqzHSulPiA0FBEdIkieU/AmxGU6Aw8nBZgsQt2gE0jpknViadXEr6uUL5dvEufkU5wyQQJKthA0Azh8o9TUobLpqrxU3zTiXlmoRrxMXouPp43EDXFzcN0KJ6/JmJohdKLIJAxBG7Up0KkZCHgDbiSdRO6JmwN4gphkfRuBbQQaPmk4rZ6LKyp4mrCFZxb2TZnZ+eBQydY7mCUxM5jXV0W5yeCMh7JxEc1xnRUEIZcJVZGWs7rjUFcolqBg32WNIk2AzkbXD8ensKMEuItdG+W10gj1ErutuuxgQKOhug6Lls3tSys2DcDzex+1MCw2JGMlzR1jlOZhfqU+vYYA3SrmFGqA/lvJ8u9QojOo+LpJGiXgMp5r5GFPKjkCVo4wOGV4ND1mpvMJYh13qJP2SkFfj0YJnM4NtlwFUCOQqrrJmJkMcsVBbP4jnyaKR6QyTqcHOyvW1bSpCGGvD6fFxCMFS/y0OZJeE1i+kglsfYMpKoxjqLPNwdJK6xloz16owjDmOmJiylAUnQ59ElU6Nyomq9KLF1en8SibCBJYfjjHYSI2YCXJ2oRm7cI2JaUgqMxGBlP7p8f50nLJPVAXjBogECs6YJGRg4HxJN/PpBi3MBq4KxWZss7BoGGqh5Aw4ZBI4C8EJtqMJgwPmqceS0zJn2cTZ74SeebxcUF7lkJrSWKVEJTU4w4dOMWklqBcdRDgwQ6nG5kE8jnbgW/CDRDWqGRlpz3aIaIxzL1XgQsRU7AQJjaxmsbs2jhG+5qecWzD1l/s8L++DjAhxImkHs+kE5qMHWl9ODsa8IZ6ApsxxI076WVMEZxebWupG1r8bJrAKPdXKMMNqrnK23B/HyRGYcVxKG0yDKDzuFNJxEOP6QSo29jCamINJU3f+grM2KtO0TlbOgX8VkkLrKTEXCxF4RYRV7d+Y7+79fyvO6urFLy1I1kWz1g9zcGO1F9xBSRBe1V5wcJBECxh2ZR6O4iU3jmqxKdRQ5JvCWjKbR+EIFOsBdwXlm/bkYAo7Unw7Qo6W2hBBZLgI71M2NKOTeJi9SGSXUjy1qMcR2cA5Up2sDYXDPRXvM1Cv6I5etkvA2tPOjcbeQGUq8rpBENxYQXoK+0w9FlJjivYIeo8PYkQJGCh6aZ7vw87nQFeIuG4abgIywIsvJFF3DwK3hdnVoiSctxisZReMFVymYR4ZZTWt5sS1FJHR4w2o11cntvVUgDri+eGcsdkuLrsxSj5r3oUPcN+MGwfcBOJKMH3sk2cY6DnkPXEitZuD7HX5LLkJg0IMpTUZxn6OVlw+AFUWqEZmOL0QCYrSoaLCjb65iwsRdecjcHeaPo9Lf0/dwhgs+YmJIsBrp7pE1a8TFrKe+cJHsgNnTBBkkuXBAa704KQqZ1AD3Ctw/QeT19njQlSSk0N6dg/BDJZaRRXZIy31R2G3qDnLBTcibuNoR1CBTrFXOhPc2EmxDorWdD6El/HdEpHiSgL0xjKJzP1kOl4uojrnS+RmKuDudjqCMOzWoGdZ6c2o2dkzL/sAZEft23zSwiwWFPtBIUN+wGIgRuZuVZksj304JJSXCOyzqRMi6Us01qfpYgc7XCLszNPa+jDV/caM0QjvZQ+JzW1EWixaJR1E5qzyPd1F0MCqXo2L7102BALAyl6LByZsawEl5k2ftho+7qLAtaDn7BBjpJ+LVKxWS7/SVnGJ4niEaul73ZqOwYpfaePQ+6aOe9k+k+4W2V5DAqwDZsZ1xZwSYtIueIUtLgrRp9iH0svrenQEi4R+wE8ZFxcEU8Cr1WCvbcFp2nanOXBaeNdkM+4h8UChv9iR5nyYjxnicXhyaE4OoShk7Yh/paoR4x1r7mWhsqJDbgcZE/ou5zHkkaM4mY3DU2WYWziR6KqyQ0jrjpeHcbpRV2aqAr2hmz4GocMVPS1XtXnROFxOhke6Q3WmkLrDMfJ8eAdAeIZaTYCVOGlG4wiZOOys2phCXOYS3ZCHCaxOtrbpyyDjGQojDVppDANUzcJULedhTUYzptuQO0pBZh8QJsBumq0NAu6xHuyXYOh5ZwBwtLHLXrCGErn2D3QDiaalqnxAbMf9vt1s4gUcTzSIHsrUcNWWofT3bXKlazfWwmGYBEhy+RhiWOEZOTXWDf4PI8MwVqfu7Gl/hr2b6exlmg10pydRutVNx6MdtUJIwmCsrdwQVS6GXHSCNTGezPxPpYNBeAgne/HsCAm1WBOGAjTyoRmMP3uMeLWolKqa4OEFvfKcUBubRj0yCZVt1Vhq1EuK6LKWgrrhpUgNrihrWNeQRn9JcQjcSEHd8DL0zLf8zbyiG790iJi4AHBOARr58oTx6RKOcCg16ssQpvNj4/m8ohtfMYLfIyrB0SdiU95UqmoCM1TP/ZwcxL5Q1HRzvdiNrAkTWk7u5jNITdw4RmRH+y0sNaoZqXAOKyhvCLeexWpyiz3txNHbCShvW0FoolYxvKO1CcXefgapibdxLClHkTvKdU3SLh1y7sxg3WTDQsLDeTg7opFgNTbFXdehNOHFHJu9HG2KZ1yP06Q7DHs2vGKuzh8gvHsVo8k6xzFWqROjAMkzUaQ13dxN4OJXovQIvSnuKdc1SW8BBw2Q2lzB2CD5jHJdkzhH+cc9WAywUBv+s8SzboTXXVzUMJCJK5WJeLb4zFJVEzyqMY1wJp4jnp1XdKOn6+rTpeeKzypqutmniIpXOxdAPF885wZo3SHIW3azD41eID77DFIT94lvIBqIu8RzM1g37bJaOsPeLT5nFaPJ9vav/6LqeeJ51+M06aWTdOxCgVDs557FavLLB/F47LKeiNdL+fyiqtsfAzVUpVGk+LwyQtN8OX0kvRrYFy8oarr5lbTtHlwblzWfn8G66SvUZLntvUGKF2YV3faqSB1oElxVyy9IYd0yQPwdIY9Q31PBpsSLxIuuQ2nCV2t/97Os84el/MJVlKYLObKpQlACHxSPiC9axWiyfWzxU536Jbholl9cqmuKob5g4CTwKiDuLaq6fZRwJ8Juui7uS0HdEBVhpJFmgPdfh9KEB1yg7Wh6HC3mp7jJlg+UEZrmUC9RhiTVg6soTXcE/08/Ynq5iPOKbnxc1dMIAi++Uq5rkrFCueGI2RNIjst1TTLhzojAry4ypllFt80SlVhRO3geEa8pqrp9fsBLjC4CcTNOVLhHYE7OIDXxYq4XatpC3JICl6h5VROc6IWvQ0Kt1Kw/qK8qwRvAItgpBxZ1cU0hL+Jykh9UNcVpolNYJWWR9b5DiifiRGNdfd1AtuD6lYDyDuU7jdeO9G2NbuGEeYD/qjL5rs6esf+/jh6TvqI3kAJOJx2eyThBjPHVK60Q/9piGSJXLSher+5HUxLMeTiPGCyQ75SpvqZM1YYtwIsQLcokT5ZJnDnWGEFP4n2thPbH2Oej0WPRfIqmN5Sbeun3CfrbiAO8wp1tTK1LHOFq82xrC1sIRReP48Gu1Iwgn4gxrltLODfLPSd4yqPZYQofkvJNErEvvdVgJgdPDPCyN8NVgbpg8LEhFgnvm4uGwmyUL8I9v04iACKdCcdMIzDbt2RXctid9SIqJl+f3qE1I6g+nnFkrOpbJe8qkUZi253OOtEBVq/ID+BL37BC4DGaXkfxtoKiPl0spsc34PKN19PciNE3FURFS8wsY4bEEKkGJvfN19ME2HxWSZ6ituhimGECW0TECbET0L++RWrbhv3quzH4L3SnLP+dEq+cIE1XRSXg75V48CxwARZAdOBpBapZ3EF9q4zC/NusHvhBzzgrFh9JuXgHHSqh/ePpdMHbQHR7t4wnRzArvjiMfR2LsVzvytC+CphFw3uyhgA+VqC/M0NbKrwUDe/LG9TWVTR8V9bAfaNAvz9Dl+Rp8asoioH2H5NxkjdBp9+Gum7MMN8uE0JKDx+WeNhV1VW7+0m5zC46oYZyUHqvxIkSi5L54D7egdETmnT0oeoSLtxg4GlY+u50SX2OUVrOn5Z4AC41FYHyIxIvwnGyGiO/V0ZKb1SqmeD2hQDw3wdKf3qARAhSpayA/gDQvemkPxthy05ZfH8qJkwO9jFU1GgVHt6UhwUOuwGm8IMSl04wxKN4PIJYzfgEoYG3hR8sGZeLgBfNT/CORb4Y4ofIaIJVRKNSbxupRIHi56xb4kdo/zpapPeU75e4p0oUk/zm4mckMgcVOSAW+gYgFxfxWl0MH8THEdIK2OiHypTdEBX8Vx714xKVrKXkDD8hRxE2rImq4/yCBUOSgg4fLt3v6dwNO4P8KXlDo6vnpDC8j8gwvTn5OYnXcKhrde/qqCRoN7WMGixggqkeKgnU7D4o8WQ+PVGSZHFZNXyPhDrSBt6BLMA4I8Ba/WzWVohjF5OG6UCgMxRmccv5AxLP8GpPSGXbwmv8AvbVx+p2VqRex/O8vnbhjPBEL38eb9KHiHYjZ+IELf3BWSLm8hdy/MHBSsNHSyvoH02X45F/jM3EVE+ktNNflAkTCp1evAI3J6paHCzSvAmL+Mu6CcKplL1o+BXdsKfe5lriV3VV59qo/5pSB6KKuqwIxK9n7x9YXV4lfCyrq4DzG7DgNByTfEt8HM7VwFu9+M2MLhrtpgraEp9IFcSFyi+rPirlb4ENxIddzv3ljL6chimGJpP7JSMvE4hPanHTNAsOyUm1xG8XDJKUw9Mw+B2Zv12Kv5Tid+WV6DSYx4eH8OC/kOL3IL9P19+GJcxA//uFR5YMJxF/KuWn5MkULmqdYPbuEd7WqZ8/gLXgtrj/NBHy01p+d44VnZ/m8v/hClotr423/AQp4x/ppnTGpaZXiH+fNjEQpV0hNj+J/WPdkq66p9Z2U/yHFazezIH+j5KmznSNeXU9wgQQfRAzMVE8T/4n3UuNoob3o/EBcts/SZOSDlSZwCvkfyZhqjkX2zhM73SXl5VI9Kj8T0v5p5K+00FuqJb+j6T4L3g6PfMy+ZQUf8YN4Lq/Ljwv/ivXmRGTmxo8A9Ys/luBsxBsgPnvBQbCpXvbJ6T4HwVe9UbSh2P+/yyw6K9xf65Hp5OnnrEp/lfuGeiMC+l3SfkXhXEAB0+bHLq4D1hgJPG/V8nxPvduKf9SolUlfNZkedzCgQx6h9GJ/yPhw/CMxqo7/VUhWwMGjl1A8U/gpvL/ZmH0Bg+2b5fir4uuVGB+2flxKf6fHF93W/lJ5Pi4staikUMm2qeQ1hvL5Oxbx5OGnZKXZ4Inow6vRmXWWOZlYPET+GUEO0KMl9DL01oL7k9nKRJq0HfeidiSBueS249RHQNEJAK3/eUYJhtgKWDQApNhSqlMqhOdRGOQqK8Pekv1wTYeUzSniVaYYYwBqt5/gjvgG/Q26sUAeAr0mpanb4H7vaIi7V4T73iA8KQ26OgPSCudjDUu6zum+lsTkfbJaGTOJcMUz6JKlzruYMb6shhCYS3/TApDNyRwA7l6p5/3txStsRYXfAKgkTFgnjlqJTWA+vKGUmZQuRKVg2X1BvGvVuxgRQ6ylstiKpbCuKkg68H/sYSYVIELQIps3SgwZSlWcvVqQVMMWJLihvsoX/noG2hXbNp8NMswOhXbgG8wLeBedV1SsXk2OTlXDHgm89vS8raw47EdV9nnYXrzUBMgB9CZ8U25kuAYpVhiVCZwa0gEf09KaXjxNoLXnHRVmjppFLUd63LdMT3aJAx0p+fs4WGLf5iBFy31yiwv1Z1LeCO2ABuu/yCKir9nB432wFWft1d3irU2+NbEz6jwCimxTAqbjvXnsJY2hNZbqmHoL4XUeRlrauzG0VVux7DcYTg5CROeDbIw8piQM6TSY6jsBHTQlaHqzYi65NV4RXfa1tyq6m8tyUr/ueULhdTtimlnOlRrAl0aJTS2K72u/Kbpses5Nsbx8IqQ/FxmHdIojaO/r9bGzTQsjQlmD/o0Fc8XzQi0MpDLaXMRUn2FASgdQR5NF8lsukirRnI1nKVwtmp5Zx2KalNdS6n+JgazzGTswl/TtmrarY7IOcN15sIe4cZA1KDrBA6L7BvxDbo09uG4Pm50Ij4XYrh09ES80UC4zc26OAsLo+V4e6lxeRae8H1akcQdgwqWLnrvq4wBZ32MsIaXMD3Y1+LheRJdzSvGGRmblLECKJsNMJhLnLQ1pT3pRVevmwImNcqFe5OBaLMigMs3NFg3P7u3Tf1nScKsO54GZcPpdu1AV4zVrjvR6QH3VPjgTHF5CyYAnR9CAN56GAtEnGQRHs9QSd+X02wPXfZXZ5Up1sbecg3GZiSKPjclPOTqsfXJFHaAi7BFplQtkHgzBDiL9qEHXMO8FRrVTFMhEvE2Q1bKQlaVhePoUvhKDTwWXUyIb8Tco3F43hJyl7G9Gy1CCAOjzLIJnHvD8Ri2BJI+4hw6QwBh3LnyF145MRbHSMNXZZjeelURhQ8jHWVr9HsVH/4KUflYufdf4wkyyZwWCejGdB8DnWA+Yl1ujiKGnZ7meQ7LDktQTozDqCG39Pwzx02Qp0i8K666WSLeYMibMNQc0m6JC0qhGU1qaLC6m1fw7g1cDd0DccsiI8nYN6kxeM+tM9SKFcUBwJC3DUvafsoQt5+s6PntBl75wskejtM07Dt9TA85Et7hHl1GuIbHU3W6OfTSgITrMxzkYE5ENNRqJDk7Q+6PoT2Vc6WGhtVpqOjpRXoSINILogN3AGuZq6QQuUbihlATV1EugPeiY2QIGLybgI8BfeB5CnhVrSwAUaPrKqpiWerzaTgaQolwhlXzWBXg3bBb1Vm8xxCVTDnGPdQ2nFKW+xpQpwIqk2K+ONXJKgRNrTER7zBkTc1cXJNrCc4s4Ti1mPVwiLNOIqpiI+G5wI/UUxJaNrN6wGFfKs5l9QYyb8xGoV8mttRrPkSoifMKTPWKDVxVce5k3ADDC3pgNzwdQw9A3JysrGYMQd9pyFtKE8kX7l2GuPUAnHZxcMLUMd/bFHcbK4LlhwueOstFEo8iazIcw9qRX6hIJcXtitCFCuGlgbgDB3LkRLClMXx+3J+Mpj7Pc+I7DHmXQnlRCfWM/WzREvFeQ94NB9O+7EevWUY4J6YJ9Lp4phqnjg1ieORPlzj0tiCwnvo9zfjgoHG0ZEawWZofHFjqSLqWf/DSQzMWEPFBbcxK6KqG05Wp6ZqdKNeDSjGbtSG5J6a6GMXsgyPMkygMsY4tLaaisGrtGM46Hx6dYgi5MTuL26So2RoZ1QmkyYRFq/YfWBGkTWeUiPchqLJa5zCkqv5/IUQAAM28B7hVRdauO9ecsACJIoICylYBxQCogIG15kLF2KZG29SmrYAgigHQtltwI7I35iw2JlTMmBER2VtMqAQD2kZQzBkjZu37vd9ca1v8597n9H9P9/MfnwfHYH5Vo0aNqho1alQtcrk4SqJWc35bNq9N63NzR/7xnNz0y9vs1m/vcdV/OWbECeOG7Tp8uzEjjqsesfUpp0ZrRR0eahatHTVpkouiOGqSazr4hKPHHT9s9Ngon2t+RhRFLaJ2UfsoykUWG20QNYmb7lt9zLCqLX8v0Qqi/0za5qiwFvxWExYvWlT5w4dTERRb0IYI2n302GEnj64+rmqf0cedVrVT9ehTqsdE+ei/L/aCnBS8usWXGyM7JyVbN91v2IhxR40bfUz16Kqhw0z2FRl3/LjjxY6qPn5k1d4nHH/CyVV9t+6z758G7z6k9+59/rBXn636brVl1Vj1v3r0MVQYN3potcrvO+y46lFjqkfDHzhyzLih1VX7nnDcyLHDRo0eOapq72HHDDt5ZNVe1cep1uYSfvKw0dVVJ1aPHjpMzex0wikjh26x5XZVQ1X5+OoxI0dUDR151LCTJXHcqOrRo0+rrjqqemy1pFcNHzlG4jY5ccRpY0YeLbMMHTlGihw9cvQxvTZX1VHVki2JY6qPP7F6pOpWjRp2YrV0GTPsuHEnjxtRpTonjK461QqeKvj/S0c1OOLU6kpPRg3bov9WVafxfcyw48cdVy0DnHxs9dBTpYHFS4djjtFfttzWfVBX9qgePa5a4myuMcOOrj65umrPPw3Zfe9d++yzyy577r73zptXSV2ZfqR0k92PUQn+Xi47eIes7N4UzRoZgbwhO+z4p8bmtt6yaq8dhuy8v1vprenWrDIzWk6Joo51UdQmmyLn5uZv51lyTi46vHXUxlNl7UlR1HfdifraOeoSdY3Wy60fdYuqkg2iHlFPTZd4/PDhH4wfPHgZf6ic8D+tgFy0cbSJKq/I9Roy7qiRo6I9Rx4zYmxkfouM3zT375xdrf+zs6v1f352tV5Nx3/r7GpdnjH/7tnV+r/MriaVKdW0RS6aNGf9g+Ip0Zh1kpFr37VrEyZDM/2vXdMov4k82FmHtr06g/VxRQBvkj9S8OS7mu0ST4kFnyUkgI/MXy03Bd4QT/nt5HWSyVE0IsCvzuXfoEDtq0mXcoF4NQFv5PJXxFmBA+MpRxbWSWqjaPOgwBVxflG5wKXxlCZSQQXCJhbF+Vp5SAo8F085PJMwIyhQm+TnUqDus4lN49ropisoEOowN8k/n0T55xItIRsqiUD7yjYTLnqsf5TLxWdGVSeGSC4/Yd/zO2kHiSdFTQ4PkTg/4YKpvaNcEp8VPd88RJL8hKrJm0W5JkLmVodIk/yEJ1ZpGKjzwUMh0rRcp2k8ORrRIkTy+Qmnd1A7eSGFASHSLD/h5b/0inLNhAw7KkSa5ydcObp9Jq37uSHSoiytuZAfHgyRNfLjN9myeZRrEddW9dkiRFqWtc4J2X6nEGlVto7MPf2HA0OkdbmdvJCjRodIm0ata6tOPStE2jZqXTv95StDpF1ZWnMhg+4OkTXLWq8R163YbrUxbZ+fsO3ZO6B13Yp8qxBZq1HruqrhHUOkQ7mdvJCrNgiRtctaJ3HdkTdtHiIdyyPXMq6b/tg2IdIJDR51nRUn7hYi6/xep+qC/UJk3XKdZmqnMDREOjdap67quNUs2qWsdXMh158WIl3L1mkV192z/Q0hsl5+/Ib3fO12TtzrjhBZv9yOdOs7/oEQ6VbWrbXqbLYgRKryp28/62lrcOLwhSGyQVmDNrEc1DchsmF+wqD+h0e5tkJ+/WeIbJSf0Pu+9dBgyvQ9moZI97IGbeMp869vHSI9ynXaxVNWfN4+RHrmx69/yFB0w02GyMZl3daM7RYrnzfJTzh06MAo117O4NZTQqRXfsJfP+4Z5daKJ0WnHxsim+bHd27yMtNwUtTkuxDZDJV3iHIdtOTHHhIim+cnPLawOsqtLeS8x0Nki/yE+dcdEuU6apH2XztEeufH98znolwnIbttEiJ98hM63rVrlFtHyPsHhUjf/OnnHfdhJu2A1bTesixtLSEjx4fIVuX+rCvkD9NDZOv8hBHDZYPOQuLFIdIvP2HTQy9EWm3NLUmI9C9L6yLkoQ4hMiA/Ycic9RmC2ujXXiGyTXkUqHPMDiGybblOV9W544AQ2S4/fsj5Uxnq2ui5YSGyfXmo15O0sRNCZGB+/KxrTsBN1NZ0PS9ECo1uojZ6YzUbFMsLTtKiH2eHSFqWJucWXf9EiJTKy0rSaqLXQmRQWZpcZc2xX4TIDmWno2VV80gcIjuW+yO3V3NG2xDZqTzf5PZq9uwSIoMb+1M3/44eIbJzWQM5qvkr+obILmVHpTrRbwNDZNdynRZCtt41RHYrbxdyLTXbDgmR3cs2EDJoxKEhskcZoZ0rh4fIH8rtyAbRkpNCZM/fbRDdf0qI7PW7DaKaM0Nk77IN1pcGb6022vvkT3928WLrNn+ji0Nk37JucqI1+10VIn8sO9FuamfUjBAZkh//+rPfW1r05J0hsl9Zmno6/9sHQ2T/ck9VZ36vx0PkT+U6QmoOXhIiB5QRSRt09ishcmBZmuw2qOGdEDmobLcqId2+CJGD8xMaxl5qB1+zzm8hckg+c/Dd5Hh75ULkz+WeJkJebhoih5bnTguFe8NahshhjTNkStVH7ULk8HJ/MmcdIkeUtV4jJgjdpfL5yPJQt43PjKafFiLV5R1h/XhStP/wEDmqPNSthVx9e4gcXe7mekL2XBkiQ8sLOydnvWCLEBlWnlKthMyvCZHh5enRVMjShSFyTHlwWseTo2L7EBlR1qCVkF4bhcjIsjQit713DZFjy6ZpE08evd2xITKqvMfmhGxxbYgcV9ZaUeXo258KkePLToc6L34TIqPLddrFtQNubRMiJ5T32NZC3uwSIieW+yOXPGD/7iFyUlnrznHtymf6h8jJ5Y1ETnT0ifuFyJjy9FhfdZ47JkTGlsdUdVYedGKIjCvXkeMdPeesEDmlPApyvKM3vCpETi3bYANJG3BviPwlf/rgI993f0YPnBsip5X70yqu7X7vohD5a3nkpNuMl5eHyN/Kusmi3Qd8HSKnly2aE/LTbyEyvjwKWvJDlrUIkQnl/shNDFlz7RA5o9yOnEH7HbqFSE2urPaGcd3KnzcOoYm5shUkr3d+6xA6U5AFSomV/YshNEmQtdDGsPLY3ULoLEFe9/LL/2VgJwtyrxR13vXcYSFUK8hBn7zSyvGjQ6gu1zi76lbOOTmEplT6tVFct3DM30LobAlcsc9e+Iy6NV6qC6FzBNlpdFetjpeE0LmC3GWpcc4uV4fQeRU11OVzJk4PofNVy13uobbq7gihC6Shp0VXtZWbFUIXCnIg01PQpQ+H0EUS2Hd5d3d5jzELQuhi1XKXpUb33s+F0CWqZTU0lDO2fj2ELhXkfjWN64Ye/V4IXSbIQ6m2hl75RQhdXmlL4zVovx9C6ArV8njJu8+vaRJCUwW5LW0j069cbe5eKYHeR1oL2rlNCP29Yt5Y28XR7UJomgT6EJ7tFyF0lQRawxbeMBoq35WoyEzRWjvGPUeG0DWVhpoIavdRCF1bqZWLJ0VHzgih6wR56raTm9+0RwhNlw5exesLig8JoevVVtlhnRX1PD2EbpBAW4kdZcaSELpRAj1nEm0Cb7QMoRmq5e2WnWPfbUPopkotEgVXHRpCN6uW2yJTcMjkELpFkEcfqPd9IXRrBdpY0PvLQ+g2QXsf1Y62aqOJcQjdLshtyXfWrGCwGqE7pKEHq4mgmVUhNFO1bHkJrHlwQAjdKcgCFYfXfLhHCN0lgd6vqXXhQSF0d6VWN2n4xXEhdI9qeRKqVnTjGSF0b6WWtpGa+LIQuk+QrUG/jrs9hO6XQPdrk7i28yP1ITRL0B5v/2Q1pl34fAjNFmQ1tJ1O2+ndEHpQ08ZTVLvMtIc+DaE5quVRbq62Fv8aQg8Jshq94rpDVjYPobmCvrxlF/v/1wusu0boYfXL/j+O6zrvum4IzRPkdbdxXDdtu+4hVC/IE0BBcee2vUOoQW2V+1XXeeQ2IfRIpV+bCpoxMITmS6At30wavrhzCD1agRTOT0v2DaHHJNDrS76r8277h9DjUsPWaBHXDd/38BB6QgI92aThB38aGUJPSqA1VL8+uOj4EFogge7XeoI+OSWEnhJUnod1HzSMD6Gn1ZaVl+O9eSXbUCP0jCDPKFnj5o0uDaGFglxLGg7f75oQWlTRUAKHX3B9CC1WLQvMC3p8ZggtEeRR3kxttX0whJ6V8p4bG0j5qvoQek5tleOgup43PhpCz6uWzdsyrht7x6IQekFtlbeGulkHLwuhpYLcL52yxp79QQi9KIGe2KrV72q2oUbopUotqfHtoh9D6B+qZTVaadf4JBdCLwsqC5xSMyYfQq9UBCr3dOS5LUPoVUFWXjtUzTtrhdBrsoYt37gNNUKvqy2r0S0mcd2l8v0NffecaRafGQ3aLISWqaGyDjqfbBtCywVZhw21NczfIITeFORxZENp/9cQekuQBbYWdNGiEFpR0Zy9ZsTnIfS2NCxbaXL0z84h9E5FIFtDw04h9K4gzzSOKZecGELvSaBNoR2q31PTQuh9QW4rJ+id+hD6QAK9vW4o6IgPQ+hDQeUu13Z+okUIfSTIGiqbPW2j9UPoY0Fe46o1rXe/EPpEkGvhQi/YLYQ+lYZWXu561q2HhdBngjyUitVnHbpalz+XQCuvA0u/LpNDaKUsbweVCJpxfgh9oVreynUsmPXmjSH0pdpyRKFaszrcG0JfVWrFErjPUyH0tSC7a/Vr1mPLQ+gbCXS/No1r91z+dQh9q1q2htbd8GuTEFpVgeR4ez7bOoS+q/RL0fXN7duH0Peq5ehaDuqD27uG0A+CytOm7oO3Ng6hHysabq7l//OWIfSTal05+hImdt23nwwKoZ+lhie23PW3PXYOoV8k0OOVCDpj7xD6VQJtQ20N/a45OIR+E1SeNnWzbhgaQv8UZGtIw7FLR4dQTQx0SVbrjPEhNNFQe1tj7N11IXSmoIo1xr53SQhNisvWWENZopOuCaGzVKucC6mbn94WQpMF2fIar+iV+0OoNi6Pl2xY02VOCNUJsg21r9UcMC+EpkgN72s5QZs+HkJnqy3P+VZS4+wlIXSOanmZq8vR4pdD6FzVcpelRpR7J4TOq6ghgVHhgxA6vyJQhho04YsQukCQDaWbh0FDvw2hC9VWOS0yZfo9UQhdJMjK5+Mpg1Y0DaGLBdnbqJbyWSF0iSDX0u1DdHm7ELpUanjBZrtGCF1W6Ve2a4TQ5apl5Tt71ziw8l13pJXUyJnRiNdDaKogTyfyXX0vCqEr1ZCHuJmgv7wUQn+v1CJHNXdgCE0T5BHJCzrq8hC6SpBN0VzQrM9D6OqK5k3k/2tYrY3QNapVXkGToysOC6FrBVmNWNCfakPoOkH2XZsLWnhfCE0XVF5ck6MzVlPjekPt0bA26sZgNUI3VDSsEjRr4xC6UbXKCdDampt3DqEZsqEHS/6/puveIXSTBJb9SW3N80eG0M0SWPYntVHLU0PoFkFla9RGHc8PoVsFVZSvGXd9CN2mtqy84v+apxtC6HZBXgvahqIDng+hOyTQ87OHanV4P4RmVmptIajv9yF0p2o51dBFC/nUfAjdJch3MFp3NeuuGUJ3S6A13FirNe0WQveolo8GzeK6QU17hdC9gtxlPEP/rUPoPkHleVgXHZuG0P2CyvOwbtDY3UNoVkUN+f/56x0UQg8I8njJd80/tTqEZkugDaXYNXplVAg9KMihl3aNQZNPD6E5gjzK8q41N9SF0EOaNuWlVxd9eG4IzVUtd1nKz+94RQg9LA2tvBxvtN+MEJonqOJ4o43vCKF6CbTy7aRh7QMh1KBa9kK9BW0wL4QekYZd+yy3hjUXzQ+h+RJoDbUbDpq/MIQeFeTZu7mUf/IfIfSYoPKqrIvGvBdCjxtqb0PNv2FlCD0hNWwoWWPQh1+H0JNS3tbYUI736SiEFkigJwCR/F6rTdGnBLmt7PohhJ4WZOVVS/cPIfSMINdq9MmN0MKKGuvZJ19a+b5I3z0izeKJUfRACC2uSGsaT4oKNNQILRFUntWTdPsbQs8KcqdwvOtsH0LPVSCC/GMvCaHnBbktck0fvRtCL/xu28lRPgmhpVLeneoaT172bo8QelGQk5B9BG02OIReUls1xxYscFnPMSH0D9WywBbx5NlNrgihl1WrbPbJszs/FkKvCLLyOlDMfu2TEHpVkA0lZ7jsZcaxEXqt0pZughfuvF4IvS7IyvcUNHLzEHpDAu3WJHDhJjuG0DLVssC+ce3sqfuF0HLVcpflrme/f2wIvSmorHztgJ3PCKG3BFl5bQ0D7r48hFYIstNA4Md3hNDbgiywnWrtPj+E3pGGXsitBZ2xJITe1Sh7h1K/Bqz6Rwi9p1ruly7Tuw/9MITeV1v25LqBn3HLLyH0gaDyFXxd+xZrhNCHglxLueult3cIoY/Uli2vhby00DWEPhZkNeSTl264QQh9Iqjik5eevmkIfaq27NY2lRrL+oXQZ4JsKLmapS1LIfR5BZIzvGQgW0MjtFJt2Yaqdck9+4TQF5VaUn7ICuL/RuhL1bLyWyonP/WoEPpKtU65dB3eeNTtcfNxIfS1ID/y6CTomdNC6BtBfrHRUbcGX04OoW/Vlh9mtFGtB84JoVWq5dh1K0H3TQ2h7wQ9//1+PMCoO6f9jBD6XgL9AmNrQeNmhtAPqjXzqyFRrp9uKNZ4KIR+FNTqlY0yaMXjIfRTBZI11pj9bAj9LMjWUL8Wrv9aCP0iNSr9Oufd5SH0q2q5X/0FrfgkhH4TNL1zH6eh1uj2XQj9U3O+koba4/qfQqgmKY+XnPyRM3MhNDEpj7JSQ4OeYNdohM5ULYdDqjV9r5YhNKlSq6n2mmGrOfOzBHmZN+4ajdBkCbQauobQ9+cq32tVxc4wu4YIobqkvJC7CWr3UQhNkbTyMpkU3Xp2CJ0tgV4m+P9nO4XQORJo/8/l9dfbhdC5lVrE/5+dF0LnCXKn2IYu+yCEzhfkbUi3x9GYbiF0QQWSk4+u/kMIXSjIBmwn6M9jQ+gi9au8JCdHfS4IoYsrtVoJWjk7hC5RrfJgTY62eyOELq3Ukk+OfmH0G6HLBLlf8pPR8HVC6HIJ9GApyO+3rBhCVwgqW76230X7htBUCbQNlUKZtfewELpSkNWQk+9312kh9PcKJCc/q/VqXZ6mtsrWqJ31/bQQuqpSS8r3O/DuELpataz82nHt8CUvhdA1quUHZQMEdV0ZQtcKenbxnnZQs0YmIXSdoIqD+vaitiE0XW1VFvKsP3UIoetVywtZDmrWkA1C6AZBFQf17X1bhNCNElhxUN+uPSCEZqiWHZTaGnv7jiF0kyC3JS809pZ9QuhmQRUv1K/dISF0i9qqKP/tS4eH0K2qZYHyQt++MCqEbhNkLyRXM7bdqSF0uwTa8hvGdectWm1V3qFa5eVQt/gfl4XQTEEeSkXX5zW9LoTuFGTnoFqtWt4eQncJci2psXj7WSF0d0WNWDm0VQtC6B7V8iFaAm/uszSE7hVkgdoohx+xLITuk0DPQ+Vkhv/0TgjdL5diHyU1hvcnomiEZqmW1dCMqvnyxxB6QG15Rg2Ip6xoudpkmy3I83AbOd7tWoTQg4LyB+zN9jqlZnTbEJojyNtro+NthB6qqKFwnQfhle9z9T0I10PoYUmzKbJwPYTmCbLTyML1EKoX5CHGT66zfQg1VKAsXA+hRwS5Ldz1R++G0HzZ1u5a0bXC9RB6VMq7U+0FXdsxhB6TQD9OVSQffTYohB5XrXJINjnqd0QIPSHIAnnOufjkEHpSAp1rGiBo3btCaIEgDxbPUOveCqGnBHmI+8u7tm8eQk8L8graVtCF64fQM4K69lkPDWtrHtgqhBZWNFTsWjOxEEKLVMtRqGLX6Mk/htBiQeXYtbamz8gQWiLItbqq1pgJIfSs2rKh1hE09fwQek6Dwiva5i1a5HL+PU35tzVRfMYmh/ZJOux00OA9zj778lW3P/rd1rd+OGP6QQfN7NUkavpqk6gVv9iJomjzqHd8Rq4ml5uYi87MRZNy0Vm5aHIuqs1FdbloSi46OxfdpKILc9GiXLwkFz2bi6L8djc2jXLv3XRV2vKVjeYl5x13jJmtmm+eXvTYuELy437vFq/9YuNiy1duFL2lmCxZvGfx+A9/Lt581eDi3zr0ThOYG3YekHbpc1hRJ5g0Ub3iYRfumK7Y53zT+IadZ5tJlm74hhmEuu6vt31V7P7Gj8WPfu6VPll1T1El/pzSAgpBk4d3X2ym5Svvpls1n1lM1Ha6y+xv0CFd86DtUn84Z4cjVf/L9J8v/SVN+i5/L91zm7PTTq89mypRkCb/fGlO+t0mV6cP735e+tOE29PkiLm7p0/94cG0xcyu6ZmXP54md+/6drHw1nMpmj668O00uWKnc4tqJYWufVezkj+MmtehdNiFjxWHDexWotniEXN7lfptvXV6/zV9Ssm9J4+QyfqXpnT8u2my7McGM3d2fV269C4lE0qr0o233KS07dm5krLlVGleqh+7VunxVc39J+F/p32cL513XLPSjkc2LSVvds+XWr6SlCZenpjGl3z+iwYoKSVrHvSjmYseW5X2Xd6klLTd4uuU4rJpipzkgqkr1f7apXWbvJw++I2ae/Cb+vSY4T2tIVSDe7SZg7frl2rKurk0XaNTCepuw/x56M/pI9d1Tk/vsDJNnqzqm8pa6Z1dD0n/eP4rabJHqzPTpgc8m7aO70h75B9Nk29/fUkDdH86+NzP0vOOu4UScemFDa9Kr/2iWemIuWenyd86tCm9euOJKdRDCDPg8LlMBfVpo2KCZDHzmAbQ6LckyjF8/CV56g/bmFG8VPz21/2LSY/8xGK3yZ8W7961mj9pzFx8aP3Jaay/Faf9/e+pizAhZK7i9M5fpAlTli4iFZoo+WZm2MC3NNM+S5ObTvw11R6UQjX8aQwz8fJJGXLJ56en6PvA06ekyQNPf5fSI2wPjUde/HmxkTlm+PBsqtPmw7u38p/k6ieq0i9vWcBCSuvHXlrUbBiR6i9FNILqw61mNnrjIS+m5LYFi1LsVD/2RZn2w2JydLtXU618jcbr6QntkzRpMXMZkyD94Pl3TOPW8admkvuv+cKMAlqNU45luirFglALg6k5dp6W+YeaL+OLySPXvZ7GmzXTkn0s1RQpJCweDI+G0Cg3qP+b6be/XpbGMOkaU9ME5plTGmTKp1LUS3657V7bhUrQ5Oule5l5dOEGWQlsRBUoMmy0Rqkw0S0af02sojobJWtNmm/m4O1myXpPDExwTDJUAaqPhRhGM7VkZIN7ttIMnyWkX8l1WZQIg8aZCbRcMQ4Mg+Oi2j5T6kIRFsP89eMP0uSTnlumu739k7Q/KD3swriURFGNOszcuc40GTPiBTMsAk83luqmhz4nsyWlFjOvTmMYaVUwgvIv7hWLqjdXPxGV1Luo5thfGNwoxhGJRl7RopHmuiaGit578kdiBhegCIth7uw6LTWCa3v++xe1eF9Pk1w031YHhSY/TzjWzDOnpPqoEnTvhPaPy2e214dpqfuLVCM0g2ncLraSHhHGE4lizCkaRVdooDRX1U8tVOY7jDyAhlELVeu5+PJfPsa9F3H1McyyH39LjahYiQHD2SVqWEu4aUkr0DRWp83I2FEKgxIuilrUhSIshmFLMCLFi2wDULmOB80sWbxYHW8oJiyUpge08YKhSgyDECNI/dO772fNPL7qI7eLH4TGrHoY9gIz1HNRLbASdaF8jGHUo4IRKVDgq01JXfUoQphIFCNeNHJ7ohEKuCgaUReKMOsqYxcTHIKWb2Hl6Y9g8EKirRJmnlDT6IImUY7ZyV+8AmEYV5Uo/v8Zaa8k0f+5Vdjptb29xugWNNm87mUzr974pbajT9Nk0fUanM2e0h6X1z57aZp8eUu+1PSAC+R38yX2B394/dlTXWLkxcdnVdABGQQyFoqtaAUa5Qgl1M+iyj5pZtylr6ZnzV9YlNU/02LrjCPTH0ljLBEPdXswo+bNSt+76Y30jq+Wpsme2zzjVYhQqCbIRDPawrSvv5cmn/1xWzmaV9P93+2RXrbOE6kGey2pd4/X6SPXaZ2OGbGmelSbLdgdjxyWJs0mru3ghrWtqV50XIeqNAO1Q5UCHsGElSAatd3iPo2ghnL/d28SM7gA1aAVYhimrBFmNkU91anL3EcYNNY8NJPof+p009IVO7XMVgV6UheKMCvuodTA2qGmaxyYOdRlP07wUA6Zc61pUv3+82YwsR0qEnGoUDtUGHQ1gvI05d6sNSlzqJWlFvfbuuxQGQ7RiNnioux91IUiTHP4QztDIzhUlpodKmuNgSK8gCYv/2WkmRknFlVFJegeDhWKDPcXqUZoBtO4XdnJimA8kSjGnKJRVKvwfMni8xR0VTc4cIWZ9vd100XX79yQUEzBc4PWe1HTtiGJN6srKqqoh44ZcXG9P2g3r9f8L2pu1CePLrxe7m/PeiliGsu0ZhQOvmtG07eo6VefKL4p/nrbSfVyWuqEhBGzaB42nFQ8x1QefraZK3ZaRFTRkJyzwwpClHqotI9iGHxMQhTBAqIuVFOphxmFk1r7Wmpqik4whYssH0dvLJuYL+oAUdRJRVY0dRg0C2FeIBWqaPMxM7TL3LICz5yiqQvz6MJcSd1Mf9hP8/GY4R94gmpnMfVGC6MTww9mmDEuuvL0f7ouFGExjJQvGMHgeGlFNA3acxZLveqGyqBl+6FGmwjrATMnFRemXpb7zXnT6xTV1EeCwhU6TZyQQum5P7B7UWLf8xVfUeX4Dx9OkYFvslCmHa1Ak7Xv2tUMg5Wu8QolVhUv+XyeBH9hKzq+QnrMFyztIngu6tiVIQRVkQqN3tAG8tJeR9HpeQ6AYBQdQguJhlxjuKrAbDuh/SRc4eZFtm4o+6s/1H76Ry3vx6TM6Wky7tJ10ue+vxQvm60Ootsdj7wpY9ioHe+y3iQ9fWmvd1hit7lrb3avNVUAfJAZIg0FsZnn69JnuaLNVjp0PZsmG2/Z3FG8vIGqLUg9qfGjKm4a018Yedo5Zj76+TZPsqT3fdcUhaZQfI0/sPg14MQxjqqLTJYPnt+QFkreWpl+aAhNMDwMgRgHwIRpq4OwdyjGziG6FmPBiGxt52OvgP/XGopObXjLNGY4RaOk9tMXzNBFF8VU1IUizEbU4BXl/ebLiGsVCd4VhBV0QLuMQZtXGc0oN/jc46js+MwM5zeJzU4cqpxCmZcWy+E65iSnGBU/WNKWNjZ9568d0ikdD07tk/CBUOr6g4aguPdR7dJmEy8vytDbSvzgYqXdqEOkVET2H5mM7L9azThaQUeZorsZnc400cYVdWg43s5CS8xTePUzH9PcRRhH6mBbC2EskAptPPNhYDsLGG1GpQSGsIMQy3EI65vABEFQOwsYOwsYnIWLLtPeRl0owmIYBsWIOlygqOw70HXV1QhhIpEng2jk9kQjFHBRNKIuFGHW1SOMy8M2dAuabRgqW0zGlzKPc8TcZzKPw4kKj0NlexwcCyMLJYjwB42SSxBeJDKf4w3yCCwPpYAWOyJhWTJFtTfe4lVIs1CFVbuYObWhW+aC1D+t+nmKij732JSj+clpAtM63kxNdWZZFD2fUBlh0Ih/tYN6MkaUTOn4mhnpoAhFZtH0FjO4ALVZYFbss0UWZBbe6lOi6JgRW5ZcV+kaBXqfmyrqfDCF8cEKhtzLjkf2KOlA31FxYacSlHOYPxCrUWLkxXemroJjRgY0xnU2Mmgi311FDwrs1taV1SDdoz23aWFqRywaRTkG6pOe9zoVZeapP3yfWZsQlXwI1KrAvHJjuxIl7uzaueQqGvcSMqDWoJFBWAwEE/2qRcV6VJv/s3HfgW0+96agVMOv8tR7Z/vshvec7AVZ++nFpsq7LTJD/o+JqFDxS/tRiiviKOkY0KZEiRknrmeasPRgctEgqft1mqzYZ69Ss4n/0GLZS2HB9DSGoXtG6O9tC/4gKgOcVNzDoaK2P9P4h/12MqPBHGRm2MBSVrT3fUUxgwtQhMUw5LmMsOCe+35r5fmWp8qbbOq03G5vdzZNDmjT2swHz8cldivFNV/JrT7jRYOMGAapRmiG+eZ2tWA8eYheRCK1u9yMdtRXzdBXF71y9FIxgwtQhOmAsNTijdCeRtHbpVS83Y2z6qAJuwMMCTqXYNCoAmWf8Cgi1QjNMOBuV6NvRZgSIkE0O13HDg59Yv9nT5CkK+M/D31YEU9USgjsycNoX0/XO0TJVIZPvSgpNjaN2fVh7A1hSBN7duMByd1A1Znsw4DDf0pxtbJAGmNCOz2cu9Ylke5X8r7vF6DKrGejLGU9yvowUCvjM6RFilJMY9oVjZwbFY0IKJTzG5jsfdTzroPOylMyyu3V8LjsPCiL/XeO9dHn8rZkAdeaVJWZHUbjrdW/YSnpdeiFxTMv36gEfbN7z1IMg5M1cuXorVyUie+6jAPCoLGsJrU0Qr0ObWuGWM1F2ZCoC0VYDIN4I7RH0bICbVM0Qhg0RjzM/yVuDfFGaI+iVkD1bG6EiQQL4kWZu7ILeIMS/fdsbow1TML2A6PTSTb/2cPkdYtmLA0GaVxIWNpHP7fgZkP5y1am8Sc91zSTPPf9WmY0IqVfblNR7gsQC0WYgtRODHrBCBEnRd0d6qp7kexjGt+6oKUZpSubmyEPQ4e9c93+VftsC6PrcsD/8m56vrxMp9cu0KpQ5ChlzRCqKz7lFDauyF90XtdVzhHZ6ZJYJOaLQx6KcKlBMZakhbCnIBWasDXDsPe6BDOAKufsEJUsg6wDcRQU6f6gFlyCdl2FFpBhzRCKqrQCzXqhThelABH54CIemDnqcJCDFZXXO2RoqnM9mozWIfRtzVO1B3P7V5e4xNHtrkxdhXwEMpygQCieh1agOhrsb0Y3flkJ/ANV9LGIDJ8Ykc4GVXS7FEER6lgzhKAqUqHRUs3xyoT3AhP93yxOzthGOHRTlO3edbWUfl+chJUwslwTdbqp0gBrODLwEqQuFGFenIT4SlkMcFHygFCdF643o3zAzWY4ZXqFDz53plc4lMGKYdTf1Ag3KRSVSVLXJdmPMGgsT2xGC/NgM+NL/RXkyqZoouOQN1IdNTPV6LkRTEEvbBu6JVtxPLDRfvcbTHGdRj1NdPre3oziIV3Y1BUl6GJ5hTXZDoobbzkljXVk0/55n9UqsjG5CKETdV7cS54VIXhlpEJ9VIBhL3OJbpNbagG0YWctAcoKreQ2nlP3WpWQ7g/rNrmC03eJdl0FRZBhzaiHqrQCzXqhrFPRey4MBxCfBAhwH1+1SfrZH39QUuKc1Kcl0m1Qjqj+8PXSJS5BStVV8CXIeOoPnbKNnCtOWoEqyZXdeTIcLkGCgCpsicjwPoX0mC9ulyIoQh1rhhBURSo0ukdhNcE/XfIlNoz+aJcfVtCHN3Tl0aV4asN1VCkm28/aTYfWz7VxDSpyKJVvGOQbcU0WvDcB4UlFjsmMF9ShEEwi12pGiYmsKJ5/euc+hMdFnCRXCj5vyyuTM/pdXTSEJgQ+MMQQmnlFDdxn5O80kp9J8B6M5GepkorUN1WAsL+ZBBhGE1WZ2LtTrco01RLVMktl0QfTGIbLbyOax3KUu6ojiwi8l2CZknMuMFqNs81oISg92aOk4Pma4mkfe8DkoXuVFN5ek215MGxSFPUmRV1ZoIQwKD7JO52nAQzTzpsUN7YyRwmKMN/lIt5IstnGuoj+Ubp2L0nH82WChWlM12GU01lihiMLhygt9nwJFIo5/IFtiNt5v2OgqA6/0vOFbAqQ6VE/5zEE0Oi1XJRj1GXKennmbmaUT2OS1CeKuAsKGeuhyqdlH7Qr1SuCKGgo6pWAfESSd3YkoLPhLiXc9LVf7EoAvEAufndpttA0JoUG49ARBjekMcGkyxVn7SJjL9dhc3D24YT2O5W+22SZ5sMOpZjeyCL1CkhnFtXneqknp3x9vTJtl1tnqWeq2CTrTfSC/D12op8+R8D0vm897SLK3jLf8GtQVlcMw5gYYYDVIxlOo0ZwwzBqBzONFe96XBM2HBiSTh5g0gcMMBRhCtg7q69np0YIfThjEuUq6TPRkx8Voc54wDBbXEL+19ESFBkxDFKN0AyBi9sdeXFrh0NPVrUzjXkkAqM52MnMby+tIxeoogMO7yxv2UeTsrOFxTBYwAhd+8dfWuhYKBt90vMrGw0VodEFcvc4DHn+f3OYyCMDGA89DDmGK3bajFRm6xKx98HbdcDOpYTjK69S/jy0iyeI0oVdkCy32aWEx/QHcrmUcM+oIqEa7A5u0kLJy7Hs9KHg85T6oiuYO0x/j+JyqKY5z3b2ghluRAkKNGKRgwC0IY8sp7SGbop3k+ItZdvzs42HayGoVYMhZ06JaX9/LauCwXneslldx5LjJRm7pBZMHXo2MrRvY8FED2r1VhS1TUX/N+Mx8uLyeDB/KOr5Q10ZSDYpj4dmmIchkcnNMH9dFC2oC0WY1UK8EdqjqBWgrhSKECYSGPXh/9hEIgCA0dnhYzM3X9VEm6q2XAZ/Ssd1PZEIo/yBuwupp7RNPTnHSOfnGWyuvgnV1XpHjiiFZN/zO9FmAapDbvYBFddt0lFUOquvPjrojGuqI2lbMx5y0YhRdlECdjnPApe8ONSYlzVyalnOrpGh5402/ReOGzk5Sd1AzM6e38CQdtpky6dTAjgN4Otyrk2yrsP8ctuaimm/VjSo5B1VmGTIgFqDRgZh+GAznnXcn6jNKPlbh7vMyBlrzKQgDhmNoXQhhuFYbkTGw29r9ml7ou4zCqYRBnWmAEbqcGvcUORCw0V1uyh1buSWMUVYDIN4I7RHUStAXSnESJjGiBfN0j4Vc3nmiP57Zh2jAcM0MCOj/q/LBWG2J6kxcs/ppocqZ0HkXv1+XzmIb9LaT1WHOBIhDBXUl8owuutvakY7tMZPRbef1Vxj1ldep3lJkVv2QflMv907a/6mJfV+R2X85qbxksWtyBoU2bXkQN8vQGXTgj/Qc0rYFCrmKatumcY87RONtGvlzHCY0ZY7UJvGT8oqrVW4cefv8EnZkZlXCmawo02A+H9hDl+kEZI5/BfHq6L/6ghhBoraLtTFUAiD+nQDY21gFN1lWR6eiO329l/TeFD/9b0zJlFUZSuz7UB1y9TLjOLRzc1garfDm0sahqKJTqZ95GHUaxiU/XrpFqLS/uHdN7fpECYSKcLvYUZ30hua6ZHfICu68vRuYgYXoAhTmNWtpHurkq6XlusoP4h7y1cV/26uObXENOb6BUZ3BLPNEAxT1APhyjCIsw2Qzyx1g0xbKfC7p8ZuolH0jkZELsl/STTiZtg6XU9uTMxgYsFsRGDkG338VuA80gcNFnysmEyh651pYo+k+7BaXR5qIbFdZ9eQUA7L/kDWhZHRasZ1z1KU21Ojc6GphvfPZtpusVV6xrEqwVTSgvc5kjmqMYz8ZJKOMEe5nigSkLNhQ+VBbjNjvwSjGMtvP5MHvxmva6JfdCcwXmejqOR+kyyXHsU1D1q3lGj5FBdd30O7RXdvgkoyHajp398aQnU9ssCMmtVtjVTWcUj5j3V8P+dewpCkJW/DbT0a+sRH/mXcpVemMTGF1lSRrLIZHxNg2Km4aVS0kGOmyMQ5nQU6FWMYqVmoIAUZQlRjRY/0F5KtppwsPJrRZEXKhCtiI50yp5ghveJ6PK1FEBTJmmlnKqu8finWIbiokwDPh87WKvsm7f7GaaZJ9fv7mlEyuUh7sRxWluqU5Qp37ZqzA1KwaVN6J0R7nJZuXmuUlNDaQgMWG6pBldKbaiZhc4bBz3gZvrjXDfayUMYjhkFZI2hPUXeHuupehDCRyCct0SharqmukfZf5Ne2N8MSoRc6Oq0qavujw74pdEqW86lm9uZmNE0SM4reC5p3PLe8sUB+BmozwNgMMOR0KIp3d10d+fHdphbfyNA3a8ANAnNcKpUSGVWzob/i+jVNY/ZAGB38tjAjI2VFSf5TF4ow3wZYPPaA0fTLElDrHTIjyzvxbBodoSgdw9ANI/SLou4odek5wqAW38iQFrAG2vKKuuSSBtrSST7iSBZdP9nUGTAYnWNvNkNaCz8itzszrTm2IOPOZLMpOgPm4YVheCnq4aWuhi1CmEikw1o2og5bZG5PeW8Yov8jlz4S9N+6C7mkaZQ7/sO/aRbpIIsZYbRFq97gghMx+ov2wfN5YcVLi0HKzMyR5xpUZBv0B3ZYHAbSE5apBlZ7x/mmmsEzzWjWzzVDyKTAl99ZLMYnKmX9mobj4yLzlHShIzMt0KIurXZCkSIaQnWCu8YMp0bSe4m6Z4FQhRr8VoPXLb00pPN0RhuYJrxF1NFXF5E3aEs42GlB+ffhuvI7LHvajlJMFGwvv5X5aAYd+tD6T2YfeA7AcHFC83sPqc62oMRhXJKlCso3NNNt+immCWdEGPJHLoFibBa8Z2H26tLitZSnTlAeHvgD50D+Qp6dVvwshb9AYxw/jDbxR8yQ5eKiU8fpe+X5Od3dqKTPx6k2jalKRnzlHkKVEBtoRpuesirvZzk0mT6Fupcw/JCEjZrXEInOjMob3qrc47bO+qpThyikn8bgaq1cmsrvz1Oid4pCgOdZVfied1Oe8EE9HjDbK1OH+bRcsp+7yNsUuK/XZCsoX3otzDwGGRrVyFd+t8mhnrFJ4a19zHD0VecGKqDZUbO8n+KXkqbCEwXFnnviNEsxE4PgSaYe7OWlEc4iNrY1uSuFqOea+vc6MCSdzPy437tFAmYuSOxKyNloVsh3ab7rS8sSWyc05p0UjCKFN8xwwKeoz2WuTLiGOB1DeuModZTfyjSWLc1oOWxv5vgPB2bh3owTiw73oFSLL/m8UHLHNnpjXbbZgs4GHDH7FUi82Bj8+EXGiTa4p3wyJHktytPq7LqJey/qKs58Rj71vTRmqvNF8/5Mm7bb5FGmcteZ0aOn5c40vvyupF6rcpIZjKiBr09kIk2YyfVQfcw+6E+9ZgCOoN4JTefCpaRPX7pkNtXHjj58aSWvZ4YklExd1FVIDy3c24pQ6vsDA0YJUkYcaixeO8LbVgAvpgNbvRIdC60iwwpVPjBT3o/CKaZZ0yBnNd8M7WnBNtj96rKkAarNscGOme3IiPyCrD0ruzWlLjsYwqB2zDB2rjB4WxfFKVAXijA7Zl/MVJ7OETBA/fQahrfY3If7EMblFelWrhkU6+V1RX+R8p/Be27ekFCC39O4iprTkv2SNfi/vudOyAvCoIdGMDsL01+rigHQ3RahM5iI3kG9U8CwJLOH1WrwSTMcE7C8EqefyS38nz0K5/k2DAl1OqDIeW25Jtxb+yxvQSTCb5OsPRu8z3paQkqYMVNa8rxxWzsbzRKdgy/3z6asKs1AozM1H3DtmMPDAUNdlSQLd3ERU2iaOnQgTPRjLijZH3/A4VKCh6uuQmYUGdq3yCnuJf/W31dsUHniV8zwpAe/oAubFhrKHhrWdqXP/rgOHmYdp1tZ3kTSMYy8MRcf65Y0FDJAJ9dPyAkRHe0yey3T+IKpbcwoV9HCDAufUN55GJ29SpwBeDmkY9NLmjU9rRnUT5Fg5HFScriKz5tjSLm6JorC33TUad8O5fjgD2wtlCCadxXl9tVC9hzSQnHJtAJ1szDoQVbGimkH0E7avMR7WavO+NMXqC491zLj7sLQ/7t3rSbSW1eJ2UO1k68rnzqEIV9Huf31lORo57Vp66poEXNp9XJH/4pHGYWgUa2OJBpHuzplt483k10gLS7ESvD6UCcfshYxUolpZl+gFZP5AmYSK17XHqb2dzAJwScMsQ6vbbRaF2j5xEqXLCxyNFE252xPTb9t5IsOzCu05GK2IOmnOjx7QgjnVihRuhkFVz+aYZJYE/RDNSh//A7T2l/9xHT3Rwfeq9xBLXxTpQayrjto1UbgKwprDoPH/nrp+amykFPlti+S6acW8UQ+0nXpc02GcPShKK+ZXZc4AWHQmGM4TEIGAYY55KJc1FAXijBZ+UUFPFdkCO1R1ApQF40QBtX+nuka3aVFzDJTHyIGwwyOQyUGaopsR2RfgHoCwCjiKVBCO3TR2UY8iUw/XR56gmKyC0wdbcBwOt77qIscThYJfWQ9bRnz/J6vyCUTlCnmD6RfKcFzEFfhmg0ZOiuVLBQHQCtQ7doPmCHYcwnu0qiS/UBEMnihhVCoW4Ehy6qOKuO8ILsG5neHP0/4RM5QKTE5MEakoJ2qRua9tEA8JeMUEjyx+j+QX2vqw0D/Lk6CIi6uRKK4YszsNcYgBWTJaR/fbIYI8/FVGsqCbsFxAVyLkDxJ+P0d/hxqHWHYzChBAthVtJx0//Cw/OsGPMK52Q6HVqBefTBSKyuh4q6Cn7EMrV7/PBnqVmAIvChBqsdVUAwZ1hShqE4r0Og6LXjZWatMQQBpFZghc9bPtjzGiT0Qqrgr+6C7cJdQXrFBKcTjNV6rOLdtrIhHSjCNcLJQmc2PtuwjKOGVycGIpYorgsqvXGVGR4V5ZhpdAgG0Qsii1uyKzCWQuqEI5wSoLgu+M6Pbpp/M6AClKex2Mg8AtSYwqEYJdNVmcjC7ZEOCr6Xn2569g2lcsUl0sRYUZpSASDvamma0EcimT2RPu2TcApQFJQ/S1EcY2wNGB6RfCzB4HB/a1VtnJ6BsYHQ/y07AoDBF3QPqSqJNB7V4/ckYtgJrwA22kl1KPW5FJno3dhynxKCy4dNmtP0uMaOIU+HDwFLCAwBibejrz25TimEURGcIkTdFCbxd94KpvZXwfto0RjyM7llGmSEVt/ZdG/OccidPWKjikVIMIzUzTWAsDQbx7ijt0XMopihrIg8Fg4UpapNTV0OgU8/TpjG/bRWNNAHmmuFRtosSVlEXijBdz87KRgeVGhkga01ZGUhUlfmduYRFzASRSMOUzYLoK60ZRd/ENA3KzO9gRjuhDoJvZwG3Tvr1ukj0sw/FBZN0OGitVTmpyJrzB6YfJbgMcxXy1ci4s+v2/DJhB0W1uyhyOtdU7uJCM7zo6rtcV/Wb1V2R8joZ6qt6GOmeIS9sOFDCLuX5binBWTO6PO6F6lR5uBktcR1ENYRSU8PRw2E6gYaPuzy1hlplGNY+JdQ5fivSRZvU8nnIUH/qLVTn93pagbpZGPSQU6q3Yjp/10Mlr94qS2CDEcW0DfROghvcXYxK/6HRzzr38mSLICXRNDej1VQketKmMa6oEEFx1UjtSNX/5U2fDjupi7CnUIeeWQjOE6lQdmozOHCnsolC2Ep0tvLpUDPie2fPuSfiX1PwA6Q1D3rILp6NKyFKJxZm04LG/I4DRtvpCjOEjsxC5UOXSfqD8qKvadwkjKMzfyFvoC3p90fZaAhVzmOIGZa6LJo9viM9oY/aX6f+l/d5JHJchKQFdYi8LETzvIhUqJuBoV0iditC3ghl5OMzVTlHoDv5I3eG5CK9g8pbfm7GBoDBInJamYk4pWIzJpCNqHXCv9igMdc5BDMrhtVO9pRjEw8Ew4uGUK839gxmAhPPDK5RfAOpMl16rt0AZTYp6bFYG/zP9UaYcBSVveoVnXUqMiXl4kyVL3/eDNcYnsXKKXhaa+Fk8xxvit5QrwQYJhAlvFaowuJBhlcTQlletAJ1szDooWp+2VJgiUJZs1aZVWyEZU1Rr3N1scjCp/9Q+3sYbVuZr2DC4zw4XNibHHbhmZqNqzSG3BdIZRgcECWQ5yrqXT0yNBb1FopRaQUaPaH1xklR3m71PJNdI+5JU6bA4kdjRY19s4OBxjzb9GFw6Ei0h9dWq6nZtKR2TcnJm/FDLhjmnIN8jYgPBhiSPT9mJlOK3BSa8LzmQe8XuHyLV75Eo9BUx7MnTGMSgzDeQGCITF1UU8F1mdYI06ppW5LkYqyZW6JBLYE+UgcN+iqZpDq8T0fIqHn9THUHs50ZDdBAM136FP3vtCT7zUkddUAtflD/VIceGYef62CuhAMl9iOetUHHl7JcVe2n5afRPCwSjXRIypvhJpi6OiQ94ySANtMpNr4GLzu08PxXJNJlZTZw0VnKYCsJ5FWk4PBAM6xGzfXsXSIDxzWhD59afYyZpO5ZZGpoWu5Z5NWjpuWe/lGfJk6Rwddp6zSmo4K8C00ZGTPey2CIRV0Ux0xdrUQ/VOSMK0F+0yWFbiz6kRgtSJipr1JhOO/IPkVF5Z/IN62ZQuXb+ecrPtHWcZ7m95uKD69LNUBLFf7cZ1eqKJKI+1atkwVoaMoOYIYjco/8o6l3fLIouDRcs9+KcVWqS9vsXwriokfZLm2W3xehfoALo0hyvhk1qQTrHeRyb9Qp/i75yZvUsfvTmG47pSFfjpl1Vf1FlnGVb1KRrUukB6D+YQiMPN+XZrjCc1Fu96kL9f0ajB8uwsinu6hfTlJXw+uTMZQ1mTF0i0Ugx7Svyr5vk0C1B95nhpCKJLSyDR/rPLlQO8VPypndw7VhUwV2U1XKR/rsA/6QEh4aqqgpxS9LsmmFULU7j1ag0ePyJSxpfqeh1O5cM0w4/6SD2ceFP/TN7j1Lukm93q8+jLDuKOofilCXsyHCoFrjbeTpdGpEIxiOJS7KdkVdKMJiGMQboT2KWgHqohHCoMoTZ7r6VvJhDgHq9bB5MBrleXJ6DVoqL83jYATVKde5QB45ZojiOBeV083qaiI1IAyqi1atUTG44SKMIqSiqtUrYTNHIeNV9VAFpfOUEZ+T5VxhtDTxFpk7xTfidjR8pjGrCoZXJWaU38r8HeNPXSjCPCEQb0S9rdeuXVTxBqXk75Ln3bFBGkZQbvFsgehtHYPYTBhRxdVjzejsoJkxzP+uiXcWeeHMlWix0TUNyrgidx7+cPNVZykOcBf5wK3qfSk/JufKxulVnglr+y1y92NlOCdBcYP+cMnnXbmyTvfcRotAe4pa6F9CMah2qufMsBhcgqfdVIFaBgxCuXdyKwQoNMtljPXARCgm9fk5E//SCM90zpKl2pTcFxihOp3nPTlZ0e4+Am0PHoVgIBSDZrZjS5KpHk2JsMgQ8/Q0ITfNi0+oVYRhQ+ACSlOK08CjaqunuwmV7caZwc+6BBahCtQyYDACJXR+xtzj3D4yoJlGOFltMQvMcEfG8Pi1g2aQ33G4wzD8Ophf4fsHhCQX7r/mbkuDyh8fa0YxT1ZCJtGg1crB8g+lSQYMQinhVjg30iwyoNE3CvO0FGwwZQIKZpQ3l6Pd2IGYp5fy2BK8C0tiWyXh9nVd9jYWmpJwh2ng6jKqQNKM004wmutZUbY+6jLX1r5rV/5pgY8Von3P23PPN1/nIRmFoL5WhNG+pgzra8WEf4eE4lAtk1TRwxeo7GOuApmN/H7GjHYKZQN7ECxcRRPMKx1WemWZDxy7EblRF7Xrpy57AcKg8os5eXv5Nl5WwmjBZLdjnFqoC2XLiWEI+owQ/ZNf5qJWzuFZdJSHyuwcfapEJzbWgv9X3+ZZXxjapKiVoC5aIQz6333KqglalPhI6e9xxYRf8cAQ9mjkeJuQ1yIcrEMNj+87FRUT5hVhzypUkAJmsdLKfjlkQpgIwVTWv+gTOTF2a3qu/PkBZpSeymzD4YcgXmloOUFZj4nET5Gh7On+8M5fX3IJ/IWrkF1Hxg/7acQRigOiFagvnGAO3u5b99WXj8wFLkYICFmquglvW+KREn2JYfZ/t2kpgSH61MWghjPmlqKD41OuNKExj6NgFHWtYYYMP65Ny6V5CSMyA5Bqi/ILPBlD014+QzuOnQiqQhV1nWKG22PuEnQR1UJBVivCWwK2LHLjAAy1QWDe+etl9haEoa4iTyhPWvJqs1CWDa1Atee8bkarLbsU+WnCGiVuSaDIiGGI6WKCMxgJmW2GVCYZcrnIe4i05DPvSZEcwxB4GOFwQFHFC1ldDusIgyoH1EHHq3py9Z3McF/COUKqddaN0oPc15UQxkZplYzI3yikaM9z0ew3Akp9Ou2qSVfQwL/s2YQ20OhcRT2VaxU1NVUTZqN5TBxfDTGT9HH1qSWDeWoR1HpqcRwgGFVVZsNBnkkIhSZcm8IQkrkEV99U4d7HMjhn4LegbgWGRDMlrAdTS3XnIRSa6cz4+OciMOyWmitFqdispMOh7raaK0F7Dkfh5tYGavEwpBEoQfrbVRhOZNCmDiGveI5RDar8xKlmdE7MSjCDqMKUsgzmGA8joG4FhicklLAeVEExJp01rUw6WoH+B39ni5OB8fqCwWPZy7Hq8HJQhNlj4fSNsAvgsXAF9liyvowQmdohNjLMUWe5YbQx8kCyXp39Z+pZy7Jn1kI9a2F8fIHhZomIxstGe7DXEcKgFt/I0HX7ZmxB4sfGUSybylj/L4+G6zTDK3+xYUT/PUYl/Qbjqx0Y3KGNyktFjApFWAxjo8JgVK78bVRNExsTYVD3sZEhbcY7BTMOcGB430nsprMH/3Rfg1JXuRIZPu++3CkZ4fWb+qqGb+Odzy+awTdzSDS1+EaGTczvyGE88jD8Y6je1rjIkpV8SyZ/VIxhMFcFKeDAbVC2ezUaIUwkGIhZmt0Kq/wXxsuM4mttiaqn/4kZrD9PFHQo4a3wSwXySzroXKBgRxkr8q6YWXe1pgpl7jaT8BMJGGYcRXU1201/UeVzdqiSWW8sJDDI14FKVA2yu0iB6IUNu5jG3FSLRgkXFqJR2y3aU3egTjHtxGxUkJPDLkwSLyduVDvRcBbEAekycSY+tHBqw3Wiqkz2UMIiBV+mccUGUW7UvG+1N5yYas3drMP+Btlp2F8qUPSP/9j0JcSHUX+/McNDIx8+2YDZbqC4bX/gHkInRQGvZU9YeETCZRau1AcWJl7hrbaKoKZl2xY3tFD//BCm2cS1dYhY00opI9nSd2saJ231ywuN/5qQemb6+9TJsUdy4tcwrjCDzgqPU2U0El3rf6Ylk2S6wiiWYwNUEqVryVU0IkpuzTX1hG9kEBYDwUQ59iGNY9EXeDBc2BPceuUqzEih7hAM2y4leJDtKhp++bxHTC2/kUFYDAQTcaHJP4WkznEBfpYZfvSnzvMY+3QxgwtQDyuMVeZ8AaN8dDcz2ruyoB0T4lmguBrl15YXPBVgmAoU9VSgLgOOMKjdBow0yTwZq9iejHWtSekADWEO2hFvhPZwelYAL4hGCIPGQ+b4WJkxdCOBoV+cvdxRfq6vjkcsbZEortgkiv4f(/figma)-->Sehubungan dengan Pengumuman kami Nomor 03/PUDIR.I/KM/2021 tentang Penundaan Pelaksanaan Wisuda Politeknik Negeri Malang, karena pandemi Covid-19 dan masih diberlakukannya batasan fisik (physical distancing), maka kami sampaikan kepada seluruh calon wisudawan Politeknik Negeri Malang bahwa Wisuda ke-52 yang semula terjadwal pada tanggal 18 dan 19 Januari 2021 secara LURING/OFFLINE, akan diselenggarakan secara DARING/ONLINE pada hari RABU tanggal 31 MARET 2021.</p>', 'Sehubungan dengan Pengumuman kami Nomor 03/PUDIR.I/KM/2021 tentang Penundaan Pelaksanaan Wisuda Politeknik Negeri Malang, kar ...', '', '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_wisuda`
--

CREATE TABLE `jadwal_wisuda` (
  `id` int(11) NOT NULL,
  `tahun_gel_sesi` varchar(255) NOT NULL,
  `nama_wisuda` varchar(255) NOT NULL,
  `tanggal_wisuda` datetime NOT NULL,
  `kuota_instusi` int(11) NOT NULL,
  `kuota_total` int(11) NOT NULL,
  `status` enum('Dibuka','Ditutup','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_wisuda`
--

INSERT INTO `jadwal_wisuda` (`id`, `tahun_gel_sesi`, `nama_wisuda`, `tanggal_wisuda`, `kuota_instusi`, `kuota_total`, `status`) VALUES
(2, '2020 Gel. 1 Sesi 1', 'Wisuda ke 52 - Daring Jan 2021 PSDKU', '2021-06-12 20:46:00', 0, 0, 'Dibuka'),
(3, '2020 Gel 2 Sesi 2', 'Wisuda 52', '2021-06-29 12:30:00', 150, 150, 'Dibuka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang`
--

CREATE TABLE `jenjang` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenjang`
--

INSERT INTO `jenjang` (`id`, `nama`) VALUES
(1, 'D1'),
(2, 'D2'),
(3, 'D3'),
(4, 'D4'),
(5, 'S2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`) VALUES
(1, 'Jurusan Teknik Elektro'),
(2, 'Jurusan Teknik Mesin'),
(3, 'Jurusan Teknik Sipil'),
(4, 'Jurusan Teknik Kimia'),
(5, 'Jurusan Akuntansi'),
(6, 'Jurusan Administrasi Niaga'),
(7, 'Jurusan Teknologi Informasi'),
(8, 'Program Studi Di Luar Domisili');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `id_provinsi`, `nama`) VALUES
(1101, 11, 'Kab. Aceh Selatan'),
(1102, 11, 'Kab. Aceh Tenggara'),
(1103, 11, 'Kab. Aceh Timur'),
(1104, 11, 'Kab. Aceh Tengah'),
(1105, 11, 'Kab. Aceh Barat'),
(1106, 11, 'Kab. Aceh Besar'),
(1107, 11, 'Kab. Pidie'),
(1108, 11, 'Kab. Aceh Utara'),
(1109, 11, 'Kab. Simeulue'),
(1110, 11, 'Kab. Aceh Singkil'),
(1111, 11, 'Kab. Bireuen'),
(1112, 11, 'Kab. Aceh Barat Daya'),
(1113, 11, 'Kab. Gayu Lues'),
(1114, 11, 'Kab. Aceh Jaya'),
(1115, 11, 'Kab. Nagan Raya'),
(1116, 11, 'Kab. Aceh Tamiang'),
(1117, 11, 'Kab. Bener Meriah'),
(1118, 11, 'Kab. Pidie Jaya'),
(1171, 11, 'Kota Banda Aceh'),
(1172, 11, 'Kota Sabang'),
(1173, 11, 'Kota Lhokseumawe'),
(1174, 11, 'Kota Langsa'),
(1175, 11, 'Kota Subulussalam'),
(1201, 12, 'Kab. Tapanuli Tengah'),
(1202, 12, 'Kab. Tapanuli Utara'),
(1203, 12, 'Kab. Tapanuli Selatan'),
(1204, 12, 'Kab. Nias'),
(1205, 12, 'Kab. Langkat'),
(1206, 12, 'Kab. Karo'),
(1207, 12, 'Kab. Deli Serdang'),
(1208, 12, 'Kab. Simalungun'),
(1209, 12, 'Kab. Asahan'),
(1210, 12, 'Kab. Labuhanbatu'),
(1211, 12, 'Kab. Dairi'),
(1212, 12, 'Kab. Toba Samosir'),
(1213, 12, 'Kab. Mandailing Natal'),
(1214, 12, 'Kab. Nias Selatan'),
(1215, 12, 'Kab. Pakpak Bharat'),
(1216, 12, 'Kab. Humbang Hasundutan'),
(1217, 12, 'Kab. Samosir'),
(1218, 12, 'Kab. Serdang Bedagai'),
(1219, 12, 'Kab. Batu Bara'),
(1220, 12, 'Kab. Padang Lawas Utara'),
(1221, 12, 'Kab. Padang Lawas'),
(1222, 12, 'Kab. Labuhanbatu Selatan'),
(1223, 12, 'Kab. Labuhanbatu Utara'),
(1224, 12, 'Kab. Nias Utara'),
(1225, 12, 'Kab. Nias Barat'),
(1271, 12, 'Kota Medan'),
(1272, 12, 'Kota Pematang Siantar'),
(1273, 12, 'Kota Sibolga'),
(1274, 12, 'Kota Tanjung Balai'),
(1275, 12, 'Kota Binjai'),
(1276, 12, 'Kota Tebing Tinggi'),
(1277, 12, 'Kota Padangsidimpuan'),
(1278, 12, 'Kota GunungsiToli'),
(1301, 13, 'Kab. Pesisir Selatan'),
(1302, 13, 'Kab. Solok'),
(1303, 13, 'Kab. Sijunjung'),
(1304, 13, 'Kab. Tanah Datar'),
(1305, 13, 'Kab. Padang Pariaman'),
(1306, 13, 'Kab. Agam'),
(1307, 13, 'Kab. Lima Puluh Kota'),
(1308, 13, 'Kab. Pasaman'),
(1309, 13, 'Kab. Kepulauan Mentawai'),
(1310, 13, 'Kab. Dharmasraya'),
(1311, 13, 'Kab. Solok Selatan'),
(1312, 13, 'Kab. Pasaman Barat'),
(1371, 13, 'Kota Padang'),
(1372, 13, 'Kota Solok'),
(1373, 13, 'Kota Sawahlunto'),
(1374, 13, 'Kota Padang Panjang'),
(1375, 13, 'Kota Bukittinggi'),
(1376, 13, 'Kota Payakumbuh'),
(1377, 13, 'Kota Pariaman'),
(1401, 14, 'Kab. Kampar'),
(1402, 14, 'Kab. Indragiri Hulu'),
(1403, 14, 'Kab. Bengkalis'),
(1404, 14, 'Kab. Indragiri Hilir'),
(1405, 14, 'Kab. Pelalawan'),
(1406, 14, 'Kab. Rokan Hulu'),
(1407, 14, 'Kab. Rokan Hilir'),
(1408, 14, 'Kab. Siak'),
(1409, 14, 'Kab. Kuantan Singingi'),
(1410, 14, 'Kab. Kepulauan Meranti'),
(1471, 14, 'Kota Pekanbaru'),
(1472, 14, 'Kota Dumai'),
(1501, 15, 'Kab. Kerinci'),
(1502, 15, 'Kab. Merangin'),
(1503, 15, 'Kab. Sarolangun'),
(1504, 15, 'Kab. Batanghari'),
(1505, 15, 'Kab. Muaro Jambi'),
(1506, 15, 'Kab. Tanjung Jabung Barat'),
(1507, 15, 'Kab. Tanjung Jabung Timur'),
(1508, 15, 'Kab. Bungo'),
(1509, 15, 'Kab. Tebo'),
(1571, 15, 'Kota Jambi'),
(1572, 15, 'Kota Sungai Penuh'),
(1601, 16, 'Kab. Ogan Komering Ulu'),
(1602, 16, 'Kab. Ogan Komering Ilir'),
(1603, 16, 'Kab. Muara Enim'),
(1604, 16, 'Kab. Lahat'),
(1605, 16, 'Kab. Musi Rawas'),
(1606, 16, 'Kab. Musi Banyuasin'),
(1607, 16, 'Kab. Banyuasin'),
(1608, 16, 'Kab. Ogan Komering Ulu Timur'),
(1609, 16, 'Kab. Ogan Komering Ulu Selatan'),
(1610, 16, 'Kab. Ogan Ilir'),
(1611, 16, 'Kab. Empat Lawang'),
(1612, 16, 'Kab. Penukal Adab Lematang Ilir'),
(1613, 16, 'Kab. Musi Rawas Utara'),
(1671, 16, 'Kota Palembang'),
(1672, 16, 'Kota Pagar Alam'),
(1673, 16, 'Kota Lubuk Linggau'),
(1674, 16, 'Kota Prabumulih'),
(1701, 17, 'Kab. Bengkulu Selatan'),
(1702, 17, 'Kab. Rejang Lebong'),
(1703, 17, 'Kab. Bengkulu Utara'),
(1704, 17, 'Kab. Kaur'),
(1705, 17, 'Kab. Seluma'),
(1706, 17, 'Kab. Muko Muko'),
(1707, 17, 'Kab. Lebong'),
(1708, 17, 'Kab. Kepahiang'),
(1709, 17, 'Kab. Bengkulu Tengah'),
(1771, 17, 'Kota Bengkulu'),
(1801, 18, 'Kab. Lampung Selatan'),
(1802, 18, 'Kab. Lampung Tengah'),
(1803, 18, 'Kab. Lampung Utara'),
(1804, 18, 'Kab. Lampung Barat'),
(1805, 18, 'Kab. Tulang Bawang'),
(1806, 18, 'Kab. Tanggamus'),
(1807, 18, 'Kab. Lampung Timur'),
(1808, 18, 'Kab. Way Kanan'),
(1809, 18, 'Kab. Pesawaran'),
(1810, 18, 'Kab. Pringsewu'),
(1811, 18, 'Kab. Mesuji'),
(1812, 18, 'Kab. Tulang Bawang Barat'),
(1813, 18, 'Kab. Pesisir Barat'),
(1871, 18, 'Kota Bandar Lampung'),
(1872, 18, 'Kota Metro'),
(1901, 19, 'Kab. Bangka'),
(1902, 19, 'Kab. Belitung'),
(1903, 19, 'Kab. Bangka Selatan'),
(1904, 19, 'Kab. Bangka Tengah'),
(1905, 19, 'Kab. Bangka Barat'),
(1906, 19, 'Kab. Belitung Timur'),
(1971, 19, 'Kota Pangkal Pinang'),
(2101, 21, 'Kab. Bintan'),
(2102, 21, 'Kab. Karimun'),
(2103, 21, 'Kab. Natuna'),
(2104, 21, 'Kab. Lingga'),
(2105, 21, 'Kab. Kepulauan Anambas'),
(2171, 21, 'Kota Batam'),
(2172, 21, 'Kota Tanjung Pinang'),
(3101, 31, 'Kab. Adm. Kep. Seribu'),
(3171, 31, 'Kota Adm. Jakarta Pusat'),
(3172, 31, 'Kota Adm. Jakarta Utara'),
(3173, 31, 'Kota Adm. Jakarta Barat'),
(3174, 31, 'Kota Adm. Jakarta Selatan'),
(3175, 31, 'Kota Adm. Jakarta Timur'),
(3201, 32, 'Kab. Bogor'),
(3202, 32, 'Kab. Sukabumi'),
(3203, 32, 'Kab. Cianjur'),
(3204, 32, 'Kab. Bandung'),
(3205, 32, 'Kab. Garut'),
(3206, 32, 'Kab. Tasikmalaya'),
(3207, 32, 'Kab. Ciamis'),
(3208, 32, 'Kab. Kuningan'),
(3209, 32, 'Kab. Cirebon'),
(3210, 32, 'Kab. Majalengka'),
(3211, 32, 'Kab. Sumedang'),
(3212, 32, 'Kab. Indramayu'),
(3213, 32, 'Kab. Subang'),
(3214, 32, 'Kab. Purwakarta'),
(3215, 32, 'Kab. Karawang'),
(3216, 32, 'Kab. Bekasi'),
(3217, 32, 'Kab. Bandung Barat'),
(3218, 32, 'Kab. Pengandaran'),
(3271, 32, 'Kota Bogor'),
(3272, 32, 'Kota Sukabumi'),
(3273, 32, 'Kota Bandung'),
(3274, 32, 'Kota Cirebon'),
(3275, 32, 'Kota Bekasi'),
(3276, 32, 'Kota Depok'),
(3277, 32, 'Kota Cimahi'),
(3278, 32, 'Kota Tasikmalaya'),
(3279, 32, 'Kota Banjar'),
(3301, 33, 'Kab. Cilacap'),
(3302, 33, 'Kab. Banyumas'),
(3303, 33, 'Kab. Purbalingga'),
(3304, 33, 'Kab. Banjarnegara'),
(3305, 33, 'Kab. Kebumen'),
(3306, 33, 'Kab. Purworejo'),
(3307, 33, 'Kab. Wonosobo'),
(3308, 33, 'Kab. Magelang'),
(3309, 33, 'Kab. Boyolali'),
(3310, 33, 'Kab. Klaten'),
(3311, 33, 'Kab. Sukoharjo'),
(3312, 33, 'Kab. Wonogiri'),
(3313, 33, 'Kab. Karanganyar'),
(3314, 33, 'Kab. Sragen'),
(3315, 33, 'Kab. Grobogan'),
(3316, 33, 'Kab. Blora'),
(3317, 33, 'Kab. Rembang'),
(3318, 33, 'Kab. Pati'),
(3319, 33, 'Kab. Kudus'),
(3320, 33, 'Kab. Jepara'),
(3321, 33, 'Kab. Demak'),
(3322, 33, 'Kab. Semarang'),
(3323, 33, 'Kab. Temanggung'),
(3324, 33, 'Kab. Kendal'),
(3325, 33, 'Kab. Batang'),
(3326, 33, 'Kab. Pekalongan'),
(3327, 33, 'Kab. Pemalang'),
(3328, 33, 'Kab. Tegal'),
(3329, 33, 'Kab. Brebes'),
(3371, 33, 'Kota Magelang'),
(3372, 33, 'Kota Surakarta'),
(3373, 33, 'Kota Salatiga'),
(3374, 33, 'Kota Semarang'),
(3375, 33, 'Kota Pekalongan'),
(3376, 33, 'Kota Tegal'),
(3401, 34, 'Kab. Kulon Progo'),
(3402, 34, 'Kab. Bantul'),
(3403, 34, 'Kab. Gunung Kidul'),
(3404, 34, 'Kab. Sleman'),
(3471, 34, 'Kota Yogyakarta'),
(3501, 35, 'Kab. Pacitan'),
(3502, 35, 'Kab. Ponorogo'),
(3503, 35, 'Kab. Trenggalek'),
(3504, 35, 'Kab. Tulungagung'),
(3505, 35, 'Kab. Blitar'),
(3506, 35, 'Kab. Kediri'),
(3507, 35, 'Kab. Malang'),
(3508, 35, 'Kab. Lumajang'),
(3509, 35, 'Kab. Jember'),
(3510, 35, 'Kab. Banyuwangi'),
(3511, 35, 'Kab. Bondowoso'),
(3512, 35, 'Kab. Situbondo'),
(3513, 35, 'Kab. Probolinggo'),
(3514, 35, 'Kab. Pasuruan'),
(3515, 35, 'Kab. Sidoarjo'),
(3516, 35, 'Kab. Mojokerto'),
(3517, 35, 'Kab. Jombang'),
(3518, 35, 'Kab. Nganjuk'),
(3519, 35, 'Kab. Madiun'),
(3520, 35, 'Kab. Magetan'),
(3521, 35, 'Kab. Ngawi'),
(3522, 35, 'Kab. Bojonegoro'),
(3523, 35, 'Kab. Tuban'),
(3524, 35, 'Kab. Lamongan'),
(3525, 35, 'Kab. Gresik'),
(3526, 35, 'Kab. Bankalan'),
(3527, 35, 'Kab. Sampang'),
(3528, 35, 'Kab. Pamekasan'),
(3529, 35, 'Kab. Sumenep'),
(3571, 35, 'Kota Kediri'),
(3572, 35, 'Kota Blitar'),
(3573, 35, 'Kota Malang'),
(3574, 35, 'Kota Probolinggo'),
(3575, 35, 'Kota Pasuruan'),
(3576, 35, 'Kota Mojokerto'),
(3577, 35, 'Kota Madiun'),
(3578, 35, 'Kota Surabaya'),
(3579, 35, 'Kota Batu'),
(3601, 36, 'Kab. Pandeglang'),
(3602, 36, 'Kab. Lebak'),
(3603, 36, 'Kab. Tangerang'),
(3604, 36, 'Kab. Serang'),
(3671, 36, 'Kota Tangerang'),
(3672, 36, 'Kota Cilegon'),
(3673, 36, 'Kota Serang'),
(3674, 36, 'Kota Tangerang Selatan'),
(5101, 51, 'Kab. Jembrana'),
(5102, 51, 'Kab. Tabanan'),
(5103, 51, 'Kab. Badung'),
(5104, 51, 'Kab. Gianyar'),
(5105, 51, 'Kab. Klungkung'),
(5106, 51, 'Kab. Bangli'),
(5107, 51, 'Kab. Karangasem'),
(5108, 51, 'Kab. Buleleng'),
(5171, 51, 'Kota Denpasar'),
(5201, 52, 'Kab. Lombok Barat'),
(5202, 52, 'Kab. Lombok Tengah'),
(5203, 52, 'Kab. Lombok Timur'),
(5204, 52, 'Kab. Sumbawa'),
(5205, 52, 'Kab. Dompu'),
(5206, 52, 'Kab. Bima'),
(5207, 52, 'Kab. Sumbawa Barat'),
(5208, 52, 'Kab. Lombok Utara'),
(5271, 52, 'Kota Mataram'),
(5272, 52, 'Kota Bima'),
(5301, 53, 'Kab. Kupang'),
(5302, 53, 'Kab. Timor Tengah Selatan'),
(5303, 53, 'Kab. Timor Tengah Utara'),
(5304, 53, 'Kab. Belu'),
(5305, 53, 'Kab. Alor'),
(5306, 53, 'Kab. Flores Timur'),
(5307, 53, 'Kab. Sikka'),
(5308, 53, 'Kab. Ende'),
(5309, 53, 'Kab. Ngada'),
(5310, 53, 'Kab. Manggarai'),
(5311, 53, 'Kab. Sumba Timur'),
(5312, 53, 'Kab. Sumba Barat'),
(5313, 53, 'Kab. Lembata'),
(5314, 53, 'Kab. Rote Ndao'),
(5315, 53, 'Kab. Manggarai Barat'),
(5316, 53, 'Kab. Nagekeo'),
(5317, 53, 'Kab. Sumba Tengah'),
(5318, 53, 'Kab. Sumba Barat Daya'),
(5319, 53, 'Kab. Manggarai Timur'),
(5320, 53, 'Kab. Sabu Raijua'),
(5321, 53, 'Kab. Malaka'),
(5371, 53, 'Kota Kupang'),
(6101, 61, 'Kab. Sambas'),
(6102, 61, 'Kab. Mempawah'),
(6103, 61, 'Kab. Sanggau'),
(6104, 61, 'Kab. Ketapang'),
(6105, 61, 'Kab. Sintang'),
(6106, 61, 'Kab. Kapuas Hulu'),
(6107, 61, 'Kab. Bengkayang'),
(6108, 61, 'Kab. Landak'),
(6109, 61, 'Kab. Sekadau'),
(6110, 61, 'Kab. Melawi'),
(6111, 61, 'Kab. Kayong Utara'),
(6112, 61, 'Kab. Kubu Raya'),
(6171, 61, 'Kota Pontianak'),
(6172, 61, 'Kota Singkawang'),
(6201, 62, 'Kab. Kotawaringin Barat'),
(6202, 62, 'Kab. Kotawaringin Timur'),
(6203, 62, 'Kab. Kapuas'),
(6204, 62, 'Kab. Barito Selatan'),
(6205, 62, 'Kab. Barito Utara'),
(6206, 62, 'Kab. Katingan'),
(6207, 62, 'Kab. Seruyan'),
(6208, 62, 'Kab. Sukamara'),
(6209, 62, 'Kab. Lamandau'),
(6210, 62, 'Kab. Gunung Mas'),
(6211, 62, 'Kab. Pulang Pisau'),
(6212, 62, 'Kab. Murung Raya'),
(6213, 62, 'Kab. Barito Timur'),
(6271, 62, 'Kota Palangkaraya'),
(6301, 63, 'Kab. Tanah Laut'),
(6302, 63, 'Kab. Kotabaru'),
(6303, 63, 'Kab. Banjar'),
(6304, 63, 'Kab. Barito Kuala'),
(6305, 63, 'Kab. Tapin'),
(6306, 63, 'Kab. Hulu Sungai Selatan'),
(6307, 63, 'Kab. Hulu Sungai Tengah'),
(6308, 63, 'Kab. Hulu Sungai Utara'),
(6309, 63, 'Kab. Tabalong'),
(6310, 63, 'Kab. Tanah Bumbu'),
(6311, 63, 'Kab. Balangan'),
(6371, 63, 'Kota Banjarmasin'),
(6372, 63, 'Kota Banjarbaru'),
(6401, 64, 'Kab. Paser'),
(6402, 64, 'Kab. Kutai Kartanegara'),
(6403, 64, 'Kab. Berau'),
(6407, 64, 'Kab. Kutai Barat'),
(6408, 64, 'Kab. Kutai Timur'),
(6409, 64, 'Kab. Penajam Paser Utara'),
(6411, 64, 'Kab. Mahakam Ulu'),
(6471, 64, 'Kota Balikpapan'),
(6472, 64, 'Kota Samarinda'),
(6474, 64, 'Kota Bontang'),
(6501, 65, 'Kab. Bulungan'),
(6502, 65, 'Kab. Malinau'),
(6503, 65, 'Kab. Nunukan'),
(6504, 65, 'Kab. Tana Tidung'),
(6571, 65, 'Kota Tarakan'),
(7101, 71, 'Kab. Bolaang Mongondow'),
(7102, 71, 'Kab. Minahasa'),
(7103, 71, 'Kab. Kepulauan Sangihe'),
(7104, 71, 'Kab. Kepulauan Talaud'),
(7105, 71, 'Kab. Minahasa Selatan'),
(7106, 71, 'Kab. Minahasa Utara'),
(7107, 71, 'Kab. Minahasa Tenggara'),
(7108, 71, 'Kab. Bolaang Mongondow Utara'),
(7109, 71, 'Kab. Kep. Siau Tagulandang Biaro'),
(7110, 71, 'Kab. Bolaang Mongondow Timur'),
(7111, 71, 'Kab. Bolaang Mongondow Selatan'),
(7171, 71, 'Kota Manado'),
(7172, 71, 'Kota Bitung'),
(7173, 71, 'Kota Tomohon'),
(7174, 71, 'Kota Kotamobagu'),
(7201, 72, 'Kab. Banggai'),
(7202, 72, 'Kab. Poso'),
(7203, 72, 'Kab. Donggala'),
(7204, 72, 'Kab. Toli Toli'),
(7205, 72, 'Kab. Buol'),
(7206, 72, 'Kab. Morowali'),
(7207, 72, 'Kab. Banggai Kepulauan'),
(7208, 72, 'Kab. Parigi Moutong'),
(7209, 72, 'Kab. Tojo Una Una'),
(7210, 72, 'Kab. Sigi'),
(7211, 72, 'Kab. Banggai Laut'),
(7212, 72, 'Kab. Morowali Utara'),
(7271, 72, 'Kota Palu'),
(7301, 73, 'Kab. Kepulauan Selayar'),
(7302, 73, 'Kab. Bulukumba'),
(7303, 73, 'Kab. Bantaeng'),
(7304, 73, 'Kab. Janeponto'),
(7305, 73, 'Kab. Takalar'),
(7306, 73, 'Kab. Gowa'),
(7307, 73, 'Kab. Sinjai'),
(7308, 73, 'Kab. Bone'),
(7309, 73, 'Kab. Maros'),
(7310, 73, 'Kab. Pangkajene Kepulauan'),
(7311, 73, 'Kab. Barru'),
(7312, 73, 'Kab. Soppeng'),
(7313, 73, 'Kab. Wajo'),
(7314, 73, 'Kab. Sidenreng Rappang'),
(7315, 73, 'Kab. Pinrang'),
(7316, 73, 'Kab. Enrekang'),
(7317, 73, 'Kab. Luwu'),
(7318, 73, 'Kab. Tana Toraja'),
(7322, 73, 'Kab. Luwu Utara'),
(7324, 73, 'Kab. Luwu Timur'),
(7326, 73, 'Kab. Toraja Utara'),
(7371, 73, 'Kota Makassar'),
(7372, 73, 'Kota Pare Pare'),
(7373, 73, 'Kota Palopo'),
(7401, 74, 'Kab. Kolaka'),
(7402, 74, 'Kab. Konawe'),
(7403, 74, 'Kab. Muna'),
(7404, 74, 'Kab. Buton'),
(7405, 74, 'Kab. Konawe Selatan'),
(7406, 74, 'Kab. Bombana'),
(7407, 74, 'Kab. Wakatobi'),
(7408, 74, 'Kab. Kolaka Utara'),
(7409, 74, 'Kab. Konawe Utara'),
(7410, 74, 'Kab. Buton Utara'),
(7411, 74, 'Kab. Kolaka Timur'),
(7412, 74, 'Kab. Konawe Kepulauan'),
(7413, 74, 'Kab. Muna Barat'),
(7414, 74, 'Kab. Buton Tengah'),
(7415, 74, 'Kab. Buton Selatan'),
(7471, 74, 'Kota Kendari'),
(7472, 74, 'Kota Bau Bau'),
(7501, 75, 'Kab. Gorontalo'),
(7502, 75, 'Kab. Boalemo'),
(7503, 75, 'Kab. Bone Bolango'),
(7504, 75, 'Kab. Pahuwato'),
(7505, 75, 'Kab. Gorontalo Utara'),
(7571, 75, 'Kota Gorontalo'),
(7601, 76, 'Kab. Mamuju Utara'),
(7602, 76, 'Kab. Mamuju'),
(7603, 76, 'Kab. Mamasa'),
(7604, 76, 'Kab. Polewali Mandar'),
(7605, 76, 'Kab. Majene'),
(7606, 76, 'Kab. Mamuju Tengah'),
(8101, 81, 'Kab. Maluku Tengah'),
(8102, 81, 'Kab. Maluku Tenggara'),
(8103, 81, 'KAB Maluku Tenggara Barat'),
(8104, 81, 'Kab. Buru'),
(8105, 81, 'Kab. Seram Bagian Timur'),
(8106, 81, 'Kab. Seram Bagian Barat'),
(8107, 81, 'Kab. Kepulauan Aru'),
(8108, 81, 'Kab. Maluku Barat Daya'),
(8109, 81, 'Kab. Buru Selatan'),
(8171, 81, 'Kota Ambon'),
(8172, 81, 'Kota Tual'),
(8201, 82, 'Kab. Halmahera Barat'),
(8202, 82, 'Kab. Halmahera Tengah'),
(8203, 82, 'Kab. Halmahera Utara'),
(8204, 82, 'Kab. Halmahera Selatan'),
(8205, 82, 'Kab. Kepulauan SULA'),
(8206, 82, 'Kab. Halmahera Timur'),
(8207, 82, 'Kab. Pulau Morotai'),
(8208, 82, 'Kab. Pulau Taliabu'),
(8271, 82, 'Kota Ternate'),
(8272, 82, 'Kota Tidore Kepulauan'),
(9101, 91, 'Kab. Merauke'),
(9102, 91, 'Kab. Jayawijaya'),
(9103, 91, 'Kab. Jayapura'),
(9104, 91, 'Kab. Nabire'),
(9105, 91, 'Kab. Kepulauan Yapen'),
(9106, 91, 'Kab. Biak Numfor'),
(9107, 91, 'Kab. Puncak Jaya'),
(9108, 91, 'Kab. Paniai'),
(9109, 91, 'Kab. Mimika'),
(9110, 91, 'Kab. Sarmi'),
(9111, 91, 'Kab. Keerom'),
(9112, 91, 'KAB Pegunungan Bintang'),
(9113, 91, 'Kab. Yahukimo'),
(9114, 91, 'Kab. Tolikara'),
(9115, 91, 'Kab. Waropen'),
(9116, 91, 'Kab. Boven Digoel'),
(9117, 91, 'Kab. Mappi'),
(9118, 91, 'Kab. Asmat'),
(9119, 91, 'Kab. Supiori'),
(9120, 91, 'Kab. Mamberamo Raya'),
(9121, 91, 'Kab. Mamberamo Tengah'),
(9122, 91, 'Kab. Yalimo'),
(9123, 91, 'Kab. Lanny Jaya'),
(9124, 91, 'Kab. Nduga'),
(9125, 91, 'Kab. Puncak'),
(9126, 91, 'Kab. Dogiyai'),
(9127, 91, 'Kab. Intan Jaya'),
(9128, 91, 'Kab. Deiyai'),
(9171, 91, 'Kota Jayapura'),
(9201, 92, 'Kab. Sorong'),
(9202, 92, 'Kab. Manokwari'),
(9203, 92, 'Kab. Fak Fak'),
(9204, 92, 'Kab. Sorong Selatan'),
(9205, 92, 'Kab. Raja Ampat'),
(9206, 92, 'Kab. Teluk Bintuni'),
(9207, 92, 'Kab. Teluk Wondama'),
(9208, 92, 'Kab. Kaimana'),
(9209, 92, 'Kab. Tambrauw'),
(9210, 92, 'Kab. Maybrat'),
(9211, 92, 'Kab. Manokwari Selatan'),
(9212, 92, 'Kab. Pegunungan Arfak'),
(9271, 92, 'Kota Sorong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuota_wisuda`
--

CREATE TABLE `kuota_wisuda` (
  `id` int(11) NOT NULL,
  `id_jadwal_wisuda` int(11) NOT NULL,
  `id_program_studi` int(11) NOT NULL,
  `kuota_prodi` int(11) NOT NULL DEFAULT 0,
  `jumlah_wisudawan` int(11) NOT NULL DEFAULT 0,
  `status` enum('Dibuka','Ditutup','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kuota_wisuda`
--

INSERT INTO `kuota_wisuda` (`id`, `id_jadwal_wisuda`, `id_program_studi`, `kuota_prodi`, `jumlah_wisudawan`, `status`) VALUES
(1, 2, 1, 0, 0, 'Dibuka'),
(2, 2, 2, 0, 0, 'Dibuka'),
(3, 2, 3, 0, 0, 'Dibuka'),
(4, 2, 4, 0, 0, 'Dibuka'),
(5, 2, 5, 0, 0, 'Dibuka'),
(6, 2, 6, 0, 0, 'Dibuka'),
(7, 2, 7, 0, 0, 'Dibuka'),
(8, 2, 8, 0, 0, 'Dibuka'),
(9, 2, 9, 0, 0, 'Dibuka'),
(10, 2, 10, 0, 0, 'Dibuka'),
(11, 2, 11, 0, 0, 'Dibuka'),
(12, 2, 12, 0, 0, 'Dibuka'),
(13, 2, 13, 0, 0, 'Dibuka'),
(14, 2, 14, 0, 0, 'Dibuka'),
(15, 2, 15, 0, 0, 'Dibuka'),
(16, 2, 16, 0, 0, 'Dibuka'),
(17, 2, 17, 0, 0, 'Dibuka'),
(18, 2, 18, 0, 0, 'Dibuka'),
(19, 2, 19, 0, 0, 'Dibuka'),
(20, 2, 20, 0, 0, 'Dibuka'),
(21, 2, 21, 0, 0, 'Dibuka'),
(22, 2, 22, 0, 0, 'Dibuka'),
(23, 2, 23, 0, 0, 'Dibuka'),
(24, 2, 24, 0, 0, 'Dibuka'),
(25, 2, 25, 0, 0, 'Dibuka'),
(26, 2, 26, 0, 0, 'Dibuka'),
(27, 2, 27, 0, 0, 'Dibuka'),
(28, 2, 28, 0, 0, 'Dibuka'),
(29, 3, 1, 0, 0, 'Dibuka'),
(30, 3, 2, 0, 0, 'Dibuka'),
(31, 3, 3, 0, 0, 'Dibuka'),
(32, 3, 4, 0, 0, 'Dibuka'),
(33, 3, 5, 0, 0, 'Dibuka'),
(34, 3, 6, 0, 0, 'Dibuka'),
(35, 3, 7, 0, 0, 'Dibuka'),
(36, 3, 8, 0, 0, 'Dibuka'),
(37, 3, 9, 0, 0, 'Dibuka'),
(38, 3, 10, 0, 0, 'Dibuka'),
(39, 3, 11, 0, 0, 'Dibuka'),
(40, 3, 12, 0, 0, 'Dibuka'),
(41, 3, 13, 0, 0, 'Dibuka'),
(42, 3, 14, 0, 0, 'Dibuka'),
(43, 3, 15, 0, 0, 'Dibuka'),
(44, 3, 16, 0, 0, 'Dibuka'),
(45, 3, 17, 0, 0, 'Dibuka'),
(46, 3, 18, 0, 0, 'Dibuka'),
(47, 3, 19, 0, 0, 'Dibuka'),
(48, 3, 20, 0, 0, 'Dibuka'),
(49, 3, 21, 0, 0, 'Dibuka'),
(50, 3, 22, 0, 0, 'Dibuka'),
(51, 3, 23, 0, 0, 'Dibuka'),
(52, 3, 24, 0, 0, 'Dibuka'),
(53, 3, 25, 0, 0, 'Dibuka'),
(54, 3, 26, 0, 0, 'Dibuka'),
(55, 3, 27, 0, 0, 'Dibuka'),
(56, 3, 28, 0, 0, 'Dibuka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `uraian` text NOT NULL,
  `jawab` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nim` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `uraian` text NOT NULL,
  `isread` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `tanggal`, `nim`, `email`, `judul`, `uraian`, `isread`) VALUES
(1, '2021-06-13', 1731710084, 'dhimasbayu.9f@gmail.com', 'tes pesan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0),
(2, '2021-06-13', 1731710095, 'berlianafd@gmail.com', 'tes berliana', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0),
(3, '2021-06-13', 1731710095, 'ferinabayu@gmail.com', 'Wisuda 2021', 'Siang Admin, di tahun 2021 ini wisuda dilaksanakan bulan apa ya, dan apakah masih ada opsi wisuda secara luring?\nTerimakasih', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_jenjang` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`id`, `id_jurusan`, `id_jenjang`, `nama`) VALUES
(1, 1, 3, 'Teknik Listrik'),
(2, 1, 3, 'Teknik Elektronika'),
(3, 1, 3, 'Teknik Telekomunikasi'),
(4, 1, 4, 'Sistem Kelistrikan'),
(5, 1, 4, 'Teknik Elektronika'),
(6, 1, 4, 'Jaringan Telekomunikasi Digital'),
(7, 1, 5, 'Teknik Elektro'),
(8, 2, 3, 'Teknik Mesin'),
(9, 2, 4, 'Teknik Otomotif Elektronik'),
(10, 2, 4, 'Teknik Mesin Produksi Dan Perawatan'),
(11, 2, 5, 'Rekayasa Teknologi Manufaktur'),
(12, 3, 3, 'Teknik Sipil'),
(13, 3, 3, 'Teknologi Pertambangan'),
(14, 3, 3, 'Teknologi Konstruksi Jalan, Jembatan, Dan Bangunan Air'),
(15, 3, 4, 'Manajemen Rekayasa Konstruksi'),
(16, 3, 4, 'Teknologi Rekayasa Konstruksi Jalan Dan Jembatan'),
(17, 4, 3, 'Teknik Kimia'),
(18, 4, 4, 'Teknologi Kimia Industri'),
(19, 5, 3, 'Akuntansi'),
(20, 5, 4, 'Akuntansi Manajemen'),
(21, 5, 4, 'Keuangan'),
(22, 5, 5, 'Sistem Informasi Akuntansi'),
(23, 6, 3, 'Administrasi Bisnis'),
(24, 6, 4, 'Manajemen Pemasaran'),
(25, 7, 3, 'Manajemen Informatika'),
(26, 7, 4, 'Teknik Informatika'),
(27, 6, 3, 'Bahasa Inggris'),
(28, 6, 4, 'Bahasa Inggris Untuk Komunikasi Bisnis Dan Profesional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(11, 'Aceh'),
(12, 'Sumatera Utara'),
(13, 'Sumatera Barat'),
(14, 'Riau'),
(15, 'Jambi'),
(16, 'Sumatera Selatan'),
(17, 'Bengkulu'),
(18, 'Lampung'),
(19, 'Kepulauan Bangka Belitung'),
(21, 'Kepulauan Riau'),
(31, 'DKI Jakarta'),
(32, 'Jawa Barat'),
(33, 'Jawa Tengah'),
(34, 'DI Yogyakarta'),
(35, 'Jawa Timur'),
(36, 'Banten'),
(51, 'Bali'),
(52, 'Nusa Tenggara Barat'),
(53, 'Nusa Tenggara Timur'),
(61, 'Kalimantan Barat'),
(62, 'Kalimantan Tengah'),
(63, 'Kalimantan Selatan'),
(64, 'Kalimantan Timur'),
(65, 'Kalimantan Utara'),
(71, 'Sulawesi Utara'),
(72, 'Sulawesi Tengah'),
(73, 'Sulawesi Selatan'),
(74, 'Sulawesi Tenggara'),
(75, 'Gorontalo'),
(76, 'Sulawesi Barat'),
(81, 'Maluku'),
(82, 'Maluku Utara'),
(91, 'Papua Barat'),
(92, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pekerjaan`
--

CREATE TABLE `riwayat_pekerjaan` (
  `id` int(11) NOT NULL,
  `nim_alumni` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `jenis_pekerjaan` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(16) DEFAULT NULL,
  `no_fax` varchar(128) DEFAULT NULL,
  `website` varchar(128) DEFAULT NULL,
  `jabatan` varchar(128) NOT NULL,
  `status` enum('Pekerjaan Sesuai Jurusan','Pekerjaan Tidak Sesuai Jurusan','','') NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `info_jpc` enum('Ya','Tidak','','') NOT NULL,
  `jenis_kantor` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pekerjaan`
--

INSERT INTO `riwayat_pekerjaan` (`id`, `nim_alumni`, `id_provinsi`, `id_kota`, `jenis_pekerjaan`, `nama`, `alamat`, `telepon`, `no_fax`, `website`, `jabatan`, `status`, `pendapatan`, `tgl_masuk`, `tgl_keluar`, `info_jpc`, `jenis_kantor`, `email`) VALUES
(1, 1731710084, 35, 3507, 'Wirausaha', 'Farm Tech', 'Dukuh Pamotan RT 02 RW 01, Pamotan, Kec. Dampit', '', '', '', 'CTO', 'Pekerjaan Tidak Sesuai Jurusan', 800000000, '2021-04-23', '0000-00-00', 'Tidak', 'Peternakan', ''),
(3, 1731710084, 34, 3402, 'Karyawan Swasta', 'PT Infosys Solusi Terpadu', 'Wirosaban Banguntapan', '', '', 'ist.id', 'Junior Java Developer', 'Pekerjaan Sesuai Jurusan', 3000000, '2021-04-19', '0000-00-00', 'Tidak', 'Teknologi', ''),
(4, 1731710084, 35, 3573, 'PNS', 'Politeknik Negeri Malang', NULL, '08753456789', '', '', 'Ketua Prodi', 'Pekerjaan Tidak Sesuai Jurusan', 25000000, '2021-06-02', '0000-00-00', 'Tidak', 'Universitas', ''),
(5, 1731710084, 35, 3573, 'Karyawan Swasta', 'DOT', 'jl sulawesi', '0978654', '', '', 'programmer', 'Pekerjaan Sesuai Jurusan', 0, '2021-02-14', '0000-00-00', 'Tidak', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_informasi`
--

CREATE TABLE `tipe_informasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `background` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipe_informasi`
--

INSERT INTO `tipe_informasi` (`id`, `nama`, `background`) VALUES
(1, 'Pengumuman', 'bg-info'),
(2, 'Agenda', 'bg-warning');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `fk_id_provinsi_in_alumni` (`id_provinsi`),
  ADD KEY `fk_id_kota_in_alumni` (`id_kabupaten`);

--
-- Indeks untuk tabel `alumni_has_jadwal_wisuda`
--
ALTER TABLE `alumni_has_jadwal_wisuda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nim_alumni_in_alumni_has_jadwal_wisuda` (`nim_alumni`),
  ADD KEY `fk_id_jadwal_wisuda_in_alumni_has_jadwal_wisuda` (`id_jadwal_wisuda`),
  ADD KEY `fk_id_kuota_wisuda_in_alumni_has_jadwal_wisuda` (`id_kuota_wisuda`);

--
-- Indeks untuk tabel `biodata_akademik`
--
ALTER TABLE `biodata_akademik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nim_alumni_in_biodata_akademik` (`nim_alumni`),
  ADD KEY `fk_id_program_studi_in_biodata_akademik` (`id_program_studi`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipe_informasi_in_informasi` (`id_tipe_informasi`);

--
-- Indeks untuk tabel `jadwal_wisuda`
--
ALTER TABLE `jadwal_wisuda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_provinsi_in_kota` (`id_provinsi`);

--
-- Indeks untuk tabel `kuota_wisuda`
--
ALTER TABLE `kuota_wisuda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_jadwal_wisuda_in_kuota_wisuda` (`id_jadwal_wisuda`),
  ADD KEY `fk_id_program_studi_in_kuota_wisuda` (`id_program_studi`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_jurusan_in_program_studi` (`id_jurusan`),
  ADD KEY `fk_id_jenjang_in_program_studi` (`id_jenjang`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nim_alumni_in_riwayat_pekerjaan` (`nim_alumni`),
  ADD KEY `fk_id_provinsi_in_riwayat_pekerjaan` (`id_provinsi`),
  ADD KEY `fk_id_kota_in_riwayat_pekerjaan` (`id_kota`);

--
-- Indeks untuk tabel `tipe_informasi`
--
ALTER TABLE `tipe_informasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `alumni_has_jadwal_wisuda`
--
ALTER TABLE `alumni_has_jadwal_wisuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `biodata_akademik`
--
ALTER TABLE `biodata_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `jadwal_wisuda`
--
ALTER TABLE `jadwal_wisuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9272;

--
-- AUTO_INCREMENT untuk tabel `kuota_wisuda`
--
ALTER TABLE `kuota_wisuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tipe_informasi`
--
ALTER TABLE `tipe_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `fk_id_kabupaten_in_alumni` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_provinsi_in_alumni` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `alumni_has_jadwal_wisuda`
--
ALTER TABLE `alumni_has_jadwal_wisuda`
  ADD CONSTRAINT `fk_id_jadwal_wisuda_in_alumni_has_jadwal_wisuda` FOREIGN KEY (`id_jadwal_wisuda`) REFERENCES `jadwal_wisuda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_kuota_wisuda_in_alumni_has_jadwal_wisuda` FOREIGN KEY (`id_kuota_wisuda`) REFERENCES `kuota_wisuda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nim_alumni_in_alumni_has_jadwal_wisuda` FOREIGN KEY (`nim_alumni`) REFERENCES `alumni` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `biodata_akademik`
--
ALTER TABLE `biodata_akademik`
  ADD CONSTRAINT `fk_id_program_studi_in_biodata_akademik` FOREIGN KEY (`id_program_studi`) REFERENCES `program_studi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nim_alumni_in_biodata_akademik` FOREIGN KEY (`nim_alumni`) REFERENCES `alumni` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `id_tipe_informasi_in_informasi` FOREIGN KEY (`id_tipe_informasi`) REFERENCES `tipe_informasi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `fk_id_provinsi_in_kota` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kuota_wisuda`
--
ALTER TABLE `kuota_wisuda`
  ADD CONSTRAINT `fk_id_jadwal_wisuda_in_kuota_wisuda` FOREIGN KEY (`id_jadwal_wisuda`) REFERENCES `jadwal_wisuda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_program_studi_in_kuota_wisuda` FOREIGN KEY (`id_program_studi`) REFERENCES `program_studi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD CONSTRAINT `fk_id_jenjang_in_program_studi` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_jurusan_in_program_studi` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD CONSTRAINT `fk_id_kota_in_riwayat_pekerjaan` FOREIGN KEY (`id_kota`) REFERENCES `kabupaten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_provinsi_in_riwayat_pekerjaan` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nim_alumni_in_riwayat_pekerjaan` FOREIGN KEY (`nim_alumni`) REFERENCES `alumni` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
