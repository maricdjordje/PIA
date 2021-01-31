<?php
include('../kontroler/konekcija.php');
//Validacija
$sql = "SELECT * FROM korisnici"; 
$result = $conn->query($sql);
$list = '';
$total = $result->num_rows;

if($result->num_rows > 0) {
    
     while($row = $result->fetch_assoc()) {
        $list = $list.'
        <div class="row box">
        <div class="col-md-2 box4">
         <img src="../img/korisnik.png" alt="user" class="user-profile">
        </div>
        <div class="col-md-6 box5">
            <p> <span style="color: #9a9a9a;">Ime i prezime: </span> '.$row["pravoime"].'<br>
             <span style="color: #9a9a9a;">Korisničko ime: </span>'.$row["korisnickoime"].'<br>
           <span style="color: #9a9a9a;">Email adresa: </span>'.$row["email"].'<br>
           <p> <span style="color: #9a9a9a;">Lozinka: </span> '.$row["lozinka"].'
            </p>
        </div>
        <div class="col-md-4 box5">
            <a href="../kontroler/izbrisi-korisnika.php?id='.$row["korisnikID"].'" class="btn btn-danger"> Izbriši</a>
            <a href="izmeni-podatke.php?id='.$row["korisnikID"].'" class="btn"> Izmeni</a>
        </div>
    </div>            
        ';
    }
    
} else {
    $list = "Još uvek ne postoji kreirani korisnički nalog!";
}




$conn->close();
?>
