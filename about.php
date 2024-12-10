<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PIYIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/about.css" rel="stylesheet">
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
                        <a class="nav-link" href="landingPage.php#services">Our Product</a>
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

    <!-- About Content -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <div class="yellow-box"></div>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                <h2>Pentingnya Menjaga Kesehatan Telur Sebelum Menetas</h2>
                <p>Menjaga kesehatan telur sebelum proses penetasan sangat penting untuk memastikan keberhasilan dan kualitas anak ayam yang dihasilkan. Dua faktor utama yang mempengaruhi kesehatan telur adalah suhu dan kelembaban.</p>
            </div>
        </div>

        <div class="info-section" data-aos="fade-up">
            <h2>Suhu Ideal Inkubasi</h2>
            <p>Suhu, merupakan salah satu faktor paling krusial dalam proses penetasan telur. Kisaran suhu yang ideal untuk penetasan telur unggas adalah antara 37,5°C hingga 39°C.</p>
            <div class="read-more-container" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="read-more-btn">37.5°C</a>
                <a href="#" class="read-more-btn">39°C</a>
            </div>
        </div>

        <div class="info-section" data-aos="fade-up">
            <h2>Kelembaban yang Tepat</h2>
            <div class="percentage-boxes">
                <div class="percentage-box" data-aos="zoom-in" data-aos-delay="200">
                    <h3>35%</h3>
                    <p>Penyimpanan</p>
                </div>
                <div class="percentage-box" data-aos="zoom-in" data-aos-delay="400">
                    <h3>50-60%</h3>
                    <p>Inkubasi</p>
                </div>
                <div class="percentage-box" data-aos="zoom-in" data-aos-delay="600">
                    <h3>70-80%</h3>
                    <p>Menetas</p>
                </div>
            </div>
        </div>

        <div class="info-section" data-aos="fade-up">
            <h2>Rekomendasi untuk Penyimpanan dan Inkubasi</h2>
            <div class="recommendations-grid">
                <div class="recommendation-card" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-egg"></i>
                    <h4>Pengaturan Kelembaban</h4>
                    <p>Jaga kelembaban pada tingkat yang sesuai untuk setiap tahap penetasan</p>
                </div>
                <div class="recommendation-card" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fas fa-temperature-high"></i>
                    <h4>Pengaturan Suhu</h4>
                    <p>Pertahankan suhu ideal antara 37.5°C hingga 39°C</p>
                </div>
                <div class="recommendation-card" data-aos="zoom-in" data-aos-delay="600">
                    <i class="fas fa-sync"></i>
                    <h4>Pengaturan Suhu</h4>
                    <p>Lakukan pemutaran telur secara teratur</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-brand">PIYIK.</div>
            <div class="footer-copyright">© 2024 PIYIK All rights reserved</div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>
