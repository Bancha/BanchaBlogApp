-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 07. März 2012 um 14:23
-- Server Version: 5.5.9
-- PHP-Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Datenbank: `bancha_sample`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `body` text,
  `published` tinyint(1) DEFAULT '0',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_articles_users` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `articles`
--

INSERT INTO `articles` VALUES(2, 'What is Bancha?', '2012-02-28 14:30:00', '<p>Bancha combines the desktop-like <a href="http://www.sencha.com/products/extjs/">JavaScript-&shy;Framework Ext JS 4</a> and the light-weight <a href="http://cakephp.org/">PHP-MVC-&shy;Framework CakePHP 2</a>. Basically it:</p>\r\n\r\n<ul>\r\n  <li class="first">handles all communication between server and client</li>\r\n  <li>shares all schema and validation rules in CakePHP with ExtJS</li>\r\n  <li>enables asynchronous and batched request to the server</li>\r\n  <li>automatically implements CRUD for all remotable models</li>\r\n  <li class="last">is well-tested with PHPUnit and Jasmine</li>\r\n</ul>\r\n\r\n<p>So with Ext JS and CakePHP in the background we aim to become the most elegant and powerful JavaScript to PHP comunication framework.</p>', 1, 0);
INSERT INTO `articles` VALUES(3, 'Bancha on the Client', '2012-02-28 14:31:00', '<p>Bancha provides an simple interface to create models. These models get all fields, validations and associations and a fully configured proxy from the server.\r\n</p>\r\n \r\n<p>\r\nJust use Bancha.onModelReady(''User'', function() {...}) and Bancha does the rest.</p>', 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(64) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comments_articles1` (`article_id`),
  KEY `fk_comments_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Daten für Tabelle `comments`
--

INSERT INTO `comments` VALUES(19, 2, 2, 'This is a comment for article 1', '2012-03-07 14:21:44');
INSERT INTO `comments` VALUES(20, 2, 1, 'This is a second comment for article one.\n\nLorem ipsum dolor sit', '2012-03-07 14:22:21');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `role` varchar(16) NOT NULL DEFAULT 'user',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` VALUES(1, 'joe', '581194500ac8a8ee4819ddc209fe7e0630191fd4', 'Funny Joe', 'moderator', '2012-02-28 14:26:14', '2012-03-01 21:32:18', 'donttry@doesntexist.com');
INSERT INTO `users` VALUES(2, 'roland', '367308e39a4b61c90b5bbb800c686b5b93c540d0', 'Roland SchÃ¼tz', 'admin', '2012-02-29 18:10:24', '2012-03-01 21:31:45', 'mail@rolandschuetz.at');
INSERT INTO `users` VALUES(3, 'martin', 'e99f362c16249bd7cfef94aedc0913025b92a1b8', 'Martin normal User', 'user', '2012-03-06 00:26:17', '2012-03-06 00:27:22', 'donttry@doesntexist.com');
