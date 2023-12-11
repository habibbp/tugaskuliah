-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 10:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `harga_motor` varchar(255) NOT NULL,
  `warna_motor` varchar(255) NOT NULL,
  `tahun_motor` varchar(255) NOT NULL,
  `id_motor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`harga_motor`, `warna_motor`, `tahun_motor`, `id_motor`) VALUES
('20.000.000', 'hitam', '2021', 'bp123');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `name_pelanggan` varchar(255) NOT NULL,
  `email` varchar(11) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2024-01-29 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `name_pelanggan`, `email`, `photo`, `password`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'admin12', 'admin123@gm', 'http://localhost/penjualmotor/uploads/files/ymuqxp07t_nzbr9.png', '$2y$10$MD.vLiZXU.k.YPcvhgfJsO.stHtL.7pWSYmdp2j/IruFzEXlsRWju', NULL, NULL, '2024-01-29 00:00:00', NULL),
(2, 'admin', 'andi12@GMAI', 'http://localhost/penjualmotor/uploads/files/8kzmfx0r2tq_j4i.jpg', '$2y$10$UrUU/1DPJygtV0JmGwtU1usq6OFmgWJSNLUilV8WCUVUh1hvDVI16', NULL, NULL, '2024-01-29 00:00:00', NULL),
(3, 'admin13', 'admin13@gma', 'http://localhost/penjualmotor/uploads/files/31igmt8o5ufe_cl.jpg', '$2y$10$mPaMi3wBca.OKZp61ovSRuf2MRPruh0yKuyKzXg9eLHUmEgcRf046', 'd45da15ee26265225062ea5c7cf407c9', NULL, '2024-01-29 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `total_transaksi` varchar(255) NOT NULL,
  `cicilan` varchar(255) NOT NULL,
  `garansi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tanggal`, `total_transaksi`, `cicilan`, `garansi`) VALUES
(1, 'aldu', '0000-00-00', '1', '5', '5'),
(2, 'abdul', '0000-00-00', '10', '5', '10'),
(3, 'putri', '0000-00-00', '30', '5', '15-6-2023');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` varchar(30) DEFAULT NULL,
  `id_motor` varchar(25) NOT NULL,
  `jumlah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_detail`, `id_transaksi`, `id_motor`, `jumlah`) VALUES
(1, '1', '123', 'BP7707K'),
(2, '12', '70', 'BP123M'),
(4, '1', '1', 'BP739L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`harga_motor`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
