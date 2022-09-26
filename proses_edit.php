<?php 
include("config.php"); 
// cek apakah tombol simpan sudah diklik atau blum? 
if(isset($_POST['submit'])){ 
// ambil data dari formulir 
$nim = $_POST['nim'];  
$nama_lengkap = $_POST['nama_lengkap']; 
$jurusan = $_POST['jurusan']; 
// buat query update 
$sql = "UPDATE mahasiswa SET  nim='$nim', nama_lengkap='$nama_lengkap', jurusan='$jurusan' WHERE nim=$nim"; 
$query = mysqli_query($koneksi, $sql); 
// apakah query update berhasil? 
if( $query ) { 
// kalau berhasil alihkan ke halaman list-siswa.php 
header('Location: index.php'); 
} else { 
// kalau gagal tampilkan pesan 
die("Gagal menyimpan perubahan..."); 
} 
} else { 
die("Akses dilarang...");
 }
 ?>