-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `chr_users`;
CREATE TABLE `chr_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '0',
  `address` text NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `user_image` varchar(50) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `chr_users` (`id`, `fname`, `lname`, `username`, `password`, `email`, `user_type`, `address`, `cnic`, `user_image`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'User',	'admin',	'294228dbca14b20d3a7f8d206589c185',	'test@gmail.com',	0,	'fsdfsd',	'',	'',	0,	'2019-03-26 21:26:35',	'2019-03-26 21:26:35');

-- 2019-03-27 15:38:35
