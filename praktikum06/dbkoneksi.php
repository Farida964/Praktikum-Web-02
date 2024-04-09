<?php
//konfigurasi db
//buat variabel $host
$host = "localhost";
$dbname = "dbpuskesmas"; //nama variabel databasenya
$user = "root";
$pass = "";  //password

//tutup konfigurasi
//sambungkan mysql ke localhost
$dsn = "mysql:host=$host; dbname=$dbname";

//koneksiin
$dbh = new PDO($dsn, $user, $pass);   //pdo adalah objek bawaan php






?>