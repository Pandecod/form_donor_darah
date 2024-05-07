-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 08:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor_darah`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_darah`
--

CREATE TABLE `donor_darah` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `riwayat_penyakit` varchar(10) NOT NULL,
  `obat` varchar(10) NOT NULL,
  `makan` varchar(10) NOT NULL,
  `riwayat_donor` varchar(10) NOT NULL,
  `waktu_pendaftaran` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_donor` date DEFAULT NULL,
  `tempat_donor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_darah`
--

INSERT INTO `donor_darah` (`id`, `nama`, `alamat`, `telepon`, `email`, `gol_darah`, `tanggal_daftar`, `jenis_kelamin`, `riwayat_penyakit`, `obat`, `makan`, `riwayat_donor`, `waktu_pendaftaran`, `tanggal_donor`, `tempat_donor`) VALUES
(2, 'waw', 'BR.BELALUAN', '80999', 'pandeyuliyan@gmail.com', 'A', '2024-05-10', 'Laki-laki', 'Tidak', 'Tidak', 'Ya', 'Ya', '2024-05-07 04:44:43', NULL, NULL),
(3, 'bagas', 'denpasar', '08999', 'bagas@gmail.com', 'AB', '2024-05-09', 'Laki-laki', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '2024-05-07 04:55:06', NULL, NULL),
(4, 'pudidi', 'denpasar', '08234', 'bagas@gmail.com', 'B', '0000-00-00', 'Laki-laki', 'Ya', 'Ya', 'Tidak', 'Tidak', '2024-05-07 05:50:48', '2024-05-17', ''),
(5, 't', 't', '5', 'bagas@gmail.com', 'AB', '0000-00-00', 'Perempuan', 'Tidak', 'Tidak', 'Ya', 'Ya', '2024-05-07 05:52:44', '2024-05-11', 'bali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_darah`
--
ALTER TABLE `donor_darah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_darah`
--
ALTER TABLE `donor_darah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
