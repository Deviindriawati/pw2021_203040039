-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 08:58 AM
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
(3, 'imelda anyanya', '203020049', 'imelda@gmail.com', 'Teknik Pangan', '3.jpg'),
(4, 'Ayunita', '203020045', 'ayu@gmail.com', 'Teknik Industri', '4.jpg'),
(5, 'Reyhan mubarok', '203030004', 'reyhan@gmail.com', 'Teknik Mesin', '5.jpg'),
(6, 'Angga', '203030056', 'angga@gmail.com', 'Teknik Mesin', '6.jpg'),
(7, 'Sofya', '203010054', 'sofya@gmail.com', 'Teknik Industri', '7.jpg'),
(8, 'Asep mahendra', '203010034', 'asep@gmail.com', 'Teknik Industri', '8.jpg'),
(9, 'Salsabila', '203050005', 'salsa@gmail.com', 'Teknik Lingkungan', '9.jpg'),
(10, 'Ajil', '203050087', 'ajil@gmail.com', 'Teknik Lingkungan', '10.jpg'),
(17, 'cinta  ', '20304009', 'cinta@gmail.com', 'Teknik Industri', '60bb3cf876567.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$9pm6I.QygVHwGV05QblQn.QyM2XlRfhhvAyZyf6T1H2r/ZCGXILQi'),
(4, 'admin', '$2y$10$1YRBP3kkBmEp9ReuJdrRbu4mgCrSngDzIA0cpEbTsW/7yrKDI4JeK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
