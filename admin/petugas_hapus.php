<?php
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['foto'];
unlink("../assets/img/petugas/$foto");
mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id'");
header("location:petugas.php");
