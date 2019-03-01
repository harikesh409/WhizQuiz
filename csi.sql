-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 07:14 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csi`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'When was the first Common Wealth Games held?', '1930', '1934', '1938', '1948', '1930'),
(2, 'In which sports is the participant called pugilist?', 'Sprinter', 'Boxing', 'Wrestling', 'Javelin throw', 'Javelin throw'),
(3, 'When did India win a gold medal in football in an international tournament last?', '1951 Delhi Asiad', '1962 Jakarta Asiad', '1964 Merdeka Cup, Kualalumpur', '1970 Merdeka Cup, Kualalumpur', '1962 Jakarta Asiad'),
(4, 'The term &quot;Butterfly Stroke&quot; is referred to in which sport?', 'Wrestling', 'Volleyball', 'Tennis', 'Swimming', 'Swimming'),
(5, 'In which game the term &quot;Putting&quot; is used?', 'Chess', 'Hockey', 'Golf', 'Billiards', 'Golf'),
(6, 'Who was the first Test Centurion in India Cricket?', 'C.K. Naidu', 'Lala Amarnath', 'Vinu Mankad', 'Mansur Ali Pataudi', 'Lala Amarnath');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT 'lendi@csi',
  `name1` varchar(255) NOT NULL,
  `name2` varchar(255) DEFAULT NULL,
  `college` varchar(255) NOT NULL,
  `isSubmitted` enum('0','1') NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `name1`, `name2`, `college`, `isSubmitted`, `score`) VALUES
(4, 'abc@abc.com', 'lendi@csi', 'h', '', 'hj', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;
ALTER TABLE `users` CHANGE `score` `score` INT(11) NOT NULL DEFAULT '0';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
