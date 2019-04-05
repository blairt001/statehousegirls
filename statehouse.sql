-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2019 at 03:22 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-11-10 19:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `assignpass`
--

CREATE TABLE `assignpass` (
  `id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignpass`
--

INSERT INTO `assignpass` (`id`, `password`) VALUES
(1, '9e2fa38ff44cd22894373e13a82e0844');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classid` int(11) NOT NULL,
  `classname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `Sno` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Data` longblob NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `form` varchar(5) NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `class`) VALUES
(1, 'Form1', '1H'),
(2, 'Form2', '2G'),
(3, 'Form4', '3F'),
(4, 'Form4', '4H');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `tscno` varchar(11) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `designation`, `tscno`, `mobileno`, `username`, `password`) VALUES
(1, 'Tony', 'Teacher', '29816', 715096908, 'blair', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Class` varchar(100) NOT NULL,
  `AdmnNo` varchar(100) NOT NULL,
  `StudentName` varchar(200) NOT NULL,
  `EntryMark` varchar(10) NOT NULL,
  `MATH` varchar(10) DEFAULT NULL,
  `KISW` varchar(10) DEFAULT NULL,
  `ENG` varchar(10) DEFAULT NULL,
  `HIST` varchar(10) DEFAULT NULL,
  `IRE` varchar(10) DEFAULT NULL,
  `CRE` varchar(10) DEFAULT NULL,
  `GEO` varchar(10) DEFAULT NULL,
  `AGRIC` varchar(10) DEFAULT NULL,
  `ART` varchar(10) DEFAULT NULL,
  `COMP` varchar(10) DEFAULT NULL,
  `HSE` varchar(10) DEFAULT NULL,
  `GER` varchar(10) DEFAULT NULL,
  `FRE` varchar(10) DEFAULT NULL,
  `BUS` varchar(10) DEFAULT NULL,
  `MUS` varchar(10) DEFAULT NULL,
  `PHY` varchar(10) DEFAULT NULL,
  `BIO` varchar(10) DEFAULT NULL,
  `CHEM` varchar(10) DEFAULT NULL,
  `TOTAL` varchar(10) NOT NULL,
  `Average` varchar(10) NOT NULL,
  `Grade` varchar(10) NOT NULL,
  `Mscore` varchar(20) NOT NULL,
  `StreamPstn` varchar(10) NOT NULL,
  `FormPst` varchar(10) NOT NULL,
  `TargetedGrade` varchar(10) NOT NULL,
  `TargetedMScore` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term1`
--

CREATE TABLE `term1` (
  `Class` varchar(100) NOT NULL,
  `AdmnNo` varchar(100) NOT NULL,
  `StudentName` varchar(200) NOT NULL,
  `EntryMark` varchar(10) NOT NULL,
  `MATH` varchar(10) DEFAULT NULL,
  `KISW` varchar(10) DEFAULT NULL,
  `ENG` varchar(10) DEFAULT NULL,
  `HIST` varchar(10) DEFAULT NULL,
  `IRE` varchar(10) DEFAULT NULL,
  `CRE` varchar(10) DEFAULT NULL,
  `GEO` varchar(10) DEFAULT NULL,
  `AGRIC` varchar(10) DEFAULT NULL,
  `ART` varchar(10) DEFAULT NULL,
  `COMP` varchar(10) DEFAULT NULL,
  `HSE` varchar(10) DEFAULT NULL,
  `GER` varchar(10) DEFAULT NULL,
  `FRE` varchar(10) DEFAULT NULL,
  `BUS` varchar(10) DEFAULT NULL,
  `MUS` varchar(10) DEFAULT NULL,
  `PHY` varchar(10) DEFAULT NULL,
  `BIO` varchar(10) DEFAULT NULL,
  `CHEM` varchar(10) DEFAULT NULL,
  `TOTAL` varchar(10) NOT NULL,
  `Average` varchar(10) NOT NULL,
  `Grade` varchar(10) NOT NULL,
  `Mscore` varchar(20) NOT NULL,
  `StreamPstn` varchar(10) NOT NULL,
  `FormPst` varchar(10) NOT NULL,
  `TargetedGrade` varchar(10) NOT NULL,
  `TargetedMScore` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `term2`
--

CREATE TABLE `term2` (
  `Class` varchar(100) NOT NULL,
  `AdmnNo` varchar(100) NOT NULL,
  `StudentName` varchar(200) NOT NULL,
  `EntryMark` varchar(10) NOT NULL,
  `MATH` varchar(10) DEFAULT NULL,
  `KISW` varchar(10) DEFAULT NULL,
  `ENG` varchar(10) DEFAULT NULL,
  `HIST` varchar(10) DEFAULT NULL,
  `IRE` varchar(10) DEFAULT NULL,
  `CRE` varchar(10) DEFAULT NULL,
  `GEO` varchar(10) DEFAULT NULL,
  `AGRIC` varchar(10) DEFAULT NULL,
  `ART` varchar(10) DEFAULT NULL,
  `COMP` varchar(10) DEFAULT NULL,
  `HSE` varchar(10) DEFAULT NULL,
  `GER` varchar(10) DEFAULT NULL,
  `FRE` varchar(10) DEFAULT NULL,
  `BUS` varchar(10) DEFAULT NULL,
  `MUS` varchar(10) DEFAULT NULL,
  `PHY` varchar(10) DEFAULT NULL,
  `BIO` varchar(10) DEFAULT NULL,
  `CHEM` varchar(10) DEFAULT NULL,
  `TOTAL` varchar(10) NOT NULL,
  `Average` varchar(10) NOT NULL,
  `Grade` varchar(10) NOT NULL,
  `Mscore` varchar(20) NOT NULL,
  `StreamPstn` varchar(10) NOT NULL,
  `FormPst` varchar(10) NOT NULL,
  `TargetedGrade` varchar(10) NOT NULL,
  `TargetedMScore` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assignpass`
--
ALTER TABLE `assignpass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`Sno`),
  ADD KEY `form` (`form`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `AdmnNo` (`AdmnNo`);

--
-- Indexes for table `term1`
--
ALTER TABLE `term1`
  ADD UNIQUE KEY `AdmnNo` (`AdmnNo`);

--
-- Indexes for table `term2`
--
ALTER TABLE `term2`
  ADD UNIQUE KEY `AdmnNo` (`AdmnNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
