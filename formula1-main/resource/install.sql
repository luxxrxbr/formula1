create database lr_bookstore;
use lr_bookstore;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `img_url` varchar(4096),
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id_author` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255),
  `birth` datetime,
  `img_url` varchar(4096),
  PRIMARY KEY (`id_author`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fullname` varchar(255),
  `id_author` int(11),
  `id_category` int(11),
  `img_url` varchar(4096)
  
  ,CONSTRAINT `fk_book_author`
    FOREIGN KEY (`id_author`) REFERENCES `authors` (`id_author`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
    
	,CONSTRAINT `fk_book_category`
    FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
  
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;


/* ALTER TABLE `categories` ADD COLUMN `name` varchar(255); */