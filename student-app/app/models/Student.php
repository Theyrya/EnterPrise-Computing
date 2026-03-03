<?php
require_once __DIR__ . "/../../config/database.php";

class Student {
    private $conn;
    private $table = "students";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $student_id, $email) {
        $sql = "INSERT INTO " . $this->table . " (student_name, student_id, email) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$name, $student_id, $email]);
    }

    public function delete($id) {
        $sql = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>