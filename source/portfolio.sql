-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 28, 2017 at 11:27 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `file_path` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`id`, `name`, `file_path`, `description`) VALUES
(1, 'The Ear', '\"images/media/traditional/theear.png\"', 'back of woman\'s head done in charcoal'),
(2, 'Abstract Majoras Mask', '\"images/media/traditional/majorasmask.png\"', 'majoras mask drawn in pen'),
(3, 'Monarchs', '\"images/media/traditional/monarch.png\"', 'butterflies drawn with colored pencil'),
(4, 'Skulltula', '\"images/media/traditional/skulltula.png\"', 'skulltula drawn with colored pencil'),
(5, 'Cuda Scratchboard', '\"images/media/traditional/cudascratch.png\"', 'dog drawn with scratchboard'),
(6, 'Chuck Close Self Portrait', '\"images/media/traditional/selfportrait.png\"', 'a painting of me'),
(7, 'Rock Paper Scissors', '\"images/media/traditional/papermario.png\"', 'mario drawn with colored pencils'),
(8, 'Loki ', '\"images/media/traditional/loki.png\"', 'loki drawn in colored pencil'),
(9, 'Luna Lovegood', '\"images/media/traditional/luna.png\"', 'luna drawn in pencil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
