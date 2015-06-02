-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Хост: 78.108.80.95
-- Время создания: Май 21 2015 г., 15:07
-- Версия сервера: 5.5.29-29.4
-- Версия PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `b150184_memobooks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `usertbl`
--

CREATE TABLE IF NOT EXISTS `usertbl` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `family` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `teach` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `usertbl`
--

INSERT INTO `usertbl` (`id`, `full_name`, `email`, `username`, `password`, `family`, `date`, `about`, `teach`, `photo`) VALUES
(1, 'РЎР°Р»Р°РµРІ Р”РµРЅРёСЃ РњРёС…Р°Р№Р»РѕРІРёС‡', 'cotoha_92@mail.ru', 'Dendos', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Р¶РµРЅР°С‚', '2015-05-05', 'РЈРјРЅС‹Р№ РєСЂР°СЃРёРІС‹Р№ Рё РїСЂРѕСЃС‚Рѕ РІРµР»РёРєРѕР»РµРїРЅС‹Р№', 'Р’С‹СЃС€РµРµ', 'css/IMG_20150101_000240.jpg'),
(2, 'РљСѓР»РµРІСЃРєР°СЏ Р•РєР°С‚РµСЂРёРЅР° РЎРµСЂРіРµРµРІРЅР°', 'drunkjunk@rambler.ru', 'kt', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Р›СЋР±Р»СЋ РєРѕС€РµС‡РµРє', '2015-05-02', 'РћС‡РµРЅСЊ Р»СЋР±Р»СЋ С€Р°РЅСЋ Рё РјСѓР»СЋ,РѕРЅРё СЃР°РјС‹Рµ РєР»Р°СЃСЃРЅС‹Рµ РєРѕС‚РµР№РєРё РЅР° СЃРІРµС‚Рµ <3', 'РЎСЂРµРґРЅРµ-СЃРїРµС†РёР°Р»СЊРЅРѕРµ', 'css/IMG_20150101_024515.jpg'),
(3, '123', 'drunkjunk@rambler.ru', '333', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', 'Р¶РµРЅР°С‚', '2015-05-08', 'sdasdasdasdasd', 'Р’С‹СЃС€РµРµ', 'css/IMG_20141214_023214.jpg'),
(4, '555', '555@555', '555', 'cfa1150f1787186742a9a884b73a43d8cf219f9b', '555', '2015-05-30', '555', 'Р‘РµР· РѕР±СЂР°Р·РѕРІР°РЅРёСЏ', 'img/IMG_20141214_150939.jpg'),
(5, '1fktdyfutditxk', 'cotoha92@gmail.com', 'qqq', 'a056c8d05ae9ac6ca180bc991b93b7ffe37563e0', 'xjfzj', '2015-05-16', 'Jfzktxktxkgxt ifxot kt kg. Kfxktx', 'Р’С‹СЃС€РµРµ', 'img/IMG_20150520_185352:nopm:.jpg'),
(6, '123', '123@wr', 'memobooks', 'db24194a545f69a98ef2cd7f698f74182714b9a6', '123', '2015-05-08', '123', 'Р’С‹СЃС€РµРµ', 'img/wp-config.php'),
(7, '123', '123@wr', 'memobooks32', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123', '2015-05-08', '123', 'РЎСЂРµРґРЅРµ-СЃРїРµС†РёР°Р»СЊРЅРѕРµ', 'img/wp-config.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
