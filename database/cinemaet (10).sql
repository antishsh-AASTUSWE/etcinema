-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 05:57 PM
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

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `account_number`, `account_name`, `bank_name`) VALUES
(1, '1000000233445', 'Etcinema', 'CBE Birr'),
(2, '1000000048885', 'Etcinema', 'Amole Walet'),
(3, '1000000233445', 'Etcinema', 'Hello Cash'),
(4, '1000000048885', 'Etcinema', 'M-Birr');

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
  `paid_bank` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`booking_id`, `show_id`, `user_id`, `seats`, `price`, `booked_date`, `status`, `paid_bank`) VALUES
(25, 18, 5, 3, '150', '2021-01-14 12:56:39', '', 2),
(27, 19, 5, 3, '150', '2021-01-14 13:14:08', '', 2),
(28, 18, 5, 3, '150', '2021-01-14 13:29:51', '', 2),
(29, 19, 5, 12, '600', '2021-01-14 13:31:56', '', 1),
(30, 18, 10, 8, '400', '2021-01-14 13:36:17', '', 2),
(31, 18, 10, 8, '400', '2021-01-14 13:37:30', '', 1),
(32, 18, 10, 8, '400', '2021-01-14 13:38:03', '', 3),
(33, 18, 10, 8, '400', '2021-01-14 13:38:28', '', 3),
(34, 18, 10, 4, '200', '2021-01-14 13:38:49', '', 2),
(35, 18, 10, 4, '200', '2021-01-14 13:41:00', '', 2),
(36, 18, 10, 4, '200', '2021-01-14 13:42:14', '', 1),
(37, 18, 10, 5, '250', '2021-01-14 13:42:37', '', 2),
(38, 18, 10, 5, '250', '2021-01-14 13:43:20', '', 2),
(39, 19, 10, 4, '200', '2021-01-14 13:43:38', '', 3),
(40, 19, 10, 4, '200', '2021-01-14 13:44:16', '', 3),
(41, 19, 10, 4, '200', '2021-01-14 13:44:28', '', 2),
(42, 19, 10, 4, '200', '2021-01-14 13:47:48', '', 2),
(43, 19, 10, 4, '200', '2021-01-14 13:50:34', '', 3),
(44, 19, 10, 4, '200', '2021-01-14 13:51:47', '', 2),
(45, 19, 10, 2, '100', '2021-01-14 13:54:02', '', 2),
(46, 19, 10, 2, '100', '2021-01-14 13:54:14', '', 2),
(47, 19, 10, 4, '200', '2021-01-14 13:55:50', '', 2),
(48, 19, 10, 4, '200', '2021-01-14 13:56:30', '', 2),
(49, 19, 10, 2, '100', '2021-01-14 14:01:39', '', 2),
(50, 19, 10, 2, '100', '2021-01-14 14:02:26', '', 1),
(51, 19, 10, 2, '100', '2021-01-14 14:09:54', '', 3),
(52, 19, 10, 2, '100', '2021-01-14 14:16:28', '', 1),
(53, 5, 10, 4, '200', '2021-01-14 14:31:23', '', 2),
(54, 5, 10, 4, '200', '2021-01-14 14:39:31', '', 2),
(55, 5, 10, 4, '200', '2021-01-14 14:40:21', '', 2),
(56, 5, 10, 4, '200', '2021-01-14 14:43:30', '', 2),
(57, 5, 10, 4, '200', '2021-01-14 14:44:12', '', 2),
(58, 5, 10, 4, '200', '2021-01-14 14:44:26', '', 2),
(59, 5, 10, 4, '200', '2021-01-14 14:46:02', '', 2),
(60, 5, 10, 4, '200', '2021-01-14 14:46:19', '', 2),
(61, 5, 10, 4, '200', '2021-01-14 14:46:35', '', 1),
(62, 5, 10, 4, '200', '2021-01-14 14:46:55', '', 1),
(63, 5, 10, 4, '200', '2021-01-14 14:50:13', '', 1),
(64, 5, 10, 4, '200', '2021-01-14 14:51:51', '', 1),
(65, 5, 10, 4, '200', '2021-01-14 14:52:27', '', 1),
(66, 5, 10, 4, '200', '2021-01-14 14:52:52', '', 3),
(67, 5, 10, 4, '200', '2021-01-14 14:53:33', '', 3),
(68, 5, 10, 2, '100', '2021-01-14 14:53:47', '', 2),
(69, 5, 10, 2, '100', '2021-01-14 14:54:33', '', 2),
(70, 5, 10, 2, '100', '2021-01-14 14:54:45', '', 1),
(71, 5, 10, 2, '100', '2021-01-14 14:55:46', '', 1),
(72, 5, 10, 2, '100', '2021-01-14 14:56:13', '', 1),
(73, 5, 10, 2, '100', '2021-01-14 14:57:37', '', 1),
(74, 5, 10, 2, '100', '2021-01-14 14:58:59', '', 2),
(75, 5, 10, 2, '100', '2021-01-14 14:59:59', '', 2),
(76, 5, 10, 2, '100', '2021-01-14 15:00:03', '', 2),
(77, 5, 10, 2, '100', '2021-01-14 15:00:23', '', 2),
(78, 5, 10, 2, '100', '2021-01-14 15:01:23', '', 2),
(79, 5, 10, 2, '100', '2021-01-14 15:01:34', '', 2),
(80, 5, 10, 2, '100', '2021-01-14 15:01:38', '', 2),
(81, 5, 10, 2, '100', '2021-01-14 15:02:17', '', 2),
(82, 5, 10, 2, '100', '2021-01-14 15:03:49', '', 2),
(83, 5, 10, 2, '100', '2021-01-14 15:05:54', '', 2),
(84, 5, 10, 2, '100', '2021-01-14 15:06:13', '', 2),
(85, 5, 10, 2, '100', '2021-01-14 15:06:32', '', 2),
(86, 5, 10, 2, '100', '2021-01-14 15:07:03', '', 2),
(87, 5, 10, 2, '100', '2021-01-14 15:09:37', '', 2),
(88, 5, 10, 2, '100', '2021-01-14 15:10:29', '', 2),
(89, 5, 10, 2, '100', '2021-01-14 15:11:00', '', 2),
(90, 5, 10, 2, '100', '2021-01-14 15:11:09', '', 2),
(91, 5, 10, 2, '100', '2021-01-14 15:11:57', '', 2),
(92, 5, 10, 2, '100', '2021-01-14 15:12:05', '', 2),
(93, 5, 10, 2, '100', '2021-01-14 15:13:59', '', 2),
(94, 5, 10, 2, '100', '2021-01-14 15:15:02', '', 2),
(95, 5, 10, 2, '100', '2021-01-14 15:15:44', '', 2),
(96, 5, 10, 2, '100', '2021-01-14 15:17:19', '', 2),
(97, 19, 8, 1, '50', '2021-01-14 15:26:48', '', 2),
(98, 19, 8, 1, '50', '2021-01-14 15:29:09', '', 1),
(99, 19, 8, 1, '50', '2021-01-14 15:32:01', '', 1),
(100, 19, 8, 1, '50', '2021-01-14 15:33:43', '', 2),
(101, 19, 8, 1, '50', '2021-01-14 15:34:04', '', 2),
(102, 19, 8, 1, '50', '2021-01-14 15:36:16', '', 2),
(103, 19, 8, 1, '50', '2021-01-14 15:37:24', '', 2),
(104, 19, 8, 1, '50', '2021-01-14 15:37:37', '', 2),
(105, 19, 8, 1, '50', '2021-01-14 15:40:04', '', 2),
(106, 19, 8, 1, '50', '2021-01-14 15:40:26', '', 2),
(107, 19, 8, 1, '50', '2021-01-14 15:41:33', '', 2),
(108, 19, 8, 1, '50', '2021-01-14 15:42:00', '', 1);

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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `mov_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `mov_id`, `customer_id`, `title`, `body`, `created_at`) VALUES
(16, 6, 8, 'vvv', 'nnn', '2021-01-13 14:09:15'),
(17, 6, 8, 'rwgs', 'dsad', '2021-01-13 14:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `first_name`, `last_name`, `username`, `email`, `phone`, `password`, `joined_date`) VALUES
(8, 'yes', 'gat', 'yes', 'yeshewasg12@gmail.com', '0942205164', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-12 13:39:45'),
(9, 'yeshe', 'test', 'yeshewasG', 'yeshewasg@gmail.com', '0912344648', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-13 14:10:10'),
(10, 'barnabas', 'mathiw', 'Barni', 'yeshewasg1@gmail.com', '0912104767', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-14 13:35:41');

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
(15, 'Mars', 'Test', 7, 2, 'mars.jpg', 'https://www.youtube.com/watch?v=4tIXHLC24aY', '01:58', '2018-06-19', 'George Cloonee', 'English', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel quis voluptatem aliquid expedita minima aspernatur, sequi eligendi repellat autem in itaque harum mollitia omnis exercitationem odio deleniti tenetur repellendus.\r\nIllo repellat sint blanditiis amet ipsum repellendus. Eligendi dolorum doloremque alias rem ea excepturi, similique adipisci quas sunt nostrum natus ipsam, eius nobis dolorem accusamus fugiat vero cupiditate impedit necessitatibus!\r\nUllam assumenda nam, sapiente excepturi earum esse nobis explicabo, omnis sit recusandae aspernatur culpa quisquam ipsam perspiciatis eum inventore maxime qui, repudiandae corrupti veniam quasi sequi. Nihil a impedit quae!\r\nA tempore quas voluptatem dignissimos id, commodi maxime cupiditate numquam quo explicabo quibusdam aspernatur ea libero itaque, doloribus consectetur nemo veritatis neque sed. Cum error earum quae adipisci nam accusamus.\r\nImpedit quis debitis soluta saepe, quasi rem, nam repellat placeat architecto dolore porro nobis dolores ab commodi perferendis laboriosam voluptatum, natus quo minima eligendi quaerat. Sint amet adipisci doloribus? Blanditiis!'),
(18, 'Wonder woman 1887', 'A young Chinese maiden disguises herself as a male warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan.\'', 7, 2, 'wonder_woman.jpg', 'test', '2', '2021-01-20', 'Yifei Liu, Donnie Yen, Jet Li', 'engilish', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"');

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
(1, '14', '6');

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
(31, 12, '35', '2021-01-11 13:46:20'),
(32, 10, '36', '2021-01-11 15:48:56'),
(33, 10, '46', '2021-01-11 15:48:56'),
(34, 10, '36', '2021-01-11 15:49:29'),
(35, 10, '46', '2021-01-11 15:49:29'),
(36, 5, '37', '2021-01-11 15:49:55'),
(37, 5, '47', '2021-01-11 15:49:55'),
(38, 3, '13', '2021-01-11 15:56:04'),
(39, 3, '34', '2021-01-11 15:56:04'),
(40, 3, '48', '2021-01-11 15:56:04'),
(41, 3, '35', '2021-01-11 16:00:45'),
(42, 3, '36', '2021-01-11 16:00:45'),
(43, 3, '45', '2021-01-11 16:00:45'),
(44, 3, '46', '2021-01-11 16:00:45'),
(45, 11, '35', '2021-01-11 16:24:00'),
(46, 11, '36', '2021-01-11 16:24:00'),
(47, 11, '37', '2021-01-11 16:24:00'),
(48, 11, '41', '2021-01-11 16:24:00'),
(49, 11, '42', '2021-01-11 16:24:00'),
(50, 11, '412', '2021-01-11 16:24:00'),
(51, 11, '413', '2021-01-11 16:24:00'),
(52, 11, '51', '2021-01-11 16:24:00'),
(53, 11, '52', '2021-01-11 16:24:00'),
(54, 11, '512', '2021-01-11 16:24:00'),
(55, 11, '513', '2021-01-11 16:24:00'),
(56, 11, '15', '2021-01-12 09:50:20'),
(57, 11, '14', '2021-01-12 09:51:07'),
(58, 11, '13', '2021-01-12 09:51:47'),
(59, 11, '211', '2021-01-12 09:52:23'),
(60, 11, '211', '2021-01-12 09:53:00'),
(61, 12, '15', '2021-01-12 09:54:22'),
(62, 11, '11', '2021-01-12 14:11:58'),
(63, 11, '12', '2021-01-12 14:11:58'),
(64, 11, '48', '2021-01-12 14:11:58'),
(65, 11, '49', '2021-01-12 14:11:58'),
(66, 11, '56', '2021-01-12 14:11:59'),
(67, 16, '16', '2021-01-13 13:36:35'),
(68, 16, '37', '2021-01-13 13:36:35'),
(69, 16, '38', '2021-01-13 13:36:35'),
(70, 18, '47', '2021-01-14 10:52:22'),
(71, 18, '57', '2021-01-14 10:52:22'),
(72, 18, '47', '2021-01-14 10:53:58'),
(73, 18, '57', '2021-01-14 10:53:59'),
(74, 10, '411', '2021-01-14 11:26:06'),
(75, 10, '511', '2021-01-14 11:26:07'),
(76, 5, '18', '2021-01-14 12:13:38'),
(77, 5, '28', '2021-01-14 12:13:38'),
(78, 18, '28', '2021-01-14 12:29:06'),
(79, 18, '29', '2021-01-14 12:29:06'),
(80, 18, '38', '2021-01-14 12:29:07'),
(81, 18, '28', '2021-01-14 12:55:36'),
(82, 18, '29', '2021-01-14 12:55:36'),
(83, 18, '38', '2021-01-14 12:55:37'),
(84, 18, '28', '2021-01-14 12:56:39'),
(85, 18, '29', '2021-01-14 12:56:39'),
(86, 18, '38', '2021-01-14 12:56:39'),
(87, 19, '48', '2021-01-14 13:00:37'),
(88, 19, '49', '2021-01-14 13:00:37'),
(89, 19, '410', '2021-01-14 13:00:38'),
(90, 19, '59', '2021-01-14 13:00:38'),
(91, 19, '38', '2021-01-14 13:14:08'),
(92, 19, '39', '2021-01-14 13:14:08'),
(93, 19, '310', '2021-01-14 13:14:08'),
(94, 18, '49', '2021-01-14 13:29:51'),
(95, 18, '59', '2021-01-14 13:29:51'),
(96, 18, '510', '2021-01-14 13:29:51'),
(97, 19, '26', '2021-01-14 13:31:55'),
(98, 19, '33', '2021-01-14 13:31:55'),
(99, 19, '35', '2021-01-14 13:31:55'),
(100, 19, '36', '2021-01-14 13:31:55'),
(101, 19, '43', '2021-01-14 13:31:55'),
(102, 19, '44', '2021-01-14 13:31:55'),
(103, 19, '45', '2021-01-14 13:31:55'),
(104, 19, '46', '2021-01-14 13:31:55'),
(105, 19, '47', '2021-01-14 13:31:55'),
(106, 19, '53', '2021-01-14 13:31:55'),
(107, 19, '54', '2021-01-14 13:31:56'),
(108, 19, '57', '2021-01-14 13:31:56'),
(109, 18, '210', '2021-01-14 13:36:17'),
(110, 18, '212', '2021-01-14 13:36:17'),
(111, 18, '213', '2021-01-14 13:36:17'),
(112, 18, '310', '2021-01-14 13:36:17'),
(113, 18, '311', '2021-01-14 13:36:17'),
(114, 18, '312', '2021-01-14 13:36:17'),
(115, 18, '411', '2021-01-14 13:36:17'),
(116, 18, '412', '2021-01-14 13:36:17'),
(117, 18, '210', '2021-01-14 13:37:30'),
(118, 18, '212', '2021-01-14 13:37:30'),
(119, 18, '213', '2021-01-14 13:37:30'),
(120, 18, '310', '2021-01-14 13:37:30'),
(121, 18, '311', '2021-01-14 13:37:30'),
(122, 18, '312', '2021-01-14 13:37:30'),
(123, 18, '411', '2021-01-14 13:37:30'),
(124, 18, '412', '2021-01-14 13:37:30'),
(125, 18, '210', '2021-01-14 13:38:02'),
(126, 18, '212', '2021-01-14 13:38:02'),
(127, 18, '213', '2021-01-14 13:38:02'),
(128, 18, '310', '2021-01-14 13:38:02'),
(129, 18, '311', '2021-01-14 13:38:02'),
(130, 18, '312', '2021-01-14 13:38:02'),
(131, 18, '411', '2021-01-14 13:38:02'),
(132, 18, '412', '2021-01-14 13:38:02'),
(133, 18, '210', '2021-01-14 13:38:27'),
(134, 18, '212', '2021-01-14 13:38:27'),
(135, 18, '213', '2021-01-14 13:38:27'),
(136, 18, '310', '2021-01-14 13:38:27'),
(137, 18, '311', '2021-01-14 13:38:27'),
(138, 18, '312', '2021-01-14 13:38:27'),
(139, 18, '411', '2021-01-14 13:38:28'),
(140, 18, '412', '2021-01-14 13:38:28'),
(141, 18, '15', '2021-01-14 13:38:49'),
(142, 18, '16', '2021-01-14 13:38:49'),
(143, 18, '26', '2021-01-14 13:38:49'),
(144, 18, '56', '2021-01-14 13:38:49'),
(145, 18, '15', '2021-01-14 13:40:59'),
(146, 18, '16', '2021-01-14 13:40:59'),
(147, 18, '26', '2021-01-14 13:40:59'),
(148, 18, '56', '2021-01-14 13:40:59'),
(149, 18, '15', '2021-01-14 13:42:13'),
(150, 18, '16', '2021-01-14 13:42:14'),
(151, 18, '26', '2021-01-14 13:42:14'),
(152, 18, '56', '2021-01-14 13:42:14'),
(153, 18, '41', '2021-01-14 13:42:36'),
(154, 18, '42', '2021-01-14 13:42:37'),
(155, 18, '44', '2021-01-14 13:42:37'),
(156, 18, '52', '2021-01-14 13:42:37'),
(157, 18, '53', '2021-01-14 13:42:37'),
(158, 18, '41', '2021-01-14 13:43:16'),
(159, 18, '42', '2021-01-14 13:43:16'),
(160, 18, '44', '2021-01-14 13:43:17'),
(161, 18, '52', '2021-01-14 13:43:17'),
(162, 18, '53', '2021-01-14 13:43:19'),
(163, 19, '28', '2021-01-14 13:43:38'),
(164, 19, '29', '2021-01-14 13:43:38'),
(165, 19, '210', '2021-01-14 13:43:38'),
(166, 19, '211', '2021-01-14 13:43:38'),
(167, 19, '28', '2021-01-14 13:44:15'),
(168, 19, '29', '2021-01-14 13:44:15'),
(169, 19, '210', '2021-01-14 13:44:16'),
(170, 19, '211', '2021-01-14 13:44:16'),
(171, 19, '28', '2021-01-14 13:44:28'),
(172, 19, '29', '2021-01-14 13:44:28'),
(173, 19, '210', '2021-01-14 13:44:28'),
(174, 19, '211', '2021-01-14 13:44:28'),
(175, 19, '28', '2021-01-14 13:47:48'),
(176, 19, '29', '2021-01-14 13:47:48'),
(177, 19, '210', '2021-01-14 13:47:48'),
(178, 19, '211', '2021-01-14 13:47:48'),
(179, 19, '28', '2021-01-14 13:50:33'),
(180, 19, '29', '2021-01-14 13:50:33'),
(181, 19, '210', '2021-01-14 13:50:33'),
(182, 19, '211', '2021-01-14 13:50:34'),
(183, 19, '28', '2021-01-14 13:51:46'),
(184, 19, '29', '2021-01-14 13:51:46'),
(185, 19, '210', '2021-01-14 13:51:47'),
(186, 19, '211', '2021-01-14 13:51:47'),
(187, 19, '311', '2021-01-14 13:54:02'),
(188, 19, '411', '2021-01-14 13:54:02'),
(189, 19, '311', '2021-01-14 13:54:14'),
(190, 19, '411', '2021-01-14 13:54:14'),
(191, 19, '11', '2021-01-14 13:55:50'),
(192, 19, '21', '2021-01-14 13:55:50'),
(193, 19, '22', '2021-01-14 13:55:50'),
(194, 19, '32', '2021-01-14 13:55:50'),
(195, 19, '11', '2021-01-14 13:56:29'),
(196, 19, '21', '2021-01-14 13:56:29'),
(197, 19, '22', '2021-01-14 13:56:29'),
(198, 19, '32', '2021-01-14 13:56:30'),
(199, 19, '511', '2021-01-14 14:01:39'),
(200, 19, '512', '2021-01-14 14:01:39'),
(201, 19, '511', '2021-01-14 14:02:25'),
(202, 19, '512', '2021-01-14 14:02:26'),
(203, 19, '412', '2021-01-14 14:09:54'),
(204, 19, '413', '2021-01-14 14:09:54'),
(205, 19, '412', '2021-01-14 14:16:28'),
(206, 19, '413', '2021-01-14 14:16:28'),
(207, 5, '39', '2021-01-14 14:31:23'),
(208, 5, '310', '2021-01-14 14:31:23'),
(209, 5, '49', '2021-01-14 14:31:23'),
(210, 5, '410', '2021-01-14 14:31:23'),
(211, 5, '39', '2021-01-14 14:39:30'),
(212, 5, '310', '2021-01-14 14:39:30'),
(213, 5, '49', '2021-01-14 14:39:30'),
(214, 5, '410', '2021-01-14 14:39:30'),
(215, 5, '39', '2021-01-14 14:40:20'),
(216, 5, '310', '2021-01-14 14:40:20'),
(217, 5, '49', '2021-01-14 14:40:20'),
(218, 5, '410', '2021-01-14 14:40:21'),
(219, 5, '39', '2021-01-14 14:43:29'),
(220, 5, '310', '2021-01-14 14:43:30'),
(221, 5, '49', '2021-01-14 14:43:30'),
(222, 5, '410', '2021-01-14 14:43:30'),
(223, 5, '39', '2021-01-14 14:44:12'),
(224, 5, '310', '2021-01-14 14:44:12'),
(225, 5, '49', '2021-01-14 14:44:12'),
(226, 5, '410', '2021-01-14 14:44:12'),
(227, 5, '39', '2021-01-14 14:44:26'),
(228, 5, '310', '2021-01-14 14:44:26'),
(229, 5, '49', '2021-01-14 14:44:26'),
(230, 5, '410', '2021-01-14 14:44:26'),
(231, 5, '39', '2021-01-14 14:46:01'),
(232, 5, '310', '2021-01-14 14:46:02'),
(233, 5, '49', '2021-01-14 14:46:02'),
(234, 5, '410', '2021-01-14 14:46:02'),
(235, 5, '39', '2021-01-14 14:46:18'),
(236, 5, '310', '2021-01-14 14:46:18'),
(237, 5, '49', '2021-01-14 14:46:19'),
(238, 5, '410', '2021-01-14 14:46:19'),
(239, 5, '39', '2021-01-14 14:46:34'),
(240, 5, '310', '2021-01-14 14:46:34'),
(241, 5, '49', '2021-01-14 14:46:34'),
(242, 5, '410', '2021-01-14 14:46:34'),
(243, 5, '39', '2021-01-14 14:46:54'),
(244, 5, '310', '2021-01-14 14:46:54'),
(245, 5, '49', '2021-01-14 14:46:54'),
(246, 5, '410', '2021-01-14 14:46:55'),
(247, 5, '39', '2021-01-14 14:50:13'),
(248, 5, '310', '2021-01-14 14:50:13'),
(249, 5, '49', '2021-01-14 14:50:13'),
(250, 5, '410', '2021-01-14 14:50:13'),
(251, 5, '39', '2021-01-14 14:51:50'),
(252, 5, '310', '2021-01-14 14:51:50'),
(253, 5, '49', '2021-01-14 14:51:51'),
(254, 5, '410', '2021-01-14 14:51:51'),
(255, 5, '39', '2021-01-14 14:52:27'),
(256, 5, '310', '2021-01-14 14:52:27'),
(257, 5, '49', '2021-01-14 14:52:27'),
(258, 5, '410', '2021-01-14 14:52:27'),
(259, 5, '39', '2021-01-14 14:52:52'),
(260, 5, '310', '2021-01-14 14:52:52'),
(261, 5, '49', '2021-01-14 14:52:52'),
(262, 5, '410', '2021-01-14 14:52:52'),
(263, 5, '39', '2021-01-14 14:53:33'),
(264, 5, '310', '2021-01-14 14:53:33'),
(265, 5, '49', '2021-01-14 14:53:33'),
(266, 5, '410', '2021-01-14 14:53:33'),
(267, 5, '510', '2021-01-14 14:53:47'),
(268, 5, '511', '2021-01-14 14:53:47'),
(269, 5, '510', '2021-01-14 14:54:33'),
(270, 5, '511', '2021-01-14 14:54:33'),
(271, 5, '510', '2021-01-14 14:54:44'),
(272, 5, '511', '2021-01-14 14:54:45'),
(273, 5, '510', '2021-01-14 14:55:46'),
(274, 5, '511', '2021-01-14 14:55:46'),
(275, 5, '510', '2021-01-14 14:56:13'),
(276, 5, '511', '2021-01-14 14:56:13'),
(277, 5, '510', '2021-01-14 14:57:37'),
(278, 5, '511', '2021-01-14 14:57:37'),
(279, 5, '510', '2021-01-14 14:58:58'),
(280, 5, '511', '2021-01-14 14:58:59'),
(281, 5, '510', '2021-01-14 14:59:58'),
(282, 5, '511', '2021-01-14 14:59:58'),
(283, 5, '510', '2021-01-14 15:00:03'),
(284, 5, '511', '2021-01-14 15:00:03'),
(285, 5, '510', '2021-01-14 15:00:22'),
(286, 5, '511', '2021-01-14 15:00:23'),
(287, 5, '510', '2021-01-14 15:01:23'),
(288, 5, '511', '2021-01-14 15:01:23'),
(289, 5, '510', '2021-01-14 15:01:34'),
(290, 5, '511', '2021-01-14 15:01:34'),
(291, 5, '510', '2021-01-14 15:01:38'),
(292, 5, '511', '2021-01-14 15:01:38'),
(293, 5, '510', '2021-01-14 15:02:17'),
(294, 5, '511', '2021-01-14 15:02:17'),
(295, 5, '510', '2021-01-14 15:03:49'),
(296, 5, '511', '2021-01-14 15:03:49'),
(297, 5, '510', '2021-01-14 15:05:54'),
(298, 5, '511', '2021-01-14 15:05:54'),
(299, 5, '510', '2021-01-14 15:06:12'),
(300, 5, '511', '2021-01-14 15:06:12'),
(301, 5, '510', '2021-01-14 15:06:32'),
(302, 5, '511', '2021-01-14 15:06:32'),
(303, 5, '510', '2021-01-14 15:07:03'),
(304, 5, '511', '2021-01-14 15:07:03'),
(305, 5, '510', '2021-01-14 15:09:37'),
(306, 5, '511', '2021-01-14 15:09:37'),
(307, 5, '510', '2021-01-14 15:10:29'),
(308, 5, '511', '2021-01-14 15:10:29'),
(309, 5, '510', '2021-01-14 15:11:00'),
(310, 5, '511', '2021-01-14 15:11:00'),
(311, 5, '510', '2021-01-14 15:11:09'),
(312, 5, '511', '2021-01-14 15:11:09'),
(313, 5, '510', '2021-01-14 15:11:57'),
(314, 5, '511', '2021-01-14 15:11:57'),
(315, 5, '510', '2021-01-14 15:12:04'),
(316, 5, '511', '2021-01-14 15:12:04'),
(317, 5, '510', '2021-01-14 15:13:59'),
(318, 5, '511', '2021-01-14 15:13:59'),
(319, 5, '510', '2021-01-14 15:15:02'),
(320, 5, '511', '2021-01-14 15:15:02'),
(321, 5, '510', '2021-01-14 15:15:44'),
(322, 5, '511', '2021-01-14 15:15:44'),
(323, 5, '510', '2021-01-14 15:17:19'),
(324, 5, '511', '2021-01-14 15:17:19'),
(325, 19, '112', '2021-01-14 15:26:48'),
(326, 19, '112', '2021-01-14 15:29:09'),
(327, 19, '112', '2021-01-14 15:32:01'),
(328, 19, '112', '2021-01-14 15:33:43'),
(329, 19, '112', '2021-01-14 15:34:04'),
(330, 19, '112', '2021-01-14 15:36:16'),
(331, 19, '112', '2021-01-14 15:37:24'),
(332, 19, '112', '2021-01-14 15:37:37'),
(333, 19, '112', '2021-01-14 15:40:04'),
(334, 19, '112', '2021-01-14 15:40:26'),
(335, 19, '112', '2021-01-14 15:41:33'),
(336, 19, '112', '2021-01-14 15:42:00');

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
(16, 8, 5, '2021-01-09', '14:06:00', '50'),
(18, 15, 8, '2021-01-15', '03:19:00', '50'),
(19, 11, 5, '2021-01-14', '11:25:00', '50');

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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `foreignkey` (`customer_id`),
  ADD KEY `mov_id` (`mov_id`);

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
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `geners`
--
ALTER TABLE `geners`
  MODIFY `gener_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messageout`
--
ALTER TABLE `messageout`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  ADD CONSTRAINT `booking_info_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `showtime` (`show_id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`mov_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `foreignkey` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`cust_id`);

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
