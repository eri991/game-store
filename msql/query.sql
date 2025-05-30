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
  `nome_completo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
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


-- Inserção de usuários (IDs fixos)
INSERT INTO usuarios (id_user, primeiro_nome, sobrenome, data_nasc, pais, nickname, email, senha)
VALUES
(1, 'João Silva', '2000-05-15', 'Brasil', 'joaogamer', 'joao@example.com', '123456'),
(2, 'Maria Oliveira', '1995-10-30', 'Brasil', 'mariawin', 'maria@example.com', '654321');

-- Inserção de categorias
INSERT INTO categoria (nome_categoria)
VALUES
(1, 'Ação'),
(2, 'Aventura'),
(3, 'RPG'),
(4, 'Simulação');

-- Inserção de jogos
INSERT INTO jogo (id_categoria, titulo, descricao, preco, estoque, url)
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


INSERT INTO jogo (id_categoria, titulo, descricao, preco, estoque, url) VALUES
(1, 'God of War', 'Kratos enfrenta deuses nórdicos em uma jornada épica.', '199.90', '50', 'https://upload.wikimedia.org/wikipedia/en/a/a7/God_of_War_4_cover.jpg'),
(2, 'The Legend of Zelda: Breath of the Wild', 'Explore um vasto mundo aberto em Hyrule.', '249.90', '30', 'https://upload.wikimedia.org/wikipedia/en/0/0b/The_Legend_of_Zelda_Breath_of_the_Wild.jpg'),
(3, 'The Witcher 3: Wild Hunt', 'Acompanhe Geralt em sua busca por Ciri.', '149.90', '40', 'https://upload.wikimedia.org/wikipedia/en/0/0c/Witcher_3_cover_art.jpg'),
(4, 'FIFA 22', 'Experimente o futebol com gráficos realistas.', '299.90', '100', 'https://upload.wikimedia.org/wikipedia/en/2/2e/FIFA_22_Cover.jpg'),
(5, 'Forza Horizon 5', 'Corridas emocionantes no México.', '349.90', '60', 'https://upload.wikimedia.org/wikipedia/en/8/8c/Forza_Horizon_5_cover_art.jpg'),
(6, 'The Sims 4', 'Crie e controle pessoas em um mundo virtual.', '99.90', '80', 'https://upload.wikimedia.org/wikipedia/en/0/0b/The_Sims_4_cover_art.jpg'),
(7, 'Resident Evil Village', 'Sobreviva aos horrores de um vilarejo misterioso.', '229.90', '70', 'https://upload.wikimedia.org/wikipedia/en/2/2e/Resident_Evil_Village.png'),
(8, 'Civilization VI', 'Construa um império e lidere-o através das eras.', '89.90', '90', 'https://upload.wikimedia.org/wikipedia/en/5/5c/Civilization_VI_cover_art.jpg');

-- God of War (2018)
UPDATE jogo
SET url = 'https://img.hype.games/cdn/209a330a-50f4-48d1-9db7-7485e6a81d87cover.jpg'
WHERE titulo = 'God of War';

-- The Legend of Zelda: Breath of the Wild
UPDATE jogo
SET url = 'https://assets.nintendo.com/image/upload/ar_16:9,c_lpad,w_1240/b_white/f_auto/q_auto/ncom/software/switch/70010000000025/7137262b5a64d921e193653f8aa0b722925abc5680380ca0e18a5cfd91697f58'
WHERE titulo = 'The Legend of Zelda: Breath of the Wild';

-- The Witcher 3: Wild Hunt
UPDATE jogo
SET url = 'https://cdn1.epicgames.com/offer/14ee004dadc142faaaece5a6270fb628/EGS_TheWitcher3WildHuntCompleteEdition_CDPROJEKTRED_S1_2560x1440-82eb5cf8f725e329d3194920c0c0b64f'
WHERE titulo = 'The Witcher 3: Wild Hunt';

-- FIFA 22
UPDATE jogo
SET url = 'https://assets.nintendo.com/image/upload/q_auto:best/f_auto/dpr_2.0/ncom/software/switch/70010000038676/02b078ec6e65f597dc655c1b958bf2dd07961ea45db4d59688ca8746bf28ae6d'
WHERE titulo = 'FIFA 22';

-- Forza Horizon 5
UPDATE jogo
SET url = 'https://assetsio.gnwcdn.com/apps.33953.13718773309227929.bebdcc0e-1ed5-4778-8732-f4ef65a2f445.9428b75f-2c08-4e70-9f95-281741b15341?width=120&height=68&fit=crop&quality=70&format=jpg&auto=webp'
WHERE titulo = 'Forza Horizon 5';

-- The Sims 4
UPDATE jogo
SET url = 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgATd2tpUBjL8flQo0V5ci57UgK4Y63zv0dGJfGS4B3oKUV1utaOQG7TUrA7yJvUMsMAq6nR19sgeN_sbhZkyVSG7AX34Ae7hUx4TeKfWcyLkvQ9g6A1aKH9k3GzkPQ3kZ5iFzwK2ofEiy071j6lDbDhyZndY8YifVk8mLVBPlgSJz8SM2QV3RXbmc0/s739/The-Sims-4.jpeg'
WHERE titulo = 'The Sims 4';

-- Resident Evil Village
UPDATE jogo
SET url = 'https://popverse.com.br/wp-content/uploads/2024/06/Resident-Evil-Village.jpg'
WHERE titulo = 'Resident Evil Village';

-- Civilization VI
UPDATE jogo
SET url = 'https://cdn1.epicgames.com/cd14dcaa4f3443f19f7169a980559c62/offer/EGS_SidMeiersCivilizationVI_FiraxisGames_S1-2560x1440-2fcd1c150ac6d8cdc672ae042d2dd179.jpg'
WHERE titulo = 'Civilization VI';