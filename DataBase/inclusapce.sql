-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 08:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inclusapce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `téléphone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `keyadmin` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `index_number`, `fname`, `surname`, `gender`, `address`, `téléphone`, `email`, `keyadmin`, `image_name`, `reg_date`) VALUES
(1, 100, 'admin', 'admin', 'Male', 'Tunisia', '111-111-1114', 'admin@gmail.com', 14414422, 'uploads/20230928090222.png', '2023-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `avs`
--

CREATE TABLE `avs` (
  `id` int(11) NOT NULL,
  `cin` int(8) UNSIGNED ZEROFILL DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `téléphone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `conf_password` varchar(20) NOT NULL,
  `otp` int(50) NOT NULL,
  `verification_status` int(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `reste_token` varchar(10) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avs_salary`
--

CREATE TABLE `avs_salary` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `paid` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avs_salary_history`
--

CREATE TABLE `avs_salary_history` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject_fee` double(11,2) NOT NULL,
  `student_count` int(11) NOT NULL,
  `hall_charge` int(11) NOT NULL,
  `subtotal` double(11,2) NOT NULL,
  `paid` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `invoice_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `classroom` varchar(255) NOT NULL,
  `sender_index` bigint(11) NOT NULL,
  `sender_type` varchar(255) NOT NULL,
  `receiver_index` bigint(11) NOT NULL,
  `receiver_type` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `_isread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `admission_fee` double(11,2) NOT NULL,
  `hall_charge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `téléphone` varchar(12) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `student_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `cin` int(8) UNSIGNED ZEROFILL NOT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `téléphone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `conf_password` varchar(20) NOT NULL,
  `Spec` varchar(255) NOT NULL,
  `otp` int(50) NOT NULL,
  `verification_status` int(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `reste_token` varchar(10) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `color` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `classroom_id` varchar(255) NOT NULL,
  `create_by` bigint(11) NOT NULL,
  `creator_name` varchar(50) NOT NULL,
  `creator_type` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `location` varchar(180) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `note`, `color`, `category_id`, `classroom_id`, `create_by`, `creator_name`, `creator_type`, `date_creation`, `start_date`, `end_date`, `start_time`, `end_time`, `year`, `month`, `location`, `image_name`) VALUES
(21, 'développement de la conception à la pratique', 'lien inscri :<br />\r\n<br />\r\nhttps://docs.google.com/forms/d/e/1FAIpQLSdygxSD_eptMyuIMjJVrJtc2CLidwJr1IU-22Mjp-oGVKSu1w/viewform?usp=sf_link', '#d20000', 1, '', 100, 'sic', 'Admin', '2023-04-27', '2023-04-29', '2023-05-01', '08:30:00', '16:00:00', 2023, 9, 'nabeul', 'uploads/20231012014906.jpg'),
(26, 'test', 'skdjqsjd', '#e90202', 1, '', 100, 'admin', 'Admin', '2023-11-07', '2023-11-08', '2023-11-01', '13:32:00', '14:33:00', 2023, 10, 'kef', 'uploads/2023117013310.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_category`
--

CREATE TABLE `event_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_category_type`
--

CREATE TABLE `event_category_type` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `name`) VALUES
(11, 'Frensh');

-- --------------------------------------------------------

--
-- Table structure for table `exam_range_classroom`
--

CREATE TABLE `exam_range_classroom` (
  `id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `mark_range` varchar(255) NOT NULL,
  `_from` int(11) NOT NULL,
  `_to` int(11) NOT NULL,
  `mark_classroom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_timetable`
--

CREATE TABLE `exam_timetable` (
  `id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_message`
--

CREATE TABLE `group_message` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `sender_index` bigint(11) NOT NULL,
  `sender_type` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `classroom` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_notifications`
--

CREATE TABLE `main_notifications` (
  `id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `_isread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `main_notifications`
--

INSERT INTO `main_notifications` (`id`, `notification_id`, `_status`, `year`, `month`, `date`, `_isread`) VALUES
(62, 26, 'Events', '2023', '10', '2023-11-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `my_friends`
--

CREATE TABLE `my_friends` (
  `id` int(11) NOT NULL,
  `my_index` bigint(11) NOT NULL,
  `friend_index` bigint(11) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `my_type` varchar(255) NOT NULL,
  `friend_type` varchar(255) NOT NULL,
  `_isread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `my_friends`
--

INSERT INTO `my_friends` (`id`, `my_index`, `friend_index`, `_status`, `conversation_id`, `my_type`, `friend_type`, `_isread`) VALUES
(171, 100, 2, 'Friend', 0, 'Admin', 'Admin', 1),
(172, 2, 100, 'Friend', 0, 'Admin', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification_history`
--

CREATE TABLE `notification_history` (
  `id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `_isread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification_history`
--

INSERT INTO `notification_history` (`id`, `notification_id`, `index_number`, `user_type`, `_isread`) VALUES
(389, 24, 44, 'Student', 0),
(390, 24, 1, 'Teacher', 0),
(391, 24, 2, 'Teacher', 0),
(392, 24, 0, 'Parents', 0),
(393, 24, 0, 'Parents', 0),
(394, 24, 0, 'Parents', 0),
(395, 24, 0, 'Parents', 0),
(396, 25, 2, 'Student', 0),
(397, 25, 14, 'Student', 0),
(398, 25, 44, 'Student', 0),
(399, 25, 1, 'Teacher', 0),
(400, 25, 2, 'Teacher', 0),
(401, 25, 0, 'Parents', 0),
(402, 25, 0, 'Parents', 0),
(403, 25, 0, 'Parents', 0),
(404, 25, 0, 'Parents', 0),
(405, 26, 1, 'Student', 0),
(406, 26, 0, 'Parents', 0);

-- --------------------------------------------------------

--
-- Table structure for table `online_chat`
--

CREATE TABLE `online_chat` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `user_index` bigint(11) NOT NULL,
  `msg` longtext NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `_isread` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `online_chat`
--

INSERT INTO `online_chat` (`id`, `conversation_id`, `user_index`, `msg`, `user_type`, `_isread`, `date`, `time`) VALUES
(33, 0, 2, 'ahla', 'Admin', 1, '2023-11-07', '13:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `cin` int(8) UNSIGNED ZEROFILL DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `troubles` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `téléphone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `conf_password` varchar(20) NOT NULL,
  `otp` int(50) NOT NULL,
  `verification_status` int(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `reste_token` varchar(10) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `index_number` varchar(255) NOT NULL,
  `my_son_index` bigint(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `téléphone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `reg_date` date NOT NULL,
  `reg_year` year(4) NOT NULL,
  `reg_month` varchar(255) NOT NULL,
  `_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `index_number`, `my_son_index`, `fname`, `surname`, `gender`, `address`, `téléphone`, `email`, `image_name`, `b_date`, `reg_date`, `reg_year`, `reg_month`, `_status`) VALUES
(21, 'G-1', 1, 'kqskldjk', 'lkjqdlkjk', 'Male', 'lksqjdlkj', '+21622336523', 'lksjkljqd@gmail.com', 'uploads/2023117012955.jpg', '2023-11-22', '2023-11-07', '2023', 'November', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_notifications`
--

CREATE TABLE `payment_notifications` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petty_cash`
--

CREATE TABLE `petty_cash` (
  `id` int(11) NOT NULL,
  `received_by` bigint(11) NOT NULL,
  `approved_by` bigint(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `paid` double(11,2) NOT NULL,
  `received_type` varchar(255) NOT NULL,
  `_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petty_cash_history`
--

CREATE TABLE `petty_cash_history` (
  `id` int(11) NOT NULL,
  `_desc` varchar(255) NOT NULL,
  `received_by` bigint(11) NOT NULL,
  `approved_by` bigint(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `amount` double(11,2) NOT NULL,
  `total_paid` double(11,2) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `received_type` varchar(255) NOT NULL,
  `_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `téléphone` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `fname`, `address`, `email`, `téléphone`, `image_name`, `index_number`, `reg_date`) VALUES
(17, 'isi kef', 'kef', 'isi@gmail.com', '+21628144145', 'uploads/2023117012740.png', 1, '2023-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `téléphone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `b_date` date NOT NULL,
  `_status` varchar(255) NOT NULL,
  `reg_year` year(4) NOT NULL,
  `reg_month` varchar(255) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `time` time NOT NULL,
  `_status1` varchar(255) NOT NULL,
  `_status2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_classroom`
--

CREATE TABLE `student_classroom` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_classroom`
--

INSERT INTO `student_classroom` (`id`, `index_number`, `classroom_id`, `year`) VALUES
(0, 1, 7, '2023');

-- --------------------------------------------------------

--
-- Table structure for table `student_evaluation`
--

CREATE TABLE `student_evaluation` (
  `id` int(11) NOT NULL,
  `humeur` varchar(255) DEFAULT NULL,
  `participation` varchar(255) DEFAULT NULL,
  `communication` varchar(255) DEFAULT NULL,
  `gouter` varchar(255) DEFAULT NULL,
  `proprete` varchar(255) DEFAULT NULL,
  `comments` varchar(255) NOT NULL,
  `date_evaluate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_exam`
--

CREATE TABLE `student_exam` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_payment`
--

CREATE TABLE `student_payment` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `year` year(4) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `paid` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `student_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_payment_history`
--

CREATE TABLE `student_payment_history` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_fee` double(11,2) NOT NULL,
  `subtotal` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `invoice_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE `student_subject` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `sr_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `reg_month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_routing`
--

CREATE TABLE `subject_routing` (
  `id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `fee` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `cin` int(8) UNSIGNED ZEROFILL NOT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `téléphone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(70) NOT NULL,
  `instagram` varchar(70) NOT NULL,
  `linkedin` varchar(70) NOT NULL,
  `password` varchar(20) NOT NULL,
  `conf_password` varchar(20) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `otp` int(50) NOT NULL,
  `verification_status` int(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `reste_token` varchar(10) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendance`
--

CREATE TABLE `teacher_attendance` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `time` time NOT NULL,
  `_status1` varchar(255) NOT NULL,
  `_status2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_salary`
--

CREATE TABLE `teacher_salary` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `paid` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_salary_history`
--

CREATE TABLE `teacher_salary_history` (
  `id` int(11) NOT NULL,
  `index_number` bigint(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject_fee` double(11,2) NOT NULL,
  `student_count` int(11) NOT NULL,
  `hall_charge` int(11) NOT NULL,
  `subtotal` double(11,2) NOT NULL,
  `paid` double(11,2) NOT NULL,
  `_status` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `invoice_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `type`) VALUES
(75, 'admin@gmail.com', '12345', 'Admin'),
(147, 'admina@gmail.com', '12345', 'Admin'),
(156, 'dqdqd@gmail.com', '12345', 'Avs'),
(157, 'qdlkjds@gmail.com', '12345', 'Teacher'),
(158, 'ndrsvehn@hldrive.com', '12345678a', 'Avs'),
(159, 'qdqksjkd@gmail.com', '12345', 'Student'),
(160, 'lksjkljqd@gmail.com', '12345', 'Parents'),
(161, 'podqs@gmail.com', '12345', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avs`
--
ALTER TABLE `avs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_category`
--
ALTER TABLE `event_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_category_type`
--
ALTER TABLE `event_category_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_range_classroom`
--
ALTER TABLE `exam_range_classroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_timetable`
--
ALTER TABLE `exam_timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_message`
--
ALTER TABLE `group_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_notifications`
--
ALTER TABLE `main_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_friends`
--
ALTER TABLE `my_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_history`
--
ALTER TABLE `notification_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_chat`
--
ALTER TABLE `online_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_notifications`
--
ALTER TABLE `payment_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petty_cash`
--
ALTER TABLE `petty_cash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petty_cash_history`
--
ALTER TABLE `petty_cash_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`,`index_number`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_evaluation`
--
ALTER TABLE `student_evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_exam`
--
ALTER TABLE `student_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_payment`
--
ALTER TABLE `student_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_payment_history`
--
ALTER TABLE `student_payment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_routing`
--
ALTER TABLE `subject_routing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_salary`
--
ALTER TABLE `teacher_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_salary_history`
--
ALTER TABLE `teacher_salary_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `avs`
--
ALTER TABLE `avs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `event_category`
--
ALTER TABLE `event_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_category_type`
--
ALTER TABLE `event_category_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_range_classroom`
--
ALTER TABLE `exam_range_classroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_timetable`
--
ALTER TABLE `exam_timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `group_message`
--
ALTER TABLE `group_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_notifications`
--
ALTER TABLE `main_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `my_friends`
--
ALTER TABLE `my_friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `notification_history`
--
ALTER TABLE `notification_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;

--
-- AUTO_INCREMENT for table `online_chat`
--
ALTER TABLE `online_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment_notifications`
--
ALTER TABLE `payment_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `petty_cash`
--
ALTER TABLE `petty_cash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petty_cash_history`
--
ALTER TABLE `petty_cash_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_evaluation`
--
ALTER TABLE `student_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `student_exam`
--
ALTER TABLE `student_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `student_payment`
--
ALTER TABLE `student_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `student_payment_history`
--
ALTER TABLE `student_payment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;

--
-- AUTO_INCREMENT for table `student_subject`
--
ALTER TABLE `student_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `subject_routing`
--
ALTER TABLE `subject_routing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher_salary`
--
ALTER TABLE `teacher_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_salary_history`
--
ALTER TABLE `teacher_salary_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
