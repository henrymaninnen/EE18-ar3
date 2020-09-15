<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        // ta emot data från formuläret
        $anamn = $_POST["anamn"];
        $lösen = $_POST["lösen"];
        //kontrollera inloggning uppgiter
        if ($anamn == "henry" && $lösen == "hej") {
            echo "<div class=\"alert alert-success\" role=\"alert\">
            A simple success alert—check it out!
          </div>";
        } else {
            header("Location:exempel-3-1-a.php?fel=1");
        }
        
        ?>
    </div>
</body>
</html>