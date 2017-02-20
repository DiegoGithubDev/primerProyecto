-- -------------------------------------------
SET AUTOCOMMIT=0;
START TRANSACTION;
SET SQL_QUOTE_SHOW_CREATE = 1;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- -------------------------------------------
-- -------------------------------------------
-- START BACKUP
-- -------------------------------------------
-- -------------------------------------------
-- TABLE `album`
-- -------------------------------------------
DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `shareable` tinyint(1) DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `category`
-- -------------------------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `cliente`
-- -------------------------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `movil` int(11) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `credito`
-- -------------------------------------------
DROP TABLE IF EXISTS `credito`;
CREATE TABLE IF NOT EXISTS `credito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_documento` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_documento` (`id_documento`),
  CONSTRAINT `credito_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `credito_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  CONSTRAINT `credito_ibfk_3` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `documento`
-- -------------------------------------------
DROP TABLE IF EXISTS `documento`;
CREATE TABLE IF NOT EXISTS `documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreDoc` varchar(100) DEFAULT NULL,
  `ubicacionDirectorio` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `localizacion`
-- -------------------------------------------
DROP TABLE IF EXISTS `localizacion`;
CREATE TABLE IF NOT EXISTS `localizacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitud` varchar(100) DEFAULT NULL,
  `longitud` varchar(100) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `localizacion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `post`
-- -------------------------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text,
  `create_time` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_ibfk_1` (`usuario_id`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `post_category`
-- -------------------------------------------
DROP TABLE IF EXISTS `post_category`;
CREATE TABLE IF NOT EXISTS `post_category` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`,`category_id`),
  KEY `post_category_category` (`category_id`),
  CONSTRAINT `post_category_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `post_category_post` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `profile`
-- -------------------------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `birthay` date DEFAULT NULL,
  `pfoto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`usuario_id`),
  CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `usuario`
-- -------------------------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE DATA category
-- -------------------------------------------
INSERT INTO `category` (`id`,`nombre`) VALUES
('1','computacion');
INSERT INTO `category` (`id`,`nombre`) VALUES
('2','tecnologia');
INSERT INTO `category` (`id`,`nombre`) VALUES
('3','informatica');
INSERT INTO `category` (`id`,`nombre`) VALUES
('4','deportes');
INSERT INTO `category` (`id`,`nombre`) VALUES
('5','fisica');



-- -------------------------------------------
-- TABLE DATA post
-- -------------------------------------------
INSERT INTO `post` (`id`,`title`,`content`,`create_time`,`usuario_id`) VALUES
('1','programacion','programacion','','1');
INSERT INTO `post` (`id`,`title`,`content`,`create_time`,`usuario_id`) VALUES
('2','futbol','futbol','','1');
INSERT INTO `post` (`id`,`title`,`content`,`create_time`,`usuario_id`) VALUES
('3','lenguaje seniales','lenguaje seniales','','2');
INSERT INTO `post` (`id`,`title`,`content`,`create_time`,`usuario_id`) VALUES
('5','beisbol','','','2');
INSERT INTO `post` (`id`,`title`,`content`,`create_time`,`usuario_id`) VALUES
('6','natacion','','','1');



-- -------------------------------------------
-- TABLE DATA post_category
-- -------------------------------------------
INSERT INTO `post_category` (`post_id`,`category_id`) VALUES
('1','1');
INSERT INTO `post_category` (`post_id`,`category_id`) VALUES
('1','2');
INSERT INTO `post_category` (`post_id`,`category_id`) VALUES
('6','4');



-- -------------------------------------------
-- TABLE DATA usuario
-- -------------------------------------------
INSERT INTO `usuario` (`id`,`username`,`password`,`email`) VALUES
('1','admin','admin','diego@gmail.com');
INSERT INTO `usuario` (`id`,`username`,`password`,`email`) VALUES
('2','diego','diego','');



-- -------------------------------------------
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
COMMIT;
-- -------------------------------------------
-- -------------------------------------------
-- END BACKUP
-- -------------------------------------------
