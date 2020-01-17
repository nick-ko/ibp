-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 17 jan. 2020 à 10:24
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ibp`
--

-- --------------------------------------------------------

--
-- Structure de la table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sect_entreprise` longtext NOT NULL,
  `sect_mission` longtext NOT NULL,
  `sect_objectif` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abouts`
--

INSERT INTO `abouts` (`id`, `sect_entreprise`, `sect_mission`, `sect_objectif`, `created_at`, `updated_at`) VALUES
(4, '<span style=\"color: rgb(85, 85, 85); font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(254, 254, 254);\">I.B.P est nee pour repondre aux nouveaux besoins des organisations grandes et petites entreprises, &Atilde;&#131;&Acirc;&copy;cosyst&Atilde;&#131;&Acirc;&uml;mes innovants, administrations et organismes du secteur public, associations&Atilde;&cent;&acirc;&#130;&not;&Acirc;&brvbar;) qui font face a des defis de plus en plus complexes, dans un contexte d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;incertitude accrue S&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;adapter a&nbsp; un monde connect&Atilde;&#131;&Acirc;&copy;, globalise, acc&Atilde;&#131;&Acirc;&copy;l&Atilde;&#131;&Acirc;&copy;r&Atilde;&#131;&Acirc;&copy;, requiert de nouvelles approches. Pour reflechir, decider et agir efficacement, l&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;expertise pure ne suffit plus : il devient n&Atilde;&#131;&Acirc;&copy;cessaire de consid&Atilde;&#131;&Acirc;&copy;rer les interrelations de plusieurs secteurs d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;activit&Atilde;&#131;&Acirc;&copy;s, de plusieurs fonctions, de plusieurs cultures. &Atilde;&#131;&acirc;&#130;&not; une &Atilde;&#131;&Acirc;&copy;poque de chocs et de crises, les m&Atilde;&#131;&Acirc;&copy;thodes et analyses classiques peuvent s&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;av&Atilde;&#131;&Acirc;&copy;rer inappropri&Atilde;&#131;&Acirc;&copy;es. Alors que des secteurs d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;activit&Atilde;&#131;&Acirc;&copy; entiers sont sous pression, les organisations S&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;adapter &Atilde;&#131;&nbsp; un monde connect&Atilde;&#131;&Acirc;&copy;, globalis&Atilde;&#131;&Acirc;&copy;, acc&Atilde;&#131;&Acirc;&copy;l&Atilde;&#131;&Acirc;&copy;r&Atilde;&#131;&Acirc;&copy;, requiert de nouvelles approches. Pour r&Atilde;&#131;&Acirc;&copy;fl&Atilde;&#131;&Acirc;&copy;chir, d&Atilde;&#131;&Acirc;&copy;cider et agir efficacement, l&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;expertise pure ne suffit plus : il devient n&Atilde;&#131;&Acirc;&copy;cessaire de consid&Atilde;&#131;&Acirc;&copy;rer les interrelations de plusieurs secteurs d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;activit&Atilde;&#131;&Acirc;&copy;s, de plusieurs fonctions, de plusieurs cultures. &Atilde;&#131;&acirc;&#130;&not; une &Atilde;&#131;&Acirc;&copy;poque de chocs et de crises, les m&Atilde;&#131;&Acirc;&copy;thodes et analyses classiques peuvent s&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;av&Atilde;&#131;&Acirc;&copy;rer inappropri&Atilde;&#131;&Acirc;&copy;es. Alors que des secteurs d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;activit&Atilde;&#131;&Acirc;&copy; entiers sont sous pression, les organisations doivent plus que jamais innover, se diff&Atilde;&#131;&Acirc;&copy;rencier et se doter de l&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;agilit&Atilde;&#131;&Acirc;&copy; n&Atilde;&#131;&Acirc;&copy;cessaire pour cr&Atilde;&#131;&Acirc;&copy;er et pr&Atilde;&#131;&Acirc;&copy;venir la surprise strat&Atilde;&#131;&Acirc;&copy;gique.<span style=\"color: rgb(85, 85, 85); font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(254, 254, 254);\">.</span></span>\n', '<span style=\"color: rgb(85, 85, 85); font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(254, 254, 254);\">R&Atilde;&#131;&Acirc;&copy;pondre aux nouveaux besoins des organisations (grandes et petites entreprises, &Atilde;&#131;&Acirc;&copy;cosyst&Atilde;&#131;&Acirc;&uml;mes innovants, administrations et organismes du secteur public, associations&Atilde;&cent;&acirc;&#130;&not;&Acirc;&brvbar;) qui font face &Atilde;&#131;&Acirc;&nbsp; des d&Atilde;&#131;&Acirc;&copy;fis de plus en plus complexes, dans un contexte d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;incertitude accrue. S&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;adapter &Atilde;&#131;&Acirc;&nbsp; un monde connect&Atilde;&#131;&Acirc;&copy;, globalis&Atilde;&#131;&Acirc;&copy;, acc&Atilde;&#131;&Acirc;&copy;l&Atilde;&#131;&Acirc;&copy;r&Atilde;&#131;&Acirc;&copy;, requiert de nouvelles approches. Pour r&Atilde;&#131;&Acirc;&copy;fl&Atilde;&#131;&Acirc;&copy;chir, d&Atilde;&#131;&Acirc;&copy;cider et agir efficacement, l&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;expertise pure ne suffit plus : il devient n&Atilde;&#131;&Acirc;&copy;cessaire de consid&Atilde;&#131;&Acirc;&copy;rer les interrelations de plusieurs secteurs d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;activit&Atilde;&#131;&Acirc;&copy;s, de plusieurs fonctions, de plusieurs cultures. Votre r&Atilde;&#131;&Acirc;&copy;ussite est notre affaire, nous sommes &Atilde;&#131;&Acirc;&nbsp; vos cot&Atilde;&#131;&Acirc;&copy;s et nous vous conseillons dans vos d&Atilde;&#131;&Acirc;&copy;marches. Mettons &Atilde;&#131;&Acirc;&nbsp; votre disposition une expertise avec des outils qui permettent de vous proposer des solutions en ad&Atilde;&#131;&Acirc;&copy;quation avec la demande de votre march&Atilde;&#131;&Acirc;&copy;. Nous d&Atilde;&#131;&Acirc;&copy;veloppons aussi des applications m&Atilde;&#131;&Acirc;&copy;tiers qui boosteront votre productivit&Atilde;&#131;&Acirc;&copy;. &Atilde;&#131;&acirc;&#130;&not; une &Atilde;&#131;&Acirc;&copy;poque de chocs et de crises, les m&Atilde;&#131;&Acirc;&copy;thodes et analyses classiques peuvent s&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;av&Atilde;&#131;&Acirc;&copy;rer inappropri&Atilde;&#131;&Acirc;&copy;es. Alors que des secteurs d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;activit&Atilde;&#131;&Acirc;&copy; entiers sont sous pression, les organisations doivent plus que jamais innover, se diff&Atilde;&#131;&Acirc;&copy;rencier et se doter de l&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;agilit&Atilde;&#131;&Acirc;&copy; n&Atilde;&#131;&Acirc;&copy;cessaire pour cr&Atilde;&#131;&Acirc;&copy;er et pr&Atilde;&#131;&Acirc;&copy;venir la surprise strat&Atilde;&#131;&Acirc;&copy;gique.<span style=\"color: rgb(85, 85, 85); font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(254, 254, 254);\">.</span></span>\n', '<p><a href=\"http://127.0.0.1:8000/about#\" style=\"background-color: rgb(254, 254, 254); color: rgb(34, 34, 34); outline: none; transition: all 300ms linear 0s; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 700; font-stretch: normal; font-size: 18px; line-height: normal; font-family: Roboto, sans-serif; text-transform: uppercase;\">CONTRIBUER &Atilde;&#131;&acirc;&#130;&not; D&Atilde;&#131;&acirc;&#128;&deg;VELOPPER VOTRE STRAT&Atilde;&#131;&acirc;&#128;&deg;GIE</a><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(254, 254, 254);\"></span><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 14px; line-height: 26px; font-family: Roboto, sans-serif; color: rgb(85, 85, 85); padding-top: 20px; padding-bottom: 54px; background-color: rgb(254, 254, 254);\">Nous croyons qu&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;une strat&Atilde;&#131;&Acirc;&copy;gie ne se copie pas. Au-del&Atilde;&#131;&nbsp; des benchmarks et de la reproduction des &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;bonnes pratiques&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157; d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;un secteur donn&Atilde;&#131;&Acirc;&copy;, au final pas toujours adapt&Atilde;&#131;&Acirc;&copy;es et, de surcro&Atilde;&#131;&Acirc;&reg;t, non diff&Atilde;&#131;&Acirc;&copy;renciantes dans un contexte comp&Atilde;&#131;&Acirc;&copy;titif, I.B.P vous propose d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;innover en vous dotant d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;une solution unique, con&Atilde;&#131;&Acirc;&sect;ue pour vous et par vous, avec le support de consultants et d&Atilde;&cent;&acirc;&#130;&not;&acirc;&#132;&cent;experts &Atilde;&#131;&nbsp; votre service. Ceux-ci vous apporteront une &Atilde;&#131;&Acirc;&copy;coute attentive et un appui m&Atilde;&#131;&Acirc;&copy;thodologique, ils partageront leurs exp&Atilde;&#131;&Acirc;&copy;riences v&Atilde;&#131;&Acirc;&copy;cues dans des circonstances analogues, ainsi que le fruit de la R&amp;D de I.B.P dans les domaines de la strat&Atilde;&#131;&Acirc;&copy;gie et du management</p><p></p></p>\n', '2019-06-22 06:45:15', '2019-06-22 09:38:31');

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ETUDE DE FAISABILITÉ D\'UNE USINE DE TRANSFORMATION DE FRUITS', 'Etude de faisabilité pour la construction d\'une usine de transformation de fruits en Côte D\'Ivoire', 'images/actualite/kfyskZWq7QrCRRFL9Zhi.jpg', '2019-06-26 05:58:06', '2019-06-26 05:58:06');

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Nick Dev', 'nickdev@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL),
(3, 'admin', 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `articleId`, `created_at`, `updated_at`) VALUES
(1, 'nick', 'nickdev@gmail.com', 'test', '1', '2019-06-23 17:46:50', '2019-06-23 17:46:50'),
(2, 'nick koffi', 'bbsbjs@sbs', 'AZERTY', '1', '2019-06-25 12:04:50', '2019-06-25 12:04:50');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 14px; line-height: 26px; font-family: Roboto, sans-serif; color: rgb(85, 85, 85); padding-top: 30px;\">N\'hesitez pas a&nbsp; nous contacter si vous avez des questions ou des projets a&nbsp; nous soumettre, nous vous repondrons dans les plus bref delais.<div class=\"location\" style=\"padding-top: 55px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 14px;\"><div class=\"location_laft\" style=\"width: 98px; float: left;\"><a class=\"f_location\" href=\"http://127.0.0.1:8000/contact#\" style=\"color: rgb(85, 85, 85); outline: none; transition: all 300ms linear 0s; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; display: block; text-transform: uppercase; padding-bottom: 30px;\"><b>LOCATION</b></a><a href=\"http://127.0.0.1:8000/contact#\" style=\"color: rgb(85, 85, 85); outline: none; transition: all 300ms linear 0s; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; display: block; text-transform: uppercase;\"><b>PHONE</b></a><a href=\"http://127.0.0.1:8000/contact#\" style=\"color: rgb(85, 85, 85); outline: none; transition: all 300ms linear 0s; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; display: block; text-transform: uppercase;\"><b>FAX</b></a><a href=\"http://127.0.0.1:8000/contact#\" style=\"color: rgb(85, 85, 85); outline: none; transition: all 300ms linear 0s; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; display: block; text-transform: uppercase;\"><b>EMAIL</b></a></div><div class=\"address\"><a href=\"http://127.0.0.1:8000/contact#\" style=\"color: rgb(85, 85, 85); outline: none; transition: all 300ms linear 0s; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; display: block;\">ABIDJAN, COCODY, RIVIERA 3&nbsp;<br>BONOUMIN</a><a href=\"http://127.0.0.1:8000/contact#\" style=\"color: rgb(85, 85, 85); outline: none; transition: all 300ms linear 0s; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; display: block;\">+225 02 15 50 24</a><a href=\"http://127.0.0.1:8000/contact#\" style=\"color: rgb(85, 85, 85); outline: none; transition: all 300ms linear 0s; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: 28px; display: block;\">+225 09 86 63 93</a><font color=\"#555555\"><span style=\"outline-color: initial; outline-width: initial; transition-duration: 300ms; transition-timing-function: linear; transition-property: all; font-stretch: normal; line-height: 28px; display: block;\">info@ibp-holding.com</span></font></div></div><p></p><p></p><p></p><p></p></p>\n', '2019-06-21 23:16:44', '2019-06-21 23:57:58');

-- --------------------------------------------------------

--
-- Structure de la table `cvs`
--

DROP TABLE IF EXISTS `cvs`;
CREATE TABLE IF NOT EXISTS `cvs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_20_125314_create_admins_table', 1),
(4, '2019_06_20_145146_create_sliders_table', 1),
(5, '2019_06_21_171356_create_contacts_table', 2),
(6, '2019_06_22_001311_create_abouts_table', 3),
(7, '2019_06_23_103321_create_blogs_table', 4),
(8, '2019_06_23_171153_create_comments_table', 5),
(9, '2019_06_23_215547_create_sondages_table', 6),
(10, '2019_06_24_090355_create_projets_table', 7),
(11, '2019_06_25_063846_create_participants_table', 8),
(12, '2019_06_26_050235_create_actualites_table', 9),
(13, '2019_06_26_050409_create_services_table', 9),
(15, '2019_07_08_132837_create_offres_table', 10),
(17, '2019_07_10_051322_create_cvs_table', 11),
(18, '2020_01_16_232841_create_socials_table', 12),
(19, '2020_01_17_065329_create_partenaires_table', 13);

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

DROP TABLE IF EXISTS `offres`;
CREATE TABLE IF NOT EXISTS `offres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `poste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
CREATE TABLE IF NOT EXISTS `partenaires` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'images/partenaire/1.jpg', 'https://chapchap.ci/', '2020-01-17 08:10:33', '2020-01-17 08:10:33');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE IF NOT EXISTS `participants` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `participants`
--

INSERT INTO `participants` (`id`, `email`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'nickdev@gmail.com', '1', 'pour', '2019-06-25 11:45:17', '2019-06-25 11:45:17'),
(2, 'nicaisekoffi40@gmail.com', '1', 'contre', '2019-06-25 11:51:36', '2019-06-25 11:51:36'),
(3, 'hello@gmail.com', '1', 'contre', '2019-06-25 12:01:36', '2019-06-25 12:01:36'),
(4, 'fabricetraore@22gmail.com', '1', 'pour', '2019-06-25 16:40:51', '2019-06-25 16:40:51'),
(5, 'nicaisekoffi123@yahoo.fr', '1', 'pour', '2019-06-26 14:37:07', '2019-06-26 14:37:07'),
(6, 'test@gmail.com', '1', 'pour', '2019-06-27 09:06:42', '2019-06-27 09:06:42'),
(7, 'azerty@gmail.com', '1', 'pour', '2019-06-27 09:26:07', '2019-06-27 09:26:07'),
(8, 'nickdev@nan.ci', '1', 'contre', '2019-08-20 17:00:57', '2019-08-20 17:00:57');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `title`, `categorie`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'E-Commerce', 'informatique', 'images/projets/6.png', '<h4 style=\"font-family: Oswald, sans-serif; line-height: 1.25; color: rgb(68, 68, 68); margin-bottom: 20px; font-size: 24px; text-transform: uppercase;\">DESCRIPTION DU PROJET<p style=\"margin: 24px 0px; line-height: 24px; color: rgb(103, 103, 103); font-family: Avenir;\"></p><p class=\"MsoNormal\" style=\"margin: 0cm 0cm 8pt; font-size: 11pt; line-height: 15.6933px; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0);\"><span lang=\"FR\" style=\"font-size: 16pt; line-height: 22.8267px; color: rgb(91, 155, 213);\">Objectifs</span></p><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Avant tout, nous souhaitons ouvrir à travers le commerce electronique de nouvelles perspectives tant au niveau de nos clients que de nous.</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Nos clients doivent y trouver leurs comptes en ayant accumulés  une large gamme de produits ou de services et cela, plus facilement. Quant à;&nbsp; nous, trouver un moyen d\'expansion commerciale assez efficace et peu couteux.</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Le commerce électronique&nbsp;constitue&nbsp;donc pour nous&nbsp;un nouveau canal de&nbsp;distribution&nbsp;en&nbsp;complement&nbsp;d\'un reseau&nbsp;de&nbsp;vente traditionnel.</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; text-align: justify;\">&nbsp;</div><p class=\"MsoNormal\" style=\"margin: 0cm 0cm 8pt; font-size: 11pt; line-height: 15.6933px; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0);\"><span lang=\"FR\" style=\"font-size: 16pt; line-height: 22.8267px; color: rgb(91, 155, 213);\">Composants d\'un projet de commerce en ligne</span></p><p style=\"margin: 24px 0px; line-height: 24px; color: rgb(103, 103, 103); font-family: Avenir;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px;\">Le site de commerce electronique se compose des fonctionnalité;&copy;s suivantes :</span></p><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; padding-left: 30px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Module :</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; padding-left: 60px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Gestion commerciale (enregistrement, validation des clients)</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; padding-left: 60px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Gestion du catalogue des produits</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; padding-left: 60px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Configuration des achats</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; padding-left: 60px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Suivi des commandes&acirc;&#128;&brvbar;</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; padding-left: 60px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Configurateur des produits et des ventes</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; padding-left: 60px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Moteur de recherche&nbsp;</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; padding-left: 60px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Messagerie&acirc;&#128;&brvbar;</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;</span></div><div style=\"color: rgb(103, 103, 103); font-family: Avenir; font-size: 14px; text-align: justify;\"><span lang=\"FR\" style=\"font-size: 14pt; line-height: 19.9733px; color: rgb(0, 0, 0);\">Une&nbsp;&nbsp;infrastructure&nbsp;&nbsp;de&nbsp;paiement&nbsp;&nbsp;s&Atilde;&copy;curis&Atilde;&copy;&nbsp;&nbsp;&Acirc;&laquo;e.Paiement&Acirc;&raquo;. On y trouve le paiement par carte bancaire, par e.Carte bancaire et par d&acirc;&#128;&#153;autres syst&Atilde;&uml;mes interm&Atilde;&copy;diaires de paiement comme le mobile money. Tous les modes de paiements ob&Atilde;&copy;issent &Atilde;&nbsp; certaines r&Atilde;&uml;gles et standards de s&Atilde;&copy;curit&Atilde;&copy; et apportent aux clients et a nous une certaine confiance.</span></div></h4>\r\n', '2019-06-24 22:24:04', '2019-06-24 22:24:04');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenue` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `contenue`, `created_at`, `updated_at`) VALUES
(1, 'SYSTÈME D\'INFORMATION', 'images/services/dev.jpg', 'L\'innovation, levier de changement pour votre entreprise.\r\n\r\nDe l\'audit de votre système d\'information jusqu\'à sa maintenance, nous nous engageons dans le maintien en conditions opérationnelles de votre informatique. Nous dévéloppons toutes solutions répondant à vos besoins métier. nous réalisons votre schéma directeur ainsi que les strategies de mise en oeuvre.', '2019-06-26 15:43:01', '2019-06-26 15:43:01');

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sliders`
--

INSERT INTO `sliders` (`id`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'IBP: International Business Partner', 'images/sliders/slider-2.jpg', '2019-06-21 10:28:18', '2019-06-21 10:28:18');

-- --------------------------------------------------------

--
-- Structure de la table `socials`
--

DROP TABLE IF EXISTS `socials`;
CREATE TABLE IF NOT EXISTS `socials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `socials`
--

INSERT INTO `socials` (`id`, `name`, `logo`, `link`, `created_at`, `updated_at`) VALUES
(2, 'facebook', 'fa fa-facebook', 'https://fr-fr.facebook.com/', '2020-01-17 04:45:12', '2020-01-17 04:45:12'),
(3, 'twitter', 'fa fa-twitter', 'https://twitter.com/', '2020-01-17 04:46:25', '2020-01-17 04:46:25'),
(4, 'Instagram', 'fa fa-instagram', 'https://instagram.com/', '2020-01-17 04:47:31', '2020-01-17 04:47:31'),
(5, 'LinkedIn', 'fa fa-linkedin', 'https://linkedin.com/', '2020-01-17 05:26:33', '2020-01-17 05:26:33');

-- --------------------------------------------------------

--
-- Structure de la table `sondages`
--

DROP TABLE IF EXISTS `sondages`;
CREATE TABLE IF NOT EXISTS `sondages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pour` int(11) NOT NULL DEFAULT '0',
  `contre` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sondages`
--

INSERT INTO `sondages` (`id`, `question`, `pour`, `contre`, `created_at`, `updated_at`) VALUES
(1, 'Aimez-vous les services de I.B.P ?', 5, 3, '2019-06-23 23:52:21', '2019-06-23 23:52:21');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
