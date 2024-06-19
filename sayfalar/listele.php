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
    
 $sql = "select * from tablo1";
 $sonuc = mysqli_query($con, $sql);
 echo "<table width=%50 border=1>";
 echo "<tr>
 <th>Adı</th>
 <th>Soyadı</th>
 <th>Tel</th>
 <th></th>
 </tr>";
 while ($satir = mysqli_fetch_array($sonuc)) {
    $id = $satir[0];
    $isim = $satir["isim"];
    $soyisim = $satir["soyisim"];
    $telefon = $satir["telefon"];
    echo "<tr>
    <td>$isim </td>
    <td>$soyisim</td>
    <td>$telefon</td>
    <td> <a href=sil.php?id=$id>SİL</a></td>
    </tr>"; 
 }
 echo "</table>"

    ?>
</body>
</html>