-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Tem 2019, 16:05:59
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `diyetisyen`
--
CREATE DATABASE IF NOT EXISTS `diyetisyen` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `diyetisyen`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kryptonit3_counter_page`
--

DROP TABLE IF EXISTS `kryptonit3_counter_page`;
CREATE TABLE `kryptonit3_counter_page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kryptonit3_counter_page`
--

INSERT INTO `kryptonit3_counter_page` (`id`, `page`) VALUES
(4, '3ca447ca-6b40-5cb0-85c9-919d71c2c038'),
(2, '6a6e89c3-90f4-5702-baa8-1c750391d23d'),
(1, '6ace82b8-032b-5222-8a14-4783f20a3ce0'),
(5, 'a65f4844-0a0c-514a-b167-c77b0752102a'),
(3, 'd7e0b38a-3765-5def-b675-d13d1ecbb667');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kryptonit3_counter_page_visitor`
--

DROP TABLE IF EXISTS `kryptonit3_counter_page_visitor`;
CREATE TABLE `kryptonit3_counter_page_visitor` (
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `visitor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kryptonit3_counter_page_visitor`
--

INSERT INTO `kryptonit3_counter_page_visitor` (`page_id`, `visitor_id`, `created_at`) VALUES
(1, 1, '2019-03-12 20:53:47'),
(1, 2, '2019-05-31 20:57:06'),
(2, 2, '2019-05-13 21:16:13'),
(3, 2, '2019-05-13 21:13:34'),
(4, 2, '2019-03-16 19:19:21'),
(5, 2, '2019-04-20 16:10:53'),
(2, 3, '2019-07-02 11:05:04'),
(5, 3, '2019-07-02 11:04:49'),
(1, 3, '2019-07-02 11:05:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kryptonit3_counter_visitor`
--

DROP TABLE IF EXISTS `kryptonit3_counter_visitor`;
CREATE TABLE `kryptonit3_counter_visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kryptonit3_counter_visitor`
--

INSERT INTO `kryptonit3_counter_visitor` (`id`, `visitor`) VALUES
(2, '06a85a375f3e8542dec761784e798e0d22439eba63c778da5f2aa20a9c37726f'),
(3, '81a9b2a7501b3c970a80cc115f4db2fffa5d24d6295f596d583163c27357f0b7'),
(1, '82e0f0e9c7c898b2b3a486ee0282f73d6d2c551c3f03684c3eaee960b6e160fe');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_22_221515_create_posts_table', 1),
(4, '2019_02_28_195849_create_sayfas_table', 2),
(5, '2019_02_28_201404_create_yorumlars_table', 3),
(6, '2019_03_06_121018_create_yorumlars_table', 4),
(7, '2019_03_07_212517_create_yorumlars_table', 5),
(8, '2019_03_07_214525_create_yorumlars_table', 6),
(9, '2015_06_21_181359_create_kryptonit3_counter_page_table', 7),
(10, '2015_06_21_193003_create_kryptonit3_counter_visitor_table', 7),
(11, '2015_06_21_193059_create_kryptonit3_counter_page_visitor_table', 7),
(12, '2019_03_16_211352_add_cover_image_to_sayfas', 8),
(13, '2019_03_25_150510_add_kul_ad_to_users', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfas`
--

DROP TABLE IF EXISTS `sayfas`;
CREATE TABLE `sayfas` (
  `sayfa_id` int(10) UNSIGNED NOT NULL,
  `sayfa_adi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sayfa_icerik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sayfa_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sayfas`
--

INSERT INTO `sayfas` (`sayfa_id`, `sayfa_adi`, `sayfa_icerik`, `sayfa_kategori`, `created_at`, `updated_at`, `cover_image`) VALUES
(2, 'Tavuk Sote', '<h3>Tavuk Sote Tarifi&nbsp;&nbsp;Yapılışı</h3>', 'Tarif', '2019-03-17 19:25:05', '2019-07-02 11:02:17', 'tavuk-sote1552861504.jpg'),
(3, 'FIRINDA SOMON', '<p>Fırında Somon</p>', 'Tarif', '2019-03-19 12:33:45', '2019-03-19 12:33:45', 'noimage.jpg'),
(4, 'Pudding', '<p>Puding, s&uuml;t veya su ile yapılan bir &ccedil;eşit tatlı. İ&ccedil;ine meyve, bisk&uuml;vi vb. katılabilir</p>', 'Tarif', '2019-07-02 11:04:27', '2019-07-02 11:04:27', 'indir1562076266.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ayse Davdav', 'aysedavdav@hotmail.com', NULL, '$2y$10$zk0HYd32ePOBG2KN9cG9BexmYZOY/SDtRzMTBTczOiqcKYmV2tyia', '66Y5RRTQHg5hhVXT2Wh1huhP3ntrekuGiHNEO2xs6lIbdHtRaeLcGcXelo17', '2019-07-02 10:58:35', '2019-07-02 10:58:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlars`
--

DROP TABLE IF EXISTS `yorumlars`;
CREATE TABLE `yorumlars` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `yorum_sayfa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `yorumlars`
--

INSERT INTO `yorumlars` (`id`, `name`, `comment`, `yorum_sayfa_id`, `created_at`, `updated_at`) VALUES
(2, 'Ayse Davdav', 'Emreeeee', 2, '2019-03-18 19:26:01', '2019-03-18 19:26:01'),
(4, 'Yunus Karaca', 'Resim Yokkkkk', 3, '2019-03-23 21:46:34', '2019-03-23 21:46:34'),
(5, 'Emre Karaca', 'Ayşeeee', 2, '2019-03-25 11:54:12', '2019-03-25 11:54:12'),
(6, 'Emre Karaca', 'Efendimmm', 2, '2019-03-25 11:54:29', '2019-03-25 11:54:29');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kryptonit3_counter_page`
--
ALTER TABLE `kryptonit3_counter_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kryptonit3_counter_page_page_unique` (`page`);

--
-- Tablo için indeksler `kryptonit3_counter_page_visitor`
--
ALTER TABLE `kryptonit3_counter_page_visitor`
  ADD KEY `kryptonit3_counter_page_visitor_page_id_index` (`page_id`),
  ADD KEY `kryptonit3_counter_page_visitor_visitor_id_index` (`visitor_id`);

--
-- Tablo için indeksler `kryptonit3_counter_visitor`
--
ALTER TABLE `kryptonit3_counter_visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kryptonit3_counter_visitor_visitor_unique` (`visitor`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `sayfas`
--
ALTER TABLE `sayfas`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `yorumlars`
--
ALTER TABLE `yorumlars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `yorumlars_yorum_sayfa_id_foreign` (`yorum_sayfa_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kryptonit3_counter_page`
--
ALTER TABLE `kryptonit3_counter_page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kryptonit3_counter_visitor`
--
ALTER TABLE `kryptonit3_counter_visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `sayfas`
--
ALTER TABLE `sayfas`
  MODIFY `sayfa_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlars`
--
ALTER TABLE `yorumlars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kryptonit3_counter_page_visitor`
--
ALTER TABLE `kryptonit3_counter_page_visitor`
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `kryptonit3_counter_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_visitor_id_foreign` FOREIGN KEY (`visitor_id`) REFERENCES `kryptonit3_counter_visitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `yorumlars`
--
ALTER TABLE `yorumlars`
  ADD CONSTRAINT `yorumlars_yorum_sayfa_id_foreign` FOREIGN KEY (`yorum_sayfa_id`) REFERENCES `sayfas` (`sayfa_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
