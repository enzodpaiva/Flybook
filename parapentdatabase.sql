-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Dez-2019 às 22:51
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parapentdatabase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'enzo', 'enzodouglaspaiva@gmail.com', NULL, '$2y$10$GYIlN6rMScaCfo.uquWTDe5E/M.niBMCfnu1DPcNybAWVuV37uCdC', NULL, '2019-12-23 23:21:09', '2019-12-23 23:21:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `asa_deltas`
--

CREATE TABLE `asa_deltas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade_manutencao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fabricante_id` bigint(20) UNSIGNED NOT NULL,
  `modelo_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `asa_deltas`
--

INSERT INTO `asa_deltas` (`id`, `nome`, `validade_manutencao`, `fabricante_id`, `modelo_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'robin', '10/05/2019', 1, 1, 1, '2019-12-23 23:28:08', '2019-12-24 01:29:05'),
(2, 'rod', '10/08/2020', 2, 2, 1, '2019-12-24 01:23:35', '2019-12-24 01:39:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clubes`
--

CREATE TABLE `clubes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes`
--

CREATE TABLE `fabricantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `fabricantes`
--

INSERT INTO `fabricantes` (`id`, `name`, `cnpj`, `created_at`, `updated_at`) VALUES
(1, 'Sol', '85.255.743', '2019-12-23 23:24:13', '2019-12-23 23:24:13'),
(2, 'Lua', '1231564897', '2019-12-24 01:25:11', '2019-12-24 01:25:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instrutors`
--

CREATE TABLE `instrutors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registro_abp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade_habilitacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_perfil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `instrutors`
--

INSERT INTO `instrutors` (`id`, `name`, `idade`, `cpf`, `email`, `registro_abp`, `validade_habilitacao`, `img_perfil`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'carlos', '38', '07456329878', 'carlos@gmail.com', '123456', '1977-06-10', NULL, NULL, '$2y$10$m7PS37pRUOLr.p2QMieTe.xgwAsaejw8dY6PX.eSAh/v4HYSi/IoO', NULL, '2019-12-23 23:23:22', '2019-12-23 23:23:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_07_225620_create_rampas_table', 1),
(4, '2019_10_07_231154_create_tipo_asa_deltas_table', 1),
(5, '2019_10_07_231632_create_modelo_asa_deltas_table', 1),
(6, '2019_12_07_225421_create_instrutors_table', 1),
(7, '2019_12_07_225527_create_clubes_table', 1),
(8, '2019_12_07_225541_create_fabricantes_table', 1),
(9, '2019_12_07_225551_create_asa_deltas_table', 1),
(10, '2019_12_07_225611_create_voos_table', 1),
(11, '2019_12_07_225711_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo_asa_deltas`
--

CREATE TABLE `modelo_asa_deltas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `modelo_asa_deltas`
--

INSERT INTO `modelo_asa_deltas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Atmus XL', '2019-12-23 23:25:01', '2019-12-23 23:25:01'),
(2, 'Atumus XXL', '2019-12-24 01:24:51', '2019-12-24 01:24:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rampas`
--

CREATE TABLE `rampas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `local` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quadrante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `rampas`
--

INSERT INTO `rampas` (`id`, `local`, `altitude`, `quadrante`, `created_at`, `updated_at`) VALUES
(1, 'rochedinho', '300', 's/n', '2019-12-23 23:21:58', '2019-12-23 23:21:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_asa_deltas`
--

CREATE TABLE `tipo_asa_deltas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registro_abp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade_habilitacao` date NOT NULL,
  `img_perfil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `idade`, `cpf`, `level`, `registro_abp`, `validade_habilitacao`, `img_perfil`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rafael', '18', '07436890226', '0', '789456', '2200-06-10', NULL, 'rafael@gmail.com', NULL, '$2y$10$/wgxfV8cjDWQftveG5JhvetrH/sLwvgaBdfffj38IbjSKofH97/hy', NULL, '2019-12-23 23:26:20', '2019-12-23 23:26:20'),
(2, 'thiago', '20', '04563217889', '0', '654123', '1980-09-10', NULL, 'thiago@gmail.com', NULL, '$2y$10$E0nmsSb6z4yK0cTn5TjJWO52ubCuq0X5SGe2zkxSnHlqoU7tClfn6', NULL, '2019-12-24 00:06:11', '2019-12-24 00:06:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voos`
--

CREATE TABLE `voos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distancia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altura` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direcao_vento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aguardando aprovação do instrutor',
  `lift` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `termais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibilidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio` time NOT NULL,
  `fim` time NOT NULL,
  `velocidade_vento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rampa_id` bigint(20) UNSIGNED NOT NULL,
  `asaDelta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `instrutor_id` bigint(20) UNSIGNED NOT NULL,
  `observacoes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `voos`
--

INSERT INTO `voos` (`id`, `data`, `distancia`, `altura`, `direcao_vento`, `status`, `lift`, `termais`, `visibilidade`, `inicio`, `fim`, `velocidade_vento`, `rampa_id`, `asaDelta_id`, `user_id`, `instrutor_id`, `observacoes`, `created_at`, `updated_at`) VALUES
(3, '02/12/2019', '600', '200', 'sul', 'aguardando avaliação do instrutor', 'sim', 'sim', 'claro', '10:20:00', '10:55:00', '100', 1, 1, 1, 1, 'Prego. Sem vento no pouso, derrapada mas logo recuperação da asa.', '2019-12-24 00:02:35', '2019-12-24 00:02:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `asa_deltas`
--
ALTER TABLE `asa_deltas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asa_deltas_fabricante_id_foreign` (`fabricante_id`),
  ADD KEY `asa_deltas_modelo_id_foreign` (`modelo_id`),
  ADD KEY `asa_deltas_user_id_foreign` (`user_id`);

--
-- Indexes for table `clubes`
--
ALTER TABLE `clubes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fabricantes_cnpj_unique` (`cnpj`);

--
-- Indexes for table `instrutors`
--
ALTER TABLE `instrutors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instrutors_cpf_unique` (`cpf`),
  ADD UNIQUE KEY `instrutors_email_unique` (`email`),
  ADD UNIQUE KEY `instrutors_registro_abp_unique` (`registro_abp`),
  ADD UNIQUE KEY `instrutors_validade_habilitacao_unique` (`validade_habilitacao`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelo_asa_deltas`
--
ALTER TABLE `modelo_asa_deltas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rampas`
--
ALTER TABLE `rampas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_asa_deltas`
--
ALTER TABLE `tipo_asa_deltas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_cpf_unique` (`cpf`),
  ADD UNIQUE KEY `users_registro_abp_unique` (`registro_abp`),
  ADD UNIQUE KEY `users_validade_habilitacao_unique` (`validade_habilitacao`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voos`
--
ALTER TABLE `voos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voos_rampa_id_foreign` (`rampa_id`),
  ADD KEY `voos_asadelta_id_foreign` (`asaDelta_id`),
  ADD KEY `voos_user_id_foreign` (`user_id`),
  ADD KEY `voos_instrutor_id_foreign` (`instrutor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asa_deltas`
--
ALTER TABLE `asa_deltas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clubes`
--
ALTER TABLE `clubes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instrutors`
--
ALTER TABLE `instrutors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `modelo_asa_deltas`
--
ALTER TABLE `modelo_asa_deltas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rampas`
--
ALTER TABLE `rampas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipo_asa_deltas`
--
ALTER TABLE `tipo_asa_deltas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `voos`
--
ALTER TABLE `voos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `asa_deltas`
--
ALTER TABLE `asa_deltas`
  ADD CONSTRAINT `asa_deltas_fabricante_id_foreign` FOREIGN KEY (`fabricante_id`) REFERENCES `fabricantes` (`id`),
  ADD CONSTRAINT `asa_deltas_modelo_id_foreign` FOREIGN KEY (`modelo_id`) REFERENCES `modelo_asa_deltas` (`id`),
  ADD CONSTRAINT `asa_deltas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `voos`
--
ALTER TABLE `voos`
  ADD CONSTRAINT `voos_asadelta_id_foreign` FOREIGN KEY (`asaDelta_id`) REFERENCES `asa_deltas` (`id`),
  ADD CONSTRAINT `voos_instrutor_id_foreign` FOREIGN KEY (`instrutor_id`) REFERENCES `instrutors` (`id`),
  ADD CONSTRAINT `voos_rampa_id_foreign` FOREIGN KEY (`rampa_id`) REFERENCES `rampas` (`id`),
  ADD CONSTRAINT `voos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
