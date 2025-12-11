<?php
include '../../komponen/koneksi.php';
$vnilai = $_POST['nilai'];
$vnilaiHuruf = $_POST['nilaiHuruf'];
$vidkodeMatkul = $_POST['kodeMatkul'];
$vnim = $_POST['nim'];
$vnidn = $_POST['nidn'];

$queryTambah = "INSERT INTO tbl_nilai values (NULL, '$vnilai', '$vnilaiHuruf', '$vidkodeMatkul', '$vnim', '$vnidn')";
mysqli_query($conn, $queryTambah);
header("Location: ../../nilai.php");
