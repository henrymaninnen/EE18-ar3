<?php
/*
* PHP version 7
* @category
* @author     Lucas <kruislo@hotmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tal till text</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css%22%3E
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>Hyra bil</h1>
        <form action="#" method="POST">
            <label for="lön1">Lön 1</label>
            <input type="lön1" name="lön1">
            <label for="lön2">Lön 2</label>
            <input type="lön2" name="lön2">
            <label for="lön3">Lön 3</label>
            <input type="lön3" name="lön3">
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        // Finns data?
        $lön1 = filter_input(INPUT_POST, "lön1", FILTER_SANITIZE_STRING);
        $lön2 = filter_input(INPUT_POST, "lön2", FILTER_SANITIZE_STRING);
        $lön3 = filter_input(INPUT_POST, "lön3", FILTER_SANITIZE_STRING);
        if ($lön1 && $lön2 && $lön3) {
        $totalLön = $lön1 + $lön2 + $lön3;
        $medellön = $totalLön / 3;
        echo "<p>Medellönen för dessa blir $medellön kr</p>";
        }

        ?>
    </div>
</body>
</html>