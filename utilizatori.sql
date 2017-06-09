SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- TABEL UTILIZATORI

CREATE TABLE IF NOT EXISTS `utilizator` (
  `id_utilizator` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nume` char(20) NOT NULL,
  `prenume` char(20) NOT NULL,
  `cnp` char(13) NOT NULL,
  `telefon` char(10) NOT NULL,
  `mail` char(35) NOT NULL,
  `judet` char(20) NOT NULL,
  `oras` char(20) NOT NULL,
  `strada` char(30) NOT NULL,
  `numar` char(4) NOT NULL,
  `cod_postal` char(6) NOT NULL,
  `statut` int(1) NOT NULL,
  PRIMARY KEY (`id_utilizator`),
  UNIQUE KEY `cnp` (`cnp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- DATE TABEL UTILIZATORI


INSERT INTO `utilizator` (`id_utilizator`, `username`, `password`, `nume`, `prenume`, `cnp`, `telefon`, `mail`, `judet`, `oras`, `strada`, `numar`, `cod_postal`, `statut`) VALUES
(1, 'admin', 'parolaadmin', 'Administrator', 'Site', '1890282358433', '0777777777', 'admin@yahoo.com', 'Bucuresti', 'Bucuresti', 'aaa', '290', '060029', 0),
(2, 'ana', 'parola', 'Ana', 'Popescu', '2890282358433', '0777777771', 'ana@yahoo.com', 'Bucuresti', 'Bucuresti', 'aaa', '290', '060029', 0);





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

