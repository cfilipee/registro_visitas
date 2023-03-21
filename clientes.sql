-- phpMyAdmin SQL Dump

-- version 5.2.0

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Tempo de geração: 21-Mar-2023 às 15:26

-- Versão do servidor: 10.4.27-MariaDB

-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Banco de dados: `cadastro_teste`

--

-- --------------------------------------------------------

--

-- Estrutura da tabela `clientes`

--

CREATE TABLE
    `clientes` (
        `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
        `nome` varchar(300) NOT NULL,
        `email` varchar(200) NOT NULL,
        `telefone` varchar(20) DEFAULT NULL,
        `assunto` varchar(30) DEFAULT NULL,
        `cep` varchar(10) DEFAULT NULL,
        `rua` varchar(300) DEFAULT NULL,
        `numero` varchar(20) NOT NULL,
        `bairro` varchar(100) NOT NULL,
        `complemento` varchar(200) DEFAULT NULL,
        `cidade` varchar(120) DEFAULT NULL,
        `uf` varchar(10) DEFAULT NULL,
        `cargo` varchar(50) DEFAULT NULL,
        `partido` varchar(30) DEFAULT NULL,
        `nascimento` date DEFAULT NULL,
        `data_cadastro` datetime NOT NULL,
        `ultima_alteracao` datetime DEFAULT NULL,
        `criado_por` varchar(200) NOT NULL,
        `alterado_por` varchar(100) DEFAULT NULL,
        `situacao` varchar(20) NOT NULL DEFAULT
    ) ENGINE = MyISAM DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

--

-- Extraindo dados da tabela `clientes`

--

INSERT INTO
    `clientes` (
        `id_cliente`,
        `nome`,
        `email`,
        `telefone`,
        `assunto`,
        `cep`,
        `rua`,
        `numero`,
        `bairro`,
        `complemento`,
        `cidade`,
        `uf`,
        `cargo`,
        `partido`,
        `nascimento`,
        `data_cadastro`,
        `ultima_alteracao`,
        `criado_por`,
        `alterado_por`,
        `situacao`
    )
VALUES (
        7,
        'Ansião Da Silva',
        'ansiao@gmail.com',
        '(19) 98764-3211',
        'Outros',
        '72115045',
        'Cnb 4',
        '6',
        'Taguatinga Norte (Taguatinga)',
        '',
        'Brasília',
        'DF',
        'Vereador',
        'PMDB',
        '1994-09-13',
        '2023-03-20 18:59:35',
        '2023-03-20 19:53:49',
        'Administrador do sistema',
        'Administrador do sistema',
        'Ativo'
    ), (
        3,
        'Caio Filipe Silva França',
        'caiofilipee@gmail.com',
        '(61) 98378-9301',
        '(61) 98134-2300',
        '72.115-045',
        'Cnb 4',
        '04',
        'Taguatinga Norte (Taguatinga)',
        '',
        'Brasília',
        'DF',
        'Dep Federal',
        'PT',
        '1992-11-11',
        '2023-02-07 18:38:18',
        '2023-03-20 18:36:34',
        'Administrador do sistema',
        'Administrador do sistema',
        'Ativo'
    ), (
        8,
        'Carlos Alberto Moura',
        'carlos@email.com',
        '(61) 98378-9301',
        '',
        '72115045',
        'CNB 4',
        '25',
        'Taguatinga Norte (Taguatinga)',
        '',
        'Brasília',
        'DF',
        'Vereador',
        'PODE',
        '1992-11-11',
        '2023-03-20 19:52:56',
        NULL,
        'Administrador do sistema',
        NULL,
        'Ativo'
    );

--

-- Índices para tabelas despejadas

--

--

-- Índices para tabela `clientes`

--

ALTER TABLE `clientes` ADD PRIMARY KEY (`id_cliente`);

--

-- AUTO_INCREMENT de tabelas despejadas

--

--

-- AUTO_INCREMENT de tabela `clientes`

--

ALTER TABLE
    `clientes` MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 9;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;