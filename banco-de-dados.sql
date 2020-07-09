-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09/07/2020 às 01:26
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `contents`
--

INSERT INTO `contents` (`id`, `file_id`, `user_id`, `title`, `subtitle`, `content`, `video`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Consectetur adipiscing elit', NULL, '<p><strong>Quisque tincidunt: </strong>Quisque ultricies, tortor vitae tincidunt molestie, arcu enim imperdiet urna, id aliquet ipsum massa luctus ipsum.</p>', '', 'consectetur-adipiscing-elit', '2020-07-05 15:35:10', '2020-07-05 22:32:12'),
(2, 2, 1, 'Proin eu massa odio?', NULL, '<p><strong>Maecenas faucibus elementum ipsum nec rhoncus.</strong> Integer a tortor vitae felis lobortis rutrum. Donec convallis turpis et tincidunt pretium. Integer placerat luctus euismod. Nunc congue magna vel elementum.</p>', '', 'proin-eu-massa-odio', '2020-07-05 15:35:33', '2020-07-05 22:32:18'),
(3, 3, 1, 'Suspendisse feugiat orci sed velit pulvinar.', 'Aliquam vitae lorem?', '<ul>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"images/min/icon-green-1.jpg\" />Maecenas faucibus elementum ipsum nec rhoncus,</strong> Nullam sit amet pretium justo, metus.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"images/min/icon-green-2.png\" />Nunc congue</strong> magna vel elementum</p>\r\n	</li>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"images/min/icon-green-3.png\" />Donec convallis</strong> turpis et tincidunt pretium.</p>\r\n	</li>\r\n</ul>', '', 'suspendisse-feugiat-orci-sed-velit-pulvinar', '2020-07-05 15:38:13', '2020-07-05 22:32:25'),
(4, 4, 1, 'Suspendisse feugiat orci sed velit pulvinar.', 'Aliquam vitae lorem?', '<ul>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"images/min/icon-pink-1.png\" />Nullam sit amet pretium justo, quis convallis</strong> proin faucibus lectus sed viverra hendrerit.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"images/min/icon-pink-2.png\" />Ut eu dolor vitae elit bibendum fringilla sit amet a elit. Fusce ac cursus nisl</strong>  mauris id cursus mauris, sollicitudin varius quis convallis metus est.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"images/min/icon-pink-3.png\" />Ut eu dolor:</strong> suspendisse feugiat orci sed velit pulvinar pretium.</p>\r\n	</li>\r\n</ul>', '', 'suspendisse-feugiat-orci-sed-velit-pulvinar-1', '2020-07-05 15:43:50', '2020-07-05 23:02:30'),
(5, 5, 1, 'Nullam sit amet pretium justo, quis convallisac.', 'Mauris id cursus est?', '<ul>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"images/min/icon-blue-1.png\" />Nunc congue magnas: </strong>vel elementum finibufaucibus lectus sed viverra hendrerit.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong><img alt=\"\" src=\"images/min/icon-blue-2.png\" /><strong>Fusce ac cursus nisl</strong> nisl &nbsp;mauris id cursus mauris, sollicitudin varius quis convallis metus est.</strong></p>\r\n	</li>\r\n	<li><p><strong><img alt=\"\" src=\"images/min/icon-blue-3.png\" />Ut eu dolor vitae elits</strong> Ut eu dolor vitae elit bibendum fringilla sit amet a elit mauris in sollicitudin eros.\r\n	</p>\r\n	</li>\r\n</ul>', '', 'nullam-sit-amet-pretium-justo-quis-convallisac', '2020-07-05 15:46:10', '2020-07-08 00:54:47'),
(6, 7, 1, 'Maecenas faucibus elementum', NULL, '<ul>\r\n	<li>\r\n	<h3>Viverra&nbsp;</h3>\r\n\r\n	<hr />\r\n	<ul>\r\n		<li><strong>Sed va</strong><strong>rius cursus fringilla. Interdum:</strong> et malesuada fames ac ante ipsum primis in faucibus. Suspendisse feugiat orci sed velit pulvinar pretium.<br />\r\n		&nbsp;</li>\r\n		<li><img alt=\"\" src=\"images/min/marca-1.jpg\" /></li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h3>Pretium</h3>\r\n\r\n	<hr />\r\n	<ul>\r\n		<li><strong>Nullam tincidunt at diam at faucibus. Nunc euismod felis in lectus cursus, eget laoreet est sagittis: </strong>Etiam ut pharetra urna, interdum malesuada quam. Aenean vel imperdiet urna.</li>\r\n		<li><img alt=\"\" src=\"images/min/marca-2.jpg\" /></li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<h3>Mauris</h3>\r\n\r\n	<hr />\r\n	<ul>\r\n		<li><strong>Hac habitasse platea dictumstl tiam tortor diam: </strong>&nbsp;ornare vel libero eget, posuere malesuada lectus. Vestibulum quis lacus lacinia, porttitor felis aliquet, sollicitudin neque.</li>\r\n		<li><img alt=\"\" src=\"images/min/marca-3.jpg\" /></li>\r\n	</ul>\r\n	</li>\r\n</ul>', '', 'maecenas-faucibus-elementum', '2020-07-05 15:54:45', '2020-07-08 01:42:26');

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `files`
--

INSERT INTO `files` (`id`, `name`, `filename`, `created_at`, `updated_at`) VALUES
(1, '84b2ba86bbd622197e34fe2eaf8fd798.jpg', 'uploads/84b2ba86bbd622197e34fe2eaf8fd798.jpg', '2020-07-05 15:35:10', '2020-07-05 15:35:10'),
(2, '006218b49a9eea4646867d69f3454100.jpg', 'uploads/006218b49a9eea4646867d69f3454100.jpg', '2020-07-05 15:35:33', '2020-07-05 15:35:33'),
(3, '1d8bf0d3c23d1a2c2345d9540e3a9d86.jpg', 'uploads/1d8bf0d3c23d1a2c2345d9540e3a9d86.jpg', '2020-07-05 15:38:13', '2020-07-05 15:38:13'),
(4, '6720c8d4b74d2a8ee97cdf2b2394381a.jpg', 'uploads/6720c8d4b74d2a8ee97cdf2b2394381a.jpg', '2020-07-05 15:43:50', '2020-07-05 15:43:50'),
(5, '825057b3c474be9eca26110a03f184a8.jpg', 'uploads/825057b3c474be9eca26110a03f184a8.jpg', '2020-07-05 15:46:10', '2020-07-05 15:46:10'),
(6, 'ac46eceec2c53d783674b5c65b8ea42f.jpg', 'uploads/ac46eceec2c53d783674b5c65b8ea42f.jpg', '2020-07-05 15:54:45', '2020-07-05 15:54:45'),
(7, '1262fbde5d27af13704d52562494f92b.png', 'uploads/1262fbde5d27af13704d52562494f92b.png', '2020-07-07 18:29:05', '2020-07-07 18:29:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2019_08_19_000000_create_failed_jobs_table', 1),
(44, '2020_07_04_012740_create_files_table', 1),
(45, '2020_07_04_012820_create_contents_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'admin@argon.com', '2020-07-05 15:34:09', '$2y$10$ZKJqonzvshNi4cbLgx4XxOydor.ru3gf7vmq0lzxRpByd9jxpmad2', NULL, '2020-07-05 15:34:09', '2020-07-05 15:34:09');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_file_id_foreign` (`file_id`),
  ADD KEY `contents_user_id_foreign` (`user_id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT de tabela `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `contents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
