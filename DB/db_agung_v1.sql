-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2024 at 01:55 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agung`
--

-- --------------------------------------------------------

--
-- Table structure for table `apron`
--

CREATE TABLE `apron` (
  `id_apron` varchar(11) NOT NULL,
  `tgl` varchar(20) DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `kondisi` varchar(20) DEFAULT NULL,
  `marka` varchar(20) DEFAULT NULL,
  `fod` varchar(20) DEFAULT NULL,
  `rubber` varchar(20) DEFAULT NULL,
  `obstacle` varchar(20) DEFAULT NULL,
  `bird` varchar(20) DEFAULT NULL,
  `pagar` varchar(20) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `apron` varchar(20) DEFAULT NULL,
  `inspektor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `id_inspect` varchar(11) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `marka` varchar(20) NOT NULL,
  `fod` varchar(20) NOT NULL,
  `rubber` varchar(20) NOT NULL,
  `obstacle` varchar(20) NOT NULL,
  `bird` varchar(20) NOT NULL,
  `pagar` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `runway` varchar(20) NOT NULL,
  `inspektor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`id_inspect`, `tgl`, `waktu`, `area`, `kondisi`, `marka`, `fod`, `rubber`, `obstacle`, `bird`, `pagar`, `foto`, `catatan`, `runway`, `inspektor`) VALUES
('6329240', '', '', '', '', '', '', '', '', '', '', '65a67e7bd82b4.png', '', '', ''),
('6470182', '2024-01-05', '12:35', '13', 'Tidak', 'Baik', 'Ada', 'Tipis', 'Ada', 'Ada', 'Baik', '65a6153d95829.png', 'dfasdasd', '1', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) DEFAULT NULL,
  `categories` varchar(100) DEFAULT NULL,
  `loc` varchar(100) DEFAULT NULL,
  `report_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `tgl`, `categories`, `loc`, `report_by`) VALUES
(4424595, '2024-01-11', '2', '2', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `taxiway`
--

CREATE TABLE `taxiway` (
  `id_tax` varchar(11) NOT NULL,
  `tgl` varchar(20) DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `kondisi` varchar(20) DEFAULT NULL,
  `marka` varchar(20) DEFAULT NULL,
  `fod` varchar(20) DEFAULT NULL,
  `rubber` varchar(20) DEFAULT NULL,
  `obstacle` varchar(20) DEFAULT NULL,
  `bird` varchar(20) DEFAULT NULL,
  `pagar` varchar(20) DEFAULT NULL,
  `foto1` varchar(100) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `runway` varchar(20) DEFAULT NULL,
  `inspektor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apron`
--
ALTER TABLE `apron`
  ADD PRIMARY KEY (`id_apron`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`id_inspect`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxiway`
--
ALTER TABLE `taxiway`
  ADD PRIMARY KEY (`id_tax`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4424596;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
