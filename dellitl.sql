-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 02:49 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dellitl`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `module_Number` varchar(100) NOT NULL,
  `module_section_data` text NOT NULL,
  `module_data` text NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `uid`, `fname`, `lname`, `email`, `module_Number`, `module_section_data`, `module_data`, `status`) VALUES
(1, '1', 'ss', 'ss', 'dd@dd.dd', 'm1', '', '{\n"m1":{"HR":"02","MIN":"49","complete":"88","status":"active","sections":{\n"s1":{"HR":"02","MIN":"11","complete":"11"},\n"s2":{"HR":"02","MIN":"12","complete":"12"},\n"s3":{"HR":"02","MIN":"13","complete":"13"},\n"s4":{"HR":"02","MIN":"14","complete":"14"},\n"s5":{"HR":"02","MIN":"15","complete":"15"},\n"s6":{"HR":"02","MIN":"16","complete":"16"},\n"s7":{"HR":"02","MIN":"17","complete":"17"},\n"s8":{"HR":"02","MIN":"18","complete":"18"},\n"s9":{"HR":"02","MIN":"19","complete":"19"}\n\n}\n\n},\n"m2":{"HR":"03","MIN":"59","complete":"100","status":"complete","sections":{\n"s1":{"HR":"02","MIN":"21","complete":"21"},\n"s2":{"HR":"02","MIN":"22","complete":"22"},\n"s3":{"HR":"02","MIN":"23","complete":"23"},\n"s4":{"HR":"02","MIN":"24","complete":"24"},\n"s5":{"HR":"02","MIN":"25","complete":"25"},\n"s6":{"HR":"02","MIN":"26","complete":"26"},\n"s7":{"HR":"02","MIN":"27","complete":"27"},	\n"s8":{"HR":"02","MIN":"28","complete":"28"},\n"s9":{"HR":"02","MIN":"29","complete":"29"}\n\n}},\n"m3":{"HR":"10","MIN":"49","complete":"100","status":"complete","sections":{\n"s1":{"HR":"02","MIN":"31","complete":"31"},\n"s2":{"HR":"02","MIN":"32","complete":"32"},\n"s3":{"HR":"02","MIN":"33","complete":"33"},\n"s4":{"HR":"02","MIN":"34","complete":"34"},\n"s5":{"HR":"02","MIN":"35","complete":"35"},\n"s6":{"HR":"02","MIN":"36","complete":"36"},\n"s7":{"HR":"02","MIN":"37","complete":"37"},\n"s8":{"HR":"02","MIN":"38","complete":"38"},\n"s9":{"HR":"02","MIN":"39","complete":"39"}\n\n}}\n\n}', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(555) NOT NULL,
  `Lname` varchar(555) NOT NULL,
  `Email` varchar(555) NOT NULL,
  `Pass` varchar(555) NOT NULL,
  `Org` varchar(555) NOT NULL,
  `Age` varchar(555) NOT NULL,
  `Gender` varchar(555) NOT NULL,
  `City` varchar(555) NOT NULL,
  `State` varchar(555) NOT NULL,
  `Country` varchar(555) NOT NULL,
  `PPRole` varchar(555) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fname`, `Lname`, `Email`, `Pass`, `Org`, `Age`, `Gender`, `City`, `State`, `Country`, `PPRole`) VALUES
(1, 'Deepak', 'Sharma', 'dd@dd.dd', '12345678', 'Lumina', '28', 'Male', 'Noida', 'UP', 'India', 'PPRole'),
(2, 'Deepak', 'Sharma', 'ddd@sssss.s1', '12345678', 'Lumina', '22', 'Male', 'Noida', 'UP', 'India', 'PPRole'),
(3, 'Deepak', 'sharma', 'dd@dd.dda', '12345678', 'Lumina', '11', 'Male', 'Noida', 'UP', 'India', 'PPRole'),
(4, 's', 's', 'ddd@sssss.ss', '12345678', 'ss', '55', 'Male', '5', '5', '5', 'PPRole'),
(5, 's', 's', 'ddd@sssss.sss', '12345678', 's', '55', 'Male', '5', '5', '5', 'PPRole');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
