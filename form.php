<!DOCTYPE html>
<html>
<head>
<title>Membuat Form</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">  
</head>
<body>

<div class="container">
    <h2>Form Mahasiswa</h2>
    <form action="proses_form.php" method="post">
        <div class="form-group">
            <label for="nim">Nim:</label>
            <input type="number" class="form-control" id="nim" name="nim">
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger btn-md">Batal</button>
        
    </form>
</div>

<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>