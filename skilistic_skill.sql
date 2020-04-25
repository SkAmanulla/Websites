-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2019 at 05:41 PM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skilistic_skill`
--

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_admin`
--

CREATE TABLE `skillistic_admin` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `random` varchar(200) NOT NULL,
  `last_login` datetime NOT NULL,
  `login_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_admin`
--

INSERT INTO `skillistic_admin` (`id`, `username`, `password`, `random`, `last_login`, `login_time`) VALUES
(1, 'admin', 'admin', 'admin', '2019-06-12 10:49:00', '2019-06-15 13:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_faculty`
--

CREATE TABLE `skillistic_faculty` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(200) NOT NULL,
  `faculty_id` varchar(200) NOT NULL,
  `email_id_off` varchar(200) NOT NULL,
  `email_id_per` varchar(200) NOT NULL,
  `mobile_no_off` bigint(20) NOT NULL,
  `mobile_no_per` bigint(20) NOT NULL,
  `mobile_no_alt` bigint(20) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `last_login` datetime NOT NULL,
  `login_time` datetime NOT NULL,
  `random_code` varchar(200) NOT NULL,
  `zones` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_faculty`
--

INSERT INTO `skillistic_faculty` (`id`, `faculty_name`, `faculty_id`, `email_id_off`, `email_id_per`, `mobile_no_off`, `mobile_no_per`, `mobile_no_alt`, `designation`, `password`, `created_on`, `modified_on`, `status`, `last_login`, `login_time`, `random_code`, `zones`) VALUES
(1, 'Jaswanth kota', 'SSHYDSS', 'jaswathsshyd@gmail.com', 'jaswanthkota@gmail.com', 7569310626, 9032410131, 9848915004, '62', 'hydskilistic', '2019-06-03 16:00:19', '2019-06-12 11:45:01', 1, '0000-00-00 00:00:00', '2019-06-14 10:57:15', '', '4'),
(2, 'Abhilash Gopinathan', 'SSADMINAG', 'abhilashgpn@gmail.com', 'abhilashgpn@gmail.com', 8179729790, 8333822567, 7981766498, '89', 'Abhi2090', '2019-06-04 22:20:04', '2019-06-04 22:20:47', 1, '0000-00-00 00:00:00', '2019-06-14 10:57:15', '', '88'),
(3, 'hanumanth', 'SSADMINAH', 'abhilashgpn@gmail.com', 'abhilashgpn@gmail.com', 8333822567, 8333822567, 8333822567, '89', 'Ajay2090', '2019-06-04 22:43:26', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '2019-06-14 10:57:15', '', '88'),
(4, 'Syed Mohammed Jalal', 'SSKDPSS', 'jalalsskdp@gmail.com', 'jalaliumar@gmail.com', 7569310625, 8790790939, 8885200254, '62', 'jalal@ss', '2019-06-12 11:40:26', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '2019-06-14 10:57:15', '', '2'),
(5, 's.Naveen', 'SSGNTSS', 'naveenssgnt@gmail.com', 'sakamurinawin30@gmail.com', 7569310623, 9182835461, 9603554752, '62', 'naveen@ss', '2019-06-12 11:54:24', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '2019-06-14 10:57:15', '', '1'),
(6, 'Mohammed Ghouse', 'SSVZGSS', 'ghousessvzg@gmail.com', 'imghouse79@gmail.com', 7569310624, 9703357577, 9666982845, '62', 'ghouse@ss', '2019-06-12 12:15:26', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', '2019-06-14 10:57:15', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_faculty_schedule`
--

CREATE TABLE `skillistic_faculty_schedule` (
  `id` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `transport_type` varchar(200) NOT NULL,
  `no_kms` varchar(200) NOT NULL,
  `cost_transport` varchar(200) NOT NULL,
  `intercity_transport` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `food` varchar(200) NOT NULL,
  `postage` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  `faculty_id` varchar(200) NOT NULL,
  `schedule_id` varchar(200) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `mode_tr` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `local_transport` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_faculty_schedule`
--

INSERT INTO `skillistic_faculty_schedule` (`id`, `sdate`, `student_name`, `city`, `transport_type`, `no_kms`, `cost_transport`, `intercity_transport`, `room`, `food`, `postage`, `total`, `created_on`, `modified_on`, `faculty_id`, `schedule_id`, `institute_id`, `filename`, `details`, `mode_tr`, `status`, `local_transport`) VALUES
(1, '2019-06-04', '', '86', '', '6', '', '500', '0', '200', '0', '762.00', '2019-06-11 07:22:14', '0000-00-00 00:00:00', '1', '29', 1, '', '', '', 1, '50');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_faculty_schedulebk`
--

CREATE TABLE `skillistic_faculty_schedulebk` (
  `id` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `no_kms` varchar(200) NOT NULL,
  `local_transport` varchar(200) NOT NULL,
  `intercity_transport` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `food` varchar(200) NOT NULL,
  `postage` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  `faculty_id` varchar(200) NOT NULL,
  `schedule_id` varchar(200) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `city` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_faculty_schedulebk`
--

INSERT INTO `skillistic_faculty_schedulebk` (`id`, `sdate`, `no_kms`, `local_transport`, `intercity_transport`, `room`, `food`, `postage`, `total`, `created_on`, `modified_on`, `faculty_id`, `schedule_id`, `institute_id`, `filename`, `details`, `city`) VALUES
(1, '2019-06-04', '0', '20', '0', '0', '90', '0', 'NaN', '2019-06-04 21:32:50', '2019-06-04 21:32:50', '', '28', 1, '', '', '86'),
(2, '2019-06-04', '17', '267', '1167', '1000', '300', '665', '3433.00', '2019-06-04 23:14:33', '2019-06-04 23:14:33', '1', '28', 1, 'AppointmentReciept_1559670273.pdf', 'MAMNAB qgdqahklqis', '86'),
(3, '0000-00-00', '2', '3', '1', '5', '5', '9', '27.00', '2019-06-05 11:46:00', '2019-06-05 11:46:00', '1', '', 0, 'cover_1559715360.jpg', 'samp', ''),
(4, '2019-06-04', '5', '3', '2', '6', '5', '7', '33.00', '2019-06-05 11:48:39', '2019-06-05 11:48:39', '1', '28', 1, 'earth_1559715519.jpg', 'samp2\r\n', '86');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_faculty_scheduleold`
--

CREATE TABLE `skillistic_faculty_scheduleold` (
  `id` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `transport_type` varchar(200) NOT NULL,
  `no_kms` varchar(200) NOT NULL,
  `cost_transport` varchar(200) NOT NULL,
  `intercity_transport` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `food` varchar(200) NOT NULL,
  `postage` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  `faculty_id` varchar(200) NOT NULL,
  `schedule_id` varchar(200) NOT NULL,
  `institute_id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `mode_tr` varchar(200) NOT NULL,
  `details` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_institute`
--

CREATE TABLE `skillistic_institute` (
  `id` int(11) NOT NULL,
  `inst_name` varchar(200) NOT NULL,
  `address` longtext NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  `zones` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_institute`
--

INSERT INTO `skillistic_institute` (`id`, `inst_name`, `address`, `state`, `district`, `city`, `email_id`, `mobile_no`, `cname`, `details`, `status`, `created_on`, `modified_on`, `zones`) VALUES
(1, 'sample 1.1d42d', 'f44fes', '59', '23', '86', 'asd@wdfvb.com', 567890876543, 'JWQFGUYWJ', '43f5ghy6uj7', 1, '2019-06-11 07:18:32', '0000-00-00 00:00:00', '4');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_institutebk`
--

CREATE TABLE `skillistic_institutebk` (
  `id` int(11) NOT NULL,
  `inst_name` varchar(200) NOT NULL,
  `address` longtext NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  `zones` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_institutebk`
--

INSERT INTO `skillistic_institutebk` (`id`, `inst_name`, `address`, `state`, `district`, `city`, `email_id`, `mobile_no`, `cname`, `details`, `status`, `created_on`, `modified_on`, `zones`) VALUES
(1, 'Nalandha high school', 'Nyakal road, surya nagar , 503001', '59', '23', '86', '', 0, 'p.padmavthi', '', 1, '2019-06-04 18:57:32', '0000-00-00 00:00:00', '4'),
(2, 'Dr. KLP Public School', 'Flat No. 101, Sita Homes, 6/19, Brodipet, Guntur.', '58', '9', '87', 'abhilashgpn@gmail.com', 8333822567, 'g ug', 'LKG to 5, techni series', 1, '2019-06-04 22:27:44', '2019-06-04 22:28:46', '1'),
(3, 'RRR', 'Nallappadu', '58', '9', '87', 'vfhhh@gmail.com', 8333822567, 'g ug', 'dpep', 0, '2019-06-04 22:35:25', '0000-00-00 00:00:00', '1'),
(4, 'hggccf ', 'm,n bjhkjjlijk', '58', '9', '87', 'abhilashgpn@gmail.com', 8333822567, ' j h j', 'vvvj', 0, '2019-06-04 22:37:46', '0000-00-00 00:00:00', '1'),
(5, 'nb bvv23456789i', 'mn bmnbk , ,m', '58', '9', '87', 'abhilashgpn@gmail.com', 8333822567, 'nb nvjgvhjbjknjlkm', 'mnbkjh kh,jj l', 0, '2019-06-04 22:40:23', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_master`
--

CREATE TABLE `skillistic_master` (
  `id` int(11) NOT NULL,
  `master_name` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_master`
--

INSERT INTO `skillistic_master` (`id`, `master_name`, `status`, `uploaded_on`) VALUES
(1, 'Category', 1, '2019-05-11 18:00:00'),
(2, 'Zones', 1, '2019-05-11 19:00:00'),
(3, 'Designation', 1, '2019-05-11 17:00:00'),
(4, 'District', 1, '2019-05-11 17:00:00'),
(5, 'City', 1, '2019-05-11 19:00:00'),
(6, 'Payment Per Km', 1, '2019-05-25 13:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_masterdata`
--

CREATE TABLE `skillistic_masterdata` (
  `id` int(11) NOT NULL,
  `master_type` varchar(200) NOT NULL,
  `catid` int(11) NOT NULL,
  `master_value` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_masterdata`
--

INSERT INTO `skillistic_masterdata` (`id`, `master_type`, `catid`, `master_value`, `status`, `created_on`) VALUES
(1, 'Zones', 60, 'Guntur', 1, '2019-05-28 10:55:00'),
(2, 'Zones', 58, 'Kadapa', 1, '2019-05-28 10:56:13'),
(3, 'Zones', 58, 'Visakhapatnam', 1, '2019-05-28 10:56:13'),
(4, 'Zones', 59, 'Hydearabad', 1, '2019-05-28 10:56:28'),
(9, 'District', 1, 'Guntur', 1, '2019-05-28 13:38:20'),
(70, 'District', 3, 'vijayanagaram', 1, '2019-05-29 14:02:12'),
(11, 'District', 1, 'khammam', 1, '2019-05-28 13:47:54'),
(12, 'District', 1, 'krishna', 1, '2019-05-28 13:47:54'),
(13, 'District', 1, 'prakasam', 1, '2019-05-28 13:47:54'),
(14, 'District', 1, 'warangal', 1, '2019-05-28 13:51:57'),
(69, 'District', 3, 'visakhapatnam', 1, '2019-05-29 14:02:12'),
(16, 'District', 2, 'kadapa', 1, '2019-05-28 13:53:23'),
(17, 'District', 2, 'kurnool', 1, '2019-05-28 13:53:23'),
(18, 'District', 2, 'Chittoor ', 1, '2019-05-28 13:53:23'),
(19, 'District', 2, 'Anantapuram', 1, '2019-05-28 13:53:23'),
(20, 'District', 2, 'nellore', 1, '2019-05-28 13:59:01'),
(22, 'District', 4, 'Hyderabad', 1, '2019-05-28 13:59:01'),
(23, 'District', 4, 'nizamabad', 1, '2019-05-28 13:59:01'),
(24, 'District', 4, 'nalgonda', 1, '2019-05-28 13:59:01'),
(25, 'District', 4, 'mahabubnagar', 1, '2019-05-28 14:00:25'),
(26, 'District', 4, 'rangareddy', 1, '2019-05-28 14:00:25'),
(27, 'District', 4, 'adilabad', 1, '2019-05-28 14:00:26'),
(28, 'District', 4, 'Karimnagar', 1, '2019-05-28 14:00:26'),
(29, 'District', 4, 'medak', 1, '2019-05-28 14:00:26'),
(73, 'District', 3, 'west godavari', 1, '2019-05-29 14:02:12'),
(71, 'District', 3, 'srikakulam', 1, '2019-05-29 14:02:12'),
(72, 'District', 3, 'east godavari', 1, '2019-05-29 14:02:12'),
(61, 'City', 9, 'guntur', 1, '2019-05-28 18:08:06'),
(58, 'State', 0, 'AP', 1, '0000-00-00 00:00:00'),
(59, 'State', 0, 'Telangana', 1, '0000-00-00 00:00:00'),
(60, 'State', 0, 'AP & Telangana', 1, '0000-00-00 00:00:00'),
(62, 'Designation', 0, 'Faculty Trainer', 1, '2019-05-29 12:14:09'),
(63, 'Designation', 0, 'Zone Incharge', 1, '2019-05-29 12:14:09'),
(86, 'City', 23, 'Nizambad', 1, '2019-06-04 18:55:43'),
(87, 'City', 9, 'Narasaraopet', 1, '2019-06-04 22:00:35'),
(88, 'Zones', 60, 'Admin', 1, '2019-06-04 22:14:10'),
(89, 'Designation', 0, 'Admin Panal', 1, '2019-06-04 22:16:50'),
(90, 'City', 9, 'Bapatla', 1, '2019-06-11 11:29:29'),
(91, 'City', 9, 'Durgi', 1, '2019-06-11 11:30:57'),
(92, 'City', 9, 'Vinukonda', 1, '2019-06-11 11:30:57'),
(93, 'City', 9, 'Nuzendla', 1, '2019-06-11 11:30:57'),
(94, 'City', 9, 'Turumella', 1, '2019-06-11 11:30:57'),
(95, 'City', 9, 'Rompicherla	', 1, '2019-06-11 11:30:57'),
(96, 'City', 9, 'Bhattiprolu', 1, '2019-06-11 11:32:26'),
(97, 'City', 9, 'Cherukupalli', 1, '2019-06-11 11:32:26'),
(98, 'City', 9, 'Nizampatnam', 1, '2019-06-11 11:32:26'),
(99, 'City', 9, 'Ponnuru', 1, '2019-06-11 11:32:26'),
(100, 'City', 9, 'Amruthalur', 1, '2019-06-11 11:32:26'),
(101, 'City', 27, 'Adilabad', 1, '2019-06-11 12:04:08'),
(102, 'City', 27, 'Asifabad', 1, '2019-06-11 12:04:08'),
(103, 'City', 27, 'Bellampalle', 1, '2019-06-11 12:04:08'),
(104, 'City', 27, 'Bhainsa', 1, '2019-06-11 12:04:08'),
(105, 'City', 27, 'Chennur', 1, '2019-06-11 12:04:08'),
(106, 'City', 27, 'Dasnapur', 1, '2019-06-11 12:05:44'),
(107, 'City', 27, 'Devapur', 1, '2019-06-11 12:05:44'),
(108, 'City', 27, 'Ichoda', 1, '2019-06-11 12:05:44'),
(109, 'City', 27, 'Jainoor', 1, '2019-06-11 12:05:44'),
(110, 'City', 27, 'Kagaznagar', 1, '2019-06-11 12:05:44'),
(111, 'City', 27, 'Kasipet', 1, '2019-06-11 12:07:29'),
(112, 'City', 27, 'Kyathampalle', 1, '2019-06-11 12:07:29'),
(113, 'City', 27, 'Luxettipet', 1, '2019-06-11 12:07:29'),
(114, 'City', 27, 'Mancherial', 1, '2019-06-11 12:07:29'),
(115, 'City', 27, 'Mandamarri', 1, '2019-06-11 12:07:29'),
(116, 'City', 27, 'Naspur', 1, '2019-06-11 12:09:53'),
(117, 'City', 27, 'Nirmal', 1, '2019-06-11 12:09:53'),
(118, 'City', 27, 'Singapur', 1, '2019-06-11 12:09:53'),
(119, 'City', 27, 'Teegalpahad', 1, '2019-06-11 12:09:53'),
(120, 'City', 27, 'Thallapalle', 1, '2019-06-11 12:09:53'),
(121, 'City', 27, 'Thimmapur', 1, '2019-06-11 12:11:27'),
(122, 'City', 27, 'Utnur', 1, '2019-06-11 12:11:27'),
(123, 'City', 22, 'Osmania University', 1, '2019-06-11 12:13:17'),
(124, 'City', 22, 'Secunderabad', 1, '2019-06-11 12:13:17'),
(125, 'City', 28, 'Dharmaram (P .B)', 1, '2019-06-11 12:15:35'),
(126, 'City', 28, 'Jagtial', 1, '2019-06-11 12:15:35'),
(127, 'City', 28, 'Jallaram', 1, '2019-06-11 12:15:35'),
(128, 'City', 28, 'Karimnagar', 1, '2019-06-11 12:15:35'),
(129, 'City', 28, 'Koratla', 1, '2019-06-11 12:15:35'),
(130, 'City', 28, 'Metpalle', 1, '2019-06-11 12:17:00'),
(131, 'City', 28, 'Palakurthy', 1, '2019-06-11 12:17:00'),
(132, 'City', 28, 'Peddapalle', 1, '2019-06-11 12:17:00'),
(133, 'City', 28, 'Ramagundam', 1, '2019-06-11 12:17:00'),
(134, 'City', 28, 'Ratnapur', 1, '2019-06-11 12:17:00'),
(135, 'City', 28, 'Rekurthi', 1, '2019-06-11 12:18:43'),
(136, 'City', 28, 'Sircilla', 1, '2019-06-11 12:18:43'),
(137, 'City', 28, 'Vemulawada R', 1, '2019-06-11 12:18:43'),
(138, 'City', 25, 'Achampet', 1, '2019-06-11 12:20:41'),
(139, 'City', 25, 'Atmakur', 1, '2019-06-11 12:20:41'),
(140, 'City', 25, 'Badepalle', 1, '2019-06-11 12:20:41'),
(141, 'City', 25, 'Boyapalle', 1, '2019-06-11 12:20:41'),
(142, 'City', 25, 'Chinnachintakunta', 1, '2019-06-11 12:20:41'),
(143, 'City', 25, 'Farooqnagar', 1, '2019-06-11 12:22:03'),
(144, 'City', 25, 'Gadwal', 1, '2019-06-11 12:22:03'),
(145, 'City', 25, 'Jadcherla', 1, '2019-06-11 12:22:03'),
(146, 'City', 25, 'Kalwakurthy', 1, '2019-06-11 12:22:03'),
(147, 'City', 25, 'Kothakota', 1, '2019-06-11 12:22:03'),
(148, 'City', 25, 'Kothur', 1, '2019-06-11 12:23:52'),
(149, 'City', 25, 'Mahbubnagar', 1, '2019-06-11 12:23:52'),
(150, 'City', 25, 'Nagarkurnool', 1, '2019-06-11 12:23:52'),
(151, 'City', 25, 'Narayanpet', 1, '2019-06-11 12:23:52'),
(152, 'City', 25, 'Tangapur', 1, '2019-06-11 12:23:52'),
(153, 'City', 25, 'Vatwarlapalle', 1, '2019-06-11 12:25:05'),
(154, 'City', 25, 'Wanaparthy', 1, '2019-06-11 12:25:05'),
(155, 'City', 25, 'Yenugonda', 1, '2019-06-11 12:25:05'),
(156, 'City', 29, 'Allipur', 1, '2019-06-11 12:29:18'),
(157, 'City', 29, 'Ameenapur', 1, '2019-06-11 12:29:18'),
(158, 'City', 29, 'Annaram', 1, '2019-06-11 12:29:18'),
(159, 'City', 29, 'Bhanur', 1, '2019-06-11 12:29:18'),
(160, 'City', 29, 'Bollaram', 1, '2019-06-11 12:29:18'),
(161, 'City', 29, 'Bonthapalle', 1, '2019-06-11 12:31:10'),
(162, 'City', 29, 'Chegunta', 1, '2019-06-11 12:31:10'),
(163, 'City', 29, 'Chitkul', 1, '2019-06-11 12:31:10'),
(164, 'City', 29, 'Eddumailaram', 1, '2019-06-11 12:31:10'),
(165, 'City', 29, 'Gajwel', 1, '2019-06-11 12:31:10'),
(166, 'City', 29, 'Isnapur', 1, '2019-06-11 12:32:29'),
(167, 'City', 29, 'Jogipet', 1, '2019-06-11 12:32:29'),
(168, 'City', 29, 'Medak', 1, '2019-06-11 12:32:29'),
(169, 'City', 29, 'Muthangi', 1, '2019-06-11 12:32:29'),
(170, 'City', 29, 'Narayankhed', 1, '2019-06-11 12:32:29'),
(171, 'City', 29, 'Narsapur', 1, '2019-06-11 12:34:40'),
(172, 'City', 29, 'Pothreddipallem', 1, '2019-06-11 12:34:40'),
(173, 'City', 29, 'Ramachandrapuram BHEL Township', 1, '2019-06-11 12:34:40'),
(174, 'City', 29, 'Sadasivpet', 1, '2019-06-11 12:34:40'),
(175, 'City', 29, 'Sangareddy', 1, '2019-06-11 12:34:40'),
(176, 'City', 29, 'Shankarampet A', 1, '2019-06-11 12:35:41'),
(177, 'City', 29, 'Siddipet', 1, '2019-06-11 12:35:41'),
(178, 'City', 29, 'Zahirabad', 1, '2019-06-11 12:35:41'),
(179, 'City', 24, 'Bhongir', 1, '2019-06-11 12:37:13'),
(180, 'City', 24, 'Bibinagar', 1, '2019-06-11 12:37:13'),
(181, 'City', 24, 'Chandur', 1, '2019-06-11 12:37:13'),
(182, 'City', 24, 'Chityala', 1, '2019-06-11 12:37:13'),
(183, 'City', 24, 'Choutuppal', 1, '2019-06-11 12:37:13'),
(184, 'City', 24, 'Devarakonda', 1, '2019-06-11 12:38:43'),
(185, 'City', 24, 'Kodad', 1, '2019-06-11 12:38:43'),
(186, 'City', 24, 'Kondamallapalle', 1, '2019-06-11 12:38:43'),
(187, 'City', 24, 'Miryalaguda', 1, '2019-06-11 12:38:43'),
(188, 'City', 24, 'Nakrekal', 1, '2019-06-11 12:38:43'),
(189, 'City', 24, 'Nalgonda', 1, '2019-06-11 12:40:26'),
(190, 'City', 24, 'Pochampalle', 1, '2019-06-11 12:40:26'),
(191, 'City', 24, 'Raghunathpur', 1, '2019-06-11 12:40:26'),
(192, 'City', 24, 'Ramannapeta', 1, '2019-06-11 12:40:26'),
(193, 'City', 24, 'Suryapet', 1, '2019-06-11 12:40:26'),
(194, 'City', 24, 'Vijayapuri North', 1, '2019-06-11 12:41:35'),
(195, 'City', 24, 'Yadagirigutta', 1, '2019-06-11 12:41:35'),
(196, 'City', 23, 'Armur', 1, '2019-06-11 12:43:00'),
(197, 'City', 23, 'Banswada', 1, '2019-06-11 12:43:00'),
(198, 'City', 23, 'Bodhan', 1, '2019-06-11 12:43:00'),
(199, 'City', 23, 'Ghanpur', 1, '2019-06-11 12:43:00'),
(200, 'City', 23, 'Kamareddy', 1, '2019-06-11 12:43:00'),
(201, 'City', 23, 'Nizamabad', 1, '2019-06-11 12:44:35'),
(202, 'City', 23, 'Soanpet', 1, '2019-06-11 12:44:35'),
(203, 'City', 23, 'Yellareddy', 1, '2019-06-11 12:44:35'),
(204, 'City', 26, 'Bachpalle', 1, '2019-06-11 12:47:23'),
(205, 'City', 26, 'Badangpet', 1, '2019-06-11 12:47:23'),
(206, 'City', 26, 'Bandlaguda (Jagir)', 1, '2019-06-11 12:47:23'),
(207, 'City', 26, 'Boduppal', 1, '2019-06-11 12:47:23'),
(208, 'City', 26, 'Dundigal', 1, '2019-06-11 12:47:23'),
(209, 'City', 26, 'Ghatkesar', 1, '2019-06-11 12:53:48'),
(210, 'City', 26, 'Ibrahimpatnam (Bagath)', 1, '2019-06-11 12:53:48'),
(211, 'City', 26, 'Jawaharnagar', 1, '2019-06-11 12:53:48'),
(212, 'City', 26, 'Jillalguda ', 1, '2019-06-11 12:53:48'),
(213, 'City', 26, 'Kismatpur', 1, '2019-06-11 12:53:48'),
(214, 'City', 26, 'Kompalle', 1, '2019-06-11 12:55:05'),
(215, 'City', 26, 'Kothapet', 1, '2019-06-11 12:55:05'),
(216, 'City', 26, 'Medchal', 1, '2019-06-11 12:55:05'),
(217, 'City', 26, 'Medipalle', 1, '2019-06-11 12:55:05'),
(218, 'City', 26, 'Meerpet', 1, '2019-06-11 12:55:05'),
(219, 'City', 26, 'Nagaram', 1, '2019-06-11 12:57:55'),
(220, 'City', 26, 'Narsingi', 1, '2019-06-11 12:57:55'),
(221, 'City', 26, 'Navandgi', 1, '2019-06-11 12:57:55'),
(222, 'City', 26, 'Omerkhan Daira', 1, '2019-06-11 12:57:55'),
(223, 'City', 26, 'Peerzadguda', 1, '2019-06-11 12:57:55'),
(224, 'City', 26, 'Shamshabad', 1, '2019-06-11 12:59:26'),
(225, 'City', 26, 'Tandur', 1, '2019-06-11 12:59:26'),
(226, 'City', 26, 'Turkayamjal', 1, '2019-06-11 12:59:26'),
(227, 'City', 26, 'Vikarabad', 1, '2019-06-11 12:59:26'),
(228, 'City', 11, 'Ballepalle', 1, '2019-06-11 13:03:10'),
(229, 'City', 11, 'Bhadrachalam', 1, '2019-06-11 13:03:10'),
(230, 'City', 11, 'Chunchupalle', 1, '2019-06-11 13:03:10'),
(231, 'City', 11, 'Garimellapadu', 1, '2019-06-11 13:03:10'),
(232, 'City', 11, 'Khammam', 1, '2019-06-11 13:03:10'),
(233, 'City', 11, 'Khanapuram Haveli', 1, '2019-06-11 13:04:46'),
(234, 'City', 11, 'Kothagudem', 1, '2019-06-11 13:04:46'),
(235, 'City', 11, 'Laxmidevipalle', 1, '2019-06-11 13:04:46'),
(236, 'City', 11, 'Madhira', 1, '2019-06-11 13:04:46'),
(237, 'City', 11, 'Manugur', 1, '2019-06-11 13:04:46'),
(238, 'City', 11, 'Palwancha', 1, '2019-06-11 13:06:36'),
(239, 'City', 11, 'Sarapaka', 1, '2019-06-11 13:06:36'),
(240, 'City', 11, 'Sathupalle', 1, '2019-06-11 13:06:36'),
(241, 'City', 11, 'Yellandu', 1, '2019-06-11 13:06:36'),
(242, 'City', 14, 'Bhimaram', 1, '2019-06-11 13:10:07'),
(243, 'City', 14, 'Bhupalpalle', 1, '2019-06-11 13:10:07'),
(244, 'City', 14, 'Dornakal', 1, '2019-06-11 13:10:07'),
(245, 'City', 14, 'Enumamula', 1, '2019-06-11 13:10:07'),
(246, 'City', 14, 'Ghanpur Station', 1, '2019-06-11 13:10:07'),
(247, 'City', 14, 'Gorrekunta', 1, '2019-06-11 13:12:26'),
(248, 'City', 14, 'Jangaon', 1, '2019-06-11 13:12:26'),
(249, 'City', 14, 'Kadipikonda', 1, '2019-06-11 13:12:26'),
(250, 'City', 14, 'Kamalapuram', 1, '2019-06-11 13:12:26'),
(251, 'City', 14, 'Mahabubabad', 1, '2019-06-11 13:12:26'),
(252, 'City', 14, 'Mamnoor', 1, '2019-06-11 13:15:15'),
(253, 'City', 14, 'Narsampet', 1, '2019-06-11 13:15:15'),
(254, 'City', 14, 'Shivunipalle', 1, '2019-06-11 13:15:15'),
(255, 'City', 14, 'Thorrur', 1, '2019-06-11 13:15:15'),
(256, 'City', 14, 'Warangal', 1, '2019-06-11 13:15:15'),
(257, 'City', 16, 'Atlur', 1, '2019-06-11 17:11:32'),
(258, 'City', 16, 'B.Kodur', 1, '2019-06-11 17:11:32'),
(259, 'City', 16, 'Badvel', 1, '2019-06-11 17:11:32'),
(260, 'City', 16, 'Brahmamgarimatham', 1, '2019-06-11 17:11:32'),
(261, 'City', 16, 'Chakrayapet', 1, '2019-06-11 17:11:32'),
(262, 'City', 16, 'Chapadu', 1, '2019-06-11 17:12:44'),
(263, 'City', 16, 'Duvvur', 1, '2019-06-11 17:20:35'),
(264, 'City', 16, 'Galiveedu', 1, '2019-06-11 17:20:35'),
(265, 'City', 16, 'Gopavaram', 1, '2019-06-11 17:20:35'),
(266, 'City', 16, 'Jammalamadugu', 1, '2019-06-11 17:20:35'),
(267, 'City', 16, 'Kalasapadu', 1, '2019-06-11 17:20:35'),
(268, 'City', 16, 'Chitebel', 1, '2019-06-11 17:26:16'),
(269, 'City', 20, 'Allur', 1, '2019-06-11 18:03:18'),
(270, 'City', 20, 'Ananthasagaram', 1, '2019-06-11 18:03:18'),
(271, 'City', 20, 'Anumasamudrampeta', 1, '2019-06-11 18:03:18'),
(272, 'City', 20, 'Nellore', 1, '2019-06-11 18:11:36'),
(273, 'City', 20, 'Kaluvoya', 1, '2019-06-11 18:11:36'),
(274, 'City', 20, 'Pellakur', 1, '2019-06-11 18:11:36'),
(275, 'City', 20, 'Manubolu', 1, '2019-06-11 18:11:36'),
(276, 'City', 20, 'Tada', 1, '2019-06-11 18:11:36'),
(277, 'City', 20, 'Bitragunta', 1, '2019-06-11 18:12:58'),
(278, 'City', 20, 'Vidavalur', 1, '2019-06-11 18:12:58'),
(279, 'City', 20, 'Gudur', 1, '2019-06-11 18:12:58'),
(280, 'City', 20, 'Marripadu', 1, '2019-06-11 18:12:58'),
(281, 'City', 20, 'Kavali', 1, '2019-06-11 18:12:58'),
(282, 'City', 20, 'Damavaram', 1, '2019-06-11 18:14:38'),
(283, 'City', 20, 'Allur Mandalam', 1, '2019-06-11 18:14:38'),
(284, 'City', 20, 'Podlakur', 1, '2019-06-11 18:14:38'),
(285, 'City', 20, 'Venkatagiri	', 1, '2019-06-11 18:14:38'),
(286, 'City', 20, 'Revur', 1, '2019-06-11 18:14:38'),
(287, 'City', 20, 'Sydapuram', 1, '2019-06-11 18:16:51'),
(288, 'City', 20, 'Muthukur', 1, '2019-06-11 18:16:51'),
(289, 'City', 20, 'Siddanakonduru', 1, '2019-06-11 18:16:51'),
(290, 'City', 20, 'Sullurpeta', 1, '2019-06-11 18:16:51'),
(291, 'City', 20, 'Survepalli', 1, '2019-06-11 18:16:51'),
(292, 'City', 20, 'Naidupeta', 1, '2019-06-11 18:17:57'),
(293, 'City', 20, 'Nayudupeta', 1, '2019-06-11 18:21:31'),
(294, 'City', 20, 'Virur', 1, '2019-06-11 18:21:31'),
(295, 'City', 20, 'Chillakur', 1, '2019-06-11 18:21:31'),
(296, 'City', 20, 'Vakadu', 1, '2019-06-11 18:21:31'),
(297, 'City', 20, 'Udayagiri', 1, '2019-06-11 18:21:31'),
(298, 'City', 20, 'Seetharamapuram', 1, '2019-06-11 18:22:53'),
(299, 'City', 20, 'Chittamuru', 1, '2019-06-11 18:22:53'),
(300, 'City', 20, 'Vojili', 1, '2019-06-11 18:22:53'),
(301, 'City', 20, 'Gandipalem', 1, '2019-06-11 18:22:53'),
(302, 'City', 20, 'Karatampadu', 1, '2019-06-11 18:22:53'),
(303, 'City', 20, 'Vinjamur', 1, '2019-06-11 18:24:09'),
(304, 'City', 20, 'Nandipadu', 1, '2019-06-11 18:24:09'),
(305, 'City', 20, 'Dagadarthi', 1, '2019-06-11 18:24:09'),
(306, 'City', 20, 'Kodavaluru', 1, '2019-06-11 18:24:09'),
(307, 'City', 20, 'Rapur', 1, '2019-06-11 18:24:09'),
(308, 'City', 20, 'Buchireddypalem', 1, '2019-06-11 18:25:29'),
(309, 'City', 20, 'Dakkili', 1, '2019-06-11 18:26:55'),
(310, 'City', 20, 'Chakalakonda', 1, '2019-06-11 18:26:55'),
(311, 'City', 20, 'Chittamur', 1, '2019-06-11 18:26:55'),
(312, 'City', 20, 'Buchireddipalem', 1, '2019-06-11 18:26:55'),
(313, 'City', 20, 'Venkatachalam', 1, '2019-06-11 18:26:55'),
(314, 'City', 20, 'Kovur', 1, '2019-06-11 18:28:11'),
(315, 'City', 20, 'Kaligiri', 1, '2019-06-11 18:28:11'),
(316, 'City', 20, 'Varikuntapadu', 1, '2019-06-11 18:28:11'),
(317, 'City', 20, 'Kondapuram', 1, '2019-06-11 18:28:11'),
(318, 'City', 20, 'Kodavalur', 1, '2019-06-11 18:28:11'),
(319, 'City', 20, 'Doravarisatram', 1, '2019-06-11 18:30:14'),
(320, 'City', 20, 'Buchireddypalem Mandalam', 1, '2019-06-11 18:30:14'),
(321, 'City', 20, 'Thotapalligudur', 1, '2019-06-11 18:30:14'),
(322, 'City', 20, 'Gandavaram', 1, '2019-06-11 18:30:14'),
(323, 'City', 20, 'Mypadu', 1, '2019-06-11 18:30:14'),
(324, 'City', 20, 'Gumparlapadu', 1, '2019-06-11 18:31:09'),
(325, 'City', 20, 'Indukurpet', 1, '2019-06-11 18:31:09'),
(326, 'City', 20, 'Brahmadevam', 1, '2019-06-11 18:31:09'),
(327, 'City', 16, 'Yerraguntla', 1, '2019-06-12 10:56:46'),
(328, 'City', 16, 'Vontimitta', 1, '2019-06-12 10:56:46'),
(329, 'City', 16, 'Vemula', 1, '2019-06-12 10:56:46'),
(330, 'City', 16, 'Vempalle', 1, '2019-06-12 10:56:46'),
(331, 'City', 16, 'Veerapanayani palle', 1, '2019-06-12 10:56:46'),
(332, 'City', 16, 'Veerabali', 1, '2019-06-12 10:58:30'),
(333, 'City', 16, 'Vallur', 1, '2019-06-12 10:58:30'),
(334, 'City', 16, 'Thondur', 1, '2019-06-12 10:58:30'),
(335, 'City', 16, 'T.Sundupalle', 1, '2019-06-12 10:58:30'),
(336, 'City', 16, 'Sri Avadhuta Kasinayana', 1, '2019-06-12 10:58:30'),
(337, 'City', 16, 'Simhadripuram', 1, '2019-06-12 11:00:00'),
(338, 'City', 16, 'Sidhout', 1, '2019-06-12 11:00:00'),
(339, 'City', 16, 'Sambepalle', 1, '2019-06-12 11:00:00'),
(340, 'City', 16, 'Rayachoty', 1, '2019-06-12 11:00:00'),
(341, 'City', 16, 'Ramapuram', 1, '2019-06-12 11:00:00'),
(342, 'City', 16, 'Rajupalem', 1, '2019-06-12 11:01:44'),
(343, 'City', 16, 'Rajampet', 1, '2019-06-12 11:01:44'),
(344, 'City', 16, 'Pullampeta', 1, '2019-06-12 11:01:44'),
(345, 'City', 16, 'Pulivendla', 1, '2019-06-12 11:01:44'),
(346, 'City', 16, 'Proddatur', 1, '2019-06-12 11:01:44'),
(347, 'City', 16, 'Porumamilla', 1, '2019-06-12 11:03:12'),
(348, 'City', 16, 'Pendlimarri', 1, '2019-06-12 11:03:12'),
(349, 'City', 16, 'Penagalur', 1, '2019-06-12 11:03:12'),
(350, 'City', 16, 'Peddamudium', 1, '2019-06-12 11:03:12'),
(351, 'City', 16, 'Obulavaripalle', 1, '2019-06-12 11:03:12'),
(352, 'City', 16, 'Nandalur', 1, '2019-06-12 11:04:35'),
(353, 'City', 16, 'Mylavaram', 1, '2019-06-12 11:04:35'),
(354, 'City', 16, 'Mydukur', 1, '2019-06-12 11:04:35'),
(355, 'City', 16, 'Muddanur', 1, '2019-06-12 11:04:35'),
(356, 'City', 16, 'Lingala', 1, '2019-06-12 11:04:35'),
(357, 'City', 16, 'Lakkireddipalle', 1, '2019-06-12 11:05:49'),
(358, 'City', 17, 'Kurnool', 1, '2019-06-12 11:09:06'),
(359, 'City', 17, 'Nandyal', 1, '2019-06-12 11:09:06'),
(360, 'City', 17, 'Banaganapalli', 1, '2019-06-12 11:09:06'),
(361, 'City', 17, 'Allagadda', 1, '2019-06-12 11:09:06'),
(362, 'City', 17, 'Koilkuntla', 1, '2019-06-12 11:09:06'),
(363, 'City', 17, 'Adoni', 1, '2019-06-12 11:10:31'),
(364, 'City', 17, 'Sirvel', 1, '2019-06-12 11:10:31'),
(365, 'City', 17, 'Bugganipalle', 1, '2019-06-12 11:10:31'),
(366, 'City', 17, 'Alur', 1, '2019-06-12 11:10:31'),
(367, 'City', 17, 'Aspari', 1, '2019-06-12 11:10:31'),
(368, 'City', 17, 'Bandi Atmakur', 1, '2019-06-12 11:11:39'),
(369, 'City', 17, 'Bethamcherla', 1, '2019-06-12 11:11:39'),
(370, 'City', 17, 'C.Belagal', 1, '2019-06-12 11:11:39'),
(371, 'City', 17, 'Chagalamarri', 1, '2019-06-12 11:11:39'),
(372, 'City', 17, 'Chippagiri', 1, '2019-06-12 11:11:39'),
(373, 'City', 17, 'Devanakonda', 1, '2019-06-12 11:12:31'),
(374, 'City', 17, 'Dhone', 1, '2019-06-12 11:12:31'),
(375, 'City', 17, 'Dornipadu', 1, '2019-06-12 11:12:31'),
(376, 'City', 17, 'Gadivemula', 1, '2019-06-12 11:12:31'),
(377, 'City', 17, 'Gonegandla', 1, '2019-06-12 11:12:31'),
(378, 'City', 17, 'Gospadu', 1, '2019-06-12 11:13:51'),
(379, 'City', 17, 'Halaharvi', 1, '2019-06-12 11:13:51'),
(380, 'City', 17, 'Holagunda', 1, '2019-06-12 11:13:51'),
(381, 'City', 17, 'Jupadu Bungalow', 1, '2019-06-12 11:13:51'),
(382, 'City', 17, 'Kallur', 1, '2019-06-12 11:13:51'),
(383, 'City', 17, 'Kodumur', 1, '2019-06-12 11:15:18'),
(384, 'City', 17, 'Kolimigundla', 1, '2019-06-12 11:15:18'),
(385, 'City', 17, 'Kosigi', 1, '2019-06-12 11:15:18'),
(386, 'City', 17, 'Kothapalle', 1, '2019-06-12 11:15:18'),
(387, 'City', 17, 'Kowthalam', 1, '2019-06-12 11:15:18'),
(388, 'City', 17, 'Krishnagiri', 1, '2019-06-12 11:17:54'),
(389, 'City', 17, 'Maddikera East', 1, '2019-06-12 11:17:54'),
(390, 'City', 17, 'Mahanandi', 1, '2019-06-12 11:17:54'),
(391, 'City', 17, 'Mantralayam', 1, '2019-06-12 11:17:54'),
(392, 'City', 17, 'Midthur', 1, '2019-06-12 11:17:54'),
(393, 'City', 17, 'Nandavaram', 1, '2019-06-12 11:18:53'),
(394, 'City', 17, 'Nandi Kotkur', 1, '2019-06-12 11:18:53'),
(395, 'City', 17, 'Orvakal', 1, '2019-06-12 11:18:53'),
(396, 'City', 17, 'Owk', 1, '2019-06-12 11:18:53'),
(397, 'City', 17, 'Pagidyala', 1, '2019-06-12 11:18:53'),
(398, 'City', 17, 'Pamulapadu', 1, '2019-06-12 11:23:35'),
(399, 'City', 17, 'Panyam', 1, '2019-06-12 11:23:35'),
(400, 'City', 17, 'Pattikanda', 1, '2019-06-12 11:23:35'),
(401, 'City', 17, 'Peapally', 1, '2019-06-12 11:23:35'),
(402, 'City', 17, 'Pedda Kadubur	', 1, '2019-06-12 11:23:35'),
(403, 'City', 17, 'Rudravaram', 1, '2019-06-12 11:24:40'),
(404, 'City', 17, 'Sanjamala', 1, '2019-06-12 11:24:40'),
(405, 'City', 17, 'Srisailam', 1, '2019-06-12 11:24:40'),
(406, 'City', 17, 'Tuggali', 1, '2019-06-12 11:24:40'),
(407, 'City', 17, 'Uyyalawada', 1, '2019-06-12 11:24:40'),
(408, 'City', 17, 'Velgodu', 1, '2019-06-12 11:25:17'),
(409, 'City', 17, 'Yemmiganur', 1, '2019-06-12 11:25:17'),
(410, 'City', 18, 'Chittoor', 1, '2019-06-12 11:29:02'),
(411, 'City', 18, 'Palamaner', 1, '2019-06-12 11:29:02'),
(412, 'City', 18, 'Tirupati Rural', 1, '2019-06-12 11:29:02'),
(413, 'City', 18, 'K.V.P.puram', 1, '2019-06-12 11:29:02'),
(414, 'City', 18, 'Nagari', 1, '2019-06-12 11:29:02'),
(415, 'City', 18, 'Pichatur', 1, '2019-06-12 11:29:55'),
(416, 'City', 18, 'Nindra', 1, '2019-06-12 11:29:55'),
(417, 'City', 18, 'Srikalahasti', 1, '2019-06-12 11:29:55'),
(418, 'City', 18, 'Madanapalle', 1, '2019-06-12 11:29:55'),
(419, 'City', 18, 'Pileru', 1, '2019-06-12 11:29:55'),
(420, 'City', 18, 'Puthalpattu', 1, '2019-06-12 11:30:50'),
(421, 'City', 18, 'Akkurthi', 1, '2019-06-12 11:30:50'),
(422, 'City', 18, 'Puttur', 1, '2019-06-12 11:30:50'),
(423, 'City', 18, 'Karvetinagar', 1, '2019-06-12 11:30:50'),
(424, 'City', 18, 'Satyavedu', 1, '2019-06-12 11:30:50'),
(425, 'City', 18, 'Gurramkonda', 1, '2019-06-12 11:31:46'),
(426, 'City', 18, 'Thottambedu', 1, '2019-06-12 11:31:46'),
(427, 'City', 18, 'Yerpedu', 1, '2019-06-12 11:31:46'),
(428, 'City', 18, 'Vadamalapeta', 1, '2019-06-12 11:31:46'),
(429, 'City', 18, 'Kalakada', 1, '2019-06-12 11:31:46'),
(430, 'City', 18, 'Arugonda', 1, '2019-06-12 11:34:10'),
(431, 'City', 18, 'Renigunta', 1, '2019-06-12 11:34:10'),
(432, 'City', 18, 'Chandragiri', 1, '2019-06-12 11:34:10'),
(433, 'City', 18, 'Vijaya Puram', 1, '2019-06-12 11:34:10'),
(434, 'City', 18, 'Murakambattu', 1, '2019-06-12 11:34:10'),
(435, 'City', 18, 'Gudi Palle', 1, '2019-06-12 11:36:49'),
(436, 'City', 18, 'Chinnagottigallu', 1, '2019-06-12 11:36:49'),
(437, 'City', 18, 'Tirupati Urban', 1, '2019-06-12 11:36:49'),
(438, 'City', 18, 'Bhakarapet', 1, '2019-06-12 11:36:49'),
(439, 'City', 18, 'Madanpalle', 1, '2019-06-12 11:36:49'),
(440, 'City', 18, 'Veduru Kuppam', 1, '2019-06-12 11:37:58'),
(441, 'City', 18, 'Kalikiri', 1, '2019-06-12 11:37:58'),
(442, 'City', 18, 'Pakala', 1, '2019-06-12 11:37:58'),
(443, 'City', 18, 'Varadaiahpalem', 1, '2019-06-12 11:37:58'),
(444, 'City', 18, 'Vayalpad', 1, '2019-06-12 11:37:58'),
(445, 'City', 18, 'Tirupati', 1, '2019-06-12 11:39:04'),
(446, 'City', 18, 'Damalacheruvu', 1, '2019-06-12 11:39:04'),
(447, 'City', 18, 'Vengalrajukuppam', 1, '2019-06-12 11:39:04'),
(448, 'City', 18, 'Kanipakam', 1, '2019-06-12 11:39:04'),
(449, 'City', 18, 'Irala', 1, '2019-06-12 11:39:04'),
(450, 'City', 18, 'Bangarupalem', 1, '2019-06-12 11:39:56'),
(451, 'City', 18, 'Kambhamvaripalle', 1, '2019-06-12 11:39:56'),
(452, 'City', 18, 'Pulicherla', 1, '2019-06-12 11:39:56'),
(453, 'City', 18, 'Venkata Krishna Puram', 1, '2019-06-12 11:39:56'),
(454, 'City', 18, 'Pannur', 1, '2019-06-12 11:39:56'),
(455, 'City', 18, 'B.Kothakota', 1, '2019-06-12 11:40:52'),
(456, 'City', 18, 'Baireddi Palle', 1, '2019-06-12 11:40:52'),
(457, 'City', 18, 'Buchinaidu Khandriga', 1, '2019-06-12 11:40:52'),
(458, 'City', 18, 'Chowdepalle', 1, '2019-06-12 11:40:52'),
(459, 'City', 18, 'Gangadhara Nellore', 1, '2019-06-12 11:40:52'),
(460, 'City', 18, 'Gudipala', 1, '2019-06-12 11:42:03'),
(461, 'City', 18, 'Mulakalacheruvu', 1, '2019-06-12 11:42:03'),
(462, 'City', 18, 'Nagalapuram', 1, '2019-06-12 11:42:03'),
(463, 'City', 18, 'Narayanavanam', 1, '2019-06-12 11:42:03'),
(464, 'City', 18, 'Nimmanapalle', 1, '2019-06-12 11:42:03'),
(465, 'City', 18, 'Palasamudram', 1, '2019-06-12 11:43:06'),
(466, 'City', 18, 'Pedda Panjani', 1, '2019-06-12 11:43:06'),
(467, 'City', 18, 'Peddamandyam', 1, '2019-06-12 11:43:06'),
(468, 'City', 18, 'Peddathippasamudram', 1, '2019-06-12 11:43:06'),
(469, 'City', 18, 'Penumuru', 1, '2019-06-12 11:43:06'),
(470, 'City', 18, 'Punganur', 1, '2019-06-12 11:44:03'),
(471, 'City', 18, 'Rama Kuppam', 1, '2019-06-12 11:44:03'),
(472, 'City', 18, 'Ramasamudram', 1, '2019-06-12 11:44:03'),
(473, 'City', 18, 'Santhi Puram', 1, '2019-06-12 11:44:03'),
(474, 'City', 18, 'Sodam', 1, '2019-06-12 11:44:03'),
(475, 'City', 18, 'Somala', 1, '2019-06-12 11:45:07'),
(476, 'City', 18, 'Srirangarajapuram', 1, '2019-06-12 11:45:07'),
(477, 'City', 18, 'Thamballapalle', 1, '2019-06-12 11:45:07'),
(478, 'City', 18, 'Thavanampalle', 1, '2019-06-12 11:45:07'),
(479, 'City', 18, 'Venkatagiri Kota', 1, '2019-06-12 11:45:07'),
(480, 'City', 18, 'Yadamari', 1, '2019-06-12 11:45:37'),
(481, 'City', 18, 'Yerravaripalem', 1, '2019-06-12 11:45:37'),
(482, 'City', 19, 'Gummagatta', 1, '2019-06-12 11:47:20'),
(483, 'City', 19, 'Kambadur', 1, '2019-06-12 11:47:20'),
(484, 'City', 19, 'Penukonda', 1, '2019-06-12 11:47:20'),
(485, 'City', 19, 'Agali	', 1, '2019-06-12 11:47:20'),
(486, 'City', 19, 'Amarapuram', 1, '2019-06-12 11:47:20'),
(487, 'City', 18, 'Bukkapatnam', 1, '2019-06-12 11:48:22'),
(488, 'City', 18, 'Singanamala', 1, '2019-06-12 11:48:22'),
(489, 'City', 18, 'Anantapur', 1, '2019-06-12 11:48:22'),
(490, 'City', 18, 'Kundurpi', 1, '2019-06-12 11:48:22'),
(491, 'City', 18, 'Tadipatri', 1, '2019-06-12 11:48:22'),
(492, 'City', 19, 'Amadagur', 1, '2019-06-12 11:49:30'),
(493, 'City', 19, 'Puttaparthi', 1, '2019-06-12 11:49:30'),
(494, 'City', 19, 'Madakasira', 1, '2019-06-12 11:49:30'),
(495, 'City', 19, 'Chennakothapalle', 1, '2019-06-12 11:49:30'),
(496, 'City', 19, 'Uravakonda', 1, '2019-06-12 11:49:30'),
(497, 'City', 19, 'Tadpatri', 1, '2019-06-12 11:50:29'),
(498, 'City', 19, 'Beluguppa', 1, '2019-06-12 11:50:29'),
(499, 'City', 19, 'Pamidi', 1, '2019-06-12 11:50:29'),
(500, 'City', 19, 'Peddavadugur', 1, '2019-06-12 11:50:29'),
(501, 'City', 19, 'Bathalapalli', 1, '2019-06-12 11:50:29'),
(502, 'City', 19, 'Ammalladinne', 1, '2019-06-12 11:51:43'),
(503, 'City', 19, 'Yellanur', 1, '2019-06-12 11:51:43'),
(504, 'City', 19, 'Tadimarri', 1, '2019-06-12 11:51:43'),
(505, 'City', 19, 'Rayadurg', 1, '2019-06-12 11:51:43'),
(506, 'City', 19, 'Shetturu', 1, '2019-06-12 11:51:43'),
(507, 'City', 19, 'Guntakal', 1, '2019-06-12 11:52:42'),
(508, 'City', 19, 'Dharmavaram', 1, '2019-06-12 11:52:42'),
(509, 'City', 19, 'Nallamada', 1, '2019-06-12 11:52:42'),
(510, 'City', 19, 'Tanakal', 1, '2019-06-12 11:52:42'),
(511, 'City', 19, 'Raptadu', 1, '2019-06-12 11:52:42'),
(512, 'City', 19, 'Narpala', 1, '2019-06-12 11:54:32'),
(513, 'City', 19, 'Kothacheruvu', 1, '2019-06-12 11:54:32'),
(514, 'City', 19, 'Gooty', 1, '2019-06-12 11:54:32'),
(515, 'City', 19, 'Kalyandurg', 1, '2019-06-12 11:54:32'),
(516, 'City', 19, 'Parigi', 1, '2019-06-12 11:54:32'),
(517, 'City', 19, 'Hindupur', 1, '2019-06-12 11:55:53'),
(518, 'City', 19, 'Kanaganapalli', 1, '2019-06-12 11:55:53'),
(519, 'City', 19, 'Chilamathur', 1, '2019-06-12 11:55:53'),
(520, 'City', 19, 'Brahma Samudram', 1, '2019-06-12 11:55:53'),
(521, 'City', 19, 'Lepakshi', 1, '2019-06-12 11:55:53'),
(522, 'City', 19, 'Bommanahal', 1, '2019-06-12 11:57:12'),
(523, 'City', 19, 'Gudibanda', 1, '2019-06-12 11:57:12'),
(524, 'City', 19, 'Nallacheruvu', 1, '2019-06-12 11:57:12'),
(525, 'City', 19, 'Obuladevara Cheruvu', 1, '2019-06-12 11:57:12'),
(526, 'City', 19, 'Peddapappur', 1, '2019-06-12 11:57:12'),
(527, 'City', 19, 'Kanekal', 1, '2019-06-12 11:58:15'),
(528, 'City', 19, 'Somandepalle', 1, '2019-06-12 11:58:15'),
(529, 'City', 19, 'Roddam', 1, '2019-06-12 11:58:15'),
(530, 'City', 19, 'Mudigubba', 1, '2019-06-12 11:58:15'),
(531, 'City', 19, 'Gorantla', 1, '2019-06-12 11:58:15'),
(532, 'City', 19, 'Bukkarayasamudram', 1, '2019-06-12 11:59:19'),
(533, 'City', 19, 'Vajrakarur', 1, '2019-06-12 11:59:19'),
(534, 'City', 19, 'Putlur', 1, '2019-06-12 11:59:19'),
(535, 'City', 19, 'Yadiki', 1, '2019-06-12 11:59:19'),
(536, 'City', 19, 'Vidapanakal', 1, '2019-06-12 11:59:19'),
(537, 'City', 19, 'Kadiri', 1, '2019-06-12 12:06:14'),
(538, 'City', 19, 'Kudair', 1, '2019-06-12 12:06:14'),
(539, 'City', 19, 'Rolla', 1, '2019-06-12 12:06:14'),
(540, 'City', 19, 'Nambulipuli Kunta', 1, '2019-06-12 12:06:14'),
(541, 'City', 19, 'Gandlapenta', 1, '2019-06-12 12:06:14'),
(542, 'City', 19, 'Talupula', 1, '2019-06-12 12:07:31'),
(543, 'City', 19, 'Ramagiri', 1, '2019-06-12 12:07:31'),
(544, 'City', 19, 'Garladinne', 1, '2019-06-12 12:07:31'),
(545, 'City', 19, 'Herial', 1, '2019-06-12 12:07:31'),
(546, 'City', 19, 'Vipanakal', 1, '2019-06-12 12:07:31'),
(547, 'City', 19, 'Amadaguru', 1, '2019-06-12 12:09:04'),
(548, 'City', 19, 'Bathalapalle', 1, '2019-06-12 12:09:04'),
(549, 'City', 19, 'Gummaghatta', 1, '2019-06-12 12:09:04'),
(550, 'City', 19, 'Obuladevacheruvu', 1, '2019-06-12 12:09:04'),
(551, 'City', 19, 'Ramgiri', 1, '2019-06-12 12:09:04'),
(552, 'City', 19, 'Prasanthinilayam', 1, '2019-06-12 12:10:22'),
(553, 'City', 19, 'Raadurg', 1, '2019-06-12 12:10:22'),
(554, 'City', 19, 'Kanaganapalle', 1, '2019-06-12 12:10:22'),
(555, 'City', 19, 'Puttaparthy', 1, '2019-06-12 12:10:22'),
(556, 'City', 17, '358', 1, '2019-06-15 16:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_payments`
--

CREATE TABLE `skillistic_payments` (
  `id` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `amt` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_payments`
--

INSERT INTO `skillistic_payments` (`id`, `pdate`, `amt`, `status`, `created_on`) VALUES
(1, '2019-05-12', '35', 0, '2019-05-12 20:42:04'),
(2, '2019-05-29', '0', 0, '2019-05-29 17:20:41'),
(3, '2019-05-31', '3', 0, '2019-05-31 11:42:30'),
(4, '2019-06-01', '2', 0, '2019-06-01 20:00:09'),
(5, '2019-06-03', '', 0, '2019-06-03 20:18:52'),
(6, '2019-06-04', '2', 0, '2019-06-04 22:03:17'),
(7, '2019-06-05', '9', 0, '2019-06-05 11:55:15'),
(8, '2019-06-11', '2', 1, '2019-06-11 07:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_ppt`
--

CREATE TABLE `skillistic_ppt` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `prgrm_title` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `ppt` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_programs`
--

CREATE TABLE `skillistic_programs` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `prgrm_title` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_programs`
--

INSERT INTO `skillistic_programs` (`id`, `category`, `prgrm_title`, `status`, `created_on`, `modified_on`) VALUES
(1, 'Techno', 'sample1', 1, '2019-05-29 17:36:57', '2019-05-29 17:46:37'),
(2, 'Hycon', 'hycon program', 1, '2019-05-30 17:21:41', '2019-05-30 17:31:14'),
(3, 'Datta', 'general', 1, '2019-05-30 17:31:30', '2019-06-07 16:10:30'),
(4, 'Techno', 'hello1234', 1, '2019-06-07 12:39:26', '2019-06-07 16:12:14'),
(8, 'Datta', 'sesh', 1, '2019-06-07 16:10:40', '0000-00-00 00:00:00'),
(7, 'Hycon,Techno,General,Datta', 'sample', 1, '2019-06-07 13:44:54', '2019-06-07 13:45:23'),
(9, 'Hycon,Techno,General,Datta', 'testing', 1, '2019-06-07 16:11:17', '2019-06-10 19:17:33'),
(0, 'Hycon', 'test', 1, '2019-06-10 19:17:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_programsbk`
--

CREATE TABLE `skillistic_programsbk` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `prgrm_title` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_programsbk`
--

INSERT INTO `skillistic_programsbk` (`id`, `category`, `prgrm_title`, `details`, `status`, `created_on`, `modified_on`) VALUES
(2, 'general', 'Faculty Trining', 'ok', 1, '2019-06-04 18:59:13', '0000-00-00 00:00:00'),
(3, 'Techno', 'parent meeting ', 'bvhjqvgqhjhgd', 1, '2019-06-04 22:24:35', '0000-00-00 00:00:00'),
(4, 'general', 'Special Occasions', 'mbanx jAGS AX', 1, '2019-06-04 22:52:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_resource`
--

CREATE TABLE `skillistic_resource` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_schedule`
--

CREATE TABLE `skillistic_schedule` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `sdate` date NOT NULL,
  `institution_id` varchar(50) NOT NULL,
  `programme_id` varchar(50) NOT NULL,
  `stime` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  `sc_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_schedule`
--

INSERT INTO `skillistic_schedule` (`id`, `faculty_id`, `sdate`, `institution_id`, `programme_id`, `stime`, `city`, `status`, `created_on`, `modified_on`, `sc_status`) VALUES
(29, '1', '2019-06-04', '1', '2', '10', '', 'Scheduled', '2019-06-11 07:19:36', '0000-00-00 00:00:00', 1),
(30, '1', '2019-06-14', '1', '2', '13', 'Nizambad', 'Scheduled', '2019-06-11 07:19:36', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_states`
--

CREATE TABLE `skillistic_states` (
  `id` int(11) NOT NULL,
  `state` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skillistic_states`
--

INSERT INTO `skillistic_states` (`id`, `state`) VALUES
(1, 'ANDHRA PRADESH'),
(2, 'Arunachal Pradesh\r\n\r\n'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh\r\n\r\n'),
(10, 'Jammu and Kashmir\r\n\r\n'),
(11, 'Jharkhand'),
(12, 'Karnataka'),
(13, 'Kerala'),
(14, 'Madya Pradesh\r\n\r\n'),
(15, 'Maharashtra'),
(16, 'Manipur'),
(17, 'Meghalaya'),
(18, 'Mizoram'),
(19, 'Nagaland'),
(20, 'Orissa'),
(21, 'Punjab\r\n\r\n'),
(22, 'Rajasthan'),
(23, 'Sikkim'),
(24, 'Tamil Nadu\r\n\r\n'),
(25, 'Telagana'),
(26, 'Tripura'),
(27, 'Uttaranchal'),
(28, 'Uttar Pradesh'),
(29, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `skillistic_support`
--

CREATE TABLE `skillistic_support` (
  `id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `filetype` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skillistic_admin`
--
ALTER TABLE `skillistic_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_faculty`
--
ALTER TABLE `skillistic_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_faculty_schedule`
--
ALTER TABLE `skillistic_faculty_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_faculty_schedulebk`
--
ALTER TABLE `skillistic_faculty_schedulebk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_faculty_scheduleold`
--
ALTER TABLE `skillistic_faculty_scheduleold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_institute`
--
ALTER TABLE `skillistic_institute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_institutebk`
--
ALTER TABLE `skillistic_institutebk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_master`
--
ALTER TABLE `skillistic_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_masterdata`
--
ALTER TABLE `skillistic_masterdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_payments`
--
ALTER TABLE `skillistic_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_ppt`
--
ALTER TABLE `skillistic_ppt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_programsbk`
--
ALTER TABLE `skillistic_programsbk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_resource`
--
ALTER TABLE `skillistic_resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_schedule`
--
ALTER TABLE `skillistic_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_states`
--
ALTER TABLE `skillistic_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skillistic_support`
--
ALTER TABLE `skillistic_support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skillistic_admin`
--
ALTER TABLE `skillistic_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skillistic_faculty`
--
ALTER TABLE `skillistic_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skillistic_faculty_schedule`
--
ALTER TABLE `skillistic_faculty_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skillistic_faculty_schedulebk`
--
ALTER TABLE `skillistic_faculty_schedulebk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skillistic_faculty_scheduleold`
--
ALTER TABLE `skillistic_faculty_scheduleold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skillistic_institute`
--
ALTER TABLE `skillistic_institute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skillistic_institutebk`
--
ALTER TABLE `skillistic_institutebk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skillistic_master`
--
ALTER TABLE `skillistic_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skillistic_masterdata`
--
ALTER TABLE `skillistic_masterdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;

--
-- AUTO_INCREMENT for table `skillistic_payments`
--
ALTER TABLE `skillistic_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skillistic_ppt`
--
ALTER TABLE `skillistic_ppt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skillistic_programsbk`
--
ALTER TABLE `skillistic_programsbk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skillistic_resource`
--
ALTER TABLE `skillistic_resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skillistic_schedule`
--
ALTER TABLE `skillistic_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `skillistic_states`
--
ALTER TABLE `skillistic_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `skillistic_support`
--
ALTER TABLE `skillistic_support`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
