-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2017 at 01:29 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `sino` int(100) NOT NULL AUTO_INCREMENT,
  `reg` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `add` varchar(400) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p1` varchar(10) NOT NULL,
  `p2` varchar(10) NOT NULL,
  `p3` varchar(10) NOT NULL,
  `p4` varchar(10) NOT NULL,
  `p5` varchar(10) NOT NULL,
  `p6` varchar(10) NOT NULL,
  `p7` varchar(10) NOT NULL,
  `p8` varchar(10) NOT NULL,
  `p9` varchar(10) NOT NULL,
  `p10` varchar(10) NOT NULL,
  `p11` varchar(10) NOT NULL,
  `p12` varchar(10) NOT NULL,
  `p13` varchar(10) NOT NULL,
  `p14` varchar(10) NOT NULL,
  `p15` varchar(10) NOT NULL,
  `p16` varchar(10) NOT NULL,
  `p17` varchar(10) NOT NULL,
  `p18` varchar(10) NOT NULL,
  `p19` varchar(10) NOT NULL,
  `p20` varchar(10) NOT NULL,
  `c1` varchar(10) NOT NULL,
  `c2` varchar(10) NOT NULL,
  `c3` varchar(10) NOT NULL,
  `c4` varchar(10) NOT NULL,
  `c5` varchar(10) NOT NULL,
  `c6` varchar(10) NOT NULL,
  `c7` varchar(10) NOT NULL,
  `c8` varchar(10) NOT NULL,
  `c9` varchar(10) NOT NULL,
  `c10` varchar(10) NOT NULL,
  `c11` varchar(10) NOT NULL,
  `c12` varchar(10) NOT NULL,
  `c13` varchar(10) NOT NULL,
  `c14` varchar(10) NOT NULL,
  `c15` varchar(10) NOT NULL,
  `c16` varchar(10) NOT NULL,
  `c17` varchar(10) NOT NULL,
  `c18` varchar(10) NOT NULL,
  `c19` varchar(10) NOT NULL,
  `c20` varchar(10) NOT NULL,
  `m1` varchar(10) NOT NULL,
  `m2` varchar(10) NOT NULL,
  `m3` varchar(10) NOT NULL,
  `m4` varchar(10) NOT NULL,
  `m5` varchar(10) NOT NULL,
  `m6` varchar(10) NOT NULL,
  `m7` varchar(10) NOT NULL,
  `m8` varchar(10) NOT NULL,
  `m9` varchar(10) NOT NULL,
  `m10` varchar(10) NOT NULL,
  `m11` varchar(10) NOT NULL,
  `m12` varchar(10) NOT NULL,
  `m13` varchar(10) NOT NULL,
  `m14` varchar(10) NOT NULL,
  `m15` varchar(10) NOT NULL,
  `m16` varchar(10) NOT NULL,
  `m17` varchar(10) NOT NULL,
  `m18` varchar(10) NOT NULL,
  `m19` varchar(10) NOT NULL,
  `m20` varchar(10) NOT NULL,
  `mark` varchar(50) NOT NULL,
  PRIMARY KEY (`sino`),
  UNIQUE KEY `reg` (`reg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sino`, `reg`, `name`, `sname`, `add`, `mob`, `email`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`, `c15`, `c16`, `c17`, `c18`, `c19`, `c20`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `m13`, `m14`, `m15`, `m16`, `m17`, `m18`, `m19`, `m20`, `mark`) VALUES
(1, '0', 'Rajeshkumar', 'sasurie', 'perundurai', '9095067768', 'rajesh@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '73252', 'Rajeshkumar', 'sasurie', 'perundurai', '9095067768', 'rajesh@gmail.com', 'a', 'b', 'c', 'd', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '456', '', '', '', '', 'rajesh@gmail.com', 'a', 'b', 'c', 'd', 'a', 'a', 'b', 'c', 'd', 'a', 'a', 'b', 'c', 'd', 'a', 'a', 'b', 'c', 'd', 'a', 'a', 'b', 'c', 'd', 'a', 'a', 'b', 'c', 'd', 'a', 'a', 'b', 'c', 'd', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '123', '', '', '', '', 'rajesh@gmail.com', 'a', 'b', 'c', 'd', 'a', 'a', 'b', 'c', 'd', 'a', 'd', 'c', 'b', 'a', 'd', 'd', 'c', 'b', 'c', 'd', 'a', 'b', 'c', 'd', 'a', 'b', 'b', 'c', 'c', 'd', 'a', 'c', 'c', 'a', 'b', 'a', 'b', 'b', 'c', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '1234', '', '', '', '', '', 'a', 'b', 'c', 'd', 'd', 'a', 'c', 'a', 'b', 'b', 'd', 'c', 'b', 'a', 'a', 'a', 'b', 'c', 'd', 'd', 'd', 'c', 'b', 'a', 'a', 'a', 'b', 'c', 'd', 'd', 'a', 'a', 'a', 'a', 'a', 'c', 'c', 'c', 'c', 'c', 'a', 'a', 'a', 'a', 'a', 'a', 'b', 'd', 'd', 'a', '', '', '', '', '', '', '', '', '', '', ''),
(6, '2345', 'rajesh', '', '', '', '', 'b', 'b', 'b', 'c', 'b', 'b', 'b', 'b', 'c', 'c', 'b', 'b', 'c', 'b', 'a', 'd', 'd', 'a', 'b', 'c', 'b', 'b', 'b', 'a', 'a', 'b', 'c', 'c', 'a', 'd', 'b', 'b', 'd', 'd', 'a', 'a', 'd', 'a', 'd', 'a', 'b', 'c', 'b', 'a', 'b', 'b', 'c', 'a', 'b', 'c', 'a', 'c', 'a', 'c', 'a', 'b', 'c', 'a', 'c', 'a', ''),
(7, '283933', 'ARUN KUMAR A', 'GOVT.BOYS SCHOOL', 'BHAVANI', '8012893941', 'arunak283933@gmail.com', 'd', 'a', 'c', 'c', 'a', 'a', 'd', 'd', 'a', 'c', 'd', 'b', 'c', 'c', 'c', 'b', 'b', 'b', 'a', 'a', 'b', 'b', 'd', 'a', 'd', 'b', 'c', 'c', 'c', 'c', 'a', 'a', 'c', 'd', 'a', 'c', 'a', 'c', 'a', 'c', 'c', 'd', 'd', 'a', 'd', 'd', 'c', 'a', 'b', 'b', 'a', 'a', 'c', 'a', 'b', 'c', 'a', 'd', 'a', 'b', '15'),
(8, '1567', 'ranjith', '', '', '', '', 'd', 'c', 'd', 'b', 'a', 'a', 'a', 'b', 'd', 'd', 'c', 'b', 'b', 'a', 'a', 'b', 'c', 'a', 'b', 'd', 'c', 'a', 'd', 'b', 'd', 'b', 'b', 'c', 'd', 'b', 'c', 'b', 'a', 'c', 'd', 'b', 'b', 'a', 'd', 'd', 'd', 'd', 'b', 'c', 'd', 'b', 'b', 'c', 'd', 'b', 'c', 'b', 'a', 'c', 'd', 'b', 'b', 'a', 'd', 'd', '48'),
(9, '1374832', 'ARUN KUMAR A', 'GOVT.BOYS SCHOOL', 'perundurai', '8012893941', 'arunak283933@gmail.com', 'd', 'c', 'd', 'b', 'a', 'a', 'a', 'b', 'd', 'd', 'c', 'b', 'b', 'a', 'a', 'b', 'c', 'a', 'b', 'd', 'c', 'a', 'd', 'b', 'd', 'b', 'b', 'c', 'd', 'b', 'c', 'b', 'a', 'c', 'd', 'b', 'b', 'a', 'd', 'd', 'd', 'd', 'b', 'c', 'd', 'b', 'd', 'd', 'a', 'a', 'b', 'a', 'a', 'c', 'b', 'c', 'd', 'd', 'c', 'c', '60');
