<<<<<<< HEAD
<?php
class hewanMamalia  //diisi oleh function = perilaku (bisa apa aja), properti = bentukannya (apa yang dia punya), atribut = hal yang melekat pada class
{
    public $warna;
    public $namaHewan;
    public $habitat;
    
    
    function makan()
    {
        return "Mamalia Makan";
    }

    function minum()
    {
        return "Mamalia Minum";
    }
    function menyusui()
    {
        return "Mamalia Menyusui";
    }
}


// cara memanggil function = menggunakan object -> simpan ke object (gunakan keyword 'new')
$mamalia = new hewanMamalia ();
//tampilkan isi class (tanda panah, lalu sebut functionnya)
$mamalia -> namaHewan = "Lumba-lumba";
echo $mamalia->namaHewan;
echo "<br>";
echo $mamalia->warna = "Abu-abu";
echo "<br>";
echo $mamalia->habitat = "Laut";
echo "<br>";

echo $mamalia -> makan();
echo "<br>";
echo $mamalia -> minum();
echo "<br>";
echo $mamalia -> menyusui();
echo "<br>";


=======
<?php
class hewanMamalia  //diisi oleh function = perilaku (bisa apa aja), properti = bentukannya (apa yang dia punya), atribut = hal yang melekat pada class
{
    public $warna;
    public $namaHewan;
    public $habitat;
    
    
    function makan()
    {
        return "Mamalia Makan";
    }

    function minum()
    {
        return "Mamalia Minum";
    }
    function menyusui()
    {
        return "Mamalia Menyusui";
    }
}


// cara memanggil function = menggunakan object -> simpan ke object (gunakan keyword 'new')
$mamalia = new hewanMamalia ();
//tampilkan isi class (tanda panah, lalu sebut functionnya)
$mamalia -> namaHewan = "Lumba-lumba";
echo $mamalia->namaHewan;
echo "<br>";
echo $mamalia->warna = "Abu-abu";
echo "<br>";
echo $mamalia->habitat = "Laut";
echo "<br>";

echo $mamalia -> makan();
echo "<br>";
echo $mamalia -> minum();
echo "<br>";
echo $mamalia -> menyusui();
echo "<br>";


>>>>>>> b7306a00093ae7ea93957f5b4f9e94d940e70f3d
?>