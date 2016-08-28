-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2016 at 07:50 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_health_community`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor_donors`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor_donors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uploaded_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_doctor_donors`
--

INSERT INTO `tbl_doctor_donors` (`id`, `patient_id`, `date_created`, `date_updated`, `uploaded_by`) VALUES
(1, 1, '2016-08-27 14:20:41', '2016-08-27 14:20:41', 1),
(2, 2, '2016-08-28 05:29:08', '2016-08-28 05:29:08', 2),
(3, 1, '2016-08-28 05:29:08', '2016-08-28 05:29:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donors`
--

CREATE TABLE IF NOT EXISTS `tbl_donors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `mode_of_donation` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_donors`
--

INSERT INTO `tbl_donors` (`id`, `user_id`, `amount`, `mode_of_donation`, `patient_id`, `date_created`, `date_updated`, `updated_by`) VALUES
(1, 1, '10000.00', 1, 1, '2016-08-28 00:19:38', '2016-08-28 00:19:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patients`
--

CREATE TABLE IF NOT EXISTS `tbl_patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) NOT NULL,
  `complication_name` varchar(255) NOT NULL,
  `complicatin_desc` text NOT NULL,
  `user_remarks` text NOT NULL,
  `upload_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_patients`
--

INSERT INTO `tbl_patients` (`id`, `nickname`, `complication_name`, `complicatin_desc`, `user_remarks`, `upload_by`, `date_created`, `date_updated`) VALUES
(1, 'Juan Dela Cruz', 'Heart Disease', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 1, '2016-08-27 08:32:12', '2016-08-27 08:32:12'),
(2, 'John Santos', 'Rare Disease', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. ', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id el.', 2, '2016-08-28 04:24:28', '2016-08-28 04:25:04'),
(3, 'nene', 'heart complication', 'descr', 'please hel;p', 1, '2016-08-28 04:35:21', '2016-08-28 04:35:21'),
(4, 'nene', 'heart complication', 'descr', 'please hel;p', 1, '2016-08-28 04:35:51', '2016-08-28 04:35:51'),
(5, 'nena', 'anthrax', 'serious disease', 'please helpo', 1, '2016-08-28 04:36:31', '2016-08-28 04:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(10) NOT NULL,
  `location` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `first_name`, `last_name`, `address`, `location`, `occupation`, `hospital`, `user_type`, `user_status`, `date_created`, `date_updated`) VALUES
(1, 'bibiyo', '123', '123', '123', 'Dr.', '', '', '', 1, 1, '2016-08-27 03:03:26', '2016-08-27 03:03:26'),
(2, 'ren', '123', 'ren', 'carpio', 'Ms.', '', '', '', 2, 1, '2016-08-27 06:53:32', '2016-08-27 06:53:32'),
(0, 'ren', '12234', 'Mario ', 'Cruz', 'Taguig', 'Mario', 'Doctor', 'Taguig Hospital', 1, 1, '2016-08-28 05:27:13', '2016-08-28 05:27:13'),
(3, 'maclara', '123', 'Maria', 'Clara', 'Makati', 'Makati', 'Doctor', 'Taguig Hospital', 1, 1, '2016-08-28 05:28:39', '2016-08-28 05:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl__cms_inner_pages`
--

CREATE TABLE IF NOT EXISTS `tbl__cms_inner_pages` (
  `innerPageID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pageID` bigint(20) unsigned NOT NULL,
  `pageName` varchar(64) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `filename` varchar(100) NOT NULL DEFAULT '',
  `placement` varchar(20) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `ordering` bigint(20) NOT NULL DEFAULT '0',
  `icon` varchar(50) NOT NULL DEFAULT 'fa fa-files-o',
  `last_username` varchar(60) NOT NULL DEFAULT '',
  `last_browser` text NOT NULL,
  `last_ip_address` varchar(20) NOT NULL DEFAULT '',
  `last_http_referer` text NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`innerPageID`),
  KEY `pageID` (`pageID`),
  KEY `pageName` (`pageName`),
  KEY `slug` (`slug`),
  KEY `placement` (`placement`),
  KEY `visible` (`visible`),
  KEY `last_username` (`last_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl__cms_options`
--

CREATE TABLE IF NOT EXISTS `tbl__cms_options` (
  `optionID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `optionName` varchar(64) NOT NULL DEFAULT '',
  `optionValue` longtext NOT NULL,
  `last_username` varchar(60) NOT NULL DEFAULT '',
  `last_browser` text NOT NULL,
  `last_ip_address` varchar(20) NOT NULL DEFAULT '',
  `last_http_referer` text NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`optionID`),
  KEY `optionName` (`optionName`),
  KEY `last_username` (`last_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl__cms_options`
--

INSERT INTO `tbl__cms_options` (`optionID`, `optionName`, `optionValue`, `last_username`, `last_browser`, `last_ip_address`, `last_http_referer`, `last_modified`) VALUES
(1, 'cms_date_created', '2016', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(2, 'cms_title', 'Health Community', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(3, 'cms_logo', '', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(4, 'enable_brute_login', '1', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(5, 'login_max_attempts', '5', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(6, 'login_time_lock', '30', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(7, 'no_reply_email', '', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl__cms_pages`
--

CREATE TABLE IF NOT EXISTS `tbl__cms_pages` (
  `pageID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pageName` varchar(64) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `filename` varchar(100) NOT NULL DEFAULT '',
  `placement` varchar(20) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `ordering` bigint(20) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `icon` varchar(50) NOT NULL DEFAULT 'fa fa-files-o',
  `last_username` varchar(60) NOT NULL DEFAULT '',
  `last_browser` text NOT NULL,
  `last_ip_address` varchar(20) NOT NULL DEFAULT '',
  `last_http_referer` text NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pageID`),
  KEY `pageName` (`pageName`),
  KEY `slug` (`slug`),
  KEY `placement` (`placement`),
  KEY `visible` (`visible`),
  KEY `last_username` (`last_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl__cms_pages`
--

INSERT INTO `tbl__cms_pages` (`pageID`, `pageName`, `slug`, `filename`, `placement`, `description`, `visible`, `ordering`, `date_added`, `icon`, `last_username`, `last_browser`, `last_ip_address`, `last_http_referer`, `last_modified`) VALUES
(1, 'Admins', 'admin', 'cms-default-page/cms-admins.php', 'nav', '', 1, 1, '2016-08-28 10:42:27', 'fa fa-users', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(2, 'Pages', 'pages', 'cms-default-page/cms-pages.php', 'nav', '', 1, 2, '2016-08-28 10:42:27', 'fa fa-files-o', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(3, 'Change Password', 'change-password', 'cms-default-page/cms-change-password.php', 'nav', '', 1, 3, '2016-08-28 10:42:27', 'fa fa-lock', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(4, 'General Settings', 'general-settings', 'cms-default-page/cms-general-settings.php', 'nav', '', 1, 4, '2016-08-28 10:42:27', 'fa fa-gear', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(5, 'Tables', 'tables', 'cms-default-page/cms-tables.php', 'sidebar', '', 1, 1, '2016-08-28 10:42:27', 'fa fa fa-table', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(6, 'Forms', 'forms', 'cms-default-page/cms-forms.php', 'sidebar', '', 1, 2, '2016-08-28 10:42:27', 'fa fa-edit', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(7, 'Icons', 'icons', 'cms-default-page/cms-icons.php', 'sidebar', '', 1, 3, '2016-08-28 10:42:27', 'fa fa-flag', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(8, 'UI Elements', 'ui-elements', 'cms-default-page/cms-ui-elements.php', 'sidebar', '', 1, 4, '2016-08-28 10:42:27', 'fa fa-wrench', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(9, 'CMS Guidelines', 'cms-guidelines', 'cms-default-page/cms-guidelines.php', 'sidebar', '', 1, 5, '2016-08-28 10:42:27', 'fa fa-file-text-o', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27'),
(10, 'Blank Page', 'blank-page', 'cms-default-page/cms-blank-page.php', 'sidebar', '', 1, 6, '2016-08-28 10:42:27', 'fa fa-files-o', 'admin', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/cms-install.php', '2016-08-28 02:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl__cms_users`
--

CREATE TABLE IF NOT EXISTS `tbl__cms_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL DEFAULT '',
  `firstname` varchar(64) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(128) NOT NULL DEFAULT '',
  `salt` char(128) NOT NULL DEFAULT '',
  `forgot_password_key` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `role` varchar(60) NOT NULL DEFAULT '',
  `date_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_changed_password` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_brute_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `login_attempts` tinyint(4) NOT NULL DEFAULT '0',
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `role` (`role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl__cms_users`
--

INSERT INTO `tbl__cms_users` (`ID`, `username`, `firstname`, `lastname`, `password`, `salt`, `forgot_password_key`, `email`, `role`, `date_registered`, `last_changed_password`, `last_brute_login`, `login_attempts`, `last_modified`) VALUES
(1, 'admin', 'admin', 'admin', '94889e6e9881e37953323a45c7aebf49e32996ab39231305eea3aa229ee7a2314364b7d612be9968b97d65f43c84b6d114315796fd74b43c069fbf7099c713e1', 'f91d3b668af0915067b0385b54ae0427', '', 'rencarpio02@gmail.com', 'Super Admin', '2016-08-28 10:42:27', '0000-00-00 00:00:00', '2016-08-28 10:42:38', 0, '2016-08-28 02:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl__cms_user_logs`
--

CREATE TABLE IF NOT EXISTS `tbl__cms_user_logs` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `status` varchar(60) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `browser` text NOT NULL,
  `ip_address` varchar(20) NOT NULL DEFAULT '',
  `http_referer` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_id` (`user_id`),
  KEY `status` (`status`),
  KEY `date_added` (`date_added`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl__cms_user_logs`
--

INSERT INTO `tbl__cms_user_logs` (`ID`, `user_id`, `status`, `description`, `date_added`, `browser`, `ip_address`, `http_referer`) VALUES
(1, 1, 'login success', '', '2016-08-28 10:42:38', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '::1', 'http://localhost/cms_uhac/index.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
