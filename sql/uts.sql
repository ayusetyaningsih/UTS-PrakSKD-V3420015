-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 11:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'ayu', '$2y$10$/EgUuVg7PzLcDqVf86NT4uznJzYHDRvLD8dBHAYkIvZg1498IHcqu', 'ayus@gmail.com', '2021-10-18 09:12:05'),
(2, 'Andi', '$2y$10$hHL.vV6lSzVjDwSToGXL/ePkL7kEVHvre1OimGkYfM7kYD14asCbW', 'Andi@gmail.com', '2021-10-18 09:59:30'),
(3, 'Ayusetyaningsih', '$2y$10$SjA6XQKRKHtONIwdIBSm7.KLk4X878LYOmIYneI2eOangGHVJU126', 'ayusetyaningsih@student.uns.ac.id', '2021-10-18 15:16:28'),
(4, 'Ayusetya', '$2y$10$wQFiaDQCIXPMk4dglGLrH.g5GQWt0skmsJMXdeNbBzUjqpOS/9BRC', 'ayussetya@gmail.com', '2021-10-18 15:56:50'),
(5, 'rama', '$2y$10$Ln9pcXHTSFzWNC/ZkDRCP.IduFVA1k5XrPt5/1sZaxcImh9/zKvsK', 'rama@gmail.com', '2021-10-19 05:42:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
