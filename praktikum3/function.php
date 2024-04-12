<?php
function tambah ($nilai1, $nilai2)
{
    echo $nilai1 + $nilai2;
}

tambah (1, 2);     //argumen (dari parameter)
echo "<br>";

function hitungUmur ($tahunLahir)
{
    $tahunSekarang = 2024;
    $hasil = $tahunSekarang - $tahunLahir;
    echo $hasil;
}
hitungUmur (2000) ;

//opsi lain 

function umur($tahunlahir, $tahunsekarang = 2024)
{
    echo $tahunsekarang - $tahunlahir;
}
umur(1920);

?>