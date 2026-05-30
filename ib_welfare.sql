-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2026 at 09:52 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ib_welfare`
--

-- --------------------------------------------------------

--
-- Table structure for table `gb_district`
--

CREATE TABLE `gb_district` (
  `gb_district_id` int NOT NULL,
  `state_id` int NOT NULL,
  `gb_district_name` varchar(255) NOT NULL,
  `gb_district_status` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1->Active;2->Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gb_district`
--

INSERT INTO `gb_district` (`gb_district_id`, `state_id`, `gb_district_name`, `gb_district_status`) VALUES
(1, 28, 'Paschim Medinipur', '1'),
(2, 28, 'Purba Medinipur', '1'),
(3, 28, 'Bashirhat Police District', '1'),
(4, 28, 'Birbhum', '1'),
(5, 28, 'Coochbehar', '1'),
(6, 28, 'Dakshin Dinajpur', '1'),
(7, 28, 'Darjeeling', '1'),
(8, 28, 'Diamond Harbour PD', '1'),
(9, 28, 'Hooghly Rural', '1'),
(10, 28, 'Howrah rural', '1'),
(11, 28, 'Islampur PD', '1'),
(12, 28, 'Jalpaiguri', '1'),
(13, 28, 'Jangipur PD', '1'),
(14, 28, 'Jhargram', '1'),
(15, 28, 'Kalimpong', '1'),
(16, 28, 'Krishnanagar PD', '1'),
(17, 28, 'Malda', '1'),
(18, 28, 'Murshidabad PD', '1'),
(19, 28, 'Purba Burdwan', '1'),
(20, 28, 'Siliguri PC', '1'),
(21, 28, 'Bidhannagar PC', '1'),
(22, 28, 'Barrackpur PC', '1'),
(23, 28, 'ADPC', '1'),
(24, 28, 'ChandanNagar PC', '1'),
(25, 28, 'HOWRAH PC', '1'),
(26, 28, 'Sundarban PD', '1'),
(27, 28, 'Raiganj PD', '1'),
(28, 28, 'Ranaghat PD', '1'),
(29, 28, 'Purulia', '1'),
(30, 28, 'Alipurduar', '1'),
(31, 28, 'Bongoan PD', '1'),
(32, 28, 'Baruipur PD', '1'),
(33, 28, 'Bankura', '1'),
(34, 28, 'Barasat PD', '1'),
(35, 28, 'Kolkata', '1'),
(37, 28, 'North 24 pgs', '1'),
(38, 28, 'South 24 Pgs', '1'),
(40, 28, 'Uttar Dinajpur', '1'),
(41, 28, 'Nadia', '2'),
(46, 28, 'Paschim Bardhaman', '1'),
(47, 28, 'ALL', '1'),
(48, 28, 'Others', '1'),
(49, 28, 'Purba Bardhaman', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gb_ps`
--

CREATE TABLE `gb_ps` (
  `gb_ps_id` int NOT NULL,
  `gb_ps_name` varchar(255) NOT NULL,
  `gb_district_id` int NOT NULL,
  `gb_ps_status` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1->Active;2->Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gb_ps`
--

INSERT INTO `gb_ps` (`gb_ps_id`, `gb_ps_name`, `gb_district_id`, `gb_ps_status`) VALUES
(1, 'Bhabanipur', 2, '1'),
(2, 'Bhagawanpur', 2, '1'),
(3, 'Bhupatinagar', 2, '1'),
(4, 'Chandipur', 2, '1'),
(5, 'Contai', 2, '1'),
(6, 'Contai Women', 2, '1'),
(7, 'Cyber Crime Police Station', 2, '1'),
(8, 'Digha', 2, '1'),
(9, 'Digha Mohana', 2, '1'),
(10, 'Durgachak', 2, '1'),
(11, 'Egra', 2, '1'),
(12, 'Haldia', 2, '1'),
(13, 'Haldia Women', 2, '1'),
(14, 'Janka(Khejuri)', 2, '1'),
(15, 'Junput Coastal', 2, '1'),
(16, 'Kolaghat', 2, '1'),
(17, 'Mahisadal', 2, '1'),
(18, 'Mandarmani Coastal', 2, '1'),
(19, 'Marishda', 2, '1'),
(20, 'Moyna', 2, '1'),
(21, 'Nandakumar', 2, '1'),
(22, 'Nandigram', 2, '1'),
(23, 'Nayachar Coastal', 2, '1'),
(24, 'Panskura', 2, '1'),
(25, 'Patashpur', 2, '1'),
(26, 'Ramnagar', 2, '1'),
(27, 'Sutahata', 2, '1'),
(28, 'Talpati Ghat Coastal', 2, '1'),
(29, 'Tamluk', 2, '1'),
(30, 'ANANDAPUR PS', 1, '1'),
(31, 'BELDA PS', 1, '1'),
(32, 'CHANDRAKONA PS', 1, '1'),
(33, 'CYBER PS', 1, '1'),
(34, 'DANTAN PS', 1, '1'),
(35, 'DASPUR PS', 1, '1'),
(36, 'DEBRA PS', 1, '1'),
(37, 'GARHBETA PS', 1, '1'),
(38, 'GHATAL PS', 1, '1'),
(39, 'GOALTORE PS', 1, '1'),
(40, 'GURGURIPAL PS', 1, '1'),
(41, 'KESHIARY PS', 1, '1'),
(42, 'KESHPUR PS', 1, '1'),
(43, 'KHARAGPUR(LOCAL) PS', 1, '1'),
(44, 'KHARAGPUR(TOWN) PS', 1, '1'),
(45, 'KOTWALI PS', 1, '1'),
(46, 'MOHANPUR PS', 1, '1'),
(47, 'NARAYANGARH PS', 1, '1'),
(48, 'PINGLA PS', 1, '1'),
(49, 'SABANG PS', 1, '1'),
(50, 'SALBONI PS', 1, '1'),
(51, 'Baduria', 3, '1'),
(52, 'Bashirhat', 3, '1'),
(53, 'Haroa', 3, '1'),
(54, 'Hasnabad', 3, '1'),
(55, 'Hemnagar Costal', 3, '1'),
(56, 'Hingalgang', 3, '1'),
(57, 'Mainakhan', 3, '1'),
(58, 'Najat', 3, '1'),
(59, 'Sandeshkhali', 3, '1'),
(60, 'Swarupnagar', 3, '1'),
(61, 'Maita', 3, '1'),
(62, 'Cyber Crime', 3, '1'),
(63, 'Bolpur', 4, '1'),
(64, 'Bolpur Women PS', 4, '1'),
(65, 'Chandrapur', 4, '1'),
(66, 'Cyber Crime PS', 4, '1'),
(67, 'Dubrajpur', 4, '1'),
(68, 'Illambazar', 4, '1'),
(69, 'Kankartala', 4, '1'),
(70, 'Khayrasole', 4, '1'),
(71, 'Kirnahar', 4, '1'),
(72, 'Labpur', 4, '1'),
(73, 'Lokepur', 4, '1'),
(74, 'Mallarpur', 4, '1'),
(75, 'Margram', 4, '1'),
(76, 'Mayureswar', 4, '1'),
(77, 'Md Bazar', 4, '1'),
(78, 'Murarai', 4, '1'),
(79, 'Nalhati', 4, '1'),
(80, 'Nanoor', 4, '1'),
(81, 'Paikar', 4, '1'),
(82, 'Panrui', 4, '1'),
(83, 'Rajnagar', 4, '1'),
(84, 'Rampurhat', 4, '1'),
(85, 'Sadaipur', 4, '1'),
(86, 'Sainthia', 4, '1'),
(87, 'Santiniketan', 4, '1'),
(88, 'Suri', 4, '1'),
(89, 'Suri Women PS', 4, '1'),
(90, 'Tarapith', 4, '1'),
(91, 'Kotwali', 5, '1'),
(92, 'Tufanganj', 5, '1'),
(93, 'Boxirhat', 5, '1'),
(94, 'Dinhata', 5, '1'),
(95, 'Sitai', 5, '1'),
(96, 'Sitalkuchi', 5, '1'),
(97, 'Mathabhanga', 5, '1'),
(98, 'Mekhliganj', 5, '1'),
(99, 'Kuchlibari', 5, '1'),
(100, 'Haldibari', 5, '1'),
(101, 'Ghokshadanga', 5, '1'),
(102, 'Sadar Women PS', 5, '1'),
(103, 'Sahebganj', 5, '1'),
(104, 'Pundibari', 5, '1'),
(105, 'Dinhata Women PS', 5, '1'),
(106, 'Cyber Crime Police Station', 5, '1'),
(107, 'Balurghat PS', 6, '1'),
(108, 'Kumarganj PS', 6, '1'),
(109, 'Hili PS', 6, '1'),
(110, 'Tapan PS', 6, '1'),
(111, 'Gangarampur PS', 6, '1'),
(112, 'Banshihari PS', 6, '1'),
(113, 'Kushmandi PS', 6, '1'),
(114, 'Harirampur PS', 6, '1'),
(115, 'Cyber Crime PS', 6, '1'),
(116, 'Balurghat  Women PS', 6, '1'),
(117, 'Patiram PS', 6, '1'),
(118, 'CYBER  PS', 7, '1'),
(119, 'WOMEN PS', 7, '1'),
(120, 'PHANSIDEWA PS', 7, '1'),
(121, 'NAXALBARI PS', 7, '1'),
(122, 'KHARIBARI PS', 7, '1'),
(123, 'KURSEONG PS', 7, '1'),
(124, 'MIRIK PS', 7, '1'),
(125, 'SUKHIAPOKHRI PS', 7, '1'),
(126, 'LODHOMA PS', 7, '1'),
(127, 'RANGLI RANGLIOT PS', 7, '1'),
(128, 'PULBAZAR PS', 7, '1'),
(129, 'SADAR PS', 7, '1'),
(130, 'JOREBUNGLOW PS', 7, '1'),
(131, 'Mahestala', 8, '1'),
(132, 'Usthi', 8, '1'),
(133, 'DDH', 8, '1'),
(134, 'DDH(W)', 8, '1'),
(135, 'Magrahat', 8, '1'),
(136, 'Budge Budge', 8, '1'),
(137, 'Rabindranagar', 8, '1'),
(138, 'Parulia Coastal', 8, '1'),
(139, 'Nodakhali', 8, '1'),
(140, 'Falta', 8, '1'),
(141, 'Bishnupur', 8, '1'),
(142, 'Ramnagar', 8, '1'),
(143, 'Pujali', 8, '1'),
(144, 'Cyber Crime PS', 8, '1'),
(145, 'Kalitala Ashuti PS', 8, '1'),
(146, 'Arambagh', 9, '1'),
(147, 'Balagarh', 9, '1'),
(148, 'Chanditala', 9, '1'),
(149, 'Dadpur', 9, '1'),
(150, 'Dhaniakhali', 9, '1'),
(151, 'Goghat', 9, '1'),
(152, 'Gurap', 9, '1'),
(153, 'Haripal', 9, '1'),
(154, 'Jangipara', 9, '1'),
(155, 'Khanakul', 9, '1'),
(156, 'Magra', 9, '1'),
(157, 'Pandua', 9, '1'),
(158, 'Polba', 9, '1'),
(159, 'Pursurah', 9, '1'),
(160, 'Singur', 9, '1'),
(161, 'Tarakeswar', 9, '1'),
(162, 'Arambagh WPS', 9, '1'),
(163, 'Amta', 10, '1'),
(164, 'Bagnan', 10, '1'),
(165, 'Bauria', 10, '1'),
(166, 'Jagatballavpur', 10, '1'),
(167, 'Joypur', 10, '1'),
(168, 'Panchla', 10, '1'),
(169, 'Penro', 10, '1'),
(170, 'Rajapur', 10, '1'),
(171, 'Shyampur', 10, '1'),
(172, 'Udaynarayanpur', 10, '1'),
(173, 'Uluberia', 10, '1'),
(174, 'Uluberia Women PS', 10, '1'),
(175, 'ISLAMPUR PS', 11, '1'),
(176, 'DALKHOLA PS', 11, '1'),
(177, 'CHAKULIA PS', 11, '1'),
(178, 'GOALPOKHAR PS', 11, '1'),
(179, 'CHOPRA PS', 11, '1'),
(180, 'PANJIPARA OP', 11, '1'),
(181, 'KANKI OP', 11, '1'),
(182, 'RAMGANJ OP', 11, '1'),
(183, 'Kotwali', 12, '1'),
(184, 'Rajganj', 12, '1'),
(185, 'Maynaguri', 12, '1'),
(186, 'Dhupguri', 12, '1'),
(187, 'Banarhat', 12, '1'),
(188, 'Malbazar', 12, '1'),
(189, 'Matelli', 12, '1'),
(190, 'Nagrakata', 12, '1'),
(191, 'Women PS', 12, '1'),
(192, 'Cyber Crime PS', 12, '1'),
(193, 'Raghunathganj PS', 13, '1'),
(194, 'Farakka PS', 13, '1'),
(195, 'Samsherganj PS', 13, '1'),
(196, 'Suti PS', 13, '1'),
(197, 'Sagardighi PS', 13, '1'),
(198, 'Jangipur women PS', 13, '1'),
(199, 'Beliabera PS', 14, '1'),
(200, 'Belpahari PS', 14, '1'),
(201, 'Binpur PS', 14, '1'),
(202, 'Gopiballavpur PS', 14, '1'),
(203, 'Jamboni PS', 14, '1'),
(204, 'Jhargram PS', 14, '1'),
(205, 'Jhargram Women PS', 14, '1'),
(206, 'Lalgarh PS', 14, '1'),
(207, 'Nayagram PS', 14, '1'),
(208, 'Sankrail PS', 14, '1'),
(209, 'Gorubathan PS', 15, '1'),
(210, 'Jaldhaka PS', 15, '1'),
(211, 'Kalimpong', 15, '1'),
(212, 'Kalimpong Women PS', 15, '1'),
(213, 'Chapra PS', 16, '1'),
(214, 'Dhubulia PS', 16, '1'),
(215, 'Hogalberia PS', 16, '1'),
(216, 'Kaliganj PS', 16, '1'),
(217, 'Karimpur PS', 16, '1'),
(218, 'Kotwali PS', 16, '1'),
(219, 'Cyber Crime PS', 16, '1'),
(220, 'Krishnaganj PS', 16, '1'),
(221, 'Murutia PS', 16, '1'),
(222, 'Nabadwip PS', 16, '1'),
(223, 'Nakashipara PS', 16, '1'),
(224, 'Palashipara PS', 41, '1'),
(225, 'Tehatta PS', 16, '1'),
(226, 'Bhimpur PS', 16, '1'),
(227, 'Krishnagar Women PS', 16, '1'),
(228, 'Thanarpara PS', 16, '1'),
(229, 'Baishnabnagar', 17, '1'),
(230, 'Bamongola', 17, '1'),
(231, 'Bhutni', 17, '1'),
(232, 'Chanchol', 17, '1'),
(233, 'Cyber PS', 17, '1'),
(234, 'Englishbazar', 17, '1'),
(235, 'Gazole', 17, '1'),
(236, 'Habibpur', 17, '1'),
(237, 'Harishchndrpur', 17, '1'),
(238, 'Kaliachak', 17, '1'),
(239, 'Malda', 17, '1'),
(240, 'Manikchak', 17, '1'),
(241, 'Mothabari', 17, '1'),
(242, 'Pukhuria', 17, '1'),
(243, 'Ratua', 17, '1'),
(244, 'Women PS', 17, '1'),
(245, 'Beldanga', 18, '1'),
(246, 'Berhampore', 18, '1'),
(247, 'Berhampore Women PS', 18, '1'),
(248, 'Bhagwangola', 18, '1'),
(249, 'Bharatpur', 18, '1'),
(250, 'Burwan', 18, '1'),
(251, 'Daulatabad', 18, '1'),
(252, 'Domkal', 18, '1'),
(253, 'Hariharpara', 18, '1'),
(254, 'Islampur', 18, '1'),
(255, 'Jalangi', 18, '1'),
(256, 'Jiaganj', 18, '1'),
(257, 'Kandi', 18, '1'),
(258, 'Khargram', 18, '1'),
(259, 'Lalgola', 18, '1'),
(260, 'Murshidabad', 18, '1'),
(261, 'Nabagram', 18, '1'),
(262, 'Nawda', 18, '1'),
(263, 'Rejinagar', 18, '1'),
(264, 'Raninagar', 18, '1'),
(265, 'Ranitala', 18, '1'),
(266, 'Sagarpara', 18, '1'),
(267, 'Saktipur', 18, '1'),
(268, 'Salar', 18, '1'),
(269, 'Women PS Burdwan', 19, '1'),
(270, 'Memari PS', 19, '1'),
(271, 'Madhabdihi PS', 19, '1'),
(272, 'Katwa PS', 19, '1'),
(273, 'Raina PS', 19, '1'),
(274, 'Galsi PS', 19, '1'),
(275, 'Bhatar PS', 19, '1'),
(276, 'Jamalpur PS', 19, '1'),
(277, 'Monteswar PS', 19, '1'),
(278, 'Nadanghat PS', 19, '1'),
(279, 'Kalna PS', 19, '1'),
(280, 'Khandaghosh PS', 19, '1'),
(281, 'Mongalkote PS', 19, '1'),
(282, 'Shaktigarh PS', 19, '1'),
(283, 'Dewandighi PS', 19, '1'),
(284, 'Cyber Crime PS', 19, '1'),
(285, 'Ausgram PS', 19, '1'),
(286, 'Burdwan PS', 19, '1'),
(287, 'Ketugram PS', 19, '1'),
(288, 'Purbasthli PS', 19, '1'),
(289, 'Bagdogra PS', 20, '1'),
(290, 'Bhaktinagar PS', 20, '1'),
(291, 'Matigara PS', 20, '1'),
(292, 'New Jalpaiguri PS', 20, '1'),
(293, 'Pradhannagar PS', 20, '1'),
(294, 'Siliguri Cyber Crime PS', 20, '1'),
(295, 'Siliguri PS', 20, '1'),
(296, 'Siliguri Women PS', 20, '1'),
(297, 'Bidhannagar East PS', 21, '1'),
(298, 'Bidhannagar North PS', 21, '1'),
(299, 'Bidhannagar South PS', 21, '1'),
(300, 'Electronics Complex PS', 21, '1'),
(301, 'Lake Town PS', 21, '1'),
(302, 'Airport PS', 21, '1'),
(303, 'Baguiati PS', 21, '1'),
(304, 'NSCBI Airport PS', 21, '1'),
(305, 'ECO PARK PS', 21, '1'),
(306, 'Narayanpur PS', 21, '1'),
(307, 'New Town PS', 21, '1'),
(308, 'Rajarhat PS', 21, '1'),
(309, 'Techno City PS', 21, '1'),
(310, 'Bidhannagar Cyber PS', 21, '1'),
(311, 'Bidhannagar Women PS', 21, '1'),
(312, 'Baranagar PS', 22, '1'),
(313, 'Barrackpore PS', 22, '1'),
(314, 'Bhatpara PS', 22, '1'),
(315, 'Bizpore PS', 22, '1'),
(316, 'Dumdum PS', 22, '1'),
(317, 'Ghola PS', 22, '1'),
(318, 'Jagaddal PS', 22, '1'),
(319, 'Khardah PS', 22, '1'),
(320, 'Naihati PS', 22, '1'),
(321, 'Cyber Crime PS', 22, '1'),
(322, 'New Barrackpore PS', 22, '1'),
(323, 'Nimta PS', 22, '1'),
(324, 'Noapara PS', 22, '1'),
(325, 'Titagarh PS', 22, '1'),
(326, 'Barrackpur Women PS', 22, '1'),
(327, 'Belghoria PS', 22, '1'),
(328, 'Rahara PS', 22, '1'),
(329, 'Dakshineswar PS', 22, '1'),
(330, 'Kamarhati PS', 22, '1'),
(331, 'Nagerbazar PS', 22, '1'),
(332, 'Jetia PS', 22, '1'),
(333, 'Shibdaspur PS', 22, '1'),
(334, 'Basudebpur PS\r\n', 22, '1'),
(335, 'Halisahar PS', 22, '1'),
(336, 'Mohanpur PS', 22, '1'),
(337, 'Andal PS\r\n', 23, '1'),
(338, 'Asansol North PS', 23, '1'),
(339, 'Asansol South PS', 23, '1'),
(340, 'Barabani PS', 23, '1'),
(341, 'Chittaranjan PS', 23, '1'),
(342, 'Durgapur PS', 23, '1'),
(343, 'Lauda (Faridpur) PS', 23, '1'),
(344, 'Hirapur PS', 23, '1'),
(345, 'Jamuria PS', 23, '1'),
(346, 'Raniganj PS', 23, '1'),
(347, 'Coke Oven PS', 23, '1'),
(348, 'Kulti PS', 23, '1'),
(349, 'New Township PS', 23, '1'),
(350, 'Pandaveswar PS', 23, '1'),
(351, 'Salanpur PS', 23, '1'),
(352, 'Asansol Women PS', 23, '1'),
(353, 'Cyber Crime PS', 23, '1'),
(354, 'Durgapur Women PS', 23, '1'),
(355, 'Kanksa PS', 23, '1'),
(356, 'Budbud PS', 23, '1'),
(357, 'Chinsurah PS\r\n', 24, '1'),
(358, 'Chinsurah Women PS', 24, '1'),
(359, 'Chandannagar PS', 24, '1'),
(360, 'Bhadreswar PS', 24, '1'),
(361, 'Serampore PS', 24, '1'),
(362, 'Uttarpara PS', 24, '1'),
(363, 'Dankuni PS', 24, '1'),
(364, 'Rishra PS', 24, '1'),
(365, 'Serampore Women PS', 24, '1'),
(366, 'A J C Bose Botanic Garden PS\r\n', 25, '1'),
(367, 'Bally PS', 25, '1'),
(368, 'Bantra PS', 25, '1'),
(369, 'Belur PS', 25, '1'),
(370, 'Chatterjeehat PS', 25, '1'),
(371, 'Cyber Crime PS', 25, '1'),
(372, 'Dasnagar PS', 25, '1'),
(373, 'Domjur PS', 25, '1'),
(374, 'Golabari PS', 25, '1'),
(375, 'Howrah PS', 25, '1'),
(376, 'Jagacha PS', 25, '1'),
(377, 'Liluah PS', 25, '1'),
(378, 'M.P. Ghora PS', 25, '1'),
(379, 'Nischinda PS', 25, '1'),
(380, 'Sankrail PS', 25, '1'),
(381, 'Santragachi PS', 25, '1'),
(382, 'Shibpur PS', 25, '1'),
(383, 'Women PS', 25, '1'),
(384, 'Dholahat PS\r\n', 26, '1'),
(385, 'Frezerganj Coastal PS', 26, '1'),
(386, 'Gangasagar Coastal PS', 26, '1'),
(387, 'Gobardhanpur Coastal PS', 26, '1'),
(388, 'Hard Wood Point Coastal PS', 26, '1'),
(389, 'Kakdwip PS', 26, '1'),
(390, 'Kulpi PS', 26, '1'),
(391, 'Mandirbazar PS', 26, '1'),
(392, 'Mathurapur PS', 26, '1'),
(393, 'Namkhana PS', 26, '1'),
(394, 'Pathar Pratima PS', 26, '1'),
(395, 'Raidighi PS', 26, '1'),
(396, 'Sagar PS', 26, '1'),
(397, 'Hemtabad PS\r\n', 27, '1'),
(398, 'Itahar PS', 27, '1'),
(399, 'Kaliyaganj PS', 27, '1'),
(400, 'Karandighi PS', 27, '1'),
(401, 'Raiganj PS', 27, '1'),
(402, 'Raiganj Women PS', 27, '1'),
(403, 'Cyber Crime PS', 27, '1'),
(404, 'Kalyani PS\r\n', 28, '1'),
(405, 'Chakda PS', 28, '1'),
(406, 'Haringhata PS', 28, '1'),
(407, 'Ranaghat PS', 28, '1'),
(408, 'Santipur PS', 28, '1'),
(409, 'Taherpur PS', 28, '1'),
(410, 'Hanskhali PS', 28, '1'),
(411, 'Mohanpur PS', 28, '1'),
(412, 'Dhantala PS', 28, '1'),
(413, 'Gangnapur PS', 28, '1'),
(414, 'Ranaghat Women PS', 28, '1'),
(415, 'Adra PS\r\n', 29, '1'),
(416, 'Kashipur PS', 29, '1'),
(417, 'Neturia PS', 29, '1'),
(418, 'Para PS', 29, '1'),
(419, 'Santaldi PS', 29, '1'),
(420, 'Santuri PS', 29, '1'),
(421, 'Raghunathpur PS', 29, '1'),
(422, 'Raghunathpur Women PS', 29, '1'),
(423, 'Baghmundi PS', 29, '1'),
(424, 'Jhalda PS', 29, '1'),
(425, 'Joypur PS', 29, '1'),
(426, 'Kotshila PS\r\n', 29, '1'),
(427, 'Bandwan PS', 29, '1'),
(428, 'Barabazar PS', 29, '1'),
(429, 'Boro PS', 29, '1'),
(430, 'Kenda PS', 29, '1'),
(431, 'Manbazar PS', 29, '1'),
(432, 'Puncha PS', 29, '1'),
(433, 'Purulia (T) PS', 29, '1'),
(434, 'Purulia (M) PS', 29, '1'),
(435, 'Tamna PS', 29, '1'),
(436, 'Purulia Sadar Women PS', 29, '1'),
(437, 'Balarampur PS', 29, '1'),
(438, 'Arsha PS', 29, '1'),
(439, 'Hura PS', 29, '1'),
(440, 'Purulia Cyber Crime PS', 29, '1'),
(441, 'ALIPURDUAR\r\n', 30, '1'),
(442, 'FALAKATA', 30, '1'),
(443, 'KUMARGRAM', 30, '1'),
(444, 'SAMUKTALA', 30, '1'),
(445, 'KALCHINI', 30, '1'),
(446, 'JAIGAON', 30, '1'),
(447, 'MADARIHAT', 30, '1'),
(448, 'BIRPARA', 30, '1'),
(449, 'ALIPURDUAR POLICE HEAD QUATER', 30, '1'),
(450, 'CI OFFICE KALCHINI', 30, '1'),
(451, 'CI OFFICE BIRPARA', 30, '1'),
(452, 'ALIPURDUAR WOMEN PS', 30, '1'),
(453, 'CYBER CRIME POLICE STATION', 30, '1'),
(454, 'Bagdah PS\r\n', 31, '1'),
(455, 'Bongaon PS', 31, '1'),
(456, 'Bongaon Women PS', 31, '1'),
(457, 'Gaighata PS', 31, '1'),
(458, 'Gopalnagar PS', 31, '1'),
(459, 'Petrapole PS', 31, '1'),
(460, 'Baruipur PS\r\n', 32, '1'),
(461, 'Baruipur Women PS', 32, '1'),
(462, 'Joynagar PS', 32, '1'),
(463, 'Bakultala PS', 32, '1'),
(464, 'Kultali PS', 32, '1'),
(465, 'Maipith Coastal PS', 32, '1'),
(466, 'Canning PS', 32, '1'),
(467, 'Canning Women PS', 32, '1'),
(468, 'Jibantala PS', 32, '1'),
(469, 'Basanti PS', 32, '1'),
(470, 'Gosaba PS', 32, '1'),
(471, 'Sundarban Coastal PS', 32, '1'),
(472, 'Jharkhali Coastal PS', 32, '1'),
(473, 'Kashipur PS', 32, '1'),
(474, 'Bhangore PS', 32, '1'),
(475, 'Sonarpur PS', 32, '1'),
(476, 'Narendrapur PS', 32, '1'),
(477, 'Cyber Crime PS', 32, '1'),
(478, 'Beliatore PS\r\n', 33, '1'),
(479, 'Borjora PS', 33, '1'),
(480, 'Chhatna PS', 33, '1'),
(481, 'Gangajolghata PS', 33, '1'),
(482, 'Onda PS', 33, '1'),
(483, 'Mejia PS', 33, '1'),
(484, 'Saltora PS', 33, '1'),
(485, 'Bishnupur PS', 33, '1'),
(486, 'Patrasayer PS', 33, '1'),
(487, 'Indus PS', 33, '1'),
(488, 'Kotulpur PS', 33, '1'),
(489, 'Joypur PS', 33, '1'),
(490, 'Sonamukhi PS', 33, '1'),
(491, 'Khatra PS', 33, '1'),
(492, 'Indpur PS', 33, '1'),
(493, 'Barikul PS', 33, '1'),
(494, 'Raipur PS', 33, '1'),
(495, 'Ranibandh PS', 33, '1'),
(496, 'Sarenga PS', 33, '1'),
(497, 'Simlapal PS', 33, '1'),
(498, 'Taldangra PS', 33, '1'),
(499, 'Hirbandh PS', 33, '1'),
(500, 'Bankura Women PS', 33, '1'),
(501, 'Khatra Women PS', 33, '1'),
(502, 'Madhyamgram PS\r\n', 34, '1'),
(503, 'Duttapukur PS', 34, '1'),
(504, 'Shasan PS', 34, '1'),
(505, 'Deganga PS', 34, '1'),
(506, 'Habra PS', 34, '1'),
(507, 'Ashokenagar PS', 34, '1'),
(508, 'Amdanga PS', 34, '1'),
(509, 'Barasat Women PS', 34, '1'),
(510, 'Gobardanga PS', 34, '1'),
(511, 'Barasat Cyber Crime PS', 34, '1'),
(516, 'Alipore PS', 35, '1'),
(517, 'Amherst Street PS', 35, '1'),
(518, 'Amherst Street Women. PS', 35, '1'),
(519, 'Anandapur PS', 35, '1'),
(520, 'Ballygunge PS', 35, '1'),
(521, 'Bansdroni PS', 35, '1'),
(522, 'Behala PS', 35, '1'),
(523, 'Hare Street PS', 35, '1'),
(524, 'Jadavpur PS', 35, '1'),
(525, 'Raghunathganj', 18, '1'),
(526, 'Bizpur', 37, '1'),
(527, 'Naihati', 37, '1'),
(528, 'Bhangore', 38, '1'),
(529, 'Chakdah', 41, '1'),
(530, 'Kalyani', 41, '1'),
(531, 'Krishnanagar', 41, '1'),
(532, 'Ranaghat', 41, '1'),
(533, 'Gayeshpur', 41, '1'),
(534, 'Haringhata', 41, '1'),
(535, 'Bangaon', 37, '1'),
(536, 'Entally', 35, '1'),
(537, 'Mekhliganj', 5, '1'),
(538, 'Ghatal', 1, '1'),
(540, 'Ghatal', 42, '1'),
(541, 'Titagarh', 37, '1'),
(542, 'Barrackpore', 37, '1'),
(543, 'Khardah', 37, '1'),
(544, 'Belgharia', 37, '1'),
(545, 'Ghola', 37, '1'),
(546, 'Basirhat', 37, '1'),
(547, 'Barasat', 37, '1'),
(548, 'Madhyamgram', 37, '1'),
(549, 'Canning', 38, '1'),
(550, 'Krishnaganj', 41, '1'),
(551, 'Habra', 37, '1'),
(552, 'Bansberia', 37, '1'),
(553, 'Bansberia', 9, '1'),
(554, 'Bidhannagar', 35, '1'),
(555, 'Arsa', 39, '1'),
(556, 'New Town', 37, '1'),
(557, 'Duttapukur ', 37, '1'),
(558, 'Suti PS', 18, '1'),
(559, 'Phansidewa ', 20, '1'),
(560, 'Bandwan', 39, '1'),
(561, 'Baruipur ', 38, '1'),
(562, 'Diamon Harbour', 38, '1'),
(563, 'Kanthi', 2, '1'),
(564, 'Nabadwip', 41, '1'),
(565, 'Bhwabanipor', 35, '1'),
(567, 'Chinsura', 9, '1'),
(568, 'Dum Dum PS', 22, '1'),
(569, 'Dum Dum PS', 37, '1'),
(570, 'Muchipara ', 35, '1'),
(571, 'Asansol North PS', 46, '1'),
(572, 'Asansol South PS', 46, '1'),
(573, 'Asansol Women PS', 46, '1'),
(574, 'New Market', 35, '1'),
(575, 'Chittaranjan', 46, '1'),
(576, 'Malipachghada', 10, '1'),
(577, 'Amherst Street PS', 35, '1'),
(578, 'Bowbazar PS', 35, '1'),
(579, 'ALL', 47, '1'),
(580, 'Jorasanko PS', 35, '1'),
(581, 'Raydighi', 38, '1'),
(582, 'Garden Reach', 35, '1'),
(583, 'Maidan Ps', 35, '1'),
(584, 'Deganga', 37, '1'),
(585, 'Beliaghata PS', 35, '1'),
(586, 'Kalighat PS', 35, '1'),
(587, 'Medinipur ', 1, '1'),
(588, 'Chapra PS', 41, '1'),
(589, 'Park Street PS', 35, '1'),
(590, 'Kasba PS', 35, '1'),
(591, 'Haridevpur PS', 35, '1'),
(592, 'Hanskhali', 41, '1'),
(593, 'Topsia PS', 35, '1'),
(594, 'Hingalganj', 37, '1'),
(595, 'Dankuni PS', 9, '1'),
(596, 'Metiabruz PS', 35, '1'),
(597, 'Usthi', 38, '1'),
(598, 'Basanti PS', 38, '1'),
(599, 'Burrabazar PS', 35, '1'),
(600, 'Baduria PS', 37, '1'),
(601, 'Seoraphuli PS', 9, '1'),
(602, 'Nodakhali PS', 38, '1'),
(603, 'Ekbalpur PS', 35, '1'),
(604, 'Durgapur ps', 46, '1'),
(605, 'Tehatta', 41, '1'),
(606, 'Thanapara', 41, '1'),
(607, 'Bhatpara PS', 37, '1'),
(608, 'Joynagar', 38, '1'),
(609, 'Chakla', 37, '1'),
(610, 'Jamalpur PS', 49, '1'),
(611, 'Bhowanipore ps', 35, '1'),
(612, 'Bandel PS', 9, '1'),
(613, 'Sonarpur PS', 38, '1'),
(614, 'Taherpur PS ', 41, '1'),
(615, 'Jibantala', 38, '1'),
(617, 'Santipur P.S', 41, '1'),
(618, 'Karandighi P.S', 40, '1'),
(619, 'Goalpokhar P.S', 40, '1'),
(620, 'Karimpur PS', 41, '1'),
(621, 'Samserganj PS.', 18, '1'),
(622, 'Chanditala PS ', 9, '1'),
(623, 'Dalkhola', 40, '1'),
(624, 'Bankura PS.', 33, '1'),
(625, 'NAXALBARI PS ', 20, '1'),
(626, 'Raiganj PS.', 40, '1'),
(627, 'Kotwali PS', 41, '1'),
(628, 'Pandua PS', 17, '1'),
(629, 'Dhantala PS', 41, '1'),
(630, 'Santiniketan PS', 4, '1'),
(631, 'Nadanghat PS ', 2, '1'),
(632, 'Khejuri PS.', 2, '1'),
(633, 'Murutia PS, ', 41, '1'),
(634, 'Bhimpur PS', 41, '1'),
(635, 'Hmdabad PS', 40, '1'),
(636, 'Chakulia PS', 40, '1'),
(637, 'Nakashipara PS', 41, '1'),
(638, 'Sagardighi PS.', 18, '1'),
(639, 'Sreerampore PS', 9, '1'),
(640, 'Junbedia PS', 33, '1'),
(641, 'Dhubulia', 41, '1'),
(642, 'B Garden PS', 25, '1'),
(643, 'Pedong Police Station', 15, '1'),
(644, 'Lava Police Station', 15, '1'),
(645, 'Reang Police Station', 15, '1');

-- --------------------------------------------------------

--
-- Table structure for table `master_designation_rank`
--

CREATE TABLE `master_designation_rank` (
  `id` int UNSIGNED NOT NULL,
  `rank_name` varchar(150) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `master_designation_rank`
--

INSERT INTO `master_designation_rank` (`id`, `rank_name`, `status`) VALUES
(1, 'Constable', 'Active'),
(2, 'Lady Constable', 'Active'),
(3, 'ASI', 'Active'),
(4, 'LASI', 'Active'),
(5, 'SI', 'Active'),
(6, 'LSI', 'Active'),
(7, 'Inspector', 'Active'),
(8, 'DySP', 'Active'),
(9, 'Additional SP', 'Active'),
(10, 'SP/SS', 'Active'),
(11, 'DIG', 'Active'),
(12, 'IGP', 'Active'),
(13, 'ADG & IGP', 'Active'),
(14, 'DGP & IGP', 'Active'),
(15, 'Other', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_liu`
--

CREATE TABLE `master_liu` (
  `id` int NOT NULL,
  `liu_name` varchar(150) NOT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `master_liu`
--

INSERT INTO `master_liu` (`id`, `liu_name`, `status`) VALUES
(1, 'LIU Alipurduar', 'Active'),
(2, 'LIU Bankura', 'Active'),
(3, 'LIU Birbhum', 'Active'),
(4, 'LIU Cooch Behar', 'Active'),
(5, 'LIU Dakshin Dinajpur', 'Active'),
(6, 'LIU Darjeeling', 'Active'),
(7, 'LIU Hooghly', 'Active'),
(8, 'LIU Howrah', 'Active'),
(9, 'LIU Jalpaiguri', 'Active'),
(10, 'LIU Jhargram', 'Active'),
(11, 'LIU Kalimpong', 'Active'),
(12, 'LIU Kolkata', 'Active'),
(13, 'LIU Malda', 'Active'),
(14, 'LIU Murshidabad', 'Active'),
(15, 'LIU Nadia', 'Active'),
(16, 'LIU North 24 Parganas', 'Active'),
(17, 'LIU Paschim Bardhaman', 'Active'),
(18, 'LIU Paschim Medinipur', 'Active'),
(19, 'LIU Purba Bardhaman', 'Active'),
(20, 'LIU Purba Medinipur', 'Active'),
(21, 'LIU Purulia', 'Active'),
(22, 'LIU South 24 Parganas', 'Active'),
(23, 'LIU Uttar Dinajpur', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_relationship`
--

CREATE TABLE `master_relationship` (
  `id` int NOT NULL,
  `relationship_name` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `master_relationship`
--

INSERT INTO `master_relationship` (`id`, `relationship_name`, `status`) VALUES
(1, 'Father', 'Active'),
(2, 'Mother', 'Active'),
(3, 'Spouse', 'Active'),
(4, 'Son', 'Active'),
(5, 'Daughter', 'Active'),
(6, 'Brother', 'Active'),
(7, 'Sister', 'Active'),
(8, 'Grandfather', 'Active'),
(9, 'Grandmother', 'Active'),
(10, 'Father-in-law', 'Active'),
(11, 'Mother-in-law', 'Active'),
(12, 'Other', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_state`
--

CREATE TABLE `master_state` (
  `id` int NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `master_state`
--

INSERT INTO `master_state` (`id`, `state_name`, `status`) VALUES
(1, 'Andhra Pradesh', 'Inactive'),
(2, 'Arunachal Pradesh', 'Inactive'),
(3, 'Assam', 'Inactive'),
(4, 'Bihar', 'Inactive'),
(5, 'Chhattisgarh', 'Inactive'),
(6, 'Goa', 'Inactive'),
(7, 'Gujarat', 'Inactive'),
(8, 'Haryana', 'Inactive'),
(9, 'Himachal Pradesh', 'Inactive'),
(10, 'Jharkhand', 'Inactive'),
(11, 'Karnataka', 'Inactive'),
(12, 'Kerala', 'Inactive'),
(13, 'Madhya Pradesh', 'Inactive'),
(14, 'Maharashtra', 'Inactive'),
(15, 'Manipur', 'Inactive'),
(16, 'Meghalaya', 'Inactive'),
(17, 'Mizoram', 'Inactive'),
(18, 'Nagaland', 'Inactive'),
(19, 'Odisha', 'Inactive'),
(20, 'Punjab', 'Inactive'),
(21, 'Rajasthan', 'Inactive'),
(22, 'Sikkim', 'Inactive'),
(23, 'Tamil Nadu', 'Inactive'),
(24, 'Telangana', 'Inactive'),
(25, 'Tripura', 'Inactive'),
(26, 'Uttar Pradesh', 'Inactive'),
(27, 'Uttarakhand', 'Inactive'),
(28, 'West Bengal', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `master_unit`
--

CREATE TABLE `master_unit` (
  `id` int UNSIGNED NOT NULL,
  `unit_name` varchar(150) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `master_unit`
--

INSERT INTO `master_unit` (`id`, `unit_name`, `status`) VALUES
(1, 'IB HQ, WB', 'Active'),
(2, 'LIU', 'Active'),
(3, 'Police Commissionerate', 'Inactive'),
(4, 'Police District', 'Inactive'),
(5, 'Traffic Unit', 'Inactive'),
(6, 'Special Branch', 'Inactive'),
(7, 'Medical Cell', 'Inactive'),
(8, 'Reserve Office', 'Inactive'),
(9, 'Other', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `user_type` enum('Admin','User') NOT NULL DEFAULT 'User',
  `full_name` varchar(150) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `designation_rank_id` int UNSIGNED DEFAULT NULL,
  `department_unit_id` int UNSIGNED DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `mobile_number_alternate` varchar(15) NOT NULL,
  `email_id` varchar(150) DEFAULT NULL,
  `emergency_contact` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int UNSIGNED DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `blood_group_id` varchar(15) DEFAULT NULL,
  `height` varchar(20) DEFAULT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `pay_allowance_basic_pay` decimal(10,2) DEFAULT NULL,
  `known_ailment` text,
  `disability_allergy` text,
  `present_address_line1` varchar(255) DEFAULT NULL,
  `present_address_line2` varchar(255) DEFAULT NULL,
  `present_address_line3` varchar(255) DEFAULT NULL,
  `present_district_id` int UNSIGNED DEFAULT NULL,
  `present_ps` int UNSIGNED DEFAULT NULL,
  `present_state_id` int UNSIGNED DEFAULT NULL,
  `present_pincode` varchar(10) DEFAULT NULL,
  `same_address` enum('1','2') NOT NULL DEFAULT '1',
  `permanent_address_line1` varchar(255) DEFAULT NULL,
  `permanent_address_line2` varchar(255) DEFAULT NULL,
  `permanent_address_line3` varchar(255) DEFAULT NULL,
  `permanent_district_id` int UNSIGNED DEFAULT NULL,
  `permanent_ps` int UNSIGNED DEFAULT NULL,
  `permanent_state_id` int UNSIGNED DEFAULT NULL,
  `permanent_pincode` varchar(10) DEFAULT NULL,
  `status` enum('Active','Inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `full_name`, `employee_id`, `designation_rank_id`, `department_unit_id`, `password`, `mobile_number`, `mobile_number_alternate`, `email_id`, `emergency_contact`, `dob`, `age`, `gender`, `blood_group_id`, `height`, `weight`, `joining_date`, `pay_allowance_basic_pay`, `known_ailment`, `disability_allergy`, `present_address_line1`, `present_address_line2`, `present_address_line3`, `present_district_id`, `present_ps`, `present_state_id`, `present_pincode`, `same_address`, `permanent_address_line1`, `permanent_address_line2`, `permanent_address_line3`, `permanent_district_id`, `permanent_ps`, `permanent_state_id`, `permanent_pincode`, `status`) VALUES
(1, 'Admin', 'IB,WB', 'IBWB700071', 5, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1234567890', '', 'test@ibwb.gov.in', NULL, '2026-05-27', NULL, 'Male', 'A+', NULL, NULL, NULL, NULL, NULL, NULL, '13 Lord Sinha Road', 'Near Emami Market', NULL, 35, 365, NULL, '700071', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_family_details`
--

CREATE TABLE `user_family_details` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `family_member_name` varchar(150) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `blood_group_id` varchar(15) DEFAULT NULL,
  `dependency` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int UNSIGNED DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_medical_history`
--

CREATE TABLE `user_medical_history` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `date_of_checkup` date NOT NULL,
  `bmi` decimal(5,2) DEFAULT NULL,
  `pulse` varchar(50) DEFAULT NULL,
  `blood_pressure` varchar(50) DEFAULT NULL,
  `general_clinical_examination` text,
  `hb` varchar(50) DEFAULT NULL,
  `tc` varchar(50) DEFAULT NULL,
  `dc` varchar(50) DEFAULT NULL,
  `esr` varchar(50) DEFAULT NULL,
  `sugar_pp` varchar(50) DEFAULT NULL,
  `sugar_fasting` varchar(50) DEFAULT NULL,
  `urea_creatinine` varchar(50) DEFAULT NULL,
  `tsf` varchar(50) DEFAULT NULL,
  `lfi` varchar(50) DEFAULT NULL,
  `lipid_profile` varchar(100) DEFAULT NULL,
  `ecg` text,
  `eye_checkup` text,
  `xray_chest` text,
  `ent` text,
  `other_examination` text,
  `significant_findings` text,
  `remarks_advice_corrective_action` text,
  `employee_health_status` text,
  `medical_officer_name` varchar(150) DEFAULT NULL,
  `general_clinical_examination_file` varchar(255) DEFAULT NULL,
  `blood_test_report_file` varchar(255) DEFAULT NULL,
  `ecg_file` varchar(255) DEFAULT NULL,
  `xray_chest_file` varchar(255) DEFAULT NULL,
  `ent_file` varchar(255) DEFAULT NULL,
  `other_examination_file` varchar(255) DEFAULT NULL,
  `medical_checkup_report_file` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int UNSIGNED DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gb_district`
--
ALTER TABLE `gb_district`
  ADD PRIMARY KEY (`gb_district_id`);

--
-- Indexes for table `gb_ps`
--
ALTER TABLE `gb_ps`
  ADD PRIMARY KEY (`gb_ps_id`);

--
-- Indexes for table `master_designation_rank`
--
ALTER TABLE `master_designation_rank`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rank_name` (`rank_name`);

--
-- Indexes for table `master_liu`
--
ALTER TABLE `master_liu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_relationship`
--
ALTER TABLE `master_relationship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_state`
--
ALTER TABLE `master_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_unit`
--
ALTER TABLE `master_unit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit_name` (`unit_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`),
  ADD UNIQUE KEY `mobile_number_alternate` (`mobile_number_alternate`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `user_family_details`
--
ALTER TABLE `user_family_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_family_user` (`user_id`);

--
-- Indexes for table `user_medical_history`
--
ALTER TABLE `user_medical_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_medical_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gb_district`
--
ALTER TABLE `gb_district`
  MODIFY `gb_district_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `gb_ps`
--
ALTER TABLE `gb_ps`
  MODIFY `gb_ps_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=646;

--
-- AUTO_INCREMENT for table `master_designation_rank`
--
ALTER TABLE `master_designation_rank`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `master_liu`
--
ALTER TABLE `master_liu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `master_relationship`
--
ALTER TABLE `master_relationship`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `master_state`
--
ALTER TABLE `master_state`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `master_unit`
--
ALTER TABLE `master_unit`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_family_details`
--
ALTER TABLE `user_family_details`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_medical_history`
--
ALTER TABLE `user_medical_history`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_family_details`
--
ALTER TABLE `user_family_details`
  ADD CONSTRAINT `fk_family_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_medical_history`
--
ALTER TABLE `user_medical_history`
  ADD CONSTRAINT `fk_medical_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
