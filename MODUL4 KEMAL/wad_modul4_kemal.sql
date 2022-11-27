-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Nov 27, 2022 at 10:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_kemal`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_kemal`
--

CREATE TABLE `user_kemal` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_kemal`
--

INSERT INTO `user_kemal` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1, 'Kemal aziz', 'azizkemal599@gmail.com', '123', '85743936177'),
(5, 'ilham', 'ilhamsantos@gmail.com', '321', '85743'),
(6, 'udin', 'dosantos@gmail.com', '654', '456'),
(7, 'Suprapto Duni', 'kemaldon@student.telkomuniversity.ac.id', '123', '085743936199');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_kemal`
--
ALTER TABLE `user_kemal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_kemal`
--
ALTER TABLE `user_kemal`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
