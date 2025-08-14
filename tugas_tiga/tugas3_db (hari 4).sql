-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2025 at 02:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas3_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pekerja`
--

CREATE TABLE `data_pekerja` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_kerja` varchar(255) NOT NULL,
  `jobdesc` varchar(255) NOT NULL,
  `jabatan` enum('junior','upper_junior','lower-senior','senior') NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pekerja`
--

INSERT INTO `data_pekerja` (`id`, `nama`, `id_kerja`, `jobdesc`, `jabatan`, `lokasi`) VALUES
(8, 'Amanda Dwi Putri   ', 'E1T108', 'Welder', 'senior', 'Talang bakung'),
(9, 'Maulana Umar Al-Faroq ', 'E1T108', 'Welder', 'lower-senior', 'Talang bakung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pekerja`
--
ALTER TABLE `data_pekerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pekerja`
--
ALTER TABLE `data_pekerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
