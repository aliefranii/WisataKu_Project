<?php
// Start the session
session_start();

// Include file koneksi.php
include 'koneksi.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form pemesanan
    $namaPemesan = mysqli_real_escape_string($conn, $_POST['namaPemesan']);
    $nomerTelp = mysqli_real_escape_string($conn, $_POST['nomerTelp']);
    $wisata = mysqli_real_escape_string($conn, $_POST['wisata']);
    $waktuPerjalanan = mysqli_real_escape_string($conn, $_POST['waktuPerjalanan']);
    $pelayananPaket = mysqli_real_escape_string($conn, $_POST['pelayananPaket']);
    $jumlahPeserta = mysqli_real_escape_string($conn, $_POST['jumlahPeserta']);

    // Query untuk memasukkan data ke dalam tabel transaksi
    $insert_query = "INSERT INTO transaksi (nama_pemesan, nomor_telp, wisata, waktu_perjalanan, pelayanan_paket, jumlah_peserta) 
                     VALUES ('$namaPemesan', '$nomerTelp', '$wisata', '$waktuPerjalanan', '$pelayananPaket', '$jumlahPeserta')";

    // Jalankan query
    if (mysqli_query($conn, $insert_query)) {
        // Ambil ID transaksi yang baru diinput
        $last_id = mysqli_insert_id($conn);

        // Simpan ID transaksi ke dalam sesi
        if (!isset($_SESSION['new_transactions'])) {
            $_SESSION['new_transactions'] = [];
        }
        $_SESSION['new_transactions'][] = $last_id;

        // Jika penyimpanan berhasil, tampilkan alert dan redirect ke halaman sukses
        echo "<script>
                window.location.href = 'bukti_transaksi.php';
              </script>";
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
} else {
    echo "<script>alert('Invalid request.');</script>";
}
?>
