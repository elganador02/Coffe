-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 11:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`, `user`, `foto`) VALUES
(1, 'randy17@gmail.com', '$2y$10$PEIxuOsJNY92h7amymsdPuELBXbw.UXKiDoJm6Hsm1VGkh2Dpmd3a', 'User', '755-fb1.png'),
(2, 'shanduhrp17@gmail.com', '$2y$10$V8tb9wlC8S2m3o5GjYEF2u5a0tgwnzdY8IUFKhZU0vzo9tCekKRKK', 'Shandu', '249-fb1.png'),
(3, 'Thescreamangara12@gmail.com', '$2y$10$vUAtKo.C6nBSYFqRqoN69OErgkgK8d6EZClP5eR/SzWmvYR24PYne', 'Mangara', '841-alex-kotliarskyi-QBpZGqEMsKg-unsplash.jpg'),
(4, 'thescreamangara12@gmail.com', '$2y$10$24ju74Zpr9bNuXWy0mZ5IeLglOJFcF1BM7r9Y/4T3xvwb0MK91teu', 'Mangara', '108-alex-kotliarskyi-QBpZGqEMsKg-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
