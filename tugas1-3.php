<?php
$sql = "INSERT INTO buku_tamu (nama, email, isi) VALUES ('Queen','queenandira@gmail.com','Sistem Informasi Angkatan 2018')";

if (mysqli_query($conn, $sql)) {
	echo "<br>";
} else {
	echo "Error : ". $sql . "<br>" . mysqli_error($conn);
}
?>