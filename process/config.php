<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "class";


if ($conn = new mysqli($servername, $username, $password, $dbname))
    echo '<script>console.log("Database Connected!");</script>';
else 
    echo '<script>console.log("Database Not Connected!");</script>';


?>