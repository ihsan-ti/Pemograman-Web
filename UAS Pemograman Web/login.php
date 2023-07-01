<?php
session_start();
include_once("config.php");

// Memeriksa apakah form login telah disubmit
if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Melakukan query untuk memeriksa data pengguna
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $query);
    $res = mysqli_num_rows($result);

    // Memeriksa apakah pengguna ditemukan
    if ($res > 0) {
        // Data pengguna ditemukan, simpan username dalam session
        $_SESSION["username"] = $username;
        $_SESSION['submit'] = true;

        // Redirect ke halaman beranda atau halaman lainnya
        header("Location: list-siswa.php");
        exit(); // tambahkan exit() untuk menghentikan eksekusi kode selanjutnya
    } else {
        // Data pengguna tidak ditemukan, tampilkan pesan kesalahan
        echo "<script>
            alert('Login gagal! username atau password yang anda masukkan salah!');
            </script>";
    }
}

mysqli_close($db);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="container">
            <div class="row">
            <h1>Access Required !!!</h1>
                <div class="pembungkus">
                <div class="gambar">
                    <img src="./image/admin.jpg" alt="logo">
                </div>
                <div class="content">
                    <div class="isi">
                    <h2>Login Admin</h2>
                    <?php
                    // Menampilkan pesan error jika terdapat parameter error=1 dalam URL
                    if (isset($_GET['error']) && $_GET['error'] == 1) {
                        echo '<p class="error">Username atau password salah.</p>';
                    }
                    // Menampilkan pesan error jika terdapat parameter error=2 dalam URL
                    if (isset($_GET['error']) && $_GET['error'] == 2) {
                        echo '<p class="error">Terjadi kesalahan koneksi database.</p>';
                    }
                    ?>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit" name= "submit">Login</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
</body>
</html>
