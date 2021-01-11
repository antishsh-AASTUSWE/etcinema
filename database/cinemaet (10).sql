-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 03:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `booking_id` int(10) NOT NULL,
  `show_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `seats` int(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `booked_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL,
  `paid_bank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`booking_id`, `show_id`, `user_id`, `seats`, `price`, `booked_date`, `status`, `paid_bank`) VALUES
(3, 12, 5, 1, '50', '2021-01-11 13:33:04', '', ''),
(4, 12, 5, 1, '50', '2021-01-11 13:39:18', '', ''),
(5, 12, 5, 4, '200', '2021-01-11 13:46:20', '', '');

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
(5, 'Alem'),
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
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `first_name`, `last_name`, `email`, `phone_no`, `password`, `DBO`, `joined_date`) VALUES
(5, 'yeshewas', 'rawit', 'yeshewasg12@gmail.com', '0942205164', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-12-25', '2020-12-25 08:46:30'),
(6, 'antish', 'tes', 'yeshewasg13@gmail.com', '0912344645', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-12-30', '2020-12-25 08:52:53');

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
(8, 'Comedy'),
(9, 'Mistry');

-- --------------------------------------------------------

--
-- Table structure for table `messageout`
--

CREATE TABLE `messageout` (
  `id` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `messagefrom` varchar(255) NOT NULL,
  `messageto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `mov_trailor` varchar(255) NOT NULL,
  `mov_running_time` varchar(255) NOT NULL,
  `mov_realse_date` date NOT NULL,
  `mov_starring` varchar(255) NOT NULL,
  `mov_language` varchar(255) NOT NULL,
  `mov_synopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `mov_name`, `mov_plot`, `mov_gener`, `mov_ratting`, `mov_poster`, `mov_trailor`, `mov_running_time`, `mov_realse_date`, `mov_starring`, `mov_language`, `mov_synopsis`) VALUES
(3, 'Fury', 'A young Chinese maiden disguises herself as a male warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan.\'', 7, 6, 'fury.jpg', 'https://www.youtube.com/watch?v=DNHuK1rteF4', '01:50', '2020-12-24', 'Yifei Liu, Donnie Yen, Jet Li', 'engilish', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid quidem labore veritatis beatae nesciunt quis mollitia, facilis corporis, quae minus dolores non debitis quo at veniam laboriosam iure velit quas.\r\nCorrupti natus perferendis expedita cumque delectus accusantium inventore ex assumenda animi amet. Nostrum quos ex suscipit dolorum repellendus excepturi assumenda error ullam ea cupiditate, mollitia incidunt obcaecati possimus minus quam?\r\nSuscipit provident corporis quam nesciunt, magni architecto totam voluptatibus quibusdam quod iure assumenda, iste placeat cumque quae! Quaerat porro aspernatur at eligendi voluptatem provident iure dolores blanditiis, exercitationem tempore inventore?\r\nDoloremque, rerum. Nobis autem saepe nemo reiciendis error! Cum, quas? Accusantium sit, illum ut dignissimos, saepe numquam nam quae earum vero hic, quam soluta cupiditate! At eveniet optio esse itaque.\r\nLaborum eligendi ut odit maxime repellat porro tenetur architecto eum consequatur corporis, sed id similique, minus deserunt nulla voluptatibus nobis laudantium exercitationem distinctio explicabo blanditiis. Magni eveniet nostrum maiores atque?'),
(5, 'On Watch', 'A young Chinese maiden disguises herself as a male warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan.\'', 3, 6, 'onwatch.jpg', 'https://www.youtube.com/watch?v=SRHCHMGSBQ0', '02:00', '2020-12-25', 'Yifei Liu, Donnie Yen, Jet Li', 'engilish', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised'),
(6, 'Alone', 'A young Chinese maiden disguises herself as a male warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan.\'', 3, 1, 'alone.jpg', 'https://www.youtube.com/watch?v=S9SdmI0KkSw', '01:28', '2020-12-25', 'Yifei Liu, Donnie Yen, Jet Li', 'engilish', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised'),
(7, 'Venus', 'Test', 2, 6, 'venus.jpg', 'https://www.youtube.com/watch?v=kFi1PC4zR_U', '02:30', '2020-12-09', 'Josh Poter', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis delectus ad autem asperiores voluptatem. Quos omnis velit ea alias, odio aspernatur! Quod eum tempore rem libero explicabo aliquid nam accusantium.\r\nInventore aperiam harum ipsa unde, ut facilis provident nostrum sequi qui doloribus incidunt autem culpa officiis quod illo perferendis obcaecati accusantium, esse suscipit minima? Soluta sint officia assumenda exercitationem saepe!\r\nRepellendus, at alias, eius harum expedita ut eos perspiciatis excepturi consectetur debitis minima voluptatem, velit quis. Totam, esse, vel placeat perferendis commodi blanditiis consequuntur dolorem quo, inventore laudantium sed fugiat.\r\nPraesentium, tempora recusandae, at exercitationem corporis enim inventore voluptatibus aperiam tenetur sint, accusantium consectetur nulla expedita quibusdam! Nisi consectetur minima possimus repudiandae, dignissimos autem? Voluptates velit voluptatem exercitationem repudiandae expedita!\r\nReiciendis, consectetur illo, obcaecati velit sapiente qui placeat error tempora vel at saepe animi blanditiis, veniam ducimus aspernatur expedita rerum iste nostrum quia ex necessitatibus nulla repellendus? Non, porro fuga.'),
(8, 'Trooper', 'Test', 7, 2, 'trooper.jpg', 'https://www.youtube.com/watch?v=OTE-NG7BBhQ', '02:30', '2020-10-22', 'Josh Poter', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel quis voluptatem aliquid expedita minima aspernatur, sequi eligendi repellat autem in itaque harum mollitia omnis exercitationem odio deleniti tenetur repellendus.\r\nIllo repellat sint blanditiis amet ipsum repellendus. Eligendi dolorum doloremque alias rem ea excepturi, similique adipisci quas sunt nostrum natus ipsam, eius nobis dolorem accusamus fugiat vero cupiditate impedit necessitatibus!\r\nUllam assumenda nam, sapiente excepturi earum esse nobis explicabo, omnis sit recusandae aspernatur culpa quisquam ipsam perspiciatis eum inventore maxime qui, repudiandae corrupti veniam quasi sequi. Nihil a impedit quae!\r\nA tempore quas voluptatem dignissimos id, commodi maxime cupiditate numquam quo explicabo quibusdam aspernatur ea libero itaque, doloribus consectetur nemo veritatis neque sed. Cum error earum quae adipisci nam accusamus.\r\nImpedit quis debitis soluta saepe, quasi rem, nam repellat placeat architecto dolore porro nobis dolores ab commodi perferendis laboriosam voluptatum, natus quo minima eligendi quaerat. Sint amet adipisci doloribus? Blanditiis!'),
(9, 'Horror Night', 'Test', 7, 2, 'horrornight.jpg', 'https://www.youtube.com/watch?v=4mT-Dd-LF4I', '02:30', '2020-07-10', 'Josh Poter', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel quis voluptatem aliquid expedita minima aspernatur, sequi eligendi repellat autem in itaque harum mollitia omnis exercitationem odio deleniti tenetur repellendus.\r\nIllo repellat sint blanditiis amet ipsum repellendus. Eligendi dolorum doloremque alias rem ea excepturi, similique adipisci quas sunt nostrum natus ipsam, eius nobis dolorem accusamus fugiat vero cupiditate impedit necessitatibus!\r\nUllam assumenda nam, sapiente excepturi earum esse nobis explicabo, omnis sit recusandae aspernatur culpa quisquam ipsam perspiciatis eum inventore maxime qui, repudiandae corrupti veniam quasi sequi. Nihil a impedit quae!\r\nA tempore quas voluptatem dignissimos id, commodi maxime cupiditate numquam quo explicabo quibusdam aspernatur ea libero itaque, doloribus consectetur nemo veritatis neque sed. Cum error earum quae adipisci nam accusamus.\r\nImpedit quis debitis soluta saepe, quasi rem, nam repellat placeat architecto dolore porro nobis dolores ab commodi perferendis laboriosam voluptatum, natus quo minima eligendi quaerat. Sint amet adipisci doloribus? Blanditiis!'),
(10, 'The Lost Man', 'test', 7, 2, 'thelostman.jpg', 'https://www.youtube.com/watch?v=inFS5QHuoNo', '01:36', '2018-11-13', 'Josh Milner', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel quis voluptatem aliquid expedita minima aspernatur, sequi eligendi repellat autem in itaque harum mollitia omnis exercitationem odio deleniti tenetur repellendus.\r\nIllo repellat sint blanditiis amet ipsum repellendus. Eligendi dolorum doloremque alias rem ea excepturi, similique adipisci quas sunt nostrum natus ipsam, eius nobis dolorem accusamus fugiat vero cupiditate impedit necessitatibus!\r\nUllam assumenda nam, sapiente excepturi earum esse nobis explicabo, omnis sit recusandae aspernatur culpa quisquam ipsam perspiciatis eum inventore maxime qui, repudiandae corrupti veniam quasi sequi. Nihil a impedit quae!\r\nA tempore quas voluptatem dignissimos id, commodi maxime cupiditate numquam quo explicabo quibusdam aspernatur ea libero itaque, doloribus consectetur nemo veritatis neque sed. Cum error earum quae adipisci nam accusamus.\r\nImpedit quis debitis soluta saepe, quasi rem, nam repellat placeat architecto dolore porro nobis dolores ab commodi perferendis laboriosam voluptatum, natus quo minima eligendi quaerat. Sint amet adipisci doloribus? Blanditiis!'),
(11, 'Calm Steadfast', '', 2, 3, 'fido.jpg', 'https://www.youtube.com/watch?v=5nVACafZAjw', '02:00', '2019-11-14', 'Brad Pit', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel quis voluptatem aliquid expedita minima aspernatur, sequi eligendi repellat autem in itaque harum mollitia omnis exercitationem odio deleniti tenetur repellendus.\r\nIllo repellat sint blanditiis amet ipsum repellendus. Eligendi dolorum doloremque alias rem ea excepturi, similique adipisci quas sunt nostrum natus ipsam, eius nobis dolorem accusamus fugiat vero cupiditate impedit necessitatibus!\r\nUllam assumenda nam, sapiente excepturi earum esse nobis explicabo, omnis sit recusandae aspernatur culpa quisquam ipsam perspiciatis eum inventore maxime qui, repudiandae corrupti veniam quasi sequi. Nihil a impedit quae!\r\nA tempore quas voluptatem dignissimos id, commodi maxime cupiditate numquam quo explicabo quibusdam aspernatur ea libero itaque, doloribus consectetur nemo veritatis neque sed. Cum error earum quae adipisci nam accusamus.\r\nImpedit quis debitis soluta saepe, quasi rem, nam repellat placeat architecto dolore porro nobis dolores ab commodi perferendis laboriosam voluptatum, natus quo minima eligendi quaerat. Sint amet adipisci doloribus? Blanditiis!'),
(12, 'Criminal On Party', 'Test', 2, 2, 'criminal.jpg', 'https://www.youtube.com/watch?v=JNfRQ4NBjUU', '01:54', '2019-04-17', 'Vin Dissel', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel quis voluptatem aliquid expedita minima aspernatur, sequi eligendi repellat autem in itaque harum mollitia omnis exercitationem odio deleniti tenetur repellendus.\r\nIllo repellat sint blanditiis amet ipsum repellendus. Eligendi dolorum doloremque alias rem ea excepturi, similique adipisci quas sunt nostrum natus ipsam, eius nobis dolorem accusamus fugiat vero cupiditate impedit necessitatibus!\r\nUllam assumenda nam, sapiente excepturi earum esse nobis explicabo, omnis sit recusandae aspernatur culpa quisquam ipsam perspiciatis eum inventore maxime qui, repudiandae corrupti veniam quasi sequi. Nihil a impedit quae!\r\nA tempore quas voluptatem dignissimos id, commodi maxime cupiditate numquam quo explicabo quibusdam aspernatur ea libero itaque, doloribus consectetur nemo veritatis neque sed. Cum error earum quae adipisci nam accusamus.\r\nImpedit quis debitis soluta saepe, quasi rem, nam repellat placeat architecto dolore porro nobis dolores ab commodi perferendis laboriosam voluptatum, natus quo minima eligendi quaerat. Sint amet adipisci doloribus? Blanditiis!'),
(13, 'The Most Wanted', 'Test', 7, 2, 'themostwanted.jpg', 'https://www.youtube.com/watch?v=DDB1Bw2sZvU', '02:34', '2020-03-18', 'Anton', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel quis voluptatem aliquid expedita minima aspernatur, sequi eligendi repellat autem in itaque harum mollitia omnis exercitationem odio deleniti tenetur repellendus.\r\nIllo repellat sint blanditiis amet ipsum repellendus. Eligendi dolorum doloremque alias rem ea excepturi, similique adipisci quas sunt nostrum natus ipsam, eius nobis dolorem accusamus fugiat vero cupiditate impedit necessitatibus!\r\nUllam assumenda nam, sapiente excepturi earum esse nobis explicabo, omnis sit recusandae aspernatur culpa quisquam ipsam perspiciatis eum inventore maxime qui, repudiandae corrupti veniam quasi sequi. Nihil a impedit quae!\r\nA tempore quas voluptatem dignissimos id, commodi maxime cupiditate numquam quo explicabo quibusdam aspernatur ea libero itaque, doloribus consectetur nemo veritatis neque sed. Cum error earum quae adipisci nam accusamus.\r\nImpedit quis debitis soluta saepe, quasi rem, nam repellat placeat architecto dolore porro nobis dolores ab commodi perferendis laboriosam voluptatum, natus quo minima eligendi quaerat. Sint amet adipisci doloribus? Blanditiis!'),
(14, 'Halloween Party', 'Test', 2, 2, 'halloweenparty.jpg', 'https://www.youtube.com/watch?v=IExxpVPQ_ww', '01:45', '2020-06-17', 'George Cloone', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel quis voluptatem aliquid expedita minima aspernatur, sequi eligendi repellat autem in itaque harum mollitia omnis exercitationem odio deleniti tenetur repellendus.\r\nIllo repellat sint blanditiis amet ipsum repellendus. Eligendi dolorum doloremque alias rem ea excepturi, similique adipisci quas sunt nostrum natus ipsam, eius nobis dolorem accusamus fugiat vero cupiditate impedit necessitatibus!\r\nUllam assumenda nam, sapiente excepturi earum esse nobis explicabo, omnis sit recusandae aspernatur culpa quisquam ipsam perspiciatis eum inventore maxime qui, repudiandae corrupti veniam quasi sequi. Nihil a impedit quae!\r\nA tempore quas voluptatem dignissimos id, commodi maxime cupiditate numquam quo explicabo quibusdam aspernatur ea libero itaque, doloribus consectetur nemo veritatis neque sed. Cum error earum quae adipisci nam accusamus.\r\nImpedit quis debitis soluta saepe, quasi rem, nam repellat placeat architecto dolore porro nobis dolores ab commodi perferendis laboriosam voluptatum, natus quo minima eligendi quaerat. Sint amet adipisci doloribus? Blanditiis!'),
(15, 'Mars', 'Test', 7, 2, 'mars.jpg', 'https://www.youtube.com/watch?v=4tIXHLC24aY', '01:58', '2018-06-19', 'George Cloonee', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel quis voluptatem aliquid expedita minima aspernatur, sequi eligendi repellat autem in itaque harum mollitia omnis exercitationem odio deleniti tenetur repellendus.\r\nIllo repellat sint blanditiis amet ipsum repellendus. Eligendi dolorum doloremque alias rem ea excepturi, similique adipisci quas sunt nostrum natus ipsam, eius nobis dolorem accusamus fugiat vero cupiditate impedit necessitatibus!\r\nUllam assumenda nam, sapiente excepturi earum esse nobis explicabo, omnis sit recusandae aspernatur culpa quisquam ipsam perspiciatis eum inventore maxime qui, repudiandae corrupti veniam quasi sequi. Nihil a impedit quae!\r\nA tempore quas voluptatem dignissimos id, commodi maxime cupiditate numquam quo explicabo quibusdam aspernatur ea libero itaque, doloribus consectetur nemo veritatis neque sed. Cum error earum quae adipisci nam accusamus.\r\nImpedit quis debitis soluta saepe, quasi rem, nam repellat placeat architecto dolore porro nobis dolores ab commodi perferendis laboriosam voluptatum, natus quo minima eligendi quaerat. Sint amet adipisci doloribus? Blanditiis!');

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
  `col` varchar(100) NOT NULL,
  `row` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `col`, `row`) VALUES
(1, '5', '6');

-- --------------------------------------------------------

--
-- Table structure for table `seat_booked`
--

CREATE TABLE `seat_booked` (
  `id` int(11) NOT NULL,
  `show_id` int(10) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `reserved_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_booked`
--

INSERT INTO `seat_booked` (`id`, `show_id`, `seat`, `reserved_date`) VALUES
(21, 1, '55', '2021-01-11 12:45:27'),
(22, 9, '46', '2021-01-11 12:45:27'),
(23, 9, '47', '2021-01-11 12:45:27'),
(24, 15, '25', '2021-01-11 13:38:33'),
(25, 15, '54', '2021-01-11 13:38:33'),
(26, 15, '55', '2021-01-11 13:38:33'),
(27, 12, '11', '2021-01-11 13:39:18'),
(28, 12, '24', '2021-01-11 13:46:19'),
(29, 12, '25', '2021-01-11 13:46:20'),
(30, 12, '34', '2021-01-11 13:46:20'),
(31, 12, '35', '2021-01-11 13:46:20');

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
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`show_id`, `mov_id`, `cinema_id`, `show_date`, `show_time`, `price`) VALUES
(1, 3, 1, '2020-12-08', '16:53:00', '50'),
(3, 5, 1, '2020-12-25', '20:00:00', '50'),
(4, 5, 8, '2020-12-22', '21:31:00', '44'),
(5, 5, 6, '2020-12-25', '04:40:00', '50'),
(6, 6, 8, '2020-12-31', '15:17:00', '60'),
(7, 6, 8, '2020-12-25', '18:18:00', '89'),
(8, 6, 5, '2020-12-25', '16:19:00', '70'),
(9, 3, 6, '2020-12-25', '12:23:00', '55'),
(10, 5, 6, '2020-12-25', '12:24:00', '30'),
(11, 6, 1, '2020-12-27', '12:41:00', '30'),
(12, 12, 1, '2021-01-08', '13:07:00', '50'),
(13, 14, 5, '2021-01-08', '19:15:00', '50'),
(14, 14, 1, '2021-01-08', '19:16:00', '50'),
(15, 12, 1, '2021-01-08', '22:54:00', '50'),
(16, 8, 5, '2021-01-09', '14:06:00', '50');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `username`, `password`, `role`, `status`, `created_at`, `phone`) VALUES
(2, 'yeshewas', '', '', '202cb962ac59075b964b07152d234b70', '', '0', '2020-12-22 00:21:26', ''),
(3, 'anteneh', 'anteneh@gmail.com', 'antish', '1234', 'admin', 'active', '2020-12-22 00:35:34', '0916327415'),
(5, 'anteneh', 'anteneh@gmail.com', 'antish', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'active', '2020-12-22 00:41:56', '0916327415'),
(6, 'yalfal', 'yalfal@gmail.com', 'yalfal', '962012d09b8170d912f0669f6d7d9d07', 'manager', 'active', '2020-12-24 07:55:24', ''),
(7, 'barnabas', 'barni@gmail.com', 'barni', '81dc9bdb52d04dc20036dbd8313ed055', 'staff', 'active', '2020-12-24 07:56:02', '0912104767');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `show_id` (`show_id`);

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
-- Indexes for table `messageout`
--
ALTER TABLE `messageout`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `seat_booked`
--
ALTER TABLE `seat_booked`
  ADD PRIMARY KEY (`id`),
  ADD KEY `show_id` (`show_id`);

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
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `geners`
--
ALTER TABLE `geners`
  MODIFY `gener_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messageout`
--
ALTER TABLE `messageout`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seat_booked`
--
ALTER TABLE `seat_booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD CONSTRAINT `booking_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `booking_info_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `showtime` (`show_id`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`mov_ratting`) REFERENCES `ratings` (`rating_id`),
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`mov_gener`) REFERENCES `geners` (`gener_id`);

--
-- Constraints for table `seat_booked`
--
ALTER TABLE `seat_booked`
  ADD CONSTRAINT `seat_booked_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `showtime` (`show_id`);

--
-- Constraints for table `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`),
  ADD CONSTRAINT `showtime_ibfk_2` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`cinema_id`),
  ADD CONSTRAINT `showtime_ibfk_3` FOREIGN KEY (`mov_id`) REFERENCES `movie` (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
