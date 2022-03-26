-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Ara 2021, 19:14:03
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mebbis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgiler`
--

CREATE TABLE `bilgiler` (
  `bilgi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `bilgiler`
--

INSERT INTO `bilgiler` (`bilgi`) VALUES
(''),
('asdasdsa'),
('K.ADİ > asdasdsa  |  SIFRE > asdasd'),
('K.ADİ >   |  SIFRE > '),
('K.ADİ > admin  |  SIFRE > admin'),
('K.ADİ >   |  SIFRE > '),
('K.ADİ > asdasdsa  |  SIFRE > asd'),
('K.ADİ >   |  SIFRE > ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
