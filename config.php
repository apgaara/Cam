<?php
// Koneksi ke database
$host = "localhost"; // Ganti sesuai dengan host Anda
$username = "gara"; // Ganti sesuai dengan username database Anda
$password = "Anjayani12@"; // Ganti sesuai dengan password database Anda
$database = "akuDB"; // Ganti sesuai dengan nama database Anda

$db = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($db->connect_error) {
	echo "database rusak";
	die("error!");
}
?>
