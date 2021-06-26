-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 26, 2021 at 03:05 PM
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
  `author` varchar(128) NOT NULL,
  `naiyou` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `a_table`
--

INSERT INTO `a_table` (`id`, `name`, `author`, `naiyou`, `indate`) VALUES
(17, 'サピエンス全史', 'ユヴァル・ノア・ハラリ', '「私たちは何処から来て、何処へ行くのか」\r\n前半は明かされた。後半は・・・如何にするか？', '2021-06-26 02:14:56'),
(18, 'マスタリー', 'ロバート・グリーン', '人生の深淵に触れよう。', '2021-06-26 02:15:26'),
(20, 'わたし', 'たくま', 'あああ（brを入れている）<br>\r\nいいい', '2021-06-26 02:16:54'),
(21, '', '', '', '2021-06-26 02:18:08');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
