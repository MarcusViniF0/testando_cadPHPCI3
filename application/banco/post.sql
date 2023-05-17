-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Maio-2023 às 22:47
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tuiter`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `msg` varchar(140) COLLATE latin1_general_ci NOT NULL,
  `datahora` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `data_nascimento` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `faculdade` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `semestre` int(11) NOT NULL,
  `presenca` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `atividades_hoje` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `msg`, `datahora`, `email`, `data_nascimento`, `faculdade`, `semestre`, `presenca`, `atividades_hoje`) VALUES
(1, 'olá mundo! criando um novo tuit!!!', '2023-05-16 14:14:13', '', '', '', 0, '', ''),
(2, 'novo dado', '2023-05-16 15:07:53', '', '', '', 0, '', ''),
(3, 'Novo código mãe.', '2023-05-16 16:54:39', '', '', '', 0, '', ''),
(4, '', '2023-05-17 14:20:19', '', '', '', 0, '', ''),
(5, 'asafsafsfas', '2023-05-17 19:47:31', '', '', '', 0, '', ''),
(6, 'fddfssdfdsf', '2023-05-17 19:48:27', '', '', '', 0, '', ''),
(7, '', '2023-05-17 19:56:51', '', '', '', 0, '', 'adsadsdas'),
(8, '', '2023-05-17 20:07:28', '', '', '', 0, '', '85151'),
(9, '', '2023-05-17 20:09:39', '', '', '', 0, '', 'asddsasda'),
(10, '', '2023-05-17 20:18:45', '', '', '', 0, '', 'jhghjj'),
(11, '', '2023-05-17 20:28:54', '', '', '', 0, '', 'cscsc'),
(12, '', '2023-05-17 20:30:46', '', '', '', 0, '', 'gdddsdgd');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
