-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2017 at 06:52 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lks`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `visimisi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `visimisi`, `gambar`, `deskripsi`) VALUES
(2, 'Visi : askfjklasddfq\r\nMisi : klasnfklasfnas', 'bb.jpg', 'JL. duren tiga');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE IF NOT EXISTS `katalog` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id`, `jenis`, `deskripsi`, `gambar`) VALUES
(6, 'Undangan Pernikahan', 'Panjang 10 cm \r\nLebar 2 m', 'Konsep-Undangan-Pernikahan-Indonesia-Wedding-Invitation-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teamplate`
--

CREATE TABLE IF NOT EXISTS `teamplate` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama_teamplate` varchar(200) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teamplate`
--

INSERT INTO `teamplate` (`id`, `nama_teamplate`, `status`) VALUES
(1, 'teamplate1.php', 'Y'),
(2, 'teamplate2.php', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
