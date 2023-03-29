<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>

    <style>
        .required:after {
            content: "*";
            color: red;
        }

        .required {
            color: red;
        }

        .error {
            color: red;
        }

        label {
            display: flex;
        }
    </style>
</head>

<body>
    <?php
    $miasto = $miasto_error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["login"])) {
        $miasto = $_POST["miasto"];
    } else {

        $miasto_error = "musisz uzupelic";
    }
    $checked = (!empty($_POST["miasto"]) && in_array($miasto, $_POST['miasto'])) ? "checked" : "";
    ?>
    <form action="./test.php" method="post">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["miasto"])) { ?>
            <p>Wybierz miasto/miasta: <span class="required"></span> <span class="error">Proszę wybrać miasto</span></p>
            <input type="checkbox" name="miasto[]" id="warszawa">
            <label for="warszawa">Warszawa</label><br>
            <input type="checkbox" name="miasto[]" id="poznan">
            <label for="poznan">Poznań</label><br>
            <input type="checkbox" name="miasto[]" id="gdansk">
            <label for="gdansk">Gdańsk</label><br>
            <input type="checkbox" name="miasto[]" id="szczecin">
            <label for="szczecin">Szczecin</label>
        <?php } else {
            implode(", ", $_POST['miasto']);
        } ?>

        <!-- <p>Wybierz miasto/miasta: <span class="required"></span></p>
        <input type="checkbox" name="miasto" id="warszawa">
        <label for="warszawa">Warszawa</label>
        <input type="checkbox" name="miasto" id="poznan">
        <label for="poznan">Poznań</label><br>
        <input type="checkbox" name="miasto" id="gdansk">
        <label for="gdansk">Gdańsk</label><br>
        <input type="checkbox" name="miasto" id="szczecin">
        <label for="szczecin">Szczecin</label> -->

        <input type="submit" value="Submit">
    </form>
</body>

</html>