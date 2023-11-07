-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 12:31 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aName` varchar(20) NOT NULL,
  `aPass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aName`, `aPass`) VALUES
('fahim', '456'),
('zawad', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `oNo` int(11) NOT NULL,
  `cusName` varchar(30) NOT NULL,
  `cusPhone` varchar(20) NOT NULL,
  `product` varchar(30) NOT NULL,
  `price` varchar(15) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `tprice` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL,
  `createdBy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`oNo`, `cusName`, `cusPhone`, `product`, `price`, `quantity`, `tprice`, `date`, `createdBy`) VALUES
(1, 'Nasif', '01819600427', 'Burger,Sandwich', '10,20', '2,2', '60', '06-01-2021', 'mubarak'),
(2, 'shahed', '01730085497', 'Burger,Sandwich', '19,10', '1,2', '39', '06-01-2021', 'mubarak'),
(3, 'shahed', '01730085497', 'Burger,Sandwich', '19,10', '1,2', '39', '06-01-2021', 'mubarak'),
(4, 'Tuhin', '01521328547', 'Hot dog,soda', '20,10', '5,2', '120', '06-01-2021', 'mubarak'),
(5, 'sakib', '01814141486', 'Pasta,Burger', '20,80', '1,1', '100', '06-01-2021', 'eru'),
(6, 'Mahi', '0152369874', 'Burger,Sandwich', '80,2', '2,3', '166', '06-01-2021', 'eru');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `oName` varchar(20) NOT NULL,
  `oPass` varchar(30) NOT NULL,
  `createdBy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`oName`, `oPass`, `createdBy`) VALUES
('akash', '123', 'zawad'),
('eru', '321', 'zawad'),
('mubarak', '231', 'zawad'),
('robi', '123', 'zawad');

-- --------------------------------------------------------

--
-- Table structure for table `productstore`
--

CREATE TABLE `productstore` (
  `pName` varchar(20) NOT NULL,
  `pQuantity` int(11) NOT NULL,
  `pPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productstore`
--

INSERT INTO `productstore` (`pName`, `pQuantity`, `pPrice`) VALUES
('Burger', 106, 20),
('Hot dog', 55, 20),
('Pasta', 99, 20),
('Sandwich', 52, 40),
('soda', 118, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aName`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`oNo`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`oName`);

--
-- Indexes for table `productstore`
--
ALTER TABLE `productstore`
  ADD PRIMARY KEY (`pName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `oNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
