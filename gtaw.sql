-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 10 jan. 2024 à 18:31
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gtaw`
--

-- --------------------------------------------------------

--
-- Structure de la table `armes`
--

CREATE TABLE `armes` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magazine_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `armes`
--

INSERT INTO `armes` (`id`, `categorie_id`, `nom`, `magazine_capacity`, `image`) VALUES
(1, 1, 'Pistol', '12-16', 'WEAPON_PISTOL.png'),
(2, 1, 'Pistol Mk II', '12-16', 'WEAPON_PISTOL_MK2.png'),
(3, 1, 'Combat Pistol', '12-16', 'WEAPON_COMBATPISTOL.png'),
(4, 1, 'Pistol .50', '9-12', 'WEAPON_PISTOL_50.png'),
(5, 1, 'SNS Pistol', '6-12', 'WEAPON_SNSPISTOL.png'),
(6, 1, 'SNS Pistol Mk II', '6-12', 'WEAPON_SNSPISTOL_MK2.png'),
(7, 1, 'Heavy Pistol', '18-36', 'WEAPON_HEAVYPISTOL.png'),
(8, 1, 'Vintage Pistol', '7-14', 'WEAPON_VINTAGEPISTOL.png'),
(9, 1, 'Ceramic Pistol', '12-17', 'WEAPON_CERAMICPISTOL.png'),
(10, 1, 'Marksman Pistol', '1', 'WEAPON_MARKSMANPISTOL.png'),
(11, 1, 'Heavy Revolver', '6-12', 'WEAPON_HEAVYREVOLVER.png'),
(12, 1, 'Heavy Revolver Mk II', '6-12', 'WEAPON_HEAVYREVOLVER_MK2.png'),
(13, 1, 'Double Action Revolver', '6-12', 'WEAPON_DOUBLEACTIONREVOLVER.png'),
(14, 1, 'Navy Revolver', '6-12', 'WEAPON_NAVYREVOLVER.png'),
(15, 1, 'Perico Pistol', '1', 'WEAPON_PERICOPISTOL.png'),
(16, 1, 'AP Pistol', '18-36', 'WEAPON_APPISTOL.png'),
(17, 2, 'Micro SMG', '16-30', 'WEAPON_MICROSMG.png'),
(18, 2, 'Machine Pistol', '12-20-30', 'WEAPON_MACHINEPISTOL.png'),
(19, 2, 'Mini SMG', '20-30', 'WEAPON_MINISMG.png'),
(20, 2, 'SMG', '30-60-100', 'WEAPON_SMG.png'),
(21, 2, 'SMG Mk II', '30-60', 'WEAPON_SMG_MK2.png'),
(22, 2, 'Assault SMG', '30-60', 'WEAPON_ASSAULTSMG.png'),
(23, 2, 'Combat PDW', '30-60', 'WEAPON_COMBATPDW.png'),
(24, 3, 'Assault Rifle', '30-60-100', 'WEAPON_ASSAULTRIFLE.png'),
(25, 3, 'Assault Rifle Mk II', '30-60-100', 'WEAPON_ASSAULTRIFLE_MK2.png'),
(26, 3, 'Carbine Rifle', '30-60-100', 'WEAPON_CARBINERIFLE.png'),
(27, 3, 'Carbine Rifle Mk II', '30-60-100', 'WEAPON_CARBINERIFLE_MK2.png'),
(28, 3, 'Advanced Rifle', '30-60-100', 'WEAPON_ADVANCEDRIFLE.png'),
(29, 3, 'Special Carbine', '30-60-100', 'WEAPON_SPECIALCARBINE.png'),
(30, 3, 'Special Carbine Mk II', '30-60-100', 'WEAPON_SPECIALCARBINE_MK2.png'),
(31, 3, 'Bullpup Rifle', '30-60-100', 'WEAPON_BULLPUPRIFLE.png'),
(32, 3, 'Bullpup Rifle Mk II', '30-60-100', 'WEAPON_BULLPUPRIFLE_MK2.png'),
(33, 3, 'Compact Rifle', '30-60-100', 'WEAPON_COMPACTRIFLE.png'),
(34, 3, 'Military Rifle', '30-60-100', 'MilitaryRifle-GTAO-icon.png'),
(35, 3, 'Heavy Rifle', '30-60-100', 'HeavyRifle-GTAOe-HUDIcon.png'),
(36, 3, 'Service Carbine', '30-60-100', 'WEAPON_CARBINERIFLE.png'),
(37, 4, 'MG', '30-45', 'WEAPON_MG.png'),
(38, 4, 'Combat MG', '54-100', 'WEAPON_COMBATMG.png'),
(39, 4, 'Combat MG Mk II', '100-200', 'WEAPON_COMBATMG_MK2.png'),
(40, 4, 'Gusenberg Sweeper', '100-200', 'WEAPON_GUSENBERG.png'),
(41, 4, 'Unholy Hellbringer', '30-50', 'UnholyHellbringer-GTAO-HUD.png'),
(42, 5, 'Pump Shotgun', '8', 'WEAPON_PUMPSHOTGUN.png'),
(43, 5, 'Pump Shotgun Mk II', '8', 'WEAPON_PUMPSHOTGUN_MK2.png'),
(44, 5, 'Sawn-Off Shotgun', '8', 'WEAPON_SAWNOFFSHOTGUN.png'),
(45, 5, 'Bullpup Shotgun', '', 'WEAPON_BULLPUPSHOTGUN.png'),
(46, 5, 'Assault Shotgun', '8', 'WEAPON_ASSAULTSHOTGUN.png'),
(47, 5, 'Musket', '8', 'WEAPON_MUSKET.png'),
(48, 5, 'Heavy Shotgun', '8-32', 'WEAPON_HEAVYSHOTGUN.png'),
(49, 5, 'Double-Barrel Shotgun', '2', 'DoubleBarrelShotgun-HUD-GTAO.png'),
(50, 5, 'Sweeper Shotgun', '10', 'SweeperShotgun-GTAO-HUDIcon.png'),
(51, 5, 'Combat Shotgun', '8', 'WEAPON_PUMPSHOTGUN.png'),
(52, 6, 'Sniper Rifle', '6', 'WEAPON_SNIPERRIFLE.png'),
(53, 6, 'Heavy Sniper', '6-8', 'WEAPON_HEAVYSNIPER.png'),
(54, 6, 'Heavy Sniper Mk II', '', 'WEAPON_HEAVYSNIPER_MK2.png'),
(55, 6, 'Marksman Rifle', '6-8', 'WEAPON_MARKSMANRIFLE.png'),
(56, 6, 'Marksman Rifle Mk II', '6-8', 'WEAPON_MARKSMANRIFLE_MK2.png'),
(57, 6, 'Precision Rifle', '10', 'WEAPON_PRECISIONRIFLE.png'),
(58, 7, 'Minigun', '15000', 'WEAPON_MINIGUN.png'),
(59, 7, 'Widowmaker', '15000', 'WEAPON_WIDOWMAKER.png');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Pistol'),
(2, 'SMG'),
(3, 'Assault Rifle'),
(4, 'MG'),
(5, 'Shotgun'),
(6, 'Sniper Rifle'),
(7, 'Heavy');

-- --------------------------------------------------------

--
-- Structure de la table `composants`
--

CREATE TABLE `composants` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `degats`
--

CREATE TABLE `degats` (
  `id` int(11) NOT NULL,
  `armes_id` int(11) NOT NULL,
  `partieducorps_id` int(11) NOT NULL,
  `degats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `degats`
--

INSERT INTO `degats` (`id`, `armes_id`, `partieducorps_id`, `degats`) VALUES
(1, 1, 1, 26),
(2, 2, 1, 32),
(3, 3, 1, 27),
(4, 4, 1, 51),
(5, 5, 1, 28),
(6, 6, 1, 28),
(7, 7, 1, 40),
(8, 8, 1, 34),
(9, 9, 1, 32),
(10, 10, 1, 220),
(11, 11, 1, 160),
(12, 12, 1, 200),
(13, 13, 1, 81),
(14, 14, 1, 160),
(15, 15, 1, 195),
(16, 16, 1, 25),
(17, 17, 1, 21),
(18, 18, 1, 27),
(19, 19, 1, 22),
(20, 20, 1, 22),
(21, 21, 1, 25),
(22, 22, 1, 23),
(23, 23, 1, 28),
(24, 24, 1, 30),
(25, 25, 1, 40),
(26, 26, 1, 32),
(27, 27, 1, 33),
(28, 28, 1, 34),
(29, 29, 1, 32),
(30, 30, 1, 33),
(31, 31, 1, 32),
(32, 32, 1, 33),
(33, 33, 1, 34),
(34, 34, 1, 38),
(35, 35, 1, 34),
(36, 36, 1, 35),
(37, 37, 1, 40),
(38, 38, 1, 45),
(39, 39, 1, 47),
(40, 40, 1, 34),
(41, 41, 1, 45),
(42, 42, 1, 29),
(43, 43, 1, 32),
(44, 44, 1, 40),
(45, 45, 1, 14),
(46, 46, 1, 32),
(47, 47, 1, 165),
(48, 48, 1, 117),
(49, 49, 1, 30),
(50, 50, 1, 27),
(51, 51, 1, 31),
(52, 52, 1, 101),
(53, 53, 1, 216),
(54, 54, 1, 230),
(55, 55, 1, 65),
(56, 56, 1, 75),
(57, 57, 1, 101),
(58, 58, 1, 30),
(59, 59, 1, 30);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240110094327', '2024-01-10 11:13:56', 10),
('DoctrineMigrations\\Version20240110095339', '2024-01-10 11:13:56', 34),
('DoctrineMigrations\\Version20240110095905', '2024-01-10 11:13:56', 69);

-- --------------------------------------------------------

--
-- Structure de la table `partiedu_corps`
--

CREATE TABLE `partiedu_corps` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `multiplicateur` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partiedu_corps`
--

INSERT INTO `partiedu_corps` (`id`, `nom`, `multiplicateur`) VALUES
(1, 'chest', 1),
(2, 'Limbs', 0.8),
(3, 'Head', 20);

-- --------------------------------------------------------

--
-- Structure de la table `rank`
--

CREATE TABLE `rank` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rank`
--

INSERT INTO `rank` (`id`, `img`) VALUES
(1, 'img/rank/rank1.png'),
(2, 'img/rank/rank2.png'),
(3, 'img/rank/rank3.png'),
(4, 'img/rank/rank3.png');

-- --------------------------------------------------------

--
-- Structure de la table `ttk`
--

CREATE TABLE `ttk` (
  `id` int(11) NOT NULL,
  `timetokill` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `armes`
--
ALTER TABLE `armes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_32CF26E0BCF5E72D` (`categorie_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `composants`
--
ALTER TABLE `composants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `degats`
--
ALTER TABLE `degats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1ECEE60B7A649A7` (`armes_id`),
  ADD KEY `IDX_1ECEE60B333C8DCF` (`partieducorps_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `partiedu_corps`
--
ALTER TABLE `partiedu_corps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ttk`
--
ALTER TABLE `ttk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `armes`
--
ALTER TABLE `armes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `composants`
--
ALTER TABLE `composants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `degats`
--
ALTER TABLE `degats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `partiedu_corps`
--
ALTER TABLE `partiedu_corps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ttk`
--
ALTER TABLE `ttk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `armes`
--
ALTER TABLE `armes`
  ADD CONSTRAINT `FK_32CF26E0BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `degats`
--
ALTER TABLE `degats`
  ADD CONSTRAINT `FK_1ECEE60B333C8DCF` FOREIGN KEY (`partieducorps_id`) REFERENCES `partiedu_corps` (`id`),
  ADD CONSTRAINT `FK_1ECEE60B7A649A7` FOREIGN KEY (`armes_id`) REFERENCES `armes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
