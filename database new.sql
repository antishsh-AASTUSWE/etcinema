-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 10:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemaet`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinf_info`
--

CREATE TABLE `bookinf_info` (
  `booking_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cinema_id` int(11) NOT NULL,
  `cinema_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`cinema_id`, `cinema_name`) VALUES
(1, 'Edna Mall'),
(5, 'Alem Cinema'),
(6, 'Ethiopi'),
(8, 'Agona');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `DBO` date NOT NULL,
  `joined_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `first_name`, `last_name`, `email`, `phone_no`, `password`, `DBO`, `joined_date`) VALUES
(5, 'yeshewas', 'rawit', 'yeshewasg12@gmail.com', '0942205164', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-12-25', '2020-12-25 08:46:30'),
(6, 'antish', 'tes', 'yeshewasg13@gmail.com', '0912344645', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-12-30', '2020-12-25 08:52:53'),
(7, 'yeshewas', 'tes', 'yeshewasg1@gmail.com', '0912344647', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-12-29', '2020-12-29 07:08:38'),
(8, 'antish', 'gat', 's@g.c', '0942205162', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-12-29', '2020-12-29 07:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `geners`
--

CREATE TABLE `geners` (
  `gener_id` int(11) NOT NULL,
  `gener` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geners`
--

INSERT INTO `geners` (`gener_id`, `gener`) VALUES
(2, 'Drama'),
(3, 'Romance'),
(7, 'Action'),
(8, 'Comedy test'),
(11, 'action test'),
(13, 'test add');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `mov_name` varchar(255) NOT NULL,
  `mov_plot` text NOT NULL,
  `mov_gener` int(11) NOT NULL,
  `mov_ratting` int(11) NOT NULL,
  `mov_poster` text NOT NULL,
  `mov_trailor` text NOT NULL,
  `mov_running_time` varchar(255) NOT NULL,
  `mov_realse_date` date NOT NULL,
  `mov_starring` varchar(255) NOT NULL,
  `mov_language` varchar(255) NOT NULL,
  `mov_subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `mov_name`, `mov_plot`, `mov_gener`, `mov_ratting`, `mov_poster`, `mov_trailor`, `mov_running_time`, `mov_realse_date`, `mov_starring`, `mov_language`, `mov_subtitle`) VALUES
(3, 'Wonder woman', 'A young Chinese maiden disguises herself as a male warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan.\'', 7, 6, 'kira.jpg', 'test', '2', '2020-12-24', 'Yifei Liu, Donnie Yen, Jet Li', 'engilish', 'englishh'),
(5, 'Wonder woman 1887', 'A young Chinese maiden disguises herself as a male warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan.\'', 3, 6, '10birr.jpg', 'test', '2', '2020-12-25', 'Yifei Liu, Donnie Yen, Jet Li', 'engilish', 'englishh'),
(6, 'xmen', 'A young Chinese maiden disguises herself as a male warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan.\'', 3, 1, 'AFAR.jpg', 'test', '2', '2020-12-25', 'Yifei Liu, Donnie Yen, Jet Li', 'engilish', 'englishh');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `rating`, `description`) VALUES
(1, 'G', 'General '),
(2, 'PG', 'Parental '),
(3, 'PG-13', 'Parents Strongly Cautioned – Some material may be inappropriate for children under 13.\r\n'),
(6, 'R', 'Restricted – Under 17 requires accompanying parent or adult guardi');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seat_type` varchar(100) NOT NULL,
  `seat_status` varchar(100) NOT NULL,
  `col` int(11) NOT NULL,
  `row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `seat_type`, `seat_status`, `col`, `row`) VALUES
(1, '', '', 1, 1),
(2, '', '', 2, 1),
(3, '', '', 3, 1),
(4, '', '', 4, 1),
(5, '', '', 1, 2),
(6, '', '', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `show_id` int(11) NOT NULL,
  `mov_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `show_date` date NOT NULL,
  `show_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`show_id`, `mov_id`, `cinema_id`, `show_date`, `show_time`) VALUES
(1, 3, 1, '2020-12-08', '16:53:00'),
(3, 5, 1, '2020-12-25', '20:00:00'),
(4, 5, 8, '2020-12-22', '21:31:00'),
(5, 5, 6, '2020-12-25', '04:40:00'),
(6, 6, 8, '2020-12-31', '15:17:00'),
(7, 6, 8, '2020-12-25', '18:18:00'),
(8, 6, 5, '2020-12-25', '16:19:00'),
(9, 3, 6, '2020-12-25', '12:23:00'),
(11, 3, 5, '2020-12-28', '11:59:00'),
(12, 3, 1, '2020-12-28', '17:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `username`, `password`, `role`, `status`, `created_at`) VALUES
(2, 'yeshewas', '', '', '202cb962ac59075b964b07152d234b70', '', '0', '2020-12-22 00:21:26'),
(3, 'anteneh', 'anteneh@gmail.com', 'antish', '', 'admin', '', '2020-12-22 00:35:34'),
(5, 'anteneh', 'anteneh@gmail.com', 'antish', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'active', '2020-12-22 00:41:56'),
(6, 'yalfal', 'yalfal@gmail.com', 'yalfal', '962012d09b8170d912f0669f6d7d9d07', 'manager', 'active', '2020-12-24 07:55:24'),
(7, 'barnabas', 'barni@gmail.com', 'barni', '81dc9bdb52d04dc20036dbd8313ed055', 'staff', 'active', '2020-12-24 07:56:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinf_info`
--
ALTER TABLE `bookinf_info`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `show_id` (`show_id`),
  ADD KEY `show_id_2` (`show_id`),
  ADD KEY `seat_id` (`seat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `geners`
--
ALTER TABLE `geners`
  ADD PRIMARY KEY (`gener_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `mov_ratting` (`mov_ratting`),
  ADD KEY `mov_ratting_2` (`mov_ratting`),
  ADD KEY `mov_ratting_3` (`mov_ratting`),
  ADD KEY `mov_gener` (`mov_gener`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `cinema_id` (`cinema_id`),
  ADD KEY `mov_id` (`mov_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinf_info`
--
ALTER TABLE `bookinf_info`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `geners`
--
ALTER TABLE `geners`
  MODIFY `gener_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookinf_info`
--
ALTER TABLE `bookinf_info`
  ADD CONSTRAINT `bookinf_info_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `showtime` (`show_id`),
  ADD CONSTRAINT `bookinf_info_ibfk_2` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`seat_id`),
  ADD CONSTRAINT `bookinf_info_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`mov_ratting`) REFERENCES `ratings` (`rating_id`),
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`mov_gener`) REFERENCES `geners` (`gener_id`);

--
-- Constraints for table `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`),
  ADD CONSTRAINT `showtime_ibfk_2` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`),
  ADD CONSTRAINT `showtime_ibfk_3` FOREIGN KEY (`mov_id`) REFERENCES `movie` (`movie_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
