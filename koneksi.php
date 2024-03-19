<?php
//koneksi dengan database
$host = "localhost"; //nama hostnya bisa dari hosting atau localhost
$user = "root"; //username mysql
$pass = ""; //password yang digunakan untuk masuk ke mysql
$db   = "db_users"; //nama database yang akan dibuat

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
