<?php
// Start the session
session_start();

// Include file koneksi.php
include 'koneksi.php';

// Ambil ID transaksi baru dari sesi
$new_transactions = isset($_SESSION['new_transactions']) ? $_SESSION['new_transactions'] : [];

// Jika tidak ada transaksi baru, tampilkan pesan dan redirect
if (empty($new_transactions)) {
    echo "<script>
            alert('Tidak ada transaksi baru.');
            window.location.href = 'index.php';
          </script>";
    exit();
}

// Konversi array ID transaksi baru menjadi string dengan format 'id1, id2, id3, ...'
$ids_string = implode(',', $new_transactions);

// Query untuk mengambil data transaksi yang baru diinput
$query = "SELECT * FROM transaksi WHERE id IN ($ids_string) ORDER BY tanggal_transaksi DESC LIMIT 1";
$result = mysqli_query($conn, $query);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    echo "<script>
            alert('Terjadi kesalahan dalam mengambil data transaksi: " . mysqli_error($conn) . "');
            window.location.href = 'pemesanan.php';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bukti Transaksi</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet" />
  <style>
    .card-deck {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
    .card {
        margin: 10px;
    }
    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem;
    }
    .button-container {
        display: flex;
        justify-content: center;
        gap: 10px; /* Jarak antara tombol */
    }

  </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Main Content -->
    <div class="container mt-5 mt-md-0">
        <div class="row">
            <div class="col-12">
            <h2 class="text-center" style="margin-top: 50px;">Bukti Transaksi</h2>
                <div class="card-deck">
                    <?php if(mysqli_num_rows($result) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">ID Transaksi: <?php echo $row['id']; ?></h5>
                                    <p class="card-text"><strong>Nama Pemesan:</strong> <?php echo $row['nama_pemesan']; ?></p>
                                    <p class="card-text"><strong>Nomor Telepon:</strong> <?php echo $row['nomor_telp']; ?></p>
                                    <p class="card-text"><strong>Wisata:</strong> <?php echo $row['wisata']; ?></p>
                                    <p class="card-text"><strong>Waktu Perjalanan:</strong> <?php echo $row['waktu_perjalanan']; ?></p>
                                    <p class="card-text"><strong>Pelayanan Paket:</strong> <?php echo $row['pelayanan_paket']; ?></p>
                                    <p class="card-text"><strong>Jumlah Peserta:</strong> <?php echo $row['jumlah_peserta']; ?></p>
                                    <p class="card-text"><strong>Tanggal Transaksi:</strong> <?php echo $row['tanggal_transaksi']; ?></p>
                                    <?php
                                        // Hitung total pembayaran berdasarkan pilihan paket
                                        $total_pembayaran = 0;
                                        $pelayanan_paket = trim($row['pelayanan_paket']);
                                        if ($pelayanan_paket == 'paket1') {
                                            $total_pembayaran = $row['jumlah_peserta'] * 55000;
                                        } elseif ($pelayanan_paket == 'paket2') {
                                            $total_pembayaran = $row['jumlah_peserta'] * 105000;
                                        }
                                    ?>
                                    <p class="card-text"><strong>Total Pembayaran:</strong> Rp <?php echo number_format($total_pembayaran, 0, ',', '.'); ?></p>
                                    <div class="button-container">
                                        <a href="pemesanan.php" class="btn btn-primary">Kembali ke Pemesanan</a>
                                        <a href="index.php" class="btn btn-secondary">Kembali ke Halaman Utama</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <p class="text-center">Tidak ada bukti transaksi yang ditemukan.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
