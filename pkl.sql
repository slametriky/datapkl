-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2016 at 05:08 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jeniskelamin` varchar(20) DEFAULT NULL,
  `universitas` varchar(35) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `jeniskelamin`, `universitas`, `jurusan`, `email`) VALUES
(1, 'slamet', 'laki-laki', 'polsri', 'teknik komputer', 'riky.rian@yaho.com'),
(3, 'Agung Tri Laksono', 'Laki-Laki', 'Politeknik Sriwijaya', 'Teknik Komputer', 'riky.rian@yahoo.com'),
(4, 'Muhammad Fahmi', 'Laki-Laki', 'Universitas Palembang', 'Teknik Elektro', 'fahmi@yahoo.com'),
(5, 'Fathun', 'Laki-Laki', 'Universitas Sriwijaya', 'Teknik Sipil', 'fatun@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Bengkulu'),
(4, 'Jambi'),
(5, 'Riau'),
(6, 'Sumatera Barat'),
(7, 'Sumatera Selatan'),
(8, 'Lampung'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Kepulauan Riau'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'DKI Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Jawa Timur'),
(16, 'Daerah Istimewa Yogyakarta'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Gorontalo'),
(25, 'Sulawesi Selatan'),
(26, 'Sulawesi Tenggara'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Utara'),
(29, 'Sulawesi Barat'),
(30, 'Maluku'),
(31, 'Maluku Utara'),
(32, 'Papua'),
(33, 'Papua Barat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `universitas` varchar(50) DEFAULT NULL,
  `tempatkp` varchar(100) DEFAULT NULL,
  `tanggalkp` varchar(100) DEFAULT NULL,
  `tanggalselesai` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `nama`, `jenis_kelamin`, `universitas`, `tempatkp`, `tanggalkp`, `tanggalselesai`, `alamat`, `telepon`) VALUES
(5, '061430700518', 'Muhammad Luthfi', 'Laki-Laki', 'Politeknik Negeri Sriwijaya', 'Telkom Indonesia, Jl. Kapten A.Rivai', '2016-08-01', '2016-09-01', 'Jalan Sekip Ujung Palembang', '0895361024110'),
(15, '061430700519', 'Fathun Qorib', 'Laki-Laki', 'Universitas Sriwijaya', 'Telkom Indonesia, Jalan Jendral Sudirman', '2016-08-01', '2016-08-10', 'Jalan Bukit Besar Palembang', '082178976986'),
(17, '061430700442', 'Anjas Umanu', 'Laki-Laki', 'Politeknik Negeri Sriwijaya', 'Telkom Indonesia, Jalan Jendral Sudirman', '2016-07-11', '2016-08-20', 'Jalan Sekip Ujung Palembang', '082178976986'),
(27, '061430700510', 'Ahmad Sanjaya', 'Laki-Laki', 'Universitas PGRI', 'Telkom Indonesia Jalan Jendral Sudirman', '2016-08-02', '2016-09-06', 'Jalan Pipa Reja No 10 Palembang', '089629473468'),
(31, '061430700410', 'Raksi Andika', 'Laki-Laki', 'Politeknik Negeri Sriwijaya', 'jalan jendral sudirman', '1908-06-04', '1917-07-02', 'palembang   ', '08981043702'),
(32, '061430700519', 'Aditya', 'Laki-Laki', 'Universitas Sriwijaya', 'Telkom Jln. Jendral Sudirman', '2016-10-04', '2016-12-07', ' Jalan Pangeran Ayin', '08981043702'),
(33, '061430700590', 'Dicky Pratama', 'Laki-Laki', 'Universitas Sriwijaya', 'Telkom Indonesia Jalan Kapten A.Rivai', '2016-22-11', '2016-29-12', ' Jalan Anggur no 10', '08981043702'),
(34, '061430700599', 'Aldi Fernandes', 'Laki-Laki', 'Universitas PGRI', 'Telkom Jalan Kapten A. Rivai', '2016-10-04', '2016-12-01', ' Jalan Kerinci No 10', '08981043711');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
