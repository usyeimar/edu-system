/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS tbusuarios;
CREATE TABLE `tbusuarios` (
  `idUsuario` int NOT NULL COMMENT 'Llave primaria',
  `NomUsuario` varchar(60) DEFAULT NULL COMMENT 'Nombre de el usuario',
  `ApellidoUsuario` varchar(60) DEFAULT NULL COMMENT 'Nombre de el usuario',
  `EmailUsuario` varchar(60) DEFAULT NULL COMMENT 'Email de el usario',
  `PassUsuario` varchar(160) DEFAULT NULL COMMENT 'Contrasela de el usario',
  `CiudadUsuario` varchar(50) DEFAULT NULL,
  `DireccionUsuario` varchar(50) DEFAULT NULL,
  `TelefonoUsuario` varchar(10) DEFAULT NULL,
  `FechaNacimiento` varchar(50) DEFAULT NULL,
  `FechaInsert` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO tbusuarios(idUsuario,NomUsuario,ApellidoUsuario,EmailUsuario,PassUsuario,CiudadUsuario,DireccionUsuario,TelefonoUsuario,FechaNacimiento,FechaInsert) VALUES(1088888,'prueba','john','yeimar112003@gmail.com','%php_dbadmi','Aguachica Cesar','Carrea24','3145643456','0011-11-11','2021-06-09 04:43:00'),(1042732285,'yeimar','Lemus','yeimar112003@gmail.com','%php_dbadmi','Aguachica Cesar','Carrea24','3145643456','111111-11-11','2021-06-09 04:35:14');