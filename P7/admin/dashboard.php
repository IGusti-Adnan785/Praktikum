<?php
session_start();
if (!isset($_SESSION['id_pengguna'])) header("Location: login.php");

require_once("model/Koneksi.php");
$koneksi = new Koneksi();

$extensions = $koneksi->select("extensions"); 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Ekstensi</h2>
        <a href="tambah.php" class="btn btn-success mb-3">Tambah Ekstensi</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($extensions as $row): ?> 
                    <tr>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['rating'] ?> ★</td>
                        <td>
                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
</body>
</html>