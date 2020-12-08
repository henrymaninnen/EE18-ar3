<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Henry Cantwell <henry.cantwell@elev.ga.ntig.se>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lånekalkylator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <label for="name">vilket land som vann fotbolls-VM i USA för herrar år 1994. </label>
            <input id="name" class="form-control" type="text" name="input" required>
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>

        <?php
           $input = filter_input(INPUT_POST, "input", FILTER_SANITIZE_STRING);

        if ($input == "Sverige" ) {
         echo "<p>Rätt svar</p>";
        } else {
            echo "<p>Fel svar </p>";
        }
        ?>
    </div>
</body>
</html>