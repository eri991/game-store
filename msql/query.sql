DROP DATABASE gmaxdb;
CREATE DATABASE IF NOT EXISTS gmaxdb;

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
  `data_compra` DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- --------------------------------------------------------

CREATE TABLE `carrinho` (
  `id_carrinho` int NOT NULL,
  `id_usuario` int NOT NULL,
  `data_criacao` DATETIME DEFAULT CURRENT_TIMESTAMP
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
  `nome_completo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `pais` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastro` DATETIME DEFAULT CURRENT_TIMESTAMP,
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


-- Inserção de usuários (IDs fixos)
INSERT INTO usuarios (id_user, nome_completo, data_nasc, pais, nickname, email, senha)
VALUES
(1, 'João Silva', '2000-05-15', 'Brasil', 'joaogamer', 'joao@example.com', '123456'),
(2, 'Maria Oliveira', '1995-10-30', 'Brasil', 'mariawin', 'maria@example.com', '654321');

-- Inserção de categorias
INSERT INTO categoria (id_categoria, nome_categoria)
VALUES
(1, 'Ação'),
(2, 'Aventura'),
(3, 'RPG'),
(4, 'Simulação');

INSERT INTO jogo (id_jogo, id_categoria, titulo, descricao, preco, estoque, url) VALUES
(1, 1, 'God of War', 'Kratos enfrenta deuses nórdicos em uma jornada épica.', '199.90', '50', 'https://upload.wikimedia.org/wikipedia/en/a/a7/God_of_War_4_cover.jpg'),
(2, 2, 'The Legend of Zelda: Breath of the Wild', 'Explore um vasto mundo aberto em Hyrule.', '249.90', '30', 'https://upload.wikimedia.org/wikipedia/en/0/0b/The_Legend_of_Zelda_Breath_of_the_Wild.jpg'),
(3, 3, 'The Witcher 3: Wild Hunt', 'Acompanhe Geralt em sua busca por Ciri.', '149.90', '40', 'https://upload.wikimedia.org/wikipedia/en/0/0c/Witcher_3_cover_art.jpg'),
(4, 4, 'FIFA 22', 'Experimente o futebol com gráficos realistas.', '299.90', '100', 'https://upload.wikimedia.org/wikipedia/en/2/2e/FIFA_22_Cover.jpg'),
(5, 4, 'Forza Horizon 5', 'Corridas emocionantes no México.', '349.90', '60', 'https://upload.wikimedia.org/wikipedia/en/8/8c/Forza_Horizon_5_cover_art.jpg'),
(6, 4, 'The Sims 4', 'Crie e controle pessoas em um mundo virtual.', '99.90', '80', 'https://upload.wikimedia.org/wikipedia/en/0/0b/The_Sims_4_cover_art.jpg'),
(7, 1, 'Resident Evil Village', 'Sobreviva aos horrores de um vilarejo misterioso.', '229.90', '70', 'https://upload.wikimedia.org/wikipedia/en/2/2e/Resident_Evil_Village.png'),
(8, 1, 'Civilization VI', 'Construa um império e lidere-o através das eras.', '89.90', '90', 'https://upload.wikimedia.org/wikipedia/en/5/5c/Civilization_VI_cover_art.jpg');

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

ALTER TABLE jogo MODIFY preco DECIMAL(7,2);

UPDATE jogo SET url = 'https://gmedia.playstation.com/is/image/SIEPDC/call-of-duty-franchise-hub-keyart-01-en-21nov23?$facebook$' WHERE id_jogo = 2;

INSERT INTO categoria (nome_categoria) VALUES
('Ação intensa'),
('Aventura mundo aberto'),
('RPG'),
('Esportes'),
('Corrida'),
('Ficção'),
('Terror'),
('Estratégia');

-- God of War (2018)
UPDATE jogo
SET url = 'assets/img/godofwar.webp'
WHERE titulo = 'God of War';

-- The Legend of Zelda: Breath of the Wild
UPDATE jogo
SET url = 'assets/img/zelda.avif'
WHERE titulo = 'The Legend of Zelda: Breath of the Wild';

-- The Witcher 3: Wild Hunt
UPDATE jogo
SET url = 'assets/img/witcher.jfif'
WHERE titulo = 'The Witcher 3: Wild Hunt';

-- FIFA 22
UPDATE jogo
SET url = 'assets/img/fifa.avif'
WHERE titulo = 'FIFA 22';

-- Forza Horizon 5
UPDATE jogo
SET url = 'assets/img/forza.jpg'
WHERE titulo = 'Forza Horizon 5';

-- The Sims 4
UPDATE jogo
SET url = 'assets/img/sims.jpeg'
WHERE titulo = 'The Sims 4';

-- Resident Evil Village
UPDATE jogo
SET url = 'assets/img/Resident-Evil-Village.jpg'
WHERE titulo = 'Resident Evil Village';

-- Civilization VI
UPDATE jogo
SET url = 'assets/img/CivilizationVI.jpg'
WHERE titulo = 'Civilization VI';

select * from itens_carrinho;
delete from itens_carrinho where id_item = 4 or id_item = 5;