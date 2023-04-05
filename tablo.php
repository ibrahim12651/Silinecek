<?php


include("ayar.php");

$sorgu = "SELECT * FROM urunler";

if($veri=mysqli_query($baglanti,$sorgu)){
    if(mysqli_num_rows($veri) > 0){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>URUN_ID</th>";
                echo "<th>URUN_ADI</th>";
                echo "<th>MARKASI</th>";
                echo "<th>MODELI</th>";
                echo "<th>FIYATI</th>";
                echo "<th>STOK</th>";
            echo "</tr>";
    }
    while($kayit = mysqli_fetch_array($veri)){
        echo "<tr>";
            echo "<td>".$kayit["URUN_ID"]."</td>"; 
            echo "<td>".$kayit["URUN_ADI"]."</td>";
            echo "<td>".$kayit["MARKASI"]."</td>";
            echo "<td>".$kayit["MODELI"]."</td>";
            echo "<td>".$kayit["FIYATI"]."</td>";
            echo "<td>".$kayit["STOK"]."</td>";
        echo "</tr>";
    }
    mysqli_free_result($veri);
}else{
    echo "Bağlantı Olumlu değil..";
}
mysqli_close($baglanti);





?>
