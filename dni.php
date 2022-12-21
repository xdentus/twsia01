<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
        }

        td {
            padding: 20px;
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $tydzien = array(
        1 => "pon",
        2 => "wto",
        3 => "śro",
        4 => "czw",
        5 => "pią",
        6 => "sob",
        7 => "nie"
    );
    ?>
    <table>
        <tr>
            <?php
            foreach ($tydzien as $key => $dzien) {
                if ($key % 2 == 0) {
                    echo "<td style = 'background-color: cyan'> $dzien </td>";
                } else {
                    echo "<td> $dzien </td>";
                }
            }
            ?>
        </tr>
    </table>
    <hr>
    <table>
        <caption>
            <?php
            $iloscDni = date("t");
            echo $iloscDni;
            ?>
        </caption>
        <?php
        for ($i = 1; $i <= $iloscDni; $i++) {
            if ($i % 7 == 1) {
                echo "<tr>";
            }
            echo "<td> $i </td>";
            if ($i % 7 == 0) {
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>