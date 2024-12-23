<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kesehatan Telur - PIYIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
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

    <!-- Main Content -->
    <main>
        <h1>CEK KESEHATAN TELUR</h1>
        
        <!-- Steps -->
        <div class="steps">
            <div class="step">
                <div class="step-dot active"></div>
                <span>step 1</span>
            </div>
            <div class="step">
                <div class="step-dot"></div>
                <span>step 2</span>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-container">
        
            
            <h2>ISI INFORMASI DASAR BERIKUT</h2>
            
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="tel" placeholder="No Telepon" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Pilih jenis telur</label>
                        <select required>
                            <option value="" disabled selected>Pilih jenis telur</option>
                            <option value="ayam">Telur Ayam</option>
                            <option value="bebek">Telur Bebek</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <button class="next-btn" onclick="window.location.href='upload.php'">NEXT</button>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-brand">PIYIK.</div>
            <div class="footer-copyright">© 2024 PIYIK All rights reserved</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>