-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Nov-2021 às 07:35
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `amenin_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_builder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_children` tinyint(1) DEFAULT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_interest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `document`, `date_of_birth`, `phone`, `whatsapp`, `address`, `number_builder`, `complement`, `zipcode`, `city`, `state`, `has_children`, `marital_status`, `working`, `has_interest`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, '052.598.000-00', '1996-10-17', '(85) 9.8888.8888', '(85) 9.8888.8888', 'Rua x', '34353', NULL, '87.878-787', 'maracanaú', 'Ceará', 0, 'Separada', 'Sim', 'Sim', 1, '2020-11-19 14:26:53', '2020-11-19 14:26:53'),
(2, 5, '887.921.023-87', '1981-04-06', '(85) 9.9635.5573', '(85) 9.9635.5573', 'Rua António Pompil 321', '321', NULL, '60.832-650', 'Fortaleza', 'CE', 1, 'Em processo de separação', 'Sim', 'Sim', 1, '2020-11-28 21:40:49', '2020-11-28 21:40:49'),
(3, 6, '923.462.513-72', '1983-05-22', '(85) 9.9622.9032', '(85) 9.9622.9032', 'Rua Marcos Macêdo', '140', NULL, '60.150-190', 'Fortaleza', 'CE', 1, 'Viúva', 'Sim', 'Sim', 1, '2020-12-03 00:36:43', '2020-12-03 00:36:43'),
(4, 8, '803.475.413-72', '1981-01-11', '(85) 9.9924.9776', '(85) 9.9924.9765', 'Av. Ministro Jose Américo', '150', NULL, '60.824-245', 'Fortaleza', 'CE', 1, 'Divorciada', 'Não, mas desejo retornar logo ao mercado', 'Não, sem previsão', 1, '2020-12-22 19:45:59', '2020-12-22 19:45:59'),
(5, 11, '138.533.036-84', '1993-01-04', '(32) 9.9978.8176', '(32) 9.9978.8176', 'Dirceu de oliveira martins', '35', NULL, '36.730-000', 'Pirapetinga', 'Minas gerais', 1, 'Em uma relação estável', 'Sim', 'Não, sem previsão', 1, '2021-03-26 01:13:47', '2021-03-26 01:13:47'),
(6, 12, '098.480.224-06', '1995-12-14', '(85) 9.8217.0693', '(85) 9.8217.0693', 'Alameda dos jasmins', '591', NULL, '60.190-550', 'Fortaleza', 'Ceará', 1, 'Em processo de separação', 'Não e desejo empreender', 'Sim', 1, '2021-05-21 14:39:51', '2021-05-21 14:39:51'),
(7, 13, '048.289.303-61', '1990-07-19', '(85) 9.8715.9407', '(85) 9.8715.9407', 'Rua Estudante Ana Kelly', '429A', NULL, '60.864-735', 'Fortaleza', 'Ceará', 1, 'Em processo de separação', 'Sim', 'Sim', 1, '2021-05-26 14:12:36', '2021-05-26 14:12:36'),
(8, 14, '057.820.173-92', '2021-08-27', '(85) 9.9788.6327', '(85) 9.9788.6327', 'Rua Maria De Jesus', '349', NULL, '60.731-710', 'Fortaleza', 'CE', 0, 'Em processo de separação', 'Selecione uma opção', 'Não, sem previsão', 1, '2021-08-27 16:13:04', '2021-08-27 16:13:04'),
(9, 15, '074.825.837-00', '2021-08-27', '(85) 9.8745.1358', '(85) 9.8745.1358', 'Rua Dr joão pinto', '128', NULL, '61.618-540', 'Fortaleza', 'Ceará', 1, 'Em uma relação estável', 'Sim', 'Sim', 1, '2021-08-27 16:17:16', '2021-08-27 16:17:16'),
(40, 70, '898', '2021-10-20', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:12:01', '2021-10-02 13:12:01'),
(39, 69, '898', '2021-10-12', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:05:06', '2021-10-02 13:05:06'),
(38, 68, '898', '2021-10-13', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 12:58:43', '2021-10-02 12:58:43'),
(37, 67, '898', '2021-10-08', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 12:47:22', '2021-10-02 12:47:22'),
(36, 66, '898', '2021-10-22', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 04:26:35', '2021-10-02 04:26:35'),
(35, 65, '898', '2021-10-22', '846532574', '89999999999999', 'Beira - Sofala', '846532574', '3', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 04:24:39', '2021-10-02 04:24:39'),
(34, 64, '898', '2021-10-06', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 04:24:03', '2021-10-02 04:24:03'),
(33, 63, '898', '2021-10-06', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 04:13:43', '2021-10-02 04:13:43'),
(32, 48, '898', '2021-10-06', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-01 02:31:42', '2021-10-01 02:31:42'),
(30, 46, '898', '2021-10-15', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-01 02:12:22', '2021-10-01 02:12:22'),
(31, 47, '898', '2021-10-15', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-01 02:29:28', '2021-10-01 02:29:28'),
(41, 71, 'fweffwe', '2021-10-15', '846532574', '89999999999999', 'Beira - Sofala', '846532574', '3', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:14:15', '2021-10-02 13:14:15'),
(42, 72, '898', '2021-10-14', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:21:11', '2021-10-02 13:21:11'),
(43, 73, '898', '2021-10-14', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:29:13', '2021-10-02 13:29:13'),
(44, 74, '898', '2021-10-14', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:30:00', '2021-10-02 13:30:00'),
(45, 75, '898', '2021-10-14', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:33:05', '2021-10-02 13:33:05'),
(46, 76, '898', '2021-10-09', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:33:52', '2021-10-02 13:33:52'),
(47, 77, '898', '2021-10-09', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:35:12', '2021-10-02 13:35:12'),
(48, 78, '898', '2021-10-08', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 13:36:46', '2021-10-02 13:36:46'),
(49, 85, '898', '2021-10-15', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 14:10:32', '2021-10-02 14:10:32'),
(50, 86, '898', '2021-10-06', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 14:18:40', '2021-10-02 14:18:40'),
(51, 87, '898', '2021-10-15', '846532574', '89999999999999', 'Beira - Sofala', '846532574', '3', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 14:22:56', '2021-10-02 14:22:56'),
(52, 88, '898', '2021-10-05', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 14:24:29', '2021-10-02 14:24:29'),
(53, 89, '898', '2021-10-14', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-02 14:56:28', '2021-10-02 14:56:28'),
(54, 90, '898', '2021-10-08', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-04 07:23:19', '2021-10-04 07:23:19'),
(55, 91, '898', '2021-10-08', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-04 07:23:47', '2021-10-04 07:23:47'),
(56, 93, '898', '2021-10-14', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-04 07:33:05', '2021-10-04 07:33:05'),
(57, 95, '898', '2021-10-01', '846532574', '89999999999999', 'Beira - Sofala', '846532574', 'Sem', '21232-431', 'Beira', 'Sofala', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-04 15:40:48', '2021-10-04 15:40:48'),
(58, 97, '898', '2021-10-14', '4199999999', '89999999999999', 'Avenida Paulista', 'ergerge', 'até 609 - lado ímpar', '01311-000', 'São Paulo', 'São Paulo', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-06 03:08:10', '2021-10-06 03:08:10'),
(59, 98, '898', '2021-10-14', '846532574', '89999999999999', 'Avenida Paulista', '846532574', 'até 609 - lado ímpar', '01311-000', 'São Paulo', 'São Paulo', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-06 03:09:25', '2021-10-06 03:09:25'),
(60, 101, '898', '2021-09-29', '846532574', '89999999999999', 'Avenida Paulista', '846532574', 'até 609 - lado ímpar', '01311-000', 'São Paulo', 'São Paulo', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-06 04:04:39', '2021-10-06 04:04:39'),
(61, 102, 'fweffwe', '2021-10-07', '846532574', '89999999999999', 'Avenida Paulista', '846532574', 'até 609 - lado ímpar', '01311-000', 'São Paulo', 'São Paulo', 1, 'Selecione uma opção', 'Selecione uma opção', 'Selecione uma opção', 1, '2021-10-06 04:06:44', '2021-10-06 04:06:44'),
(62, 106, '', '2021-10-07', '+258 58842848202', '', '', '', '', '', '', '', 1, '', '', '', 1, '2021-10-07 04:40:03', '2021-10-07 04:40:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_01_132031_create_roles_table', 1),
(5, '2020_10_01_132041_create_permissions_table', 1),
(6, '2020_10_01_132115_create_user_roles_table', 1),
(7, '2020_10_01_132126_create_role_permissions_table', 1),
(8, '2020_10_01_134536_create_clients_table', 1),
(9, '2020_10_01_134709_create_suppliers_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'dashboard.index', '2020-11-19 13:24:08', '2020-11-19 13:24:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin', '2020-11-19 13:24:08', '2020-11-19 13:24:08'),
(2, 'Cliente', 'client', '2020-11-19 13:24:08', '2020-11-19 13:24:08'),
(3, 'Fornecedor', 'supplier', '2020-11-19 13:24:08', '2020-11-19 13:24:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `permission_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_builder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schooling` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curriculum` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `why` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_agency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `suppliers`
--

INSERT INTO `suppliers` (`id`, `user_id`, `document`, `date_of_birth`, `phone`, `whatsapp`, `address`, `number_builder`, `complement`, `zipcode`, `city`, `state`, `schooling`, `specialty`, `professional_document`, `facebook`, `instagram`, `youtube`, `linkedin`, `photo`, `curriculum`, `why`, `bank`, `bank_agency`, `bank_account`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, '857.189.203-20', '1981-06-25', '(85) 9.8102.4545', NULL, 'Rua Dom Sebastião Leme', '655', NULL, '60.050-160', 'Fortaleza', 'Ceará', 'Pós-graduada', 'Direito', 'OAB 19110', NULL, '@alanamscc', NULL, 'Alana Cavalcante', NULL, NULL, 'Network', NULL, NULL, NULL, '1', '2020-11-23 12:52:45', '2020-11-23 12:52:45'),
(2, 7, '795.125.933-00', '1978-08-25', '(85) 9.8696.2093', '(85) 9.8696.2093', 'RUA ANA FELICIO', '49', NULL, '61.760-000', 'EUSEBIO', 'CEARA', 'SUPERIOR COMPLETO', 'ADVOGADA', 'OAB 30298', 'christiane diogo', 'chrisdiogo', NULL, 'christiane diogo', NULL, NULL, 'para atuar na area juridica e poder ajudar outras mulheres', NULL, NULL, '65853-7', '1', '2020-12-21 20:39:34', '2020-12-21 20:39:34'),
(3, 9, '600.365.873-89', '1988-02-03', '(85) 9.8696.7859', '(85) 9.8696.7859', 'Rua Pereira Valente', '980 apto 702', NULL, '60.160-250', 'Fortaleza', 'CE', 'Pós graduação', 'Psicologia Clínica', '11/07979', NULL, '@tamiresmesquitapsi', NULL, 'https://www.linkedin.com/feed/', NULL, NULL, 'Para contribuir com o sucesso de outras mulheres', NULL, NULL, '20324-6', '1', '2020-12-22 23:18:33', '2020-12-22 23:18:33'),
(4, 16, '022.193.113-92', '1987-03-04', '(85) 9.8890.3279', '(85) 9.8890.3279', 'Rua Andrade Furtado', '955', NULL, '60.192-072', 'fortaleza ce', 'CE', 'SUPERIOR COMPLETO', 'DIREITO', 'OAB/CE 23.459', '@marcellamourao', '@marcellamourao', NULL, 'Marcella Mourão', NULL, NULL, 'Colaborar e contribuir', NULL, NULL, '145081-6', '1', '2021-09-01 19:35:12', '2021-09-01 19:35:12'),
(5, 17, '962.896.193-49', '1982-07-23', '(85) 9.9966.3728', '(85) 9.9295.8453', 'Rua Manuel Moura', '259', NULL, '60.330-780', 'Fortaleza', 'CE', 'ensino medio', 'desenvolvedor', 'Desenvolvimento', 'reginaldobarbosa', 'reginaldobarbosa', 'reginaldobarbosa', 'reginaldobarbosa', NULL, NULL, 'agregar conhecimento', NULL, NULL, '436750', '1', '2021-09-17 18:46:49', '2021-09-17 18:46:49'),
(6, 18, '359.176.363-20', '1967-12-16', '(85) 9.8789.6641', '(85) 9.8789.6641', 'rua manuel moura', '259', NULL, '60.330-780', 'fortaleza', 'ce', 'ensino medio', 'artesã', 'artesã', 'izalenemenezes', 'izalenemenezes', 'izalenemenezes', 'izalenemenezes', NULL, NULL, 'conhecimento', NULL, NULL, '436750', '1', '2021-09-19 03:23:49', '2021-09-19 03:23:49'),
(17, 83, '898', '2021-10-14', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-10-02 14:05:23', '2021-10-02 14:05:23'),
(18, 84, '898', '2021-10-10', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-10-02 14:07:59', '2021-10-02 14:07:59'),
(16, 82, '898', '2021-10-22', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-10-02 14:03:37', '2021-10-02 14:03:37'),
(14, 80, 'fweffwe', '2021-10-02', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-10-02 13:58:04', '2021-10-02 13:58:04'),
(15, 81, '898', '2021-10-22', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-10-02 14:02:39', '2021-10-02 14:02:39'),
(13, 79, '898', '2021-10-15', '846532574', NULL, 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', 'aaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaa', '1', '2021-10-02 13:49:13', '2021-10-02 13:49:13'),
(12, 62, '898', '2021-10-11', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', 'aaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaa', '1', '2021-10-01 05:17:29', '2021-10-01 05:17:29'),
(19, 92, 'fweffwe', '2021-10-28', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', 'aaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaa', '1', '2021-10-04 07:25:07', '2021-10-04 07:25:07'),
(20, 94, '898', '2021-10-15', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', 'aaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaa', '1', '2021-10-04 07:35:45', '2021-10-04 07:35:45'),
(21, 96, '898', '2021-10-02', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', 'aaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaaaaa', NULL, NULL, 'aaaaaaaaaaa', '1', '2021-10-04 15:49:22', '2021-10-04 15:49:22'),
(22, 99, 'fweffwe', '2021-09-28', '846532574', '89999999999999', 'Beira - Sofala', '846532574', NULL, '21232-431', 'Beira', 'Sofala', 'aaaaaa', NULL, NULL, 'aaaaaaa', NULL, NULL, 'aaaaaaaaaa', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-10-06 03:56:21', '2021-10-06 03:56:21'),
(23, 100, 'fweffwe', '2021-10-16', '846532574', '89999999999999', 'Avenida Paulista', '846532574', NULL, '01311-000', 'São Paulo', 'São Paulo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2021-10-06 04:03:11', '2021-10-06 04:03:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Angelino AT', 'thiago.dionizio@includetecnologia.com.br', '2020-11-19 13:24:08', '$2y$10$c8yj/XbsU91tYjCDBfK2JO2Dm0xelqt7Lw3ya1xPMrnkbUCI24UWe', 1, NULL, '2020-11-19 13:24:08', '2021-12-19 13:24:08'),
(2, 'User Admin', 'admin@includetecnologia.com.br', '2020-11-19 13:24:08', '$2y$10$ucCwIh9RjUqFqHHudnklRumheAz4wt580Nxaz06atbf7tK4j37m/.', 1, NULL, '2020-11-19 13:24:08', '2020-11-19 13:24:08'),
(3, 'Joyce Wendy', 'joycewendy2@gmail.com', NULL, '$2y$10$uqTaM2O690UR019NOHomt.8gr7JYRghAHiVl5E.dw9rwxneN/Rww6', 1, NULL, '2020-11-19 14:26:53', '2020-11-19 14:26:53'),
(4, 'Alana Cavalcante', 'alanacavalcante@yahoo.com.br', NULL, '$2y$10$fedgMWROnHi6MUZpesyS9uxsI/DqKwKR5dT03ZYSQiQRquNpPSs8u', 1, NULL, '2020-11-23 12:52:45', '2020-11-23 12:52:45'),
(5, 'JANIELLE FERNANDES SEVERO', 'janiellesevero@gmail.com', NULL, '$2y$10$nV2JwoMje2rWhi4i24VM3egYYNTCmEMtqIwulD7keDuNu6e9VVmFm', 1, NULL, '2020-11-28 21:40:49', '2020-11-28 21:40:49'),
(6, 'MARCELE CAROLINE MACIEL DE ALENCAR', 'marcelealencar@gmail.com', NULL, '$2y$10$re.7Tgr9qFsY3XSWvLVSy.eDXFuBQPSBob12Na5REx4j4MviXHDty', 1, NULL, '2020-12-03 00:36:43', '2020-12-03 00:36:43'),
(7, 'CHRISTIANE PINHEIRO DIOGO', 'christianediogo@hotmail.com', NULL, '$2y$10$CZim.mk9hzWTS/mToffChe00LsbyzFJmnIJYUaEKcFeYWSSWiJd.m', 1, NULL, '2020-12-21 20:39:34', '2020-12-21 20:39:34'),
(8, 'Alyne Soares Cardoso Silva', 'alynescs@hotmail.com', NULL, '$2y$10$Wl/Vf1Qboft.53/r46aQH.0BnvT34nJRZkLaoeoB7o5PBxbeuCYBS', 1, NULL, '2020-12-22 19:45:59', '2020-12-22 19:45:59'),
(9, 'Tamires Mesquita Machado', 'tamiresmesquita03@gmail.com', NULL, '$2y$10$CB9Pw4lS5eP48C07JSoneulx2JuQsfEODvneFAGHgqzluOa/x2Fcu', 1, NULL, '2020-12-22 23:18:33', '2020-12-22 23:18:33'),
(10, 'bela', 'deixebella@gmail.com', NULL, '$2y$10$fQUnHHjmwNwHnAqBTARyse9.vBTEBsjbNl8OG6xIWM50X/n6eReaa', 1, NULL, '2021-03-15 16:58:53', '2021-03-15 16:58:53'),
(11, 'Janine Assunçao', 'nikaassuncao92@gmail.com', NULL, '$2y$10$QxpoUd1oKFiPs9HC9Gvlmum6u3KiXl9IY3gWX66sGFr1t0yUCPoNe', 1, NULL, '2021-03-26 01:13:47', '2021-03-26 01:13:47'),
(12, 'Vanilda Alexsandra de Souza Moreira', 'vanildamoreira60@gmail.com', NULL, '$2y$10$6.r9ucIh9cCcPucOZIZjQOmX1znIE2htyCpPq5WIMFLT3xz.Y4A5i', 1, NULL, '2021-05-21 14:39:51', '2021-05-21 14:39:51'),
(13, 'Steffany Bezerra Da Silva Nazário', 'steffanynazario@gmail.com', NULL, '$2y$10$om5ZBPsoSko.A6AO2U2jLOxjbYoqvriACA7APwBuFNboGJ0gee5S.', 1, NULL, '2021-05-26 14:12:36', '2021-05-26 14:12:36'),
(14, 'jonas bazilio', 'jonasbazilio@gmail.com', NULL, '$2y$10$JB3rM5K3dFFUoA/mgF3Bke49Skl3qz8vXK3lkagLSy7NjefyoyrTq', 1, NULL, '2021-08-27 16:13:04', '2021-08-27 16:13:04'),
(15, 'Ricardo Vicente', 'ricardo-vital@hotmail.com', NULL, '$2y$10$etp3c.Llf.Xb86.YTv5x.uPyXQ02hLnBaTIRx1UeWZLoCKh9cCU5C', 1, NULL, '2021-08-27 16:17:16', '2021-08-27 16:17:16'),
(16, 'MARCELLA MOURÃO DE BRITO', 'marcellamouraob@gmail.com', NULL, '$2y$10$RSyENLAGnjEsYBXLHWVq2.qzfYUi1UPlW41SMD4V55y22efKkaTFy', 1, NULL, '2021-09-01 19:35:12', '2021-09-01 19:35:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 2, NULL, NULL),
(4, 4, 3, NULL, NULL),
(5, 5, 2, NULL, NULL),
(6, 6, 2, NULL, NULL),
(7, 7, 3, NULL, NULL),
(8, 8, 2, NULL, NULL),
(9, 9, 3, NULL, NULL),
(10, 11, 2, NULL, NULL),
(11, 12, 2, NULL, NULL),
(12, 13, 2, NULL, NULL),
(13, 14, 2, NULL, NULL),
(14, 15, 2, NULL, NULL),
(15, 16, 3, NULL, NULL),
(16, 17, 3, NULL, NULL),
(17, 18, 3, NULL, NULL),
(18, 19, 2, NULL, NULL),
(19, 20, 2, NULL, NULL),
(20, 21, 2, NULL, NULL),
(21, 22, 2, NULL, NULL),
(22, 23, 2, NULL, NULL),
(23, 24, 2, NULL, NULL),
(24, 25, 2, NULL, NULL),
(25, 26, 2, NULL, NULL),
(26, 49, 3, NULL, NULL),
(27, 50, 3, NULL, NULL),
(28, 99, 3, NULL, NULL),
(29, 100, 3, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_foreign` (`user_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_permissions_role_id_foreign` (`role_id`),
  ADD KEY `role_permissions_permission_id_foreign` (`permission_id`);

--
-- Índices para tabela `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suppliers_user_id_foreign` (`user_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de tabela `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
