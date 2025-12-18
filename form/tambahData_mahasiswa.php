<?php
include '../Login/blok.php';
if ($_SESSION['role'] == 'mhs') {
    header("Location: index.php");
    exit();
}
include('../komponen/header.php');
include('../komponen/topbar.php');
include('../komponen/sidebar.php');
?>
<main>
    <h3>Ubah Data Mahasiswa</h3>
    <form action="../proses/proses_tambah/mahasiswa.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="prodi" id="">
                        <option value="" selected>--pilih prodi--</option>
                        <option value="TL">TL</option>
                        <option value="TRPL">TRPL</option>
                        <option value="TRM">TRM</option>
                        <option value="TRMK">TRMK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td><input type="number" name="angkatan"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</main>
<?php
include('../komponen/footer.php');
?>