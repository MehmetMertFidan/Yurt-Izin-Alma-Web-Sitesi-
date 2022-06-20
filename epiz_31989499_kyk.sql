-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql305.byetcluster.com
-- Üretim Zamanı: 20 Haz 2022, 03:40:01
-- Sunucu sürümü: 10.3.27-MariaDB
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `epiz_31989499_kyk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `izin_kayit2`
--

CREATE TABLE `izin_kayit2` (
  `izin_no` int(11) NOT NULL,
  `tcno` bigint(11) DEFAULT NULL,
  `ilk_gun` date DEFAULT NULL,
  `son_gun` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `izin_kayit2`
--

INSERT INTO `izin_kayit2` (`izin_no`, `tcno`, `ilk_gun`, `son_gun`) VALUES
(3, 55555, '2022-06-18', '2022-06-26'),
(4, 666666, '2022-06-21', '2022-06-23'),
(5, 0, '2022-06-18', '2022-06-26'),
(7, 1234, '2022-06-03', '2022-06-05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE `ogrenci` (
  `tcno` bigint(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `soyad` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`tcno`, `ad`, `soyad`, `sifre`) VALUES
(123, 'qds', 'asdasd', '123'),
(1234, 'asdas', 'dasdasd', '123'),
(55555, 'berat', 'kuzu', '55555'),
(666666, 'Ozdo', 'Ozdo', 'ozdo'),
(12345678905, 'mert', 'fidan', '123'),
(46780536783, 'medo', 'fido', '123'),
(298467382013, 'mert', 'fidan', '123'),
(313824001026637373, 'Ozdo', 'Ozdo', 'ozdo');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `izin_kayit2`
--
ALTER TABLE `izin_kayit2`
  ADD PRIMARY KEY (`izin_no`),
  ADD KEY `tcno` (`tcno`);

--
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
  ADD PRIMARY KEY (`tcno`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `izin_kayit2`
--
ALTER TABLE `izin_kayit2`
  MODIFY `izin_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
