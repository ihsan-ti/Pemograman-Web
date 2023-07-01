<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Jember Utara</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">SMK JUT69</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list-siswa2.php">List Pendaftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
             <div class="container">
                <h3>Siswa Yang Sudah Mendaftar : </h3>
                <a href="form-daftar.php" class="btn btn-primary mt-4" style="background-color: green;">[+] Tambah Baru</a>
            </div>



    <section class="py-5">
        <div class="container">
            <table class="table table-success">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Sekolah Asal</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM calon_siswa";
                    $query = mysqli_query($db, $sql);
                    $no = 1;

                    while($siswa = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$siswa['nama']."</td>";
                        echo "<td>".$siswa['alamat']."</td>";
                        echo "<td>".$siswa['jenis_kelamin']."</td>";
                        echo "<td>".$siswa['agama']."</td>";
                        echo "<td>".$siswa['sekolah_asal']."</td>";
                        echo "<td>";
                        echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-primary'>Edit</a> ";
                        echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-danger'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";

                        $no++;
                    }
                    ?>
                </tbody>
            </table>

            <p class="text-center">Total: <?php echo mysqli_num_rows($query) ?></p>

            <div class="text-center">
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
