-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 04:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicio`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(30) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `appointment_date`, `appointment_time`, `doctor_id`, `user_id`) VALUES
(1, '2019-04-18', '13:00:00', 7, 9),
(2, '2019-04-30', '01:59:00', 7, 9),
(3, '2019-04-30', '03:03:00', 0, 9),
(4, '2019-04-02', '06:06:00', 2, 9),
(5, '2019-04-03', '14:01:00', 1, 9),
(6, '2019-04-28', '12:00:00', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(30) NOT NULL,
  `doctor_full_name` text NOT NULL,
  `doctor_email` text NOT NULL,
  `doctor_picture` text NOT NULL,
  `doctor_specialty` text NOT NULL,
  `doctor_profile` text NOT NULL,
  `doctor_phone_number` varchar(13) NOT NULL,
  `doctor_hospital` text NOT NULL,
  `doctor_assignment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `doctor_full_name`, `doctor_email`, `doctor_picture`, `doctor_specialty`, `doctor_profile`, `doctor_phone_number`, `doctor_hospital`, `doctor_assignment`) VALUES
(1, 'Maria', 'jj', '1.jpg', 'Surgeon', 'i am a iam a i ama a', '1234567890', 'Agha Khan', 'Not assigned'),
(2, 'Yvonne ', 'yy', '2.jpg', 'Psycologist', 'she is a she is a she is a', '0987654321', 'Aga Khan Hospital', 'Assigned'),
(3, 'Precious Wachera Mugo', 'precious@gmail.cpm', '5.jpg', 'Paediatrician', 'i am she', '098765432', 'Jamaa Mssion Hospital', 'Not assigned');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` int(30) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `date`) VALUES
(8, 'Jacquline', 'Mbogo', 'jacqulinenyokabi@gmail.com', '0797667411', 'jj', '2019-04-20'),
(9, 'jenniffer', 'Nyoks', 'jj@gmail.com', '0987654321', 'jenny123', '2019-04-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
