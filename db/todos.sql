CREATE DATABASE IF NOT EXISTS webappfamily;
USE webappfamily;

CREATE TABLE todos(
    id INT(11) auto_increment primary key NOT NULL,
    nombre VARCHAR(60) NOT NULL,
    descripcion VARCHAR(200) NOT NULL,
    categoria VARCHAR(30) NOT NULL,
    fecha_limite date NOT NULL,
    estado VARCHAR(20) NOT NULL
);

SELECT * from todos;