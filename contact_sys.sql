-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2021 at 07:10 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` varchar(5) NOT NULL,
  `user_id` varchar(5) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_mail` varchar(255) NOT NULL,
  `contact_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `user_id`, `contact_name`, `contact_address`, `contact_phone`, `contact_mail`, `contact_photo`) VALUES
('C003', 'U003', '1', '2333', '33', '1@1', 'C002.jpeg'),
('C004', 'U003', 'alex', '2', '2', '33@33', 'C004.jpeg'),
('C005', 'U003', 'data2', '2', '22', '', ''),
('C006', 'U003', 'zara', 'Jl no 12', '222', '', ''),
('C007', 'U006', 'g21', '22', '22', 'qwe@qwe.qwe', 'C005.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(5) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_birth` date NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_work` varchar(255) NOT NULL,
  `user_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_password`, `user_name`, `user_birth`, `user_address`, `user_phone`, `user_mail`, `user_status`, `user_work`, `user_photo`) VALUES
('000', 'admin', 'admin', '2021-05-01', '-', '-', 'admin', '', '', ''),
('U001', '123', 'qwe', '2021-03-31', 'Bratang gede 3i/14a', '+6285856440266', 'qwe@qwe.qwe', 'bekerja', 'Jl no 12', 'qwe@qwe.qwe.jpeg'),
('U002', '123', 'gin', '2021-04-07', 'jl.jl', '000', 'jl@jl.jl', 'mahasiswa', '', 'jl@jl.jl.jpeg'),
('U003', '1', '1ok2', '2020-11-01', '1', '1', '1@1', 'bekerja', '1231', '1@1.jpeg'),
('U004', '123', 'Rama Aditya Saputra', '1999-10-01', 'Jl. Bratang Gede 3-i/14-a', '085856440266', 'rama.4ditya3@gmail.com', 'mahasiswa', '-', 'rama.4ditya3@gmail.com.jpeg'),
('U006', '1', 'gin', '2021-05-03', 'Jl no 12', '22', '123@123.com', 'mahasiswa', '', '123@123.com.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
