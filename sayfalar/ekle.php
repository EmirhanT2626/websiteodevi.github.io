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
    <br><br>

    <a href="listele.php">Listele</a><br>
    <a href="ekle.php">Ekle</a><br>

    <br>

    <form action="kaydet.php" method="get">
        adı:<input type="text" name="ad" id=""><br>
        soyadı:<input type="text" name="soyadi" id=""><br>
        tel:<input type="tel" name="tel"><br>

        <input type="submit" value="Kaydet">

 </form>
    
</body>
</html>