<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "covid_2020-07-17";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>