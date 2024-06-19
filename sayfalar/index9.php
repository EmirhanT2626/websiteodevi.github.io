<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php
    /*$adet = 10;

    for ($i = 1; $i <= $adet; $i++) {
        echo "Merhaba ";
    }
    echo "<br>";

    $i = 1;
    while ($i <= $adet) {
        echo "Merhaba ";
        $i++;
    }
    echo "<br>";
    $i = 1;
    do{
        echo "Merhaba ";
        $i++;
    } while ($i <= $adet);

    echo "<br>"; echo "<br>"; echo "<br>";
*/
    ?>

    <center>
        <form action="index9.php" method="get">
            <table cellpadding=5 cellspacing=5>
                <tr>
                    <td>Sayı 1 (satır sayısı): </td>
                    <td><input type="number" name="sayi1" id=""></td>
                </tr>

                <tr>
                    <td>Sayı 2 (sutun sayısı): </td>
                    <td><input type="number" name="sayi2" id=""></td>
                </tr>
                <tr>
                    <td>İşlem : </td>
                    <td>
                        <select name="islem" id="">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Hesapla"> <input type="reset" value="Reset"></td>

                </tr>
            </table>
        </form>

        <?php
        $s1 = $_GET["sayi1"];
        $s2 = $_GET["sayi2"];
        $is = $_GET["islem"];

        switch ($is) {
            case "+":
                $s3 = $s1 + $s2;
                break;
            case "*":
                $s3 = $s1 * $s2;
                break;
            case "-":
                $s3 = $s1 - $s2;
                break;
            case "/":
                $s3 = $s1 / $s2;
                break;
            case "%":
                $s3 = $s1 % $s2;
                break;
        }

        print ("<h1>$s1 $is $s2 = $s3</h1>");

        echo "<table border=\"1\"  class=\"table table-success\">";
        for ($i = 1; $i <= $s1; $i += 1) {
            echo "  <tr>";
            for ($j = 1; $j <= $s2; $j += 1) {
                $r=rand(0,255);
                $g=rand(0,255);
                $b=rand(0,255);
                echo " <td style=\"background-color: rgb($r,$g,$b);\">$i - $j</td>";
            }
           echo " </tr>";
        }
        echo " </table>";
        ?>


        <table class="table table-success table-striped-columns">
        <tr>
               <td>ddd</td>
               <td>ddd</td>
               <td>ddd</td>
               <td>ddd</td>
            </tr>           <tr>
               <td>ddd</td>
               <td>ddd</td>
               <td>ddd</td>
               <td>ddd</td>
            </tr>           <tr>
               <td >ddd</td>
               <td>ddd</td>
               <td>ddd</td>
               <td>ddd</td>
            </tr>
        </table>



    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>