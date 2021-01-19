-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 12:52 PM
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
(25, 18, 5, 3, '150', '2021-01-18 10:43:49', 'expired', 2),
(27, 19, 5, 3, '150', '2021-01-18 10:43:49', 'expired', 2),
(28, 18, 5, 3, '150', '2021-01-18 10:43:49', 'expired', 2),
(29, 19, 5, 12, '600', '2021-01-18 10:43:49', 'expired', 1),
(30, 18, 10, 8, '400', '2021-01-18 10:43:49', 'expired', 2),
(31, 18, 10, 8, '400', '2021-01-18 10:43:49', 'expired', 1),
(32, 18, 10, 8, '400', '2021-01-18 10:43:49', 'expired', 3),
(33, 18, 10, 8, '400', '2021-01-18 10:43:49', 'expired', 3),
(34, 18, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(35, 18, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(36, 18, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 1),
(37, 18, 10, 5, '250', '2021-01-18 10:43:49', 'expired', 2),
(38, 18, 10, 5, '250', '2021-01-18 10:43:49', 'expired', 2),
(39, 19, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 3),
(40, 19, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 3),
(41, 19, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(42, 19, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(43, 19, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 3),
(44, 19, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(45, 19, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(46, 19, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(47, 19, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(48, 19, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(49, 19, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(50, 19, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 1),
(51, 19, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 3),
(52, 19, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 1),
(53, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(54, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(55, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(56, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(57, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(58, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(59, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(60, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 2),
(61, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 1),
(62, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 1),
(63, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 1),
(64, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 1),
(65, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 1),
(66, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 3),
(67, 5, 10, 4, '200', '2021-01-18 10:43:49', 'expired', 3),
(68, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(69, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(70, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 1),
(71, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 1),
(72, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 1),
(73, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 1),
(74, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(75, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(76, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(77, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(78, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(79, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(80, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(81, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(82, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(83, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(84, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(85, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(86, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(87, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(88, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(89, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(90, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(91, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(92, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(93, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(94, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(95, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(96, 5, 10, 2, '100', '2021-01-18 10:43:49', 'expired', 2),
(97, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 2),
(98, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 1),
(99, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 1),
(100, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 2),
(101, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 2),
(102, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 2),
(103, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 2),
(104, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 2),
(105, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 2),
(106, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 2),
(107, 19, 8, 1, '50', '2021-01-18 10:43:49', 'expired', 2),
(108, 19, 8, 1, '60', '2021-01-18 10:43:49', 'expired', 1),
(109, 18, 8, 2, '100', '2021-01-18 10:43:49', 'expired', 3),
(111, 10, 8, 2, '60', '2021-01-18 10:43:49', 'expired', 1),
(112, 10, 8, 2, '60', '2021-01-18 10:43:49', 'expired', 1),
(113, 10, 8, 2, '60', '2021-01-18 10:45:08', 'expired', 1),
(114, 19, 5, 2, '100', '2021-01-19 08:27:08', 'expired', 4),
(115, 19, 5, 2, '100', '2021-01-19 10:00:08', 'expired', 1),
(116, 19, 5, 2, '100', '2021-01-19 10:50:08', 'expired', 1),
(117, 19, 5, 3, '150', '2021-01-19 10:53:49', 'expired', 1),
(118, 3, 8, 4, '200', '2021-01-19 10:56:08', 'expired', 1),
(119, 3, 8, 4, '200', '2021-01-19 10:57:08', 'expired', 1),
(120, 5, 8, 4, '200', '2021-01-19 11:11:08', 'expired', 1),
(121, 5, 8, 4, '200', '2021-01-19 11:12:08', 'expired', 1),
(122, 5, 8, 4, '200', '2021-01-19 11:14:08', 'expired', 1),
(123, 5, 8, 4, '200', '2021-01-19 11:29:08', 'expired', 1);

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
-- Table structure for table `messagein`
--

CREATE TABLE `messagein` (
  `id` int(11) NOT NULL,
  `SendTime` varchar(255) NOT NULL,
  `MessageFrom` varchar(255) NOT NULL,
  `MessageTo` varchar(255) NOT NULL,
  `MessageText` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagein`
--

INSERT INTO `messagein` (`id`, `SendTime`, `MessageFrom`, `MessageTo`, `MessageText`, `status`) VALUES
(1, '2021-01-18 12:41:57', '+251942205164', '', 'ዉድ ደንበኛ  60.00Br. ለ YESHEWAS GETAWBEZA በቀን 17/01/21 17:49 በደረሰኝ ቁጥር 8AH24X2V48 ልከዋል። አሁን ያሎት ቀሪ ሂሳብ 12.00Br. ነዉ፡፡እናመሰግናለን!', ''),
(2, '2021-01-18 12:43:17', '+251942205164', '', 'ዉድ ደንበኛ  100.00Br. ለ YESHEWAS GETAWBEZA በቀን 17/01/21 17:49 በደረሰኝ ቁጥር 8AH24X2V48 ልከዋል። አሁን ያሎት ቀሪ ሂሳብ 12.00Br. ነዉ፡፡እናመሰግናለን!', ''),
(3, '2021-01-19 08:03:46', '251994', '', 'Dear Customer, your prepaid account has been recharged succesfully.your Recharged balance is 50.00 Birr.your  balance is 50.03 Birr.With this balance your account will expire on 18/12/2021.ethio telecom', ''),
(4, '2021-01-19 08:06:22', '251994', '', 'Dear Customer, your prepaid account has been recharged succesfully.your Recharged balance is 15.00 Birr.your  balance is 130.03 Birr.With this balance your account will expire on 18/12/2021.ethio telecom', ''),
(5, '2021-01-19 08:30:24', '251994', '', 'Dear customer,0944024604 subscriber transferred 450.00 Birr for you.Your balance is 484.83 Birr now.ethio telecom ', ''),
(6, '2021-01-19 08:08:24', '251994', '', 'Dear Customer, your remaining amount  from Monthly Flexi with holiday gift 1900 unit with free of 260 unit to be expired after 30 days is 133 unit with expiry date on 2021-02-08 at 20:25:56;\r\nStay Safe! Ethio telecom.', ''),
(7, '2021-01-19 08:04:09', '251994', '', 'Dear Customer, your prepaid account has been recharged succesfully.your Recharged balance is 50.00 Birr.your  balance is 100.03 Birr.With this balance your account will expire on 18/12/2021.ethio telecom', ''),
(8, '2021-01-19 08:31:50', '994', '', 'Dear Customer, you have successfully sent Gift Weekly Unlimited Premium Internet and SMS plan to be expired after 7 days to 0944024604  Happy Holiday! ethio telecom.', ''),
(9, '2021-01-19 14:11:18', '+251942205164', '', 'ዉድ ደንበኛ  200.00Br. ለ YESHEWAS GETAWBEZA በቀን 17/01/21 17:49 በደረሰኝ ቁጥር 8AH24X2V48 ልከዋል። አሁን ያሎት ቀሪ ሂሳብ 12.00Br. ነዉ፡፡እናመሰግናለን!', 'paid'),
(10, '2021-01-19 08:06:38', '251994', '', 'Dear Customer, your prepaid account has been recharged succesfully.your Recharged balance is 15.00 Birr.your  balance is 145.03 Birr.With this balance your account will expire on 18/12/2021.ethio telecom', ''),
(11, '2021-01-19 08:06:05', '251994', '', 'Dear Customer, your prepaid account has been recharged succesfully.your Recharged balance is 15.00 Birr.your  balance is 115.03 Birr.With this balance your account will expire on 18/12/2021.ethio telecom', '');

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
  `reserved_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_booked`
--

INSERT INTO `seat_booked` (`id`, `show_id`, `seat`, `reserved_date`, `booking_id`) VALUES
(21, 1, '55', '2021-01-11 12:45:27', 0),
(22, 9, '46', '2021-01-11 12:45:27', 0),
(23, 9, '47', '2021-01-11 12:45:27', 0),
(24, 15, '25', '2021-01-11 13:38:33', 0),
(25, 15, '54', '2021-01-11 13:38:33', 0),
(26, 15, '55', '2021-01-11 13:38:33', 0),
(27, 12, '11', '2021-01-11 13:39:18', 0),
(28, 12, '24', '2021-01-11 13:46:19', 0),
(29, 12, '25', '2021-01-11 13:46:20', 0),
(30, 12, '34', '2021-01-11 13:46:20', 0),
(31, 12, '35', '2021-01-11 13:46:20', 0),
(32, 10, '36', '2021-01-11 15:48:56', 0),
(33, 10, '46', '2021-01-11 15:48:56', 0),
(34, 10, '36', '2021-01-11 15:49:29', 0),
(35, 10, '46', '2021-01-11 15:49:29', 0),
(36, 5, '37', '2021-01-11 15:49:55', 0),
(37, 5, '47', '2021-01-11 15:49:55', 0),
(38, 3, '13', '2021-01-11 15:56:04', 0),
(39, 3, '34', '2021-01-11 15:56:04', 0),
(40, 3, '48', '2021-01-11 15:56:04', 0),
(41, 3, '35', '2021-01-11 16:00:45', 0),
(42, 3, '36', '2021-01-11 16:00:45', 0),
(43, 3, '45', '2021-01-11 16:00:45', 0),
(44, 3, '46', '2021-01-11 16:00:45', 0),
(45, 11, '35', '2021-01-11 16:24:00', 0),
(46, 11, '36', '2021-01-11 16:24:00', 0),
(47, 11, '37', '2021-01-11 16:24:00', 0),
(48, 11, '41', '2021-01-11 16:24:00', 0),
(49, 11, '42', '2021-01-11 16:24:00', 0),
(50, 11, '412', '2021-01-11 16:24:00', 0),
(51, 11, '413', '2021-01-11 16:24:00', 0),
(52, 11, '51', '2021-01-11 16:24:00', 0),
(53, 11, '52', '2021-01-11 16:24:00', 0),
(54, 11, '512', '2021-01-11 16:24:00', 0),
(55, 11, '513', '2021-01-11 16:24:00', 0),
(56, 11, '15', '2021-01-12 09:50:20', 0),
(57, 11, '14', '2021-01-12 09:51:07', 0),
(58, 11, '13', '2021-01-12 09:51:47', 0),
(59, 11, '211', '2021-01-12 09:52:23', 0),
(60, 11, '211', '2021-01-12 09:53:00', 0),
(61, 12, '15', '2021-01-12 09:54:22', 0),
(62, 11, '11', '2021-01-12 14:11:58', 0),
(63, 11, '12', '2021-01-12 14:11:58', 0),
(64, 11, '48', '2021-01-12 14:11:58', 0),
(65, 11, '49', '2021-01-12 14:11:58', 0),
(66, 11, '56', '2021-01-12 14:11:59', 0),
(67, 16, '16', '2021-01-13 13:36:35', 0),
(68, 16, '37', '2021-01-13 13:36:35', 0),
(69, 16, '38', '2021-01-13 13:36:35', 0),
(70, 18, '47', '2021-01-14 10:52:22', 0),
(71, 18, '57', '2021-01-14 10:52:22', 0),
(72, 18, '47', '2021-01-14 10:53:58', 0),
(73, 18, '57', '2021-01-14 10:53:59', 0),
(74, 10, '411', '2021-01-14 11:26:06', 0),
(75, 10, '511', '2021-01-14 11:26:07', 0),
(76, 5, '18', '2021-01-14 12:13:38', 0),
(77, 5, '28', '2021-01-14 12:13:38', 0),
(78, 18, '28', '2021-01-14 12:29:06', 0),
(79, 18, '29', '2021-01-14 12:29:06', 0),
(80, 18, '38', '2021-01-14 12:29:07', 0),
(81, 18, '28', '2021-01-14 12:55:36', 0),
(82, 18, '29', '2021-01-14 12:55:36', 0),
(83, 18, '38', '2021-01-14 12:55:37', 0),
(84, 18, '28', '2021-01-14 12:56:39', 0),
(85, 18, '29', '2021-01-14 12:56:39', 0),
(86, 18, '38', '2021-01-14 12:56:39', 0),
(87, 19, '48', '2021-01-14 13:00:37', 0),
(88, 19, '49', '2021-01-14 13:00:37', 0),
(89, 19, '410', '2021-01-14 13:00:38', 0),
(90, 19, '59', '2021-01-14 13:00:38', 0),
(91, 19, '38', '2021-01-14 13:14:08', 0),
(92, 19, '39', '2021-01-14 13:14:08', 0),
(93, 19, '310', '2021-01-14 13:14:08', 0),
(94, 18, '49', '2021-01-14 13:29:51', 0),
(95, 18, '59', '2021-01-14 13:29:51', 0),
(96, 18, '510', '2021-01-14 13:29:51', 0),
(97, 19, '26', '2021-01-14 13:31:55', 0),
(98, 19, '33', '2021-01-14 13:31:55', 0),
(99, 19, '35', '2021-01-14 13:31:55', 0),
(100, 19, '36', '2021-01-14 13:31:55', 0),
(101, 19, '43', '2021-01-14 13:31:55', 0),
(102, 19, '44', '2021-01-14 13:31:55', 0),
(103, 19, '45', '2021-01-14 13:31:55', 0),
(104, 19, '46', '2021-01-14 13:31:55', 0),
(105, 19, '47', '2021-01-14 13:31:55', 0),
(106, 19, '53', '2021-01-14 13:31:55', 0),
(107, 19, '54', '2021-01-14 13:31:56', 0),
(108, 19, '57', '2021-01-14 13:31:56', 0),
(109, 18, '210', '2021-01-14 13:36:17', 0),
(110, 18, '212', '2021-01-14 13:36:17', 0),
(111, 18, '213', '2021-01-14 13:36:17', 0),
(112, 18, '310', '2021-01-14 13:36:17', 0),
(113, 18, '311', '2021-01-14 13:36:17', 0),
(114, 18, '312', '2021-01-14 13:36:17', 0),
(115, 18, '411', '2021-01-14 13:36:17', 0),
(116, 18, '412', '2021-01-14 13:36:17', 0),
(117, 18, '210', '2021-01-14 13:37:30', 0),
(118, 18, '212', '2021-01-14 13:37:30', 0),
(119, 18, '213', '2021-01-14 13:37:30', 0),
(120, 18, '310', '2021-01-14 13:37:30', 0),
(121, 18, '311', '2021-01-14 13:37:30', 0),
(122, 18, '312', '2021-01-14 13:37:30', 0),
(123, 18, '411', '2021-01-14 13:37:30', 0),
(124, 18, '412', '2021-01-14 13:37:30', 0),
(125, 18, '210', '2021-01-14 13:38:02', 0),
(126, 18, '212', '2021-01-14 13:38:02', 0),
(127, 18, '213', '2021-01-14 13:38:02', 0),
(128, 18, '310', '2021-01-14 13:38:02', 0),
(129, 18, '311', '2021-01-14 13:38:02', 0),
(130, 18, '312', '2021-01-14 13:38:02', 0),
(131, 18, '411', '2021-01-14 13:38:02', 0),
(132, 18, '412', '2021-01-14 13:38:02', 0),
(133, 18, '210', '2021-01-14 13:38:27', 0),
(134, 18, '212', '2021-01-14 13:38:27', 0),
(135, 18, '213', '2021-01-14 13:38:27', 0),
(136, 18, '310', '2021-01-14 13:38:27', 0),
(137, 18, '311', '2021-01-14 13:38:27', 0),
(138, 18, '312', '2021-01-14 13:38:27', 0),
(139, 18, '411', '2021-01-14 13:38:28', 0),
(140, 18, '412', '2021-01-14 13:38:28', 0),
(141, 18, '15', '2021-01-14 13:38:49', 0),
(142, 18, '16', '2021-01-14 13:38:49', 0),
(143, 18, '26', '2021-01-14 13:38:49', 0),
(144, 18, '56', '2021-01-14 13:38:49', 0),
(145, 18, '15', '2021-01-14 13:40:59', 0),
(146, 18, '16', '2021-01-14 13:40:59', 0),
(147, 18, '26', '2021-01-14 13:40:59', 0),
(148, 18, '56', '2021-01-14 13:40:59', 0),
(149, 18, '15', '2021-01-14 13:42:13', 0),
(150, 18, '16', '2021-01-14 13:42:14', 0),
(151, 18, '26', '2021-01-14 13:42:14', 0),
(152, 18, '56', '2021-01-14 13:42:14', 0),
(153, 18, '41', '2021-01-14 13:42:36', 0),
(154, 18, '42', '2021-01-14 13:42:37', 0),
(155, 18, '44', '2021-01-14 13:42:37', 0),
(156, 18, '52', '2021-01-14 13:42:37', 0),
(157, 18, '53', '2021-01-14 13:42:37', 0),
(158, 18, '41', '2021-01-14 13:43:16', 0),
(159, 18, '42', '2021-01-14 13:43:16', 0),
(160, 18, '44', '2021-01-14 13:43:17', 0),
(161, 18, '52', '2021-01-14 13:43:17', 0),
(162, 18, '53', '2021-01-14 13:43:19', 0),
(163, 19, '28', '2021-01-14 13:43:38', 0),
(164, 19, '29', '2021-01-14 13:43:38', 0),
(165, 19, '210', '2021-01-14 13:43:38', 0),
(166, 19, '211', '2021-01-14 13:43:38', 0),
(167, 19, '28', '2021-01-14 13:44:15', 0),
(168, 19, '29', '2021-01-14 13:44:15', 0),
(169, 19, '210', '2021-01-14 13:44:16', 0),
(170, 19, '211', '2021-01-14 13:44:16', 0),
(171, 19, '28', '2021-01-14 13:44:28', 0),
(172, 19, '29', '2021-01-14 13:44:28', 0),
(173, 19, '210', '2021-01-14 13:44:28', 0),
(174, 19, '211', '2021-01-14 13:44:28', 0),
(175, 19, '28', '2021-01-14 13:47:48', 0),
(176, 19, '29', '2021-01-14 13:47:48', 0),
(177, 19, '210', '2021-01-14 13:47:48', 0),
(178, 19, '211', '2021-01-14 13:47:48', 0),
(179, 19, '28', '2021-01-14 13:50:33', 0),
(180, 19, '29', '2021-01-14 13:50:33', 0),
(181, 19, '210', '2021-01-14 13:50:33', 0),
(182, 19, '211', '2021-01-14 13:50:34', 0),
(183, 19, '28', '2021-01-14 13:51:46', 0),
(184, 19, '29', '2021-01-14 13:51:46', 0),
(185, 19, '210', '2021-01-14 13:51:47', 0),
(186, 19, '211', '2021-01-14 13:51:47', 0),
(187, 19, '311', '2021-01-14 13:54:02', 0),
(188, 19, '411', '2021-01-14 13:54:02', 0),
(189, 19, '311', '2021-01-14 13:54:14', 0),
(190, 19, '411', '2021-01-14 13:54:14', 0),
(191, 19, '11', '2021-01-14 13:55:50', 0),
(192, 19, '21', '2021-01-14 13:55:50', 0),
(193, 19, '22', '2021-01-14 13:55:50', 0),
(194, 19, '32', '2021-01-14 13:55:50', 0),
(195, 19, '11', '2021-01-14 13:56:29', 0),
(196, 19, '21', '2021-01-14 13:56:29', 0),
(197, 19, '22', '2021-01-14 13:56:29', 0),
(198, 19, '32', '2021-01-14 13:56:30', 0),
(199, 19, '511', '2021-01-14 14:01:39', 0),
(200, 19, '512', '2021-01-14 14:01:39', 0),
(201, 19, '511', '2021-01-14 14:02:25', 0),
(202, 19, '512', '2021-01-14 14:02:26', 0),
(203, 19, '412', '2021-01-14 14:09:54', 0),
(204, 19, '413', '2021-01-14 14:09:54', 0),
(205, 19, '412', '2021-01-14 14:16:28', 0),
(206, 19, '413', '2021-01-14 14:16:28', 0),
(207, 5, '39', '2021-01-14 14:31:23', 0),
(208, 5, '310', '2021-01-14 14:31:23', 0),
(209, 5, '49', '2021-01-14 14:31:23', 0),
(210, 5, '410', '2021-01-14 14:31:23', 0),
(211, 5, '39', '2021-01-14 14:39:30', 0),
(212, 5, '310', '2021-01-14 14:39:30', 0),
(213, 5, '49', '2021-01-14 14:39:30', 0),
(214, 5, '410', '2021-01-14 14:39:30', 0),
(215, 5, '39', '2021-01-14 14:40:20', 0),
(216, 5, '310', '2021-01-14 14:40:20', 0),
(217, 5, '49', '2021-01-14 14:40:20', 0),
(218, 5, '410', '2021-01-14 14:40:21', 0),
(219, 5, '39', '2021-01-14 14:43:29', 0),
(220, 5, '310', '2021-01-14 14:43:30', 0),
(221, 5, '49', '2021-01-14 14:43:30', 0),
(222, 5, '410', '2021-01-14 14:43:30', 0),
(223, 5, '39', '2021-01-14 14:44:12', 0),
(224, 5, '310', '2021-01-14 14:44:12', 0),
(225, 5, '49', '2021-01-14 14:44:12', 0),
(226, 5, '410', '2021-01-14 14:44:12', 0),
(227, 5, '39', '2021-01-14 14:44:26', 0),
(228, 5, '310', '2021-01-14 14:44:26', 0),
(229, 5, '49', '2021-01-14 14:44:26', 0),
(230, 5, '410', '2021-01-14 14:44:26', 0),
(231, 5, '39', '2021-01-14 14:46:01', 0),
(232, 5, '310', '2021-01-14 14:46:02', 0),
(233, 5, '49', '2021-01-14 14:46:02', 0),
(234, 5, '410', '2021-01-14 14:46:02', 0),
(235, 5, '39', '2021-01-14 14:46:18', 0),
(236, 5, '310', '2021-01-14 14:46:18', 0),
(237, 5, '49', '2021-01-14 14:46:19', 0),
(238, 5, '410', '2021-01-14 14:46:19', 0),
(239, 5, '39', '2021-01-14 14:46:34', 0),
(240, 5, '310', '2021-01-14 14:46:34', 0),
(241, 5, '49', '2021-01-14 14:46:34', 0),
(242, 5, '410', '2021-01-14 14:46:34', 0),
(243, 5, '39', '2021-01-14 14:46:54', 0),
(244, 5, '310', '2021-01-14 14:46:54', 0),
(245, 5, '49', '2021-01-14 14:46:54', 0),
(246, 5, '410', '2021-01-14 14:46:55', 0),
(247, 5, '39', '2021-01-14 14:50:13', 0),
(248, 5, '310', '2021-01-14 14:50:13', 0),
(249, 5, '49', '2021-01-14 14:50:13', 0),
(250, 5, '410', '2021-01-14 14:50:13', 0),
(251, 5, '39', '2021-01-14 14:51:50', 0),
(252, 5, '310', '2021-01-14 14:51:50', 0),
(253, 5, '49', '2021-01-14 14:51:51', 0),
(254, 5, '410', '2021-01-14 14:51:51', 0),
(255, 5, '39', '2021-01-14 14:52:27', 0),
(256, 5, '310', '2021-01-14 14:52:27', 0),
(257, 5, '49', '2021-01-14 14:52:27', 0),
(258, 5, '410', '2021-01-14 14:52:27', 0),
(259, 5, '39', '2021-01-14 14:52:52', 0),
(260, 5, '310', '2021-01-14 14:52:52', 0),
(261, 5, '49', '2021-01-14 14:52:52', 0),
(262, 5, '410', '2021-01-14 14:52:52', 0),
(263, 5, '39', '2021-01-14 14:53:33', 0),
(264, 5, '310', '2021-01-14 14:53:33', 0),
(265, 5, '49', '2021-01-14 14:53:33', 0),
(266, 5, '410', '2021-01-14 14:53:33', 0),
(267, 5, '510', '2021-01-14 14:53:47', 0),
(268, 5, '511', '2021-01-14 14:53:47', 0),
(269, 5, '510', '2021-01-14 14:54:33', 0),
(270, 5, '511', '2021-01-14 14:54:33', 0),
(271, 5, '510', '2021-01-14 14:54:44', 0),
(272, 5, '511', '2021-01-14 14:54:45', 0),
(273, 5, '510', '2021-01-14 14:55:46', 0),
(274, 5, '511', '2021-01-14 14:55:46', 0),
(275, 5, '510', '2021-01-14 14:56:13', 0),
(276, 5, '511', '2021-01-14 14:56:13', 0),
(277, 5, '510', '2021-01-14 14:57:37', 0),
(278, 5, '511', '2021-01-14 14:57:37', 0),
(279, 5, '510', '2021-01-14 14:58:58', 0),
(280, 5, '511', '2021-01-14 14:58:59', 0),
(281, 5, '510', '2021-01-14 14:59:58', 0),
(282, 5, '511', '2021-01-14 14:59:58', 0),
(283, 5, '510', '2021-01-14 15:00:03', 0),
(284, 5, '511', '2021-01-14 15:00:03', 0),
(285, 5, '510', '2021-01-14 15:00:22', 0),
(286, 5, '511', '2021-01-14 15:00:23', 0),
(287, 5, '510', '2021-01-14 15:01:23', 0),
(288, 5, '511', '2021-01-14 15:01:23', 0),
(289, 5, '510', '2021-01-14 15:01:34', 0),
(290, 5, '511', '2021-01-14 15:01:34', 0),
(291, 5, '510', '2021-01-14 15:01:38', 0),
(292, 5, '511', '2021-01-14 15:01:38', 0),
(293, 5, '510', '2021-01-14 15:02:17', 0),
(294, 5, '511', '2021-01-14 15:02:17', 0),
(295, 5, '510', '2021-01-14 15:03:49', 0),
(296, 5, '511', '2021-01-14 15:03:49', 0),
(297, 5, '510', '2021-01-14 15:05:54', 0),
(298, 5, '511', '2021-01-14 15:05:54', 0),
(299, 5, '510', '2021-01-14 15:06:12', 0),
(300, 5, '511', '2021-01-14 15:06:12', 0),
(301, 5, '510', '2021-01-14 15:06:32', 0),
(302, 5, '511', '2021-01-14 15:06:32', 0),
(303, 5, '510', '2021-01-14 15:07:03', 0),
(304, 5, '511', '2021-01-14 15:07:03', 0),
(305, 5, '510', '2021-01-14 15:09:37', 0),
(306, 5, '511', '2021-01-14 15:09:37', 0),
(307, 5, '510', '2021-01-14 15:10:29', 0),
(308, 5, '511', '2021-01-14 15:10:29', 0),
(309, 5, '510', '2021-01-14 15:11:00', 0),
(310, 5, '511', '2021-01-14 15:11:00', 0),
(311, 5, '510', '2021-01-14 15:11:09', 0),
(312, 5, '511', '2021-01-14 15:11:09', 0),
(313, 5, '510', '2021-01-14 15:11:57', 0),
(314, 5, '511', '2021-01-14 15:11:57', 0),
(315, 5, '510', '2021-01-14 15:12:04', 0),
(316, 5, '511', '2021-01-14 15:12:04', 0),
(317, 5, '510', '2021-01-14 15:13:59', 0),
(318, 5, '511', '2021-01-14 15:13:59', 0),
(319, 5, '510', '2021-01-14 15:15:02', 0),
(320, 5, '511', '2021-01-14 15:15:02', 0),
(321, 5, '510', '2021-01-14 15:15:44', 0),
(322, 5, '511', '2021-01-14 15:15:44', 0),
(323, 5, '510', '2021-01-14 15:17:19', 0),
(324, 5, '511', '2021-01-14 15:17:19', 0),
(325, 19, '112', '2021-01-14 15:26:48', 0),
(326, 19, '112', '2021-01-14 15:29:09', 0),
(327, 19, '112', '2021-01-14 15:32:01', 0),
(328, 19, '112', '2021-01-14 15:33:43', 0),
(329, 19, '112', '2021-01-14 15:34:04', 0),
(330, 19, '112', '2021-01-14 15:36:16', 0),
(331, 19, '112', '2021-01-14 15:37:24', 0),
(332, 19, '112', '2021-01-14 15:37:37', 0),
(333, 19, '112', '2021-01-14 15:40:04', 0),
(334, 19, '112', '2021-01-14 15:40:26', 0),
(335, 19, '112', '2021-01-14 15:41:33', 0),
(336, 19, '112', '2021-01-14 15:42:00', 0),
(337, 18, '511', '2021-01-15 06:49:15', 0),
(338, 18, '512', '2021-01-15 06:49:15', 0),
(339, 10, '48', '2021-01-18 09:15:09', 0),
(340, 10, '58', '2021-01-18 09:15:09', 0),
(341, 10, '48', '2021-01-18 10:26:39', 0),
(342, 10, '58', '2021-01-18 10:26:39', 0),
(343, 10, '48', '2021-01-18 10:32:17', 0),
(344, 10, '58', '2021-01-18 10:32:17', 0),
(345, 10, '39', '2021-01-18 10:44:11', 0),
(346, 10, '49', '2021-01-18 10:44:11', 0),
(347, 19, '37', '2021-01-19 08:26:18', 0),
(348, 19, '58', '2021-01-19 08:26:18', 0),
(349, 19, '17', '2021-01-19 10:45:56', 109),
(350, 19, '18', '2021-01-19 10:45:47', 109),
(351, 19, '27', '2021-01-19 10:49:26', 116),
(352, 19, '510', '2021-01-19 10:49:26', 116),
(353, 19, '13', '2021-01-19 10:53:45', 117),
(354, 19, '14', '2021-01-19 10:53:45', 117),
(355, 19, '24', '2021-01-19 10:53:45', 117),
(356, 3, '17', '2021-01-19 10:55:22', 118),
(357, 3, '27', '2021-01-19 10:55:22', 118),
(358, 3, '29', '2021-01-19 10:55:22', 118),
(359, 3, '210', '2021-01-19 10:55:22', 118),
(360, 3, '17', '2021-01-19 10:56:59', 119),
(361, 3, '27', '2021-01-19 10:56:59', 119),
(362, 3, '29', '2021-01-19 10:56:59', 119),
(363, 3, '210', '2021-01-19 10:56:59', 119),
(364, 5, '15', '2021-01-19 11:10:34', 120),
(365, 5, '16', '2021-01-19 11:10:34', 120),
(366, 5, '17', '2021-01-19 11:10:34', 120),
(367, 5, '27', '2021-01-19 11:10:34', 120),
(368, 5, '15', '2021-01-19 11:11:57', 121),
(369, 5, '16', '2021-01-19 11:11:57', 121),
(370, 5, '17', '2021-01-19 11:11:57', 121),
(371, 5, '27', '2021-01-19 11:11:57', 121),
(372, 5, '35', '2021-01-19 11:13:18', 122),
(373, 5, '36', '2021-01-19 11:13:18', 122),
(374, 5, '45', '2021-01-19 11:13:19', 122),
(375, 5, '46', '2021-01-19 11:13:19', 122),
(376, 5, '55', '2021-01-19 11:28:19', 123),
(377, 5, '56', '2021-01-19 11:28:19', 123),
(378, 5, '57', '2021-01-19 11:28:19', 123),
(379, 5, '58', '2021-01-19 11:28:19', 123);

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
-- Indexes for table `messagein`
--
ALTER TABLE `messagein`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

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
-- AUTO_INCREMENT for table `messagein`
--
ALTER TABLE `messagein`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;

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

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `change_status` ON SCHEDULE EVERY 2 HOUR STARTS '2021-01-19 14:09:38' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE cinemaet.booking_info set status='expired'$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
