<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dates | PHP</title>
</head>
<body>
    <h3>Aktualna godzina</h3>
    <?php
        echo date("H:i:s");
    ?>
    <h3>Osiem godzin później</h3>
    <?php
        echo date("H:i:s", time() + 28800);
    ?>
    <hr>
    <?php
        $rozpoczecie = date("l", mktime(0, 0, 0, 9, 1, 2022));
        $dzien = date("z", mktime(0, 0, 0, 9, 1, 2022));
        echo "<p>Rozpoczęcie tego roku szkolnego odbyło się w $rozpoczecie i był to " . $dzien + 1 . " dzień roku</p>";
    ?>
    <hr>
    <?php
    $sylwester = date("N", strtotime("31 December 2023"));
    echo "<p>Najbliższy Sylwester odbędzie się w $sylwester. dniu tygodnia</p>"
    ?>
    <hr>
    <?php
        $months = array(
            1 => "stycznia",
            "lutego",
            "marca",
            "kwietnia",
            "maja",
            "czerwca",
            "lipca",
            "sierpnia",
            "września",
            "października",
            "listopada",
            "grudnia"
        );
        $days = array(
            1 => "poniedziałek",
            "wtorek",
            "środę",
            "czwartek",
            "piątek",
            "sobotę",
            "niedzielę"
        );

        $day = strtotime("18 June 2004");
        ?>
            <p>Urodziłem się
                <?=( date("N", $day) == 2 || date("N", $day) == 4) ? "we" : "w"?>
                <?= $days[date("N", $day)] ?>,
                <?= date("d", $day) ?>
                <?= $months[date("n", $day)]?>
                <?= date("Y", $day)?> roku
            </p>

</body>
</html>