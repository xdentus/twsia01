<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms2 | PHP</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

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

        fieldset {
            width: 50vw;
            border: 2px solid black;
        }

        legend {
            margin-left: 15px;
        }

        i {
            color: red;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>lorem50</legend>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo " 
            <h1>Oto wpisany tekst: </h1> <br>
            <i>" . $_POST['lorem'] . "</i>";
        } else {
        ?>
            <form method='POST' action='./forms2.php'>
                <textarea name='lorem' id='lorem' cols='50' rows='5'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nihil velit, minima, officia sed inventore voluptas, quod culpa eligendi error officiis sunt adipisci placeat. Consequuntur dolorum esse voluptatibus sunt odio rerum eius accusamus quasi, numquam, ut in ex! Quos itaque voluptate blanditiis illo accusamus ullam sapiente, hic nobis ipsa voluptatem?
                </textarea>
                <input type='submit' value='Wyślij'>
            </form>
        <?php }
        ?>
    </fieldset>
</body>

</html>