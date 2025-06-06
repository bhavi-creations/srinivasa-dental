-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2025 at 06:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdf_uploads`
--

CREATE TABLE `pdf_uploads` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pdf_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdf_uploads`
--

INSERT INTO `pdf_uploads` (`id`, `title`, `pdf_path`, `uploaded_at`) VALUES
(1, 'sg', 'uploads/Landing page 2.pdf', '2024-06-26 12:29:53'),
(2, '32', 'uploads/Landing page 1.pdf', '2024-06-26 12:39:24'),
(3, '33', 'uploads/logo (1).pdf', '2024-06-26 12:39:40'),
(4, '5', 'uploads/logo.pdf', '2024-06-26 12:39:50'),
(5, '55', 'uploads/Landing page 2.pdf', '2024-06-26 12:39:57'),
(6, '55', 'uploads/Landing page 2.pdf', '2024-06-26 12:56:35'),
(7, 'ds', 'uploads/logo.pdf', '2024-06-26 12:57:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdf_uploads`
--
ALTER TABLE `pdf_uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdf_uploads`
--
ALTER TABLE `pdf_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
