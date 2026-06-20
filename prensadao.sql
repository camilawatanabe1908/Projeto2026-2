-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2026 às 01:21
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prensadao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidato`
--

CREATE TABLE `candidato` (
  `id` bigint(20) NOT NULL,
  `nome_candidato` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `curriculo` varchar(100) DEFAULT NULL,
  `data_envio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(20) NOT NULL,
  `nome_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome_categoria`) VALUES
(1, 'Hot-Dogs'),
(2, 'Hamburgueres'),
(3, 'Kids');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` bigint(20) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `imagem_combo` varchar(255) DEFAULT NULL,
  `combo_descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `nome_produto`, `descricao`, `imagem`, `imagem_combo`, `combo_descricao`) VALUES
(1, 'Dog Simples', 'Pão, 2 salsichas cortada ao meio, molho do chefe, milho, tomate picadinho e batata palha.', 'Dados/simples.jpg', 'Dados/comboSimples.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(2, 'Dog Calabresa', 'Pão, 2 salsichas cortadas ao meio, molho do chefe, milho, tomate picadinho, calabresa e batata palha.', 'Dados/calabresa.jpg', 'Dados/comboCalabresa.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(3, 'Dog Pizza', 'Pão, 2 salsichas cortadas ao meio, molho do chefe, milho, tomate picadinho, queijo mussarela, presunto, orégano e batata palha.', 'Dados/pizza.jpg', 'Dados/comboPizza.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(4, 'Dog Bacon', 'Pão, 2 salsichas cortadas ao meio, molho do chefe, milho, tomate picadinho, bacon e batata palha.', 'Dados/bacon.jpg', 'Dados/comboBacon.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(5, 'Dog Frango', 'Pão, 2 salsichas cortadas ao meio, molho do chefe, milho, tomate picadinho, frango desfiado e batata palha.', 'Dados/frango.jpg', 'Dados/comboFrango.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(6, 'Dog Frango Catupiry', 'Pão, 2 salsichas cortadas ao meio, molho do chefe, milho, tomate picadinho, frango desfiado, catupiry e batata palha.', 'Dados/frangoCatupiry.jpg', 'Dados/comboFrangocatupiry.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(7, 'Dog Especial', 'Pão, 2 salsichas cortadas ao meio, molho do chefe, milho, tomate picadinho, frango desfiado, bacon, queijo mussarela e batata palha.', 'Dados/especial.jpg', 'Dados/comboEspecial.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(8, 'Dog Burger', 'Pão, 2 salsichas cortadas ao meio, hambúrguer artesanal feito na brasa, molho do chefe, milho, tomate picadinho, batata palha e queijo mussarela.', 'Dados/dogburger.jpg', 'Dados/comboBurger.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(9, 'Burger Cheddar Bacon', 'Pão, hambúrguer artesanal feito na brasa, molho do chefe, bacon, cheddar, milho, tomate picadinho, batata palha e queijo mussarela.', 'Dados/burgercheddarbacon.jpg', 'Dados/comboBurgercheddarbacon.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(10, 'Burger Salada Bacon', 'Pão de brioche médio, molho do chefe, hambúrguer artesanal feito na brasa, mussarela, tomate em rodelas, alface, cebola roxa e bacon.', 'Dados/salada.jpg', 'Dados/comboSalada.jpg', '+ Batata Frita 100g + Refri Lata à sua escolha'),
(11, 'Cheese Burger', 'Pão de brioche médio, hambúrguer artesanal feito na brasa, molho do chefe e queijo mussarela.', 'Dados/kids.jpg', 'Dados/comboKids.jpg', '+ Batata Frita 100g + Suco Kapo à sua escolha');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_categoria`
--

CREATE TABLE `produto_categoria` (
  `id_produto` bigint(20) NOT NULL,
  `id_categoria` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto_categoria`
--

INSERT INTO `produto_categoria` (`id_produto`, `id_categoria`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(11, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD PRIMARY KEY (`id_produto`,`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD CONSTRAINT `produto_categoria_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`),
  ADD CONSTRAINT `produto_categoria_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
