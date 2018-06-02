-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 06:29 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madden`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_championships`
--

CREATE TABLE `club_championships` (
  `name` varchar(255) NOT NULL,
  `placing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `madden_challenge`
--

CREATE TABLE `madden_challenge` (
  `name` varchar(255) NOT NULL,
  `placing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madden_challenge`
--

INSERT INTO `madden_challenge` (`name`, `placing`) VALUES
('Drini', '1st'),
('Young Kiv', '2nd'),
('Prodigy', '3rd/4th'),
('Joel', '3rd/4th'),
('Spoto', '5th/6th'),
('Dubby', '5th/6th'),
('Hollywood', '7th/8th'),
('Mattster', '7th/8th');

-- --------------------------------------------------------

--
-- Table structure for table `madden_classic`
--

CREATE TABLE `madden_classic` (
  `name` varchar(255) NOT NULL,
  `placing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madden_classic`
--

INSERT INTO `madden_classic` (`name`, `placing`) VALUES
('Skimbo', '1st'),
('Joke', '2nd'),
('Tweez', '3rd/4th'),
('Dubby', '3rd/4th'),
('Kaus', '5th/6th'),
('SteveyJ', '5th/6th'),
('Trueboy', '7th/8th'),
('Duke', '7th/8th');

-- --------------------------------------------------------

--
-- Table structure for table `offense`
--

CREATE TABLE `offense` (
  `name` varchar(255) NOT NULL,
  `rushing_yards` int(11) NOT NULL,
  `passing_yards` int(11) NOT NULL,
  `main_formation` varchar(255) NOT NULL,
  `main_play` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offense`
--

INSERT INTO `offense` (`name`, `rushing_yards`, `passing_yards`, `main_formation`, `main_play`) VALUES
('Kiv', 500, 1500, 'Gun Bunch Wk', 'Gun Bunch Wk - Corner Strike'),
('Drini', 1300, 700, 'Gun Trips TE Offset', 'Gun Trips TE Offset - Inside Zone'),
('Blocky', 500, 1400, 'Gun Bunch Wk', 'Gun Bunch Wk - Corner Strike'),
('Trueboy', 1350, 800, 'Singleback Wing Tight', 'Singleback Wing Tight - HB Stretch'),
('Problem', 1500, 1000, 'Singleback Wing', 'Singleback Wing - HB Stretch'),
('Skimbo', 750, 1300, 'Gun Bunch Wk', 'Gun Bunch Wk - Corner Strike'),
('Dubby', 1000, 1000, 'Gun Bunch Wk', 'Gun Bunch Wk - Dig HB Out'),
('Joel', 600, 1100, 'Gun Spread', 'Gun Spread - Circle'),
('SteveyJ', 1500, 950, 'Singleback Tight Slots', 'Singleback Tight Slots - HB Dive'),
('Joke', 750, 1300, 'Gun Bunch Wk', 'Gun Bunch Wk - Corner Strike'),
('Gos', 500, 1499, 'Gun Bunch Wk', 'Gun Bunch Wk - Corner Strike'),
('Musafa Jones', 600, 1275, 'Gun Bunch Wk', 'Gun Bunch Wk - Corner Strike'),
('Tweez', 700, 650, 'Strong Close', 'Strong Close - HB Off Tackle'),
('Kaus', 500, 800, 'Gun Trips TE', 'Gun Trips TE - PA Slot Corner'),
('SpotMePlzzz', 500, 950, 'Gun Bunch TE', 'Gun Bunch TE - PA Boot Over'),
('Prodigy', 450, 875, 'Gun Bunch Wk', 'Gun Bunch Wk - Mesh Post');

-- --------------------------------------------------------

--
-- Table structure for table `regstop100`
--

CREATE TABLE `regstop100` (
  `rank` int(11) NOT NULL,
  `gamertag` varchar(255) NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL,
  `games_played` int(11) NOT NULL,
  `win_percentage` decimal(10,2) NOT NULL,
  `top_team_used` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regstop100`
--

INSERT INTO `regstop100` (`rank`, `gamertag`, `wins`, `losses`, `games_played`, `win_percentage`, `top_team_used`) VALUES
(1, 'xA1xNasomugha24', 1448, 1234, 2682, '53.99', 'Falcons'),
(2, 'CASINO LIFE 865', 1576, 996, 2572, '61.28', 'Seahawks'),
(3, 'TriggaTrav3', 1252, 592, 1844, '67.90', 'Seahawks'),
(4, 'BRICKCITY72', 2176, 1918, 4094, '53.15', 'Cowboys'),
(5, 'Newkingnimphwid', 946, 610, 1556, '60.80', 'Seahawks'),
(6, 'KingDD1523', 1002, 685, 1687, '59.40', 'Falcons'),
(7, 'InjuredLobe', 1357, 1166, 2523, '53.79', 'Seahawks'),
(8, 'BeatItScrubb21', 1055, 858, 1913, '55.15', 'Jaguars'),
(9, 'kscarbz', 968, 773, 1741, '55.60', 'Cowboys'),
(10, 'EAsports4', 869, 633, 1502, '57.86', 'Jaguars'),
(11, 'ATRAIN200019', 903, 723, 1626, '55.54', 'Eagles'),
(12, 'Bgoodfella', 1064, 842, 1906, '55.82', 'Eagles'),
(13, 'Wedemboyz00719', 953, 819, 1772, '53.78', 'Cowboys'),
(14, 'JefferyBrian', 950, 772, 1722, '55.17', 'Jaguars'),
(15, 'MajorTazer99', 874, 502, 1376, '63.52', 'Vikings'),
(16, 'Luwoup2xTymes', 1006, 906, 1912, '52.62', 'Eagles'),
(17, 'GOYARD JEEZ vip', 1183, 302, 1485, '79.66', 'Seahawks'),
(18, 'highborntaz', 1090, 967, 2057, '52.99', 'Cardinals'),
(19, 'iKillBillBeats', 765, 585, 1350, '56.67', 'Patriots'),
(20, 'SlickFawn806711', 1161, 956, 2117, '54.84', 'Seahawks'),
(21, 'RealDealTL58', 775, 402, 1177, '65.85', 'Broncos'),
(22, 'XPRIMET1ME85X', 714, 453, 1167, '61.18', 'Steelers'),
(23, 'kbkillas1985', 993, 856, 1849, '53.70', 'Buccaneers'),
(24, 'KirksKronicCush', 1226, 1099, 2325, '52.73', 'Redskins'),
(25, 'SLIMcee67', 896, 758, 1654, '54.17', 'Steelers'),
(26, 'ALUMJACKSON', 821, 675, 1496, '54.88', 'Broncos'),
(27, 'ANT ZOG 3531', 796, 681, 1477, '53.89', 'Patriots'),
(28, 'AssertedDog', 923, 562, 1485, '62.15', 'Panthers'),
(29, 'ZUMLOARD337', 977, 806, 1783, '54.80', 'Steelers'),
(30, 'BlinkyMcHeelHuk', 857, 750, 1607, '53.33', 'Seahawks'),
(26, 'ALUMJACKSON', 821, 675, 1496, '54.88', 'Broncos'),
(27, 'ANT ZOG 3531', 796, 681, 1477, '53.89', 'Patriots'),
(28, 'AssertedDog', 923, 562, 1485, '62.15', 'Panthers'),
(29, 'ZUMLORD337', 977, 806, 1783, '54.80', 'Steelers'),
(30, 'BlinkyMcHeelHuk', 857, 750, 1607, '53.33', 'Seahawks'),
(31, 'R1 SAINTed UP', 839, 703, 1542, '54.41', 'Saints'),
(32, 'Golddust28', 1162, 1031, 2193, '52.99', 'Saints'),
(33, 'MiLLisB4ACK', 1053, 886, 1939, '54.31', 'Falcons'),
(34, 'DA SPECIALIST19', 802, 627, 1429, '56.12', 'Seahawks'),
(35, 'DyingDad', 619, 378, 997, '62.09', 'Falcons'),
(36, 'Nikeboots24x7', 654, 444, 1098, '59.56', 'Falcons'),
(37, 'SpacedBiscuit54', 852, 659, 1511, '56.39', 'Redskins'),
(38, 'InitialStorm291', 1153, 1003, 2156, '53.48', 'Vikings'),
(39, 'FALCON 2PTO', 1057, 889, 1946, '54.32', 'Raiders'),
(40, 'Thah Darkcyde', 844, 675, 1519, '55.56', 'Falcons'),
(41, 'MR MC1995', 1060, 909, 1969, '53.83', 'Titans'),
(42, 'OHIOPLAAAYER404', 867, 764, 1631, '53.16', 'Seahawks'),
(43, 'ROMPEKULOS1992', 745, 555, 1300, '57.31', 'Seahawks'),
(44, 'goldylo', 701, 429, 1130, '62.04', 'Seahawks'),
(45, 'iPretendToSuck', 669, 534, 1203, '55.61', 'Bears'),
(46, 'JIMMY BONESTEEL', 743, 495, 1238, '60.02', '49ers'),
(47, 'UnshapedLoki789', 1150, 1002, 2152, '53.44', 'Falcons'),
(48, 'SickAriMfGold', 733, 618, 1351, '54.26', 'Seahawks'),
(49, 'needles10', 856, 736, 1592, '53.77', 'Bengals'),
(50, 'REDDAY32', 779, 668, 1447, '53.84', 'Patriots'),
(51, 'TennesseeMe615', 803, 617, 1420, '56.55', 'Titans'),
(52, 'CaseDoughnut996', 839, 720, 1559, '53.82', 'Panthers'),
(53, 'treynkenzie', 874, 729, 1603, '54.52', 'Titans'),
(54, 'XEROXED77', 872, 778, 1650, '52.85', 'Lions'),
(55, 'JPango671', 688, 566, 1254, '54.86', 'Seahawks'),
(56, 'MaximumEffort20', 778, 604, 1382, '56.30', 'Seahawks'),
(57, 'MetsJetsNets', 891, 703, 1594, '55.90', 'Jets'),
(58, 'OGswag223', 712, 607, 1319, '53.98', 'Seahawks'),
(59, 'KingNick876', 586, 497, 1083, '54.11', 'Cowboys'),
(60, 'slatdawg84', 581, 488, 1069, '54.35', 'Buccaneers'),
(61, 'KingsmanDJ201', 727, 592, 1319, '55.12', 'Broncos'),
(62, 'SurgicalSteeler', 720, 621, 1341, '53.69', 'Steelers'),
(63, 'WHOGOTNEXT NYC', 799, 706, 1505, '53.09', 'Giants'),
(64, 'DJSTINGY30', 642, 535, 1177, '54.55', 'Falcons'),
(65, 'InputChunkybutt', 932, 776, 1708, '54.57', '49ers'),
(66, 'dannyrk31', 902, 789, 1691, '53.34', 'Steelers'),
(67, '931', 806, 1737, 1737, '53.60', 'Seahawks'),
(68, 'Zargabatth', 836, 718, 1554, '53.80', 'Falcons'),
(69, 'bling bling65', 599, 511, 1110, '53.96', 'Rames'),
(70, 'KaiKalBoyz74', 709, 586, 1295, '54.75', 'Seahawks'),
(71, 'blue bull hemi7', 742, 630, 1372, '54.08', 'Seahawks'),
(72, 'FreakyyShaad', 643, 461, 1104, '58.24', 'Steelers'),
(73, 'toomuchgame84', 807, 641, 1448, '55.73', 'Cowboys'),
(74, 'fasteddie4858', 1014, 905, 1919, '52.84', 'Broncos'),
(75, 'fa1consfan', 655, 526, 1181, '55.46', 'Falcons'),
(76, 'WoodLife47sws', 854, 752, 1606, '53.18', 'Raiders'),
(77, 'RustGolf6812000', 876, 757, 1633, '53.64', 'Falcons'),
(78, 'iNoScopedMyself', 745, 510, 1255, '59.36', 'Raiders'),
(79, 'busyawass', 810, 704, 1514, '53.50', 'Eagles'),
(80, 'Im TrueKilla', 729, 640, 1369, '53.25', 'Raiders'),
(81, 'BlaringTrain295', 632, 435, 1067, '59.23', 'Vikings'),
(82, 'Yung TPS174', 583, 457, 1040, '56.06', 'Seahawks'),
(83, 'BMOREDAD940406', 865, 785, 1650, '52.42', 'Ravens'),
(84, 'ravenpink12', 630, 507, 1137, '55.41', 'Seahawks'),
(85, 'TheBrandino', 817, 697, 1514, '53.96', 'Seahawks'),
(86, 'TheRealJHop', 516, 364, 880, '58.64', 'Rams'),
(87, 'orangecrush8161', 728, 629, 1357, '53.65', 'Broncos'),
(88, 'ThatBoySlim3541', 756, 648, 1404, '53.85', 'Falcons'),
(89, 'cnen34', 882, 717, 1599, '55.16', 'Jaguars'),
(90, 'SirrealRook9181', 723, 625, 1348, '53.64', 'Texans'),
(91, 'GREGO1500', 712, 611, 1323, '53.82', 'Seahawks'),
(92, 'ToneMoneyTDB', 573, 504, 1077, '53.20', 'Seahawks'),
(93, 'replayreplay25', 906, 789, 1695, '53.45', 'Panthers'),
(94, 'rocky368', 606, 482, 1088, '55.70', '49ers'),
(95, 'WHITTON3794', 566, 478, 1044, '54.21', 'Cowboys'),
(96, 'Wave control92', 761, 619, 1380, '55.14', 'Chiefs'),
(97, 'BIGPIP0501', 758, 625, 1383, '54.81', 'Chiefs'),
(98, 'St33l3rs4Lif344', 705, 591, 1296, '54.40', 'Steelers'),
(99, 'Labbar01', 653, 550, 1203, '54.28', 'Steelers'),
(100, 'RAIDERS7GOD', 769, 687, 1456, '52.82', 'Raiders');

-- --------------------------------------------------------

--
-- Table structure for table `ultimate_league`
--

CREATE TABLE `ultimate_league` (
  `name` varchar(255) NOT NULL,
  `placing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ultimate_league`
--

INSERT INTO `ultimate_league` (`name`, `placing`) VALUES
('Kiv', '1st'),
('Drini', '2nd'),
('Trueboy', '3rd/4th'),
('Blocky', '3rd/4th'),
('Dubby', '5th/8th'),
('Problem', '5th/8th'),
('Skimbo', '5th/8th'),
('SteveyJ', '5th/8th'),
('Gos', '9th/12th'),
('Joel', '9th/12th'),
('Joke', '9th/12th'),
('Musafa Jones', '9th/12th'),
('Tweez', '13th/16th'),
('Prodigy', '13th/16th'),
('SpotMePlzzz', '13th/16th'),
('Kaus', '13th/16th');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
