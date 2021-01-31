<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../index.php');
}
else{ 
    if ($_SESSION['status'] != "admin") {
        header('location: ../korisnik/index.php');
    }
}


include('lista-korisnika.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korisnici</title>

    <link rel="stylesheet" href="../css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="../css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/moviesrequest.css">

    <link rel="stylesheet" href="../css/popup.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top ">
        
        <ul class="navbar-nav mr-auto ">
        </ul>
       
        <ul class="navbar-nav ">
            <li class="nav-item ">
                <a class="nav-link" href="#">Početna</a>
            </li>
            <!--<li class="nav-item ">
                <a class="nav-link active" href="#">Upravljajte korisnicima</a>
            </li>-->
            
            <li class="nav-item dropdown dropleft">
                <!--<a class="nav-link" href="#" data-toggle="dropdown">
                    <img src="../img/korisnik.png" style="width:30px; border-radius:50%;" alt="logo ">
                </a>-->
                <div class="dropdown-menu">
                    <!--<a class="dropdown-item disabled" style="color:silver; text-transform:lowercase;" href="#"></a>--> <?php /*echo $_SESSION['username'] */?>
                    
                    
                    <a class="dropdown-item" style="color:#fff;" href="../kontroler/logout.php">Odjavi se</a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container req-box" >
        <form action="" method="post">
            <div class="row">
                <div class="col-md-10 box1">
                    <h3 style="margin-bottom:50px;"><span style="font-weight:bold; color: #6AC045">Lista korisnika </span>(<?php echo $total ?>)</h3>
                    <?php 
                    echo $list;
                    ?>
                    <a href="#popup2" class="btn"> Dodajte novog korisnika</a>
                </div>
            </div>   
        </form>
    </div>

    <div id="popup2" class="popup-overlay">
        <div class="log-popup">
            <h2>Dodaj novog korisnika</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../kontroler/registracija.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Ime korisnika" name="fullname" class="log-input" required>
                    <br>
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" placeholder="Email korisnika" name="email" class="log-input" required>
                    <br>
                    <i class="fa fa-link icon"></i>
                    <input type="text" placeholder="Korisničko ime" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock icon"></i>
                    <input type="password" placeholder="Lozinka" name="password" class="log-input" required>
                    <br>
                    <input type="submit" value="Kreiraj korisnika" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>
    <div id="success" class="popup-overlay">
        <div class="log-popup">
            <h2>Uspešno izvršenje radnje</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
               <p style="color:black">Korisnik je uspešno dodat!</p> 
            </div>
        </div>
    </div>
    <div id="updatesuccess" class="popup-overlay">
        <div class="log-popup">
            <h2>Uspešno izvršenje radnje</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
               <p style="color:black">Podaci korisnika uspešno update-ovani</p> 
            </div>
        </div>
    </div>
    <div id="error" class="popup-overlay">
        <div class="log-popup">
            <h2>Greška</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
               <p style="color:black">Uneto korisničko ime ili email adresa već postoje!</p> 
            </div>
        </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>
