<?php
include("baglan.php");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

 $isim = $_GET["ad"];
 $soyisim = $_GET["soyadi"];
 $telefon = $_GET["tel"];

 $sql = "INSERT INTO tablo1 VALUES (NULL, '$isim', '$soyisim', '$telefon')";
 $sonuc = mysqli_query($con, $sql);

 if ($sonuc)
  echo "kaydettim";
 else
 echo "KAYIT HATASI";


    ?>
</body>
</html>