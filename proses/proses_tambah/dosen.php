<?php
include('../../komponen/koneksi.php');
$vnidn = $_POST['nidn'];
$vnama = $_POST['nama'];
$vprodi = $_POST['prodi'];
$vemail = $_POST['email'];

$queryTambah = "INSERT INTO tbl_dosen values ('$vnidn', '$vnama', '$vprodi', '$vemail')";
mysqli_query($conn, $queryTambah);
header("Location: ../../dosen.php");
