<?php 

include '../koneksi.php';
$nama_kategori = $_POST['nama_kategori'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "INSERT INTO kategori VALUES('', '$nama_kategori', '$keterangan')");

header("location:kategori.php");
