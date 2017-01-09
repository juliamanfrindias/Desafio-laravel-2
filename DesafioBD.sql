-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 30/12/2016 às 18:19
-- Versão do servidor: 5.7.16-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `DesafioBD`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_12_27_162636_create_tarefas_table', 1),
(4, '2016_12_27_162643_create_tags_table', 1),
(5, '2016_12_27_162655_create_tarefas_tags_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `tags`
--

INSERT INTO `tags` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(7, 'pet shop', '2016-12-30 19:29:11', '2016-12-30 19:29:11'),
(8, 'comprar', '2016-12-30 19:29:20', '2016-12-30 19:29:20'),
(9, 'banho', '2016-12-30 19:29:26', '2016-12-30 19:29:26'),
(10, 'areia', '2016-12-30 19:29:33', '2016-12-30 19:29:33'),
(11, 'ração', '2016-12-30 19:29:37', '2016-12-30 19:29:37'),
(12, 'xampu', '2016-12-30 19:29:46', '2016-12-30 19:29:46'),
(13, 'vacina', '2016-12-30 19:29:59', '2016-12-30 19:29:59'),
(14, 'veterinário', '2016-12-30 19:30:16', '2016-12-30 19:30:16'),
(15, 'passear', '2016-12-30 19:30:30', '2016-12-30 19:30:30'),
(16, 'impossivel', '2016-12-30 19:30:37', '2016-12-30 19:30:37'),
(17, 'dormir', '2016-12-30 19:30:44', '2016-12-30 19:30:44'),
(18, 'brincar', '2016-12-30 19:30:50', '2016-12-30 19:30:50'),
(19, 'bola', '2016-12-30 19:30:54', '2016-12-30 19:30:54'),
(20, 'gato', '2016-12-30 19:32:35', '2016-12-30 19:32:35'),
(21, 'gatos', '2016-12-30 19:32:41', '2016-12-30 19:32:41');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(13, 'Passear com o gato na praça', '2016-12-30 19:33:36', '2016-12-30 21:24:22'),
(14, 'Dar banho no gato', '2016-12-30 21:28:29', '2016-12-30 21:28:29'),
(15, 'Levar gato no veterinário', '2016-12-30 21:58:33', '2016-12-30 21:58:33'),
(16, 'Ir no pet shop', '2016-12-30 21:59:24', '2016-12-30 21:59:24'),
(17, 'Vacinar o gato', '2016-12-30 22:01:49', '2016-12-30 22:01:49'),
(18, 'Brincar com o gato', '2016-12-30 22:02:23', '2016-12-30 22:02:23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefas_tags`
--

CREATE TABLE `tarefas_tags` (
  `tarefa_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `tarefas_tags`
--

INSERT INTO `tarefas_tags` (`tarefa_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(13, 15, '2016-12-30 19:33:36', '2016-12-30 19:33:36'),
(13, 16, '2016-12-30 19:33:36', '2016-12-30 19:33:36'),
(13, 20, '2016-12-30 19:33:36', '2016-12-30 19:33:36'),
(14, 9, '2016-12-30 21:28:29', '2016-12-30 21:28:29'),
(14, 12, '2016-12-30 21:28:29', '2016-12-30 21:28:29'),
(14, 16, '2016-12-30 21:28:29', '2016-12-30 21:28:29'),
(14, 20, '2016-12-30 21:28:29', '2016-12-30 21:28:29'),
(15, 13, '2016-12-30 21:58:33', '2016-12-30 21:58:33'),
(15, 14, '2016-12-30 21:58:33', '2016-12-30 21:58:33'),
(15, 20, '2016-12-30 21:58:33', '2016-12-30 21:58:33'),
(15, 21, '2016-12-30 21:58:33', '2016-12-30 21:58:33'),
(16, 7, '2016-12-30 21:59:24', '2016-12-30 21:59:24'),
(16, 8, '2016-12-30 21:59:24', '2016-12-30 21:59:24'),
(16, 10, '2016-12-30 21:59:24', '2016-12-30 21:59:24'),
(16, 11, '2016-12-30 21:59:24', '2016-12-30 21:59:24'),
(16, 21, '2016-12-30 21:59:24', '2016-12-30 21:59:24'),
(17, 13, '2016-12-30 22:01:49', '2016-12-30 22:01:49'),
(17, 14, '2016-12-30 22:01:49', '2016-12-30 22:01:49'),
(17, 21, '2016-12-30 22:01:49', '2016-12-30 22:01:49'),
(18, 17, '2016-12-30 22:02:23', '2016-12-30 22:02:23'),
(18, 18, '2016-12-30 22:02:23', '2016-12-30 22:02:23'),
(18, 19, '2016-12-30 22:02:23', '2016-12-30 22:02:23'),
(18, 21, '2016-12-30 22:02:23', '2016-12-30 22:02:23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Índices de tabela `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tarefas_tags`
--
ALTER TABLE `tarefas_tags`
  ADD KEY `tarefas_tags_tarefa_id_index` (`tarefa_id`),
  ADD KEY `tarefas_tags_tag_id_index` (`tag_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tarefas_tags`
--
ALTER TABLE `tarefas_tags`
  ADD CONSTRAINT `tarefas_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tarefas_tags_tarefa_id_foreign` FOREIGN KEY (`tarefa_id`) REFERENCES `tarefas` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
