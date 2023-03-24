-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 24 2023 г., 09:33
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `login_register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `izīrēšana`
--

CREATE TABLE `izīrēšana` (
  `izīrēšana_id` int(11) NOT NULL,
  `Pilnais_vārds` varchar(128) NOT NULL,
  `Mob_tālrunis` int(50) NOT NULL,
  `Auto_model` varchar(100) NOT NULL,
  `Īres_laiks` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `mašīnas_info`
--

CREATE TABLE `mašīnas_info` (
  `info_id` int(11) NOT NULL,
  `Modelis` varchar(128) NOT NULL,
  `Gads` int(5) NOT NULL,
  `Dzinējs` varchar(5) NOT NULL,
  `Transmisijas_kārba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(4, 'Valentin Kasper', 'valentinkasper2004@gmail.com', '$2y$10$TI/NmpGwP/ZES1AfYQ8gtufmd7gTOB3kpqYFqjP4nZ9GdYlxT5AT.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `izīrēšana`
--
ALTER TABLE `izīrēšana`
  ADD PRIMARY KEY (`izīrēšana_id`);

--
-- Индексы таблицы `mašīnas_info`
--
ALTER TABLE `mašīnas_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `izīrēšana`
--
ALTER TABLE `izīrēšana`
  MODIFY `izīrēšana_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `mašīnas_info`
--
ALTER TABLE `mašīnas_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
