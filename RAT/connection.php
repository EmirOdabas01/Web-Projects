<?php   
$servername = "localhost";
$username = "root";
$password = "";
$database = "rat";
$link = mysqli_connect($servername, $username, $password,$database);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    ?>



