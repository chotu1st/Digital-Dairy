-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 10:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `age_group` varchar(50) NOT NULL,
  `dp` varchar(500) NOT NULL,
  `perpose` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `gender`, `email`, `contact`, `age_group`, `dp`, `perpose`, `password`) VALUES
(1, 'Pallavi', 'Female', 'pallavi21@gmail.com', '7000468969', '18-24', '', 'personal', '123456'),
(2, 'hero', 'Male', 'ddjkf@dkfj', '1234567899', '0-17', '', 'personal', ''),
(3, 'MAnvi', 'Male', 'manvi@1234', '1234569878', '18-24', '', 'personal', 'dv123456'),
(5, 'pankaj', 'Male', 'manvi@123456558', '9111525164', '0-17', '', 'office', 'daddddsda'),
(7, 'Kavita', 'Male', 'kavita@gmail.com', '0123456789', '18-24', '', 'personal', '1234658'),
(8, 'Kavita', 'Male', 'kavita@outlook.com', '1234567897', '18-24', '', 'personal', '987654'),
(9, 'rahul', 'Male', 'rahul@12', '1597536548', '0-17', '', 'personal', 'jfhjshfsk@');

-- --------------------------------------------------------

--
-- Table structure for table `user_otp`
--

CREATE TABLE `user_otp` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `otp` varchar(4) NOT NULL,
  `isverified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `user_otp`
--
ALTER TABLE `user_otp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_otp`
--
ALTER TABLE `user_otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_otp`
--
ALTER TABLE `user_otp`
  ADD CONSTRAINT `user_otp_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
