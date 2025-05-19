<?php
session_start();
if (!isset($_SESSION['id_pengguna'])) header("Location: login.php");

require_once("model/Koneksi.php");
$koneksi = new Koneksi();
$id = $_GET['id'];
$koneksi->delete('extensions', $id);
header("Location: dashboard.php");
?>