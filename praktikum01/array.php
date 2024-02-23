<?php 

	$animals = ["Paus", "Tokek", "Ikan", "Burung", "Lumba-lumba"];
	echo $animals[0]; 
	echo "<br>";
	echo $animals[3]; 
	echo "<br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>Nama-nama hewan</p>
	<ul>
		<?php
			foreach($animals as $animal) {
				echo "<li>" .$animal. "</li>"; 
			}
		?>
	</ul>
</body>
</html>