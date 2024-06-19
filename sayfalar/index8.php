<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hesap Makinesi</title>
</head>
<body>

<form action="" method="post">
<table>
<tr>
<td>Sayı1:</td>
<td><input type="text" name="s1"></td>
</tr>
<tr>
<td>Sayı2:</td>
<td><input type="text" name="s2"></td>
</tr>
<tr>
<td>İşlem:</td>
<td>
<select name="islem">
<option value="topla">Topla +</option>
<option value="cikar">Çıkar -</option>
<option value="carp">Çarp x</option>
<option value="bol">Böl /</option>
</select>
</td>
</tr>
<tr>
<td><input type="submit" name="hesapla" value="Hesapla"></td>
<td><input type="reset" value="Sıfırla"></td>
</tr>
</table>
</form>


<?php
if(isset($_POST['hesapla'])) {
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$islem = $_POST['islem'];
$sonuc = 0;

if($islem == "topla") {
$sonuc = $s1 + $s2;
} else if($islem == "cikar") {
$sonuc = $s1 - $s2;
} else if($islem == "carp") {
$sonuc = $s1 * $s2;
} else if($islem == "bol") {
$sonuc = $s1 / $s2;
}

echo "Sonuç: " . $sonuc;
}s

print ("<h1>$1 $is $s2 = $3</h1>");

echo "<table border=\1\" class=\"taable table-success\">";
for ($i = 1; $i <= $s1; $i += 1) {
    echo "  <tr>";
    for ($j =1; $ <= $s2; $j += 1) {
        $r=rand(0,255);
        $g=rand(0,255);
        $b=rand(0,255);
        echo " <td style=\"background-color: rgb($r,$g,$b);\"$i - $j</td>";
    }

?>

</body>
</html>