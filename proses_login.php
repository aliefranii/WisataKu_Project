<?php
session_start();

// Periksa apakah metode yang digunakan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan validasi login di sini
    if ($username === 'admin' && $password === 'admin') {
        // Jika login berhasil, arahkan ke halaman beranda
        $_SESSION['logged_in'] = true; // Set session 'logged_in' menjadi true
        $_SESSION['username'] = $username;
        header("location: index_admin.php");
        exit(); // Penting untuk menghentikan eksekusi skrip setelah melakukan redirect
    } else {
        // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
        $_SESSION['error'] = "Username atau password salah";
        header("location: login.php");
        exit();
    }
} else {
    // Jika metode bukan POST, arahkan kembali ke halaman login
    header("location: login.php");
    exit();
}
?>
