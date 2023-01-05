<?php
$server   = "localhost";
$user = "root";
$password = "";
$namadb="mahasiswa";
// Create connection
$db = mysqli_connect($server, $user, $password, $namadb);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>