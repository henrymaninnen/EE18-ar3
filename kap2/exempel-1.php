<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kapitel 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
   
   // dagens datum/
    $idag = date("l");
    $dagensDatum = date("d");
    $månad = date("F");
    $dag = date("l");
    /* Idag är monday 14 semptember */
    echo "<p>Idag är $dag $dagensDatum $månad </p>";

    //hämta ut några server variabler

    echo "<p>$_SERVER[SERVER_ADDR]</p>";
    ?>
</body>
</html>
