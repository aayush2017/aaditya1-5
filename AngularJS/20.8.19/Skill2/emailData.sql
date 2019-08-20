-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2018 at 12:28 PM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preniohx_aaped`
--

-- --------------------------------------------------------

--
-- Table structure for table `emailData`
--

CREATE TABLE `emailData` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `formName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailData`
--

INSERT INTO `emailData` (`id`, `name`, `email`, `phone`, `message`, `formName`) VALUES
(112, '', '', '', '', ''),
(115, '', '', '', '', ''),
(116, '', '', '', '', ''),
(117, '', '', '', '', ''),
(118, '', '', '', '', ''),
(180, 'Hemant', 'hemant@alexasoftlabs.com', '7840880904', 'Want more clients and Customers\n\nWe can get your site onto the first page of Google to drive relevant traffic to your website regarding all relevant keywords. So that if someone searches for the services or products related to yours, they will find your product/service there on top of the Google search page. Through this feature you will generate additional traffic to your site.Let us know if you would be interested in getting detailed proposal Thanks!\n', 'contactForm'),
(124, '', '', '', '', ''),
(125, '', '', '', '', ''),
(139, '', '', '', '', ''),
(140, '', '', '', '', ''),
(141, '', '', '', '', ''),
(142, '', '', '', '', ''),
(80, '', '', '', '', ''),
(81, '', '', '', '', ''),
(82, '', '', '', '', ''),
(83, '', '', '', '', ''),
(84, '', '', '', '', ''),
(85, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emailData`
--
ALTER TABLE `emailData`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emailData`
--
ALTER TABLE `emailData`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
