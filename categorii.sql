SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------------
-- TABELUL CATEGORII

CREATE TABLE IF NOT EXISTS `categorii` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `cat` text NOT NULL,
  `descriere` varchar(100) NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;



-- DATE TABEL CATEGORII

INSERT INTO `categorii` (`idc`, `cat`, `descriere`) VALUES
(1, 'Audiobooks', 'Carti audio.'),
(2, 'Biografii si Memorii', 'Carti biografice.'),
(3, 'Carti pentru copii', 'Carti de povesti si de colorat.'),
(4, 'Carti in limba engleza', 'Carti in limba engleza.'),
(5, 'Dictionare', 'Dictionare.'),
(6, 'Fictiune', 'Carti de fictiune si Young Adult.'),
;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

