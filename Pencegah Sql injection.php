<?php
// Koneksi ke database
$dsn = 'mysql:host=localhost;dbname=nama_database';
$username = 'username';
$password = 'password';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Menggunakan prepared statement
    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->execute(['username' => $input_username]); // Ganti $input_username dengan input dari user
    $user = $stmt->fetch();
} catch (PDOException $e) {
    echo 'Koneksi gagal: ' . $e->getMessage();
}
?>
