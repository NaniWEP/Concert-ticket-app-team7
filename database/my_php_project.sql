-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 02:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`) VALUES
(1, 'Navin Chhorn', 'navin.chhorn@student.passerellesnumeriques.org', '$2y$10$7716SWaqAdd4TGeal61G4ulonKT4G/2S5M5QUevzV6q/JIqehOhR.'),
(2, 'Navin Chhorn ', 'navin.chhorn@student.passerellesnumeriques.org', '$2y$10$w/WowVW1Ds5G3V2HOZo6aeZJ7Jp.Ex/MXu55T.d/NI69WIUAzz7rG'),
(3, 'Navin ', 'sad@gmail.com', '$2y$10$sjOFWcFli74FzVUPcW.SreISiS4u/iSUPFy.2R5FTcR/xgbFqwKn6');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `language` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `minute` time NOT NULL,
  `trailer` varchar(200) NOT NULL,
  `poster` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `shows` (`id`, `name`, `description`, `date`, `language`, `subtitle`, `minute`, `trailer`, `poster`) VALUES
(1, 'The Giver', 'The Giver is a morally driven and interesting story about a young boy called Jonas who lives in a society free of crime and sadness. At the age of 12, children are assigned their jobs, which they will train for and do for the', '2023-10-10', 'English', 'Khmer', '00:00:00', 'https://www.youtube.com/embed/fH6B4S9ENY4', 'the.giver(1).jfif'),
(3, 'San Andreas', 'In the aftermath of a massive earthquake in California, a rescue-chopper pilot makes a dangerous journey with his ex-wife across the state in order to rescue his daughter. In San Andreas, California is experiencing a statewid', '2023-05-10', 'English', 'Khmer', '00:00:00', 'https://www.youtube.com/embed/UN1G4BSyIos', 'san.andreas(2).jfif'),
(4, 'Venom', 'venom, the poisonous secretion of an animal, produced by specialized glands that are often associated with spines, teeth, stings, or other piercing devices. The venom apparatus may be primarily for killing or paralyzing prey ', '2024-08-01', 'Thai', 'English', '02:40:21', 'https://www.youtube.com/embed/dajc5mgIpg0', 'venom(3).jfif'),
(5, 'Spider Man', 'Superhuman strength, agility, endurance, ability to stick to and climb walls and other surfaces, uses self-designed web-shooters allowing him to fire and swing from sticky webs, special \"Spider-Sense\" warns of incoming danger', '2023-08-10', 'English', 'Khmer', '00:00:00', 'https://www.youtube.com/embed/t06RUxPbp_c', 'spider.man(4).jfif'),
(6, 'Divergent', 'moving or extending in different directions from a common point : diverging from each other. divergent paths. see also divergent evolution. : differing from each other or from a standard.', '2023-08-23', 'France ', 'Khmer', '00:00:00', 'https://www.youtube.com/embed/Aw7Eln_xuWc', 'divergent(5).jfif'),
(7, 'John Wick', 'John eventually became the top enforcer for the New York Russian crime syndicate, becoming a feared and ruthless hitman that people describe as \"a man of focus, commitment, and sheer will\". He was later nicknamed \"Baba Yaga\",', '2023-08-10', 'English', 'Khmer', '00:00:00', 'https://www.youtube.com/embed/C0BMx-qxsP4', 'john.wick(6).jfif'),
(8, 'The Gray Man', 'When the CIA\ s most skilled operative, whose true identity is known to none, accidentally uncovers dark agency secrets, a psychopathic former colleague puts a bounty on his head, setting off... Read all.', '2023-08-10', 'English', 'Khmer', '01:50:40', 'https://www.youtube.com/embed/BmllggGO4pM', 'the.gray.man(7).jfif'),
(9, 'Suicide Squad', 'In the film, a secret government agency led by Amanda Waller recruits imprisoned supervillains to execute dangerous black ops missions and save the world from a powerful threat in exchange for reduced sentences.', '2023-02-01', 'English', 'English', '00:00:00', 'https://www.youtube.com/embed/CmRih_VtVAs', 'suicide.squad(8).jfif'),
(10, 'The Lost City', 'While on tour promoting her new book with Alan, Loretta gets kidnapped by an eccentric billionaire who hopes she can lead him to an ancient city\ s lost treasure from her latest story. Determined to prove he can be a hero in r', '2023-03-10', 'English', 'Khmer', '03:00:00', 'https://www.youtube.com/embed/xohAPIRNzuo', 'The.lost.city(9).jfif'),
(11, '6 Uncharted', 'It follows a group of people that fake their deaths and decide to form a vigilante team in order to stage a coup d\ état against a ruthless dictator. 6 Underground premiered at The Shed in New York City on December 10, 2019, a', '2023-06-20', 'France', 'Khmer', '00:00:00', 'https://www.youtube.com/embed/eHp3MbsCbMg', 'uncharted(10).jfif'),
(12, 'Samaritan', 'The SAMARITAN was once the staunch defender of Granite City. But after an epic battle with his brother and rival, Nemesis, the Samaritan mysteriously disappeared from his life of crime fighting. Sam (Javon \"Wanna\" Walton) ', '2023-04-12', 'English', 'Khmer ', '00:00:00', 'https://www.youtube.com/embed/LgO3O5zokOw', 'samaritan(11).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
