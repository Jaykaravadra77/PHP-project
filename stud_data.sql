-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 07:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('raj2669', 'raj2669'),
('raju22', 'rj77'),
('jay', 'jay123'),
('rutvik', 'lost');

-- --------------------------------------------------------

--
-- Table structure for table `stud_data`
--

CREATE TABLE `stud_data` (
  `srno` float NOT NULL,
  `name` varchar(20) NOT NULL,
  `rollno` int(2) NOT NULL,
  `sem` int(1) NOT NULL,
  `regno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_data`
--

INSERT INTO `stud_data` (`srno`, `name`, `rollno`, `sem`, `regno`) VALUES
(1, 'Raju', 1, 3, 306081801),
(2, 'jay', 2, 3, 306081802),
(3, 'darshit', 3, 3, 306081803),
(5, 'anil', 15, 3, 3060818015),
(6, 'nik', 16, 3, 3060818016);

-- --------------------------------------------------------

--
-- Table structure for table `stud_result`
--

CREATE TABLE `stud_result` (
  `srno` float NOT NULL,
  `javagp` float(5,2) NOT NULL,
  `rdbmsgp` float(5,2) NOT NULL,
  `phpgp` float(5,2) NOT NULL,
  `basicgp` float(5,2) NOT NULL,
  `economygp` float(5,2) NOT NULL,
  `soilgp` float(5,2) NOT NULL,
  `extenshiongp` float(5,2) NOT NULL,
  `systemgp` float(5,2) NOT NULL,
  `totalgp` float(5,2) NOT NULL,
  `result` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_result`
--

INSERT INTO `stud_result` (`srno`, `javagp`, `rdbmsgp`, `phpgp`, `basicgp`, `economygp`, `soilgp`, `extenshiongp`, `systemgp`, `totalgp`, `result`) VALUES
(1, 4.67, 6.00, 6.00, 6.00, 6.00, 6.00, 6.00, 6.00, 5.83, 'fail'),
(2, 6.00, 6.00, 6.00, 6.00, 6.00, 6.00, 6.00, 6.00, 6.00, 'secondclass'),
(3, 5.08, 5.00, 5.17, 5.17, 5.00, 5.23, 5.00, 5.30, 5.12, 'pass'),
(5, 6.00, 6.10, 6.20, 6.30, 6.40, 6.50, 6.00, 6.70, 6.28, 'Secondclass'),
(6, 10.00, 10.00, 10.00, 10.00, 10.00, 10.00, 10.00, 10.00, 10.00, 'distinction');

-- --------------------------------------------------------

--
-- Table structure for table `tempep`
--

CREATE TABLE `tempep` (
  `rollno` int(2) NOT NULL,
  `javaep` int(2) NOT NULL,
  `databaseep` int(2) NOT NULL,
  `phpep` int(2) NOT NULL,
  `instrumentationep` int(2) NOT NULL,
  `economyep` int(2) NOT NULL,
  `soilep` int(2) NOT NULL,
  `extenshionep` int(2) NOT NULL,
  `systemanalisep` int(2) NOT NULL,
  `tep` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempep`
--

INSERT INTO `tempep` (`rollno`, `javaep`, `databaseep`, `phpep`, `instrumentationep`, `economyep`, `soilep`, `extenshionep`, `systemanalisep`, `tep`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 0, 40, 40, 40, 40, 40, 40, 40, 80),
(2, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(3, 45, 40, 45, 45, 46, 47, 48, 49, 80),
(7, 40, 40, 40, 40, 40, 40, 41, 40, 80),
(9, 60, 70, 80, 69, 74, 45, 50, 65, 80),
(10, 40, 40, 4, 40, 40, 40, 40, 40, 80),
(11, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(12, 51, 52, 53, 54, 55, 56, 57, 58, 80),
(15, 40, 41, 42, 43, 44, 45, 46, 47, 80),
(16, 80, 80, 80, 80, 80, 80, 80, 80, 80),
(17, 50, 54, 96, 36, 54, 58, 35, 55, 80),
(18, 0, 40, 40, 40, 40, 40, 40, 40, 80),
(20, 40, 40, 40, 0, 40, 40, 40, 40, 80),
(22, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(29, 80, 80, 80, 80, 80, 80, 80, 80, 80),
(34, 80, 80, 80, 80, 80, 80, 80, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tempet`
--

CREATE TABLE `tempet` (
  `rollno` int(2) NOT NULL,
  `javaet` int(2) NOT NULL,
  `databaseet` int(2) NOT NULL,
  `phpet` int(2) NOT NULL,
  `instrumentationet` int(2) NOT NULL,
  `economyet` int(2) NOT NULL,
  `soilet` int(2) NOT NULL,
  `extenshionet` int(2) NOT NULL,
  `systemanaliset` int(2) NOT NULL,
  `tet` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempet`
--

INSERT INTO `tempet` (`rollno`, `javaet`, `databaseet`, `phpet`, `instrumentationet`, `economyet`, `soilet`, `extenshionet`, `systemanaliset`, `tet`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(2, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(3, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(7, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(9, 50, 51, 52, 53, 54, 55, 56, 57, 80),
(10, 40, 40, 4, 40, 40, 40, 40, 40, 80),
(11, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(12, 40, 41, 42, 43, 44, 45, 46, 47, 80),
(15, 40, 41, 42, 43, 44, 45, 46, 47, 80),
(16, 80, 80, 80, 80, 80, 80, 80, 80, 80),
(17, 40, 40, 40, 42, 43, 44, 45, 46, 80),
(18, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(20, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(22, 40, 40, 40, 40, 40, 40, 40, 40, 80),
(29, 80, 80, 80, 80, 80, 80, 80, 80, 80),
(34, 80, 80, 80, 80, 80, 80, 80, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tempip`
--

CREATE TABLE `tempip` (
  `rollno` int(2) NOT NULL,
  `Javaip` int(2) NOT NULL,
  `databaseip` int(2) NOT NULL,
  `phpip` int(2) NOT NULL,
  `instrumentationip` int(2) NOT NULL,
  `economyip` int(2) NOT NULL,
  `soilip` int(2) NOT NULL,
  `extenshionip` int(2) NOT NULL,
  `systemanalisip` int(2) NOT NULL,
  `tip` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempip`
--

INSERT INTO `tempip` (`rollno`, `Javaip`, `databaseip`, `phpip`, `instrumentationip`, `economyip`, `soilip`, `extenshionip`, `systemanalisip`, `tip`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(2, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(3, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(7, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(9, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(10, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(11, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(12, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(15, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(16, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(17, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(18, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(20, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(22, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(29, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(34, 20, 20, 20, 20, 20, 20, 20, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tempit`
--

CREATE TABLE `tempit` (
  `rollno` int(2) NOT NULL,
  `javait` int(2) NOT NULL,
  `Databaseit` int(2) NOT NULL,
  `Phpit` int(2) NOT NULL,
  `instrumentationit` int(2) NOT NULL,
  `economyit` int(2) NOT NULL,
  `soilit` int(2) NOT NULL,
  `extenshionit` int(2) NOT NULL,
  `systemanalisit` int(2) NOT NULL,
  `tit` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempit`
--

INSERT INTO `tempit` (`rollno`, `javait`, `Databaseit`, `Phpit`, `instrumentationit`, `economyit`, `soilit`, `extenshionit`, `systemanalisit`, `tit`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(2, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(3, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(7, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(9, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(10, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(11, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(12, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(15, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(16, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(17, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(18, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(20, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(22, 20, 20, 20, 20, 20, 20, 20, 20, 20),
(29, 10, 10, 10, 10, 10, 10, 10, 10, 20),
(34, 20, 20, 20, 20, 20, 20, 20, 20, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_data`
--
ALTER TABLE `stud_data`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `rollno` (`rollno`),
  ADD UNIQUE KEY `srno` (`srno`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `stud_result`
--
ALTER TABLE `stud_result`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `srno` (`srno`);

--
-- Indexes for table `tempep`
--
ALTER TABLE `tempep`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `tempet`
--
ALTER TABLE `tempet`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `tempip`
--
ALTER TABLE `tempip`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `tempit`
--
ALTER TABLE `tempit`
  ADD PRIMARY KEY (`rollno`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_data`
--
ALTER TABLE `stud_data`
  MODIFY `srno` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stud_result`
--
ALTER TABLE `stud_result`
  MODIFY `srno` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stud_result`
--
ALTER TABLE `stud_result`
  ADD CONSTRAINT `stud_result` FOREIGN KEY (`srno`) REFERENCES `stud_data` (`srno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
