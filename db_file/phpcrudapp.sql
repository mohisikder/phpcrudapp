-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 03:31 PM
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
-- Database: `phpcrudapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(55) NOT NULL,
  `employee_id` varchar(55) NOT NULL,
  `employee_designation` varchar(55) NOT NULL,
  `employee_salary` varchar(55) NOT NULL,
  `employee_gender` varchar(55) NOT NULL,
  `employee_department` varchar(55) NOT NULL,
  `employee_contact` varchar(55) NOT NULL,
  `employee_email` varchar(55) NOT NULL,
  `employee_address` varchar(55) NOT NULL,
  `employee_city` varchar(55) NOT NULL,
  `employee_country` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `employee_id`, `employee_designation`, `employee_salary`, `employee_gender`, `employee_department`, `employee_contact`, `employee_email`, `employee_address`, `employee_city`, `employee_country`) VALUES
(1, 'Mohi Sikder', '100100', 'Software Developer', '20000', 'Male', 'Information Technology', '01234567890', 'mohi@gmail.com', 'Tongi', 'Gazipur', 'Bangladesh'),
(2, 'Rizvi Ahmed', '100101', 'Software Developer', '25000', 'Male', 'Information Technology', '012345678784', 'rizvi@gmail.com', 'Uttara', 'Dhaka', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
