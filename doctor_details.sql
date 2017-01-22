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
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `city` int(11) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`city`, `specialization`, `name`, `address`, `fees`) VALUES
(707, 'orthopedic', 'Dr RK Kapoor', 'No.215 , Block C 4C, Pocket 14, Janakpuri, New Delhi, Delhi 110058', 800),
(707, 'dentist', 'Clove Dental Clinic', 'Moti Nagar New Delhi', 600),
(707, 'gynecologist', 'Dr. Jyotsna Gupta', 'WZ91, First Floor, Hari Singh Park, New Multan Nagar, Paschim Vihar, Delhi, 110056', 900),
(707, 'ent ', 'Dr Sumit Mrig', 'Max Smart Speciality Hospital- Modi health Care Unit, Road, Delhi, Mandir Marg, Press Enclave, Saket, New Delhi, Delhi 110017', 400),
(1396, 'dentist', 'Chandra Dental Care', 'handra Vihar Colony, Dhanbad, Jharkhand 826001', 500),
(1396, 'orthopedic', 'Akriti Orthopedic Clinic', 'Swami Sahjanand nagar,, Luby Circular Rd, Dhanbad, Jharkhand', 300),
(1396, 'gynecologist', 'Sangeeta Karan Clinic', 'Hirapur, Pandey Muhalla, Dhanbad, Jharkhand 826001', 600),
(1396, 'ent', 'J P Mukherjee', 'Lohar Kulli, Dhanbad, Jharkhand 828127', 500),
(4933, 'ent', 'Dr Karun Khare ENT Clinic', 'Shop No 12 Adarshila Complex, Opposite. Mishra Petrol Pump, Kursi Rd, Aliganj, Lucknow, Uttar Pradesh', 800),
(4933, 'orthopedic', 'Dr Harish Makker''s ', 'Rajendra Nagar, Lucknow, Uttar Pradesh 226004', 600),
(4933, 'gynecologist', 'Dr Neelam Vinay', ' Kathauta Chauraha Rd, Vijayant Khand, Gomti Nagar, Lucknow, Uttar Pradesh 226010', 1100),
(4933, 'dentist', 'Vijay Dental Clinic', ' Sector K, Ashiyana, Lucknow, Uttar Pradesh 226012', 650);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
