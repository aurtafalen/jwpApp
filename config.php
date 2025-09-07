<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db   = "crud_app";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi){
    die("koneksi gagal: " . mysqli_connect_error());
}
 //base url
    define("BASE_URL", "http://localhost/jwpapp/");

?>