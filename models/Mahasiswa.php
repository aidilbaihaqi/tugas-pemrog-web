<?php
require_once __DIR__ . '/../config.php'; // karena config.php ada di root, naik 1 folder

class Mahasiswa {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // ambil semua mahasiswa
    public function getAll() {
        $result = $this->conn->query("SELECT * FROM mahasiswa");
        return $result;
    }

    // tambah mahasiswa
    public function create($nim, $nama, $jurusan) {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nim, nama, jurusan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nim, $nama, $jurusan);
        return $stmt->execute();
    }

    // ambil mahasiswa berdasarkan id
    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // update mahasiswa
    public function update($id, $nim, $nama, $jurusan) {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nim=?, nama=?, jurusan=? WHERE id=?");
        $stmt->bind_param("sssi", $nim, $nama, $jurusan, $id);
        return $stmt->execute();
    }

    // hapus mahasiswa
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
