-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 11:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukom`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nisn` int(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jeniskelamin` varchar(128) NOT NULL,
  `mtk` int(100) NOT NULL,
  `bing` int(100) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status_pendaftaran` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nisn`, `alamat`, `tgl`, `jeniskelamin`, `mtk`, `bing`, `agama`, `created_at`, `updated_at`, `status_pendaftaran`, `photo`) VALUES
(12, 'livia', 2147483647, 'Jl abdul muis ', '2000-02-06', 'Perempuan', 0, 0, 'Islam', '2021-06-27 10:26:02', '2021-06-27 10:31:39', 'Diterima', ''),
(13, 'ayu', 12345678, 'jl. kampung baru', '2000-02-09', 'Perempuan', 0, 0, 'Islam', '2021-06-27 10:48:28', '2021-06-27 10:49:31', 'Diterima', ''),
(14, 'hernani', 2147483647, 'jl.rambutan', '2001-11-11', 'Perempuan', 80, 80, 'Islam', '2021-06-27 12:16:14', '2021-06-27 12:18:42', 'Diterima', 'logo unila.png'),
(15, 'nava', 2147483647, 'jl. kedondong', '2001-08-12', 'Perempuan', 96, 80, 'Islam', '2021-06-27 19:18:44', '2021-06-27 19:19:22', 'Diterima', 'Welcome Scan.jpg'),
(16, 'dino', 2147483647, 'jl.rambutan', '2000-02-11', 'Laki', 80, 78, 'Islam', '2021-06-27 19:21:45', '2021-06-28 08:50:35', 'Ditolak', 'logo unila_1.png'),
(17, 'anggi', 2147483647, 'jl.rambutan', '2000-12-22', 'Perempuan', 78, 76, 'Islam', '2021-06-28 00:53:40', '2021-06-28 00:54:16', 'Diterima', 'Welcome Scan_1.jpg'),
(18, 'istoria', 2147483647, 'jl.rambutan', '2000-11-11', 'Perempuan', 78, 80, 'Islam', '2021-06-28 08:49:22', '2021-06-28 08:51:41', 'Diterima', 'Welcome Scan_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'qqqq', 'qqq@q.o', '123', 'pendaftar', '2021-06-27 10:10:37', '2021-06-27 10:10:37'),
(18, 'livia', 'livia@gmail.com', '1234', 'pendaftar', '2021-06-27 10:18:37', '2021-06-27 10:18:37'),
(19, 'ayu', 'ayu@gmail.com', '1234', 'pendaftar', '2021-06-27 10:47:30', '2021-06-27 10:47:30'),
(20, 'istoria', 'istoria@gmail.com', '1234', 'pendaftar', '2021-06-27 11:17:50', '2021-06-27 11:17:50'),
(21, 'hernani', 'hernani@gmail.com', '1234', 'pendaftar', '2021-06-27 11:55:20', '2021-06-27 11:55:20'),
(22, 'nava', 'nava@gmail.com', '1234', 'pendaftar', '2021-06-27 19:16:24', '2021-06-27 19:16:24'),
(23, 'dino', 'dino@gmail.com', '1234', 'pendaftar', '2021-06-27 19:20:38', '2021-06-27 19:20:38'),
(24, 'anggi', 'anggi@gmail.com', '1234', 'pendaftar', '2021-06-28 00:52:51', '2021-06-28 00:52:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
