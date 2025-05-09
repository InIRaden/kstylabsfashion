<?php

$host   = 'localhost';
$db     = 'kstylabs';
$user   = 'root';
$pass   = '';


$connect    = mysqli_connect($host, $user, $pass, $db);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} else {
    echo "Connected successfully";
}