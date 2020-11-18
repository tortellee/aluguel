-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18/11/2020 às 03:50
-- Versão do servidor: 5.7.31
-- Versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alugue`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_categorias`
--

DROP TABLE IF EXISTS `tb_categorias`;
CREATE TABLE IF NOT EXISTS `tb_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_categorias`
--

INSERT INTO `tb_categorias` (`id`, `tipo`) VALUES
(132, '<img src= imagens/carros/caminhao.png width=60px>  CARRO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_lojas`
--

DROP TABLE IF EXISTS `tb_lojas`;
CREATE TABLE IF NOT EXISTS `tb_lojas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `telefone` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_lojas`
--

INSERT INTO `tb_lojas` (`id`, `nome`, `rua`, `numero`, `bairro`, `cidade`, `telefone`) VALUES
(9, 'xsdsd', 'sdsd', 232, 'dsds', 'dsdsd', 999999999),
(10, 'teste', 'teste', 0, 'teste', 'teste', 999999999),
(11, '2', '2', 2222, 's', 'american', 999999999);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_seguros`
--

DROP TABLE IF EXISTS `tb_seguros`;
CREATE TABLE IF NOT EXISTS `tb_seguros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_seguro` varchar(50) NOT NULL,
  `tempo_seguro` varchar(6) NOT NULL,
  `tipo_seguro` varchar(50) NOT NULL,
  `nome_assegurado` varchar(50) NOT NULL,
  `placa_assegurado` varchar(50) NOT NULL,
  `cpf_assegurado` varchar(14) NOT NULL,
  `cadastrado` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf_unico` (`cpf_assegurado`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_seguros`
--

INSERT INTO `tb_seguros` (`id`, `nome_seguro`, `tempo_seguro`, `tipo_seguro`, `nome_assegurado`, `placa_assegurado`, `cpf_assegurado`, `cadastrado`) VALUES
(3, '1', '2 anos', '1', '12', '1', '35161508825', '21/06/1986'),
(4, 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(13, 'b', 'b', 'b', 'b', 'b', 'b', 'b'),
(15, 'y', 'y', 'y', 'y', 'y', 'y', 'y'),
(16, 'uu', 'uu', 'uu', 'uu', 'uu', 'uu', 'uu'),
(17, '1', '2 anos', '1', 'n', 'n', 'n', '2019-11-22'),
(18, 'p', 'p', 'p', 'p', 'p', 'p', '2019-11-22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_seguros_empresa`
--

DROP TABLE IF EXISTS `tb_seguros_empresa`;
CREATE TABLE IF NOT EXISTS `tb_seguros_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_seguro` varchar(50) NOT NULL,
  `tempo_seguro` varchar(6) NOT NULL,
  `tipo_seguro` varchar(20) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `assegurado` varchar(5) NOT NULL,
  `curtidas` bigint(20) NOT NULL,
  `descurtidas` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_seguros_empresa`
--

INSERT INTO `tb_seguros_empresa` (`id`, `nome_seguro`, `tempo_seguro`, `tipo_seguro`, `valor`, `cpf`, `assegurado`, `curtidas`, `descurtidas`) VALUES
(46, 'Azul Seguros', '1 Ano', 'Roubo e Furto', 'R$ 100,00 / PROMOÇÃO', '', 'Não', 10, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(15) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` int(9) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`,`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `tipo`, `login`, `senha`, `nome`, `telefone`, `cpf`, `cidade`, `bairro`, `rua`, `numero`, `data`) VALUES
(21, 'administrador', 'admin', 'admin', 'zzikao', 999999999, '351-615-088-66', '351-615-088-34', '351-615-088-34', '351-615-088-34', 2, '2019-11-23'),
(22, 'usuario', 'user', 'user', 'zika', 999999999, '351-615-088-25', 'oi', 'oi', 'oi', 99999, '2019-11-23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_veiculos`
--

DROP TABLE IF EXISTS `tb_veiculos`;
CREATE TABLE IF NOT EXISTS `tb_veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `ano` char(4) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `assegurado` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_veiculos`
--

INSERT INTO `tb_veiculos` (`id`, `categoria`, `marca`, `modelo`, `placa`, `ano`, `cor`, `status`, `cpf`, `assegurado`) VALUES
(42, 'Sedan', 'wolks', 'focus', '12312', '1986', 'hondaaadad', 'Disponivel', 'NULL', 'Não'),
(43, 'Hatch', '123', '12312', '123', '1986', 'asdad', 'Disponivel', 'NULL', 'Não'),
(44, 'Compact', '213123', '123123', '123123', '1986', '13123', 'Disponivel', 'NULL', 'Não'),
(45, 'SUV', 'teste', 'teste', '5151515sd', '1986', 'teste', 'Disponivel', 'NULL', 'Não'),
(46, 'xxxxxxx', 'depois ', 'depois ', 'depois ', '1986', 'depois ', 'Disponivel', 'NULL', 'Não');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
