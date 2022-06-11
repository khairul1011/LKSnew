-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 02:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `foto`) VALUES
(3, 'ayam', '3000000', '20', 'WhatsApp Image 2022-03-11 at 15.07.42.jpeg'),
(4, 'honda', '12000000', '87', 'WhatsApp Image 2022-03-11 at 15.07.42.jpeg'),
(5, 'gas lpg', '18000', '0', 'images.jfif'),
(7, 'ayam', '2000000', '20', '2022-04-12 (1).png'),
(8, 'biskuit', '2000', '50', '2022-04-10.png');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id_nama` int(11) NOT NULL,
  `nama` char(20) NOT NULL,
  `no.hp` int(11) NOT NULL,
  `sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id_nama`, `nama`, `no.hp`, `sekolah`) VALUES
(1, 'ferdi', 853459454, 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `no_telfon` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telfon`, `alamat`) VALUES
(1, 'asdas', '0000-00-00', 'myamin'),
(2, 'asdas', '098755', 'bangkinang'),
(3, 'amri', '08567863345', 'uwai'),
(4, 'nugraha', '08567863345', 'tubola'),
(5, 'nugra', '086567687', 'batubelah');

-- --------------------------------------------------------

--
-- Table structure for table `simpantransaksi`
--

CREATE TABLE `simpantransaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_satuan` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL DEFAULT current_timestamp(),
  `waktu_masuk` time NOT NULL DEFAULT current_timestamp(),
  `jumlah_pesanan` varchar(100) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simpantransaksi`
--

INSERT INTO `simpantransaksi` (`id_transaksi`, `id_barang`, `id_pelanggan`, `nama_barang`, `harga_satuan`, `tanggal_masuk`, `waktu_masuk`, `jumlah_pesanan`, `subtotal`) VALUES
(1, 1, 0, '', '', '2022-03-21', '12:51:56', '1', 0),
(2, 3, 0, '', '', '2022-03-21', '12:51:56', '10', 0),
(3, 3, 0, '', '', '2022-03-21', '12:51:56', '1', 0),
(4, 3, 0, '', '', '2022-03-21', '12:52:30', '9', 0),
(5, 3, 0, '', '', '2022-03-21', '13:00:29', '30', 0),
(6, 3, 0, '', '', '2022-03-21', '13:01:09', '10', 0),
(7, 4, 0, '', '', '2022-03-24', '09:58:47', '1', 0),
(8, 3, 0, '', '', '2022-03-24', '09:58:58', '9', 0),
(9, 4, 0, '', '', '2022-03-24', '09:59:19', '9', 0),
(10, 4, 0, '', '', '2022-03-24', '10:02:27', '1', 0),
(11, 4, 0, '', '', '2022-04-10', '21:07:17', '1', 0),
(12, 8, 0, '', '', '2022-06-05', '12:37:11', '50', 0),
(13, 3, 0, '', '', '2022-06-05', '12:38:58', '1', 0),
(14, 5, 0, '', '', '2022-06-05', '12:40:40', '100', 0),
(15, 4, 0, '', '', '2022-06-11', '00:32:44', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb.login`
--

CREATE TABLE `tb.login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb.login`
--

INSERT INTO `tb.login` (`username`, `password`, `role`) VALUES
('FerdiBoy', '12345', ''),
('admin', 'admin', 'admin'),
('user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id_data` int(11) NOT NULL,
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelpon` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `role`, `email`, `alamat`, `notelpon`) VALUES
(1, 'admin', 'admin', 'admin', '', '', ''),
(2, 'user', 'user', 'user', 'user@gmail.com', 'gang pemuda, bangkinang ', '088712368'),
(3, 'test', 'test', '', 'test@gmail.com', '', '0923409032'),
(4, 'test2', 'test2', '', 'test2', 'bangkinang', '0982109'),
(5, 'test3', 'test3', 'user', 'test3@gmail.com', 'pekanbaru', '0912093012');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_tran` int(11) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_tran`, `namabarang`, `harga`, `subtotal`) VALUES
(3, 'honda', 0, 6000000),
(4, 'biskuit', 0, 6000000),
(5, 'biskuit', 0, 6000000),
(6, 'honda', 0, 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `uang`
--

CREATE TABLE `uang` (
  `id_uang` int(11) NOT NULL,
  `nama` char(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uang`
--

INSERT INTO `uang` (`id_uang`, `nama`, `jumlah`) VALUES
(1, 'uang', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `simpantransaksi`
--
ALTER TABLE `simpantransaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_tran`);

--
-- Indexes for table `uang`
--
ALTER TABLE `uang`
  ADD PRIMARY KEY (`id_uang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `simpantransaksi`
--
ALTER TABLE `simpantransaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_tran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uang`
--
ALTER TABLE `uang`
  MODIFY `id_uang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
