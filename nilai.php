<?php
include('Login/blok.php');
include('komponen/header.php');
include('komponen/topbar.php');
include('komponen/sidebar.php');
include('komponen/koneksi.php');
?>

<!--begin::App Main-->
<main class="app-main">

    <!--begin::App Content Header-->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0 fw-bold">Data Nilai</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Nilai</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--end::App Content Header-->

    <!--begin::App Content-->
    <div class="app-content">
        <div class="container-fluid">

            <div class="card shadow">
                <div class="card-header bg-warning text-dark">
                    <h3 class="card-title fw-bold">
                        <i class="bi bi-clipboard-data"></i> Tabel Data Nilai Mahasiswa
                        <p>user ini : <?= $_SESSION['Login_user'] ?></p>
                        <p>role ini : <?= $_SESSION['role'] ?></p>
                    </h3>
                    <a href="form/tambahData_nilai.php">
                        <button class="btn btn-light btn-sm float-sm-end">Tambah Data
                        </button></a>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>ID Nilai</th>
                                <th>Mahasiswa</th>
                                <th>Matakuliah</th>
                                <th>Nilai Angka</th>
                                <th>Nilai Huruf</th>
                                <th>Dosen Pengampu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $sql = "
            SELECT n.id_nilai, n.nilai, n.nilaiHuruf,
                   mhs.nama AS mahasiswa,
                   mk.namaMatkul AS matkul,
                   d.nama AS dosen
            FROM tbl_nilai n
            JOIN tbl_mahasiswa mhs ON n.nim = mhs.nim
            JOIN tbl_matkul mk ON n.kodeMatkul = mk.kodeMatkul
            JOIN tbl_dosen d ON n.nidn = d.nidn
            ";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($query)) :
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $row[0]; ?></td>
                                    <td class="text-center"><?php echo $row[1]; ?></td>
                                    <td class="text-center"><?php echo $row[2]; ?></td>
                                    <td class="text-center"><?php echo $row[3]; ?></td>
                                    <td class="text-center"><?php echo $row[4]; ?></td>
                                    <td class="text-center"><?php echo $row[5]; ?></td>
                                    <td>
                                        <a href="form/edit_nilai.php?id_nilai=<?= $row[0] ?>">Edit</a> |
                                        <a href="proses/proses_delete.php?id_nilai=<?= $row[0] ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end::App Content-->

</main>
<!--end::App Main-->

<?php
include('komponen/footer.php');
?>