<?php
include '../../komponen/koneksi.php';
$vnim = $_POST['nim'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vangkatan = $_POST['angkatan'];
$vemail = $_POST['email'];

$queryTambah = "INSERT INTO tbl_mahasiswa values ('$vnim', '$vnama', '$vprodi', '$vangkatan', '$vemail')";
mysqli_query($conn, $queryTambah);
header("Location: ../../mahasiswa.php");
