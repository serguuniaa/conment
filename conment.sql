-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Жов 25 2015 р., 20:37
-- Версія сервера: 5.5.41-log
-- Версія PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `conment`
--

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `number` int(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `number`, `pass`) VALUES
(1, 'Sergei', 'Deryglazov', 2147483647, '159357asd'),
(2, 'Igor', 'Pohasii', 2147483647, '123456'),
(3, 'Fedor', 'Mabhaun', 2147483647, 'yf[eq');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
