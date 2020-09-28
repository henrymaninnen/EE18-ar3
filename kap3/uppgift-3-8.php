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
    <title>Nationella provet i matte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Kontaktformulär</h1>
        <form action="#" method="POST">
            <label for="namn">Ange Provpoäng</label>
            <input id="namn" class="form-control" type="text" name="poäng" required>
            <button type="submit" class="btn btn-primary">Visa betyg</button>
        </form>

        <?php
        // Finns data? (närman kommer tillbaka till sidan)
        if (isset($_POST["poäng"])) {

            // Ta emot data från formuläret
            $poäng = $_POST["poäng"];

            if ($poäng < 15) {
                echo "<p>Du fick F i betyg</p>";
            }
            elseif ($poäng >= 15 && $poäng <= 24) {
                echo "<p>Du fick E i betyg</p>";
            }
            elseif ($poäng >= 25 && $poäng <= 34) {
                echo "<p>Du fick D i betyg</p>";
            }
            elseif ($poäng >= 35 && $poäng <= 44) {
                echo "<p>Du fick C i betyg</p>";
            }
            elseif ($poäng >= 45 && $poäng <= 54) {
                echo "<p>Du fick B i betyg</p>";
            }
            elseif ($poäng >= 55) {
                echo "<p>Du fick A i betyg</p>";
            }

            switch ($poäng) {
                case 'value':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }

        }
        ?>
    </div>
</body>
</html>