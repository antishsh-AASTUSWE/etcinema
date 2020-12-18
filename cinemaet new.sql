-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 01:16 PM
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
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `booking_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL,
  `Tickets` varchar(100) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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
(4, 'Century'),
(7, 'yeshewasd'),
(8, 'yeshewasffgkcg');

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
(4, 'Crime'),
(9, 'mi'),
(10, 'test'),
(11, 'Mis');

-- --------------------------------------------------------

--
-- Table structure for table `messageout`
--

CREATE TABLE `messageout` (
  `id` int(11) NOT NULL,
  `messagefrom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `messageto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `messageout`
--

INSERT INTO `messageout` (`id`, `messagefrom`, `messageto`, `content`) VALUES
(0, '0942205164', '0942205164', '17922'),
(0, '0942205164', '0912344647', '24656');

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
(9, 't', 'General aud'),
(10, 'testl', 'Restricted – Under 17 requires accompanying parent or adult guardi');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seat_type` varchar(100) NOT NULL,
  `seat_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `show_id` int(11) NOT NULL,
  `mov_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `show_date` date NOT NULL,
  `show_time` time NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `role` varchar(100) NOT NULL,
  `Reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `phone_no`, `date_of_birth`, `role`, `Reg_date`, `password`) VALUES
(4, 'yeshewas', 'yeshewasg13@gmail.com', '0912344647', '2020-12-24', 'admin', '2020-12-08 07:52:09', 'yesssss'),
(6, 'yeshewas', 'yeshewasg12@gmail.com', '0912344647', '2020-12-23', 'admin', '2020-12-15 09:49:17', 'yesssss'),
(7, 'yeshewas', 'yeshewasg12@gmail.com', '0912344647', '2020-12-15', 'admin', '2020-12-17 12:09:45', 'qwerty'),
(8, 'mulan', 'yeshewasg13@gmail.com', '0942205164', '2020-12-29', 'admin', '2020-12-17 12:10:50', 'qwerty'),
(9, 'yeshewas gatawbza', 'yeshewasg12@gmail.com', '0912344647', '2020-12-27', 'admin', '2020-12-17 12:11:50', 'qwertyu'),
(10, 'yeshewas gatawbza', 'yeshewasg12@gmail.com', '0912344647', '2020-12-29', 'admin', '2020-12-17 12:13:31', 'qwertyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_info`
--
ALTER TABLE `booking_info`
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
-- AUTO_INCREMENT for table `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `geners`
--
ALTER TABLE `geners`
  MODIFY `gener_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD CONSTRAINT `booking_info_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `showtime` (`show_id`),
  ADD CONSTRAINT `booking_info_ibfk_2` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`seat_id`),
  ADD CONSTRAINT `booking_info_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

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
