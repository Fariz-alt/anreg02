<?php
$host = 'localhost';
$user = 'anreg145_user';
$pass = '173458Al';
$db   = 'anreg145_matkul';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

session_start();
?>
