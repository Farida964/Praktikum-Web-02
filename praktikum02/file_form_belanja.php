<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
  <style>
    body {
      padding: 20px;
    }
    form {
      max-width: 600px;
      margin:0 auto;
    }
    
  </style>
</head>
<body>
<form action="file_form_belanja.php" method="POST">
  <h1>Belanja Online</h1>
  <hr>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Custumer</label> 
    <div class="col-8">
      <input id="text1" name="nama" type="text" class="form-control" placeholder="Nama Customer">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Radio Buttons</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="number" class="form-control" placeholder="Jumlah">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>

<?php
if (inset ($_POST["name"])) {
  echo "<p> Nama Costumer :" .$_POST["name"]  . "</p>";
}


?>

</body>
</html>










