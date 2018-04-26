-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jul-2016 às 08:03
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_personalize`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_categoria` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome_categoria`, `descricao_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Jogos Escolares', 'Descricao', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Esportivas', 'Camisetas Esportivas Gerais', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Aniversários Infantis', 'Camisetas para festas e aniversários infantis.\r\nCamisetas em malha poly e Dry Fit.', '0000-00-00 00:00:00', '2016-06-22 02:12:28'),
(4, 'Festa Junina', 'Camiseta Festa Junina', '2016-06-13 07:55:28', '2016-06-13 07:55:28'),
(5, 'Camiseta Terceirão', 'Camiseta Terceirão ', '2016-06-13 08:07:11', '2016-06-13 08:07:11'),
(6, 'Almofadas Personalizadas', 'Almofadas Personalizadas. Tamanhos: 20 x 20, 30 x 30 40 x 40 60 x 60', '2016-06-13 08:09:42', '2016-06-13 08:09:42'),
(7, 'Canecas Personalizadas', 'Canecas Personalizadas', '2016-06-13 08:13:48', '2016-06-13 08:13:48'),
(8, 'Abadá de Carnaval', 'Abadá de Carnaval em vários tecidos, como: Dry Fit, Elanquinha e Poliester', '2016-06-13 08:17:27', '2016-06-13 08:17:27'),
(9, 'Eventos', 'Camisetas para Eventos', '2016-06-13 08:19:32', '2016-06-13 08:19:32'),
(11, 'Uniformes Escolares', 'Categoria de Uniformes Escolares', '2016-06-13 08:30:56', '2016-06-13 08:30:56'),
(12, 'Convites Infantis', 'Convites infantis', '2016-07-12 00:32:53', '2016-07-12 00:32:53'),
(13, 'Banner em Lona', 'Banner em Lona', '2016-07-12 00:33:41', '2016-07-12 00:33:41'),
(14, 'Convites Baby Chá', 'Convites Baby Chá!', '2016-07-12 00:34:22', '2016-07-12 00:34:22'),
(15, 'Camisetas Acadêmicas', 'Camisetas Acadêmicas', '2016-07-12 01:10:50', '2016-07-12 01:10:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_27_002042_create_categoria_table', 1),
('2016_03_27_002106_create_orcamento_rap_table', 1),
('2016_06_10_211214_create_produto_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamentorap`
--

CREATE TABLE IF NOT EXISTS `orcamentorap` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_prod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor_prod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_prod` text COLLATE utf8_unicode_ci NOT NULL,
  `image_principal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_prod`, `valor_prod`, `descricao_prod`, `image_principal`, `image_2`, `image_3`, `image_4`, `nome_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Jogo de Camiseta Heineken 2013', 'A partir de 10 unid. R$32,00', 'Jogo de Camiseta esportivo em tecido Dry Fit com sublimação 100%\r\n', 'Jogo de camisa Heineken Frente.jpg', 'Jogo camisa Heineken Costa.jpg', '', '', 'Esportivas', NULL, '2016-06-18 01:30:23'),
(4, 'Camisa Terceirão Memes - Marcelinas', 'A partir de 15 unid. R$30,00', 'Camiseta Terceirão 100% sublimada. Tecido Poly.', 'Terceirao 2013 Frente.jpg', 'Terceirao 2013 Costa.jpg', '', '', 'Camiseta Terceirão', NULL, '2016-06-18 01:16:32'),
(5, 'Camiseta Radio Farol 2013', 'A partir de 15 unid. R$35,00', 'Camiseta em tecido Poly 100% sublimada!!', 'Radio Farol 2013 Ped Keila1 frente.jpg', 'Radio Farol 2013 Ped Keila1 costas.jpg', '', '', 'Festa Junina', NULL, NULL),
(7, 'Camiseta Esportiva Coca Cola', 'A partir de 10 unid. R$30,00', 'Camiseta esportiva em tecido dry fit. 100% sublimado.', 'Coca Cola Jogo Grupo simoes Ped Tais frente.jpg', 'Coca Cola Jogo Grupo simoes Ped Tais costas.jpg', '', '', 'Esportivas', '2016-06-17 05:10:05', NULL),
(8, 'Comitiva Cachaça na Mão...', 'A paritir de 20 unid. R$29,99', 'Camiseta para comitiva.\r\nRegata, tecido Poliester branco 100% sublimada', 'Comitiva Cachaca na mao porteira no chao 2012 frente.jpg', 'Comitiva Cachaca na mao porteira no chao 2012 costa.jpg', '', '', 'Comitiva Cavalgada', '2016-06-17 23:20:50', NULL),
(9, 'Terceirão Efeitos Preta', 'A partir de 30unid. R$45,00', 'Camiseta Terceirão Efeitos 3D preta.', 'Modelo terceirao 2013 frente.jpg', 'Modelo terceirao 2013 costa.jpg', '', '', 'Camiseta Terceirão', '2016-06-28 14:54:15', NULL),
(11, 'Jogo de Camiseta Coca Cola', 'A partir de 10 unid. R$45,00', 'Modelo Descrição', 'Coca Cola Jogo Grupo simoes Ped Tais frente.jpg', 'Coca Cola Jogo Grupo simoes Ped Tais costas.jpg', '', '', 'Esportivas', '2016-06-30 15:52:59', NULL),
(12, 'Camiseta Esportiva - Black Font', 'A paritir de 20 unid. R$29,99', 'Camiseta em tecido dry fit com sublimação 100%.', 'camisa preta ondulada 02 frente.jpg', 'camisa preta ondulada costa.jpg', '', '', 'Esportivas', '2016-07-08 21:37:08', NULL),
(13, 'Jogo de camiseta Esportiva laranja esp listrada', 'A partir de 10 unid. R$45,00', 'Camiseta esportiva em tecido Dry fit, trilobool perfurado. Sublimação 100%.', 'camisa laranja listrada frente.jpg', 'camisa laranja listrada costa.jpg', '', '', 'Esportivas', '2016-07-08 21:49:01', NULL),
(14, 'Jogo de Camiseta Esportiva modelo Azul perfurado', 'A partir de 10 unid. R$35,00', 'Camiseta esportiva em tecido Dry Fit - trilobool perfurado. Sublimação 100%, frente, costa manga', 'camisa azul ondulada frente.jpg', 'camisa azul ondulada costa.jpg', '', '', 'Jogos Escolares', '2016-07-08 21:54:55', NULL),
(15, 'Camiseta Esportiva #camtopverde listrada', 'A partir de 10 unid. R$45,00', 'Camiseta esportiva em sublimação 100%. Tecido Dry fit.', 'camisa verde listrada frente.jpg', 'camisa verde listrada costa.jpg', '', '', 'Esportivas', '2016-07-08 21:56:54', NULL),
(16, 'Convite Baby Chá 10x10  personalizado com foto', '50 unid. R$80,00', 'Convite 10 x 10 cm fotográfico personalizado com foto. 4 x 0 250g\r\nA partir de 50 unidades.', 'convite_foto.jpg', 'convite_foto.jpg', '', '', 'Convites Baby Chá', '2016-07-11 21:28:08', NULL),
(17, 'Convite baby chá 10x10 cm casal na foto', '50 unid. R$80,00', 'Convite personalizado com foto do casal.\r\nEspecificações:\r\nTam: 10 x 10\r\nTipo: Fotográfico\r\nFrente: única 4x0', 'convite_casal.jpg', 'convite_casal.jpg', '', '', 'Convites Baby Chá', '2016-07-11 21:30:42', NULL),
(18, 'Banner em lona 3 x 50 cm com ilhoes', 'R$250,00', 'Banner em lona 3 x 50 cm com ilhoes', 'banner_01.jpg', 'banner_01.jpg', '', '', 'Banner em Lona', '2016-07-11 21:37:33', NULL),
(19, 'Camiseta de Administração ADM - Preta A', 'A partir de 10 unid. R$35,00', 'Camiseta preta de Administração\r\nEspecificações:\r\nTecido: Algodão\r\nPintura: Silk\r\nCor: Preta', 'adm.JPG', 'preta_costa.jpg', '', '', 'Camisetas Acadêmicas', '2016-07-11 22:22:52', NULL),
(20, 'Camiseta Preta - Sistemas de informaçõao (system)', 'A partir de 10 unid. R$45,00', 'Camiseta Sistemas de informação\r\nEspecificações:\r\nTecido: Algodão\r\nPintura: Silk\r\nCor: Preta', 'Camisa Sistemas modelo 2 preta.jpg', 'preta_costa.jpg', '', '', 'Camisetas Acadêmicas', '2016-07-11 22:26:14', NULL),
(21, 'Camiseta branca Pedagogia - Coruja Black', 'A partir de 6 unid. R$35,00', 'Camiseta Pedagogia:\r\nEspecificações:\r\nTecido: Polly\r\nPintura: Sublimação\r\nCor: Branca', 'Pedagogia Princess branca.jpg', 'branca_costa.jpg', '', '', 'Camisetas Acadêmicas', '2016-07-11 22:30:31', NULL),
(22, 'Camiseta Arquitetura ', 'A partir de 15 unid. R$35,00', 'Descrikdkdk', 'Arquitetura Roma branca.jpg', 'branca_costa.jpg', '', '', 'Camisetas Acadêmicas', '2016-07-13 19:00:47', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anderson Seixas', 'andersonseixas.xt@gmail.com', '$2y$10$05KXwy9Dzl.2m/1.JJ5Uq.SJKjzpdmg2izIZieyuIDpxbkQR8nat.', 'LyEDjUdAu8m55ZQXag578arHf8oVlC5xdlLmA43N1u0R2BDoQmEbVHlGaOCL', '2016-06-30 00:29:38', '2016-07-18 08:04:30'),
(2, 'Alecsandro Oliveira', 'alex@mail.com', '$2y$10$xbw29yZQMa9aOv7jnW9JlexF4rt.I2kLsCI.mjlmbtEzi9PPayEhu', NULL, '2016-06-30 02:19:21', '2016-06-30 02:19:21'),
(3, 'Gessica Tauane', 'gessica.tauane22@gmail.com', '$2y$10$FNK08OiAP.C06x6mMie6MeGk2y2mGnbO7KZEYx7/V9xZY/9p29PIu', 'H0uSec0bosO6Eu8VSeN9f67sHFqUR4IxIonqGSsNv2IpkFyLudr33KVMaCAD', '2016-07-10 01:14:34', '2016-07-10 01:15:26'),
(4, 'Rodrigo', 'rodrigo@mail.com', '$2y$10$b3e6CeutPC89wV8EMlJrHesyL2bN5eYrz6igt0V1b3QhAUIzcF.b2', 'bZeYzA0B2jKKRQAv7lELuQidn8J9L7wgKlDtw43R99mPlK8iXwsoGFbq0TPk', '2016-07-15 23:53:20', '2016-07-15 23:54:22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
