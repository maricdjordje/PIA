<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: index.php');
}
elseif (isset($_SESSION['username']) == "admin") {
    header('location: administrator/index.php');
}
else{ 
    header('location: korisnik/index.php');
}


?>
