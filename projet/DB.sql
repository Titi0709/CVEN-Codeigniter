-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 18 avr. 2024 à 20:20
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cven`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandereservation`
--

CREATE TABLE `demandereservation` (
  `ID` int(11) NOT NULL,
  `Date_de_Demande` date NOT NULL,
  `Date_de_fin` date NOT NULL,
  `Chambre` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `demandereservation`
--

INSERT INTO `demandereservation` (`ID`, `Date_de_Demande`, `Date_de_fin`, `Chambre`, `user_id`) VALUES
(1, '2024-04-09', '2024-04-08', 'Plage', NULL),
(2, '2024-04-12', '2024-04-27', 'Plage', NULL),
(3, '2024-04-20', '2024-04-27', 'Plage', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `email`) VALUES
(30, 'ian', '$2y$10$4jzo31Yzmi7SU7e9okz6FOm/uuzNOGCN/rMwqbIqjkpyKDf2U6fbu', '2024-04-18 12:59:23', 'ianaouchiche6@gmail.com'),
(31, 'tlefay', '$2y$10$6M3AMO7dyaR0j4l5pS/mDeiyqzRux7zLIYyIRRGua3psKUJ.9aG2C', '2024-04-18 13:05:04', 'ianaouchiche6@gmail.com'),
(32, 'ian', '$2y$10$AXn4K0ndugmCDp5OgAbdEuM890vxUV0tg3Qw9VWAfUEnRwNu17Vb.', '2024-04-18 13:07:30', 'ianaouchiche6@gmail.com'),
(33, 'bdfbdfe', '$2y$10$9Kw6DoyQudaT7b0VIp.Yfe2JSuAVnSEuYRKBb7rIyZ9u059j28jRm', '2024-04-18 13:12:53', 'ianaouchiche6@gmail.com'),
(34, 'tlefayy', '$2y$10$6qZgrpGLoBzn6a7Rrxm1U.LCEcZ92023HiIkx1H2O1RgF4tdG9pBK', '2024-04-18 13:13:23', 'ianaouchiche6@gmail.com'),
(35, 'svsvs', '$2y$10$490XouyRpJy7xhBbLhsjI.igQfjB8sCECyzGRzP7ym0fTRgwwNoHK', '2024-04-18 13:13:58', 'ianaouchiche6@gmail.com'),
(36, 'db', '$2y$10$bNWHPfrTn7FQMbadAkMWtePHIVidEKFB0QlIyM7ngrJ0mhsePSlnC', '2024-04-18 13:19:06', 'ianaouchiche6@gmail.com'),
(37, 'dgdb', '$2y$10$KT6hXXuyYRIXnCuDG7E89OnWK8aVZhpmUSu2xY501N66hRVWq5LZ2', '2024-04-18 13:19:30', 'ianaouchiche6@gmail.com'),
(38, 'ach', '$2y$10$ZHKxNLvU2Z4NS8mkB4XL.OSG8i8010Mz4I22z1HrZ.PwqwLNh2rE.', '2024-04-18 13:19:42', 'ianaouchiche6@gmail.com'),
(39, 'ian.aouchiche', '$2y$10$AafvUr35yW0OnlYoBveuAOV/h1XFWGSpqx64Vb99UPINvzHx5Kuly', '2024-04-18 13:41:46', 'ianaouchiche6@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demandereservation`
--
ALTER TABLE `demandereservation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demandereservation`
--
ALTER TABLE `demandereservation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demandereservation`
--
ALTER TABLE `demandereservation`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
