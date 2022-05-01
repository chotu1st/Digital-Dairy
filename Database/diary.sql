-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 09:02 PM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `userid`) VALUES
(1, 'Personal', 1),
(2, 'College', 1),
(7, 'College', 7),
(8, 'Home', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `noteID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `noteTitle` varchar(25) NOT NULL,
  `note` varchar(1000) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `timeStamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`noteID`, `userID`, `noteTitle`, `note`, `categoryID`, `timeStamp`) VALUES
(7, 1, 'Shopping ', 'aloo bhuiya', 1, '2022-04-22 14:20:20'),
(8, 1, 'Love', 'college waala love', 2, '2022-04-22 14:20:40'),
(9, 1, 'Kavita', 'Kvita is nice bro â™¥', 1, '2022-04-22 14:21:05'),
(10, 1, 'qkm,d', 'nw,fw,kh', 2, '2022-04-22 14:21:18'),
(11, 7, 'Python Lap', 'Python is very intersting language for me ...', 7, '2022-04-25 15:09:26'),
(12, 7, 'Mummy', 'Mummy ne aaj bahut acha khana banaya aur sabse jada maine kahaya....â˜»        \n\nAur mujhe bahut psnd aaya', 8, '2022-04-25 15:11:40'),
(13, 7, 'Project Work', 'We making a great project with support of our teacher Mayank and Pratush sir ', 7, '2022-04-25 15:13:38'),
(14, 7, 'Bhai', 'Bhai ne aj freez me rakhi sari mithai kha li â˜º', 8, '2022-04-25 15:14:58'),
(15, 7, 'laptop ', 'Papa aur bhai ne mil kr mujhe laptop gift kiya\n', 8, '2022-04-25 15:16:05');

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
  `password` varchar(50) NOT NULL,
  `email_verified` tinyint(1) DEFAULT 0,
  `contact_verifed` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `gender`, `email`, `contact`, `age_group`, `dp`, `perpose`, `password`, `email_verified`, `contact_verifed`) VALUES
(1, 'Pallavi', 'Female', 'pallavi21@gmail.com', '7000468969', '18-24', 'Assets/img/jyoti.jpg', 'personal', '123456', 0, 0),
(7, 'Kavita', 'Male', 'kavita@mitindore.co.in', '0123456789', '18-24', 'Assets/img/jyoti.jpg', 'personal', '1234658', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`noteID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `notes_ibfk_1` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `noteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
