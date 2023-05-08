<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1'); //menampilkan error startup
error_reporting(E_ALL); //menampilkan semua jenis error
$databaseHost = 'localhost'; //nama host
$databaseName = 'web_profil'; //nama database
$databaseUsername = 'root'; //username database
$databasePassword = 'password'; // kosongkan jika tidak ada password

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if (!$mysqli) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
