CREATE DATABASE cms_bm100414;
USE cms_bm100414;

CREATE TABLE usuario (
idusuario	bigint NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre	varchar(255) NOT NULL,
usuario	varchar(100),
clave	Varchar(255),
estado	char(1)
);
CREATE UNIQUE INDEX user ON usuario(usuario);

INSERT INTO `usuario`(`nombre`, `usuario`, `clave`, `estado`) VALUES ('Administrador','admin',SHA2('admin','512'),'A');
INSERT INTO `usuario`(`nombre`, `usuario`, `clave`, `estado`) VALUES ('Demo','demo',SHA2('demo','512'),'A');