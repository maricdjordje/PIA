<?php
session_start();
include('connectdb.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    //validacija
    $q = "SELECT * FROM korisnici WHERE korisnickoime = '$username' && Pass = '$password'";

    $res = $conn->query($q);
    $num = mysqli_num_rows($res);  

    if ($num == 1) {

       $_SESSION['username'] = strtolower($username);
        
       if ($_SESSION['username']=="admin") {
            header('location: ../administrator/index.php');
            $_SESSION['status'] = 'admin';
       } else {
            header('location: ../korisnik/index.php');
            $_SESSION['status'] = 'user';
       }
    } else {
        header('location: ../index.php#error1');
    }
    $conn->close();
?>
