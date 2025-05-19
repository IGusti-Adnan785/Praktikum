<?php
session_start();
if (!isset($_SESSION['id_pengguna'])) header("Location: login.php");

require_once("model/Koneksi.php");
$koneksi = new Koneksi();

$id = $_GET['id'];
$extension = $koneksi->getExtensionById($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'rating' => $_POST['rating'],
        'image' => $_POST['image']
    ];
    $koneksi->update('extensions', $id, $data);
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Ekstensi</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Ekstensi</h2>
        <form method="POST">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="<?= $extension['name'] ?>" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control" required><?= $extension['description'] ?></textarea>
            </div>
            <div class="form-group">
                <label>Rating</label>
                <input type="number" name="rating" step="0.1" class="form-control" value="<?= $extension['rating'] ?>" required>
            </div>
            <div class="form-group">
                <label>URL Gambar</label>
                <input type="text" name="image" class="form-control" value="<?= $extension['image'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Perbarui</button>
        </form>
    </div>
</body>
</html>