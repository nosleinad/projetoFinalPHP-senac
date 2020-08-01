-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Ago-2020 às 20:36
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `pkcategoria` int(11) NOT NULL,
  `desc_cat` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`pkcategoria`, `desc_cat`) VALUES
(4, 'Gestao'),
(6, 'Tecnologia da Informacao'),
(8, 'Informatica'),
(22, 'SeguranÃ§a do Trabalho'),
(23, 'Gastronomia ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `pkcurso` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `valor` float NOT NULL,
  `status` tinyint(4) NOT NULL,
  `fkcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`pkcurso`, `titulo`, `descricao`, `valor`, `status`, `fkcategoria`) VALUES
(4, 'AdministraÃ§Ã£o de FinanÃ§as Pessoais', 'Empreendedores, investidores, gestores, administradores, gerentes de projetos, profissionais que atuam na Ã¡rea de finanÃ§as\r\n', 522.25, 1, 4),
(5, 'Assistente Administrativo', 'Executam serviÃ§os de apoio nas Ã¡reas de recursos humanos, administraÃ§Ã£o, finanÃ§as e logÃ­stica; \r\natendem fornecedores e clientes fornecendo e recebendo informaÃ§Ãµes sobre produtos e serviÃ§os; tratam de documentos variados, cumprindo todo o procedimento\r\n', 1250.25, 1, 4),
(6, 'Assistente Administrativo - Aprend. ECT', 'Executam atividades de rotinas administrativas, organizaÃ§Ã£o de documentos e apoio logÃ­stico no ambiente de trabalho da empresa, \r\nseguindo legislaÃ§Ã£o, normas internas e procedimentos tÃ©cnicos, de qualidade, saÃºde, seguranÃ§a e meio ambiente\r\n', 854.32, 1, 4),
(8, 'TÃ©cnico em SeguranÃ§a do Trabalho', 'Habilitar profissionais com competÃªncias em OrientaÃ§Ã£o e CoordenaÃ§Ã£o de Sistema de SeguranÃ§a do Trabalho, \r\ninvestigando riscos e causas de acidentes, analisando esquemas de prevenÃ§Ã£o para garantir a integridade do pessoal e dos bens da empresa\r\n', 158.65, 1, 22),
(9, 'Bombeiro VoluntÃ¡rio NBR -14276', 'Previnem situaÃ§Ãµes de risco e executam salvamentos terrestres, aquÃ¡ticos e em altura, \r\nprotegendo pessoas e patrimÃ´nios de incÃªndios, explosÃµes, vazamentos, afogamentos ou qualquer \r\noutra situaÃ§Ã£o de emergÃªncia, com o objetivo de salvar e resgatar vidas', 2563.25, 1, 22),
(10, 'NoÃ§Ãµes de Primeiros Socorros', 'Atuar em Atendimento PrÃ©-Hospitalar, afim de identificar a situaÃ§Ã£o do paciente e acompanhar o quadro de saÃºde, \r\nevitando agravamento, e mantendo o paciente vivo atÃ© a chegada de socorro especializado', 2548.32, 1, 22),
(11, 'Administrador de Banco de Dados - SQL Server', 'Planeja, implementa, administra e realiza manutenÃ§Ã£o em servidores de banco de dados. \r\nDocumenta todas as etapas do processo. Aplica polÃ­ticas de seguranÃ§a da informaÃ§Ã£o para banco de dados, segundo procedimentos tÃ©cnicos de qualidade\r\n', 2586.32, 1, 6),
(12, 'Auxiliar de Programador de Sistemas', 'Desenvolvem sistemas e aplicaÃ§Ãµes, determinando interface grÃ¡fica, critÃ©rios ergonÃ´micos de navegaÃ§Ã£o, \r\nmontagem da estrutura de banco de dados e codificaÃ§Ã£o de programas; projetam, implantam e realizam manutenÃ§Ã£o de sistemas e aplicaÃ§Ãµes\r\n', 1587.52, 1, 6),
(13, 'Cabeamento Estruturado', 'Planejam, constroem redes de telecomunicaÃ§Ã£o, rede de comunicaÃ§Ã£o de dados. \r\nInstalam equipamentos e localizam defeitos. O trabalho Ã© realizado sob supervisÃ£o permanente de supervisores, tÃ©cnicos e engenheiros\r\n', 2541.25, 1, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `pkinscricao` int(11) NOT NULL,
  `nome_aluno` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `mensagem` varchar(300) DEFAULT NULL,
  `data` date NOT NULL,
  `fkcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`pkinscricao`, `nome_aluno`, `email`, `fone`, `mensagem`, `data`, `fkcurso`) VALUES
(4, 'Fernando Luiz de Souza', 'fernado@email.com', '3355-8952', 'GOstaria de participar', '2020-07-02', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `pkusuario` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `login` varchar(80) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`pkusuario`, `nome`, `login`, `senha`) VALUES
(100, 'Administrador', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`pkcategoria`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`pkcurso`),
  ADD KEY `fk_curso_categoria_idx` (`fkcategoria`);

--
-- Indexes for table `inscricao`
--
ALTER TABLE `inscricao`
  ADD PRIMARY KEY (`pkinscricao`),
  ADD KEY `fk_incricao_curso1_idx` (`fkcurso`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`pkusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `pkcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `pkcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `inscricao`
--
ALTER TABLE `inscricao`
  MODIFY `pkinscricao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `pkusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_curso_categoria` FOREIGN KEY (`fkcategoria`) REFERENCES `categoria` (`pkcategoria`);

--
-- Limitadores para a tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD CONSTRAINT `fk_incricao_curso1` FOREIGN KEY (`fkcurso`) REFERENCES `curso` (`pkcurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
