<?php
include '../komponen/koneksi.php';
// Update Mahasiswa
if (isset($_POST['nim'])) {
    $vnim = $_POST['nim'];
    $vnama = $_POST['nama'];
    $vprodi = $_POST['prodi'];
    $vangkatan = $_POST['angkatan'];
    $vemail = $_POST['email'];

    $queryUpdate = "UPDATE tbl_mahasiswa SET 
        nama='$vnama',
        prodi='$vprodi',
        angkatan='$vangkatan',
        email='$vemail'
        WHERE nim='$vnim'";
    mysqli_query($conn, $queryUpdate);
    header("Location: ../mahasiswa.php");
    die;
}

// Update Dosen
if (isset($_POST['nidn'])) {
    $vnidn = $_POST['nidn'];
    $vnama = $_POST['nama'];
    $vprodi = $_POST['prodi'];
    $vemail = $_POST['email'];

    $queryUpdate = "UPDATE tbl_dosen SET 
        nama='$vnama',
        prodi='$vprodi',
        email='$vemail'
        WHERE nidn='$vnidn'";
    mysqli_query($conn, $queryUpdate);
    header("Location: ../dosen.php");
    die;
}

// Update Matkul
if (isset($_POST['kodeMatkul'])) {
    $vkodeMatkul = $_POST['kodeMatkul'];
    $vnama = $_POST['nama'];
    $vsks = $_POST['sks'];
    $vnidn = $_POST['nidn'];

    $queryUpdate = "UPDATE tbl_matkul SET 
        namaMatkul='$vnama',
        sks='$vsks',
        nidn='$vnidn'
        WHERE kodeMatkul='$vkodeMatkul'";
    mysqli_query($conn, $queryUpdate);
    header("Location: ../matkul.php");
    die;
}

// Update Nilai
if (isset($_POST['id_nilai'])) {
    $vidNilai = $_POST['id_nilai'];
    $vnilai = $_POST['nilai'];
    $vnilaiHuruf = $_POST['nilaiHuruf'];
    $vnim = $_POST['nim'];
    $vkodeMatkul = $_POST['kodeMatkul'];

    $queryUpdate = "UPDATE tbl_nilai SET 
        nim='$vnim',
        kodeMatkul='$vkodeMatkul',
        nilai='$vnilai'
        WHERE id_nilai='$vidNilai'";
    mysqli_query($conn, $queryUpdate);
    header("Location: ../nilai.php");
    die;
}
