-- Cria o banco de dados sistema_clinica
CREATE DATABASE sistema_clinica;

-- Selecione o banco de dados sistema_clinica
USE sistema_clinica;

-- Cria a tabela clientes
CREATE TABLE clientes (
  id INT AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  sobrenome VARCHAR(50) NOT NULL,
  cpf VARCHAR(14) NOT NULL,
  rg VARCHAR(20) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  bairro VARCHAR(50) NOT NULL,
  uf VARCHAR(2) NOT NULL,
  cep VARCHAR(10) NOT NULL,
  estado VARCHAR(50) NOT NULL,
  pais VARCHAR(50) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  email VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

-- Adiciona um índice único para o campo cpf
ALTER TABLE clientes ADD UNIQUE (cpf);