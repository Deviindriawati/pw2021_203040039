-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 05:16 PM
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
-- Database: `pw_tubes_203040039`
--

-- --------------------------------------------------------

--
-- Table structure for table `novel`
--

CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `novel`
--

INSERT INTO `novel` (`id`, `judul`, `penulis`, `penerbit`, `harga`, `img`) VALUES
(1, 'Dillan 1990', 'Pidi Baiq', 'Pastel Books(MIZAN)', 'Rp. 80.000,-', 'foto3.JPG'),
(2, 'Dillan 1991', 'Pidi Baiq', 'Pastel Books(MIZAN)', 'Rp. 80.000,-', 'foto10.JPG'),
(3, 'Milea Suara dari Dilan', 'Pidi Baiq', 'Pastel Books(MIZAN)', 'Rp. 85.000,-', 'foto2.JPG'),
(5, 'Cinta Paling Rumit', 'Boy Candra', 'KataDepan', 'Rp. 60.000,-', 'foto8.JPG'),
(6, '5cm', 'Donny Dhirgantoro', 'Grasindo', 'Rp. 80.000,-', 'foto6.JPG'),
(7, 'Mariposa', 'Luluk Hf', 'Coconut Books', 'Rp. 95.000,-', 'foto4.JPG'),
(8, 'Senja Hujan Cerita', 'Boy Candra', 'MediaKita', 'Rp. 65.000,-', 'foto7.JPG'),
(9, 'Malik & Elsa', 'Boy Candra', 'MediaKita', 'Rp. 75.000,-', 'foto9.JPG'),
(10, 'Perahu Kertas', 'Dewi Lestari', 'Bentang Pustaka', 'Rp. 85.000,-', 'foto5.JPG'),
(15, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 'Rp. 90.000,-', 'foto1.JPG');

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
(0, 'devi', '$2y$10$MRSwIHR.U/a8/puhgK2gBu5W1Ge/fxRenPRdRoF4dn/XydyQnSztG'),
(0, 'devi12345', '$2y$10$ceC4kjGi0PVAD72jt5qaMunXtt.VmkDkppC0RmUeDeXzUJEbQKK4a'),
(0, 'devi13', '$2y$10$cyeR73x10nd8X.FDainEMe/H.PNIsBRpxjMSO5NxEgzB2F2xf8Fjq'),
(0, '', '$2y$10$wZ13/NAYgosIEcA5yCwlZ.4PJnrp7YGm/wge5wvEYx42aC3ipkuZC'),
(0, 'dev', '$2y$10$sZLxedY6wJFal9hSduLlb.vP3aZPWYCuTaxyYfR/I3W7iagRT.a/6'),
(0, 'indy', '$2y$10$DDk9.m7tDldRuqCRA5A3W.obeC0nXnkRxDaZA.FiRhgNlUb3R3E12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
