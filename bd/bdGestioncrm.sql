#cd C:\xampp\mysql\bin
#mysql -u root -p
#source C:/Users/Carlos/Pictures/bdGestioncrm.sql;

DROP DATABASE IF EXISTS bdGestioncrm;
CREATE DATABASE bdGestioncrm;
USE bdGestioncrm;

CREATE TABLE usuarios(
	id INT(11) UNSIGNED PRIMARY KEY auto_increment,
	nombre VARCHAR(100) NOT NULL,
	user VARCHAR(50) NOT NULL,
	password BLOB NOT NULL
)ENGINE=INNODB;

CREATE TABLE clientes(
	id INT(11) UNSIGNED PRIMARY KEY auto_increment,
	nombre VARCHAR(100) NOT NULL,
	a_paterno VARCHAR(50) NOT NULL,
	a_materno VARCHAR(50) NOT NULL,
	sexo ENUM('Masculino','Femenino') NOT NULL,
	telefono INT(9) UNSIGNED NOT NULL,
	direccion VARCHAR(100) NOT NULL
)ENGINE=INNODB;

CREATE TABLE categorias(
	id INT(11) UNSIGNED PRIMARY KEY auto_increment,
	tipo VARCHAR(100) NOT NULL,
	descripcion VARCHAR(100) NOT NULL
)ENGINE=INNODB;

CREATE TABLE productos(
	id INT(11) UNSIGNED PRIMARY KEY auto_increment,
	nombre VARCHAR(50) NOT NULL,
	marca VARCHAR(50) NOT NULL,
	cantidad_stock INT(4) UNSIGNED NOT NULL,
	precio FLOAT UNSIGNED NOT NULL,
	id_categoria INT(11) UNSIGNED,
	FOREIGN KEY (id_categoria) REFERENCES categorias(id) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=INNODB;

CREATE TABLE servicios(
	id INT(11) UNSIGNED PRIMARY KEY auto_increment,
	id_cliente INT(11) UNSIGNED,
	fecha_inicio TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	fecha_fin TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	id_tipo INT(11) UNSIGNED,
	costo_servico FLOAT UNSIGNED NOT NULL,
	FOREIGN KEY (id_cliente) REFERENCES clientes(id) ON DELETE RESTRICT ON UPDATE CASCADE,
	FOREIGN KEY (id_tipo) REFERENCES categorias(id) ON DELETE RESTRICT ON UPDATE CASCADE
)ENGINE=INNODB;

INSERT usuarios VALUES
(NULL,'Carlos Adrian Mateos Fermin','admin', 123),
(NULL,'Jocelyn Berra Ruiz','usuario', 123);

INSERT clientes VALUES
(NULL,'Carlos Adrian', 'Mateos', 'Fermin','Masculino', 971123450, 'col. san pablo sur s/n'),
(NULL,'Jocelyn', 'Berra', 'Ruiz','Femenino', 971987659, 'col. las brisas 301');

INSERT categorias VALUES
(NULL,'Asistencia Tecnica','Servico para Dispositivos Moviles'),
(NULL,'Telefonía','Venta de Dispositivo Movil'),
(NULL,'Accesorios','Venta de Accesorio para Dispositivos');

INSERT productos VALUES
(NULL,'Samsung Galaxy S20','Samsung', 50, 8450, 2),
(NULL,'Tarjeta memoria micro SD 128 GB','Kingston', 100, 1800, 3);

INSERT servicios VALUES
(NULL, 1, '2019-04-25 09:00:00','2019-04-27 10:00:00', 1, 650),
(NULL, 2, '2019-04-25 09:00:00','2019-04-27 10:00:00', 2, 8450);
