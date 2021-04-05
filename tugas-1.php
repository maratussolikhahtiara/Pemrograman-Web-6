<html>
<head>
	<title>Buku Tamu</title>
	<style type="text/css">
		h1 {font-family: calibri; text-align: center; background-color: #CCFFCC;}
		body {background-color: #CCEEEE; background-repeat: no-repeat; background-size: cover;}
	</style>
</head>
<body>
	<h1>BUKU TAMU</h1>
<?php
include 'tugas1-2.php';
include 'tugas1-3.php';

$sql = "SELECT nama, email, isi FROM buku_tamu";
$result = mysqli_query($conn, $sql);

$no = 1;
if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo $no++.". Nama : ".$row["nama"]." || Email : ".$row["email"]." || Isi : ".$row["isi"]."<br>";
	}
} else {
	echo "0 result";
}

mysqli_close($conn);
?>
</body>
</html>