<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regex</title>
    <link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Skanna katalog</h1>
        <?php
        // Välj katalog
        $katalog = "/var/www";

        //skriv ut villken katalog det  är som skannas

        echo "<p>katalogen: $katalog</p>";

        //Skanna av katalog

        $resultat = scandir($katalog);

       // var_dump($resultat);

       //loopa igenom arrayen

       foreach ($resultat as $objekt) {
           //skippa . och ..
           if ($objekt == "." || $objekt == "..") {
              continue;
           }
           //skippa underkatalogen
           if (is_dir($katalog/$objekt)) {
               continue;
           }
           
           $info = pathinfo($objekt);
           

           echo "<p>$objekt</p>";
       }
        ?>
    </div>
</body>
</html>