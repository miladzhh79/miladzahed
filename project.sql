-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 10:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `username` varchar(20) NOT NULL,
  `code` int(4) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `salary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`username`, `code`, `date`, `description`, `salary`) VALUES
('میلاد زاهد', 111, '2021-08-04', 'هیچی', 12000),
('', 111, '2021-08-03', 'هییی', 12000),
('milad', 304, '2021-09-11', 'زیبا باشد', 20000000),
('ali', 204, '2021-09-11', 'responsible', 20003000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first-last-name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user-name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first-last-name`, `email`, `user-name`, `password`, `birthday`) VALUES
('milad', 'defated.flower@gmail.com', 'miladzh1379', '123@qweQ', '2021-08-04'),
('sajad', 'miladzahed45@gmail.com', 'msb01383902', '123456Aa', '2021-08-12'),
('milad', 'miladzahed45@gmail.com', 'mzahed', '123456aA', '2021-08-03'),
('ali', 'defated.flower@gmail.com', 'mmzahed', '123456aA', '2021-08-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
