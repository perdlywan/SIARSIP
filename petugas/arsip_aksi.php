<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s');
$petugas = $_SESSION['id'];
$kode  = $_POST['kode'];
$nama  = $_POST['nama'];

$rand = rand();

$filename = $_FILES['file']['name'];
$jenis = pathinfo($filename, PATHINFO_EXTENSION);
$pegawai = $_POST['pegawai'];
$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

if ($jenis == "php") {
    header("location:arsip.php?pesan=gagal");
} else {
    move_uploaded_file($_FILES['file']['tmp_name'], '../assets/arsip/' . $rand . '_' . $filename);
    $nama_file = $rand . '_' . $filename;
    mysqli_query($koneksi, "INSERT INTO arsip VALUES ('','$waktu','$petugas','$kode','$nama','$jenis','$pegawai','$kategori','$keterangan','$nama_file')") or die(mysqli_error($koneksi));
    header("location:arsip.php?pesan=sukses");
}
