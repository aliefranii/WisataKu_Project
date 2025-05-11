<?php
// Start the session
session_start();

// Include file koneksi.php
include 'koneksi.php';

// Query untuk mengambil semua data transaksi
$query = "SELECT * FROM transaksi";
$result = mysqli_query($conn, $query);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    echo "<script>
            alert('Terjadi kesalahan dalam mengambil data transaksi: " . mysqli_error($conn) . "');
            window.location.href = 'index_admin.php';
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
                <a href="index_admin.php" class="btn btn-secondary float-right" style="margin-top: 50px;">Back</a>
                <h2 class="text-center" style="margin-top: 50px;">Bukti Transaksi</h2>
                <div class="card-deck">
                    <?php if(mysqli_num_rows($result) > 0): ?>
                        <?php 
                        $count = 0;
                        while($row = mysqli_fetch_assoc($result)): 
                            if ($count % 3 == 0 && $count != 0): ?>
                                </div><div class="card-deck">
                            <?php endif; ?>
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
                                        if ($row['pelayanan_paket'] === 'paket1') {
                                            $total_pembayaran = $row['jumlah_peserta'] * 55000;
                                        } elseif ($row['pelayanan_paket'] === 'paket2') {
                                            $total_pembayaran = $row['jumlah_peserta'] * 105000;
                                        }
                                    ?>
                                    <p class="card-text"><strong>Total Pembayaran:</strong> Rp <?php echo number_format($total_pembayaran, 0, ',', '.'); ?></p>
                                </div>
                            </div>
                            <?php 
                            $count++;
                        endwhile; ?>
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
