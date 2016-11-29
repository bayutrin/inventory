-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 08:39 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nm_brg` varchar(20) NOT NULL,
  `no_seri` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` varchar(60) NOT NULL,
  `slug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nm_brg`, `no_seri`, `merk`, `lokasi`, `keterangan`, `slug`) VALUES
(1, 'kamera', 'kx87655', 'nikon', 'semarang', 'baik', 'kx87655'),
(2, 'dron', 'ew334', 'xiomifff', 'semarang', 'baik', ''),
(6, 'kamera', 'we376', 'canon', 'ungaran', 'baik', ''),
(7, 'kamera', 'keww', 'canon', 'semarang', 'baik', ''),
(9, 'v v ', 'dd', 'ddd', 'dddb', 'Baik', ''),
(10, 'df ', 'fffewwrewe', 'f s f ', 'fvfvfsv', 'Baik', ''),
(12, 'd svv', 'dsvsdvs', 'svdv', 'ffff', 'Rusak', ''),
(13, 'gggddd', 'xcv ', 'bbbb', 'fdvfvf', 'Rusak', ''),
(14, 'eetewrfw', 'vsvv', 'rvtbvtb', 'svvt', 'Rusak', ''),
(15, ' f f sfrrr', 'vsvvb', 'svsv', 'bbbb', 'Baik', ''),
(16, 'aa', 'aa', 'aa', 'aa', 'Baik', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
