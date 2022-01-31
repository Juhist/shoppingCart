-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 31. 11:31
-- Kiszolgáló verziója: 10.1.40-MariaDB
-- PHP verzió: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `yii2basic`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cart_products`
--

CREATE TABLE `cart_products` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'Termék neve',
  `cost` int(11) NOT NULL DEFAULT '0' COMMENT 'Ár',
  `is_special_offer` varchar(8) COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'False' COMMENT 'Akciós-e',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Létrehozás ideje',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Utolsó módosítás ideje',
  `count` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `cart_products`
--

INSERT INTO `cart_products` (`id`, `name`, `cost`, `is_special_offer`, `created_at`, `updated_at`, `count`) VALUES
(1, 'Product 1', 2000, 'True', '2022-01-31 12:56:25', '2022-01-29 13:31:08', 1),
(2, 'Product 1', 1500, 'False', '2022-01-31 13:47:32', NULL, 3),
(3, 'Product 3', 10000, 'True', '2022-01-31 13:58:45', NULL, 2);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`(191)),
  ADD KEY `created_at` (`created_at`),
  ADD KEY `updated_at` (`updated_at`),
  ADD KEY `cost` (`id`),
  ADD KEY `count` (`count`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `cart_products`
--
ALTER TABLE `cart_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
