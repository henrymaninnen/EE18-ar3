<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slumpa fram sex ordspråk</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="ordsprak.css">
</head>
<body>
    <?php
    // Skapa en array med tio ordspråk
    $ordsprak[] = "Gammal är äldst";
    $ordsprak[] = "Liten tuva välter ofta stort lass";
    $ordsprak[] = "Lika barn leka bäst.";
    $ordsprak[] = "Mota Olle i grind";
    $ordsprak[] = "Många bäckar små gör en stor";
    $ordsprak[] = "Morgonstund har guld i mund";
    $ordsprak[] = "Man ser inte skogen för alla träd / Man ser inte skogen för bara träd";
    $ordsprak[] = "När krubban är tom bits hästarna.";
    $ordsprak[] = "När katten är borta dansar råttorna på bordet.";
    $ordsprak[] = "Nära skjuter ingen hare.";

    $tagna = [];

    for ($i = 0; $i < 6; $i++) {
        $index = rand(0, 9);
    echo "<p>$index</p>";

    //Skriv ut ordspråket om det inte redan är taget
    if (!in_array($index, $tagna)) {

       echo "<p>$ordsprak[$index]</p>";
       $tagna[] = $index;

    } else {
        $i--;
    }

    print_r($tagna);
    }

    
    

    // Slumpa fram ett tal mellan 0 och 9 med funktionen rand()
    ?>
</body>
</html>