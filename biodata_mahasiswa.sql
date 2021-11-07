-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 08:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama_mhs` varchar(65) NOT NULL,
  `nim_mhs` varchar(13) NOT NULL,
  `almt_mhs` text NOT NULL,
  `no_mhs` int(11) NOT NULL,
  `email_mhs` varchar(65) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama_mhs`, `nim_mhs`, `almt_mhs`, `no_mhs`, `email_mhs`, `no`) VALUES
('Ini', '14324', 'afsdawe', 23423, 'safdfmail.com', 1),
('abdi', '1910817110008', 'Banjarbaru', 2147483647, '1910817110008@mhs.ulm.ac.id', 2),
('Muhammad Nur Abdi', '1910817110009', 'Kalimantan Selatan, Banjarbaru,', 2147483647, 'muhammadnurabdi01@gmail.com', 3),
('Muhammad Nur Abdi', '234234', 'Kalimantan Selatan, Banjarbaru,', 2147483647, 'muhammadnurabdi01@gmail.com', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim_mhs`),
  ADD KEY `Number` (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
