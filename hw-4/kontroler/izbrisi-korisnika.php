<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../index.php#popup1');
}

include('connectdb.php');
$id=$_REQUEST['id'];

$del = "DELETE  FROM korisnici WHERE korisnikID= '$id'"; 
$result = $conn -> query($del);
header("Location: ../administrator/users.php"); 
$conn->close();
?>
