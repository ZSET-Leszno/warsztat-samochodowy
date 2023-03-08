-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 08 Mar 2023, 15:28
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `nazwa_firmy`, `NIP`, `imie`, `nazwisko`, `telefon`, `email`, `kod_pocztowy`, `miejscowosc`, `adres`, `samochod`) VALUES
(1, NULL, NULL, 'Stefan', 'Woźniak', 123392352, 'andrzejwozniak@gmail.com', '64-100', 'Leszno', 'Wysoka 11', 2),
(2, NULL, NULL, 'Adam', 'Nowak', 843623832, 'adamnowak@vp.pl', '64-113', 'Osieczna', 'Tadeusz Kościuszki 12', 15),
(3, 'Zakład ogólno budowlany - dom', '238591644', '', '', 742684311, 'zakładdom@gmail.com', '63-800', 'Gostyń', 'Krótka 5', 4),
(4, NULL, NULL, 'Michał', 'Stefaniak', 926548241, 'michalstefaniak@wp.pl', '64-100', 'Leszno', 'Długa 17', 5),
(5, NULL, NULL, 'Agniszka', 'Wawrzyniak', 437209522, 'agnieszkawawrzyniak@vp.pl', '64-113', 'Kąkolewo', 'Krzywińska 25', 1),
(6, 'IT Leszno', '2054981163', '', '', 781365915, 'itleszno@gmail.com', '64-100', 'Leszno', 'Fabryczna 3', 6),
(7, NULL, NULL, 'Karolina', 'Woźniak', 289491641, 'karolinawozniak@op.pl', '87-800', 'Lipno', 'Graniczna 10', 11),
(8, 'Pizza Leszno', '2131242411', '', '', 278476211, 'pizzaleszno@gmail.com', '64-100', 'Leszno', 'Gabriela Narutowicza 32', 8),
(9, 'Komfort', '2027459926', '', '', 726617873, 'komfort@gmail.com', '64-113', 'Osieczna', 'Śniadeckich', 10),
(10, 'Zakład Usług Leśnych', '1238649163', '', '', 823091347, 'zakladusluglesnych@gmail.com', '64-113', 'Osieczna', 'Adama Mickiewicza', 9),
(11, NULL, NULL, 'Franciszek', 'Olejniczak', 245602742, 'franciszekkolejniczak@wp.pl', '63-800', 'Gostyń', 'Zielona 21', 7),
(12, NULL, NULL, 'Sławek', 'Rosik', 828448256, 'slawekrosik@gmail.com', '64-113', 'Łoniewo', '23a', 12),
(13, NULL, NULL, 'Tadeusz', 'Nowak', 382749165, 'tadeusznowak@gmail.com', '64-100', 'Leszno', 'Tylna 4', 8),
(14, NULL, NULL, 'Wiktor', 'Nowaczyk', 892726491, 'wiktornowaczyk@gmail.com', '67-400', 'Wschowa', 'Robotnicza 14', 19),
(15, NULL, NULL, 'Tomasz', 'Zygmunt', 892784012, 'tomaszzygmunt@wp.pl', '63-900', 'Rawicz', 'Nowa 2', 4),
(16, 'Tom - tom', '2145267123', '', '', 184786334, 'tomtom@vp.pl', '64-113', 'Kąkolewo', 'Krzywińska 44', 20),
(17, NULL, NULL, 'Jarosław', 'Fogg', 724198416, 'jaroslawfogg@wp.pl', '64-100', 'Leszno', 'Kwiatowa 18', 17),
(18, 'Volta', '2047265981', '', '', 478265476, 'volta@wp.pl', '64-100', 'Leszno', 'Gronowska 9', 16),
(19, NULL, NULL, 'Krzysztof', 'Prałat', 762478401, 'krzysztofpralat@gmail.com', '64-000', 'Kościan', 'Pocztowa 23', 14),
(20, 'Luster', '2048597236', '', '', 248726412, 'luster@gmail.com', '63-800', 'Gostyń', 'Poznańska 6', 13);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marki_samochodów`
--

CREATE TABLE `marki_samochodów` (
  `id_marki` int(2) NOT NULL,
  `nazwa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `nr_VIN` varchar(17) DEFAULT NULL,
  `rocznik` int(4) DEFAULT NULL,
  `pojemnosc` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id_samochodu`, `marka`, `model`, `rodzaj_silnika`, `numer_rejestracyjny`, `nr_VIN`, `rocznik`, `pojemnosc`) VALUES
(1, 1, 'A3', 'Benzyna', 'PLE-892GB', 'WAUZZZ4F08N012345', 2016, '2.5'),
(2, 30, 'Insignia', 'Benzyna', 'PLE-152G3', 'W0L0XCF0814000002', 2017, '2.0'),
(3, 14, 'Focus', 'Diesel', 'PL -32465', 'WF05XXGCD56L10803', 2010, '1.6'),
(4, 43, 'Caddy', 'Diesel', 'P0 -BUDKA', 'WVWZZZ7MZXV056234', 2015, '1.4'),
(5, 6, 'M2', 'Benzyna', 'PL-GK128', 'WBADE6321WB992119', 2007, '2.0'),
(6, 42, 'Yaris', 'Hybryda', 'PLE-HSH15', 'NMTDG26R70R086613', 2020, '1.5'),
(7, 44, 'Xc60', 'Benzyna', 'PGS-83HD6', 'YV1PWA8BDJ1064896', 2008, '1.7'),
(8, 30, 'Corsa', 'Benzyna', 'PL-38727', 'W0V7D9EB6L4062278', 2013, '1.4'),
(9, 27, 'Gla 250', 'Diesel', 'PL -SH176', 'WDB2201751A432136', 2016, '2.0'),
(10, 30, 'Movano', 'Benzyna', 'PLE-MN13A', 'W0LPC60B2C1049783', 2011, '1.5'),
(11, 17, 'Rio', 'Diesel', 'PLE-RRE18', 'U5YHB312ACL070189', 2013, '1.4'),
(12, 41, 'S paid', 'Elektryczny', 'PL -AM13A', '5YJSA1DP5CFF00000', 2021, ''),
(13, 2, 'Giulia', 'Benzyna', 'PGS-DDHJ3', 'ZAR92900007280800', 2015, '1.4'),
(14, 13, '500', 'Elektryczny', 'PKS-DDHJ3', 'ZFA25000002803868', 2018, ''),
(15, 14, 'Fiesta', 'Benzyna', 'PLA-12H23', 'WF0JXXGCBJFC89987', 2007, '1.2'),
(16, 34, 'Megane', 'Diesel', 'PL-44263', 'VF1BR1G0H41979181', 2011, '1.9'),
(17, 27, 'C-klasse', 'Diesel', 'PLE-26SN1', 'WDD2050401R395380', 2006, '2.7'),
(18, 30, 'Vivaro', 'Diesel', 'PL-77263', 'W0L0XEP68F4195750', 2009, '2.0'),
(19, 31, '307', 'Benzyna', 'FWS-32313', 'VF38ERHH8BL061775', 2014, '1.6'),
(20, 42, 'Corolla', 'Hybryda', 'PL-76232', 'JTNB23HK803098408', 2017, '1.6');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  MODIFY `id_klienta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `marki_samochodów`
--
ALTER TABLE `marki_samochodów`
  MODIFY `id_marki` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id_samochodu` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  MODIFY `id_uslugi` int(8) NOT NULL AUTO_INCREMENT;

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
