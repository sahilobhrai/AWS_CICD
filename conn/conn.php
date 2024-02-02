<?php

$servername = "database-1.cfwy08qw0bkl.ap-south-1.rds.amazonaws.com";
$username = "root";
$password = "";
$db = "take_note_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "Failed " . $e->getMessage();
}

?>
