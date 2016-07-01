-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2016 at 02:45 AM
-- Server version: 5.6.30-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetoBlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `comentario` text,
  `poste_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `email`, `comentario`, `poste_id`) VALUES
(1, 'aline', 'alinekies@gmail.com', 'nada nada to com sono', 1),
(2, 'teste de comentario', 'alinekies@gmail.com', 'testando comentario', 3),
(3, 'Sal Pivete', 'alinekies@gmail.com', 'teste de comentario', 3),
(4, 'LEONARDO', 'LEONARDONNNN', 'teste de comentario', 4),
(5, 'aline', 'alinekies@gmail.com', 'teste de comentario', 4);

-- --------------------------------------------------------

--
-- Table structure for table `poste`
--

CREATE TABLE IF NOT EXISTS `poste` (
  `id` int(11) NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `texto` varchar(255) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poste`
--

INSERT INTO `poste` (`id`, `hora`, `texto`, `dt`, `titulo`, `autor`) VALUES
(1, '2016-05-31 03:14:22', 'ola jovi', NULL, NULL, NULL),
(2, '2016-05-31 15:38:41', 'ApÃ³s criar as tabelas, vocÃª farÃ¡ uma alteraÃ§Ã£o na estrutura de cada tabela que necessita utilizar a chave estrangeira. Essa alteraÃ§Ã£o da estrutura da tabela Ã© feita a partir do comando alter table. ', '2016-05-31', 'teste', 'aline'),
(3, '2016-05-31 15:39:11', 'ConclusÃµes\r\n\r\nNeste artigo foram apresentados exemplos prÃ¡ticos da criaÃ§Ã£o de chaves estrangeiras a partir do uso de de tabelas do tipo InnoDB.  ', '2016-05-31', 'jovem jovem', 'aline chaves'),
(4, '2016-05-31 04:24:31', ' Nada do que Ã© social e humano Ã© mais real que as utopias. Na sua vertente eutÃ³pica, as utopias constituÃ­ram sempre o fundamento simbÃ³lico e mÃ­tico sem o qual nenhuma forma de organizaÃ§Ã£o social se sustenta, justifica ou sobrevive. E criam, tanto ', '2016-05-31', 'hoje', 'ALINE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post` (`poste_id`);

--
-- Indexes for table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `poste`
--
ALTER TABLE `poste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_post` FOREIGN KEY (`poste_id`) REFERENCES `poste` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
