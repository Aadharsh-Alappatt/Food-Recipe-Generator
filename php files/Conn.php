<?php

$host = "localhost";
$unm = "root";
$pass = "";
$dbnm = "id2213687_receipe_db";
$conn = new MySQLi($host,$unm,$pass,$dbnm);
if (!$conn) {
    // print("Connection Failer");
    die("Connection failed: " . mysqli_connect_error());
 }
?>
