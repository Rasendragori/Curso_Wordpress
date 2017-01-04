DROP DATABASE lab3;
CREATE DATABASE lab3;
USE lab3;

CREATE TABLE usuario (
idusuario	bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre	varchar(255) NOT NULL,
usuario	varchar(100),
clave	Varchar(255),
estado	char(1)
);
CREATE UNIQUE INDEX user ON usuario(usuario);

CREATE TABLE paginas (
idpaginas	bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre	varchar(255) NOT NULL,
plantilla	varchar(100),
estado	char(1) DEFAULT 'A',
contenido	text
);

INSERT INTO `usuario`(`nombre`, `usuario`, `clave`, `estado`) VALUES ('Administrador','admin',SHA2('admin','512'),'A');
INSERT INTO `usuario`(`nombre`, `usuario`, `clave`, `estado`) VALUES ('Demo','demo',SHA2('demo','512'),'A');
INSERT INTO `usuario`(`nombre`, `usuario`, `clave`, `estado`) VALUES ('SDLG','sdlg',SHA2('grasa','512'),'A');