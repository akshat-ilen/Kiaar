-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2016 at 06:37 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kiaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `Activity_id` int(10) NOT NULL,
  `Activity_type_id` int(10) NOT NULL COMMENT 'this is fk of pk in Activity_type.Activity_type_id',
  `Activity_amount` int(10) NOT NULL,
  `Start_date` date NOT NULL,
  `Expected_end_date` date DEFAULT NULL,
  `Actual_end_date` date DEFAULT NULL,
  `Remark` varchar(20) NOT NULL,
  `Creation_date` date NOT NULL,
  `Plot_id` int(10) NOT NULL COMMENT 'This is\nthe FK of PK plot.plot_id',
  `Area` int(11) NOT NULL,
  `Crop_variety_id` int(10) NOT NULL COMMENT 'This is the FK of PK crop_variety.variety_id',
  `Employee_id` int(10) unsigned DEFAULT NULL COMMENT 'This is the FK of PK Employee.Employee_id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activity_type`
--

CREATE TABLE IF NOT EXISTS `activity_type` (
  `Activity_type_id` int(10) NOT NULL,
  `Activity_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_type`
--

INSERT INTO `activity_type` (`Activity_type_id`, `Activity_name`) VALUES
(1, 'Land Preparation Disc Harrowing'),
(2, 'Ploughing'),
(3, 'Harrowing'),
(4, 'Opening of ridges and furrows'),
(5, 'Intercultivation'),
(6, 'Hand Weeding'),
(7, 'Herbicides Spraying'),
(8, 'Insecticides'),
(9, 'Fertilizers Urea'),
(10, 'Fertilizers DAP'),
(11, 'Fertilizers SSP'),
(12, 'Fertilizers MOP'),
(13, 'Fertilizers 19 19 19'),
(14, 'Fertilizers 10 26 26'),
(15, 'Fertilizers 12 32 16'),
(16, 'Harvesting'),
(17, 'Threshing'),
(18, 'Transporting'),
(19, 'Yield'),
(20, 'Trash Spreading');

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE IF NOT EXISTS `crop` (
  `Crop_id` int(10) NOT NULL,
  `Crop_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`Crop_id`, `Crop_name`) VALUES
(1, 'Sugarcane'),
(2, 'Maize'),
(3, 'Turmeric'),
(4, 'Soyabean'),
(5, 'BengalGram'),
(6, 'Wheat'),
(7, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `crop_planted_plot`
--

CREATE TABLE IF NOT EXISTS `crop_planted_plot` (
  `Cpp_id` int(11) NOT NULL,
  `Plot_id` int(11) NOT NULL COMMENT 'FK of PK Plot_id',
  `Planting_date` date NOT NULL,
  `Tray_id` int(11) NOT NULL,
  `No_seed_generated` int(11) NOT NULL,
  `Heating_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crop_variety`
--

CREATE TABLE IF NOT EXISTS `crop_variety` (
  `Variety_id` int(10) NOT NULL,
  `Variety_name` varchar(20) NOT NULL,
  `Crop_id` int(10) NOT NULL COMMENT 'This is\nthe FK of PK crop.crop_id'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop_variety`
--

INSERT INTO `crop_variety` (`Variety_id`, `Variety_name`, `Crop_id`) VALUES
(1, 'C0 86032', 1),
(2, 'C0C 671', 1),
(3, 'Others', 1),
(4, 'Mansanto', 2),
(5, 'Deccan', 2),
(6, 'Dkc 916', 2),
(7, 'JS 9305', 4),
(8, 'DS 21', 4),
(9, 'JS 3359', 4),
(10, 'A 1', 5),
(11, 'Selam', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee_account`
--

CREATE TABLE IF NOT EXISTS `employee_account` (
  `Employee_id` int(15) unsigned NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Mname` varchar(30) DEFAULT NULL,
  `Lname` varchar(30) NOT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Date_of_joining` date DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Type` char(1) NOT NULL,
  `Contact_no` int(11) unsigned DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Qid` int(20) DEFAULT NULL COMMENT 'this is the fk of pk Question_Qid',
  `Sec_answer` varchar(30) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This particular table contains information of all the\nemployees.';

--
-- Dumping data for table `employee_account`
--

INSERT INTO `employee_account` (`Employee_id`, `Fname`, `Mname`, `Lname`, `Date_of_birth`, `Date_of_joining`, `Gender`, `Address`, `Type`, `Contact_no`, `Email`, `Password`, `Qid`, `Sec_answer`, `Status`) VALUES
(100, 'Sundara', 'B', 'Poojari', '2015-12-01', '2015-12-17', 'm', 'Sameerwadi', 'a', 1236547890, 'sundara@gmail.com', '77e2edcc9b40441200e31dc57dbb8829', NULL, NULL, NULL),
(101, 'Ashok', NULL, 'Jambagi', NULL, NULL, NULL, NULL, 's', NULL, 'ashok@gmail.com', '28e88cc83e1b26a74a81cc8e72382d5a', NULL, NULL, NULL),
(102, 'MALLAPPA', NULL, 'BIRADAR', NULL, NULL, NULL, NULL, 's', NULL, 'mhbiradar71@gmail.com', '4a3628914cc60a75e7ccd00f0319f565', NULL, NULL, NULL),
(103, 'PURUSHOTTAM', NULL, 'MANDI', NULL, NULL, NULL, NULL, 's', NULL, 'prmandi68@gmail.com', 'c251262095f99893238093842a05679d', NULL, NULL, NULL),
(104, 'BASAVARAJ', 'YALLAPPA', 'KONGAWAD', '1974-07-22', '2003-02-01', 'm', 'MAHALINGPUR', 's', 4294967295, 'kongawadby@gmail.com', 'ff0e59cb475ce7b10f40b9e420c92dbd', NULL, NULL, NULL),
(111, 'Mahantesh', NULL, 'Hiremath', NULL, NULL, NULL, NULL, 's', NULL, 'hiremath.mahantesh612@gmail.com', '44eb55eef77d762b1a9aa179075c222e', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `farm`
--

CREATE TABLE IF NOT EXISTS `farm` (
  `Farm_id` int(10) unsigned NOT NULL,
  `Farm_name` varchar(30) NOT NULL,
  `Incharge` int(20) unsigned NOT NULL COMMENT 'This is the FK of PK employee.Employee_id'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farm`
--

INSERT INTO `farm` (`Farm_id`, `Farm_name`, `Incharge`) VALUES
(1, 'Bisnal', 101),
(2, 'Nagaral', 101),
(3, 'Keasaraoppa', 101);

-- --------------------------------------------------------

--
-- Table structure for table `flask`
--

CREATE TABLE IF NOT EXISTS `flask` (
  `Flask_id` int(10) NOT NULL,
  `Create_date` date NOT NULL,
  `End_date` date DEFAULT NULL,
  `Incharge_id` int(10) unsigned NOT NULL COMMENT 'This is the FK of PK employee.employee_id',
  `Specie_type` int(10) NOT NULL COMMENT 'Thisis the FK of PK Crop_variety Variety_id',
  `No_flask` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flask_stage_mapping`
--

CREATE TABLE IF NOT EXISTS `flask_stage_mapping` (
  `Flask_id` int(11) NOT NULL,
  `Stage_id` int(11) NOT NULL,
  `Entering_date` date NOT NULL,
  `Leaving_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `irrigation`
--

CREATE TABLE IF NOT EXISTS `irrigation` (
  `Irrigation_id` int(10) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `irrigation`
--

INSERT INTO `irrigation` (`Irrigation_id`, `Type`) VALUES
(1, 'Surface Drip'),
(2, 'Sub Surface Drip'),
(3, 'Flooding');

-- --------------------------------------------------------

--
-- Table structure for table `orchad`
--

CREATE TABLE IF NOT EXISTS `orchad` (
  `Orchad_id` int(20) NOT NULL,
  `Lease_start_date` date NOT NULL,
  `Lease_amount` int(10) NOT NULL,
  `Tenant` varchar(20) NOT NULL,
  `Lease_duration` int(11) NOT NULL,
  `Revenue_generated` int(6) NOT NULL,
  `Inputs_given` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plot`
--

CREATE TABLE IF NOT EXISTS `plot` (
  `Plot_id` int(11) NOT NULL,
  `Plot_no` varchar(20) NOT NULL,
  `Farm_id` int(11) unsigned NOT NULL COMMENT 'This is the FK of PK farm.farm_id',
  `Area` int(11) NOT NULL,
  `Soil_id` int(11) unsigned NOT NULL COMMENT 'This is the FK of PK soil.soil_id',
  `Irrigation_id` int(20) NOT NULL COMMENT 'this yhe fk of pk irrigation _id'
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plot`
--

INSERT INTO `plot` (`Plot_id`, `Plot_no`, `Farm_id`, `Area`, `Soil_id`, `Irrigation_id`) VALUES
(1, 'D1', 1, 65, 6, 1),
(2, 'D2', 1, 8, 6, 1),
(3, 'D3', 1, 35, 6, 1),
(4, 'D4', 1, 10, 6, 1),
(5, 'D5', 1, 5, 6, 1),
(6, 'D6', 1, 10, 6, 1),
(7, 'D7', 1, 15, 6, 1),
(8, 'D8', 1, 23, 6, 1),
(9, 'D9', 1, 20, 6, 1),
(10, 'D10', 1, 20, 6, 1),
(11, 'E1', 1, 40, 6, 1),
(12, 'E2', 1, 30, 6, 1),
(13, 'E3', 1, 32, 6, 1),
(18, 'E4', 1, 27, 6, 1),
(19, 'E5', 1, 35, 6, 1),
(20, 'E6', 1, 10, 6, 1),
(21, 'E7', 1, 80, 6, 1),
(22, 'E8', 1, 5, 6, 1),
(23, 'E9', 1, 60, 6, 1),
(24, 'F1', 1, 80, 6, 1),
(25, 'F2', 1, 40, 6, 1),
(26, 'F3', 1, 26, 6, 1),
(27, 'A1', 2, 30, 1, 2),
(28, 'A2', 2, 35, 1, 2),
(29, 'A3', 2, 67, 2, 2),
(30, 'A4', 2, 55, 1, 2),
(31, 'A5', 2, 38, 1, 2),
(32, 'A6', 2, 52, 1, 2),
(33, 'A7', 2, 35, 1, 2),
(34, 'A8', 2, 30, 3, 2),
(35, 'B1', 2, 50, 5, 2),
(36, 'B2', 2, 67, 3, 2),
(37, 'B3', 2, 4, 3, 2),
(39, 'B4', 2, 46, 3, 2),
(40, 'C1', 2, 10, 1, 2),
(41, 'C2', 2, 40, 6, 2),
(42, 'C3', 2, 84, 4, 2),
(43, 'C4', 2, 85, 3, 2),
(44, 'C5', 2, 40, 3, 2),
(45, 'C6', 2, 48, 3, 2),
(46, 'C7', 2, 71, 5, 2),
(47, 'D1', 2, 24, 3, 2),
(48, 'D2', 2, 40, 6, 2),
(49, 'D3', 2, 82, 4, 2),
(50, 'D4', 2, 77, 3, 2),
(51, 'D5', 2, 42, 1, 2),
(52, 'D6', 2, 39, 5, 2),
(53, 'D7', 2, 40, 5, 2),
(54, 'D8', 2, 19, 5, 2),
(55, 'E1', 2, 45, 3, 2),
(56, 'E2', 2, 76, 3, 2),
(57, 'E3', 2, 110, 3, 2),
(58, 'E4', 2, 74, 6, 2),
(59, 'E5', 2, 100, 6, 2),
(60, 'F1', 2, 70, 3, 2),
(61, 'F2', 2, 45, 3, 2),
(62, 'F3', 2, 55, 3, 2),
(63, 'F4', 2, 48, 6, 2),
(64, 'F5', 2, 125, 6, 2),
(65, 'G1', 2, 65, 3, 2),
(66, 'G2', 2, 80, 6, 2),
(67, 'G3', 2, 85, 1, 2),
(68, 'G4', 2, 90, 1, 2),
(69, 'H1', 2, 100, 7, 2),
(70, 'H2', 2, 105, 6, 2),
(71, 'H3', 2, 110, 5, 2),
(72, 'H4', 2, 60, 7, 2),
(73, 'H5', 2, 65, 7, 2),
(74, 'H6', 2, 80, 3, 2),
(75, 'H7', 2, 70, 3, 2),
(76, 'H8', 2, 30, 3, 2),
(77, 'A1', 3, 23, 3, 2),
(78, 'A2', 3, 32, 7, 2),
(79, 'A3', 3, 35, 7, 2),
(80, 'A4', 3, 30, 3, 3),
(81, 'A5', 3, 50, 3, 3),
(82, 'A6', 3, 25, 3, 3),
(83, 'A7', 3, 20, 3, 3),
(84, 'B1', 3, 45, 7, 3),
(85, 'B2', 3, 25, 7, 3),
(86, 'B3', 3, 40, 7, 3),
(87, 'B4', 3, 40, 7, 3),
(88, 'B5', 3, 28, 7, 3),
(89, 'B6', 3, 20, 7, 3),
(90, 'C1', 3, 45, 3, 3),
(91, 'C2', 3, 25, 3, 3),
(92, 'C3', 3, 33, 3, 3),
(93, 'C4', 3, 25, 3, 3),
(94, 'C5', 3, 35, 3, 3),
(95, 'C6', 3, 30, 3, 3),
(96, 'C7', 3, 60, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `Expt_no` varchar(20) NOT NULL,
  `Project_id` int(2) NOT NULL,
  `Expt_name` varchar(20) NOT NULL,
  `Project_leader` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_mapping`
--

CREATE TABLE IF NOT EXISTS `project_mapping` (
  `Project_id` int(11) NOT NULL COMMENT 'this is fk of pk in project.project_id',
  `Employee_id` int(11) NOT NULL COMMENT 'this is fk of pk in employee_acc.employee_id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `Security_question` varchar(100) NOT NULL,
  `Qid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seed_given_farmer`
--

CREATE TABLE IF NOT EXISTS `seed_given_farmer` (
  `Sgf_id` int(11) NOT NULL,
  `Farmer_id` int(15) unsigned NOT NULL COMMENT 'FK of PK Employee_account Employee_id',
  `No_seeds` int(11) NOT NULL,
  `Giving_date` date NOT NULL,
  `Revenue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seed_planted_greenhouse`
--

CREATE TABLE IF NOT EXISTS `seed_planted_greenhouse` (
  `Spg_id` int(11) NOT NULL,
  `No_planted` int(11) NOT NULL,
  `No_generated` int(11) NOT NULL,
  `Planting_date` date NOT NULL,
  `Generation_date` date NOT NULL,
  `Sgf_id` int(11) NOT NULL COMMENT 'FK of PK Seed_given_farmer',
  `Percent_generated` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soil`
--

CREATE TABLE IF NOT EXISTS `soil` (
  `Soil_id` int(10) unsigned NOT NULL,
  `Soil_type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil`
--

INSERT INTO `soil` (`Soil_id`, `Soil_type`) VALUES
(1, 'Sandy'),
(2, 'Deep Black'),
(3, 'Black'),
(4, 'Shallow Black'),
(5, 'Loamy'),
(6, 'Light'),
(7, 'Red'),
(9, 'Mixed');

-- --------------------------------------------------------

--
-- Table structure for table `soil_sample`
--

CREATE TABLE IF NOT EXISTS `soil_sample` (
  `Ss_id` int(11) NOT NULL,
  `Plot_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Chemical_input_details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `Stage_id_no` int(10) NOT NULL,
  `Stage_name` varchar(20) NOT NULL,
  `Stage_process_defination` varchar(100) DEFAULT NULL,
  `Stage_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `Source_id` int(11) NOT NULL COMMENT 'this is fk of pk in stock_mgmt.source_id',
  `Amount_of_usage` int(11) NOT NULL,
  `Date_of_usage` date NOT NULL,
  `Activity_used` varchar(20) NOT NULL,
  `Plot_used` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_mgmt`
--

CREATE TABLE IF NOT EXISTS `stock_mgmt` (
  `Source` varchar(11) NOT NULL,
  `Name_of_stock` varchar(11) NOT NULL,
  `Quantity_of_stock` int(11) NOT NULL,
  `Date_of_arrival` date NOT NULL,
  `Source_id` int(11) NOT NULL,
  `Cost_of_buying` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tray`
--

CREATE TABLE IF NOT EXISTS `tray` (
  `Tray_id` int(11) NOT NULL,
  `Tray_no` int(8) NOT NULL,
  `Incharge_id` int(10) unsigned NOT NULL COMMENT 'this is the fk of pk employee employee_id',
  `Species_id` int(10) NOT NULL COMMENT 'This isthe FK of PK Crop_variety Variety_id',
  `No_of_plantlets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Activity_id`), ADD KEY `Plot_id` (`Plot_id`), ADD KEY `Crop_variety_id` (`Crop_variety_id`), ADD KEY `Employee_id` (`Employee_id`), ADD KEY `Activity_id` (`Activity_id`), ADD KEY `Activity_type_id` (`Activity_type_id`), ADD KEY `Activity_type_id_2` (`Activity_type_id`), ADD KEY `Activity_type_id_3` (`Activity_type_id`);

--
-- Indexes for table `activity_type`
--
ALTER TABLE `activity_type`
  ADD PRIMARY KEY (`Activity_type_id`);

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`Crop_id`), ADD KEY `Crop_id` (`Crop_id`);

--
-- Indexes for table `crop_planted_plot`
--
ALTER TABLE `crop_planted_plot`
  ADD PRIMARY KEY (`Cpp_id`), ADD KEY `Plot_id_2` (`Plot_id`), ADD KEY `Plot_id` (`Plot_id`);

--
-- Indexes for table `crop_variety`
--
ALTER TABLE `crop_variety`
  ADD PRIMARY KEY (`Variety_id`), ADD KEY `Crop_id` (`Crop_id`), ADD KEY `Variety_id` (`Variety_id`), ADD KEY `Crop_id_2` (`Crop_id`);

--
-- Indexes for table `employee_account`
--
ALTER TABLE `employee_account`
  ADD PRIMARY KEY (`Employee_id`), ADD UNIQUE KEY `Employee_id` (`Employee_id`), ADD KEY `Qid` (`Qid`);

--
-- Indexes for table `farm`
--
ALTER TABLE `farm`
  ADD PRIMARY KEY (`Farm_id`), ADD KEY `Incharge` (`Incharge`), ADD KEY `Farm_id` (`Farm_id`), ADD KEY `Incharge_2` (`Incharge`);

--
-- Indexes for table `flask`
--
ALTER TABLE `flask`
  ADD PRIMARY KEY (`Flask_id`), ADD KEY `Incharge_id` (`Incharge_id`), ADD KEY `Specie_type` (`Specie_type`), ADD KEY `Container_no` (`Flask_id`), ADD KEY `Stage_no_2` (`Incharge_id`,`Specie_type`), ADD KEY `Container_no_2` (`Flask_id`);

--
-- Indexes for table `flask_stage_mapping`
--
ALTER TABLE `flask_stage_mapping`
  ADD PRIMARY KEY (`Flask_id`,`Stage_id`);

--
-- Indexes for table `irrigation`
--
ALTER TABLE `irrigation`
  ADD PRIMARY KEY (`Irrigation_id`);

--
-- Indexes for table `orchad`
--
ALTER TABLE `orchad`
  ADD PRIMARY KEY (`Orchad_id`);

--
-- Indexes for table `plot`
--
ALTER TABLE `plot`
  ADD PRIMARY KEY (`Plot_id`), ADD KEY `Farm_id` (`Farm_id`), ADD KEY `Soil_id` (`Soil_id`), ADD KEY `Farm_id_2` (`Farm_id`), ADD KEY `Plot_id` (`Plot_id`), ADD KEY `Farm_id_3` (`Farm_id`), ADD KEY `Irrigation_id` (`Irrigation_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Project_id`);

--
-- Indexes for table `project_mapping`
--
ALTER TABLE `project_mapping`
  ADD KEY `Expt_no` (`Project_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Qid`), ADD KEY `Security_question` (`Security_question`), ADD KEY `Security_question_2` (`Security_question`), ADD KEY `Security_question_3` (`Security_question`), ADD KEY `Security_question_4` (`Security_question`), ADD KEY `Security_question_5` (`Security_question`), ADD KEY `Qid` (`Qid`), ADD KEY `Security_question_6` (`Security_question`), ADD KEY `Qid_2` (`Qid`), ADD KEY `Qid_3` (`Qid`), ADD KEY `Security_question_7` (`Security_question`);

--
-- Indexes for table `seed_given_farmer`
--
ALTER TABLE `seed_given_farmer`
  ADD PRIMARY KEY (`Sgf_id`), ADD KEY `Farmer_id` (`Farmer_id`), ADD KEY `Farmer_id_2` (`Farmer_id`), ADD KEY `Farmer_id_3` (`Farmer_id`);

--
-- Indexes for table `seed_planted_greenhouse`
--
ALTER TABLE `seed_planted_greenhouse`
  ADD PRIMARY KEY (`Spg_id`), ADD KEY `Sgf_id` (`Sgf_id`);

--
-- Indexes for table `soil`
--
ALTER TABLE `soil`
  ADD PRIMARY KEY (`Soil_id`), ADD KEY `Soil_id` (`Soil_id`), ADD KEY `Soil_id_2` (`Soil_id`);

--
-- Indexes for table `soil_sample`
--
ALTER TABLE `soil_sample`
  ADD PRIMARY KEY (`Ss_id`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`Stage_id_no`), ADD UNIQUE KEY `Stage_process_definition` (`Stage_name`), ADD KEY `Stage_id_no` (`Stage_id_no`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Source_id`), ADD KEY `Source_id` (`Source_id`);

--
-- Indexes for table `stock_mgmt`
--
ALTER TABLE `stock_mgmt`
  ADD PRIMARY KEY (`Source_id`);

--
-- Indexes for table `tray`
--
ALTER TABLE `tray`
  ADD PRIMARY KEY (`Tray_id`), ADD UNIQUE KEY `Tray_no` (`Tray_no`), ADD KEY `Species_id` (`Species_id`), ADD KEY `Species_id_2` (`Species_id`), ADD KEY `Incharge_id` (`Incharge_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `Activity_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `activity_type`
--
ALTER TABLE `activity_type`
  MODIFY `Activity_type_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `Crop_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `crop_variety`
--
ALTER TABLE `crop_variety`
  MODIFY `Variety_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `farm`
--
ALTER TABLE `farm`
  MODIFY `Farm_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `flask`
--
ALTER TABLE `flask`
  MODIFY `Flask_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `irrigation`
--
ALTER TABLE `irrigation`
  MODIFY `Irrigation_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `plot`
--
ALTER TABLE `plot`
  MODIFY `Plot_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Qid` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seed_given_farmer`
--
ALTER TABLE `seed_given_farmer`
  MODIFY `Sgf_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seed_planted_greenhouse`
--
ALTER TABLE `seed_planted_greenhouse`
  MODIFY `Spg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `soil`
--
ALTER TABLE `soil`
  MODIFY `Soil_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `soil_sample`
--
ALTER TABLE `soil_sample`
  MODIFY `Ss_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `Stage_id_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_mgmt`
--
ALTER TABLE `stock_mgmt`
  MODIFY `Source_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tray`
--
ALTER TABLE `tray`
  MODIFY `Tray_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
ADD CONSTRAINT `Plot_crop_mapping_ibfk_1` FOREIGN KEY (`Activity_type_id`) REFERENCES `activity_type` (`Activity_type_id`),
ADD CONSTRAINT `Plot_crop_mapping_ibfk_2` FOREIGN KEY (`Plot_id`) REFERENCES `plot` (`Plot_id`),
ADD CONSTRAINT `Plot_crop_mapping_ibfk_3` FOREIGN KEY (`Crop_variety_id`) REFERENCES `crop_variety` (`Variety_id`),
ADD CONSTRAINT `Plot_crop_mapping_ibfk_4` FOREIGN KEY (`Employee_id`) REFERENCES `employee_account` (`Employee_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
