-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 17 2023 г., 06:21
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
(5, 'shaikh anas', 'shaikh@gmail.com', '1234567890', 'hi, how are you?'),
(6, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '0504462824', 'салам'),
(7, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '0504462824', 'салам'),
(8, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '0504462824', 'салам'),
(9, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '0504462824', 'салам'),
(10, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '32543215', 'dsfagsdv'),
(11, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '767897687', 'vcgcb bn'),
(12, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '556587', 'hghjhgv'),
(13, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '235353252', 'gssasg'),
(14, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '859875', 'jkghfkjg'),
(15, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '3473262', 'fdhshnxfb'),
(16, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '24534', 'fawfsvdzvd'),
(17, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '3255555555', 'sdfasva'),
(18, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '3255555555', 'sdfasva'),
(19, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '3255555555', 'sdfasva'),
(20, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '435436', 'xzxzvxzv'),
(21, 'Ханторо Мусуралиев', 'hantoromusuraliev@gmail.com', '4352352', 'fqwadsfwe');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
