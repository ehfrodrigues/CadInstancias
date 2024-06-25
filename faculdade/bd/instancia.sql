-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/06/2024 às 16:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_faculdade`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `instancia`
--

CREATE TABLE `instancia` (
  `nome_instancia` varchar(255) NOT NULL,
  `quantidade_ocpu` int(11) NOT NULL,
  `quantidade_memoria` int(11) NOT NULL,
  `tipo_so` varchar(255) NOT NULL,
  `senha_inicial` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `instancia`
--

INSERT INTO `instancia` (`nome_instancia`, `quantidade_ocpu`, `quantidade_memoria`, `tipo_so`, `senha_inicial`, `id`) VALUES
('teste', 6, 2, 'ubuntu20', '@Teste12345', 9);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `instancia`
--
ALTER TABLE `instancia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `instancia`
--
ALTER TABLE `instancia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
