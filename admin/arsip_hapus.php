<?php
include '../koneksi.php';
$id = $_GET['id'];

$lama = mysqli_query($koneksi, "SELECT * FROM arsip WHERE id_arsip='$id'");
$l = mysqli_fetch_assoc($lama);
$nama_file_lama = $l['file_arsip'];
unlink("../assets/arsip/$nama_file_lama");

mysqli_query($koneksi, "DELETE FROM arsip WHERE id_arsip='$id'");
header("location:arsip.php");
