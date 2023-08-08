-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2023 at 11:22 AM
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
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `pickup`, `destination`, `date`) VALUES
(3, 'Marvin Paongilan', 'marvinpaongilan05@gmail.com', '09466155578', 'Carmen,', 'Balilihan,', '2023-08-08'),
(5, 'Marvin Paongilan', 'marvinpaongilan05@gmail.com', '09466155578', 'Carmen, Bohol', 'Balilihan, Bohol', '2023-09-01'),
(6, 'Jeramelle Tatad', 'jeramelle.tatad@bisu.edu.ph', '09463712258', 'Catigbian, Bohol', 'Balilihan, Bohol', '2023-07-30'),
(7, 'Marvin Paongilan', 'marvinpaongilan05@gmail.com', '09466155578', 'Carmen, Bohol', 'Balilihan, Bohol', '2023-09-01'),
(8, 'Mary Ann Chatto', 'maryann.chatto@bisu.edu.ph', '09466155578', 'Catigbian,', 'Balilihan,', '2023-08-04'),
(9, 'Mary Ann Chatto', 'maryann.chatto@bisu.edu.ph', '09466155578', 'Catigbian, Bohol', 'Balilihan, Bohol', '2023-08-04'),
(10, 'Eric Maglajos', 'eric.maglajos@bisu.edu.ph', '09466155578', 'Catigbian, Bohol', 'Balilihan, Bohol', '2023-08-16'),
(11, 'Justin Corpuz', 'justlomodcorpze0626@gmail.com', '09466155578', 'Carmen, Bohol', 'Balilihan, Bohol', '2023-08-01'),
(12, 'Justin Corpuz', 'justlomodcorpze0626@gmail.com', '09466155578', 'Carmen, Bohol', 'Balilihan, Bohol', '2023-09-09'),
(13, 'Marvin Paongilan', 'marvinpaongilan05@gmail.com', '09466155578', 'Carmen, Bohol', 'Balilihan, Bohol', '2023-08-31'),
(14, 'Marvin Paongilan', 'marvinpaongilan05@gmail.com', '09466155578', 'Carmen, Bohol', 'Balilihan, Bohol', '2023-08-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
