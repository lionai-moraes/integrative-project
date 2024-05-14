-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/05/2024 às 22:51
-- Versão do servidor: 5.7.36
-- Versão do PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_adm`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `email` varchar(140) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `senha`, `email`, `telefone`, `cidade`, `estado`, `endereco`) VALUES
(31, 'lionai bruce de moraes', 'lionai', 'lionaimoraes@gmail.com', '11978270908', 'Praia Grande', 'SP', 'Praia Grande'),
(40, 'Lorenzo Passos de Barros Prucho', NULL, 'djoniblack@outinmichigancity.com', '(63) 2726-1348', 'Praia Grande', 'SP', 'Praia Grande, Apartamento'),
(41, 'Patrick Moraes Barreto Goulart', NULL, 'sanela9470@uorak.com', '(82) 3383-6175', 'Praia Grande', 'SP', 'Praia Grande, Apartamento'),
(42, 'Maycon Barroso Pinheiro Lopes', NULL, 'varicol819@funvane.com', '(82) 3073-6294', 'Praia Grande', 'SP', 'Praia Grande, Apartamento'),
(43, 'davi DE MORAES', NULL, 'lionaimoraes@gmail.com', '11978270908', 'Praia Grande', 'SP', 'Praia Grande');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
