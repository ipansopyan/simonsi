-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 12:11 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simonsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_aka`
--

CREATE TABLE `data_aka` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `dosen_id` int(5) NOT NULL,
  `aka_id` int(5) NOT NULL,
  `tgl_nilai` date NOT NULL,
  `soal1` int(3) NOT NULL,
  `soal2` int(3) NOT NULL,
  `soal3` int(3) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prodi_id` int(5) NOT NULL,
  `thn_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `name`, `prodi_id`, `thn_id`) VALUES
(1, 'kalkulus', 1, 1),
(2, 'matdisk', 2, 2),
(3, 'Agribisnis', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `name`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Sipil'),
(3, 'Agribisnis'),
(4, 'PBI'),
(5, 'PGSD'),
(6, 'Manajemen'),
(7, 'Akuntansi'),
(8, 'Ahroteknologi'),
(9, 'Agribisnis'),
(10, 'Peternakan'),
(11, 'ipan'),
(12, 'ipan2'),
(13, 'ipan22');

-- --------------------------------------------------------

--
-- Table structure for table `thn_aka`
--

CREATE TABLE `thn_aka` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thn_aka`
--

INSERT INTO `thn_aka` (`id`, `name`, `status`) VALUES
(1, '2019', 1),
(2, '2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `n_induk` int(10) NOT NULL,
  `role` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `prodi_id` int(5) NOT NULL,
  `kelas` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `n_induk`, `role`, `name`, `email`, `passwd`, `prodi_id`, `kelas`) VALUES
(3, 1213213, 2, 'aso', 'aso@mail.com', '123', 1, 'C'),
(4, 122212, 2, 'randi', 'randi@mail.com', '123', 1, 'S'),
(6, 1803010073, 1, 'ipan sopyan', 'ipansopyan15@rocketmail.com', '86eff9b3c4feb53fa0c1213770cd18405829c7d4', 1, ''),
(8, 1, 3, 'admin', 'admin@mail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_aka`
--
ALTER TABLE `data_aka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_aka_fk0` (`user_id`),
  ADD KEY `data_aka_fk1` (`dosen_id`),
  ADD KEY `aka_id` (`aka_id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_id` (`prodi_id`,`thn_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thn_aka`
--
ALTER TABLE `thn_aka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_id` (`prodi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_aka`
--
ALTER TABLE `data_aka`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `thn_aka`
--
ALTER TABLE `thn_aka`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_aka`
--
ALTER TABLE `data_aka`
  ADD CONSTRAINT `data_aka_fk0` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `data_aka_fk1` FOREIGN KEY (`dosen_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
