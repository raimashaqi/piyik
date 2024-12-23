<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload - PIYIK</title>
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
                <div class="step-dot active"></div>
                <span>step 2</span>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            <h2>UPLOAD GAMBAR TELUR</h2>
            <h3>Anda dapat mengupload beberapa gambar. Satu gambar hanya terdiri dari 1 telur</h3>
            <div class="upload-box">
                <div class="upload-area">
                <svg class="camera-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                    <circle cx="12" cy="13" r="4"/>
                </svg>
                    <div class="drag-text">Drag and drop file here</div>
                    <div>or</div>
                    <button class="pilih-file-btn">Pilih File</button>
                    <div class="file-info">Anda dapat mengupload file dengan format .jpg, .jpeg, atau .png maksimal 10 MB</div>
                </div>
            </div>
        </div>

        <a href="hasil.php" class="next-btn">SUBMIT</a>
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