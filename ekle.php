<html>
    <body>
        <?php
            include("ayar.php");
            $id = $_POST["id"];
            $marka = $_POST["marka"];
            $urun_adi = $_POST["urun_adi"];
            $stok = $_POST["stok"];

            $sorgu = "INSERT INTO malzemeler (Markasi,Urun_adi,Stok) values('$marka','$urun_adi',$stok)";

            $eklendi = mysqli_query($baglanti,$sorgu);        
        
        
        ?>
    </body>
</html>