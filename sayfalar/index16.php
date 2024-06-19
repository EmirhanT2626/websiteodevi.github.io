<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $arabalar = array("Honda", "Volvo", "BMW", "Toyota");
    echo "<hr>"; echo "<h3>dizi örnekleri</h3>";
    print ($arabalar)[2];

    $uretici = array ("Honda" => "Japonya", "Volvo" => "İsveç", "BMW" => "Almanya", "Toyota" => "Japonya");
    echo "<pre>"; print_r($uretici); echo "</pre>";
    print($uretici["BMW"]);
    
    $uretim = array(
"2005" => array ("Buğday" => 145, "Arpa" => 90, "Mısır" => 210, "Tütün" => 55),
"2006" => array ("Buğday" => 167, "Arpa" => 60, "Mısır" => 120, "Tütün" => 165),
"2007" => array ("Buğday" => 180, "Arpa" => 45, "Mısır" => 130, "Tütün" => 120),
"2008" => array ("Buğday" => 317, "Arpa" => 120, "Mısır" => 140, "Tütün" => 190),
"2009" => array ("Buğday" => 62, "Arpa" => 260, "Mısır" => 34, "Tütün" => 135),
    );
echo "<pre>";
print_r($uretim);
echo "</pre>"


    ?>
</body>
</html>