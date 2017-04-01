-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 03:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semlokaptikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `no_registrasi` varchar(20) NOT NULL,
  `jenis_acara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_peserta`
--

CREATE TABLE `data_peserta` (
  `no_registrasi` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `gelar_depan` varchar(20) NOT NULL,
  `gelar_belakang` varchar(20) NOT NULL,
  `nidn` text NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_universitas`
--

CREATE TABLE `data_universitas` (
  `no_registrasi` varchar(20) NOT NULL,
  `nama_pt` text NOT NULL,
  `alamat_pt` text NOT NULL,
  `no_tlp_pt` int(12) NOT NULL,
  `website_pt` text NOT NULL,
  `email_pt` text NOT NULL,
  `program_studi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_pembayaran` varchar(20) NOT NULL,
  `no_registrasi` varchar(20) NOT NULL,
  `bukti_pembayaran` text NOT NULL,
  `tanggal_upload` date NOT NULL,
  `verivikasi` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `no_registrasi` varchar(20) NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  `status_pembayaran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`no_registrasi`, `tanggal_registrasi`, `status_pembayaran`) VALUES
('SEM-2017-02-03-001', '2017-02-03', 1),
('SEM-2017-02-03-002', '2017-02-03', 1),
('SEM-2017-02-03-003', '2017-02-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD KEY `no_registrasi` (`no_registrasi`);

--
-- Indexes for table `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD KEY `no_registrasi` (`no_registrasi`);

--
-- Indexes for table `data_universitas`
--
ALTER TABLE `data_universitas`
  ADD KEY `no_registrasi` (`no_registrasi`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_pembayaran`),
  ADD KEY `no_registrasi` (`no_registrasi`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`no_registrasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD CONSTRAINT `fk_peserta` FOREIGN KEY (`no_registrasi`) REFERENCES `registrasi` (`no_registrasi`);

--
-- Constraints for table `data_universitas`
--
ALTER TABLE `data_universitas`
  ADD CONSTRAINT `fk_uni` FOREIGN KEY (`no_registrasi`) REFERENCES `registrasi` (`no_registrasi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
