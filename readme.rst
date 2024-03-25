#######################
Database connectivity
##########################
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 08:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acno` varchar(100) NOT NULL,
  `Pin` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Father` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acno`, `Pin`, `Name`, `Father`, `Email`, `Phone`, `Gender`, `Country`, `State`, `City`, `Amount`) VALUES
('PNB110', '3435', 'Anil', 'kumar', 'a@gmail.com', '5834567890', 'Male', 'India', 'Uttrakhand', 'Dehradun', '8400'),
('PNB111', '2023', 'Adil', 'Yameen', 'adil@gmail.com', '9027639765', 'Male', 'India ', 'Uttar pradersh', 'Bijnor', '0'),
('PNB122', '2222', 'Amjad', 'Mr', 'amjad@gmail.com', '234567890', 'Male', 'India', 'UP', 'Bijnor', '0'),
('PNB123', '2324', 'bilal', 'Mr', 'b@gmail.com', '3456789', 'Male', 'India', 'UP', 'Bijnor', '-2'),
('PNB124', '1906', 'khan', 'khan', 'a@gmail.com', '1234567', 'Male', 'India', 'UK', 'Dehradun', '10000'),
('SBI102', '4321', 'Adil', 'Mr', 'ad@gmail.com', '399439', 'Malke', 'Idnia', 'Uj', 'Dehradun', '13000'),
('SBI103', '3333', 'Mohd', 'Yameen', 'adil@gmail.com', '9027639765', 'Male', 'India', 'Utthar pradesh', 'Bijnor\r\n', '15001'),
('SBI104', '1122', 'kaif', 'mr', 'kaif@gmail.com', '', 'male', 'india', 'up', 'sharanpur', '16000'),
('SBI105', '248015', 'Aanchal Panwar', 'Ravinder Singh', 'Panwargujjari@gmail.com', '', 'Female', 'India', 'Uttar pradersh', 'sharanpur', '19000'),
('SBI106', '9900', 'car', 'truck', 'adil@gmail.com', '8384342323', 'Male', 'india', 'Uttar pradersh', 'Bijnor', ''),
('SBI107', '9999', 'jan', 'mr', 'gmail.com', '234757', 'Male', 'BBA', 'UK', 'Dehradun', '20000'),
('SBI108', '9999', 'jan', 'mr', 'gmail.com', '234757', 'Male', 'BBA', 'UK', 'Dehradun', '20000'),
('SBI109', '1122', 'Adil', 'Mr', 'adil@gmail.com', '450098765', 'Male', 'india', 'Uttar pradersh', 'Bijnor', '5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

------------------------------------------------------------------------------------------------------------------------------

****************Short Introduction of codeigniter:-******************************
###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
