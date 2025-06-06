CREATE TABLE compras (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT NOT NULL,
  modelo VARCHAR(50),
  cor VARCHAR(50),
  rodas VARCHAR(20),
  interior VARCHAR(50),
  preco DECIMAL(10,2),
  data_compra DATETIME,
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);
