<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function merhaba ()
    {
        echo "<h1>Merhaba</h1>";
        metinYaz("lorem ipsum sit dolor amet");
    }

    function metinYaz($metin)
    {
        echo "<br>" , $metin , "<br>";
    }

    function topla($a,$b)
    {
        $c=$a+$b;
        echo $c;
    }

    function topla2($a,$b)
    {
        $c=$a+$b;
        return $c;
    }

    echo "Merhaba<br>";
    echo "<br>";
    echo "deneme 1 2 3 <br>";

    topla (9,6);

    echo topla2(9,6);
    merhaba();
    merhaba();

    merhaba();

    metinYaz("Emirhan");



    function us1($a,$b)
{
print("girilen a sayısının b üssünün cevabı");

$snc=1;


for ($i=1; $i <=$b ; $i++) {
$snc*=$b;
}
print($snc);

}
function us2($a,$b)
{
print("girilen b sayısının a üssünün cevabı");

$snc=1;


for ($i=1; $i <=$a ; $i++) {
$snc*=$a;
}
print($snc);

}

us1(5,8);
us2(5,5);
çık2(10,2);
çık1(55,2);


function çık1($a,$b)
{
$snc=$a-$b;
print($snc);

}


function çık2($a,$b)
{
$snc=$b-$a;
print($snc);

}









function mukemmelSayi($sayi) {
    if ($sayi <= 1) {
      return false;
    }
  
    $toplam = 1;
    $karekok = sqrt($sayi);
  
    for ($i = 2; $i <= $karekok; $i++) {
      if ($sayi % $i == 0) {
        $toplam += $i;
        if ($sayi / $i != $i) {
          $toplam += $sayi / $i;
        }
      }
    }
  
    return $toplam == $sayi;
  }
  
  $girilenSayi = 6;
  
  if (mukemmelSayi($girilenSayi)) {
    echo $girilenSayi . " bir mükemmel sayıdır.";
  } else {
    echo $girilenSayi . " bir mükemmel sayı değildir.";
  }
  



    ?>
</body>
</html>