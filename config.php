<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "student"; 

// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>


