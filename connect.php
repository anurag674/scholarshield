<?php
$servername = "localhost";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=scholarshield", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $f)
    {
    echo "Connection failed: " . $f->getMessage();
    }
?>