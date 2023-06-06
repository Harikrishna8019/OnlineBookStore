<?php
$server="localhost";
$username="root";
$password="";
$dbn="proproduct";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "<script>window.location.assign('../login.html');</script>";
    
    
}
?>
