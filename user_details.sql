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
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `blood_group`, `gender`, `dob`, `phone_no`, `email`, `state`, `city`, `permanent_address`, `password`, `availability`) VALUES
(1, 'Rishabh Thukral', 'O+', 'Male', '1996-11-07', 7546826340, 'thukral276@gmail.com', '16', '1396', 'D 225 Amber Hostel', '123456', 1),
(2, 'Praful Mathur', 'A+', 'Male', '1996-11-07', 7546826340, 'mathur276@gmail.com', '16', '1396', 'D 225 Amber Hostel', '123456', 1),
(3, 'Pulak Gupta', 'O+', 'Male', '1995-10-12', 9336676858, 'callmethedarklord@gmail.com', '38', '4933', 'Vikas Khand, Gomti Nagar', 'leonardo', 0),
(4, 'Pulak Gupta', 'A+', 'Male', '1995-10-12', 9336676858, 'callmethedarklord_@gmail.com', '38', '4933', 'gomti nagar', '123456', 0),
(5, 'Peter parker', 'A+', 'Male', '1998-07-01', 9876541212, 'pep@hotmail.co.in', '10', '707', 'H.no.112,Karol bagh,delhi', '123456', 1),
(6, 'Robert Downey', 'B+', 'Male', '1980-02-11', 9878857744, 'robdown@orkut.com', '10', '707', 'H.no.152,Rajoktri,delhi', 'azhaan', 0),
(7, 'Joseph Bose', 'O-', 'Male', '1970-01-01', 7878657744, 'jbose@gmail.com', '38', '4933', 'H.no.100, Gomtinagar, delhiUttar Pradesh', 'newyork', 1),
(8, 'Raju Kumar', 'O+', 'Male', '1986-11-21', 7561595234, 'rajukumar@gmail.com', '16', '1396', 'H.no.110, Hirapur, Dhanbad', 'rajukumar', 1),
(9, 'Hemlata Kumari', 'A-', 'Female', '1996-10-07', 7552451254, 'hemkumari@gmail.com', '10', '707', 'H.no.114, Pitam pura, New Delhi', 'westworld', 0),
(10, 'Premlata', 'B-', 'Female', '1990-11-21', 9524512554, 'premlata@hotmail.com', '16', '1396', 'H.no.12, hazaribagh, Dhanbad', '1236987', 1),
(11, 'Pankaj Seth', 'A-', 'Male', '1976-11-27', 9245125545, 'seth.pankaj@ymail.com', '10', '707', 'Ward.no.15, hazaribagh, Delhi', '9874123', 1),
(12, 'Pawan Khandelwal', 'A-', 'Male', '1981-04-26', 8751255459, 'pawan_k@gmail.com', '16', '1396', 'H. No. 11 , Hirapur', '789654', 1),
(13, 'Rajkumar Jadav', 'B+', 'Male', '1992-06-30', 9451548135, 'jdv.raj@ymail.com', '38', '4933', 'H.no.115, near Lucknow zoo, Lucknow', '789654', 1),
(14, 'Pranav chitrio', 'O+', 'Male', '1986-05-31', 7585145216, 'chitrio@hotmail.com', '10', '707', 'Ward.no.115, govindpuri, New Delhi', '741258', 0),
(15, 'Samuel Jackson', 'A-', 'Male', '1974-03-21', 8746115155, 'jack.sam@ymail.com', '16', '1396', 'H.no.145, near shaktimandir, dhanbad', 'q1w2e3', 1),
(16, 'Karan Johar', 'B+', 'Male', '1981-05-11', 7845121524, 'kj@gmail.com', '38', '4933', 'H.no.145, near ambedkar park, lucknow', 'p0o9i8', 1),
(17, 'Shah rukh khan', 'O+', 'Male', '1965-11-02', 7845757484, 'srk@gmail.com', '10', '707', 'H.no.1405, pitampura, new delhi', '787878', 1),
(18, 'Morgan Freeman', 'A+', 'Male', '1960-11-22', 7474745555, 'morganf@gmail.com', '16', '1396', 'H.no.105, hirapur, dhanbad', '454545', 1),
(19, 'Anthony Hopkins', 'O+', 'Male', '1963-11-22', 7585856464, 'anthony@gmail.com', '38', '4933', 'H.no.405, near rumi darwaza, lucknow', '414141', 1),
(20, 'Evan rachael', 'A-', 'Female', '1983-10-22', 8485764215, 'evan.r@cse.ism.ac.in', '10', '707', 'H.no.405, LRD colony, new delhi', '454845', 1),
(21, 'Ed Harris', 'B+', 'Male', '1993-11-02', 7457592121, 'ed@cse.ism.ac.in', '38', '4933', 'H.no.415, near chota imambara, lucknow', 'uio098', 1),
(22, 'Thandie Newton', 'O-', 'Female', '1998-12-22', 7412589634, 'than.newton@gmail.com', '16', '1396', 'H.no.215, near birsa munda park, dhanbad', '789654', 1),
(23, 'James Marsden', 'A+', 'Male', '1988-12-22', 7412579634, 'marsden.james@gmail.com', '16', '1396', 'H.no.225, near birsa munda park, dhanbad', 't6y7u8', 1),
(24, 'Jefferey Wright', 'A-', 'Male', '1978-12-02', 9541236578, 'wright.jeff@gmail.com', '10', '707', 'H.no.227, near qutub minar, new delhi', 'o9i8u7', 1),
(25, 'Angela Sarafyan', 'B+', 'Female', '1990-02-02', 9123657899, 'angela.sarafyan@gmail.com', '16', '1396', 'H.no.327, near hirapur, dhanbad', 'u7y6t5', 1),
(26, 'Shannon woodword', 'B-', 'Female', '1990-04-02', 7485623315, 'woodward.shannon@gmail.com', '38', '4933', 'H.no.327, near The residency, lucknow', 'asdfgh', 1),
(27, 'Jimmi Simpson', 'A+', 'Male', '1993-04-22', 9623315875, 'jimmi@ymail.com', '16', '1396', 'H.no.527, near randhir verma chowk, dhanbad', 'zxcvbn', 1),
(28, 'Sidse knuden', 'O-', 'Female', '1995-05-20', 7878787887, 'sidse@hotmail.com', '10', '707', 'H.no.627, akshardham, new delhi', 'a1s2d3', 0),
(29, 'Ben barnes', 'O+', 'Male', '1975-07-27', 7454540260, 'ben@orkut.com', '38', '4933', 'H.no.627, near chattar manzil, lucknow', 'q1w2e3', 1),
(30, 'Tessa thompson', 'A-', 'Female', '1985-12-17', 7456843184, 'thompsson.tessa@gmail.com', '16', '1396', 'H.no.234, LRD colony, dhanbad', 'e3r4t5', 1),
(31, 'Clifton collins', 'A+', 'Male', '1975-02-03', 8456515555, 'collins.tessa@gmail.com', '10', '707', 'H.no.234, near rashtrapati bhawan, new delhi', 'u7y6i8', 1),
(32, 'Luke hemsworth', 'O+', 'Male', '1970-01-01', 9874563212, 'hemsworth@ymail.com', '16', '1396', 'H.no.237, near randhir verma chowk, dhanbad', 'lkjhgf', 1),
(33, 'Talulah Riley', 'O-', 'Female', '1985-12-13', 9854859923, 'riley@gmail.com', '10', '707', 'H.no.237, near jama masjid, new delhi', 'zsxdcf', 1),
(34, 'Leonardo Lam', 'A+', 'Male', '1975-02-01', 9343513215, 'lam@hotmail.com', '16', '1396', 'H.no.236, near radhir verma chowk, dhanbad', 'mlnkbj', 1),
(35, 'Nawazuddin Siddiqui', 'A-', 'Male', '1986-02-12', 8513215436, 'siddiqui.nawazuddin@hotmail.com', '38', '4933', 'H.no.236, near bara imambara, lucknow', 'cdrvft', 1),
(36, 'Arbaaz Khan', 'B+', 'Male', '1976-02-22', 8574156545, 'khan.arbaaz@hotmail.com', '10', '707', 'H.no.12, near chandani chowk, new delhi', 'swdefr', 1),
(37, 'Amy Jackson', 'B-', 'Female', '1986-12-22', 9545368465, 'jackson.amy@hotmail.com', '16', '1396', 'H.no.121, LRD colony, dhanbad', 'drffrd', 1),
(38, 'Jas arora', 'O+', 'Male', '1989-02-01', 7859665966, 'arora.jas@hotmail.com', '38', '4933', 'H.no.11, gomtinagar , lucknow', 't6y7u8', 1),
(39, 'Asif basra', 'O-', 'Male', '1989-02-11', 7845548555, 'asif.basra@ymail.com', '10', '707', 'H.no.12, near national museum , new delhi', 'r4t5y6', 1),
(40, 'Alam Khan', 'O-', 'Male', '1979-12-11', 9879874561, 'khan.alam@gmail.com', '16', '1396', 'H.no.12, hirapur , new delhi', 'q2w3e4', 1),
(41, 'Mouni Roy', 'O+', 'Male', '1999-10-11', 9879745788, 'roy.mouni@hotmail.com', '38', '4933', 'ward.no.12, gmtinagar , lucknow', 'q1w2e3', 1),
(42, 'Akshay Kumar', 'B-', 'Male', '1989-10-11', 9876848513, 'kumar.akshay@orkut.com', '10', '707', 'H.no.12, near raj ghat , new delhi', 'frgthy', 1),
(43, 'Paresh Rawal', 'B+', 'Male', '1967-04-11', 9878746515, 'paresh@hotmail.com', '16', '1396', 'H.no.112, near hiraput , dhanbad', '741asd', 1),
(44, 'Tabu', 'A-', 'Female', '1988-06-12', 8748416358, 'tabu@gmail.com', '38', '4933', 'H.no.542, near gomtinagar , lucknow', 'a1s2d3', 1),
(45, 'Gulshan Grover', 'A+', 'Male', '1966-06-12', 8365132135, 'grover@hotmail.com', '10', '707', 'H.no.546, near charbagh , new delhi', '789654', 1),
(46, 'Mukesh Khanna', 'A+', 'Male', '1963-06-22', 9415154156, 'khanna.mukesh@hotmail.com', '16', '1396', 'H.no.946, near charbagh , dhanbad', 'q7w8e9', 1),
(47, 'Namrata Shirodkar', 'A-', 'Female', '1975-02-22', 9568478165, 'shirodkar@cse.ism.ac.in', '38', '4933', 'H.no.146, near charbagh , lucknow', 'a4s5d6', 1),
(48, 'Karishma Shah', 'B+', 'Female', '1978-02-22', 9566842546, 'shah.karishma@cse.ism.ac.in', '10', '707', 'H.no.147, near jama masjid , new delhi', 'a7s8d9', 1),
(49, 'Sulabh arya', 'B-', 'Female', '1958-02-22', 9587485155, 'arya@gmail.com', '16', '1396', 'H.no.345, hirapur , dhanbad', 'z7x8c9', 1),
(50, 'Aamir Khan', 'O+', 'Male', '1963-04-20', 7874851558, 'khan.aamir@gmail.com', '38', '4933', 'ward.no.45, near regional science city , lucknow', '718293', 1),
(51, 'Sanya Malhotra', 'O-', 'Female', '1973-04-20', 7874856985, 'malhotra.sanya@gmail.com', '10', '707', 'Flat.no.65, near parliament house, new delhi', 'z1x2c3', 1),
(52, ' Zaira Wasim', 'A+', 'Female', '1993-04-20', 8569853645, 'wasim.zaira@ymail.com', '10', '707', 'Flat.no.265, near raj ghat, new delhi', 'asdfgh', 1),
(53, 'Aprashakti Khurana', 'A-', 'Male', '1996-04-20', 8569254536, 'khurana7777@gmail.com', '10', '707', 'Flat.no.285, near ghandhi smriti, new delhi', 'a7s8d9', 1),
(54, 'Cillian Murphy', 'B+', 'Male', '1983-04-22', 8569684561, 'murphy.c@gmail.com', '10', '707', 'Flat.no.265, near rashtrapati bhawan, new delhi', 'z4x5c6', 1),
(55, 'Helen Mccroy', 'B-', 'Female', '1987-04-22', 8569685845, 'mccroy@gmail.com', '10', '707', 'Flat.no.263, near chandni chowk, new delhi', 'q4s5c6', 1),
(56, 'Annabelle Walis', 'O+', 'Female', '1995-04-22', 8563584565, 'walis.aanabelle@gmail.com', '10', '707', 'Flat.no.113, near purana quila, new delhi', 'a0s9d8', 1),
(57, 'Paul Anderson', 'O-', 'Male', '1972-12-02', 8563584874, 'anderson.paul@gmail.com', '10', '707', 'Flat.no.110, near jama masjid, new delhi', 'l2k3j4', 1),
(58, 'Joe Cole', 'A+', 'Female', '1982-11-02', 8566878451, 'cole.joe@gmail.com', '16', '1396', 'H.no.112, hirapur, dhanbad', 'd4f5g6', 1),
(59, 'Sophie Rundle', 'A-', 'Female', '1992-11-22', 9515462131, 'rundle.sophie@ymail.com', '16', '1396', 'H.no.123, LRD colony, dhanbad', 'z1x5c9', 1),
(60, 'Sam Neil', 'B+', 'Male', '1982-10-06', 9456165348, 'neil.sam@hotmail.com', '16', '1396', 'H.no.128, shakti mandir colony, dhanbad', 'u1y5t9', 1),
(61, 'Charlotte Riley', 'B-', 'Female', '1989-10-26', 9458451321, 'riley.charlotte@ymail.com', '16', '1396', 'ward.no.28, near birsa munda park , dhanbad', 'z0x0c0', 1),
(62, 'Natasha Keif', 'O+', 'Female', '1979-11-26', 9874658416, 'keif@orkut.com', '16', '1396', 'Flat.no.128, near randheer verma chowk , dhanbad', 'zaq147', 1),
(63, 'Noah Taylor ', 'O-', 'Male', '1999-12-06', 9874687465, 'taylor.noah@orkut.com', '10', '707', 'Flat.no.168, near hirapur , dhanbad', 'x7c8v9', 1),
(64, 'Charlie Creed', 'A+', 'Male', '1979-12-26', 9874685641, 'creed.charlie@orkut.com', '38', '4933', 'Flat.no.160, near gomtinagar , lucknow', '789654', 1),
(65, 'David dawson', 'A-', 'Male', '1989-10-20', 8874685641, 'david@gmail.com', '38', '4933', 'Flat.no.261, near chota imambada , lucknow', 'h1j2k3', 1),
(66, 'Finn Cole', 'B+', 'Male', '1999-11-20', 8878574155, 'cole.finn@gmail.com', '38', '4933', 'Flat.no.269, near satkhanda , lucknow', 'z1a4q7', 1),
(67, 'Harry Kirton', 'B-', 'Male', '1989-01-01', 8978574155, 'kirton@ymail.com', '38', '4933', 'Flat.no.669, near chattar manzil , lucknow', 'h4j5k6', 1),
(68, 'Daborah Woll', 'O+', 'Female', '1984-11-06', 8975741554, 'woll.daborah@hotmail.com', '38', '4933', 'Flat.no.69, near chota imambada , lucknow', 'o7k4m1', 1),
(69, 'Rosario Dawson', 'O-', 'Female', '1994-10-06', 8975415548, 'dawson.rosario@gmail.com', '38', '4933', 'Flat.no.29, near bada imambada , lucknow', 'p7o8i9', 1),
(70, 'Vibhav Thakur', 'A+', 'Male', '1964-02-18', 9586321478, 'thakur@gmail.com', '38', '4933', '3/14, Raja Bazar, Chowk', 'asdzxcbgt', 1),
(71, 'Ansh Mahajan', 'A-', 'Others', '1995-07-05', 9453011589, 'mahajan.clown@yahoo.co.in', '10', '707', '4/42 Chandni Chowk', 'poilkj987', 1),
(72, 'Shreyansh Divya', 'B+', 'Male', '1990-02-22', 9336589575, 'divya@samsung.com', '38', '4933', '4/62, Viram khand, Gomti Nagar', 'vfghnb123', 1),
(73, 'Raj Jha', 'B-', 'Male', '1993-10-19', 9856321472, 'rajwarrior2@gmail.com', '16', '1396', 'D-012, Sapphire Hostel, ISM Dhanbad', '12qw34er', 1),
(74, 'Harsh Misra', 'O+', 'Male', '1974-03-12', 9865472130, 'misra.harsh@gmail.com', '38', '4933', 'Omega Apartments, Alambagh-226010', 'iamherothe', 1),
(75, 'Farha Reen', 'A-', 'Female', '1980-07-16', 9865472124, 'reeny@gmail.com', '10', '707', 'Shaheen Bagh, near Jamia Milia University', 'hoverfield', 0),
(76, 'Shahzeb Ahmad', 'O-', 'Male', '1988-08-18', 9336589658, 'ahmad12@gmail.com', '16', '1396', 'D-210 Amber Hostel', '147qwedc', 0),
(77, 'Harshita Thakur', 'A+', 'Female', '1993-09-20', 9587412366, 'yippee@gmail.com', '10', '707', 'Rajiv Chowk, Basant Vihar', 'fdsarew147', 1),
(78, 'Anamika Singh', 'A-', 'Female', '1995-03-01', 9857463241, 'anamy_thak@gmail.com', '38', '4933', 'Nkakhas, near Chidiya Bazar', 'parrotlovin', 1),
(79, 'Mohammad Islam', 'B-', 'Male', '1954-02-07', 9453011228, 'islamsahab@gmail.com', '16', '1396', 'Purana Bazar, near Station', '987plmokn', 1),
(80, 'Kartikeya Pandey', 'O+', 'Male', '1960-12-21', 8974562589, 'pandeyjikar@gmail.com', '38', '4933', 'Near Gol Chauraha, Alambagh, Lucknow', 'bhaisahabgazab', 1),
(81, 'Ram Madhvan', 'O-', 'Male', '1968-06-11', 7548596352, 'ramuji@gmail.com', '38', '4933', 'Flat No.167, Sulabh Awas, Gomti Nagar Extension', 'poiuytredc', 1),
(82, 'Kirti Arora', 'B+', 'Female', '1988-07-07', 7546896352, 'papaskirti@gmail.com', '10', '707', 'H.No. 24 New Complex, Purana Qila', 'qazwsxedcrfv', 1),
(83, 'Kirtikar Srivastava', 'A+', 'Male', '1993-06-09', 7546897854, 'srivaskirti@gmail.com', '16', '1396', 'H.No. 58 Hirapur Society', 'qwerfghj', 1),
(84, 'Aryan Singh', 'A-', 'Male', '1990-01-31', 7854698523, 'singhsahab@gmail.com', '38', '4933', 'Shiva Apartments, Ground Floor, Charbagh', 'peoplelove', 1),
(85, 'Aman Arora', 'B-', 'Male', '1995-03-20', 9005019824, 'aroraachar@gmail.com', '10', '707', 'Hauz Khas, New Delhi', 'polypoly', 1),
(86, 'Kailask Kher', 'O+', 'Male', '1988-05-09', 7857474586, 'singerkher@gmail.com', '16', '1396', 'House No. 20 Steel Gate, Dhanbad', 'mineminey', 1),
(87, 'Palash Khare', 'B+', 'Male', '1980-06-10', 9865745236, 'palashcool@gmail.com', '38', '4933', 'House No. 51 S.N. Road, Highcourt Park', 'vakeelhoon', 1),
(88, 'Mohd Aquib', 'A-', 'Male', '1984-12-20', 9867745874, 'chikla@gmail.com', '16', '1396', 'A-201 Jasper, IIT(ISM)', 'iitian hain', 1),
(89, 'Pulkit Mittal', 'A+', 'Male', '1991-04-22', 7458214785, 'mithaiwala@gmail.com', '16', '1396', 'Bankmore, Bada Building', 'iamlovinit', 1),
(90, 'Shabnam Nagma', 'O-', 'Female', '1991-10-29', 9335247055, 'nagma@gmail.com', '10', '707', 'H.NO. 74 Saket Apartments, Okhla', 'wanderboy', 1),
(91, 'Kuldeep Sharma', 'A+', 'Male', '1997-06-03', 7845214599, 'kudee@gmail.com', '38', '4933', '32, Hardoi Road, Chowk, Lucknow', 'sadkadin', 1),
(92, 'Arijit Kumar', 'B+', 'Male', '1991-09-18', 7845857499, 'ajiteyy@gmail.com', '16', '1396', 'Flat No. 25 Coal Awas, Dhanbad', 'minergold', 0),
(93, 'Jitesh Karamchandani', 'O-', 'Male', '1991-08-12', 9836954782, 'aristaking@gmail.com', '10', '707', 'Flat No. 111 RiverView Apartments, Okhla', 'azzyarista', 1),
(94, 'Ashay Sinha', 'A-', 'Male', '1994-06-29', 9838754236, 'ashian@gmail.com', '38', '4933', '22, G.T. Road, Hazrat Ganj', 'haggemaru', 1),
(95, 'Pratishi Kumari', 'O+', 'Female', '1990-02-22', 7548695487, 'kumarilady@gmail.com', '16', '1396', 'A Block, Ruby Hostel ISM', 'ladkiyonmein', 1),
(96, 'Priya Singh', 'B-', 'Female', '1996-08-09', 9004895123, 'loveu@gmail.com', '38', '4933', '2/56, Vikram Khand, Gomti Nagar', 'lkodeljha', 1),
(97, 'Aditya Jha', 'O+', 'Male', '1996-08-07', 9004874890, 'bond@gmail.com', '16', '1396', 'Hirapur Dhanbad', '007findme', 1),
(98, 'Arvind Kejriwal', 'A+', 'Male', '1967-04-20', 9004870022, 'kejubeta@gmail.com', '10', '707', 'House No. 25, CM Awas Society, New Delhi', 'cmhoonbey', 1),
(99, 'Rabby Shergil', 'O+', 'Male', '1974-02-05', 9004878500, 'sibjha@gmail.com', '38', '4933', '85, Chowk, Ram Asrey Building', 'luckyyoubaby', 1),
(100, 'Manu Agarwal', 'B+', 'Female', '1990-03-19', 9836521047, 'coderhoon@gmail.com', '16', '1396', 'Opal Hostel ISM dhanbad', 'ladkipower', 1),
(101, 'Vishvajeet Verma', 'O+', 'Male', '1992-04-21', 9836527800, 'crhoon@gmail.com', '10', '707', 'H. No. 5, Chandni Chowk, New Delhi', 'heyyoucommon', 1),
(102, 'Jagmohan Dalmiya', 'A-', 'Male', '1967-04-27', 9836527722, 'corrupt@gmail.com', '10', '707', 'H.no.45, Akbar Road, New Delhi', 'polytohaatihai', 1),
(103, 'Sneha Singh', 'A+', 'Female', '1996-02-21', 9889376378, 'sneha@gmail.com', '16', '1396', 'Rosaline hostel', '789456', 1),
(104, 'Prakarsh', 'A-', 'Male', '1998-02-22', 9852316880, 'prakarsh@gmail.com', '16', '1396', 'd-243 dhanbad', '123456', 1),
(105, 'Azhaan', 'A+', 'Male', '1996-08-18', 7546826340, 'azhaan@gmail.com', '16', '1396', 'D-225 Amber hostel', '456789', 1),
(106, 'Junaid Alam', 'A+', 'Male', '2017-01-02', 7984565123, 'zunaid024@gmail.com', '16', '1396', 'L-186 Awas Vikas\r\nKeshavpuram Kalyanpur', '456789', 1),
(107, 'Junaid Alam', 'A+', 'Male', '2017-01-16', 7984565123, 'zunaid0284@gmail.com', '16', '1396', 'L-186 Awas Vikas\r\nKeshavpuram Kalyanpur', '456789', 1),
(108, 'Junaid Alam', 'A+', 'Male', '1996-11-26', 7984565123, 'zunaid0243@gmail.com', '16', '1396', 'L-186 Awas Vikas\r\nKeshavpuram Kalyanpur', '123456', 1),
(109, 'Adil Jamal', 'A-', 'Male', '1995-07-25', 9005018963, 'adil@gmail.com', '38', '4933', '3/220, Vivek Khand, Gomti Nagar', '123zxc456asd', 1),
(110, 'Harshita Mritunjay', 'O+', 'Female', '1998-03-18', 9546283051, 'mritunjayharshita@gmail.com', '16', '1396', 'Rosaline Hostel', '789456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
