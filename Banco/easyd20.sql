SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE EasyD20;


USE EasyD20;


CREATE TABLE `aventura` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `descricao` varchar(96) NOT NULL,
  `cod` int(6) NOT NULL,
  `criado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `aventura` (`id`, `nome`, `descricao`, `cod`, `criado`) VALUES
(1, 'Vampire', 'teste', 123456, '0000-00-00'),
(2, 'The crater', 'aaaaaaaaaaaa', 654321, '2023-01-21');


CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `cod_aventura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `participantes` (`id`, `cod_usuario`, `cod_aventura`) VALUES
(1, 1, 1),
(2, 1, 2);


CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(48) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `bio` varchar(96) DEFAULT NULL,
  `idade` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `bio`, `idade`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$E8xt4GOV6yTdXPEtSBm2EulAYcRpxSmpIK0to3/9ZL0jXS3oEcqVy', NULL, NULL);


ALTER TABLE `aventura`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_usuario` (`cod_usuario`),
  ADD KEY `cod_aventura` (`cod_aventura`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `aventura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `participantes`
  ADD CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `participantes_ibfk_2` FOREIGN KEY (`cod_aventura`) REFERENCES `aventura` (`id`);
COMMIT;