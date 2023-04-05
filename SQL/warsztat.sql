-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Kwi 2023, 15:15
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `warsztat`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(5) NOT NULL,
  `nazwa_firmy` varchar(100) DEFAULT NULL,
  `NIP` varchar(10) DEFAULT NULL,
  `imie` varchar(50) DEFAULT NULL,
  `nazwisko` varchar(50) DEFAULT NULL,
  `telefon` int(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `kod_pocztowy` varchar(6) DEFAULT NULL,
  `miejscowosc` varchar(50) DEFAULT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `samochod` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `nazwa_firmy`, `NIP`, `imie`, `nazwisko`, `telefon`, `email`, `kod_pocztowy`, `miejscowosc`, `adres`, `samochod`) VALUES
(1, NULL, NULL, 'Stefan', 'Woźniak', 123392352, 'andrzejwozniak@gmail.com', '64-100', 'Leszno', 'Wysoka 11', 2),
(2, NULL, NULL, 'Adam', 'Nowak', 843623832, 'adamnowak@vp.pl', '64-113', 'Osieczna', 'Tadeusz Kościuszki 12', 15),
(3, 'Zakład ogólno budowlany - dom', '238591644', '', '', 742684311, 'zakladdom@gmail.com', '63-800', 'Gostyń', 'Krótka 5', 4),
(4, NULL, NULL, 'Michał', 'Stefaniak', 926548241, 'michalstefaniak@wp.pl', '64-100', 'Leszno', 'Długa 17', 5),
(5, NULL, NULL, 'Agniszka', 'Wawrzyniak', 437209522, 'agnieszkawawrzyniak@vp.pl', '64-113', 'Kąkolewo', 'Krzywińska 25', 1),
(6, 'IT Leszno', '2054981163', '', '', 781365915, 'itleszno@gmail.com', '64-100', 'Leszno', 'Fabryczna 3', 6),
(7, NULL, NULL, 'Karolina', 'Woźniak', 289491641, 'karolinawozniak@op.pl', '87-800', 'Lipno', 'Graniczna 10', 11),
(8, 'Pizza Leszno', '2131242411', '', '', 278476211, 'pizzaleszno@gmail.com', '64-100', 'Leszno', 'Gabriela Narutowicza 32', 18),
(9, 'Komfort', '2027459926', '', '', 726617873, 'komfort@gmail.com', '64-113', 'Osieczna', 'Śniadeckich', 10),
(10, 'Zakład Usług Leśnych', '1238649163', '', '', 823091347, 'zakladusluglesnych@gmail.com', '64-113', 'Osieczna', 'Adama Mickiewicza', 9),
(11, NULL, NULL, 'Franciszek', 'Olejniczak', 245602742, 'franciszekkolejniczak@wp.pl', '63-800', 'Gostyń', 'Zielona 21', 7),
(12, NULL, NULL, 'Sławek', 'Rosik', 828448256, 'slawekrosik@gmail.com', '64-113', 'Łoniewo', '23a', 12),
(13, NULL, NULL, 'Tadeusz', 'Nowak', 382749165, 'tadeusznowak@gmail.com', '64-100', 'Leszno', 'Tylna 4', 8),
(14, NULL, NULL, 'Wiktor', 'Nowaczyk', 892726491, 'wiktornowaczyk@gmail.com', '67-400', 'Wschowa', 'Robotnicza 14', 19),
(15, NULL, NULL, 'Tomasz', 'Zygmunt', 892784012, 'tomaszzygmunt@wp.pl', '63-900', 'Rawicz', 'Nowa 2', 3),
(16, 'Tom - tom', '2145267123', '', '', 184786334, 'tomtom@vp.pl', '64-113', 'Kąkolewo', 'Krzywińska 44', 20),
(17, NULL, NULL, 'Jarosław', 'Fogg', 724198416, 'jaroslawfogg@wp.pl', '64-100', 'Leszno', 'Kwiatowa 18', 17),
(18, 'Volta', '2047265981', '', '', 478265476, 'volta@wp.pl', '64-100', 'Leszno', 'Gronowska 9', 16),
(19, NULL, NULL, 'Krzysztof', 'Prałat', 762478401, 'krzysztofpralat@gmail.com', '64-000', 'Kościan', 'Pocztowa 23', 14),
(20, 'Luster', '2048597236', '', '', 248726412, 'luster@gmail.com', '63-800', 'Gostyń', 'Poznańska 6', 13),
(21, 'zakladdom@gmail.com', '238591644', NULL, NULL, 742684311, 'zakladdom@gmail.com', '63-800', 'Gostyń', 'Krótka 5', 22);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marki_samochodów`
--

CREATE TABLE `marki_samochodów` (
  `id_marki` int(2) NOT NULL,
  `nazwa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `marki_samochodów`
--

INSERT INTO `marki_samochodów` (`id_marki`, `nazwa`) VALUES
(1, 'Audi'),
(2, 'Alfa Romeo'),
(3, 'Alpina'),
(4, 'Aston Martin'),
(5, 'Bentley'),
(6, 'BMW'),
(7, 'Cupra'),
(8, 'Citroen'),
(9, 'Dacia'),
(10, 'Dodge'),
(11, 'DS'),
(12, 'Ferrari'),
(13, 'Fiat'),
(14, 'Ford'),
(15, 'Hyundai'),
(16, 'Honda'),
(17, 'Kia'),
(18, 'Jaguar'),
(19, 'Jeep'),
(20, 'Lamborghini'),
(21, 'Land Rover'),
(22, 'Lexus'),
(23, 'Maserati'),
(24, 'Mazda'),
(25, 'McLaren'),
(26, 'MINI'),
(27, 'Mercedes'),
(28, 'Mitsubishi'),
(29, 'Nissan'),
(30, 'Opel'),
(31, 'Peugeot'),
(32, 'Porsche'),
(33, 'RAM'),
(34, 'Renault'),
(35, 'Rolls-Royce'),
(36, 'Seat'),
(37, 'Skoda'),
(38, 'Smart'),
(39, 'Subaru'),
(40, 'Suzuki'),
(41, 'Tesla'),
(42, 'Toyota'),
(43, 'Volkswagen'),
(44, 'Volvo');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id_samochodu` int(6) NOT NULL,
  `marka` int(2) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `rodzaj_silnika` varchar(15) DEFAULT NULL,
  `numer_rejestracyjny` varchar(9) DEFAULT NULL,
  `rocznik` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id_samochodu`, `marka`, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `rocznik`) VALUES
(1, 1, 'A3', 'Benzyna', 'PLE-892GB', 2016),
(2, 30, 'Insignia', 'Benzyna', 'PLE-152G3', 2017),
(3, 14, 'Focus', 'Diesel', 'PL -32465', 2010),
(4, 43, 'Caddy', 'Diesel', 'P0 -BUDKA', 2015),
(5, 6, 'M2', 'Benzyna', 'PL-GK128', 2007),
(6, 42, 'Yaris', 'Hybryda', 'PLE-HSH15', 2020),
(7, 44, 'Xc60', 'Benzyna', 'PGS-83HD6', 2008),
(8, 30, 'Corsa', 'Benzyna', 'PL-38727', 2013),
(9, 27, 'Gla 250', 'Diesel', 'PL -SH176', 2016),
(10, 30, 'Movano', 'Benzyna', 'PLE-MN13A', 2011),
(11, 17, 'Rio', 'Diesel', 'PLE-RRE18', 2013),
(12, 41, 'S paid', 'Elektryczny', 'PL -AM13A', 2021),
(13, 2, 'Giulia', 'Benzyna', 'PGS-DDHJ3', 2015),
(14, 13, '500', 'Elektryczny', 'PKS-DDHJ3', 2018),
(15, 14, 'Fiesta', 'Benzyna', 'PLA-12H23', 2007),
(16, 34, 'Megane', 'Diesel', 'PL-44263', 2011),
(17, 27, 'C-klasse', 'Diesel', 'PLE-26SN1', 2006),
(18, 30, 'Vivaro', 'Diesel', 'PL-77263', 2009),
(19, 31, '307', 'Benzyna', 'FWS-32313', 2014),
(20, 42, 'Corolla', 'Hybryda', 'PL-76232', 2017),
(22, 1, 'A1', 'Benzyna', 'PLE-26131', 2018);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zgloszenia`
--

CREATE TABLE `zgloszenia` (
  `id_uslugi` int(8) NOT NULL,
  `data_przyjecia` date DEFAULT NULL,
  `godzina_przyjecia` int(2) DEFAULT NULL,
  `data_wydania` date DEFAULT NULL,
  `usluga` varchar(100) DEFAULT NULL,
  `koszt` int(5) DEFAULT NULL,
  `samochod` int(6) DEFAULT NULL,
  `wlasciciel` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zgloszenia`
--

INSERT INTO `zgloszenia` (`id_uslugi`, `data_przyjecia`, `godzina_przyjecia`, `data_wydania`, `usluga`, `koszt`, `samochod`, `wlasciciel`) VALUES
(1, '2023-02-14', 13, '2023-02-16', 'Wymiana podnośnika szyby', 110, 19, 14),
(2, '2023-02-19', 9, '2023-02-20', 'Wymiana filtrów powietrza', 200, 14, 19),
(3, '2023-02-21', 11, '2023-02-21', 'Wymiana tarcz i klocków hamulcowych', 150, 1, 5),
(4, '2023-02-22', 15, '2023-02-22', 'Wymiana opon', 80, 17, 17),
(5, '2023-02-06', 10, '2023-02-07', 'Wymiana żarówki reflektora', 20, 4, 3),
(6, '2023-02-09', 12, '2023-02-12', 'Wymiana końcówek drążków kierowniczych', 100, 20, 16),
(7, '2023-02-14', 9, '2023-02-19', 'Wymiana rozrządu', 250, 8, 13),
(8, '2023-02-26', 16, '2023-02-27', 'Wymiana oleju i filtra skrzyni automatycznej', 400, 15, 2),
(9, '2023-02-19', 8, '2023-02-20', 'Wymiana sprzęgła', 2500, 3, 15),
(10, '2023-02-01', 10, '2023-02-02', 'Wymiana nagrzewnicy', 150, 13, 20),
(11, '2023-02-09', 11, '2023-02-13', 'Zbieżność układu kierowniczego', 120, 9, 10),
(12, '2023-03-01', 10, '2023-03-06', 'Wymiana uszczelki głowicy', 500, 2, 1),
(13, '2023-02-14', 8, '2023-02-14', 'Wymiana termostatu', 80, 5, 4),
(14, '2023-02-07', 15, '2023-02-09', 'Diagnostyka komputerowa', 50, 16, 18),
(15, '2023-02-23', 9, '2023-02-25', 'Wymiana amortyzatora przód', 250, 10, 9),
(16, '2023-02-24', 11, '2023-02-27', 'Sprawdzenie układu klimatyzacji', 100, 11, 7),
(17, '2023-02-28', 13, '2023-02-28', 'Wymiana termostatu', 170, 12, 12),
(18, '2023-02-10', 14, '2023-02-14', 'Wymiana sprzęgła', 2500, 18, 8),
(19, '2023-02-15', 13, '2023-02-18', 'Wymiana linek hamulcowych', 180, 7, 11),
(20, '2023-02-20', 10, '2023-02-22', 'Wymiana termostatu', 180, 6, 6),
(22, '2023-04-03', 17, '2023-04-05', 'Wymiana podnośnika szyby', 110, 3, 15);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`),
  ADD KEY `samochod` (`samochod`);

--
-- Indeksy dla tabeli `marki_samochodów`
--
ALTER TABLE `marki_samochodów`
  ADD PRIMARY KEY (`id_marki`);

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id_samochodu`),
  ADD KEY `marka` (`marka`);

--
-- Indeksy dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  ADD PRIMARY KEY (`id_uslugi`),
  ADD KEY `samochod` (`samochod`),
  ADD KEY `wlasciciel` (`wlasciciel`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `marki_samochodów`
--
ALTER TABLE `marki_samochodów`
  MODIFY `id_marki` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id_samochodu` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  MODIFY `id_uslugi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD CONSTRAINT `klienci_ibfk_1` FOREIGN KEY (`samochod`) REFERENCES `samochody` (`id_samochodu`);

--
-- Ograniczenia dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD CONSTRAINT `samochody_ibfk_1` FOREIGN KEY (`marka`) REFERENCES `marki_samochodów` (`id_marki`);

--
-- Ograniczenia dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  ADD CONSTRAINT `zgloszenia_ibfk_1` FOREIGN KEY (`samochod`) REFERENCES `samochody` (`id_samochodu`),
  ADD CONSTRAINT `zgloszenia_ibfk_2` FOREIGN KEY (`wlasciciel`) REFERENCES `klienci` (`id_klienta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
