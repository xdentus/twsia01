<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>conditionals | PHP</title>
</head>

<body>
    <?php
    $losowa = rand(1, 30);
    $miesiac = rand(1, 15);
    $wiek = rand(0, 100);
    $plusy = rand(0, 10);
    ?>
    <h2 style="text-align: center; color: darkorchid;"> <?php echo $losowa ?></h2>
    <?php if ($losowa >= 20) : ?>
        <h4 style="text-align: center; color: magenta;">Wylosowana liczba jest wieksza lub rowna 20 </h4>
    <?php endif; ?>
    <?php if ($losowa % 2 == 0) : ?>
        <h4 style="text-align: center; color: navy;">Liczba jest parzysta</h4>
    <?php else : ?>
        <h4 style="text-align: center; color: navy;">Liczba nie jest parzysta</h4>
    <?php endif; ?>
    <?php if ($losowa <= 10) : ?>
        <h4 style="text-align: center; color: deeppink;">Pierwsza dziesiątka</h4>
    <?php elseif ($losowa > 10 && $losowa <= 20) : ?>
        <h4 style="text-align: center; color: deeppink;">Druga dziesiątka</h4>
    <?php else : ?>
        <h4 style="text-align: center; color: deeppink;">Trzecia dziesiątka</h4>
    <?php endif; ?>

    <h1 style="border: 4px solid violet"> <?= $miesiac ?> </h1>
    <h3 style="border-top: 2px dashed pink; border-bottom: 2px dashed pink; text-align: center; font-family: cursive;">
        <?php
        switch ($miesiac) {
            case 1:
            case 2:
            case 3:
                echo "I kwartał";
                break;
            case 4:
            case 5:
            case 6:
                echo "II kwartał";
                break;
            case 7:
            case 8:
            case 9:
                echo "III kwartał";
                break;
            case 10:
            case 11:
            case 12:
                echo "IV kwartał";
                break;
            default:
                echo "Błędny numer miesiąca";
                break;
        }
        ?>
    </h3>

    <h1 style="border: 2px solid black">
        <?php
        echo "Mam " . $wiek . " lat";
        ?>
    </h1>
    <h2 style="border: 2px dotted navy">
        <?php
        if ($wiek < 18) {
            echo "Jeszcze nie możesz głosować";
        } elseif ($wiek < 21) {
            echo "Możesz tylko głosować";
        } elseif ($wiek < 30) {
            echo "Możesz głosować i kandydować do Sejmu";
        } elseif ($wiek < 35) {
            echo "Możesz głosować i kandydować do Sejmu i Senatu";
        } elseif ($wiek >= 35) {
            echo "Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta";
        }
        ?>
    </h2>
    <pre>
        <?php
        echo $plusy;

        switch ($plusy) {
            case 1:
                echo "+";
                break;
            case 2:
                echo "++";
                break;
            case 3:
                echo "+++";
                break;
            case 4:
                echo "++++";
                break;
            case 5:
                echo "+++++";
                break;
            case 6:
                echo "++++++";
                break;
            case 7:
                echo "+++++++";
                break;
            case 8:
                echo "++++++++";
                break;
            case 9:
                echo "+++++++++";
                break;
            default:
                echo "Wartość jest poza zakresem <0, 10>";
                break;
        }
        // if ($plusy > 0 &&  $plusy < 10) {
        //     for ($i = 0; $i < $plusy; $i++) {
        //         echo "+";
        //     }
        // } else {
        //     echo " Wartość jest poza zakresem <0, 10>";
        // }
        ?>
    </pre>
</body>

</html>