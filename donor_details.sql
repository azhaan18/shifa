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
-- Table structure for table `donor_details`
--

CREATE TABLE `donor_details` (
  `id` int(11) NOT NULL,
  `last_time` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `first_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`id`, `last_time`, `frequency`, `first_time`) VALUES
(1, 2, 2, 2),
(2, 2, 2, 2),
(5, 2, 3, 7),
(7, 1, 2, 6),
(8, 1, 3, 9),
(10, 4, 2, 9),
(11, 2, 1, 4),
(12, 2, 4, 11),
(13, 2, 5, 12),
(15, 6, 4, 16),
(16, 1, 5, 13),
(18, 1, 3, 8),
(19, 1, 1, 4),
(20, 1, 2, 6),
(21, 1, 2, 6),
(22, 4, 5, 15),
(23, 1, 2, 6),
(24, 1, 2, 5),
(25, 8, 3, 17),
(26, 2, 2, 8),
(27, 3, 8, 22),
(29, 1, 3, 7),
(30, 5, 2, 10),
(31, 2, 4, 11),
(32, 7, 3, 14),
(33, 1, 3, 9),
(34, 3, 2, 9),
(35, 3, 8, 29),
(36, 1, 1, 5),
(37, 1, 2, 8),
(38, 2, 5, 17),
(39, 2, 2, 9),
(40, 1, 1, 4),
(41, 7, 1, 11),
(42, 2, 5, 17),
(43, 2, 2, 9),
(44, 2, 3, 12),
(45, 1, 2, 7),
(46, 2, 3, 12),
(47, 1, 1, 5),
(48, 1, 3, 11),
(49, 1, 2, 5),
(50, 1, 2, 7),
(51, 1, 1, 1),
(52, 1, 2, 5),
(53, 1, 4, 13),
(54, 2, 3, 11),
(56, 1, 1, 1),
(57, 6, 1, 8),
(58, 2, 2, 6),
(59, 3, 3, 10),
(60, 2, 1, 2),
(61, 4, 1, 4),
(62, 8, 3, 14),
(63, 2, 2, 5),
(64, 2, 2, 5),
(65, 4, 1, 4),
(66, 1, 2, 4),
(67, 2, 1, 2),
(68, 4, 1, 4),
(69, 1, 3, 7),
(70, 24, 1, 24),
(71, 6, 4, 24),
(72, 2, 3, 48),
(77, 2, 1, 2),
(78, 8, 6, 36),
(79, 12, 1, 12),
(81, 5, 1, 5),
(82, 20, 2, 28),
(83, 5, 1, 5),
(84, 9, 1, 9),
(85, 8, 1, 8),
(86, 18, 1, 18),
(87, 6, 2, 40),
(88, 8, 2, 20),
(89, 1, 1, 1),
(90, 14, 2, 21),
(93, 2, 2, 12),
(94, 14, 2, 22),
(95, 5, 1, 5),
(96, 20, 1, 20),
(97, 2, 3, 25),
(98, 2, 2, 15),
(99, 3, 3, 26),
(100, 1, 1, 1),
(101, 5, 2, 11),
(103, 3, 4, 16),
(104, 4, 4, 20),
(105, 4, 2, 16),
(106, 4, 4, 16),
(107, 4, 4, 16),
(108, 2, 1, 4),
(109, 2, 3, 20),
(110, 4, 2, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_details`
--
ALTER TABLE `donor_details`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
