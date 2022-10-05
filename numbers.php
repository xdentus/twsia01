<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numbers | PHP</title>
</head>

<body>
    <?php
    //variables
    $a = 1;
    $b = 5;
    $x = 1.5;
    $y = 5.5;
    $dodaj = "59.85" + 100;

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
    echo "Zmienna x ma wartosc {$x} a funkcja is__int zwraca dla niej wynik ";
    echo var_dump(is_int($x)) . "<br>";
    echo "Zmienna x ma wartosc {$x} a funkcja is_float zwraca dla niej wynik ";
    echo var_dump(is_float($x)) . "<br>";
    echo "Zmienna y ma wartosc {$y} a funkcja is_int zwraca dla niej wynik ";
    echo var_dump(is_int($y)) . "<br>";
    echo "Zmienna y ma wartosc {$y} a funkcja is_float zwraca dla niej wynik ";
    echo var_dump(is_float($y)) . "<br>";

    //dodaj
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
    ?>
</body>

</html>