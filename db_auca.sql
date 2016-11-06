-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2016 at 12:24 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_auca`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentary`
--

DROP TABLE IF EXISTS `commentary`;
CREATE TABLE IF NOT EXISTS `commentary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_publication` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_number` int(11) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='commentary on publication';

-- --------------------------------------------------------

--
-- Table structure for table `staff_publication`
--

DROP TABLE IF EXISTS `staff_publication`;
CREATE TABLE IF NOT EXISTS `staff_publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `publication` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_number` int(11) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `first_name`, `last_name`, `id_number`, `faculty`, `password`) VALUES
(63, 'Kevin', 'Nyawakira', 19838, 'Information technology', '111');

-- --------------------------------------------------------

--
-- Table structure for table `student_publication`
--

DROP TABLE IF EXISTS `student_publication`;
CREATE TABLE IF NOT EXISTS `student_publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_number` int(11) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `publication` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verse_of_the_day`
--

DROP TABLE IF EXISTS `verse_of_the_day`;
CREATE TABLE IF NOT EXISTS `verse_of_the_day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verse` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verse_of_the_day`
--

INSERT INTO `verse_of_the_day` (`id`, `verse`, `date`) VALUES
(26, 'Romans 8:13-14::\r\nFor if you live according to the sinful nature, you will die; but if by the Spirit you put to death the misdeeds of the body, you will live, because those who are led by the Spirit of God are sons of God.', '2016-08-13'),
(25, 'Romans 8:13-14\r\nFor if you live according to the sinful nature, you will die; but if by the Spirit you put to death the misdeeds of the body, you will live, because those who are led by the Spirit of God are sons of God.', '2016-08-13'),
(27, 'Romans 8:13-14::\r\n\r\nFor if you live according to the sinful nature, you will die; but if by the Spirit you put to death the misdeeds of the body, you will live, because those who are led by the Spirit of God are sons of God.', '2016-08-13'),
(28, 'another verse', '2016-08-13'),
(29, 'kjskdjgajs', '2016-08-14'),
(30, 'verse of the day', '2016-08-14'),
(31, 'ROMAIN:34.7', '2016-08-14'),
(32, 'Hey God wasup???\r\n#Kevin', '2016-08-16'),
(33, 'raopkwdk', '2016-08-18'),
(34, 'Jean !:1: Rira bien qui rira le dernier', '2016-08-18'),
(35, 'Jean Kevin', '2016-08-20'),
(36, 'T.M.I:\r\nBe ready!!!!!...God is with us!', '2016-08-20'),
(37, 'T>M>I finished!!!!', '2016-08-20'),
(38, 'Hello...Jesus here!!!', '2016-08-20'),
(39, 'Dimanche', '2016-08-21'),
(40, 'Demain c''est Lundi', '2016-08-21'),
(41, 'Demain', '2016-08-21'),
(42, 'T.M.I', '2016-08-21'),
(43, 'Jean1:1= "God is Good!"', '2016-08-22'),
(44, 'Hello Guys', '2016-08-22'),
(45, 'Verse of the day\r\n_____________', '2016-08-25'),
(46, 'Zechariah 2:11:::\r\n"Many nations will be joined with the LORD in that day and will become my people. I will live among you and you will know that the LORD Almighty has sent me to you. ', '2016-08-27'),
(47, 'Kumanina', '2016-08-30'),
(48, 'Romans 8:13-14::\r\n\r\nFor if you live according to the sinful nature, you will die; but if by the Spirit you put to death the misdeeds of the body, you will live, because those who are led by the Spirit of God are sons of God.', '2016-09-01'),
(49, 'Romans 8:13-14::\r\nFor if you live according to the sinful nature, you will die; but if by the Spirit you put to death the misdeeds of the body, you will live, because those who are led by the Spirit of God are sons of God.', '2016-09-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
