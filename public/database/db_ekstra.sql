-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 01:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_ekstra`
--

CREATE TABLE `db_ekstra` (
  `Kode` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Hari` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_ekstra`
--

INSERT INTO `db_ekstra` (`Kode`, `Nama`, `Hari`, `des`, `type`, `gambar`) VALUES
('01', 'Futsal SMA', 'senin', 'lorem ipsum', '', ''),
('02', 'Futsal SMP', 'jumat', 'lorem ipsum', '', ''),
('03', 'Badminton', 'jumat', 'lorem ipsum', '', ''),
('13', 'Olimpiade IPA', 'Rabu', 'amma anak e ', 'olim', '\\spider1.jpeg'),
('14', 'Olimpiade IPS', 'Rabu', 'ERASE', 'olim', '\\spider2.jpeg'),
('15', 'Olimpiade Matematika', 'Rabu', 'lorem ipsum', '', ''),
('16', 'Musik SMP', 'Rabu', 'lorem ipsum', '', ''),
('17', 'Musik SMA', 'Rabu', 'lorem ipsum', '', ''),
('18', 'Basket SMA', 'Rabu', 'lorem ipsum', '', ''),
('19', 'Basket SMP', 'Rabu', 'lorem ipsum', '', ''),
('20', 'Baca tulis kitab kuning', 'Rabu', 'lorem ipsum', '', ''),
('21', 'Tilawah', 'Kamis', 'lorem ipsum', '', ''),
('22', 'Karate', 'Kamis', 'lorem ipsum', '', ''),
('23', 'Jurnalistik', 'Kamis', 'lorem ipsum', '', ''),
('24', 'Pramuka', 'Kamis', 'lorem ipsum', '', ''),
('25', 'Rugby', 'Minggu', 'lorem ipsum', '', ''),
('26', 'TEAM LELEMBUT', 'selasa', 'lorem ipsum', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_ekstra`
--
ALTER TABLE `db_ekstra`
  ADD PRIMARY KEY (`Kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
