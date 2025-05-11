<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Jika belum login, redirect ke halaman login
    header("location: login.php");
    exit();
}

// Auto-logout when the tab is closed
echo '<script>
    window.onbeforeunload = function() {
        fetch("logout.php", { method: "POST" });
    }
</script>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Wisata</title>
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
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">ParepareKu</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li><a class="nav-link py-3 px-0 px-lg-3 rounded nav-link-green" href="#page-top">Beranda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="list_bukti_transaksi.php">Admin</a></li>
                    </ul>                    
                </div>
            </div>
        </nav>        
            <div class="container-fluid p-0">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/wisata/pasir_putih_tonrangeng.jpg" class="d-block w-100 carousel-image" alt="Paputo Beach">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-over-image">Paputo Beach</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/wisata/pantai_mattirotasi.jpg" class="d-block w-100 carousel-image" alt="Pantai Mattirotasi">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-over-image">Pantai Mattirotasi</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/wisata/Monumen_Habibie_Ainun.jpg" class="d-block w-100 carousel-image" alt="Monumen Habibie Ainun">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-over-image">Monumen Habibie Ainun</h3>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>             
        <section class="page-section portfolio" id="Wisata">
            <div class="container">
                <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">DAFTAR WISATA</h3>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/wisata/Monumen_Habibie_Ainun.jpg" alt="Monumen_Habibie_Ainun" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/wisata/pantai_mattirotasi.jpg" alt="pantai_mattirotasi" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/wisata/pasir_putih_tonrangeng.jpg" alt="pasir_putih_tonrangeng" />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/wisata/Tonrangeng_River_Side.jpg" alt="Tonrangeng_River_Side" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/wisata/goa_kalelawar.jpg" alt="goa_kalelawar" />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/wisata/kebun_raya_jompie.jpg" alt="kebun_raya_jompie" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="Paket">
            <div class="container">
                <!-- About Section Heading-->
                <h3 class="page-section-heading text-center text-uppercase text-white">PAKET WISATA</h3>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                    <!-- Table Section -->
                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Paket 1<br>Min 20 Orang</th>
                                        <th>Paket 2<br>Min 25 Orang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rp.55.000,-/org</td>
                                        <td>Rp.105.000,-/org</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Welcome Drink dan Snack 1x<br>
                                            Ice Breaking<br>
                                            Fun Games<br>
                                            Makan & Minum 1 x<br><br><br><br><br>

                                            <b>
                                                Fasilitas:
                                            </b><br>
                                            Tempat, Sound Sistem Asuransi, Trainer, Pemandu, Free Parkir, Free Toilet


                                        </td>
                                        <td>Welcome Drink dan Snack 1x<br>
                                            Ice Breaking<br>
                                            Fun Games<br>
                                            Jembatan Goyang<br>
                                            Outbound<br>
                                            Fun Game, Ice Breaking<br>
                                            Makan & Minum 1 x<br><br>

                                            <b>
                                                Fasilitas:
                                            </b><br>
                                            Tempat, Sound Sistem Asuransi, Trainer, Pemandu, Free Parkir, Free Toilet


                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- YouTube Video Section -->
                    <div class="col-md-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="391px" src="https://www.youtube.com/embed/KGXC5JalwF4" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; M.ALIFFRANII</small></div>
        </div>
        <!-- Portfolio Modals-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="portfolio-modal-title text-secondary text-uppercase mb-0">Monumen Cinta Sejati Habibie Ainun</h5>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/wisata/Monumen_Habibie_Ainun.jpg" alt="Monumen_Habibie_Ainun" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Monumen ini mengenang kisah cinta Presiden ke-3 RI, BJ Habibie dan Ainun. Terletak di Lapangan Andi Makkasau, Jl. Karaeng Burane, monumen ini menjadi ikon Festival Lovely Habibie Ainun. Malam hari, monumen ini terlihat indah dengan hiasan lampu-lampu dan air mancur.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="portfolio-modal-title text-secondary text-uppercase mb-0">Pantai Mattirotasi</h5>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/wisata/pantai_mattirotasi.jpg" alt="pantai_mattirotasi" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Pantai Mattirotasi adalah pantai terpanjang di Kota Parepare, yang terletak di Jalan Bau Massepe. Dari pantai ini, Anda dapat menikmati pemandangan Pulau Ujung Lero yang terletak di sebelah barat, seolah-olah dipisahkan oleh laut. Pantai ini juga menawarkan pemandangan laut yang indah saat senja, kapal-kapal penumpang yang berlayar, serta warung kopi, kafe, dan restoran.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="portfolio-modal-title text-secondary text-uppercase mb-0">Pantai Pasir Putih Tonrangeng</h5>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/wisata/pasir_putih_tonrangeng.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Pantai Tonrangeng, yang sering disebut Paputo, adalah pantai berpasir putih yang terletak di Kelurahan Lumpue, Kecamatan Bacukiki Barat, Kota Parepare. Keistimewaan pantai ini adalah pasir putih yang lembut dan jarang ditemukan di Parepare. Anda dapat bersantai di gazebo sambil menikmati suara deburan ombak dan udara segar. Pantai Paputo juga memiliki kafe yang menyajikan makanan dan minuman dengan harga terjangkau. Harga tiket masuknya hanya Rp 5.000 per orang.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tonrangeng River Side</h5>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/wisata/pasir_putih_tonrangeng.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Tonrangeng River Side adalah ruang terbuka hijau yang dikenal sebagai kawasan wisata kuliner dan susur Sungai Karajae. Terletak di Lumpue, Kecamatan Bacukiki Barat, dekat Rumah Sakit Type B Plus dr. Hasri Ainun Habibie, tempat ini menawarkan berbagai aktivitas seperti ski air, jetski, selancar angin, dan parasailing. Pemandangan sungai yang tenang membuatnya cocok untuk self-healing.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="portfolio-modal-title text-secondary text-uppercase mb-0">Goa Kalelawar</h5>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/wisata/goa_kalelawar.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Gua Tompangnge terletak di Kelurahan Wattang Bacukiki, Kecamatan Bacukiki. Gua ini juga dikenal sebagai “gua kelelawar” karena kelelawar sering menggantung di langit-langit gua. Gua ini cocok untuk petualangan, dan di sekitarnya terdapat air terjun yang mengalir dari akar-akaran di puncak bukit.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="portfolio-modal-title text-secondary text-uppercase mb-0">Kebun Raya Jompie</h5>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/wisata/kebun_raya_jompie.jpg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Kebun Raya Jompie adalah hutan kota seluas 13,5 hektare yang menjadi pusat koleksi dan konservasi tumbuhan kawasan pesisir Wallacea. Objek wisata ini menawarkan pemandangan Kota Parepare dari pesisir teluk serta berbagai jenis tumbuhan langka. Selain itu, tersedia fasilitas seperti taman, kolam renang, tempat istirahat, dan spot berfoto menarik.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
