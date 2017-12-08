-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 08:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evently-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pendaftaran`
--

CREATE TABLE `detail_pendaftaran` (
  `id_detail_pendaftaran` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `id_mapping_event` int(11) NOT NULL,
  `status` enum('proses','diterima','ditolak','') NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pendaftaran`
--

INSERT INTO `detail_pendaftaran` (`id_detail_pendaftaran`, `id_pendaftaran`, `id_mapping_event`, `status`, `createdDtm`) VALUES
(1, 1, 1, 'proses', '2017-12-06 07:54:32'),
(2, 1, 4, 'diterima', '2017-12-06 08:00:48'),
(3, 2, 2, 'proses', '2017-12-04 16:44:32'),
(4, 3, 1, 'ditolak', '2017-12-06 08:01:12'),
(5, 3, 4, 'ditolak', '2017-12-06 08:01:22'),
(20, 20, 1, 'proses', '2017-12-08 13:08:11'),
(21, 20, 4, 'proses', '2017-12-08 13:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(10) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama`, `deskripsi`, `createdBy`, `createdDtm`) VALUES
(1, 'Algorithm', 'Event Algorithm KOMSI', 4, '2017-12-02 12:07:55'),
(2, 'Gebyar', 'Gebyar BCA', 5, '2017-12-01 17:45:11'),
(3, 'Child', 'Event Child KOMSI', 4, '2017-12-02 12:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `id_prodi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `kelas`, `nama`, `no_telp`, `angkatan`, `jenkel`, `id_prodi`) VALUES
('09434', 'A', 'Abdur', '082132899582', 2015, 'L', 1),
('09436', 'A', 'Hilmawan', '082132899582', 2015, 'L', 1),
('09456', 'B', 'Lele', '082132899582', 2016, 'L', 2),
('22222', 'A', 'white catfish', '081231992632', 2015, 'L', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mapping_event`
--

CREATE TABLE `mapping_event` (
  `id_mapping_event` int(10) NOT NULL,
  `id_event` int(10) NOT NULL,
  `id_sie` int(10) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapping_event`
--

INSERT INTO `mapping_event` (`id_mapping_event`, `id_event`, `id_sie`, `deskripsi`, `createdBy`, `createdDtm`) VALUES
(1, 1, 1, 'Ahli dalam mengatur makanan dan minuman', 4, '2017-12-02 23:26:36'),
(2, 2, 2, 'Makan dan minum adalah keseharian kamu', 5, '2017-12-02 23:27:40'),
(3, 3, 1, 'Suka makan sehingga bisa mengatur makanan dan minuman', 4, '2017-12-04 16:41:21'),
(4, 1, 3, 'Mengurus segala jenis keamanan pada saat event algorithm berlangsung', 4, '2017-12-04 16:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(10) NOT NULL,
  `nim` char(10) NOT NULL,
  `cv` varchar(300) NOT NULL,
  `krs` varchar(300) NOT NULL,
  `status` enum('proses','diterima','ditolak') NOT NULL,
  `alasan` varchar(1000) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nim`, `cv`, `krs`, `status`, `alasan`, `createdDtm`) VALUES
(1, '09434', 'abdurrahman.pdf', 'abdurrahman.pdf', 'diterima', '', '2017-12-06 08:00:48'),
(2, '09456', 'lele.pdf', 'lele.pdf', 'proses', '', '2017-12-01 18:28:41'),
(3, '09436', 'CVku.pdf', 'KRSku.pdf', 'ditolak', '', '2017-12-06 08:01:22'),
(20, '22222', 'berkasEvently1512760091.pdf', 'berkasEvently15127600911.pdf', 'proses', 'zzzzzzzzzzzzzzzzz', '2017-12-08 13:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama`) VALUES
(1, 'KOMSI'),
(2, 'METINS'),
(3, 'DTE'),
(4, 'DTJ'),
(5, 'ELINS');

-- --------------------------------------------------------

--
-- Table structure for table `sie`
--

CREATE TABLE `sie` (
  `id_sie` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sie`
--

INSERT INTO `sie` (`id_sie`, `nama`, `deskripsi`, `createdBy`, `createdDtm`) VALUES
(1, 'Sie Konsumsi', 'Melayani Segala Urusan Konsumsi dan makanan', 4, '2017-12-02 10:32:34'),
(2, 'Sie Konsumsi', 'Melayani Segala Urusan Konsumsi', 5, '2017-12-01 17:45:50'),
(3, 'Sie Keamanan', 'Mengurus segala jenis keamanan pada saat event berjalan dan berlangsung', 4, '2017-12-02 10:32:22'),
(4, 'Sie Keadilan', 'Menjaga segala keadilan saat event sedang berlangsung agar tidak ricuh', 4, '2017-12-02 10:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
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
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Event Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
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
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id_thread` int(10) NOT NULL,
  `judul` varchar(300) DEFAULT NULL,
  `poster` varchar(50) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `id_event` int(10) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id_thread`, `judul`, `poster`, `tgl_mulai`, `tgl_selesai`, `deskripsi`, `id_event`, `createdBy`, `createdDtm`) VALUES
(1, 'Pendaftaran Algorithm', 'algorithm1.jpg', '2017-12-06', '2017-12-14', 'Yuk Daftar Algorithm kk :D', 1, 4, '2017-12-05 00:44:22'),
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
  MODIFY `id_detail_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mapping_event`
--
ALTER TABLE `mapping_event`
  MODIFY `id_mapping_event` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sie`
--
ALTER TABLE `sie`
  MODIFY `id_sie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id_thread` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
