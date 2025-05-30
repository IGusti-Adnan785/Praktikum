<?php
session_start();

require_once('Koneksi.php');

class Auth extends Koneksi{
    private $conn;

    public function __construct() {
        parent::__construct();
        $this->conn = $this->getConnection();
    }
    
    public function login($email, $password) {
    $stmt = $this->conn->prepare("SELECT * FROM auth WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            if ($row['level'] == 0) {
                $_SESSION['id_pengguna'] = $row['id_pengguna'];
                return true; 
            } else {
                return false; 
            }
        } else {
            return false; 
        }
    } else {
        return false; 
    }
}
}

$auth = new Auth();
$auth->login("gustiadnan123@gmail.com", "123");