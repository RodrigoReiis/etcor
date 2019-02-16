-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16-Fev-2019 às 22:37
-- Versão do servidor: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `etcor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `about`
--

CREATE TABLE IF NOT EXISTS `about` (
`idabout` int(11) NOT NULL,
  `titleabout` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subtitleabout` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `textabout` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `about`
--

INSERT INTO `about` (`idabout`, `titleabout`, `subtitleabout`, `textabout`) VALUES
(7, 'EU', 'EU', 'EU'),
(8, '', '', ''),
(9, '', '', ''),
(10, 're', 'r', 'ere'),
(11, 'DASDA', 'DAS', 'DAS'),
(12, '', '', ''),
(13, '', '', ''),
(14, 'eLEMENTO 1', 'ELEMENTO 2', 'dasd'),
(15, 'eLEMENTO 1', 'ELEMENTO 2', 'dasd'),
(16, 'eLEMENTO 1', 'ELEMENTO 2', 'dasd'),
(17, 'eLEMENTO 1', 'ELEMENTO 2', 'dasd'),
(18, 'TESTE', 'TESTE', 'dasdTESTATE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`idservices` int(11) NOT NULL,
  `titleareaservices` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitleareaservices` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageservices` blob,
  `titleservices` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `textservices` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `services`
--

INSERT INTO `services` (`idservices`, `titleareaservices`, `subtitleareaservices`, `imageservices`, `titleservices`, `textservices`) VALUES
(1, 'Teste Titulo Externo', 'Teste Subtitulo', NULL, 'Teste Titulo', 'Teste TEXTO'),
(2, 'Teste Area externa', '', NULL, 'Teste Titulo', '<p>Teste TEXTO</p>'),
(3, 'teste3', 'teste3', NULL, 'Teste Titulo3', '<p>Teste TEXTO3</p>'),
(4, '', '', NULL, 'Teste Titulo', '<p>Teste TEXTO</p>'),
(5, '', '', NULL, 'Teste Titulo', '<p>Teste TEXTO</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
 ADD PRIMARY KEY (`idabout`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`idservices`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `idabout` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `idservices` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
