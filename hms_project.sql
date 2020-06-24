-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 05:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(5, '', 'admin@gmail.com', '$2y$10$Z/A.8MqSggJXD3ytPaLtJuNk2nlnhdaohXaRDrm04/P5da8rdDNyO');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `mobile` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `mobile`) VALUES
(1, 'sadkja', 'sadsa', 'sadsa', NULL),
(2, 'Deepesh Kushwaha', 'test@gmail.com', 'sdsadfa', NULL),
(3, 'Deepesh Kushwaha', 'test@gmail.com', 'sdsadfa', NULL),
(4, '', '', '', 2147483647),
(5, 'sdaasd', 'asdsa', 'sadsa', 2147483647),
(6, 'asdad', 'dasd@da', '323232', 3212),
(7, 'testuser@afs', 'test@gmail.com', 'sadsasda', 219981);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `chatid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`chatid`, `email`, `message`, `time`) VALUES
(9, 'siraskarjay17@gmail.com', 'Hello', '2020-03-10 04:14:54'),
(10, 'abcde@gmail.com', 'hello jay', '2020-03-10 14:32:35'),
(11, 'siraskarjay17@gmail.com', 'Hyyy', '2020-03-10 14:32:56'),
(12, 'abcde@gmail.com', 'how are u', '2020-03-10 14:33:04'),
(13, 'siraskarjay17@gmail.com', 'i m fine', '2020-03-10 14:33:09'),
(14, 'abcde@gmail.com', 'hello', '2020-03-10 14:36:31'),
(15, 'abcde@gmail.com', 'hyy', '2020-03-10 14:36:37'),
(16, 'drashtichitre541@gmail.com', 'hello abcd', '2020-03-10 14:36:51'),
(17, 'siraskarjay17@gmail.com', 'hello drashti', '2020-03-10 14:37:06'),
(18, 'siraskarjay17@gmail.com', 'asj', '2020-03-10 14:37:28'),
(19, 'drashtichitre541@gmail.com', 'sajkdkja', '2020-03-10 14:37:31'),
(20, 'abcde@gmail.com', 'akjdkj', '2020-03-10 14:37:34'),
(21, 'dipeshkushwaha721@gmail.com', 'hello', '2020-03-11 04:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `messid` int(255) NOT NULL,
  `day` enum('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','sunday') NOT NULL,
  `time` enum('breakfast','lunch','dinner') NOT NULL,
  `item1` varchar(255) NOT NULL,
  `item2` varchar(255) NOT NULL,
  `item3` varchar(255) NOT NULL,
  `item4` varchar(255) NOT NULL,
  `item5` varchar(255) NOT NULL,
  `item6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`messid`, `day`, `time`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`) VALUES
(1, 'Monday', 'breakfast', 'bateka pauva', 'milk', 'tea', 'coffee', 'Green Tea', ''),
(2, 'Monday', 'lunch', 'rotlia', 'chaana shaak', 'bhindi bateka shaak', 'chaas', 'dalsa', 'rice'),
(3, 'Monday', 'dinner', 'paratha', 'MIX veg shaak', 'milk', 'khichdi', '', ''),
(4, 'Tuesday', 'breakfast', 'Uttapaa', 'MILK', 'tea', 'Coffee', '', ''),
(5, 'Tuesday', 'lunch', 'rotli', 'Tindora SHAAk', 'cholli shaak', 'chaas', 'Dal', 'rice'),
(6, 'Tuesday', 'dinner', 'thepla', 'bateka shaak', 'Milk', 'chaas', '', ''),
(7, 'Wednesday', 'breakfast', 'samosa', 'tea', 'milk', 'coffee', '', ''),
(8, 'Wednesday', 'lunch', 'rotli', 'maag shaak', 'dudhi daal shaak', 'chass', 'dal', 'rice'),
(9, 'Wednesday', 'dinner', 'dosa', 'chaas', 'Paneer', '', '', ''),
(10, 'Thursday', 'breakfast', 'sev usal', 'milk', 'coffee', '', '', ''),
(11, 'Thursday', 'lunch', 'rotli', 'peas shaak', 'Karela shaak', 'chaas', 'Dal', 'RICE'),
(12, 'Thursday', 'dinner', 'bhakri', 'ringan ka bharta', 'chaas', 'milk', 'papad', ''),
(13, 'Friday', 'breakfast', 'gathiya', 'coffee', 'milk', 'tea', '', ''),
(14, 'Friday', 'lunch', 'rotli', 'flawer shaak', 'mathh shaak', 'chass', 'dal', 'rice'),
(15, 'Friday', 'dinner', 'rotli', 'bateka peas shaak', 'milk', 'chaas', 'khichdi', ''),
(16, 'Saturday', 'breakfast', 'bread buitter', 'milk', 'tea', 'Coffee', '', ''),
(17, 'Saturday', 'lunch', 'rotli', 'tuver shaak', 'sev tameta shaak', 'chaas', 'dal', 'rice'),
(18, 'Saturday', 'dinner', 'paratha', 'paneer shaak', 'curd', 'milk', '', ''),
(19, 'sunday', 'breakfast', 'fafda ', 'jalebi', 'milk', 'tea', 'coffee', ''),
(20, 'sunday', 'lunch', 'puri', 'chole shaak', 'frymes', 'feast', 'dal fry', 'jeera rice'),
(21, 'sunday', 'dinner', 'mag mamra', 'cold drink', 'curd', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msgid` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `s-time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgid`, `email`, `message`, `s-time`, `reply`) VALUES
(1, 'siraskarjay17@gmail.com', 'Hello', '2020-03-10 06:56:20', ''),
(2, 'siraskarjay17@gmail.com', 'HYy', '2020-03-10 06:56:29', ''),
(3, 'siraskarjay17@gmail.com', 'asdhasjhhsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaf', '2020-03-10 07:08:33', ''),
(4, 'siraskarjay17@gmail.com', 'w8qoooooooooooooooooooooooouidfljscnxzwslkjaaaaaaaaadf218789749271937--091*', '2020-03-10 07:08:51', ''),
(5, 'siraskarjay17@gmail.com', '!@', '2020-03-10 07:09:02', ''),
(6, 'siraskarjay17@gmail.com', 'ASSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS', '2020-03-10 07:11:34', 'ASSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS  '),
(7, 'drashtichitre541@gmail.com', 'hello by dhrashti', '2020-03-10 07:26:12', 'ASSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS  '),
(8, 'drashtichitre541@gmail.com', 'jashj', '2020-03-10 07:54:27', 'hjasjjasj'),
(9, 'abcde@gmail.com', 'Hello Admin', '2020-03-10 14:30:18', 'Hello ABCDE'),
(10, 'dipeshkushwaha721@gmail.com', 'hello', '2020-03-11 04:35:05', 'sada');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeid` int(11) NOT NULL,
  `message` mediumtext NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeid`, `message`, `time`) VALUES
(1, 'HEELO WELOCME', '2020-03-07 09:13:18'),
(2, 'Today Mess is Closed', '2020-03-09 15:43:09'),
(4, 'Today Mess is Closed', '2020-03-09 15:43:38'),
(5, ' skjkdjksajdsadklsakj\r\nsakdkjaskdka\r\n', '2020-03-10 10:15:39'),
(6, ' Hyyy', '2020-03-10 10:15:55'),
(7, ' Hello', '2020-03-10 10:18:24'),
(8, '3 51', '2020-03-10 10:21:59'),
(9, '                                                                                     HELLO', '2020-03-10 10:40:34'),
(10, 'Janata Group Housing Society, Palam Vihar, Kurnool.\r\nNOTICE\r\nMarch 01, 201X\r\nATTENTION!\r\nThis notice is to inform all the residents regarding the suspension of water supply for 8 hours. It is being done to clean the water tank. The details are as follows:', '2020-03-10 11:02:25'),
(11, 'Janata Group Housing Society, Palam Vihar, Kurnool.\r\nNOTICE\r\nMarch 01, 201X\r\nATTENTION!\r\nThis notice is to inform all the residents regarding the suspension of water supply for 8 hours. It is being done to clean the water tank. The details are as follows:\r\nDATE- March 6\r\nTIME- 10am â€“ 6 pm\r\nThus, we request you to store the required amount of water beforehand to minimise the difficulty. Thank you\r\n\r\nKaran Kumar/ Karuna Bajaj\r\n(signature)\r\nSecretary', '2020-03-10 11:06:32'),
(12, 'NOTICE\r\nABC CONVENT SCHOOL\r\nMarch 01,2019\r\nINTER-SCHOOL SINGING COMPETITION\r\n\r\nOur school is organising an Inter-school Singing Competition on March 19, 2019; Tuesday at 12pm in the school auditorium. More than 20 schools from all over the city will participate. Interested students may contact the undersigned latest by March 10, 2019.\r\n\r\nRuhi/Rahul\r\nHead girl/boy  ', '2020-03-10 11:13:20'),
(13, 'NOTICE\r\nABC CONVENT SCHOOL\r\nMarch 01,2019\r\nINTER-SCHOOL SINGING COMPETITION\r\n\r\nOur school is organising an Inter-school Singing Competition on March 19, 2019; Tuesday at 12pm in the school auditorium. More than 20 schools from all over the city will participate. Interested students may contact the undersigned latest by March 10, 2019.\r\n\r\nRuhi/Rahul\r\nHead girl/boy  ', '2020-03-10 11:14:11'),
(14, 'NOTICE\r\nABC CONVENT SCHOOL\r\nMarch 01,2019\r\nINTER-SCHOOL SINGING COMPETITION\r\n\r\nOur school is organising an Inter-school Singing Competition on March 19, 2019; Tuesday at 12pm in the school auditorium. More than 20 schools from all over the city will participate. Interested students may contact the undersigned latest by March 10, 2019.\r\n\r\nRuhi/Rahul\r\nHead girl/boy  ', '2020-03-10 11:14:35'),
(15, 'NOTICE\r\n\r\nALERT FOR FIRE MANAGEMENT \r\n\r\nDo your work Regularly Ok\r\n', '2020-03-10 11:36:45'),
(16, 'ABC CONVENT SCHOOL\r\nMarch 01,2019\r\nINTER-SCHOOL SINGING COMPETITION\r\n\r\nOur School Is Organising An Inter-School Singing Competition On March 19, 2019; Tuesday At 12pm In The School Auditorium. More Than 20 Schools From All Over The City Will Participate. Interested Students May Contact The Undersigned Latest By March 10, 2019.\r\n\r\nRuhi/Rahul\r\nHead Girl/Boy', '2020-03-10 11:47:41'),
(17, '10-Mar-20 5:06 PM\r\n\r\nNOTICE\r\n\r\nALERT FOR FIRE MANAGEMENT\r\n\r\nDo your work Regularly Ok', '2020-03-10 14:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(100) NOT NULL,
  `room` varchar(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `allocated` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `email`, `allocated`) VALUES
(1, '1A', 'siraskarjay17@gmail.com', 'yes'),
(2, '1B', '', 'no'),
(3, '1C', 'dipeshkushwaha721@gmail.com', 'yes'),
(4, '2A', '', 'no'),
(5, '2B', 'abcde@gmail.com', 'yes'),
(6, '2C', 'NULL', 'no'),
(7, '3A', 'NULL', 'no'),
(8, '3B', 'NULL', 'no'),
(9, '3C', '', 'no'),
(10, '4A', 'NULL', 'no'),
(11, '4B', 'NULL', 'no'),
(12, '4C', '', 'no'),
(13, '5A', '', 'no'),
(28, '5B', 'NULL', 'no'),
(29, '5C', '', 'no'),
(30, '6A', 'NULL', 'no'),
(31, '6B', 'NULL', 'no'),
(32, '6C', 'NULL', 'no'),
(33, '7A', 'NULL', 'no'),
(34, '7B', 'NULL', 'no'),
(35, '7C', 'NULL', 'no'),
(36, '8A', 'NULL', 'no'),
(37, '8B', 'NULL', 'no'),
(38, '8C', 'NULL', 'no'),
(39, '9A', 'NULL', 'no'),
(40, '9B', 'NULL', 'no'),
(41, '9C', 'NULL', 'no'),
(42, '10A', 'NULL', 'no'),
(43, '10B', 'NULL', 'no'),
(44, '10C', 'NULL', 'no'),
(45, '11A', 'NULL', 'no'),
(46, '11B', 'NULL', 'no'),
(47, '11C', 'NULL', 'no'),
(48, '12A', 'NULL', 'no'),
(49, '12B', 'NULL', 'no'),
(50, '12C', 'NULL', 'no'),
(51, '13A', 'NULL', 'no'),
(52, '13B', 'NULL', 'no'),
(53, '13C', 'NULL', 'no'),
(54, '14A', 'NULL', 'no'),
(55, '14B', 'NULL', 'no'),
(56, '14C', 'NULL', 'no'),
(57, '15A', 'NULL', 'no'),
(58, '15B', 'NULL', 'no'),
(59, '15C', 'NULL', 'no'),
(60, '16A', 'NULL', 'no'),
(61, '16B', 'NULL', 'no'),
(62, '16C', 'NULL', 'no'),
(63, '17A', 'NULL', 'no'),
(64, '17B', 'NULL', 'no'),
(65, '17C', 'NULL', 'no'),
(66, '18A', 'NULL', 'no'),
(67, '18B', 'NULL', 'no'),
(68, '18C', 'NULL', 'no'),
(69, '19A', 'NULL', 'no'),
(70, '19B', 'NULL', 'no'),
(71, '19C', 'NULL', 'no'),
(72, '20A', 'NULL', 'no'),
(73, '20B', 'NULL', 'no'),
(74, '20C', 'NULL', 'no'),
(75, '21A', 'NULL', 'no'),
(76, '21B', 'NULL', 'no'),
(77, '21C', 'NULL', 'no'),
(78, '22A', 'NULL', 'no'),
(79, '22B', 'NULL', 'no'),
(80, '22C', 'NULL', 'no'),
(81, '23A', 'NULL', 'no'),
(82, '23B', 'NULL', 'no'),
(83, '23C', 'NULL', 'no'),
(84, '24A', 'NULL', 'no'),
(85, '24B', 'NULL', 'no'),
(86, '24C', 'NULL', 'no'),
(87, '25A', 'NULL', 'no'),
(88, '25B', 'NULL', 'no'),
(89, '25C', 'NULL', 'no'),
(90, '26A', 'NULL', 'no'),
(91, '26B', 'NULL', 'no'),
(92, '26C', 'NULL', 'no'),
(93, '27A', 'NULL', 'no'),
(94, '27B', 'NULL', 'no'),
(95, '27C', 'NULL', 'no'),
(96, '28A', 'NULL', 'no'),
(97, '28B', 'NULL', 'no'),
(98, '28C', 'NULL', 'no'),
(99, '29A', 'NULL', 'no'),
(100, '29B', 'NULL', 'no'),
(101, '29C', 'NULL', 'no'),
(102, '30A', 'NULL', 'no'),
(103, '30B', 'NULL', 'no'),
(104, '30C', 'NULL', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `uname` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` enum('nv','v') NOT NULL DEFAULT 'nv',
  `otp` int(10) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `line1` varchar(200) NOT NULL,
  `line2` varchar(200) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `DOB` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `pname` text NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `college` text NOT NULL,
  `branch` text NOT NULL,
  `year` enum('FY','SY','TY','LY') NOT NULL,
  `reg_stat` enum('true','false') NOT NULL DEFAULT 'false',
  `room_allocated` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `email`, `password`, `status`, `otp`, `fname`, `mname`, `lname`, `mobile`, `line1`, `line2`, `city`, `state`, `DOB`, `gender`, `pname`, `pnumber`, `pemail`, `college`, `branch`, `year`, `reg_stat`, `room_allocated`) VALUES
(1, '', 'dipeshkushwaha721@gmail.com', '$2y$10$u0waVbzR2T0OUUJSq2tiZOlPSiRvDIXHzUK76CqK2YzfXSn5BKU7G', 'v', 42013, 'Deepesh', 'Umesh', 'Kushwaha', '9904580803', '20, Palm villa,', 'Makarpura, GIDC', 'Vadodara', 'Gujarat', '2001-02-07', 'male', 'Umesh Prasad', '9904580803', 'test@gmail.com', '', '', '', 'true', 'yes'),
(20, 'jay', 'siraskarjay17@gmail.com', '$2y$10$KZClxsthtJ9S22CIuC1AEOQLFrdSVYJrHl/5BQ8EQ9IvccH9bxZTK', 'v', 28974, 'Jay', '', 'Siraskar', '1234567890', '50, Palm villa,', 'GIDC MAKARPURA', 'Vadodara', 'Gujarat', '2000-03-10', 'male', 'dkakdda', '1929198911', 'sadkjk@gmail.com', 'MSU', 'IT', 'TY', 'true', 'yes'),
(23, 'w', 'w@w.w', '$2y$10$Tnox./AI7t/AM33ts.2qTe14LZrXYnRc5I6SEdcfBNs19sLzX9hwu', 'v', 70968, '', '', '', '0', '', '', '', '', '0000-00-00', 'male', '', '0', '', '', '', 'FY', 'true', 'no'),
(27, 'e', 'e@e.e', '$2y$10$FJHEXpLzujFbNJXnvjs/AOlw1R3Lp4/gHVybuiyJ5NjFDHU2NgdtW', 'v', 47027, '', '', '', '0', '', '', '', '', '0000-00-00', 'male', '', '0', '', '', '', 'FY', '', 'no'),
(29, '', 'abcde@gmail.com', '$2y$10$t6wu0Le/HrJs2RCHHE8aXOFFoXJxAv8qJNAzLrhX6jXlloF7c6k6q', 'v', 22712, 'Deepesh', 'Umesh', 'Kushwaha', '9904580803', 'sajdkajlkkfdaj', 'GIDC', 'Vadodara', 'Gujarat', '2002-09-21', 'male', 'AHDKS', '2908180210', 'test@gmail.com', 'MSU', 'IT', 'TY', 'true', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`messid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room` (`room`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `chatid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mess`
--
ALTER TABLE `mess`
  MODIFY `messid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msgid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
