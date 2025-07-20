-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 19 Ara 2024, 11:50:05
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `market`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kasiyer`
--

DROP TABLE IF EXISTS `kasiyer`;
CREATE TABLE IF NOT EXISTS `kasiyer` (
  `kID` int(11) NOT NULL AUTO_INCREMENT,
  `ad` text NOT NULL,
  `soyad` text NOT NULL,
  `sifre` text NOT NULL,
  PRIMARY KEY (`kID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kasiyer`
--

INSERT INTO `kasiyer` (`kID`, `ad`, `soyad`, `sifre`) VALUES
(1, 'emrah', 'cevik', '1234'),
(2, 'ayÅŸe', 'yÄ±ldÄ±z', '4321'),
(3, 'ali', 'yÄ±ldÄ±z', '32132'),
(4, 'emrah', 'kaya', '1234'),
(5, 'emrah', 'cevik', '4567'),
(6, 'emrah', 'demir', '123'),
(7, 'emrah', 'deneme', 'selam'),
(8, 'engin', 'yÄ±ldÄ±z', '2345'),
(9, 'kenan', 'demir', '2345'),
(10, 'ahmet', 'demir', '564'),
(11, 'ayÅŸe ', 'kaya', '6745'),
(12, 'mehmet', 'yÄ±ldÄ±z', '54564345'),
(13, 'emre', 'ÅŸahin', '890');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uID` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`uID`, `username`, `password`, `name`, `surname`) VALUES
(1, 'emrah', '1234', 'emrah', 'cevik'),
(2, 'ayse6060', '5656', 'ayse', 'yildiz'),
(3, 'bulut', '9090', 'fatma', 'bulut'),
(4, 'zehra123', 'resadiye', 'zehra', 'yÄ±ldÄ±z'),
(5, 'messi', '4545', 'eren can', 'demir'),
(6, 'ronaldo', '9090', 'ercan', 'kendir');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
