<?php

class Koneksi {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'myblog'; 

    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die('Tidak terhubung ke database: ' . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function insert($table, $data) {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        return $this->conn->query($sql);
    }

    public function select($table) {
    $sql = "SELECT * FROM $table";
    $result = $this->conn->query($sql);

    if (!$result) {
        die("Query gagal: " . $this->conn->error . " - SQL: $sql"); 
    }

    $rows = [];
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

    public function update($table, $id, $data) {
        $set = [];
        foreach ($data as $key => $value) {
            $set[] = "$key = '$value'";
        }
        $set = implode(", ", $set);
        $sql = "UPDATE $table SET $set WHERE id = $id";
        return $this->conn->query($sql);
    }

    public function delete($table, $id) {
        return $this->conn->query("DELETE FROM $table WHERE id = $id");
    }

    public function getExtensionById($id) {
        $sql = "SELECT * FROM extensions WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); 
    }
}