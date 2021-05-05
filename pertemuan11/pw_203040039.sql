-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 07:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040039`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Teguh anggara', '203040001', 'Teguhangara@gmail.com', 'Teknik Informatika', '1.jpeg'),
(2, 'raina yuana', '203040087', 'raiana@gmail.com', 'Teknik Informatika', '2.jpg'),
(3, 'imelda anyanya', '203020049', 'imelda@gmail.com', 'Teknik Pangan', '3.jpg'),
(4, 'ayunita ', '203020045', 'ayu@gmail.com', 'Teknik Pangan', '4.jpg'),
(5, 'Reyhan mubarok', '203030004', 'reyhan@gmail.com', 'Teknik Mesin', '5.jpg'),
(6, 'Angga', '203030056', 'angga@gmail.com', 'Teknik Mesin', '6.jpg'),
(7, 'Sofya', '203010054', 'sofya@gmail.com', 'Teknik Industri', '7.jpg'),
(8, 'Asep mahendra', '203010034', 'asep@gmail.com', 'Teknik Industri', '8.jpg'),
(9, 'Salsabila', '203050005', 'salsa@gmail.com', 'Teknik Lingkungan', '9.jpg'),
(10, 'Ajil', '203050087', 'ajil@gmail.com', 'Teknik Lingkungan', '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
