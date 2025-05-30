-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
-- Host: 127.0.0.1
-- Generation Time: May 25, 2025 at 06:20 PM
-- Server version: 8.0.41
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT;
SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS;
SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION;
SET NAMES utf8mb4;

-- --------------------------------------------------------
-- Database: `g-maxdb`
-- --------------------------------------------------------

-- Table: biblioteca
CREATE TABLE `biblioteca` (
  `id_jogo` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  `data_compra` DATE DEFAULT CURRENT_TIMESTAMP
);

-- Table: carrinho
CREATE TABLE `carrinho` (
  `id_carrinho` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  `data_criacao` DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Table: categoria
CREATE TABLE `categoria` (
  `id_categoria` INT NOT NULL,
  `nome_categoria` VARCHAR(200) DEFAULT NULL
);

-- Table: itens_carrinho
CREATE TABLE `itens_carrinho` (
  `id_item` INT NOT NULL,
  `id_jogo` INT NOT NULL,
  `id_carrinho` INT NOT NULL,
  `quantidade` INT DEFAULT NULL
);

-- Table: jogo
CREATE TABLE `jogo` (
  `id_jogo` INT NOT NULL,
  `id_categoria` INT NOT NULL,
  `titulo` VARCHAR(200) DEFAULT NULL,
  `descricao` VARCHAR(2000) DEFAULT NULL,
  `preco` VARCHAR(7) DEFAULT NULL,
  `estoque` VARCHAR(7) DEFAULT NULL,
  `url` VARCHAR(200) DEFAULT NULL
);

-- Table: usuarios
CREATE TABLE `usuarios` (
  `id_user` INT NOT NULL,
  `nome_completo` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` DATE NOT NULL,
  `pais` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastro` DATE DEFAULT CURRENT_TIMESTAMP,
  `email` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` VARCHAR(200) COLLATE utf8mb4_unicode_ci NOT NULL
);

-- Indexes
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

-- AUTO_INCREMENT
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` INT NOT NULL AUTO_INCREMENT;

ALTER TABLE `categoria`
  MODIFY `id_categoria` INT NOT NULL AUTO_INCREMENT;

ALTER TABLE `itens_carrinho`
  MODIFY `id_item` INT NOT NULL AUTO_INCREMENT;

ALTER TABLE `jogo`
  MODIFY `id_jogo` INT NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuarios`
  MODIFY `id_user` INT NOT NULL AUTO_INCREMENT;

-- Foreign Keys
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

SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT;
SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS;
SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION;