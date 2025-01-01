-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2025 at 04:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_kripik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pelanggan`
--

CREATE TABLE `tabel_pelanggan` (
  `id_pelanggan` int NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `no_telepon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pelanggan`
--

INSERT INTO `tabel_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telepon`, `alamat`) VALUES
(1, 'syifa', '8764376', 'BIREUEN'),
(3, 'ilham', '56789', 'BIREUENn');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesanan`
--

CREATE TABLE `tabel_pesanan` (
  `id_pesanan` int NOT NULL,
  `id_pelanggan` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pesanan`
--

INSERT INTO `tabel_pesanan` (`id_pesanan`, `id_pelanggan`, `id_produk`, `jumlah`) VALUES
(1, 1, 2, 100),
(2, 2, 2, 20),
(7, 1, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE `tabel_produk` (
  `id_produk` int NOT NULL,
  `stok` int NOT NULL,
  `harga_jual` int NOT NULL,
  `nama_produk` enum('kripik singkong orijinal','kripik singkong rasa jagung','kripik singkong rasa balado','kripik pisang orijinal','kripik pisang manis','kripik sukun') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`id_produk`, `stok`, `harga_jual`, `nama_produk`) VALUES
(1, 60, 3000, 'kripik singkong orijinal'),
(2, 60, 30000, 'kripik singkong rasa jagung'),
(3, 100, 40000, 'kripik singkong rasa balado');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `id_transaksi` int NOT NULL,
  `id_pesanan` int NOT NULL,
  `total_harga` int NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `metode_pembayaran` enum('transfer','cod','case') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status_transaksi` enum('sudah','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_transaksi`
--

INSERT INTO `tabel_transaksi` (`id_transaksi`, `id_pesanan`, `total_harga`, `tanggal_transaksi`, `metode_pembayaran`, `status_transaksi`) VALUES
(1, 1, 80000, '2024-12-01', 'transfer', 'sudah'),
(2, 2, 70000, '2024-12-02', 'cod', 'belum'),
(3, 3, 40000, '2024-12-03', 'case', 'sudah'),
(4, 4, 50000, '2024-12-04', 'case', 'sudah'),
(5, 5, 60000, '2024-12-05', 'transfer', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_modal`
--

CREATE TABLE `tb_modal` (
  `id_modal` int NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_modal` decimal(60,0) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_modal`
--

INSERT INTO `tb_modal` (`id_modal`, `tanggal`, `jumlah_modal`, `keterangan`) VALUES
(3, '2024-12-04', '1000', 'modal baru'),
(6, '2024-12-27', '2000000', 'modal baru'),
(8, '2024-12-13', '100', 'keripik'),
(9, '2024-12-26', '200', 'gaji'),
(10, '2025-01-10', '50000', 'modal baru');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'cipa', '$2y$10$sZmIMkyZE3wOEH3kVs5M8uJGIoMqr4EZYLQOl6sz1K15I2F3Ea96i'),
(2, 'puput', '$2y$10$SPoOkujsSvtWp78A8asLZO.oww5NtmAFEHpyJDb1ARHkx7y7re9IG'),
(3, 'fira', '$2y$10$TLMuydMTlucmB6tPIWKSu.hbQFAw/1wYrpill7fpdrvllDN6zmiiu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pelanggan`
--
ALTER TABLE `tabel_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tabel_pesanan`
--
ALTER TABLE `tabel_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_modal`
--
ALTER TABLE `tb_modal`
  ADD PRIMARY KEY (`id_modal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pelanggan`
--
ALTER TABLE `tabel_pelanggan`
  MODIFY `id_pelanggan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tabel_pesanan`
--
ALTER TABLE `tabel_pesanan`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_modal`
--
ALTER TABLE `tb_modal`
  MODIFY `id_modal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
