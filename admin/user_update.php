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
    mysqli_query($koneksi, "UPDATE user SET nip='$nip', nama_user='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan' WHERE id_user='$id'");
    header("location:user.php");
} elseif ($pwd == "") {
    if (!in_array($ext, $allowed)) {
        header("location:user.php?pesan=gagal");
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/user/' . $rand . '_' . $filename);
        $x = $rand . '_' . $filename;
        mysqli_query($koneksi, "UPDATE user SET nip='$nip', nama_user='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan', foto='$x' WHERE id_user='$id'");
        header("location:user.php");
    }
} elseif ($filename == "") {
    mysqli_query($koneksi, "UPDATE user SET nip='$nip', nama_user='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan', password='$password' WHERE id_user='$id'");
    header("location:user.php");
} else {
    move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/user/' . $rand . '_' . $filename);
    $x = $rand . '_' . $filename;
    mysqli_query($koneksi, "UPDATE user SET nip='$nip', nama_user='$nama', jabatan='$jabatan', pangkat='$pangkat', golongan='$golongan', password='$password', foto='$x' WHERE id_user='$id'");
    header("location:user.php");
}
