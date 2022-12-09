-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 09, 2022 at 05:04 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `danielkevin-todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `tugas_danielkevin`
--

CREATE TABLE `tugas_danielkevin` (
  `id_tugas` int(11) NOT NULL,
  `nama_tugas` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `deskripsi_tugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas_danielkevin`
--

INSERT INTO `tugas_danielkevin` (`id_tugas`, `nama_tugas`, `deadline`, `deskripsi_tugas`) VALUES
(25, 'Tugas Akhir BTNG 2022', '2022-12-14', 'Membuat Website Todoo'),
(31, 'Dasar Akuntansi', '2022-12-15', 'Membuat Jurnal Umum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tugas_danielkevin`
--
ALTER TABLE `tugas_danielkevin`
  ADD PRIMARY KEY (`id_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tugas_danielkevin`
--
ALTER TABLE `tugas_danielkevin`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
