<?php
include('../komponen/header.php');
include('../komponen/topbar.php');
include('../komponen/sidebar.php');
include('../komponen/koneksi.php');

$xnidn = $_GET['nidn'];
$query = mysqli_query($conn, "SELECT * FROM tbl_dosen WHERE nidn='$xnidn'");
$dsn = mysqli_fetch_array($query);
?>
<main>
    <h3>Ubah Data Dosen</h3>
    <form action="../proses/proses_update.php" method="POST">
        <table>
            <tr>
                <td>NIDN</td>
                <td><input type="text" name="nidn" value="<?= $dsn['nidn'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $dsn['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="prodi" id="">
                        <option value="">--pilih prodi--</option>
                        <option value="TL" <?= $dsn['prodi'] == 'TL' ? 'selected' : '' ?>>TL</option>
                        <option value="TRPL" <?= $dsn['prodi'] == 'TRPL' ? 'selected' : '' ?>>TRPL</option>
                        <option value="TRM" <?= $dsn['prodi'] == 'TRM' ? 'selected' : '' ?>>TRM</option>
                        <option value="TRMK" <?= $dsn['prodi'] == 'TRMK' ? 'selected' : '' ?>>TRMK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?= $dsn['email'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</main>
<?php
include('../komponen/footer.php');
?>