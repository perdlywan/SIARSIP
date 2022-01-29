<?php
include '../koneksi.php';
$id  = $_POST['id'];
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
    mysqli_query($koneksi, "UPDATE petugas SET nip='$nip', nama_petugas='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan' WHERE id_petugas='$id'");
    header("location:petugas.php");
} elseif ($pwd == "") {
    if (!in_array($ext, $allowed)) {
        header("location:petugas.php?pesan=gagal");
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/petugas/' . $rand . '_' . $filename);
        $x = $rand . '_' . $filename;
        mysqli_query($koneksi, "UPDATE petugas SET nip='$nip', nama_petugas='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan', foto='$x' WHERE id_petugas='$id'");
        header("location:petugas.php");
    }
} elseif ($filename == "") {
    mysqli_query($koneksi, "UPDATE petugas SET nip='$nip', nama_petugas='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan', password='$password' WHERE id_petugas='$id'");
    header("location:petugas.php");
} else {
    move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/petugas/' . $rand . '_' . $filename);
    $x = $rand . '_' . $filename;
    mysqli_query($koneksi, "UPDATE petugas SET nip='$nip', nama_petugas='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan', password='$password', foto='$x' WHERE id_petugas='$id'");
    header("location:petugas.php");
}
