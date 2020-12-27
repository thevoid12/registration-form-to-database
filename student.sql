-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 10:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitted_department`
--

CREATE TABLE `admitted_department` (
  `id` int(11) NOT NULL,
  `department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admitted_department`
--

INSERT INTO `admitted_department` (`id`, `department`) VALUES
(1, ' computer science'),
(1, ' computer science'),
(1, ' computer science'),
(1, ' comp');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_master`
--

CREATE TABLE `candidate_master` (
  `id` int(11) NOT NULL,
  `candidate_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate_master`
--

INSERT INTO `candidate_master` (`id`, `candidate_name`) VALUES
(0, ' vinod'),
(2, ' hi'),
(1, ' vinod'),
(1, ' vinod'),
(1, ' vinod'),
(1, ' uma');

-- --------------------------------------------------------

--
-- Table structure for table `financial_master`
--

CREATE TABLE `financial_master` (
  `id` int(11) NOT NULL,
  `catogory_fees` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `financial_master`
--

INSERT INTO `financial_master` (`id`, `catogory_fees`) VALUES
(1, ' 5'),
(1, ' 5'),
(1, ' 5'),
(1, ' 3');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_master`
--

CREATE TABLE `hostel_master` (
  `id` int(11) NOT NULL,
  `hostel_block` varchar(200) NOT NULL,
  `roomtype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_master`
--

INSERT INTO `hostel_master` (`id`, `hostel_block`, `roomtype`) VALUES
(1, ' j', ' single bed'),
(1, ' j', ' single bed'),
(1, ' j', ' single bed'),
(1, ' nil', ' nil');

-- --------------------------------------------------------

--
-- Table structure for table `proctor_master.`
--

CREATE TABLE `proctor_master.` (
  `id` int(11) NOT NULL,
  `proctor_name` varchar(200) NOT NULL,
  `proctor_department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proctor_master.`
--

INSERT INTO `proctor_master.` (`id`, `proctor_name`, `proctor_department`) VALUES
(1, 'ravi', 'physics');

-- --------------------------------------------------------

--
-- Table structure for table `transport_master`
--

CREATE TABLE `transport_master` (
  `id` int(11) NOT NULL,
  `dayboarder` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `busno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport_master`
--

INSERT INTO `transport_master` (`id`, `dayboarder`, `route`, `busno`) VALUES
(1, ' no', 'no ', 0),
(1, ' no', 'no ', 0),
(1, ' no', 'no ', 0),
(1, ' yes', '26 ', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
