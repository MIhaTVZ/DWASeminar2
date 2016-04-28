--
-- Database: `ribarjet`
--
CREATE DATABASE IF NOT EXISTS `ribarjet` DEFAULT CHARACTER SET cp1250 COLLATE cp1250_croatian_ci;
USE `ribarjet`;

-- --------------------------------------------------------

--
-- Table structure for table `bazne_luke`
--

CREATE TABLE `bazne_luke` (
  `id` int(11) NOT NULL,
  `naziv` varchar(100) COLLATE cp1250_croatian_ci NOT NULL,
  `luka_info` text COLLATE cp1250_croatian_ci NOT NULL,
  `slika` varchar(100) COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `bazne_luke`
--

INSERT INTO `bazne_luke` (`id`, `naziv`, `luka_info`, `slika`) VALUES
(1, 'Zagreb', 'marko je zakon', 'slika1'),
(2, 'Split', 'mare je zakon', 'slika2');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(20) COLLATE cp1250_croatian_ci NOT NULL,
  `prezime` varchar(20) COLLATE cp1250_croatian_ci NOT NULL,
  `email` varchar(30) COLLATE cp1250_croatian_ci NOT NULL,
  `username` varchar(15) COLLATE cp1250_croatian_ci NOT NULL,
  `password` varchar(30) COLLATE cp1250_croatian_ci NOT NULL,
  `tip_korisnika_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plovila`
--

CREATE TABLE `plovila` (
  `id` int(11) NOT NULL,
  `model` varchar(100) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `duzina` int(11) DEFAULT NULL,
  `sirina` int(11) DEFAULT NULL,
  `broj_osoba` int(11) NOT NULL,
  `geo_duljina` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `geo_sirina` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `trenutna_luka_id` int(11) NOT NULL,
  `tip_plovila` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `plovila`
--

INSERT INTO `plovila` (`id`, `model`, `duzina`, `sirina`, `broj_osoba`, `geo_duljina`, `geo_sirina`, `trenutna_luka_id`, `tip_plovila`) VALUES
(1, 'model1', 5, 2, 0, '', '', 1, 2),
(2, 'model2', 5, 5, 0, '', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE `rezervacije` (
  `id` int(11) NOT NULL,
  `id_plovila` int(11) NOT NULL,
  `polazak_dat` datetime NOT NULL,
  `dolazak_dat` datetime NOT NULL,
  `id_odredista` int(11) NOT NULL,
  `id_korisnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tip_korisnika`
--

CREATE TABLE `tip_korisnika` (
  `id` int(11) NOT NULL,
  `tip` varchar(30) COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `tip_korisnika`
--

INSERT INTO `tip_korisnika` (`id`, `tip`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tip_plovila`
--

CREATE TABLE `tip_plovila` (
  `id` int(11) NOT NULL,
  `tip` varchar(100) COLLATE cp1250_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `tip_plovila`
--

INSERT INTO `tip_plovila` (`id`, `tip`) VALUES
(1, 'jedrilica'),
(2, 'jetski');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bazne_luke`
--
ALTER TABLE `bazne_luke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tip_korisnika_id` (`tip_korisnika_id`);

--
-- Indexes for table `plovila`
--
ALTER TABLE `plovila`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tip_plovila` (`tip_plovila`),
  ADD KEY `trenutna_luka_id` (`trenutna_luka_id`);

--
-- Indexes for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_plovila` (`id_plovila`),
  ADD KEY `id_odredista` (`id_odredista`),
  ADD KEY `id_korisnik` (`id_korisnik`);

--
-- Indexes for table `tip_korisnika`
--
ALTER TABLE `tip_korisnika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_plovila`
--
ALTER TABLE `tip_plovila`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bazne_luke`
--
ALTER TABLE `bazne_luke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `plovila`
--
ALTER TABLE `plovila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rezervacije`
--
ALTER TABLE `rezervacije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tip_korisnika`
--
ALTER TABLE `tip_korisnika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tip_plovila`
--
ALTER TABLE `tip_plovila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`tip_korisnika_id`) REFERENCES `tip_korisnika` (`id`);

--
-- Constraints for table `plovila`
--
ALTER TABLE `plovila`
  ADD CONSTRAINT `plovila_ibfk_1` FOREIGN KEY (`tip_plovila`) REFERENCES `tip_plovila` (`id`),
  ADD CONSTRAINT `plovila_ibfk_2` FOREIGN KEY (`trenutna_luka_id`) REFERENCES `bazne_luke` (`id`);

--
-- Constraints for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD CONSTRAINT `rezervacije_ibfk_1` FOREIGN KEY (`id_plovila`) REFERENCES `plovila` (`id`),
  ADD CONSTRAINT `rezervacije_ibfk_2` FOREIGN KEY (`id_odredista`) REFERENCES `bazne_luke` (`id`),
  ADD CONSTRAINT `rezervacije_ibfk_3` FOREIGN KEY (`id_korisnik`) REFERENCES `korisnik` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
