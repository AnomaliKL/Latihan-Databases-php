<?php
session_start();
if (!isset($_SESSION['Login_user'])) {
    header("Location: ../login.php");
    exit();
}
