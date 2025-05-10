<?php

$host = 'localhost';
$db = 'kstylabs';
$user = 'root';
$pass = '';

// Pakai cara yang benar untuk cek error
$connect = mysqli_connect($host, $user, $pass, $db);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
