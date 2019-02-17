-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 05:32 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `pswd` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `tno` int(11) NOT NULL,
  `remark` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rid`, `name`, `college`, `phone`, `mail`, `age`, `gender`, `city`, `state`, `pswd`, `amount`, `tno`, `remark`, `status`) VALUES
(1, '', '', 984678202, 'admin@xbnyc.in', 0, '', '', '', 'qwerty', 0, 0, '', 0),
(10, 'Judeline Rodrigues', 'Nirmala Niketan College of Social Work, Mumbai', 2147483647, 'judy.rodricks@gmail.com', 23, 'female', 'mumbai', 'maharastra', 'judeline', 1000, 4589604, 'nill', 0),
(11, 'Jaraldpushparaj S', 'Sacred Heart College (Autonomous), Tirupattur', 2147483647, 'jaraldss@gmail.com', 26, 'male', 'Thirunalve', 'Tamil Nadu', 'jarald', 1000, 65678657, 'nil', 0),
(12, 'Aryan Jose', 'Sacred Heart College, Thevara', 2147483647, 'aryanjose.n@gmail.com', 21, 'male', 'kochi', 'kerala', 'aryanjose', 1000, 557954664, 'i need tra', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
