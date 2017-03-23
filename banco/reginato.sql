-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `reginato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristica`
--

CREATE TABLE IF NOT EXISTS `caracteristica` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `valoresSelecionadosPorFoto` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `caracteristica`
--

INSERT INTO `caracteristica` (`id`, `nome`, `valoresSelecionadosPorFoto`) VALUES
(1, 'cor do alumínio', 1),
(2, 'dimensões', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Mesa '),
(2, 'Cadeira'),
(3, 'Mesa'),
(4, 'Mesa'),
(5, 'Mesa'),
(6, 'Mesa'),
(7, 'Mesa'),
(8, 'Mesa'),
(9, 'Aparador'),
(10, 'Aparador'),
(11, 'X'),
(12, 'X');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabrica`
--

CREATE TABLE IF NOT EXISTS `fabrica` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fabrica`
--

INSERT INTO `fabrica` (`id`, `nome`) VALUES
(1, 'Green House'),
(0, 'Tissot'),
(0, 'Tissot');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto_caracteristica`
--

CREATE TABLE IF NOT EXISTS `foto_caracteristica` (
  `id_foto` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_caracteristica` bigint(20) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `hint` varchar(100) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `foto_caracteristica`
--

INSERT INTO `foto_caracteristica` (`id_foto`, `id_caracteristica`, `nome`, `hint`) VALUES
(1, 1, 'Alumínino-Branco-Fosco-150x150.jpg', 'branco fosco'),
(2, 1, 'Alumínio-Amarelo-150x150.jpg', 'amarelo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto_produto`
--

CREATE TABLE IF NOT EXISTS `foto_produto` (
  `id_foto` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `id_produto` bigint(20) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=243 ;

--
-- Extraindo dados da tabela `foto_produto`
--

INSERT INTO `foto_produto` (`id_foto`, `nome`, `id_produto`) VALUES
(1, '0', 1),
(2, '001.jpg', 1),
(3, '002.jpg', 1),
(4, '002.jpg', 77),
(5, '001.jpg', 77),
(6, '002.jpg', 80),
(7, '001.jpg', 80),
(8, '002.jpg', 82),
(9, '001.jpg', 82),
(10, '002.jpg', 84),
(11, '001.jpg', 84),
(12, '002.jpg', 86),
(13, '001.jpg', 86),
(14, '001.jpg', 88),
(15, '001.jpg', 90),
(16, '001.jpg', 92),
(17, '002.jpg', 94),
(18, '001.jpg', 94),
(19, '002.jpg', 96),
(20, '001.jpg', 96),
(21, '002.jpg', 98),
(22, '001.jpg', 98),
(23, '002.jpg', 100),
(24, '001.jpg', 100),
(25, '002.jpg', 102),
(26, '001.jpg', 102),
(27, '024.jpg', 104),
(28, '0023.jpg', 104),
(29, '001.jpg', 104),
(30, '024.jpg', 106),
(31, '0023.jpg', 106),
(32, '001.jpg', 106),
(33, '001.jpg', 108),
(34, '001.jpg', 110),
(35, '002.jpg', 112),
(36, '001.jpg', 112),
(37, '001.jpg', 114),
(38, '001.jpg', 116),
(39, '024.jpg', 118),
(40, '0023.jpg', 118),
(41, '001.jpg', 118),
(42, '001.jpg', 120),
(43, '002.jpg', 122),
(44, '001.jpg', 122),
(45, '002.jpg', 124),
(46, '001.jpg', 124),
(47, '002.jpg', 126),
(48, '001.jpg', 126),
(49, '002.jpg', 128),
(50, '001.jpg', 128),
(51, '002.jpg', 130),
(52, '001.jpg', 130),
(53, '002.jpg', 132),
(54, '001.jpg', 132),
(55, '024.jpg', 134),
(56, '0023.jpg', 134),
(57, '001.jpg', 134),
(58, '024.jpg', 136),
(59, '0023.jpg', 136),
(60, '001.jpg', 136),
(61, '024.jpg', 138),
(62, '0023.jpg', 138),
(63, '001.jpg', 138),
(64, '024.jpg', 140),
(65, '0023.jpg', 140),
(66, '001.jpg', 140),
(67, '024.jpg', 142),
(68, '0023.jpg', 142),
(69, '001.jpg', 142),
(70, '024.jpg', 144),
(71, '0023.jpg', 144),
(72, '001.jpg', 144),
(73, '002.jpg', 146),
(74, '001.jpg', 146),
(75, '002.jpg', 148),
(76, '001.jpg', 148),
(77, '001.jpg', 150),
(78, '001.jpg', 152),
(79, '001.jpg', 154),
(80, '001.jpg', 156),
(81, '001.jpg', 158),
(82, '001.jpg', 160),
(83, '002.jpg', 162),
(84, '001.jpg', 162),
(85, '024.jpg', 164),
(86, '0023.jpg', 164),
(87, '001.jpg', 164),
(88, '002.jpg', 166),
(89, '001.jpg', 166),
(90, '002.jpg', 168),
(91, '001.jpg', 168),
(92, '002.jpg', 170),
(93, '001.jpg', 170),
(94, '002.jpg', 172),
(95, '001.jpg', 172),
(96, '002.jpg', 174),
(97, '001.jpg', 174),
(98, '002.jpg', 176),
(99, '001.jpg', 176),
(100, '024.jpg', 177),
(101, '0023.jpg', 177),
(102, '001.jpg', 177),
(103, '024.jpg', 178),
(104, '0023.jpg', 178),
(105, '001.jpg', 178),
(106, '024.jpg', 179),
(107, '0023.jpg', 179),
(108, '001.jpg', 179),
(109, '024.jpg', 180),
(110, '0023.jpg', 180),
(111, '001.jpg', 180),
(112, '024.jpg', 181),
(113, '0023.jpg', 181),
(114, '001.jpg', 181),
(115, '024.jpg', 182),
(116, '0023.jpg', 182),
(117, '001.jpg', 182),
(118, '024.jpg', 183),
(119, '0023.jpg', 183),
(120, '001.jpg', 183),
(121, '024.jpg', 184),
(122, '0023.jpg', 184),
(123, '001.jpg', 184),
(124, '002.jpg', 185),
(125, '001.jpg', 185),
(126, '002.jpg', 186),
(127, '001.jpg', 186),
(128, '002.jpg', 187),
(129, '001.jpg', 187),
(130, '002.jpg', 188),
(131, '001.jpg', 188),
(132, '002.jpg', 189),
(133, '001.jpg', 189),
(134, '002.jpg', 190),
(135, '001.jpg', 190),
(136, '002.jpg', 191),
(137, '001.jpg', 191),
(138, '002.jpg', 192),
(139, '001.jpg', 192),
(140, '002.jpg', 193),
(141, '001.jpg', 193),
(142, '002.jpg', 194),
(143, '001.jpg', 194),
(144, '002.jpg', 195),
(145, '001.jpg', 195),
(146, '002.jpg', 196),
(147, '001.jpg', 196),
(148, '002.jpg', 197),
(149, '001.jpg', 197),
(150, '002.jpg', 198),
(151, '001.jpg', 198),
(152, '002.jpg', 199),
(153, '001.jpg', 199),
(154, '024.jpg', 200),
(155, '0023.jpg', 200),
(156, '001.jpg', 200),
(157, '001.jpg', 201),
(158, '001.jpg', 202),
(159, '001.jpg', 203),
(160, '001.jpg', 204),
(161, '001.jpg', 205),
(162, '001.jpg', 206),
(163, '001.jpg', 207),
(164, '001.jpg', 208),
(165, '001.jpg', 209),
(166, '001.jpg', 210),
(167, '001.jpg', 213),
(168, '001.jpg', 214),
(169, '001.jpg', 215),
(170, '001.jpg', 216),
(171, '001.jpg', 217),
(172, '001.jpg', 218),
(173, '001.jpg', 219),
(174, '001.jpg', 220),
(175, '001.jpg', 221),
(176, '002.jpg', 222),
(177, '001.jpg', 222),
(178, '002.jpg', 223),
(179, '001.jpg', 223),
(180, '002.jpg', 224),
(181, '001.jpg', 224),
(182, '002.jpg', 225),
(183, '001.jpg', 225),
(184, '002.jpg', 226),
(185, '001.jpg', 226),
(186, '002.jpg', 227),
(187, '001.jpg', 227),
(188, '002.jpg', 228),
(189, '001.jpg', 228),
(190, '002.jpg', 229),
(191, '001.jpg', 229),
(192, '002.jpg', 230),
(193, '001.jpg', 230),
(194, '002.jpg', 231),
(195, '001.jpg', 231),
(196, '002.jpg', 232),
(197, '001.jpg', 232),
(198, '002.jpg', 233),
(199, '001.jpg', 233),
(200, '001.jpg', 234),
(201, '001.jpg', 235),
(202, '001.jpg', 236),
(203, '002.jpg', 237),
(204, '001.jpg', 237),
(205, '002.jpg', 238),
(206, '001.jpg', 238),
(207, '002.jpg', 239),
(208, '001.jpg', 239),
(209, '002.jpg', 240),
(210, '001.jpg', 240),
(211, '002.jpg', 241),
(212, '001.jpg', 241),
(213, '001.jpg', 242),
(214, '002.jpg', 243),
(215, '001.jpg', 243),
(216, '001.jpg', 244),
(217, '024.jpg', 245),
(218, '0023.jpg', 245),
(219, '001.jpg', 245),
(220, '001.jpg', 246),
(221, '002.jpg', 247),
(222, '001.jpg', 247),
(223, '002.jpg', 248),
(224, '001.jpg', 248),
(225, '002.jpg', 249),
(226, '001.jpg', 249),
(227, '002.jpg', 250),
(228, '001.jpg', 250),
(229, '002.jpg', 251),
(230, '001.jpg', 251),
(231, '002.jpg', 252),
(232, '001.jpg', 252),
(233, '024.jpg', 253),
(234, '0023.jpg', 253),
(235, '001.jpg', 253),
(236, '002.jpg', 254),
(237, '001.jpg', 254),
(238, '002.jpg', 255),
(239, '001.jpg', 255),
(240, '001.jpg', 256),
(241, '002.jpg', 257),
(242, '001.jpg', 257);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `lancamento` tinyint(1) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `id_fabrica` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=258 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `lancamento`, `ativo`, `id_fabrica`) VALUES
(1, 'Mesa LUDO', 1, 1, 1),
(2, 'Mesa Velha', 1, 0, 1),
(4, ' vnvcbn', 0, 1, 1),
(5, 'gfhddfgh', 0, 1, 1),
(6, 'gfhddfgh', 0, 1, 1),
(7, 'hfdghgfd', 0, 1, 1),
(8, 'gfhdfg', 0, 1, 1),
(9, 'dfgdgf', 0, 1, 1),
(10, 'gdsfgf', 0, 1, 1),
(11, 'yuyu', 0, 1, 1),
(12, 'tuyyut', 0, 1, 1),
(13, 'tuyyut', 0, 1, 1),
(14, 'tuyyut', 0, 1, 1),
(15, 'rtyrrewty', 0, 1, 1),
(16, 'ghdfgh', 0, 1, 1),
(17, 'jhgfg', 0, 1, 1),
(18, 'hgfdhfg', 0, 1, 1),
(19, 'gsdfg', 0, 1, 1),
(20, 'fdghgfh', 0, 1, 1),
(21, 'ghfdgh', 0, 1, 1),
(22, 'fghgfh', 0, 1, 1),
(23, 'teste', 0, 1, 1),
(24, 'teste', 0, 1, 1),
(25, 'testeghdfgh', 0, 1, 1),
(26, 'dfgfd', 0, 1, 1),
(27, 'dfgfd', 0, 1, 1),
(28, 'hgghj', 0, 1, 1),
(29, 'hgghj', 0, 1, 1),
(30, 'hgghj', 0, 1, 1),
(31, 'hgghj', 0, 1, 1),
(32, 'hgghj', 0, 1, 1),
(33, 'gfhgfdh', 0, 1, 1),
(34, 'fdghgf', 0, 1, 1),
(35, 'hfdgh', 0, 1, 1),
(36, 'fghf', 0, 1, 1),
(37, 'fghfdgh', 0, 1, 1),
(38, 'fghfdgh', 0, 1, 1),
(39, 'gfhd', 0, 1, 1),
(40, 'gfhd', 0, 1, 1),
(41, 'hgjg', 0, 1, 1),
(42, 'gdsfg', 0, 1, 1),
(43, 'gdsfg', 0, 1, 1),
(44, '', 0, 1, 1),
(45, 'dfghfg', 0, 1, 1),
(46, 'dfghfg', 0, 1, 1),
(47, 'jhghjg', 0, 1, 1),
(48, 'jhghjg', 0, 1, 1),
(49, 'hgfhg', 0, 1, 1),
(50, 'vbnb', 0, 1, 1),
(51, 'fghdgf', 0, 1, 1),
(52, 'hgfghf', 0, 1, 1),
(53, 'hgfghf', 0, 1, 1),
(54, 'hgfghf', 0, 1, 1),
(55, 'dfgfgd', 0, 1, 1),
(56, 'dfgfgd', 0, 1, 1),
(57, 'ggh', 0, 1, 1),
(58, 'ggh', 0, 1, 1),
(59, 'ggh', 0, 1, 1),
(60, 'ghjhgd', 0, 1, 1),
(61, 'fdgh', 0, 1, 1),
(62, 'fdgh', 0, 1, 1),
(63, 'hgffgdh', 0, 1, 1),
(64, 'hgffgdh', 0, 1, 1),
(65, 'dfggsdfg', 0, 1, 1),
(66, 'gsgf', 0, 1, 1),
(67, 'gsgf', 0, 1, 1),
(68, 'ghfhgdgfh', 0, 1, 1),
(69, 'ghfhgdgfh', 0, 1, 1),
(70, 'hfghf', 0, 1, 1),
(71, 'hfghf', 0, 1, 1),
(72, 'hfghf', 0, 1, 1),
(73, 'hfghf', 0, 1, 1),
(74, 'hfghf', 0, 1, 1),
(75, 'hfghf', 0, 1, 1),
(76, 'gfdhw', 0, 1, 1),
(77, 'gfdhw', 0, 1, 1),
(78, 'fgdhgfh', 0, 1, 1),
(79, 'fgdhgfh', 0, 1, 1),
(80, 'fgdhgfh', 0, 1, 1),
(81, 'hfghf', 0, 1, 1),
(82, 'hfghf', 0, 1, 1),
(83, 'hfghf', 0, 1, 1),
(84, 'hfghf', 0, 1, 1),
(85, 'hfghf', 0, 1, 1),
(86, 'hfghf', 0, 1, 1),
(87, 'ghfgh', 0, 1, 1),
(88, 'ghfgh', 0, 1, 1),
(89, 'ghfgh', 0, 1, 1),
(90, 'ghfgh', 0, 1, 1),
(91, 'ghfgh', 0, 1, 1),
(92, 'ghfgh', 0, 1, 1),
(93, 'produto legal', 0, 1, 1),
(94, 'produto legal', 0, 1, 1),
(95, 'gsdfg', 0, 1, 1),
(96, 'gsdfg', 0, 1, 1),
(97, 'gfdhg', 0, 1, 1),
(98, 'gfdhg', 0, 1, 1),
(99, 'gdsfg', 0, 1, 1),
(100, 'gdsfg', 0, 1, 1),
(101, 'gdsfg', 0, 1, 1),
(102, 'gdsfg', 0, 1, 1),
(103, 'hgdfhg', 0, 1, 1),
(104, 'hgdfhg', 0, 1, 1),
(105, 'ghfgdh', 0, 1, 1),
(106, 'ghfgdh', 0, 1, 1),
(107, 'twetr', 0, 1, 1),
(108, 'twetr', 0, 1, 1),
(109, 'fsdgsfdg', 0, 1, 1),
(110, 'fsdgsfdg', 0, 1, 1),
(111, 'produto', 0, 1, 1),
(112, 'produto', 0, 1, 1),
(113, 'fgg', 0, 1, 1),
(114, 'fgg', 0, 1, 1),
(115, 'fghgf', 0, 1, 1),
(116, 'fghgf', 0, 1, 1),
(117, 'hfgdh', 0, 1, 1),
(118, 'hfgdh', 0, 1, 1),
(119, 'dfgdfg', 0, 1, 1),
(120, 'dfgdfg', 0, 1, 1),
(121, 'dfsgdf', 0, 1, 1),
(122, 'dfsgdf', 0, 1, 1),
(123, 'rtyyr', 0, 1, 1),
(124, 'rtyyr', 0, 1, 1),
(125, 'rtyyr', 0, 1, 1),
(126, 'rtyyr', 0, 1, 1),
(127, 'rtyyr', 0, 1, 1),
(128, 'rtyyr', 0, 1, 1),
(129, 'rtyyr', 0, 1, 1),
(130, 'rtyyr', 0, 1, 1),
(131, 'fdgfdg', 0, 1, 1),
(132, 'fdgfdg', 0, 1, 1),
(133, 'dfgdfg', 0, 1, 1),
(134, 'dfgdfg', 0, 1, 1),
(135, 'dfgdfg', 0, 1, 1),
(136, 'dfgdfg', 0, 1, 1),
(137, 'dfgdfg', 0, 1, 1),
(138, 'dfgdfg', 0, 1, 1),
(139, 'dfgdfg', 0, 1, 1),
(140, 'dfgdfg', 0, 1, 1),
(141, 'dfgdfg', 0, 1, 1),
(142, 'dfgdfg', 0, 1, 1),
(143, 'dfgdfg', 0, 1, 1),
(144, 'dfgdfg', 0, 1, 1),
(145, 'tyetry', 0, 1, 1),
(146, 'tyetry', 0, 1, 1),
(147, 'fdghghf', 0, 1, 1),
(148, 'fdghghf', 0, 1, 1),
(149, 'vbnmfnm', 0, 1, 1),
(150, 'vbnmfnm', 0, 1, 1),
(151, 'vbnmfnm', 0, 1, 1),
(152, 'vbnmfnm', 0, 1, 1),
(153, 'vbnmfnm', 0, 1, 1),
(154, 'vbnmfnm', 0, 1, 1),
(155, 'vbnmfnm', 0, 1, 1),
(156, 'vbnmfnm', 0, 1, 1),
(157, 'vbnmfnm', 0, 1, 1),
(158, 'vbnmfnm', 0, 1, 1),
(159, 'vbnmfnm', 0, 1, 1),
(160, 'vbnmfnm', 0, 1, 1),
(161, 'fgdhfh', 0, 1, 1),
(162, 'fgdhfh', 0, 1, 1),
(163, 'hfgdh', 0, 1, 1),
(164, 'hfgdh', 0, 1, 1),
(165, 'fgdhfh', 0, 1, 1),
(166, 'fgdhfh', 0, 1, 1),
(167, 'fgdhfh', 0, 1, 1),
(168, 'fgdhfh', 0, 1, 1),
(169, 'fgdhfh', 0, 1, 1),
(170, 'fgdhfh', 0, 1, 1),
(171, 'fgdhfh', 0, 1, 1),
(172, 'fgdhfh', 0, 1, 1),
(173, 'fgdhfh', 0, 1, 1),
(174, 'fgdhfh', 0, 1, 1),
(175, 'fgdhfh', 0, 1, 1),
(176, 'fgdhfh', 0, 1, 1),
(182, 'Mesa Flower', 0, 1, 1),
(183, 'Mesa Flower', 0, 1, 1),
(184, 'Mesa Flower', 0, 1, 1),
(185, 'mesa native', 0, 1, 1),
(186, 'mesa native', 0, 1, 1),
(187, 'mesa native', 0, 1, 1),
(188, 'mesa native', 0, 1, 1),
(189, 'mesa native', 0, 1, 1),
(190, 'cadeira x', 0, 1, 1),
(191, 'poltrona doris', 1, 1, 1),
(192, 'poltrona doris', 1, 1, 1),
(193, 'poltrona doris', 1, 1, 1),
(194, 'poltrona doris', 1, 1, 1),
(195, 'poltrona doris', 1, 1, 1),
(196, 'poltrona doris', 1, 1, 1),
(197, 'poltrona doris', 1, 1, 1),
(198, 'poltrona doris', 1, 1, 1),
(199, 'fdggfd', 0, 1, 1),
(200, 'adfdf', 0, 1, 1),
(201, 'fhdfdh', 0, 1, 1),
(202, 'rtyyt', 0, 1, 1),
(203, 'hgfh', 0, 1, 1),
(204, 'fdgfd', 0, 1, 1),
(205, 'vbb', 0, 1, 1),
(206, 'vbb', 0, 1, 1),
(207, 'sfdfd', 0, 1, 1),
(208, 'sfdfd', 0, 1, 1),
(209, 'sfdfd', 0, 1, 1),
(210, 'sfdfd', 0, 1, 1),
(211, 'sfdfd', 0, 1, 1),
(212, 'sfdfd', 0, 1, 1),
(213, 'sfdfd', 0, 1, 1),
(214, 'sfdfd', 0, 1, 1),
(215, 'sfdfd', 0, 1, 1),
(216, 'sfdfd', 0, 1, 1),
(217, 'sfdfd', 0, 1, 1),
(218, 'sfdfd', 0, 1, 1),
(219, 'dsfgsdfg', 0, 1, 1),
(220, 'dfsgfdg', 0, 1, 1),
(221, 'dfsgfdg', 0, 1, 1),
(222, 'fgdfg', 0, 1, 1),
(223, 'fgfg', 0, 1, 1),
(224, 'asdfdasf', 0, 1, 1),
(225, 'asdfdasf', 0, 1, 1),
(226, 'mesa ludo', 0, 1, 1),
(227, 'mesa dallas', 0, 1, 1),
(228, 'mesa doida', 0, 1, 1),
(229, 'produto teste', 0, 1, 1),
(230, 'gfhgf', 0, 1, 1),
(231, 'gfhgf', 0, 1, 1),
(232, 'gfhgf', 0, 1, 1),
(233, 'produto que vai funcionar', 0, 1, 1),
(234, 'fdghgf', 0, 1, 1),
(235, 'fdghgf', 0, 1, 1),
(236, 'fdghgf', 0, 1, 1),
(237, 'gfhh', 0, 1, 1),
(238, 'fgdhf', 0, 1, 1),
(239, 'fgdasfg', 0, 1, 1),
(240, 'fgdasfg', 0, 1, 1),
(241, 'gdfgf', 0, 1, 1),
(242, 'dhgfhgf', 0, 1, 1),
(243, 'ghjhgj', 0, 1, 1),
(244, 'gfgdf', 0, 1, 1),
(245, 'fgfgd', 0, 1, 1),
(246, 'hfdghg', 0, 1, 1),
(247, 'hgfghf', 0, 1, 1),
(248, 'hgfghf', 0, 1, 1),
(249, 'fhggfh', 0, 1, 1),
(250, '', 0, 1, 1),
(251, 'hfgh', 0, 1, 1),
(252, 'hfgh', 0, 1, 1),
(253, 'dfgsdg', 0, 1, 1),
(254, 'ryty', 0, 1, 1),
(255, 'tryrty', 0, 1, 1),
(256, 'dgfgfsd', 0, 1, 1),
(257, 'sdfsadf', 0, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_caracteristica`
--

CREATE TABLE IF NOT EXISTS `produto_caracteristica` (
  `id_produto` bigint(20) NOT NULL,
  `id_caracteristica` bigint(20) NOT NULL,
  PRIMARY KEY (`id_produto`,`id_caracteristica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto_caracteristica`
--

INSERT INTO `produto_caracteristica` (`id_produto`, `id_caracteristica`) VALUES
(189, 1),
(189, 2),
(190, 1),
(190, 2),
(191, 1),
(191, 2),
(192, 1),
(192, 2),
(193, 1),
(193, 2),
(194, 1),
(194, 2),
(195, 1),
(195, 2),
(196, 1),
(196, 2),
(197, 1),
(197, 2),
(198, 1),
(198, 2),
(199, 1),
(199, 2),
(200, 1),
(200, 2),
(201, 1),
(201, 2),
(202, 1),
(202, 2),
(203, 1),
(203, 2),
(204, 1),
(204, 2),
(205, 1),
(205, 2),
(206, 1),
(206, 2),
(207, 1),
(207, 2),
(208, 1),
(208, 2),
(209, 1),
(209, 2),
(210, 1),
(210, 2),
(211, 1),
(211, 2),
(212, 1),
(212, 2),
(213, 1),
(213, 2),
(214, 1),
(214, 2),
(215, 1),
(215, 2),
(216, 1),
(216, 2),
(217, 1),
(217, 2),
(218, 1),
(218, 2),
(219, 1),
(219, 2),
(220, 1),
(220, 2),
(221, 1),
(221, 2),
(222, 1),
(222, 2),
(223, 1),
(223, 2),
(224, 1),
(224, 2),
(225, 1),
(225, 2),
(226, 1),
(226, 2),
(227, 1),
(227, 2),
(228, 2),
(229, 2),
(230, 1),
(230, 2),
(231, 1),
(231, 2),
(232, 1),
(232, 2),
(233, 1),
(233, 2),
(234, 2),
(235, 2),
(236, 2),
(237, 2),
(238, 2),
(239, 2),
(240, 2),
(241, 2),
(242, 2),
(243, 2),
(244, 2),
(245, 2),
(246, 2),
(247, 2),
(248, 2),
(249, 2),
(250, 2),
(251, 2),
(252, 2),
(253, 2),
(254, 2),
(255, 2),
(256, 2),
(257, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_categoria`
--

CREATE TABLE IF NOT EXISTS `produto_categoria` (
  `id_produto` bigint(20) NOT NULL,
  `id_categoria` bigint(20) NOT NULL,
  PRIMARY KEY (`id_produto`,`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto_categoria`
--

INSERT INTO `produto_categoria` (`id_produto`, `id_categoria`) VALUES
(0, 2),
(1, 1),
(1, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 2),
(74, 2),
(75, 2),
(76, 2),
(77, 2),
(78, 2),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(83, 2),
(84, 2),
(85, 2),
(86, 2),
(87, 2),
(88, 2),
(89, 2),
(90, 2),
(91, 2),
(92, 2),
(93, 2),
(94, 2),
(95, 2),
(96, 2),
(97, 2),
(98, 2),
(99, 2),
(100, 2),
(101, 2),
(102, 2),
(103, 2),
(104, 2),
(105, 2),
(106, 2),
(107, 2),
(108, 2),
(109, 2),
(110, 2),
(111, 2),
(112, 2),
(113, 2),
(114, 2),
(115, 2),
(116, 2),
(117, 2),
(118, 2),
(119, 2),
(120, 2),
(121, 2),
(122, 2),
(123, 2),
(124, 2),
(125, 2),
(126, 2),
(127, 2),
(128, 2),
(129, 2),
(130, 2),
(131, 2),
(132, 2),
(133, 2),
(134, 2),
(135, 2),
(136, 2),
(137, 2),
(138, 2),
(139, 2),
(140, 2),
(141, 2),
(142, 2),
(143, 2),
(144, 2),
(145, 2),
(146, 2),
(147, 2),
(148, 2),
(149, 2),
(150, 2),
(151, 2),
(152, 2),
(153, 2),
(154, 2),
(155, 2),
(156, 2),
(157, 2),
(158, 2),
(159, 2),
(160, 2),
(163, 2),
(164, 2),
(171, 1),
(171, 2),
(172, 1),
(172, 2),
(173, 1),
(173, 2),
(174, 1),
(174, 2),
(175, 1),
(175, 2),
(176, 1),
(176, 2),
(183, 1),
(183, 2),
(184, 1),
(184, 2),
(185, 1),
(185, 2),
(186, 1),
(186, 2),
(187, 1),
(187, 2),
(188, 1),
(188, 2),
(189, 1),
(189, 2),
(190, 1),
(190, 2),
(191, 1),
(191, 2),
(192, 1),
(192, 2),
(193, 1),
(193, 2),
(194, 1),
(194, 2),
(195, 1),
(195, 2),
(196, 1),
(196, 2),
(197, 1),
(197, 2),
(198, 1),
(198, 2),
(199, 1),
(199, 2),
(200, 1),
(200, 2),
(201, 1),
(201, 2),
(202, 1),
(202, 2),
(203, 1),
(203, 2),
(204, 1),
(204, 2),
(205, 1),
(205, 2),
(206, 1),
(206, 2),
(207, 1),
(207, 2),
(208, 1),
(208, 2),
(209, 1),
(209, 2),
(210, 1),
(210, 2),
(211, 1),
(211, 2),
(212, 1),
(212, 2),
(213, 1),
(213, 2),
(214, 1),
(214, 2),
(215, 1),
(215, 2),
(216, 1),
(216, 2),
(217, 1),
(217, 2),
(218, 1),
(218, 2),
(219, 1),
(219, 2),
(220, 1),
(220, 2),
(221, 1),
(221, 2),
(222, 1),
(222, 2),
(223, 1),
(223, 2),
(224, 1),
(224, 2),
(225, 1),
(225, 2),
(227, 1),
(228, 2),
(229, 2),
(230, 2),
(231, 2),
(232, 2),
(233, 2),
(234, 2),
(235, 2),
(236, 2),
(237, 2),
(238, 2),
(239, 2),
(240, 2),
(241, 2),
(242, 2),
(243, 2),
(244, 2),
(245, 2),
(246, 2),
(247, 2),
(248, 2),
(249, 2),
(250, 2),
(251, 2),
(252, 2),
(253, 2),
(254, 2),
(255, 2),
(256, 2),
(257, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_foto_caracteristica`
--

CREATE TABLE IF NOT EXISTS `produto_foto_caracteristica` (
  `id_foto` bigint(20) NOT NULL,
  `id_produto` bigint(20) NOT NULL,
  PRIMARY KEY (`id_foto`,`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto_foto_caracteristica`
--

INSERT INTO `produto_foto_caracteristica` (`id_foto`, `id_produto`) VALUES
(1, 185),
(1, 186),
(1, 187),
(1, 188),
(1, 189),
(1, 190),
(1, 191),
(1, 192),
(1, 193),
(1, 194),
(1, 195),
(1, 196),
(1, 197),
(1, 225),
(1, 226),
(1, 227),
(1, 230),
(1, 231),
(1, 232),
(1, 233),
(2, 185),
(2, 186),
(2, 187),
(2, 188),
(2, 189),
(2, 190),
(2, 191),
(2, 192),
(2, 193),
(2, 194),
(2, 195),
(2, 196),
(2, 197),
(2, 225),
(2, 226),
(2, 227),
(2, 230),
(2, 231),
(2, 232),
(2, 233);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_subcategoria`
--

CREATE TABLE IF NOT EXISTS `produto_subcategoria` (
  `id_produto` bigint(20) NOT NULL,
  `id_subcategoria` bigint(20) NOT NULL,
  PRIMARY KEY (`id_produto`,`id_subcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto_subcategoria`
--

INSERT INTO `produto_subcategoria` (`id_produto`, `id_subcategoria`) VALUES
(1, 1),
(1, 2),
(233, 2),
(242, 2),
(247, 2),
(248, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `id_categoria` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `nome`, `id_categoria`) VALUES
(1, 'Mesa de Jantar', 1),
(2, 'Cadeira de Madeira', 2),
(3, 'Aparador de aluminio ', 10),
(4, 'Aparador de tela ', 10),
(5, 'X1 ', 12),
(6, 'X2 ', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `valor`
--

CREATE TABLE IF NOT EXISTS `valor` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `id_caracteristica` bigint(20) NOT NULL,
  `id_produto` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Extraindo dados da tabela `valor`
--

INSERT INTO `valor` (`id`, `nome`, `id_caracteristica`, `id_produto`) VALUES
(42, 'sdfdsf ', 2, 213),
(43, 'sdfdsf ', 2, 214),
(44, 'sdfdsf ', 2, 215),
(45, 'sdfdsf ', 2, 216),
(46, 'sdfdsf ', 2, 217),
(47, 'sdfdsf ', 2, 218),
(48, 'fdgdfg ', 2, 219),
(49, 'gfdsg ', 2, 220),
(50, 'gfdsg ', 2, 221),
(51, 'dfgfg ', 2, 222),
(52, 'fgdsdfg ', 2, 223),
(53, 'sdafsdaf ', 2, 224),
(54, 'sdafsdaf ', 2, 225),
(55, '1,60 ', 2, 226),
(56, '1,50 ', 2, 226),
(57, '1,60 ', 2, 227),
(58, '1,50 ', 2, 227),
(59, 'retrt ', 2, 228),
(60, '1,60 ', 2, 229),
(61, '1,50 ', 2, 229),
(62, '1,60 ', 2, 230),
(63, '1,50 ', 2, 230),
(64, '1,60 ', 2, 231),
(65, '1,50 ', 2, 231),
(66, '1,60 ', 2, 232),
(67, '1,50 ', 2, 232),
(68, '1,30 ', 2, 233),
(69, '1,20 ', 2, 233),
(70, 'hfgh ', 2, 234),
(71, 'hfgh ', 2, 235),
(72, 'hfgh ', 2, 236),
(73, 'fghgfh ', 2, 237),
(74, 'fghgfdh ', 2, 238),
(75, 'fsafg ', 2, 239),
(76, 'fsafg ', 2, 240),
(77, 'fgdfs ', 2, 241),
(78, 'ghdfgh ', 2, 242),
(79, 'jfghj ', 2, 243),
(80, 'fggfd ', 2, 244),
(81, 'fgfds ', 2, 245),
(82, 'fghfh ', 2, 246),
(83, 'hgfhg ', 2, 247),
(84, 'hgfhg ', 2, 248),
(85, 'hgfgh ', 2, 249),
(86, 'hgfgh ', 2, 250),
(87, 'fhgdfgh ', 2, 251),
(88, 'fhgdfgh ', 2, 252),
(89, 'gfgfds ', 2, 253),
(90, 'rytery ', 2, 254),
(91, 'fghfgh ', 2, 255),
(92, 'gdfsgf ', 2, 256),
(93, 'dfadsf ', 2, 257);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
