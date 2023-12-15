-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 23 sep. 2022 à 14:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `coordination`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectenseignant`
--

DROP TABLE IF EXISTS `affectenseignant`;
CREATE TABLE IF NOT EXISTS `affectenseignant` (
  `idaffect` int(11) NOT NULL AUTO_INCREMENT,
  `idenseig` int(11) DEFAULT NULL,
  `idecole` int(11) DEFAULT NULL,
  `idcours` int(11) DEFAULT NULL,
  `dateaffect` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idaffect`),
  KEY `fk_cours_affect` (`idcours`),
  KEY `fk_ecole_aff` (`idecole`),
  KEY `fk_enseign` (`idenseig`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `affectenseignant`
--

INSERT INTO `affectenseignant` (`idaffect`, `idenseig`, `idecole`, `idcours`, `dateaffect`) VALUES
(1, 1, 1, 1, '2022-09-22 14:08:37'),
(2, 2, 2, 3, '2022-09-22 14:09:53');

-- --------------------------------------------------------

--
-- Structure de la table `affecthoraire`
--

DROP TABLE IF EXISTS `affecthoraire`;
CREATE TABLE IF NOT EXISTS `affecthoraire` (
  `idhoraire` int(11) NOT NULL AUTO_INCREMENT,
  `idclass` int(11) DEFAULT NULL,
  `idopt` int(11) DEFAULT NULL,
  `idcours` int(11) DEFAULT NULL,
  `jours` varchar(100) DEFAULT NULL,
  `heuredebut` varchar(100) DEFAULT NULL,
  `heurefin` varchar(100) DEFAULT NULL,
  `idenseig` int(11) DEFAULT NULL,
  `idsect` int(11) DEFAULT NULL,
  `idecole` int(11) DEFAULT NULL,
  PRIMARY KEY (`idhoraire`),
  KEY `fk_horaire` (`idecole`),
  KEY `fk_hor_aff` (`idcours`),
  KEY `fk_class_aff` (`idclass`),
  KEY `fk_enseign_aff` (`idenseig`),
  KEY `fk_option_aff` (`idopt`),
  KEY `fk_sect_aff` (`idsect`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `affecthoraire`
--

INSERT INTO `affecthoraire` (`idhoraire`, `idclass`, `idopt`, `idcours`, `jours`, `heuredebut`, `heurefin`, `idenseig`, `idsect`, `idecole`) VALUES
(1, 1, 1, 1, 'Lundi', '08h20', '12h30', 1, 3, 1),
(2, 2, 1, 2, 'Lundi', '08h30', '13h00', 2, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcat`, `designation`) VALUES
(1, 'Evenement'),
(2, 'ActualitÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `idclass` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) DEFAULT NULL,
  `idopti` int(11) DEFAULT NULL,
  PRIMARY KEY (`idclass`),
  KEY `fk_classe` (`idopti`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`idclass`, `designation`, `idopti`) VALUES
(1, '1ere', 1),
(2, '2Ã¨me', 1);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `idcours` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcours`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idcours`, `designation`) VALUES
(1, 'Mathematique'),
(2, 'chimie'),
(3, 'biologie'),
(4, 'comptabilitÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

DROP TABLE IF EXISTS `ecole`;
CREATE TABLE IF NOT EXISTS `ecole` (
  `idecole` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `responsable` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idecole`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`idecole`, `nom`, `responsable`, `telephone`, `email`, `adresse`, `logo`) VALUES
(1, 'Mama mulezi', 'Anguandia Tsandi ', '0978451020', 'mamamulezi@gmail.com', 'Goma/office 1', 'Updev1.png'),
(2, 'Mama yetu', 'Naomi Serena', '0825053403', 'mamayetu@gmail.com', 'Goma/office 2', 'logo isig.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `ideleve` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `postnom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `sexe` varchar(2) DEFAULT NULL,
  `datenassance` date DEFAULT NULL,
  `lieunaiss` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `territoire` varchar(100) DEFAULT NULL,
  `nationalite` varchar(100) DEFAULT NULL,
  `avenue` varchar(100) DEFAULT NULL,
  `quartier` varchar(100) DEFAULT NULL,
  `commune` varchar(100) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `tutaire` varchar(100) DEFAULT NULL,
  `professiontutaire` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ideleve`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`ideleve`, `nom`, `postnom`, `prenom`, `sexe`, `datenassance`, `lieunaiss`, `province`, `territoire`, `nationalite`, `avenue`, `quartier`, `commune`, `ville`, `tutaire`, `professiontutaire`, `contact`, `photo`) VALUES
(1, 'Anguandia', 'Tsandi', 'Jered', 'M', '1999-02-11', 'goma', 'nord kivu', 'rutchuru', 'congolaise', 'Industrielle', 'mabanga sud', 'karisimbi', 'Goma', 'Bobly swagger', 'Ir architecte', '0973635353', 'jered.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `idense` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `postnom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `sexe` varchar(2) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `domaine` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `etatcivile` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idense`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`idense`, `nom`, `postnom`, `prenom`, `sexe`, `adresse`, `contact`, `mail`, `domaine`, `qualification`, `etatcivile`, `photo`) VALUES
(1, 'Anguandia', 'Tsandi', 'Jeremie', 'M', 'Goma/mabanga sud', '0978451020', 'jered@gmail.com', 'informatique', 'licenciÃ©', 'Celibataire', 'jered.jpg'),
(2, 'Naomi', 'N\'saka', 'Rebecca', 'F', 'Goma/himbi 1', '0978451020', 'rebeca@gmail.com', 'developpement', 'master', 'MariÃ©', 'mi amor5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `idinfo` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) DEFAULT NULL,
  `description` text,
  `photo` varchar(100) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL,
  PRIMARY KEY (`idinfo`),
  KEY `fk_info` (`idcat`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `information`
--

INSERT INTO `information` (`idinfo`, `titre`, `description`, `photo`, `idcat`) VALUES
(1, 'OPEN ISEG : LES GRANDS GAGNANTS !', 'Mi-mars, toute lâ€™Ã©quipe de lâ€™incubateur IONIS 361 a eu la joie de pouvoir accueillir lâ€™Ã©vÃ©nement phare de lâ€™incubateur sur le financement : Meet Your Investors.', '2021_01_21_12_40_IMG_2455.JPG', 1),
(2, 'LA PROSPECTION EN TEMPS DE CRISE, SE PRÃ‰PARER POUR REBONDIR Ã€ LA REPRISE !', 'Romain HÃ©vin, coach en business development, aide les entreprises Ã  amÃ©liorer leur processus commercial. DÃ©couvrez ses conseils pour amÃ©liorer votre impact commercial et rebondir aprÃ¨s la crise !', '1613153247868.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `idins` int(11) NOT NULL AUTO_INCREMENT,
  `ideleve` int(11) DEFAULT NULL,
  `idclass` int(11) DEFAULT NULL,
  `idopt` int(11) DEFAULT NULL,
  `idecole` int(11) DEFAULT NULL,
  `annee` varchar(100) DEFAULT NULL,
  `dateinscrit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idins`),
  KEY `fk_class_insc` (`idclass`),
  KEY `fk_ecole_insc` (`idecole`),
  KEY `fk_eleve_insc` (`ideleve`),
  KEY `fk_option_insc` (`idopt`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`idins`, `ideleve`, `idclass`, `idopt`, `idecole`, `annee`, `dateinscrit`) VALUES
(1, 1, 1, 1, 1, '2021-2022', '2022-09-22 14:04:50');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `listeeleve`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `listeeleve`;
CREATE TABLE IF NOT EXISTS `listeeleve` (
`code` int(11)
,`eleves` varchar(302)
,`sexe` varchar(2)
,`datenassance` date
,`lieunaiss` varchar(100)
,`province` varchar(100)
,`territoire` varchar(100)
,`nationalite` varchar(100)
,`adresse` varchar(205)
,`tutaire` varchar(100)
,`professiontutaire` varchar(100)
,`contact` varchar(20)
,`photo` varchar(100)
,`ecole` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `listeenseignant`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `listeenseignant`;
CREATE TABLE IF NOT EXISTS `listeenseignant` (
`code` int(11)
,`nom` varchar(100)
,`postnom` varchar(100)
,`prenom` varchar(100)
,`sexe` varchar(2)
,`adresse` varchar(100)
,`contact` varchar(100)
,`mail` varchar(100)
,`domaine` varchar(100)
,`qualification` varchar(100)
,`etatcivile` varchar(100)
,`photo` varchar(100)
,`ecole` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `nombreeleve`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `nombreeleve`;
CREATE TABLE IF NOT EXISTS `nombreeleve` (
`nombreEleve` bigint(21)
,`ecole` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `idopti` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) DEFAULT NULL,
  `idsection` int(11) DEFAULT NULL,
  PRIMARY KEY (`idopti`),
  KEY `fk_opt` (`idsection`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `options`
--

INSERT INTO `options` (`idopti`, `designation`, `idsection`) VALUES
(1, 'commercial', 3),
(2, 'math-physique', 3),
(3, 'pedagogie generale', 3),
(4, 'mecanique', 1);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `idpaie` int(11) NOT NULL AUTO_INCREMENT,
  `montant` decimal(10,0) DEFAULT NULL,
  `motif` varchar(100) DEFAULT NULL,
  `idecole` int(11) DEFAULT NULL,
  `datepaie` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpaie`),
  KEY `fk_paie` (`idecole`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`idpaie`, `montant`, `motif`, `idecole`, `datepaie`) VALUES
(1, '50000', 'versement de frais scolaire', 1, '2022-09-22 14:14:41'),
(2, '10000', 'versement d\'inscription des eleves', 2, '2022-09-22 14:16:21');

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

DROP TABLE IF EXISTS `presence`;
CREATE TABLE IF NOT EXISTS `presence` (
  `idpres` int(11) NOT NULL AUTO_INCREMENT,
  `idenseig` int(11) DEFAULT NULL,
  `heurearrive` varchar(100) DEFAULT NULL,
  `heuresortie` varchar(100) DEFAULT NULL,
  `datepres` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpres`),
  KEY `fk_presence` (`idenseig`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presence`
--

INSERT INTO `presence` (`idpres`, `idenseig`, `heurearrive`, `heuresortie`, `datepres`) VALUES
(1, 1, '07h50', '14h30', '2022-09-22 14:17:22'),
(2, 2, '08h30', '15h00', '2022-09-22 14:17:59');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idrol`, `designation`) VALUES
(1, 'ecole1'),
(2, 'ecole2'),
(3, 'ecole3'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `idsec` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idsec`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `section`
--

INSERT INTO `section` (`idsec`, `designation`) VALUES
(1, 'maternelle'),
(2, 'primaire'),
(3, 'secondaire');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `noms` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `idrole` int(11) DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  KEY `fk_users` (`idrole`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `noms`, `password`, `email`, `idrole`) VALUES
(1, 'Jered Ted', '12345', 'jered@gmail.com', 1);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vlisteleve`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `vlisteleve`;
CREATE TABLE IF NOT EXISTS `vlisteleve` (
`nom` varchar(100)
,`EFFECTIF` bigint(21)
,`GARCON` bigint(21)
,`FILLE` bigint(22)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vpaiement`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `vpaiement`;
CREATE TABLE IF NOT EXISTS `vpaiement` (
`montant` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vsexefemin`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `vsexefemin`;
CREATE TABLE IF NOT EXISTS `vsexefemin` (
`ideleve` int(11)
,`nom` varchar(100)
,`postnom` varchar(100)
,`prenom` varchar(100)
,`sexe` varchar(2)
,`datenassance` date
,`lieunaiss` varchar(100)
,`province` varchar(100)
,`territoire` varchar(100)
,`nationalite` varchar(100)
,`avenue` varchar(100)
,`quartier` varchar(100)
,`commune` varchar(100)
,`ville` varchar(100)
,`tutaire` varchar(100)
,`professiontutaire` varchar(100)
,`contact` varchar(20)
,`photo` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vsexemasc`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `vsexemasc`;
CREATE TABLE IF NOT EXISTS `vsexemasc` (
`ideleve` int(11)
,`nom` varchar(100)
,`postnom` varchar(100)
,`prenom` varchar(100)
,`sexe` varchar(2)
,`datenassance` date
,`lieunaiss` varchar(100)
,`province` varchar(100)
,`territoire` varchar(100)
,`nationalite` varchar(100)
,`avenue` varchar(100)
,`quartier` varchar(100)
,`commune` varchar(100)
,`ville` varchar(100)
,`tutaire` varchar(100)
,`professiontutaire` varchar(100)
,`contact` varchar(20)
,`photo` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vtotaleleve`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `vtotaleleve`;
CREATE TABLE IF NOT EXISTS `vtotaleleve` (
`totaleleve` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure de la vue `listeeleve`
--
DROP TABLE IF EXISTS `listeeleve`;

DROP VIEW IF EXISTS `listeeleve`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listeeleve`  AS  select `inscription`.`idins` AS `code`,concat(`eleve`.`nom`,' ',`eleve`.`postnom`,' ',`eleve`.`prenom`) AS `eleves`,`eleve`.`sexe` AS `sexe`,`eleve`.`datenassance` AS `datenassance`,`eleve`.`lieunaiss` AS `lieunaiss`,`eleve`.`province` AS `province`,`eleve`.`territoire` AS `territoire`,`eleve`.`nationalite` AS `nationalite`,concat('C.',`eleve`.`commune`,'/V.',`eleve`.`ville`) AS `adresse`,`eleve`.`tutaire` AS `tutaire`,`eleve`.`professiontutaire` AS `professiontutaire`,`eleve`.`contact` AS `contact`,`eleve`.`photo` AS `photo`,`ecole`.`nom` AS `ecole` from ((`eleve` join `inscription` on((`inscription`.`ideleve` = `eleve`.`ideleve`))) join `ecole` on((`ecole`.`idecole` = `inscription`.`ideleve`))) group by `inscription`.`ideleve`,`ecole`.`nom` ;

-- --------------------------------------------------------

--
-- Structure de la vue `listeenseignant`
--
DROP TABLE IF EXISTS `listeenseignant`;

DROP VIEW IF EXISTS `listeenseignant`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listeenseignant`  AS  select `affectenseignant`.`idaffect` AS `code`,`enseignant`.`nom` AS `nom`,`enseignant`.`postnom` AS `postnom`,`enseignant`.`prenom` AS `prenom`,`enseignant`.`sexe` AS `sexe`,`enseignant`.`adresse` AS `adresse`,`enseignant`.`contact` AS `contact`,`enseignant`.`mail` AS `mail`,`enseignant`.`domaine` AS `domaine`,`enseignant`.`qualification` AS `qualification`,`enseignant`.`etatcivile` AS `etatcivile`,`enseignant`.`photo` AS `photo`,`ecole`.`nom` AS `ecole` from ((`affectenseignant` join `enseignant` on((`enseignant`.`idense` = `affectenseignant`.`idenseig`))) join `ecole` on((`ecole`.`idecole` = `affectenseignant`.`idecole`))) group by `affectenseignant`.`idecole` ;

-- --------------------------------------------------------

--
-- Structure de la vue `nombreeleve`
--
DROP TABLE IF EXISTS `nombreeleve`;

DROP VIEW IF EXISTS `nombreeleve`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nombreeleve`  AS  select count(0) AS `nombreEleve`,`ecole`.`nom` AS `ecole` from (`inscription` join `ecole` on((`ecole`.`idecole` = `inscription`.`idecole`))) group by `inscription`.`idecole` ;

-- --------------------------------------------------------

--
-- Structure de la vue `vlisteleve`
--
DROP TABLE IF EXISTS `vlisteleve`;

DROP VIEW IF EXISTS `vlisteleve`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vlisteleve`  AS  select `ecole`.`nom` AS `nom`,count(`inscription`.`ideleve`) AS `EFFECTIF`,count(`vsexemasc`.`ideleve`) AS `GARCON`,(count(`inscription`.`ideleve`) - count(`vsexemasc`.`ideleve`)) AS `FILLE` from (`ecole` left join (`inscription` left join `vsexemasc` on((`vsexemasc`.`ideleve` = `inscription`.`ideleve`))) on((`ecole`.`idecole` = `inscription`.`ideleve`))) group by `inscription`.`idecole` ;

-- --------------------------------------------------------

--
-- Structure de la vue `vpaiement`
--
DROP TABLE IF EXISTS `vpaiement`;

DROP VIEW IF EXISTS `vpaiement`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpaiement`  AS  select sum(`paiement`.`montant`) AS `montant` from `paiement` ;

-- --------------------------------------------------------

--
-- Structure de la vue `vsexefemin`
--
DROP TABLE IF EXISTS `vsexefemin`;

DROP VIEW IF EXISTS `vsexefemin`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsexefemin`  AS  select `eleve`.`ideleve` AS `ideleve`,`eleve`.`nom` AS `nom`,`eleve`.`postnom` AS `postnom`,`eleve`.`prenom` AS `prenom`,`eleve`.`sexe` AS `sexe`,`eleve`.`datenassance` AS `datenassance`,`eleve`.`lieunaiss` AS `lieunaiss`,`eleve`.`province` AS `province`,`eleve`.`territoire` AS `territoire`,`eleve`.`nationalite` AS `nationalite`,`eleve`.`avenue` AS `avenue`,`eleve`.`quartier` AS `quartier`,`eleve`.`commune` AS `commune`,`eleve`.`ville` AS `ville`,`eleve`.`tutaire` AS `tutaire`,`eleve`.`professiontutaire` AS `professiontutaire`,`eleve`.`contact` AS `contact`,`eleve`.`photo` AS `photo` from `eleve` where (`eleve`.`sexe` = 'F') ;

-- --------------------------------------------------------

--
-- Structure de la vue `vsexemasc`
--
DROP TABLE IF EXISTS `vsexemasc`;

DROP VIEW IF EXISTS `vsexemasc`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsexemasc`  AS  select `eleve`.`ideleve` AS `ideleve`,`eleve`.`nom` AS `nom`,`eleve`.`postnom` AS `postnom`,`eleve`.`prenom` AS `prenom`,`eleve`.`sexe` AS `sexe`,`eleve`.`datenassance` AS `datenassance`,`eleve`.`lieunaiss` AS `lieunaiss`,`eleve`.`province` AS `province`,`eleve`.`territoire` AS `territoire`,`eleve`.`nationalite` AS `nationalite`,`eleve`.`avenue` AS `avenue`,`eleve`.`quartier` AS `quartier`,`eleve`.`commune` AS `commune`,`eleve`.`ville` AS `ville`,`eleve`.`tutaire` AS `tutaire`,`eleve`.`professiontutaire` AS `professiontutaire`,`eleve`.`contact` AS `contact`,`eleve`.`photo` AS `photo` from `eleve` where (`eleve`.`sexe` = 'M') ;

-- --------------------------------------------------------

--
-- Structure de la vue `vtotaleleve`
--
DROP TABLE IF EXISTS `vtotaleleve`;

DROP VIEW IF EXISTS `vtotaleleve`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtotaleleve`  AS  select count(0) AS `totaleleve` from `inscription` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
