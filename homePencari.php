<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
session_start();
if (isset($_SESSION['sesi'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Halaman Penyewa Kos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/style-home-penyewa.css">
        <link rel="shortcut icon" href="images/logo.png">
    </head>

    <body>
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-sm bg-light navbar-light" style="position: sticky;">
            <img src="images/logo.png" alt="logo" style="height: 3%; width: 3%; margin: 1% 1% 1% 3%;">
            <div class="col-6" id="nama-user">
                <h4>Hai <?php echo $_SESSION['sesi']; ?></h4>
            </div>
            <ul class="navbar-nav" style="margin-left: 10%;">
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Transaksi Saya
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Pengajuan Sewa</a>
                        <a class="dropdown-item" href="#">Pembatalan Sewa</a>
                        <a class="dropdown-item" href="#">Penyewaan Berlangsung</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifikasi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Lainnya
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Pusat Bantuan</a>
                        <a class="dropdown-item" href="#">Syarat dan Ketentuan</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="navbardrop" data-toggle="dropdown">
                        <img src="images/profil.png" style="margin-left: 10px; margin-top: 5px; height: 30px;" alt="profil">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="logout.php">Keluar</a>
                    </div>
                </li>
            </ul>
            <hr>
        </nav>
        <br>

        <!--SEARCHING BAR-->
        <div class="container" id="cari"><br>
            <h3>Ingin Cari Kos?</h3>
            <p>Dapatkan Info Kos Terbaru di MeKos.</p>
            <form class="form-inline" action="#">
                <input class="form-control mr-sm-2 col-3" type="text" placeholder="Masukkan nama lokasi">
                <button class="btn btn-danger" type="submit" style="padding-left: 3%; padding-right: 3%;">Cari</button>
            </form>
        </div>
        <br><br>
        <hr class="garis"><br>


        <!--PROMO KOS-->
        <div class="container" id="promo">
            <h4>Promo MeKos Minggu Ini</h4>
            <div class="nav-item dropdown" style="margin-left: 1%; margin-right: 2%;">
                <a class="nav-link dropdown-toggle text-danger" href="#" id="navbardrop" data-toggle="dropdown">
                    Pilih Lokasi
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item text-danger" href="#">Bogor</a>
                    <a class="dropdown-item text-danger" href="#">Bekasi</a>
                    <a class="dropdown-item text-danger" href="#">Jakarta</a>
                    <a class="dropdown-item text-danger" href="#">Malang</a>
                    <a class="dropdown-item text-danger" href="#">Semarang</a>
                    <a class="dropdown-item text-danger" href="#">Surabaya</a>
                    <a class="dropdown-item text-danger" href="#">Tangerang</a>
                </div>
            </div>
        </div>
        <div class="container" id="kospromo">
            <div class="d-flex p-4">
                <div class="col-3">
                    <a href="kos.php" class="linkpromo">
                        <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictpromo">
                        <p>
                            <!--nama-->
                            <span><b>Ini adalah nama kos</b></span><br>
                            <!--lokasi-->
                            <span>Ini adalah lokasi kos</span><br>
                            <!--fasilitas-->
                            <span class="small">Ini adalah fasilitas kos</span><br>
                            <!--harga normal-->
                            <span><del>Rp 1.999.999</del></span>
                            <span class="text-danger font-weight-bold"> 10%</span><br>
                            <!--harga promo-->
                            <span><strong>Rp 1.000.000</strong></span>
                        </p>
                    </a>
                </div>
                <div class="col-3">
                    <a href="kos.php" class="linkpromo">
                        <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictpromo">
                        <p>
                            <!--nama-->
                            <span><b>Ini adalah nama kos</b></span><br>
                            <!--lokasi-->
                            <span>Ini adalah lokasi kos</span><br>
                            <!--fasilitas-->
                            <span class="small">Ini adalah fasilitas kos</span><br>
                            <!--harga normal-->
                            <span><del>Rp 1.999.999</del></span>
                            <span class="text-danger font-weight-bold"> 10%</span><br>
                            <!--harga promo-->
                            <span><strong>Rp 1.000.000</strong></span>
                        </p>
                    </a>
                </div>
                <div class="col-3">
                    <a href="kos.php" class="linkpromo">
                        <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictpromo">
                        <p>
                            <!--nama-->
                            <span><b>Ini adalah nama kos</b></span><br>
                            <!--lokasi-->
                            <span>Ini adalah lokasi kos</span><br>
                            <!--fasilitas-->
                            <span class="small">Ini adalah fasilitas kos</span><br>
                            <!--harga normal-->
                            <span><del>Rp 1.999.999</del></span>
                            <span class="text-danger font-weight-bold"> 10%</span><br>
                            <!--harga promo-->
                            <span><strong>Rp 1.000.000</strong></span>
                        </p>
                    </a>
                </div>
                <div class="col-3">
                    <a href="kos.php" class="linkpromo">
                        <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictpromo">
                        <p>
                            <!--nama-->
                            <span><b>Ini adalah nama kos</b></span><br>
                            <!--lokasi-->
                            <span>Ini adalah lokasi kos</span><br>
                            <!--fasilitas-->
                            <span class="small">Ini adalah fasilitas kos</span><br>
                            <!--harga normal-->
                            <span><del>Rp 1.999.999</del></span>
                            <span class="text-danger font-weight-bold"> 10%</span><br>
                            <!--harga promo-->
                            <span><strong>Rp 1.000.000</strong></span>
                        </p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#">
                        <button class="btn btn-danger" style="width: 15%;">Lihat Semua</button>
                    </a>
                </div>
            </div>
        </div>
        <br><br>
        <hr class="garis"><br>

        <!--REKOMENDASI KOS-->
        <div class="container" id="rec">
            <h4>Rekomendasi MeKos</h4>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-danger" href="#" id="navbardrop" data-toggle="dropdown">
                    Pilih Lokasi
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item text-danger" href="#">Bogor</a>
                    <a class="dropdown-item text-danger" href="#">Bekasi</a>
                    <a class="dropdown-item text-danger" href="#">Jakarta</a>
                    <a class="dropdown-item text-danger" href="#">Malang</a>
                    <a class="dropdown-item text-danger" href="#">Semarang</a>
                    <a class="dropdown-item text-danger" href="#">Surabaya</a>
                    <a class="dropdown-item text-danger" href="#">Tangerang</a>
                </div>
            </div>
        </div>
        <div class="container" id="kosrec">
            <div class="d-flex p-4">
                <div class="col-3">
                    <a href="kos.php" class="linkrec">
                        <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictrec">
                        <p>
                            <!--nama-->
                            <span><b>Ini adalah nama kos</b></span><br>
                            <!--lokasi-->
                            <span>Ini adalah lokasi kos</span><br>
                            <!--fasilitas-->
                            <span class="small">Ini adalah fasilitas kos</span><br>
                            <!--harga normal-->
                            <span><del>Rp 1.999.999</del></span>
                            <span class="text-danger font-weight-bold"> 10%</span><br>
                            <!--harga promo-->
                            <span><strong>Rp 1.000.000</strong></span>
                        </p>
                    </a>
                </div>
                <div class="col-3">
                    <a href="kos.php" class="linkrec">
                        <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictrec">
                        <p>
                            <!--nama-->
                            <span><b>Ini adalah nama kos</b></span><br>
                            <!--lokasi-->
                            <span>Ini adalah lokasi kos</span><br>
                            <!--fasilitas-->
                            <span class="small">Ini adalah fasilitas kos</span><br>
                            <!--harga normal-->
                            <span><del>Rp 1.999.999</del></span>
                            <span class="text-danger font-weight-bold"> 10%</span><br>
                            <!--harga promo-->
                            <span><strong>Rp 1.000.000</strong></span>
                        </p>
                    </a>
                </div>
                <div class="col-3">
                    <a href="kos.php" class="linkrec">
                        <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictrec">
                        <p>
                            <!--nama-->
                            <span><b>Ini adalah nama kos</b></span><br>
                            <!--lokasi-->
                            <span>Ini adalah lokasi kos</span><br>
                            <!--fasilitas-->
                            <span class="small">Ini adalah fasilitas kos</span><br>
                            <!--harga normal-->
                            <span><del>Rp 1.999.999</del></span>
                            <span class="text-danger font-weight-bold"> 10%</span><br>
                            <!--harga promo-->
                            <span><strong>Rp 1.000.000</strong></span>
                        </p>
                    </a>
                </div>
                <div class="col-3">
                    <a href="kos.php" class="linkrec">
                        <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictrec">
                        <p>
                            <!--nama-->
                            <span><b>Ini adalah nama kos</b></span><br>
                            <!--lokasi-->
                            <span>Ini adalah lokasi kos</span><br>
                            <!--fasilitas-->
                            <span class="small">Ini adalah fasilitas kos</span><br>
                            <!--harga normal-->
                            <span><del>Rp 1.999.999</del></span>
                            <span class="text-danger font-weight-bold"> 10%</span><br>
                            <!--harga promo-->
                            <span><strong>Rp 1.000.000</strong></span>
                        </p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#">
                        <button class="btn btn-danger" style="width: 15%;">Lihat Semua</button>
                    </a>
                </div>
            </div>
        </div>
        <br><br><br>

        <footer class="page-footer font-small bg-light">
            <div class="container py-4 text-center text-md-left mt-5">
                <div class="row mt-3">
                    <div class="col-6">
                        <h6 class="text-uppercase font-weight-bold">MeKos</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>MeKos memanfaatkan teknologi untuk berkembang dari aplikasi cari kos menjadi aplikasi yang memudahkan calon anak kos
                            untuk booking properti kos dan juga melakukan pembayaran kos. Saat ini kami memiliki lebih dari 2 juta kamar kos yang
                            tersebar di lebih dari 140 kota di seluruh Indonesia.</p>
                    </div>
                    <div class="col-3">
                        <h6 class="text-uppercase font-weight-bold">Kebijakan</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#" class="kebijakan">Kebijakan Privasi</a>
                        </p>
                        <p>
                            <a href="#" class="kebijakan">Syarat dan Ketentuan Umum</a>
                        </p>
                    </div>
                    <div class="col-3" id="kontak">
                        <h6 class="text-uppercase font-weight-bold">Kontak</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-facebook-square"><a href="#" class="kontak">&nbsp; &nbsp; &nbsp;MeKos Atmayanti</a></i>
                        </p>
                        <p>
                            <i class="fa fa-envelope-square"><a href="mailto:me.atmayanti@gmail.com" class="kontak">&nbsp; &nbsp; &nbsp;me.atmayanti@gmail.com</a></i>
                        </p>
                        <p>
                            <i class="fa fa-instagram"><a href="#" class="kontak">&nbsp; &nbsp; &nbsp;MeKos_Atmayanti</a></i>
                        </p>
                        <p>
                            <i class="fa fa-twitter-square"><a href="#" class="kontak">&nbsp; &nbsp; &nbsp;MeKos_Atmayanti</a></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3 bg-secondary text-white">© 2020 Copyright: Atmayanti</div>
        </footer>
    </body>

    </html>
<?php
} else {
    echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
    header('location:login.php');
}
?>