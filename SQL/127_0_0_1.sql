-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 09:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddu_assets`
--
CREATE DATABASE IF NOT EXISTS `ddu_assets` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ddu_assets`;

-- --------------------------------------------------------

--
-- Table structure for table `assets_data`
--

CREATE TABLE `assets_data` (
  `id` int(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `date_of_purchase` date NOT NULL,
  `date_of_bill` date DEFAULT NULL,
  `date_of_payment` date DEFAULT NULL,
  `bill_no` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `short_code` varchar(20) NOT NULL,
  `quantity` int(255) NOT NULL,
  `unit_no` int(255) NOT NULL,
  `unit_price` double NOT NULL,
  `page_no` varchar(10) NOT NULL,
  `faculty` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `functional_status` int(1) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `ppath` varchar(200) NOT NULL,
  `stock_status` int(1) NOT NULL,
  `approved` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets_data`
--

INSERT INTO `assets_data` (`id`, `category`, `date_of_purchase`, `date_of_bill`, `date_of_payment`, `bill_no`, `supplier_name`, `details`, `type`, `short_code`, `quantity`, `unit_no`, `unit_price`, `page_no`, `faculty`, `department`, `location`, `barcode`, `functional_status`, `remark`, `path`, `ppath`, `stock_status`, `approved`) VALUES
(1, 'Fixed', '2018-02-04', '2018-02-07', '0000-00-00', '2134', 'Pranav Systems, Nadiad', 'Laser Printer', 'HP 1010', 'PRN', 1, 1, 10000, 'A-010-21', 'FOT', 'EC', 'ECLAB7', 'DDU/FOT/EC/2018/PRN/1/1/A-010-21', 1, 'From Allumni', '../images/imageFOT_EC_PRN_A-010-21.png', '../images/pdfFOT_EC_PRN_A-010-21.pdf', 1, 0),
(12, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 1, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/1/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(13, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 2, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/2/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(14, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 3, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/3/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(15, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 4, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/4/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(16, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 5, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/5/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(17, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 6, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/6/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(18, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 7, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/7/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(19, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 8, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/8/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(20, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 9, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/9/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(21, 'Fixed', '2018-02-06', '0000-00-00', '0000-00-00', '3124', 'fhdydy', 'gdfgdf', 'ghdfh', 'PC', 10, 10, 10000, 'A-012-12', 'FOT', 'EC', 'ECLAB2', 'DDU/FOT/EC/2018/PC/10/10/A-012-12', 1, 'From UGC ', '../images/imageFOT_EC_PC_A-012-12.png', '../images/pdfFOT_EC_PC_A-012-12.pdf', 1, 0),
(22, 'Fixed', '2012-09-10', '2012-09-10', '0000-00-00', 'R1/2220', 'ASIF APPLIANCES', 'SPLIT A.C.', 'APLIT AND MAKE BY LLOYD ', 'A.C.', 4, 1, 22700, '01', 'FOT', 'BCA', 'LAB-1,2', 'DDU/FOT/BCA/2012/A.C./1/4/01', 1, '2 A.C. LAB -1 AND 2 A.C. LAB-2', '../images/imageFOT_BCA_A.C._01.png', '../images/pdfFOT_BCA_A.C._01.pdf', 1, 0),
(23, 'Fixed', '2012-09-10', '2012-09-10', '0000-00-00', 'R1/2220', 'ASIF APPLIANCES', 'SPLIT A.C.', 'APLIT AND MAKE BY LLOYD ', 'A.C.', 4, 2, 22700, '01', 'FOT', 'BCA', 'LAB-1,2', 'DDU/FOT/BCA/2012/A.C./2/4/01', 1, '2 A.C. LAB -1 AND 2 A.C. LAB-2', '../images/imageFOT_BCA_A.C._01.png', '../images/pdfFOT_BCA_A.C._01.pdf', 1, 0),
(24, 'Fixed', '2012-09-10', '2012-09-10', '0000-00-00', 'R1/2220', 'ASIF APPLIANCES', 'SPLIT A.C.', 'APLIT AND MAKE BY LLOYD ', 'A.C.', 4, 3, 22700, '01', 'FOT', 'BCA', 'LAB-1,2', 'DDU/FOT/BCA/2012/A.C./3/4/01', 1, '2 A.C. LAB -1 AND 2 A.C. LAB-2', '../images/imageFOT_BCA_A.C._01.png', '../images/pdfFOT_BCA_A.C._01.pdf', 1, 0),
(25, 'Fixed', '2012-09-10', '2012-09-10', '0000-00-00', 'R1/2220', 'ASIF APPLIANCES', 'SPLIT A.C.', 'APLIT AND MAKE BY LLOYD ', 'A.C.', 4, 4, 22700, '01', 'FOT', 'BCA', 'LAB-1,2', 'DDU/FOT/BCA/2012/A.C./4/4/01', 1, '2 A.C. LAB -1 AND 2 A.C. LAB-2', '../images/imageFOT_BCA_A.C._01.png', '../images/pdfFOT_BCA_A.C._01.pdf', 1, 0),
(26, 'Fixed', '2013-07-19', '2013-07-19', '0000-00-00', '482', 'LOTUS ENTERPRISE', 'MOUSE', 'OPTICAL AND MAKE LOGITECH', 'MOUSE', 2, 1, 350, '1', 'FOT', 'BCA', 'LAB-2', 'DDU/FOT/BCA/2013/MOUSE/1/2/1', 1, 'LAB - 2', '../images/imageFOT_BCA_MOUSE_1.png', '../images/pdfFOT_BCA_MOUSE_1.pdf', 1, 0),
(27, 'Fixed', '2013-07-19', '2013-07-19', '0000-00-00', '482', 'LOTUS ENTERPRISE', 'MOUSE', 'OPTICAL AND MAKE LOGITECH', 'MOUSE', 2, 2, 350, '1', 'FOT', 'BCA', 'LAB-2', 'DDU/FOT/BCA/2013/MOUSE/2/2/1', 1, 'LAB - 2', '../images/imageFOT_BCA_MOUSE_1.png', '../images/pdfFOT_BCA_MOUSE_1.pdf', 1, 0),
(28, 'Fixed', '2013-09-05', '2013-09-05', '0000-00-00', '2162', 'SHAH & CO. DISTRIBUTORS PVT. LTD.', 'PROJECTOR SCREEN ', 'WHITE SCREEN', 'PROJ. SCREEN', 2, 1, 3500, '2', 'FOT', 'BCA', 'ROOMNO28', 'DDU/FOT/BCA/2013/PROJ. SCREEN/1/2/2', 1, 'SCREEN ATTECH TWO CLASS ROOM (27 AND 28)', '../images/imageFOT_BCA_PROJ. SCREEN_2.png', '../images/pdfFOT_BCA_PROJ. SCREEN_2.pdf', 1, 0),
(29, 'Fixed', '2013-09-05', '2013-09-05', '0000-00-00', '2162', 'SHAH & CO. DISTRIBUTORS PVT. LTD.', 'PROJECTOR SCREEN ', 'WHITE SCREEN', 'PROJ. SCREEN', 2, 2, 3500, '2', 'FOT', 'BCA', 'ROOMNO28', 'DDU/FOT/BCA/2013/PROJ. SCREEN/2/2/2', 1, 'SCREEN ATTECH TWO CLASS ROOM (27 AND 28)', '../images/imageFOT_BCA_PROJ. SCREEN_2.png', '../images/pdfFOT_BCA_PROJ. SCREEN_2.pdf', 1, 0),
(30, 'Fixed', '2014-09-23', '2014-09-23', '0000-00-00', '756', 'LOTUS ENTERPRISE', 'MOUSE', 'OPTICAL AND MAKE LOGITECH', 'MOUSE', 2, 1, 350, '3', 'FOT', 'BCA', 'LAB-2', 'DDU/FOT/BCA/2014/MOUSE/1/2/3', 1, 'OPTICAL MOUSE LAB-2', '../images/imageFOT_BCA_MOUSE_3.png', '../images/pdfFOT_BCA_MOUSE_3.pdf', 1, 0),
(31, 'Fixed', '2014-09-23', '2014-09-23', '0000-00-00', '756', 'LOTUS ENTERPRISE', 'MOUSE', 'OPTICAL AND MAKE LOGITECH', 'MOUSE', 2, 2, 350, '3', 'FOT', 'BCA', 'LAB-2', 'DDU/FOT/BCA/2014/MOUSE/2/2/3', 1, 'OPTICAL MOUSE LAB-2', '../images/imageFOT_BCA_MOUSE_3.png', '../images/pdfFOT_BCA_MOUSE_3.pdf', 1, 0),
(32, 'Fixed', '2014-09-23', '2014-09-23', '0000-00-00', '756', 'LOTUS ENTERPRISE', 'POWER CABLE', 'BLACK CORED', 'POW CAB', 5, 1, 70, '3', 'FOT', 'BCA', 'LAB - 1', 'DDU/FOT/BCA/14-0/POW CAB/1/5/3', 1, 'USE FOR CPU', '../images/imageFOT_BCA_POW CAB_3.png', '../images/pdfFOT_BCA_POW CAB_3.pdf', 1, 0),
(33, 'Fixed', '2014-09-23', '2014-09-23', '0000-00-00', '756', 'LOTUS ENTERPRISE', 'POWER CABLE', 'BLACK CORED', 'POW CAB', 5, 2, 70, '3', 'FOT', 'BCA', 'LAB - 1', 'DDU/FOT/BCA/14-0/POW CAB/2/5/3', 1, 'USE FOR CPU', '../images/imageFOT_BCA_POW CAB_3.png', '../images/pdfFOT_BCA_POW CAB_3.pdf', 1, 0),
(34, 'Fixed', '2014-09-23', '2014-09-23', '0000-00-00', '756', 'LOTUS ENTERPRISE', 'POWER CABLE', 'BLACK CORED', 'POW CAB', 5, 3, 70, '3', 'FOT', 'BCA', 'LAB - 1', 'DDU/FOT/BCA/14-0/POW CAB/3/5/3', 1, 'USE FOR CPU', '../images/imageFOT_BCA_POW CAB_3.png', '../images/pdfFOT_BCA_POW CAB_3.pdf', 1, 0),
(35, 'Fixed', '2014-09-23', '2014-09-23', '0000-00-00', '756', 'LOTUS ENTERPRISE', 'POWER CABLE', 'BLACK CORED', 'POW CAB', 5, 4, 70, '3', 'FOT', 'BCA', 'LAB - 1', 'DDU/FOT/BCA/14-0/POW CAB/4/5/3', 1, 'USE FOR CPU', '../images/imageFOT_BCA_POW CAB_3.png', '../images/pdfFOT_BCA_POW CAB_3.pdf', 1, 0),
(36, 'Fixed', '2014-09-23', '2014-09-23', '0000-00-00', '756', 'LOTUS ENTERPRISE', 'POWER CABLE', 'BLACK CORED', 'POW CAB', 5, 5, 70, '3', 'FOT', 'BCA', 'LAB - 1', 'DDU/FOT/BCA/14-0/POW CAB/5/5/3', 1, 'USE FOR CPU', '../images/imageFOT_BCA_POW CAB_3.png', '../images/pdfFOT_BCA_POW CAB_3.pdf', 1, 0),
(37, 'Fixed', '2012-05-23', '2012-05-23', '0000-00-00', '18', 'A.J.COMPUTERS', 'TONER REFILLING', 'LASERJET ', 'TONER REFI', 2, 1, 300, '3', 'FOT', 'BCA', 'CABIN-2', 'DDU/FOT/BCA/2012/TONER REFI/1/2/3', 1, 'CABIN-2 PRINTER AND ADMIN PRINTER', '../images/imageFOT_BCA_TONER REFI_3.png', '../images/pdfFOT_BCA_TONER REFI_3.pdf', 1, 0),
(38, 'Fixed', '2012-05-23', '2012-05-23', '0000-00-00', '18', 'A.J.COMPUTERS', 'TONER REFILLING', 'LASERJET ', 'TONER REFI', 2, 2, 300, '3', 'FOT', 'BCA', 'CABIN-2', 'DDU/FOT/BCA/2012/TONER REFI/2/2/3', 1, 'CABIN-2 PRINTER AND ADMIN PRINTER', '../images/imageFOT_BCA_TONER REFI_3.png', '../images/pdfFOT_BCA_TONER REFI_3.pdf', 1, 0),
(39, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 1, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/1/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(40, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 2, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/2/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(41, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 3, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/3/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(42, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 4, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/4/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(43, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 5, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/5/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(44, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 6, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/6/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(45, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 7, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/7/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(46, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 8, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/8/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(47, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 9, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/9/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(48, 'Fixed', '2018-02-01', '2018-02-02', '2018-02-03', '2552', 'Kiratna, Mahemdavad', 'abc,xyz', 'type,type', 'SC', 10, 10, 56, 'k10', 'FOT', 'EC', 'loc', 'DDU/FOT/EC/2018/SC/10/10/k10', 1, '', '../images/imageFOT_EC_SC_k10.png', '../images/pdfFOT_EC_SC_k10.pdf', 1, 0),
(53, 'Fixed', '2018-02-19', '2018-02-20', '0000-00-00', '123', 'pp', 'pc', 'assembled', 'PC', 3, 1, 35000.5, 'A-001-002', 'FOT', 'EC', 'lab7', 'DDU/FOT/EC/2018/PC/1/3/A-001-002', 1, '', '../images/imageFOT_EC_PC_A-001-002.png', '../images/pdfFOT_EC_PC_A-001-002.pdf', 1, 0),
(54, 'Fixed', '2018-02-19', '2018-02-20', '0000-00-00', '123', 'pp', 'pc', 'assembled', 'PC', 3, 2, 35000.5, 'A-001-002', 'FOT', 'EC', 'lab7', 'DDU/FOT/EC/2018/PC/2/3/A-001-002', 1, '', '../images/imageFOT_EC_PC_A-001-002.png', '../images/pdfFOT_EC_PC_A-001-002.pdf', 1, 0),
(55, 'Fixed', '2018-02-19', '2018-02-20', '0000-00-00', '123', 'pp', 'pc', 'assembled', 'PC', 3, 3, 35000.5, 'A-001-002', 'FOT', 'EC', 'lab7', 'DDU/FOT/EC/2018/PC/3/3/A-001-002', 1, '', '../images/imageFOT_EC_PC_A-001-002.png', '../images/pdfFOT_EC_PC_A-001-002.pdf', 1, 0),
(56, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 1, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/1/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(57, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 2, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/2/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(58, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 3, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/3/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(59, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 4, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/4/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(60, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 5, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/5/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(61, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 6, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/6/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(62, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 7, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/7/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(63, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 8, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/8/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(64, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 9, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/9/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(65, 'Fixed', '2018-02-05', '2018-02-14', '2018-02-17', '453', 'Nidhi Systems', 'Intel core i3 next gen, 500 GB, 4GB, 15\'\' LED, USB KB, PS2 Mouse ', 'ASSEMBLED', 'PC', 10, 10, 23500, 'A-048-21', 'FOT', 'CL', 'L7', 'DDU/FOT/CL/2018/PC/10/10/A-048-21', 1, 'University Funded', '../images/imageFOT_CL_PC_A-048-21.png', '../images/pdfFOT_CL_PC_A-048-21.pdf', 1, 0),
(66, 'Fixed', '2018-01-25', '2018-01-26', '2018-01-27', '123', 'A J Computers', 'pc/2 gb ram/monitor', 'ibm', 'PC', 1, 1, 2000, 'ASS/10', 'FOT', 'IT', 'nadiad', 'DDU/FOT/IT/2018/PC/1/1/ASS/10', 1, '', '../images/10.png', '../images/10.pdf', 1, 0),
(67, 'Fixed', '2016-08-17', '2016-09-16', '2016-09-17', 'R-0597', 'TECH ELECON PVT LTD', 'DELL OPTIPLEX CORE I7 WITH OS', 'DELL', 'AIO', 2, 1, 64000, '15/89', 'FOT', 'CL', 'VVNAGAR', 'DDU/FOT/CL/2016/AIO/1/02/15/89', 1, '', '../images/89.png', '../images/89.pdf', 1, 0),
(68, 'Fixed', '2016-08-17', '2016-09-16', '2016-09-17', 'R-0597', 'TECH ELECON PVT LTD', 'DELL OPTIPLEX CORE I7 WITH OS', 'DELL', 'AIO', 2, 2, 64000, '15/89', 'FOT', 'CL', 'VVNAGAR', 'DDU/FOT/CL/2016/AIO/2/02/15/89', 1, '', '../images/89.png', '../images/89.pdf', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(1) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `password`, `type`, `faculty`, `department`) VALUES
(1, 'kirtan', 'kirtan@123', 1, 'admin', 'admin'),
(2, 'admin', 'admin', 1, 'admin', 'admin'),
(6, 'ec1', 'ec1', 2, 'FOT', 'EC'),
(7, 'it1', 'it1', 2, 'FOT', 'IT'),
(8, 'bca', 'jinisha2200', 2, 'FOT', 'BCA'),
(9, 'chem1', 'chem1', 2, 'FOT', 'CH'),
(10, 'cl1', 'cl1', 2, 'FOT', 'CL'),
(11, 'ce1', 'cedepartment', 2, 'FOT', 'CE'),
(12, 'mh1', 'mh1', 2, 'FOT', 'MH'),
(13, 'ic', 'ic1985', 2, 'FOT', 'IC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets_data`
--
ALTER TABLE `assets_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets_data`
--
ALTER TABLE `assets_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"ddu_assets\",\"table\":\"user\"},{\"db\":\"ddu_assets\",\"table\":\"assets_data\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'ddu_assets', 'user', '{\"sorted_col\":\"`user`.`password` ASC\"}', '2018-02-24 04:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
