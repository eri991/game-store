-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 06:20 PM
-- Server version: 8.0.41
-- PHP Version: 8.0.30

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

--
-- Table structure for table `biblioteca`
--

CREATE TABLE "biblioteca" (
  "id_jogo" int NOT NULL,
  "id_usuario" int NOT NULL,
  "data_compra" date DEFAULT CURRENT_TIMESTAMP
)

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE "carrinho" (
  "id_carrinho" int NOT NULL,
  "id_usuario" int NOT NULL,
  "data_criacao" date DEFAULT CURRENT_TIMESTAMP
) 
-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE "categoria" (
  "id_categoria" int NOT NULL,
  "nome_categoria" varchar(200) DEFAULT NULL
)

-- --------------------------------------------------------

--
-- Table structure for table `itens_carrinho`
--

CREATE TABLE "itens_carrinho" (
  "id_item" int NOT NULL,
  "id_jogo" int NOT NULL,
  "id_carrinho" int NOT NULL,
  "quantidade" int DEFAULT NULL
)

-- --------------------------------------------------------

--
-- Table structure for table `jogo`
--

CREATE TABLE "jogo" (
  "id_jogo" int NOT NULL,
  "id_categoria" int NOT NULL,
  "titulo" varchar(200) DEFAULT NULL,
  "descricao" varchar(2000) DEFAULT NULL,
  "preco" varchar(7) DEFAULT NULL,
  "estoque" varchar(7) DEFAULT NULL,
  "url" varchar(200) DEFAULT NULL
) 

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE "usuarios" (
  "id_user" int NOT NULL,
  "primeiro_nome" varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  "sobrenome" varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  "data_nasc" date NOT NULL,
  "pais" varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  "nickname" varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  "data_cadastro" date DEFAULT CURRENT_TIMESTAMP,
  "email" varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  "senha" varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) 

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biblioteca`
--
ALTER TABLE "biblioteca"
  ADD KEY "id_usuario" ("id_usuario"),
  ADD KEY `id_jogo` (`id_jogo`);

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `itens_carrinho`
--
ALTER TABLE `itens_carrinho`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_jogo` (`id_jogo`),
  ADD KEY `id_carrinho` (`id_carrinho`);

--
-- Indexes for table `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id_jogo`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itens_carrinho`
--
ALTER TABLE `itens_carrinho`
  MODIFY `id_item` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id_jogo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD CONSTRAINT `biblioteca_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_user`),
  ADD CONSTRAINT `biblioteca_ibfk_2` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id_jogo`);

--
-- Constraints for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_user`);

--
-- Constraints for table `itens_carrinho`
--
ALTER TABLE `itens_carrinho`
  ADD CONSTRAINT `itens_carrinho_ibfk_1` FOREIGN KEY (`id_jogo`) REFERENCES `jogo` (`id_jogo`),
  ADD CONSTRAINT `itens_carrinho_ibfk_2` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinho` (`id_carrinho`);

--
-- Constraints for table `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
