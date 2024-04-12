<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PRAKTIKUM05</title>
    <style>
        body {
            font-family:  Verdana, Geneva, Tahoma, sans-serif;
            background-color: #ffdbd1;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        form {
            margin-top: 20px;
        }
        label {
            display: inline-block;
            width: 120px;
            text-align: right;
            margin-right: 10px;
        }
        .submit {
            width: auto;
            padding: 10px 20px;
            margin-left: 130px;
            background-color: #ffdbd1;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            border: solid black 1px;
        }
    </style>

</head>
<body>
    <h1>Form Nilai Ujian</h1>
    <hr>
    <div class="container">
    <form action="tugas_form05.php" method="POST">
    <table>
        <tbody>
    <label for="nim">NIM : </label>
    <input type="number" name="nim" id="nim" value="NIM" placeholder="NIM">
    <br>
    <br>
    <label for="mk">Pilih MK : </label>
    <select name="mk" id="mk">
        <option value="" selected >--Pilih Mata Kuliah--</option>
        <option value="BASIS DATA">BASIS DATA</option>
        <option value="PEMROGRAMAN WEB">PEMROGRAMAN WEB</option>
        <option value="PPKN">PPKN</option>
        <option value="BINGGRIS">B.INGGRIS</option>
        <option value="STATISTIKA PROBABILITAS">STATISTIKA PROBABILITAS</option>
        <option value="UI/UX">UI/UX</option>
        <option value="KOMUNIKASI EFEKTIF">KOMUNIKASI EFEKTIF</option>

    </select>
    <!-- <input type="text" name="mk" id="mk" value="" placeholder="Pilih Mata Kuliah"> -->
    <br>
    <br>
    <label for="nilai">Nilai : </label>
    <input type="number" name="nilai" id="nilai" value="nilai" placeholder="Nilai">
    <br>
    <br>
    <div class="button">
      <button name="submit" type="submit" class="submit" id="submit">Save</button>
    </div>
    <hr>
    
<?php
if (isset ($_POST['submit'])) {
    echo "<p> NIM : " . $_POST ['nim'] ."<p>";
    echo "<p> Mata Kuliah : " . $_POST ['mk'] ."<p>";
    echo "<p> Nilai : " . $_POST ['nilai'] ."<p>";

    $keterangan ="";

    if ($_POST ['nilai'] >=95) {
        $keterangan = "A";
    } elseif ($_POST ['nilai'] >=85) {
        $keterangan = "B";
    } elseif ($_POST ['nilai'] >=75) {
        $keterangan = "C";
    } elseif ($_POST ['nilai'] >=65) {
        $keterangan = "D";
    } else {
        $keterangan = "TRY AGAIN!";
    }

    echo "<p> Hasil Ujian : " . $keterangan . "<p>";
    
    $grade = "";
    switch ($keterangan) {
        case "A" :
            $grade = "LULUS!";
            break;
        case "B" :
            $grade = "Boleh deh lulus";
            break;
        case "C" :
            $grade = "Perbaikan Nilai Dulu!";
            break;
        case "D" :
            $grade = "Coba Lagi!";
            break;
        default :
            $grade = "ERROR /GAGAL";
            break;
    }

    echo "<p>Grade : " . $grade . "<p>";



}
?>

    </tbody>
    </table>

    </form>
    </div>

</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PRAKTIKUM05</title>
    <style>
        body {
            font-family:  Verdana, Geneva, Tahoma, sans-serif;
            background-color: #ffdbd1;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        form {
            margin-top: 20px;
        }
        label {
            display: inline-block;
            width: 120px;
            text-align: right;
            margin-right: 10px;
        }
        .submit {
            width: auto;
            padding: 10px 20px;
            margin-left: 130px;
            background-color: #ffdbd1;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            border: solid black 1px;
        }
    </style>

</head>
<body>
    <h1>Form Nilai Ujian</h1>
    <hr>
    <div class="container">
    <form action="tugas_form05.php" method="POST">
    <table>
        <tbody>
    <label for="nim">NIM : </label>
    <input type="number" name="nim" id="nim" value="NIM" placeholder="NIM">
    <br>
    <br>
    <label for="mk">Pilih MK : </label>
    <select name="mk" id="mk">
        <option value="" selected >--Pilih Mata Kuliah--</option>
        <option value="BASIS DATA">BASIS DATA</option>
        <option value="PEMROGRAMAN WEB">PEMROGRAMAN WEB</option>
        <option value="PPKN">PPKN</option>
        <option value="BINGGRIS">B.INGGRIS</option>
        <option value="STATISTIKA PROBABILITAS">STATISTIKA PROBABILITAS</option>
        <option value="UI/UX">UI/UX</option>
        <option value="KOMUNIKASI EFEKTIF">KOMUNIKASI EFEKTIF</option>

    </select>
    <!-- <input type="text" name="mk" id="mk" value="" placeholder="Pilih Mata Kuliah"> -->
    <br>
    <br>
    <label for="nilai">Nilai : </label>
    <input type="number" name="nilai" id="nilai" value="nilai" placeholder="Nilai">
    <br>
    <br>
    <div class="button">
      <button name="submit" type="submit" class="submit" id="submit">Save</button>
    </div>
    <hr>
    
<?php
if (isset ($_POST['submit'])) {
    echo "<p> NIM : " . $_POST ['nim'] ."<p>";
    echo "<p> Mata Kuliah : " . $_POST ['mk'] ."<p>";
    echo "<p> Nilai : " . $_POST ['nilai'] ."<p>";

    $keterangan ="";

    if ($_POST ['nilai'] >=95) {
        $keterangan = "A";
    } elseif ($_POST ['nilai'] >=85) {
        $keterangan = "B";
    } elseif ($_POST ['nilai'] >=75) {
        $keterangan = "C";
    } elseif ($_POST ['nilai'] >=65) {
        $keterangan = "D";
    } else {
        $keterangan = "TRY AGAIN!";
    }

    echo "<p> Hasil Ujian : " . $keterangan . "<p>";
    
    $grade = "";
    switch ($keterangan) {
        case "A" :
            $grade = "LULUS!";
            break;
        case "B" :
            $grade = "Boleh deh lulus";
            break;
        case "C" :
            $grade = "Perbaikan Nilai Dulu!";
            break;
        case "D" :
            $grade = "Coba Lagi!";
            break;
        default :
            $grade = "ERROR /GAGAL";
            break;
    }

    echo "<p>Grade : " . $grade . "<p>";



}
?>

    </tbody>
    </table>

    </form>
    </div>

</body>
>>>>>>> b7306a00093ae7ea93957f5b4f9e94d940e70f3d
</html>