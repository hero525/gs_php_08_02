-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 14, 2021 at 12:30 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_hero_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_auth_table`
--

CREATE TABLE `gs_auth_table` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flag` int(1) NOT NULL,
  `life_flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gs_auth_table`
--

INSERT INTO `gs_auth_table` (`id`, `name`, `lid`, `lpw`, `kanri_flag`, `life_flag`) VALUES
(1, '太郎丸', 'test0', 'test0', 0, 0),
(2, '次郎', 'test1', 'test1', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_auth_table`
--
ALTER TABLE `gs_auth_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_auth_table`
--
ALTER TABLE `gs_auth_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
