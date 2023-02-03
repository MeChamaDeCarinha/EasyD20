-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Fev-2023 às 20:40
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
  `imagem` int(2) NOT NULL,
  `cod` int(6) NOT NULL,
  `criado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `aventura`
--

INSERT INTO `aventura` (`id`, `nome`, `descricao`, `imagem`, `cod`, `criado`) VALUES
(1, 'Vampire', 'teste', 1, 123456, '0000-00-00'),
(2, 'The crater', 'aaaaaaaaaaaa', 4, 654321, '2023-01-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `cod_aventura` int(11) NOT NULL,
  `mestrando` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `participantes`
--

INSERT INTO `participantes` (`id`, `cod_usuario`, `cod_aventura`, `mestrando`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 0),
(27, 3, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(48) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `bio` varchar(96) DEFAULT NULL,
  `idade` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `bio`, `idade`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$E8xt4GOV6yTdXPEtSBm2EulAYcRpxSmpIK0to3/9ZL0jXS3oEcqVy', NULL, NULL),
(3, 'ContaTeste', 'contateste@gmail.com', '$2y$10$ChWmphLzP7lHvnDc0qVQPe0Nw/q3.zxh0Ef6Tq4EPXkd8TQZRYRNO', NULL, NULL),
(4, 'tesawd', 'awdwa@gmail.com', '$2y$10$J.UzQpqBoHNa//p4Qm5RCO2hgcyQqAcBgnybAktJrFg/bnIbSyzVO', NULL, NULL),
(5, 'Teste', 'abcde@gmail.com', '$2y$10$vh3rlO6BK0S./c2bMxi1r.tblof0pHWvssNsMcuKTEFOmQAEU.0p.', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
