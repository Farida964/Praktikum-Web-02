<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenisKelamin'];
$prodi = $_POST['prodi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

 body {
    margin:0 auto;
    
 }
.isi {
}
    </style>
</head>
<body>

<div class="isi">
<h1>Terima Kasih Sudah Mendaftar di IT Club</h1>
<h5>Nama Lengkap : <?php echo $nama ?></h5>
<h5>NIM : <?php echo $nim ?></h5>
<h5>Jenis Kelamin : <?php echo $jenisKelamin ?></h5>
<h5>Program Studi : <?php echo $prodi ?></h5>
<h5>Keahlian : <?php echo $keahlian ?></h5>
<h5>Domisili : <?php echo $domisili ?></h5>
<h5>Email : <?php echo $email ?></h5>
</div>
</body>
</html>

