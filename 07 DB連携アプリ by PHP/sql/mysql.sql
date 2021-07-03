-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 03, 2021 at 07:52 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `a_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_table`
--

CREATE TABLE `a_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `naiyou` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `a_table`
--

INSERT INTO `a_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(50, 'まーすさん', '５０', '', '2021-07-04 04:08:11'),
(51, 'ふくちゃん', '３５', '', '2021-07-04 04:08:24'),
(52, 'みゆきさん', '４０', '', '2021-07-04 04:08:36'),
(54, 'のぶさん', '６０', '・◯◯のサービスを作りたい。\r\n・最近は△△をやって、☆☆だった。\r\n・実家が◇◇で、◎◎を体験した。', '2021-07-04 04:09:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_table`
--
ALTER TABLE `a_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_table`
--
ALTER TABLE `a_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
