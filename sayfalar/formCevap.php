<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Forma Cevap Sayfası</h1>
<?php

$sayi1 = $_GET["birincisayi"];
$sayi2 = $_GET["ikincisayi"];

echo "$sayi1<sup>$sayi2</sup> =";
echo $sayi1**$sayi2;
    
?>

</body>
</html>