-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 03:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextajent`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `beli` date NOT NULL,
  `expired` date NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `beli`, `expired`, `keterangan`) VALUES
(1, 'Susu Fresh Milk', 15000, '2021-07-05', '2021-08-21', ''),
(2, 'Blend Espresso', 112000, '2021-07-01', '2021-12-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_member`
--

CREATE TABLE `jenis_member` (
  `id` int(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `diskon_member` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_member`
--

INSERT INTO `jenis_member` (`id`, `nama`, `diskon_member`) VALUES
(0, 'NoMember', 0),
(1, 'Gold', 5),
(2, 'Platinum', 10),
(3, 'Diamond', 15),
(4, 'Immortal', 15),
(5, 'Radiant', 15);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `jenis` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `nohp`, `jenis`) VALUES
(1, 'supjimen', '087720011006', 1),
(2, 'Supeno', '082138654873', 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `hpp` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `kategori`, `harga`, `hpp`) VALUES
(1, 'Americano', 'Coffee', 20000, 5700),
(2, 'Latte', 'Coffee', 24000, 7500),
(3, 'Cappuccino', 'Coffee', 24000, 7500),
(4, 'Flat White', 'Coffee', 22000, 7500),
(5, 'Piccolo', 'Coffee', 20000, 7500),
(6, 'Espresso', 'Coffee', 15000, 3000),
(7, 'Ajent Irish', 'Signature', 28000, 9000),
(8, 'Ajent Regal', 'Signature', 28000, 8700),
(9, 'Ajent Creme', 'Signature', 28000, 9000),
(10, 'Red Velvet', 'Non Coffee', 23000, 6400),
(11, 'Black Charcoal', 'Non Coffee', 23000, 6800),
(12, 'Taro', 'Non Coffee', 23000, 6400),
(13, 'Green Tea', 'Non Coffee', 23000, 6000),
(14, 'Dark Choco', 'Non Coffee', 23000, 5900),
(15, 'Coffee Mocktail', 'Non Coffee', 25000, 7600),
(16, 'Genshin Tea', 'Non Coffee', 20000, 4800),
(17, 'Kentang Goreng', 'Food', 15000, 4000),
(18, 'Sosis', 'Food', 15000, 4000),
(19, 'Nugget', 'Food', 15000, 4000),
(20, 'Mix Plater', 'Food', 15000, 4500),
(21, 'Cireng', 'Food', 15000, 4000),
(22, 'Chicken Wings', 'Food', 20000, 6700);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gaji` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jenis`, `jabatan`, `gaji`) VALUES
(1, 'Fiqi', 'Full-Time', 'Server', 1200000),
(2, 'Kye', 'Part-Time', 'Barista', 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `faktur` varchar(7) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `id_menu` int(25) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `diskon` int(3) DEFAULT NULL,
  `metode_pembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `faktur`, `tanggal`, `jam`, `id_menu`, `jumlah_barang`, `diskon`, `metode_pembayaran`) VALUES
(1, '18720NW', '2021-07-06', '20:02:16', 6, 1, 0, 'GOPAY'),
(2, '18719SK', '2021-07-06', '19:51:53', 2, 1, 0, 'CASH'),
(3, '18718KW', '2021-07-06', '18:57:14', 5, 1, 0, 'CASH'),
(4, '18718KW', '2021-07-06', '18:57:14', 10, 1, 0, 'CASH'),
(5, '187184H', '2021-07-06', '18:14:52', 22, 1, 0, 'CASH'),
(6, '187184H', '2021-07-06', '18:14:52', 6, 1, 0, 'CASH'),
(7, '18716SF', '2021-07-06', '16:19:12', 4, 1, 0, 'CASH'),
(8, '18716SF', '2021-07-06', '16:19:12', 12, 1, 0, 'CASH'),
(9, '18716SF', '2021-07-06', '16:19:12', 12, 1, 0, 'CASH'),
(10, '18715QX', '2021-07-06', '15:38:38', 21, 1, 0, 'CASH'),
(11, '18619UI', '2021-07-05', '19:55:55', 9, 2, 1, 'CASH'),
(12, '18619UI', '2021-07-05', '19:55:55', 10, 1, 0, 'CASH'),
(13, '18619UI', '2021-07-05', '19:55:55', 10, 1, 0, 'CASH'),
(14, '18619XT', '2021-07-05', '19:21:17', 19, 1, 0, 'OVO'),
(15, '18619Y3', '2021-07-05', '19:18:43', 21, 1, 0, 'CASH'),
(16, '18619Y3', '2021-07-05', '19:18:43', 3, 1, 0, 'CASH'),
(17, '18618L7', '2021-07-05', '18:38:55', 7, 1, 0, 'CASH'),
(18, '18618L7', '2021-07-05', '18:38:55', 5, 1, 0, 'CASH'),
(19, '18618SC', '2021-07-05', '18:22:23', 16, 1, 0, 'CASH'),
(20, '1861812', '2021-07-05', '18:19:27', 8, 1, 0, 'CASH'),
(21, '18617YW', '2021-07-05', '17:15:17', 2, 1, 2, 'DEBIT'),
(22, '186166R', '2021-07-05', '16:48:39', 7, 1, 0, 'CASH'),
(23, '18616RL', '2021-07-05', '16:11:50', 17, 1, 1, 'GOPAY'),
(24, '18616EV', '2021-07-05', '16:10:58', 6, 1, 0, 'OVO'),
(25, '18520RT', '2021-07-04', '20:52:21', 2, 1, 0, 'CASH'),
(26, '18519LH', '2021-07-04', '19:24:35', 10, 1, 0, 'CASH'),
(27, '18518F7', '2021-07-04', '18:58:09', 19, 1, 0, 'CASH'),
(28, '1851763', '2021-07-04', '17:29:08', 10, 1, 0, 'CASH'),
(29, '1851737', '2021-07-04', '17:12:24', 10, 1, 3, 'CASH'),
(30, '1851737', '2021-07-04', '17:12:24', 18, 1, 3, 'CASH'),
(31, '18517AG', '2021-07-04', '17:08:28', 16, 1, 0, 'CASH'),
(32, '18516RN', '2021-07-04', '16:57:27', 17, 1, 1, 'CASH'),
(33, '18516JP', '2021-07-04', '16:13:15', 17, 1, 0, 'CASH'),
(34, '18516AH', '2021-07-04', '16:12:30', 6, 1, 0, 'CASH'),
(35, '185166W', '2021-07-04', '16:11:32', 19, 1, 0, 'CASH'),
(36, '18516OG', '2021-07-04', '16:03:53', 13, 1, 0, 'OVO'),
(37, '18419XR', '2021-07-03', '19:07:56', 16, 1, 1, 'TRANSFER'),
(38, '18419HR', '2021-07-03', '19:02:18', 13, 1, 0, 'DEBIT'),
(39, '1841861', '2021-07-03', '18:52:58', 3, 1, 0, 'DEBIT'),
(40, '1841814', '2021-07-03', '18:14:53', 16, 1, 0, 'CASH'),
(41, '18418L8', '2021-07-03', '18:13:33', 21, 1, 0, 'CASH'),
(42, '18417D0', '2021-07-03', '17:10:13', 6, 1, 2, 'CASH'),
(43, '184155G', '2021-07-03', '15:26:25', 20, 2, 0, 'OVO'),
(44, '18322V6', '2021-07-02', '22:30:46', 2, 1, 0, 'CASH'),
(45, '18322V6', '2021-07-02', '22:30:46', 2, 1, 0, 'CASH'),
(46, '18322V6', '2021-07-02', '22:30:46', 20, 1, 0, 'CASH'),
(47, '18322V6', '2021-07-02', '22:30:46', 19, 1, 0, 'CASH'),
(48, '18322BV', '2021-07-02', '22:01:52', 2, 1, 0, 'CASH'),
(49, '18321IQ', '2021-07-02', '21:57:50', 15, 1, 3, 'TRANSFER'),
(50, '18321IQ', '2021-07-02', '21:57:50', 1, 1, 0, 'TRANSFER'),
(51, '18320X1', '2021-07-02', '20:32:47', 8, 1, 0, 'CASH'),
(52, '1832016', '2021-07-02', '20:29:28', 17, 1, 0, 'TRANSFER'),
(53, '18320FQ', '2021-07-02', '20:11:13', 2, 1, 0, 'CASH'),
(54, '183191F', '2021-07-02', '19:48:48', 19, 1, 0, 'CASH'),
(55, '18318VQ', '2021-07-02', '18:46:35', 15, 1, 0, 'CASH'),
(56, '18317VK', '2021-07-02', '17:26:52', 8, 1, 0, 'DEBIT'),
(57, '18216PU', '2021-07-01', '16:38:36', 3, 1, 0, 'CASH'),
(58, '21720NW', '2021-07-06', '20:02:16', 3, 1, 0, 'GOPAY'),
(59, '21719SK', '2021-07-06', '19:51:53', 15, 1, 0, 'CASH'),
(60, '21721KW', '2021-07-06', '21:57:14', 18, 1, 0, 'CASH'),
(61, '21721KW', '2021-07-06', '21:57:14', 10, 1, 0, 'CASH'),
(62, '217214H', '2021-07-06', '21:14:52', 11, 1, 0, 'CASH'),
(63, '217214H', '2021-07-06', '21:14:52', 21, 1, 0, 'CASH'),
(64, '21716SF', '2021-07-06', '16:19:12', 21, 1, 0, 'CASH'),
(65, '21716SF', '2021-07-06', '16:19:12', 14, 1, 0, 'CASH'),
(66, '21716SF', '2021-07-06', '16:19:12', 3, 1, 0, 'CASH'),
(67, '21715QX', '2021-07-06', '15:38:38', 7, 1, 0, 'CASH'),
(68, '19519UI', '2021-07-05', '19:55:55', 9, 2, 2, 'CASH'),
(69, '19519UI', '2021-07-05', '19:55:55', 10, 1, 1, 'CASH'),
(70, '19519UI', '2021-07-05', '19:55:55', 13, 1, 3, 'CASH'),
(71, '19519XT', '2021-07-05', '19:21:17', 6, 1, 0, 'OVO'),
(72, '19519Y3', '2021-07-05', '19:21:43', 19, 1, 0, 'CASH'),
(73, '19519Y3', '2021-07-05', '19:21:43', 16, 1, 0, 'CASH'),
(74, '19521L7', '2021-07-05', '21:38:55', 9, 1, 0, 'CASH'),
(75, '19521L7', '2021-07-05', '21:38:55', 17, 1, 0, 'CASH'),
(76, '19521SC', '2021-07-05', '21:22:23', 13, 1, 2, 'CASH'),
(77, '1952112', '2021-07-05', '21:19:27', 12, 1, 0, 'CASH'),
(78, '19517YW', '2021-07-05', '17:15:17', 6, 1, 2, 'DEBIT'),
(79, '195166R', '2021-07-05', '16:48:39', 16, 1, 0, 'CASH'),
(80, '19516RL', '2021-07-05', '16:11:50', 20, 1, 1, 'GOPAY'),
(81, '19516EV', '2021-07-05', '16:10:58', 10, 1, 0, 'OVO'),
(82, '21520RT', '2021-07-04', '20:52:21', 4, 1, 0, 'CASH'),
(83, '21519LH', '2021-07-04', '19:24:35', 22, 1, 0, 'CASH'),
(84, '21521F7', '2021-07-04', '21:58:09', 12, 1, 0, 'CASH'),
(85, '2151763', '2021-07-04', '17:29:08', 12, 1, 0, 'CASH'),
(86, '2151737', '2021-07-04', '17:12:24', 7, 1, 0, 'CASH'),
(87, '2151737', '2021-07-04', '17:12:24', 19, 1, 0, 'CASH'),
(88, '21517AG', '2021-07-04', '17:08:28', 12, 1, 0, 'CASH'),
(89, '21516RN', '2021-07-04', '16:57:27', 2, 1, 0, 'CASH'),
(90, '21516JP', '2021-07-04', '16:13:15', 11, 1, 0, 'CASH'),
(91, '21516AH', '2021-07-04', '16:12:30', 5, 1, 0, 'CASH'),
(92, '215166W', '2021-07-04', '16:11:32', 11, 1, 0, 'CASH'),
(93, '21516OG', '2021-07-04', '16:03:53', 15, 1, 0, 'OVO'),
(94, '21419XR', '2021-07-03', '19:07:56', 6, 1, 1, 'TRANSFER'),
(95, '21419HR', '2021-07-03', '19:02:21', 3, 1, 0, 'DEBIT'),
(96, '2141951', '2021-07-03', '21:52:58', 9, 1, 0, 'DEBIT'),
(97, '2142114', '2021-07-03', '21:14:53', 13, 1, 0, 'CASH'),
(98, '21421L8', '2021-07-03', '21:13:33', 10, 1, 0, 'CASH'),
(99, '21417D0', '2021-07-03', '17:10:13', 12, 1, 0, 'CASH'),
(100, '214155G', '2021-07-03', '15:26:25', 12, 2, 0, 'OVO'),
(101, '21322V6', '2021-07-02', '22:30:46', 3, 1, 0, 'CASH'),
(102, '21322V6', '2021-07-02', '22:30:46', 8, 1, 0, 'CASH'),
(103, '21322V6', '2021-07-02', '22:30:46', 11, 1, 0, 'CASH'),
(104, '21322V6', '2021-07-02', '22:30:46', 14, 1, 0, 'CASH'),
(105, '21322BV', '2021-07-02', '22:01:52', 20, 1, 0, 'CASH'),
(106, '21321IQ', '2021-07-02', '21:57:50', 14, 1, 3, 'TRANSFER'),
(107, '21321IQ', '2021-07-02', '21:57:50', 16, 1, 0, 'TRANSFER'),
(108, '21320X1', '2021-07-02', '20:32:47', 16, 1, 0, 'CASH'),
(109, '2132016', '2021-07-02', '20:29:28', 15, 1, 0, 'TRANSFER'),
(110, '21320FQ', '2021-07-02', '20:11:13', 10, 1, 0, 'CASH'),
(111, '213191F', '2021-07-02', '19:48:48', 5, 1, 0, 'CASH'),
(112, '21321VQ', '2021-07-02', '21:46:35', 9, 1, 0, 'CASH'),
(113, '21317VK', '2021-07-02', '17:26:52', 12, 1, 0, 'DEBIT'),
(114, '21216PU', '2021-07-01', '16:38:36', 14, 1, 1, 'CASH');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `nickname`, `username`, `password`) VALUES
(5, 'bagaskara2010@gmail.com', 'kara', 'knighterzz', '100601BK'),
(6, 'discov@gmail.com', 'kaka', 'kakaotalk', '2001'),
(7, 'admin@gmail.com', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_member`
--
ALTER TABLE `jenis_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `jenis_member` (`diskon`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`jenis`) REFERENCES `jenis_member` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`diskon`) REFERENCES `jenis_member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
