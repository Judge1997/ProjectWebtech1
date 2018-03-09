-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 04:22 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id_ac` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `ID` varchar(13) NOT NULL,
  `type` varchar(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id_ac`, `username`, `password`, `first_name`, `last_name`, `age`, `gender`, `email`, `phone`, `address`, `ID`, `type`, `image`) VALUES
(1, 'admin', '1234', 'titi                ', 'tuntiyanukuclchai', 21, 'm', 'titi.t@ku.th', '0881146935', '322/12 fhfhfhfhfhfh', '1320900222056', 'admin', '/project/picture/user/2.png'),
(3, '111', '222', 'asdasd              ', 'asdasd', 22, 'm', 'asd@asd', '2323232323', '111111', '2323232323232', 'organizer', '/project/picture/user/1.png'),
(9, '222', '333', 'sdasdasd            ', 'asdasd', 43, 'm', 'asds@fdf', '2323232323', 'zxczxc', '1111111111111', 'attendant', '/project/picture/user/3.jpg'),
(10, '777', '777', 'fsf                 ', 'sdfsdf', 43, 'm', '3sdas@dsf', '3454656454', 'asdsdsdsd', '2323232323232', 'admin', '/project/picture/img/icon.png'),
(11, '888', '888', 'fgbdfgd', 'dfgdfg', 54, 'm', 'sfs!@dadf', '3235454545', '', '1231212123344', 'admin', '/project/picture/img/icon.png'),
(12, '999', '999', 'dfsdfs', 'sdfsdf', 23, 'm', 'dfdf@frt', '3343434343', '', '2312121212121', 'admin', '/project/picture/img/icon.png'),
(13, '1000', '1000', 'sdadas', 'asdsd', 23, 'm', 'sdasd@asas', '2323223232', '', '1231231321231', 'admin', '/project/picture/img/icon.png'),
(14, 'asdasdasd', 'asdasd', 'asdasd          ', 'asd', 23, 'm', 'adsasd@asdasd', '3434343434', 'asdasdasd', '2321212121212', 'admin', '/project/picture/img/icon.png'),
(15, 'zxcxc', 'saads', 'khkhksad', 'askdcjakdsj', 12, 'm', 'asdlkj@sdasddsa', '3738389723', '', '2131212121212', 'admin', '/project/picture/img/icon.png'),
(16, 'asdasd', 'asdasd', 'asdasd', 'sdasd', 32, 'm', 'asda@adasd', '1212121212', '', '2434343434343', 'admin', '/project/picture/img/icon.png'),
(17, 'aaaaa', '2222', 'asdasd          ', 'asdasdas', 23, 'm', 'ad@asd', '2323121121', '', '1232323232323', 'admin', '/project/picture/user/3.jpg'),
(18, '23231', 'asd2323', 'sddasd', 'asdasda', 23, 'm', 'asdasdas@fafa', '2323212121', '', '2324345454545', 'admin', '/project/picture/img/icon.png'),
(19, '323443', '232323', '23', '2323ad', 23, 'm', '2233@2323', '2222222222', '', '2311111111111', 'admin', '/project/picture/img/icon.png'),
(20, '123434', '2323', '2323', 'sdasd', 23, 'm', '2323@fs', '2311111111', '', '2323222222222', 'admin', '/project/picture/img/icon.png'),
(22, 'asda212z', 'dadasd', 'asdasd', 'sdasda', 23, 'm', 'asda@sdffd', '2323232222', '', '2222222222222', 'admin', '/project/picture/img/icon.png'),
(23, 'asdasdasd12', 'asdasds', 'asdasd', 'dasdas', 23, 'm', 'asdasd@adasd', '2222222222', '', '1111111111111', 'admin', '/project/picture/img/icon.png'),
(24, 'asda212asd', 'asdad', 'das', 'as', 23, 'm', 'asdasd@asfdasd', '2222222222', '', '1111111111111', 'admin', '/project/picture/img/icon.png'),
(25, 'asdasd1211', 'dasd', 'asdasd', 'sdasda', 32, 'm', 'asda@ffffff', '2222222222', '', '1111111111111', 'admin', '/project/picture/img/icon.png'),
(26, 'asdasd22', 'asdasd', 'sdasd', 'sdasda', 23, 'm', 'asdasd@asdasd', '2322222222', '', '1111111111111', 'admin', '/project/picture/img/icon.png'),
(27, '2323dasd', 'sdfsdf', 'adasd          ', 'asdasd', 23, 'm', 'ae@dfssdf', '2222222222', '', '2222222222222', 'admin', '/project/picture/user/bg7.jpg'),
(28, 'asdasd2112121212', 'asdasd', 'asdasd', 'adasd', 23, 'm', 'das!@asdasd', '2222222222', '', '1212121212121', 'admin', '/project/picture/img/icon.png'),
(29, '112223dasd', 'dcasdasdasd', 'sdasd', 'dasdasd', 23, 'm', 'asd@sdasd', '1111111111', '', '2222222222222', 'admin', '/project/picture/img/icon.png'),
(30, '33333aa3', '232323', 'asdasd', 'asdasd', 44, 'm', 'asd@a232s', '1111111111', '', '2222222222222', 'admin', '/project/picture/img/icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `attendants`
--

CREATE TABLE `attendants` (
  `id_at` int(11) NOT NULL,
  `id_ev` int(11) NOT NULL,
  `id_ac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_co` int(11) NOT NULL,
  `id_ac` int(11) NOT NULL,
  `id_ev` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_ev` int(11) NOT NULL,
  `id_ac` int(11) NOT NULL,
  `name_event` text NOT NULL,
  `detail` text NOT NULL,
  `image` text NOT NULL,
  `teaser_VDO` text NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(10) NOT NULL,
  `location` text NOT NULL,
  `map` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `free` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_ev`, `id_ac`, `name_event`, `detail`, `image`, `teaser_VDO`, `date`, `time`, `location`, `map`, `capacity`, `free`, `type`) VALUES
(1, 1, 'nnnnnn', ' ddddddddddd           dfdfdfdfdfdf', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-15', '23:23', '        lolool', '13.709942408960542,100.41479986839295', 23, 23, 'Workshops'),
(2, 1, 'name2', '           detaaaaaaa', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-01', '23:23', 'hhhh', '13.847320894026026,100.70662420921326', 13, 11, 'sport'),
(3, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(4, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-20', '23:23', '        loolol', '', 23, 35, 'party'),
(5, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(6, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(7, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-12', '23:23', '        loolol', '', 23, 35, 'party'),
(8, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(9, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(10, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(11, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(12, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(13, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(14, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(15, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(16, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(17, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(18, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(19, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(20, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(21, 1, 'nnnnnnnnn3', '            asdasd', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-09', '23:23', '        loolol', '', 23, 35, 'party'),
(22, 1, 'boy', 'd;lasdk;asd\r\nasd;lksad;lkasd;lads\r\nasdlkjaslkdjdsa\r\naksjdkja            ', '/project/picture/event/icon.png', 'picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-03', '23:23', '        sadasdasd\r\nasd\r\nsad\r\nasd\r\na\r\nsd', '13.725951821697134,100.43608587913513', 111, 218, 'education'),
(23, 1, 'aaaaass2222', '            asd', '/project/picture/event/icon.png', '/project/picture/video/ที่เก่า - MARC TATCHAPON [ Official MV ].mp4', '2018-03-15', '23:23', '        asdasd', '13.591171946067675,100.46355169944763', 23, 23, 'party');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id_lo` int(11) NOT NULL,
  `id_ac` int(11) NOT NULL,
  `event` text NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id_ac`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `attendants`
--
ALTER TABLE `attendants`
  ADD PRIMARY KEY (`id_at`),
  ADD KEY `id_ev` (`id_ev`),
  ADD KEY `id_ac` (`id_ac`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_co`),
  ADD KEY `id_ac` (`id_ac`),
  ADD KEY `id_ev` (`id_ev`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_ev`),
  ADD KEY `id_ac` (`id_ac`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_lo`),
  ADD KEY `id_ac` (`id_ac`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id_ac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `attendants`
--
ALTER TABLE `attendants`
  MODIFY `id_at` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_co` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_ev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id_lo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendants`
--
ALTER TABLE `attendants`
  ADD CONSTRAINT `attendants_ibfk_1` FOREIGN KEY (`id_ac`) REFERENCES `accounts` (`id_ac`),
  ADD CONSTRAINT `attendants_ibfk_2` FOREIGN KEY (`id_ev`) REFERENCES `events` (`id_ev`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_ac`) REFERENCES `accounts` (`id_ac`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_ev`) REFERENCES `events` (`id_ev`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`id_ac`) REFERENCES `accounts` (`id_ac`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
