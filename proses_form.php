<!DOCTYPE html>
<html>
<head>
<title>Proses Form</title>
</head>
<body>
   <p><h2>Bioadata Mahasiswa</h2></p>
<?php
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"]; 

    echo "NIM: " . $nim . "<br>";
    echo "Nama: " . $nama . "<br>";
    echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
    echo "Alamat: " . $alamat . "<br>";
?>

    <p><a href="form.php">kembali ke form</a></p>  
</body>
</html>