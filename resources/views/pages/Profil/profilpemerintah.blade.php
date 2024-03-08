<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PPID Kota Surakarta</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <!-- <img src="img/logo.png" alt="logo"> -->
                    <img src="img/logo.png" class="img-fluid" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu m-0">
                                <a href="profilpemerintah.html" class="dropdown-item">Profil Pemerintah Kota Surakarta</a>
                                <a href="profilppid.html" class="dropdown-item">Profil PPID Kota Surakarta</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Prosedur</a>
                            <div class="dropdown-menu m-0">
                                <a href="prosedurlayanan.html" class="dropdown-item">Prosedur Permohonan Layanan Informasi</a>
                                <a href="prosedurkeberatan.html" class="dropdown-item">Prosedur Pengajuan Keberatan Informasi</a>
                                <a href="prosedursengketa.html" class="dropdown-item">Prosedur Permohonan Penyelesaian Sengketa</a>
                                <a href="standarinformasi.html" class="dropdown-item">standar Pengumuman Informasi</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                            <div class="dropdown-menu m-0">
                                <a href="maklumatpelayanan.html" class="dropdown-item">Maklumat Pelayanan</a>
                                <a href="daftarinformasi.html" class="dropdown-item">Daftar Informasi Publik</a>
                                <a href="informasiberkala.html" class="dropdown-item">Informasi Berkala</a>
                                <a href="informasisertamerta.html" class="dropdown-item">Informasi Serta Merta</a>
                                <a href="informasisetiapsaat.html" class="dropdown-item">Informasi Setiap Saat</a>
                                <a href="informasidikecualikan.html" class="dropdown-item">Informasi Dikecualikan</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Berita</a>
                            <div class="dropdown-menu m-0">
                                <a href="beritapemerintah.html" class="dropdown-item">Berita Pemerintah</a>
                                <a href="beritappid.html" class="dropdown-item">Berita PPID</a>
                                <a href="beritadiskominfo.html" class="dropdown-item">Berita Diskominfo</a>
                            </div>
                        </div>
                        <a href="kontak.html" class="nav-item nav-link">Kontak</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Galeri</a>
                            <div class="dropdown-menu m-0">
                                <a href="galeripemerintah.html" class="dropdown-item">Galeri Pemerintah</a>
                                <a href="galerippid.html" class="dropdown-item">Galeri PPID</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Laporan</a>
                            <div class="dropdown-menu m-0">
                                <a href="laporanpemerintah.html" class="dropdown-item">Laporan Pemerintah</a>
                                <a href="laporanppid.html" class="dropdown-item">Laporan PPID</a>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Login</a>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 1000px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 2px;">SELAMAT DATANG DI PORTAL</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">PPID PEMERINTAH KOTA SURAKARTA</h1>
                                    <p class="mb-5 fs-5">Kompleks Balaikota Surakarta Jl. Jend Sudirman, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah,57133
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 1000px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 2px;">SELAMAT DATANG DI PORTAL</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">PPID PEMERINTAH KOTA SURAKARTA</h1>
                                    <p class="mb-5 fs-5">Kompleks Balaikota Surakarta Jl. Jend Sudirman, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah,57133
                                    </p>>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 1000px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 2px;">SELAMAT DATANG DI PORTAL</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">PPID PEMERINTAH KOTA SURAKARTA</h1>
                                    <p class="mb-5 fs-5">Kompleks Balaikota Surakarta Jl. Jend Sudirman, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah,57133
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Profil</h2>
                <h1 class="display-4 text-uppercase">Profile Pimpinan Kota Surakarta</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/walikota.jpeg" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">Gibran Rakabuming R</h4>
                            <p class="text-white m-0">Walikota Surakarta</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/wakilwalikota.png" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">Teguh Prakosa</h4>
                            <p class="text-white m-0">Wakil Walikota Surakarta</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/sekretarispemerintah.jpeg" alt="">
                            <div class="team-overlay w-100 h-100 position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 mx-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-dark border-inner text-center p-4">
                            <h4 class="text-uppercase text-primary">IR. Ahyani, MA</h4>
                            <p class="text-white m-0">Sekretaris Pemerintah Kota Surakarta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Visi Misi -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Profil</h2>
                <h1 class="display-4 text-uppercase">Profile Pimpinan Kota Surakarta</h1>
            </div>
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/about.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                VISI
              </h2>
            </div>
            <p>
                MEWUJUDKAN SURAKARTA SEBAGAI KOTA BUDAYA YANG MODERN, TANGGUH, GESIT, KREATIF DAN SEJAHTERA
            </p>
            <p>
                Visi tersebut sebagai pemandu gerak bersama antara pemerintahan dan segenap warganya 
                untuk membangun karakter Kota Surakarta, beralaskan semangat gotong royong sebagai 
                modal sosial-budaya. Kota Surakarta terus tumbuh dan berkembang dalam aktivitas sosial, 
                ekonomi, dan budaya, tanpa meninggalkan jati diri dan karakternya sebagai kota dengan 
                warisan budaya yang kental, sebagai the Spirit of Java. Upaya mewujudkan kota modern dan 
                masyarakat yang sejahtera bermodalkan warisan budaya gotong royong dilandasi dengan 
                karakter kota: Tangguh, Gesit, Kreatif, dan Sejahtera.
            </p>
            <div class="btn-box">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end visi misi section -->
  
        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> Jl. Jend. Sudirman, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57133</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> ppid@surakarta.go.id</a>
                            <a href=""><i class="fas fa-phone me-2"></i> (0271) 2931669</a>
                            <a href="" class="mb-3"><i class="fas fa-clock me-2"></i> Senin - Kamis : 07:15 - 16:00 
                            </i>Jumat : 07:00 - 11:30</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Pages</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Profil</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Prosedur</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Layanan</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Berita</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Kontak</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Galeri</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Laporan</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                        </div>
                    </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>