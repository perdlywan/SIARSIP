<?php
include '../koneksi.php';
$nip = $_POST['nip'];
$nama  = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$pangkat = $_POST['pangkat'];
$golongan = $_POST['golongan'];
$password = $_POST['password'];

$rand = rand();
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];

if ($filename == "") {
    mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nip','$nama','$jabatan','$pangkat','$golongan','$password','')");
    header("location:user.php");
} else {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $allowed)) {
        header("location:user.php?pesan=gagal");
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/user/' . $rand . '_' . $filename);
        $file_gambar = $rand . '_' . $filename;
        mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nip','$nama','$jabatan','$pangkat','$golongan','$password','$file_gambar')");
        header("location:user.php");
    }
}
