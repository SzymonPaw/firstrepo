-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 03:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konkurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `login` text NOT NULL,
  `haslo` text NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `szkola` text NOT NULL,
  `adres` text NOT NULL,
  `telefon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`login`, `haslo`, `imie`, `nazwisko`, `szkola`, `adres`, `telefon`) VALUES
('admin', 'admin', 'Szymon', 'Paw', 'zse', 'kolorowa', '555555555'),
('root', 'root', 'adminek', 'adminek', 'zse', 'dwioadnwioa', '321321321'),
('gfdgfdui', 'gufidngfuidqgnuidg', 'nufsinfse', 'nuifsnui', 'fnuise', 'bunifse', '43432'),
('gfdgfdui', 'gufidngfuidqgnuidg', 'nufsinfse', 'nuifsnui', 'fnuise', 'bunifse', '43432'),
('gfdgfdui', 'gufidngfuidqgnuidg', 'nufsinfse', 'nuifsnui', 'fnuise', 'bunifse', '43432'),
('sasin', 'krul', 'dwnua', 'nusfe', 'nsf', 'niosf', '423432'),
('sasin', 'krul', 'dwnua', 'nusfe', 'nsf', 'niosf', '423432');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
