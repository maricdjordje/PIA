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
   
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="../img/logo-imdb.jpg" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!--<div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form">Prijava</a>
                                </div>
                            </div>
                        </div>-->
                        
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Početna</a></li>
                                        
                                        <!--<li><a href="javascript:void(0)">Žanrovi &#8615;</a>
                                            <ul class="submenu">
                                                <li><a href="../zanrovi/akcija.php">Akcija</a></li>
                                                <li><a href="../zanrovi/avantura.php">Avantura</a></li>
                                                <li><a href="../zanrovi/avantura.php">Biografski</a></li>
                                                <li><a href="../zanrovi/drama.php">Drama</a></li>
                                                <li><a href="../zanrovi/horor.php">Horor</a></li>
                                                <li><a href="../zanrovi/istorijski.php">Istorijski</a></li>
                                                <li><a href="../zanrovi/komedija.php">Komedija</a></li>
                                                <li><a href="../zanrovi/krimi.php">Krimi</a></li>
                                                <li><a href="../zanrovi/misterija.php">Misterija</a></li>
                                                <li><a href="../zanrovi/porodicni.php">Porodični</a></li>
                                                <li><a href="../zanrovi/ratni.php">Ratni</a></li>
                                                <li><a href="../zanrovi/romansa.php">Romansa</a></li>
                                                <li><a href="../zanrovi/triler.php">Triler</a></li>
                                            </ul>
                                        </li>-->
                                        
                                                <li><a href="../zanrovi/akcija.php">Akcija</a></li>
                                                <li><a href="../zanrovi/avantura.php">Avantura</a></li>
                                                <li><a href="../zanrovi/avantura.php">Biografski</a></li>
                                                <li><a href="../zanrovi/drama.php">Drama</a></li>
                                                <li><a href="../zanrovi/horor.php">Horor</a></li>
                                                <li><a href="../zanrovi/istorijski.php">Istorijski</a></li>
                                                <li><a href="../zanrovi/komedija.php">Komedija</a></li>
                                                <li><a href="../zanrovi/krimi.php">Krimi</a></li>
                                                <li><a href="../zanrovi/misterija.php">Misterija</a></li>
                                                <li><a href="../zanrovi/porodicni.php">Porodični</a></li>
                                                <li><a href="../zanrovi/ratni.php">Ratni</a></li>
                                                <li><a href="../zanrovi/romansa.php">Romansa</a></li>
                                                <li><a href="../zanrovi/triler.php">Triler</a></li>
                                        
                                        
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="../kontroler/logout.php">Odjavi se</a>
                                    <a class="popup-with-form" href="korisnici.php">Lista korisnika</a>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
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
                            
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Miloš Stevanović | Programiranje internet aplikacija </p>
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
