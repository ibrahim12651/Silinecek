<?php

include("ayar.php");

$sorgu = "SELECT * FROM malzemeler";
$sorgu = "UPDATE test_tablo SET email=‘ZZZZ@mail.com’ WHERE id=1";
$sorgu =  "DELETE FROM test_tablo WHERE id=1 ";


if($veri= mysqli_query($baglanti,$sorgu)){
    if(mysqli_num_rows($veri) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Ad</th>";
                echo "<th>Soyad</th>";
                echo "<th>Email</th>";
            echo "</tr>";
    }
    while ($kayit = mysqli_fetch_array($veri)){
        echo "<tr>";
            echo "<td>". $kayit['id'] . "</td>";
            echo "<td>". $kayit['Markasi'] . "</td>" ;
            echo "<td>". $kayit['Urun_adi'] . "</td>" ;
            echo "<td>". $kayit['Stok']. "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($veri);
} else {
    echo "Kayıt Bulunamadı";
}

mysqli_close($baglanti);





?>