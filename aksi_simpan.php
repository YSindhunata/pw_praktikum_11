<?php

include "koneksi.php";
// Mendapatkan data dari form

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO mahasiswa (nim, nama, alamat, no_hp, jenis_kelamin, jurusan) VALUES ('$nim', '$nama', '$alamat', '$no_hp', '$jenis_kelamin', '$jurusan')";

if (mysqli_query($link, $sql)) {
    header("location:tampil_data.php");
} else {
    header("location: form_tambah.php");
}

?>