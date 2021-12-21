-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2021 at 10:26 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitcoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Password` varchar(225) NOT NULL,
  PRIMARY KEY (`Password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Password`) VALUES
('edokgwapo');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `bitadd` varchar(225) NOT NULL,
  `progressbit` double DEFAULT NULL,
  `availbit` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `justnow` datetime DEFAULT NULL,
  `pendingbit` double DEFAULT NULL,
  PRIMARY KEY (`bitadd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`bitadd`, `progressbit`, `availbit`, `created`, `justnow`, `pendingbit`) VALUES
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5', 0.0000057, 0.00005, '2021-11-25 18:54:13', '2021-12-03 16:15:17', 0.00005),
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc6', 0.00000513, 1.05, '2021-11-26 13:06:42', '2021-12-03 15:11:10', 0.01),
('edokgwapo', 0.00000003, 0, '2021-11-27 15:24:48', '2021-11-27 15:24:48', 0),
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc7', 0.00000069, 0, '2021-12-02 17:39:51', '2021-12-03 16:15:24', 0),
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc8', 0.00000003, 0, '2021-12-02 17:47:55', '2021-12-02 17:47:55', 0),
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc9', 0.00000003, 0.005, '2021-12-02 17:48:22', '2021-12-02 17:48:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `Bitadd` varchar(225) NOT NULL,
  `Reqpending` double DEFAULT NULL,
  `Adminreq` double DEFAULT NULL,
  PRIMARY KEY (`Bitadd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Bitadd`, `Reqpending`, `Adminreq`) VALUES
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5', 0.00005, 0.88730051),
('edokgwapo', 0.00005, 0),
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc6', 0.00005, 0.8873005),
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc7', 0.00005, 0.00005),
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc8', 0.0005, 0),
('3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc9', 0.005, 0.123);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
