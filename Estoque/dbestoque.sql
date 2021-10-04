-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Set-2021 às 02:48
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbestoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `idCor` int(11) NOT NULL,
  `nomeCor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`idCor`, `nomeCor`) VALUES
(1, 'Branco'),
(2, 'Preto'),
(3, 'Vermelho'),
(4, 'Azul'),
(5, 'Verde'),
(6, 'Amarelo'),
(7, 'Rosa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `operacao` enum('Entrada','Saida') NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `codigo`, `operacao`, `quantidade`, `data`) VALUES
(1, 111, 'Entrada', 10, '2021-08-24'),
(2, 111, 'Saida', 5, '2021-08-24'),
(3, 111, 'Entrada', 12, '2021-08-24'),
(21, 111, 'Entrada', 12, '2021-08-26'),
(22, 147, 'Entrada', 12, '2021-08-26'),
(23, 111, 'Saida', 12, '2021-08-26'),
(24, 147, 'Saida', 3, '2021-09-01'),
(25, 133, 'Entrada', 5, '2021-09-09'),
(26, 133, 'Saida', 2, '2021-09-09'),
(27, 111, 'Entrada', 6, '2021-09-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `nomeMarca` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`idMarca`, `nomeMarca`) VALUES
(1, 'Sony'),
(2, 'Philco'),
(3, 'LG'),
(4, 'Samsung'),
(5, 'Eletrolux'),
(6, 'Brastemp');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  `preco` double NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idCor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `codigo`, `descricao`, `preco`, `idMarca`, `idCor`) VALUES
(1, 111, 'TV 45 Polegadas', 1499, 1, 1),
(2, 122, 'TV 32 Polegadas', 599, 2, 2),
(3, 133, 'TV 50 Polegadas', 2899, 2, 2),
(4, 144, 'TV 53 Polegadas', 2399, 4, 4),
(5, 147, 'TV 63 Polegadas', 2899, 4, 7),
(6, 251, 'Geladeira 240L', 1399, 5, 1),
(7, 252, 'Geladeira 260L', 1799, 5, 2),
(8, 351, 'Lavadora 10Kg', 1599, 5, 1),
(9, 361, 'Lavadora 12Kg', 1799, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`idCor`);

--
-- Índices para tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produto_marca` (`idMarca`),
  ADD KEY `fk_produto_cor` (`idCor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cor`
--
ALTER TABLE `cor`
  MODIFY `idCor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_cor` FOREIGN KEY (`idCor`) REFERENCES `cor` (`idCor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_marca` FOREIGN KEY (`idMarca`) REFERENCES `marca` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
