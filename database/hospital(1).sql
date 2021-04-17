-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2021 at 09:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `email`, `password`, `date`) VALUES
(1, 'viaansharma7@gmail.com', 'viaan007', '2021-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `bookappointment`
--

CREATE TABLE `bookappointment` (
  `bookingid` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookappointment`
--

INSERT INTO `bookappointment` (`bookingid`, `categorie`, `date`, `time`) VALUES
(1, 'bone', '07-01-2021', '6 pm'),
(2, 'Heart', '2021-01-07', '10 am'),
(3, 'Bone', '2021-01-19', '10 am'),
(4, 'Ear', '2021-01-25', '01 pm'),
(5, 'Heart', '2021-01-17', '11 am'),
(6, 'Heart', '2021-01-08', '12 am'),
(7, 'Heart', '2021-01-06', '02 pm'),
(8, 'Eyes', '2021-01-14', '02 pm'),
(9, 'Ear', '2021-01-13', '02 pm');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorId` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `date` date NOT NULL,
  `name` char(30) NOT NULL,
  `gender` char(10) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorId`, `email`, `password`, `date`, `name`, `gender`, `contact`, `profile`, `age`) VALUES
(0, 'shivi@gmail.com', '1', '2021-02-16', 'shivi singh', 'female', 123358584, 'jhdviluaheoiwjeoijowiji', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `comment_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `uid`, `comment`, `comment_date`) VALUES
(1, ' viaansharma7@gmail.com', 'this is a great website for heath', '2021-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `patient registration`
--

CREATE TABLE `patient registration` (
  `User name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` char(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Contact` bigint(12) NOT NULL,
  `BloodGroup` char(5) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient registration`
--

INSERT INTO `patient registration` (`User name`, `DOB`, `Address`, `Email`, `Gender`, `Age`, `Contact`, `BloodGroup`, `Password`, `Profile`) VALUES
('aayushi sahu', '2001-09-26', 'sec-M kila mohammadi nagar lucknow,up', ' aayushi@gmail.com', '  FEMALE', 19, 7636627878, 'o-', '1', 'WhatsApp Image 2020-12-12 at 18.18.13.jpeg'),
('abhishek yadav', '2001-01-01', 'sec-M kila mohammadi nagar lucknow,up', ' a@gmail.com', '  MALE', 19, 8736436387, 'A+', '119', 'WhatsApp Image 2020-12-12 at 18.18.13.jpeg'),
('sid sharma', '2001-07-09', 'sec-M kila mohammadi nagar lucknow,up', ' sid@gmail.com', '  MALE', 19, 8736436387, 'O-', 'sid123', 'WhatsApp Image 2020-12-12 at 18.18.12.jpeg'),
('viaan sharma', '2001-07-09', 'sec-M kila mohammadi nagar lucknow,up', ' viaansharma7@gmail.com', 'MALE', 20, 8318014087, 'o+', '1', 'IMG_20200104_230651.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bookappointment`
--
ALTER TABLE `bookappointment`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient registration`
--
ALTER TABLE `patient registration`
  ADD PRIMARY KEY (`User name`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookappointment`
--
ALTER TABLE `bookappointment`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
