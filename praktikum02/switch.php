<?php

$grade = "A";

$keterangan = "";

switch ($grade) {
    case "A" :
        $keterangan = "Keren Binggoww";
        break;
    case "B" :
        $keterangan = "B azzaa";
        break;
    case "C" :
        $keterangan = "Dablek siahh";
        break;
    case "D" :
        $keterangan = "Sangat gembel";
        break;
    default :
        $keterangan = "Not Found";
        break;
}

echo $keterangan
?>