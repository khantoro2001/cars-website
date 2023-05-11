-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 24 2023 г., 07:10
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cardb1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `message`) VALUES
(6, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '0504462824', 'салам'),
(7, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '0504462824', 'салам'),
(8, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '0504462824', 'салам'),
(9, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '0504462824', 'салам'),
(30, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '6666666666', 'rrrrrrrrrrrrrrrr'),
(61, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '0000000000', 'ддддддддддддддд'),
(62, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '7777777777', 'оооооооооооооооббббббббб'),
(63, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '888888', 'kkkkkkkk'),
(64, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '666666', 'rrrrrrrrrrrr');

-- --------------------------------------------------------

--
-- Структура таблицы `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '667aa13a03839ea27f7fbc0e007ef1d7', 'Koala.jpg'),
(2, 'Ханторо Мусуралиев', 'khantoro@outlook.com', '78c059c3d5c4c80f2117eaf0bac9fa82', 'Lighthouse.jpg'),
(3, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Desert.jpg'),
(4, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '78c059c3d5c4c80f2117eaf0bac9fa82', 'Koala.jpg'),
(5, 'Ханторо Мусуралиев', 'aktilecasanov@gmail.com', 'a11a873a2e8cf945b72c6ad9bcb94c27', 'Lighthouse.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT для таблицы `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
