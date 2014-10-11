-- phpMyAdmin SQL Dump
-- version 3.3.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2014 at 02:08 PM
-- Server version: 5.1.52
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `repaschall_12FA_2439`
--

-- --------------------------------------------------------

--
-- Table structure for table `appt_request`
--

CREATE TABLE IF NOT EXISTS `appt_request` (
  `appt_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_num` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_addr` varchar(50) NOT NULL,
  `type_1` varchar(15) NOT NULL,
  `type_2` varchar(15) NOT NULL,
  `type_3` varchar(15) NOT NULL,
  `mcc_status` varchar(25) NOT NULL,
  `contact_method` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `mtg_days` varchar(100) NOT NULL,
  `mtg_time` varchar(25) NOT NULL,
  `mtg_location` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'requested',
  `last_mod_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`appt_request_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `appt_request`
--

INSERT INTO `appt_request` (`appt_request_id`, `visit_num`, `first_name`, `last_name`, `email_addr`, `type_1`, `type_2`, `type_3`, `mcc_status`, `contact_method`, `phone`, `mtg_days`, `mtg_time`, `mtg_location`, `status`, `last_mod_dt`) VALUES
(1, 1737397456, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Realistic', 'Investigative', 'Conventional', 'Current MCC student', 'Email', '4027406590', 'Monday  Wednesday  Friday  ', 'Any Time', 'None Specified', 'requested', '2014-07-06 21:48:19'),
(2, 1945001320, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Enterprising', 'Realistic', 'Artistic', 'Alumni', 'Email', '', 'Friday  ', 'Afternoon', 'None Specified', 'requested', '2014-07-07 16:50:57'),
(3, 1282823252, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Social', 'Enterprising', 'Conventional', 'Current MCC student', 'Phone', '4027406590', 'Tuesday  Thursday  ', 'Morning', 'None Specified', 'requested', '2014-07-12 12:56:18'),
(4, 228051826, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Investigative', 'Conventional', 'Realistic', 'Alumni', 'Email', '', 'Tuesday  ', 'Any Time', 'None Specified', 'requested', '2014-07-12 15:10:12'),
(5, 1658468517, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Investigative', 'Conventional', 'Realistic', 'Current MCC student', 'Phone', '4027406590', 'Tuesday  Thursday  ', 'Afternoon', 'None Specified', 'requested', '2014-07-12 15:11:29'),
(6, 198854945, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Social', 'Artistic', 'Enterprising', 'Current MCC student', 'Email', '', 'Any Day  ', 'Morning', 'None Specified', 'requested', '2014-07-12 16:12:28'),
(7, 16649926, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'an MCC alumni.', 'Email', '', 'Monday  ', 'Any Time', 'Fort Omaha Campus', 'requested', '2014-07-18 11:07:40'),
(8, 242449055, 'Art', 'Brown', 'abrownii@mccneb.edu', 'Social', 'Investigative', 'Conventional', 'Alumni', 'Email', '402.457.2322', 'Monday  Thursday  Friday  ', 'Any Time', 'None Specified', 'requested', '2014-07-24 10:49:36'),
(9, 1927369816, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Enterprising', 'Realistic', 'Artistic', 'a current MCC student.', 'Email', '', 'Monday  ', 'Any Time', 'Elkhorn Valley Campus', 'requested', '2014-07-29 20:12:39'),
(10, 1593314704, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Enterprising', 'Conventional', 'Social', 'an MCC alumni.', 'Email', '', 'Tuesday  ', 'Any Time', 'MCC Express', 'requested', '2014-07-29 20:25:49'),
(11, 448361111, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Realistic', 'Artistic', 'Investigative', 'not interested in MCC', 'Email', '', 'Wednesday  ', 'Any Time', 'Elkhorn Valley Campus', 'requested', '2014-07-29 20:31:30'),
(12, 2013149719, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Enterprising', 'Artistic', 'Investigative', 'an MCC alumni.', 'Email', '4027406590', 'Tuesday  ', 'Morning', 'Elkhorn Valley Campus', 'requested', '2014-07-30 16:14:20'),
(13, 1830177854, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Enterprising', 'Conventional', 'Social', 'a current MCC student.', 'Email', '4027406590', 'Wednesday  ', 'Any Time', 'Elkhorn Valley Campus', 'requested', '2014-07-30 16:40:51'),
(14, 487228597, 'John', 'Doe', 'skip123paschall@gmail.con', 'Social', 'Realistic', 'Enterprising', 'a prospective student at ', 'Email', '', 'Monday  ', 'Morning', 'Elkhorn Valley Campus', 'requested', '2014-07-30 18:10:47'),
(15, 344285911, 'John', 'Doe', 'skip123paschall@gmail.com', 'Artistic', 'Conventional', 'Realistic', 'an MCC alumni.', 'Phone', '123', 'Thursday  ', 'Any Time', 'Elkhorn Valley Campus', 'requested', '2014-07-30 18:17:58'),
(16, 64721811, 'John', 'Doe', 'skip123paschall@gmail.com', 'Social', 'Enterprising', 'Realistic', 'an MCC alumni.', 'Phone', '022698;8566', 'None Specified', 'None Specified', 'Any Location', 'requested', '2014-07-30 18:22:42'),
(17, 1668906265, 'rob', 'schuman', 'rhschuman@gmail.com', 'Enterprising', 'Social', 'Artistic', 'an MCC alumni.', 'Email', '5466313213', 'None Specified', 'None Specified', 'Any Location', 'requested', '2014-07-31 23:14:37'),
(18, 1668906265, 'rob', 'schuman', 'rhschuman@gmail.com', 'Enterprising', 'Social', 'Artistic', 'a current MCC student.', 'Phone', '5466313213', 'None Specified', 'None Specified', 'Any Location', 'requested', '2014-07-31 23:18:51'),
(19, 592572126, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Enterprising', 'Conventional', 'Realistic', 'a current MCC student.', 'Email', '', 'Monday  Thursday  ', 'Morning', 'MCC Express', 'requested', '2014-08-02 08:42:17'),
(20, 169133482, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Enterprising', 'Investigative', 'Conventional', 'a current MCC student.', 'Email', '', 'Thursday  Friday  ', 'Any Time', 'Fort Omaha Campus', 'requested', '2014-08-02 09:37:33'),
(21, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'Monday  ', 'Any Time', 'Fort Omaha Campus', 'requested', '2014-08-02 11:37:23'),
(22, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'None Specified', 'None Specified', 'Any Location', 'requested', '2014-08-02 12:27:53'),
(23, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a prospective student at ', 'Email', '', 'None Specified', 'None Specified', 'Any Location', 'requested', '2014-08-02 12:48:13'),
(24, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a prospective student at ', 'Email', '', 'None Specified', 'None Specified', '', 'requested', '2014-08-02 12:48:54'),
(25, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'Monday  ', 'Afternoon', 'Elkhorn Valley Campus', 'requested', '2014-08-02 12:49:36'),
(26, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'Monday  ', 'Afternoon', 'Elkhorn Valley Campus', 'requested', '2014-08-02 12:50:35'),
(27, 1415476470, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '4028506170', 'Monday  Wednesday  ', 'Afternoon', 'Fort Omaha Campus', 'requested', '2014-08-02 13:03:52'),
(28, 1415476470, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '4028506170', 'Monday  Wednesday  ', 'Afternoon', 'Fort Omaha Campus', 'requested', '2014-08-02 13:04:04'),
(29, 1538610056, 'Rob', 'Schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '402585588', 'None Specified', 'None Specified', '', 'requested', '2014-08-02 13:06:46'),
(30, 1538610056, 'Rob', 'Schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '402585588', 'None Specified', 'None Specified', '', 'requested', '2014-08-02 13:07:00'),
(31, 1538610056, 'Rob', 'Schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '402585588', 'None Specified', 'None Specified', '', 'requested', '2014-08-02 13:08:57'),
(32, 1792183551, 'Rob', 'Schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '5', 'Monday  ', 'Afternoon', 'Fort Omaha Campus', 'requested', '2014-08-02 13:10:11'),
(33, 1792183551, 'Rob', 'Schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '5', 'None Specified', 'None Specified', '', 'requested', '2014-08-02 13:13:13'),
(34, 931410278, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'Tuesday  ', 'Morning', 'Fort Omaha Campus', 'requested', '2014-08-02 13:18:33'),
(35, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'None Specified', 'None Specified', '', 'requested', '2014-08-02 13:19:11'),
(36, 931410278, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'Tuesday  ', 'Morning', 'Fort Omaha Campus', 'requested', '2014-08-02 13:19:28'),
(37, 931410278, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'Tuesday  ', 'Morning', 'Fort Omaha Campus', 'requested', '2014-08-02 13:19:32'),
(38, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '56756756', 'None Specified', 'None Specified', '', 'requested', '2014-08-02 13:21:58'),
(39, 929480860, 'Nathan', 'thomas', 'thomasnathanm87@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'Any Day  ', 'Any Time', 'Any Location', 'requested', '2014-08-02 13:22:56'),
(40, 929480860, 'Nathan', 'thomas', 'thomasnathanm87@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'Any Day  ', 'Any Time', 'Any Location', 'requested', '2014-08-02 13:23:32'),
(41, 929480860, 'Nathan', 'thomas', 'thomasnathanm87@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '4027392355', 'Any Day  ', 'Any Time', 'Any Location', 'requested', '2014-08-02 13:24:23'),
(42, 1715472474, 'Art', 'Brown', 'abrown@mccneb.edu', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '4028806100', 'Monday  ', 'Any Time', '', 'requested', '2014-08-02 13:25:21'),
(43, 307737314, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '', 'Tuesday  ', 'Morning', 'MCC Express', 'requested', '2014-08-02 13:32:17'),
(44, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a prospective student at ', 'Email', '56756756', 'None Specified', 'Afternoon', '', 'requested', '2014-08-02 13:38:01'),
(45, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '56756756', 'None Specified', 'Afternoon', '', 'requested', '2014-08-02 13:38:55'),
(46, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '56756756', 'None Specified', '', '', 'requested', '2014-08-02 13:42:34'),
(47, 929480860, 'Nathan', 'thomas', 'thomasnathanm87@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '4027392355', 'None Specified', 'Any Time', '', 'requested', '2014-08-02 13:42:34'),
(48, 1792183551, 'Rob', 'Schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '5', 'None Specified', '', '', 'requested', '2014-08-02 13:43:32'),
(49, 2126002318, 'Rob', 'Schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '402585588', 'None Specified', '', '', 'requested', '2014-08-02 13:45:23'),
(50, 9741400, 'Skip', 'Paschall', 'skip123paschall@gmail.com', 'Conventional', 'Enterprising', 'Artistic', 'a current MCC student.', 'Phone', '4027406590', 'Monday  Wednesday  Friday  ', 'Morning', 'Fort Omaha Campus', 'requested', '2014-08-02 13:45:24'),
(51, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '402-850-6170', 'Tuesday  Wednesday  Thursday  Friday  ', 'Morning', 'Fort Omaha Campus', 'requested', '2014-08-02 13:48:21'),
(52, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a prospective student at ', 'Phone', '402-850-6170', 'None Specified', '', '', 'requested', '2014-08-02 13:49:19'),
(53, 929480860, 'Nathan', 'thomas', 'thomasnathanm87@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Phone', '4027392355', 'None Specified', '', '', 'requested', '2014-08-02 13:49:37'),
(54, 2004383104, 'Art', 'Brown', 'abrown@mccneb.edu', 'Enterprising', 'Conventional', 'Social', 'a current MCC student.', 'Phone', '4028806100', 'None Specified', '', '', 'requested', '2014-08-02 13:49:49'),
(55, 2004383104, 'Art', 'Brown', 'abrown@mccneb.edu', 'Enterprising', 'Conventional', 'Social', 'a current MCC student.', 'Phone', '4028806100', 'None Specified', '', '', 'requested', '2014-08-02 13:50:31'),
(56, 2004383104, 'Art', 'Brown', 'abrown@mccneb.edu', 'Enterprising', 'Conventional', 'Social', 'an MCC alumni.', 'Phone', '4028806100', 'None Specified', '', '', 'requested', '2014-08-02 13:50:48'),
(57, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '402-850-6170', 'None Specified', '', '', 'requested', '2014-08-02 13:54:25'),
(58, 1688613377, 'Amber', 'Schuman', 'amberflott1980@yahoo.com', 'Unknown', 'Unknown', 'Unknown', 'a current MCC student.', 'Email', '4023051360', 'None Specified', '', '', 'requested', '2014-08-02 13:55:39'),
(59, 2004383104, 'Art', 'Brown', 'abrown@mccneb.edu', 'Enterprising', 'Conventional', 'Social', 'a current MCC student.', 'Phone', '4028806100', 'None Specified', '', '', 'requested', '2014-08-02 13:56:18'),
(60, 2004383104, 'Art', 'Brown', 'abrown@mccneb.edu', 'Enterprising', 'Conventional', 'Social', 'a current MCC student.', 'Email', '4028806100', 'None Specified', '', '', 'requested', '2014-08-02 13:56:34'),
(61, 2004383104, 'Art', 'Brown', 'abrown@mccneb.edu', 'Enterprising', 'Conventional', 'Social', 'an MCC alumni.', 'Phone', '4028806100', 'None Specified', '', '', 'requested', '2014-08-02 13:59:15'),
(62, 497333600, 'rob', 'schuman', 'rhschuman@gmail.com', 'Unknown', 'Unknown', 'Unknown', 'an MCC alumni.', 'Phone', '402-850-6170', 'None Specified', 'Morning', '', 'requested', '2014-08-02 14:01:54');
