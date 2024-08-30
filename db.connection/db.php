<?php
$host = 'localhost';
// Determine if the server is localhost
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $user = "root";
    $pass = "";
    $db = "srinivasa";
} else {
    $user = "u823984162_srinivasa";
    $pass = "Srinivasadental2024";
    $db = "u823984162_srinivasa";
}



try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
