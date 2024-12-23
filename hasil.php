<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Klasifikasi - PIYIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/form.css" rel="stylesheet">
    <style>
        .result-section {
            padding: 80px 0;
            min-height: calc(100vh - 180px); /* Tinggi viewport dikurangi navbar dan footer */
        }

        .result-container {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .result-title {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .result-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }

        .result-table th {
            background: #FFD803;
            color: #333;
            padding: 15px;
            text-align: center;
            font-weight: 600;
        }

        .result-table td {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
        }

        .result-row-fertile {
            background-color: #d4edda;
            color: #155724;
            transition: all 0.3s ease;
        }

        .result-row-infertile {
            background-color: #f8d7da;
            color: #721c24;
            transition: all 0.3s ease;
        }

        .result-row-fertile:hover,
        .result-row-infertile:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .result-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .back-btn {
            background: #FFD803;
            color: #333;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #FFB800;
            color: #333;
            transform: translateY(-2px);
        }
    </style>
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

    <!-- Result Section -->
    <section class="result-section">
        <div class="container">
            <div class="result-container">
                <h2 class="result-title">Hasil Klasifikasi Telur</h2>
                <div class="table-responsive">
                    <table class="result-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama File</th>
                                <th>Status</th>
                                <th>Akurasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Contoh data (ganti dengan data sebenarnya dari database atau hasil klasifikasi)
                            $results = [
                                [
                                    'image' => 'path/to/image1.jpg',
                                    'filename' => 'telur1.jpg',
                                    'status' => 'Subur',
                                    'accuracy' => '95%'
                                ],
                                [
                                    'image' => 'path/to/image2.jpg',
                                    'filename' => 'telur2.jpg',
                                    'status' => 'Tidak Subur',
                                    'accuracy' => '92%'
                                ]
                            ];

                            foreach ($results as $index => $result) {
                                $rowClass = $result['status'] === 'Subur' ? 'result-row-fertile' : 'result-row-infertile';
                                echo "<tr class='$rowClass'>";
                                echo "<td>" . ($index + 1) . "</td>";
                                echo "<td><img src='{$result['image']}' class='result-image' alt='Telur'></td>";
                                echo "<td>{$result['filename']}</td>";
                                echo "<td>{$result['status']}</td>";
                                echo "<td>{$result['accuracy']}</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center">
                    <a href="form.php" class="back-btn">Kembali</a>
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
</body>
</html>
