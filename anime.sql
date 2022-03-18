-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 19 2022 г., 01:01
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `anime`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anime1`
--

CREATE TABLE `anime1` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `name` text NOT NULL,
  `rejisor` text NOT NULL,
  `strana` text NOT NULL,
  `yea` text NOT NULL,
  `janr` text NOT NULL,
  `opisanie` text NOT NULL,
  `video` text NOT NULL,
  `photo_zad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `anime1`
--

INSERT INTO `anime1` (`id`, `photo`, `name`, `rejisor`, `strana`, `yea`, `janr`, `opisanie`, `video`, `photo_zad`) VALUES
(1, 'images/1.png', 'Дарованный', '.', '.', '2020', '.', '.', '.', 'smear (green)(under video and photo).png'),
(2, 'images/2.jpg', 'Атака титанов: Финал', '.', '.', '2012', '.', '.', '.', 'smear (green)(under video and photo).png'),
(3, 'images/12.jpg', 'Невероятное приключение ДжоДжо: Золотой ветер', '.', '.', '2015', '.', '.', '.', 'smear (green)(under video and photo).png'),
(20, 'images/3.jpg', 'Клинок рассекающий демонов: Бесконечный поезд', '.', '.', '.', '.', '.', '.', 'smear (green)(under video and photo).png'),
(21, 'images/4a.jpg', 'Рыбка Поньо на утёсе', 'Хаяо Миядзаки', 'Япония', '2008', 'Мультфильм, приключения, семейный, фэнтези, аниме', 'Маленькая любопытная рыбка Поньо — дочь колдуна и прекрасной морской богини — уплывает из дома, чтобы понаблюдать за жизнью людей. Поньо застревает в банке и оказывается выброшенной на берег. Её подбирает пятилетний Сосукэ. Малыши привязываются друг к другу, и теперь у Поньо только одно желание — стать человеком.', 'Ponyo Fish on the Cliff.mp4', 'smear (green)(under video and photo).png'),
(22, 'images/5.jpg', 'Ходячий замок', '.', '.', '.', '.', '.', '.', 'smear (green)(under video and photo).png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anime1`
--
ALTER TABLE `anime1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `anime1`
--
ALTER TABLE `anime1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
