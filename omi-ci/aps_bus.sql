-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 11:01 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aps_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `fee_receipts`
--

CREATE TABLE `fee_receipts` (
  `receipt_id` int(11) NOT NULL,
  `student_nid` int(11) NOT NULL,
  `s_from` date NOT NULL,
  `s_to` date NOT NULL,
  `payment_type` varchar(500) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_for` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_receipts`
--

INSERT INTO `fee_receipts` (`receipt_id`, `student_nid`, `s_from`, `s_to`, `payment_type`, `remarks`, `amount`, `payment_for`) VALUES
(1, 5, '2022-02-01', '2022-04-30', 'cheque payment', '449849651898', '750.00', 'monthly fee'),
(2, 4, '2022-02-01', '2022-02-28', 'cash payment', '', '500.00', 'monthly fee');

-- --------------------------------------------------------

--
-- Table structure for table `ifeesetup`
--

CREATE TABLE `ifeesetup` (
  `fee_id` int(11) NOT NULL,
  `pickup_point` varchar(500) NOT NULL,
  `busfee` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ifeesetup`
--

INSERT INTO `ifeesetup` (`fee_id`, `pickup_point`, `busfee`) VALUES
(1, 'Belgharia', '750'),
(3, 'Barrackpore', '500');

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `student_id` varchar(500) NOT NULL,
  `student_name` varchar(500) NOT NULL,
  `student_image` varchar(500) NOT NULL,
  `father_name` varchar(500) NOT NULL,
  `mother_name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile_no` varchar(500) NOT NULL,
  `adhaar` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `pickup_point` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`student_id`, `student_name`, `student_image`, `father_name`, `mother_name`, `address`, `mobile_no`, `adhaar`, `gender`, `dob`, `pickup_point`, `sid`) VALUES
('15', 'NAVAL RAVIKANT', 'Screenshot_(2).png', 'RAMAN NAVAL', 'PHULAN RANI', 'KANCHRAPARA', '987546321', '985674258631', 'Male', '2022-02-04', 3, 4),
('20', 'Jack', 'Screenshot_(12).png', 'Jhon', 'jhil', 'VILL:LAUPALA,P.O-SUBARNAPUR,P.S-HARINGHATA,DIST-NADIA,STATE-WEST BENGAL', '987546321', '985674258631', 'Male', '2022-02-18', 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fee_receipts`
--
ALTER TABLE `fee_receipts`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `ifeesetup`
--
ALTER TABLE `ifeesetup`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee_receipts`
--
ALTER TABLE `fee_receipts`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ifeesetup`
--
ALTER TABLE `ifeesetup`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
