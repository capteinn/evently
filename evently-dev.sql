-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Des 2017 pada 18.19
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evently-dev`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `detail_pendaftaran` (
`id_detail_pendaftaran` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `id_mapping_event` int(11) NOT NULL,
  `status` enum('proses','diterima','ditolak','') NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pendaftaran`
--

INSERT INTO `detail_pendaftaran` (`id_detail_pendaftaran`, `id_pendaftaran`, `id_mapping_event`, `status`, `createdDtm`) VALUES
(1, 1, 1, 'proses', '2017-12-04 16:44:32'),
(2, 1, 4, 'proses', '2017-12-04 16:44:32'),
(3, 2, 2, 'proses', '2017-12-04 16:44:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id_event` int(10) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama`, `deskripsi`, `createdBy`, `createdDtm`) VALUES
(1, 'Algorithm', 'Event Algorithm KOMSI', 4, '2017-12-02 12:07:55'),
(2, 'Gebyar', 'Gebyar BCA', 5, '2017-12-01 17:45:11'),
(3, 'Child', 'Event Child KOMSI', 4, '2017-12-02 12:08:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` char(10) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `id_prodi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `kelas`, `nama`, `no_telp`, `angkatan`, `jenkel`, `id_prodi`) VALUES
('09434', 'A', 'Abdur', '082132899582', 2015, 'L', 1),
('09456', 'B', 'Lele', '082132899582', 2016, 'L', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapping_event`
--

CREATE TABLE IF NOT EXISTS `mapping_event` (
`id_mapping_event` int(10) NOT NULL,
  `id_event` int(10) NOT NULL,
  `id_sie` int(10) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapping_event`
--

INSERT INTO `mapping_event` (`id_mapping_event`, `id_event`, `id_sie`, `deskripsi`, `createdBy`, `createdDtm`) VALUES
(1, 1, 1, 'Ahli dalam mengatur makanan dan minuman', 4, '2017-12-02 23:26:36'),
(2, 2, 2, 'Makan dan minum adalah keseharian kamu', 5, '2017-12-02 23:27:40'),
(3, 3, 1, 'Suka makan sehingga bisa mengatur makanan dan minuman', 4, '2017-12-04 16:41:21'),
(4, 1, 3, 'Mengurus segala jenis keamanan pada saat event algorithm berlangsung', 4, '2017-12-04 16:42:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
`id_pendaftaran` int(10) NOT NULL,
  `nim` char(10) NOT NULL,
  `cv` varchar(300) NOT NULL,
  `krs` varchar(300) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nim`, `cv`, `krs`, `createdDtm`) VALUES
(1, '09434', 'abdurrahman.pdf', 'abdurrahman.pdf', '2017-12-01 17:23:05'),
(2, '09456', 'lele.pdf', 'lele.pdf', '2017-12-01 18:28:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
`id_prodi` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama`) VALUES
(1, 'KOMSI'),
(2, 'METINS'),
(3, 'DTE'),
(4, 'DTJ'),
(5, 'ELINS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sie`
--

CREATE TABLE IF NOT EXISTS `sie` (
`id_sie` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sie`
--

INSERT INTO `sie` (`id_sie`, `nama`, `deskripsi`, `createdBy`, `createdDtm`) VALUES
(1, 'Sie Konsumsi', 'Melayani Segala Urusan Konsumsi dan makanan', 4, '2017-12-02 10:32:34'),
(2, 'Sie Konsumsi', 'Melayani Segala Urusan Konsumsi', 5, '2017-12-01 17:45:50'),
(3, 'Sie Keamanan', 'Mengurus segala jenis keamanan pada saat event berjalan dan berlangsung', 4, '2017-12-02 10:32:22'),
(4, 'Sie Keadilan', 'Menjaga segala keadilan saat event sedang berlangsung agar tidak ricuh', 4, '2017-12-02 10:32:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_items`
--

CREATE TABLE IF NOT EXISTS `tbl_items` (
`itemId` int(11) NOT NULL,
  `itemHeader` varchar(512) NOT NULL COMMENT 'Heading',
  `itemSub` varchar(1021) NOT NULL COMMENT 'sub heading',
  `itemDesc` text COMMENT 'content or description',
  `itemImage` varchar(80) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reset_password`
--

CREATE TABLE IF NOT EXISTS `tbl_reset_password` (
`id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_roles`
--

CREATE TABLE IF NOT EXISTS `tbl_roles` (
`roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Event Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@codeinsect.com', '$2y$10$WQQRBQDkxV/98bqK.24Dp.uMVS6KcztVqdwwTrOBLIWLSeSqE2gii', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2017-03-03 12:08:39'),
(2, 'manager@codeinsect.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2017-02-10 17:23:53'),
(3, 'employee@codeinsect.com', '$2y$10$M3ttjnzOV2lZSigBtP0NxuCtKRte70nc8TY5vIczYAQvfG/8syRze', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', NULL, NULL),
(4, 'komsi@tedi.com', '$2y$10$fAYVE53h6HeQNVEmwoiuCuwJp2LypPC2P274GQ6n5CgDasaRDX7hK', 'Komsi Event Manager', '0892323232', 2, 0, 1, '2017-12-01 16:47:22', NULL, NULL),
(5, 'dte@tedi.com', '$2y$10$E69hv2YJdRdVOIh8kzsOpOsg/anAepuXUshxladovHAAP02.r66MG', 'Dte Event Manager', '0892423232', 2, 0, 1, '2017-12-01 16:51:26', NULL, NULL),
(6, 'dtj@tedi.com', '$2y$10$F4CO7MiOxppY//wR4sJ2z.s.QupAiW5Yx9idlzA/1m9dRRdWGWcHm', 'Dtj Event Manager', '0892523232', 2, 0, 1, '2017-12-01 16:51:51', 1, '2017-12-01 16:53:23'),
(7, 'elins@tedi.com', '$2y$10$fE7wcuz/nrjrJhkcCjtWje4PXUvrxGcLd1XuknYcBzP1jExni0DP.', 'Elins Event Manager', '0892523232', 2, 0, 1, '2017-12-01 16:52:26', NULL, NULL),
(8, 'metins@tedi.com', '$2y$10$/eRUyza4mw/IFBsGTxnpie75ovI279tOrvwvjYXlU19tSdYdZw1dK', 'Metins Event Manager', '0892423232', 2, 0, 1, '2017-12-01 16:52:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
`id_thread` int(10) NOT NULL,
  `judul` varchar(300) DEFAULT NULL,
  `poster` varchar(50) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `id_event` int(10) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `thread`
--

INSERT INTO `thread` (`id_thread`, `judul`, `poster`, `tgl_mulai`, `tgl_selesai`, `deskripsi`, `id_event`, `createdBy`, `createdDtm`) VALUES
(1, 'Pendaftaran Algorithm', 'algorithm.png', '2017-12-06', '2017-12-14', 'Yuk Daftar Algorithm kk :D', 1, 4, '2017-12-02 23:53:38'),
(2, 'Let''s Start Giving', 'algorithm.jpg', '2017-12-06', '2017-12-20', 'Event HIMAKOMSI rutin dilakukan setiap tahunnya', 1, 4, '2017-12-02 20:41:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
 ADD PRIMARY KEY (`id_detail_pendaftaran`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mapping_event`
--
ALTER TABLE `mapping_event`
 ADD PRIMARY KEY (`id_mapping_event`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
 ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `sie`
--
ALTER TABLE `sie`
 ADD PRIMARY KEY (`id_sie`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
 ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
 ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
 ADD PRIMARY KEY (`id_thread`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
MODIFY `id_detail_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id_event` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mapping_event`
--
ALTER TABLE `mapping_event`
MODIFY `id_mapping_event` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
MODIFY `id_pendaftaran` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
MODIFY `id_prodi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sie`
--
ALTER TABLE `sie`
MODIFY `id_sie` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
MODIFY `id_thread` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
