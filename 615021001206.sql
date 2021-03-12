-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 12:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `615021001206`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `lab_id` int(10) NOT NULL,
  `lab_Mname` varchar(50) NOT NULL,
  `lab_time` datetime NOT NULL,
  `lab_user` varchar(50) NOT NULL,
  `lab_pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lab_id`, `lab_Mname`, `lab_time`, `lab_user`, `lab_pin`) VALUES
(11111666, 'หกฟหกฟหก', '2021-03-05 00:00:00', 'หกดฟหกด', 4864),
(1000000000, 'จะผ่านมั้ยครับ', '2021-03-12 16:05:38', 'นายก อยากผ่าน', 1234),
(1111111111, 'error ได้ไง', '2021-03-10 00:00:00', 'นายก', 1111),
(1111222233, 'ยังตกอยู่ครับ', '2021-03-10 10:10:10', 'นายก ยังตก', 4444),
(2147483647, 'ไม่รู้ทำอะไร', '2021-03-11 00:00:00', 'นายก', 5555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`lab_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `lab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
