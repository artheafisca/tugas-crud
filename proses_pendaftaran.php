<?php 
include("config.php");

// cek apakah tombol daftr sudah di klik atau belum
if(isset($_POST['submit'])){
    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    // buat query
    $sql = "INSERT INTO mahasiswa(nim,nama_lengkap,tempat_lahir,tanggal_lahir,email,jurusan,no_hp,alamat) 
    value ('$nim','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$email','$jurusan','$no_hp','$alamat') ";
    $query = mysqli_query($koneksi,$sql);

    // apakah query berhasil?
    if($query) {
        // jika berhasil alihkan ke halaman index.php dengan status SUKSES
        header('Location: index.php?status=sukses');
    } else {
        // jika gagal,alihkan ke halaman dengan status GAGAL
        header('Location: index.php?status=gagal');
    }

 
}   else {
    die("Akses Dilarang...");
}
?>