-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2022 at 06:09 PM
-- Server version: 5.7.39-0ubuntu0.18.04.2
-- PHP Version: 7.2.24-0ubuntu0.18.04.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `num` varchar(9) NOT NULL,
  `used` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`num`, `used`) VALUES
('123456789', '1'),
('987654321', '0');

-- --------------------------------------------------------

--
-- Table structure for table `used`
--

CREATE TABLE `used` (
  `num` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used`
--

INSERT INTO `used` (`num`, `email`, `usetime`) VALUES
('987654321', 'games@gmail.com', '2022-08-18 17:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `logtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `fname`, `lname`, `username`, `pwd`, `logtime`) VALUES
('', '', '', '', '', '2022-08-18 03:46:03'),
('bensalemaziz58168@gmail.com', 'Aziz', 'Ben salem', 'ja3ba', '3asba', '2022-08-18 11:10:33'),
('boufidjline.boufidjline@gmaiil.com', 'abdelhak', 'boufidjline', 'golo', 'world', '2022-08-18 04:12:24'),
('commandercat181@gmail.com', 'rayen', 'dayekh', 'catcommander', 'hahaga00', '2022-08-18 08:08:45'),
('games@gmail.com', 'Aziz', 'Ben salem', 'ja3ba', '3asbawesa9westalbze9', '2022-08-18 11:09:05'),
('magrov@protonmail.com', 'magrov', 'govich', 'golo', 'hello', '2022-08-18 04:06:11'),
('mboufijline@gmail.com', 'Ena', 'Fcuk', 'Mamamiya', 'pipirony', '2022-08-18 10:45:10'),
('yosri@gmail.com', 'yosri', 'abdelimlak', 'yosrihimself', 'yosri', '2022-08-18 04:09:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `used`
--
ALTER TABLE `used`
  ADD PRIMARY KEY (`num`,`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `used`
--
ALTER TABLE `used`
  ADD CONSTRAINT `used_ibfk_1` FOREIGN KEY (`num`) REFERENCES `tickets` (`num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `used_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
