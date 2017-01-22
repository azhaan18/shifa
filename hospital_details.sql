-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2017 at 03:02 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital_details`
--

CREATE TABLE `hospital_details` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `hospital_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_details`
--

INSERT INTO `hospital_details` (`id`, `hospital_name`, `hospital_address`) VALUES
(1396, 'Asarfi Hospital Private Limited', 'Near Dhanbad Air Port, Baramuri, Polytechnic Road, Dhanbad, Jharkhand'),
(1396, 'Dr Jyotir Bhushan Healthcare', 'Karmik Nagar, Saraidhela, Dhanbad, Jharkhand'),
(1396, 'Patliputra Nursing Home', 'Jora Phatak Road Near Shakti Mandir, Dhanbad, Jharkhand'),
(4933, 'Sahara Hospital', 'Viraj Khand, Near Haniman Chauraha Gomti Nagar, Lucknow - 226010	'),
(4933, 'Mayo Hospital', 'Vikas Khand- 2, Oppo. Kendriya Vidyalaya Gomti Nagar, Lucknow - 226010	'),
(4933, 'Shekhar Hospital Pvt. Ltd', '''B'' Block, Church Road Indira Nagar, Lucknow - 226016	'),
(707, 'Apollo Indraprastha', 'Sarita Vihar\r\nDelhi Mathura Road,\r\nNew Delhi - 110076 (India)'),
(707, 'Bhagat Hospital', 'Janakpuri, New Delhi'),
(707, 'Holy Angels Hospital', 'Basant Lok, Vasant Vihar, New Delhi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
