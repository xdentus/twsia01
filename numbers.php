<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="c-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numbers | PHP</title>
</head>

<body>
    <?php
    //variables
    $a = 1;
    $b = 5;
    $c = 1.5;
    $d = 5.5;

    //ints
    echo "Zmienna a ma wartosc {$a} a funkcja is__int zwraca dla niej wynik ";
    echo var_dump(is_int($a)) . "<br>";
    echo "Zmienna a ma wartosc {$a} a funkcja is_float zwraca dla niej wynik ";
    echo var_dump(is_float($a)) . "<br>";
    echo "Zmienna b ma wartosc {$b} a funkcja is_int zwraca dla niej wynik ";
    echo var_dump(is_int($b)) . "<br>";
    echo "Zmienna b ma wartosc {$b} a funkcja is_float zwraca dla niej wynik ";
    echo var_dump(is_float($b)) . "<br>";

    //floats
    echo "Zmienna c ma wartosc {$c} a funkcja is__int zwraca dla niej wynik ";
    echo var_dump(is_int($c)) . "<br>";
    echo "Zmienna c ma wartosc {$c} a funkcja is_float zwraca dla niej wynik ";
    echo var_dump(is_float($c)) . "<br>";
    echo "Zmienna y ma wartosc {$d} a funkcja is_int zwraca dla niej wynik ";
    echo var_dump(is_int($d)) . "<br>";
    echo "Zmienna y ma wartosc {$d} a funkcja is_float zwraca dla niej wynik ";
    echo var_dump(is_float($d)) . "<br>";

    //dodaj
    $dodaj = "59.85" + 100;
    echo "Zmienna dodaj ma wartosc {$dodaj} a funkcja is_numeric zwraca dla niej wynik ";
    echo var_dump(is_numeric($dodaj)) . "<br>";

    //constants
    echo "Stała PHP_INT_MAX ma wartość ";
    echo var_dump(PHP_INT_MAX) . "<br>";
    echo "Stała PHP_INT_MIN ma wartość ";
    echo var_dump(PHP_INT_MIN) . "<br>";
    echo "Stała PHP_INT_SIZE ma wartość ";
    echo var_dump(PHP_INT_SIZE) . "<br>";
    echo "Stała PHP_FLOAT_MAX ma wartość ";
    echo var_dump(PHP_FLOAT_MAX) . "<br>";
    echo "Stała PHP_FLOAT_MIN ma wartość ";
    echo var_dump(PHP_FLOAT_MIN) . "<br>";
    echo "Stała PHP_FLOAT_DIG ma wartość ";
    echo var_dump(PHP_FLOAT_DIG) . "<br>";
    echo "Stała PHP_FLOAT_EPSILON ma wartość ";
    echo var_dump(PHP_FLOAT_EPSILON) . "<br>";

    //dzialania
    $x = 5;
    $y = 15;
    echo "Wynik dodawania {$x} i {$y} wynosi " . ($x + $y) . "<br>";
    echo "Wynik odejmowania {$x} i {$y} wynosi " . ($x - $y) . "<br>";
    echo "Wynik mnozenia {$x} i {$y} wynosi " . ($x * $y) . "<br>";
    echo "Wynik dzielenia {$x} i {$y} wynosi " . ($x / $y) . "<br>";
    echo "Reszta z dzielenia liczb {$x} i {$y} wynosi " . ($x % $y) . "<br>";

    //pole
    $bokA = 4;
    $bokB = 35;
    echo "Obwod prostokata o wymiarach {$bokA} i {$bokB} wynosi " . (($bokA) * 2 + ($bokB) * 2) . "<br>";
    echo "Pole prostokata o wymiarach {$bokA} i {$bokB} wynosi " . ($bokA * $bokB) . "<br>";

    //funkcje
    echo abs(-15) . "<br>";
    echo min([0, 150, 30, 20, -8, -200]) . "<br>";
    echo max([0, 150, 30, 20, -8, -200]) . "<br>";
    echo pi() . "<br>";
    echo round(3.4) . "<br>";
    echo round(3.6) . "<br>";
    echo round(5.045, 2) . "<br>";
    echo round(5.055, 2) . "<br>";
    echo rand(900, 1000) . "<br>";
    echo sqrt(0) . "<br>";
    echo sqrt(64) . "<br>";
    echo sqrt(256) . "<br>";
    echo sqrt(65536) . "<br>";
    ?>
</body>

</html>