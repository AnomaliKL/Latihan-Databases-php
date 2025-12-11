<?php

include('../komponen/koneksi.php');
$xidNilai = $_GET['id_nilai'];
$query = mysqli_query($conn, "
            SELECT n.id_nilai, n.nilai, n.nilaiHuruf,
            mhs.nama AS mahasiswa,
            mk.namaMatkul AS matkul,
            d.nama AS dosen
            FROM tbl_nilai n
            JOIN tbl_mahasiswa mhs ON n.nim = mhs.nim
            JOIN tbl_matkul mk ON n.kodeMatkul = mk.kodeMatkul
            JOIN tbl_dosen d ON n.nidn = d.nidn
            WHERE n.id_nilai='$xidNilai'");
$nilai = mysqli_fetch_array($query);
?>

<?php
include('../komponen/header.php');
include('../komponen/topbar.php');
include('../komponen/sidebar.php');
?>
<main>
    <h3>Ubah Data Mahasiswa</h3>
    <form action="../proses/proses_update.php" method="POST" class="form-control">
        <table>
            <tr>
                <td>Kode Matkul</td>
                <td><input type="text" name="kodeMatkul" value="<?= $nilai[0] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="text" name="nilai" value="<?= $nilai[1] ?>"></td>
            </tr>
            <tr>
                <td>nilaiHuruf</td>
                <td><input type="text" name="nilaiHuruf" value="<?= $nilai[2] ?>"></td>
            </tr>
            <tr>
                <td>kodeMatkul</td>
                <td><input type="text" name="kodeMatkul" value="<?= $nilai[3] ?>"></td>
            </tr>
            <tr>
                <td>nim</td>
                <td><input type="text" name="nim" value="<?= $nilai[4] ?>"></td>
            </tr>
            <tr>
                <td>Dosen Pengampu</td>
                <td><input type="text" name="Dosen" value="<?= $nilai[5] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</main>
<?php
include('../komponen/footer.php');
?>