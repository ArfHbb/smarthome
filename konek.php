<?php
/* Database connection settings */
$host = 'localhost'; // ip address atau alamat website
$user = 'root'; // username phpmyadmin nya
$pass = ''; // password phpmyadmin nya
$db = 'raspberry'; // nama database nya
$conn = mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
	die("Koneksi gagal:".mysqli_connect_error());
}
