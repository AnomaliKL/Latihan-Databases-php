<?php
include '../komponen/koneksi.php';

$vname = $_POST['nama'];
$vpassword = $_POST['password'];
$id = $_SESSION['id'];

$namaFile = $_FILES['fileFoto']['name'];
$lokasiSementara = $_FILES['fileFoto']['tmp_name'];
$lokasiTujuan = 'folderFoto/' . $id . "_" . $namaFile;
$terUpload = move_uploaded_file($lokasiSementara, $lokasiTujuan);

$queryUpdate = "UPDATE tbl_user SET 
        username='$vname',
        password='$vpassword'
        WHERE id='$id'";
mysqli_query($conn, $queryUpdate);

$_SESSION['Login_user'] = $vname;
$_SESSION['pass'] = $vpassword;
header("Location: ../index.php");
die;
