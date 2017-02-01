-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 11:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userName` varchar(30) NOT NULL,
  `Pass` varchar(10) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userName`, `Pass`) VALUES
('Amey', '1234'),
('Yash', 'ambre1234');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `veh_name` varchar(20) NOT NULL,
  `veh_no` bigint(8) NOT NULL,
  `issue` varchar(30) NOT NULL,
  PRIMARY KEY (`veh_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email_id`, `contact`, `veh_name`, `veh_no`, `issue`) VALUES
('Yash', 'yash.ambre@gmail.com', 9876543212, 'Mercedes Benz', 0, 'Acceleration Issue'),
('Neil', 'neilchakri@yahoo.com', 1312524353, 'Jaquar', 123213, 'Battery'),
('Ron', 'ronfernandes@gmail.com', 2132453524, 'Maruti 800', 133412, 'Brake, Clutch, Acceleration'),
('Brandon', 'brandondcunha@gmail.com', 1234567891, 'BMW', 696969, 'Clutch Issue');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
