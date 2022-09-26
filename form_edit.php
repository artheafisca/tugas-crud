<?php
include("config.php");

if( !isset($_GET['id'])){
    header('Location: index.php');
}

$nim = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
$query = mysqli_query($koneksi, $sql);
$mhs = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan....");
}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Formulir Edit Mahasiswa</title> 
</head> 
<body> 
<header> 
	<h3>Formulir Edit mahasiswa</h3> 
</header> 
<form action="proses_edit.php" method="POST"> 
	<fieldset> 
	
<p> 
	<label for="nim">NIM: </label>  
	<input type="text" name="nim" placeholder="nim" value="<?php echo $mhs['nim'] ?>" /> 
</p> 

<p>
	<label for="nama">Nama: </label> 
	<input type="text" name="nama_lengkap" placeholder="nama_lengkap" value="<?php echo $mhs['nama_lengkap'] ?>" /> 
</p> 
<p>
	<label for="nama">Tempat Lahir: </label> 
	<input type="text" name="tempat_lahir" placeholder="tempat_lahir" value="<?php echo $mhs['tempat_lahir'] ?>" /> 
</p> 
<p>
	<label for="nama">Tanggal Lahir: </label> 
	<input type="date" name="tanggal_lahir" placeholder="tanggal_lahir" value="<?php echo $mhs['tanggal_lahir'] ?>" /> 
</p>
<p>
	<label for="nama">Email: </label> 
	<input type="text" name="email" placeholder="email" value="<?php echo $mhs['email'] ?>" /> 
</p>  
<p> 
	<label for="jurusan">Jurusan: </label> 
	<input type="text" name="jurusan" placeholder="jurusan" value="<?php echo $mhs['jurusan'] ?>" /> 
</p> 
<p> 
	<input type="submit" value="submit" name="submit" /> 
</p> 
</fieldset> 
</form> 
</body>