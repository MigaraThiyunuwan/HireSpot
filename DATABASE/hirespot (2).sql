-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 03:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hirespot`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `applicationID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `jobID` int(11) DEFAULT NULL,
  `companyID` int(11) DEFAULT NULL,
  `cv` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`applicationID`, `userID`, `jobID`, `companyID`, `cv`, `status`, `date`) VALUES
(1, 8, NULL, 10, '../../upload/cvs/10_40_8_PRADISHAN\'sResume.pdf.pdf', 'Accept', '2023-08-05 13:07:17'),
(3, 8, NULL, NULL, '../../upload/cvs/12_42_8_PRADISHAN\'sResume.pdf.pdf', 'Waiting', '2023-08-05 20:17:29'),
(4, 8, NULL, NULL, '../../upload/cvs/12_41_8_K.pradishanwebdeveloperresume.pdf.pdf', 'Accept', '2023-08-05 20:17:41'),
(5, 8, NULL, NULL, '../../upload/cvs/12_43_8_CoreANDSecondryrequirementsgroupE.docx.pdf.pdf', 'Waiting', '2023-08-05 20:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyID` int(11) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `coverPic` varchar(255) DEFAULT NULL,
  `employee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyID`, `companyname`, `email`, `address`, `description`, `password`, `profilePic`, `coverPic`, `employee`) VALUES
(10, 'zetronex', 'k.pradeeshan4@gmail.com', 'colombo | Sri Lanka', 'software solutions providing company', '$2y$10$xopKCGPoR8Ttpwc8yog8zevVeA6E6yxLh5nYacHnfVPnbp7tk2ZMS', '../../upload/profile/10.jpg', '../../upload/cover/10.jpg', 75);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `jobcateogory` varchar(50) NOT NULL,
  `companyID` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `filePath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` varchar(75) NOT NULL,
  `education` varchar(75) NOT NULL,
  `description` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilePic` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`userID`, `username`, `firstname`, `lastname`, `email`, `phoneNo`, `dateofbirth`, `address`, `education`, `description`, `about`, `password`, `profilePic`, `gender`) VALUES
(8, 'pradisharoon', 'pradishan', 'karunakaran', 'k.pradeeshan4@gmail.com', '0774057922', '2000-08-31', 'colombo | Sri Lanka', 'phd in computer Engeneering', 'hacker', 'alien', '$2y$10$DAaNNUxhTq0JsScOf/xPiO2RC5gOTFGKgM7/yKgjOXZhVzcGM7HfG', '../../upload/userprofile/8.jpg', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payID` int(11) NOT NULL,
  `companyID` int(11) NOT NULL,
  `paymentcategory` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skillId` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `skillName` varchar(50) NOT NULL,
  `skillLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`applicationID`),
  ADD KEY `userID` (`userID`,`jobID`),
  ADD KEY `jobID` (`jobID`),
  ADD KEY `companyID` (`companyID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyID`),
  ADD UNIQUE KEY `companyname` (`companyname`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `companyname_2` (`companyname`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `companyID` (`companyID`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payID`),
  ADD KEY `companyID` (`companyID`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skillId`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `applicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `skillId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `jobseeker` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`jobID`) REFERENCES `job` (`jobID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `application_ibfk_3` FOREIGN KEY (`companyID`) REFERENCES `company` (`companyID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`companyID`) REFERENCES `company` (`companyID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`companyID`) REFERENCES `company` (`companyID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `jobseeker` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
