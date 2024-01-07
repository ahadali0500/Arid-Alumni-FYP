-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2024 at 05:49 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aridalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `number` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `number`) VALUES
(1, 'admin@gmail.com', 'admin', NULL, NULL),
(2, 'geti@mailinator.com', 'Pa$$w0rd!', 'Lana Berg', '+1 (427) 724-4238'),
(3, 'geti@mailinator.com', 'Pa$$w0rd!', 'Lana Berg', '+1 (427) 724-4238');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int NOT NULL,
  `FullName` varchar(225) NOT NULL,
  `RegistrationNo` varchar(225) NOT NULL,
  `CNIC_img` varchar(225) NOT NULL,
  `Session` varchar(225) NOT NULL,
  `CNIC_no` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `PhoneNumber` varchar(225) NOT NULL,
  `Passoutyear` varchar(225) NOT NULL,
  `DepartmentofGraduation` varchar(225) NOT NULL,
  `CurrentEmployementStatus` varchar(225) NOT NULL,
  `Designation` varchar(225) NOT NULL,
  `OrganizationName` varchar(225) NOT NULL,
  `OfficeEmail` varchar(225) NOT NULL,
  `OfficePhNo` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `status` int NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `FullName`, `RegistrationNo`, `CNIC_img`, `Session`, `CNIC_no`, `Email`, `gender`, `PhoneNumber`, `Passoutyear`, `DepartmentofGraduation`, `CurrentEmployementStatus`, `Designation`, `OrganizationName`, `OfficeEmail`, `OfficePhNo`, `Password`, `status`, `date`) VALUES
(23, 'Jolene Riddle', 'Tyler Carson', 'files/6599671598d5d_about_10.png', '2021-2025', 'Berk Mcfadden', 'bavisany@mailinator.com', 'Male', '9', '2023', 'BS-FST', 'Gray Roy', 'Sopoline May', 'Adams Ayers Trading', '', '+1 (334) 817-8105', 'Pa$$w0rd!', 0, '2024-01-06'),
(24, 'Jonah Sosa', 'Chiquita Hodge', 'files/659967488f4d8_about_10.png', '2022-2026', 'Reed Buckner', 'tegypyfyde@mailinator.com', 'Female', '+1 (459) 991-2617', '2022', 'BS-SE', 'Noble Mcmillan', 'Hamilton Nolan', 'Donovan Patterson LLC', 'zaluz@mailinator.com', '+1 (968) 625-3947', 'Pa$$w0rd!', 0, '2024-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int NOT NULL,
  `CandidateName` varchar(225) NOT NULL,
  `UploadResume` varchar(225) NOT NULL,
  `CandiadateContactNo` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `CoverLetter` longtext NOT NULL,
  `user_id` varchar(224) NOT NULL,
  `user_type` varchar(224) NOT NULL,
  `job_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `CandidateName`, `UploadResume`, `CandiadateContactNo`, `gender`, `Email`, `CoverLetter`, `user_id`, `user_type`, `job_id`) VALUES
(2, 'Jared Massey', 'files/65395b58d8a88_Algo-Home.png', '05-Feb-1976', 'Male', 'bypobytat@mailinator.com', 'Voluptate ducimus d', '2', 'student', '7'),
(3, 'Holmes Clay', 'files/6539ec5bd32be_6.png', '13-Jul-2009', 'Male', 'heluny@mailinator.com', 'Laborum Quaerat occ', '4', 'student', '7'),
(4, 'Ramona Holman', 'files/659adae7329b1_about_10.png', '+1 (992) 689-7176', 'Female', 'peby@mailinator.com', 'Kennan Stanley', '23', 'alumni', '7');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(5000) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, '', 'zorofosy@mailinator.com', 'Eveniet quae ut pla', ''),
(2, 'Duncan Jennings', 'fanyxyl@mailinator.com', 'Dolor qui autem exer', 'Perspiciatis exerci'),
(3, 'Duncan Jennings', 'fanyxyl@mailinator.com', 'Dolor qui autem exer', 'Perspiciatis exerci'),
(4, 'Duncan Jennings', 'fanyxyl@mailinator.com', 'Dolor qui autem exer', 'Perspiciatis exerci'),
(5, 'Isaac Stuart', 'daxa@mailinator.com', 'In quis saepe aspern', 'Sed exercitation ea '),
(6, 'Isaac Stuart', 'daxa@mailinator.com', 'In quis saepe aspern', 'Sed exercitation ea '),
(7, 'Ora Mills', 'febatud@mailinator.com', 'Iste consequatur Ac', 'Officiis iure aut as'),
(8, 'Ora Mills', 'febatud@mailinator.com', 'Iste consequatur Ac', 'Officiis iure aut as'),
(9, 'Evangeline Alvarez', 'fumy@mailinator.com', 'Ab illum autem prae', ''),
(10, 'Evangeline Alvarez', 'fumy@mailinator.com', 'Ab illum autem prae', ''),
(11, 'Evangeline Alvarez', 'fumy@mailinator.com', 'Ab illum autem prae', 'Qui nostrum nihil si'),
(12, 'Brenden Casey', 'wolumyb@mailinator.com', 'Totam sit dolor mai', 'Autem voluptatibus a'),
(13, 'Brenden Casey', 'wolumyb@mailinator.com', 'Totam sit dolor mai', 'Autem voluptatibus a'),
(14, 'Norman Chaney', 'ahadali0500@gmail.com', 'Laborum voluptatem ', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `disscusion`
--

CREATE TABLE `disscusion` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `qus` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disscusion`
--

INSERT INTO `disscusion` (`id`, `name`, `qus`) VALUES
(3, 'Alana Neal', 'Doloremque sapiente '),
(4, 'Rhiannon Chang', 'Voluptatibus dolor s');

-- --------------------------------------------------------

--
-- Table structure for table `disscussionreply`
--

CREATE TABLE `disscussionreply` (
  `id` int NOT NULL,
  `disscussion_id` varchar(225) NOT NULL,
  `name` longtext NOT NULL,
  `mssg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disscussionreply`
--

INSERT INTO `disscussionreply` (`id`, `disscussion_id`, `name`, `mssg`) VALUES
(2, '4', 'Ahad Ali', 'ok'),
(3, '3', 'Ahad Ali', 'q'),
(4, '4', 'Ahad Ali', 'wqwq');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` longtext NOT NULL,
  `post` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `msg`, `post`, `img`, `status`) VALUES
(1, 'Norman Chaney', 'qwwjqkiw', 'okqw', 'files/6599951c08c86_screencapture-localhost-Arid-Alumni-login-php-2024-01-06-20_00_00.png', 0),
(2, 'Norman Chaney', 'qwwjqkiw', 'okqw', 'files/6599953cb5322_screencapture-localhost-Arid-Alumni-login-php-2024-01-06-20_00_00.png', 2),
(3, 'Norman Chaney', 'wq', 'wq', 'files/65999547ea5f3_Buy-Pre-Rented-Commercial-Properties-In-Pakistan-.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `user_type` varchar(225) NOT NULL,
  `Company` varchar(225) NOT NULL,
  `JobLocation` varchar(225) NOT NULL,
  `JobTitle` varchar(225) NOT NULL,
  `Qualification` varchar(225) NOT NULL,
  `Description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `KeySkill` varchar(225) NOT NULL,
  `Package` varchar(225) NOT NULL,
  `ExperienceRequired` varchar(225) NOT NULL,
  `NoofVacancy` varchar(225) NOT NULL,
  `ReferralEmail` varchar(225) NOT NULL,
  `LastDateToApply` varchar(225) NOT NULL,
  `phonenumber` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `user_id`, `user_type`, `Company`, `JobLocation`, `JobTitle`, `Qualification`, `Description`, `KeySkill`, `Package`, `ExperienceRequired`, `NoofVacancy`, `ReferralEmail`, `LastDateToApply`, `phonenumber`, `date`, `status`) VALUES
(8, 23, 'alumni', 'Clay Goodman Trading', 'Bo Maxwell', 'Jeanette Weber', 'Herman Church', 'Barclay Clark', 'Bethany Allison', 'Cameron Wright', 'Paula Hines', '55', 'rylynike@mailinator.com', '1981-12-03', '+1 (925) 359-1008', '2024-01-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_record`
--

CREATE TABLE `our_record` (
  `id` int NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_record`
--

INSERT INTO `our_record` (`id`, `name`, `email`, `phone`) VALUES
(1, 'q', 'qq', 'qq');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `grad_year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `name`, `grad_year`, `department`, `des`, `img`, `status`) VALUES
(1, 'Norman Chaney', '444', 'bsdjds', 'jdbjdbjfd', 'files/65999f0c3ea25_Engineering-Real-Estate-In-Pakistan.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int NOT NULL,
  `FullName` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `RegistrationNo` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNIC_img` varchar(225) NOT NULL,
  `Session` varchar(225) NOT NULL,
  `CNIC_no` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `PhoneNumber` varchar(225) NOT NULL,
  `Department` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `status` int NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `FullName`, `RegistrationNo`, `CNIC_img`, `Session`, `CNIC_no`, `Email`, `PhoneNumber`, `Department`, `Gender`, `Password`, `status`, `date`) VALUES
(6, 'Nerea Long', 'Tana Maddox', 'files/6599616a9334f_Untitled Diagram.drawio.png', '2014-2018', 'Rina Decker', 'tikyt@mailinator.com', '+1 (431) 227-22', '+1 (523) 751-8482f', 'Female', 'Ahad@786', 0, '2024-01-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscusion`
--
ALTER TABLE `disscusion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disscussionreply`
--
ALTER TABLE `disscussionreply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_record`
--
ALTER TABLE `our_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `disscusion`
--
ALTER TABLE `disscusion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `disscussionreply`
--
ALTER TABLE `disscussionreply`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our_record`
--
ALTER TABLE `our_record`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
