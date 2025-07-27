-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2025 at 04:43 PM
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
-- Database: `care_compass_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(12, 'Mohanawarma', 'Mohanawarma', 'monaff001@gmail.com', '1234'),
(13, 'erger', 'srfr', 'varma@gmail', '1234'),
(14, 'qwer', 'qwewewe', 'poi@gmail.com', '0987'),
(15, 'ahsaf', 'pk', 'ashaf@gmail', '0987'),
(16, 'Mohanawarma', 'Mohanawarma', 'ppppp@gmail', '21211'),
(17, 'wrsfewqrfe', 'efawsfg', 'wefadfda@gmail', '12345'),
(18, 'Mohanawarma', 'Mohanawarma', 'wefadfdhbjha@gmail', '1234'),
(19, 'Mohana ', 'Mohanawarma', '76ysdbsd@gmail', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `specialization`, `doctor_name`, `appointment_date`) VALUES
(1, 'varma', 'mohan', 'monaff001@gmail.com', '0987732342342', 'mbbs', 'mohanawarma', '2025-02-21'),
(2, 'varma', 'Mohanawarma', 'poi@gmail.com', '0987732342342', 'gyejee', 'ersdthfjgykhulj', '2025-02-01'),
(3, 'varma', 'Mohanawarma', 'poi@gmail.com', '0987732342342', 'gyejee', 'ersdthfjgykhulj', '2025-02-01'),
(4, 'varma', 'Mohanawarma', 'monaff001@gmail.com', '0987732342342', 'gyejee', 'ersdthfjgykhulj', '2025-02-06'),
(5, 'alraj', 'awsaf', 'alraj@gmail.com', '0760054371', 'Cardiology', 'rahuman', '2025-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Doctor`
--

INSERT INTO `Doctor` (`id`, `doctor_name`, `specialization`, `contact_number`, `email`, `password`, `joining_date`) VALUES
(9, 'mohanawarma', 'child care', '0760054371', 'mohanavarma@gmail.com', 'mohan.2426', '2024-12-06'),
(10, 'Logithan', 'Dentist', '0776002481', 'logi@gmail.com', 'lothithan123', '2024-07-05'),
(11, 'Kathir', 'Psychiatry', '0750884616', 'kathir@gmail.com', 'kathir123', '2024-07-12'),
(12, 'pasmetha', 'Oncology', '0765710171', 'pasme@gmail.com', 'pasmetha123', '2024-11-15'),
(13, 'roshan', 'Cardiothoracic', '0776453717', 'rosan@gmail.com', '1234', '2025-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `patient_reports`
--

CREATE TABLE `patient_reports` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `report_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_reports`
--

INSERT INTO `patient_reports` (`id`, `patient_name`, `report_image`) VALUES
(1, 'hhhgghg', ''),
(2, 'fdy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient_reports`
--
ALTER TABLE `patient_reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Doctor`
--
ALTER TABLE `Doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `patient_reports`
--
ALTER TABLE `patient_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
