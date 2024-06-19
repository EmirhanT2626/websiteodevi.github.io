-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Haz 2024, 14:39:23
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tablo1`
--

CREATE TABLE `tablo1` (
  `id` int(11) NOT NULL,
  `isim` varchar(40) NOT NULL,
  `soyisim` varchar(50) NOT NULL,
  `telefon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `tablo1`
--

INSERT INTO `tablo1` (`id`, `isim`, `soyisim`, `telefon`) VALUES
(1, 'Emirhan', 'Taşkın', '546 475 55 55'),
(5, 'asdas', 'asdsad', '2132131212'),
(6, '', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tablo1`
--
ALTER TABLE `tablo1`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tablo1`
--
ALTER TABLE `tablo1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
