-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Mar-2025 às 22:18
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_carros`
--
CREATE DATABASE IF NOT EXISTS `db_carros` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_carros`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `MARCA` varchar(50) NOT NULL,
  `ANO` year(4) NOT NULL,
  `POTENCIA` mediumint(9) NOT NULL,
  `PESO` mediumint(9) NOT NULL,
  `INCLUSAO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`ID`, `NOME`, `MARCA`, `ANO`, `POTENCIA`, `PESO`, `INCLUSAO`) VALUES
(6, 'Viper GTS', 'Dodge', '1999', 449, 1569, '2025-03-21'),
(7, 'Impreza Sedan WRX', 'Subaru', '2000', 282, 1431, '2025-03-28'),
(10, 'Cerbera Speed 12', 'TVR', '2000', 799, 1020, '2025-03-28'),
(11, '120i', 'BMW', '2004', 147, 1335, '2025-03-28'),
(12, 'GT', 'Ford', '2005', 550, 1451, '2025-03-28'),
(13, 'NSX Type S Zero', 'Honda', '1997', 280, 1270, '2025-03-28'),
(14, 'LIFE STEP VAN', 'Honda', '1972', 27, 606, '2025-03-28'),
(15, '2CV Type A', 'Citroën', '1954', 14, 494, '2025-03-28'),
(16, 'Corvette GRAND SPORT', 'Chevrolet', '1996', 331, 1496, '2025-03-28'),
(17, 'Camaro SS', 'Chevrolet', '1969', 293, 1401, '2025-03-28'),
(18, 'SSR', 'Chevrolet', '2003', 285, 2248, '2025-03-28'),
(19, 'DB7 Vantage', 'Aston Martin', '2000', 413, 1775, '2025-03-28'),
(20, 'TT 1.8T', 'Audi', '2000', 216, 1395, '2025-03-28'),
(21, '500 F', 'Fiat', '1965', 15, 520, '2025-03-28'),
(22, 'Motor Sport Elise', 'Lotus', '1999', 201, 700, '2025-03-28'),
(23, 'Mustang GT', 'Ford', '2005', 289, 1569, '2025-03-28'),
(24, 'MX-5 Miata 1.8', 'Mazda', '1998', 140, 1030, '2025-03-28'),
(25, '300 SL Coupe', 'Mercedes-Benz', '1954', 209, 1295, '2025-03-28'),
(26, 'SPRINTER TRUENO GT-APEX', 'Toyota', '1983', 125, 940, '2025-03-28'),
(27, 'New Beetle 2.0', 'Volkswagen', '2000', 113, 1228, '2025-03-28'),
(28, 'Golf V GTI', 'Volkswagen', '2005', 197, 1338, '2025-03-28'),
(29, 'Speedster', 'Opel', '2000', 143, 850, '2025-03-28'),
(30, 'SKYLINE GT-R R34', 'Nissan', '2000', 272, 1540, '2025-03-28'),
(31, 'Lancer Evolution IV GSR', 'Mitsubishi', '1996', 269, 1350, '2025-03-28'),
(32, 'PT Cruiser', 'Chrysler', '2000', 146, 1261, '2025-03-28'),
(33, 'RGT', 'RUF', '2000', 374, 1329, '2025-03-28');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
