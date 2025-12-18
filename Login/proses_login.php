<?php
include '../komponen/koneksi.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM tbl_user WHERE username = '$user' AND password = '$pass'";
    $hasil = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($hasil);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION['Login_user'] = $user;
        $_SESSION['role'] = $row['role'];
        header("Location: ../index.php");
        exit();
    } else {
        echo "<script>alert('Username atau Password salah!');window.location.href='login.php';</script>";
    }
}
