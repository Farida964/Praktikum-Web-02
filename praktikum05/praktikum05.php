<<<<<<< HEAD
<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;

    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 2.3) {
            echo "Good Job";
        } else {
            echo "Kamu pasti Gibran";
        }
    }
}

$mahasiswa = new Mahasiswa("Farida", "12345", "samba samba", "TI", "4.00");
echo "Nama Lengkap: " . $mahasiswa-> namaMahasiswa . "<br>";
echo "NIM: " . $mahasiswa->nim . "<br>";
echo "Domisili: " . $mahasiswa->domisili . "<br>";
echo "Prodi: " . $mahasiswa->prodi . "<br>";
echo "IPK: " . $mahasiswa->ipk . "<br>";
$mahasiswa->setPredikatIPK($mahasiswa ->ipk);




// $mahasiswa->setPredikatIPK($ipk); //hasil nya akan masuk ke else karena langsung ke print dan tidak memiliki nilai



=======
<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;

    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 2.3) {
            echo "Good Job";
        } else {
            echo "Kamu pasti Gibran";
        }
    }
}

$mahasiswa = new Mahasiswa("Farida", "12345", "samba samba", "TI", "4.00");
echo "Nama Lengkap: " . $mahasiswa-> namaMahasiswa . "<br>";
echo "NIM: " . $mahasiswa->nim . "<br>";
echo "Domisili: " . $mahasiswa->domisili . "<br>";
echo "Prodi: " . $mahasiswa->prodi . "<br>";
echo "IPK: " . $mahasiswa->ipk . "<br>";
$mahasiswa->setPredikatIPK($mahasiswa ->ipk);




// $mahasiswa->setPredikatIPK($ipk); //hasil nya akan masuk ke else karena langsung ke print dan tidak memiliki nilai



>>>>>>> b7306a00093ae7ea93957f5b4f9e94d940e70f3d
?>