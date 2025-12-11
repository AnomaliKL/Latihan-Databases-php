<?php
include('../komponen/header.php');
include('../komponen/topbar.php');
include('../komponen/sidebar.php');
?>
<h3>Ubah Data Mahasiswa</h3>
<form action="../proses/proses_tambah/matkul.php" method="POST">
    <table>
        <tr>
            <td>Kode Matkul</td>
            <td><input type="text" name="kodeMatkul"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td><input type="number" name="sks"></td>
        </tr>
        <tr>
            <td>NIDN</td>
            <td><input type="text" name="nidn"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
<?php
include('../komponen/footer.php');
?>