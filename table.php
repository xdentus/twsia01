<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabliczka mnozenia | PHP</title>
    <style>
        table {
            font-family: Verdana;
            font-size: large;
            border: 1px solid black;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px dashed black;
            padding: 5px;
        }

        th {
            background-color: burlywood;
        }

        td {
            background-color: beige;
        }
    </style>
</head>

<body>
    <table>
        <?php
        for ($i = 0; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= 10; $j++) {
                if (($i == 0) && ($j == 0)) echo "<th>x</th>";
                elseif ($i == 0) echo "<th> $j </th>";
                elseif ($j == 0) echo "<th> $i </th>";
                else echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>