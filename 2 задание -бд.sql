CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

CREATE TABLE IF NOT EXISTS `Authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `Authors` (`id`, `name`) VALUES
	(1, 'Толкин',),
	(2, 'Сапковский' ),
	(3, 'Петров');
	(4, 'Ильф');

CREATE TABLE IF NOT EXISTS `Books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;


INSERT INTO `Books` (`id`, `name`) VALUES
	(1, 'Властелин колец'),
	(2, 'Последнее желание'),
	(3, 'Меч предназначения'),
	(4, 'Кровь эльфов'),
	(5, 'Час презрения'),
	(6, 'Крещение огнем'),
	(7, 'Башня ласточки'),
	(8, 'Владычица озера'),
	(9, '12 стульев'),

CREATE TABLE IF NOT EXISTS `Authors-books` (
  `idauthor` int(11) NOT NULL,
  `idbook` int(11) NOT NULL,
)

INSERT INTO `Authors-books` (`idauthor`, `idbook`) VALUES
	(1, 1),
	(2, 2),
	(2, 3),
	(2, 4),
	(2, 5),
	(2, 6),
	(2, 7),
	(2, 8),
	(3, 9),
	(4, 9);
