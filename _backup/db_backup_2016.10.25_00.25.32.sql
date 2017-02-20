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
-- TABLE `apoderado`
-- -------------------------------------------
DROP TABLE IF EXISTS `apoderado`;
CREATE TABLE IF NOT EXISTS `apoderado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `fkususario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkususario` (`fkususario`),
  CONSTRAINT `apoderado_ibfk_1` FOREIGN KEY (`fkususario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `boletin`
-- -------------------------------------------
DROP TABLE IF EXISTS `boletin`;
CREATE TABLE IF NOT EXISTS `boletin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkEstudiante` int(11) DEFAULT NULL,
  `fkPeriodo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkEstudiante` (`fkEstudiante`),
  KEY `fkPeriodo` (`fkPeriodo`),
  CONSTRAINT `boletin_ibfk_3` FOREIGN KEY (`fkEstudiante`) REFERENCES `estudiante` (`id`),
  CONSTRAINT `boletin_ibfk_4` FOREIGN KEY (`fkPeriodo`) REFERENCES `periodo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `curso`
-- -------------------------------------------
DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fkNivel` int(11) DEFAULT NULL,
  `fkTurno` int(11) DEFAULT NULL,
  `fkParelelo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkNivel` (`fkNivel`),
  KEY `fkTurno` (`fkTurno`),
  KEY `fkParelelo` (`fkParelelo`),
  CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`fkNivel`) REFERENCES `nivel` (`id`),
  CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`fkTurno`) REFERENCES `turno` (`id`),
  CONSTRAINT `curso_ibfk_3` FOREIGN KEY (`fkParelelo`) REFERENCES `paralelo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `cursomateria`
-- -------------------------------------------
DROP TABLE IF EXISTS `cursomateria`;
CREATE TABLE IF NOT EXISTS `cursomateria` (
  `fkCurso` int(11) NOT NULL,
  `fkMateria` int(11) NOT NULL,
  PRIMARY KEY (`fkCurso`,`fkMateria`),
  KEY `cursomateria_ibfkmater_2` (`fkMateria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `detalleboletin`
-- -------------------------------------------
DROP TABLE IF EXISTS `detalleboletin`;
CREATE TABLE IF NOT EXISTS `detalleboletin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nota` int(11) DEFAULT NULL,
  `fkBoletin` int(11) DEFAULT NULL,
  `fkMateria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkMateria` (`fkMateria`),
  KEY `fkBoletin` (`fkBoletin`),
  CONSTRAINT `detalleboletin_ibfk_1` FOREIGN KEY (`fkMateria`) REFERENCES `materia` (`id`),
  CONSTRAINT `detalleboletin_ibfk_2` FOREIGN KEY (`fkBoletin`) REFERENCES `boletin` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `estudiante`
-- -------------------------------------------
DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `fkUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkUsuario` (`fkUsuario`),
  CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`fkUsuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `factura`
-- -------------------------------------------
DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `nit` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `fkRecibo` int(11) DEFAULT NULL,
  PRIMARY KEY (`nit`),
  KEY `fkRecibo` (`fkRecibo`),
  CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`fkRecibo`) REFERENCES `recibo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `gestion`
-- -------------------------------------------
DROP TABLE IF EXISTS `gestion`;
CREATE TABLE IF NOT EXISTS `gestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `gestionName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `horario`
-- -------------------------------------------
DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horaInicio` varchar(100) DEFAULT NULL,
  `horaFin` varchar(100) DEFAULT NULL,
  `fkProfesor` int(11) DEFAULT NULL,
  `fkMateria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkMateria` (`fkMateria`),
  KEY `fkProfesor` (`fkProfesor`),
  CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`fkMateria`) REFERENCES `materia` (`id`),
  CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`fkProfesor`) REFERENCES `profesor` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `inscripcion`
-- -------------------------------------------
DROP TABLE IF EXISTS `inscripcion`;
CREATE TABLE IF NOT EXISTS `inscripcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `fkApoderado` int(11) DEFAULT NULL,
  `fkCurso` int(11) DEFAULT NULL,
  `fkGestion` int(11) DEFAULT NULL,
  `fkEstudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkEstudiante` (`fkEstudiante`),
  KEY `fkApoderado` (`fkApoderado`),
  KEY `fkCurso` (`fkCurso`),
  KEY `fkGestion` (`fkGestion`),
  CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`fkEstudiante`) REFERENCES `estudiante` (`id`),
  CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`fkApoderado`) REFERENCES `apoderado` (`id`),
  CONSTRAINT `inscripcion_ibfk_3` FOREIGN KEY (`fkCurso`) REFERENCES `curso` (`id`),
  CONSTRAINT `inscripcion_ibfk_4` FOREIGN KEY (`fkGestion`) REFERENCES `gestion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `materia`
-- -------------------------------------------
DROP TABLE IF EXISTS `materia`;
CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `fkcurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkcurso` (`fkcurso`),
  CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`fkcurso`) REFERENCES `curso` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `nivel`
-- -------------------------------------------
DROP TABLE IF EXISTS `nivel`;
CREATE TABLE IF NOT EXISTS `nivel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `numero` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `paralelo`
-- -------------------------------------------
DROP TABLE IF EXISTS `paralelo`;
CREATE TABLE IF NOT EXISTS `paralelo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `letra` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `periodo`
-- -------------------------------------------
DROP TABLE IF EXISTS `periodo`;
CREATE TABLE IF NOT EXISTS `periodo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `fechaInicio` varchar(100) DEFAULT NULL,
  `fechaFin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `profesor`
-- -------------------------------------------
DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `FkUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FkUsuario` (`FkUsuario`),
  CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`FkUsuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `recibo`
-- -------------------------------------------
DROP TABLE IF EXISTS `recibo`;
CREATE TABLE IF NOT EXISTS `recibo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monto` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fkInscripcion` int(11) DEFAULT NULL,
  `fkInscricion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkInscricion` (`fkInscricion`),
  CONSTRAINT `recibo_ibfk_1` FOREIGN KEY (`fkInscricion`) REFERENCES `inscripcion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `turno`
-- -------------------------------------------
DROP TABLE IF EXISTS `turno`;
CREATE TABLE IF NOT EXISTS `turno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE `usuario`
-- -------------------------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- -------------------------------------------
-- TABLE DATA apoderado
-- -------------------------------------------
INSERT INTO `apoderado` (`id`,`ci`,`nombre`,`apellido`,`fkususario`) VALUES
('1','','felix','mansilla','');



-- -------------------------------------------
-- TABLE DATA boletin
-- -------------------------------------------
INSERT INTO `boletin` (`id`,`fkEstudiante`,`fkPeriodo`) VALUES
('1','1','1');



-- -------------------------------------------
-- TABLE DATA curso
-- -------------------------------------------
INSERT INTO `curso` (`id`,`numero`,`nombre`,`fkNivel`,`fkTurno`,`fkParelelo`) VALUES
('2','1','primero','1','1','1');



-- -------------------------------------------
-- TABLE DATA cursomateria
-- -------------------------------------------
INSERT INTO `cursomateria` (`fkCurso`,`fkMateria`) VALUES
('2','8');
INSERT INTO `cursomateria` (`fkCurso`,`fkMateria`) VALUES
('2','9');
INSERT INTO `cursomateria` (`fkCurso`,`fkMateria`) VALUES
('2','10');
INSERT INTO `cursomateria` (`fkCurso`,`fkMateria`) VALUES
('2','11');



-- -------------------------------------------
-- TABLE DATA detalleboletin
-- -------------------------------------------
INSERT INTO `detalleboletin` (`id`,`nota`,`fkBoletin`,`fkMateria`) VALUES
('1','80','1','8');
INSERT INTO `detalleboletin` (`id`,`nota`,`fkBoletin`,`fkMateria`) VALUES
('2','60','1','9');
INSERT INTO `detalleboletin` (`id`,`nota`,`fkBoletin`,`fkMateria`) VALUES
('3','55','1','10');
INSERT INTO `detalleboletin` (`id`,`nota`,`fkBoletin`,`fkMateria`) VALUES
('4','66','1','11');



-- -------------------------------------------
-- TABLE DATA estudiante
-- -------------------------------------------
INSERT INTO `estudiante` (`id`,`nombre`,`apellido`,`fkUsuario`) VALUES
('1','diego','chavez','');



-- -------------------------------------------
-- TABLE DATA factura
-- -------------------------------------------
INSERT INTO `factura` (`nit`,`fecha`,`fkRecibo`) VALUES
('1','2016-10-21','1');



-- -------------------------------------------
-- TABLE DATA gestion
-- -------------------------------------------
INSERT INTO `gestion` (`id`,`fechaInicio`,`fechaFin`,`gestionName`) VALUES
('1','2016-09-01','2016-12-31','1-2016');



-- -------------------------------------------
-- TABLE DATA horario
-- -------------------------------------------
INSERT INTO `horario` (`id`,`horaInicio`,`horaFin`,`fkProfesor`,`fkMateria`) VALUES
('1','8:00 am','9:00 am','1','8');
INSERT INTO `horario` (`id`,`horaInicio`,`horaFin`,`fkProfesor`,`fkMateria`) VALUES
('2','9:00 am','10:00 am','1','9');



-- -------------------------------------------
-- TABLE DATA inscripcion
-- -------------------------------------------
INSERT INTO `inscripcion` (`id`,`fecha`,`fkApoderado`,`fkCurso`,`fkGestion`,`fkEstudiante`) VALUES
('1','2016-10-21','1','2','1','1');



-- -------------------------------------------
-- TABLE DATA materia
-- -------------------------------------------
INSERT INTO `materia` (`id`,`nombre`,`fkcurso`) VALUES
('8','matematica','');
INSERT INTO `materia` (`id`,`nombre`,`fkcurso`) VALUES
('9','sociales','');
INSERT INTO `materia` (`id`,`nombre`,`fkcurso`) VALUES
('10','lenguaje','');
INSERT INTO `materia` (`id`,`nombre`,`fkcurso`) VALUES
('11','guarani','');



-- -------------------------------------------
-- TABLE DATA nivel
-- -------------------------------------------
INSERT INTO `nivel` (`id`,`nombre`,`numero`) VALUES
('1','inicial','1');



-- -------------------------------------------
-- TABLE DATA paralelo
-- -------------------------------------------
INSERT INTO `paralelo` (`id`,`letra`) VALUES
('1','A');



-- -------------------------------------------
-- TABLE DATA periodo
-- -------------------------------------------
INSERT INTO `periodo` (`id`,`nombre`,`fechaInicio`,`fechaFin`) VALUES
('1','3','2016-10-21','2016-12-21');



-- -------------------------------------------
-- TABLE DATA profesor
-- -------------------------------------------
INSERT INTO `profesor` (`id`,`ci`,`nombre`,`apellido`,`FkUsuario`) VALUES
('1','559668','peinado','pereira','');



-- -------------------------------------------
-- TABLE DATA recibo
-- -------------------------------------------
INSERT INTO `recibo` (`id`,`monto`,`fecha`,`fkInscripcion`,`fkInscricion`) VALUES
('1','100','2016-10-21','','1');



-- -------------------------------------------
-- TABLE DATA turno
-- -------------------------------------------
INSERT INTO `turno` (`id`,`nombre`) VALUES
('1','mañana');
INSERT INTO `turno` (`id`,`nombre`) VALUES
('2','tarde');
INSERT INTO `turno` (`id`,`nombre`) VALUES
('3','noche');



-- -------------------------------------------
-- TABLE DATA usuario
-- -------------------------------------------
INSERT INTO `usuario` (`id`,`username`,`password`,`email`) VALUES
('1','diego','12345','diego@gmail.com');
INSERT INTO `usuario` (`id`,`username`,`password`,`email`) VALUES
('2','','','admin@gmail.com');



-- -------------------------------------------
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
COMMIT;
-- -------------------------------------------
-- -------------------------------------------
-- END BACKUP
-- -------------------------------------------
