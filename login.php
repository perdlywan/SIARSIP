<?php

include 'koneksi.php';

session_start();

$nip = $_POST['Nip'];
$password = $_POST['password'];
$akses = $_POST['akses'];

if ($akses == "admin") {
    $cek = mysqli_query($koneksi, "SELECT * FROM admin WHERE nip='$nip' AND password='$password'");

    if (mysqli_num_rows($cek) > 0) {
        session_start();
        $data = mysqli_fetch_assoc($cek);
        $_SESSION['status'] = "berhasil";
        $_SESSION['id'] = $data['id_admin'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['foto'] = $data['foto'];
        header("location:admin/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
} else if ($akses == "koordinator") {
    $cek = mysqli_query($koneksi, "SELECT * FROM petugas WHERE nip='$nip' AND password='$password'");

    if (mysqli_num_rows($cek) > 0) {
        session_start();
        $data = mysqli_fetch_assoc($cek);
        $_SESSION['status'] = "berhasil";
        $_SESSION['id'] = $data['id_petugas'];
        $_SESSION['nama'] = $data['nama_petugas'];
        $_SESSION['foto'] = $data['foto'];
        header("location:petugas/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
} else {
    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE nip='$nip' AND password='$password'");

    if (mysqli_num_rows($cek) > 0) {
        session_start();
        $data = mysqli_fetch_assoc($cek);
        $_SESSION['status'] = "berhasil";
        $_SESSION['id'] = $data['id_user'];
        $_SESSION['nama'] = $data['nama_user'];
        $_SESSION['foto'] = $data['foto'];
        header("location:user/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
}
