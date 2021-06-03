-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 12:42 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcontact` varchar(15) NOT NULL,
  `section` varchar(11) NOT NULL,
  `record` text NOT NULL,
  `marks` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `city`, `pcontact`, `section`, `record`, `marks`, `percentage`) 
VALUES 
('1','10298', 'Rukmini Chebrolu', 'Vijayawada', '09505918828', 'E', 'Yes', '85', '90'), 
('2','10319', 'Poojitha', 'hyderabad', '845154879', 'E', 'Yes', '80', '85'), 
('3','10269', 'Spandana', 'hyderabad', '9832420843', 'E', 'Yes', '85', '85'), 
('4','10323', 'Ramya', 'Guntur', '9832420822', 'E', 'Yes', '89', '90'), 
('5','1001', 'Mohit', 'Asansol', '9832422520', 'E', 'Yes', '80', '80'), 
('6','1002', 'Amir', 'Asansol', '9832420823', 'E', 'Yes', '70', '70'), 
('7','1003', 'Suraj', 'Durgapur', '9832420849', 'E', 'Yes', '60', '80'),
('8','1004', 'Puja', 'Asansol', '9832420840', 'E', 'Yes', '80', '80'), 
('9','10286', 'praveen', 'narsarovpet', '894584512', 'E', 'Yes', '90', '95'),
('10','10285', 'Pranav', 'Guntur', '8459851458', 'E', 'Yes', '89', '92'), 
('11','10315', 'Yamini', 'Vijayawada', '8451479854', 'E', 'Yes', '85', '89');



-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
