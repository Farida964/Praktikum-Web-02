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
      padding: 10px;
      margin-top: 20px;
      margin-left: 10px;
      font-family: 'Times New Roman', Times, serif;
    }
    form {
      max-width: 600px;
    }
    #button {
        background-color: rgb(53, 198, 9);
        border: rgb(53, 198, 9);
    }
    
  </style>
</head>
<body>
<h1>Belanja Online</h1>
<hr>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ;?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesinCuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" id="button">Kirim</button>
    </div>
  </div>
</form>
 <hr>
<?php

// $produk = "tv"; 
// $total = "" * $jumlah;
// if ($produk == $tv) {
//   $harga = 4.200.000;
//   $total = $harga * $jumlah
// } elseif ($produk == $kulkas) {
//   $harga = 3.100.000;
//   $total = $harga * $jumlah
// } elseif ($produk == $mesinCuci) {
//   $harga = 3.920.000;
//   $total = $harga * $jumlah
// } else {
//   $total = "error"
// }



    if (isset ($_POST["nama"])) {
        echo "<p>Nama Customer : " . $_POST["nama"] . "</p>";
        echo "<p>Pilihan Produk : " . $_POST["produk"] . "</p>";
        echo "<p>Jumlah Produk : " . $_POST["jumlah"] . "</p>";
        echo "<p>Total Belanja : " . $_POST["total"] . "</p>";
    }

// function harga($produk)
// {
//     echo $produk
// }    
?>

</body>
</html>