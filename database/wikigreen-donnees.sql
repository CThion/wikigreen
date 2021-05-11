-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 11 mai 2021 à 15:44
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cthion`
--

--
-- Déchargement des données de la table `art`
--

INSERT INTO `art` (`id`, `artroot`, `id_thm`, `id_ref`, `id_mb`, `titre`, `lien`, `texte`, `dateajout`, `noteposi`, `notenega`) VALUES
(24, 1, 3, 2, 12, 'La chaine du Réveilleur ', 'https://www.youtube.com/c/LeR%C3%A9veilleur/videos  ', 'Pour se renseigner sur à peu près tous les thèmes en rapport avec l’écologie , nous vous conseillons fortement le chaîne « le reveilleur » et son approche orientée « vulgarisation scientifique »', '2021-05-10 12:38:26', 3, 3),
(25, 2, 3, 3, 12, 'Le jour du dépassement ', 'https://fr.wikipedia.org/wiki/Jour_du_d%C3%A9passement ', 'Le jour du dépassement est un concept vraiment très important en matière d’écologie , et nous vous recommandons la page wikipedia pour mieux comprendre ce qu’il y a autour de cette date symbolique .', '2021-05-10 12:38:26', 3, 3),
(26, 3, 3, 4, 12, 'Site du ministère ', 'https://www.ecologie.gouv.fr/ ', 'Le ministère de la transition écologique possède son propre site pour s’informer de ce qu’il se passe à l’échelle nationale et avoir des informations de bases . Attention toute foie à garder à l’esprit que c’est un site gouvernemental …', '2021-05-10 18:03:35', 3, 3),
(27, 4, 3, 5, 12, 'Les films sur l\'écologie ', 'https://www.allocine.fr/tags/default_gen_tag=%e9cologie+/+environnement.html  ', 'Parfois , il est plus agréable de regarder un film que de s’informer sur l’écologie … mais pourquoi ne pas concilier les deux ? Allociné vous propose une sélection de films en rapport avec l’écologie !', '2021-05-10 12:38:26', 3, 3),
(28, 5, 3, 2, 12, 'Conférence de Nicolas Hulot ', '\r\nhttps://www.youtube.com/watch?v=tHnrtX7gDrg ', 'Une conférence de Nicolas Hulot , ancien ministre de l’écologie , pour comprendre l’empleur des enjeux et défis qui nous attendent .', '2021-05-10 18:03:35', 3, 3),
(29, 6, 4, 2, 12, 'L\'appel à la nature ', 'https://www.youtube.com/watch?v=5lXIK_4tpDs ', 'L’écologie est un sujet sérieux et mérite par conséquent d’être défendu sérieusement . Il est cependant très facile , lorsque l’on traite un tel sujet , de tomber dans le sophisme dit de « l’appel à la nature ».Celui ci consiste , entre autre , à attribuer une valeur morale intrinsèque à tout ce qui est naturel ( et par opposition , de discréditer tout ce qui est artificiel ) . Vled Tapas et Acermandax de la chaîne « La Tronche en Biais » vous proposent une petite piqûre de rappel dans un format court et ludique , pour aiguiser votre sens de la rhétorique en la matière …', '2021-05-10 18:14:45', 3, 3),
(30, 7, 4, 6, 12, 'Spiritualité et alimentation bio ', 'https://www.association-etienne-thil.com/wp-content/uploads/2018/01/2009-Camus_Poulain.pdf  ', '\r\nSi l’alimentation bio part d’une bonne intention , elle a aussi ses dérives . Cet article scientifique dresse un portrait du lien qui peut exister entre spiritualité et alimentation bio .Des informations précieuses lorsqu’on veut parler d’écologie autour de sois .', '2021-05-10 18:16:07', 3, 3),
(31, 8, 4, 2, 12, 'Ecologie rationnelle ', 'https://www.youtube.com/channel/UC94tSeCPLV4Jja08tkRI7vA ', 'La chaîne youtube « écologie rationnelle » est un incontournable de la pensée écologique avec une approche neutre et efficace . En effet , sur cette chaîne , pas de militantisme  ni de discours emplis d’émotions mais plutôt des analyses détaillés de plusieurs sujets , toujours dans la subtilité et qui permettent de concevoir la complexité des défis environnementaux qui nous attendent .', '2021-05-10 18:16:07', 3, 3),
(32, 9, 5, 7, 12, 'Youthforclimate', 'https://youthforclimate.fr/rejoindre-un-groupe-local/', 'Si vous êtes jeune et souhaitez vous mobiliser pour le climat , par exemple en participant à des manifestations  , nous vous conseillons ce site internet dynamique . Il y a également possibilité de les suivre sur instagram ( ils possèdent différents comptes en fonction de où vous habitez ! ) ', '2021-05-10 18:20:54', 3, 3),
(33, 10, 6, 8, 12, 'Bienfaits du bio', 'https://www.journalejnfs.com/index.php/EJNFS/article/view/26777 ', 'Voici le résultat d’une étude scientifique sur la consommation de produits bios . Si une amélioration de la santé est globalement observée chez les consommateurs de produits bios ,  cela est du , partiellement ou non , à d’autres choix que peuvent faire ces mêmes individus ( sport , moins de consommation de viande , moins de tabagisme … )  ', '2021-05-10 18:24:09', 3, 3),
(34, 11, 7, 9, 12, 'Qu\'est ce qu\'un OGM ?', 'https://agriculture.gouv.fr/quest-ce-quun-ogm ', 'Les OGM et les pesticides sont très souvent amalgamés , cet article vous propose de revenir sur la définition d’un organisme génétiquement modifié pour éviter les confusions ', '2021-05-10 18:27:43', 3, 3),
(35, 12, 7, 2, 12, 'Les OGM sont ils dangereux ? ', 'https://www.youtube.com/watch?v=lGG6s5x9FQs ', 'Dans cette vidéo , Léo Grasset vous propose de déconstruire vos a priori négatifs sur les OGM . Une vidéo très instructive , avec de l’humour et des sources fiables , fortement recommandée pour se lancer sur le sujet !', '2021-05-10 18:27:43', 3, 3),
(36, 13, 8, 10, 12, 'Affaire Monsanto ', 'https://zet-ethique.fr/2019/06/22/a-propos-dun-article-dans-le-contexte-dun-proces-contre-monsanto/ ', 'Le 28 août 2018 , Monsanto était amené devant la justice pour répondre de cancers qui seraient survenus suite à l’utilisation de glyphosate . L’entreprise est condamnée et doit verser 2 milliard d’euros aux intéressés . Que déduire de tout cela ? Le glyphosate est un poison ? Les juges sont des êtres irrationnels niant le consensus scientifique ? Je vous propose un excellent article de Gaël Violet pour démêler le vrai du faux . Attention cependant , c’est un article en réponse à un  autre article lui même en réponse à cette affaire judiciaire . Un peu de contexte est donc nécessaire à sa totale compréhension.', '2021-05-10 18:33:27', 3, 3),
(37, 14, 8, 11, 12, 'Glyphosat et risques sanitaires ', 'https://www.liberation.fr/checknews/2018/06/08/est-il-vrai-que-le-consensus-scientifique-sur-le-glyphosate-penche-plutot-pour-son-innocuite_1657400/ ', 'Le glyphosate est il un dangereux poison ? L’équipe de checknews de Liberation , spécialisée dans le « debunkage » de fake news , tente ici une présentation succincte du consensus scientifique actuel .', '2021-05-10 18:33:27', 3, 3),
(38, 15, 8, 11, 12, 'Prix de l\'arrêt du glyphosate ', 'https://www.liberation.fr/planete/2017/10/24/glyphosate-une-interdiction-combien-ca-coute_1605448/?utm_campaign=Echobox&utm_medium=Social&utm_source=Facebook&fbclid=IwAR3G-Ku5o-MrNX2bT_kSTN3dJQFcCKcgGiGf9BB11XbGE_umWdSz_VCE86c#link_time=1508918261 ', 'Quel est le coup économique d’arrêter le glyphosate ? Cet article de Libération tente une réponse à cette question ,que ce soit pour le consommateur ou pour les producteurs .', '2021-05-10 18:33:27', 3, 3),
(39, 16, 9, 11, 12, 'Effet d\'une alimentation végétarienne ', 'https://www.liberation.fr/checknews/2018/03/20/les-vegetaliens-et-vegans-ont-il-un-impact-environnemental-moins-important-que-ceux-qui-mangent-de-l_1653328/ ', 'Ne pas laisser la lumière allumée lorsqu’on sort de chez sois , couper l’eau lorsqu’on se brosse les dents … On connaît ces petits gestes du quotient pour réduire notre empreinte écologique mais y a t il plus efficace ? Chiffres à l’appui , Libération tentera de démontrer qu’un changement de régime alimentaire (: en passant végétarien ou végétalien) , a un impact aussi important que sous estimé sur l’émission de gaz à effets de serres ! ', '2021-05-10 18:40:24', 3, 3),
(40, 17, 9, 2, 12, 'Anti-specisme ', 'https://www.youtube.com/watch?v=n37T2ioKI1U ', 'Vous avez peut être pensé à arrêter ou diminuer votre consommation de viande suite aux ressources sur le sujet que nous proposons expliquant l’impact important de l’élevage sur les émissions de gaz à effet de serres mondiales ( 14 % environ ) . Si cela ne suffit pas à vous convaincre , Demos Kratos vous propose une vision de l’aspect éthique qu’il peut y avoir derrière et les engagements réels qui sont liés à ce réel changement de mode de vie. Attention , vidéo orientée politiquement . ', '2021-05-10 18:40:24', 3, 3),
(41, 18, 9, 12, 12, 'La liberation animale ', 'https://www.amazon.fr/Lib%C3%A9ration-animale-Peter-Singer/dp/2228908142/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=la+liberation+animale&qid=1620665059&sr=8-1', 'Dans ce livre , le philosophe Peter Singer tente de démontrer que la cause animale est un enjeux majeur et actuel . Bien que l’aspect écologie y soit très peu abordé puisque le livre date de 1975 , sa lecture permet d’aborder les autres problèmes que pose l’exploitation des animaux dans notre société . ', '2021-05-10 18:40:24', 3, 3),
(42, 19, 10, 13, 12, 'Le plus grand défi de l\'histoire de l\'humanité', 'https://www.amazon.fr/plus-grand-d%C3%A9fi-lhistoire-lhumanit%C3%A9/dp/B07YVGXBHY/ref=sr_1_2?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=3S3RAWSIT0O1P&dchild=1&keywords=le+plus+grand+d%C3%A9fi+de+l%27histoire+de+l%27humanit%C3%A9&qid=1620665224&sprefix=le+plus+grand+d%C3%A9fi%2Caps%2C216&sr=8-2', 'Dans ce petit livre , l’astrophysicien Aurelien Barrau nous propose de dresser un bilan de l’activité humaine sur son environnement en particulier la biodiversité . Si ce bilan est assez alarmant , il est nécessaire d’en prendre conscience pour appréhender le futur de l’humanité .', '2021-05-10 18:46:12', 3, 3),
(43, 20, 10, 2, 12, 'Protection biodiversité ', 'https://www.youtube.com/watch?v=Xce4MtCZfwc ', 'Ce documentaire va développer plusieurs exemples d’engagement de protection de la biodiversité à travers le monde .', '2021-05-10 18:46:12', 3, 3),
(44, 21, 11, 14, 12, 'Récapitulatif des différents types d\'énergie ', 'https://www.planete-energies.com/fr/medias/decryptages/les-differentes-formes-d-energie ', 'Si vous avez envie de revenir aux bases en matière d’énergie , ce court article permet de revoir les différents types d’énergie que l’homme peut exploiter et comment s’y prendre.\r\n ', '2021-05-10 18:53:32', 3, 3),
(45, 22, 12, 15, 12, 'Evolution de la consommation d\'énergies fossiles ', 'https://www.lemonde.fr/economie/article/2021/04/20/la-reprise-favorise-les-energies-fossiles_6077372_3234.html ', 'Comment évolue la consommation actuelle énergies fossiles ? Quels sont les liens avec les émissions de CO2 et quelles sont les causes de cette augmentation ? Attention , article complet  réservé aux abonnés du journal le Monde ', '2021-05-10 18:53:32', 3, 3),
(46, 23, 13, 2, 12, 'Analyse des bénéfices et risques ', '\r\nhttps://www.youtube.com/watch?v=qOqVE9Vy_o4 ', 'Beaucoup d’à priori entourent le nucléaire , 86 % des 18/24 ans considèrent que cette technologie est mauvaise pour le climat ( source dans la description de la vidéo ) . Une grande partie des mouvements écologistes ont le nucléaire dans le collimateur... Mais qu’en est il réellement ? Si nous décidons de laisser tomber cette technologie , quelles sont les alternatives ? Dans une série de 3 vidéos , la chaîne « écologie rationnelle »  vous propose d’approfondir le sujet avec un œil critique . ', '2021-05-10 18:53:32', 3, 3),
(47, 24, 13, 2, 12, 'Les déchets nucléaires ', 'https://www.youtube.com/watch?v=PbPyohZPHMI', 'Comment gérer les déchets nucléaires ? Dans cette série de 2 vidéos , le youtubeur Defakator nous propose de voir réellement comment tout cela se déroule sur le terrain avec la participation de l’ANDRA : agence nationale pour la gestion des déchets radioactifs ', '2021-05-10 18:53:32', 3, 3),
(48, 25, 14, 16, 12, 'Les différentes énergies renouvelables ', 'https://www.edf.fr/groupe-edf/espaces-dedies/l-energie-de-a-a-z/tout-sur-l-energie/le-developpement-durable/qu-est-ce-qu-une-energie-renouvelable ', 'Le site d’EDF vous propose de revenir sur les différents types d’énergies renouvelables avec même un petit quizz à la fin pour voir si vous avez bien retenu !', '2021-05-10 19:00:52', 3, 3),
(49, 26, 14, 17, 12, 'Eoliennes off shore', 'https://www.msn.com/fr-fr/finance/other/entretien-c2-ab-l-e2-80-99-c3-a9olien-offshore-devra-jouer-un-r-c3-b4le-important-c2-bb-aux-c3-a9tats-unis/ar-BB1fTXyS ', 'Le président des états unis de 2016 à 2020 n’était pas le plus écologiste qui soit … Cependant , le retour des Etats unis dans l’accord de Paris avec Joe Biden est un signe \r\nd’espoir . Et certaines ambitions ont déjà repris , comme l’installation d’éoliennes off shore dont parle cet article', '2021-05-10 19:00:52', 3, 3),
(50, 27, 14, 2, 12, 'Les solutions ', 'https://www.youtube.com/watch?v=NlZF9Dr9xIA ', 'Ce documentaire Arte vous propose de découvrir de nouvelles solutions innovantes en matière d’énergies  renouvelables . ', '2021-05-10 19:00:52', 3, 3),
(51, 28, 15, 18, 12, 'La 5G tue', '\"La 5G tue\", écrit l\'astrophysicien Aurélien Barrau. Que veut-il dire ? (nouvelobs.com)  ', 'L’arrivée de la 5g a déclenché de vifs débats dans la scène médiatique . Pourtant les vrais sujets ont ils été abordés ? Entre les paranoïaques ayant peur des ondes et les défenseurs frénétiques de toutes les innovations , la vraie question n’est elle pas : « les avantages de cette nouvelle technologie sont ils suffisamment importants pour justifier le coût écologique qu’elle suscite » . L’obs vous propose de vous faire découvrir l’avis de l’astrophysicien Aurélien Barrau sur le sujet ... ', '2021-05-10 19:08:40', 3, 3),
(52, 29, 15, 19, 12, 'L\'âge des Low Tech ', 'https://www.amazon.fr/L%C3%82ge-tech-civilisation-techniquement-soutenable/dp/2021160726/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=DFFLOR94VK0V&dchild=1&keywords=l%27age+des+low+tech&qid=1620666642&sprefix=l%27age+des+low+%2Caudible%2C210&sr=8-1', 'On entend souvent parlé de tout ce qui est « high tech » comme étant indéniablement le futur , mais si celui ci passait justement par des technologies plus minimalistes , moins demandeuses en ressources et en énergie ? C’est l’idée que vous propose d’éxplorer l’ingénieur Philippe Bihouix  \r\n', '2021-05-10 19:08:40', 3, 3),
(53, 30, 16, 2, 12, 'Le PIB', 'https://www.youtube.com/watch?v=z0KK0uaXfLE  ', 'On a tous appris ce qu’était le PIB à l’école : « produit intérieur brut » mais à quoi cet indicateur économique correspond t il réellement ? Et surtout , est ce un indicateur bien pertinent au vu de la crise écologique qui nous attend ? Heu ?reka et Le réveilleur nous en disent plus sur le sujet à travers une vidéo d’économie très bien vulgarisée', '2021-05-10 19:08:40', 3, 3),
(54, 31, 16, 20, 12, 'La Croissance ', 'https://www.amazon.fr/Limites-croissance-dans-monde-fini/dp/2374250741/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=T8GY5N32S8HM&dchild=1&keywords=les+limites+%C3%A0+la+croissance&qid=1620666799&sprefix=les+limites%2Caps%2C206&sr=8-1 ', 'Notre monde est contraint par des limites naturelles : il est fini . Pourtant , l’idéologie dominante en économie prône la croissance comme un objectif absolu . Dans ce livre assez épais , vous explorerez les contradictions et les paradoxes qui peuvent intervenir lorsque la théorie économique rencontre les limites de la matière .', '2021-05-10 19:08:40', 3, 3),
(55, 32, 17, 2, 12, 'Jeux vidéos ', 'https://www.youtube.com/watch?v=2Qq-6wByLPI \r\n', 'Lorsqu’on parle d’écologie , « jeux vidéo » est rarement le premier mot qui vient à l’esprit . Pourtant , face à l’urgence climatique , celui ci pourrait avoir besoin de se révolutionner pour économiser les ressources précieuses de notre planète . Un documenaire signé Game Spectrum \r\n', '2021-05-10 19:17:30', 3, 3),
(56, 33, 17, 21, 12, 'Cloud gaming ', 'https://www.phonandroid.com/stadia-nest-pas-ecologique-limpact-environnemental-est-catastrophique.html ', 'Le cloud gaming est une révolution dans le domaine du jeu vidéo . Cette nouvelle technologie permet de jouer sur n’importe quel support , le jeu tournant à distance sur des serveurs . Mais quid de l’impact sur l’environnement ? ', '2021-05-10 19:17:30', 3, 3),
(57, 34, 17, 22, 12, 'Effondrement ', 'https://www.amazon.fr/Effondrement-Professor-Geography-Diamond-2009-02-01/dp/B01FKUO8B6/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=effondrement+jared&qid=1620667235&sr=8-1', 'Dans cet ouvrage , l’historien et histographe Jared Diamond revient sur les principales chutes de civilisations ( mayas , vikings , habitants de l’île de Pacques … ) . Le parallèle avec notre civilisation actuelle mondialisée est édifiant ! ', '2021-05-10 19:17:30', 3, 3),
(58, 35, 18, 23, 12, 'Le \"carbone bleu\"', 'Science et vie n°1243 , pages 70 à 89 , « carbone bleu : l’océan sauvera t il la planète » par Yves Sciama ', 'Si on a plutôt tendance à voir l’océan comme une victime du réchauffement climatique ( ce qui est vrai ) on a moins tendance à le voir comme une solution potentielle . C’est pourtant l’objectif ambitieux de cet article du science et vie d’avril 2021 ! Phytoplancton , herbiers sous marins , marais salés ou encore mangroves pourraient jouer un rôle considérable dans la lutte contre le changement climatique .Article à lire absolument !', '2021-05-10 19:17:30', 3, 3),
(67, 44, 3, 2, 11, 'La chaine du Réveilleur ', 'https://www.youtube.com/c/LeR%C3%A9veilleur/videos  ', '                        Pour se renseigner sur à peu près tous les thèmes en rapport avec l’écologie , nous vous conseillons fortement le chaîne « le reveilleur » et son approche orientée « vulgarisation scientifique »                    ', '2021-05-11 16:45:55', 3, 3),
(68, 44, 3, 2, 11, 'La chaine du Réveilleur ', 'https://www.youtube.com/c/LeR%C3%A9veilleur/videos  ', '                        Pour se renseigner sur à peu près tous les thèmes en rapport avec l’écologie , nous vous conseillons fortement le chaîne « le reveilleur » et son approche orientée « vulgarisation scientifique »                    ', '2021-05-11 16:49:45', 3, 3),
(69, 44, 3, 2, 11, 'La chaine du Réveilleur ', 'https://www.youtube.com/c/LeR%C3%A9veilleur/videos  ', '                        Pour se renseigner sur à peu près tous les thèmes en rapport avec l’écologie , nous vous conseillons fortement le chaîne « le reveilleur » et son approche orientée « vulgarisation scientifique »                    ', '2021-05-11 16:50:59', 3, 3),
(70, 1, 3, 2, 11, 'La chaine du Réveilleur ', 'https://www.youtube.com/c/LeR%C3%A9veilleur/videos  ', '                        Pour se renseigner sur à peu près tous les thèmes en rapport avec l’écologie , nous vous conseillons fortement le chaîne « le reveilleur » et son approche orientée « vulgarisation scientifique »                    ', '2021-05-11 16:57:16', 3, 3),
(71, 8, 4, 2, 11, 'Ecologie rationnelle ', 'https://www.youtube.com/channel/UC94tSeCPLV4Jja08tkRI7vA ', '                        La chaîne youtube « écologie rationnelle » est un incontournable de la pensée écologique avec une approche neutre et efficace . En effet , sur cette chaîne , pas de militantisme  ni de discours emplis d’émotions mais plutôt des analyses détaillés de plusieurs sujets , toujours dans la subtilité et qui permettent de concevoir la complexité des défis environnementaux qui nous attendent .                    ', '2021-05-11 17:38:20', 3, 3);

--
-- Déchargement des données de la table `art_typeart`
--

INSERT INTO `art_typeart` (`id`, `id_art`, `id_typeart`) VALUES
(37, 25, 4),
(49, 26, 3),
(42, 27, 4),
(31, 29, 4),
(50, 30, 4),
(24, 31, 4),
(51, 32, 1),
(22, 33, 4),
(47, 34, 4),
(43, 35, 2),
(19, 36, 4),
(29, 37, 4),
(45, 38, 4),
(25, 39, 4),
(21, 40, 4),
(35, 41, 4),
(39, 42, 4),
(46, 43, 4),
(48, 44, 4),
(28, 45, 4),
(20, 46, 4),
(41, 47, 4),
(40, 48, 4),
(27, 49, 4),
(44, 50, 4),
(33, 51, 4),
(32, 52, 4),
(38, 53, 4),
(34, 54, 4),
(30, 55, 4),
(23, 56, 4),
(26, 57, 4),
(36, 58, 4),
(52, 71, 1);

--
-- Déchargement des données de la table `cmt`
--

INSERT INTO `cmt` (`id`, `id_mb`, `texte`, `date`, `noteposi`, `notenega`) VALUES
(1, 1, 'Je pense que ce thème mériterait d\\\'être une section à part entière étant donné la sensibilité du sujet', '2021-04-06 08:46:31', 4, 8),
(2, 1, 'Cette ref n\\\'a rien à faire ici, je pense que tu t\\\'es trompé de section @benji6\'', '2021-04-08 18:26:49', 9, 3),
(3, 3, 'Pas ouf tout ça, moi je pense que ça va mal finir d\'une manière ou d\'une autre', '2021-04-01 21:12:18', NULL, NULL),
(4, 7, 'C\'est clair que ça sent pas bon du tout !', '2021-04-05 21:29:06', 1, NULL);

--
-- Déchargement des données de la table `mb`
--

INSERT INTO `mb` (`id`, `nom`, `prenom`, `pseudo`, `mail`, `mdp`, `dateinscrit`) VALUES
(1, 'Kevin', 'Jean', 'Jkv13', 'jean.kevin@yahoo.com', 'jfizojfze5456fzeu-_hef', '2021-04-14 15:00:17'),
(2, 'Cazoom', 'Marcus', 'Piriti', 'marcuscazoom37@orange.fr', 'foaizuehfiuhz46546ehfi', '2021-04-09 15:00:51'),
(3, 'Tari', 'Pierre', 'soyaka', 'pierre.tari@gmail.com', 'piuhifzuhe-_fieoz5_-_45', '2021-04-13 15:00:34'),
(4, 'Jonson', 'Michael', 'chifoumi', 'michael.jonson@gmail.com', 'jfioazprjfaozijojir-_-_-iorzjgfoizje', '2021-04-01 08:44:17'),
(5, 'Ideale', 'Cendrion', 'yellowbird', 'cendrineideal@zoho.com', 'fpioajzprgiozerpgjze^pkôjmlniuhreg', '2021-04-18 08:00:40'),
(6, 'Barbier', 'Sam', 'sami', 'sam.barbier@laposte.net', 'paoizjfpoijgmlqk,sdovijs', '2021-04-03 15:00:17'),
(7, 'Chemin', 'Iris', 'picoti', 'iris.chemin@orange.fr', 'apiuehpaoihuvaiovns', '2021-04-08 08:37:17'),
(8, 'Dufrantier', 'Walter', 'wali', 'walter.duplantier@gmail.com', 'perigpskd,oijpoijaspdj', '2021-04-02 09:49:17'),
(11, 'Thion', 'Clément', 'Charles T', 'clement.thion729@gmail.com', '$2y$10$af0mycLkoAdNl.4PAYPEeuG49HayQCNk2K5nB3BMH8UxtYHaPZsV2', '2021-04-18 15:10:49'),
(12, 'Besognet', 'Thomas', 'Thomas_B', 'thomas.besognet@gmail.com', '$2y$10$1xrwAV8sD2jvYAhlC8C0QuXifgbj2G9F887tK/gLxm7qhy9Ug04d2', '2021-05-10 11:15:05');

--
-- Déchargement des données de la table `ref`
--

INSERT INTO `ref` (`id`, `id_mb`, `titre`, `texte`, `nvxvali`, `nvxvulga`, `note`, `date`) VALUES
(2, 12, 'Youtube', 'https://www.youtube.com/', 1, 5, 4, '2021-05-10 12:34:34'),
(3, 12, 'Wikipedia ', 'https://fr.wikipedia.org/wiki/Wikip%C3%A9dia:Accueil_principal ', 4, 2, 5, '2021-05-10 12:31:07'),
(4, 12, 'Ecologie.gouv', 'https://www.ecologie.gouv.fr/ ', 3, 3, 3, '2021-05-10 17:59:30'),
(5, 12, 'Allociné', 'https://www.allocine.fr/', 1, 4, 2, '2021-05-10 17:59:30'),
(6, 12, 'Association ethienne-thil ', 'https://www.association-etienne-thil.com/ ', 4, 1, 3, '2021-05-10 18:13:01'),
(7, 12, 'Youthforclimate', 'https://youthforclimate.fr/', 2, 5, 3, '2021-05-10 18:19:25'),
(8, 12, 'Journalejnfs', 'https://www.journalejnfs.com/index.php/EJNFS ', 5, 2, 4, '2021-05-10 18:23:22'),
(9, 12, 'Agriculture.gouv', 'https://agriculture.gouv.fr/', 3, 3, 3, '2021-05-10 18:26:19'),
(10, 12, 'Zet-ethique ', 'https://zet-ethique.fr/', 5, 4, 5, '2021-05-10 18:31:11'),
(11, 12, 'Liberation', 'https://www.liberation.fr/', 3, 4, 4, '2021-05-10 18:31:11'),
(12, 12, 'Peter Singer ', 'Peter Singer est un philosophe australien qui a défendu les idées dites \"utilitaristes\". Il a travaillé sur de nombreux modèles de philosophie morale dite \"pratique\" tel que le célèbre dilemme de la bugati . ', 5, 4, 5, '2021-05-10 18:39:33'),
(13, 12, 'Aurelien Barrau ', 'Aurelien barrau est un astriphysicien français qui a notamment travaillé sur la relativité générale . Bien que son domaine d\'étude ne soit pas en rapport direct avec l\'écologie , il est connu pour son engagement dans le domaine . Il est également docteur en philosophie .', 5, 5, 5, '2021-05-10 18:45:17'),
(14, 12, 'Planète-énergie ', 'https://www.planete-energies.com/fr', 3, 3, 2, '2021-05-10 18:51:25'),
(15, 12, 'Le Monde ', 'https://www.lemonde.fr/', 4, 4, 4, '2021-05-10 18:51:25'),
(16, 12, 'EDF', 'https://www.edf.fr/', 4, 3, 3, '2021-05-10 18:59:21'),
(17, 12, 'MSN', 'https://www.msn.com/fr-fr/', 2, 3, 2, '2021-05-10 18:59:21'),
(18, 12, 'Nouvelobs', 'https://www.nouvelobs.com/', 3, 3, 3, '2021-05-10 19:06:13'),
(19, 12, 'Philippe Bihouix ', 'Philippe Bihouix est un ingénieur qui a fait l\'école centrale de Paris .Il est aujourd\'hui directeur adjoint du pôle \" Aménagement Recherche Pôles d’Échanges\" de la SNCF ', 4, 4, 4, '2021-05-10 19:06:13'),
(20, 12, 'Dennis Meadows', 'Dennis Meadows est un professeur et économiste  américain . En 1972 , il co publie avec trois scientifiques du MIT un rapport qui montre les liens entre croissance économique et enjeux écologiques ', 4, 1, 3, '2021-05-10 19:06:13'),
(21, 12, 'Phonandroid ', 'https://www.phonandroid.com/', 2, 4, 3, '2021-05-10 19:14:32'),
(22, 12, 'Jared Diamond', 'Jared Diamond est un  géographe, biologiste évolutionniste, physiologiste, historien et géonomiste américain . Il a toujours eu à cœur de vulgariser son savoir pour le rendre accessible au grand public . ', 4, 2, 3, '2021-05-10 19:14:32'),
(23, 12, 'Science et Vie ', 'https://www.science-et-vie.com/ ', 5, 5, 5, '2021-05-10 19:16:17');

--
-- Déchargement des données de la table `sec`
--

INSERT INTO `sec` (`id`, `id_mb`, `titre`, `texte`, `date`) VALUES
(3, 12, 'General', 'Dans cette section , vous trouverez les ressources de base pour vous informer sur l\'écologie , découvrir les arguments et comment agir concrètement pour préserver notre environnement ', '2021-05-10 11:37:45'),
(4, 12, 'Consommation', 'Dans cette section , vous trouverez des informations sur comment agir sur l\'environnement via vos habitudes de consommation , par exemple via l\'alimentation  ', '2021-05-10 11:42:50'),
(5, 12, 'Cause animale ', 'Dans cette section , vous retrouverez tout ce qui est en rapport avec les autres animaux qui partagent notre environnement et comment les protéger', '2021-05-10 11:42:50'),
(6, 12, 'Energie ', 'Dans cette section , vous retrouverez des références pour vous renseigner sur les différents enjeux et solutions liés aux énergies , thème majeur de l\'écologie ', '2021-05-10 11:46:33'),
(7, 12, 'Progrès et avenir ', 'Dans cette section , vous retrouverez des informations vous permettant de vous projeter vers l\'avenir . Comment va évoluer le monde au vu du changement climatique et de l\'épuisement des ressources ? quelles sont les perspectives ', '2021-05-10 11:42:50');

--
-- Déchargement des données de la table `thm`
--

INSERT INTO `thm` (`id`, `id_sec`, `id_mb`, `titre`, `texte`, `date`) VALUES
(3, 3, 12, 'S\'informer ', 'comment bien se renseigner sur l\'écologie ? Où trouver des informations fiables et démêler le vrai du faux ? Ce thème tente de vous donner des ressources générales pour répondre à ces questions ', '2021-05-10 11:51:54'),
(4, 3, 12, 'Argumenter ', 'Défendre l\'écologie est toujours complexe , en effet c\'est un sujet difficile où tout le monde semble avoir une opinion . Ici , nous nous intéresserons à comment bien défendre l\'écologie , avec des arguments rationnels et percutants ', '2021-05-10 11:51:54'),
(5, 3, 12, 'Agir ', 'pour défendre la cause écologique , il est aussi nécessaire de s\'engager . Dans ce thème , nous essayons de fournir des ressources pour savoir comment agir et s\'organiser à l\'échelle de chacun ', '2021-05-10 11:51:54'),
(6, 4, 12, 'Alimentation bio ', 'On entend beaucoup parler d\'alimentation bio , mais les discours sont parfois confus . Alors , démagogie ou réelle solution ? Essayons de trancher la question dans ce thème ', '2021-05-10 11:58:21'),
(7, 4, 12, 'OGM', 'Les OGM ont mauvaises réputation , mais quels sont leurs effets réels sur la santé et l\'environnement ? ', '2021-05-10 11:58:21'),
(8, 4, 12, 'Pesticides ', 'La question des pesticides revient souvent dans le débat publique . Par conséquent , il est vital de s\'informer le mieux possible sur le sujet ', '2021-05-10 11:58:21'),
(9, 5, 12, 'Animalisme ', 'La cause animale est beaucoup défendue dans le milieu écologiste . Dans ce thème , nous parlerons des arguments animalistes , anti-specistes , vegan ...', '2021-05-10 12:03:36'),
(10, 5, 12, 'Biodiversité ', 'Nous ne sommes pas les seuls animaux sur terre , l\'impact sur notre environnement influe sur la vie des autres animaux qui nous entourent , et la disparition de ceux ci pourrait à son tour avoir un effet néfaste sur nous ...', '2021-05-10 12:03:36'),
(11, 6, 12, 'Les différentes énergies ', 'Ce thème est le thème principal de cette section . Avant de regarder dans le détail les avantages / inconvénients / Fonctionnement de chaque énergie , nous vous encourageons à acquérir les notions de bases dans ce thème ', '2021-05-10 12:06:56'),
(12, 6, 12, 'Les énergies fossiles', 'Dans ce thème , nous nous intéresserons au type d\'énergie le plus catastrophique pour le climat : les énergies fossiles ', '2021-05-10 12:06:56'),
(13, 6, 12, 'Le nucléaire ', 'C\'est le sujet d\'énergie le plus polémique et qui divise la société . Qu\'en est il vraiment ? ', '2021-05-10 12:06:56'),
(14, 6, 12, 'Les énergies renouvelables ', 'Les énergies renouvelables semblent être une solution envisagée pour lutter contre l\'épuisement des ressources . Sont elles si efficaces ? Comment accomplir la transition énergétique ? ', '2021-05-10 12:06:56'),
(15, 7, 12, 'Technologie ', 'La technologie est elle la solution miracle ? La science est elle en mesure de répondre de manière efficace aux enjeux contemporains ? ', '2021-05-10 12:14:48'),
(16, 7, 12, 'Economie ', 'le modèle économique est il compatible avec les enjeux environnementaux ? Faut il le reformer voir le bouleverser ? ', '2021-05-10 12:06:56'),
(17, 7, 12, 'Culture ', 'Ce thème peut paraitre inattendu sur un site sur l\'écologie . Pourtant la culture , via des œuvres d\'arts engagés ou bien des façons de se repenser , a son rôle à jouer .', '2021-05-10 12:06:56'),
(18, 7, 12, 'Solutions et innovations ', 'Quelles innovations et solutions vont permettre de relever les défis écologiques de ce siècle ? Petit aperçu dans ce thème ', '2021-05-10 12:06:56');

--
-- Déchargement des données de la table `typeart`
--

INSERT INTO `typeart` (`id`, `type`) VALUES
(1, 'vidéo'),
(2, 'podcast'),
(3, 'livre'),
(4, 'film documentaire');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
