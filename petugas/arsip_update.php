<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');


$id  = $_POST['id'];
$kode  = $_POST['kode'];
$nama  = $_POST['nama'];
$pegawai = $_POST['pegawai'];

$rand = rand();

$filename = $_FILES['file']['name'];

$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

if ($filename == "") {

    mysqli_query($koneksi, "UPDATE arsip SET kode_arsip='$kode', nama_file='$nama', oleh ='$pegawai', kategori_arsip='$kategori', keterangan_arsip='$keterangan' WHERE id_arsip='$id'") or die(mysqli_error($koneksi));
    header("location:arsip.php");
} else {

    $jenis = pathinfo($filename, PATHINFO_EXTENSION);

    if ($jenis == "php") {
        header("location:arsip.php?pesan=gagal");
    } else {


        $lama = mysqli_query($koneksi, "SELECT * FROM arsip where id_arsip='$id'");
        $l = mysqli_fetch_assoc($lama);
        $nama_file_lama = $l['file_arsip'];
        unlink("../assets/arsip/" . $nama_file_lama);


        move_uploaded_file($_FILES['file']['tmp_name'], '../assets/arsip/' . $rand . '_' . $filename);
        $nama_file = $rand . '_' . $filename;
        mysqli_query($koneksi, "UPDATE arsip SET kode_arsip='$kode', nama_file='$nama', oleh='$pegawai', jenis_file='$jenis', kategori_arsip='$kategori', keterangan_arsip='$keterangan', file_arsip='$nama_file' where id_arsip='$id'") or die(mysqli_error($koneksi));
        header("location:arsip.php?pesan=sukses");
    }
}
