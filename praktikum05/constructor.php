<<<<<<< HEAD
<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;
    
    function __construct($nama, $warna, $tempatOperasi) //construct untuk mengisi properti yang masih kosong (note: gunakan this)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }

}

//panggil class kendaraan dengan mengisi parameternya
$kendaraan = new Kendaraan("mobil", "pink", "darat");
echo $kendaraan ->nama;
echo "<br>";
echo $kendaraan ->warna;
echo "<br>";
echo $kendaraan ->tempatOperasi;
echo "<br>";

=======
<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;
    
    function __construct($nama, $warna, $tempatOperasi) //construct untuk mengisi properti yang masih kosong (note: gunakan this)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }

}

//panggil class kendaraan dengan mengisi parameternya
$kendaraan = new Kendaraan("mobil", "pink", "darat");
echo $kendaraan ->nama;
echo "<br>";
echo $kendaraan ->warna;
echo "<br>";
echo $kendaraan ->tempatOperasi;
echo "<br>";

>>>>>>> b7306a00093ae7ea93957f5b4f9e94d940e70f3d
?>