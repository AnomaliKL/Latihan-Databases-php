<?php
include('../../komponen/koneksi.php');
$vnidn = $_POST['nidn'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vemail = $_POST['email'];

$namaFile = $_FILES['fileFoto']['name'];
$lokasiSementara = $_FILES['fileFoto']['tmp_name'];
$lokasiTujuan = '../../folderFoto/' . $vnidn . "_" . $namaFile;
$terUpload = move_uploaded_file($lokasiSementara, $lokasiTujuan);

$vfoto = $lokasiTujuan;

$queryTambah = "INSERT INTO tbl_dosen values ('$vnidn', '$vnama', '$vprodi', '$vemail', '$vfoto')";
mysqli_query($conn, $queryTambah);
header("Location: ../../dosen.php");
