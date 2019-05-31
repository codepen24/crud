-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2019 at 10:11 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userphone` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `useremail`, `userphone`, `userpass`) VALUES
(1, 'sadfasf', 'sa,vasdfasdf', 'sdfasdfasdf', 'ffffffffffffff'),
(2, 'dfasdfadf', 'sdfasdf@gmail.com', '435234324', 'fred'),
(3, 'feeeeeeeeeeeeeeeeeeee', 'sdfasdfs@gmail.com', '234234', 'fred'),
(4, 'mabbbbbbbbbbbbbbb', 'sdfsdf@gmail.com', '234234234324', 'fred'),
(5, 'deubsetep', 'dibm@gmail.com', '1223423423434', 'fred'),
(6, 'godzilla', 'godzilla@gmail.com', '09154725303', 'fred'),
(7, 'jam', 'jam@gmail.com', '1234567890', 'test'),
(8, 'Jam', 'jam@gmail.com', '1231231313', 'jam123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
