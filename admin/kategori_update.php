<?php  

include '../koneksi.php';
$id = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "UPDATE kategori SET kategori='$nama_kategori', keterangan='$keterangan' WHERE id_kategori = '$id'");
header("location:kategori.php");
