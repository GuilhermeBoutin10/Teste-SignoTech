-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/10/2023 às 22:33
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `nome` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `bairro` text DEFAULT NULL,
  `cep` text DEFAULT NULL,
  `cidade` text DEFAULT NULL,
  `uf` text DEFAULT NULL,
  `telefone` text DEFAULT NULL,
  `tipo` text DEFAULT NULL,
  `quantidade` text DEFAULT NULL,
  `textoarea` text DEFAULT NULL,
  `sugestao` text DEFAULT NULL,
  `imagens` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `crud`
--

INSERT INTO `crud` (`id`, `nome`, `email`, `endereco`, `bairro`, `cep`, `cidade`, `uf`, `telefone`, `tipo`, `quantidade`, `textoarea`, `sugestao`, `imagens`) VALUES
(109, 'Guilherme Boutin', 'guiboutin10@gmail.com', 'rua domingos de faria', 'centro', '83540000', 'curitiba', 'paraná', '(41) 99703-7524', 'convite', '1', 'Espero que tenha gostado', '', './img/Essay on Abraham Lincoln _ Abraham Lincoln E');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
