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

 <?php

 $id = $_GET["id"];
 $sql = "DELETE FROM tablo1 WHERE id = $id";
 $sonuc = mysqli_query($con, $sql);

 if ($sonuc)
 echo "sildim";
 else 
 echo "SİLME HATASI";

?>

</body>
</html>