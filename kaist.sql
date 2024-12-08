-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2024 at 05:23 AM
-- Server version: 11.4.2-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaist`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` int(100) NOT NULL,
  `jurusan` text NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `nim`, `jurusan`, `tanggal_lahir`) VALUES
(1, 'zain', 1234, 'computer science', '2000-01-01'),
(2, 'adrian', 2345, 'electro', '2000-05-02'),
(3, 'serena', 3456, 'business', '2002-10-05'),
(4, 'edith', 4567, 'economics', '2001-06-04'),
(5, 'jeanette', 5678, 'electro', '2002-12-12'),
(6, 'matthias', 6789, 'business', '2000-04-23'),
(7, 'bastian', 7890, 'agriculture', '2002-08-22'),
(8, 'layla', 8901, 'doctor', '2003-10-16'),
(9, 'thomas', 9012, 'doctor', '2003-10-26'),
(10, 'daisy', 1237, 'agriculture', '2003-10-23'),
(11, 'Angellyn', 2234, 'mining', '2003-07-09'),
(12, 'James', 2334, 'Geology', '2002-08-15'),
(13, 'Arthur', 3345, 'architect', '2002-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(110) NOT NULL,
  `matkul` text NOT NULL,
  `sks` int(100) NOT NULL,
  `semester` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `matkul`, `sks`, `semester`) VALUES
(1, 'basis data', 4, 2),
(2, 'jaringan komputer', 3, 3),
(3, 'financial accounting', 4, 3),
(4, 'makroekonomi', 4, 4),
(5, 'botani', 3, 1),
(6, 'anotomi', 5, 3),
(7, 'algoritma', 4, 1),
(8, 'genetika', 5, 4),
(9, 'kelistrikan', 3, 4),
(10, 'agroekologi', 4, 3),
(11, 'managemen pemasaran', 5, 5),
(12, 'managemen perbankan', 4, 3),
(13, 'mining geology', 3, 4),
(14, 'kalkulus', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(110) NOT NULL,
  `id_mahasiswa` int(100) NOT NULL,
  `id_matkul` int(100) NOT NULL,
  `nilai` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_mahasiswa`, `id_matkul`, `nilai`) VALUES
(1, 1, 1, 93.00),
(2, 2, 2, 87.00),
(3, 3, 11, 91.00),
(4, 4, 4, 93.00),
(5, 5, 9, 94.00),
(6, 6, 3, 91.00),
(7, 7, 5, 96.00),
(8, 8, 6, 96.00),
(9, 9, 8, 91.00),
(10, 10, 10, 87.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD UNIQUE KEY `id_mahasiswa` (`id_mahasiswa`,`id_matkul`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
