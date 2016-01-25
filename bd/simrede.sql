-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2016 at 04:53 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moodle`
--

-- --------------------------------------------------------

--
-- Table structure for table `simrede`
--

CREATE TABLE IF NOT EXISTS `simrede` (
  `idescola` int(11) NOT NULL COMMENT '		',
  `codsiem` decimal(10,0) NOT NULL,
  `nmaluno` varchar(100) NOT NULL,
  `nmescola` varchar(100) NOT NULL,
  `serie` varchar(10) NOT NULL,
  `simulado` varchar(100) NOT NULL,
  `datacad` date NOT NULL,
  `nota1` float DEFAULT NULL,
  `nota2` float DEFAULT NULL,
  `nota3` float DEFAULT NULL,
  `nota4` float DEFAULT NULL,
  `nota5` float DEFAULT NULL,
  `nota6` float DEFAULT NULL,
  `nota7` float DEFAULT NULL,
  `nota8` float DEFAULT NULL,
  `nota9` float DEFAULT NULL,
  `nota10` float DEFAULT NULL,
  `nota11` float DEFAULT NULL,
  `nota12` float DEFAULT NULL,
  `nota13` float DEFAULT NULL,
  `nota14` float DEFAULT NULL,
  `nota15` float DEFAULT NULL,
  `nota16` float DEFAULT NULL,
  `nota17` float DEFAULT NULL,
  `nota18` float DEFAULT NULL,
  `nota19` float DEFAULT NULL,
  `nota20` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simrede`
--
ALTER TABLE `simrede`
  ADD PRIMARY KEY (`idescola`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simrede`
--
ALTER TABLE `simrede`
  MODIFY `idescola` int(11) NOT NULL AUTO_INCREMENT COMMENT '		',AUTO_INCREMENT=237;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
