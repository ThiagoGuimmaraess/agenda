-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 14-Fev-2017 às 15:12
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `agenda`
--
CREATE DATABASE IF NOT EXISTS `agenda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `agenda`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailUsuario` varchar(97) NOT NULL,
  `endereco` varchar(130) NOT NULL,
  `telefoneUm` varchar(27) NOT NULL,
  `telefoneDois` varchar(27) NOT NULL,
  `nome` varchar(97) NOT NULL,
  `email` varchar(97) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(70) NOT NULL,
  `estado` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE IF NOT EXISTS `utilizador` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(97) NOT NULL,
  `email` varchar(97) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`int`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
