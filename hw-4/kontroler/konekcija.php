<?php
$conn = new mysqli('localhost','root','','korisnici');

if ($conn->connect_error) {
   die("Greška: Došlo je do neke greške!".$conn->connect_error);
} else {
    echo "Uspešno povezivanje sa bazom!";
}
?>
