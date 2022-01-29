<?php
include '../koneksi.php';
session_start();
$id  = $_SESSION['id'];
$nip = $_POST['nip'];
$nama  = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$pangkat = $_POST['pangkat'];
$golongan = $_POST['golongan'];
$pwd = $_POST['password'];
$password = $_POST['password'];

// cek gambar
$rand = rand();
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if ($pwd == "" && $filename == "") {
    mysqli_query($koneksi, "UPDATE admin SET nip='$nip', nama='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan' WHERE id_admin='$id'");
    header("location:profile.php?pesan=sukses");
} elseif ($pwd == "") {
    if (!in_array($ext, $allowed)) {
        header("location:profile.php?pesan=gagal");
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/admin/' . $rand . '_' . $filename);
        $x = $rand . '_' . $filename;
        mysqli_query($koneksi, "UPDATE admin SET nip='$nip', nama='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan', foto='$x' WHERE id_admin='$id'");
        header("location:profile.php?pesan=sukses");
    }
} elseif ($filename == "") {
    mysqli_query($koneksi, "UPDATE admin SET nip='$nip', nama='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan', password='$password' WHERE id_admin='$id'");
    header("location:profile.php?pesan=sukses");
} else {
    move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/admin/' . $rand . '_' . $filename);
    $x = $rand . '_' . $filename;
    mysqli_query($koneksi, "UPDATE admin SET nip='$nip', nama='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan', password='$password', foto='$x' WHERE id_admin='$id'");
    header("location:profile.php?pesan=sukses");
}
