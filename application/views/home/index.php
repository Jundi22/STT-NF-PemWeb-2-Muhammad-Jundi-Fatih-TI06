<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CARSRENT - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url('assets/img/mbl.png')?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
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
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Jl. Thamrin, Jakarta, Indonesia</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Senin - Jum'at : 09.00 AM - 05.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+62 812 3457 876</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://id.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/?hl=id"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="<?=base_url('index.php/home')?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img style="width: 55px;" src="<?=base_url('assets/img/mbl.png')?>" alt=""> CarsRent</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?=base_url('index.php/home')?>" class="nav-item nav-link active">Home</a>
                <a href="<?=base_url('index.php/home/about')?>" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <!-- <a href="<?=base_url('index.php/home/booking')?>" class="dropdown-item">Booking</a> -->
                        <a href="<?=base_url('index.php/home/managemen')?>" class="dropdown-item">Managemen</a>
                        <a href="<?=base_url('index.php/home/rental')?>" class="dropdown-item">Rental</a>
                    </div>
                </div>
                <a href="<?=base_url('index.php/home/kontak')?>" class="nav-item nav-link">Contact</a>
                <a href="<?=base_url('index.php/auth/login')?>" class="nav-item nav-link">Sign In</a>
            </div>
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?=base_url('assets/img/bg2.jpg')?>" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// CARSRENT //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Sewa kendaraan lebih mudah dan nyaman</h1>
                                    <a href="<?=base_url('index.php/home/kontak')?>" class="btn btn-primary py-3 px-5 animated slideInDown">Hubungi<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="<?=base_url('assets/img/carousel-1.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?=base_url('assets/img/supir.jpg')?>" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// CARSRENT //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Supir Profesional dan Layanan 24/7</h1>
                                    <a href="<?=base_url('index.php/home/kontak')?>" class="btn btn-primary py-3 px-5 animated slideInDown">Hubungi<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="<?=base_url('assets/img/carousel-2.png')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Layanan 24/7</h5>
                            <p>Kami siap membantu Anda setiap hari selama 24 jam.</p>
                            <!-- <a class="text-secondary border-bottom" href="">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">10 Tahun Pengalaman</h5>
                            <p>Dimiliki dan dikelola oleh orang-orang yang telah berpengalaman lama dibidang jasa rental mobil.</p>
                            <!-- <a class="text-secondary border-bottom" href="">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Mobil</h5>
                            <p>Kondisi mobil masih sangat bagus dan membuat Anda nyaman selama perjalanan</p>
                            <!-- <a class="text-secondary border-bottom" href="">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?=base_url('assets/img/setir2.jpg')?>" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .19);">
                            <h1 class="display-4 text-white mb-0">10 <span class="fs-4">Tahun</span></h1>
                            <h4 class="text-white">Pengalaman</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// Tentang //</h6>
                    <h1 class="mb-4">Mengapa memilih <span class="text-primary">CarsRent</span>?</h1>
                    <p class="mb-4"></p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">
                                        <img src="<?=base_url('assets/img/hp.png')?>" style="width: 45px; height: 45px;" alt="">
                                    </span>
                                </div>
                                <div class="ps-3">
                                    <h6>Akses Mudah & Jaringan Luas</h6>
                                    <span>Reservasi semakin mudah melalui website CarsRent. Dengan dukungan jaringan luas yang tersebar di lebih dari 50 kota di Indonesia, kami siap melayani kebutuhan transportasi Anda.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">
                                    <img src="<?=base_url('assets/img/harga.png')?>" style="width: 45px; height: 45px;" alt="">
                                    </span>
                                </div>
                                <div class="ps-3">
                                    <h6>Harga Bersaing!</h6>
                                    <span>Kami menawarkan harga rental mobil yang kompetitif, kualitas servis yang baik dan menyediakan mobil - mobil yang dirawat secara teratur, serta berasuransi dengan kondisi yang prima.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">
                                    <i class="fa fa-car fa-2x text-primary"></i>
                                    </span>
                                </div>
                                <div class="ps-3">
                                    <h6>Keluaran Terbaru</h6>
                                    <span>Anda tidak perlu khawatir mendapatkan mobil yang sudah tua! CarsRent yang kami sediakan adalah mobil dengan kondisi yang masih sangat bagus yang akan membuat anda nyaman selama dalam perjalanan.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?=base_url('index.php/home/about')?>" class="btn btn-primary py-3 px-5">Baca Selengkapnya<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Varian Kendaraan //</h6>
                <h1 class="mb-5">Mobil</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/alpard.png')?>" style="width: 300px; height: 300px;">
                    <h5 class="mb-0">Rp. 600.000/Hari</h5>
                    <p>TOYOTA ALPHARD</p>
                    <a href="<?=base_url('index.php/login/login')?>" class="btn btn-primary py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-3">
                    <h2 class="mb-0">Rp. 500.000/Hari</h2>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/avanza.png')?>" style="width: 300px; height: 300px;">
                    <h5 class="mb-0">Rp. 300.000/Hari</h5>
                    <p>HONDA AVANZA</p>
                    <a href="<?=base_url('index.php/login/login')?>" class="btn btn-primary py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/xpander.png')?>" style="width: 300px; height: 300px;">
                    <h5 class="mb-0">Rp. 400.000/Hari</h5>
                    <p>MITSUBISHI XPANDER</p>
                    <a href="<?=base_url('index.php/login/login')?>" class="btn btn-primary py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
                <div class="testimonial-item text-center">
                    <img class="p-2 mx-auto mb-3" src="<?=base_url('assets/img/rush.png')?>" style="width: 300px; height: 300px;">
                    <h5 class="mb-0">Rp. 500.000/Hari</h5>
                    <p>TOYOTA RUSH</p>
                    <a href="<?=base_url('index.php/login/login')?>" class="btn btn-primary py-1 px-5">Pilih</a>
                    <!-- <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    

<!-- Fact Start -->
<div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">100</h2>
                    <p class="text-white mb-0">Pengalaman Bertahun-tahun</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">100</h2>
                    <p class="text-white mb-0">Supir Ahli</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">100</h2>
                    <p class="text-white mb-0">Klient Puas</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">100</h2>
                    <p class="text-white mb-0">Proyek Lengkap</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->
   

    


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// TIM MANAJEMEN //</h6>
                <h1 class="mb-5">MANAJEMEN</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?=base_url('assets/img/wahyudin3.jpg')?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/wahyudin-id-430704227/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/coretan_mr.way/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Wahyudin</h5>
                            <small>Marketing / Humas</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?=base_url('assets/img/addina2.jpg')?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/addina-khairinisa-851703227/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/addina.ak/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Addina Khairinisa</h5>
                            <small>Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?=base_url('assets/img/jundi.jpg')?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/muhammad-jundi-fatih-95b706227"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square mx-1" href="https://instagram.com/jundi.fatih?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">M Jundi Fatih</h5>
                            <small>Direktur</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="<?=base_url('assets/img/putra.jpg')?>" alt="">
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/putra-prayoga-7b3838227/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/00puts88/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">M Ramadhan Putra P</h5>
                            <small>Teknisi</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Thamrin, Jakarta</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 812 3457 876</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>carsrent@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Jam Buka</h4>
                    <h6 class="text-light">Senin - Jum'at:</h6>
                    <p class="mb-4">09.00 AM - 05.00 PM</p>
                    <h6 class="text-light">Sabtu - Minggu:</h6>
                    <p class="mb-0">09.00 AM - 01.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Sewa</h4>
                    <a class="btn btn-link" href="">Liburan Keluarga</a>
                    <a class="btn btn-link" href="">Liburan Teman</a>
                    <a class="btn btn-link" href="">Hari Pernikahan</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- <h4 class="text-light mb-4">Newsletter</h4> -->
                    <div class="d-flex">
                       <a href="https://www.youtube.com/watch?v=MEW9vhNBYVI"><img src="<?=base_url('assets/img/yt.png')?>" alt="" style="width: 64px; height: 48px;"></a> 
                        <h1 class="text-light"> YouTube</h1>
                    </div>
                    <!-- <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">CarsRent</a>

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        2022 <a class="border-bottom" href="https://htmlcodex.com"></a> ||
                        Distributed By : <a class="border-bottom" href="https://themewagon.com" target="_blank">4 Pitik - Pemrograman Web</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <!-- <a href="">Home</a>
                            <a href="">Cookies</a> -->
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/lib/wow/wow.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/easing/easing.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/moment.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/moment-timezone.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url('assets/js/main.js')?>"></script>
</body>

</html>