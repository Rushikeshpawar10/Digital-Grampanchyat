-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 07:35 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalgrampanchayat`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `applicationid` int(11) NOT NULL,
  `dbname` varchar(255) NOT NULL,
  `applicationname` varchar(255) NOT NULL,
  `applicationdate` datetime NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`applicationid`, `dbname`, `applicationname`, `applicationdate`, `userid`, `status`) VALUES
(2, 'watertanker', 'watertankerapplication', '2023-03-02 00:08:24', 6, 3),
(8, 'deathbirthreg', 'birthregistrationapplication', '2023-03-02 12:29:54', 6, 2),
(9, 'resident', 'residentregistrationapplication', '2023-03-02 12:47:58', 6, 0),
(19, 'watertanker', 'watertankerapplication', '2023-03-02 19:42:36', 6, 0),
(20, 'watertanker', 'watertankerapplication', '2023-03-07 12:21:26', 6, 0),
(21, 'watertanker', 'watertankerapplication', '2023-03-07 12:22:40', 6, 0),
(22, 'watertanker', 'watertankerapplication', '2023-03-07 12:24:51', 6, 2),
(23, 'resident', 'residentregistrationapplication', '2023-03-07 12:26:11', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `approvalid` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `approvaldate` datetime NOT NULL DEFAULT current_timestamp(),
  `validity` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approvals`
--

INSERT INTO `approvals` (`approvalid`, `applicationid`, `approvaldate`, `validity`) VALUES
(1, 22, '2023-03-07 13:35:59', '2023-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `birthcert`
--

CREATE TABLE `birthcert` (
  `id` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `applicationname` varchar(255) NOT NULL,
  `applicantname` varchar(255) NOT NULL,
  `applicantemail` varchar(50) NOT NULL,
  `applicantmobile` int(10) NOT NULL,
  `applicantaddress` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `personname` varchar(255) NOT NULL,
  `dateofevent` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `personperadd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `busnoc`
--

CREATE TABLE `busnoc` (
  `id` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `applicantname` varchar(255) NOT NULL,
  `applicantemail` varchar(50) NOT NULL,
  `applicantmobile` int(10) NOT NULL,
  `applicantaddress` text NOT NULL,
  `certificatename` varchar(255) NOT NULL,
  `gno` int(11) NOT NULL,
  `applicationname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `certificateid` int(11) NOT NULL,
  `certificatename` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `validity` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`certificateid`, `certificatename`, `userid`, `applicationid`, `validity`) VALUES
(1, 'Birth Certificate', 6, 8, '2023-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `cnstpermit`
--

CREATE TABLE `cnstpermit` (
  `id` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `applicationname` varchar(255) NOT NULL,
  `applicantname` varchar(255) NOT NULL,
  `applicantemail` varchar(50) NOT NULL,
  `applicantmobile` int(10) NOT NULL,
  `applicantaddress` text NOT NULL,
  `gno` int(11) NOT NULL,
  `lengthofp` int(11) NOT NULL,
  `widthofp` int(11) NOT NULL,
  `cnsttype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deathbirthreg`
--

CREATE TABLE `deathbirthreg` (
  `id` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `applicationname` varchar(255) NOT NULL,
  `applicantname` varchar(255) NOT NULL,
  `applicantemail` varchar(50) NOT NULL,
  `applicantmobile` int(10) NOT NULL,
  `applicantaddress` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `personname` varchar(255) NOT NULL,
  `dateofevent` varchar(50) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `reasonofdeath` text DEFAULT NULL,
  `permanantadd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deathbirthreg`
--

INSERT INTO `deathbirthreg` (`id`, `applicationid`, `applicationname`, `applicantname`, `applicantemail`, `applicantmobile`, `applicantaddress`, `type`, `personname`, `dateofevent`, `Age`, `fname`, `mname`, `reasonofdeath`, `permanantadd`) VALUES
(0, 8, 'birthregistrationapplication', 'gsfgs', 'fasdfas', 3413, 'vsadf', 'birth', 'fadf', 'fasdfas', 134, 'sfdsdf', 'dfadfasd', 'sdfasf', 'sadfasf');

-- --------------------------------------------------------

--
-- Table structure for table `elecnoc`
--

CREATE TABLE `elecnoc` (
  `id` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `applicationname` varchar(255) NOT NULL,
  `applicantname` varchar(255) NOT NULL,
  `applicantemail` varchar(50) NOT NULL,
  `applicantmobile` int(10) NOT NULL,
  `applicantaddress` text NOT NULL,
  `gno` int(11) NOT NULL,
  `typeofelec` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `fileid` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `fileurl` varchar(255) NOT NULL,
  `filetype` varchar(255) NOT NULL,
  `filesize` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `certificateid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`fileid`, `filename`, `filepath`, `fileurl`, `filetype`, `filesize`, `applicationid`, `certificateid`) VALUES
(1, '202336741471.jpg', '../files/deathreg/202336741471.jpg', '../files/deathreg/', 'image/jpeg', 253778, 8, NULL),
(2, '202336741471.jpg', '../files/deathreg/202336741471.jpg', '../files/deathreg/', 'image/jpeg', 253778, 8, NULL),
(3, '20233281758.jpg', '../files/domicile/20233281758.jpg', '../files/domicile/', 'image/jpeg', 245394, 9, NULL),
(4, '202332817581.jpg', '../files/domicile/202332817581.jpg', '../files/domicile/', 'image/jpeg', 253778, 9, NULL),
(30, '202336741471.jpg', '../files/deathreg/202336741471.jpg', '../files/deathreg/', 'image/jpeg', 253778, 8, 1),
(31, '20233775961.jpg', '../files/domicile/20233775961.jpg', '../files/domicile/', 'image/jpeg', 43939, 23, NULL),
(32, '20233775961.jpg', '../files/domicile/20233775961.jpg', '../files/domicile/', 'image/jpeg', 43939, 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `queryid` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `queryname` varchar(255) NOT NULL,
  `querycontent` varchar(255) NOT NULL,
  `querycreationtime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`queryid`, `applicationid`, `queryname`, `querycontent`, `querycreationtime`, `status`) VALUES
(1, 8, 'adfads', 'dfasf', '2023-03-03 11:12:39', 1),
(2, 23, 'Change Name', 'Enter A valid name', '2023-03-07 12:27:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `id` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `applicationname` varchar(255) NOT NULL,
  `applicantname` varchar(255) NOT NULL,
  `applicantemail` varchar(50) NOT NULL,
  `applicantmobile` int(10) NOT NULL,
  `applicantaddress` text NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`id`, `applicationid`, `applicationname`, `applicantname`, `applicantemail`, `applicantmobile`, `applicantaddress`, `type`) VALUES
(1, 9, 'residentregistrationapplication', 'adfasd', 'sdfas', 34324, 'dafsd', 'resident'),
(2, 23, 'residentregistrationapplication', 'Deepak patil', 'dfasdsa', 1234123, 'dasfasdf', 'resident');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `usertype` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `usertype`, `username`, `phone`, `email`, `password`, `name`) VALUES
(1, 0, 'deepak@email.com', '8828364418', 'deepak@email.com', 'abcd@1234', 'Deepak Patil'),
(6, 0, 'deepak@abcd.com', '123456789', 'deepak@abcd.com', 'deepak', 'deepak patil'),
(8, 1, 'admin@dg.com', '8828364419', 'admin@dg.com', 'admin', 'Admin'),
(9, 0, 'peter@hehe.com', '123456', 'peter@hehe.com', 'peter', 'Peter griffin');

-- --------------------------------------------------------

--
-- Table structure for table `watertanker`
--

CREATE TABLE `watertanker` (
  `id` int(11) NOT NULL,
  `applicationid` int(11) NOT NULL,
  `applicationname` varchar(255) NOT NULL,
  `applicantname` varchar(255) NOT NULL,
  `applicantemail` varchar(50) NOT NULL,
  `applicantmobile` int(10) NOT NULL,
  `applicantaddress` varchar(255) NOT NULL,
  `socialamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watertanker`
--

INSERT INTO `watertanker` (`id`, `applicationid`, `applicationname`, `applicantname`, `applicantemail`, `applicantmobile`, `applicantaddress`, `socialamount`) VALUES
(1, 2, 'watertankerapplication', 'deepak', 'deepak', 1234, 'deepak', 123),
(2, 19, 'watertankerapplication', 'adfasdf', 'adfasd', 32423, 'sdfgasdf', 314),
(3, 20, 'watertankerapplication', 'deepak', 'afasdf', 13123, 'dfajlfk', 13412),
(4, 21, 'watertankerapplication', 'deepak', 'afasdf', 13123, 'dfajlfk', 13412),
(5, 22, 'watertankerapplication', 'deepak', 'afasdf', 13123, 'dfajlfk', 13412);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`applicationid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`approvalid`),
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `birthcert`
--
ALTER TABLE `birthcert`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `busnoc`
--
ALTER TABLE `busnoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`certificateid`),
  ADD KEY `applicationid` (`applicationid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `cnstpermit`
--
ALTER TABLE `cnstpermit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `deathbirthreg`
--
ALTER TABLE `deathbirthreg`
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `elecnoc`
--
ALTER TABLE `elecnoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fileid`),
  ADD KEY `applicationid` (`applicationid`),
  ADD KEY `certificateid` (`certificateid`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`queryid`),
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `watertanker`
--
ALTER TABLE `watertanker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationid` (`applicationid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `applicationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `approvalid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `birthcert`
--
ALTER TABLE `birthcert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `busnoc`
--
ALTER TABLE `busnoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `certificateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cnstpermit`
--
ALTER TABLE `cnstpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `elecnoc`
--
ALTER TABLE `elecnoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `fileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `queryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `watertanker`
--
ALTER TABLE `watertanker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `approvals`
--
ALTER TABLE `approvals`
  ADD CONSTRAINT `approvals_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`);

--
-- Constraints for table `birthcert`
--
ALTER TABLE `birthcert`
  ADD CONSTRAINT `birthcert_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`);

--
-- Constraints for table `busnoc`
--
ALTER TABLE `busnoc`
  ADD CONSTRAINT `busnoc_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`);

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`),
  ADD CONSTRAINT `certificates_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `cnstpermit`
--
ALTER TABLE `cnstpermit`
  ADD CONSTRAINT `cnstpermit_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`);

--
-- Constraints for table `deathbirthreg`
--
ALTER TABLE `deathbirthreg`
  ADD CONSTRAINT `deathbirthreg_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`);

--
-- Constraints for table `elecnoc`
--
ALTER TABLE `elecnoc`
  ADD CONSTRAINT `elecnoc_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`);

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`),
  ADD CONSTRAINT `files_ibfk_2` FOREIGN KEY (`certificateid`) REFERENCES `certificates` (`certificateid`);

--
-- Constraints for table `queries`
--
ALTER TABLE `queries`
  ADD CONSTRAINT `queries_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`);

--
-- Constraints for table `resident`
--
ALTER TABLE `resident`
  ADD CONSTRAINT `resident_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`);

--
-- Constraints for table `watertanker`
--
ALTER TABLE `watertanker`
  ADD CONSTRAINT `watertanker_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `applications` (`applicationid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
