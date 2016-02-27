-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 27-Fev-2016 às 13:27
-- Versão do servidor: 5.5.46-0ubuntu0.14.04.2
-- versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd - educacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Curso`
--

CREATE TABLE IF NOT EXISTS `Curso` (
  `idCurso` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) NOT NULL,
  `Duracao` int(11) NOT NULL,
  `CreditosForm` varchar(45) NOT NULL,
  `Departamento_idDepartamento` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idCurso`),
  UNIQUE KEY `Nome_UNIQUE` (`Nome`),
  KEY `fk_Curso_Departamento1_idx` (`Departamento_idDepartamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `Curso`
--

INSERT INTO `Curso` (`idCurso`, `Nome`, `Duracao`, `CreditosForm`, `Departamento_idDepartamento`) VALUES
(4, 'computação noturno geral', 8, '200', 2),
(7, 'desenvolvimento de sistemas', 8, '200', 2),
(8, 'engenharia de computação', 10, '252', 3),
(14, 'engenharia', 10, '186', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Departamento`
--

CREATE TABLE IF NOT EXISTS `Departamento` (
  `idDepartamento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Instituto_idInstituto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idDepartamento`),
  UNIQUE KEY `Nome_UNIQUE` (`Nome`),
  KEY `fk_Departamento_Instituto_idx` (`Instituto_idInstituto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `Departamento`
--

INSERT INTO `Departamento` (`idDepartamento`, `Nome`, `Instituto_idInstituto`) VALUES
(1, 'cic', 7),
(2, 'let', 6),
(3, 'ene', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Instituto`
--

CREATE TABLE IF NOT EXISTS `Instituto` (
  `idInstituto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idInstituto`),
  UNIQUE KEY `Nome_UNIQUE` (`Nome`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `Instituto`
--

INSERT INTO `Instituto` (`idInstituto`, `Nome`) VALUES
(1, 'Instituto de Ciências Humanas'),
(7, 'Instituto de Física'),
(6, 'Instituto de Saúde');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `Curso`
--
ALTER TABLE `Curso`
  ADD CONSTRAINT `fk_Curso_Departamento1` FOREIGN KEY (`Departamento_idDepartamento`) REFERENCES `Departamento` (`idDepartamento`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Departamento`
--
ALTER TABLE `Departamento`
  ADD CONSTRAINT `fk_Departamento_Instituto` FOREIGN KEY (`Instituto_idInstituto`) REFERENCES `Instituto` (`idInstituto`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
