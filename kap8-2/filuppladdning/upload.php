<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ladda upp filer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <?php
        if (isset($_POST["submit"])) {

            // Ta emot filen
            $file = $_FILES["file"];
           var_dump($file);

            // Information om filen
            $fileName = $file["name"];
            $fileSize = $file["size"];
            $fileType = $file["type"];
            $fileTempName = $file["tmp_name"];
            $error = $file["error"];

            // Tillåtma filtyper 
            $allowed = ["jpeg", "png", "gif"];

            // Bilden filtyp
            $delar = explode("/", $fileType);
            $imageType = $delar[1];

            if (in_array($imageType, $allowed)) {

                if ($error === 0) {
                    // Är filen för stor?
                    if ($fileSize <= 200000) {
                        // Skapa ett unikt filnamn
                        $fileNameNew = uniqid("",true) . ".$imageType";

                        // Var filen ska hamna 
                        $fileDestination = "./uppladdat/$fileNameNew";

                        // Äntligen ! Flytta filen in i mappen
                        move_uploaded_file($fileTempName, $fileDestination);

                        var_dump($fileTempName, $fileDestination);
                    } else {
                    echo "<p>Något gick fel</p>";
                }
            } else {
                echo "<p>Filtypen är inte tillåten</p>";
            }
        }
    } 
        ?>
    </div>
</body>
</html>
