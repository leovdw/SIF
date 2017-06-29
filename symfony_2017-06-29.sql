# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.6.35)
# Base de données: symfony
# Temps de génération: 2017-06-29 17:45:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table article
# ------------------------------------------------------------

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;

INSERT INTO `article` (`id`, `titre`, `image`, `description_image`, `created_at`, `description`, `visible`, `updated_at`)
VALUES
	(1,'Fest-noz solidaire le 29 octobre à Poullaouen','actu4.png','Enfants',NULL,'<p>Yalla! Pour les Enfants vous convie le samedi 29 octobre &agrave; un fest-noz de lev&eacute;e de fonds dont les entiers b&eacute;n&eacute;fices reviendront &agrave; son &eacute;cole d&rsquo;Aley, situ&eacute;e au Liban, &agrave; quelques kilom&egrave;tres de Beyrouth.</p>\r\n\r\n<p>Vous pourrez y appr&eacute;cier les talents des musiciens et chanteurs, Marie-H&eacute;l&egrave;ne Baron, Laurent Bigot, Yann Boulanger, Jean-Daniel Bourdonnay, Pierre Cr&eacute;pillon, Annie Ebrel, Ifig Flatr&egrave;s, Marie-Laurence Fustec, Riwal Fustec, Yann Goasdou&eacute;, Maurice Guillou, Jean-Paul Guyomarc&rsquo;h, Jean Herrou, Brigitte Le Corre, Yann Le Corre, Bruno Le Manach, Marie-No&euml;lle Le Mapihan, Pierre-Yves Le Panse, Fran&ccedil;ois Perennes, Iffig Poho, Christian Rivoalen, qui s&rsquo;engagent b&eacute;n&eacute;volement pour soutenir Yalla! Pour les Enfants.</p>\r\n\r\n<p>Cette f&ecirc;te traditionnelle bretonne o&ugrave; r&egrave;gnent la bonne humeur, la convivialit&eacute;, la gaiet&eacute; fait &eacute;cho au dialogue interculturel men&eacute; par Yalla ! Pour les Enfants qui entend r&eacute;unir au travers de projets culturels communs la communaut&eacute; d&rsquo;accueil libanaise et la communaut&eacute; syrienne en exil pour construire une paix durable. Avec la participation active de : Maryam Samaan, Cyrille Flejou, AFPS Centre Bretagne, la mairie de Poullaouen, Le T&eacute;l&eacute;gramme, Ouest-France, Radio Montagne Noire, Radio Kreiz Breizh, Radio Bleu Breizh Izel</p>',1,'2017-06-29 16:43:14'),
	(2,'Assemblée Générale de Yalla ! Pour les Enfants jeudi 29 septembre 2016 à 19h, à Paris','logo.svg','article 2',NULL,'<p><a href=\"https://www.yalla-enfants.com/2016/09/26/assemblee-generale-de-yalla-pour-les-enfants-jeudi-29-septembre-2016-a-19h-a-paris/\" rel=\"bookmark\" title=\"Permalink to Assemblée Générale de Yalla ! Pour les Enfants jeudi 29 septembre 2016 à 19h, à Paris\">26 septembre 2016</a><a href=\"https://www.yalla-enfants.com/category/non-classe/\" rel=\"category tag\">Non class&eacute;</a></p>\r\n\r\n<p>Chers adh&eacute;rents, chers amis,</p>\r\n\r\n<p>Nous vous invitons &agrave; l&rsquo;Assembl&eacute;e G&eacute;n&eacute;rale de Yalla&nbsp;!&nbsp;Pour les Enfants, qui se tiendra&nbsp;<strong>le jeudi 29 septembre 2016 &agrave; 18h30 &agrave;&nbsp;</strong>&laquo;&nbsp;La Trockette&nbsp;&raquo;, 125, rue du Chemin Vert 75011 Paris, m&eacute;tro P&egrave;re Lachaise.</p>\r\n\r\n<p>L&rsquo;ordre du jour sera le suivant&nbsp;:</p>\r\n\r\n<p>Rapport moral,<br />\r\nRapport financier,<br />\r\nPr&eacute;sentation du budget pr&eacute;visionnel,<br />\r\nInformation sur la relation bancaire avec la Soci&eacute;t&eacute; G&eacute;n&eacute;rale,<br />\r\nPr&eacute;sentation du projet de l&rsquo;&eacute;cole d&rsquo;Aley et du programme &laquo;&nbsp;apprends-moi Maman&nbsp;&raquo;,</p>\r\n\r\n<p>Appel &agrave; b&eacute;n&eacute;volat&nbsp;:</p>\r\n\r\n<p>1 / Recrutement d&rsquo;une personne venant collaborer &agrave; la communication de Yalla&nbsp;!<br />\r\n2 / Recrutement d&rsquo;une personne pouvant r&eacute;pondre aux appels &agrave; projet des bailleurs de fonds,<br />\r\n3/ Recrutement d&rsquo;une personne apportant une aide aux travaux administratifs,<br />\r\nQuestions diverses,</p>\r\n\r\n<p>Les documents ayant servi &agrave; l&rsquo;&eacute;laboration de cette Assembl&eacute;e G&eacute;n&eacute;rale sont consultables, sur RDV au si&egrave;ge de l&rsquo;association pendant tout le mois d&rsquo;octobre.</p>\r\n\r\n<p>Nous vous remercions de nous faire part de votre participation en nous renvoyant les informations suivantes :</p>\r\n\r\n<p>Madame, Monsieur</p>\r\n\r\n<p>Participera &agrave; l&rsquo;Assembl&eacute;e G&eacute;n&eacute;rale du jeudi 29 septembre 2016</p>\r\n\r\n<p>Ne participera pas &agrave; l&rsquo;Assembl&eacute;e G&eacute;n&eacute;rale du jeudi 29 septembre 2016*</p>\r\n\r\n<p>Donne pouvoir &agrave;&nbsp;:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>*veuillez barrer la mention inutile</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bien cordialement,<br />\r\nMary Lemeland-Mellionec,<br />\r\nPr&eacute;sidente</p>',1,'2017-06-29 16:44:20'),
	(3,'Pétition « Ban Ki-moon : STOPPONS LA GUERRE EN SYRIE »','actualite1.png','Gameboy',NULL,'<p>Nous relayons l&rsquo;appel citoyen adress&eacute; au Secr&eacute;taire G&eacute;n&eacute;ral des Nations Unies Ban Ki-moon.&nbsp;<strong><a href=\"https://www.change.org/p/ban-ki-moon-secretary-general-of-the-united-nations-stop-in-war-in-syria-stoppons-la-guerre-en-syrie?recruiter=455594658&amp;utm_source=share_petition&amp;utm_medium=email&amp;utm_campaign=share_email_responsive\">Pour vous aussi signer cette p&eacute;tition, cliquez ici.</a></strong></p>\r\n\r\n<p>&laquo;&nbsp;Nous citoyens du monde, demandons aujourd&rsquo;hui, l&rsquo;arr&ecirc;t imm&eacute;diat des bombardements en Syrie et la protection des zones civiles, ainsi que l&rsquo;aide d&rsquo;urgence aux populations durement touch&eacute;es par cette guerre g&eacute;nocidaire.<br />\r\nParce qu&rsquo;il n&rsquo;est plus humainement possible pour nous, d&rsquo;assister en spectateurs impuissants au massacre de cette population. Nous nous unissons ce jour pour hurler notre d&eacute;saccord et notre volont&eacute; de voir cesser de telles atrocit&eacute;s.<br />\r\nNous demandons &agrave; Monsieur Ban Ki-moon, Secr&eacute;taire G&eacute;n&eacute;ral de l&rsquo;ONU, de porter notre message aupr&egrave;s des repr&eacute;sentants des nations du monde, afin de faire stopper imm&eacute;diatement les bombardement en Syrie.&nbsp;&raquo;</p>',1,'2017-06-29 16:45:15'),
	(4,'Les prochains évènements de Souria Houria','actu3.png','Souris Houria',NULL,'<p><a href=\"http://5ut5.mj.am/nl/5ut5/1t7rw.html?m=AEkAFKSaQJoAASYitxAAAGSIRa8AAP-Ka5EAF8O8AAUhIgBX5ZJZlNNvTuLWTrSNrLPGRp4DowAE6xo&amp;b=580d42a5&amp;e=c77ac671&amp;email=mlemeland.yalla@gmail.com\">D&eacute;couvrez ici&nbsp;</a>les nombreuses rencontres propos&eacute;es par l&rsquo;association Souria Houria dans les semaines qui viennent.</p>',1,'2017-06-29 16:45:56'),
	(6,'Notre dernière newsletter (août 2016)','photo3.png','Newsletter',NULL,'<p>Chers amis, chers membres,</p>\r\n\r\n<p><a href=\"http://us8.campaign-archive1.com/?u=55aa889dcedff8a73bc8b8497&amp;id=8067617451&amp;e=[UNIQID]\">cliquez ici pour lire notre derni&egrave;re newsletter.</a></p>\r\n\r\n<p>Nous vous souhaitons une bonne lecture !</p>',1,'2017-06-29 17:04:25'),
	(7,'Yalla ! Pour les Enfants au marché des céramistes de Quimper les 5 et 6','actualite2.png','shoes',NULL,'<p>Des oeuvres de plusieurs c&eacute;ramistes ont &eacute;t&eacute; vendues au profit de Yalla ! Pour les Enfants &agrave; Quimper, les 5 et 6 septembre derniers. Un grand merci &agrave; notre adh&eacute;rent J&eacute;r&ocirc;me Carri&egrave;re qui nous a propos&eacute; cette activit&eacute;, ainsi qu&rsquo;aux artistes participants.</p>\r\n\r\n<p>Nota Bene pour nos amis bretons : Yalla ! sera pr&eacute;sent au Fest-noz de Poullaouen le 29 octobre prochain !</p>',1,'2017-06-29 17:05:54'),
	(8,'Syrien n’est fait… du 21 au 23 juillet à Paris','actu4.png','shoes',NULL,'<p><strong>Du 21 au 23 Juillet 2016</strong>, l&rsquo;Association de Soutien aux M&eacute;dias Libres (<strong>ASML</strong>) invite&nbsp; la<strong>Caravane Culturelle Syrienne</strong>&nbsp;et les associations syriennes de Paris membres du collectifs&nbsp;<strong>CODSSY</strong>, &agrave; se r&eacute;unir autour d&rsquo;artistes, chercheurs et militants de la soci&eacute;t&eacute; civile syrienne qui se mobiliseront pour faire d&eacute;couvrir au public parisien une autre facette de la Syrie :&nbsp;<strong>celle de la plume et du pinceau</strong>.Pour cette premi&egrave;re &eacute;dition<strong>,&nbsp;</strong><strong>ASML</strong>&nbsp;a choisi le site des &laquo;&nbsp;<strong>Grands Voisins</strong>&nbsp;&raquo;, un projet alternatif d&rsquo;occupation solidaire de l&rsquo;h&ocirc;pital Saint Vincent de Paul dans le 14&egrave;mearrondissement de Paris:&nbsp;82 avenue Denfert Rochereau.<strong>&laquo;&nbsp;Syrien n&rsquo;est fait<em>&hellip;</em>&nbsp;&raquo;&nbsp;</strong>invite le public parisien &agrave; appr&eacute;hender la richesse et la diversit&eacute; de la production culturelle contemporaine syrienne &agrave; travers un large spectre d&rsquo;activit&eacute;s&nbsp;: concerts, expositions, conf&eacute;rence, rencontre avec auteurs, projection de films, danse, stand d&rsquo;artisanat.Pour cette premi&egrave;re &eacute;dition<strong>,&nbsp;</strong><strong>ASML</strong>&nbsp;a choisi le site des &laquo;&nbsp;<strong>Grands Voisins</strong>&nbsp;&raquo;, un projet alternatif d&rsquo;occupation solidaire de l&rsquo;h&ocirc;pital Saint Vincent de Paul dans le 14&egrave;mearrondissement de Paris.<strong>&laquo;&nbsp;Syrien n&rsquo;est fait<em>&hellip;</em>&nbsp;&raquo;&nbsp;</strong>invite le public parisien &agrave; appr&eacute;hender la richesse et la diversit&eacute; de la production culturelle contemporaine syrienne &agrave; travers un large spectre d&rsquo;activit&eacute;s&nbsp;: concerts, expositions, conf&eacute;rence, rencontre avec auteurs, projection de films, danse, stand d&rsquo;artisanat.</p>',1,'2017-06-29 17:07:31'),
	(9,'Actualités de notre partenaire Souria Houria','actu3.png','Souris Houria',NULL,'<p>Les jours qui viennent, Souria Houria vous propose de nombreux &eacute;v&egrave;nements :&nbsp;<a href=\"http://souriahouria.com/events/paris-%D8%A7%D9%84%D8%AA%D8%B9%D8%A8%D9%8A%D8%B1-%D9%85%D9%86-%D8%AE%D9%84%D8%A7%D9%84-%D8%A7%D9%84%D9%81%D9%86-%D9%86%D8%B4%D8%A7%D8%B7-%D9%85%D9%88%D8%AC%D9%87-%D9%84%D9%84%D8%A3%D8%B7/\">L &lsquo;abricot de la Ghouta</a>, (activit&eacute;s pour les enfants syriens), &nbsp;une&nbsp;<a href=\"http://souriahouria.com/events/paris-le-patrimoine-historique-syrien-destruction-et-instrumentalisation/\">rencontre avec les arch&eacute;ologues syriens Ali Othman* et Shaker al-Shbib</a>&nbsp;sur le th&egrave;me&nbsp;Le patrimoine historique syrien :&nbsp;destruction et instrumentalisation, et enfin &nbsp;l<a href=\"http://www.yalla-enfants.com/2016/03/17/en-avril-a-paris-spectacle-du-duo-catherine-vincent-pour-yalla/\">e spectacle musical jeune public Hansel et Gretel de Catherine Vincent</a>, avec Yalla ! Pour les Enfants.</p>',1,'2017-06-29 17:08:16'),
	(10,'En avril à Paris, spectacle jeune public du duo Catherine Vincent pour Yalla !','hanselgretel_web-1200x480.jpg','hanselgretel_web',NULL,'<p>Yalla&nbsp;! Pour les Enfants est heureux de vous annoncer le spectacle Hansel et Gretel du duo de musiciens Catherine Vincent, le 25 avril 2016 &agrave; 16h, &agrave; la salle G&eacute;n&eacute;riques, 34 rue de C&icirc;teaux, 75012 Paris.</p>\r\n\r\n<p>Le duo reprend en chanson le grand classique des fr&egrave;res Grimm qu&rsquo;enfants et parents reconna&icirc;tront imm&eacute;diatement&nbsp;: un fr&egrave;re et une s&oelig;ur abandonn&eacute;s dans la for&ecirc;t sont irr&eacute;sistiblement attir&eacute;s par une chaumi&egrave;re fabuleuse faite de friandises. Ils sont loin de se douter qu&rsquo;ils tomberont entre les griffes d&rsquo;une horrible sorci&egrave;re&hellip;</p>\r\n\r\n<p>Accompagn&eacute;s de leur guitare, de percussions et d&rsquo;un harmonium indien, le duo embarque petits et grands dans la magie de ce conte universel.</p>\r\n\r\n<p>Tous les b&eacute;n&eacute;fices seront revers&eacute;s &agrave; Yalla&nbsp;! Pour les Enfants<br />\r\nEn partenariat avec Souria Houria<br />\r\nA partir de 4 ans<br />\r\nTarifs&nbsp;: 15 &euro; pour les adultes, 10 &euro; pour les enfants et les adh&eacute;rents &agrave; Yalla ! Pour les Enfants</p>',1,'2017-06-29 17:14:19');

/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;

INSERT INTO `content` (`id`, `content`)
VALUES
	(1,'<p>Notre vision : l&rsquo;aide humanitaire de proximit&eacute;</p>\r\n\r\n<p>D&eacute;velopper la solidarit&eacute; internationale en cr&eacute;ant un pont entre les soci&eacute;t&eacute;s civiles en mesure de&nbsp;d&rsquo;aider&nbsp;et celles&nbsp;qui en ont besoin.&nbsp;<br />\r\n<br />\r\n- Gr&acirc;ce &agrave; une structure rationalis&eacute;e, au plus pr&egrave;s des donateurs et des b&eacute;n&eacute;ficiaires, Yalla&nbsp;! permet aux membres de la soci&eacute;t&eacute; civile solidaire de visualiser l&rsquo;impact de leurs dons.&nbsp;<br />\r\n- Afin de garantir l&rsquo;efficacit&eacute; et la p&eacute;rennit&eacute; de ses projets, Yalla&nbsp;! implique les b&eacute;n&eacute;ficiaires de l&rsquo;aide &agrave; toutes les &eacute;tapes du d&eacute;veloppement du projet, de l&rsquo;&eacute;laboration &agrave; l&rsquo;&eacute;valuation.</p>\r\n\r\n<p>Nos valeurs : &nbsp;les droits de l&rsquo;enfant comme valeurs souveraines</p>\r\n\r\n<p>Egalit&eacute; : Tout enfant et tout b&eacute;n&eacute;vole est consid&eacute;r&eacute; par Yalla ! de la m&ecirc;me fa&ccedil;on, quelque soit son sexe, sa nationalit&eacute; ou son appartenance ethnique ou religieuse. Yalla ! promeut l&rsquo;&eacute;galit&eacute; fille-gar&ccedil;on &agrave; travers ses activit&eacute;s et enseignements. La mixit&eacute; au sein des &eacute;quipes de b&eacute;n&eacute;voles est &eacute;galement un imp&eacute;ratif que se donne Yalla !.&nbsp;<br />\r\nTransparence : Yalla ! est responsable, vis-&agrave;-vis de ses donateurs et des b&eacute;n&eacute;ficiaires de l&rsquo;aide, de la mani&egrave;re dont elle met en &oelig;uvre sa mission et g&egrave;re ses comptes.&nbsp;</p>'),
	(2,'<p>Notre vision : l&rsquo;aide humanitaire de proximit&eacute;</p>\r\n\r\n<p>D&eacute;velopper la solidarit&eacute; internationale en cr&eacute;ant un pont entre les soci&eacute;t&eacute;s civiles en mesure de&nbsp;d&rsquo;aider&nbsp;et celles&nbsp;qui en ont besoin.&nbsp;<br />\r\n<br />\r\n- Gr&acirc;ce &agrave; une structure rationalis&eacute;e, au plus pr&egrave;s des donateurs et des b&eacute;n&eacute;ficiaires, Yalla&nbsp;! permet aux membres de la soci&eacute;t&eacute; civile solidaire de visualiser l&rsquo;impact de leurs dons.&nbsp;<br />\r\n- Afin de garantir l&rsquo;efficacit&eacute; et la p&eacute;rennit&eacute; de ses projets, Yalla&nbsp;! implique les b&eacute;n&eacute;ficiaires de l&rsquo;aide &agrave; toutes les &eacute;tapes du d&eacute;veloppement du projet, de l&rsquo;&eacute;laboration &agrave; l&rsquo;&eacute;valuation.</p>\r\n\r\n<p>Nos valeurs : &nbsp;les droits de l&rsquo;enfant comme valeurs souveraines</p>\r\n\r\n<p>Egalit&eacute; : Tout enfant et tout b&eacute;n&eacute;vole est consid&eacute;r&eacute; par Yalla ! de la m&ecirc;me fa&ccedil;on, quelque soit son sexe, sa nationalit&eacute; ou son appartenance ethnique ou religieuse. Yalla ! promeut l&rsquo;&eacute;galit&eacute; fille-gar&ccedil;on &agrave; travers ses activit&eacute;s et enseignements. La mixit&eacute; au sein des &eacute;quipes de b&eacute;n&eacute;voles est &eacute;galement un imp&eacute;ratif que se donne Yalla !.&nbsp;<br />\r\nTransparence : Yalla ! est responsable, vis-&agrave;-vis de ses donateurs et des b&eacute;n&eacute;ficiaires de l&rsquo;aide, de la mani&egrave;re dont elle met en &oelig;uvre sa mission et g&egrave;re ses comptes.&nbsp;</p>'),
	(3,'<p>Yalla&nbsp;! est dirig&eacute;e&nbsp;par un Bureau compos&eacute; de quatre membres, qui rendent compte des actions de Yalla&nbsp;! aux adh&eacute;rents de l&rsquo;association &agrave; travers des rapports d&rsquo;activit&eacute;s concernant chaque projet et lors des Assembl&eacute;es g&eacute;n&eacute;rales tenues une fois par an &agrave; Paris. Les b&eacute;n&eacute;voles de Yalla&nbsp;!&nbsp;&agrave; Paris et sur le terrain ont pr&eacute;alablement adopt&eacute; les valeurs de l&rsquo;association et agissent conform&eacute;ment &agrave; ses principes. Ils rapportent leurs activit&eacute;s de fa&ccedil;on r&eacute;guli&egrave;re au Bureau qui contr&ocirc;le la conformit&eacute; des actions d&eacute;velopp&eacute;es sur le terrain &agrave; la mission et aux valeurs que s&rsquo;est donn&eacute;es Yalla&nbsp;!. La tenue des comptes&nbsp;de l&rsquo;association et celles des structures cr&eacute;&eacute;es sur le terrain est assur&eacute;e par un comptable qui effectue un rapport financier &agrave; la fin de chaque projet et de chaque exercice comptable.</p>');

/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table donate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `donate`;

CREATE TABLE `donate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `donate` WRITE;
/*!40000 ALTER TABLE `donate` DISABLE KEYS */;

INSERT INTO `donate` (`id`, `titre`, `image`, `alt`, `contenu`, `updated_at`)
VALUES
	(1,'sqfsqffs','','sqfsqf','<p><s>fqsfqsfs</s></p>','0000-00-00 00:00:00'),
	(2,'test','cover_217957618373401.jpg','ok','<p><strong>test</strong></p>','2017-06-27 23:21:05'),
	(3,'sfq','cover_256717144497448.jpg','sqfqs','<p>fsqfsqfs</p>','2017-06-27 23:25:04'),
	(4,'sfq','','sqfqsf','<p>fsqfsq</p>','2017-06-27 23:39:49');

/*!40000 ALTER TABLE `donate` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table intro
# ------------------------------------------------------------

DROP TABLE IF EXISTS `intro`;

CREATE TABLE `intro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `intro` WRITE;
/*!40000 ALTER TABLE `intro` DISABLE KEYS */;

INSERT INTO `intro` (`id`, `contenu`)
VALUES
	(6,'<p>La Syrie est tomb&eacute;e en <strong>guerre</strong>&nbsp;depuis 2011.<br />\r\n6 ans plus tard, nous comptons plus de<br />\r\n<strong>200 000</strong>&nbsp;d&eacute;c&egrave;s&nbsp;<br />\r\net&nbsp;<strong>5 millions</strong>&nbsp;de r&eacute;fugi&eacute;s.</p>'),
	(7,'<p>De nos jours,&nbsp;<strong>487 000&nbsp;</strong>enfants&nbsp;<br />\r\nr&eacute;fugi&eacute;s syriens ont d&eacute;m&eacute;nag&eacute;<br />\r\nau&nbsp;<strong>Liban.</strong></p>'),
	(8,'<p>Parmis eux, <strong>282 460</strong>&nbsp;sont<br />\r\nabandonn&eacute;s, donc plus de la moiti&eacute;.</p>'),
	(9,'<p>Dans ces conditions, l&rsquo;éducation&nbsp;<br />\r\nest délaissée au profit des besoins&nbsp;<br />\r\nles plus élémentaires.</p>'),
	(10,'<p>Nous pouvons&nbsp;<strong>aider&nbsp;</strong>les enfants Syriens&nbsp;<br />\r\nen leur offrant <strong>une scolarit&eacute;</strong>&nbsp;conform&eacute;ment<br />\r\n&agrave; leur communaut&eacute; d&#39;accueil.</p>');

/*!40000 ALTER TABLE `intro` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annee` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `annee`, `titre`, `localisation`, `contenu`)
VALUES
	(1,2017,'Ecole Yalla! à Aley','Aley, Liban','<p>- 120 filles et gar&ccedil;ons syriens r&eacute;fugi&eacute;s, &acirc;g&eacute;s de 6 &agrave; 13 ans<br />\r\n- Un directeur des &eacute;tudes syrien r&eacute;fugi&eacute; indemnis&eacute;<br />\r\n- Quatre professeurs syriens r&eacute;fugi&eacute;s indemnis&eacute;s<br />\r\n- Des intervenants b&eacute;n&eacute;voles libanais, syriens et internationaux<br />\r\n- Une cour et un potager<br />\r\nCinq jours par semaine, quatre heures par jour<br />\r\nD&rsquo;octobre 2014 &agrave; juillet 2015<br />\r\n- Le programme &eacute;labor&eacute; par l&rsquo;UNICEF: Arabe, Anglais, Math&eacute;matiques<br />\r\n- Initiation &agrave; la langue fran&ccedil;aise - Initiation &agrave; la g&eacute;ographie, l&rsquo;histoire et les sciences - Activit&eacute;s sportives - Activit&eacute;s socio-&eacute;ducatives: arts-plastiques, chants, atelier th&eacute;&acirc;tre, atelier d&rsquo;expression &eacute;crite, jardinage. - Sensibilisation &agrave; l&rsquo;&eacute;quilibre alimentaire et &agrave; l&rsquo;hygi&egrave;ne dentaire</p>');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table revisions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `revisions`;

CREATE TABLE `revisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Affichage de la table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`)
VALUES
	(1,'SuperAdmin','superadmin','admin@test.com','admin@test.com',1,NULL,'$2y$13$L0MiHdvfcS6xG9r6VWY7XeN2LIpXdYHYT1bhS8eeYFfDOJARsh87i','2017-06-26 17:20:02',NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}'),
	(2,'RealAdmin','realadmin','test@example.com','test@example.com',1,NULL,'$2y$13$EYOrHw.JxuG4QmsnLhYxDu7URS7Z0tJY9WTnEtoGSSD9MAISvqPye','2017-06-29 15:16:21',NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}'),
	(11,'test','test','test@gmail2.com','test@gmail2.com',1,NULL,'test',NULL,NULL,NULL,'a:0:{}');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
