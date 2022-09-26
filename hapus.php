<?php
include("config.php");

if(isset($_GET['id'])){
    $nim = $_GET['id'];

    $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('Location: index.php');
    }
    else{
        die("gagal menghapus....");
    }
} else{
    die("akses dilarang...");
}
?>
