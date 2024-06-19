<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php
$satir = 10; // Satır sayısı
$sutun = 5; // Sütun sayısı

echo "<table border='1'>"; // Tablo başlangıcı
for($i = 0; $i < $satir; $i++) {
echo "<tr>"; // Yeni satır
for($j = 0; $j < $sutun; $j++) {
echo "<td>" . (($i * $sutun) + $j + 1) . "</td>"; // Hücre içeriği
}
echo "</tr>"; // Satır sonu
}
echo "</table>"; // Tablo sonu
?>


</body>
</html>