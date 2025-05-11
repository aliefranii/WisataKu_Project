<?php
session_start(); // Mulai sesi PHP

include 'koneksi.php'; // Menyertakan file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan form telah disubmit dengan metode POST

    // Ambil nilai dari form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Validasi data (contoh: pastikan nama pengguna dan kata sandi tidak kosong)
    if (empty($username) || empty($password)) {
        echo "<script>alert('Silakan lengkapi semua bidang.');</script>";
        exit();
    }

    // Hash password sebelum menyimpannya ke database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Membuat query untuk memeriksa apakah nama pengguna sudah digunakan
    $check_username_query = "SELECT id FROM users WHERE username = ?";
    $stmt = $conn->prepare($check_username_query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Jika nama pengguna sudah digunakan, tampilkan pesan kesalahan
        echo "<script>alert('Nama pengguna sudah digunakan. Silakan pilih nama pengguna lain.');</script>";
    } else {
        // Jika nama pengguna belum digunakan, simpan data pengguna baru ke dalam database
        $insert_query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("ss", $username, $hashed_password);
        if ($stmt->execute()) {
            // Jika penyimpanan berhasil, arahkan ke halaman login
            echo "<script>alert('Registrasi berhasil. Silakan masuk dengan akun baru Anda.');</script>";
            echo "<script>window.location='login.php';</script>";
            exit();
        } else {
            // Jika terjadi kesalahan dalam penyimpanan, tampilkan pesan kesalahan
            echo "<script>alert('Terjadi kesalahan. Silakan coba lagi.');</script>";
        }
    }
}
?>
