-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 07:52 AM
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
(3, 'School', 12),
(4, 'Love', 13),
(5, 'Love', 12),
(6, 'Personal', 12);

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
(1, 13, 'Personal', 'Do shopping for Rahul\'s Bday', 3, '2022-04-15 17:46:50'),
(2, 12, 'Science', 'Science class achi lgi bahut ...', 3, '2022-04-19 01:53:02'),
(3, 12, 'math', 'sabse bekr subject', 3, '2022-04-19 01:54:28'),
(4, 12, 'fokt', 'thora jada hi fokt', 3, '2022-04-19 01:57:59'),
(5, 12, 'jjjk', 'gfnfhjfgjfhfj', 3, '2022-04-19 02:00:52'),
(6, 12, 'Play', 'game khele bahut maja aaya aj', 3, '2022-04-19 02:03:43');

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
(2, 'hero', 'Male', 'ddjkf@dkfj', '1234567899', '0-17', '', 'personal', '', 0, 0),
(3, 'MAnvi', 'Male', 'manvi@1234', '1234569878', '18-24', '', 'personal', 'dv123456', 0, 0),
(5, 'pankaj', 'Male', 'manvi@123456558', '9111525164', '0-17', '', 'office', 'daddddsda', 0, 0),
(7, 'Kavita', 'Male', 'kavita@gmail.com', '0123456789', '18-24', '', 'personal', '1234658', 0, 0),
(8, 'Kavita', 'Male', 'kavita@outlook.com', '1234567897', '18-24', '', 'personal', '987654', 0, 0),
(9, 'rahul', 'Male', 'rahul@12', '1597536548', '0-17', '', 'personal', 'jfhjshfsk@', 0, 0),
(10, 'ramu', 'Male', 'ramu@123', '7418529635', '25-34', '', 'office', '1234', 0, 0),
(11, 'Yogesh Singh', 'Male', 'yogesh@123', '9111555555', '18-24', '', 'Office', '123456', 0, 0),
(12, 'Ram ji', 'Male', 'ram@123', '2222222222', '0-17', '', 'School', '12345', 0, 0),
(13, 'Shyam ', 'Male', 'shyam@123', '4444444444', '0-17', '', 'Love', '123', 0, 0);

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
  ADD KEY `userID` (`userID`),
  ADD KEY `categoryID` (`categoryID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `noteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `notes_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
