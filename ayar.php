<?php

$host = "localhost";
$user = "root";
$pass = "";
$veritabani = "satis";

$baglanti = mysqli_connect($host,$user,$pass,$veritabani);

if ($baglanti == false){
    die("Bağlantı kurulamadı".mysqli_connect_error());
}
echo "Bağlantı Başarılı";




?>
