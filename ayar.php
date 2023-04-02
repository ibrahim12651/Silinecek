<?php 

$host = "localhost";
$user = "root";
$pass = "";
$database = "market";

$baglanti= mysqli_connect($host,$user,$pass,$database);

if($baglanti == false){
    die("Bağlantı Hatası:" . mysqli_connect_error());
}
echo "Bağlantı Başaralı";


?>