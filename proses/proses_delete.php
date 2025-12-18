<?php
include '../Login/blok.php';
if ($_SESSION['role'] == 'mhs') {
    header("Location: index.php");
    exit();
}
include '../komponen/koneksi.php';

if (isset($_GET['nim'])) {
    $xnim = $_GET['nim'];
    mysqli_query($conn, "DELETE FROM tbl_nilai WHERE nim='$xnim'");
    $queryHapus = "DELETE FROM tbl_mahasiswa WHERE nim='$xnim'";
    $hasil = mysqli_query($conn, $queryHapus);

    if ($hasil) {
        header("Location: ../mahasiswa.php");
    } else {
        die("Data gagal dihapus: " . mysqli_error($conn));
    }
}

if (isset($_GET['nidn'])) {
    $xnidn = $_GET['nidn'];

    $queryHapus = "DELETE FROM tbl_dosen WHERE nidn='$xnidn'";
    $hasil = mysqli_query($conn, $queryHapus);

    if ($hasil) {
        header("Location: ../dosen.php");
    } else {
        die("Data gagal dihapus: " . mysqli_error($conn));
    }
}

if (isset($_GET['kodeMatkul'])) {
    $xkodeMatkul = $_GET['kodeMatkul'];

    $queryHapus = "DELETE FROM tbl_matkul WHERE kodeMatkul='$xkodeMatkul'";
    $hasil = mysqli_query($conn, $queryHapus);

    if ($hasil) {
        header("Location: ../matkul.php");
    } else {
        die("Data gagal dihapus: " . mysqli_error($conn));
    }
}

if (isset($_GET['id_nilai'])) {
    $xidnilai = $_GET['id_nilai'];
    $queryHapus = "DELETE FROM tbl_nilai WHERE id_nilai='$xidnilai'";
    $hasil = mysqli_query($conn, $queryHapus);

    if ($hasil) {
        header("Location: ../nilai.php");
    } else {
        die("Data gagal dihapus: " . mysqli_error($conn));
    }
}
