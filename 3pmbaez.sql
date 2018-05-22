CREATE USER 3pmbaez;

CREATE DATABASE 3pmbaezDb WITH OWNER 3pmbaez;

GRANT ALL PRIVILEGES ON DATABASE 3pmbaezDb TO 3pmbaez;

CREATE TABLE usuarios(
	id_usuario integer NOT NULL   DEFAULT NEXTVAL(('"usuarios_id_usuario_seq"'::text)::regclass),
	nombre varchar(50) NOT NULL,
	apaterno varchar(50) NOT NULL,
	amaterno varchar(50) NOT NULL,
	telefono varchar(15) NOT NULL,
	email varchar(50) NOT NULL);

ALTER TABLE usuarios ADD CONSTRAINT PK_usuarios PRIMARY KEY (id_usuario);

CREATE SEQUENCE usuarios_id_usuario_seq INCREMENT 1 START 1;