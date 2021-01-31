<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../index.php');
}
else{ 
    if ($_SESSION['status'] == "admin") {
        header('location: ../administrator/index.php');
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
                                
                                    <img src="../img/logo-imdb.jpg" alt="logo">
                                
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
                                        <li><a href="../korisnik/index.php">Početna</a></li>
                                        
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
    <div class="bradcam_area breadcam_bg">
        <h3>Titanik</h3>
    </div>
    
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="../img/o-filmovima/titanic.jpg" alt="film">
                                
                            </div>

                            <div class="blog_details">
                                
                                    <h2>Radnja filma</h2>
                                
                                <p>Radnja filma započinje 1996. godine kada lovac na blago, Brok Lovet, zajedno sa svojim timom zaranja duboko u Atlantski okean prema olupini Titanika u potrazi za vrednom dijamantskom ogrlicom. Nakon što u sefu pronađu crtež mlade devojke koja nosi ogrlicu i isti objave putem medija, ubrzo im se javlja stara gospođa koja tvrdi da je upravo ona devojka sa crteža. Pomoću naracije, stara Rouz vraća gledaoce u 1912. godinu, u luku Sauthempton odakle Titanik kreće na svoje prvo putovanje. Osim Rouz, nesrećne devojke zatočene u okove društvenog sloja u kome živi, upoznajemo njenu majku Rut i verenika Kaledona Hoklija, sina bogatog pitsburškog tajkuna koji će venčanjem sa Rouz otplatiti sve dugove u koje se uvukao njen mrtvi otac. U isto vreme, mladi nadobudni Džek Doson osvaja kartu za Titanik na pokeru i u poslednji čas se sa svojim prijateljem Fabrizijem ukrcava na brod.

Džek i Rouz susreću se u trenutku kad Rouz pokušava da se ubije, želeći da se baci sa krme broda. Tokom putovanja koje će trajati 4 dana, njih dvoje razvijaju prijateljstvo koje će prerasti u pravu ljubavnu romansu.</p>
                               
                            </div>
                        </article>

                        

                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Podaci o filmu</h4>
                            <ul class="list cat-list">
                                <li>
                                    
                                        <p>Žanr: </p>
                                        <p>Drama, romansa</p>
                                    
                                </li>
                                <li>
                                    
                                        <p>Godina izlaska: </p>
                                        <p>1997.</p>
                                   
                                </li>
                                
                                <li>
                                    
                                        <p>Trajanje: </p>
                                        <p>194 min.</p>
                                   
                                </li>
                                <li>
                                    
                                        <p>Režija: </p>
                                        <p>Džejms Kameron</p>
                                   
                                </li>
                                <li>
                                    
                                        <p>Scenario: </p>
                                        <p>Džejms Kameron</p>
                                    
                                </li>
                                <li>
                                    
                                        <p>Glumci: </p>
                                        <p>Leonardo DiKaprio, Kejt Vinslet, Bili Zejn</p>
                                   
                                </li>
                                
                            </ul>
                        </aside>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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