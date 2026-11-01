-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 03 juin 2026 à 08:47
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
-- Base de données : `sae203`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `note` varchar(6) NOT NULL,
  `message` text NOT NULL,
  `id_sentiers` int(11) NOT NULL,
  `DatePublication` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id_avis`, `pseudo`, `note`, `message`, `id_sentiers`, `DatePublication`) VALUES
(32, 'zimmerman', '1', 'Vraiment nul et dur', 9, '2026-05-22 16:00:51'),
(36, 'yesser', '3', 'Bien mais beaucoup de monde, et faire attention a la météo, car si il pleuit le sentier est quasiment impraticable', 6, '2026-05-22 16:46:55'),
(38, 'Shower_Sand', '5', 'vraiment bien', 12, '2026-05-27 11:00:27'),
(39, 'erere', '1', 'peut etre vraiment mieux je n&#039;ai pas passer un bon moment', 6, '2026-05-27 11:07:43');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `icon_categories` varchar(255) NOT NULL,
  `couleur_categories` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`, `description`, `icon_categories`, `couleur_categories`) VALUES
(1, 'Randonnée', 'Une randonnée est une promenade pédestre de moyenne durée, généralement réalisable en une journée. Elle est accessible au plus grand nombre et ne nécessite pas d\'équipement technique particulier.', 'images/icons/randonnee.png', '#3c7d0e'),
(2, 'Trek', 'Un trek est une randonnée longue distance sur plusieurs jours, souvent en milieu montagneux ou sauvage. Il requiert une préparation physique sérieuse, du matériel adapté et une bonne connaissance du terrain.', 'images/icons/trek.png', '#916806');

-- --------------------------------------------------------

--
-- Structure de la table `difficulte`
--

CREATE TABLE `difficulte` (
  `id_difficulte` int(11) NOT NULL,
  `nom_difficulte` varchar(30) NOT NULL,
  `icon_difficulte` varchar(255) NOT NULL,
  `couleur_difficulte` varchar(10) NOT NULL,
  `materiel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `difficulte`
--

INSERT INTO `difficulte` (`id_difficulte`, `nom_difficulte`, `icon_difficulte`, `couleur_difficulte`, `materiel`) VALUES
(1, 'Facile', 'images/icons/facile.png', '#157bab', 'Aucun matériel spécial requis. Une bonne paire de chaussures de marche, des vêtements adaptés à la météo et une bouteille d\'eau suffisent pour profiter du sentier en toute sécurité.'),
(2, 'Difficile', 'images/icons/difficile.png', '#c90808', 'Chaussures de randonnée montantes avec semelles crantées obligatoires. Il est recommandé d\'emporter des bâtons de marche, une trousse de premiers secours, suffisamment d\'eau et de nourriture, ainsi qu\'une carte topographique ou un GPS. Une expérience préalable en randonnée est fortement conseillée.');

-- --------------------------------------------------------

--
-- Structure de la table `sentiers`
--

CREATE TABLE `sentiers` (
  `id_sentier` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `km` decimal(5,2) NOT NULL,
  `denivele` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `arrivee` varchar(50) NOT NULL,
  `PointVU` text NOT NULL,
  `temps` time NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_difficulte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sentiers`
--

INSERT INTO `sentiers` (`id_sentier`, `nom`, `km`, `denivele`, `image`, `depart`, `arrivee`, `PointVU`, `temps`, `id_categorie`, `id_difficulte`) VALUES
(1, 'Sentier du Lac Blanc', 8.50, 320, 'images/SentierduLacBlanc.jpg', '48.1523, 7.0812', '48.1498, 7.0754', 'Le lac Blanc offre un panorama exceptionnel sur la vallée de Munster et les crêtes vosgiennes. En chemin, vous traversez de magnifiques forêts de sapins et de hêtres. Le reflet des sommets dans le lac constitue un spectacle inoubliable.', '03:30:00', 1, 1),
(2, 'Chemin des Roches', 6.20, 210, 'images/ChemindesRoches.jpg', '48.2341, 7.1203', '48.2289, 7.1187', 'Ce sentier longe une série de formations rocheuses granitiques typiques des Vosges. La végétation de landes et de myrtilles encadre un paysage serein et reposant. Par temps clair, le regard porte jusqu\'aux plaines d\'Alsace.', '02:30:00', 1, 1),
(3, 'Tour du Hohneck', 9.00, 380, 'images/TourduHohneck.jpg', '48.0312, 7.0001', '48.0312, 7.0001', 'Le Hohneck est l\'un des sommets emblématiques des Vosges, culminant à 1 363 m. Le tour offre des vues à 360° sur les chaumes et les vallées environnantes. Au printemps, les prairies d\'altitude se couvrent de fleurs sauvages colorées.', '03:45:00', 1, 1),
(4, 'Sentier de la Cascade', 5.80, 180, 'images/SentierdelaCascade.jpg', '48.1890, 7.0654', '48.1921, 7.0612', 'La cascade principale, haute de 18 mètres, constitue le clou du spectacle de ce sentier familial. Le chemin longe un ruisseau cristallin ombragé par une forêt dense. Plusieurs belvédères permettent d\'observer la faune locale, notamment les chevreuils.', '02:15:00', 1, 1),
(5, 'Boucle du Champ du Feu', 7.30, 260, 'images/BoucleduChampduFeu.jpg', '48.4123, 7.2341', '48.4123, 7.2341', 'Le Champ du Feu, point culminant du Bas-Rhin à 1 099 m, offre un panorama remarquable sur les deux versants vosgiens. La boucle traverse des zones de tourbières protégées, habitat rare en Alsace. La tour d\'observation au sommet permet d\'apercevoir les Alpes par temps clair.', '03:00:00', 1, 1),
(6, 'Sentier des Myrtilles', 6.00, 195, 'images/SentierdesMyrtilles.jpg', '48.0754, 7.0321', '48.0812, 7.0298', 'Ce sentier traversant les chaumes vosgiennes est réputé pour ses immenses étendues de myrtilles sauvages en été. Les prairies ouvertes offrent de larges panoramas sur les Ballons vosgiens. Au crépuscule, le spectacle du soleil couchant sur la plaine alsacienne est saisissant.', '02:30:00', 1, 1),
(7, 'Promenade du Donon', 7.80, 295, 'images/PromenadeduDonon.jpg', '48.5123, 7.1432', '48.5098, 7.1401', 'Le Donon, sommet sacré des Celtes, abrite un temple reconstitué au sommet offrant une vue panoramique unique. Le chemin traverse de majestueuses forêts de sapins et de pins sylvestres. Des vestiges archéologiques celtes et gallo-romains jalonnent le parcours.', '03:15:00', 1, 1),
(8, 'Crête des Vosges Nord', 18.40, 980, 'images/CrêtedesVosgesNord.jpg', '48.5234, 7.1056', '48.4987, 7.0876', 'La traversée des crêtes nord offre un panorama continu sur l\'Alsace et la Lorraine. Des affleurements rocheux et des chaos granitiques ponctuent ce parcours exigeant. Les chaumes d\'altitude abritent une flore rare et protégée.', '07:30:00', 1, 2),
(9, 'Ascension du Grand Ballon', 14.60, 850, 'images/AscensionduGrandBallon.jpg', '47.9012, 7.1023', '47.9023, 7.0987', 'Le Grand Ballon, toit des Vosges à 1 424 m, offre par temps clair une vue jusqu\'aux Alpes et à la Forêt-Noire. L\'ascension traverse des forêts denses avant d\'atteindre les chaumes sommitales. Un monument aux troupes alpines et un radar météo marquent le sommet.', '06:00:00', 1, 2),
(10, 'Traversée du Kastelberg', 16.20, 920, 'images/TraverséeduKastelberg.jpg', '47.9876, 7.0543', '47.9712, 7.0234', 'Le Kastelberg, avec ses tourbières d\'altitude, constitue un écosystème unique dans les Vosges. La traversée révèle des paysages contrastés entre forêts profondes et chaumes dégagées. Les locaux appellent ce sommet le jardin des Vosges pour sa richesse florale.', '06:30:00', 1, 2),
(11, 'Sentier des Roches de Mutzig', 15.50, 870, 'images/SentierdesRochesdeMutzig.jpg', '48.3456, 7.1890', '48.3312, 7.1654', 'Les roches de Mutzig forment un impressionnant cirque rocheux visible depuis la plaine d\'Alsace. Le sentier, parfois escarpé, longe des parois verticales et traverse des éboulis caractéristiques. La vue depuis le sommet sur Strasbourg et la plaine du Rhin est exceptionnelle.', '06:15:00', 1, 2),
(12, 'Boucle des Quatre Lacs', 22.00, 1100, 'images/BoucledesQuatreLacs.jpg', '47.9234, 7.0876', '47.9234, 7.0876', 'Cette boucle relie les lacs de montagne les plus emblématiques des Vosges : Forlet, Schiessrothried, Altenweiher et Fischboedle. Chaque lac, niché dans un cirque glaciaire, possède sa propre personnalité et palette de couleurs. Le dénivelé cumulé met à l\'épreuve même les randonneurs expérimentés.', '08:30:00', 1, 2),
(13, 'Sentier de la Tête des Faux', 17.80, 960, 'images/SentierdelaTêtedesFaux.jpg', '48.1123, 7.0567', '48.0987, 7.0432', 'La Tête des Faux, ancienne position militaire de la Première Guerre mondiale, conserve de nombreuses tranchées et blockhaus. Le sommet offre un panorama saisissant sur la vallée de la Weiss et les plaines d\'Alsace. La forêt de hêtres centenaires sur le versant nord est d\'une beauté remarquable.', '07:00:00', 1, 2),
(14, 'Tour du Ballon d\'Alsace', 19.50, 1050, 'images/TourduBallond\'Alsace.jpg', '47.8234, 6.8543', '47.8234, 6.8543', 'Le Ballon d\'Alsace marque le point de rencontre des massifs vosgien et jurassien, aux confins de l\'Alsace, la Lorraine et la Franche-Comté. La tour complète révèle des paysages forestiers et alpestres d\'une grande diversité. Une statue de la Vierge veille depuis le sommet sur les trois régions.', '07:45:00', 1, 2),
(15, 'Trek des Villages Alsaciens', 32.00, 650, 'images/TrekdesVillagesAlsaciens.jpg', '48.2345, 7.3012', '48.1234, 7.2876', 'Ce trek de deux jours traverse les plus beaux villages à colombages du piémont vosgien. Les vignobles en terrasse et les vergers fleuris au printemps créent un paysage de carte postale. Chaque village étape possède son château médiéval et ses traditions culinaires uniques.', '14:00:00', 2, 1),
(16, 'Trek de la Vallée de la Bruche', 38.50, 720, 'images/TrekdelaValléedelaBruche.jpg', '48.4876, 7.1234', '48.3456, 7.2543', 'La vallée de la Bruche, creusée par les glaciers, offre un cadre grandiose pour ce trek de deux jours. Le chemin longe la rivière à travers des forêts mixtes et des prairies humides riches en faune. Des villages alsaciens authentiques jalonnent le parcours avec leurs auberges traditionnelles.', '15:30:00', 2, 1),
(17, 'Trek des Châteaux Vosgiens', 42.00, 800, 'images/TrekdesChâteauxVosgiens.jpg', '48.3123, 7.1456', '48.2345, 7.0987', 'Ce trek relie les vestiges médiévaux les mieux conservés des Vosges : Haut-Koenigsbourg, Ortenbourg et Ramstein. Les points de vue depuis chaque ruine offrent des perspectives uniques sur la plaine alsacienne et le Rhin. Les forêts traversées abritent une faune remarquable avec sangliers, cerfs et rapaces.', '17:00:00', 2, 1),
(18, 'Trek du Piémont Vosgien', 35.80, 580, 'images/TrekduPiémontVosgien.jpg', '48.1890, 7.3456', '47.9876, 7.3012', 'Le piémont vosgien dévoile sur ce trek un paysage de transition entre plaine et montagne d\'une richesse exceptionnelle. Les coteaux viticoles côtoient les premiers contreforts boisés dans une harmonie parfaite. Les marchés et caves alsaciennes le long du parcours invitent à la dégustation des vins locaux.', '14:30:00', 2, 1),
(19, 'Trek des Lacs Vosgiens', 45.00, 750, 'images/TrekdesLacsVosgiens.jpg', '48.0345, 7.0234', '47.9123, 6.9876', 'Ce trek de trois jours relie les principaux lacs naturels des Vosges méridionales dans un écrin de verdure. Chaque bivouac en bord de lac offre des nuits étoilées exceptionnelles loin de la pollution lumineuse. La pêche et la baignade dans ces eaux claires constituent des plaisirs incontournables du parcours.', '18:00:00', 2, 1),
(20, 'Trek Colmar-Munster', 36.00, 690, 'images/TrekColmar-Munster.jpg', '48.0789, 7.3590', '48.0412, 7.1345', 'Ce trek relie deux perles de l\'Alsace en traversant le vignoble alsacien et la montée vers la vallée de Munster. Les panoramas depuis les hauteurs sur Colmar et la vallée fromagère sont remarquables. Le passage dans les villages viticoles aux noms évocateurs rythme agréablement la progression.', '14:30:00', 2, 1),
(21, 'Trek de la Vallée de la Thur', 40.00, 760, 'images/TrekdelaValléedelaThur.jpg', '47.9456, 7.0765', '47.8123, 7.2345', 'La vallée de la Thur, encaissée et verdoyante, offre un voyage au cœur des Vosges industrieuses et naturelles. Le trek alterne entre fond de vallée longeant la rivière et belvédères dominant les villages textiles historiques. Les chutes et cascades de la Thur ponctuent le parcours de moments de fraîcheur bienvenus.', '16:00:00', 2, 1),
(22, 'GR5 Traversée des Vosges', 120.00, 4500, 'images/GR5TraverséedesVosges.jpg', '48.9876, 7.7654', '47.7234, 7.1234', 'Le GR5 traverse les Vosges du nord au sud sur plusieurs jours, révélant toute la diversité des paysages du massif. Les chaumes du sud contrastent avec les grès roses du nord dans un itinéraire de grande randonnée légendaire. Chaque col franchi ouvre sur de nouveaux horizons entre Alsace et Lorraine.', '120:00:00', 2, 2),
(23, 'Trek du Tour des Ballons', 85.00, 3800, 'images/TrekduTourdesBallons.jpg', '47.9234, 7.0456', '47.9234, 7.0456', 'Ce trek exigeant relie les principaux sommets des Vosges méridionales : Grand Ballon, Ballon d\'Alsace et Hohneck. Les paysages d\'altitude alternent entre tourbières, lacs glaciaires et forêts primaires dans un environnement sauvage. La logistique demande une préparation rigoureuse avec plusieurs nuits en refuge ou bivouac.', '80:00:00', 2, 2),
(24, 'Traversée Intégrale Nord-Sud', 95.00, 4200, 'images/TraverséeIntégraleNord-Sud.jpg', '49.0123, 7.4321', '47.7890, 6.8765', 'Cette traversée intégrale des Vosges représente l\'itinéraire de référence pour les trekkeurs confirmés. Elle passe par les points culminants, les forêts vosgiennes les plus sauvages et les vallées les plus secrètes. L\'engagement physique et mental requis sur plusieurs jours forge un lien profond avec ce massif.', '100:00:00', 2, 2),
(25, 'Trek des Sommets et Lacs', 72.00, 3500, 'images/TrekdesSommetsetLacs.jpg', '48.0123, 7.0321', '47.8765, 6.9876', 'Ce trek de quatre jours enchaîne les sommets et les lacs glaciaires dans un environnement d\'une beauté austère. Les nuits en altitude sous un ciel étoilé sans pollution lumineuse sont l\'un des grands privilèges de ce parcours. La diversité des écosystèmes traversés — tourbières, hêtraies, chaumes — en fait un trek naturaliste exceptionnel.', '72:00:00', 2, 2),
(26, 'Trek Vosgien des Crêtes', 68.00, 3200, 'images/TrekVosgiendesCrêtes.jpg', '48.5678, 7.1234', '47.9012, 7.0543', 'Ce trek en crête suit la ligne de partage des eaux entre bassins rhénan et lorrain sur quatre jours de marche. Le sentiment d\'être sur le toit des Vosges, entre deux versants aux caractères très différents, est permanent. Les fermes-auberges vosgiennes jalonnent le parcours pour des étapes conviviales autour de la tarte flambée et du munster.', '70:00:00', 2, 2),
(27, 'Grande Traversée des Vosges Méridionales', 78.00, 3700, 'images/GrandeTraverséedesVosgesMéridionales.jpg', '47.9543, 7.0234', '47.7012, 6.9432', 'Les Vosges méridionales, moins fréquentées que le reste du massif, révèlent sur ce trek un caractère plus sauvage et austère. Le passage par le Ballon d\'Alsace et ses panoramas trifrontaliers constitue le point culminant de l\'aventure. Les forêts de hêtres et de sapins plongent le randonneur dans une atmosphère presque mystique.', '76:00:00', 2, 2),
(28, 'Trek Frontière Franco-Allemande', 90.00, 4100, 'images/TrekFrontièreFranco-Allemande.jpg', '48.9765, 7.9012', '47.8234, 7.6543', 'Ce trek longe l\'ancienne frontière franco-allemande à travers des paysages chargés d\'histoire. Les bornes-frontières et les ouvrages militaires des deux guerres ponctuent ce parcours entre mémoire et nature. La Forêt-Noire, visible depuis les crêtes, rappelle la dimension européenne de ce massif transfrontalier.', '90:00:00', 2, 2),
(29, 'Traversée des Hautes-Vosges', 42.50, 1850, 'images/trek-hautes-vosges.jpg', '48.1643, 7.0792', '47.8114, 7.1025', 'Véritable odyssée sur la ligne de crête, ce trek d\'envergure relie les cols mythiques aux sommets les plus emblématiques du massif. L\'itinéraire offre un panorama à 360° où la plaine d\'Alsace flirte avec la Forêt-Noire, tandis que les Alpes se dessinent à l\'horizon par temps clair. Entre hautes chaumes balayées par les vents et forêts de sapins centenaires, cette aventure demande une endurance soutenue pour dompter les dénivelés successifs de la route des crêtes.', '14:30:00', 2, 2),
(30, 'Tour des Lacs de Munster', 31.20, 1420, 'images/tour-lacs-munster.jpg', '48.0411, 7.1367', '48.0411, 7.1367', 'Ce circuit technique plonge le randonneur au cœur de l\'héritage glaciaire vosgien. Le parcours enchaîne les montées abruptes vers les cirques majestueux abritant le Lac Noir, le Lac Blanc et le Lac des Truites, offrant des contrastes de couleurs saisissants entre le granit sombre et les eaux cristallines. Le passage par les crêtes du Gazon du Faing offre des points de vue vertigineux sur les vallées vosgiennes, exigeant une vigilance constante et une excellente condition physique.', '10:15:00', 2, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`),
  ADD KEY `fk_avis_sentier` (`id_sentiers`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `difficulte`
--
ALTER TABLE `difficulte`
  ADD PRIMARY KEY (`id_difficulte`);

--
-- Index pour la table `sentiers`
--
ALTER TABLE `sentiers`
  ADD PRIMARY KEY (`id_sentier`),
  ADD KEY `fk_sentier_categorie` (`id_categorie`),
  ADD KEY `fk_sentier_difficulté` (`id_difficulte`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `difficulte`
--
ALTER TABLE `difficulte`
  MODIFY `id_difficulte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sentiers`
--
ALTER TABLE `sentiers`
  MODIFY `id_sentier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `fk_avis_sentier` FOREIGN KEY (`id_sentiers`) REFERENCES `sentiers` (`id_sentier`);

--
-- Contraintes pour la table `sentiers`
--
ALTER TABLE `sentiers`
  ADD CONSTRAINT `fk_sentier_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`),
  ADD CONSTRAINT `fk_sentier_difficulté` FOREIGN KEY (`id_difficulte`) REFERENCES `difficulte` (`id_difficulte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
