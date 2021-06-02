DROP DATABASE IF EXISTS edusystemdb;
CREATE DATABASE edusystemdb;
USE edusystemdb;
CREATE TABLE tbadmin(
  idAdmin INTEGER PRIMARY KEY COMMENT "Llave primaria",
  NomAdmin VARCHAR(60) NOT NULL COMMENT "Nombre de el usuario",
  ApellidoAdmin VARCHAR(60) NOT NULL COMMENT "Nombre de el usuario",
  EmailAdmin VARCHAR(60) NOT NULL COMMENT "Email de el usario",
  PassAdmin VARCHAR(160) NOT NULL COMMENT "Contrasela de el usario",
  FechaAccesoAdmin DATETIME COMMENT "Fecha de el ultimo acceso de el usuario",
  CiudadAmin VARCHAR(50) NOT NULL,
  DireccionAdmin VARCHAR (50) NOT NULL,
  TelefonoAdmin VARCHAR(10) NOT NULL,
  ImagenAdmin VARCHAR(150) COMMENT "Imagen dee el usuario",
  IpAccesoAdmin VARCHAR(100) NOT NULL COMMENT "Ip de acceso",
  EstadoAdmin ENUM("Activo", "Inactivo") COMMENT "Describe si el usuario esta activo o inactivo"
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO `tbadmin` (`idAdmin`, `NomAdmin`, `ApellidoAdmin`, `EmailAdmin`, `PassAdmin`, `FechaAccesoAdmin`, `CiudadAmin`, `DireccionAdmin`, `TelefonoAdmin`, `ImagenAdmin`, `IpAccesoAdmin`, `EstadoAdmin`) VALUES ('1042732285', 'Yeimar', 'Lemus', 'yeimar112003@gmail.com', '1234', '2021-06-01 17:10:15.000000', 'Medellin', 'Crar24#6778', '3145643456', NULL, '', 'Activo');

CREATE TABLE tbprivilegios(
  idprivilegio INTEGER PRIMARY KEY COMMENT "Llave primaria",
  privilegio VARCHAR(30) COMMENT "Describe el privilegio de el usuario",
  idAdmin INTEGER COMMENT "Llave foranea de la tabla tbprivilegios ",
  index(idAdmin),
  foreign key(idAdmin) references tbadmin(idAdmin) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE tbregistro (
  idRegistro INTEGER PRIMARY KEY COMMENT 'primary key',
  FechaRegistro VARCHAR(50) NOT NULL COMMENT 'Fecha de registro',
  TipoRegistro enum("Personal", "Bussines", "For Education") NOT NULL,
  EmpresaRegistro varchar(50) COMMENT "Empresa",
  idAdmin INTEGER,
  index(idAdmin),
  foreign key (idAdmin) references tbadmin(idAdmin) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE tblog(
  IdLog INTEGER PRIMARY KEY COMMENT 'Llave primaria',
  CambiosLog VARCHAR (50) COMMENT "Cambios hechos en el sistema",
  FechaEntrada date COMMENT "Fecha de Entrada al sistema",
  FechaSalida date COMMENT "Fecha de salida de el sistema",
  idAdmin INTEGER,
  index(idAdmin),
  foreign key(idAdmin) references tbadmin(idAdmin) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE tbalumno (
  IdAlumno INTEGER PRIMARY KEY COMMENT "Llave primaria de la tabla alumno",
  NomAlumno VARCHAR(60) COMMENT "Nombre de el alumno",
  ApellidoAlumno VARCHAR(60) COMMENT "Apellido Usuario",
  EmailAlumno varchar(60) NOT NULL COMMENT 'Email de el usuario',
  PassAlumno VARCHAR(160) NOT NULL COMMENT "Contrasela de el usario",
  CiudadAlumno VARCHAR(50) NOT NULL,
  DireccionAlumno VARCHAR (50) NOT NULL,
  TelefonoAlumno VARCHAR(10) NOT NULL,
  ImagenAlumno varchar(150) DEFAULT NULL COMMENT 'Imagen de el usuario',
  IpAcceso varchar(100) NOT NULL COMMENT 'Ip de acceso',
  EstadoAlumno enum('Activo', 'Inactivo') COMMENT "Estado de el usuario",
  idAdmin INTEGER COMMENT "Llave foranea de el campo idAdmin",
  IdLog INTEGER COMMENT "Llave foranea de el campo idLog",
  index(idAdmin),
  foreign key(idAdmin) references tbadmin(idAdmin) ON DELETE CASCADE,
  index(IdLog),
  foreign key (IdLog) references tblog(IdLog) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
INSERT INTO `tbalumno` (`IdAlumno`, `NomAlumno`, `ApellidoAlumno`, `EmailAlumno`, `PassAlumno`, `CiudadAlumno`, `DireccionAlumno`, `TelefonoAlumno`, `ImagenAlumno`, `IpAcceso`, `EstadoAlumno`, `idAdmin`, `IdLog`) VALUES ('1', 'Leidy', 'Lemus', 'leidylemusomaña@gmail.com', '1234', 'Medellin', 'Cra24#67', '3207896789', NULL, '', 'Activo', '1042732285', NULL);
CREATE TABLE tbprofesor(
  IdProfesor INTEGER PRIMARY KEY COMMENT "Llave primaria",
  NomProfesor VARCHAR(60) COMMENT "Nombre de el alumno",
  ApellidoProfesor VARCHAR(60) COMMENT "Apellido Usuario",
  EmailProfesor varchar(60) NOT NULL COMMENT 'Email de el usuario',
  PassProfesor VARCHAR (60) NOT NULL ,
  CiudadProfesor VARCHAR(50) NOT NULL,
  DireccionProfesor VARCHAR (50) NOT NULL,
  TelefonoProfesor VARCHAR(10) NOT NULL,
  ImagenProfesor varchar(150) DEFAULT NULL COMMENT 'Imagen de el usuario',
  IpAccesoProfesor varchar(100) NOT NULL COMMENT 'Ip de acceso',
  EstadoProfesor enum('Activo', 'Inactivo') COMMENT "Estado de el profeso",
  idAdmin INTEGER,
  IdLog INTEGER,
  index(idadmin),
  foreign key(idAdmin) references tbadmin(idAdmin) ON DELETE CASCADE,
  index(IdLog),
  foreign key (IdLog) references tblog(IdLog) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE tbcategoria(
  NomCategoria VARCHAR(50) primary KEY COMMENT "Nombre de la la catergoria de el curso"
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE tbcursos(
  idCurso INTEGER PRIMARY KEY COMMENT "Llave primaria de la tabla cursos",
  NomCurso VARCHAR (50) NOT NULL COMMENT "Nombre de el Curso",
  NomCategoria VARCHAR (50) COMMENT "Llave foranea de la tabla tbcategoria",
  imagenCurso VARCHAR (250) COMMENT "Imagen de el curso",
  destCurso TEXT COMMENT "Descripcion de el curso",
  idAdmin INTEGER (50) COMMENT "LLave foranea de el Administrador",
  idProfesor INTEGER (50) COMMENT "LLave foranea de el Profesor",
  index(idAdmin),
  index(idProfesor),
  index(NomCategoria),
  FOREIGN KEY(idAdmin) REFERENCES tbadmin(idAdmin) ON DELETE CASCADE,
  FOREIGN KEY(idProfesor) REFERENCES tbprofesor(idProfesor) ON DELETE CASCADE,
  FOREIGN KEY(NomCategoria) REFERENCES tbcategoria(NomCategoria) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE tbnotas (
  idNota INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  TitleNota VARCHAR (100),
  DescriptNota TEXT NOT NULL,
  FechaHora DATETIME NOT NULL,
  idAdmin INTEGER,
  idAlumno INTEGER,
  idProfesor INTEGER,
  index(idAdmin),
  FOREIGN KEY(idAdmin) REFERENCES tbAdmin(idAdmin) ON DELETE CASCADE,
  index(idAlumno),
  FOREIGN KEY(idAlumno) REFERENCES tbAlumno(idAlumno) ON DELETE CASCADE,
  index(idProfesor),
  FOREIGN KEY(idProfesor) REFERENCES tbProfesor(idProfesor) ON DELETE CASCADE
);