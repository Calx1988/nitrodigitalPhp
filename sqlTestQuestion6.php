CREATE DATABASE nitrodigital;

CREATE TABLE pais(
	id INT,
	nome VARCHAR(25) NOT NULL,
	PRIMARY KEY (id)
	);
	
INSERT INTO pais(
	'Brasil'
	);
INSERT INTO pais(
	'Estados Unidos'
);
INSERT INTO pais(
	'Canadá'
);
INSERT INTO pais(
	'Argentina'
);

CREATE TABLE estado(
	id INT,
	