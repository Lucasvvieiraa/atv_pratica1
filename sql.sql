CREATE DATABASE gerenciamento_chamados;
USE gerenciamento_chamados;

CREATE TABLE cliente (
	id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeCliente VARCHAR(100) NOT NULL,
    emailCliente VARCHAR (40) NOT NULL,
    telefoneCliente VARCHAR (20)
);


CREATE TABLE colaborador (
id_colaborador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nomeColaborador VARCHAR (100) NOT NULL
);

CREATE TABLE chamados (
	id_chamado INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    descricaoProblema VARCHAR (40) NOT NULL,
    statusChamado VARCHAR (40) NOT NULL,
    dataAbertura DATE,
    criticidade VARCHAR (40),
    id_colaborador INT NOT NULL PRIMARY KEY AUTO_INCREMENT
);

