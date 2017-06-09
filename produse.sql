
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;




-- TABEL PRODUSE

CREATE TABLE IF NOT EXISTS `produse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idc` int(11) NOT NULL,
  `nume` text NOT NULL,
  `autor` text NOT NULL,
  `pret` decimal(6,2) NOT NULL,
  `detalii` text NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `stoc` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;




INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(1, 1, 'Povesti de dragoste la prima vedere','Gabriel Liiceanu', 44.00, 'Prima poveste e despre o dragoste tarzie la Paris. A doua despre ingerii de langa noi. In cea de-a treia veti simti un puternic miros de terebentina, iar in a patra, parfum de crini regali. A cincea va aduce in auz un nume care zgarie si unul care mangaie.Prima poveste are miza si pariaza pe nenoroc. A doua cade din fantastic in lumea noastra cea de toate zilele. A treia are realism, ras, nerv. A patra inocenta, umor, visare. A cincea, cu ironie, face poezie si economie.Cand Gabriel Liiceanu, Adriana Bittel, Radu Paraschivescu, Ana Blandiana si Ioana Parvulescu sunt autorii povestilor, nu-i exclus sa faceti un coup de foudre pentru audiobook. Face parte dintre acele lucruri rare care, daca n-ar exista, ar trebui inventate. Bucurati-va in tihna de vocile pe care le auziti.', NULL, 3);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(2, 1,'Scrisori catre tata','Franz Kafka', 47.20, 'Draga tata,
M-ai intrebat odata, acum de curand, de ce sustin ca mi-e frica de tine. Ca de obicei, n-am stiut ce sa-ti raspund, in parte tocmai pentru ca mi-e frica de tine, in parte pentru ca frica asta se intemeiaza pe prea multe elemente ca sa ti le pot enumera macar pe jumatate stand de vorba cu tine. Si daca incerc acum sa-ti raspund in scris, raspunsul meu va fi foarte incomplet, pentru ca si in scris, frica si urmarile ei ma paralizeaza in fata ta si pentru ca proportiile acestei situatii depasesc cu mult puterile memoriei si ratiunii mele.', NULL, 2);



INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(3,1,'Prabusirea Casei Usher','Edgar Allan Poe',37.57,'Inegalabila prin atmosfera castelana decadent-lugubra, prin sugestia subteranului, a claustrarii si damnarii, prin misterul maladiv al celor doi gemeni spectrali, dar si prin eleganta intunecata a limbajului – nu ascultati acest audiobook noaptea ! –, capodopera luiE.A. Poe a inspirat, printre altele, cea mai misterioasa proza din literatura romana. Frumusetea stilistica a inclasabilului text «Veghea lui Roderick Usher» scris de poetul Ion Barbu, fan declarat al lui E.A. Poe, este egalata doar de perfectul ei ermetism. - Marius Chivu',NULL,3);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(4,1,'Micul print','Antonie Se Saint Exupery',40.00,'De cate ori ma uit la cer il aud razand pe Micul Print si stiu ca oaia nu a mancat floarea. - Oana PELLEA',NULL,1);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(5,2,'27 de pasi','Tibi Useriu',39.00,'Lumea ma stie drept alergator de anduranta. Ce nu stie, insa, e povestea vietilor mele paralele. Am fost pe rand: sluga la ciobani pe Bargaie, porcar in armata romana, azilant politic in Berlin, pizzar intr-un restaurant italian, bodyguard la un interlop sarb, martor intr-o galerie de alba-neagra in Gran Canaria si autor de jafuri armate. Am evadat din doua inchisori europene, dar nu si din a treia.',NULL,5);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(6,2,'Astazi este despre astazi','Mirela Retegan',21.99,'Scrise intr-un stil viu, direct si lipsit de false menajamente, reflectiile Mirelei Retegan sunt izvorul unei nepretuite intelepciuni de viata. Fascinante si surprinzatoare, marturisirile sale ne pun in fata o adevarata oglinda, in care sufletele noastre se reflecta perfect.',NULL,3);


INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(7,3,'Jocuri si exercitii cu vrajitoare',' ',2.17,' ',NULL,10);


INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(8,3,'De ce?Prima mea carte de intrebari','Amy Shields',49.90,'De ce? Iata o intrebare pe care parintii o aud des din partea copiilor. Cu De ce? Prima mea carte de intrebari, parintii pot gasi raspunsuri directe, adevarate, fascinante si adecvate varstei copiilor.Peste 300 de ilustratii color sugestive aduc la viata universul copiilor, satisfacandu-le curiozitatea si simtul umorului. In fiecare capitol, intrebarile incurajeaza lectura interactiva si aduc noi cunostinte.',NULL,5);


INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(9,3,'Jocuri si exercitii cu monstrisori',' ',5.34,'Carte de colorat.',NULL,10);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(10,3,'Cartea jocurilor pentru fete',' ',7.95,'Cartea jocurilor pentru fete cuprinde o multitudine de materiale educationale interesante si variate, care furnizeaza experiente de invatare atractive pentru copii. Activitatile includ jocuri prin care elevul isi poate evalua si dezvolta creativitatea, indemanarea, perspicacitatea, performantele lucrului individual si in echipa, spiritul de competitie.
Oricat ai incerca, nu ai putea gasi mai multe idei originale ca in aceasta carte de activitati!
Urmareste aventurile celor sase prietene si pregateste-te pentru ore intregi de distractie!',NULL,4);


INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(11,4,'Alice Adventures in Wonderland','Lewis Carroll', 7.99,'With an Introduction and Notes by Michael Irwin, Professor of English Literature, University of Kent at Canterbury This selection of Carroll works includes Alice Adventures in Wonderland and its sequel, Through the Looking-Glass, both containing the famous illustrations by Sir John Tenniel. No greater books for children have ever been written. The simple language, dreamlike atmosphere, and fantastical characters are as appealing to young readers today as ever they were. Meanwhile, however, these apparently simple stories have become recognised as adult masterpieces, and extraordinary experiments, years ahead of their time, in Modernism and Surrealism. Through wordplay, parody and logical and philosophical puzzles, Carroll engenders a variety of sub-texts, teasing, ominous or melancholy. For all the surface playfulness there is meaning everywhere. The author reveals himself in glimpses.',NULL,4);


INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(12,4,'Anna Karenina','Lev Tolstoi',6.74,'Anna Karenina is one of the most loved and memorable heroines of literature. Her overwhelming charm dominates a novel of unparalleled richness and density.',NULL,6);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(13,4,'Tom Sawyer & Huckleberry Finn','Mark Twain',9.99,'Tom Sawyer, a shrewd and adventurous boy, is as much at home in the respectable world of his Aunt Polly as in the self-reliant and parentless world of his friend Huck Finn. The two enjoy a series of adventures, accidentally witnessing a murder, establishing the innocence of the man wrongly accused, as well as being hunted by Injun Joe, the true murderer, eventually escaping and finding the treasure that Joe had buried. Huckleberry Finn recounts the further adventures of Huck, who runs away from a drunken and brutal father, and meets up with the escaped slave Jim.',NULL,7);


INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(14,4,'The Waves','Virginia Woolf',15.99,' Widely regarded as one of her greatest and most original works, it conveys the rhythms of life in synchrony with the cycle of nature and the passage of time. Six children - Bernard, Susan, Rhoda, Neville, Jinny and Louis - meet in a garden close to the sea, their voices sounding over the constant echo of the waves that roll back and forth from the shore. The subsequent continuity of these six main characters, as they develop from childhood to maturity and follow different passions and ambitions, is interspersed with interludes from the timeless and unifying chorus of nature. In pure stream-of-consciousness style, Woolf presents a cross-section of multiple yet parallel lives, each marked by the disintegrating force of a mutual tragedy. ',NULL,4);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(15,5,'Dictionar roman-englez','Irina Panovf',33.65,' ',NULL,10);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(16,5,'Dictionar roman-german','Ioan Lazarescu',20.53,' ' ,NULL,15);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(17,6,'Povestea fetitei pierdute', 'Elena Ferrante',40.5,' Odata cu acest ultim volum remarcabil al Tetralogiei Napolitane, Elena Ferrante transforma povestea despre Lila si Elena intr-o epopee extraordinara care se intinde de-a lungul a sase decenii si se constituie intr-un portret al unui cartier, al unui oras in tranzitie si al unei tari ce-si croieste drum cu greu prin prima jumatate a secolului XX.',NULL,4);

INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(18,6,'Povestea noului nume','Elena Ferrante',40.50,'Al doilea volum din Tetralogia Napolitana',NULL,6);


INSERT INTO `produse` (`id`, `idc`, `nume`,`autor`, `pret`, `detalii`, `image`, `stoc`) VALUES
(19,6,'Cei care pleaca si cei ce raman','Elena Ferrante',35.50,'Al treilea volum din Tetralogia Napolitana',NULL,6);






/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
