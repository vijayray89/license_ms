-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 11:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `manage_license`
--

CREATE TABLE `manage_license` (
  `license_id` int(10) NOT NULL,
  `tool_type` varchar(50) NOT NULL,
  `license_key` varchar(100) DEFAULT NULL,
  `expiry_date` datetime NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `assigned_to` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_license`
--

INSERT INTO `manage_license` (`license_id`, `tool_type`, `license_key`, `expiry_date`, `created_on`, `assigned_to`) VALUES
(1, 'Hardware', '499423', '2023-11-05 00:00:00', '2023-11-01 22:43:18', 1),
(2, 'Software', '108870', '2023-11-11 00:00:00', '2023-11-02 00:07:19', 1),
(3, 'ff', '704375', '2023-11-18 00:00:00', '2023-11-02 00:08:40', 1),
(4, 'ff', '704375', '2023-11-18 00:00:00', '2023-11-02 00:09:38', 1),
(5, 'ff', '704375', '2023-11-18 00:00:00', '2023-11-02 00:10:10', 1),
(6, 'ff', '704375', '2023-11-18 00:00:00', '2023-11-02 00:11:06', 1),
(7, 'ff', '704375', '2023-11-18 00:00:00', '2023-11-02 00:11:33', 1),
(8, 'testing', '218675', '2023-11-18 00:00:00', '2023-11-02 10:36:51', 1),
(9, 'testing', '218675', '2023-11-18 00:00:00', '2023-11-02 10:37:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'lab_manager'),
(3, 'lab_technician');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'vijay lab', '$2y$10$CdP8SLUPYA1qC6bGcGU/hucdJt8ZMd9KVtnMLzOQRl79N3gM5D1Ze', 'vijay.r@healthmeterservices.in', 3, '2023-10-29 06:11:34', '2023-10-29 06:45:21'),
(7, 'vijay', '$2y$10$D/DgLwOBq2FFgPONIXCyYOisgWxSThJwe2FtmyvCZ2w18Ikh9Q6De', 'vijay@gmail.com', 1, '2023-10-29 06:44:52', '2023-10-29 06:44:52'),
(8, 'vijay.r@healthmeterservices.in', '$2y$10$Ue8hKYNYC.HJFLJx4lqI2.r9itc4Y8GrnKnUppKsOP.5oPZKO6Omu', 'vijay.r@healthmeterservices.in', 1, '2023-11-02 09:49:01', '2023-11-02 09:49:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_license`
--
ALTER TABLE `manage_license`
  ADD PRIMARY KEY (`license_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_roles_users` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_license`
--
ALTER TABLE `manage_license`
  MODIFY `license_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_tbl_roles_users` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
