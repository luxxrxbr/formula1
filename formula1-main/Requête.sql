create database lr_formule1;
use lr_formule1;

DROP TABLE IF EXISTS `ecuries`;
CREATE TABLE IF NOT EXISTS `ecuries` (
  `id_ecuries` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `img_url` varchar(4096),
  PRIMARY KEY (`id_ecuries`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `pilotes`;
CREATE TABLE IF NOT EXISTS `pilotes` (
  `id_pilotes` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255),
  `birth` datetime,
  `img_url` varchar(4096),
  PRIMARY KEY (`id_pilotes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `palmares`;
CREATE TABLE IF NOT EXISTS `palmares` (
  `id_palmares` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fullname` varchar(255),
  `id_pilotes` int(11),
  `id_ecuries` int(11),
  `img_url` varchar(4096)
  
  ,CONSTRAINT `fk_palmares_pilotes`
    FOREIGN KEY (`id_pilotes`) REFERENCES `pilotes` (`id_pilotes`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
    
	,CONSTRAINT `fk_palmares_ecuries`
    FOREIGN KEY (`id_ecuries`) REFERENCES `ecuries` (`id_ecuries`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id_courses` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `pays` varchar(255),
  `ville` varchar(255),
  `id_pilotes` int(11),
  `id_ecuries` int(11),
  `img_url` varchar(4096)
  
  ,CONSTRAINT `fk_courses_pilotes`
    FOREIGN KEY (`id_pilotes`) REFERENCES `pilotes` (`id_pilotes`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
    
	,CONSTRAINT `fk_courses_ecuries`
    FOREIGN KEY (`id_ecuries`) REFERENCES `ecuries` (`id_ecuries`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `mot_de_passe` varchar(4096),
  `date_de_creation` date,
  PRIMARY KEY (`id_users`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/* ALTER TABLE `categories` ADD COLUMN `name` varchar(255); */