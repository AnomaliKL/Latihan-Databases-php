<?php
include('komponen/header.php');
include('komponen/topbar.php');
include('komponen/sidebar.php');
?>

<!--begin::App Main-->
<main class="app-main">

  <!--begin::App Content Header-->
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0 fw-bold">Dashboard</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Welcome</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--end::App Content Header-->

  <!--begin::App Content-->
  <div class="app-content">
    <div class="container-fluid">

      <!-- ✅ WELCOME BANNER -->
      <div class="row mb-4">
        <div class="col-12">
          <div class="card bg-primary text-white shadow">
            <div class="card-body text-center py-5">
              <h1 class="fw-bold">👋 Welcome</h1>
              <p class="fs-5 mt-2">
                Kumpulan Tugas Praktikum Web 2 Menggunakan PHP
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- ✅ INFO BOX -->
      <div class="row g-4 mb-4">

        <!-- ✅ PHP -->
        <div class="col-md-4">
          <div class="card text-center shadow border-0 h-100"
            style="background: linear-gradient(135deg, #6f42c1, #9b59b6); color: white;">
            <div class="card-body py-5">
              <i class="bi bi-filetype-php" style="font-size: 70px;"></i>
              <h4 class="mt-3 fw-bold">PHP</h4>
              <p class="mt-2">Backend, database, dan proses server.</p>
            </div>
          </div>
        </div>

        <!-- ✅ HTML -->
        <div class="col-md-4">
          <div class="card text-center shadow border-0 h-100"
            style="background: linear-gradient(135deg, #fd7e14, #f39c12); color: white;">
            <div class="card-body py-5">
              <i class="bi bi-filetype-html" style="font-size: 70px;"></i>
              <h4 class="mt-3 fw-bold">HTML</h4>
              <p class="mt-2">Struktur utama halaman website.</p>
            </div>
          </div>
        </div>

        <!-- ✅ CSS -->
        <div class="col-md-4">
          <div class="card text-center shadow border-0 h-100"
            style="background: linear-gradient(135deg, #0d6efd, #5dade2); color: white;">
            <div class="card-body py-5">
              <i class="bi bi-filetype-css" style="font-size: 70px;"></i>
              <h4 class="mt-3 fw-bold">CSS</h4>
              <p class="mt-2">Tampilan, warna, dan layout.</p>
            </div>
          </div>
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