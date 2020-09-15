<?php
/*
* Datum på svenska
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
    <title>Datum på Svenska</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        $datum = date("1 y F");
        echo "<p>$datum</p>";

        //byta till svenska 
        setlocale(LC_ALL, "sv_SE.utf8");

        //översätt datumet till svenska

        $svensktDatum = strftime("%A %y %B");
        echo "<p>Dagens datum på svenska är $svensktDatum</p>";
        ?>
    </div>
</body>
</html>