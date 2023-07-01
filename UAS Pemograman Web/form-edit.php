<?php
include("config.php");
// kalau tidak ada id di query string 
if ( !isset($_GET['id']) ){
	header('Location: list-siswa.php'); 
}
//ambil id dari query string 
$id = $_GET['id'];
// buat query untuk ambil data dari database 
$sql = "SELECT * FROM calon_siswa WHERE id=$id"; 
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan 
if( mysqli_num_rows ($query) < 1 ){
	die("data tidak ditemukan..."); 
}
?>
<!DOCTYPE html>
<html> 
<head>
    <title>Formulir Edit Siswa | SMK Coding</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
			background-image: url("image/kolam.jpg");
            background-size: cover;
            background-position: center;
			backdrop-filter: blur(2px);

        }

        .form-box {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
			background-color: white;
			box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.3);
    		border-radius: 10px;
        }
		
		.form-overlay {
            background-color: rgba(255, 255, 255, 0.8);

        }
    </style>
</head>
<body>
    <div class="container form-box">
        <header>
            <h3 class="text-center">Formulir Edit Siswa</h3> 
        </header>
        <form action="proses-edit.php" method="POST">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" class="form-control"><?php echo $siswa['alamat'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>
                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <?php $agama = $siswa['agama']; ?>
                    <select name="agama" class="form-control">
                        <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option> 
                        <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option> 
                        <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" name="sekolah_asal" class="form-control" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                </div>
                <div class="form-group text-center">
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary" />
                </div>
            </fieldset>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
