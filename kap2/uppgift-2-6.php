<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tempratur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $temperatur = $_POST["temperatur"];
    $omvandla = $_POST["omvandla"];

    if ($omvandla == "1") {
        $farenheit = $temperatur  * 9 / 5 + 32;
        echo "<p>$temperatur celsius motsvarar $farenheit farenheit</p>";
    } else {
        $celsius = ($temperatur - 32) * 5 / 9;
        echo "<p>$temperatur farenheit motsvarar $celsius farenheit</p>";
    }
    elseif ($omvandla == "3") {
        $kelvin = $celsius - 273;
        echo "<p>$c celsius motsvarar $kelvin K</p>";
    }


    ?>
</body>
</html>