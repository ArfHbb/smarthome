-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 04:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarthome`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `uid` varchar(35) NOT NULL,
  `name` varchar(50) NOT NULL,
  `aktivitas` varchar(100) NOT NULL,
  `log_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `uid`, `name`, `aktivitas`, `log_time`) VALUES
(14, 'robby', 'M Robyy ', 'sample', '2018-01-31 19:21:24'),
(15, 'robby', 'M Robyy ', 'Turn on rellay 2', '2018-01-31 19:22:01'),
(16, 'robby', 'M Robyy ', 'Turn off rellay 4', '2018-01-31 19:22:04'),
(17, 'robby', 'M Robyy ', 'Turn off rellay 1', '2018-01-31 19:22:09'),
(18, 'robby', 'M Robyy ', 'Turn off rellay 2', '2018-01-31 19:58:47'),
(19, 'robby', 'M Robyy ', 'Turn on rellay 2', '2018-01-31 19:58:48'),
(30, 'rida', 'Ridanti', 'Turn off lampu 2', '2018-01-31 20:14:41'),
(31, 'rida', 'Ridanti', 'Turn on lampu 2', '2018-01-31 20:14:42'),
(32, 'rida', 'Ridanti', 'Turn off lampu 3', '2018-01-31 20:14:43'),
(33, 'rida', 'Ridanti', 'Turn on lampu 3', '2018-01-31 20:14:44'),
(34, 'rida', 'Ridanti', 'Turn off lampu 1', '2018-01-31 20:14:45'),
(35, 'rida', 'Ridanti', 'Turn on lampu 1', '2018-01-31 20:14:46'),
(36, 'rida', 'Ridanti', 'Turn off lampu 4', '2018-01-31 20:14:47'),
(37, 'rida', 'Ridanti', 'Turn on lampu 4', '2018-01-31 20:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `uid`, `pwd`, `status`) VALUES
(1, 'M Robyy ', 'robby', '123456', 'admin'),
(2, 'Arif', 'habibi', '123456', 'pengguna'),
(3, 'Sri Lastri\r\n', 'coba', '123', 'pengguna'),
(4, 'Sastro', 'lg', '1', 'pengguna'),
(5, 'Ridanti', 'rida', '123', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
