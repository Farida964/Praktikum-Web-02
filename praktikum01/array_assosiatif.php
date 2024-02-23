<?php
$dataDiri = ["nama" => "Ariel", "alamat" => "Citayam Samba samba", "prodi" => "Teknik Informatika", "cita-cita" => "programmer"] ; 

echo $dataDiri["nama"]."<br>";
echo $dataDiri["alamat"]."<br>";
echo $dataDiri["prodi"]."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> cita cita saya adalah menjadi <?php echo $dataDiri["cita-cita"]
    ?></p>
</body>
</html>