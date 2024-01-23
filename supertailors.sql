-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 12:15 PM
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
-- Database: `supertailors`
--

-- --------------------------------------------------------

--
-- Table structure for table `embroidery`
--

CREATE TABLE `embroidery` (
  `id` int(11) NOT NULL,
  `description` varchar(34) NOT NULL,
  `image` varchar(73) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `embroidery`
--

INSERT INTO `embroidery` (`id`, `description`, `image`) VALUES
(1, 'design2', 'Screenshot (48).png');

-- --------------------------------------------------------

--
-- Table structure for table `kurtadesign`
--

CREATE TABLE `kurtadesign` (
  `id` int(11) NOT NULL,
  `description` varchar(34) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kurtadesign`
--

INSERT INTO `kurtadesign` (`id`, `description`, `image`) VALUES
(2, 'design2', 'Screenshot (50).png'),
(3, 'design2', 'Screenshot (48).png'),
(4, 'design2', 'Screenshot (48).png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(34) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(5, 'ahmad', '123'),
(6, 'uzair', 'amujuc'),
(9, 'uzair3', '123'),
(10, 'asad', '123'),
(11, 'ahmad1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pantcoat`
--

CREATE TABLE `pantcoat` (
  `id` int(11) NOT NULL,
  `description` varchar(34) NOT NULL,
  `image` varchar(73) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pantcoat`
--

INSERT INTO `pantcoat` (`id`, `description`, `image`) VALUES
(6, 'design2', 'pexels-andrea-piacquadio-3480329.jpg'),
(8, 'design2', 'Screenshot (45).png'),
(9, 'design2', 'Screenshot (50).png'),
(10, 'design2', 'Screenshot (46).png'),
(11, 'design2', 'Screenshot (46).png'),
(12, 'design2', 'Screenshot (46).png'),
(13, 'design2', 'Screenshot (50).png'),
(14, 'design2', 'Screenshot (50).png');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(73) NOT NULL,
  `length` varchar(83) NOT NULL,
  `arm` varchar(255) NOT NULL,
  `teera` varchar(100) NOT NULL,
  `neck` varchar(100) NOT NULL,
  `chest` varchar(100) NOT NULL,
  `back` varchar(100) NOT NULL,
  `ghaira` varchar(100) NOT NULL,
  `kandha` varchar(100) NOT NULL,
  `frontPocket` varchar(100) NOT NULL,
  `sidePocket` varchar(100) NOT NULL,
  `collarOrBan` varchar(100) NOT NULL,
  `ghairaChoras` varchar(100) NOT NULL,
  `cuffOrGolBazu` varchar(100) NOT NULL,
  `trouserOrShalwar` varchar(100) NOT NULL,
  `shalwarLength` varchar(100) NOT NULL,
  `poncha` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`, `number`, `length`, `arm`, `teera`, `neck`, `chest`, `back`, `ghaira`, `kandha`, `frontPocket`, `sidePocket`, `collarOrBan`, `ghairaChoras`, `cuffOrGolBazu`, `trouserOrShalwar`, `shalwarLength`, `poncha`, `zip`) VALUES
(4, 'afaq', '886868', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19'),
(5, 'ahmad', '886868', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19'),
(6, 'uzair', '886868', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19'),
(7, 'uzair', '03272406600', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `embroidery`
--
ALTER TABLE `embroidery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurtadesign`
--
ALTER TABLE `kurtadesign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pantcoat`
--
ALTER TABLE `pantcoat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `embroidery`
--
ALTER TABLE `embroidery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kurtadesign`
--
ALTER TABLE `kurtadesign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pantcoat`
--
ALTER TABLE `pantcoat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
