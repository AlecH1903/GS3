-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/06/2025 às 11:02
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `assinaturas`
--

CREATE TABLE `assinaturas` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(14) NOT NULL,
  `data_assinatura` datetime NOT NULL DEFAULT current_timestamp(),
  `data_expiracao` datetime DEFAULT NULL,
  `ativa` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `carros_info`
--

CREATE TABLE `carros_info` (
  `chave` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `potencia` varchar(20) DEFAULT NULL,
  `vel_max` varchar(20) DEFAULT NULL,
  `combustivel` varchar(20) DEFAULT NULL,
  `transmissao` varchar(20) DEFAULT NULL,
  `ano` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carros_info`
--

INSERT INTO `carros_info` (`chave`, `nome`, `imagem`, `descricao`, `potencia`, `vel_max`, `combustivel`, `transmissao`, `ano`) VALUES
('long_range3', 'Model 3 Long Range', 'm3/vendam3.jpg', 'Versão com maior autonomia do sedã elétrico mais popular.', '353 HP', '145 mph', 'Elétrico', 'Automático', '2023'),
('long_ranges', 'Model S Long Range', 'ms/carroms.jpg', 'Versão com maior autonomia do sedã premium de alto desempenho.', '750 HP', '163 mph', 'Elétrico', 'Automático', '2023'),
('long_rangeX', 'Model X Long Range', 'mx/carrox.jpg', 'Versão com maior autonomia do SUV premium com tecnologia avançada.', '750 HP', '163 mph', 'Elétrico', 'Automático', '2023'),
('long_rangeY', 'Model Y Long Range', 'my/carromy.jpg', 'Versão com maior autonomia do SUV compacto mais vendido.', '353 HP', '145 mph', 'Elétrico', 'Automático', '2023'),
('performance3', 'Model 3 Performance', 'm3/vendam3.jpg', 'Versão esportiva com aceleração impressionante e desempenho de track.', '450 HP', '162 mph', 'Elétrico', 'Automático', '2023'),
('performances', 'Model S Plaid', 'ms/carroms.jpg', 'A versão mais potente com tecnologia de ponta e aceleração recorde.', '1,020 HP', '200 mph', 'Elétrico', 'Automático', '2023'),
('performanceX', 'Model X Plaid', 'mx/carrox.jpg', 'SUV mais rápido do mundo com desempenho e tecnologia incomparáveis.', '1,020 HP', '163 mph', 'Elétrico', 'Automático', '2023'),
('performanceY', 'Model Y Performance', 'my/carromy.jpg', 'SUV compacto com desempenho esportivo e tecnologia avançada.', '450 HP', '155 mph', 'Elétrico', 'Automático', '2023'),
('rwd3', 'Model 3 RWD', 'm3/vendam3.jpg', 'Sedã elétrico de alto desempenho com design moderno e eficiência energética.', '283 HP', '140 mph', 'Elétrico', 'Automático', '2023'),
('rwds', 'Model S RWD', 'ms/carroms.jpg', 'Sedã de luxo com tecnologia avançada e desempenho excepcional.', '670 HP', '155 mph', 'Elétrico', 'Automático', '2023'),
('rwdX', 'Model X RWD', 'mx/carrox.jpg', 'SUV elétrico com portas Falcon Wing e espaço amplo para família.', '670 HP', '155 mph', 'Elétrico', 'Automático', '2023'),
('rwdY', 'Model Y RWD', 'my/carromy.jpg', 'SUV compacto elétrico com espaço versátil e eficiência energética.', '283 HP', '135 mph', 'Elétrico', 'Automático', '2023');

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(50) NOT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL,
  `rodas` varchar(20) DEFAULT NULL,
  `interior` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `data_compra` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `compras` int(11) DEFAULT 0,
  `foto_perfil` longblob DEFAULT NULL,
  `assinante` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `assinaturas`
--
ALTER TABLE `assinaturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `carros_info`
--
ALTER TABLE `carros_info`
  ADD PRIMARY KEY (`chave`);

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `fk_modelo` (`modelo`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `assinaturas`
--
ALTER TABLE `assinaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `assinaturas`
--
ALTER TABLE `assinaturas`
  ADD CONSTRAINT `assinaturas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`cpf`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`cpf`),
  ADD CONSTRAINT `fk_modelo` FOREIGN KEY (`modelo`) REFERENCES `carros_info` (`chave`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
