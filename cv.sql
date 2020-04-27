-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Nis 2020, 05:15:28
-- Sunucu sürümü: 10.1.25-MariaDB
-- PHP Sürümü: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cv`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(1) NOT NULL,
  `title` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `sitebaslik` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL,
  `keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `kim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kimalt` text COLLATE utf8_turkish_ci NOT NULL,
  `avatar` text COLLATE utf8_turkish_ci NOT NULL,
  `yazi1` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `yazi2` text COLLATE utf8_turkish_ci NOT NULL,
  `footer` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `yetenekler` int(1) NOT NULL,
  `calismalar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `title`, `sitebaslik`, `description`, `keywords`, `kim`, `kimalt`, `avatar`, `yazi1`, `yazi2`, `footer`, `yetenekler`, `calismalar`) VALUES
(0, 'modern cv sitesi', 'modern cv sitesi', 'sd', 'sd', 'Yazılımcı & Geliştirici', 'Lorem ipsum dolor sit amet.', 'assets/front/uploads/avatar1.png', 'Merhabalar, benim adım Lorem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'XXX', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calismalar`
--

CREATE TABLE `calismalar` (
  `id` int(11) NOT NULL,
  `calismaad` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `resim` mediumtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `calismalar`
--

INSERT INTO `calismalar` (`id`, `calismaad`, `resim`) VALUES
(1, 'Google Logo Çalışması', 'assets/front/uploads/avatar_15515_15508253494.png'),
(2, 'Facebook', 'https://static.karar.com/img/682x350/16-02/10/facebook.jpg'),
(3, 'Twitter', 'https://cdn.pixabay.com/photo/2017/08/23/11/30/twitter-2672572_960_720.jpg'),
(4, 'Instagram', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhJolcr42OzI28yCGhAthKdRc80jlrKIlG-W4Gnu2Tx-LifEdx1g');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(155) NOT NULL,
  `adsoyad` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `telno` int(255) NOT NULL,
  `baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `email`, `telno`, `baslik`, `mesaj`) VALUES
(1, 'Tolga UÇAR', 'selam@gmail.com', 0, 'İletişim Formu Denemesi', 'Mesaj!');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetenekler`
--

CREATE TABLE `yetenekler` (
  `id` int(155) NOT NULL,
  `yetenekisim` varchar(155) NOT NULL,
  `deger` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yetenekler`
--

INSERT INTO `yetenekler` (`id`, `yetenekisim`, `deger`) VALUES
(8, 'PHP', 35),
(9, 'Codeigniter', 63),
(10, 'Photoshop', 100);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetim`
--

CREATE TABLE `yonetim` (
  `id` int(155) NOT NULL,
  `adsoyad` varchar(155) NOT NULL,
  `mail` varchar(155) NOT NULL,
  `sifre` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yonetim`
--

INSERT INTO `yonetim` (`id`, `adsoyad`, `mail`, `sifre`) VALUES
(1, 'Yönetim Paneli', 'admin@admin.com', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `calismalar`
--
ALTER TABLE `calismalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yetenekler`
--
ALTER TABLE `yetenekler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetim`
--
ALTER TABLE `yonetim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `calismalar`
--
ALTER TABLE `calismalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `yetenekler`
--
ALTER TABLE `yetenekler`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `yonetim`
--
ALTER TABLE `yonetim`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
