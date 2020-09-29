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
            <label for="name">Namn 1</label>
            <input id="name" class="form-control" type="text" name="name[]" required>
            <label for="name">Namn 2</label>
            <input id="name" class="form-control" type="text" name="name[]" required>
            <label for="name">Namn 3</label>
            <input id="name" class="form-control" type="text" name="name[]" required>
            <label for="name">Namn 4</label>
            <input id="name" class="form-control" type="text" name="name[]" required>
            <label for="name">Namn 5</label>
            <input id="name" class="form-control" type="text" name="name[]" required>

           
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>

        <?php
        // Finns data?
        if (isset($_POST["name"])) {

            // Ta emot data från formuläret
            $name = $_POST["name"];
            //för att debugga
            var_dump($name);
           
            //sortera i alfabetisk ordning
            sort($name);
            //skriv ut alla namn, en per rad
            foreach ($name as $namnet) {
              echo "<p>$namnet</p>";
            }



        
    }
        ?>
    </div>
</body>
</html>