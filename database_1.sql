-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Ara 2019, 09:13:18
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `database_1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

CREATE TABLE `kayit` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap_db`
--

CREATE TABLE `kitap_db` (
  `kitap_id` int(11) NOT NULL,
  `kitap_ismi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yazar_ismi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cilt_durumu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_sayisi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kitap_turu` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kitap_db`
--

INSERT INTO `kitap_db` (`kitap_id`, `kitap_ismi`, `yazar_ismi`, `cilt_durumu`, `sayfa_sayisi`, `kitap_turu`) VALUES
(4, 'dd2', 'd2', 'd2', 'd2', 'd2'),
(5, 'd3', 'd3', 'd3', 'd3', 'd3'),
(6, 'd4', 'd4', 'd4', 'd4', 'd4'),
(7, 'd5', 'd5', 'd5', 'd5', 'd5'),
(8, 'asdasd', 'asdasd', 'asdsad', 'asdsada', 'asdada'),
(9, 'safad', 'sadad', 'sadad', 'adad', 'sadad'),
(10, 'asdad', 'asdasd', 'asdsa', 'dada', 'da'),
(11, 'asdad', 'sadd', 'adad', 'adsada', 'dadad'),
(12, 'sadada', 'dadada', 'dadda', 'dadada', 'sadas');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kayit`
--
ALTER TABLE `kayit`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `kitap_db`
--
ALTER TABLE `kitap_db`
  ADD PRIMARY KEY (`kitap_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kayit`
--
ALTER TABLE `kayit`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kitap_db`
--
ALTER TABLE `kitap_db`
  MODIFY `kitap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
