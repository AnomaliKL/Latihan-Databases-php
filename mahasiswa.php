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
          <h3 class="mb-0 fw-bold">Data Mahasiswa</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Mahasiswa</li>
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
        <div class="card-header bg-success text-white">
          <h3 class="card-title fw-bold">
            <i class="bi bi-people"></i> Tabel Data Mahasiswa
          </h3>
        </div>

        <div class="card-body table-responsive">
          <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-dark text-center">
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>E-mail</th>
              </tr>
            </thead>

            <tbody>
              <?php
              $sql = "SELECT * FROM tbl_mahasiswa";
              $query = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($query)) :
              ?>
                <tr>
                  <td class="text-center"><?= $row[0]; ?></td>
                  <td><?= $row[1]; ?></td>
                  <td class="text-center"><?= $row[2]; ?></td>
                  <td class="text-center"><?= $row[3]; ?></td>
                  <td><?= $row[4]; ?></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>

        <div class="card-footer text-center text-muted">
          © <?= date('Y') ?> - Data Mahasiswa
        </div>

      </div>

    </div>
  </div>
  <!--end::App Content-->

</main>
<!--end::App Main-->

<?php
include 'komponen/footer.php';
?>