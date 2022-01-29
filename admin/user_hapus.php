<?php
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['foto'];
unlink("../assets/img/user/$foto");
mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");
header("location:user.php");
