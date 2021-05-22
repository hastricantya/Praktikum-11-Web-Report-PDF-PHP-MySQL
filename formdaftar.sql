-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 06:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdaftar`
--

CREATE TABLE `formdaftar` (
  `jenispend` varchar(15) NOT NULL,
  `tglmsk` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nopeserta` varchar(20) NOT NULL,
  `paud` varchar(10) NOT NULL,
  `tk` varchar(10) NOT NULL,
  `seriskhun` varchar(16) NOT NULL,
  `seriijazah` varchar(16) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `cita` varchar(20) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jkel` varchar(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tgllahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `abk` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kdpos` varchar(5) NOT NULL,
  `tempattinggal` varchar(30) NOT NULL,
  `transport` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kps` varchar(10) NOT NULL,
  `nokps` varchar(15) NOT NULL,
  `kwn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formdaftar`
--

INSERT INTO `formdaftar` (`jenispend`, `tglmsk`, `nis`, `nopeserta`, `paud`, `tk`, `seriskhun`, `seriijazah`, `hobi`, `cita`, `namalengkap`, `jkel`, `nisn`, `nik`, `tempatlahir`, `tgllahir`, `agama`, `abk`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kdpos`, `tempattinggal`, `transport`, `nohp`, `notelp`, `email`, `kps`, `nokps`, `kwn`) VALUES
('Pindahan', '2021-05-31', '12', '12', 'Tidak', 'Ya', '12', '12', 'Kesenian', 'TNI/POLRI', 'Grizzly', 'Laki-laki', '12', '12', 'Kutub', '2021-04-25', 'Budha', 'Bakat', 'Kutub', '12', '12', 'kutub', 'kutub', 'kutub', '12', 'Wali', 'Jalan Kaki', '12', '12', 'grizzly@gmail.com', 'Tidak', '', 'Asing'),
('Pindahan', '2021-05-17', '13', '13', 'Tidak', 'Tidak', '13', '13', 'Membaca', 'Guru/Dosen', 'Icebear', 'Laki-laki', '13', '13', 'Kutub', '2021-04-27', 'Konghucu', 'Tidak Abk', 'Kutub', '13', '13', 'kutub', 'kutub', 'kutub', '40192', 'Bersama Orang Tua', 'Jalan Kaki', '13', '13', 'icebear@gmail.com', 'Tidak', '', 'Asing'),
('Pindahan', '2021-05-02', '14', '14', 'Ya', 'Ya', '14', '14', 'Travelling', 'Seni/Lukis/Artis/Sej', 'panda', 'Laki-laki', '14', '14', 'Kutub', '2021-04-25', 'Konghucu', 'Hiperaktif', 'Kutub', '14', '14', 'kutub', 'kutub', 'kutub', '40192', 'Asrama', 'Jalan Kaki', '14', '14', 'panda@gmail.com', 'Tidak', '', 'Asing'),
('Siswa Baru', '2021-05-07', '15', '15', 'Tidak', 'Ya', '15', '15', 'Menulis', 'Guru/Dosen', 'Hastri Cantya Danahiswari', 'Perempuan', '15', '15', 'Makassar', '2021-05-07', 'Islam', 'Tidak Abk', 'Bandung', '15', '15', 'Pasirlayung Asri', 'Pasirlayung', 'Cibeunying Kidul', '40192', 'Bersama Orang Tua', 'Kendaraan Pribadi', '15', '15', 'hastricantyad@gmail.com', 'Tidak', '', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdaftar`
--
ALTER TABLE `formdaftar`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
