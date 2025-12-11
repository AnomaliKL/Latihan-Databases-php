<?php
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
                    <h3 class="mb-0 fw-bold">Data Matakuliah</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Matakuliah</li>
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
                        <i class="bi bi-journal-text"></i> Tabel Data Nilai
                    </h3>
                    <a href="#">
                        <button class="btn btn-light btn-sm float-sm-end">Tambah Data
                        </button></a>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>Kode Matakuliah</th>
                                <th>Nama Matakuliah</th>
                                <th>SKS</th>
                                <th>NIDN</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $sql = "SELECT * FROM tbl_matkul";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($query)) :
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $row[0]; ?></td>
                                    <td class="text-center"><?php echo $row[1]; ?></td>
                                    <td class="text-center"><?php echo $row[2]; ?></td>
                                    <td class="text-center"><?php echo $row[3]; ?></td>
                                    <td>
                                        <a href="form/edit_matkul.php?kodeMatkul=<?= $row[0] ?>">Edit</a> |
                                        <a href="proses/proses_delete.php?kodeMatkul=<?= $row[0] ?>">Hapus</a>
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