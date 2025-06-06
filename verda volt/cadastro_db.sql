
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `usuarios` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`) USING BTREE;
COMMIT;
CREATE TABLE compras (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT NOT NULL,
  modelo VARCHAR(50),
  cor VARCHAR(50),
  rodas VARCHAR(20),
  interior VARCHAR(50),
  preco DECIMAL(10,2),
  data_compra DATETIME,
  FOREIGN KEY (id_usuario) REFERENCES usuarios(cpf)
);
