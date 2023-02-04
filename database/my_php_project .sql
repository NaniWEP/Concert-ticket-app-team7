-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 04:57 PM
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
-- Table structure for table `date_time`
--

CREATE TABLE `date_time` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date_time`
--

INSERT INTO `date_time` (`id`, `date`, `time`) VALUES
(1, '2023-02-14', '04:50:00'),
(2, '2023-02-10', '09:24:00'),
(3, '2023-02-08', '01:24:00'),
(4, '2023-02-17', '10:24:00'),
(5, '2023-02-24', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `show_id`, `venue_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 1),
(4, 4, 1),
(5, 5, 2),
(6, 6, 1),
(7, 7, 2),
(8, 8, 1),
(9, 9, 2),
(10, 10, 2),
(11, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin '),
(2, 'seller'),
(3, 'customer ');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `running_time` int(11) NOT NULL,
  `trailer` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `title`, `description`, `type_id`, `img`, `running_time`, `trailer`, `language`, `subtitle`) VALUES
(1, 'The Giver', 'The Giver is a morally driven and interesting story about a young boy called Jonas who lives in a society free of crime and sadness. At the age of 12, children are assigned their jobs, which they will', 1, 'the.giver(1).jfif', 120, 'https://www.youtube.com/embed/fH6B4S9ENY4', 'English ', 'Khmer '),
(2, 'San Andreas', 'In the aftermath of a massive earthquake in California, a rescue-chopper pilot makes a dangerous journey with his ex-wife across the state in order to rescue his daughter. In San Andreas, California i', 1, 'san.andreas(2).jfif', 180, 'https://www.youtube.com/embed/UN1G4BSyIos', 'English ', 'Engish'),
(3, 'Venom', 'venom, the poisonous secretion of an animal, produced by specialized glands that are often associated with spines, teeth, stings, or other piercing devices. The venom apparatus may be primarily for ki', 1, 'venom(3).jfif', 120, 'https://www.youtube.com/embed/dajc5mgIpg0', 'Khmer ', 'English '),
(4, 'Spider Man', 'Superhuman strength, agility, endurance, ability to stick to and climb walls and other surfaces, uses self-designed web-shooters allowing him to fire and swing from sticky webs, special \\\"Spider-Sense', 1, 'spider.man(4).jfif', 180, 'https://www.youtube.com/embed/t06RUxPbp_c', 'English ', 'English'),
(5, 'Divergent', 'moving or extending in different directions from a common point : diverging from each other. divergent paths. see also divergent evolution. : differing from each other or from a standard.', 1, 'divergent(5).jfif', 130, 'https://www.youtube.com/embed/Aw7Eln_xuWc', 'English ', 'English'),
(6, 'John Wick', 'John eventually became the top enforcer for the New York Russian crime syndicate, becoming a feared and ruthless hitman that people describe as \"a man of focus, commitment, and sheer will\".', 1, 'john.wick(6).jfif', 150, 'https://www.youtube.com/embed/C0BMx-qxsP4', 'English ', 'Khmer'),
(7, 'The Gray Man', 'When the CIA\\ s most skilled operative, whose true identity is known to none, accidentally uncovers dark agency secrets, a psychopathic former colleague puts a bounty on his head, setting off... Read ', 1, 'the.gray.man(7).jfif', 120, 'https://www.youtube.com/embed/BmllggGO4pM', 'English ', 'Khmer'),
(8, 'Suicide Squad', 'In the film, a secret government agency led by Amanda Waller recruits imprisoned supervillains to execute dangerous black ops missions and save the world from a powerful threat in exchange for reduced', 1, 'suicide.squad(8).jfif', 160, 'https://www.youtube.com/embed/CmRih_VtVAs', 'English ', 'Khmer'),
(9, 'The Lost City', 'While on tour promoting her new book with Alan, Loretta gets kidnapped by an eccentric billionaire who hopes she can lead him to an ancient city\\ s lost treasure from her latest story. Determined to p', 1, 'The.lost.city(9).jfif', 130, 'https://www.youtube.com/embed/xohAPIRNzuo', 'English ', 'English'),
(10, '6 Uncharted', 'It follows a group of people that fake their deaths and decide to form a vigilante team in order to stage a coup d\\ état against a ruthless dictator. 6 Underground premiered at The Shed in New York Ci', 1, 'uncharted(10).jfif', 140, 'https://www.youtube.com/embed/eHp3MbsCbMg', 'English ', 'Khmer'),
(11, 'Samaritan', 'The SAMARITAN was once the staunch defender of Granite City. But after an epic battle with his brother and rival, Nemesis, the Samaritan mysteriously disappeared from his life of crime fighting. Sam (', 1, 'samaritan(11).jfif', 170, 'https://www.youtube.com/embed/LgO3O5zokOw', 'English ', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `show_datetime`
--

CREATE TABLE `show_datetime` (
  `id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `datetime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show_datetime`
--

INSERT INTO `show_datetime` (`id`, `show_id`, `datetime_id`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 4),
(4, 4, 2),
(5, 5, 4),
(6, 6, 3),
(7, 7, 3),
(8, 8, 2),
(9, 9, 5),
(10, 10, 4),
(11, 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `show_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type_shows`
--

CREATE TABLE `type_shows` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_shows`
--

INSERT INTO `type_shows` (`id`, `name`) VALUES
(1, 'movie '),
(2, 'concert ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `password`, `role_id`, `date_of_birth`) VALUES
(7, 'Admin', NULL, 'Admin@gmail.com', '$2y$10$FR.Ph8gJIDJzERkE26I8nO6WorV0fiuO0XYxu.L0ieJYAqofP9CX.', 1, '2023-01-12'),
(8, 'Makara', NULL, 'makara@gmail.com', '$2y$10$5nSOBAkeAX.7u1lGtZwUQ.FkcrEwxqL/vT0CfM/7pie3RnJ68.53O', 3, '2023-03-23'),
(9, 'Rady', NULL, 'rady@gmail.com', '$2y$10$E0RilZpd2.Qi/4/2sWxTWeLQrJhDP0hy5wPZuOInecl3RZ.9OQXdy', 3, '2003-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `address`) VALUES
(1, 'MAJOR ', 'PHNOM PEN '),
(2, 'LEGEND ', 'PHNOM PEN '),
(3, 'Hard Rock Cafe', 'PHNOM PEN ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `date_time`
--
ALTER TABLE `date_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `show_id` (`show_id`),
  ADD KEY `venue_id` (`venue_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `show_datetime`
--
ALTER TABLE `show_datetime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datetime_id` (`datetime_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `show_id` (`show_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `type_shows`
--
ALTER TABLE `type_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_ibfk_1` (`role_id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date_time`
--
ALTER TABLE `date_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `show_datetime`
--
ALTER TABLE `show_datetime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_shows`
--
ALTER TABLE `type_shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_shows` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `show_datetime`
--
ALTER TABLE `show_datetime`
  ADD CONSTRAINT `show_datetime_ibfk_1` FOREIGN KEY (`datetime_id`) REFERENCES `date_time` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `show_datetime_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`show_id`) REFERENCES `shows` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
