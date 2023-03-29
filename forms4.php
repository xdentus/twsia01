<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms 4 | PHP</title>

    <style>
        .required:after {
            content: "*";
            color: red;
        }

        div {
            color: red;
        }

        fieldset {
            background: lightgreen;
            border: 2px solid green;
        }

        legend {
            border: 2px solid green;
            background: lightgreen;
            padding: 5px 10px;
        }

        .error {
            color: red;
        }

        .results {
            color: black;
        }
    </style>
</head>

<body>
    <?php
    $login = $login_error = "";
    $email = $email_error = "";
    $strona = $strona_error = "";
    $miasto = $miasto_error = "";
    $plec = $plec_error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["login"])) {
        $login = $_POST["login"];
    } else {

        $login_error = "musisz uzupelic";
    }
    ?>
    <form action="./forms4.php" method="post">
        <fieldset>
            <legend>Formularz z walidacją</legend>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["login"])) { ?>
                <label for="login">Login: &nbsp; <span class="required"></span> <span class="error"> Proszę podać login </span></label><br>
                <input type="text" name="login" id="login" placeholder="podaj login"><br><br>
            <?php } else {
                echo '<label for="login">Login: <span class="required"></span></label><br>
                <input type="text" name="login" id="login" placeholder="podaj login" value=' . $login . '><br><br>';
            } ?>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["email"])) { ?>
                <label for="email">Email: &nbsp; <span class="required"></span> <span class="error"> Proszę podać email </span></label><br>
                <input type="text" name="email" id="email" placeholder="podaj email"><br><br>
            <?php } else {
                echo '<label for="email">Email: <span class="required"></span></label><br>
                <input type="text" name="email" id="email" placeholder="podaj email" value=' . $email . '><br><br>';
            } ?>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["strona"])) { ?>
                <label for="strona">Strona internetowa: &nbsp; <span class="required"></span> <span class="error"> Proszę podać stronę internetową </span></label><br>
                <input type="text" name="strona" id="strona" placeholder="podaj stronę internetową"><br><br>
            <?php } else {
                echo '<label for="strona">Podaj stronę internetową: <span class="required"></span></label><br>
                <input type="text" name="strona" id="strona" placeholder="podaj stronę internetową" value=' . $strona . '><br><br>';
            } ?>
            <p>Wybierz miasto/miasta: <span class="required"></span></p>
            <input type="checkbox" name="miasto" id="warszawa">
            <label for="warszawa">Warszawa</label><br>
            <input type="checkbox" name="miasto" id="poznan">
            <label for="poznan">Poznań</label><br>
            <input type="checkbox" name="miasto" id="gdansk">
            <label for="gdansk">Gdańsk</label><br>
            <input type="checkbox" name="miasto" id="szczecin">
            <label for="szczecin">Szczecin</label>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["miasto"]))
                echo '<div>Proszę wybrać miasto.</div>';
            ?><br>
            <p>Wybierz jedną opcję: <span class="required"></span></p>
            <input type="radio" name="plec" id="kobieta">
            <label for="kobieta">kobieta</label><br>
            <input type="radio" name="plec" id="mezczyzna">
            <label for="mezczyzna">mężczyzna</label><br>
            <input type="radio" name="plec" id="brak">
            <label for="brak">nie chcę podawać</label><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["plec"]))
                echo '<div>Proszę wybrać płeć.</div>';
            ?><br>
            <input type="submit" value="Wyślij">
        </fieldset>
    </form>

    <div class="results">
        <?php
        foreach ($_POST as $key => $value)
            echo $key . '=' . $value . '<br>';
        ?>
    </div>
</body>

</html>