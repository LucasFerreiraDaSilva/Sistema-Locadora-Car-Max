-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Out-2022 às 03:51
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(255) NOT NULL,
  `telefone` int(25) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cpf` int(12) NOT NULL,
  `rg` int(12) NOT NULL,
  `veiculo` varchar(30) NOT NULL,
  `valor` int(25) NOT NULL,
  `retirada` date NOT NULL,
  `devolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `telefone`, `endereco`, `cpf`, `rg`, `veiculo`, `valor`, `retirada`, `devolucao`) VALUES
('Francisco Everardo Tiririca Oliveira Silva', 1147851236, 'rua florentina ', 456789023, 12345698, 'Brasília ', 400, '2022-10-12', '2022-11-12'),
('Celso Russomanno ', 11478235, 'rua em defesa do consumidor', 456789222, 123455, 'Jeep Renegade', 1800, '2022-10-21', '2022-01-14'),
('Vin Diesel ', 2147483647, 'HollyWood', 465845221, 54786542, 'Bugatti Chiron', 100000, '2022-10-26', '2023-01-31'),
('Albert Einstein', 946127845, 'rua copacabana ', 513785469, 136452784, 'jetta', 1300, '2022-10-11', '2022-12-14'),
('Bruna Marquezine', 1176455123, 'brasilandia', 551236784, 46511234, 'Porshe Panámera ', 14000, '2022-10-18', '2022-12-23'),
('Jair Bolsonaro', 997894561, 'Rua Antônio de souza', 551364784, 465128455, 'Golf GTI', 1500, '2022-10-19', '2022-01-15'),
('gretchen Miranda', 116788456, 'morro do dendê', 654123785, 12365498, 'land rover evoque', 3500, '2022-10-13', '2022-11-30'),
('pablo escobar', 2147483647, 'rua bolivia', 2147483647, 456775541, 'porshe 911', 750000, '2022-10-18', '2023-12-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
