-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 07:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agric_base`
--

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `url`, `type`, `fileable_id`, `fileable_type`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/users/61f314506dcb70E3E65BB-F697-4A2F-A43E-E0BA879B3C04L0001.jpeg', 'image/jpeg', 1, 'App\\Models\\User', '2022-01-27 20:53:20', '2022-01-27 20:53:20'),
(2, 'assets/uploads/users/61f3a3cf6c5209B03F25F-6F96-4A1A-8AD3-2C7633BEC1F9L0001.jpeg', 'image/jpeg', 2, 'App\\Models\\User', '2022-01-28 07:05:37', '2022-01-28 07:05:37'),
(3, 'assets/uploads/users/61ff2330ece2eIMG_20200111_110703_970.jpg', 'image/jpeg', 3, 'App\\Models\\User', '2022-02-06 00:24:01', '2022-02-06 00:24:01');

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Aquaculture', '2022-01-27 06:56:29', '2022-01-27 06:56:29'),
(2, 'Beekeeping', '2022-01-27 06:56:29', '2022-01-27 06:56:29'),
(3, 'Cannabis cultivation', '2022-01-27 06:56:29', '2022-01-27 06:56:29'),
(4, 'Commercial farming', '2022-01-27 06:56:29', '2022-01-27 06:56:29'),
(5, 'Cotton industry', '2022-01-27 06:56:29', '2022-01-27 06:56:29'),
(6, 'Dairy farming', '2022-01-27 06:56:29', '2022-01-27 06:56:29'),
(7, 'Domesticated animals', '2022-01-27 06:56:29', '2022-01-27 06:56:29'),
(8, 'Domesticated plants', '2022-01-27 06:56:29', '2022-01-27 06:56:29'),
(9, 'Floral industry', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(10, 'Forestry', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(11, 'Hemp agriculture', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(12, 'Insect farming', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(13, 'Insect industry', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(14, 'Jute industry', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(15, 'Livestock', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(16, 'Orchards', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(17, 'Organic farming', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(18, 'Permaculture', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(19, 'Pig farming', '2022-01-27 06:56:30', '2022-01-27 06:56:30'),
(20, 'Poultry farming', '2022-01-27 06:56:31', '2022-01-27 06:56:31'),
(21, 'Sheep farming', '2022-01-27 06:56:31', '2022-01-27 06:56:31'),
(22, 'Silk production', '2022-01-27 06:56:31', '2022-01-27 06:56:31'),
(23, 'Tea industry', '2022-01-27 06:56:31', '2022-01-27 06:56:31'),
(24, 'Tobacco industry', '2022-01-27 06:56:31', '2022-01-27 06:56:31'),
(25, 'Viticulture', '2022-01-27 06:56:31', '2022-01-27 06:56:31');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `specialty_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Okoye Peter', 'test@test.com', 2, NULL, '$2y$10$OL5SEQnniQej59lLhHWZqeR5RQx9YjLcCieGncuQ0EnUKHmFPmCfq', NULL, '2022-01-27 20:53:20', '2022-01-27 20:53:20'),
(2, 'Amara Cynthia', 'EzekGoodness@test.com', 3, NULL, '$2y$10$j9xJn6szLlq4nIlsoXyOuORW4jOpq6a3fLimiJ//UZ7MQ66PsmGPy', NULL, '2022-01-28 07:05:35', '2022-01-28 07:05:35'),
(3, 'Keven Senger', 'imclaughlin@example.net', 8, NULL, '$2y$10$vPvMdgFaolgvq6bwt3NlTOJYtry3AuziaYbeJYDVWduqkpzpkfLPi', '97ltgoT5JfaNiDS6kKBmzDEqyOl2BTjEkCKoIocY9dZbuKsgbPWIXjDTX475', '2022-02-06 00:24:00', '2022-02-06 00:24:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

