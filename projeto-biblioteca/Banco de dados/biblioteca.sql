-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jun-2019 às 02:31
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `numero_matricula` varchar(14) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `nome`, `sobrenome`, `numero_matricula`, `email`, `senha`) VALUES
(1, 'admin', 'admin', '123456', 'admin@admin.com', '$2y$10$.zpo6cUeS1e9cXTEKSC94.rB5bioqceBbxHI5d0EjlJ6i/QZBOFOO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bibliotecario`
--

CREATE TABLE `bibliotecario` (
  `idbibliotecario` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bibliotecario`
--

INSERT INTO `bibliotecario` (`idbibliotecario`, `nome`, `sobrenome`, `email`, `senha`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '$2y$10$Sm43JJT2srz5JZq3qZzbTektud7JWCJyL9WVgrT/dz3iqW2MnkEYy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `idlivro` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `livro_disponivel` varchar(3) DEFAULT 'sim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`idlivro`, `nome`, `autor`, `data`, `livro_disponivel`) VALUES
(6, 'ano do pensamento mágico', 'Joan Didion', '2004-06-01', 'sim'),
(7, 'A revolução dos bichos', 'George Orwell', '1945-02-13', 'sim'),
(8, 'A Arte Subtil de Saber Dizer que se F*da', 'Mark Manson', '2018-03-12', 'sim'),
(10, 'O dilema do porco-espinho', 'Leandro Karnal', '2016-05-06', 'sim'),
(11, 'Em Busca do Tempo Perdido', 'Marcel Proust', '1999-06-01', 'sim'),
(12, 'Felicidade Clandestina', 'Clarice Lispector', '1971-11-06', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `idreserva` int(11) NOT NULL,
  `idaluno` int(12) NOT NULL,
  `idlivro` int(12) NOT NULL,
  `nome_aluno` varchar(45) NOT NULL,
  `nome_livro` varchar(45) NOT NULL,
  `autor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`);

--
-- Indexes for table `bibliotecario`
--
ALTER TABLE `bibliotecario`
  ADD PRIMARY KEY (`idbibliotecario`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`idlivro`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idreserva`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bibliotecario`
--
ALTER TABLE `bibliotecario`
  MODIFY `idbibliotecario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `idlivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
