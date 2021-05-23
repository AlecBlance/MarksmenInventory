-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 04:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdn`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Food', '');

-- --------------------------------------------------------

--
-- Table structure for table `receiving`
--

CREATE TABLE `receiving` (
  `rcs_number` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `rcs_date` date NOT NULL,
  `stock_code` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `supplier_address` varchar(50) NOT NULL,
  `current_stock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiving`
--

INSERT INTO `receiving` (`rcs_number`, `supplier_name`, `rcs_date`, `stock_code`, `quantity`, `supplier_address`, `current_stock`) VALUES
('RCS_01', 'Alec', '2021-05-27', '001', 10, 'Bacolod', 50);

-- --------------------------------------------------------

--
-- Table structure for table `releasing`
--

CREATE TABLE `releasing` (
  `rls_number` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `rls_date` date NOT NULL,
  `stock_code` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `supplier_address` varchar(50) NOT NULL,
  `current_stock` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `releasing`
--

INSERT INTO `releasing` (`rls_number`, `supplier_name`, `rls_date`, `stock_code`, `quantity`, `supplier_address`, `current_stock`) VALUES
('RLS_01', 'Alec', '2021-05-31', '001', 10, 'Bacolod', 60);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `expiry_date` date NOT NULL,
  `id_category` int(50) NOT NULL,
  `count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`code`, `name`, `expiry_date`, `id_category`, `count`) VALUES
('001', 'Pizza', '2021-05-06', 1, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiving`
--
ALTER TABLE `receiving`
  ADD PRIMARY KEY (`rcs_number`);

--
-- Indexes for table `releasing`
--
ALTER TABLE `releasing`
  ADD PRIMARY KEY (`rls_number`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
