-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 09:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azzahra`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(110) NOT NULL,
  `namapanggilan` varchar(110) NOT NULL,
  `nomorindukasal` varchar(110) NOT NULL,
  `nisn` varchar(110) NOT NULL,
  `ttl` varchar(110) NOT NULL,
  `jeniskelamin` varchar(110) NOT NULL,
  `agama` varchar(110) NOT NULL,
  `anakke` varchar(110) NOT NULL,
  `statusanakdlmkeluarga` varchar(110) NOT NULL,
  `alamat` int(11) NOT NULL,
  `teleponhp` int(11) NOT NULL,
  `dikelas` int(11) NOT NULL,
  `padatanggal` int(11) NOT NULL,
  `namasdmiasal` int(11) NOT NULL,
  `alamatsekolahasal` int(11) NOT NULL,
  `namalengkapayah` int(11) NOT NULL,
  `namalengkapibu` int(11) NOT NULL,
  `alamatayah` int(11) NOT NULL,
  `alamatibu` int(11) NOT NULL,
  `teleponhportu` int(11) NOT NULL,
  `pekerjaanayah` int(11) NOT NULL,
  `pekerjaanibu` int(11) NOT NULL,
  `pendidikanterakhirayah` int(11) NOT NULL,
  `pendidikanterakhiribu` int(11) NOT NULL,
  `namaayahwali` int(11) NOT NULL,
  `namaibuwali` int(11) NOT NULL,
  `alamatayahwali` int(11) NOT NULL,
  `alamatibuwali` int(11) NOT NULL,
  `teleponwali` int(11) NOT NULL,
  `pekerjaanayahwali` int(11) NOT NULL,
  `pekerjaanibuwali` int(11) NOT NULL,
  `pendidikanterakhirayahwali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
