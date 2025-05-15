CREATE DATABASE IF NOT EXISTS cadastro_db;
USE cadastro_db;

CREATE TABLE IF NOT EXISTS usuarios (
  cpf VARCHAR(14) PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  data_nascimento DATE NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  senha VARCHAR(255) NOT NULL
);