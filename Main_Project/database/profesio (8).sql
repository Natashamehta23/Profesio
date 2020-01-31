-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 09:56 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profesio`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE `accept` (
  `from_db` varchar(100) NOT NULL,
  `to_db` varchar(100) NOT NULL,
  `cust_n` varchar(100) NOT NULL,
  `emp_n` varchar(100) NOT NULL,
  `client_address` varchar(200) NOT NULL,
  `service_needed` varchar(100) NOT NULL,
  `charges` int(100) NOT NULL,
  `date_of_service` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`from_db`, `to_db`, `cust_n`, `emp_n`, `client_address`, `service_needed`, `charges`, `date_of_service`) VALUES
('c2', 'e3', 'ijk', 'lmn', 'banglore', 'tutor', 1000, '2019-06-21'),
('e1', 'c1', 'ijk', 'lmn', 'himachal', 'tutor', 500, '2019-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `email_db` varchar(50) NOT NULL DEFAULT 'no',
  `username_db` varchar(50) NOT NULL,
  `password_db` varchar(51) NOT NULL,
  `cust_id_db` varchar(11) NOT NULL,
  `deleted` varchar(5) DEFAULT 'no',
  `deactivate_db` varchar(5) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`email_db`, `username_db`, `password_db`, `cust_id_db`, `deleted`, `deactivate_db`) VALUES
('abc24@gmail.com', 'abc', 'abc', 'abc', 'no', 'no'),
('akshay@gmail.com', 'akshay2', 'akshay', 'c1', 'no', 'no'),
('aman@gmail.com', 'aman3', 'aman', 'c2', 'no', 'no'),
('shweta@gmail.com', 'Shweta_Pal_', 'shweta', 'C213166', 'no', 'no'),
('siddharth@gmail.com', 'Siddharth_Rajput_', 'siddharth', 'C266200', 'no', 'no'),
('ritik@gmail.com', 'ritik4', 'ritik', 'C3', 'no', 'no'),
('sonali@gmail.com', 'Sonali', 'sonali', 'C3434', 'no', 'no'),
('nitesh@gmail.com', 'Nitesh _Nanda_', 'nitesh', 'C398299', 'no', 'no'),
('rahul@gmail.com', 'rahul3', 'rahul', 'c4', 'no', 'no'),
('harshitrajpal@gmail.com', 'Harshit_Rajpal_', 'harshit', 'C439583', 'no', 'no'),
('kritika@gmail.com', 'Kritika_Phulli_', 'kritika', 'C452702', 'no', 'no'),
('sweety@gmail.com', 'Sweety_Jha_', 'sweety', 'C697145', 'no', 'no'),
('rahul@gmail.com', 'Rahul_Khuswaha_', 'rahul', 'C720548', 'no', 'no'),
('sachin@gmail.com', 'Sachin_Sharma_', 'sachin', 'C741224', 'no', 'no'),
('aman@gmail.com', 'Aman _Rawat_', 'aman', 'C898882', 'no', 'no'),
('ramanuj@gamil.com', 'Ramanuj_Vashistha_', 'ramanuj', 'C955938', 'no', 'no'),
('saloni@gmailcom', '', 'saloni', 'E148938', 'no', 'no'),
('harshit@gmail.com', '', 'harshit', 'E185279', 'no', 'no'),
('harsh@gmail.com', '', 'harsh', 'E434939', 'no', 'no'),
('arpit@gmail.com', '', 'arpit', 'E467553', 'no', 'no'),
('tanvi@gmail.com', '', 'tanvi', 'E510343', 'no', 'no'),
('nishant@gmail.com', '', 'nishant', 'E539262', 'no', 'no'),
('amrit@gmaill.com', '', 'amrit', 'E635585', 'no', 'no'),
('abhishekmalakar@gmail.com', '', 'Abhishekmalakar', 'E774801', 'no', 'no'),
('abhishek@gmail.com', '', 'abhishek', 'E830471', 'no', 'no'),
('simran@gamil.com', '', 'simran', 'E952957', 'no', 'no'),
('087.nitinkumar@gmail.com', 'nitin.087', 'nitin', 'nitin_kumar', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `circle`
--

CREATE TABLE `circle` (
  `user_1` varchar(50) NOT NULL,
  `user_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`user_1`, `user_2`) VALUES
('c1', 'e1'),
('c1', 'e2'),
('c1', 'e3'),
('c1', 'e4'),
('c1', 'e5'),
('c1', 'e6'),
('e1', 'c1'),
('e1', 'c2'),
('e1', 'c3'),
('e1', 'c4'),
('e1', 'c5'),
('e1', 'c6');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `cust_id_db` varchar(100) NOT NULL,
  `first_name_db` varchar(21) NOT NULL,
  `last_name_db` varchar(21) NOT NULL,
  `email_db` varchar(100) NOT NULL,
  `pass_db` varchar(100) NOT NULL,
  `dob_db` date NOT NULL,
  `city_db` varchar(11) NOT NULL,
  `telephone_db` int(11) NOT NULL,
  `deleted` varchar(5) NOT NULL DEFAULT 'no',
  `deactivate_db` varchar(5) NOT NULL DEFAULT 'no',
  `image_loc` varchar(500) NOT NULL DEFAULT './assets/images/profile_pics/defaults/head_emerald.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cust_id_db`, `first_name_db`, `last_name_db`, `email_db`, `pass_db`, `dob_db`, `city_db`, `telephone_db`, `deleted`, `deactivate_db`, `image_loc`) VALUES
('C213166', 'Shweta', 'Pal', 'shweta@gmail.com', 'shweta', '2019-03-05', 'Gurgaon', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C266200', 'Siddharth', 'Rajput', 'siddharth@gmail.com', 'siddharth', '1991-03-05', 'Rajouri', 987654388, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C3434', 'Sonali', 'Sah', 'sonali@gmail.com', 'sonali', '2019-06-06', 'Delhi', 123456789, '', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C398299', 'Nitesh ', 'Nanda', 'nitesh@gmail.com', 'nitesh', '1996-06-21', 'Delhi', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C439583', 'Harshit', 'Rajpal', 'harshitrajpal@gmail.com', 'harshit', '2019-10-24', 'Delhi', 1234567889, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C452702', 'Kritika', 'Phulli', 'kritika@gmail.com', 'kritika', '2019-12-07', 'Dwarka', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C697145', 'Sweety', 'Jha', 'sweety@gmail.com', 'sweety', '1995-01-03', 'Hauz Khas', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C720548', 'Rahul', 'Khuswaha', 'rahul@gmail.com', 'rahul', '1988-06-07', 'Dehradun', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C741224', 'Sachin', 'Sharma', 'sachin@gmail.com', 'sachin', '1998-06-03', 'Chandigarh', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C898882', 'Aman ', 'Rawat', 'aman@gmail.com', 'aman', '2019-04-11', 'Noida', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('C955938', 'Ramanuj', 'Vashistha', 'ramanuj@gamil.com', 'ramanuj', '2019-12-20', 'Dwarka', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('diksha__tanwar', 'Diksha', 'Tanwar', 'diksha_tanwar@gmail.com', 'fderfdg', '1999-03-31', 'delhi', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('natasha_mehta', 'Natasha', 'Mehta', 'natasha_mehta34@gmail.com', 'xdhjfdsfgj', '1998-04-25', 'Gurgaon', 2147483647, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png'),
('nitin_kumar', ' Nitin', ' kumar', ' 087.nitinkumar@gmail.com', 'nitin', '2019-07-16', 'palam', 987654321, 'yes', 'yes', './assets/images/profile_pics/defaults/head_emerald.png'),
('radhika_chu', 'Radhika', 'Chugh', 'radhika.chugh@gmail.com', 'rerdtth', '1999-05-23', 'New Delhi', 997557578, 'no', 'no', './assets/images/profile_pics/defaults/head_emerald.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id_db` varchar(50) NOT NULL,
  `first_name_db` varchar(50) NOT NULL,
  `last_name_db` varchar(50) NOT NULL,
  `email_db` varchar(50) NOT NULL,
  `pass_db` varchar(50) NOT NULL,
  `dob_db` date NOT NULL,
  `address_db` varchar(50) NOT NULL,
  `city_db` varchar(50) NOT NULL,
  `telephone_db` int(50) NOT NULL,
  `profession_db` varchar(50) NOT NULL,
  `Charges` int(255) NOT NULL DEFAULT '0',
  `image_loc` varchar(500) NOT NULL DEFAULT './assets/images/profile_pics/defaults/head_emerald.png',
  `deleted` varchar(21) NOT NULL DEFAULT 'no',
  `deactivated` varchar(21) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id_db`, `first_name_db`, `last_name_db`, `email_db`, `pass_db`, `dob_db`, `address_db`, `city_db`, `telephone_db`, `profession_db`, `Charges`, `image_loc`, `deleted`, `deactivated`) VALUES
('C227', 'Deepak', 'Kumar', 'deepak@gmail.com', 'deepak', '2019-06-06', 'haryana', 'Gurgaon', 1235689799, 'technician', 0, '', '', ''),
('C2788', 'Tushar', 'Kumar', 'tushar@gmail.com', 'tushar', '2019-06-03', 'Delhi', 'Delhi', 123456789, 'plumber', 0, '', '', ''),
('C3177', 'Vishik', 'Rana', 'vishik@gmail.com', 'vishik', '2019-06-07', 'Uttrakhand', 'Dehradun', 1235689799, 'tutor', 0, '', '', ''),
('C6899', 'Sonali', 'Sah', 'sonali@gmail.com', 'sonali', '2019-06-06', 'Delhi', 'Delhi', 123456789, 'tutor', 0, '', '', ''),
('C8362', ' Natasha', ' Mehta', 'natasha@gmail.com', 'natasha', '2019-06-06', 'haryana', 'Gurgaon', 1235689799, 'tutor', 60, '', '', ''),
('E1', 'Mukul', 'Wadhwa', '', '', '1999-06-05', 'Dwarka', 'Delhi', 1987654329, 'Plumber', 0, './assets/images/profile_pics/defaults/head_emerald.png', 'no', 'no'),
('E148938', 'Saloni', 'Jain', 'saloni@gmailcom', 'saloni', '1995-07-30', 'Greater Noida', 'Noida', 2147483647, 'Gardener', 0, '', '', ''),
('E185279', 'Harshit', 'Bhan', 'harshit@gmail.com', 'harshit', '1993-02-12', 'Greater Noida', 'Noida', 2147483647, 'Technician', 0, '', '', ''),
('E2', 'Vivek', 'Kumar', '', '', '1999-08-16', 'Noida', 'Noida', 1156789432, 'Midwife', 0, './assets/images/profile_pics/defaults/head_emerald.png', 'no', 'no'),
('E3', 'Ayush', 'Rawat', '', '', '2019-06-15', 'Dwarka', 'Delhi', 234567893, 'Architect', 0, './assets/images/profile_pics/defaults/head_emerald.png', 'no', 'no'),
('E4', 'Pratik', 'Sehgal', '', '', '1999-12-18', 'Gurgaon', 'Gurgaon', 1114678923, 'Techician', 0, './assets/images/profile_pics/defaults/head_emerald.png', 'no', 'no'),
('E434939', 'Harsh', 'Chamoli', 'harsh@gmail.com', 'harsh', '2019-04-25', 'Hyderabad', 'Hyderabad', 2147483647, 'Architect', 0, '', '', ''),
('E467553', 'Arpit', 'Gupta', 'arpit@gmail.com', 'arpit', '1993-08-29', 'East Delhi', 'Delhi', 2147483647, 'Labourer', 0, '', '', ''),
('E510343', 'Tanvi', 'Kapani', 'tanvi@gmail.com', 'tanvi', '2019-05-21', 'South Delhi', 'Delhi', 2147483647, 'Tutor', 0, '', '', ''),
('E539262', 'Nishant', 'kaushik', 'nishant@gmail.com', 'nishant', '2019-09-27', 'Gurgaon sec 9', 'Gurgaon', 2147483647, 'Tutor', 0, '', '', ''),
('E635585', 'Amrit', 'Thulal', 'amrit@gmaill.com', 'amrit', '1985-08-06', 'New Delhi', 'Delhi', 1234567899, 'Tutor', 0, '', '', ''),
('E774801', 'Abhishek', 'Malakar', 'abhishekmalakar@gmail.com', 'Abhishekmalakar', '2019-03-21', 'South Delhi', 'Delhi', 2147483647, 'Plumber', 0, '', '', ''),
('E830471', 'Abhishek', 'Thapliya', 'abhishek@gmail.com', 'abhishek', '1999-01-06', 'North Delhi', 'Delhi', 1234567891, 'Technician', 0, '', '', ''),
('E952957', 'Simran', 'Rana', 'simran@gamil.com', 'simran', '1995-07-16', 'Chandigarh Sec- 22', 'Chandigarh', 2147483647, 'Architect', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `from_id_db` varchar(100) NOT NULL,
  `to_id_db` varchar(100) NOT NULL,
  `from_name_db` varchar(30) NOT NULL,
  `to_name_db` varchar(30) NOT NULL,
  `message_db` text NOT NULL,
  `time_stanp_db` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`from_id_db`, `to_id_db`, `from_name_db`, `to_name_db`, `message_db`, `time_stanp_db`) VALUES
('C1010', 'E1010', 'ritik', 'nitin', 'hi', '2019-06-12 03:09:50'),
('C1010', 'E1010', 'ritik', 'nitin', 'hi', '2019-06-12 03:16:43'),
('E1010', 'C1010', 'nitin', 'ritik', 'hi', '2019-06-12 03:16:43'),
('C1010', 'E1010', 'ritik', 'nitin', 'hi', '2019-06-12 03:16:43'),
('E1010', 'C1010', 'nitin', 'ritik', 'hi', '2019-06-12 03:16:43'),
('C1010', 'E1010', 'ritik', 'nitin', 'hi', '2019-06-12 03:16:43'),
('E1010', 'C1010', 'nitin', 'ritik', 'hi', '2019-06-12 03:16:44'),
('C1010', 'E1010', 'ritik', 'nitin', 'hi', '2019-06-12 03:16:44'),
('E1010', 'C1010', 'nitin', 'ritik', 'hi', '2019-06-12 03:16:44'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'hello', '2019-06-12 04:26:48'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'hello', '2019-06-12 04:27:33'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'hello ritika\n', '2019-06-12 04:28:13'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'hisadfo', '2019-06-12 05:44:49'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'hii', '2019-06-12 05:50:53'),
('C1010', 'E1010', 'Nitin', 'Ritik', '', '2019-06-12 05:51:02'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'heellllo\n', '2019-06-12 05:53:22'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'gfhgfgh', '2019-06-12 05:55:53'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'ritik tere se pyar krta hai', '2019-06-12 06:05:41'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'hhheeeklllo', '2019-06-12 06:16:33'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'are bhaii gajab hai tu..ek dum mst...pr merec type ki nhi hai\n', '2019-06-12 07:09:01'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'hiii', '2019-06-13 03:02:50'),
('E1010', 'C1010', 'nitin', 'ritik', 'hloo', '2019-06-19 05:02:00'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'yjhgj', '2019-06-20 16:26:34'),
('C1010', 'E1010', 'Nitin', 'Ritik', '', '2019-06-20 17:08:02'),
('C1010', 'E1010', 'nitin', 'ritik', 'hfdbvahbvlenvlewbv', '2019-06-21 05:59:27'),
('C1010', 'E1111', 'nitin', 'rahul', 'hsdnjgfjsgn', '2019-06-21 06:11:58'),
('E1010', 'C1010', 'mukul', 'nitin', 'hsdnjgfjsgn', '2019-06-21 06:12:41'),
('C1010', 'E1010', 'Nitin', 'Ritik', 'jhuguhuh', '2019-06-22 16:47:58'),
('c1', 'e1', 'nitin', 'raj', 'fdagvfdagv', '2019-06-22 17:28:44'),
('c1', 'e2', 'nitin', 'raj', 'fdagvfdagv', '2019-06-22 17:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `noti_id_db` varchar(50) NOT NULL,
  `user_to_db` varchar(50) NOT NULL,
  `user_from_db` varchar(50) NOT NULL,
  `message_db` varchar(500) NOT NULL DEFAULT 'no',
  `is_notification_db` varchar(5) NOT NULL DEFAULT 'no',
  `date_time_db` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `opened_db` varchar(11) NOT NULL DEFAULT 'no',
  `viewed_db` varchar(12) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`noti_id_db`, `user_to_db`, `user_from_db`, `message_db`, `is_notification_db`, `date_time_db`, `opened_db`, `viewed_db`) VALUES
('N1', 'sonali', 'natasha', 'hii', '', '2019-06-12 05:19:00', 'no', 'no'),
('N2', 'akshay', 'ritik', 'hii', '', '2019-06-03 10:17:00', 'no', 'no'),
('N3', 'priyanka', 'deepika', 'hii', '', '2019-06-11 05:19:00', 'no', 'no'),
('N4', 'meet', 'rahul', 'hii', '', '2015-06-03 10:17:00', 'no', 'no'),
('N5', '', '', 'You h', '', '0000-00-00 00:00:00', '', ''),
('N5', 'E1', 'c1', 'You h', '', '0000-00-00 00:00:00', '', ''),
('E1', 'c1', 'deepika', 'you h', '', '0000-00-00 00:00:00', 'no', 'no'),
('E1', 'c1', 'deepika', 'you h', '', '2019-06-21 11:20:43', 'no', 'no'),
('N1', 'E1', 'c1', 'you h', '', '2019-06-21 11:23:44', 'no', 'no'),
('N12', 'E1', 'deepika', 'You have notification', 'yes', '2019-06-21 12:51:58', 'no', 'no'),
('N15', 'E1', 'c2', 'You have notification', 'yes', '2019-06-24 10:02:23', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `SNO` bigint(20) UNSIGNED NOT NULL,
  `USER_NAME` varchar(200) NOT NULL,
  `ACTIVE` int(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`SNO`, `USER_NAME`, `ACTIVE`) VALUES
(1, 'Nitin', 1),
(2, 'Nitin', 1),
(3, 'Ritik', 1),
(4, 'Ayush', 1),
(5, 'Natasha', 1),
(6, 'natasha', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `user_id_db` varchar(50) NOT NULL,
  `post_text_db` text NOT NULL,
  `time_db` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `accept_link` varchar(100) NOT NULL,
  `image_loc` varchar(500) NOT NULL DEFAULT './assets/images/profile_pics/defaults/head_emerald.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`user_id_db`, `post_text_db`, `time_db`, `accept_link`, `image_loc`) VALUES
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('e1', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('e2', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('e3', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('e4', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('e5', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('c2', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('c3', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('c4', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('c5', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('c5', 'hello', '2019-06-13 08:21:46', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png'),
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('c1', 'asdfsdfsdf', '2019-06-13 04:30:35', './accept_link', './assets/images/uploads/972738547f88e399bf8bc602220bf86f.jpg'),
('nitin_kumar', 'hiii', '2019-06-22 16:21:55', './accept_link', './assets/images/profile_pics/defaults/head_emerald.png');

-- --------------------------------------------------------

--
-- Table structure for table `profession_db`
--

CREATE TABLE `profession_db` (
  `prof_id` int(20) NOT NULL,
  `profession` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profession_db`
--

INSERT INTO `profession_db` (`prof_id`, `profession`, `name`) VALUES
(1, 'Tutor', 'Sonali Sah'),
(2, 'Technician', 'Nitin'),
(3, 'Physician', 'Aditya'),
(4, 'Tutor', 'Akshay');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `emp_id_db` varchar(21) NOT NULL,
  `Behaviour` int(5) NOT NULL,
  `Punctuality` int(5) NOT NULL,
  `Working_Skill` int(5) NOT NULL,
  `Rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`emp_id_db`, `Behaviour`, `Punctuality`, `Working_Skill`, `Rating`) VALUES
('E1', 6, 5, 4, 3),
('E2', 5, 4, 3, 1),
('E4', 5, 4, 3, 1),
('', 5, 4, 4, 9),
('E6', 5, 4, 3, 3),
('C6899', 5, 4, 5, 2),
('C227', 5, 4, 5, 1),
('C2788', 5, 3, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review_db`
--

CREATE TABLE `review_db` (
  `emp_id_db` varchar(21) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_db`
--

INSERT INTO `review_db` (`emp_id_db`, `Comment`, `timestamp`) VALUES
('E2', 'online', '2019-06-12 08:05:36'),
('E1', 'good', '0000-00-00 00:00:00'),
('E1', 'good', '2019-06-12 08:25:13'),
('E1', 'good', '2019-06-12 15:31:00'),
('E1', 'good', '2019-06-12 15:33:29'),
('E4', 'nice!!', '2019-06-13 07:39:19'),
('E4', 'nice!!', '2019-06-13 07:40:14'),
('', 'good!!!', '2019-06-13 16:37:39'),
('', 'good!!', '2019-06-13 16:40:23'),
('', 'good!!', '2019-06-13 16:42:21'),
('', 'good!!', '2019-06-13 17:50:19'),
('', 'good!!!!!!!!!!', '2019-06-14 04:42:12'),
('', 'Yooooo!!', '2019-06-14 04:49:34'),
('', 'good', '2019-06-17 04:42:02'),
('', 'good!!!!!', '2019-06-17 06:15:48'),
('', 'Nice!!!!', '2019-06-17 06:16:49'),
('E6', 'okay!!', '2019-06-17 06:20:46'),
('E6', 'nice', '2019-06-18 05:20:34'),
('E6', 'niceee!!', '2019-06-19 05:26:18'),
('C6899', 'nice!!!111!!!', '2019-06-24 03:33:06'),
('C6899', 'nice!!!111!!!', '2019-06-24 03:33:13'),
('C227', 'nice', '2019-06-24 09:16:16'),
('C2788', 'vyfkf', '2019-06-24 16:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `service_request_db`
--

CREATE TABLE `service_request_db` (
  `from_db` varchar(11) NOT NULL,
  `to_db` varchar(11) NOT NULL,
  `ser_id_db` varchar(11) NOT NULL,
  `ser_request_db` varchar(5) NOT NULL,
  `ser_req_accepted` varchar(5) NOT NULL DEFAULT 'YES'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_request_db`
--

INSERT INTO `service_request_db` (`from_db`, `to_db`, `ser_id_db`, `ser_request_db`, `ser_req_accepted`) VALUES
('c1', 'E1', 'S1', '3', 'YES'),
('', '', '', '', 'YES'),
('', '', '', '', 'YES'),
('', '', '', '', 'YES'),
('', '', '', '', 'YES'),
('', '', '', '', 'YES'),
('', '', '', '', 'YES'),
('', '', '', '', 'YES'),
('', '', '', '', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(21) NOT NULL,
  `First_name` varchar(21) NOT NULL,
  `Last_name` varchar(21) NOT NULL,
  `employers_db` varchar(210) NOT NULL,
  `user_closed` varchar(21) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `First_name`, `Last_name`, `employers_db`, `user_closed`) VALUES
('natasha23', 'natasha', 'Mehta', '', 'NO'),
('khushwaha11', 'rahul', 'khuswaha', '', 'NO'),
('mridu23', 'mridu', 'Mridu', '', 'NO'),
('ayush11', 'ayush', 'rawat', '', 'NO'),
('nitin01', 'nitin', 'kumar', 'abhijeet,aman,chirag', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`cust_id_db`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cust_id_db`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id_db`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD UNIQUE KEY `SNO` (`SNO`);

--
-- Indexes for table `profession_db`
--
ALTER TABLE `profession_db`
  ADD PRIMARY KEY (`prof_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `SNO` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profession_db`
--
ALTER TABLE `profession_db`
  MODIFY `prof_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
