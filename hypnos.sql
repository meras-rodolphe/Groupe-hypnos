-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 avr. 2022 à 18:33
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hypnos`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `email`) VALUES
(1, 'Meras', 'rodolphe@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `bordeaux`
--

CREATE TABLE `bordeaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `descriptif` text NOT NULL,
  `name` varchar(500) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bordeaux`
--

INSERT INTO `bordeaux` (`id`, `nom`, `descriptif`, `name`, `prix`) VALUES
(3, 'suite-1', 'chambre de charme', '6257e7add04e59.37970412.png', 120),
(4, 'suite-2', 'chambre de charme', '6257e7be67daf2.58837436.png', 120);

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

CREATE TABLE `hotels` (
  `id_hotel` int(11) NOT NULL,
  `nom_hotel` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `adresse` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `hotels`
--

INSERT INTO `hotels` (`id_hotel`, `nom_hotel`, `ville`, `adresse`) VALUES
(21, 'Bordeaux', 'Bordeaux', 'Quai de la Garonne'),
(22, 'Nantes', 'Nantes', 'Place des machines'),
(23, 'Lille', 'Lille', 'Place du beffroi'),
(24, 'Lyon', 'Lyon', 'rue de la croix rousse'),
(25, 'Paris', 'Paris', 'Place de la cité'),
(26, 'Strasbourg', 'Strasbourg', 'Place de l\'Europe'),
(27, 'Toulouse', 'Toulouse', 'Place des carmes');

-- --------------------------------------------------------

--
-- Structure de la table `lille`
--

CREATE TABLE `lille` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL DEFAULT 'NOT NULL',
  `descriptif` text NOT NULL DEFAULT 'NOT NULL',
  `name` varchar(500) NOT NULL DEFAULT 'NOT NULL',
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lille`
--

INSERT INTO `lille` (`id`, `nom`, `descriptif`, `name`, `prix`) VALUES
(1, 'suite roucoule', 'chambre de charme', '625f12e77894f8.08946837.png', 120);

-- --------------------------------------------------------

--
-- Structure de la table `lyon`
--

CREATE TABLE `lyon` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL DEFAULT 'NOT NULL',
  `descriptif` text NOT NULL DEFAULT 'NOT NULL',
  `name` varchar(500) NOT NULL DEFAULT 'NOT NULL',
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lyon`
--

INSERT INTO `lyon` (`id`, `nom`, `descriptif`, `name`, `prix`) VALUES
(1, 'Gironis', 'chambre de charme', '625f13aeea07a1.31406208.png', 120);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `prenom` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `email` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `question` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `descriptif` text NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `nom`, `prenom`, `email`, `question`, `descriptif`) VALUES
(1, 'Méras', 'Rodolphe', 'rodolphemeras@gmail.com', 'J’ai un souci avec cette application', 'Votre appli est bien'),
(2, 'Méras', 'Rodolphe', 'rodolphemeras@gmail.com', 'Je souhaite en savoir plus sur une suite', 'hgvhgj');

-- --------------------------------------------------------

--
-- Structure de la table `nantes`
--

CREATE TABLE `nantes` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL DEFAULT 'NOT NULL',
  `descriptif` text NOT NULL DEFAULT 'NOT NULL',
  `name` varchar(500) NOT NULL DEFAULT 'NOT NULL',
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `paris`
--

CREATE TABLE `paris` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL DEFAULT 'NOT NULL',
  `descriptif` text NOT NULL DEFAULT 'NOT NULL',
  `name` varchar(500) NOT NULL DEFAULT 'NOT NULL',
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id_gerant` int(11) NOT NULL,
  `nom_hotel` varchar(50) NOT NULL,
  `nom_gerant` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ip` varchar(20) NOT NULL DEFAULT 'NOT NULL',
  `token` text NOT NULL DEFAULT 'NOT NULL',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id_gerant`, `nom_hotel`, `nom_gerant`, `prenom`, `email`, `password`, `ip`, `token`, `date`) VALUES
(38, 'Bordeaux', 'Dupont', 'karine', 'karine@gmail.com', '$2y$12$LUp8xTmFaO9FceadvGH7AOZwFWN7Cu3VzJ92oKDascSau5KtBasHG', '::1', '79fb977cd7d3f2020d671f31da7d609a657a0cee1720f46f64e7a2312cd565e598907798d7ac0f7b4fd3088e05fddf19aa59aba8017b868bd940a7b6988d05d0', '2022-04-13 14:16:15'),
(39, 'Lille', 'Diem', 'Jean', 'diem@gmail.com', '$2y$12$7aihBJVWCteBXDyKO.Vuh.fhS1d6AT/R9BK6Fx1ZGDqs1U9FEF8nu', '::1', 'f592cfa2f296c920ee18400982de07573002ac55dd5d41707676809268cb636e133979c726aebd65f48b7e2bfee5f701bc197d2eec3e7fcd820a29b52c775347', '2022-04-13 14:17:09'),
(40, 'Lyon', 'Doe', 'John', 'doe@gmail.com', '$2y$12$eNy3BWWZt2qhWPO44qZjnujx5RZSmsVf06yW1VyMsurlUulCHj7Ia', '::1', '6fef2a1f894a7de069fadeee39bb13b29be1f97592f4fc400c1f8294e1b9e9142915cf9ce921e0ae3cf221fbc950bf28486f251c4477eab31275584472701fe6', '2022-04-13 17:23:05');

-- --------------------------------------------------------

--
-- Structure de la table `strasbourg`
--

CREATE TABLE `strasbourg` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL DEFAULT 'NOT NULL',
  `descriptif` text NOT NULL DEFAULT 'NOT NULL',
  `name` varchar(500) NOT NULL DEFAULT 'NOT NULL',
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `toulouse`
--

CREATE TABLE `toulouse` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL DEFAULT 'NOT NULL',
  `descriptif` text NOT NULL DEFAULT 'NOT NULL',
  `name` varchar(500) NOT NULL DEFAULT 'NOT NULL',
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` text NOT NULL DEFAULT 'NOT NULL',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `email`, `password`, `token`, `date`) VALUES
(9, 'blabla', 'blabla@gmail.com', '$2y$12$cpu1FMsC6IJlke.u5hAFzutW5wJ6kL/XmQi8167aCA4QtbDeKGIaC', '74bcf0e9ab6e0743a3241df59591b397626533a0837b73705b30b55342842a23598d19432d4e71f74578e0a5ad46ae3f97d312f5f2c949868f2fb9f85bc2cd33', '2022-04-19 09:21:06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Index pour la table `bordeaux`
--
ALTER TABLE `bordeaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Index pour la table `lille`
--
ALTER TABLE `lille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lyon`
--
ALTER TABLE `lyon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nantes`
--
ALTER TABLE `nantes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paris`
--
ALTER TABLE `paris`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id_gerant`);

--
-- Index pour la table `strasbourg`
--
ALTER TABLE `strasbourg`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `toulouse`
--
ALTER TABLE `toulouse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `bordeaux`
--
ALTER TABLE `bordeaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `lille`
--
ALTER TABLE `lille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `lyon`
--
ALTER TABLE `lyon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `nantes`
--
ALTER TABLE `nantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `paris`
--
ALTER TABLE `paris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id_gerant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `strasbourg`
--
ALTER TABLE `strasbourg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `toulouse`
--
ALTER TABLE `toulouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
