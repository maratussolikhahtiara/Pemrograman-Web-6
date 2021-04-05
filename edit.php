<?php
// Deklarasi nama server, username, password, dan database
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

$sql= "SELECT * FROM buku_tamu WHERE id=$_GET[id]";
$result= mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pegawai</title>
</head>
<body>

<h1>Edit Data Mahasiswa</h1>
<form method="POST" action="" enctype="multipart/form-data">
	<input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">
<table cellpadding="5">
	<tr>
		<td><label for=nama> Nama : </label></td>
		<td>
		<input type="text" name="nama" id="nama" required value="<?php echo $row['nama'];?>"></td>
	</tr>
	<tr>
		<td><label for=EMAIL> Email : </label></td>
		<td>
		<input type="text" name="email" id="email" required value="<?php echo $row['email'];?>"></td>
	</tr>
		<tr>
			<td><label for=divisi> Isi : </label></td>
			<td>
		<input type="text" name="isi" id="divisi" required  value="<?php echo $row['divisi'];?>"></td>
		</tr>
		<tr>
			
</table>
<br>
<button type="submit" name="submit">Edit</button>
</form>

</body>
</html>


<?php
// Deklarasi nama server, username, password, dan database
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

if(isset($_POST['submit'])){

	// Memperbarui data
	$sql= "UPDATE buku_tamu SET nama='$_POST[nama]', email='$_POST[email]', Isi='$_POST[isi]' WHERE id='$_GET[id]'";
	if(mysqli_query($conn, $sql)){
		echo "Data berhasil diubah";
		echo "<meta HTTP-EQUIV='REFRESH' content='1; url=tugas3.php'>";
	} else{
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}

	mysqli_close($conn);	
}

?>