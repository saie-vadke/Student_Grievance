-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2018 at 06:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grievance`
--
CREATE DATABASE IF NOT EXISTS `grievance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grievance`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `sr_no` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`sr_no`),
  UNIQUE KEY `sr_no` (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `grievance_type`
--

CREATE TABLE IF NOT EXISTS `grievance_type` (
  `g_id` int(10) NOT NULL AUTO_INCREMENT,
  `gr_type` varchar(30) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grr_type`
--

CREATE TABLE IF NOT EXISTS `grr_type` (
  `g_id` int(10) NOT NULL AUTO_INCREMENT,
  `gr_type` varchar(100) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `grr_type`
--

INSERT INTO `grr_type` (`g_id`, `gr_type`) VALUES
(1, ' grievance regarding college transportation'),
(3, 'Grievance related to Victimization'),
(5, 'Grievance related to charging of fees'),
(6, 'Grievance regarding non-transparent or unfair evaluation process'),
(7, 'Non-observation of AICTE norms and standards'),
(9, ' Grievance related to harassment by students or teachers'),
(10, 'Grievance related to provision of student amenities and quality education as promised or required to'),
(11, 'Non-payment or Delay in payment of scholarships'),
(12, 'Grievance on discrimination by students from SC/ST/Minority/Women/Disabled Categories '),
(13, 'college timing'),
(14, ' Grievance related to transportation'),
(20, ' Grievance related to infra'),
(21, ' Grievance related to infra');

-- --------------------------------------------------------

--
-- Table structure for table `member_list`
--

CREATE TABLE IF NOT EXISTS `member_list` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `mem_name` varchar(30) NOT NULL,
  `mem_mobile` varchar(30) DEFAULT NULL,
  `mem_desg` varchar(30) DEFAULT NULL,
  `mem_email` varchar(40) DEFAULT NULL,
  `mem_user` varchar(30) NOT NULL,
  `mem_pass` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member_list`
--

INSERT INTO `member_list` (`id`, `mem_name`, `mem_mobile`, `mem_desg`, `mem_email`, `mem_user`, `mem_pass`) VALUES
(1, 'poonam d dede ', '9075044780', 'Professor', 'p@gmail.com', 'poonamd', 'p'),
(2, 'nagare p h', '9921767953', 'Professor', 'popatnagare@gmail.com', 'nagare', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `post_grievance`
--

CREATE TABLE IF NOT EXISTS `post_grievance` (
  `gr_id` int(4) NOT NULL AUTO_INCREMENT,
  `gr_type` varchar(10) NOT NULL,
  `gr_subject` varchar(100) NOT NULL,
  `gr_details` varchar(300) NOT NULL,
  `std_user` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `g_date` varchar(15) NOT NULL,
  `gr_mem_details` varchar(300) NOT NULL,
  PRIMARY KEY (`gr_id`),
  KEY `date` (`g_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `post_grievance`
--

INSERT INTO `post_grievance` (`gr_id`, `gr_type`, `gr_subject`, `gr_details`, `std_user`, `status`, `g_date`, `gr_mem_details`) VALUES
(1, '2', 'df dfh fgfj ghj gh ghk', 'hjk hjk jljk jk jk; ljkl, ghmghk yh ghm ghk  ', 'tohif', 'Pending', '0', ''),
(2, '2', 'df dfh fgfj ghj gh ghk', 'hjk hjk jljk jk jk; ljkl, ghmghk yh ghm ghk  ', 'tohif', 'Pending', '0', ''),
(3, '2', 'df dfh fgfj ghj gh ghk', 'hjk hjk jljk jk jk; ljkl, ghmghk yh ghm ghk  ', 'tohif', 'Pending', '0', ''),
(4, '5', 'xdfs ', 'dfhg df hfg', 'tohif', 'Pending', '0', ''),
(5, '10', 'dfsg gfj ghj ', 'dtrh gfh gfh gfj', 'tohif', 'Success', '31/05/2018', '                 hjkhjkhjk  '),
(6, '13', 'Please change college timing ', 'We are cumming from Khed, ', 'tohif', 'Success', '31/05/2018', '                   dsgfsdg'),
(7, '3', 'dd', 'das', 'vijay', 'Pending', '01/06/2018', ''),
(8, '5', 'Return of my college fee', 'I am paid 25000 of my college fee, but as per college decision our cast fees is 22000. so please return me the remaining fee.', 'vijay', 'Success', '01/06/2018', 'collect fee from account section on date 9-6-2018 ');

-- --------------------------------------------------------

--
-- Table structure for table `std_registration`
--

CREATE TABLE IF NOT EXISTS `std_registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `std_name` varchar(30) NOT NULL,
  `std_course` varchar(50) NOT NULL,
  `std_year` varchar(4) NOT NULL,
  `std_roll_no` varchar(10) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_username` varchar(30) NOT NULL,
  `std_pass` varchar(30) NOT NULL,
  `std_mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `std_registration`
--

INSERT INTO `std_registration` (`id`, `std_name`, `std_course`, `std_year`, `std_roll_no`, `std_email`, `std_username`, `std_pass`, `std_mobile`) VALUES
(1, 'Nagare', 'Computer Engg', 'TY', '15', 'a@b.com', 'nagare', 'n', '9075044780'),
(2, 'Nagare', 'Computer Engg', 'TY', '15', 'a@b.com', 'nagare', 'n', '9075044780'),
(3, 'Shaikh Tohif', 'Computer', 'TY', '12', 'tohif@gmail.com', 'tohif', 't', '7030751938'),
(5, 'Shaikh Tohif', 'Computer', 'FY', '12', 'tohif@gmail.com', 'tohif_shaikh', 't', '7030751938'),
(6, 'saie  surahj vke', 'Computer', 'TY', '501', 'saiev@gmail', 'saie', 's', '9685645865'),
(7, 'Vijay Chopade', 'Computer', 'SY', '134', 'vj@gmail.com', 'vijay', 'v', '545456454564');

-- --------------------------------------------------------

--
-- Table structure for table `stud_reg`
--

CREATE TABLE IF NOT EXISTS `stud_reg` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `roll_no` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `stud_reg`
--

INSERT INTO `stud_reg` (`id`, `name`, `course`, `branch`, `roll_no`, `email`, `user_name`, `password`) VALUES
(1, 'tohif', 'tyco', 'computer', 10, 'tohifs', 'tohif', 'n'),
(2, 'tohif', 'tyco', 'computer', 10, 'tohifs', 'tohif', 'n'),
(3, 'tohif', 'tyco', 'computer', 10, 'tohifs', 'tohif', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `tj`
--

CREATE TABLE IF NOT EXISTS `tj` (
  `user_name` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `roll_no` int(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
