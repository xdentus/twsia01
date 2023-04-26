<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $conn = mysqli_connect('127.0.0.1', 'igorozi', '123123', 'igorozi');
    if (!$conn) {
        die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
            . mysqli_connect_error());
    }

    $query = 'SELECT tytul, imie, nazwisko FROM ksiazki';
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p>Książka ' . '<i> ' . $row['tytul'] . '</i>' . ' została napisana przez ' . '<b>' . $row['imie']  . ' ' . $row['nazwisko'] . '</b>'  . '. </p>';
        }
    } else {
        echo 'brak danych';
    }
    ?>

    <hr>

    <?php

    $conn1 = mysqli_connect('127.0.0.1', 'igorozi', '123123', 'igorozi');
    if (!$conn1) {
        die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: '
            . mysqli_connect_error());
    }

    $query1 = 'SELECT nazwa FROM stanowiska';
    $result1 = mysqli_query($conn1, $query1);
    if (mysqli_num_rows($result1) > 0) {
        echo '<table>';
        echo '<tr><th>Nazwa stanowiska</th><th>Liczba liter</th></tr>';
        while ($row = mysqli_fetch_assoc($result1)) {
            echo '<tr><td>' . $row['nazwa'] . '</td><td>'
                . strlen($row['nazwa']) . '</td></tr>';
        }
        echo '</table>';
    } else {
        echo 'brak danych';
    }
    mysqli_close($conn1)
    ?>
</body>

</html>