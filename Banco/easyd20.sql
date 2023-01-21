-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jan-2023 às 04:59
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `easyd20`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aventura`
--

CREATE TABLE `aventura` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `descricao` varchar(96) NOT NULL,
  `cod` int(6) NOT NULL,
  `criado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `aventura`
--

INSERT INTO `aventura` (`id`, `nome`, `descricao`, `cod`, `criado`) VALUES
(0, 'Vampire', '', 123456, '0000-00-00'),
(1, 'The crater', '', 654321, '2023-01-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `cod_aventura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(24) NOT NULL,
  `email` varchar(48) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `bio` varchar(96) DEFAULT NULL,
  `idade` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `bio`, `idade`) VALUES
(0, 'admin', 'admin@gmail.com', '$2y$10$E8xt4GOV6yTdXPEtSBm2EulAYcRpxSmpIK0to3/9ZL0jXS3oEcqVy', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aventura`
--
ALTER TABLE `aventura`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_usuario` (`cod_usuario`),
  ADD KEY `cod_aventura` (`cod_aventura`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aventura`
--
ALTER TABLE `aventura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `participantes`
--
ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `participantes_ibfk_2` FOREIGN KEY (`cod_aventura`) REFERENCES `aventura` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
