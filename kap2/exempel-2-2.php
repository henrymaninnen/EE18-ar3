<!-- Använd formuläret från uppgift 1.2. Skapa ett skript som tar emot data från detta formulär: Skriptet ska skriva ut "Namn:" följt av namnet på personen, "epostadress:" och personens epostadress och till sist "Vi kommer att kontakta dig inom snarast per " följt av antingen epost eller telefon beroende på vad användaren valt.
 -->

 <!DOCTYPE html>
 <html lang="sv">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
     <?php
       $namn = $_POST["namn"];
       $epost = $_POST["epost"];
       $tel = $_POST["tel"];
       $kontakt = $_POST["roll"];
       
   
       //räkna ut summan

   
       //skriv ut resultatet
      echo "<p>Namn: $namn</p>";
      echo "<p>Epost: $epost</p>";
      echo "<p>Tel: $tel</p>";


      var_dump($kontakt);  

      if ($kontakt == "epost") {
          
      }
      else {
          
      }

     ?>
 </body>
 </html>