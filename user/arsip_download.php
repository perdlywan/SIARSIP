<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s');
$user = $_SESSION['id'];
$arsip = $_GET['id'];

mysqli_query($koneksi, "INSERT INTO riwayat VALUES ('','$waktu','$user','$arsip')") or die(mysqli_error($koneksi));

$data = mysqli_query($koneksi, "SELECT * FROM arsip WHERE id_arsip='$arsip'");
$d = mysqli_fetch_assoc($data);
header("location:../assets/arsip/" . $d['file_arsip']);
