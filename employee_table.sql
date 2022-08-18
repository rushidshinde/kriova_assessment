-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 09:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kriova_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_dob` date DEFAULT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_phone` bigint(20) DEFAULT NULL,
  `employee_street` varchar(255) DEFAULT NULL,
  `employee_city` varchar(255) DEFAULT NULL,
  `employee_state` varchar(255) DEFAULT NULL,
  `employee_country` varchar(255) DEFAULT NULL,
  `employee_pincode` int(11) DEFAULT NULL,
  `employee_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_id`, `employee_name`, `employee_dob`, `employee_email`, `employee_phone`, `employee_street`, `employee_city`, `employee_state`, `employee_country`, `employee_pincode`, `employee_password`) VALUES
(1, 'Rushikesh Shinde', '1999-03-25', 'rushidshinde@gmail.com', 7038456125, 's/o Dipak Shinde at. Gitta, Gitta road', 'Ambajogai', 'Maharashtra', 'India', 431517, 'rushi'),
(2, 'mayur kakade', '1998-12-13', 'mayur@gmail.com', 6740152898, '455, 2, 18, Sadar Bazar, Oppo. RTO, Near KBP College of Engg', 'satara', 'maharashtra', 'india', 415001, 'mayur'),
(3, 'pawan bangar', '1999-08-16', 'pawanbangar@gmail.com', 9762907487, 'Pimpalwadi Road, Lane of Vijaya Bank, Near Dwarkamai & Sai Bhavan, Tal. Rahata', 'Shirdi', 'Maharashtra', 'india', 423109, 'pawan'),
(4, 'yogesh kadam', '1993-04-08', 'yoogikadam@gmail.com', 7122230111, 'Khamla Rd, Deo Nagar', 'Nagpur', 'Maharashtra', 'india', 440015, 'yoogi'),
(5, 'nilesh gunjkar', '1986-12-18', 'nileshgunjkar@gmail.com', 2026360437, '5-A, General Bhagat Marg, Camp', 'pune', 'maharashtra', 'india', 411001, 'nilesh'),
(6, 'shashank waghamare', '1986-06-20', 'shashankwaghmare@gmail.com', 9960601188, 'Sitabuldi Main Road Corner of Hanuman Gulli , Nagpur 12', 'Nagpur', 'maharashtra', 'india', 440012, 'shashank'),
(7, 'prasad pathak', '1999-11-16', 'prasadpathak@gmail.com', 9404984996, 'HH Prince Aga Khan Rd, Sangamvadi', 'pune', 'maharashtra', 'india', 411001, 'prasad'),
(8, 'ajay munde', '1999-03-07', 'ajaymunde@gmail.com', 6511562856, '339/b,rasta Peth, 339/b,rasta Peth, Behind Rupee Bank', 'pune', 'maharashtra', 'india', 411011, 'ajay'),
(9, 'pratik tambe', '1999-06-17', 'pratiktambe@gmail.com', 6127977074, 'At Post Donje,tal-have, Sinhagad Road, Opp Lazen Company Close To Telephone Exchange', 'pune', 'maharashtra', 'india', 411042, 'pratik'),
(10, 'Shubhangi Jibhakate', '1999-05-21', 'shubhangijibhakate@gmail.com', 8910007034, '1126/ 1, Model Colony', 'pune', 'maharashtra', 'india', 411016, 'shubhangi'),
(11, 'Tejasvini Supe', '1998-06-30', 'tejasvinisupe@gmail.com', 9638527410, 'B/4 Vimal Vihar, Flat Bo 21, 5th Floor', 'pune', 'Maharashtra', 'india', 411037, 'tejasvini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `employee_email` (`employee_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
