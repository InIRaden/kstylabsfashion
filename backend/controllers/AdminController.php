<?php
// filepath: c:\xampp\htdocs\kstylabsfashion\backend\controllers\AdminController.php

// class AdminController: Mendefinisikan sebuah kelas bernama AdminController. Kelas ini digunakan untuk mengelola fungsi-fungsi terkait admin.
class AdminController 
{
    // private $db;: Mendeklarasikan properti $db dengan akses privat. Properti ini akan digunakan untuk menyimpan koneksi database.
    private $db;

    // __construct($db): Konstruktor kelas yang akan dipanggil saat objek AdminController dibuat. Parameter $db digunakan untuk menerima koneksi database.
    public function __construct($db)
    {
        // $this->db = $db;: Menyimpan koneksi database yang diterima ke dalam properti $db.
        $this->db = $db; // Koneksi database
    }

    // Fungsi untuk menampilkan semua pengguna
    // getUsers(): Mendefinisikan fungsi getUsers yang digunakan untuk mengambil semua data pengguna dari tabel users.
    public function getUsers()
    {
        $query = "SELECT * FROM users"; // Query SQL untuk mengambil semua data dari tabel users
        $stmt = $this->db->prepare($query); // Menyiapkan query SQL menggunakan metode prepare() dari PDO untuk mencegah SQL Injection.
        $stmt->execute(); // Menjalankan query yang telah disiapkan
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Mengambil semua hasil query dalam bentuk array asosiatif
    }

    // Fungsi untuk menambahkan pengguna baru
    public function createUser($email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        return $stmt->execute();
    }

    // Fungsi untuk memperbarui data pengguna
    public function updateUser($id, $email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "UPDATE users SET email = :email, password = :password WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        return $stmt->execute();
    }

    // Fungsi untuk menghapus pengguna
    public function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function addStyle($model, $negara, $style, $cuaca)
    {
        $query = "INSERT INTO styles (model_name, country, style_type, weather) VALUES (:model, :negara, :style, :cuaca)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':model', $model);
        $stmt->bindParam(':negara', $negara);
        $stmt->bindParam(':style', $style);
        $stmt->bindParam(':cuaca', $cuaca);
        return $stmt->execute();
    }
}

// Endpoint untuk menangani request dari admin.js
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'addStyle') {
    $model = $_POST['model'];
    $negara = $_POST['negara'];
    $style = $_POST['style'];
    $cuaca = $_POST['cuaca'];

    $adminController = new AdminController($db); // Pastikan $db adalah koneksi database
    $result = $adminController->addStyle($model, $negara, $style, $cuaca);

    echo json_encode(['success' => $result]);
    exit;
}