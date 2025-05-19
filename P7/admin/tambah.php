<?php
session_start();
if (!isset($_SESSION['id_pengguna'])) header("Location: login.php");

require_once("model/Koneksi.php");
$koneksi = new Koneksi();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'rating' => $_POST['rating'],
        'image' => $_POST['image']
    ];
    $koneksi->insert('extensions', $data);
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Ekstensi</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Ekstensi</h2>
        <form method="POST">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Rating</label>
                <input type="number" name="rating" step="0.1" class="form-control" required>
            </div>
            <div class="form-group">
                <label>URL Gambar</label>
                <input type="text" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</body>
</html>