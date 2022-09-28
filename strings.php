<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings | PHP</title>
</head>
<body>
    <?php
        define("dobra_rada", "bez chleba to sie nie najesz");
        echo dobra_rada."<br>";
        echo strlen(dobra_rada)."<br>";
        echo str_word_count(dobra_rada)."<br>";
        echo strrev(dobra_rada)."<br>";
        echo strpos(dobra_rada, "to")."<br>";
        echo str_replace("chleba", "mięsa", dobra_rada)."<br>";
        echo strtolower(dobra_rada)."<br>";
        echo strtoupper(dobra_rada)."<br>";
        echo ucwords(dobra_rada)."<br>";
        echo trim(dobra_rada)."<br>";
        echo strstr(dobra_rada, "nie")."<br>";
        echo substr(dobra_rada, 10, 5)."<br>";
        echo str_pad(dobra_rada, 37, " -_-", STR_PAD_BOTH)."<br>";
    ?>
</body>
</html>