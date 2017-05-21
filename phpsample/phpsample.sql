-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 06:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpsample`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) NOT NULL,
  `fname` char(250) DEFAULT NULL,
  `lname` char(250) DEFAULT NULL,
  `contact` char(250) DEFAULT NULL,
  `email` char(250) DEFAULT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `contact`, `email`, `status`) VALUES
(1, 'Chito', 'Miranda', '0934536546', '2312-02-01', 'Active on Files`'),
(2, 'Michael', 'Ricket', '6747375636', 'mrickets@yahoo.com', ''),
(4, 'Mang', 'Kanor', '452380592835', 'mangkanor@xxx.com', ''),
(9, 'jade', 'omandac', '69street', '2017-05-16', 'married'),
(10, 'OlymSEX', 'khuzanRAPEDbyJADE :(', 'bangkal', '2017-05-24', 'Terminated Cases'),
(11, 'wdno', 'dojodj', 'jojo', '0043-12-01', 'Terminated Cases'),
(12, 'tang ina', 'bobo', 'tae', '0211-12-13', 'Active on Files`'),
(13, 'dsad', 'dsads', 'asdsad', '13232-12-12', 'Active on Files`'),
(14, 'dsadsa', 'dasd', 'fdsf', '1232-09-03', 'fds'),
(15, 'dsadsa', 'dsad', 'sa', '0043-03-22', 'sdsad'),
(16, 'dsadsa', 'sadsad', 'sadsafewfe', '33242-12-31', ''),
(17, 'HDIWH', 'ODEJFO', 'SDEOJ', '1212-12-12', 'Active on Files`'),
(18, 'josepjaod', 'djasojdo', 'djsaodj', '0034-12-04', 'q'),
(19, 'inei', 'iefi', 'einfie', '0324-02-01', '2423newd'),
(20, 'joseph', 'jfojfoaj', 'efef', '34211-03-04', 'dwefpekgr'),
(21, 'joseph', 'jfojfoaj', 'efef', '34211-03-04', 'dwefpekgr'),
(22, 'joseph', 'taladtad', 'cateya_ecoland davao ciyr', '0141-03-22', 'sakfn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
