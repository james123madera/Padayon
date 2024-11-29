-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 03:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `francisco_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttbl`
--

CREATE TABLE `producttbl` (
  `id` int(11) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `purchaseprice` decimal(6,2) NOT NULL,
  `sellingprice` decimal(6,2) NOT NULL,
  `wholesaleprice` decimal(6,2) NOT NULL,
  `deliverydate` datetime NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `dateencoded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttbl`
--

INSERT INTO `producttbl` (`id`, `barcode`, `productname`, `description`, `unit`, `purchaseprice`, `sellingprice`, `wholesaleprice`, `deliverydate`, `supplier`, `dateencoded`) VALUES
(123457, '123123', 'Cellphone', '8gb/256gb', 'qwerty123', 222.00, 22.00, 111.00, '2024-10-25 00:00:00', 'asdasd', '2024-10-19 07:46:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttbl`
--
ALTER TABLE `producttbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttbl`
--
ALTER TABLE `producttbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123459;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
