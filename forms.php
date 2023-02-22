<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms | PHP</title>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: start;
            flex-direction: column;
            gap: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .element {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .results {
            display: flex;
            flex-direction: column;
            width: 500px;
        }

        hr {
            width: 100%;
        }

        fieldset {
            width: 300px;
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <form method="post" action="forms.php">
        <div class="spaces element">
            <label for="spaces">Enter text with spaces</label>
            <input type="text" name="spaces" id="spaces">
        </div>
        <div class="backslash element">
            <label for="backslash">Enter text with backslash</label>
            <input type="text" name="backslash" id="backslash">
        </div>
        <div class="tag element">
            <label for="tag">Enter HTML Tag</label>
            <input type="text" name="tag" id="tag">
        </div>
        <input type="submit" value="submit">
    </form>

    <?php
    if ($_POST) {
        $spaces = $_POST['spaces'];
        $backslash = $_POST['backslash'];
        $tag = $_POST['tag'];
        echo "<div class='results'>";

        echo "<div class='element>";
        var_dump($spaces);
        echo "<br>";
        var_dump(trim($spaces));
        echo "<br>";
        echo "</div>";

        echo "<div class='element'>";
        var_dump($backslash);
        echo "<br>";
        var_dump(stripslashes($backslash));
        echo "<br>";
        echo "</div>";

        echo "<div class='element'>";
        var_dump($tag);
        echo "<br>";
        var_dump(htmlspecialchars($tag));
        echo "</div>";
        echo "</div>";
    }
    ?>
    <hr>
    <form>
        <fieldset>
            <legend>Roczniki</legend>
            <?php
            for ($i = 2010; $i <= 2025; $i++) {
                echo "<input type='radio' name='button' id='button$i'><label for='button$i`'> $i </label>" . "<br>";
            }
            ?>
        </fieldset>
    </form>
    <hr>
    <?php
    $tablica = array(
        1 => "Styczeń",
        2 => "Luty",
        3 => "Marzec",
        4 => "Kwiecień",
        5 => "Maj",
        6 => "Czerwiec",
        7 => "Lipiec",
        8 => "Sierpień",
        9 => "Wrzesień",
        10 => "Październik",
        11 => "Listopad",
        12 => "Grudzień"
    )
    ?>
    <form>
        <select name="months" id="months">
            <?php
            foreach ($tablica as $month => $month_name) {
                if ($month == date("m")) {
                    echo "<option selected value='$month_name'>$month_name</option>";
                } else
                    echo "<option value='$month_name'>$month_name</option>";
            }
            ?>
        </select>
    </form>
    <hr>
</body>

</html>