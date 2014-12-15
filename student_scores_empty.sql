-- phpMyAdmin SQL Dump
-- version 4.3.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-12-15 15:05:10
-- 服务器版本： 5.6.21-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_scores`
--

-- --------------------------------------------------------

--
-- 表的结构 `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `综合排名` int(3) DEFAULT NULL,
  `学号` int(8) DEFAULT NULL,
  `姓名` varchar(12) DEFAULT NULL,
  `总分` decimal(5,1) DEFAULT NULL,
  `门数` int(2) DEFAULT NULL,
  `总学分` decimal(3,1) DEFAULT NULL,
  `获得学分` decimal(3,1) DEFAULT NULL,
  `不及格学分` decimal(3,1) DEFAULT NULL,
  `通过率` varchar(7) DEFAULT NULL,
  `算术平均分` decimal(4,2) DEFAULT NULL,
  `排名1` int(3) DEFAULT NULL,
  `学分加权平均分` decimal(4,2) DEFAULT NULL,
  `排名2` int(3) DEFAULT NULL,
  `平均学分绩点` decimal(3,2) DEFAULT NULL,
  `排名3` int(3) DEFAULT NULL,
  `学分绩点和` decimal(4,2) DEFAULT NULL,
  `排名4` int(3) DEFAULT NULL,
  `不及格门数` int(2) DEFAULT NULL,
  `平均分` decimal(4,2) DEFAULT NULL,
  `工科数学分析(1) [7]` varchar(5) DEFAULT NULL,
  `工科数学分析(2) [7]` varchar(3) DEFAULT NULL,
  `工科高等代数 [6]` varchar(3) DEFAULT NULL,
  `高等代数(1) [4.5]` varchar(3) DEFAULT NULL,
  `基础物理学(1) [5.5]` varchar(6) DEFAULT NULL,
  `高等代数(2) [5]` varchar(2) DEFAULT NULL,
  `数学分析(2) [5]` varchar(2) DEFAULT NULL,
  `大学语文 [2]` varchar(5) DEFAULT NULL,
  `大学英语(1) [3.5]` varchar(2) DEFAULT NULL,
  `大学英语(2) [3.5]` varchar(2) DEFAULT NULL,
  `大学英语(口语) [1]` varchar(2) DEFAULT NULL,
  `思想政治理论课－－基础 [2]` varchar(2) DEFAULT NULL,
  `思想政治理论课－－纲要 [2]` varchar(2) DEFAULT NULL,
  `体育(1) [.5]` varchar(6) DEFAULT NULL,
  `体育(2) [.5]` varchar(6) DEFAULT NULL,
  `形势与政策(1) [.2]` varchar(2) DEFAULT NULL,
  `形势与政策(2) [.3]` varchar(2) DEFAULT NULL,
  `军事理论 [2]` varchar(2) DEFAULT NULL,
  `航空航天概论A [2]` varchar(5) DEFAULT NULL,
  `工程认识 [1]` varchar(2) DEFAULT NULL,
  `计算机导论与计算机伦理学 [1]` varchar(2) DEFAULT NULL,
  `高级语言程序设计(1) [2]` varchar(5) DEFAULT NULL,
  `离散数学(1) [3]` varchar(6) DEFAULT NULL,
  `离散数学(2) [3.5]` varchar(3) DEFAULT NULL,
  `走进计算机科学系列讲座 [1]` varchar(5) DEFAULT NULL,
  `面向对象建模方法 [2]` varchar(1) DEFAULT NULL,
  `计算机基础操作 [1]` varchar(5) DEFAULT NULL,
  `机械工程技术训练B [2]` varchar(2) DEFAULT NULL,
  `军训 [2]` varchar(2) DEFAULT NULL,
  `人体工程（1） [.5]` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `slist`
--

CREATE TABLE IF NOT EXISTS `slist` (
  `班号` int(6) DEFAULT NULL,
  `学号` int(8) DEFAULT NULL,
  `生日` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
