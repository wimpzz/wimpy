-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 09:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement`(
  `id` int(50) NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL,
  `announce_img` varchar(400) DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `date`, `title`, `description`, `announce_img`, `start_date`, `end_date`, `author`) VALUES
(48, '2022-12-06 12:37:46', 'colleges', 'colleges kareng edad 19 and above', '../img/announcements/a.jpg', '2022-12-07 00:37:00', '2022-12-14 00:37:00', '0'),
(49, '2022-12-06 10:50:23', 'Announcement 123dsadasd', 'Example announcement', NULL, '2022-12-06 10:50:00', '2022-12-07 10:50:00', '0'),
(51, '2022-12-09 04:55:34', 'sample', 'sample', NULL, '2022-12-09 16:55:00', '2022-12-13 16:55:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `announce_archive`
--

CREATE TABLE `announce_archive` (
  `archive_id` int(11) NOT NULL,
  `announce_id` int(11) NOT NULL,
  `announce_img` varchar(455) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(250) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `complainant_id` int(11) NOT NULL,
  `complainee_id` int(11) NOT NULL,
  `complaint` varchar(250) DEFAULT NULL,
  `solution` varchar(250) DEFAULT NULL,
  `pending_stat` varchar(250) NOT NULL,
  `blotter_no` int(250) DEFAULT NULL,
  `incidence` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`id`, `date`, `complainant_id`, `complainee_id`, `complaint`, `solution`, `pending_stat`, `blotter_no`, `incidence`) VALUES
(6, '2022-09-04', 2, 3, 'unpaid loan', 'magkikita sa barangay hall', '', 1, 'sta monica'),
(7, '2022-09-06', 2, 5, 'scam', 'ibabalik ung tinda', 'Pending', 2, 'plaza'),
(8, '2022-09-07', 3, 4, 'Fraud', 'magkikita sa barangay hall', 'Pending', 3, 'sta monica'),
(10, '2022-08-11', 5, 3, 'cheat', 'magkikita sa barangay hall', 'Pending', 5, 'san isidro'),
(11, '2022-09-04', 4, 5, 'suntukan', 'none', 'Pending', 6, 'san isidro');

-- --------------------------------------------------------

--
-- Table structure for table `blotter_archive`
--

CREATE TABLE `blotter_archive` (
  `archive_id` int(250) NOT NULL,
  `blotter_id` int(11) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `complainant` varchar(250) DEFAULT NULL,
  `complainant_id` int(11) NOT NULL,
  `complainee` varchar(250) DEFAULT NULL,
  `complainee_id` int(11) NOT NULL,
  `complaint` varchar(250) DEFAULT NULL,
  `solution` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `blotter_no` int(250) DEFAULT NULL,
  `incidence` varchar(250) DEFAULT NULL,
  `complainant_contactno` varchar(400) DEFAULT NULL,
  `complainant_address` varchar(250) DEFAULT NULL,
  `complainee_contactno` varchar(400) DEFAULT NULL,
  `complainee_address` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blotter_archive`
--

INSERT INTO `blotter_archive` (`archive_id`, `blotter_id`, `date`, `complainant`, `complainant_id`, `complainee`, `complainee_id`, `complaint`, `solution`, `status`, `blotter_no`, `incidence`, `complainant_contactno`, `complainant_address`, `complainee_contactno`, `complainee_address`) VALUES
(1, 19, '2016-03-06', '', 3, '', 2, 'Bugbugan', 'Done', 'Solved', 45, 'bugbugan', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `certs`
--

CREATE TABLE `certs` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `sname` text NOT NULL,
  `housno` int(11) NOT NULL,
  `purok` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `contactno` varchar(450) NOT NULL,
  `email` varchar(450) NOT NULL,
  `mstat` text NOT NULL,
  `doctype` varchar(450) NOT NULL,
  `bplace` varchar(450) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `purpose` varchar(400) DEFAULT NULL,
  `date` datetime NOT NULL,
  `pending_stat` int(11) NOT NULL,
  `urgent_stat` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_db`
--

INSERT INTO `time_db` (`id`,`time_today`) VALUES 
('1', GETDATE());


--
-- Dumping data for table `certs`
--


INSERT INTO `certs` (`id`, `name`, `fname`, `mname`, `sname`, `housno`, `purok`, `address`, `age`, `gender`, `contactno`, `email`, `mstat`, `doctype`, `bplace`, `bdate`, `purpose`, `date`, `pending_stat`, `urgent_stat`) VALUES
(14, '', 'Abel', 'Tayag', 'Simbulan', 0, '', '', 46, '', '09854672139', 'sembrano@gmail.com', '', 'bus-clearance', '', '0000-00-00', 'Hospitalization/Medical Assistance', '2022-10-15 08:47:40', 1, '0'),
(15, '', 'Kaira', 'Reyes', 'Pingol', 0, '', '', 28, '', '26', 'kmfewhfeu', '', 'bgy-clearance', '', '0000-00-00', 'Hospitalization/Medical Assistance', '2022-10-16 07:14:01', 2, '0'),
(17, '', 'Shayne', 'Dela Cruz', 'Tan', 0, '', '', 52, '', '09458793115', 'jeremyruta@isda.com', '', 'cert-residency', '', '0000-00-00', 'Hospitalization/Medical Assistance', '2022-10-16 08:13:59', 3, '0'),
(18, '', 'Paula', 'Luterio', 'Nabong', 0, '', '', 25, '', '09587466231', 'joe@joe.com', '', 'bgy-indigency', '', '0000-00-00', 'Hospitalization/Medical Assistance', '2022-10-16 08:42:30', 0, '0'),
(19, '', 'Lyca', 'Mirondo', 'Gabun', 0, '', '', 28, '', '097968187554', 'lou@lou.com', '', 'bgy-cedula', 'Manila Philippines', '0000-00-00', 'Hospitalization/Medical Assistance', '2022-10-18 07:41:01', 0, '0'),
(20, '', 'Kleign', 'Cuyugan', 'Chaves', 0, '', '', 54, '', '09874412545', 'lou@lou.com', '', 'brgy-clearance', '', '0000-00-00', 'Changing Status', '2022-11-18 10:35:58', 0, '0'),
(21, 'Juan Dela Cruz', '', '', '', 254, 'Purok 2', 'Sta Monica, San Simon, Pampanga', 25, 'Male', '09451278961', 'juan@gmail.com', 'Single', 'brgy-clearance', 'Manila', '1995-05-21', 'Change status', '2022-12-09 03:00:35', 0, '0'),
(22, 'Juan Dela Cruz', '', '', '', 254, 'Purok 3', 'Sta Monica, San Simon, Pampanga', 18, 'Male', '09451278961', 'juan@gmail.com', 'Single', 'brgy-clearance', 'Manila', '1995-05-21', 'Change status', '2022-12-09 03:01:10', 0, '0'),
(23, 'Princess', '', '', '', 12, 'Purok 2', 'Sta Monica, San Simon, Pampanga', 23, 'Female', '09664561235', 'princess@gmail.com', 'Widowed', 'brgy-clearance', 'Manila', '1998-03-16', 'Change status', '2022-12-13 12:36:53', 0, 'Urgent');

-- --------------------------------------------------------

--
-- Table structure for table `certs_archive`
--

CREATE TABLE `certs_archive` (
  `archive_id` int(11) NOT NULL,
  `certs_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `sname` text NOT NULL,
  `housno` int(11) NOT NULL,
  `purok` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `contactno` varchar(450) NOT NULL,
  `email` varchar(450) NOT NULL,
  `doctype` varchar(450) NOT NULL,
  `bplace` varchar(450) NOT NULL,
  `bdate` date NOT NULL,
  `other_purpose` varchar(450) NOT NULL,
  `purpose_indigen` varchar(400) NOT NULL,
  `purpose_brclear` varchar(455) NOT NULL,
  `specpurpose` varchar(450) NOT NULL,
  `deceased` text NOT NULL,
  `relationship` text NOT NULL,
  `studname` text NOT NULL,
  `school` text NOT NULL,
  `busname` text NOT NULL,
  `owner` text NOT NULL,
  `loc` varchar(450) NOT NULL,
  `mstat` text NOT NULL,
  `certifying` text NOT NULL,
  `otherinfos` text NOT NULL,
  `date` datetime NOT NULL,
  `pending_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `case_no` int(11) NOT NULL,
  `case_title` text NOT NULL,
  `complainant` text NOT NULL,
  `pending_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `date`, `case_no`, `case_title`, `complainant`, `pending_stat`) VALUES
(1, '2022-11-07 00:00:00', 25, 'Nawawalang pera', 'Stefano Molares', 3),
(275, '2022-11-23 05:04:49', 2456, 'Robbery', 'Juan Dela Cruz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complain_archive`
--

CREATE TABLE `complain_archive` (
  `archive_id` int(11) NOT NULL,
  `complain_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `case_no` int(11) NOT NULL,
  `case_title` text NOT NULL,
  `complainant` text NOT NULL,
  `pending_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complain_step1`
--

CREATE TABLE `complain_step1` (
  `id` int(11) NOT NULL,
  `case_no` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain_step1`
--

INSERT INTO `complain_step1` (`id`, `case_no`, `date`) VALUES
(1, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `econcern`
--

CREATE TABLE `econcern` (
  `id` int(11) NOT NULL,
  `title` varchar(455) NOT NULL,
  `message` varchar(455) NOT NULL,
  `type` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `pending_stat` int(200) NOT NULL,
  `prio_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `econcern`
--

INSERT INTO `econcern` (`id`, `title`, `message`, `type`, `name`, `date`, `pending_stat`, `prio_stat`) VALUES
(245, 'Phone Scam', 'May nagtatanong po ng details ng banko saka nanghihingi ng 5k. Tingin po namen scam ito.', 'Complain', 'Lou Angelique Camacho', '2022-11-23 05:00:36', 1, 1),
(247, 'sample message', 'nagtsitsismis', 'Complain', 'Juan Dela Cruz', '2022-11-26 12:36:42', 1, 3),
(259, 'sample concern', 'sample concern', 'Blotter', 'Juan Dela Cruz', '2022-12-01 06:40:00', 1, 1),
(260, 'Concern101', 'Sample concern', 'Blotter', 'Juan Dela Cruz', '2022-12-01 07:01:18', 1, 1),
(261, 'Hello', 'Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless. Hello good day god bless', 'Blotter', 'Juan Dela Cruz', '2022-12-03 12:40:09', 1, 1),
(262, 'sample', 'sampleee', 'Complain', 'Juan Dela Cruz', '2022-12-05 11:05:59', 1, 3),
(263, 'Title', 'Sample Message', 'Complain', 'Juan Dela Cruz', '2022-12-06 01:07:05', 1, 1),
(264, 'Hi', 'Hello', 'Complain', 'Juan Dela Cruz', '2022-12-08 11:49:38', 1, 1),
(265, 'Maingay', 'Bidyoke from 7am to 12am', 'Complain', 'Kiko', '2022-12-13 12:18:33', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `econcern_archive`
--

CREATE TABLE `econcern_archive` (
  `archive_id` int(11) NOT NULL,
  `econcern_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `message` varchar(400) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `econcern_archive`
--

INSERT INTO `econcern_archive` (`archive_id`, `econcern_id`, `title`, `message`, `name`, `date`) VALUES
(1, 14, 'tHIS IS CONCERN', 'HELLO I HAVE A CONCERN ABOUT THIS STAF THING CAN U PLEASE HELP ME SOLVE IT', 'Juan Dela Cruz', '2022-10-07 04:10:04'),
(2, 1, 'New Concern', 'Sample Message Sample MessageSample MessageSample Message Sample Message Sample Message Sample Message Sample Message Sample Message Sample Message Sample Message Sample MessageSample MessageSample Message Sample Message Sample Message Sample Message Sample Message Sample Message Sample Message Sample Message Sample MessageSample MessageSample Message Sample Message Sample Message Sample Message S', 'Juan Dela Cruz', '2022-10-31 06:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `going`
--

CREATE TABLE `going` (
  `id` int(11) NOT NULL,
  `announce_id` int(11) NOT NULL,
  `going_stat` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(250) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `ans` varchar(2400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `ques`, `ans`) VALUES
(5, 'How to request barangay certificates?', 'For the easier and more convenient way of requesting barangay certificates, you can now place your request using this web system. Find the \"Certificates\" page in the side bar of this site then click it. Choose the certificate type you need then fill up the form. Choose payment method. Submit the form by clicking the submit button. Wait for the notification from barangay hall or you can go to the site right away to claim your request. ty '),
(6, 'How to login as user?', 'Click the login on the navigation then choose user. Enter your username, email, or contact no. and your password. Welcome to the user side!'),
(7, 'How to register?', 'You must ask for the admin approval first. In the Login Page, go to user login then click register. Fill up the form to register then wait for the admin to create your account. You will be notified once they have confirmed that you are a bonafied resident of Brgy. Sta Monica. Just wait patiently then you can access the system.'),
(8, 'How to address your concern to barangay officials? ', 'You must try to use the eConcern chat. Just click the floating chat on the bottom right side of your screen or click the chat icon in the navigation bar. Thank you !!!'),
(9, 'How to submit concern?', 'Easy. just use our eConcern feature'),
(10, 'How to acquire qr code in my certificate?', 'You may acquire qr code if and only if you request for barangay certificates like indigency, residency, or clearance.');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `logo` varchar(400) NOT NULL,
  `brgy` varchar(250) NOT NULL,
  `mun` varchar(250) NOT NULL,
  `prov` varchar(400) NOT NULL,
  `details` varchar(400) NOT NULL,
  `tyear` int(255) NOT NULL,
  `vision` varchar(500) NOT NULL,
  `mission` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `logo`, `brgy`, `mun`, `prov`, `details`, `tyear`, `vision`, `mission`) VALUES
(1, '../img/logo.png', 'Sta. Monica', 'San Simon', 'Pampanga', 'Serbisyung Malinis at Mabilis', 2022, 'A premiere Barangay in the Municipality of San Simon in terms of developing its economic stability, to achieve utmost peace and order and improving the lives of Monicans through an exemplary and God fearing service.', 'To serve the people and the community of our Barangay to the fullest. By providing them social, economic, environmental and infrastructure assistance under the spirit of transparency and good governance.');

-- --------------------------------------------------------

--
-- Table structure for table `notifs`
--

CREATE TABLE `notifs` (
  `n_id` int(11) NOT NULL,
  `notif_name` text NOT NULL,
  `details` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifs`
--

INSERT INTO `notifs` (`n_id`, `notif_name`, `details`, `active`, `date`) VALUES
(1, 'eConcern', 'Angelic sent new concern message', 1, '2022-09-28 03:07:13'),
(3, 'Registration Request', 'Someone is requesting for user account access', 1, '2022-09-29 02:24:49'),
(11, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-10-11 02:30:53'),
(19, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-10-15 08:47:40'),
(24, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-10-18 07:39:53'),
(25, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-10-18 07:41:02'),
(26, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-18 10:29:21'),
(27, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-18 10:30:50'),
(28, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-18 10:31:09'),
(29, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-18 10:33:04'),
(30, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-18 10:33:56'),
(31, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-11-18 10:35:58'),
(32, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-18 10:59:07'),
(33, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-18 10:59:16'),
(34, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-18 10:59:20'),
(35, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-18 10:59:26'),
(58, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 09:08:10'),
(59, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 10:10:33'),
(60, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 10:24:17'),
(61, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 10:24:33'),
(62, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 10:27:55'),
(63, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 10:49:38'),
(64, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 10:50:37'),
(65, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 10:50:54'),
(66, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 11:07:44'),
(67, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-21 11:09:30'),
(68, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-26 12:22:25'),
(69, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-26 12:36:22'),
(70, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-26 12:36:42'),
(71, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-11-26 12:43:02'),
(72, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 11:48:38'),
(73, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 11:58:52'),
(74, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 11:59:32'),
(75, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 12:00:13'),
(76, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 12:10:38'),
(77, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 12:11:53'),
(78, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 12:16:24'),
(79, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 12:17:42'),
(80, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 12:19:12'),
(81, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 12:19:55'),
(82, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-11-29 12:21:21'),
(83, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-11-29 01:03:48'),
(84, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-11-29 01:17:28'),
(85, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-12-01 06:40:01'),
(86, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-01 06:40:48'),
(87, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-12-01 07:01:18'),
(88, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-01 07:01:59'),
(89, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-02 11:25:27'),
(90, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-02 11:26:27'),
(91, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-02 11:28:49'),
(92, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-02 11:53:26'),
(93, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-02 11:57:11'),
(94, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-03 12:02:04'),
(95, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-12-03 12:40:09'),
(96, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-04 02:13:18'),
(97, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-04 08:07:33'),
(98, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-12-05 11:06:00'),
(99, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-05 11:15:19'),
(100, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-05 11:26:54'),
(101, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-12-06 01:07:05'),
(102, 'eConcern', 'Juan Dela Cruz sent new concern message', 1, '2022-12-08 11:49:38'),
(103, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-09 12:22:13'),
(104, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-09 12:23:54'),
(105, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-09 12:25:54'),
(106, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-09 12:28:08'),
(107, 'Certificate Request', 'Juan Dela Cruz is requesting barangay certificate', 1, '2022-12-09 12:29:19'),
(108, 'eConcern', 'Kiko sent new concern message', 1, '2022-12-13 12:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `notifs_user`
--

CREATE TABLE `notifs_user` (
  `n_id` int(11) NOT NULL,
  `notif_name` text NOT NULL,
  `details` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifs_user`
--

INSERT INTO `notifs_user` (`n_id`, `notif_name`, `details`, `active`, `date`) VALUES
(1, 'New Barangay Project', 'Construction Ongoing', 1, '2022-09-29 03:09:04'),
(5, 'New Announcement', 'Kapasalamatan', 1, '2022-09-29 03:38:13'),
(6, 'Barangay Project Update', 'PHILSYS', 1, '2022-09-29 03:39:51'),
(11, 'FAQs', 'How to acquire qr code in my certificate?', 1, '2022-09-29 06:31:20'),
(19, 'Announcement Update', 'Announcement', 1, '2022-10-11 12:16:10'),
(28, 'New Barangay Project', 'This is to announce thatsdvgsdywg', 1, '2022-10-13 05:38:16'),
(29, 'Announcement Update', 'PHILSYS', 1, '2022-10-14 12:48:40'),
(31, 'New Announcement', 'PHILSYS', 1, '2022-10-17 08:37:01'),
(32, 'New Announcement', 'PELCO III Power Interruption', 1, '2022-10-17 08:42:21'),
(33, 'New Announcement', 'Barangay Vaccination Announcement', 1, '2022-10-17 08:44:32'),
(34, 'New Barangay Project', 'Bayanihang Monicans', 1, '2022-10-17 08:51:42'),
(35, 'New Barangay Project', 'Bayanihan Monicans', 1, '2022-10-17 08:57:36'),
(36, 'New Barangay Project', 'Bayanihan Monicans', 1, '2022-10-17 09:04:53'),
(37, 'New Barangay Project', 'iuklil', 1, '2022-10-17 09:12:04'),
(38, 'New Barangay Project', 'Bayanihan Monicans', 1, '2022-10-17 09:15:44'),
(39, 'New Barangay Project', 'Free Dental Extraction', 1, '2022-10-17 09:17:50'),
(40, 'New Barangay Project', 'Sapang Panquiari Festival', 1, '2022-10-17 09:24:44'),
(41, 'New Barangay Project', 'Free Dental Extraction', 1, '2022-10-17 09:33:03'),
(42, 'New Barangay Project', 'Free Dental Extraction', 1, '2022-10-17 09:35:39'),
(43, 'New Barangay Project', 'New Medical Tools and Equipments', 1, '2022-10-17 09:40:46'),
(44, 'New Barangay Project', 'Doxycyline Distribution', 1, '2022-10-17 09:43:30'),
(45, 'New Announcement', 'Sample', 1, '2022-10-18 07:23:58'),
(46, 'New Announcement', 'nuhuhu', 1, '2022-10-18 10:06:27'),
(47, 'New Barangay Project', 'announcement', 1, '2022-10-28 08:52:34'),
(48, 'Announcement Update', 'PELCO III Power Interruption Today', 1, '2022-11-01 06:43:50'),
(49, 'Announcement Update', 'PELCO III Power Interruption today', 1, '2022-11-01 06:55:56'),
(50, 'Barangay Project Update', 'Bayanihan Monicans 111', 1, '2022-11-01 10:07:06'),
(51, 'New Announcement', 'sample', 1, '2022-11-02 08:24:04'),
(52, 'New Announcement', 'Sample 1', 1, '2022-11-02 08:27:47'),
(53, 'New Announcement', 'Sample', 1, '2022-11-02 08:31:47'),
(54, 'New Announcement', 'Panibayung Announcement', 1, '2022-11-06 09:06:14'),
(55, 'New Announcement', 'colleges king Nobyembre', 1, '2022-11-06 09:07:07'),
(56, 'FAQs', 'fdegfe', 1, '2022-11-18 11:08:42'),
(57, 'FAQs', 'jbjyfyg', 1, '2022-11-18 11:10:41'),
(58, 'New Announcement', 'ytujlk7uo', 1, '2022-11-28 10:30:28'),
(59, 'New Announcement', 'wefweqgre', 1, '2022-11-29 08:35:42'),
(60, 'New Announcement', 'reg3rtgreqg', 1, '2022-11-29 08:39:17'),
(61, 'New Announcement', 'efrwefwe', 1, '2022-11-29 08:40:21'),
(62, 'New Announcement', 'dfgreg', 1, '2022-11-29 08:41:00'),
(63, 'New Announcement', 'eth54h', 1, '2022-11-29 08:51:50'),
(64, 'New Barangay Project', 'efgbrewg', 1, '2022-11-29 08:52:12'),
(65, 'New Barangay Project', 'sdvcregrg', 1, '2022-11-29 08:56:41'),
(66, 'New Barangay Project', 'fbrwethbg', 1, '2022-11-29 09:04:57'),
(67, 'New Barangay Project', 'dfwef', 1, '2022-11-29 09:05:40'),
(68, 'New Barangay Project', 'aswdfwqd', 1, '2022-11-29 09:06:45'),
(69, 'New Barangay Project', 'efwef', 1, '2022-11-29 09:07:35'),
(70, 'New Barangay Project', 'wegfwegf', 1, '2022-11-29 09:08:51'),
(71, 'New Barangay Project', 'sdefwefew', 1, '2022-11-29 09:10:11'),
(72, 'New Barangay Project', 'sdfwef', 1, '2022-11-29 09:11:32'),
(73, 'New Barangay Project', '1', 1, '2022-11-29 09:12:12'),
(74, 'New Announcement', 'wefwertf', 1, '2022-11-29 09:12:54'),
(75, 'New Announcement', 'fwqd', 1, '2022-11-29 09:15:46'),
(76, 'New Barangay Project', 'fvervre', 1, '2022-11-29 09:17:20'),
(77, 'New Barangay Project', 'gregfr', 1, '2022-11-29 09:19:20'),
(78, 'New Barangay Project', '56uu', 1, '2022-11-29 09:22:01'),
(79, 'New Announcement', 'example', 1, '2022-12-01 06:51:54'),
(80, 'New Barangay Project', 'Gift giving', 1, '2022-12-03 08:43:05'),
(81, 'New Barangay Project', 'Doxcyciline Distribution', 1, '2022-12-03 08:44:40'),
(82, 'New Announcement', 'colleges ', 1, '2022-12-03 08:46:10'),
(83, 'New Announcement', '', 1, '2022-12-05 10:37:20'),
(84, 'New Announcement', 'colleges', 1, '2022-12-06 12:37:46'),
(85, 'New Barangay Project', 'sample', 1, '2022-12-06 12:55:04'),
(86, 'New Announcement', 'Announcement 123', 1, '2022-12-06 10:50:23'),
(87, 'New Barangay Project', 'Project', 1, '2022-12-06 11:06:03'),
(88, 'New Announcement', 'Attention', 1, '2022-12-09 12:17:53'),
(89, 'New Announcement', 'sample', 1, '2022-12-09 04:55:34'),
(90, 'New Announcement', 'd', 1, '2022-12-09 04:56:37'),
(91, 'New Announcement', 'e', 1, '2022-12-09 04:57:16'),
(92, 'New Barangay Project', 'Pulot Basura', 1, '2022-12-13 12:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(255) NOT NULL,
  `photo` varchar(450) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `bplace` varchar(250) NOT NULL,
  `contact` varchar(400) NOT NULL,
  `status` varchar(250) NOT NULL,
  `address` varchar(300) NOT NULL,
  `sterm` date NOT NULL,
  `eterm` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `photo`, `name`, `position`, `bdate`, `bplace`, `contact`, `status`, `address`, `sterm`, `eterm`) VALUES
(21, '../img/officials/5.png', 'Angelis Arcilla', 'Punong Barangay', '1965-05-16', 'Pampanga', '09852741962', 'Married', 'Sta Monica San Simon Pampanga', '2019-12-05', '2023-01-15'),
(22, '../img/officials/4.png', 'Paul Arguelles', 'Secretary', '1990-06-09', 'Pampanga', '09162701922', 'Married', 'Sta Monica San Simon Pampanga', '2019-12-08', '2023-01-15'),
(24, '../img/officials/1.png', 'Mishel Sitson', 'Treasurer', '1985-03-15', 'Pampanga', '09274599885', 'Single', 'Sta Monica San Simon Pampanga', '2019-02-15', '2023-01-25'),
(25, '../img/officials/2.png', 'Gloria S. Gabriel', 'VAWC Desk Officer', '1976-06-30', 'Pampanga', '09123456897', 'Married', 'Sta Monica San Simon Pampanga', '2020-02-15', '2023-03-15'),
(26, '../img/officials/7.png', 'Yves Ivan Atienza', 'SK Chairman', '1998-02-15', 'Pampanga', '09633068546', 'Single', 'Sta Monica San Simon Pampanga', '2019-03-25', '2023-03-26'),
(27, '../img/officials/3.png', 'Romalyn Yumang', 'SK Secretary', '1994-10-25', 'Pampanga', '0956456872', 'Single', 'Sta Monica San Simon Pampanga', '2019-06-23', '2023-05-16'),
(28, '../img/officials/6.png', 'Jose Cariño Jr', 'Chairman', '1983-06-25', 'Pampanga', '09111222555', 'Married', 'Sta Monica San Simon Pampanga', '2018-03-05', '2023-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `official_archive`
--

CREATE TABLE `official_archive` (
  `archive_id` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `bplace` varchar(250) NOT NULL,
  `contact` varchar(400) NOT NULL,
  `status` varchar(250) NOT NULL,
  `address` varchar(300) NOT NULL,
  `sterm` date NOT NULL,
  `eterm` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `official_archive`
--

INSERT INTO `official_archive` (`archive_id`, `official_id`, `photo`, `name`, `position`, `bdate`, `bplace`, `contact`, `status`, `address`, `sterm`, `eterm`) VALUES
(0, 18, 'img/officials/icons8-avatar-64.png', 'Renzo', 'SK Kagawad', '1985-03-05', 'Pampanga', '09123456789', 'Single', 'Sta Monica San Simon Pampanga', '2019-02-05', '2022-03-16'),
(0, 19, 'img/officials/icons8-avatar-64.png', 'Troy Villanueva', 'Chairman', '2001-12-05', 'Pampanga', '09987456123', 'Single', 'San Simon', '2012-02-03', '2014-03-06'),
(0, 23, '../img/officials/1.png', 'Mishel Sitson', 'Treasurer', '1985-03-26', 'Pampanga', '09274599885', 'Single', 'Sta Monica San Simon Pampanga', '2019-12-05', '2022-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cert_id` int(11) NOT NULL,
  `paymethod` varchar(455) NOT NULL,
  `proof` varchar(455) NOT NULL,
  `amount` int(11) NOT NULL,
  `copies` int(11) NOT NULL,
  `topay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(250) NOT NULL,
  `title` varchar(455) NOT NULL,
  `descript` varchar(455) NOT NULL,
  `picture` varchar(400) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date` datetime NOT NULL,
  `cap_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `descript`, `picture`, `start_date`, `end_date`, `date`, `cap_id`) VALUES
(35, 'sample', 'sample', '../img/projects/e.jpg', '2022-12-07', '2022-12-24', '2022-12-06 12:55:04', 21),
(36, 'Project', 'Sample Projectttt', '', '2022-12-06', '2022-12-13', '2022-12-06 11:06:02', 21),
(37, 'Pulot Basura', 'Tapat mo, Linis mo', '', '2022-12-13', '2022-12-13', '2022-12-13 12:12:33', 21);

-- --------------------------------------------------------

--
-- Table structure for table `project_archive`
--

CREATE TABLE `project_archive` (
  `archive_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descript` varchar(400) NOT NULL,
  `picture` varchar(455) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date` datetime NOT NULL,
  `cap_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `res_id` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `mid_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `ext_name` varchar(250) NOT NULL,
  `household_no` int(250) NOT NULL,
  `house_no` int(250) NOT NULL,
  `street_name` varchar(250) NOT NULL,
  `purok` varchar(200) NOT NULL,
  `residential_bldg` varchar(200) NOT NULL,
  `family_no` int(100) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile_no` varchar(210) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status` varchar(250) NOT NULL,
  `rel_head` varchar(250) NOT NULL,
  `res_type` varchar(250) NOT NULL,
  `occu_date` date NOT NULL,
  `transfer_date` date NOT NULL,
  `educ_stat` varchar(255) NOT NULL,
  `hEduc_att` varchar(250) NOT NULL,
  `emerP` varchar(250) NOT NULL,
  `rel_emer` varchar(255) NOT NULL,
  `emerP_add` varchar(250) NOT NULL,
  `emerP_contact` int(250) NOT NULL,
  `emp_stat` varchar(255) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `work_place` varchar(250) NOT NULL,
  `employer` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`res_id`, `user_id`, `photo`, `first_name`, `mid_name`, `last_name`, `ext_name`, `household_no`, `house_no`, `street_name`, `purok`, `residential_bldg`, `family_no`, `birthdate`, `email`, `mobile_no`, `gender`, `status`, `rel_head`, `res_type`, `occu_date`, `transfer_date`, `educ_stat`, `hEduc_att`, `emerP`, `rel_emer`, `emerP_add`, `emerP_contact`, `emp_stat`, `occupation`, `work_place`, `employer`, `position`) VALUES
(2, 38, '../img/residents/1.png', 'Juana', 'Linta', 'Crisan', 'III', 3, 6, 'Str', '6-A', 'bldg', 2, '1985-12-24', 'juana@gmail.com', '0954689123', 'Female', 'Single', 'Father', '', '0000-00-00', '0000-00-00', '', '', '', '', '', 0, '', '', '', '', ''),
(3, 33, '../img/residents/2.png', 'Letlet', 'Budang', 'Mercado', '', 21, 458, '', '5', '', 1, '1968-01-15', '', '09123456788', 'Female', 'Married', 'Father', '1', '0000-00-00', '0000-00-00', 'College ', 'College', '', '', '', 0, 'Employed', 'Finance', '', '', ''),
(4, 33, '../img/residents/3.png', 'Louanne', 'Santos', 'Sembrano', '', 12, 487, '', '6-A', '', 2, '1995-12-10', 'louan@gmail.com', '09123789456', 'Female', 'Single', 'Father', '', '0000-00-00', '0000-00-00', 'College ', 'College', '', '', '', 0, 'Self-employed', 'Freelance Coder', 'Remote', '', ''),
(5, 38, '../img/residents/4.png', 'Gemma', 'Lisan', 'Garcia', '', 2, 245, '', '3', '', 1, '2001-02-05', 'gemma@gmail.com', '09123456788', 'Female', 'Single', 'Father', '', '0000-00-00', '0000-00-00', '', '', 'Jayson Garcia', 'Parent', 'Sta Monica San Simon Pampanga', 2147483647, '', '', '', '', ''),
(6, 6, '../img/residents/7.png', 'Berto ', 'Tayag', 'Dagdag', '', 36, 1236, '', '3', '', 1, '1996-12-03', 'berto@gmail.com', '0953689241', 'Male', 'Single', 'Father', '', '0000-00-00', '0000-00-00', 'College', 'College', 'Herry', 'Relative', '0978546897', 0, 'Worker', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Sample 1', 'Barangay Anniversary', '2022-10-12 02:59:00', '2022-10-12 02:59:00'),
(2, 'Sample 2', 'Holiday', '2022-10-13 02:59:49', '2022-10-13 02:59:49'),
(3, 'Sample 3', 'Event', '2022-10-13 02:59:49', '2022-10-13 02:59:49'),
(0, 'final', 'final defense', '2022-12-05 18:31:00', '2022-12-09 18:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(400) NOT NULL,
  `contact_no` varchar(450) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bdate` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `avatar` varchar(400) NOT NULL,
  `date_registered` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`user_id`, `name`, `username`, `email`, `contact_no`, `gender`, `bdate`, `password`, `user_type`, `avatar`, `date_registered`) VALUES
(2, 'Gemmalyn Santos', 'gem', 'gem@gem.com', '0985245612', 'Female', '1969-03-25', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 'img/users_profile/2.png', '2022-10-10 16:23:48'),
(4, 'Letlet', 'letlet', 'letlet@gmail.com', '094587416644', 'Female', '1968-12-15', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'img/users_profile/6.png', '2022-10-31 08:11:51'),
(6, 'Lou Angelique Camacho', 'louan', 'louancamacho.15@gmail.com', '105218484', 'Female', '2000-01-05', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'img/users_profile/2.png', '2022-11-02 04:31:42'),
(17, 'Brandon Burgos', 'brandon', 'brandonburgos@gmail.com', '0936578941', 'Male', '1998-02-04', '202cb962ac59075b964b07152d234b70', 'user', 'img/users_profile/7.png', '2022-12-03 10:07:24'),
(19, 'Vebs Gonzales', 'vebs', 'vebs@gmail.com', '09856235411', 'Female', '1998-02-15', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'img/users_profile/263686614_488379752601229_3414767820833434752_n.jpg', '2022-12-08 07:01:59'),
(22, 'Kelly', 'Kelly', 'kelly@gmail.com', '09785412362', 'Female', '1996-02-15', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'img/users_profile/2.png', '2022-12-09 09:39:54'),
(23, 'Lee Dongmin', 'dongmin', 'dongmin@gmail.com', '09854697448', 'Male', '1997-01-31', '2101b8717d73f3f7d39c969bdc444b01', 'user', 'img/users_profile/1653835362083.jpg', '2022-12-09 10:07:29'),
(29, 'Kiko', 'kagawadkiko', 'kiko@gmail.com', '09123891111', 'Male', '1996-05-05', 'eeaaa2cddb5a2f034bd314bab6cc5e40', 'user', 'img/users_profile/4.png', '2022-12-13 11:45:17'),
(31, 'Sarah', 'sarah', 'sarah@gmail.com', '09568945221', 'Female', '1986-01-15', '590c92ab75e8f7392f1b36f9dd58f9ca', 'user', 'img/users_profile/3.png', '2022-12-13 12:06:03'),
(32, 'Princess', 'Princess', 'princess@gmail.com', '09664561235', 'Female', '1998-03-16', '193204ebb373d0af22ccc968714bea2b', 'user', 'img/users_profile/2.png', '2022-12-13 12:08:33'),
(33, 'Jesu Torres', 'kapjess', 'jess@gmail.com', '9123456790', 'Male', '1978-02-15', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'img/users_profile/4.png', NULL),
(38, 'Juan Dela Cruz', 'juan', 'juan@gmail.com', '09451278961', 'Male', '1995-05-21', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'img/users_profile/7.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_req`
--

CREATE TABLE `user_req` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `ver_email` varchar(400) NOT NULL,
  `contact_no` varchar(450) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bdate` date DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `avatar` varchar(400) NOT NULL,
  `ver_photo` varchar(250) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_req`
--

INSERT INTO `user_req` (`id`, `name`, `username`, `ver_email`, `contact_no`, `gender`, `bdate`, `password`, `user_type`, `avatar`, `ver_photo`, `date`) VALUES
(1, 'Lou', 'lou', 'lou@lou.com', '0985263147', 'Female', '2001-01-25', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 'img/users_profile/1.png', 'img/verified_id/valid_id.jpg', '2022-10-05 16:23:23'),
(18, 'Cha Eunwoo', 'two', 'two@gmail.com', '098547621784', 'Male', '1997-12-05', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 'img/users_profile/1653835362083.jpg', 'img/verified_id/valid_id1.jpg', '2022-12-05 10:41:01'),
(24, 'Jezzy miguel macaspac', 'jezz', 'jezzymiguel@gmail.com', '09635845781', 'Male', '2001-12-18', '17d66a857aadfbead947b8c13206e12c', 'user', 'img/users_profile/4.png', 'img/verified_id/valid_id2.jpg', '2022-12-12 03:15:50'),
(25, 'Zoe Mallari', 'zoe25', 'zoe25@gmail.com', '09112234569', 'Female', '2011-06-25', '94e20be8beac3bcb104b7e59923a50e7', 'user', 'img/users_profile/263686614_488379752601229_3414767820833434752_n.jpg', 'img/verified_id/valid_id.jpg', '2022-12-12 03:43:34'),
(26, 'Jessica Soho', 'jessicaSoho', 'jess@gmail.com', '09356984152', 'Female', '1996-03-16', 'f5f2fba03d8672063ac65118ca342330', 'user', 'img/users_profile/2.png', 'img/verified_id/valid_id.jpg', '2022-12-12 03:58:13'),
(27, 'Coni reyes', 'coni', 'coni@gmail.com', '09112234569', 'Female', '1998-01-15', 'a3398b8ac645c486ebff91e84971c13e', 'user', 'img/users_profile/2.png', 'img/verified_id/valid_id.jpg', '2022-12-12 04:17:40'),
(28, 'Benji paras', 'benji', 'benji@gmail.com', '09112234569', 'Male', '1985-02-15', '2f03d049b8f8e2de6b638fbaf0994230', 'user', 'img/users_profile/263686614_488379752601229_3414767820833434752_n.jpg', 'img/verified_id/valid_id2.jpg', '2022-12-12 04:23:48'),
(33, 'try', 'try', 'try@gmail.com', '09123455678', 'Male', '2023-01-08', '9e344ee864440bea95e289f6a37d01ee', 'user', 'img/users_profile/1776332211.jpg', 'img/verified_id/290473997_589130142662391_3287176598034893166_n.png', '2023-01-25 07:32:07'),
(34, 'Danilo', 'danilo', 'try@gmail.com', '09123456789', 'Male', '1997-06-18', 'fd3491dfb4ecab569ea39ba956133486', 'user', 'img/users_profile/1776332211.jpg', 'img/verified_id/290473997_589130142662391_3287176598034893166_n.png', '2023-01-25 07:46:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announce_archive`
--
ALTER TABLE `announce_archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complainant` (`complainant_id`),
  ADD KEY `complainee` (`complainee_id`);

--
-- Indexes for table `blotter_archive`
--
ALTER TABLE `blotter_archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `certs`
--
ALTER TABLE `certs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certs_archive`
--
ALTER TABLE `certs_archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_archive`
--
ALTER TABLE `complain_archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `complain_step1`
--
ALTER TABLE `complain_step1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `econcern`
--
ALTER TABLE `econcern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `econcern_archive`
--
ALTER TABLE `econcern_archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `going`
--
ALTER TABLE `going`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifs`
--
ALTER TABLE `notifs`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `notifs_user`
--
ALTER TABLE `notifs_user`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_archive`
--
ALTER TABLE `project_archive`
  ADD PRIMARY KEY (`archive_id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_req`
--
ALTER TABLE `user_req`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `announce_archive`
--
ALTER TABLE `announce_archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `blotter_archive`
--
ALTER TABLE `blotter_archive`
  MODIFY `archive_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certs`
--
ALTER TABLE `certs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `certs_archive`
--
ALTER TABLE `certs_archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `complain_archive`
--
ALTER TABLE `complain_archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complain_step1`
--
ALTER TABLE `complain_step1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `econcern`
--
ALTER TABLE `econcern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT for table `econcern_archive`
--
ALTER TABLE `econcern_archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `going`
--
ALTER TABLE `going`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifs`
--
ALTER TABLE `notifs`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `notifs_user`
--
ALTER TABLE `notifs_user`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `project_archive`
--
ALTER TABLE `project_archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_req`
--
ALTER TABLE `user_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blotter`
--
ALTER TABLE `blotter`
  ADD CONSTRAINT `complainant` FOREIGN KEY (`complainant_id`) REFERENCES `residents` (`res_id`),
  ADD CONSTRAINT `complainee` FOREIGN KEY (`complainee_id`) REFERENCES `residents` (`res_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
