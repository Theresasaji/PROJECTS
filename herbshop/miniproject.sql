-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2019 at 08:39 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartdetails`
--

CREATE TABLE IF NOT EXISTS `cartdetails` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `ccategory` varchar(25) NOT NULL,
  `cprice` varchar(100) NOT NULL,
  `quantity` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cartdetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `fid` int(100) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`fid`, `user`, `msg`) VALUES
(3, 'sruthi', '	very butiful and super');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bcate` varchar(100) NOT NULL,
  `bprice` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `STATUS` varchar(100) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`oid`, `uname`, `bname`, `bcate`, `bprice`, `quantity`, `date`, `STATUS`) VALUES
(6, 'anu', 'turmeric', 'skin problem', '200', 1, '2019/11/21', 'DELIVERED'),
(17, 'denu', 'mint', 'fever', '300', 2, '2019/12/09', 'PENDING'),
(19, 'sruthi', 'turmeric', 'skin problem', '200', 1, '2019/12/09', 'PENDING'),
(24, 'denu', 'aloe vera', 'skin problem', '200', 1, '2019/12/09', 'PENDING'),
(25, 'denu', 'turmeric', 'skin problem', '200', 1, '2019/12/09', 'PENDING'),
(26, 'mahi', 'neem', 'eye disorder', '300', 1, '2019/12/11', 'PENDING'),
(27, 'mahi', 'clove', 'hernia', '450', 1, '2019/12/11', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `pcure` varchar(100) NOT NULL,
  `pcost` varchar(300) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `pdescription` varchar(150) NOT NULL,
  `ptype` varchar(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pcure`, `pcost`, `pimage`, `pdescription`, `ptype`) VALUES
(1, 'aloe vera', 'skin problem', '200', 'aloevera.jpg', 'aloevera is a succulent plant of the genus aloe', 'h'),
(2, 'turmeric', 'skin problem', '200', 'turmeic.jpg', 'most effective nutritional supplement', 's'),
(3, 'mint', 'fever', '300', 'mint.jpg', 'most effective nutritional supplement', 'h'),
(4, 'ginger', 'digestive problem', '300', 'ginger.jpg', 'medicinal property', 's'),
(5, 'rosemary', 'muscle pain', '300', 'rosemary.jpg', 'woody perennial herb', 'h'),
(6, 'garlic', 'blood pressure', '400', 'garlic.jpg', 'it is a herb belongs to lily family', 's'),
(7, 'neem', 'eye disorder', '300', 'neem.jpg', 'medicinal plant with antiaging feature', 'h'),
(8, 'clove', 'hernia', '450', 'clove.jpg', 'contain important nutrients', 's'),
(9, 'blueberry', 'cancer', '500', 'blueberry.JPG', 'high in nutrients', 'h'),
(10, 'lemon', 'cold', '400', 'lemon.JPG', 'lemon is a species of small evergreen tree in the flowering plant family rutaceae', 's'),
(17, 'hibiscus', 'fever', '80', 'hibiscus.JPG', 'an evergreen woody shrub growsup to 8 meters in height', 'h'),
(13, 'nutmeg', 'pain', '550', 'nutmeg.jpg', 'it is a seed or ground species', 's'),
(16, 'cardamom', 'fever', '100', 'cardamom.jpg', 'it is a spice made from the seeds of several palnts in the family zingiberaceae', 's'),
(15, 'thyme', 'stomach ache', '100', 'thyme.JPG', 'thymus vulgaris is a small perennial evergreen shrub ', 'h'),
(18, 'vetiver', 'skin problem', '150', 'vetiver khus.JPG', 'a densely tufted perennial grass with aromatic roots', 's'),
(19, 'black pepper', 'cough', '170', 'black pepper.jpg', 'black pepper is the world most traded spice ', 's'),
(20, 'ajwain', 'cholestrol', '100', 'ajwain.jpg', 'ajwain is an annual herb in the family apiaceae', 's'),
(21, 'savory', 'cough', '80', 'savory.JPG', 'savory is the best knowm for its culinary powers', 'h'),
(22, 'dill', 'fever', '100', 'dill.JPG', 'sill is an herbaceous annual in the family apiaceae', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `uemail` varchar(25) NOT NULL,
  `uplace` varchar(25) NOT NULL,
  `udistrict` varchar(25) NOT NULL,
  `uphoneno` varchar(10) NOT NULL,
  `upassword` varchar(8) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`uid`, `uname`, `uemail`, `uplace`, `udistrict`, `uphoneno`, `upassword`) VALUES
(4, 'anu', 'anu@gmail.com', 'pala', 'idukki', '5678987654', 'anu'),
(5, 'hari', 'hari@gmail.com', 'pala', 'palakad', '5678987654', 'hari'),
(6, 'denu', 'denu@gmail.com', 'angamali', 'alapuzha', '7899653452', 'denu'),
(7, 'sruthi', 'sruthi@gmail.co', 'edamaruk', 'kottayam', '7994570920', 'sruthi'),
(8, 'theresa', 'theresa@gmail.com', 'pala', 'ktm', '5666765433', 'the'),
(9, 'mahi', 'mahi@gmail.com', 'pala', 'kottayam', '6789765434', 'mahi');
