-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 19, 2024 at 08:54 PM
-- Server version: 10.11.2-MariaDB-1:10.11.2+maria~ubu2204
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shareeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `text`, `user_id`) VALUES
(2, 'Today, something bizarre happened to me that left me questioning the fabric of reality. As I was walking down the street, I stumbled upon a small antique shop that seemed to materialize out of nowhere. Intrigued, I entered the store to find an assortment of peculiar items - ancient-looking trinkets, dusty books with unknown languages on their spines, and an old gramophone playing a haunting melody. The shopkeeper, a mysterious figure with a knowing smile, handed me a weathered key and whispered, \"This opens doors you never knew existed.\" AMAZING!', 1),
(3, 'I love when Shakespeare said, \"All the world\'s a stage, and all the men and women merely players.\" These words resonate deeply, encapsulating the essence of the human experience as a grand theatrical production. Shakespeare\'s insight transcends centuries, capturing the universality of life\'s drama and the roles we play on the ever-changing stage of existence. It\'s a poignant reminder that each of us has a part to play, with our narratives interweaving in the intricate tapestry of existence.', 5),
(4, 'Just had the most random conversation with a stranger at the park about the quirkiest .conspiracy theories about aliens/', 6),
(5, 'Just caught a screening of \"Whispers of Twilight,\" and it\'s an absolute cinematic gem! This film weaves a spellbinding narrative that blurs the lines between reality and fantasy. The storytelling is masterfully done, drawing you into a world where each frame is a painting and every silence speaks volumes. The cinematography is breathtaking, capturing the essence of the narrative in a way that stays with you long after the credits roll. \r\n\r\nYou guys should watch it 100%!', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`) VALUES
(1, 'Mabel', 'mabellovescats', 'mabel@email.com', 'mabel123', 0),
(3, 'Emma', 'emma123', 'emma@email.com', 'emma123', 1),
(5, 'Paula', 'paulaspoem', 'paula@email.com', 'paula123', 0),
(6, 'John', 'johnwick1', 'john@email.com', 'john123', 0),
(7, 'Luis', 'luis123', 'luis@email.com', 'luis123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
