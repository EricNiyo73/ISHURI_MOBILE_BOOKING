-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 06:15 PM
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
-- Database: `ishurimobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ID` int(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Names` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `Email`, `Names`, `Time`, `Message`) VALUES
(1, 'reboscot@gmail.com', 'TWAHIRWA', '2022-07-31 22:20:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` int(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nesa`
--

CREATE TABLE `nesa` (
  `Nesa ID` int(255) NOT NULL,
  `Names` varchar(100) NOT NULL,
  `Password` int(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `ID` int(255) NOT NULL,
  `Schoolname` varchar(100) NOT NULL,
  `SchoolEmail` varchar(20) NOT NULL,
  `SchoolPhone` int(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`ID`, `Schoolname`, `SchoolEmail`, `SchoolPhone`, `Username`, `Password`, `TIME`) VALUES
(1, 'E S RUKOZO', 'esrukozo123@gmail.co', 786007088, 'ericniyokwizerwa1@gm', '0', '2022-07-31 07:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `school_app_form`
--

CREATE TABLE `school_app_form` (
  `ID` int(255) NOT NULL,
  `Names` varchar(100) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `Sector` varchar(10) NOT NULL,
  `SchoolEmail` varchar(20) NOT NULL,
  `SchoolPhone` int(10) NOT NULL,
  `Combinations` varchar(100) NOT NULL,
  `Details` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_app_form`
--

INSERT INTO `school_app_form` (`ID`, `Names`, `Country`, `Province`, `District`, `Sector`, `SchoolEmail`, `SchoolPhone`, `Combinations`, `Details`) VALUES
(1, '', 'RWANDA', 'NORTHERN', 'RULINDO', '', 'esrukozo123@gmail.co', 786007088, 'Ordinary level,MCE,MEG and HEG', '&detail'),
(2, 'ECOLE SECONDAIRE DE RUKOZO', 'RWANDA', 'NORTHERN', 'RULINDO', 'RUKOZO', 'esrukozo123@gmail.co', 786007088, 'Ordinary level,MCE,MEG and HEG', '&detail');

-- --------------------------------------------------------

--
-- Table structure for table `student_app_form`
--

CREATE TABLE `student_app_form` (
  `Student id` int(255) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Marital_status` varchar(10) NOT NULL,
  `Disability` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Country_of_residence` varchar(20) NOT NULL,
  `Father_names` varchar(20) NOT NULL,
  `Mother_names` varchar(20) NOT NULL,
  `Cell` varchar(20) NOT NULL,
  `Sector` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `Previous_Education_level` varchar(20) NOT NULL,
  `Previous_Education_School` varchar(20) NOT NULL,
  `Applied_School` varchar(20) NOT NULL,
  `Reason` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_app_form`
--

INSERT INTO `student_app_form` (`Student id`, `Firstname`, `Lastname`, `Date_of_birth`, `Gender`, `Marital_status`, `Disability`, `Email`, `Phone`, `Country_of_residence`, `Father_names`, `Mother_names`, `Cell`, `Sector`, `District`, `Previous_Education_level`, `Previous_Education_School`, `Applied_School`, `Reason`, `Time`) VALUES
(1, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', '', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'SIMUGOMWA FRANCOIS', 'ESPERANCE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'S5', '2', '5', 'umushinga', '2022-07-30 20:55:42'),
(2, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'SIMUGOMWA FRANCOIS', 'ESPERANCE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'S5', '2', '5', 'umushinga', '2022-07-30 21:01:03'),
(3, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'SIMUGOMWA FRANCOIS', 'ESPERANCE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'S5', '2', '5', 'umushinga', '2022-07-30 21:13:55'),
(4, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', '', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', '', '', '2', '', '2022-07-30 22:38:18'),
(5, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', '', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', '', '', '2', '', '2022-07-30 22:39:59'),
(6, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', '', '', '1', '', '2022-07-31 06:13:39'),
(7, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', '', '1', '1', '', '2022-07-31 06:14:55'),
(8, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '1', '', '2022-07-31 06:15:18'),
(9, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '1', '', '2022-07-31 06:23:57'),
(10, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '1', '', '2022-07-31 06:24:59'),
(11, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '1', '', '2022-07-31 06:26:02'),
(12, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '1', '', '2022-07-31 06:28:23'),
(13, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '1', '', '2022-07-31 07:40:59'),
(14, 'ERIC', 'NIYOKWIZERWA', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '1', '', '2022-07-31 08:19:22'),
(15, 'SAMUEL', 'BUGINGO', '0000-00-00', 'Male', 'status', '', 'ericniyokwizerwa1@gm', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '1', '', '2022-07-31 08:36:39'),
(16, 'TWAHIRWA', 'EMMANUEL', '0000-00-00', 'Male', 'Single', '', 'ericniyokwizerwa1@gm', 788851151, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'muhoza', 'muhoza', 'musanze', 'S4', '1', '2', 'kwiga', '2022-07-31 22:18:25'),
(17, 'TWAHIRWA', 'EMMANUEL', '0000-00-00', 'Male', 'Single', '', 'ericniyokwizerwa1@gm', 788851151, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'muhoza', 'muhoza', 'musanze', 'S4', '1', '2', 'kwiga', '2022-07-31 22:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `student_pare_teach`
--

CREATE TABLE `student_pare_teach` (
  `Id` int(255) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Password` int(8) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `User_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_pare_teach`
--

INSERT INTO `student_pare_teach` (`Id`, `Username`, `Firstname`, `Lastname`, `Email`, `Phone`, `Password`, `Time`, `User_type`) VALUES
(5, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'NIYOKWIZERWA', 'ericniyokwizerwa1@gm', 786007088, 12345, '2022-07-30 19:07:14', '2'),
(7, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'NIYOKWIZERWA', 'ericniyokwizerwa1@gm', 786007088, 123456788, '2022-07-30 19:12:36', '1'),
(8, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'NIYOKWIZERWA', 'ericniyokwizerwa1@gm', 786007088, 123456788, '2022-07-30 19:15:09', '1'),
(9, 'alainnizy1@gmail.com', 'ERIC', 'UFITINEMA', 'alainnizy1@gmail.com', 782290824, 12345, '2022-07-30 19:20:52', '--select--'),
(10, 'alainnizy1@gmail.com', 'Ange', 'MUTONI', 'alainnizy1@gmail.com', 789466837, 1234567, '2022-07-30 19:32:04', 'Teacher'),
(11, 'alainnizy1@gmail.com', 'Ange', 'MUTONI', 'alainnizy1@gmail.com', 789466837, 1234567, '2022-07-30 20:42:22', 'Teacher'),
(12, 'samuelbizi124@gmail.com', 'SAMUEL', 'BUGINGO', 'samuelbizi124@gmail.', 782290824, 123456, '2022-07-31 07:09:42', 'Learner'),
(13, 'samuelbizi124@gmail.com', 'SAMUEL', 'BUGINGO', 'samuelbizi124@gmail.', 782290824, 123456, '2022-07-31 07:14:28', 'Learner'),
(14, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'UFITINEMA', 'ericniyokwizerwa1@gm', 786007088, 123456, '2022-08-01 00:24:03', 'Learner'),
(15, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'BUGINGO', 'ericniyokwizerwa1@gm', 786007088, 12345, '2022-08-01 00:24:28', 'Learner'),
(16, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'BUGINGO', 'ericniyokwizerwa1@gm', 786007088, 12345, '2022-08-01 00:26:27', 'Learner'),
(17, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'NIYOKWIZERWA', 'ericniyokwizerwa1@gm', 786007088, 123334, '2022-08-01 00:26:48', 'Learner'),
(18, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'MURENZI', 'ericniyokwizerwa1@gm', 786007088, 123456, '2022-08-01 00:29:36', 'Learner'),
(19, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'NIYOKWIZERWA', 'ericniyokwizerwa1@gm', 786007088, 827, '2022-08-02 12:32:39', 'Parent'),
(20, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'NIYOKWIZERWA', 'ericniyokwizerwa1@gm', 786007088, 827, '2022-08-02 12:57:13', 'Teacher'),
(21, 'ericniyokwizerwa1@gmail.com', 'ERIC', 'NIYOKWIZERWA', 'ericniyokwizerwa1@gm', 786007088, 827, '2022-08-02 13:03:18', 'Learner'),
(22, 'samuelbizi124@gmail.com', 'SAMUEL', 'BUGINGO', 'samuelbizi124@gmail.', 786007088, 0, '2022-08-02 14:50:52', 'Parent');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_app_form`
--

CREATE TABLE `teacher_app_form` (
  `Teacher ID` int(255) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Date_of_birth` year(4) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Marital_status` varchar(10) NOT NULL,
  `Disability` varchar(20) NOT NULL,
  `Email` varchar(10) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Country_of_residence` varchar(50) NOT NULL,
  `Father_names` varchar(50) NOT NULL,
  `Mother_names` varchar(50) NOT NULL,
  `Cell` varchar(50) NOT NULL,
  `Sector` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Education_level` varchar(50) NOT NULL,
  `Previous_Working_School` varchar(50) NOT NULL,
  `Applied_School` varchar(50) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_app_form`
--

INSERT INTO `teacher_app_form` (`Teacher ID`, `Firstname`, `Lastname`, `Date_of_birth`, `Gender`, `Marital_status`, `Disability`, `Email`, `Phone`, `Country_of_residence`, `Father_names`, `Mother_names`, `Cell`, `Sector`, `District`, `Education_level`, `Previous_Working_School`, `Applied_School`, `Time`) VALUES
(1, 'SAMUEL', 'NIYOKWIZERWA', 0000, 'Male', 'status', '', 'samuelbizi', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '2', '2022-07-31 08:56:16'),
(2, 'SAMUEL', 'NIYOKWIZERWA', 1999, 'Male', 'Single', '', 'samuelbizi', 786007088, 'RWANDA', 'KANAMUGIRE ORESTE', 'KAYIGIRE CHRISTINE', 'RWIMBOGO', 'KARENGE', 'RWAMAGANA', 'A2', '1', '2', '2022-07-31 11:46:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nesa`
--
ALTER TABLE `nesa`
  ADD PRIMARY KEY (`Nesa ID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `school_app_form`
--
ALTER TABLE `school_app_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_app_form`
--
ALTER TABLE `student_app_form`
  ADD PRIMARY KEY (`Student id`);

--
-- Indexes for table `student_pare_teach`
--
ALTER TABLE `student_pare_teach`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacher_app_form`
--
ALTER TABLE `teacher_app_form`
  ADD PRIMARY KEY (`Teacher ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nesa`
--
ALTER TABLE `nesa`
  MODIFY `Nesa ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `school_app_form`
--
ALTER TABLE `school_app_form`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_app_form`
--
ALTER TABLE `student_app_form`
  MODIFY `Student id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_pare_teach`
--
ALTER TABLE `student_pare_teach`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `teacher_app_form`
--
ALTER TABLE `teacher_app_form`
  MODIFY `Teacher ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
