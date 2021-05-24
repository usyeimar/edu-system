DROP DATABASE  IF EXISTS edusystemdb;
CREATE DATABASE edusystemdb;
USE edusystemdb;
CREATE TABLE tbadmin(
idAdmin INTEGER PRIMARY KEY COMMENT"Llave primaria",
NomAdmin VARCHAR(60) NOT NULL COMMENT"Nombre de el usuario",
NickAdmin VARCHAR(30) NOT NULL COMMENT"Nickname de el usuario",
PassAdmin VARCHAR(160) NOT NULL COMMENT"Contrasela de el usario",
ApellidoAdmin VARCHAR(60) NOT NULL COMMENT"Nombre de el usuario",
EmailAdmin VARCHAR(60) NOT NULL COMMENT"Email de el usario",
FechaAccesoAdmin DATETIME COMMENT"Fecha de el ultimo acceso de el usuario",
ImagenAdmin VARCHAR(150) COMMENT"Imagen dee el usuario",
IpAccesoAdmin VARCHAR(100) NOT NULL COMMENT"Ip de acceso",
EstadoAdmin ENUM("Activo","Inactivo")COMMENT"Describe si el usuario esta activo o inactivo"
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbprivilegios(
idprivilegio INTEGER  PRIMARY KEY COMMENT"Llave primaria",
privilegio VARCHAR(30) COMMENT"Describe el privilegio de el usuario",
idAdmin INTEGER COMMENT"Llave foranea de la tabla tbprivilegios ",
index(idAdmin),
foreign key(idAdmin) references tbadmin(idAdmin)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbregistro (
  idRegistro INTEGER  PRIMARY KEY COMMENT 'primary key',
  FechaRegistro VARCHAR(50) NOT NULL COMMENT 'Fecha de registro',
  TipoRegistro enum("Personal","Bussines","For Education") NOT NULL,
  EmpresaRegistro varchar(50) COMMENT"Empresa",
  idAdmin INTEGER,
  index(idAdmin),
  foreign key (idAdmin) references tbadmin(idAdmin)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE tblog(
IdLog INTEGER PRIMARY KEY COMMENT 'Llave primaria',
CambiosLog VARCHAR (50) COMMENT"Cambios hechos en el sistema",
FechaEntrada date COMMENT"Fecha de Entrada al sistema",
FechaSalida date COMMENT"Fecha de salida de el sistema",
idAdmin INTEGER,
index(idAdmin),
foreign key(idAdmin) references tbadmin(idAdmin)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE tbalumno (
  IdAlumno INTEGER PRIMARY KEY COMMENT"Llave primaria de la tabla alumno",
  NomAlumno VARCHAR(60) COMMENT"Nombre de el alumno",
  NickAlumno VARCHAR(30) NOT NULL COMMENT"Nickname de el usuario",
  ApellidoAlumno VARCHAR(60) COMMENT"Apellido Usuario",
  EmailAlumno varchar(60) NOT NULL COMMENT 'Email de el usuario',
  ImagenAlumno varchar(150) DEFAULT NULL COMMENT 'Imagen de el usuario',
  IpAcceso varchar(100) NOT NULL COMMENT 'Ip de acceso',
  EstadoAlumno enum('Activo','Inactivo') COMMENT"Estado de el usuario",
  idAdmin INTEGER COMMENT"Llave foranea de el campo idAdmin",
  IdLog INTEGER COMMENT"Llave foranea de el campo idLog",
  index(idAdmin),
  foreign key(idAdmin) references tbadmin(idAdmin),
  index(IdLog),
  foreign key (IdLog) references tblog(IdLog)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE tbprofesor(
IdProfesor INTEGER PRIMARY KEY COMMENT"Llave primaria",
NomProfesor VARCHAR(60) COMMENT"Nombre de el alumno",
NickProfesos VARCHAR(30) NOT NULL COMMENT"Nickname de el usuario",
ApellidoProfesor VARCHAR(60) COMMENT"Apellido Usuario",
EmailProfesor varchar(60) NOT NULL COMMENT 'Email de el usuario',
ImagenProfesor varchar(150) DEFAULT NULL COMMENT 'Imagen de el usuario',
IpAccesoProfesor varchar(100) NOT NULL COMMENT 'Ip de acceso',
EstadoProfesor enum('Activo','Inactivo')  COMMENT"Estado de el profeso",
idAdmin INTEGER,
IdLog INTEGER,
index(idadmin),
foreign key(idAdmin) references tbadmin(idAdmin),
index(IdLog),
foreign key (IdLog) references tblog(IdLog)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE  TABLE tbcategoria(
NomCategoria VARCHAR(50) primary KEY COMMENT "Nombre de la la catergoria de el curso"
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE tbcursos(
idCurso INTEGER PRIMARY KEY COMMENT "Llave primaria de la tabla cursos",
NomCurso VARCHAR (50) NOT NULL COMMENT "Nombre de el Curso",
NomCategoria VARCHAR (50) COMMENT "Llave foranea de la tabla tbcategoria",
imagenCurso VARCHAR (250) COMMENT "Imagen de el curso",
destCurso TEXT COMMENT "Descripcion de el curso",  
idAdmin INTEGER  (50) COMMENT "LLave foranea de el Administrador",
idProfesor INTEGER  (50) COMMENT "LLave foranea de el Profesor",
index(idAdmin),
index(idProfesor),
index(NomCategoria),
FOREIGN KEY(idAdmin) REFERENCES tbadmin(idAdmin),
FOREIGN KEY(idProfesor) REFERENCES tbprofesor(idProfesor),
FOREIGN KEY(NomCategoria) REFERENCES tbcategoria(NomCategoria)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
