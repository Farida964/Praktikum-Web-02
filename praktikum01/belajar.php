<?php 
$namaMahasiswa = [
    ["Jono", "TI", "baik"],
    ["Ariel", "TI", "baik"],
    ["Tono", "SI", "cukup"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>yuhuuu 
        <br> 
        <?php 
        foreach ($namaMahasiswa as $nama) {
            echo "Nama : " .$nama[0]. "<br>";
            echo "Jurusan : " .$nama[1]. "<br>";
        }
        ?>
    </p>
</body>
</html>