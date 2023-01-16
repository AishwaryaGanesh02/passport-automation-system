-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Date: Oct 10, 2022 
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_passport`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

CREATE TABLE IF NOT EXISTS `appointment_details` (
  `passport office details` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_details`
--

CREATE TABLE IF NOT EXISTS `other_details` (
  `passport type` varchar(15) NOT NULL,
  `educational qualificatoin` varchar(20) NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `relegion` varchar(20) NOT NULL,
  `aadhaar card number` varchar(20) NOT NULL,
  `pan card number` varchar(20) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE IF NOT EXISTS `personal_details` (
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fathers name` int(11) NOT NULL,
  `mothers name` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `martial status` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `place of birth` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE IF NOT EXISTS `references` (
  `reference name 1` varchar(50) NOT NULL,
  `address 1` varchar(100) NOT NULL,
  `phone 1` varchar(15) NOT NULL,
  `reference name 2` varchar(50) NOT NULL,
  `address 2` varchar(100) NOT NULL,
  `phone 2` varchar(15) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pasword` varchar(20) NOT NULL,
  `confpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `id` int NOT NULL PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pasword` varchar(20) NOT NULL,
  `confpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table officer
--

INSERT INTO officer (`id`, `name`, `lname`, `dob`, `email`, `phone`, `pasword`, `confpassword`) VALUES
(10000, 'Tony ', 'Storm', '1980-11-45', 'tonystorm@gmail.com', '9876543210', 'try', 'try'),
(10001,'Emily', 'Rivers', '1985-02-07', 'emilyriver@gmail.com', '9865432107', 'drogo', 'drogo');
-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int NOT NULL,
  `personal details` varchar(100) NOT NULL,
  `other details` varchar(100) NOT NULL,
  `references` varchar(100) NOT NULL,
  `appointment details` varchar(100) NOT NULL,
  `verification` varchar(15) NOT NULL,
  `dispatch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



