<?php

include("ayar.php");

$urun_id = $_POST["urunid"];
$urun_adi = $_POST["urunadi"]; 
$marka = $_POST["markasi"];
$modeli = $_POST["modeli"];
$fiyati = $_POST["fiyati"];
$STOK = $_POST["stok"];

$sorgu = "INSERT INTO urunler(URUN_ID,URUN_ADI,MARKASI,MODELI,FIYATI,STOK) VALUES($urun_id,'$urun_adi','$marka','$modeli',$fiyati,$STOK)";

$eklendi = mysqli_query($baglanti,$sorgu);







?>

<a href="kayit.php">Yeni Kayıt</a>
