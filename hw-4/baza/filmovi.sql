SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";





CREATE TABLE `korisnici` (
  `korisnikID` int(50) NOT NULL,
  `korisnickoime` varchar(20) NOT NULL,
  `lozinka` varchar(50) NOT NULL,
  `pravoime` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `korisnici` (`korisnikID`, `korisnickoime`, `lozinka`, `pravoime`, `email`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'maric@gmail.com', 'admin'),
(22, 'korisnik1', 'sifra123', 'Djordje Maric', 'maric2@gmail.com', 'user');





ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`korisnikID`);




ALTER TABLE `korisnici`
  MODIFY `korisnikID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;
