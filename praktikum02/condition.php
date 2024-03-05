<?php
//if else
$nilai = 90;

$keterangan ="";

if ($nilai > 90) {
    $keterangan = "Sangat Baik";
} elseif ($nilai > 70 || $nilai <= 90) { 
    $keterangan = "Boleh juga";
} else {
    $keterangan = "Not Found";
}

echo $keterangan;
