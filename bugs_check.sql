-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 09:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buglist`
--

-- --------------------------------------------------------

--
-- Table structure for table `bugs_check`
--

CREATE TABLE `bugs_check` (
  `Bugs_id` int(11) NOT NULL,
  `Bugs` varchar(100) NOT NULL,
  `Bugs_Types` varchar(100) NOT NULL,
  `Reported_By` varchar(100) NOT NULL,
  `Date_of_Report` date NOT NULL,
  `Bugs_Status` text NOT NULL,
  `Bugs_Saverity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bugs_check`
--

INSERT INTO `bugs_check` (`Bugs_id`, `Bugs`, `Bugs_Types`, `Reported_By`, `Date_of_Report`, `Bugs_Status`, `Bugs_Saverity`) VALUES
(6, 'A calculation is performed that divides any number by zero.', 'Logical Defects', 'Salih Tanveer', '0000-00-00', 'Critical', '2022-01-03 09:13'),
(8, 'Nothing', 'Arithmetic Defects', 'Siyam Waheed', '0000-00-00', 'Minor', '2022-01-03 09:15'),
(10, 'A calculation is performed that divides any number by zero.', 'Functional defects', 'Salih Tanveer', '0000-00-00', 'Critical', '2022-01-03 10:09'),
(11, 'A calculation is performed that divides any number by zero.', 'Functional defects', 'Salih Tanveer', '0000-00-00', 'Critical', '2022-01-03 10:09'),
(12, 'hello', 'Logical Defects', 'knk', '0000-00-00', 'Critical', '2022-01-03 10:09'),
(13, 'feewf', 'Functional defects', 'q', '0000-00-00', 'Critical', '2022-01-03 10:11'),
(14, 'A calculation is performed that divides any number by zero.', 'Functional defects', 'Salih Tanveer', '0000-00-00', 'Critical', '2022-01-04 04:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bugs_check`
--
ALTER TABLE `bugs_check`
  ADD PRIMARY KEY (`Bugs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bugs_check`
--
ALTER TABLE `bugs_check`
  MODIFY `Bugs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
