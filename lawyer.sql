-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 05:16 AM
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
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`Id`, `Name`, `Email`, `Password`, `Picture`) VALUES
(1, 'Tom Cruise', 'salvadori6539@gmail.com', '988dce1898dfda74527351927d9575b2', 'bruno-salvadori.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `allappointments`
--

CREATE TABLE `allappointments` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact_number` varchar(50) NOT NULL,
  `Appointment_date` varchar(50) NOT NULL,
  `Appointment_service` varchar(50) NOT NULL,
  `Lawyer_name` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allappointments`
--

INSERT INTO `allappointments` (`Id`, `Name`, `Contact_number`, `Appointment_date`, `Appointment_service`, `Lawyer_name`, `Status`) VALUES
(1, 'Bruce Balfour', '03195645769', '2023-08-09', 'Affidavit Consultant', 'Adam Phillp', 'under review'),
(2, 'David Arbogast', '03089072465', '2023-07-25', 'Criminal Consultant', 'Dylan Phillps', 'Approved'),
(3, 'Ronald Walker', '03768934857', '2023-06-09', 'Civil Consultant', 'Josh Dunn', 'under review'),
(4, 'Josie Belliard', '03889966916', '2023-05-31', 'Divorce Consultant', 'Gloria Edwards', 'under review');

-- --------------------------------------------------------

--
-- Table structure for table `customersignup`
--

CREATE TABLE `customersignup` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone_number` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pictures` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customersignup`
--

INSERT INTO `customersignup` (`Id`, `Name`, `Email`, `Password`, `Phone_number`, `City`, `Pictures`) VALUES
(1, 'Jane Smith', 'js3146@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '03135645787', 'California', 'testimonial-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lawyersignup`
--

CREATE TABLE `lawyersignup` (
  `Id` int(11) NOT NULL,
  `Lawyer_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CNIC` varchar(50) NOT NULL,
  `Phone_number` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Services` varchar(50) NOT NULL,
  `Year_Experience` int(11) NOT NULL,
  `Pictures` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyersignup`
--

INSERT INTO `lawyersignup` (`Id`, `Lawyer_name`, `Email`, `Password`, `CNIC`, `Phone_number`, `City`, `Qualification`, `Services`, `Year_Experience`, `Pictures`) VALUES
(1, 'Adam Phillips', 'Phillips5696@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '422015678329198', '03458767804', 'California', 'Masters law of Affidavit ', 'Affidavit Consultant', 4, 'team-1.jpg'),
(2, 'Dylan Adams', 'danny5347@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '422011328406718', '03145871326', 'Austin', 'Master in Criminal Law', 'Criminal Consultant', 6, 'team-2.jpg'),
(3, 'Josh Dunn', 'danny5347@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '422012439160987', '03123987625', 'Sydney', 'Masters Civil law  ', 'Civil Consultant', 8, 'team-4.jpg'),
(4, 'Gloria Edwards', 'edward4461@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '422018756789425', '03978432468', 'Washington', 'Masters in Family Law ', 'Divorce Consultant', 10, 'team-3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `allappointments`
--
ALTER TABLE `allappointments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customersignup`
--
ALTER TABLE `customersignup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lawyersignup`
--
ALTER TABLE `lawyersignup`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminsignup`
--
ALTER TABLE `adminsignup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allappointments`
--
ALTER TABLE `allappointments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customersignup`
--
ALTER TABLE `customersignup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lawyersignup`
--
ALTER TABLE `lawyersignup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
