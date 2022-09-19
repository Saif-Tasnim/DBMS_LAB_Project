-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 06:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiu`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `Id` int(11) NOT NULL,
  `f_id` varchar(30) NOT NULL,
  `s_id` varchar(30) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `counselling_info`
--

CREATE TABLE `counselling_info` (
  `Id` int(11) NOT NULL,
  `f_id` varchar(30) NOT NULL,
  `s_id` varchar(30) NOT NULL,
  `course` varchar(100) NOT NULL,
  `summary` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counselling_info`
--

INSERT INTO `counselling_info` (`Id`, `f_id`, `s_id`, `course`, `summary`, `description`, `date`, `s_time`, `e_time`, `status`) VALUES
(20220954, 'SaI', '011201229', 'Database Management Systems', 'normailazation', 'i have a little bit problem about normalization', '2022-09-24', '12:00:00', '12:25:00', 'Accepted'),
(20220956, 'AkM', '011201223', 'Computer Archietecture', 'pipeline math problem', 'I have some issue in math problem in pipeline by pass', '2022-10-01', '12:30:00', '13:00:00', 'Pending'),
(20220957, 'AbH', '011201220', 'Electronics', 'about mosfet', 'i dont have any fucking knowledge about mosfet', '2022-09-24', '14:00:00', '14:20:00', 'Rejected'),
(20220958, 'SaI', '011201223', 'Database Management Systems Laboratory', 'adsafd', 'rerftytf', '2022-09-24', '10:07:00', '10:30:00', 'Accepted'),
(20220959, 'SaI', '011201223', 'Database Management Systems', 'dafsdafds', 'hjhjhkwfwf', '2022-09-24', '12:00:00', '12:30:00', 'Pending'),
(20220960, 'SaI', '011201305', 'Database Management Systems', 'dfdgfgf', 'gjgkjgkj', '2022-09-25', '10:00:00', '10:20:00', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `f_id` varchar(30) NOT NULL,
  `c_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`f_id`, `c_name`) VALUES
('AbH', 'Electronics'),
('AbH', 'Electronics Lab'),
('SaI', 'Database Management Systems'),
('SaI', 'Database Management Systems Laboratory'),
('SaI', 'Data Structure & Algorithm I'),
('SaI', 'Data Structure & Algorithm I Laboratory'),
('AbH', 'Digital Logic Design Laboratory'),
('AbH', 'Electrical Circuits'),
('AkM', 'Electronics'),
('AkM', 'Electronics Laboratory'),
('AkM', 'Digital Logic Design'),
('AkM', 'Digital Logic Design Laboratory'),
('AkM', 'Computer Archietecture'),
('NSS', 'Theory Of Computation'),
('NSS', 'Object Oriented Programming Laboratory'),
('FAH', 'Data Structure & ALgorithm I'),
('FAH', 'Database Management System');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Id` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `E_mail` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Room` int(11) NOT NULL,
  `Availability` varchar(15) NOT NULL,
  `coun` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `Name`, `E_mail`, `Designation`, `Room`, `Availability`, `coun`) VALUES
('AbH', 'Abir Hassan', 'abir@cse.uiu.ac.bd', 'Lecturer', 636, 'No', 'Want to Counselling ? '),
('AkM', 'Anik Mazumdar', 'mazumdar@cse.uiu.ac.bd', 'Lecturer', 418, 'Yes', 'Want to Counselling ? '),
('FAH', 'Farhan Anan Himu', 'himu@cse.uiu.ac.bd', 'Lecturer', 536, 'Yes', 'Want to Counselling ? '),
('NSS', 'Nabila Sabrin Swarna', 'nabila@bscse.uiu.ac.bd', 'Lecturer', 418, 'No', 'Want to Counselling ? '),
('SaI', 'Sadia Islam', 'sadia@cse.uiu.ac.bd', 'Lecturer', 536, 'Yes', 'Want to Counselling ? ');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_day`
--

CREATE TABLE `faculty_day` (
  `Id` int(11) NOT NULL,
  `f_id` varchar(30) NOT NULL,
  `day` varchar(100) NOT NULL,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_day`
--

INSERT INTO `faculty_day` (`Id`, `f_id`, `day`, `s_time`, `e_time`) VALUES
(1, 'NSS', 'Saturday', '09:30:00', '11:00:00'),
(3, 'AbH', 'Saturday', '13:30:00', '15:00:00'),
(10, 'SaI', 'Saturday', '11:30:00', '15:30:00'),
(11, 'SaI', 'Sunday', '10:00:00', '14:00:00'),
(12, 'SaI', 'Tuesday', '13:30:00', '15:00:00'),
(13, 'SaI', 'Wednesday', '10:00:00', '12:30:00'),
(15, 'AkM', 'Saturday', '12:00:00', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `S_id` varchar(30) NOT NULL,
  `S_password` varchar(100) NOT NULL,
  `F_id` varchar(15) NOT NULL,
  `F_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`S_id`, `S_password`, `F_id`, `F_password`) VALUES
('011201223', '011201223', 'AkM', 'AkM'),
('011201229', '011201229', 'AbH', 'AbH'),
('011201234', '011201234', 'MiBa', 'MiBa'),
('011201237', '011201237', 'SaI', 'SaI'),
('011201005', '011201005', 'FAH', 'FAH'),
('011201305', '011201305', 'NSS', 'NSS'),
('011201224', '011201224', 'NaH', 'NaH'),
('011201220', '011201220', 'MSAS', 'MSAS');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Id` int(11) NOT NULL,
  `f_id` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sharing`
--

CREATE TABLE `sharing` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` longblob NOT NULL,
  `privacy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sharing`
--

INSERT INTO `sharing` (`id`, `title`, `content`, `privacy`) VALUES
(5, 'C : Mother Of All Language', 0x43206973206b6e6f776e206173206d6f74686572206f66206c616e676175676520666f726d656420627920526963636869652044616e6e6973682e4e6f77206d616e79206f6620796f75206d696768742061736b20746861742077687920646f207765206e65656420504850207768656e20776520616c726561647920686176652048544d4c2e20556e6c696b652048544d4c2c2050485020616c6c6f77732074686520636f64657220746f2063726561746520616e2048544d4c2070616765206f722073656374696f6e206f662069742064796e616d6963616c6c792e2050485020697320616c736f2063617061626c65206f662074616b696e67206461746120616e6420757365206f72206d616e6970756c61746520697420746f2063726561746520746865206f7574707574207468617420746865207573657220646573697265732e, 'Private'),
(6, 'PHP: Beginner Guide', 0x4850207374616e647320666f72204879706572746578742050726570726f636573736f722e205048502069732061207665727920706f70756c617220616e6420776964656c792d75736564206f70656e20736f75726365207365727665722d7369646520736372697074696e67206c616e677561676520746f2077726974652064796e616d6963616c6c792067656e657261746564207765622070616765732e2050485020776173206f726967696e616c6c792063726561746564206279205261736d7573204c6572646f726620696e20313939342e2049742077617320696e697469616c6c79206b6e6f776e20617320506572736f6e616c20486f6d6520506167652e0d0a0d0a504850207363726970747320617265206578656375746564206f6e207468652073657276657220616e642074686520726573756c742069732073656e7420746f20746865207765622062726f7773657220617320706c61696e2048544d4c2e205048502063616e20626520696e7465677261746564207769746820746865206e756d626572206f6620706f70756c6172206461746162617365732c20696e636c7564696e67204d7953514c2c20506f737467726553514c2c204f7261636c652c204d6963726f736f66742053514c205365727665722c205379626173652c20616e6420736f206f6e2e205468652063757272656e74206d616a6f722076657273696f6e206f662050485020697320372e20416c6c206f662074686520636f646520696e2074686973207475746f7269616c20686173206265656e2074657374656420616e642076616c69646174656420616761696e737420746865206d6f737420726563656e742072656c65617365206f662050485020372e0d0a0d0a504850206973207665727920706f77657266756c206c616e677561676520796574206561737920746f206c6561726e20616e64207573652e20536f20626f6f6b6d61726b2074686973207765627369746520616e6420636f6e74696e756564206f6e2e, 'Private'),
(7, 'MY SQL Tutorials Beginner', 0x4d7953514c20697320616e206f70656e2d736f75726365206461746162617365206d616e6167656d656e742073797374656d207573656420746f206f7267616e697a65206461746120696e746f206f6e65206f72206d6f7265207461626c65732c20686176696e6720646174612074797065732072656c6174656420746f2065616368206f746865722e205468657365206461746120747970657320617265207573656420746f20657874726163742c206d6f646966792c206f72207374727563747572652074686520646174612e20497420616c736f20616c6c6f777320696d706c656d656e74696e67206120646174616261736520696e20636f6d70757465722073797374656d732c206d616e6167696e672075736572732c20646174616261736520696e746567726974792074657374696e672c20616e64206261636b7570206372656174696f6e2e, 'Private'),
(8, 'Baler Project SHow', 0x5661692062697368617368206b6f72656e20616d692073757265206574612062616c20666163756c7479206a69626f6e656f206e6120657461206d61726120646962652076756c656f2068696d75207369722065722073656374696f6e206e657761206a616265206e610d0a, 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `E_mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Name`, `E_mail`) VALUES
('011201005', 'Sabrina Aireen Esha', 'sesha201005@bscse.uiu.ac.bd'),
('011201220', 'Taseen Tahmeed', 'ttahmeed201220@bscse.uiu.ac.bd'),
('011201223', 'Saif Tasnim Chowdhury', 'schowdhury201223@bscse.uiu.ac.bd'),
('011201224', 'Nazmul Huda', 'nhuda201224@bscse.uiu.ac.bd'),
('011201229', 'Arafat Hossen', 'ahossen201229@bscse.uiu.ac.bd'),
('011201234', 'Abdul Muhit Chowdhury', 'achowdhury201234@bscse.uiu.ac.bd'),
('011201237', 'Shahariar Sarkar', 'ssarkar201237@bscse.uiu.ac.bd'),
('011201305', 'Umme Aimon Bristy', 'ubristy201305@bscse.uiu.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL,
  `file_description` text NOT NULL,
  `file_type` varchar(225) NOT NULL,
  `file_uploader` varchar(225) NOT NULL,
  `file_uploaded_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file_uploaded_to` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL DEFAULT 'not approved yet'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`file_id`, `file_name`, `file_description`, `file_type`, `file_uploader`, `file_uploaded_on`, `file_uploaded_to`, `file`, `status`) VALUES
(57, 'DS-1', 'DS-1 Note', 'pdf', 'Sumaiya Alam', '2022-09-19 02:56:37', 'Computer Science', '578090.pdf', 'approved'),
(58, 'phpp demo', 'ppph demo', 'pdf', 'Shahariar Sarkar', '2022-09-19 02:56:37', 'Computer Science', '69321.pdf', 'not approved yet'),
(54, 'DM', 'Discrete mathematics Note', 'zip', 'Farjana Islam', '2022-09-19 02:56:37', 'Computer Science', '848114.zip', 'approved'),
(51, 'Electronics', 'Electronics Note', 'pdf', 'Abdul Muhit Chowdhury', '2022-09-19 02:56:37', 'Computer Science', '437056.pdf', 'approved'),
(50, 'AI', 'AI Note & Sample Problem Solve', 'ppt', 'Saif Tasnim Chowdhury', '2022-09-19 02:56:37', 'Computer Science', '800920.ppt', 'approved'),
(49, 'DBMS Lab', 'DBMS Lab Practice Problem', 'docx', 'Arafat Hossen', '2022-09-19 02:56:37', 'Computer Science', '502238.docx', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `counselling_info`
--
ALTER TABLE `counselling_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty_day`
--
ALTER TABLE `faculty_day`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD KEY `S_id` (`S_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `sharing`
--
ALTER TABLE `sharing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counselling_info`
--
ALTER TABLE `counselling_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20220961;

--
-- AUTO_INCREMENT for table `faculty_day`
--
ALTER TABLE `faculty_day`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `sharing`
--
ALTER TABLE `sharing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_in`
--
ALTER TABLE `log_in`
  ADD CONSTRAINT `log_in_ibfk_1` FOREIGN KEY (`S_id`) REFERENCES `student` (`Id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
