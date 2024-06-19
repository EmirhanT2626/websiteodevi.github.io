<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="get">
    <input type="text" placeholder="Vize Notunuz" name="Vize">
    <input type="text" placeholder="Final Notunuz" name="Final">
    <input type="text" placeholder="Ödev Notunuz" name="Ödev">
    <input type="submit" value="Hesapla">
</form>
<?php
$vize=$_GET["vize"];
$final=$_GET["final"];
$odev=$_GET["odev"];

$sonuc=($vize*30/100)+($final*50/100)+($odev*20/100);
if ($sonuc<40 and $final<50)
{
    print("FF");
}
elseif($sonuc<46 and $sonuc<50)
{
    print("DD");
}
elseif($sonuc<50 and $sonuc<55)
{
    print("DC");
}
elseif($sonuc<55 and $sonuc<65)
{
    print("CC");
}
elseif($sonuc<65 and $sonuc<72)
{
    print("CB");
}
elseif($sonuc<72 and $sonuc<80)
{
    print("BB");
}
elseif($sonuc<80 and $sonuc<90)
{
    print("BA");
}
elseif($sonuc<90 and $sonuc<100)
{
    print("AA");
}

switch ($durum) {
    case "FF";
    $mesaj="Kaldınız";
    break;
    case "DD";
    $mesaj="Notunuz Çok Düşük";
    break;
     case "DC";
    $mesaj="Notunuz Düşük";
    break;
    case "DC";
    $mesaj="Notunuz Düşük";
    break;
    case "CC";
    $mesaj="Ortalama";
    break;
    case "CB";
    $mesaj="Ortalama Üstü";
    break;
    case "BB";
    $mesaj="İyi";
    break;
    case "BA";
    $mesaj="Çok İyi";
    break;
    case "AA";
    $mesaj="Pekiyi";
    break;
    default;
}
    ?>
    
</body>
</html>