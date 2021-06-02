DROP DATABASE IF EXISTS edusystemdb;
CREATE DATABASE edusystemdb;
USE edusystemdb;
CREATE TABLE tbadmin(
  idAdmin INTEGER PRIMARY KEY COMMENT "Llave primaria",
  NomAdmin VARCHAR(60) NOT NULL COMMENT "Nombre de el usuario",
  ApellidoAdmin VARCHAR(60) NOT NULL COMMENT "Nombre de el usuario",
  EmailAdmin VARCHAR(60) NOT NULL COMMENT "Email de el usario",
  PassAdmin VARCHAR(160) NOT NULL COMMENT "Contrasela de el usario",
  CiudadAmin VARCHAR(50) NOT NULL,
  DireccionAdmin VARCHAR (50) NOT NULL,
  TelefonoAdmin VARCHAR(10) NOT NULL,
  DateCreate DATETIME NOT NULL DEFAULT now(),
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;


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
  idAdmin INTEGER COMMENT "Llave foranea de el campo idAdmin",
  IdLog INTEGER COMMENT "Llave foranea de el campo idLog",
  index(idAdmin),
  foreign key(idAdmin) references tbadmin(idAdmin) ON DELETE CASCADE,
  index(IdLog),
  foreign key (IdLog) references tblog(IdLog) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE tbprofesor(
  IdProfesor INTEGER PRIMARY KEY COMMENT "Llave primaria",
  NomProfesor VARCHAR(60) COMMENT "Nombre de el alumno",
  ApellidoProfesor VARCHAR(60) COMMENT "Apellido Usuario",
  EmailProfesor varchar(60) NOT NULL COMMENT 'Email de el usuario',
  PassProfesor VARCHAR (60) NOT NULL ,
  CiudadProfesor VARCHAR(50) NOT NULL,
  DireccionProfesor VARCHAR (50) NOT NULL,
  TelefonoProfesor VARCHAR(10) NOT NULL,
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