-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Lut 2016, 14:54
-- Wersja serwera: 10.1.8-MariaDB
-- Wersja PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `akademia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategoria`
--

CREATE TABLE `kategoria` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `adres` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kategoria`
--

INSERT INTO `kategoria` (`id`, `nazwa`, `adres`) VALUES
(2, 'jajka', 'jajka.php'),
(3, 'origami', 'origami.php'),
(4, 'szutasz', 'szutasz.php'),
(6, 'szydelko', 'szydelko.php');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `koszyk`
--

CREATE TABLE `koszyk` (
  `id` int(11) NOT NULL,
  `id_sesja` int(11) NOT NULL,
  `id_produkt` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `status` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `koszyk`
--

INSERT INTO `koszyk` (`id`, `id_sesja`, `id_produkt`, `ilosc`, `status`) VALUES
(3, 11, 2, 3, ''),
(4, 11, 8, 1, ''),
(5, 11, 5, 2, ''),
(6, 11, 6, 2, ''),
(7, 11, 7, 3, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logowanie`
--

CREATE TABLE `logowanie` (
  `id` int(11) NOT NULL,
  `id_uzytkownik` int(11) NOT NULL,
  `rodzaj` text COLLATE utf8_polish_ci NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `logowanie`
--

INSERT INTO `logowanie` (`id`, `id_uzytkownik`, `rodzaj`, `data`) VALUES
(1, 1, 'zaloguj', '2016-02-09 11:54:08'),
(2, 1, 'wyloguj', '2016-02-09 12:13:52'),
(3, 1, 'zaloguj', '2016-02-09 12:13:58'),
(4, 1, 'wyloguj', '2016-02-09 12:14:01'),
(5, 1, 'zaloguj', '2016-02-09 13:42:21'),
(6, 1, 'wyloguj', '2016-02-09 14:23:13'),
(7, 1, 'zaloguj', '2016-02-09 14:23:30'),
(8, 1, 'wyloguj', '2016-02-09 15:09:19'),
(9, 1, 'zaloguj', '2016-02-09 15:09:43'),
(10, 1, 'wyloguj', '2016-02-09 15:13:51'),
(11, 1, 'zaloguj', '2016-02-09 15:14:19'),
(12, 1, 'wyloguj', '2016-02-10 09:00:43'),
(13, 1, 'zaloguj', '2016-02-10 10:31:13'),
(14, 1, 'wyloguj', '2016-02-10 10:31:51'),
(15, 1, 'zaloguj', '2016-02-11 18:27:02'),
(16, 1, 'wyloguj', '2016-02-11 18:29:32'),
(17, 1, 'wyloguj', '2016-02-20 20:38:42'),
(18, 2, 'zaloguj', '2016-02-25 13:09:07'),
(19, 2, 'wyloguj', '2016-02-25 14:02:24'),
(20, 2, 'zaloguj', '2016-02-25 14:02:29'),
(21, 2, 'wyloguj', '2016-02-25 14:24:01'),
(22, 2, 'zaloguj', '2016-02-25 14:24:07'),
(23, 2, 'wyloguj', '2016-02-26 08:19:34'),
(24, 2, 'zaloguj', '2016-02-26 08:43:49'),
(25, 2, 'wyloguj', '2016-02-26 08:48:27'),
(26, 2, 'zaloguj', '2016-02-26 08:48:39'),
(27, 2, 'wyloguj', '2016-02-26 08:48:54'),
(28, 2, 'zaloguj', '2016-02-26 08:49:03'),
(29, 2, 'wyloguj', '2016-02-26 08:49:09'),
(30, 2, 'zaloguj', '2016-02-26 08:49:28'),
(31, 2, 'wyloguj', '2016-02-26 08:56:20'),
(32, 2, 'zaloguj', '2016-02-26 09:26:37'),
(33, 2, 'wyloguj', '2016-02-26 09:26:41'),
(34, 2, 'zaloguj', '2016-02-26 09:27:02'),
(35, 2, 'wyloguj', '2016-02-26 09:27:06');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `id` int(11) NOT NULL,
  `id_kategoria` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `opis` longtext COLLATE utf8_polish_ci NOT NULL,
  `cena` double(9,2) NOT NULL DEFAULT '0.00',
  `ilosc` int(11) NOT NULL,
  `zdjecie` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`id`, `id_kategoria`, `nazwa`, `opis`, `cena`, `ilosc`, `zdjecie`) VALUES
(2, 3, 'Jajko', 'Jajko wykonane z papieru', 6.00, 5, 'origami_jajko'),
(3, 2, 'wyklejane', 'Jajko wyklejane bibułą', 8.50, 8, 'jajko_bibula'),
(4, 2, 'Wycinane', 'Jajko wycinane wiertłem', 9.20, 3, 'jajko_wycinane'),
(5, 3, 'Kurczak', 'Kurczak wykonany z papieru. Może posłużyć za koszyczek wielkanocny.', 12.35, 1, 'kurczak'),
(6, 6, 'Aniołek', 'Aniołek wykonany na szydełku', 14.90, 10, 'aniolek'),
(7, 6, 'bransoletka', 'Bransoletka wykonana na szydełku', 8.20, 6, 'bransoletka'),
(8, 4, 'Kolczyki', 'Kolczyki wykonane z szutaszu.', 6.60, 8, 'szutasz_kolczyki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sesja`
--

CREATE TABLE `sesja` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `realizacja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `sesja`
--

INSERT INTO `sesja` (`id`, `id_login`, `data`, `realizacja`) VALUES
(1, 2, '0000-00-00 00:00:00', 0),
(2, 2, '0000-00-00 00:00:00', 0),
(3, 2, '0000-00-00 00:00:00', 0),
(4, 2, '0000-00-00 00:00:00', 0),
(5, 0, '0000-00-00 00:00:00', 0),
(6, 0, '0000-00-00 00:00:00', 0),
(7, 2, '2016-02-26 08:48:27', 0),
(8, 2, '2016-02-26 08:48:54', 0),
(9, 2, '2016-02-26 08:49:09', 0),
(10, 2, '2016-02-26 09:26:41', 0),
(11, 0, '2016-02-26 09:27:06', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(11) NOT NULL,
  `login` text COLLATE utf8_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `data_utworzenia` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_usuniecia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `login`, `haslo`, `email`, `data_utworzenia`, `data_usuniecia`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.pl', '2016-02-09 11:48:55', NULL),
(2, 'konto', '5de6e568ffff84c67aecc0257f82e6d6', 'konto@xxx.pl', '2016-02-25 13:08:59', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `koszyk`
--
ALTER TABLE `koszyk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logowanie`
--
ALTER TABLE `logowanie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sesja`
--
ALTER TABLE `sesja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `logowanie`
--
ALTER TABLE `logowanie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT dla tabeli `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `sesja`
--
ALTER TABLE `sesja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
