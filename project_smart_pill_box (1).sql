-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2019 at 03:17 PM
-- Server version: 10.1.37-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_smart_pill_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `M_consume`
--

CREATE TABLE `M_consume` (
  `id` int(11) NOT NULL,
  `med_name` varchar(255) NOT NULL,
  `consume_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `M_consume`
--

INSERT INTO `M_consume` (`id`, `med_name`, `consume_time`) VALUES
(1066, 'sixer 300 mg', '16:05:42'),
(1067, '', '16:10:32'),
(1068, '', '16:10:34'),
(1069, 'sixer 300 mg', '16:10:37'),
(1070, '', '16:10:40'),
(1071, '', '16:10:41'),
(1072, '', '16:10:42'),
(1073, 'Peracitamol 150 mg', '17:05:52'),
(1074, '', '14:20:58'),
(1075, '', '14:21:02'),
(1076, 'Peracitamol 150 mg', '14:33:35'),
(1077, 'Peracitamol 150 mg', '14:57:34'),
(1078, '', '15:01:09'),
(1079, '', '15:01:10'),
(1080, '', '15:01:11'),
(1081, '', '15:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `patient_id` varchar(20) NOT NULL,
  `patient_name` varchar(25) NOT NULL,
  `p_gender` varchar(10) NOT NULL,
  `p_age` int(5) NOT NULL,
  `p_disease` varchar(30) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `dr_name` varchar(25) NOT NULL,
  `prescription_id` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`patient_id`, `patient_name`, `p_gender`, `p_age`, `p_disease`, `p_address`, `dr_name`, `prescription_id`, `date`) VALUES
('GNIT/2016/0618', 'Diptamoy Maity', 'Male', 23, 'Fever', 'Kolkata', 'Dr. Amit Biswas', '4456ygu', '17/07/19');

-- --------------------------------------------------------

--
-- Table structure for table `pill_box`
--

CREATE TABLE `pill_box` (
  `id` int(10) NOT NULL,
  `prescription_id` varchar(20) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `day` int(11) NOT NULL,
  `time` varchar(10) NOT NULL,
  `doases` varchar(15) NOT NULL,
  `pin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pill_box`
--

INSERT INTO `pill_box` (`id`, `prescription_id`, `medicine_name`, `day`, `time`, `doases`, `pin`) VALUES
(15, '', 'Peracitamol 150 mg', 2, '14:59:29', 'After Meal', 1),
(16, '', 'sixer 300 mg', 2, '14:20:00', '', 2),
(17, '', 'calpol ', 2, '14:20:25', 'After Meal', 3),
(18, '', 'zintac', 2, '14:20:55', 'Before Meal', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `M_consume`
--
ALTER TABLE `M_consume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `pill_box`
--
ALTER TABLE `pill_box`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prep_id` (`prescription_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `M_consume`
--
ALTER TABLE `M_consume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1082;
--
-- AUTO_INCREMENT for table `pill_box`
--
ALTER TABLE `pill_box`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
