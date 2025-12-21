<?php
include '../../komponen/koneksi.php';
$vnim = $_POST['nim'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vangkatan = $_POST['angkatan'];
$vemail = $_POST['email'];

$namaFile = $_FILES['fileFoto']['name'];
$lokasiSementara = $_FILES['fileFoto']['tmp_name'];
$lokasiTujuan = '../../folderFoto/' . $vnim . "_" . $namaFile;
$terUpload = move_uploaded_file($lokasiSementara, $lokasiTujuan);

$vfoto = $lokasiTujuan;

$queryTambah = "INSERT INTO tbl_mahasiswa values ('$vnim', '$vnama', '$vprodi', '$vangkatan', '$vemail', '$vfoto')";
mysqli_query($conn, $queryTambah);
header("Location: ../../mahasiswa.php");
