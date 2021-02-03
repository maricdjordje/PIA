<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['status'] == "admin") {
        header('location: ../administrator/index.php');
    } else {
        header('location: ../korisnik/index.php');
    }
}
?>
<!doctype html>
<html lang="sr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IMDb</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<body>
   
    <style>
    
        .log-box {
    width: 40%;
    margin: 0 auto;
    background: rgba(255,255,255,0.2);
    padding: 35px;
    border: 2px solid #fff;
    border-radius: 20px/50px;
    background-clip: padding-box;
    text-align: center;
    }
    
    .open-button {
    font-size: 1em;
    padding: 10px;
    color: #fff;
    border: 2px solid #6AC045;
    border-radius: 20px/50px;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease-out;
    }
    
    .button:hover {
    background: #6AC045;
    }
    
    .popup-overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
    }
    .popup-overlay:target {
    visibility: visible;
    opacity: 1;
    }
    
    .log-popup {
    margin: 100px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 1s ease-in-out;
    text-align: center;
    }
    
    .log-popup h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
    text-transform: uppercase;
    }
    .log-popup .close-window {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
    }
    .log-popup .close-window:hover {
    color: #6AC045 !important;
    }
    .log-popup .log-content {
    max-height: 30%;
    overflow: auto;
    }
    
    @media screen and (max-width: 700px){
    .log-box{
        width: 70%;
    }
    .log-popup{
        width: 70%;
    }
    }
    
    
    .log-input{
    font-size: 20px;
    padding: 5px 10px;
    margin-top: 15px;
    width: 60%;
    border: 1px solid #6AC045;
    outline: 0;
    border-radius: 50px;
    } 
    
    .btn-log {
        font-size: 18px;
        background: #6AC045;
        padding: 10px;
        border: 0;
        outline: 0;
        display: inline;
        color: #fff;
        width: 60%;
        border-radius: 50px;
        margin-top: 13px;
    }

    .icon {
        padding: 15px 18px;
        background: #6AC045;
        color: white;
        text-align: center;
        border-radius: 50%;
    }

    
    </style>
    
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="../img/logo-imdb.jpg" alt="logo">
                                </a>
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Početna</a></li>
                                        
                                        <li><a href="javascript:void(0)">Akcija</a></li>
                                                <li><a href="javascript:void(0)">Avantura</a></li>
                                                <li><a href="javascript:void(0)">Biografski</a></li>
                                                <li><a href="javascript:void(0)">Drama</a></li>
                                                <li><a href="javascript:void(0)">Horor</a></li>
                                                <li><a href="javascript:void(0)">Istorijski</a></li>
                                                <li><a href="javascript:void(0)">Komedija</a></li>
                                                <li><a href="javascript:void(0)">Krimi</a></li>
                                                <li><a href="javascript:void(0)">Misterija</a></li>
                                                <li><a href="javascript:void(0)">Porodični</a></li>
                                                <li><a href="javascript:void(0)">Ratni</a></li>
                                                <li><a href="javascript:void(0)">Romansa</a></li>
                                                <li><a href="javascript:void(0)">Triler</a></li>
                                        
                                        
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                
                                <div class="book_btn d-lg-block">
                                    <a href="#popup1">Prijava</a>
                                </div>
                                <div class="book_btn d-none d-lg-block">
                                    <a href="#popup2">Registracija</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- PRIJAVA POCETAK -->
                        
                        <div id="popup1" class="popup-overlay">
        <div class="log-popup">
            <h2>Prijava</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../kontroler/login.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Korisničko ime" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock icon"></i>
                    <input type="password" placeholder="Lozinka" name="password" class="log-input" required>
                    <br>
                    <input type="submit" value="Prijavi se" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>
                        
                        
                        
                        <!-- PRIJAVA KRAJ -->
                        
                        
                        
                        
                        <!-- REGISTRACIJA POCETAK -->
                        
                       <div id="popup2" class="popup-overlay">
        <div class="log-popup">
            <h2>Registracija</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../kontroler/registracija.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Ime i prezime" name="fullname" class="log-input" required>
                    <br>
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" placeholder="Email adresa" name="email" class="log-input" required>
                    <br>
                    <i class="fa fa-link icon"></i>
                    <input type="text" placeholder="Korisničko ime" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock icon"></i>
                    <input type="password" placeholder="Lozinka" name="password" class="log-input" required>
                    <br>
                    
                    <input type="submit" value="Registruj se" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>
                        
                        
                        <!-- REGISTRACIJA KRAJ -->
                        
                        
                        
                        
                        
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
   
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    
    <br><br><br>
    
    
    
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        
                        <h3>F I L M O V I</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/1917.jpg" alt="1917">
                        </div>
                        <h3>1917</h3>
                        <ul>
                            <li>Žanr: drama, triler, ratni</li>
                            <li>Režija: Sem Mendez</li>
                            <li>Scenario: Sem Mendez</li>
                        </ul>
                        <a href="../filmovi/1917.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/american-gangster.jpg" alt="american-gangster">
                        </div>
                        <h3>Američki gangster</h3>
                        <ul>
                            <li>Žanr: drama, biografski, krimi</li>
                            <li>Režija: Ridli Skot</li>
                            <li>Scenario: Mark Jakobson</li>
                        </ul>
                        <a href="../filmovi/american-gangster.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/american-psycho.jpg" alt="american-psycho">
                        </div>
                        <h3>Američki psiho</h3>
                        <ul>
                            <li>Žanr: drama, komedija, krimi</li>
                            <li>Režija: Meri Heron</li>
                            <li>Scenario: Meri Heron</li>
                        </ul>
                        <a href="../filmovi/american-psycho.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/dirty-grandpa.jpg" alt="dirty-grandpa">
                        </div>
                        <h3>Prljavi deda</h3>
                        <ul>
                            <li>Žanr: komedija</li>
                            <li>Režija: Den Mejzer</li>
                            <li>Scenario: Džon Filips</li>
                        </ul>
                        <a href="../filmovi/dirty-grandpa.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/fast-and-furios.jpg" alt="fast-and-furios.jpg">
                        </div>
                        <h3>Paklene ulice</h3>
                        <ul>
                            <li>Žanr: akcija, krimi, triler</li>
                            <li>Režija: Rob Koen</li>
                            <li>Scenario: Geri Skot Tompson</li>
                        </ul>
                        <a href="../filmovi/fast-and-furious.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/forest-gump.jpg" alt="forest-gump">
                        </div>
                        <h3>Forest Gamp</h3>
                        <ul>
                            <li>Žanr: drama, romansa</li>
                            <li>Režija: Robert Zemekis</li>
                            <li>Scenario: Erik Rot</li>
                        </ul>
                        <a href="../filmovi/forrest-gump.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/green-mile.jpg" alt="green-mile">
                        </div>
                        <h3>Zelena milja</h3>
                        <ul>
                            <li>Žanr: drama, krimi, fantastika</li>
                            <li>Režija: Frenk Darabont</li>
                            <li>Scenario: Frenk Darabont</li>
                        </ul>
                        <a href="../filmovi/green-mile.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/home-alone.jpg" alt="home-alone">
                        </div>
                        <h3>Sam u kući</h3>
                        <ul>
                            <li>Žanr: komedija, porodični</li>
                            <li>Režija: Kris Kolumbus</li>
                            <li>Scenario: Džon Hjudžs</li>
                        </ul>
                        <a href="../filmovi/home-alone.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/hotel-mumbai.jpg" alt="hotel-mumbai">
                        </div>
                        <h3>Hotel Mumbaj</h3>
                        <ul>
                            <li>Žanr: akcija, drama, istorijski</li>
                            <li>Režija: Entoni Maras</li>
                            <li>Scenario: Džon Koli</li>
                        </ul>
                        <a href="../filmovi/hotel-mumbai.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/inception.jpg" alt="inception">
                        </div>
                        <h3>Početak</h3>
                        <ul>
                            <li>Žanr: akcija, avantura, sci-fi</li>
                            <li>Režija: Kristofer Nolan</li>
                            <li>Scenario: Kristofer Nolan</li>
                        </ul>
                        <a href="../filmovi/inception.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/john-wick-2.jpg" alt="john-wick-2">
                        </div>
                        <h3>Džon Vik 2</h3>
                        <ul>
                            <li>Žanr: akcija, krimi, triler</li>
                            <li>Režija: Čed Stelski</li>
                            <li>Scenario: Derek Kolstad</li>
                        </ul>
                        <a href="../filmovi/john-wick-2.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/operation-valkyrie.jpg" alt="operation-valkyrie">
                        </div>
                        <h3>Operacija Valkira</h3>
                        <ul>
                            <li>Žanr: drama, istorija, triler</li>
                            <li>Režija: Brajan Singer</li>
                            <li>Scenario: Kristofer MekKveri</li>
                        </ul>
                        <a href="../filmovi/operation-valkyrie.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/shutter-island.jpg" alt="shutter-island">
                        </div>
                        <h3>Zatvoreno ostrvo</h3>
                        <ul>
                            <li>Žanr: misterija, triler</li>
                            <li>Režija: Martin Skorseze</li>
                            <li>Scenario: Laeta Kalogridis</li>
                        </ul>
                        <a href="../filmovi/shutter-island.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/smiths.jpg" alt="smiths">
                        </div>
                        <h3>Gospodin i gospođa Smit</h3>
                        <ul>
                            <li>Žanr: akcija, komedija, krimi</li>
                            <li>Režija: Dag Limen</li>
                            <li>Scenario: Simon Kinberg</li>
                        </ul>
                        <a href="../filmovi/mr-and-mrs-smith.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/steve-jobs.png" alt="steve-jobs">
                        </div>
                        <h3>Stiv Džobs</h3>
                        <ul>
                            <li>Žanr: biografski, drama</li>
                            <li>Režija: Deni Bojl</li>
                            <li>Scenario: Eron Sorkin</li>
                        </ul>
                        <a href="../filmovi/steve-jobs.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/the-gentlemen.jpg" alt="the-gentlemen">
                        </div>
                        <h3>Gospoda</h3>
                        <ul>
                            <li>Žanr: akcija, komedija, krimi</li>
                            <li>Režija: Gaj Riči</li>
                            <li>Scenario: Gaj Riči</li>
                        </ul>
                        <a href="../filmovi/the-gentlemen.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/the-loft.jpg" alt="the-loft">
                        </div>
                        <h3>Stan u potkrovlju</h3>
                        <ul>
                            <li>Žanr: misterija, romansa, triler</li>
                            <li>Režija: Erik Van Loj</li>
                            <li>Scenario: Vesli Strik</li>
                        </ul>
                        <a href="../filmovi/the-loft.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/titanic.jpg" alt="titanic">
                        </div>
                        <h3>Titanik</h3>
                        <ul>
                            <li>Žanr: drama, romansa</li>
                            <li>Režija: Džejms Kameron</li>
                            <li>Scenario: Džejms Kameron</li>
                        </ul>
                        <a href="../filmovi/titanic.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/tres-metros.jpg" alt="tres-metros">
                        </div>
                        <h3>Tri metra iznad neba</h3>
                        <ul>
                            <li>Žanr: drama, romansa, akcija</li>
                            <li>Režija: Fernando Molina</li>
                            <li>Scenario: Ramon Salazar</li>
                        </ul>
                        <a href="../filmovi/tres-metros-sobre-el-cielo.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-3">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="../img/filmovi/ww-z.jpg" alt="ww-z">
                        </div>
                        <h3>Svetski rat Z</h3>
                        <ul>
                            <li>Žanr: akcija, avantura, horor</li>
                            <li>Režija: Mark Foster</li>
                            <li>Scenario: Dru Godard</li>
                        </ul>
                        <a href="../filmovi/world-war-z.php" class="book_now">Više o filmu</a>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    
    
    
    <footer class="footer">
        
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                            
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Đorđe Marić | Programiranje internet aplikacija </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>

    
        
    
    <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/ajax-form.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/scrollIt.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/gijgo.min.js"></script>

    <script src="../js/contact.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/mail-script.js"></script>

    <script src="../js/main.js"></script>
    
    



</body>

</html>
