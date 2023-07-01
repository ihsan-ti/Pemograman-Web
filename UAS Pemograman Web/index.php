<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>SMK Jember Utara 69</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .animated {
            animation-duration: 2.5s;
            animation-fill-mode: both;
        }

        .fade-in {
            animation-name: fadeIn;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <a class="navbar-brand" href="#">SMK JUT69</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list-siswa2.php">List Pendaftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        <img src="./image/gedung-sekolah.jpg" alt="gedung" style="width: 100%;" class="animated fade-in">
        <div class="hero d-flex align-items-center justify-content-center">
            <div class="container text-center">
                <h1>Selamat Datang di Portal SMK Jember Utara 69</h1>
                <p class="lead">Portal Informasi Tes Masuk Sekolah Menengah Kejuruan Jember Utara 69</p>
            </div>
        </div>
    </header>

    <section class="content py-5">
        <div class="container">
            <h2 class="mb-4">Informasi Terkini</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">List Pendaftar</h3>
                            <p class="card-text">List Pendaftar Terkini Penerimaan Murid Baru SMK Jember Utara 69</p>
                            <a href="list-siswa2.php" class="btn btn-primary">Lihat Disini</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Total Siswa Terdaftar :</h3>
                            <?php
                            $sql = "SELECT * FROM calon_siswa";
                            $query = mysqli_query($db, $sql);
                            $total_siswa = mysqli_num_rows($query);
                            ?>
                            <p class="card-text text-center" style="font-size: 50px; color: blue;"><?php echo $total_siswa; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-secondary text-light py-3">
        <div class="container text-center">
            <p>Hak Cipta &copy; 2023 SMK Jember Utara 69. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
