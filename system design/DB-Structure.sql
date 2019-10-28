-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2015 at 12:07 PM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `susannaz_arrakis`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `ADDR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `LINE_1` varchar(15) DEFAULT NULL,
  `LINE_2` varchar(15) DEFAULT NULL,
  `CITY` varchar(15) DEFAULT NULL,
  `POSTCODE` varchar(4) DEFAULT NULL,
  `STATE` char(15) DEFAULT NULL,
  `PHONE` varchar(12) NOT NULL,
  PRIMARY KEY (`ADDR_ID`),
  KEY `FK_RELATIONSHIP_1` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;



--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `NAME` varchar(20) DEFAULT NULL,
  `IMAGE` varchar(50) DEFAULT NULL,
  `URL` varchar(50) NOT NULL,
  PRIMARY KEY (`URL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `DISCOUNT_ID` varchar(3) NOT NULL,
  `RATE` decimal(4,2) DEFAULT NULL,
  `DESCRIPTION` text,
  PRIMARY KEY (`DISCOUNT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `INVOICE_NUM` int(11) NOT NULL,
  `BILLING_ADDRRESS` int(11) DEFAULT NULL,
  `ORDER_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`INVOICE_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `NEWSLETTER_ID` int(11) NOT NULL,
  `SENT_DATE` date DEFAULT NULL,
  `TOTAL_SUBSCRIBERS` int(11) DEFAULT NULL,
  `CATALOGUE_ID` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`NEWSLETTER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_user`
--

DROP TABLE IF EXISTS `newsletter_user`;
CREATE TABLE IF NOT EXISTS `newsletter_user` (
  `ID` int(11) NOT NULL,
  `NEWSLETTER_ID` int(11) NOT NULL,
  KEY `FK_RELATIONSHIP_17` (`NEWSLETTER_ID`),
  KEY `FK_RELATIONSHIP_18` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID` int(11) NOT NULL,
  `SHIPPING_METHOD_ID` varchar(4) NOT NULL,
  `PAYPAL_ID` varchar(40) NOT NULL,
  `ORDER_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL` decimal(7,2) DEFAULT NULL,
  `STATUS` enum('created','approved','failed','canceled','expired') DEFAULT 'failed',
  `BILLING_FIRST_NAME` varchar(15) DEFAULT NULL,
  `BILLING_LAST_NAME` varchar(15) DEFAULT NULL,
  `BILLING_LINE_1` varchar(15) DEFAULT NULL,
  `BILLING_LINE_2` varchar(15) DEFAULT NULL,
  `BILLING_CITY` varchar(15) DEFAULT NULL,
  `BILLING_POSTCODE` varchar(4) DEFAULT NULL,
  `BILLING_STATE` char(15) DEFAULT NULL,
  `BILLING_PHONE` varchar(12) DEFAULT NULL,
  `SHIPPING_FIRST_NAME` varchar(15) DEFAULT NULL,
  `SHIPPING_LAST_NAME` varchar(15) DEFAULT NULL,
  `SHIPPING_LINE_1` varchar(15) DEFAULT NULL,
  `SHIPPING_LINE_2` varchar(15) DEFAULT NULL,
  `SHIPPING_CITY` varchar(15) DEFAULT NULL,
  `SHIPPING_POSTCODE` varchar(4) DEFAULT NULL,
  `SHIPPING_STATE` char(15) DEFAULT NULL,
  `SHIPPING_PHONE` varchar(12) DEFAULT NULL,
  `TRACKING_ID` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ORDER_ID`),
  KEY `FK_RELATIONSHIP_11` (`ID`),
  KEY `FK_RELATIONSHIP_21` (`SHIPPING_METHOD_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;



--
-- Table structure for table `order_line`
--

DROP TABLE IF EXISTS `order_line`;
CREATE TABLE IF NOT EXISTS `order_line` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCT_URL` varchar(20) NOT NULL,
  `ORDER_ID` int(11) NOT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `WEIGHT` float DEFAULT NULL,
  `PRICE` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_RELATIONSHIP_5` (`ORDER_ID`),
  KEY `FK_RELATIONSHIP_20` (`PRODUCT_URL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;



--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `ORDER_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TYPE` varchar(10) DEFAULT NULL,
  `PAYPAL_ID` varchar(50) NOT NULL,
  `ORDER_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `INVOICE_NUM` int(11) NOT NULL,
  PRIMARY KEY (`PAYPAL_ID`),
  KEY `FK_RELATIONSHIP_13` (`ID`),
  KEY `FK_RELATIONSHIP_14` (`ORDER_ID`),
  KEY `FK_RELATIONSHIP_15` (`INVOICE_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `PRODUCT_URL` varchar(20) NOT NULL,
  `CATEGORY_URL` varchar(50) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `IMAGE` varchar(50) DEFAULT NULL,
  `GST` decimal(4,2) NOT NULL DEFAULT '10.00',
  `PRICE` decimal(7,2) DEFAULT NULL,
  `WEIGHT_DEFAULT` float DEFAULT NULL,
  `UNIT` varchar(2) DEFAULT NULL,
  `STOCK` int(11) DEFAULT NULL,
  `DESCRIPTION` text,
  `LOW_STOCK` char(10) DEFAULT NULL,
  `HIGH_STOCK` int(11) DEFAULT NULL,
  `QNT_SOLD` int(11) DEFAULT NULL,
  `ACTIVE` tinyint(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`PRODUCT_URL`),
  KEY `FK_RELATIONSHIP_8` (`CATEGORY_URL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Table structure for table `product_options`
--

DROP TABLE IF EXISTS `product_options`;
CREATE TABLE IF NOT EXISTS `product_options` (
  `OPTION_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCT_URL` varchar(20) NOT NULL,
  `WEIGHT` float DEFAULT NULL,
  `PRICE_INCREMENT` float DEFAULT NULL,
  PRIMARY KEY (`OPTION_ID`),
  KEY `FK_RELATIONSHIP_22` (`PRODUCT_URL`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;



--
-- Table structure for table `shipping_method`
--

DROP TABLE IF EXISTS `shipping_method`;
CREATE TABLE IF NOT EXISTS `shipping_method` (
  `SHIPPING_METHOD_ID` varchar(4) NOT NULL,
  `DESCRIPTION` text,
  `PRICE` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`SHIPPING_METHOD_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `CART_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `DATE_SAVED` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`CART_ID`),
  KEY `FK_RELATIONSHIP_30` (`USER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Table structure for table `shopping_cart_items`
--

DROP TABLE IF EXISTS `shopping_cart_items`;
CREATE TABLE IF NOT EXISTS `shopping_cart_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `URL` varchar(50) NOT NULL,
  `CART_ID` int(11) NOT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_RELATIONSHIP_9` (`CART_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;



--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACCOUNT_TYPE` enum('prv','cmm','adm') NOT NULL,
  `USERNAME` varchar(64) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  `SALT` varchar(64) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(15) DEFAULT NULL,
  `C_NAME` varchar(15) DEFAULT NULL,
  `ABN` varchar(15) DEFAULT NULL,
  `NEWSLETTER` smallint(6) NOT NULL,
  `LOCKED` tinyint(4) NOT NULL DEFAULT '0',
  `REGISTRATION_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `BILLING_ADDRESS` int(11) DEFAULT NULL,
  `SHIPPING_ADDRESS` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;


--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `newsletter_user`
--
ALTER TABLE `newsletter_user`
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`NEWSLETTER_ID`) REFERENCES `newsletter` (`NEWSLETTER_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_18` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`SHIPPING_METHOD_ID`) REFERENCES `shipping_method` (`SHIPPING_METHOD_ID`);

--
-- Constraints for table `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`PRODUCT_URL`) REFERENCES `products` (`PRODUCT_URL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ORDER_ID`) REFERENCES `orders` (`ORDER_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ORDER_ID`) REFERENCES `orders` (`ORDER_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`INVOICE_NUM`) REFERENCES `invoice` (`INVOICE_NUM`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`CATEGORY_URL`) REFERENCES `categories` (`URL`);

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `FK_RELATIONSHIP_30` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `shopping_cart_items`
--
ALTER TABLE `shopping_cart_items`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`CART_ID`) REFERENCES `shopping_cart` (`CART_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
