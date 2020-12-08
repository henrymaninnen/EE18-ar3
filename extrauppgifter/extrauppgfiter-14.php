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
            <label for="name">hur många dagar vill du hyra bilen</label>
            <input id="name" class="form-control" type="text" name="input1" required>
            <label for="name">hur många kilometer vill du köra</label>
            <input id="name" class="form-control" type="text" name="input2" required>
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>

        <?php
        $input1 = filter_input(INPUT_POST, "input1", FILTER_SANITIZE_STRING);
        $input2 = filter_input(INPUT_POST, "input2", FILTER_SANITIZE_STRING);

    if ($input1 && $input2) {
        $kmpris = $input2 * 5;
        $dagspris = $input1 * 400;
       $slutavgift = 500 + $dagspris + $kmpris;
       echo "<p>$slutavgift</p>";
    }
        

        ?>
    </div>
</body>
</html>