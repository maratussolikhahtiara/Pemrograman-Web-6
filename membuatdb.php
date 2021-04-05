<?php
$servername = "localhost";
$username = "root";
$password = "";

//membuat connectior
$conn = mysqli_connect($servername, $username, $password);
//cek koneksi
if (!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}

//membuat database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
		echo "Database Created Succes";
}
else {
	echo "Error Creating Database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>