SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




/*CREATE TABLE `request` (
  `id` int(20) NOT NULL,
  `RequestUser` varchar(50) NOT NULL,
  `RequestTitle` varchar(100) NOT NULL,
  `RequestMessage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `request` (`id`, `RequestUser`, `RequestTitle`, `RequestMessage`) VALUES
(2, 'codersgenius', 'Movie Name', 'I want this movie');*/


CREATE TABLE `korisnici` (
  `korisnikID` int(50) NOT NULL,
  `korisnickoime` varchar(20) NOT NULL,
  `lozinka` varchar(50) NOT NULL,
  `pravoime` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `korisnici` (`korisnikID`, `korisnickoime`, `lozinka`, `pravoime`, `email`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'milosgajac@gmail.com', 'admin'),
(3, 'korisnik1', 'sifra123', 'Milos Gajac', 'milosgajac2@gmail.com', 'user');


/*ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);*/


ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`korisnikID`);


/*ALTER TABLE `request`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;*/

ALTER TABLE `korisnici`
  MODIFY `korisnikID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;
