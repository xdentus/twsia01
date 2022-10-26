<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops | PHP</title>
</head>

<body>
    <ol style="margin-left: 40px; list-style: upper-roman">
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "<li> To jest $i element tej listy </li>";
        }
        ?>
    </ol>
    <hr>
    <table style="border-collapse: collapse; ">
        <tr>
            <?php $chars = str_split("Witaj swiecie!");
            foreach ($chars as $char) {
                echo "<td style='border: 1px dotted blue; padding: 15px'>$char</td>";
            } ?>
        </tr>
    </table>
    <hr>
    <table style="border-collapse: collapse;">
        <?php
        $n = 1;
        while ($n <= 5) {
            echo "<tr><td style='border: 1px solid gray; background-color: lightgray; padding: 10px;'>To jest wiersz numer $n</tr></td>";
            $n++;
        }
        ?>
    </table>
    <hr>
    <table>
        <tr>
            <?php
            $x = 1;
            do {
                echo "<td style='background-color: greenyellow; border: 1px solid lawngreen; padding: 10px;'>To jest kolumna numer $x </td>";
                $x++;
            } while ($x <= 5);
            ?>
        </tr>
    </table>
</body>

</html>