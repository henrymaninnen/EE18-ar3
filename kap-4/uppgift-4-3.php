<?php
/*
Skriv en webbapp där användaren matar in ett tal 1-9 och sedan returnerar det svenska namnet för talet (ett, två, tre osv). Om talet är större än 9 så returnerar du i stället talet som vanligt (tex. 11). 

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
    <title>Tal till text</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <label for="name">Ange ett tal</label>
            <input id="name" class="form-control" type="text" name="tal" required>

            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>

        <?php
        // Finns data?
        
        if (isset($_POST["tal"])) {

            // Ta emot data från formuläret
            $tal = $_POST["tal"];
            //för att debugga
            $siffror = ["Noll", "Ett", "Två", "Tre", "Fyra", "Fem", "Sex"];

            

            if ($tal < 10) {
                echo "<p>$siffror[$tal]</p>"; 
                
            } else {
                echo "<p>$tal</p>";
            }
        
    }
    
        ?>
    </div>
</body>
</html>