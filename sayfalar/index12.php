<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

 function satirYaz($satir)
 {
    echo "<pre>";
    print_r($satir);
    echo "</pre>";
 }


 $server="localhost";
 $user="root";
 $pass="";
 $db="odev";

 $con = mysqli_connect($server,$user,$pass,$db);

 if($con)
{
    /* echo "bağlantı başarıyla sağlandı"; */
    $sql = "select * from tablo1";
    $sonuc = mysqli_query($con,$sql);
    while ($satir = mysqli_fetch_array($sonuc))
    {
        satirYaz($satir);
    }

}
 else
{
    echo mysqli_connect_error();
}

 mysqli_close($con);

    ?>
</body>
</html>