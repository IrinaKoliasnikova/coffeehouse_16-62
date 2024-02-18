-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 12:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `fourth` varchar(255) NOT NULL,
  `fifth` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `fourth`, `fifth`) VALUES
(1, '«Кофейня 1662» — это совершенно новый формат, который позволяет компактно и мобильно разместить точку общественного питания.\r\n<br>\r\nМы воплотили в жизнь нашу мечту. Купили морской контейнер. Собственными силами сделали ремонт в ЭКО-стиле. То, что у нас получилось – в точности соответствует нашему замыслу. \r\n<br>\r\nВ названии сохраняется историческая приверженность родному краю: 1662 – это год создания Шадринска. Каждый житель должен знать историю своего города. Мы планируем размещение и регулярное обновление на стенах кофейни исторических фактов о нашем городе и его выдающихся жителях.\r\n<br>\r\nМы надеемся, что в нашем городе культура кофе приобретёт свою популярность, хотим нести ее людям! Мы строго соблюдаем традиции приготовления кофе и постоянно экспериментируем, постепенно расширяем ассортимент зёрен, планируем проводить вечера дегустаций, мастер-классы.', 'g-2.jpg', 'g-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) UNSIGNED NOT NULL,
  `time_of_work` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `vk` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `time_of_work`, `adress`, `vk`, `instagram`) VALUES
(1, '<b>Пн-Пт:</b> 7:40-21:00<br>\r\n<b>Сб:</b> 9:00-22:00<br>\r\n<b>Вс:</b> 10:00-22:00<br>', 'ул. Свердлова, 61<br>ул. Комсомольская, 17<br>', 'vk-b.svg', 'insta-b.svg');

-- --------------------------------------------------------

--
-- Table structure for table `first_screen`
--

CREATE TABLE `first_screen` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `phrase` text NOT NULL,
  `first` varchar(255) NOT NULL,
  `second` varchar(255) NOT NULL,
  `third` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `first_screen`
--

INSERT INTO `first_screen` (`id`, `title`, `phrase`, `first`, `second`, `third`) VALUES
(1, 'Кофейня 16/62', ' Кофе с ароматом истории', 'img_1.jpg', 'img_2.jpg', 'img_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `eight` varchar(255) NOT NULL,
  `nine` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `eleven` varchar(255) NOT NULL,
  `twelve` varchar(255) NOT NULL,
  `thirteen` varchar(255) NOT NULL,
  `fourteen` varchar(255) NOT NULL,
  `fifteen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`) VALUES
(1, 'g_1.jpg', 'g_2.jpg', 'g_3.jpg', 'g_4.jpg', 'g_5.jpg', 'g_6.jpg', 'g_7.jpg', 'g_8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `titlef` text NOT NULL,
  `titles` text NOT NULL,
  `titleth` text NOT NULL,
  `titlefo` text NOT NULL,
  `titlefi` text NOT NULL,
  `titlesix` text NOT NULL,
  `titlese` text NOT NULL,
  `dishf` text NOT NULL,
  `dishs` text NOT NULL,
  `dishth` text NOT NULL,
  `dishfo` text NOT NULL,
  `dishfi` text NOT NULL,
  `dishsix` text NOT NULL,
  `dishse` text NOT NULL,
  `volumef` varchar(255) NOT NULL,
  `volumes` varchar(255) NOT NULL,
  `volumeth` varchar(255) NOT NULL,
  `volumefo` varchar(255) NOT NULL,
  `volumefi` varchar(255) NOT NULL,
  `costf` varchar(255) NOT NULL,
  `costs` varchar(255) NOT NULL,
  `costth` varchar(255) NOT NULL,
  `costfo` varchar(255) NOT NULL,
  `costfi` varchar(255) NOT NULL,
  `costsix` varchar(255) NOT NULL,
  `costse` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `titlef`, `titles`, `titleth`, `titlefo`, `titlefi`, `titlesix`, `titlese`, `dishf`, `dishs`, `dishth`, `dishfo`, `dishfi`, `dishsix`, `dishse`, `volumef`, `volumes`, `volumeth`, `volumefo`, `volumefi`, `costf`, `costs`, `costth`, `costfo`, `costfi`, `costsix`, `costse`) VALUES
(1, 'Кофе', 'Холодный кофе', 'неКофе', 'Смузи', 'Чай', 'Десерты', 'Добавки', 'Эспрессо<br>\r\nДоппио<br>\r\nАмерикано<br>\r\nКапучино<br>\r\nДвойной капучино<br>\r\nКапучино XL<br>\r\nЛатте<br>\r\nЛатте «Халва»<br>\r\nМоккачино<br>\r\nФлэт уайт<br>\r\n<br>\r\nРаф<br>\r\nКокосовый раф<br>\r\nЛавандовый раф<br>\r\nЦитрусовый раф<br>\r\nАрахисовый раф', 'Айс-латте<br>\r\nАпельсиновый бамбл', 'Баунти<br>\r\nМолочный коктейль<br>\r\nКакао<br>\r\nКакао с маршмеллоу', 'Ягодный смузи<br>\r\nСмузи-завтрак<br>\r\nБанано-яблочный смузи', 'Клюквенный<br> Облепиховый<br> Брусничный с мятой<br>\r\nМатча-латте<br>\r\nПурпурный анчан<br><br> \r\nЧёрный<br> \r\nЧёрный с бергамотом <br>\r\nАйва с персиком<br> Спелый барбарис<br><br> \r\nЗелёный<br> \r\nМалина с мятой<br> Зелёный с жасмином<br> Молочный улун<br> Земляничный улун<br> \r\nМанговый улун', 'Чизкейк<br>\r\nСырники<br>\r\nМоти<br>\r\nЭклер<br>\r\nДонат<br>\r\nМаффин<br>\r\nМедовик<br>\r\nСметанник<br>', 'Маршмеллоу<br>\r\nВзбитые сливки<br>\r\nРастительное молоко<br>\r\nХалва<br>\r\nАрахисовая паста', '30 мл<br>\r\n60 мл<br>\r\n150 мл<br>\r\n200 мл<br>\r\n300 мл<br>\r\n400 мл<br>\r\n270 мл<br>\r\n300 мл<br>\r\n250 мл<br>\r\n200 мл<br><br>\r\n400 мл<br>\r\n400 мл<br>\r\n400 мл<br>\r\n400 мл<br>\r\n400 мл', '350 мл <br>\r\n300 мл', '300 мл <br>\r\n300/500 мл <br>\r\n200/350 мл <br>\r\n200 мл', '400мл<br>\r\n400мл<br>400 мл', '200/350 мл<br>\r\n200/350 мл<br>\r\n250/350 мл<br>\r\n200 мл<br>\r\n200/300 мл<br><br>\r\n200 мл<br>\r\n200/300 мл<br>\r\n200/300 мл<br>\r\n200/300 мл<br><br>\r\n200 мл<br>\r\n200/300 мл<br>\r\n200/300 мл<br>\r\n200/300 мл<br>\r\n200/300 мл<br>\r\n200/300 мл', '70 <br>\r\n110 <br>\r\n100 <br>\r\n110 <br>\r\n140 <br>\r\n190 <br>\r\n120 <br>\r\n140 <br>\r\n160 <br>\r\n120 <br><br>\r\n180 <br>\r\n200 <br>\r\n180 <br>\r\n200 <br>\r\n200', '140 <br>\r\n140 <br>', '140 <br>\r\n110/160 <br>\r\n80/120 <br>\r\n50', '210<br>\r\n210<br>\r\n215', '100/140<br>\r\n110/150<br>\r\n110/150<br>\r\n100<br>\r\n100/150<br><br>50<br>\r\n100/150<br>\r\n100/150<br>\r\n100/150<br><br>50<br>\r\n100/150<br>\r\n100/150<br>\r\n100/150<br>\r\n100/150<br>\r\n100/150', '130 р.<br> 120 р.<br> 160 р.<br> 120 р.<br> 120 р.<br> 100 р.<br> 100 р.<br> 100 р.<br>', '20 р.<br>\r\n30 р.<br>\r\n70 р.<br>\r\n20 р.<br>\r\n20 р.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', '1q2w3e4r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `first_screen`
--
ALTER TABLE `first_screen`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `first_screen`
--
ALTER TABLE `first_screen`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
