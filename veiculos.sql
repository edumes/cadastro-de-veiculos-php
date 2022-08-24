-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Ago-2022 às 14:36
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `veiculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `idCor` tinyint(4) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`idCor`, `descricao`) VALUES
(1, 'PRETO'),
(2, 'PRATA'),
(3, 'BRANCO'),
(4, 'AMARELO'),
(6, 'VERMELHO'),
(7, 'AZUL'),
(8, 'AZUL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local_emplac`
--

CREATE TABLE `local_emplac` (
  `idLocal_emplac` tinyint(4) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `local_emplac`
--

INSERT INTO `local_emplac` (`idLocal_emplac`, `descricao`) VALUES
(1, 'AMERICANA'),
(2, 'SBO'),
(3, 'nova odessa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`idMarca`, `descricao`) VALUES
(1, 'FIAT'),
(2, 'FORD'),
(3, 'HONDA'),
(4, 'CHEVROLET');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `idModelo` tinyint(4) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`idModelo`, `descricao`) VALUES
(1, 'ONIX'),
(2, 'CRUZE'),
(3, 'PICKUP'),
(8, 'SEDAN');

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietario`
--

CREATE TABLE `proprietario` (
  `idProp` tinyint(4) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `proprietario`
--

INSERT INTO `proprietario` (`idProp`, `descricao`) VALUES
(1, 'EDUARDO SANTAROSA'),
(2, 'EVANDRO'),
(3, 'LUCAS'),
(5, 'Edu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(220) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'eduardo', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL,
  `chassi` varchar(16) NOT NULL,
  `cor` tinyint(4) NOT NULL,
  `modelo` tinyint(4) NOT NULL,
  `marca` tinyint(4) NOT NULL,
  `proprietario` tinyint(4) NOT NULL,
  `local_emplac` tinyint(4) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `ano_fab` varchar(4) NOT NULL,
  `ano_mod` varchar(4) NOT NULL,
  `renavam` int(11) NOT NULL,
  `motor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `chassi`, `cor`, `modelo`, `marca`, `proprietario`, `local_emplac`, `placa`, `ano_fab`, `ano_mod`, `renavam`, `motor`) VALUES
(54, '9999999999', 6, 2, 4, 2, 2, 'FBA111', '2012', '2020', 2147483647, 12),
(55, '124241241244', 3, 3, 2, 3, 3, 'EBA243', '2008', '2019', 4143434, 11),
(56, '31241513531', 4, 2, 1, 1, 1, 'OGA314', '2011', '2021', 1351353, 21);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`idCor`);

--
-- Índices para tabela `local_emplac`
--
ALTER TABLE `local_emplac`
  ADD PRIMARY KEY (`idLocal_emplac`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Índices para tabela `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idModelo`);

--
-- Índices para tabela `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`idProp`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cor`
--
ALTER TABLE `cor`
  MODIFY `idCor` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `local_emplac`
--
ALTER TABLE `local_emplac`
  MODIFY `idLocal_emplac` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idModelo` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `proprietario`
--
ALTER TABLE `proprietario`
  MODIFY `idProp` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
