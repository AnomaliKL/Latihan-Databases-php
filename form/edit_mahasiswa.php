<?php
include('../komponen/header.php');
include('../komponen/topbar.php');
include('../komponen/sidebar.php');
include('../komponen/koneksi.php');
$xnim = $_GET['nim'];
$query = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE nim='$xnim'");
$mhs = mysqli_fetch_array($query);
?>
<h3>Ubah Data Mahasiswa</h3>
<form action="../proses/proses_update.php" method="POST">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" value="<?= $mhs['nim'] ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?= $mhs['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>
                <select name="prodi" id="">
                    <option value="">--pilih prodi--</option>
                    <option value="TL" <?= $mhs['prodi'] == 'TL' ? 'selected' : '' ?>>TL</option>
                    <option value="TRPL" <?= $mhs['prodi'] == 'TRPL' ? 'selected' : '' ?>>TRPL</option>
                    <option value="TRM" <?= $mhs['prodi'] == 'TRM' ? 'selected' : '' ?>>TRM</option>
                    <option value="TRMK" <?= $mhs['prodi'] == 'TRMK' ? 'selected' : '' ?>>TRMK</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td><input type="number" name="angkatan" value="<?= $mhs['angkatan'] ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?= $mhs['email'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
<?php
include('../komponen/footer.php');
?>