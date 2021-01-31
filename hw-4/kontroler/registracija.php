<?php

   session_start();

   include('konekcija.php');

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    //Validacija
    $q = "SELECT * FROM korisnici WHERE korisnickoime = '$username' OR email = '$email'";

    $res = $conn->query($q);
    $num = mysqli_num_rows($res);  

    if ($num >= 1) {
        if ($_SESSION['username']=="admin") {
            header('location: ../korisnik/index.php#error');
        } else {
            header('location: ../index.php#error');
        }
    } else {
        $sql = "INSERT INTO korisnici (korisnickoime,lozinka,pravoime,email,status) values('$username','$password','$fullname','$email','user')";

        $result = $conn -> query($sql);

        if ($_SESSION['username']=="admin") {
            header('location: ../administrator/users.php#success');
        } else {
            header('location: ../index.php#success');
        }     
    }
    $conn->close();
?>
