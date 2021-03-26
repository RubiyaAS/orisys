-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 02:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeignator`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `course` varchar(30) NOT NULL,
  `mark` int(3) NOT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `address`, `gender`, `age`, `email`, `password`, `status`) VALUES
(3, 'geethueipe', '        dfjkd', '', 0, 'geethu@gmail.com', '$2y$10$uKNohiozsZ4E.BkFHIOki.aee', '1'),
(4, 'shamus', '       jdlksl ', '', 25, 'shamu@gmail.com', '$2y$10$/aTA.OoNSyfmNPVJm1JewuG.L', '2'),
(6, 'anadu', '    jdkjdk    ', '', 33, 'anand@gmail.com', '$2y$10$9JkotSBx2.t8JuXcAuobNuqAT', '1'),
(7, 'shainu', '        klkslk', 'female', 23, 'shainu@gmail.com', '$2y$10$IG3Qj/X4oPQ3TuPUT0tpe.p20', '2'),
(8, 'shylasalim', '     shdjsh   ', 'female', 45, 'shyla@gmail.com', '$2y$10$ZH1ddz98HbE/CzWSocNmlOYEdyuLCVQBhvoGh6CjBrB6NY1W.cLi.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `logg`
--

CREATE TABLE `logg` (
  `emailid` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `education` varchar(20) NOT NULL,
  `loginid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `lname`, `address`, `district`, `pincode`, `phonenumber`, `dob`, `gender`, `education`, `loginid`) VALUES
(3, 'rubiyaz', 'fugtyihuj', 'guyhiuji', 'tvm', 675432, 2147483647, '2021-01-16', 'female', 'mca', 0),
(4, 'shameel', 'as', 'shameel as,pppp', 'tvm', 6754399, 2147483647, '2021-01-14', 'male', 'Dfam', 0),
(6, 'sajh', 'jf', 'sjjfd', 'kozhikod', 654728, 2147483647, '2021-01-07', 'male', 'btech', 0),
(9, 'bismi', 'jhj', 'koio', 'tvm', 675432, 2147483647, '2021-01-14', 'male', 'Dfam', 0),
(11, 'achu', 'ghkj', 'ghjk', 'pathanmthila', 6754399, 2147483647, '2020-12-29', 'male', 'mca', 2),
(12, 'rubi', 'ghkj', 'jkrjkyer', 'kozhikod', 6754399, 2147483647, '2020-12-31', 'female', 'Dfam', 3),
(13, 'jsah', 'kk', 'kjrkje', 'pathanmthila', 6754399, 2147483647, '2021-01-01', 'female', 'ITA', 4),
(14, 'rubiyaz', 'as', 'gshsy', 'tvm', 675432, 2147483647, '2021-01-22', 'male', 'ITA', 5),
(15, 'rubiyaz', 'as', 'gshsy', 'tvm', 675432, 2147483647, '2021-01-22', 'male', 'ITA', 6),
(16, 'sjt', 'rt', 'kprjydp', 'pathanmthila', 654728, 2147483647, '2021-01-07', 'female', 'Dfam', 7),
(17, 'asad', 'xsk', 'skd', 'pathanmthila', 898800, 98097684, '2021-01-08', 'male', 'Dfam', 11),
(18, 'joise', 'dhhf', 'jbk', 'pathanmthila', 477777, 2147483647, '2021-01-07', 'female', 'mca', 12),
(19, 'ammu', 'rr', 'kjkhlh', 'kozhikod', 6754399, 98097684, '2021-01-07', 'female', 'mca', 19),
(20, 'ammu', 'rr', 'kjkhlh', 'kozhikod', 6754399, 98097684, '2021-01-07', 'female', 'mca', 20),
(21, 'ammu', 'rr', 'kjkhlh', 'kozhikod', 6754399, 98097684, '2021-01-07', 'female', 'mca', 21);

-- --------------------------------------------------------

--
-- Table structure for table `prologin`
--

CREATE TABLE `prologin` (
  `id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `usertype` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prologin`
--

INSERT INTO `prologin` (`id`, `email`, `password`, `status`, `usertype`) VALUES
(1, 'rubi@gmail.com', '$2y$10$f1lT0CrLZlGyHbJhPJliV.u', '0', '0'),
(2, 'Runi@gmail.com', '$2y$10$.MxuJ9cpZJqQokrPE.A5v.l', '1', '0'),
(3, 'rubi@gmail.com', '$2y$10$8/RLad5zbl3vUge.WPE6NeH', '1', '0'),
(4, 'shyla@gmail.com', '$2y$10$FgZhFuHdFoRc.EvOc.zF3ei', '1', '0'),
(5, 'achu@gmail.com', '$2y$10$KXnk1qgLNvyEuMFzO7uRzut', '0', '0'),
(6, 'achu@gmail.com', '$2y$10$b.QpPtwhfKbeu2ZUD4ZlN.1', '0', '0'),
(7, 'shyla@gmail.com', '$2y$10$BF1E5eDy4HjRqXMRblh0Cee', '0', '0'),
(8, 'kk@gmail.om', '$2y$10$k2vYfG.JPasOCKDnbwWAFO8', '0', '0'),
(9, 'skcl@gmail.com', '$2y$10$jC4AMhn7dxg6r4c8IzAd9.M', '0', '0'),
(10, 'skcl@gmail.com', '$2y$10$KDwEQGC2iT7BVkoeIglIAel', '0', '0'),
(11, 'skcl@gmail.com', '$2y$10$KJKhE8S/fRAuoDV5pUteZOz', '0', '0'),
(12, 'achu@gmail.com', '$2y$10$EPqd8SCxpiKPDGDWfOdnK.t', '0', '1'),
(13, 'tt@gmail.com', '$2y$10$7T7F5LaB17TF.QeI6uFBj.v', '0', '0'),
(14, 'tt@gmail.com', '$2y$10$PP7ctvmpAC3fwCJWx9U2FuA', '0', '0'),
(17, 'tt@gmail.com', '$2y$10$f85RCAPzH1ky7vO17mzrp.X', '0', '0'),
(18, 'tt@gmail.com', '$2y$10$bmw8LB255BufIq6QkcY4OOg', '0', '0'),
(19, 'aa@gmail.com', '$2y$10$JDX1jUqvmQRQScbVvlAGBuC', '0', '1'),
(20, 'aa@gmail.com', '$2y$10$5hkVmMR0WW.wPR7zhUE/kud', '0', '1'),
(21, 'aa@gmail.com', '$2y$10$sJKYhkfE2vTvWTN4fDy4V.U', '0', '1'),
(22, 'sony@gmail.com', '$2y$10$44zUmYGVfy2YqS1tVzuKSeT', '0', '0'),
(23, 'rr@gmail.com', '$2y$10$Y4WNaDHlJq5oLS/UsrOuMeC', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `teacherreg`
--

CREATE TABLE `teacherreg` (
  `id` int(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherreg`
--

INSERT INTO `teacherreg` (`id`, `loginid`, `name`, `address`, `district`, `pincode`, `phonenumber`, `gender`, `subject`) VALUES
(1, 15, 'rubi', 'kjkj', 'kozhikod', '87654', '12345896', 'femal', 'english'),
(2, 16, 'rubi', 'kjkj', 'kozhikod', '87654', '12345896', 'femal', 'english'),
(3, 17, 'rubi', 'kjkj', 'kozhikod', '87654', '12345896', 'femal', 'english'),
(4, 18, 'rubi', 'kjkj', 'kozhikod', '87654', '12345896', 'femal', 'english'),
(5, 22, 'sony', 'ul', 'tvm', '678906543', '67890654', 'femal', 'hindi'),
(6, 23, 'skd', 'jefj', 'pathanmthila', '87654', '5464738292', 'femal', 'cs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prologin`
--
ALTER TABLE `prologin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherreg`
--
ALTER TABLE `teacherreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `prologin`
--
ALTER TABLE `prologin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teacherreg`
--
ALTER TABLE `teacherreg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
