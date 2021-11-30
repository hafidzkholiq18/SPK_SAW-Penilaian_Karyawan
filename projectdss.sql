-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 04:40 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdss`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses_menu_user`
--

CREATE TABLE `akses_menu_user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses_menu_user`
--

INSERT INTO `akses_menu_user` (`id`, `role_id`, `id_menu`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `kode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama`, `email`, `jabatan`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `image`, `kode`) VALUES
(1, 'Hafidz Kholiq', 'Hafidzkholiq18@gmail.com', 'HRD', 'Laki-Laki', 'Bengkulu Utara', '2017-06-08', 'PLeret,Bantul, Yogyakarta', 'pic.jpg', 'A01'),
(8, 'Bayu Segara', ' Segara@gmail.com', ' BOSS', 'Laki-Laki', ' Yogyakarta', '2019-12-07', ' Pleret, Bantul', 'hairul3.png', 'A02');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(128) NOT NULL,
  `atribut` varchar(128) NOT NULL,
  `bobot` varchar(255) NOT NULL,
  `kode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `atribut`, `bobot`, `kode`) VALUES
(25, 'Kerja Tim', 'Benefit', '0,2', 'C01'),
(28, 'Kepemimpinan', 'Benfit', '0,25', 'C02'),
(29, 'Kedisiplinan', 'Benefit', '0,2', 'C03'),
(30, 'Kreativitas', 'Benefit', '0,125', 'C04'),
(31, 'Tanggun Jawab', 'Benefit', '0,1', 'C05');

-- --------------------------------------------------------

--
-- Table structure for table `menu_user`
--

CREATE TABLE `menu_user` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_user`
--

INSERT INTO `menu_user` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(5) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `C1` double NOT NULL,
  `C2` double NOT NULL,
  `C3` double NOT NULL,
  `C4` double NOT NULL,
  `C5` double NOT NULL,
  `C6` double NOT NULL,
  `total` double NOT NULL,
  `nilai_akhir` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alternatif`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `total`, `nilai_akhir`) VALUES
(3, 1, 0.2, 0.3, 0.2, 0.1, 0.3, 0.3, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_user`
--

CREATE TABLE `sub_menu_user` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_menu_user`
--

INSERT INTO `sub_menu_user` (`id`, `id_menu`, `judul`, `url`, `icon`) VALUES
(1, 1, 'Dashboard', 'admin/index', 'fa fa-home'),
(2, 1, 'Data Kriteria', 'admin/kriteria', 'fa fa-asterisk'),
(3, 1, 'Data Alternatif', 'admin/alternatif', 'fa fa-users'),
(4, 1, 'Nilai Alternatif', 'admin/nilai_alternatif', 'fa fa-diamond'),
(5, 1, 'Perhitungan SAW', 'admin/perhitungan', 'fa fa-calculator'),
(6, 1, 'Pengguna', 'admin/pengguna', 'fa fa-user'),
(7, 2, 'Profile', 'pimpinan/index', 'fa fa-user'),
(8, 2, 'Laporan', 'admin/laporan', 'fa fa-book'),
(9, 2, 'Edit Profile', 'pimpinan/edit', 'fa fa-pencil-square-o'),
(10, 2, 'Ubah Password', 'pimpinan/ubahPassword', 'fa fa-key\r\n'),
(11, 1, 'Laporan', 'pimpinan/laporan', 'fa fa-book');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(15, 'Hafidz Abdul Kholiq', 'hafit@gmail.com               ', 'PIC2.png', '$2y$10$J4jrRi7qAnKFIwJY74U7Yu0DpYhDo2qiouLvmTYUxooU2eszwl/h.', 1, 1, '2019-12-09'),
(33, 'Hafit Abdul Kholiq', 'hafit.kholiq@students.amikom.ac.id ', 'hairul1.png', '$2y$10$mseUTzTwbDtZAvXr103nd.oelC1yU7Wj0DPuhKO0GRd5OLuK3Gdd2', 1, 1, '2019-12-05'),
(36, 'Hafit Abdul Kholiq', 'Pimpinan@gmail.com ', 'reyhuterhj.png', '$2y$10$JWky2n7McZY8ak4IeogirOK4lrXG7/AeYdxNmmr2Byl4qzIo7oG5y', 2, 1, '2019-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses_menu_user`
--
ALTER TABLE `akses_menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `menu_user`
--
ALTER TABLE `menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu_user`
--
ALTER TABLE `sub_menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses_menu_user`
--
ALTER TABLE `akses_menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `menu_user`
--
ALTER TABLE `menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_menu_user`
--
ALTER TABLE `sub_menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
