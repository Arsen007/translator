-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 27 2013 г., 14:34
-- Версия сервера: 5.5.27
-- Версия PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `translate`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `usename` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `usename`, `password`) VALUES
(107, 'aasdasdas', 'asdsd', 'aa'),
(108, 'a', 'a', 'a'),
(109, 'op', 'op', 'op'),
(110, 'qq', 'qq', 'qq');

-- --------------------------------------------------------

--
-- Структура таблицы `words`
--

CREATE TABLE IF NOT EXISTS `words` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `word` varchar(60) NOT NULL,
  `date` datetime NOT NULL,
  `userID` int(10) NOT NULL,
  `teach_priority` int(10) NOT NULL,
  `in_russian` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `in_armenian` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `words`
--

INSERT INTO `words` (`id`, `word`, `date`, `userID`, `teach_priority`, `in_russian`, `in_armenian`) VALUES
(11, 'following', '2013-07-26 00:00:00', 0, 1, 'после', 'հաջորդ'),
(12, 'comprehensive', '2013-07-26 00:00:00', 0, 1, 'комплексный', 'բազմակողմանի'),
(13, 'contain ', '2013-07-26 00:00:00', 0, 1, 'содержать', 'պարունակել'),
(14, 'similar', '2013-07-26 00:00:00', 0, 1, 'аналогичный', 'նման'),
(15, 'rather', '2013-07-26 00:00:00', 0, 1, 'скорее', 'այլ'),
(16, 'appear', '2013-07-26 00:00:00', 0, 1, 'появляться', 'հայտնվել'),
(17, 'below', '2013-07-26 00:00:00', 0, 1, 'ниже', 'ստորեւ'),
(18, 'provide', '2013-07-26 00:00:00', 0, 1, 'обеспечивать', 'ապահովել'),
(19, 'coup', '2013-07-26 00:00:00', 0, 1, 'удачный ход', 'հաջողություն'),
(20, 'drum', '2013-07-27 00:00:00', 0, 1, 'барабан', 'թմբուկ'),
(21, 'luck', '2013-07-27 00:00:00', 0, 1, 'удача', 'հաջողություն'),
(22, 'just', '2013-07-27 11:52:28', 0, 1, 'просто', 'պարզապես'),
(23, 'sad', '2013-07-27 13:48:02', 108, 1, 'печальный', 'տխուր'),
(24, 'sub', '2013-07-27 14:22:12', 110, 1, 'суб', 'ենթա');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
