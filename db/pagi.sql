-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 01:31 PM
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
-- Database: `prectice`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagi`
--

CREATE TABLE `pagi` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `DNS_Key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pagi`
--

INSERT INTO `pagi` (`ID`, `Title`, `Date`, `DNS_Key`) VALUES
(1, 'localhost/prectice/form.php', '03-11-2021 11:11:06 AM', 'e37b87d4ee83dcf8b1e422c6e67d6aad'),
(2, 'localhost/prectice/form.php', '03-11-2021 12:11:45 PM', 'ffc14c36eb75db21918ed297afb4c0ea'),
(3, 'localhost/prectice/form.php', '03-11-2021 12:11:49 PM', 'd3bdcdf00da76b5afc258ce43e5543fe'),
(4, 'localhost/prectice/form.php', '03-11-2021 12:11:09 PM', 'ca822017f25de924188ffd8e4f0f14a8'),
(5, 'localhost/prectice/form.php', '03-11-2021 12:11:18 PM', '386a9075d58e44b932fd2f8eb23a7378'),
(6, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(7, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(8, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(9, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(10, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(11, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(12, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(13, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(14, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(15, 'localhost/prectice/form.php', '03-11-2021 12:11:20 PM', '630916ee1bbce9d5fc01d720b74cfe63'),
(16, 'localhost/prectice/form.php', '03-11-2021 01:11:06 PM', '83b87e94f898dca7dc38a4a8344e050b'),
(17, 'localhost/prectice/form.php', '03-11-2021 01:11:12 PM', 'fc723b1a91488ea9b6e08d9985afae1d'),
(18, 'localhost/prectice/form.php', '03-11-2021 01:11:02 PM', '593b071bb39c541b132165704718244c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagi`
--
ALTER TABLE `pagi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pagi`
--
ALTER TABLE `pagi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
