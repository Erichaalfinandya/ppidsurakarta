{{-- navbar --}}

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
                    <a href="login" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Login</a>
                    </div>
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
            <!-- Carousel End -->
        </div>
        <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
            <div class="container">
                <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="carilah informasi disini">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->