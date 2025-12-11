<?php
include('../komponen/header.php');
include('../komponen/topbar.php');
include('../komponen/sidebar.php');
include('../komponen/koneksi.php');
$xkodeMatkul = $_GET['kodeMatkul'];
$query = mysqli_query($conn, "SELECT * FROM tbl_matkul WHERE kodeMatkul='$xkodeMatkul'");
$matkul = mysqli_fetch_array($query);
?>
<h3>Ubah Data Mahasiswa</h3>
<form action="../proses/proses_update.php" method="POST">
    <table>
        <tr>
            <td>Kode Matkul</td>
            <td><input type="text" name="kodeMatkul" value="<?= $matkul['kodeMatkul'] ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?= $matkul['namaMatkul'] ?>"></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td><input type="number" name="sks" value="<?= $matkul['sks'] ?>"></td>
        </tr>
        <tr>
            <td>NIDN</td>
            <?=  ?>
            <option value=""></option>
            <td><input type="text" name="nidn" value="<?= $matkul['nidn'] ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
<?php
include('../komponen/footer.php');
?>