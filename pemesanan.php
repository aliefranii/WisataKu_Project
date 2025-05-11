<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan</title>
  <!-- Bootstrap CSS -->
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />

</head>
<style>
    .card {
        margin-top: 150px;
    }
</style>
<body class="d-flex flex-column min-vh-100">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">ParepareKu</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li><a class="nav-link py-3 px-0 px-lg-3 rounded nav-link-green" href="index.php">Beranda</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php#Wisata">Wisata</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php#Paket">Paket Wisata</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pemesanan.php">Pemesanan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container mt-5 mt-md-0">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Pemesanan</h5>
                        <form id="pemesananForm" action="proses_pemesanan.php" method="POST">
                            <div class="mb-3">
                                <label for="namaPemesan" class="form-label">Nama Pemesan</label>
                                <input type="text" class="form-control" id="namaPemesan" name="namaPemesan" placeholder="Masukkan nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomerTelp" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="nomerTelp" name="nomerTelp" placeholder="Masukkan nomor telepon" required>
                            </div>
                            <div class="mb-3">
                                <label for="wisata" class="form-label">Wisata</label>
                                <select class="form-select" id="wisata" name="wisata" required>
                                    <option value="" selected disabled>Pilih Wisata</option>
                                    <option value="Monumen Habibie Ainun">Monumen Habibie Ainun</option>
                                    <option value="Pantai Mattirotasi">Pantai Mattirotasi</option>
                                    <option value="Kebun Raya Jompie">Kebun Raya Jompie</option>
                                    <option value="Pasir Putih Tonrangeng">Pasir Putih Tonrangeng</option>
                                    <option value="Tonrangeng River Side">Tonrangeng River Side</option>
                                    <option value="Goa Kalelawar">Goa Kalelawar</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="waktuPerjalanan" class="form-label">Waktu Perjalanan</label>
                                <input type="date" class="form-control" id="waktuPerjalanan" name="waktuPerjalanan" required>
                            </div>
                            <div class="mb-3">
                                <label for="pelayananPaket" class="form-label">Pelayanan Paket Perjalanan</label>
                                <select class="form-select" id="pelayananPaket" name="pelayananPaket" required>
                                    <option value="" selected disabled>Pilih Paket</option>
                                    <option value="paket1">Paket 1</option>
                                    <option value="paket2">Paket 2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jumlahPeserta" class="form-label">Jumlah Peserta</label>
                                <input type="number" class="form-control" id="jumlahPeserta" name="jumlahPeserta" required>
                                <label id="warningLabel" class="text-danger" style="display:none;"></label>
                            </div>
                            <button type="submit" class="btn btn-primary" disabled>Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
