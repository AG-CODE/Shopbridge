-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 08:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deepak`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustID` int(11) NOT NULL,
  `CustName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `custorder`
--

CREATE TABLE `custorder` (
  `OrderID` int(11) NOT NULL,
  `CustID` int(11) NOT NULL,
  `orderdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `ID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `item` text NOT NULL,
  `thickness` text NOT NULL,
  `size` text NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `item` text NOT NULL,
  `thickness` text NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `item`, `thickness`, `size`) VALUES
(1, 'MR', '12MM', '8 X 4'),
(2, 'Com', '12MM', '8 x 4'),
(3, 'PF', '12MM', '8 x 4'),
(4, 'MR', '15/16MM', '8 x 4'),
(5, 'Com', '15/16MM', '8 x 4'),
(6, 'PF', '15/16MM', '8 x 4'),
(7, 'MR', '1819MM', '8 x 4'),
(8, 'Com', '1819MM', '8 x 4'),
(9, 'PF', '1819MM', '8 x 4'),
(10, 'MR', '25MM B/B', '8 x 4'),
(11, 'Com', '25MM B/B', '8 x 4'),
(12, 'PF', '25MM B/B', '8 x 4'),
(13, 'MR', '4MM(3)', '8 x 4'),
(14, 'Com', '4MM(3)', '8 x 4'),
(15, 'PF', '4MM(3)', '8 x 4'),
(16, 'MR', '4MM(5)', '8 x 4'),
(17, 'Com', '4MM(5)', '8 x 4'),
(18, 'PF', '4MM(5)', '8 x 4'),
(19, 'MR', '6M(5)', '8 x 4'),
(20, 'Com', '6M(5)', '8 x 4'),
(21, 'PF', '6M(5)', '8 x 4'),
(22, 'MR', '6MM(7)', '8 x 4'),
(23, 'Com', '6MM(7)', '8 x 4'),
(24, 'PF', '6MM(7)', '8 x 4'),
(25, 'MR', '8/9MM', '8 x 4'),
(26, 'Com', '8/9MM', '8 x 4'),
(27, 'PF', '8/9MM', '8 x 4'),
(28, 'MR', 'B/B', '8 x 4'),
(29, 'Com', 'B/B', '8 x 4'),
(30, 'PF', 'B/B', '8 x 4'),
(31, 'MR', '12MM', '5 x 2.5'),
(32, 'Com', '12MM', '5 x 2.5'),
(33, 'PF', '12MM', '5 x 2.5'),
(34, 'MR', '15/16MM', '5 x 2.5'),
(35, 'Com', '15/16MM', '5 x 2.5'),
(36, 'PF', '15/16MM', '5 x 2.5'),
(37, 'MR', '1819MM', '5 x 2.5'),
(38, 'Com', '1819MM', '5 x 2.5'),
(39, 'PF', '1819MM', '5 x 2.5'),
(40, 'MR', '25MM B/B', '5 x 2.5'),
(41, 'Com', '25MM B/B', '5 x 2.5'),
(42, 'PF', '25MM B/B', '5 x 2.5'),
(43, 'MR', '4MM(3)', '5 x 2.5'),
(44, 'Com', '4MM(3)', '5 x 2.5'),
(45, 'PF', '4MM(3)', '5 x 2.5'),
(46, 'MR', '4MM(5)', '5 x 2.5'),
(47, 'Com', '4MM(5)', '5 x 2.5'),
(48, 'PF', '4MM(5)', '5 x 2.5'),
(49, 'MR', '6M(5)', '5 x 2.5'),
(50, 'Com', '6M(5)', '5 x 2.5'),
(51, 'PF', '6M(5)', '5 x 2.5'),
(52, 'MR', '6MM(7)', '5 x 2.5'),
(53, 'Com', '6MM(7)', '5 x 2.5'),
(54, 'PF', '6MM(7)', '5 x 2.5'),
(55, 'MR', '8/9MM', '5 x 2.5'),
(56, 'Com', '8/9MM', '5 x 2.5'),
(57, 'PF', '8/9MM', '5 x 2.5'),
(58, 'MR', 'B/B', '5 x 2.5'),
(59, 'Com', 'B/B', '5 x 2.5'),
(60, 'PF', 'B/B', '5 x 2.5'),
(61, 'MR', '12MM', '5 x 3'),
(62, 'Com', '12MM', '5 x 3'),
(63, 'PF', '12MM', '5 x 3'),
(64, 'MR', '15/16MM', '5 x 3'),
(65, 'Com', '15/16MM', '5 x 3'),
(66, 'PF', '15/16MM', '5 x 3'),
(67, 'MR', '1819MM', '5 x 3'),
(68, 'Com', '1819MM', '5 x 3'),
(69, 'PF', '1819MM', '5 x 3'),
(70, 'MR', '25MM B/B', '5 x 3'),
(71, 'Com', '25MM B/B', '5 x 3'),
(72, 'PF', '25MM B/B', '5 x 3'),
(73, 'MR', '4MM(3)', '5 x 3'),
(74, 'Com', '4MM(3)', '5 x 3'),
(75, 'PF', '4MM(3)', '5 x 3'),
(76, 'MR', '4MM(5)', '5 x 3'),
(77, 'Com', '4MM(5)', '5 x 3'),
(78, 'PF', '4MM(5)', '5 x 3'),
(79, 'MR', '6M(5)', '5 x 3'),
(80, 'Com', '6M(5)', '5 x 3'),
(81, 'PF', '6M(5)', '5 x 3'),
(82, 'MR', '6MM(7)', '5 x 3'),
(83, 'Com', '6MM(7)', '5 x 3'),
(84, 'PF', '6MM(7)', '5 x 3'),
(85, 'MR', '8/9MM', '5 x 3'),
(86, 'Com', '8/9MM', '5 x 3'),
(87, 'PF', '8/9MM', '5 x 3'),
(88, 'MR', 'B/B', '5 x 3'),
(89, 'Com', 'B/B', '5 x 3'),
(90, 'PF', 'B/B', '5 x 3'),
(91, 'MR', '12MM', '5 x 4'),
(92, 'Com', '12MM', '5 x 4'),
(93, 'PF', '12MM', '5 x 4'),
(94, 'MR', '15/16MM', '5 x 4'),
(95, 'Com', '15/16MM', '5 x 4'),
(96, 'PF', '15/16MM', '5 x 4'),
(97, 'MR', '1819MM', '5 x 4'),
(98, 'Com', '1819MM', '5 x 4'),
(99, 'PF', '1819MM', '5 x 4'),
(100, 'MR', '25MM B/B', '5 x 4'),
(101, 'Com', '25MM B/B', '5 x 4'),
(102, 'PF', '25MM B/B', '5 x 4'),
(103, 'MR', '4MM(3)', '5 x 4'),
(104, 'Com', '4MM(3)', '5 x 4'),
(105, 'PF', '4MM(3)', '5 x 4'),
(106, 'MR', '4MM(5)', '5 x 4'),
(107, 'Com', '4MM(5)', '5 x 4'),
(108, 'PF', '4MM(5)', '5 x 4'),
(109, 'MR', '6M(5)', '5 x 4'),
(110, 'Com', '6M(5)', '5 x 4'),
(111, 'PF', '6M(5)', '5 x 4'),
(112, 'MR', '6MM(7)', '5 x 4'),
(113, 'Com', '6MM(7)', '5 x 4'),
(114, 'PF', '6MM(7)', '5 x 4'),
(115, 'MR', '8/9MM', '5 x 4'),
(116, 'Com', '8/9MM', '5 x 4'),
(117, 'PF', '8/9MM', '5 x 4'),
(118, 'MR', 'B/B', '5 x 4'),
(119, 'Com', 'B/B', '5 x 4'),
(120, 'PF', 'B/B', '5 x 4'),
(121, 'MR', '12MM', '6 x 2.5'),
(122, 'Com', '12MM', '6 x 2.5'),
(123, 'PF', '12MM', '6 x 2.5'),
(124, 'MR', '15/16MM', '6 x 2.5'),
(125, 'Com', '15/16MM', '6 x 2.5'),
(126, 'PF', '15/16MM', '6 x 2.5'),
(127, 'MR', '1819MM', '6 x 2.5'),
(128, 'Com', '1819MM', '6 x 2.5'),
(129, 'PF', '1819MM', '6 x 2.5'),
(130, 'MR', '25MM B/B', '6 x 2.5'),
(131, 'Com', '25MM B/B', '6 x 2.5'),
(132, 'PF', '25MM B/B', '6 x 2.5'),
(133, 'MR', '4MM(3)', '6 x 2.5'),
(134, 'Com', '4MM(3)', '6 x 2.5'),
(135, 'PF', '4MM(3)', '6 x 2.5'),
(136, 'MR', '4MM(5)', '6 x 2.5'),
(137, 'Com', '4MM(5)', '6 x 2.5'),
(138, 'PF', '4MM(5)', '6 x 2.5'),
(139, 'MR', '6M(5)', '6 x 2.5'),
(140, 'Com', '6M(5)', '6 x 2.5'),
(141, 'PF', '6M(5)', '6 x 2.5'),
(142, 'MR', '6MM(7)', '6 x 2.5'),
(143, 'Com', '6MM(7)', '6 x 2.5'),
(144, 'PF', '6MM(7)', '6 x 2.5'),
(145, 'MR', '8/9MM', '6 x 2.5'),
(146, 'Com', '8/9MM', '6 x 2.5'),
(147, 'PF', '8/9MM', '6 x 2.5'),
(148, 'MR', 'B/B', '6 x 2.5'),
(149, 'Com', 'B/B', '6 x 2.5'),
(150, 'PF', 'B/B', '6 x 2.5'),
(151, 'MR', '12MM', '6 x 3'),
(152, 'Com', '12MM', '6 x 3'),
(153, 'PF', '12MM', '6 x 3'),
(154, 'MR', '15/16MM', '6 x 3'),
(155, 'Com', '15/16MM', '6 x 3'),
(156, 'PF', '15/16MM', '6 x 3'),
(157, 'MR', '1819MM', '6 x 3'),
(158, 'Com', '1819MM', '6 x 3'),
(159, 'PF', '1819MM', '6 x 3'),
(160, 'MR', '25MM B/B', '6 x 3'),
(161, 'Com', '25MM B/B', '6 x 3'),
(162, 'PF', '25MM B/B', '6 x 3'),
(163, 'MR', '4MM(3)', '6 x 3'),
(164, 'Com', '4MM(3)', '6 x 3'),
(165, 'PF', '4MM(3)', '6 x 3'),
(166, 'MR', '4MM(5)', '6 x 3'),
(167, 'Com', '4MM(5)', '6 x 3'),
(168, 'PF', '4MM(5)', '6 x 3'),
(169, 'MR', '6M(5)', '6 x 3'),
(170, 'Com', '6M(5)', '6 x 3'),
(171, 'PF', '6M(5)', '6 x 3'),
(172, 'MR', '6MM(7)', '6 x 3'),
(173, 'Com', '6MM(7)', '6 x 3'),
(174, 'PF', '6MM(7)', '6 x 3'),
(175, 'MR', '8/9MM', '6 x 3'),
(176, 'Com', '8/9MM', '6 x 3'),
(177, 'PF', '8/9MM', '6 x 3'),
(178, 'MR', 'B/B', '6 x 3'),
(179, 'Com', 'B/B', '6 x 3'),
(180, 'PF', 'B/B', '6 x 3'),
(181, 'MR', '12MM', '6 x 4'),
(182, 'Com', '12MM', '6 x 4'),
(183, 'PF', '12MM', '6 x 4'),
(184, 'MR', '15/16MM', '6 x 4'),
(185, 'Com', '15/16MM', '6 x 4'),
(186, 'PF', '15/16MM', '6 x 4'),
(187, 'MR', '1819MM', '6 x 4'),
(188, 'Com', '1819MM', '6 x 4'),
(189, 'PF', '1819MM', '6 x 4'),
(190, 'MR', '25MM B/B', '6 x 4'),
(191, 'Com', '25MM B/B', '6 x 4'),
(192, 'PF', '25MM B/B', '6 x 4'),
(193, 'MR', '4MM(3)', '6 x 4'),
(194, 'Com', '4MM(3)', '6 x 4'),
(195, 'PF', '4MM(3)', '6 x 4'),
(196, 'MR', '4MM(5)', '6 x 4'),
(197, 'Com', '4MM(5)', '6 x 4'),
(198, 'PF', '4MM(5)', '6 x 4'),
(199, 'MR', '6M(5)', '6 x 4'),
(200, 'Com', '6M(5)', '6 x 4'),
(201, 'PF', '6M(5)', '6 x 4'),
(202, 'MR', '6MM(7)', '6 x 4'),
(203, 'Com', '6MM(7)', '6 x 4'),
(204, 'PF', '6MM(7)', '6 x 4'),
(205, 'MR', '8/9MM', '6 x 4'),
(206, 'Com', '8/9MM', '6 x 4'),
(207, 'PF', '8/9MM', '6 x 4'),
(208, 'MR', 'B/B', '6 x 4'),
(209, 'Com', 'B/B', '6 x 4'),
(210, 'PF', 'B/B', '6 x 4'),
(211, 'MR', '12MM', '7 x 2.5'),
(212, 'Com', '12MM', '7 x 2.5'),
(213, 'PF', '12MM', '7 x 2.5'),
(214, 'MR', '15/16MM', '7 x 2.5'),
(215, 'Com', '15/16MM', '7 x 2.5'),
(216, 'PF', '15/16MM', '7 x 2.5'),
(217, 'MR', '1819MM', '7 x 2.5'),
(218, 'Com', '1819MM', '7 x 2.5'),
(219, 'PF', '1819MM', '7 x 2.5'),
(220, 'MR', '25MM B/B', '7 x 2.5'),
(221, 'Com', '25MM B/B', '7 x 2.5'),
(222, 'PF', '25MM B/B', '7 x 2.5'),
(223, 'MR', '4MM(3)', '7 x 2.5'),
(224, 'Com', '4MM(3)', '7 x 2.5'),
(225, 'PF', '4MM(3)', '7 x 2.5'),
(226, 'MR', '4MM(5)', '7 x 2.5'),
(227, 'Com', '4MM(5)', '7 x 2.5'),
(228, 'PF', '4MM(5)', '7 x 2.5'),
(229, 'MR', '6M(5)', '7 x 2.5'),
(230, 'Com', '6M(5)', '7 x 2.5'),
(231, 'PF', '6M(5)', '7 x 2.5'),
(232, 'MR', '6MM(7)', '7 x 2.5'),
(233, 'Com', '6MM(7)', '7 x 2.5'),
(234, 'PF', '6MM(7)', '7 x 2.5'),
(235, 'MR', '8/9MM', '7 x 2.5'),
(236, 'Com', '8/9MM', '7 x 2.5'),
(237, 'PF', '8/9MM', '7 x 2.5'),
(238, 'MR', 'B/B', '7 x 2.5'),
(239, 'Com', 'B/B', '7 x 2.5'),
(240, 'PF', 'B/B', '7 x 2.5'),
(241, 'MR', '12MM', '7 x 3'),
(242, 'Com', '12MM', '7 x 3'),
(243, 'PF', '12MM', '7 x 3'),
(244, 'MR', '15/16MM', '7 x 3'),
(245, 'Com', '15/16MM', '7 x 3'),
(246, 'PF', '15/16MM', '7 x 3'),
(247, 'MR', '1819MM', '7 x 3'),
(248, 'Com', '1819MM', '7 x 3'),
(249, 'PF', '1819MM', '7 x 3'),
(250, 'MR', '25MM B/B', '7 x 3'),
(251, 'Com', '25MM B/B', '7 x 3'),
(252, 'PF', '25MM B/B', '7 x 3'),
(253, 'MR', '4MM(3)', '7 x 3'),
(254, 'Com', '4MM(3)', '7 x 3'),
(255, 'PF', '4MM(3)', '7 x 3'),
(256, 'MR', '4MM(5)', '7 x 3'),
(257, 'Com', '4MM(5)', '7 x 3'),
(258, 'PF', '4MM(5)', '7 x 3'),
(259, 'MR', '6M(5)', '7 x 3'),
(260, 'Com', '6M(5)', '7 x 3'),
(261, 'PF', '6M(5)', '7 x 3'),
(262, 'MR', '6MM(7)', '7 x 3'),
(263, 'Com', '6MM(7)', '7 x 3'),
(264, 'PF', '6MM(7)', '7 x 3'),
(265, 'MR', '8/9MM', '7 x 3'),
(266, 'Com', '8/9MM', '7 x 3'),
(267, 'PF', '8/9MM', '7 x 3'),
(268, 'MR', 'B/B', '7 x 3'),
(269, 'Com', 'B/B', '7 x 3'),
(270, 'PF', 'B/B', '7 x 3'),
(271, 'MR', '12MM', '7 x 4'),
(272, 'Com', '12MM', '7 x 4'),
(273, 'PF', '12MM', '7 x 4'),
(274, 'MR', '15/16MM', '7 x 4'),
(275, 'Com', '15/16MM', '7 x 4'),
(276, 'PF', '15/16MM', '7 x 4'),
(277, 'MR', '1819MM', '7 x 4'),
(278, 'Com', '1819MM', '7 x 4'),
(279, 'PF', '1819MM', '7 x 4'),
(280, 'MR', '25MM B/B', '7 x 4'),
(281, 'Com', '25MM B/B', '7 x 4'),
(282, 'PF', '25MM B/B', '7 x 4'),
(283, 'MR', '4MM(3)', '7 x 4'),
(284, 'Com', '4MM(3)', '7 x 4'),
(285, 'PF', '4MM(3)', '7 x 4'),
(286, 'MR', '4MM(5)', '7 x 4'),
(287, 'Com', '4MM(5)', '7 x 4'),
(288, 'PF', '4MM(5)', '7 x 4'),
(289, 'MR', '6M(5)', '7 x 4'),
(290, 'Com', '6M(5)', '7 x 4'),
(291, 'PF', '6M(5)', '7 x 4'),
(292, 'MR', '6MM(7)', '7 x 4'),
(293, 'Com', '6MM(7)', '7 x 4'),
(294, 'PF', '6MM(7)', '7 x 4'),
(295, 'MR', '8/9MM', '7 x 4'),
(296, 'Com', '8/9MM', '7 x 4'),
(297, 'PF', '8/9MM', '7 x 4'),
(298, 'MR', 'B/B', '7 x 4'),
(299, 'Com', 'B/B', '7 x 4'),
(300, 'PF', 'B/B', '7 x 4'),
(301, 'MR', '12MM', '8 x 2.5'),
(302, 'Com', '12MM', '8 x 2.5'),
(303, 'PF', '12MM', '8 x 2.5'),
(304, 'MR', '15/16MM', '8 x 2.5'),
(305, 'Com', '15/16MM', '8 x 2.5'),
(306, 'PF', '15/16MM', '8 x 2.5'),
(307, 'MR', '1819MM', '8 x 2.5'),
(308, 'Com', '1819MM', '8 x 2.5'),
(309, 'PF', '1819MM', '8 x 2.5'),
(310, 'MR', '25MM B/B', '8 x 2.5'),
(311, 'Com', '25MM B/B', '8 x 2.5'),
(312, 'PF', '25MM B/B', '8 x 2.5'),
(313, 'MR', '4MM(3)', '8 x 2.5'),
(314, 'Com', '4MM(3)', '8 x 2.5'),
(315, 'PF', '4MM(3)', '8 x 2.5'),
(316, 'MR', '4MM(5)', '8 x 2.5'),
(317, 'Com', '4MM(5)', '8 x 2.5'),
(318, 'PF', '4MM(5)', '8 x 2.5'),
(319, 'MR', '6M(5)', '8 x 2.5'),
(320, 'Com', '6M(5)', '8 x 2.5'),
(321, 'PF', '6M(5)', '8 x 2.5'),
(322, 'MR', '6MM(7)', '8 x 2.5'),
(323, 'Com', '6MM(7)', '8 x 2.5'),
(324, 'PF', '6MM(7)', '8 x 2.5'),
(325, 'MR', '8/9MM', '8 x 2.5'),
(326, 'Com', '8/9MM', '8 x 2.5'),
(327, 'PF', '8/9MM', '8 x 2.5'),
(328, 'MR', 'B/B', '8 x 2.5'),
(329, 'Com', 'B/B', '8 x 2.5'),
(330, 'PF', 'B/B', '8 x 2.5'),
(331, 'MR', '12MM', '8 x 3'),
(332, 'Com', '12MM', '8 x 3'),
(333, 'PF', '12MM', '8 x 3'),
(334, 'MR', '15/16MM', '8 x 3'),
(335, 'Com', '15/16MM', '8 x 3'),
(336, 'PF', '15/16MM', '8 x 3'),
(337, 'MR', '1819MM', '8 x 3'),
(338, 'Com', '1819MM', '8 x 3'),
(339, 'PF', '1819MM', '8 x 3'),
(340, 'MR', '25MM B/B', '8 x 3'),
(341, 'Com', '25MM B/B', '8 x 3'),
(342, 'PF', '25MM B/B', '8 x 3'),
(343, 'MR', '4MM(3)', '8 x 3'),
(344, 'Com', '4MM(3)', '8 x 3'),
(345, 'PF', '4MM(3)', '8 x 3'),
(346, 'MR', '4MM(5)', '8 x 3'),
(347, 'Com', '4MM(5)', '8 x 3'),
(348, 'PF', '4MM(5)', '8 x 3'),
(349, 'MR', '6M(5)', '8 x 3'),
(350, 'Com', '6M(5)', '8 x 3'),
(351, 'PF', '6M(5)', '8 x 3'),
(352, 'MR', '6MM(7)', '8 x 3'),
(353, 'Com', '6MM(7)', '8 x 3'),
(354, 'PF', '6MM(7)', '8 x 3'),
(355, 'MR', '8/9MM', '8 x 3'),
(356, 'Com', '8/9MM', '8 x 3'),
(357, 'PF', '8/9MM', '8 x 3'),
(358, 'MR', 'B/B', '8 x 3'),
(359, 'Com', 'B/B', '8 x 3'),
(360, 'PF', 'B/B', '8 x 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustID`);

--
-- Indexes for table `custorder`
--
ALTER TABLE `custorder`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `fk_Order_1_idx` (`CustID`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_OrderItem_1_idx` (`OrderID`),
  ADD KEY `fk_OrderItem_2_idx` (`ProductID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custorder`
--
ALTER TABLE `custorder`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `custorder`
--
ALTER TABLE `custorder`
  ADD CONSTRAINT `fk_Order_1` FOREIGN KEY (`CustID`) REFERENCES `customer` (`CustID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `fk_OrderItem_1` FOREIGN KEY (`OrderID`) REFERENCES `custorder` (`OrderID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OrderItem_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
