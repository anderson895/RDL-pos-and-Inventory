-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 10:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdeleon`
--

-- --------------------------------------------------------

--
-- Table structure for table `histoy`
--

CREATE TABLE `histoy` (
  `h_id` int(11) NOT NULL,
  `h_prod_id` varchar(20) NOT NULL,
  `h_qty` int(11) NOT NULL,
  `col_total` double NOT NULL,
  `h_total` double NOT NULL,
  `discount` double NOT NULL,
  `total_discount` double NOT NULL,
  `h_date` date DEFAULT current_timestamp(),
  `bayad` int(11) NOT NULL,
  `tacking_number` varchar(255) NOT NULL,
  `cashierDuty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histoy`
--

INSERT INTO `histoy` (`h_id`, `h_prod_id`, `h_qty`, `col_total`, `h_total`, `discount`, `total_discount`, `h_date`, `bayad`, `tacking_number`, `cashierDuty`) VALUES
(188, '83', 6, 0, 403.2, 0, 0, '2022-11-02', 500, '242872083', 'Joshua. Padilla'),
(189, '83', 2, 0, 134.4, 0, 0, '2022-12-13', 400, '1975898897', 'Joshua. Padilla'),
(190, '82', 90, 0, 11088, 0, 0, '2022-12-13', 20000, '1557880779', 'Joshua. Padilla'),
(191, '82', 80, 0, 9856, 0, 0, '2022-12-13', 10000, '1094887512', 'Joshua. Padilla'),
(192, '82', 27, 0, 3326.4, 0, 0, '2022-12-12', 4000, '134424311', 'Joshua. Padilla'),
(193, '82', 1, 0, 123.2, 0, 0, '2022-12-08', 500, '1782670080', 'Joshua. Padilla'),
(197, '82', 5, 0, 616, 0, 0, '2022-12-13', 700, '2055230953', 'Joshua. Padilla'),
(198, '83', 5, 0, 336, 0, 0, '2022-12-13', 400, '765978417', 'Joshua. Padilla'),
(199, '82', 2, 0, 246.4, 0, 0, '2022-12-14', 300, '614045137', 'Mariel. Solomon'),
(200, '83', 2, 0, 134.4, 0, 0, '2022-12-14', 200, '1320455230', 'Ron. Lore'),
(201, '83', 2, 0, 134.4, 0, 0, '2022-12-14', 200, '2123133089', 'Ron. Lore'),
(202, '82', 2, 0, 380.8, 0, 0, '2022-12-14', 400, '1491793409', 'Ron. Lore'),
(203, '83', 2, 0, 380.8, 0, 0, '2022-12-14', 400, '1491793409', 'Ron. Lore'),
(204, '82', 15, 0, -1478.4, 0, 0, '2022-12-14', 5000, '1020437979', 'Mariel. Solomon'),
(205, '82', 15, 0, -1478.4, 0, 0, '2022-12-14', 5000, '1282465881', 'Mariel. Solomon'),
(206, '82', 15, 0, 1478.4, 0, 0, '2022-12-14', 5000, '510142813', 'Mariel. Solomon'),
(207, '82', 15, 0, 1478.4, 20, 0, '2022-12-14', 2000, '766207488', 'Mariel. Solomon'),
(208, '82', 15, 0, 1478.4, 20, 0, '2022-12-14', 5000, '1501449492', 'Mariel. Solomon'),
(209, '82', 15, 0, 1478.4, 20, 369.6, '2022-12-14', 2000, '1726055375', 'Mariel. Solomon'),
(210, '82', 15, 0, 2284.8, 20, 571.2, '2022-12-14', 3000, '1664845963', 'Mariel. Solomon'),
(211, '83', 15, 0, 2284.8, 20, 571.2, '2022-12-14', 3000, '1664845963', 'Mariel. Solomon');

-- --------------------------------------------------------

--
-- Table structure for table `system_maintinance`
--

CREATE TABLE `system_maintinance` (
  `system_id` int(11) NOT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `date_edit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_maintinance`
--

INSERT INTO `system_maintinance` (`system_id`, `tax`, `unit`, `date_edit`) VALUES
(2, '12', NULL, ''),
(3, NULL, 'sack', ''),
(29, '', 'pcs', 'Dec 12,2022 | Mon, 07:28: am'),
(30, '', 'bag', 'Dec 12,2022 | Mon, 07:28: am'),
(31, '', 'cap', 'Dec 12,2022 | Mon, 07:28: am'),
(32, '', 'tab', 'Dec 12,2022 | Mon, 07:28: am'),
(33, '', 'kg', 'Dec 12,2022 | Mon, 07:28: am'),
(34, '', 'pk', 'Dec 12,2022 | Mon, 07:28: am'),
(35, '', 'sach', 'Dec 12,2022 | Mon, 07:28: am'),
(36, '', 'can', 'Dec 12,2022 | Mon, 07:29: am'),
(37, '', 'btl', 'Dec 12,2022 | Mon, 07:29: am'),
(38, '', 'vial', 'Dec 12,2022 | Mon, 07:29: am');

-- --------------------------------------------------------

--
-- Table structure for table `table_product`
--

CREATE TABLE `table_product` (
  `item_number` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `orig_price` double NOT NULL,
  `price` double NOT NULL,
  `stocks` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_edit` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `product_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_product`
--

INSERT INTO `table_product` (`item_number`, `item_name`, `unit`, `orig_price`, `price`, `stocks`, `image`, `date_edit`, `date_added`, `product_status`) VALUES
(82, 'product2', 'pcs', 100, 110, 55, '', '', 'Dec 12,2022 | Mon, 09:16: pm', 0),
(83, 'product4', 'bag', 50, 60, 85, '', '', 'Dec 12,2022 | Mon, 10:04: pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_void`
--

CREATE TABLE `table_void` (
  `void_number` int(11) NOT NULL,
  `date_purchased` date NOT NULL,
  `date_return` date NOT NULL,
  `transaction_code` varchar(200) NOT NULL,
  `amount_payment` varchar(200) NOT NULL,
  `total_bill` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temporary_item_list`
--

CREATE TABLE `temporary_item_list` (
  `list_no` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_no` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Unit` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temporary_item_list`
--

INSERT INTO `temporary_item_list` (`list_no`, `item_name`, `item_no`, `Quantity`, `Unit`, `Amount`) VALUES
(22, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(23, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(24, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(25, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(26, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(27, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(28, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(29, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(30, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(31, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(32, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(33, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(34, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(35, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(36, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(37, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(38, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(39, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(40, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(41, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(42, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(43, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(44, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(45, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(46, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(47, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(48, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(49, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(50, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(51, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(52, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(53, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(54, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(55, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(56, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(57, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(58, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(59, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(60, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(61, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(62, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(63, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(64, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(65, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(66, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(67, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(68, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(69, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(70, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(71, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(72, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(73, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(74, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(75, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(76, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(77, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(78, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(79, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(80, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(81, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(82, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(83, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(84, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(85, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(86, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(87, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(88, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(89, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(90, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(91, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(92, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(93, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(94, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(95, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(96, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(97, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(98, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(99, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(100, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(101, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(102, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(103, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(104, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(105, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(106, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(107, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(108, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(109, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(110, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(111, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(112, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(113, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(114, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(115, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(116, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(117, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(118, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(119, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(120, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(121, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(122, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(123, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(124, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(125, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(126, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(127, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(128, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(129, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(130, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(131, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(132, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(133, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(134, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(135, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(136, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(137, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(138, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(139, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(140, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(141, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(142, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(143, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(144, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(145, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(146, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(147, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(148, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(149, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(150, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(151, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(152, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(153, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(154, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(155, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(156, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(157, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(158, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(159, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(160, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(161, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(162, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(163, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(164, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(165, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(166, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(167, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(168, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(169, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(170, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(171, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(172, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(173, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(174, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(175, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(176, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(177, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(178, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(179, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(180, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(181, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(182, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(183, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(184, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(185, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(186, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(187, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(188, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(189, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(190, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(191, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(192, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(193, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(194, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(195, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(196, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(197, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(198, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(199, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(200, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(201, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(202, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(203, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(204, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(205, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(206, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(207, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(208, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(209, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(210, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(211, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(212, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(213, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(214, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(215, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(216, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(217, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(218, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(219, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(220, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(221, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(222, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(223, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(224, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(225, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(226, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(227, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(228, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(229, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(230, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(231, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(232, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(233, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(234, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(235, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(236, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(237, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(238, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(239, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(240, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(241, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(242, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(243, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(244, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(245, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(246, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(247, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(248, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(249, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(250, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(251, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(252, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(253, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(254, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(255, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(256, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(257, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(258, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(259, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(260, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(261, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(262, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(263, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(264, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(265, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(266, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(267, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(268, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(269, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(270, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(271, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(272, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(273, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(274, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(275, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(276, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(277, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(278, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(279, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(280, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(281, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(282, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(283, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(284, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(285, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(286, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(287, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(288, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(289, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(290, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(291, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(292, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(293, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(294, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(295, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(296, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(297, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(298, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(299, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(300, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(301, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(302, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(303, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(304, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(305, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(306, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(307, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(308, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(309, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(310, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(311, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(312, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(313, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(314, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(315, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(316, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(317, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(318, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(319, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(320, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(321, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(322, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(323, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(324, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(325, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(326, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(327, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(328, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(329, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(330, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(331, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(332, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(333, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(334, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(335, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(336, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(337, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(338, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(339, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(340, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` int(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_edited` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `contact`, `username`, `password`, `account_type`, `date_created`, `date_edited`) VALUES
(2, 'Fyke', 'Loterena', 'floterina@gmail.com', '09770987020', 'mike123', '1234', 1, 'Dec 10,2022 | Sat, 02:53: pm', NULL),
(3, 'joshua', 'padilla', 'andersonandy046@company.com', '09770987020', 'joshua', 'ako', 1, 'Dec 10,2022 | Sat, 03:00: pm', NULL),
(4, 'mariel', 'solomon', 'solomonmariel@gmail.com', '0912345678', 'mariel', 'cashier', 0, 'Dec 11,2022 | Sun, 12:16: pm', NULL),
(5, 'Ron', 'Lore', 'andersonandy046@company.com', '09770987020', 'Ron', '12345', 2, 'Dec 13,2022 | Tue, 10:28: pm', NULL),
(6, 'mariel', 'solomon', 'solomonmariel@gmail.com', '+6977 0987 020', 'admin', 'admin', 1, 'Dec 13,2022 | Tue, 10:30: pm', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histoy`
--
ALTER TABLE `histoy`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `system_maintinance`
--
ALTER TABLE `system_maintinance`
  ADD PRIMARY KEY (`system_id`);

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`item_number`);

--
-- Indexes for table `table_void`
--
ALTER TABLE `table_void`
  ADD PRIMARY KEY (`void_number`);

--
-- Indexes for table `temporary_item_list`
--
ALTER TABLE `temporary_item_list`
  ADD PRIMARY KEY (`list_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histoy`
--
ALTER TABLE `histoy`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `system_maintinance`
--
ALTER TABLE `system_maintinance`
  MODIFY `system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `item_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `table_void`
--
ALTER TABLE `table_void`
  MODIFY `void_number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temporary_item_list`
--
ALTER TABLE `temporary_item_list`
  MODIFY `list_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
