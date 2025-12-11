  <?php
  include('../../komponen/koneksi.php');
  $vkodeMatkul = $_POST['kodeMatkul'];
  $vnama = $_POST['nama'];
  $vsks = $_POST['sks'];
  $vnidn = $_POST['nidn'];

  $queryTambah = "INSERT INTO tbl_matkul values ('$vkodeMatkul', '$vnama', '$vsks', '$vnidn')";
  mysqli_query($conn, $queryTambah);
  header("Location: ../../matkul.php");
