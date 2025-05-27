-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 06:20 PM
-- Server version: 8.0.41
-- PHP Version: 8.0.30
use gmaxdb;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g-maxdb`
--

-- --------------------------------------------------------

CREATE TABLE `biblioteca` (
  `id_jogo` int NOT NULL,
  `id_usuario` int NOT NULL,
  `data_compra` timestamp DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

CREATE TABLE `carrinho` (
  `id_carrinho` int NOT NULL,
  `id_usuario` int NOT NULL,
  `data_criacao` timestamp DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

CREATE TABLE `categoria` (
  `id_categoria` int NOT NULL,
  `nome_categoria` varchar(200) DEFAULT NULL
);

-- --------------------------------------------------------

CREATE TABLE `itens_carrinho` (
  `id_item` int NOT NULL,
  `id_jogo` int NOT NULL,
  `id_carrinho` int NOT NULL,
  `quantidade` int DEFAULT NULL
);

-- --------------------------------------------------------

CREATE TABLE `jogo` (
  `id_jogo` int NOT NULL,
  `id_categoria` int NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `descricao` varchar(2000) DEFAULT NULL,
  `preco` varchar(7) DEFAULT NULL,
  `estoque` varchar(7) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL
);

-- --------------------------------------------------------

CREATE TABLE `usuarios` (
  `id_user` int NOT NULL,
  `primeiro_nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `pais` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastro` timestamp DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
);

-- --------------------------------------------------------

ALTER TABLE `biblioteca`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_jogo` (`id_jogo`);

ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`),
  ADD KEY `id_usuario` (`id_usuario`);

ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

ALTER TABLE `itens_carrinho`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_carrinho` (`id_carrinho`);

ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id_jogo`),
  ADD KEY `id_categoria` (`id_categoria`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `itens_carrinho`
  MODIFY `id_item` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `jogo`
  MODIFY `id_jogo` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuarios`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `biblioteca`
  ADD CONSTRAINT `biblioteca_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_user`),
  ADD CONSTRAINT `biblioteca_ibfk_2` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id_jogo`);

ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_user`);

ALTER TABLE `itens_carrinho`
  ADD CONSTRAINT `itens_carrinho_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id_jogo`),
  ADD CONSTRAINT `itens_carrinho_ibfk_2` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinho` (`id_carrinho`);

ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


USE gmaxdb;

-- Inserção de usuários (IDs fixos)
INSERT INTO usuarios (id_user, primeiro_nome, sobrenome, data_nasc, pais, nickname, email, senha)
VALUES
(1, 'João', 'Silva', '2000-05-15', 'Brasil', 'joaogamer', 'joao@example.com', '123456'),
(2, 'Maria', 'Oliveira', '1995-10-30', 'Brasil', 'mariawin', 'maria@example.com', '654321');

-- Inserção de categorias
INSERT INTO categoria (id_categoria, nome_categoria)
VALUES
(1, 'Ação'),
(2, 'Aventura'),
(3, 'RPG'),
(4, 'Simulação');

-- Inserção de jogos
INSERT INTO jogo (id_jogo, id_categoria, titulo, descricao, preco, estoque, url)
VALUES
(1, 1, 'Battle Strike', 'Jogo de tiro com ação intensa.', '59.99', '50', 'assets/img/jogos/battle_strike.jpg'),
(2, 2, 'Island Quest', 'Explore uma ilha cheia de mistérios.', '89.90', '30', 'assets/img/jogos/island_quest.jpg'),
(3, 3, 'Dragon Realms', 'Um RPG com dragões e magias.', '120.00', '20', 'assets/img/jogos/dragon_realms.jpg');

-- Inserção de carrinhos (IDs fixos)
INSERT INTO carrinho (id_carrinho, id_usuario)
VALUES
(1, 1),
(2, 2);

-- Inserção de itens no carrinho
INSERT INTO itens_carrinho (id_item, id_jogo, id_carrinho, quantidade)
VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 2, 1);

-- Inserção na biblioteca (jogos comprados)
INSERT INTO biblioteca (id_jogo, id_usuario)
VALUES
(1, 1),
(2, 1),
(3, 2);


UPDATE jogo SET url = 'https://gmedia.playstation.com/is/image/SIEPDC/call-of-duty-franchise-hub-keyart-01-en-21nov23?$facebook$' WHERE id_jogo = 2;