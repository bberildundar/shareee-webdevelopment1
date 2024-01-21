-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 21, 2024 at 07:42 PM
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
(2, 'Today, something bizarre happened to me that left me questioning the fabric of reality. As I was walking down the street, I stumbled upon a small antique shop that seemed to materialize out of nowhere. Intrigued, I entered the store to find an assortment of peculiar items - ancient-looking trinkets, dusty books with unknown languages on their spines, and an old gramophone playing a haunting melody. The shopkeeper, a mysterious figure with a knowing smile, handed me a weathered key and whispered, \"This opens doors you never knew existed.\" AMAZING!', 29),
(3, 'I love when Shakespeare said, \"All the world\'s a stage, and all the men and women merely players.\" These words resonate deeply, encapsulating the essence of the human experience as a grand theatrical production. Shakespeare\'s insight transcends centuries, capturing the universality of life\'s drama and the roles we play on the ever-changing stage of existence. It\'s a poignant reminder that each of us has a part to play, with our narratives interweaving in the intricate tapestry of existence.', 28),
(4, 'Just had the most random conversation with a stranger at the park about the quirkiest .conspiracy theories about aliens/', 29),
(31, 'Here\'s a fun fact: the world\'s largest desert is not covered in sand; it\'s Antarctica, which is classified as a cold desert due to its low precipitation.', 30),
(32, 'Just discovered a playlist that perfectly captures my mood—seriously, music is magic!!!', 28),
(33, 'Ever notice how your phone battery lasts forever when you\'re not using it? The minute you need it, it\'s like, \'Battery, where you at?\'', 29),
(34, 'Spent the afternoon exploring a quaint bookstore. There\'s something magical about the scent of old books and the promise of new worlds within the pages. As I wandered through the aisles, each title whispered its own story, and I couldn\'t help but lose track of time. Ended up with a stack of books under my arm and a heart full of literary anticipation. Now, cozy reading nook, here I come!', 30),
(35, 'Why do we press harder on the remote control when we know the batteries are weak? Everyone does that!! :D', 27),
(36, 'Embarked on a spontaneous road trip today, and it was nothing short of an adventure. The open road stretched out before me, a canvas of endless possibilities. With each mile, I found hidden gems—a roadside diner with the best pie, a scenic overlook with panoramic views, and conversations with strangers that felt like reunions.', 30),
(37, 'Weather app: 30% chance of rain. Me: Carrying an umbrella, wearing sunglasses, and dressed for all four seasons.', 28),
(38, 'Rediscovered an old hobby today: painting!! There\'s something therapeutic about blending colors on a canvas and letting creativity flow. It reminded me that amid the hustle of daily life, it\'s essential to carve out time for things that bring genuine joy. Whether it\'s a forgotten hobby or a new interest, finding those moments of creative expression can be a refreshing escape.', 28),
(39, 'Binge-watched a new series this weekend. Now I feel emotionally invested in fictional characters. Is it just me, or does that happen to everyone?', 29),
(40, 'Decided to cook a new recipe for dinner. Now the kitchen looks like a tornado hit it, but hey, the food was worth it!', 27);

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
(1, 'admin', 'admin', 'admin@email.com', '$2y$10$Jn.TrVOqPRGGjFA.zKH5beGKDdg9LLy2e7UMafjP0u25A0H9fn/y.', 1),
(27, 'Emma', 'emmazing', 'emma@email.com', '$2y$10$3IokJPDksDjxPobtRJp2r.n2MpWv3G.vhDL.wkzYgcf2FhkfuRBo2', 0),
(28, 'Lucas', 'lukesky', 'lucas@email.com', '$2y$10$oOtClMu3UYW5q/tI62pPnukeXaDEc5c3duwCJU..WFTeAffV1saHq', 0),
(29, 'Mia', 'mischmia', 'mia@email.com', '$2y$10$T58.lIhbcnltuqrc/GWzDu.ECy3DOzjc1dDdv1SHTzrqIY1OLFaDi', 0),
(30, 'Ava', 'avaadventures', 'ava@email.com', '$2y$10$yjowOO.s5e4tFK85RNqOg.BkYnvMaVrxuQwITTkem60YaQTkYatLW', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
