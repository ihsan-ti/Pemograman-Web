<!DOCTYPE html>
<html> 
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Jember Utara 69</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
			background-image: url("image/lapangan-basket.jpg");
            background-size: cover;
            background-position: center;
			backdrop-filter: blur(5px);

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
	<h3 class="text-center">Form Calon Siswa Baru</h3>
        <form action="proses-pendaftaran.php" method="POST"> 
            <fieldset>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" required>
                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" required>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <select name="agama" class="form-control" required>
                        <option>Islam</option> 
                        <option>Kristen</option> 
                        <option>Hindu</option> 
                        <option>Budha</option> 
                        <option>Atheis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" name="sekolah_asal" class="form-control" placeholder="Nama sekolah" required>
                </div>
                <div class="form-group text-center">
                    <input type="submit" value="Daftar" name="daftar" class="btn btn-primary" />
                </div>
            </fieldset> 
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
