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
        <h1>ålder</h1>
        <form action="#" method="POST">
            <label for="input">Hur gammal är du</label>
            <input type="input" name="input">>
            <button type="submit" class="btn btn-primary">Skicka</button>


        </form>
        <?php
        // Finns data?
        $input = filter_input(INPUT_POST, "input", FILTER_SANITIZE_STRING);

        if ($input >= 16 && $input <= 19) {
            echo "<p>Du får vara med</p>";
        } else {
            echo "<p>Man måste vara mellan 16-19 år var att delta</p>";
        }
      ?>
    </div>
</body>
</html>