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
    $temp = $_POST["celsius"];
    $farenheit = $temp  * 9 / 5 + 32;
    echo "<p>$temp celsius motsvarar $farenheit farenheit</p>";
    ?>
</body>
</html>