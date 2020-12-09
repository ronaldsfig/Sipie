-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2020 às 03:24
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sipie`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` enum('Masculino','Feminino') NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `instituicao` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `nome`, `data_nascimento`, `genero`, `usuario`, `senha`, `instituicao`, `turma`, `email`, `data_cadastro`) VALUES
(11, 'testealuno', '2002-11-07', 'Feminino', '123aluno', '710deabdbea4cb2f791c67b6c40830b9', 1, 3, 'email@email.com', '2020-05-22 01:19:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chave`
--

CREATE TABLE `chave` (
  `chave` char(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` enum('Masculino','Feminino') NOT NULL,
  `perm` tinyint(1) NOT NULL,
  `instituicao` int(11) NOT NULL,
  `turma` int(11) DEFAULT NULL,
  `disciplina` int(11) DEFAULT NULL,
  `turmaprof` set('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `idinstituicao` int(11) NOT NULL,
  `instituicao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`idinstituicao`, `instituicao`) VALUES
(1, 'Colégio e Escola Técnica Triângulo'),
(2, 'Colégio Santa Mônica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leciona`
--

CREATE TABLE `leciona` (
  `idprofessor` int(11) NOT NULL,
  `idturma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `leciona`
--

INSERT INTO `leciona` (`idprofessor`, `idturma`) VALUES
(5, 1),
(5, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `iddisciplina` int(11) NOT NULL,
  `disciplina` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`iddisciplina`, `disciplina`) VALUES
(1, 'Português'),
(2, 'Matemática'),
(3, 'História'),
(4, 'Geografia'),
(5, 'Física'),
(6, 'Química'),
(7, 'Biologia'),
(8, 'Redação'),
(9, 'Literatura'),
(10, 'Inglês'),
(11, 'Filosofia'),
(12, 'Sociologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas1tri`
--

CREATE TABLE `notas1tri` (
  `id` int(11) NOT NULL,
  `idaluno` int(11) NOT NULL,
  `av` enum('1','2') NOT NULL,
  `portugues` decimal(3,1) DEFAULT NULL,
  `matematica` decimal(3,1) DEFAULT NULL,
  `historia` decimal(3,1) DEFAULT NULL,
  `geografia` decimal(3,1) DEFAULT NULL,
  `fisica` decimal(3,1) DEFAULT NULL,
  `quimica` decimal(3,1) DEFAULT NULL,
  `biologia` decimal(3,1) DEFAULT NULL,
  `redacao` decimal(3,1) DEFAULT NULL,
  `literatura` decimal(3,1) DEFAULT NULL,
  `ingles` decimal(3,1) DEFAULT NULL,
  `filosofia` decimal(3,1) DEFAULT NULL,
  `sociologia` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notas1tri`
--

INSERT INTO `notas1tri` (`id`, `idaluno`, `av`, `portugues`, `matematica`, `historia`, `geografia`, `fisica`, `quimica`, `biologia`, `redacao`, `literatura`, `ingles`, `filosofia`, `sociologia`) VALUES
(1, 11, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 11, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas2tri`
--

CREATE TABLE `notas2tri` (
  `id` int(11) NOT NULL,
  `idaluno` int(11) NOT NULL,
  `av` enum('1','2') NOT NULL,
  `portugues` decimal(3,1) DEFAULT NULL,
  `matematica` decimal(3,1) DEFAULT NULL,
  `historia` decimal(3,1) DEFAULT NULL,
  `geografia` decimal(3,1) DEFAULT NULL,
  `fisica` decimal(3,1) DEFAULT NULL,
  `quimica` decimal(3,1) DEFAULT NULL,
  `biologia` decimal(3,1) DEFAULT NULL,
  `redacao` decimal(3,1) DEFAULT NULL,
  `literatura` decimal(3,1) DEFAULT NULL,
  `ingles` decimal(3,1) DEFAULT NULL,
  `filosofia` decimal(3,1) DEFAULT NULL,
  `sociologia` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notas2tri`
--

INSERT INTO `notas2tri` (`id`, `idaluno`, `av`, `portugues`, `matematica`, `historia`, `geografia`, `fisica`, `quimica`, `biologia`, `redacao`, `literatura`, `ingles`, `filosofia`, `sociologia`) VALUES
(1, 11, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 11, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas3tri`
--

CREATE TABLE `notas3tri` (
  `id` int(11) NOT NULL,
  `idaluno` int(11) NOT NULL,
  `av` enum('1','2') NOT NULL,
  `portugues` decimal(3,1) DEFAULT NULL,
  `matematica` decimal(3,1) DEFAULT NULL,
  `historia` decimal(3,1) DEFAULT NULL,
  `geografia` decimal(3,1) DEFAULT NULL,
  `fisica` decimal(3,1) DEFAULT NULL,
  `quimica` decimal(3,1) DEFAULT NULL,
  `biologia` decimal(3,1) DEFAULT NULL,
  `redacao` decimal(3,1) DEFAULT NULL,
  `literatura` decimal(3,1) DEFAULT NULL,
  `ingles` decimal(3,1) DEFAULT NULL,
  `filosofia` decimal(3,1) DEFAULT NULL,
  `sociologia` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notas3tri`
--

INSERT INTO `notas3tri` (`id`, `idaluno`, `av`, `portugues`, `matematica`, `historia`, `geografia`, `fisica`, `quimica`, `biologia`, `redacao`, `literatura`, `ingles`, `filosofia`, `sociologia`) VALUES
(1, 11, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 11, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id` int(11) NOT NULL,
  `aluno` varchar(100) NOT NULL,
  `professor` varchar(100) NOT NULL,
  `disciplina` char(50) NOT NULL,
  `motivo` text NOT NULL,
  `data_ocorrencia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `idprofessor` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` enum('Masculino','Feminino') NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `instituicao` int(11) NOT NULL,
  `disciplina` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`idprofessor`, `nome`, `data_nascimento`, `genero`, `usuario`, `senha`, `instituicao`, `disciplina`, `email`, `data_cadastro`) VALUES
(5, 'testeprofessor', '1970-04-11', 'Masculino', '123prof', 'ce454ee18712073c24db2aacbc0dc057', 1, 3, 'email@email.com', '2020-05-22 01:16:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `idturma` int(11) NOT NULL,
  `turma` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`idturma`, `turma`) VALUES
(1, '1º Ano do Ensino Médio'),
(2, '2º Ano do Ensino Médio'),
(3, '3º Ano do Ensino Médio'),
(4, '6º Ano do Ensino Fundamental'),
(5, '7º Ano do Ensino Fundamental'),
(6, '8º Ano do Ensino Fundamental'),
(7, '9º Ano do Ensino Fundamental');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`);

--
-- Índices para tabela `chave`
--
ALTER TABLE `chave`
  ADD PRIMARY KEY (`chave`);

--
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`idinstituicao`);

--
-- Índices para tabela `leciona`
--
ALTER TABLE `leciona`
  ADD KEY `idprofessor` (`idprofessor`),
  ADD KEY `idturma` (`idturma`);

--
-- Índices para tabela `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`iddisciplina`);

--
-- Índices para tabela `notas1tri`
--
ALTER TABLE `notas1tri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idaluno` (`idaluno`);

--
-- Índices para tabela `notas2tri`
--
ALTER TABLE `notas2tri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idaluno` (`idaluno`);

--
-- Índices para tabela `notas3tri`
--
ALTER TABLE `notas3tri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idaluno` (`idaluno`);

--
-- Índices para tabela `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`idprofessor`),
  ADD KEY `disciplina` (`disciplina`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idturma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `idinstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `iddisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `notas1tri`
--
ALTER TABLE `notas1tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `notas2tri`
--
ALTER TABLE `notas2tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `notas3tri`
--
ALTER TABLE `notas3tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `idprofessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `idturma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `leciona`
--
ALTER TABLE `leciona`
  ADD CONSTRAINT `leciona_ibfk_1` FOREIGN KEY (`idprofessor`) REFERENCES `professor` (`idprofessor`),
  ADD CONSTRAINT `leciona_ibfk_2` FOREIGN KEY (`idturma`) REFERENCES `turma` (`idturma`);

--
-- Limitadores para a tabela `notas1tri`
--
ALTER TABLE `notas1tri`
  ADD CONSTRAINT `notas1tri_ibfk_1` FOREIGN KEY (`idaluno`) REFERENCES `aluno` (`idaluno`);

--
-- Limitadores para a tabela `notas2tri`
--
ALTER TABLE `notas2tri`
  ADD CONSTRAINT `notas2tri_ibfk_1` FOREIGN KEY (`idaluno`) REFERENCES `aluno` (`idaluno`);

--
-- Limitadores para a tabela `notas3tri`
--
ALTER TABLE `notas3tri`
  ADD CONSTRAINT `notas3tri_ibfk_1` FOREIGN KEY (`idaluno`) REFERENCES `aluno` (`idaluno`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`disciplina`) REFERENCES `materia` (`iddisciplina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
