<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays | PHP</title>
</head>

<body>
    <pre>
        <?php
        $owoce = array_fill(8, 5, "mango");
        print_r($owoce);
        ?>
    </pre>
    <hr>
    <pre>
        <?php
        $parzyste = range(0, 12, 2);
        $dziesiatki = range(-10, 100, 10);
        $polowki = range(-5.5, 5.5, 0.5);
        $litery_od_em = range('m', 'u');
        $litery_wstecz = range('X', 'E');
        print_r($parzyste);
        print_r($dziesiatki);
        print_r($polowki);
        print_r($litery_od_em);
        print_r($litery_wstecz);
        ?>
    </pre>
    <hr>
    <pre>
        <?php
        $przedmiot = ["Tworzenie", "stron", "aplikacji", "internetowych"];
        list($n1, $n2, $n3, $n4) = $przedmiot;
        echo "$n1 $n2 i $n3 $n4";
        ?>
    </pre>
    <hr>
    <table style="width: 100%; border-collapse: collapse; background-color: aliceblue">
        <tr>
            <?php
            $liczby = range(0, 10);
            shuffle($liczby);
            foreach ($liczby as $liczba) {
                echo "<td style='border: 1px solid dodgerblue; padding: 10px; text-align: center;'>$liczba</td>";
            }
            ?>
        </tr>
    </table>
    <hr>
    <pre>
        <?php
        $numbers = array(rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99), rand(0, 99));
        rsort($numbers);
        foreach ($numbers as $number) {
            echo "$number, ";
        }
        ?>
    </pre>
    <hr>
    <pre>
    <?php
    $films = array(
        "Skazani na Shawshank" => "dramat",
        "Nietykalni" => "biograficzny",
        "Władca Pierścieni: Powrót Króla" => "fantasy",
        "Pulp Fiction" => "gangsterski",
        "Siedem" => "kryminał",
        "Podziemny krąg" => "thriller",
        "Django" => "western",
        "Król Lew" => "animacja",
        "Avengers: Wojna bez granic" => "akcja",
        "Dobry, zły i brzydki" => "western"
    );

    $asort_films = asort($films);
    $ksort_films = ksort($films);
    $arsort_films = arsort($films);
    $krsort_films = krsort($films);
    print_r($films);
    foreach ($films as $film => $film_value) {
        echo "$film $film_value" . "<br>";
    }
    // asort
    foreach ($asort_films as $afilm => $afilm_value) {
    }
    // ksort

    // arsort

    // krsort
    ?>
    </pre>
</body>

</html>