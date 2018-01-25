-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 06:13 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(3) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `short_bio` varchar(400) NOT NULL,
  `date_of_birth` date NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `email_id`, `short_bio`, `date_of_birth`, `hobby`, `relationship`) VALUES
(37, 'suraj', 'suraj@gmail.com', 'cool', '2018-01-19', 'Badminton,Cricket', 'UnMarried'),
(38, 'shu', 'khu@gmail.com', 'smart', '2018-01-12', 'Badminton', 'Singles'),
(39, 'ruby', 'ruby@gmail.com', 'good', '2018-01-26', 'Chess', 'Singles'),
(40, 'kalpna', 'kalpna@gmail.com', 'honest', '2018-01-16', 'Badminton', 'Singles');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(2) NOT NULL,
  `image` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `image`) VALUES
(15, 'images/5a5db2f306c419be1bed38446999e30110906248_776421939119929_6893299501028767755_n.jpg'),
(16, 'images/1b037466fe7d4b0abbb82db28a11a5f5boeing-767-12882.jpg'),
(17, 'images/6d40236a6a7a863e5fd839c9351ad030broken_knight-wallpaper-1366x768.jpg'),
(18, 'images/53d52fadb6b7d4d4dbc710f3475f524dbus-goa_0.jpg'),
(19, 'images/b42c1844274852533f2c08cd8d12b963bus-goa_0.jpg'),
(20, 'images/cf6cf838921b3e4ddb95db0ab093949eiron_man_helmet-wallpaper-1366x768.jpg'),
(21, 'images/f3ac6e05a49c0a438d0d84ba9f810da4ammunition_weapons-wallpaper-1366x768.jpg'),
(22, 'images/c328615cb78c6908fc3242bc80e5bf49download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL,
  `online` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email_id`, `address`, `password`, `online`) VALUES
(15, 'kalpna', 'kalpna@gmail.com', 'silk board', 'kalpna', 0),
(16, 'ruby', 'ruby@gmail.com', 'silk board', 'ruby', 0),
(17, 'suraj', 'suraj@gmail.com', 'btm', 'suraj', 0),
(18, 'lata', 'lata@gmail.com', 'banglore', 'lata', 0),
(19, 'sehba', 'sehba@gmail.com', 'btm', 'sehba', 0),
(20, 'ajay', 'ajay@gmail.com', 'pg', 'ajay', 0),
(21, 'shu', 'shu@gmail.com', 'sk', 'shu', 0),
(22, 'shi', 'shi@gmail.com', 'aj', 'shi', 0),
(23, 'php', 'php@gmail.com', 'si', 'php', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
