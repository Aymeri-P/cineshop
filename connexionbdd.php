<?php
$hostname = "localhost";
$user = "root";
$pwd = "";
$database = "cineshop";


try {
    $pdo = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $user, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExecption $error){
    echo $error;
}




 
?>