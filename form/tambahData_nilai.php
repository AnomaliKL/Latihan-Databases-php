<?php
include('../komponen/header.php');
include('../komponen/topbar.php');
include('../komponen/sidebar.php');
?>
<main>
    <h3>Ubah Data Mahasiswa</h3>
    <form action="../proses/proses_tambah/nilai.php" method="POST" class="form-control">
        <table>
            <tr>
                <td>id nilai</td>
                <td><input type="text" name="id_nilai"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="text" name="nilai"></td>
            </tr>
            <tr>
                <td>nilaiHuruf</td>
                <td><input type="text" name="nilaiHuruf"></td>
            </tr>
            <tr>
                <td>kodeMatkul</td>
                <td><input type="text" name="kodeMatkul"></td>
            </tr>
            <tr>
                <td>nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>nidn</td>
                <td><input type="text" name="nidn"></td>
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