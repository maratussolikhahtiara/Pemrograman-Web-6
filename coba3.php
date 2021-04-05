<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
	die("Connectionn Failed: ". mysqli_connect_error());
}
$sql = "INSERT INTO liga (kode, negara, champion) VALUES ('Eng','English','3')";

if (mysqli_query($conn, $sql)) {
	echo "New Record Created Succes";
} else {
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>