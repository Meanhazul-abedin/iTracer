-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2020 at 08:45 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iTracer`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `id` int(11) NOT NULL,
  `projectID` varchar(255) NOT NULL,
  `issueID` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `tester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`id`, `projectID`, `issueID`, `developer`, `tester`) VALUES
(16, 'Project Id: 1245', 'Issue Id: 33', 'Developer: Karim', 'Tester: Christie'),
(17, 'Project Id: 4221', 'Issue Id: 93', 'Developer: North', 'Tester: Adam'),
(18, 'Project Id: 1664', 'Issue Id: 64', 'Developer: Ismail', 'Tester: Khan'),
(19, ' ', ' ', ' ', ' '),
(20, ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `done`
--

CREATE TABLE `done` (
  `id` int(11) NOT NULL,
  `projectID` varchar(255) NOT NULL,
  `issueID` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `tester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `done`
--

INSERT INTO `done` (`id`, `projectID`, `issueID`, `developer`, `tester`) VALUES
(11, 'Project Id: 1111', 'Issue Id: 16', 'Developer: Dan Brown', 'Tester: Nirmal Chakma'),
(12, 'Project Id: 153', 'Issue Id: 6', 'Developer: Hima Rahman', 'Tester: Ahmed Faruk'),
(13, 'Project Id: 7845', 'Issue Id: 61', 'Developer: June Richard', 'Tester:  Mili Akter'),
(14, ' ', ' ', ' ', ' '),
(15, ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `inprogress`
--

CREATE TABLE `inprogress` (
  `id` int(11) NOT NULL,
  `projectID` varchar(255) NOT NULL,
  `issueID` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `tester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inprogress`
--

INSERT INTO `inprogress` (`id`, `projectID`, `issueID`, `developer`, `tester`) VALUES
(6, 'Project Id: 7412', 'Issue Id: 45', 'Developer: Mirza', 'Tester: Rehnuma Rinku'),
(7, 'Project Id; 7412', 'Issue Id: 51', 'Developer: Fouzia', 'Tester: Tasfir'),
(8, 'Project Id: 4125', 'Issue Id: 14', 'Developer: Paul', 'Tester: Mary'),
(9, ' ', ' ', ' ', ' '),
(10, ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `overview_projects`
--

CREATE TABLE `overview_projects` (
  `logo` varchar(255) NOT NULL,
  `projectID` int(11) NOT NULL,
  `project` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `features` int(11) NOT NULL,
  `issues` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overview_projects`
--

INSERT INTO `overview_projects` (`logo`, `projectID`, `project`, `status`, `developer`, `language`, `features`, `issues`, `time`) VALUES
('EA', 1, 'Akash App UI', 'In Progress', 'Tausif Jaman', 'Angular', 46, 2, '3 Months'),
('MA', 2, 'Monster Admin', 'Done', 'Shuvo Abrar', 'Vue JS', 146, 16, '6 Months and 20 days');

-- --------------------------------------------------------

--
-- Table structure for table `rejected`
--

CREATE TABLE `rejected` (
  `id` int(11) NOT NULL,
  `projectID` varchar(255) NOT NULL,
  `issueID` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `tester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rejected`
--

INSERT INTO `rejected` (`id`, `projectID`, `issueID`, `developer`, `tester`) VALUES
(1, '8785', '45', 'Karim ', 'Christie'),
(15, ' ', ' ', ' ', ' '),
(14, ' ', ' ', ' ', ' '),
(15, ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `projectID` varchar(255) NOT NULL,
  `issueID` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `tester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `projectID`, `issueID`, `developer`, `tester`) VALUES
(1, 'Project Id: 8796', 'Issue Id: 25', 'Developer: Karan', 'Tester: Laura'),
(2, 'Project Id: 3365', 'Issue Id: 46', 'Developer: Kate', 'Tester: Alam'),
(3, 'Project Id: 223', 'Issue Id: 92', 'Developer: Sabbir', 'Tester: Akash'),
(4, ' ', ' ', ' ', ' '),
(5, ' ', ' ', ' ', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `overview_projects`
--
ALTER TABLE `overview_projects`
  ADD PRIMARY KEY (`projectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `overview_projects`
--
ALTER TABLE `overview_projects`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
