-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 10:32 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chitty`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apayment`
--

CREATE TABLE IF NOT EXISTS `tbl_apayment` (
  `ap_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_ch_id` int(11) NOT NULL,
  `ap_date` date NOT NULL,
  `s_id` int(11) NOT NULL,
  `surety_name` varchar(40) NOT NULL,
  `surety_add` varchar(40) NOT NULL,
  `ap_amount` int(11) NOT NULL,
  `v_no` int(11) NOT NULL,
  `cheq_no` int(11) NOT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auction`
--

CREATE TABLE IF NOT EXISTS `tbl_auction` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `cust_ch_id` int(11) NOT NULL,
  `a_winner` varchar(35) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chittreg`
--

CREATE TABLE IF NOT EXISTS `tbl_chittreg` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `chitt_name` varchar(35) NOT NULL,
  `installment` int(11) NOT NULL,
  `s_date` date NOT NULL,
  `divisions` int(11) NOT NULL,
  `chitt_amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chittypayment`
--

CREATE TABLE IF NOT EXISTS `tbl_chittypayment` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_ch_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `install_no` int(11) NOT NULL,
  `chitt_amount` int(11) NOT NULL,
  `dividend` int(11) NOT NULL,
  `interest` int(11) NOT NULL,
  `p_date` date NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_custchitty`
--

CREATE TABLE IF NOT EXISTS `tbl_custchitty` (
  `cust_ch_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`cust_ch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `address` varchar(40) NOT NULL,
  `mob` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pan` varchar(25) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `feedback` varchar(90) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `uname` varchar(35) NOT NULL,
  `pwd` varchar(35) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lot`
--

CREATE TABLE IF NOT EXISTS `tbl_lot` (
  `lot_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `cust_ch_id` int(11) NOT NULL,
  PRIMARY KEY (`lot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_month`
--

CREATE TABLE IF NOT EXISTS `tbl_month` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(35) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(35) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE IF NOT EXISTS `tbl_salary` (
  `sal_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `ta` int(11) NOT NULL,
  `commission` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `leave_cut` int(11) NOT NULL,
  `s_date` date NOT NULL,
  `salary` int(11) NOT NULL,
  `g_salary` int(11) NOT NULL,
  PRIMARY KEY (`sal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(40) NOT NULL,
  `S_address` varchar(65) NOT NULL,
  `s_mob` int(11) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `s_email` varchar(35) NOT NULL,
  `log_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_apayment`
--
ALTER TABLE `tbl_apayment`
  ADD CONSTRAINT `forignkey` FOREIGN KEY (`ap_id`) REFERENCES `tbl_staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_auction`
--
ALTER TABLE `tbl_auction`
  ADD CONSTRAINT `tbl_auction_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `tbl_custchitty` (`cust_ch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_chittypayment`
--
ALTER TABLE `tbl_chittypayment`
  ADD CONSTRAINT `tbl_chittypayment_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_custchitty`
--
ALTER TABLE `tbl_custchitty`
  ADD CONSTRAINT `forign` FOREIGN KEY (`cust_ch_id`) REFERENCES `tbl_customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`cust_id`) REFERENCES `tbl_login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `forign key` FOREIGN KEY (`f_id`) REFERENCES `tbl_customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`log_id`) REFERENCES `tbl_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_lot`
--
ALTER TABLE `tbl_lot`
  ADD CONSTRAINT `tbl_lot_ibfk_1` FOREIGN KEY (`lot_id`) REFERENCES `tbl_custchitty` (`cust_ch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD CONSTRAINT `tbl_salary_ibfk_1` FOREIGN KEY (`sal_id`) REFERENCES `tbl_staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD CONSTRAINT `tbl_staff_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `tbl_login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
