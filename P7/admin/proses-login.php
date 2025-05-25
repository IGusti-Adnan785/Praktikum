<?php
session_start();
require_once("model/Auth.php");

$auth = new Auth();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $login_result = $auth->login($email, $password);

    if ($login_result === true) {
        // Jika level = 0 → dashboard.php
        header("Location: dashboard.php");
    } else {
        // Jika bukan level 0 atau gagal login → index.php
        header("Location: ../index.php");
    }
    exit;
} else {
    // Jika bukan POST request → kembali ke halaman login
    header("Location: login.php");
    exit;
}
?>

