-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS cadastro_db;
USE cadastro_db;

-- Criação da tabela de usuários
CREATE TABLE usuarios (
    cpf VARCHAR(14) NOT NULL PRIMARY KEY,  -- formato: 000.000.000-00
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    data_nascimento DATE NOT NULL,
    telefone VARCHAR(20),
    senha VARCHAR(255) NOT NULL  -- recomenda-se armazenar hash da senha
);
