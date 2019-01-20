-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 08:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `admin_name` varchar(500) DEFAULT NULL,
  `email_id` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `date` varchar(500) DEFAULT NULL,
  `time` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`admin_name`, `email_id`, `password`, `date`, `time`) VALUES
('Amit Suyal', 'Amitsuyal175@gmail.com', 'amitsuyal', '19/01/19', '1547900679');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_id` int(255) NOT NULL,
  `answer` varchar(600) NOT NULL,
  `answer_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_id`, `answer`, `answer_id`) VALUES
(1, 'Rahul Gandhi', 1),
(2, 'Mamta Banerjee', 1),
(3, 'Narendra Modi', 1),
(4, 'Arvind Kejriwal', 1),
(5, 'Harish Rawat', 2),
(6, 'Yashpal Arya', 2),
(7, 'N.D. Tiwari', 2),
(8, 'Indra Hridesh', 2),
(9, 'George Bush', 3),
(10, 'Imran Khan', 3),
(11, 'Donald Trump', 3),
(12, 'Indira Gandhi', 3),
(13, 'Damascus', 4),
(14, 'Tel Aviv', 4),
(15, 'Baghdad', 4),
(16, 'Tehran', 4),
(17, 'Nainital', 5),
(18, 'Haridwar', 5),
(19, 'Dehradun', 5),
(20, 'Pithoragarh', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ques_id` int(255) NOT NULL,
  `question` varchar(600) NOT NULL,
  `answer_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ques_id`, `question`, `answer_id`) VALUES
(1, 'Who is the Prime Minister of india?', 3),
(2, 'Who is the Chief Minister of Uttarakhand?', 7),
(3, 'Who is the President of USA?', 11),
(4, 'What is the capital of Iraq?', 15),
(5, 'What is the capital of Uttarakhand?', 19);

-- --------------------------------------------------------

--
-- Table structure for table `subject_name`
--

CREATE TABLE `subject_name` (
  `id` int(5) NOT NULL,
  `subjectname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_name`
--

INSERT INTO `subject_name` (`id`, `subjectname`) VALUES
(1, 'php'),
(2, 'JAVA'),
(5, 'c1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(255) NOT NULL,
  `username` varchar(500) NOT NULL,
  `totalques` int(255) NOT NULL,
  `answerscorrect` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imgupload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_name`, `password`, `name`, `address`, `city`, `mobile`, `email`, `imgupload`) VALUES
('amitsuyal_9', 'amitsuyal', 'Amit Suyal', 'Railway bazar haldwani', 'Haldwani', '7351764108', 'Amitsuyal175@gmail.com', 'img/IMG_20180610_063347.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`),
  ADD UNIQUE KEY `ans_id` (`ans_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `subject_name`
--
ALTER TABLE `subject_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject_name`
--
ALTER TABLE `subject_name`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
