<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

  $Sayı1=$_POST[""];
  $Sayı2=$_POST[""];



    ?>
    
    <input type="text" placeholder="Sayı1" id="Sayı1"> <br>
    <input type="text" placeholder="Sayı2" id="Sayı2"> <br>

    <label for="selectID">İşlem Seçiniz</label><br>
    <select name="language" id="selectID">
    <option value="Topla">Topla +</option>
    <option value="Çıkar">Çıkar -</option>
    <option value="Çarp">Çarp *</option>
    <option value="Böl">Böl /</option>
    
    <table>


    <tr>
     <td><input type="button" value="Hesapla"></td>
     <td><input type="button" value="Reset"></td>
    </tr>
    
    

    </table>



</body>
</html>