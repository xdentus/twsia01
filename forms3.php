<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms3 | PHP</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        fieldset {
            border: 3px solid green;
            padding: 15px;
            width: 25vw;
        }

        legend {
            margin-left: 20px;
        }

        input {
            margin-left: 15px;
            margin-right: 5px;
        }

        p {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1> KUPIE MEFEDRON </h1>
    <form action="./forms3.php" method="POST">
        <fieldset>
            <legend>Liczby</legend>
            <?php
            foreach (range(0, 100, 10) as $number) {
                $checked = (!empty($_POST["numbers"]) && in_array($number, $_POST['numbers'])) ? "checked" : "";
                echo "<input type='checkbox' name='numbers[]' id='number$number' value='$number' $checked>";
                echo "<label for='number$number'>$number</label>";
            }
            echo "<br>";
            echo "<p>";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST['numbers'])) {
                    echo "Te liczby zostały wybrane: " . implode(", ", $_POST['numbers']) . ".";
                } else {
                    echo "Zadna liczba nie zostala wybrana";
                }
            }
            echo "</p>";
            ?>
            <br><br>
            <input type="submit" value="Wybierz">
        </fieldset>
    </form>
</body>

</html>