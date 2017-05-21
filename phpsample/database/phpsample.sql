-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 03:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpsample`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fname` char(250) DEFAULT NULL,
  `lname` char(250) DEFAULT NULL,
  `contact` char(250) DEFAULT NULL,
  `email` char(250) DEFAULT NULL,
  `status` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `contact`, `email`, `status`) VALUES
(1, 'Chito', 'Miranda', '0934536546', 'chitomiranda@xxx.com', 'single'),
(2, 'Michael', 'Ricket', '6747375636', 'mrickets@yahoo.com', ''),
(4, 'Mang', 'Kanor', '452380592835', 'mangkanor@xxx.com', ''),
(9, 'jade', 'omandac', '69street', '2017-05-16', 'married'),
(10, 'OlymSEX', 'khuzanRAPEDbyJADE :(', 'bangkal', '2017-05-24', 'WET');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
