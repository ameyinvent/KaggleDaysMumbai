-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 03:37 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kaggledays`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
`id` int(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `adminpassword` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `emailid`, `username`, `adminpassword`) VALUES
(2, 'sarveshpathak139@gmail.com', 'Sarvesh Pathak', '1234'),
(3, 'sarveshpathak139@gmail.com', 'Sarvesh Pathak', '1234'),
(4, 'sarveshpathak139@gmail.com', 'gjmedhane', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `eventusers`
--

CREATE TABLE IF NOT EXISTS `eventusers` (
`id` int(11) NOT NULL,
  `attendeename` text NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `contactnumber` varchar(12) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `kaggle` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eventusers`
--

INSERT INTO `eventusers` (`id`, `attendeename`, `emailid`, `contactnumber`, `linkedin`, `kaggle`, `github`) VALUES
(1, 'Sarvesh', 'sspathak@mitaoe.ac.in', '9420827255', 'www.linkedin.com', 'www.kaggle.com', 'www.github.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` text NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `contactnumber` varchar(12) NOT NULL,
  `linkedinprofile` varchar(255) NOT NULL,
  `kaggleprofile` varchar(255) NOT NULL,
  `githubprofile` varchar(255) NOT NULL,
  `sessiontitle` varchar(255) NOT NULL,
  `userdescription` varchar(255) NOT NULL,
  `sessionformat` varchar(255) NOT NULL,
  `track` varchar(255) NOT NULL,
  `userlevel` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `speakertagline` varchar(255) NOT NULL,
  `speakerbiography` varchar(255) NOT NULL,
  `speakerphoto` blob NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `emailid`, `contactnumber`, `linkedinprofile`, `kaggleprofile`, `githubprofile`, `sessiontitle`, `userdescription`, `sessionformat`, `track`, `userlevel`, `notes`, `speakertagline`, `speakerbiography`, `speakerphoto`, `twitter`, `website`) VALUES
(2, 'Sarvesh Pathak', 'sspathak@mitaoe.ac.in', '9420827288', 'www.linkedin.com', 'www.kaggle.com', 'www.github.com', 'Kaggle Dev', 'I am developer', 'on', 'on', 'on', 'Developer', 'Develop to make future.', 'I student from MIT', 0x4453435f303038302e4a5047, 'www.twitter.com', 'www.myblog.com'),
(3, 'Kedar ', 'kedar@mitaoe.ac.in', '7249195345', 'www.linkedin.com', 'www.kaggle.com', 'www.github.com', 'ML', 'I am programmer.', 'on', 'on', 'on', 'Developer', 'Develop to make future.', 'I am student.', 0x4453435f303131352e4a5047, 'www.twitter.com', 'www.myblog.com'),
(5, 'Sarvesh Pathak', 'sarveshpathak139@gmail.com', '08329639871', 'www.linkedin.com', 'www.kaggle.com', 'www.github.com', 'ML', 'I am dev', 'Tech Session', 'Kaggle Project', 'Intoductory and Overview', 'Developer', 'Develop to make future.', 'I am dev', 0x4453435f303037372e4a5047, 'www.twitter.com', 'www.myblog.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventusers`
--
ALTER TABLE `eventusers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `eventusers`
--
ALTER TABLE `eventusers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
