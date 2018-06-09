-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 04:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `Cand_id` int(11) NOT NULL,
  `job_id` varchar(11) NOT NULL,
  `FName` varchar(67) NOT NULL,
  `LName` varchar(67) NOT NULL,
  `Qualification` varchar(45) NOT NULL,
  `Experience` varchar(34) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Pnone_no` int(76) NOT NULL,
  `Gender` varchar(34) NOT NULL,
  `Address` varchar(76) NOT NULL,
  `Resume` varchar(100) NOT NULL,
  `Status` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`Cand_id`, `job_id`, `FName`, `LName`, `Qualification`, `Experience`, `Email`, `Pnone_no`, `Gender`, `Address`, `Resume`, `Status`) VALUES
(1, 'N12', 'jas', 'singh', '4 years', 'btech', 'reh@gmail.com', 66788, 'Male', 'dbwbiwb', 'wjhebuwfb', 1),
(6, '629599', 'jas', 'jb', 'kn', '4 years', 'rehlan@gmail.com', 67565, 'male', 'fgvhjbkjn', 'wjhebuwfb', 1),
(7, 'J123', 'jaswant', 'singh', 'btech', 'jvj', 'rehlan1@gmail.com', 8687676, 'male', 'hihiuh', 'wjhebuwfb', 1),
(8, '555376', 'Manpreet', 'kaur', 'masters', '4 years', 'man@gmail.com', 6327, 'female', 'ghgfdw', 'wjhebuwfb', 1),
(9, '123', 'Amninder', 'Kaur', 'MICT', '2', 'amninderkaur11@gmail.com', 8372764, 'female', 'Melbourne', 'wjhebuwfb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_detail`
--

CREATE TABLE `job_detail` (
  `job_id` varchar(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_dis` varchar(255) NOT NULL,
  `job_cat` varchar(45) NOT NULL,
  `company` varchar(255) NOT NULL,
  `salary` double NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Prefered_salary` int(254) NOT NULL,
  `Experience` int(255) NOT NULL,
  `Work_Type` varchar(245) NOT NULL,
  `Created_By` varchar(255) NOT NULL,
  `Updated_By` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_detail`
--

INSERT INTO `job_detail` (`job_id`, `job_title`, `job_dis`, `job_cat`, `company`, `salary`, `Location`, `Prefered_salary`, `Experience`, `Work_Type`, `Created_By`, `Updated_By`, `Status`) VALUES
('123', 'analyst', 'The objective of the role is to minimise downtime across the organisationâ€™s infrastructure, including overseeing day-to-day Incident, Problem resolution affecting the Infrastructure of Pact Group, as well as Service Improvement Programs. The BAU Infrast', 'IT Department ', 'Telstra', 20000, 'melbourne,vic', 277367, 3, 'permanent ', '', '', 1),
('243', 'Manager', 'As the General Manager you will be responsible for maximising the performance and effectiveness of the business teams. As part of the senior leadership group in this property juggernaut you will become an integral part in the companyâ€™s ongoing success. ', 'Faculty', 'Teachiing', 290000, 'melbourne,vic', 300000, 5, 'full time', '', '', 1),
('555376', 'Director', 'This position is suited to an experienced Director, with the ability to add significant value to the Board. Your expertise may include a background in tourism, the arts, legal, commercial property, finance, marketing and communications. Exceptional interp', 'supervisor   ', 'Telstra', 20000, 'Singapore', 0, 4, 'permanent   ', '', '', 1),
('629599', 'Trading Manager â€“ Grocery/Dairy', 'As Trading Manager â€“ Grocery/Dairy, you will: lead, coach and develop your teamrecognise, reward and celebrate successestake a team approach to meet sales targets, cost control and restoringinspire customers through presentation, merchandising', '0   ', 'coles', 233334, 'melbourne,vic', 0, 6, 'permanent   ', '', '', 1),
('73784687', 'Technician', 'Our Business Partner is a leading Tier 1 Construction company who requires a Project Engineer/Site Supervisor who will be required to lead a team of sub-contractors and trades to assist in the completion of the industrial construction site.', 'computer ', 'Vodafone', 20000, 'Singapore', 0, 3, 'permanent ', '', '', 1),
('J123', 'Network', 'The objective of the role is to minimise downtime across the organisationâ€™s infrastructure, including overseeing day-to-day Incident, Problem resolution affecting the Infrastructure of Pact Group, as well as Service Improvement Programs. The BAU Infrast', 'IT Department    ', 'Telstra', 2000, 'Singapore', 0, 3, 'permanent      ', '', '', 1),
('man123', 'Network Admin', 'Our client requires an experienced Senior > Associate Electrical Engineer with sound knowledge of the Sydney market to join their group as Electrical Team/Pod Leader.', 'computer ', 'Telstra', 23344, 'Singapore', 565646, 4, 'permanent ', '', '', 1),
('N12', 'Deputy Manager', 'We are currently looking for a Deputy Programme Manager based at our Eagle Farm site working within our Protected Vehicles business.  This position is focused on supporting the Program Manager to provide support to the implementation of measures and contr', '0    ', 'Tesla', 2000, 'Melbourne', 0, 4, 'permanent    ', '', '', 1),
('N123', 'technician', 'The purpose of the role is to drive projects across the Directorate ensuring project scheduling and management, dependencies management, costs/ benefits realisation and tracking, project framework and governance.', '0 IT Department  ', 'Vodafone', 2000, 'Melbourne', 0, 4, 'Full time ', '', '', 1),
('n22', 'data manager', 'We are currently looking for a Deputy Programme Manager based at our Eagle Farm site working within our Protected Vehicles business.  This position is focused on supporting the Program Manager to provide support to the implementation of measures and contr', 'Data ', 'ahsd', 24998, 'Singapore', 0, 4, 'permanent ', '', '', 1),
('ss123', 'system analyst', 'This position is suited to an experienced Director, with the ability to add significant value to the Board. Your expertise may include a background in tourism, the arts, legal, commercial property, finance, marketing and communications. Exceptional interp', '3  ', 'Vodafone', 3222, 'Melbourne', 0, 4, 'Full time ', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `FName` varchar(256) NOT NULL,
  `LName` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `User_pswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `FName`, `LName`, `Email`, `User_pswd`) VALUES
(8, 'ram', 'singh', 'rehlan@gmail.com', 'c70903749ed556d98a4966fdfb9ccd04'),
(9, 'jas', 'singh', 'rehlan1@gmail.com', 'c70903749ed556d98a4966fdfb9ccd04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`Cand_id`),
  ADD KEY `jobid` (`job_id`);

--
-- Indexes for table `job_detail`
--
ALTER TABLE `job_detail`
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `Cand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `jobid` FOREIGN KEY (`job_id`) REFERENCES `job_detail` (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
