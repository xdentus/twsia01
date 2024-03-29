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

    ?>
    <!-- funkcje -->
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja abs dla liczby -15: <?php echo abs(-15); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja min dla zestawu liczb 0, 150, 30, 20, -8, -200: <?php echo min([0, 150, 30, 20, -8, -200]); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja max dla zestawu liczb 0, 150, 30, 20, -8, -200: <?php echo max([0, 150, 30, 20, -8, -200]); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja pi: <?php echo pi(); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja round dla liczby 3.4: <?php echo round(3.4); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja round dla liczby 3.6: <?php echo round(3.6);; ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja round z dokładnością do 2 miejsc po przecinku dla liczby 5.045: <?php echo round(5.045, 2); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja round z dokładnością do 2 miejsc po przecinku dla liczby 5.055: <?php echo round(5.055, 2); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja rand dla przedziału liczb 900-1000: <?php echo rand(900, 1000); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja sqrt dla liczby 0: <?php echo sqrt(0); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja sqrt dla liczby 64: <?php echo sqrt(64); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja sqrt dla liczby 256: <?php echo sqrt(256); ?> <br></p>
    <p style="color: aliceblue; background-color: darkblue; font-weight: bold;">funkcja sqrt dla liczby 65536: <?php echo sqrt(65536); ?> <br></p>
</body>

</html>