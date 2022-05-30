-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 01:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logqr`
--

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qrcode` varchar(25) NOT NULL,
  `time_in` varchar(255) NOT NULL,
  `time_out` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `geolocation` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `name`, `qrcode`, `time_in`, `time_out`, `date`, `geolocation`, `location`) VALUES
(2, '', '', '0', '0', '', '', 'lanre'),
(3, '', '', '', '', '', 'Latitude: 6.5634304 Longitude: 3.3325056', 'lanre'),
(4, '', '', '', '', '', 'Latitude: 6.5634304 Longitude: 3.3325056', 'codex'),
(5, '', '', '', '', '2022-05-19 Thursday', 'Latitude: 6.5634304 Longitude: 3.3325056', 'QRCODE SAMPL'),
(6, '', '', '04:03:18am', '', '2022-05-19 Thursday', 'Latitude: 6.5634304 Longitude: 3.3325056', 'QRCODE SAMPLE'),
(7, 'Olaitan Michael', 'codex', '04:18:48am', '', '2022-05-19 Thursday', 'Latitude: 6.5634304 Longitude: 3.3325056', 'lanre'),
(8, 'olanrewaju', 'lanre', '04:24:50am', '', '2022-05-19 Thursday', 'Latitude: 6.5634304 Longitude: 3.3325056', 'lanre'),
(9, 'olanrewaju', 'lanre', '02:44:43pm', '', '2022-05-19 Thursday', 'Latitude: 6.5241088 Longitude: 3.3849344', 'lanre'),
(10, 'olanrewaju', 'lanre', '04:20:21pm', '', '2022-05-19 Thursday', 'Latitude: 6.5241088 Longitude: 3.3783808', 'frontdoor'),
(11, 'bolu ode', 'L9VBwi9zrwVs', '04:32:14pm', '', '2022-05-21 Saturday', 'Latitude: 6.5241088 Longitude: 3.3783808', 'L9VBwi9zrwVs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
