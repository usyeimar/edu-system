DROP DATABASE IF EXISTS edusystemdb;
CREATE DATABASE edusystemdb;
USE edusystemdb;
CREATE TABLE tbusuarios(
  idUsuario INTEGER PRIMARY KEY COMMENT "Llave primaria",
  NomUsuario VARCHAR(60) COMMENT "Nombre de el usuario",
  ApellidoUsuario VARCHAR(60) COMMENT "Nombre de el usuario",
  EmailUsuario VARCHAR(60) COMMENT "Email de el usario",
  PassUsuario VARCHAR(160) COMMENT "Contrasela de el usario",
  CiudadUsuario VARCHAR(50),
  DireccionUsuario VARCHAR (50),
  TelefonoUsuario VARCHAR(10),
  FechaNacimiento VARCHAR (50),
  FechaInsert DATETIME DEFAULT now()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE tbglobal_usuarios(
  idUsuario_global INTEGER PRIMARY KEY COMMENT "Llave primaria",
  NomUsuario_global VARCHAR(60) COMMENT "Nombre de el usuario",
  ApellidoUsuario_global VARCHAR(60) COMMENT "Nombre de el usuario",
  EmailUsuario_global VARCHAR(60) COMMENT "Email de el usario",
  PassUsuario_global VARCHAR(160) COMMENT "Contrasela de el usario",
  CiudadUsuario_global VARCHAR(50),
  DireccionUsuario_global VARCHAR (50),
  TelefonoUsuario_global VARCHAR(10),
  FechaNacimiento_global VARCHAR (50),
  FechaInsert DATETIME DEFAULT now()
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE tbprivilegios(
  idprivilegio INTEGER PRIMARY KEY COMMENT "Llave primaria",
  privilegio VARCHAR(30) COMMENT "Describe el privilegio de el usuario",
  idUsuario INTEGER COMMENT "Llave foranea de la tabla tbprivilegios ",
  index(idUsuario),
  foreign key(idUsuario) references tbusuarios(idUsuario) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE tblog(
  IdLog INTEGER PRIMARY KEY COMMENT 'Llave primaria',
  CambiosLog VARCHAR (50) COMMENT "Cambios hechos en el sistema",
  FechaEntrada date COMMENT "Fecha de Entrada al sistema",
  FechaSalda date COMMENT "Fecha de salida de el sistema",
  idUsuario INTEGER,
  index(idUsuario),
  foreign key(idUsuario) references tbusuarios(idUsuario) ON DELETE CASCADE
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
  idUsuario INTEGER (50) COMMENT "LLave foranea de el Usuario",
  PrecioCurso DOUBLE NOT NULL,
  index(idUsuario),
  index(NomCategoria),
  FOREIGN KEY(idUsuario) REFERENCES tbusuarios(idUsuario) ON DELETE CASCADE,
  FOREIGN KEY(NomCategoria) REFERENCES tbcategoria(NomCategoria) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE tbnotas (
  idNota INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  TitleNota VARCHAR (100),
  DescriptNota TEXT NOT NULL,
  FechaHora DATETIME NOT NULL,
  idUsuario INTEGER,
  index(idUsuario),
  FOREIGN KEY(idUsuario) REFERENCES tbusuarios(idUsuario) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE tbcategoria_file(
  idCategoria INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
  idUsuario INTEGER NOT NULL,
  NomCategoria VARCHAR(255) NOT NULL,
  FechaInsertCategoria DATETIME DEFAULT NOW(),
  index(idUsuario),
  FOREIGN KEY(idUsuario) REFERENCES tbusuarios(idUsuario) ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

CREATE TABLE tbcredenciales_login(
  idCredencial_global_login INTEGER PRIMARY KEY  NOT NULL,
  NomUsuario_global VARCHAR(60),
  PassUsuario_global VARCHAR(60),
  index(NomUsuario_global),
  index(PassUsuario_global)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;