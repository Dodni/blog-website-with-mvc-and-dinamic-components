-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Már 01. 19:00
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `web2`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `cim` varchar(50) DEFAULT NULL,
  `rovidleiras` varchar(150) DEFAULT NULL,
  `hosszuleiras` mediumtext DEFAULT NULL,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `blog`
--

INSERT INTO `blog` (`id`, `cim`, `rovidleiras`, `hosszuleiras`, `datum`) VALUES
(22, 'TESZT', 'TESZT CIM RÖVID LERASA', 'asd', '2022-02-27'),
(23, 'asd', 'asd', 'asd', '2022-02-27'),
(24, 'Csinaltam egy blogot', 'Ahhoz, hogy teszteljem az editet', 'Szerinted sikerülni fog?', '2022-02-27'),
(25, 'Uj blog', 'Rovid blog leiras', 'Hosszuusad', '2022-02-27'),
(26, 'uj', 'asd', 'asd', '2022-03-02'),
(27, 'MA', 'asd', 'Aassssssssaskdasdkaaaa\r\nmost tesztelek\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-03-01');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `data`
--

INSERT INTO `data` (`id`, `title`, `content`) VALUES
(4, 'idk hanyadik', 'anyad\r\nszoveg\r\nszoveg\r\nszoveg\r\nszoveg\r\nszovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szoveg\r\nszovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szovegszoveg szoveg szoveg szoveg szoveg szoveg'),
(5, 'asd', 'asdasdasdasd'),
(6, 'asdasdas', 'asdasdasd');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(10) UNSIGNED NOT NULL,
  `csaladi_nev` varchar(45) NOT NULL DEFAULT '',
  `utonev` varchar(45) NOT NULL DEFAULT '',
  `bejelentkezes` varchar(12) NOT NULL DEFAULT '',
  `jelszo` varchar(40) NOT NULL DEFAULT '',
  `jogosultsag` varchar(3) NOT NULL DEFAULT '_1_'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `csaladi_nev`, `utonev`, `bejelentkezes`, `jelszo`, `jogosultsag`) VALUES
(1, 'Rendszer', 'Admin', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '__1'),
(2, 'Családi_2', 'Utónév_2', 'Login2', '6cf8efacae19431476020c1e2ebd2d8acca8f5c0', '_1_'),
(3, 'Családi_3', 'Utónév_3', 'Login3', 'df4d8ad070f0d1585e172a2150038df5cc6c891a', '_1_'),
(4, 'Családi_4', 'Utónév_4', 'Login4', 'b020c308c155d6bbd7eb7d27bd30c0573acbba5b', '_1_'),
(5, 'Családi_5', 'Utónév_5', 'Login5', '9ab1a4743b30b5e9c037e6a645f0cfee80fb41d4', '_1_'),
(6, 'Családi_6', 'Utónév_6', 'Login6', '7ca01f28594b1a06239b1d96fc716477d198470b', '_1_'),
(7, 'Családi_7', 'Utónév_7', 'Login7', '41ad7e5406d8f1af2deef2ade4753009976328f8', '_1_'),
(8, 'Családi_8', 'Utónév_8', 'Login8', '3a340fe3599746234ef89591e372d4dd8b590053', '_1_'),
(9, 'Családi_9', 'Utónév_9', 'Login9', 'c0298f7d314ecbc5651da5679a0a240833a88238', '_1_'),
(10, 'Családi_10', 'Utónév_10', 'bejelentkeze', 'jelszo', '_1_'),
(11, '', '', 'ujfelhasznal', 'jelsoz123', '_1_'),
(12, 'dodni', 'dodni', 'dodni', 'dodni', '_1_'),
(13, '', '', 'dodni2', 'b704753a702b062db52c0098944cd39382b826c9', '_1_'),
(14, '', '', 'feher', 'e8248cbe79a288ffec75d7300ad2e07172f487f6', '_1_');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kapcsolat`
--

CREATE TABLE `kapcsolat` (
  `id` int(10) NOT NULL,
  `nev` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefonszam` varchar(50) DEFAULT NULL,
  `uzenet` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `kapcsolat`
--

INSERT INTO `kapcsolat` (`id`, `nev`, `email`, `telefonszam`, `uzenet`) VALUES
(1, 'Dodni78', 'feherdonat99@gmail.com', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kapcsolatbeallit`
--

CREATE TABLE `kapcsolatbeallit` (
  `id` int(1) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `kapcsolatbeallit`
--

INSERT INTO `kapcsolatbeallit` (`id`, `name`, `email`) VALUES
(1, 'donat', 'feherdonat99@gmail.com');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE `menu` (
  `url` varchar(30) NOT NULL,
  `nev` varchar(30) NOT NULL,
  `szulo` varchar(30) NOT NULL,
  `jogosultsag` varchar(3) NOT NULL,
  `sorrend` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`url`, `nev`, `szulo`, `jogosultsag`, `sorrend`) VALUES
('admin', 'Admin', '', '011', 80),
('alapinfok', 'Alapinfók', 'elerhetoseg', '111', 40),
('beallitasok', 'Beállítások', 'admin', '011', 121),
('belepes', 'Belépés', '', '100', 60),
('blog', 'Blog', '', '111', 15),
('blogok', 'Blogok', 'admin', '011', 119),
('felhasznalok', 'Felhasználók', 'admin', '011', 110),
('kapcsolat', 'Kapcsolat', '', '111', 60),
('kiegeszitesek', 'Kiegészítések', 'elerhetoseg', '011', 50),
('kilepes', 'Kilépés', '', '011', 111),
('menupontok', 'Menüpont', 'admin', '011', 100),
('nyitolap', 'Nyitólap', '', '111', 10),
('ujblog', 'Új Blog', 'admin', '011', 120);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `kapcsolat`
--
ALTER TABLE `kapcsolat`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`url`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT a táblához `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT a táblához `kapcsolat`
--
ALTER TABLE `kapcsolat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
