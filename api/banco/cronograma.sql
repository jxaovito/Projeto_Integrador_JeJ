-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 03/10/2023 às 16:32
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cronograma`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `cod_admin` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administrador`
--

INSERT INTO `administrador` (`cod_admin`, `nome`, `email`, `senha`) VALUES
(1, 'teste', 'teste', 'xxx'),
(2, 'joao', 'teste@teste.com', 'xxx');

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `cod_aluno` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `calendario`
--

CREATE TABLE `calendario` (
  `cod_calendario` int(11) NOT NULL,
  `dia` date NOT NULL,
  `cor` int(11) NOT NULL,
  `horario_ini` time NOT NULL,
  `horario_fim` time NOT NULL,
  `cod_curso` int(11) NOT NULL,
  `cod_disciplina` int(11) NOT NULL,
  `cod_professor` int(11) NOT NULL,
  `cod_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `calendario`
--

INSERT INTO `calendario` (`cod_calendario`, `dia`, `cor`, `horario_ini`, `horario_fim`, `cod_curso`, `cod_disciplina`, `cod_professor`, `cod_turma`) VALUES
(4, '2023-10-19', 0, '09:20:00', '13:00:00', 2, 4, 2, 2),
(5, '2023-10-02', 0, '06:54:00', '08:59:00', 2, 5, 2, 2),
(6, '2023-10-06', 0, '05:34:00', '09:59:00', 2, 6, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `curso`
--

INSERT INTO `curso` (`cod_curso`, `nome`, `periodo`) VALUES
(2, 'ADS', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `cod_disciplina` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cor` varchar(255) NOT NULL,
  `cod_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `disciplina`
--

INSERT INTO `disciplina` (`cod_disciplina`, `nome`, `cor`, `cod_curso`) VALUES
(1, 'Sistemas computacionais e segurança', '0', 1),
(4, 'Banco de dados', 'brown', 2),
(5, 'Sistemas computacionais e segurança', 'red', 2),
(6, 'Ambientes computacioais', 'pink', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `feriado`
--

CREATE TABLE `feriado` (
  `cod_feriado` int(11) NOT NULL,
  `data_feriado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `feriado`
--

INSERT INTO `feriado` (`cod_feriado`, `data_feriado`) VALUES
(1, '2023-10-12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor`
--

CREATE TABLE `professor` (
  `cod_professor` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cod_curso` int(11) NOT NULL,
  `cod_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `professor`
--

INSERT INTO `professor` (`cod_professor`, `nome`, `cod_curso`, `cod_turma`) VALUES
(1, 'Marcelo Petri', 1, 1),
(2, 'Marcelo Petri', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

CREATE TABLE `turma` (
  `cod_turma` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cod_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `turma`
--

INSERT INTO `turma` (`cod_turma`, `nome`, `cod_curso`) VALUES
(2, 'B301', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cod_admin`);

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`cod_aluno`);

--
-- Índices de tabela `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`cod_calendario`);

--
-- Índices de tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Índices de tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`cod_disciplina`);

--
-- Índices de tabela `feriado`
--
ALTER TABLE `feriado`
  ADD PRIMARY KEY (`cod_feriado`);

--
-- Índices de tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`cod_professor`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`cod_turma`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `cod_aluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `calendario`
--
ALTER TABLE `calendario`
  MODIFY `cod_calendario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `cod_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `cod_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `feriado`
--
ALTER TABLE `feriado`
  MODIFY `cod_feriado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `cod_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `cod_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
