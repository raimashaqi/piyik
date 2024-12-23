<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIYIK - Pemantau Kesehatan Telur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/LandingStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="landingPage.php">PIYIK.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="landingPage.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="landingPage.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="landingPage.php#our-product">Our Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="landingPage.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="landingPage.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <a href="signin.php" class="login-btn">Login</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-content" data-aos="fade-right">
                        <h1>
                            Pantau kesehatan telur dengan mudah menggunakan
                            <br>
                            <span class="smart-incubator">SMART INCUBATOR</span>
                        </h1>
                        <p class="hero-text">Cukup upload gambar telur anda, dan ketahui kesehatannya!</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-image-wrapper" data-aos="fade-left" data-aos-delay="200">
                        <div class="hero-image-container">
                            <img src="img/Piyik.png" alt="Piyik Logo" class="hero-image">
                        </div>
                        <a href="form.php" class="cek-btn">Cek Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-card" data-aos="fade-up">
                <div class="about-left">
                    <div class="about-side-text">ABOUT</div>
                </div>
                <div class="about-right">
                    <h2 class="about-title">Pentingnya Menjaga Kesehatan Telur</h2>
                    <p class="about-text">
                        Menjaga kesehatan telur sebelum proses penetasan merupakan langkah penting untuk memastikan keberhasilan dan kualitas anak ayam yang dihasilkan. Kondisi telur yang optimal akan mendukung perkembangan embrio secara maksimal, sehingga menghasilkan anak ayam yang sehat dan kuat. Dua faktor utama yang sangat memengaruhi kesehatan telur adalah suhu dan kelembapan. Suhu yang tepat akan menjaga proses metabolisme embrio tetap stabil dan mencegah kerusakan yang disebabkan oleh panas atau dingin yang ekstrem. 
                    </p>
                    <a href="about.php" class="read-more-btn">BACA LEBIH LANJUT</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Product Section -->
    <section id="our-product" class="product-section">
        <div class="container">
            <div class="product-card" data-aos="fade-up">
                <div class="product-left">
                    <div class="product-header" data-aos="fade-right" data-aos-delay="200">
                        <div class="product-title">
                            <h2>Produk Kami</h2>
                            <h3>PIYIK</h3>
                        </div>
                    </div>
                    
                    <div class="highlight-text" data-aos="fade-right" data-aos-delay="400">
                        Inkubator Telur Pintar adalah perangkat modern berbasis IoT yang dirancang untuk memastikan 
                        proses penetasan telur berjalan secara efisien dan optimal. Dengan teknologi pengendalian suhu 
                        otomatis, lampu akan menyala saat suhu terlalu rendah, dan kipas akan aktif saat suhu terlalu tinggi. 
                        Selain itu, pengguna dapat dengan mudah mengatur setpoint suhu sesuai kebutuhan untuk menciptakan 
                        kondisi yang ideal.
                    </div>
                </div>

                <div class="product-right" data-aos="fade-left" data-aos-delay="600">
                    <div class="product-image-wrapper">
                        <div class="product-image-shadow"></div>
                        <img src="img/incubator.jpg" alt="Smart Incubator" class="product-image">
                    </div>
                </div>
            </div>

            <div class="bottom-highlight-text" data-aos="fade-up" data-aos-delay="800">
                Melalui aplikasi Android dan website, Anda dapat memantau suhu dan status inkubator secara real-time kapan saja 
                dan di mana saja. Notifikasi langsung akan dikirimkan jika terjadi perubahan suhu ekstrem atau gangguan sistem, 
                memberikan kenyamanan dan ketenangan dalam pengelolaan. Inkubator ini tidak hanya hemat energi tetapi juga 
                memenuhi standar industri, menjadikannya pilihan tepat untuk kebutuhan penetasan telur Anda.
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="services-container">
            <div class="services-title-wrapper" data-aos="fade-up">
                <h2 class="services-title">Layanan</h2>
                <div class="services-subtitle">Fitur dan Kemampuan Smart Incubator</div>
                <div class="title-underline"></div>
            </div>
            
            <div class="services-content-wrapper">
                <div class="service-image" data-aos="fade-right">
                    <img src="img/about.jpeg" alt="Incubator">
                </div>
                
                <div class="services-grid" data-aos="fade-left">
                    <div class="service-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-icon">
                            <i class="fas fa-temperature-high"></i>
                            <h3>Pengaturan Suhu Otomatis</h3>
                        </div>
                        <div class="service-content">
                            <p>Lampu dan kipas akan menyala otomatis untuk mendapatkan suhu optimal telur</p>
                        </div>
                    </div>

                    <div class="service-card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-icon">
                            <i class="fas fa-clock"></i>
                            <h3>Pemantauan Real-Time</h3>
                        </div>
                        <div class="service-content">
                            <p>Pantau suhu dan kondisi inkubator langsung dari perangkat Android atau website kami, kapan saja dan dimana saja.</p>
                        </div>
                    </div>

                    <div class="service-card" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-icon">
                            <i class="fas fa-cog"></i>
                            <h3>Desain terstandardisasi</h3>
                        </div>
                        <div class="service-content">
                            <p>Dirancang dengan standar industri untuk memastikan keandalan, keamanan, dan efisiensi maksimal dalam setiap proses penetasan.</p>
                        </div>
                    </div>

                    <div class="service-card" data-aos="zoom-in" data-aos-delay="800">
                        <div class="service-icon">
                            <i class="fas fa-sliders-h"></i>
                            <h3>Atur Setpoint Suhu</h3>
                        </div>
                        <div class="service-content">
                            <p>Pengguna dapat mengatur setpoint suhu secara manual sesuai kebutuhan untuk memastikan kondisi optimal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="contact-title">Hubungi Kami</h2>
                    <form class="contact-form" data-aos="fade-right">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mb-3">
                            <input type="tel" class="form-control" placeholder="No. Telepon">
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" rows="5" placeholder="Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn contact-btn w-100">Kirim</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="maps-container" data-aos="fade-left" data-aos-delay="200">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7876744621775!2d107.7227813!3d-6.9191456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c3c5b5b5b5b5%3A0x5b5b5b5b5b5b5b5b!2sJl.%20Pendidikan%20No.15%2C%20Cibiru%20Wetan%2C%20Kec.%20Cileunyi%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2040625!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alamat Section -->
    <section class="alamat-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alamat-card" data-aos="fade-up">
                        <div class="alamat-content">
                            <div class="header-info-content">
                                <div class="info-item">
                                    <div class="info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-text">
                                        Jl. Pendidikan No.15, Cibiru Wetan,<br>
                                        Kec. Cileunyi, Kabupaten Bandung,<br>
                                        Jawa Barat 40625
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="info-text">
                                        0889-7132-3784
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info-text">
                                        Piyik@gmail.com
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-brand">PIYIK.</div>
            <div class="footer-copyright">© 2024 PIYIK All rights reserved</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/landingPage.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>
