-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Juin 2017 à 14:07
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre_art` varchar(45) DEFAULT NULL,
  `soustitre_art` varchar(45) DEFAULT NULL,
  `contenu_art` longtext,
  `date_art` datetime DEFAULT NULL,
  `Membre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre_art`, `soustitre_art`, `contenu_art`, `date_art`, `Membre_id`) VALUES
(1, 'TOTO IS BACK', 'le retour de toto', 'Dans de nombreuses histoires le mettant en scène, Toto est présenté sous de nombreux traits de caractères, notamment comme un mauvais garnement, un cancre impertinent, etc. Le décor de ses farces est souvent celui de l\'école ou de sa maison.\r\n\r\nPlusieurs auteurs et dessinateurs ont imaginé un visage et un univers à ce personnage, en lui donnant une famille, des amis, une maîtresse…\r\n\r\nEn 1892, Émile Durafour publie Les Farces de Toto : folie-vaudeville en 1 acte. Depuis le milieu du XIXe siècle, toto avait été utilisé pour désigner un enfant ou un élève type1. Dans son vaudeville On purge bébé (1910), Georges Feydeau met en scène un enfant de sept ans, Toto, qui pose des questions de géographie à ses parents embarrassés et qui leur tient tête en refusant de se purger. Ce sont les débuts de la popularité du personnage de Toto. Il est décrit comme gaffeur, insolent et obstiné', '2017-06-08 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `article_categorie`
--

CREATE TABLE `article_categorie` (
  `Article_id` int(11) NOT NULL,
  `Categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article_categorie`
--

INSERT INTO `article_categorie` (`Article_id`, `Categorie_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'web'),
(2, 'video'),
(3, 'blague');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `titre_co` varchar(45) DEFAULT NULL,
  `contenu_co` text,
  `date_co` datetime DEFAULT NULL,
  `Membre_id` int(11) NOT NULL,
  `Article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `titre_co`, `contenu_co`, `date_co`, `Membre_id`, `Article_id`) VALUES
(1, 'pdg carambar', 'A cause de toi, mes actions chez Carambar ont chuté...', '2017-06-09 00:00:00', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `pwd` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `pwd`, `email`, `status`) VALUES
(1, 'toto', 'toto', 'toto@toto.fr', 0),
(2, 'PDG Carambar', 'carambar', 'carambar@carambar.fr', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Article_Membre_idx` (`Membre_id`);

--
-- Index pour la table `article_categorie`
--
ALTER TABLE `article_categorie`
  ADD PRIMARY KEY (`Article_id`,`Categorie_id`),
  ADD KEY `fk_Article_categorie_Article1_idx` (`Article_id`),
  ADD KEY `fk_Article_categorie_Categorie1_idx` (`Categorie_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Commentaire_Membre1_idx` (`Membre_id`),
  ADD KEY `fk_Commentaire_Article1_idx` (`Article_id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_Article_Membre` FOREIGN KEY (`Membre_id`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `article_categorie`
--
ALTER TABLE `article_categorie`
  ADD CONSTRAINT `fk_Article_categorie_Article1` FOREIGN KEY (`Article_id`) REFERENCES `article` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Article_categorie_Categorie1` FOREIGN KEY (`Categorie_id`) REFERENCES `categorie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_Commentaire_Article1` FOREIGN KEY (`Article_id`) REFERENCES `article` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Commentaire_Membre1` FOREIGN KEY (`Membre_id`) REFERENCES `membre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
